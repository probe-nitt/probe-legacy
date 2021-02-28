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
use View;
use StdClass;

use Carbon\Carbon;
use Sangria\JSONResponse;

use App\Models\Users;
use App\Models\WorkshopRegs;
use App\Models\EventRegs;
use App\Models\Workshops;
use App\Models\Events;
use App\Models\BullseyeUsers;
use App\Models\BullseyeData;
use App\Models\Schedule;

use GuzzleHttp\Client;

class APIController extends Controller
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

        if ($validator->fails()) {
            $response = "Invalid Parameters"; // $validators->errors()->all();
            return JSONResponse::response(400, $response);
        }

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

        /*
        if($gender == 'female' && $acco == 1){
            Session::flash('message', 'Sorry, no more accomodation available.');
            return redirect('/register');
        }*/

        if($checkmail){
            Session::flash('message', 'Email already registered');
            return JSONResponse::response(401, 'Invalid Credentials. Email already registered');
        }

        $checkph = Users::where('phone_no','=',$phoneno)->first();

        if($checkph){
            Session::flash('message', 'Phone number already registered');
            return JSONResponse::response(401, 'Invalid Credentials. Phone number already registered');
        }

        try {
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

            $id = "PROBE20".str_pad($user->id, 4, '0', STR_PAD_LEFT);

            $user->probe_id = $id;

            $confirmhash = md5($id."arut");

            $user->mail_confirmation_hash = $confirmhash;       

            $user->save();

            $url = "https://".env("HOST_ADDR", "probe.org.in")."/activate?confirm=".$confirmhash;

            $data = array(
               'name' => $name, 'pid' => $id, 'url' => $url,
            );

            $content = View::make('activate', [
                'name' => $name, 
               'pid' => $id, 
               'url' => $url
            ])->render();

            $this->sendMailSG($email, "PROBE'21 Registration", $content);
            
            return JSONResponse::response(200, 'Registration Successful!');

        }  catch (Exception $e) {
            Log::error($e->getMessage());
            return JSONResponse::response(500);
        }
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'     => 'required',
            'password'  => 'required'
        ]);

        if ($validator->fails()) {
            $response = "Invalid Parameters"; // $validators->errors()->all();
            return JSONResponse::response(400, $response);
        }

        $email    = $request->input('email');
        $password = $request->input('password');

        $user = Users::where('email','=', $email)->first();

        if(!$user){
            $response = 'Email not registered';
            return JSONResponse::response(400, $response);
        }
        else if(md5($password)!=$user->password){
           $response = 'Invalid email/password';
            return JSONResponse::response(400, $response);
        }
        else{
            if(!$user->mail_verified){
                $response = 'Account not activated. Check your mail to activate your account';
                return JSONResponse::response(400, $response);
            }
            $response = $user->name . ':' . $user->probe_id . ':' . $user->college_name . ':' . $user->department;
            return JSONResponse::response(200, $response);
            //code for dashboard
        } 

        return JSONResponse::response(500);
    }

    public function getSchedule() {
        $schedule = Schedule::get();

        if (! $schedule) {
            return JSONResponse::response(400, 'Unable to get Schedule');
        }
        return JSONResponse::response(200, $schedule);
    }

    public function forgotPassword(Request $request) {
        $validator = Validator::make($request->all(), [
            'email'     => 'required'
        ]);

        if ($validator->fails()) {
            $response = "Invalid Parameters"; // $validators->errors()->all();
            return JSONResponse::response(400, $response);
        }

        $email    = $request->input('email');

        $user = Users::where('email','=', $email)->first();
        if(!$user){
            $response = 'Email not registered';
            return JSONResponse::response(400, $response);
        }

        if($user->forgot_password_sent) {
            $response = 'Mail has already been sent!';
            return JSONResponse::response(400, $response);
        }

        $confirmhash = md5(rand());
        $user->forgot_password_hash = $confirmhash; 
        $user->forgot_password_sent = 1;
        $user->save();

        $url = "https://".env("HOST_ADDR", "probe.org.in")."/changePassword?confirm=".$confirmhash;

        $content = View::make('emails.forgotPassword', [
            'name' => $user->name, 
           'url' => $url
        ])->render();

        $this->sendMailSG($email, "PROBE'21 Website Password Change", $content);
        
        return JSONResponse::response(200, 'Email has been sent');


    }

    private function sendMailSG( $tomail, $subject, $content) {
        
        $email = new \SendGrid\Mail\Mail(); 
        $email->setFrom("no-reply@probe.org.in", "PROBE 2021, NIT Trichy");
        $email->setSubject($subject);
        $email->addTo($tomail, null);
        $email->addContent(
            "text/html", $content
            );
        $sendgrid = new \SendGrid(env('SENDGRID_API_KEY'));
        try {
          $response = $sendgrid->send($email);
        } catch (Exception $e) {
            echo 'Caught exception: '. $e->getMessage() ."\n";
        }
    }
}