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

Route::get('/sponsors', function () {
    return view('sponsors');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/workshops', function () {
    return view('workshops');
});

Route::get('/events/paper', function () {
    return view('paper');
});

Route::get('/events/bullseye', function () {


    $event = "Bullseye";

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

    if($isregistered){
        $regbool = 1;
    }

    return view('bullseye',['regbool' => $regbool]);
});

Route::get('/events/cryptech', function () {
    return view('cryptech');
});

Route::get('/events/embedtronix', function () {

    $event = "Embedtronix";

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

    if($isregistered){
        $regbool = 1;
    }



    return view('embedtronix',['regbool' => $regbool]);
});

Route::get('/events/matrix', function () {

    $event = "Matrix";

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

    if($isregistered){
        $regbool = 1;
    }

    return view('matrix',['regbool' => $regbool]);
});

Route::get('/events/ideathon', function () {

    $event = "Qualcomm Ideathon";

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

    if($isregistered){
        $regbool = 1;
    }

    return view('ideathon',['regbool' => $regbool]);
});

Route::get('/events/probequiz', function () {
    return view('probequiz');
});

Route::get('/events/makeathon', function () {
    return view('qmakeathon');
});

// Route::get('/events/makeathon', function () {
//     return view('makeathon');
// });

Route::get('/events/probeit', function () {
    return view('probeit');
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
    $uid = (int)ltrim($pid,"PROBE19");

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


Route::get('/workshops/das', function () {

    $workshop1 = "Data Acquisition Systems using LabVIEW Day 1";

    $workshop2 = "Data Acquisition Systems using LabVIEW Day 2";

    $pid = Session::get('pid');
    $uid = (int)ltrim($pid,"PROBE19");

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
    $regbool = 0;;

    if($isregistered){
        $regbool = 1;
        if($isregistered->paid){
            $ispaid = 1;
        }
    }

    return view('esd',['regbool' => $regbool, 'ispaid' => $ispaid]);

});

Route::get('/workshops/psoc', function () {

    $workshop = "IoT Training using PSoC";

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
    $regbool = 0;;

    if($isregistered){
        $regbool = 1;
        if($isregistered->paid){
            $ispaid = 1;
        }
    }

    return view('psoc',['regbool' => $regbool, 'ispaid' => $ispaid]);

});

Route::get('/workshops/socath', function () {

    $workshop = "System on Chip using Atheros ath10k";

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
    $regbool = 0;;

    if($isregistered){
        $regbool = 1;
        if($isregistered->paid){
            $ispaid = 1;
        }
    }

    return view('adt',['regbool' => $regbool, 'ispaid' => $ispaid]);

});

Route::post('/register', 'UserController@register');

Route::post('/login', 'UserController@login');

Route::post('/tswh', 'UserController@tswh');

Route::get('/activate', 'UserController@confirm_mail');

Route::post('/aruteyy', 'UserController@se');
