<?php

namespace App\Http\Controllers;
require '../vendor/autoload.php';
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;
use Mail;
use Session;
use Log;
use Exception;
use View;
use PHPMailer\PHPMailer\PHPMailer;

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
        ]);

        $name     = $request->input('name');
        $email    = $request->input('email');
        $password = $request->input('password');
        $gender   = $request->input('gender');
        $yos      = $request->input('yos');
        $dept     = $request->input('dept');
        $cn       = $request->input('cn');
        $phoneno  = $request->input('phoneno');
        $referral = $request->input('referral');
        $acco  = $request->input('acco');

        $checkmail = Users::where('email','=',$email)->first();

        /*
        if($gender == 'female' && $acco == 1){
            Session::flash('message', 'Sorry, no more accomodation available.');
            return redirect('/register');
        }*/

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
        $user->yos = (int)$yos[0];
        $user->referral = $referral;
        $user->acco_needed = $acco == 'on'? 1 : 0;
        $user->mail_verified = 1;

        $user->save();

        $user = Users::where('email','=',$email)->first();

        $id = "PROBE20".str_pad($user->id, 4, '0', STR_PAD_LEFT);

        $user->probe_id = $id;

        $confirmhash = md5($id."arut");

        $user->mail_confirmation_hash = $confirmhash;       

        $user->save();

        $url = env("HOST_ADDR", "https://probe.org.in")."/activate?confirm=".$confirmhash;

        $data = array(
            'name' => $name, 'pid' => $id, 'url' => $url,
        );

        $content = View::make('activate', $data)->render();

        $this->sendMailSG($email, "PROBE'22 Registration", $content);

        Session::flash('message', 'You have successfully registered for Probe 2022. Please check your mail for instructions on account activation and activate your account before logging in');
        return redirect('/login');
    }

    public function test_mail(Request $request, $slug)
    {
        $url = 'https://probe.org.in';

        $data = array(
            'name' => $slug, 'pid' => $slug, 'url' => $url,
        );

        $content = View::make('activate', $data)->render();

        $this->sendMailSG("shohanduttaroy99@gmail.com", "PROBE'22 Registration", $content);
        Session::flash('message', 'Sent email');
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
        //$uid = (int)ltrim($pid,"PROBE20");
        if($pid)
            $uid = (int)explode('PROBE20',$pid)[1];
        else
            $uid = -1;

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
        $p4=NULL;
        $p5=NULL;
        $p6=NULL;

        if($isregistered){
            $regbool = 1;
        }

        return view('eventreg',['regbool' => $regbool, 'event' => $event, 'mc' => $mc]);

    }


    public function workshop_reg(Request $request)
    {
        $workshop = $request->input('workshop');

        $pid = Session::get('pid');
        //$uid = (int)ltrim($pid,"PROBE20");
        if($pid)
            $uid = (int)explode('PROBE20',$pid)[1];
        else
            $uid = -1;

        $w = Workshops::where('name','=',$workshop)->first();

        $wid = $w->id;
        $workshopCode = $w->event_code;
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
                $p1 = "PROBE20".str_pad($isregistered->participant1, 4, '0', STR_PAD_LEFT);
            if($isregistered->participant2)
                $p2 = "PROBE20".str_pad($isregistered->participant2, 4, '0', STR_PAD_LEFT);
            if($isregistered->participant3)
                $p3 = "PROBE20".str_pad($isregistered->participant3, 4, '0', STR_PAD_LEFT);
        }

        return view('workshopreg',['regbool' => $regbool, 'ispaid' => $ispaid, 'workshop' => $workshop, 'p1' => $p1, 'p2' => $p2, 'p3' => $p3, 'mc' => $mc, 'ec' => $ec, 'workshopCode' => $workshopCode]);

    }


    public function regevent(Request $request)
    {
        $event = $request->input('event');

        $p1 = $request->input('p1');
        $p2 = $request->input('p2');
        $p3 = $request->input('p3');
        $teamname = $request->input('teamname');

        if (!$teamname) {
            $teamname = $p1;
        }

        $p1 = preg_replace('/\s+/', '', $p1);
        $p2 = preg_replace('/\s+/', '', $p2);
        $p3 = preg_replace('/\s+/', '', $p3);

        $email = "";

        /*
        $array[$p1] = 1;
        $array[$p2] = 1;
        $array[$p3] = 1;
        $array[$p4] = 1;
        $array[$p5] = 1;
        $array[$p6] = 1;
        
        if(sizeof($array)<6) {
            Session::flash('message', 'One or more of the provided Probe IDs are duplicate');
            return redirect('/events/register/'.'?event='.$event); 
        }
        */

        /*
        if( ($p2!='' && !isset(explode('PROBE20',$p2)[1])) || ($p3!='' && !isset(explode('PROBE20',$p3)[1]))) {
            Session::flash('message', 'One or more of the provided Probe IDs are invalid');
            return redirect('/events/register/'.'?event='.$event); 
        }*/

        /*
        if($event == "Qualcomm Makeathon") {
            /*if($p2 == '' || $p3 == '' || $p4 == '' || $p5 == '' || $p6 == ''){
                Session::flash('message', 'One or more of the provided Probe IDs are missing');
                return redirect('/events/register/'.'?event='.$event); 
            }*//*else if( !isset(explode('PROBE20',$p2)[1]) || !isset(explode('PROBE20',$p3)[1]) || !isset(explode('PROBE20',$p4)[1]) || !isset(explode('PROBE20',$p5)[1]) || !isset(explode('PROBE20',$p6)[1])) {
                Session::flash('message', 'One or more of the provided Probe IDs are invalid');
                return redirect('/events/register/'.'?event='.$event); 
            }
        }*/
		

        $lid = Users::orderBy('id', 'desc')->first()->id;

        //$p1 = (int)ltrim($p1,"PROBE20");
        $p1 = (int)explode('PROBE20',$p1)[1];

        if($p1>$lid){
            Session::flash('message', 'One or more of the provided Probe IDs are not valid');
            return redirect('/events/register/'.'?event='.$event);
        } else {
            $email = Users::where('id', '=', $p1)->first()->email;
        }
        if($p2!=''){
            //$p2 = (int)ltrim($p2,"PROBE20");
            $p2 = (int)explode('PROBE20',$p2)[1];
            if($p2>$lid){
                Session::flash('message', 'One or more of the provided Probe IDs are not valid');
                return redirect('/events/register/'.'?event='.$event);
            }
        }
        if($p3!=''){
            //$p3 = (int)ltrim($p3,"PROBE20");
            $p3 = (int)explode('PROBE20',$p3)[1];
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
        
        if((json_encode($isregistered_1)!="{}" && !is_null($isregistered_1)) || (json_encode($isregistered_2)!="{}" && !is_null($isregistered_2)) || (json_encode($isregistered_3)!="{}" && !is_null($isregistered_3)) ){

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
        $reg->team_name = $teamname;
        $reg->save();

        Session::flash('message', 'Successfully Registered!');
        return redirect('/events/'.$event);

    }

    private function register_for_workshop($p1, $p2, $p3, $workshop) {

        $p1 = preg_replace('/\s+/', '', $p1);
        $p2 = preg_replace('/\s+/', '', $p2);
        $p3 = preg_replace('/\s+/', '', $p3);

        if( ($p2!='' && !isset(explode('PROBE20',$p2)[1])) || ($p3!='' && !isset(explode('PROBE20',$p3)[1]))) {
            Session::flash('message', 'One or more of the provided Probe IDs are invalid');
            return;
        }

        $lid = Users::orderBy('id', 'desc')->first()->id;

        //$p1 = (int)ltrim($p1,"PROBE20");
        $p1 = (int)explode('PROBE20',$p1)[1];
        if($p1>$lid){
            Session::flash('message', 'One or more of the provided Probe IDs are not valid');
            return;
        }
        if($p2!=''){
            //$p2 = (int)ltrim($p2,"PROBE20");
            $p2 = (int)explode('PROBE20',$p2)[1];
            if($p2>$lid){
                Session::flash('message', 'One or more of the provided Probe IDs are not valid');
                return;
            }
        }
        if($p3!=''){
            //$p3 = (int)ltrim($p3,"PROBE20");
            $p3 = (int)explode('PROBE20',$p3)[1];
            if($p3>$lid){
                Session::flash('message', 'One or more of the provided Probe IDs are not valid');
                return;
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
            return;
        }

        try {
            $reg = new WorkshopRegs;
            $reg->participant1 = $p1;
            if($p2!='')
                $reg->participant2 = $p2;
            if($p3!='')
                $reg->participant3 = $p3;
            $reg->workshop_id = $wid;
            $reg->save();
            return $reg;
        } catch (Exception $e) {
            return;
        }
    }

    public function regworkshop(Request $request)
    {
        
        $workshop = $request->input('workshop');

        $p1 = $request->input('p1');
        $p2 = $request->input('p2');
        $p3 = $request->input('p3');
        $this->register_for_workshop($p1, $p2, $p3, $workshop);
        return redirect('/workshops/register/'.'?workshop='.$workshop);

    }

    private function confirm_payment($workshop, $email) {
        $workshop = Workshops::where('event_code',$workshop)->first();
        $user = Users::where('email','=',$email)->first();
        $user_id = $user->id;
        $user_probe_id = $user->probe_id;
        $reg = WorkshopRegs::where('workshop_id', '=', $workshop->id)
                                    ->where(function($query) use($user_id)
                                    {
                                        $query->where('participant1',$user_id)
                                            ->orwhere('participant2',$user_id)
                                            ->orwhere('participant3',$user_id);
                                    })->first();
        if (!$reg) {
            $reg = $this->register_for_workshop($user_probe_id, "", "", $workshop->name);
        }
        if (!reg) {
            return;
        }
        $reg->paid = 1;
        $reg->save();
    }


    public function tswh(Request $request)
    {
        try{
            Log::info($request);
            Log::info($request->getContent());
            Log::info($request->get('data'));
            $json_string = urldecode($request->get('data'));
            Log::info(urldecode($request->get('data')));
            $data = json_decode(urldecode($request->get('data')));
            // $data = $data->data;   
            if(is_array($data)){
                Log::info("Multiple Coming");

                foreach($data as $ticket){
                    $email = $ticket->userEmailId;
                    $workshopCode = $ticket->eventCode;
                    
                    Log::info($workshopCode);
                    if ($workshopCode == 'compiler-design-enabling-image-processing-and-machine-learning-antenna-design-and-testing-113121') {
                        $this->confirm_payment('antenna-design-and-testing-workshop', $email);
                        $this->confirm_payment('compiler-design-enabling-image-processing-and-machine-learning-qualcomm-231412', $email);
                    } else if ($workshopCode == 'compiler-design-enabling-image-processing-and-machine-learning-video-call-interface-011030') {
                        $this->confirm_payment('compiler-design-enabling-image-processing-and-machine-learning-qualcomm-231412', $email);
                        $this->confirm_payment('video-call-interface-workshop', $email);
                    } else if ($workshopCode == 'antenna-design-and-testing-video-call-interface-304100') {
                        $this->confirm_payment('antenna-design-and-testing-workshop', $email);
                        $this->confirm_payment('video-call-interface-workshop', $email);
                    } else if ($workshopCode == 'compiler-design-enabling-image-processing-and-ml-antenna-design-and-testing-video-call-interface-124220') {
                        $this->confirm_payment('antenna-design-and-testing-workshop', $email);
                        $this->confirm_payment('video-call-interface-workshop', $email);
                        $this->confirm_payment('video-call-interface-workshop', $email);
                    } else {
                        $this->confirm_payment($workshopCode, $email);
                    }
                }
            }
            else{
                Log::info("Single Coming");
                $ticket = $data;
                $email = $ticket->userEmailId;
                $workshopCode = $ticket->eventCode;
                if ($workshopCode == 'compiler-design-enabling-image-processing-and-machine-learning-antenna-design-and-testing-113121') {
                    $this->confirm_payment('antenna-design-and-testing-workshop', $email);
                    $this->confirm_payment('compiler-design-enabling-image-processing-and-machine-learning-qualcomm-231412', $email);
                } else if ($workshopCode == 'compiler-design-enabling-image-processing-and-machine-learning-video-call-interface-011030') {
                    $this->confirm_payment('compiler-design-enabling-image-processing-and-machine-learning-qualcomm-231412', $email);
                    $this->confirm_payment('video-call-interface-workshop', $email);
                } else if ($workshopCode == 'antenna-design-and-testing-video-call-interface-304100') {
                    $this->confirm_payment('antenna-design-and-testing-workshop', $email);
                    $this->confirm_payment('video-call-interface-workshop', $email);
                } else if ($workshopCode == 'compiler-design-enabling-image-processing-and-ml-antenna-design-and-testing-video-call-interface-124220') {
                    $this->confirm_payment('antenna-design-and-testing-workshop', $email);
                    $this->confirm_payment('video-call-interface-workshop', $email);
                    $this->confirm_payment('video-call-interface-workshop', $email);
                } else {
                    $this->confirm_payment($workshopCode, $email);
                }
            }
            return response('Success', 200)
                        ->header('Content-Type', 'text/plain');
        } catch(\Throwable $e) {    
            error_log($e->getMessage()." ".$e->getLine());
            Log::error("Hook failed".$e->getMessage()." ".$e->getLine());
            return response('Failure', 400)
                ->header('Content-Type', 'text/plain');
        }   
    }

    public function beq(Request $request, $slug){
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

        $title = "Bullseye | Probe 2022";
        $comment = "";
        $extraComment = "";
        $cb = 0;
        if($user->complete){
            $cb = 1; 
        }

        $cl = $user->cl;

        $cr = BullseyeData::where('level','=',$cl)->first(); // user's level
        $sr = BullseyeData::where('answer','=',$slug)->first(); // slug's level
        if (!$sr) {
            return redirect('/bullseye-event/begin');
        }
        if ($cl > $sr->level + 1) {
            $newcr = BullseyeData::where('level','=',$cl - 1)->first(); // user's level
            return redirect('/bullseye-event/'.$newcr->answer);
        }
        if($cr->clue1){
            $title = $cr->clue1;
        }
        if($cr->clue2){
            $comment = $cr->clue2;
        }
        if($cr->clue3){
            $extraComment = $cr->clue3;
        }
        $img1 = $cr->img1;
        $img2 = $cr->img2;
        $img3 = $cr->img3;
        $img4 = $cr->img4;

        return view('2022/bullseye/'.$slug ,['title' => $title, 'comment' => $comment, 'extraComment' => $extraComment, 'img1' => $img1, 'img2' => $img2, 'img3' => $img3, 'img4' => $img4, 'cl' => $cl, 'cb' => $cb]);


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
            if($user->cl==6){ // final stage
                $user->complete = 1;
            }
            $user->save();
        }
        else{
            Session::flash('message', 'Oops! Wrong answer');
            $data = BullseyeData::where('level', '=', $cl-1)->first();
        }

        return redirect('/bullseye-event/'.$data->answer);

    }

    public function bel(Request $request){
        $limit = 10;
        $page = 1;
        $ranklist = BullseyeUsers::orderBy('cl', 'desc')
                                ->leftJoin('users', 'users.id', '=', 'bullseye_users.participant')
                                ->select(['users.id','users.name','bullseye_users.cl', 'bullseye_users.updated_at'])
                                ->orderBy('bullseye_users.updated_at')
                                ->orderBy('bullseye_users.created_at')
                                ->get();


        $frl = BullseyeUsers::orderBy('cl', 'desc')
                                ->leftJoin('users', 'users.id', '=', 'bullseye_users.participant')
                                ->select(['users.id','users.name','users.email','bullseye_users.cl', 'bullseye_users.updated_at'])
                                ->orderBy('bullseye_users.updated_at')
                                ->orderBy('bullseye_users.created_at')
                                ->limit(3)
                                ->get();

        $users = BullseyeUsers::orderBy('cl', 'desc')->count();

        $rank = null;

        $email = Session::get('email');

        $userdetail = null;

        $uf=0;

        if($email){
            $id = Users::where('email','=',$email)->first();
            $id = $id->id;
            $count = 0;
            foreach ($ranklist as $user){
                // echo $user->id;
                if($user->id == $id){
                    $rank = $count;
                    $userdetail = $user;
                    if($count>3){
                        $uf=1;
                    }
                    break;
                }
                $count++;
            }
            foreach ($frl as $user){
                // echo $user->id;
                if($user->email == "naven1999@gmail.com"){
                    $user->ifAdmin = true;
                } else {
                    $user->ifAdmin = false;
                }
            }
        }

        return view('bel',['frl' => $frl, 'rank' => $rank, 'page' => $page, 'users' => $users, 'limit' => $limit, 'user' => $userdetail, 'uf' => $uf]);
        

    }

    private function sendAttachmentMailSG($tomail, $subject, $content, $attachmentPath, $filename, $attachmentType) {
        $email = new \SendGrid\Mail\Mail(); 
        $email->setFrom("no-reply@probe.org.in", "PROBE 2022, NIT Trichy");
        $email->setSubject($subject);
        $email->addTo($tomail, null);
        $email->addContent(
            "text/html", $content
            );
        $file_encoded = base64_encode(file_get_contents($attachmentPath));
        $email->addAttachment(
            $file_encoded,
            $attachmentType,
            $filename,
            "attachment"
        );

        $sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
        try {
            $response = $sendgrid->send($email);
        } catch (Exception $e) {
            Log::error('Caught exception while sending '. $subject . "email: ". $e->getMessage() ."\n");
        }
    }

    private function sendMailSG($tomail, $subject, $content) {
        $sender = 'noreply@probe.org.in';
        $senderName = 'Probe 2022';

        // Replace recipient@example.com with a "To" address. If your account
        // is still in the sandbox, this address must be verified.
        $recipient = $tomail;

        // Replace smtp_username with your Amazon SES SMTP user name.
        $usernameSmtp = getenv('SMTP_USERNAME');

        // Replace smtp_password with your Amazon SES SMTP password.
        $passwordSmtp = getenv('SMTP_PASSWORD');

        // If you're using Amazon SES in a region other than US West (Oregon),
        // replace email-smtp.us-west-2.amazonaws.com with the Amazon SES SMTP
        // endpoint in the appropriate region.
        $host = 'email-smtp.ap-south-1.amazonaws.com';
        $port = 587;

        $mail = new PHPMailer(true);

        try {
            // Specify the SMTP settings.
            $mail->isSMTP();
            $mail->setFrom($sender, $senderName);
            $mail->Username   = $usernameSmtp;
            $mail->Password   = $passwordSmtp;
            $mail->Host       = $host;
            $mail->Port       = $port;
            $mail->SMTPAuth   = true;
            $mail->SMTPSecure = 'tls';

            // Specify the message recipients.
            $mail->addAddress($recipient);
            // You can also add CC, BCC, and additional To recipients here.

            // Specify the content of the message.
            $mail->isHTML(true);
            $mail->Subject    = $subject;
            $mail->Body       = $content;
            $mail->Send();
        } catch (Exception $e) {
            error_log('Caught exception: '. $e->getMessage() ."\n");
        }
    }

    

    public function changePasswordRedirect(Request $request)
    {
        $confirmhash = $request->input('confirm');

        return view('changePassword',['hash' => $confirmhash]);

    }

    public function changePassword(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $confirmhash = $request->input('forgot_password_hash');

        $user = Users::where('email','=', $email)->first();
        if(!$user) {
            Session::flash('message', 'Invalid Email Id');
            return redirect('/changePassword?confirm='.$confirmhash);
        }

        if($user->forgot_password_hash!=''&&$confirmhash==$user->forgot_password_hash) {
            $user->password = md5($password);
            $user->forgot_password_hash = md5(rand()); 
            $user->forgot_password_sent = 0;
            $user->save();
            Session::flash('message', 'You have successfully changed your password!');
            return redirect('/login');
        } else {
            Session::flash('message', 'Email ID does not match!');
            return redirect('/changePassword?confirm='.$confirmhash);
        }

    }

    public function sendMailToRegisteredParticipants(Request $request) {
        
        $type = $request->input('type');
        $name = $request->input('name');
        $paid = $request->input('paid');
        $subject = $request->input('subject');
        $attachment = $request->input('attachment');

        if($type=='workshop') {
            $wid = Workshops::where('name', '=', $name)->first()->id;
            $registeredTeams = WorkshopRegs::where('workshop_id', '=', $wid)
                                                ->where('paid', '=', $paid)
                                                ->get();

            $content = View::make('emails.extraInfo')->render();

            foreach($registeredTeams as $team){
                $pid = $team->participant1;
                $participant = Users::where('id', '=', $pid)->first();
                if($attachment) {
                    $attachmentName = $request->input('attachmentName');
                    $attachmentPath = public_path($request->input('attachmentPath'));
                    $attachmentType = $request->input('attachmentType');
                    $this->sendAttachmentMailSG($participant->email, $subject, $content, $attachmentPath, $attachmentName, $attachmentType);
                }
                else 
                    $this->sendMailSG($participant->email, $subject, $content);
            }

        } else if($type=='event') {
            $eid = Events::where('name', '=', $name)->first()->id;
            $registeredTeams = EventRegs::where('event_id', '=', $wid)
                                                ->where('paid', '=', $paid)
                                                ->get();

            $content = View::make('emails.extraInfo', [
                            'name' => $user->name, 
                            'url' => $url
                            ])->render();

            foreach($registeredTeams as $team){
                $pid = $team->participant1;
                $participant = Users::where('id', '=', $pid)->first();
                if($attachment) {
                    $attachmentName = $request->input('attachmentName');
                    $attachmentPath = public_path($request->input('attachmentPath'));
                    $attachmentType = $request->input('attachmentType');
                    $this->sendAttachmentMailSG($participant->email, $subject, $content, $attachmentPath, $attachmentName, $attachmentType);
                }
                else 
                    $this->sendMailSG($participant->email, $subject, $content);
            }

        }
    }




}
