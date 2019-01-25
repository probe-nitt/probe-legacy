<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;
use Mail;
use Session;
use Log;
use Exception;

use App\Models\Users;
use App\Models\WorkshopRegs;
use App\Models\EventRegs;
use App\Models\Workshops;
use App\Models\Events;
use App\Models\BullseyeUsers;
use App\Models\BullseyeData;

use GuzzleHttp\Client;

class UserController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'      => 'required',
            'email'     => 'required',
            'password'  => 'required',
            'gender'    => 'required',
            'yos'       => 'required',
            'dept'      => 'required',
            'cn'        => 'required',
            'phoneno'   => 'required|digits:10'
        ]);

        $name     = $request->input('name');
        $email    = $request->input('email');
        $password = $request->input('password');
        $gender   = $request->input('gender');
        $yos      = $request->input('yos');
        $dept     = $request->input('dept');
        $cn       = $request->input('cn');
        $phoneno  = $request->input('phoneno');
        $acco  = (int)$request->input('acco');

        $checkmail = Users::where('email','=',$email)->first();

        if($checkmail){
            Session::flash('message', 'Email already registered');
            return redirect('/register');
        }

        $checkph = Users::where('phone_no','=',$phoneno)->first();

        if($checkph){
            Session::flash('message', 'Phone number already registered');
            return redirect('/register');
        }

        $user = new Users;
        $user->name = $name;
        $user->email = $email;
        $user->password = md5($password);
        $user->gender = $gender;
        $user->department = $dept;
        $user->college_name = $cn;
        $user->phone_no = $phoneno; 
        $user->yos = $yos;
        $user->acco_needed = $acco;

        $user->save();

        $user = Users::where('email','=',$email)->first();

        $id = "PROBE19".str_pad($user->id, 4, '0', STR_PAD_LEFT);

        $user->probe_id = $id;

        $confirmhash = md5($id."arut");

        $user->mail_confirmation_hash = $confirmhash;       

        $user->save();

        $url = "https://".env("HOST_ADDR", "probe.org.in")."/activate?confirm=".$confirmhash;

        $data = array(
            'name' => $name, 'pid' => $id, 'url' => $url,
        );
    
        Mail::send('activate', $data, function ($message) use ($email) {
    
            $message->from('noreply@probe.org.in', 'PROBE, NIT Trichy');
    
            $message->to($email)->subject("PROBE'19 Registration");
    
        });

        Session::flash('message', 'You have successfully registered for Probe 2019. Please check your mail for instructions on account activation and activate your account before logging in');
        return redirect('/login');
    }

    public function confirm_mail(Request $request)
    {
        $confirmhash = $request->input('confirm');

        $user = Users::where('mail_confirmation_hash','=', $confirmhash)->first();
        $user->mail_verified = 1;

        $user->save();

        Session::flash('message', 'You have successfully activated your account');
        return redirect('/login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'     => 'required',
            'password'  => 'required'
        ]);

        $email    = $request->input('email');
        $password = $request->input('password');

        $user = Users::where('email','=', $email)->first();

        if(!$user){
            Session::flash('message', 'Email not registered');
            return redirect('/login');
        }
        else if(md5($password)!=$user->password){
            Session::flash('message', 'Invalid email/password');
            return redirect('/login');
        }
        else{
            if(!$user->mail_verified){
                Session::flash('message', 'Account not activated. Check your mail to activate your account');
                return redirect('/login');
            }
            Session::set('email',$email);
            Session::set('name',$user->name);
            Session::set('pid',$user->probe_id);
            //code for dashboard
        } 

        return redirect('/');
    }

    public function logout(Request $request)
    {
        Session::flush();
        Session::flash('message', 'You have been logged out');
        return redirect('/login');
    }

    public function event_reg(Request $request)
    {
        $event = $request->input('event');

        $pid = Session::get('pid');
        $uid = (int)ltrim($pid,"PROBE19");

        $w = Events::where('name','=',$event)->first();

        $wid = $w->id;
        $mc = $w->max_count;

        $isregistered = EventRegs::where('event_id', '=', $wid)
                                    ->where(function($query) use($uid)
                                    {
                                        $query->where('participant1',$uid)
                                            ->orwhere('participant2',$uid)
                                            ->orwhere('participant3',$uid);
                                    })->first();

        
        $regbool = 0;
        $p1=NULL;
        $p2=NULL;
        $p3=NULL;

        if($isregistered){
            $regbool = 1;
        }

        return view('eventreg',['regbool' => $regbool, 'event' => $event, 'mc' => $mc]);

    }


    public function workshop_reg(Request $request)
    {
        $workshop = $request->input('workshop');

        $pid = Session::get('pid');
        $uid = (int)ltrim($pid,"PROBE19");

        $w = Workshops::where('name','=',$workshop)->first();

        $wid = $w->id;
        $mc = $w->max_count;
        $ec = $w->event_code;

        $isregistered = WorkshopRegs::where('workshop_id', '=', $wid)
                                    ->where(function($query) use($uid)
                                    {
                                        $query->where('participant1',$uid)
                                            ->orwhere('participant2',$uid)
                                            ->orwhere('participant3',$uid);
                                    })->first();

        
        $ispaid = 0;
        $regbool = 0;
        $p1=NULL;
        $p2=NULL;
        $p3=NULL;

        if($isregistered){
            $regbool = 1;
            if($isregistered->paid){
                $ispaid = 1;
            }
            if($isregistered->participant1)
                $p1 = "PROBE19".str_pad($isregistered->participant1, 4, '0', STR_PAD_LEFT);
            if($isregistered->participant2)
                $p2 = "PROBE19".str_pad($isregistered->participant2, 4, '0', STR_PAD_LEFT);
            if($isregistered->participant3)
                $p3 = "PROBE19".str_pad($isregistered->participant3, 4, '0', STR_PAD_LEFT);
        }

        return view('workshopreg',['regbool' => $regbool, 'ispaid' => $ispaid, 'workshop' => $workshop, 'p1' => $p1, 'p2' => $p2, 'p3' => $p3, 'mc' => $mc, 'ec' => $ec]);

    }


    public function regevent(Request $request)
    {
        $event = $request->input('event');

        $p1 = $request->input('p1');
        $p2 = $request->input('p2');
        $p3 = $request->input('p3');

        $lid = Users::orderBy('created_at', 'desc')->first()->id;

        $p1 = (int)ltrim($p1,"PROBE19");
        if($p1>$lid){
            Session::flash('message', 'One or more of the provided Probe IDs are not valid');
            return redirect('/events/register/'.'?event='.$event);
        }
        if($p2!=''){
            $p2 = (int)ltrim($p2,"PROBE19");
            if($p2>$lid){
                Session::flash('message', 'One or more of the provided Probe IDs are not valid');
                return redirect('/events/register/'.'?event='.$event);
            }
        }
        if($p3!=''){
            $p3 = (int)ltrim($p3,"PROBE19");
            if($p3>$lid){
                Session::flash('message', 'One or more of the provided Probe IDs are not valid');
                return redirect('/events/register/'.'?event='.$event);
            }
        }

        $wid = Events::where('name',$event)->first()->id;

        $isregistered_1 = EventRegs::where('event_id', '=', $wid)
                                    ->where(function($query) use($p1)
                                    {
                                        $query->where('participant1',$p1)
                                            ->orwhere('participant2',$p1)
                                            ->orwhere('participant3',$p1);
                                    });
        
        $isregistered_2 = EventRegs::where('event_id', '=', $wid)
                                    ->where(function($query) use($p2)
                                    {
                                        $query->where('participant1',$p2)
                                            ->orwhere('participant2',$p2)
                                            ->orwhere('participant3',$p2);
                                    })->first();

        $isregistered_3 = EventRegs::where('event_id', '=', $wid)
                                    ->where(function($query) use($p3)
                                    {
                                        $query->where('participant1',$p3)
                                            ->orwhere('participant2',$p3)
                                            ->orwhere('participant3',$p3);
                                    })->first();
        
        
        if($p2=="" || $p2==null){
            $isregistered_2 = null;
        }

        if($p3=="" || $p3==null){
            $isregistered_3 = null;
        }

        if($p1=="" || $p1==null){
            $isregistered_1 = null;
        }
        


        if((json_encode($isregistered_1)!="{}" && !is_null($isregistered_1)) || (json_encode($isregistered_2)!="{}" && !is_null($isregistered_2)) || (json_encode($isregistered_3)!="{}" && !is_null($isregistered_3))){

            Session::flash('message', 'One or more of the provided Probe IDs already registered for this event');
            return redirect('/events/register/'.'?event='.$event);
        }

        $reg = new EventRegs;
        $reg->participant1 = $p1;
        if($p2!='')
            $reg->participant2 = $p2;
        if($p3!='')
            $reg->participant3 = $p3;
        $reg->event_id = $wid;
        $reg->save();

        return redirect('/events');

    }


    public function regworkshop(Request $request)
    {
        $workshop = $request->input('workshop');

        $p1 = $request->input('p1');
        $p2 = $request->input('p2');
        $p3 = $request->input('p3');

        $lid = Users::orderBy('created_at', 'desc')->first()->id;

        $p1 = (int)ltrim($p1,"PROBE19");
        if($p1>$lid){
            Session::flash('message', 'One or more of the provided Probe IDs are not valid');
            return redirect('/workshops/register/'.'?workshop='.$workshop);
        }
        if($p2!=''){
            $p2 = (int)ltrim($p2,"PROBE19");
            if($p2>$lid){
                Session::flash('message', 'One or more of the provided Probe IDs are not valid');
                return redirect('/workshops/register/'.'?workshop='.$workshop);
            }
        }
        if($p3!=''){
            $p3 = (int)ltrim($p3,"PROBE19");
            if($p3>$lid){
                Session::flash('message', 'One or more of the provided Probe IDs are not valid');
                return redirect('/workshops/register/'.'?workshop='.$workshop);
            }
        }

        $wid = Workshops::where('name',$workshop)->first()->id;

        $isregistered_1 = WorkshopRegs::where('workshop_id', '=', $wid)
                                    ->where(function($query) use($p1)
                                    {
                                        $query->where('participant1',$p1)
                                            ->orwhere('participant2',$p1)
                                            ->orwhere('participant3',$p1);
                                    });
        
        $isregistered_2 = WorkshopRegs::where('workshop_id', '=', $wid)
                                    ->where(function($query) use($p2)
                                    {
                                        $query->where('participant1',$p2)
                                            ->orwhere('participant2',$p2)
                                            ->orwhere('participant3',$p2);
                                    })->first();

        $isregistered_3 = WorkshopRegs::where('workshop_id', '=', $wid)
                                    ->where(function($query) use($p3)
                                    {
                                        $query->where('participant1',$p3)
                                            ->orwhere('participant2',$p3)
                                            ->orwhere('participant3',$p3);
                                    })->first();
        
        
        
        if($p2=="" || $p2==null){
            $isregistered_2 = null;
        }

        if($p3=="" || $p3==null){
            $isregistered_3 = null;
        }

        if($p1=="" || $p1==null){
            $isregistered_1 = null;
        }
        


        if((json_encode($isregistered_1)!="{}" && !is_null($isregistered_1)) || (json_encode($isregistered_2)!="{}" && !is_null($isregistered_2)) || (json_encode($isregistered_3)!="{}" && !is_null($isregistered_3))){

            Session::flash('message', 'One or more of the provided Probe IDs already registered for this workshop');
            return redirect('/workshops/register/'.'?workshop='.$workshop);
        }

        $reg = new WorkshopRegs;
        $reg->participant1 = $p1;
        if($p2!='')
            $reg->participant2 = $p2;
        if($p3!='')
            $reg->participant3 = $p3;
        $reg->workshop_id = $wid;
        $reg->save();

        // Mail::send('verifymail', $data, function ($message) use ($email) {
    
        //     $message->from('no-reply@probe.org.in', 'PROBE NIT TRICHY');
    
        //     $message->to($email)->subject('PROBE 2019 Registration');
    
        // });

        return redirect('/workshops/register/'.'?workshop='.$workshop);

    }


    public function tswh(Request $request)
    {
        try{

            $data = json_decode($request->input('data'));
            Log::info($request->input('data'));
            
            if(is_array($data)){

                foreach($data as $registrant){

                
                    $email = $registrant->userEmailId;
                    
                    $workshop = $registrant->ticketName;
                    $wid = Workshops::where('name',$workshop)->first();
                    $wid = $wid->id;
                    $user = Users::where('email','=',$email)->first();
                    $user_id = $user->id;
                    $reg = WorkshopRegs::where('workshop_id', '=', $wid)
                                                ->where(function($query) use($user_id)
                                                {
                                                    $query->where('participant1',$user_id)
                                                        ->orwhere('participant2',$user_id)
                                                        ->orwhere('participant3',$user_id);
                                                })->first();
                    $reg->paid = 1;
                    $reg->save();
                    
                }
            }
            else{
                
                $registrant = $data;
                $email = $registrant->userEmailId;
                $workshop = $registrant->ticketName;
                $wid = Workshops::where('name',$workshop)->first();
                $wid = $wid->id;
                $user = Users::where('email','=',$email)->first();
                $user_id = $user->id;
                $reg = WorkshopRegs::where('workshop_id', '=', $wid)
                                            ->where(function($query) use($user_id)
                                            {
                                                $query->where('participant1',$user_id)
                                                    ->orwhere('participant2',$user_id)
                                                    ->orwhere('participant3',$user_id);
                                            })->first();
                $reg->paid = 1;
                $reg->save();
            }
            return;
        } catch(\Throwable $e) {    
            Log::error("Hook failed".$e->getMessage()." ".$e->getLine());
            return;
        }   
    }

    public function beq(Request $request){

        $email = Session::get('email');
        $bu = Users::where('email','=',$email)->first();
        $id = $bu->id;
        $user = BullseyeUsers::where('participant','=',$id)->first();

        if(!$user){
            $bd = new BullseyeUsers;
            $bd->participant = $id;
            $bd->cl = 1;
            $bd->complete = 0;
            $bd->save();
        }

        $user = BullseyeUsers::where('participant','=',$id)->first();

        $title = "Bullseye | Probe 2019";
        $comment = "";
        $cb = 0;
        if($user->complete){
            Session::flash('message', 'More levels coming soon.');  
            $cb = 1; 
        }

        $cl = $user->cl;

        $cr = BullseyeData::where('level','=',$cl)->first();

        if($cr->clue1){
            $title = $cr->clue1;
        }
        if($cr->clue2){
            $comment = $cr->clue2;
        }
        $img1 = $cr->img1;
        $img2 = $cr->img2;
        $img3 = $cr->img3;
        $img4 = $cr->img4;

        return view('be',['title' => $title, 'comment' => $comment, 'img1' => $img1, 'img2' => $img2, 'img3' => $img3, 'img4' => $img4, 'cl' => $cl, 'cb' => $cb]);


    }

    public function bea(Request $request){

        $ans = $request->input('answer');

        $email = Session::get('email');
        $bu = Users::where('email','=',$email)->first();
        $id = $bu->id;

        $user = BullseyeUsers::where('participant','=',$id)->first();

        if($user->complete){
            return redirect('/bullseye-event');
        }

        $cl = $user->cl;

        $data = BullseyeData::where('level', '=', $cl)->first();

        if($data->answer==$ans){
            $user->cl=$cl+1;
            if($user->cl==32){
                $user->cl = $cl;
                $user->complete = 1;
                Session::flash('message', 'You have completed Bullseye. Thank you for playing');
            }
            $user->save();  
        }
        else{
            Session::flash('message', 'Oops! Wrong answer');
        }

        return redirect('/bullseye-event');

    }

    public function bel(Request $request){
    
        $ranklist = BullseyeUsers::orderBy('cl', 'desc')
                                ->leftJoin('users', 'users.id', '=', 'bullseye_users.participant')
                                ->select(['users.id','users.name','bullseye_users.cl'])
                                ->orderBy('bullseye_users.created_at')
                                ->orderBy('bullseye_users.updated_at')
                                ->get();


        $frl = BullseyeUsers::orderBy('cl', 'desc')
                                ->leftJoin('users', 'users.id', '=', 'bullseye_users.participant')
                                ->select(['users.id','users.name','bullseye_users.cl'])
                                ->orderBy('bullseye_users.created_at')
                                ->orderBy('bullseye_users.updated_at')
                                ->limit(10)
                                ->get();

        $rank = null;

        $email = Session::get('email');

        $userdetail = null;

        $uf=0;

        if($email){
            $id = Users::where('email','=',$email)->first();
            $id = $id->id;
            $count = 1;
            foreach ($ranklist as $user){
                echo $user->id;
                if($user->id == $id){
                    $rank = $count;
                    $userdetail = $user;
                    if($count>10){
                        $uf=1;
                    }
                    break;
                }
                $count++;
            }
        }

        return view('bel',['frl' => $frl, 'rank' => $rank, '$userank' => $rank, 'user' => $userdetail, 'uf' => $uf]);

        

    }


    public function se(Request $request){

        $emails = Users::where('mail_verified','=',0)->pluck('email')->toArray();

        echo $emails;
    
        foreach ($emails as $mail){
            $user = Users::where('email','=',$mail)->first();
    
            $id = "PROBE19".str_pad($user->id, 4, '0', STR_PAD_LEFT);
    
            $user->probe_id = $id;
    
            $confirmhash = md5($id."arut");
    
            $user->mail_confirmation_hash = $confirmhash;       
    
            $user->save();
    
            $url = "https://".env("HOST_ADDR", "probe.org.in")."/activate?confirm=".$confirmhash;
    
            $data = array(
                'name' => $name, 'pid' => $id, 'url' => $url,
            );
        
            Mail::send('activate', $data, function ($message) use ($email) {
        
                $message->from('noreply@probe.org.in', 'PROBE, NIT Trichy');
        
                $message->to($email)->subject("PROBE'19 Registration");
        
            });
        }

        return;
    }

}
