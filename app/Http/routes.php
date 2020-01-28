<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Models\Users;
use App\Models\WorkshopRegs;
use App\Models\EventRegs;
use App\Models\Workshops;
use App\Models\Events;

Route::group(['middleware' => 'checkSession'], function() {

    Route::get('/payments/processing', function () {
        return view('payments');
    });

    Route::get('/logout', 'UserController@logout');

    Route::get('/workshops/register', 'UserController@workshop_reg');
    Route::get('/events/register', 'UserController@event_reg');

    Route::post('/workshops/register', 'UserController@regworkshop');
    Route::post('/events/register', 'UserController@regevent');
    Route::get('/bullseye-event', 'UserController@beq');
    Route::post('/bullseye-event', 'UserController@bea');
    Route::get('/bullseye-event/leaderboard', 'UserController@bel');

});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contacts');
});
Route::get('/about', function () {
    return view('aboutUs');
});

Route::get('/techtalk', function () {
    return view('techtalk');
});

Route::get('/sponsors', function () {
    return view('sponsors');
});

Route::get('/events', function () {
    return view('event');
});

Route::get('/lectures', function() {
    return view('lectures');
});

Route::get('/workshops', function () {
    return view('workshops');
});

Route::get('/techtalk/ssir', function () {
    return view('samsungtt');
});

Route::get('/lectures/qualcomm', function () {
    return view('qualcommtt');
});

Route::get('/lectures/drchockalingam', function () {
    return view('gl1');
});

Route::get('/lectures/drrao', function () {
    return view('gl2');
});

Route::get('/events/paper', function () {
    return view('paper');
});

Route::get('/events/bullseye', function () {


    $event = "Bullseye";

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

    if($isregistered){
        $regbool = 1;
    }

    return view('bullseye',['regbool' => $regbool]);
});

Route::get('/events/cryptech', function () {
    
    $event = "Cryptech";

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

    if($isregistered){
        $regbool = 1;
    }

    return view('cryptech',['regbool' => $regbool]);
});

Route::get('/events/quizzical', function () {
    
    $event = "Quizzical";

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

    if($isregistered){
        $regbool = 1;
    }

    return view('quizzical',['regbool' => $regbool]);
});

Route::get('/events/tronics', function () {

    $event = "tronICs";

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

    if($isregistered){
        $regbool = 1;
    }



    return view('tronics',['regbool' => $regbool]);
});

Route::get('/events/matrix', function () {

    $event = "Matrix";

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

    if($isregistered){
        $regbool = 1;
    }

    return view('matrix',['regbool' => $regbool]);
});

Route::get('/events/ideathon', function () {

    $event = "Qualcomm Ideathon";

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

    if($isregistered){
        $regbool = 1;
    }

    return view('ideathon',['regbool' => $regbool]);
});

Route::get('/events/probequiz', function () {
    
    $event = "Probe Quiz";

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

    if($isregistered){
        $regbool = 1;
    }

    return view('probequiz', ['regbool' => $regbool]);
});

Route::get('/workshops/makeathon', function () {
    $event = "Makeathon - Embedded Electronics";

    $pid = Session::get('pid');
    //$uid = (int)ltrim($pid,'PROBE20');
    if($pid)
        $uid = (int)explode('PROBE20',$pid)[1];
    else
        $uid = -1;

    $w = Workshops::where('name','=',$event)->first();

    $wid = $w->id;
    $mc = $w->max_count;

    $isregistered = WorkshopRegs::where('workshop_id', '=', $wid)
                                ->where(function($query) use($uid)
                                {
                                    $query->where('participant1',$uid)
                                        ->orwhere('participant2',$uid)
                                        ->orwhere('participant3',$uid);
                                })->first();

    $regbool = 0;
    $ispaid = 0;

    if($isregistered){
        $regbool = 1;
        if($isregistered->paid){
            $ispaid = 1;
        }
    }

    return view('makeathon',['regbool' => $regbool, 'ispaid' => $ispaid]);
});

// Route::get('/events/makeathon', function () {
//     return view('makeathon');
// });

Route::get('/events/probeit', function () {
    return view('probeit');
});

Route::get('/events/luckydraw', function () {
    return view('luckydraw');
});

Route::get('/events/quizzardo', function () {
    return view('quizzardo');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/workshops/ocr', function () {

    $workshop1 = "Optical Character Recognition using Deep Learning Day 1";

    $workshop2 = "Optical Character Recognition using Deep Learning Day 2";

    $pid = Session::get('pid');
    //$uid = (int)ltrim($pid,"PROBE20");
    if($pid)
        $uid = (int)explode('PROBE20',$pid)[1];
    else
        $uid = -1;

    $w1 = Workshops::where('name','=',$workshop1)->first();
    $w2 = Workshops::where('name','=',$workshop2)->first();

    $w1id = $w1->id;
    $w2id = $w2->id;
    $mc = $w1->max_count;
    $ec = $w1->event_code;

    $isregistered1 = WorkshopRegs::where('workshop_id', '=', $w1id)
                                ->where(function($query) use($uid)
                                {
                                    $query->where('participant1',$uid)
                                        ->orwhere('participant2',$uid)
                                        ->orwhere('participant3',$uid);
                                })->first();

    $isregistered2 = WorkshopRegs::where('workshop_id', '=', $w2id)
                                ->where(function($query) use($uid)
                                {
                                    $query->where('participant1',$uid)
                                        ->orwhere('participant2',$uid)
                                        ->orwhere('participant3',$uid);
                                })->first();


    $ispaid1 = 0;
    $regbool1 = 0;

    $ispaid2 = 0;
    $regbool2 = 0;

    if($isregistered1){
        $regbool1 = 1;
        if($isregistered1->paid){
            $ispaid1 = 1;
        }
    }

    if($isregistered2){
        $regbool2 = 1;
        if($isregistered2->paid){
            $ispaid2 = 1;
        }
    }

    return view('ocr',['regbool1' => $regbool1, 'ispaid1' => $ispaid1, 'regbool2' => $regbool2, 'ispaid2' => $ispaid2]);

});


Route::get('/workshops/dap', function () {

    $workshop1 = "Data Acquisition and Processing using LabView Day 1";

    $workshop2 = "Data Acquisition and Processing using LabView Day 1";

    $pid = Session::get('pid');
    //$uid = (int)ltrim($pid,"PROBE20");
    if($pid)
        $uid = (int)explode('PROBE20',$pid)[1];
    else
        $uid = -1;

    $w1 = Workshops::where('name','=',$workshop1)->first();
    $w2 = Workshops::where('name','=',$workshop2)->first();

    $w1id = $w1->id;
    $w2id = $w2->id;
    $mc = $w1->max_count;
    $ec = $w1->event_code;

    $isregistered1 = WorkshopRegs::where('workshop_id', '=', $w1id)
                                ->where(function($query) use($uid)
                                {
                                    $query->where('participant1',$uid)
                                        ->orwhere('participant2',$uid)
                                        ->orwhere('participant3',$uid);
                                })->first();

    $isregistered2 = WorkshopRegs::where('workshop_id', '=', $w2id)
                                ->where(function($query) use($uid)
                                {
                                    $query->where('participant1',$uid)
                                        ->orwhere('participant2',$uid)
                                        ->orwhere('participant3',$uid);
                                })->first();


    $ispaid1 = 0;
    $regbool1 = 0;

    $ispaid2 = 0;
    $regbool2 = 0;

    if($isregistered1){
        $regbool1 = 1;
        if($isregistered1->paid){
            $ispaid1 = 1;
        }
    }

    if($isregistered2){
        $regbool2 = 1;
        if($isregistered2->paid){
            $ispaid2 = 1;
        }
    }

    return view('das',['regbool1' => $regbool1, 'ispaid1' => $ispaid1, 'regbool2' => $regbool2, 'ispaid2' => $ispaid2]);

});


Route::get('/workshops/probot', function () {

    $workshop = "Probot";

    $pid = Session::get('pid');
    //$uid = (int)ltrim($pid,"PROBE20");
    if($pid)
        $uid = (int)explode('PROBE20',$pid)[1];
    else
        $uid = -1;

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
    $regbool = 0;;

    if($isregistered){
        $regbool = 1;
        if($isregistered->paid){
            $ispaid = 1;
        }
    }

    return view('probot',['regbool' => $regbool, 'ispaid' => $ispaid]);

});


Route::get('/workshops/esd', function () {

    $workshop = "Embedded System Design using CC3200 - IoT";

    $pid = Session::get('pid');
    //$uid = (int)ltrim($pid,"PROBE20");
    if($pid)
        $uid = (int)explode('PROBE20',$pid)[1];
    else
        $uid = -1;

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
    $regbool = 0;;

    if($isregistered){
        $regbool = 1;
        if($isregistered->paid){
            $ispaid = 1;
        }
    }

    return view('esd',['regbool' => $regbool, 'ispaid' => $ispaid]);

});

Route::get('/workshops/cyw', function () {

    $workshop = "Hands on Bluetooth with CYW20719";

    $pid = Session::get('pid');
    //$uid = (int)ltrim($pid,"PROBE20");
    if($pid)
        $uid = (int)explode('PROBE20',$pid)[1];
    else
        $uid = -1;

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
    $regbool = 0;;

    if($isregistered){
        $regbool = 1;
        if($isregistered->paid){
            $ispaid = 1;
        }
    }

    return view('cyw',['regbool' => $regbool, 'ispaid' => $ispaid]);

});

Route::get('/workshops/socath', function () {

    $workshop = "System on Chip using Atheros ath10k";

    $pid = Session::get('pid');
    //$uid = (int)ltrim($pid,"PROBE20");
    if($pid)
        $uid = (int)explode('PROBE20',$pid)[1];
    else
        $uid = -1;

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
    $regbool = 0;;

    if($isregistered){
        $regbool = 1;
        if($isregistered->paid){
            $ispaid = 1;
        }
    }

    return view('socath',['regbool' => $regbool, 'ispaid' => $ispaid]);

});

Route::get('/workshops/adt', function () {

    $workshop = "Antenna Design and Testing";

    $pid = Session::get('pid');
    //$uid = (int)ltrim($pid,"PROBE20");
    if($pid)
        $uid = (int)explode('PROBE20',$pid)[1];
    else
        $uid = -1;

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
    $regbool = 0;;

    if($isregistered){
        $regbool = 1;
        if($isregistered->paid){
            $ispaid = 1;
        }
    }

    return view('adt',['regbool' => $regbool, 'ispaid' => $ispaid]);

});

Route::get('/workshops/jarvis', function () {

    $workshop1 = "Build your own J.A.R.V.I.S. Day 1";

    $workshop2 = "Build your own J.A.R.V.I.S. Day 2";

    $pid = Session::get('pid');
    //$uid = (int)ltrim($pid,"PROBE20");
    if($pid)
        $uid = (int)explode('PROBE20',$pid)[1];
    else
        $uid = -1;

    $w1 = Workshops::where('name','=',$workshop1)->first();
    $w2 = Workshops::where('name','=',$workshop2)->first();

    $w1id = $w1->id;
    $w2id = $w2->id;
    $mc = $w1->max_count;
    $ec = $w1->event_code;

    $isregistered1 = WorkshopRegs::where('workshop_id', '=', $w1id)
                                ->where(function($query) use($uid)
                                {
                                    $query->where('participant1',$uid)
                                        ->orwhere('participant2',$uid)
                                        ->orwhere('participant3',$uid);
                                })->first();

    $isregistered2 = WorkshopRegs::where('workshop_id', '=', $w2id)
                                ->where(function($query) use($uid)
                                {
                                    $query->where('participant1',$uid)
                                        ->orwhere('participant2',$uid)
                                        ->orwhere('participant3',$uid);
                                })->first();


    $ispaid1 = 0;
    $regbool1 = 0;

    $ispaid2 = 0;
    $regbool2 = 0;

    if($isregistered1){
        $regbool1 = 1;
        if($isregistered1->paid){
            $ispaid1 = 1;
        }
    }

    if($isregistered2){
        $regbool2 = 1;
        if($isregistered2->paid){
            $ispaid2 = 1;
        }
    }

    return view('jarvis',['regbool1' => $regbool1, 'ispaid1' => $ispaid1, 'regbool2' => $regbool2, 'ispaid2' => $ispaid2]);

});

Route::get('/workshops/soc', function() {
    return view('soc');
});

Route::post('/register', 'UserController@register');

Route::post('/login', 'UserController@login');

Route::post('/tcfwebhook', 'UserController@tswh');

Route::get('/activate', 'UserController@confirm_mail');

Route::get('/changePassword', 'UserController@changePasswordRedirect');
Route::post('/changePassword', 'UserController@changePassword');

Route::get('legal', function() {
    return view('privacyPolicy');
});

Route::post('/aruteyy', 'UserController@se');

Route::group(['prefix'=>'20/api'], function () {
    Route::post('login', 'APIController@login');
    Route::post('register', 'APIController@register');
    Route::post('forgotPassword', 'APIController@forgotPassword');
    Route::get('schedule', 'APIController@getSchedule');
});