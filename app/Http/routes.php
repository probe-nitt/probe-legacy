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
    Route::get('/random-string/leaderboard', 'UserController@bel');
    Route::get('/random-string/{slug}', 'UserController@beq');
    Route::post('/random-string', 'UserController@bea');
    Route::get('/'.env('SEND_EMAIL_ROUTE').'/{slug}', 'UserController@test_mail');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about-us', function () {
    return view('aboutUs');
});
Route::get('/podcasts', function () {
    return view('podcasts');
});

Route::get('/sponsors', function () {
    return view('sponsors2021');
 });

Route::get('/events', function () {
    return view('event');
});

Route::get('/guestlectures', function() {
    return view('lectures');
});

Route::get('/workshops', function () {
    return view('workshops');
});

Route::get('legal', function() {
    return view('privacyPolicy');
});

Route::get('accomodation', function() {
    return view('acco');
});


Route::get('/workshops/{slug}', function ($slug) {
    $event = $slug;

    $pid = Session::get('pid');
    //$uid = (int)ltrim($pid,'PROBE20');
    if($pid)
        $uid = (int)explode('PROBE20',$pid)[1];
    else
        $uid = -1;

    $w = Workshops::where('name','=',$event)->first();

    if (!$w) {
        return redirect('/workshops');
    }

    $wid = $w->id;

    $isregistered = WorkshopRegs::where('workshop_id', '=', $wid)
                                ->where(function($query) use($uid)
                                {
                                    $query->where('participant1',$uid)
                                        ->orwhere('participant2',$uid)
                                        ->orwhere('participant3',$uid);
                                })->first();

    
    $regopen = $w->is_registration_open;
    $regbool = 0;
    $ispaid = 0;

    if($isregistered){
        $regbool = 1;
        if($isregistered->paid){
            $ispaid = 1;
        }
    }

    return view('2022/workshops/'.$slug,['regbool' => $regbool, 'ispaid' => $ispaid, 'regopen' => $regopen, 'workshop' => $event]);
});

Route::get('/combos', function () {
    return view('2022/combos');
});

Route::get('/events/{slug}', function ($slug) {
    $event = $slug;

    $pid = Session::get('pid');
    //$uid = (int)ltrim($pid,'PROBE20');
    if($pid)
        $uid = (int)explode('PROBE20',$pid)[1];
    else
        $uid = -1;

    $w = Events::where('name','=',$event)->first();

    if (!$w) {
        return redirect('/events');
    }

    $wid = $w->id;

    $isregistered = EventRegs::where('event_id', '=', $wid)
                                ->where(function($query) use($uid)
                                {
                                    $query->where('participant1',$uid)
                                        ->orwhere('participant2',$uid)
                                        ->orwhere('participant3',$uid);
                                })->first();

    
    $regbool = 0;
    $regopen = $w->is_registration_open;

    if($isregistered){
        $regbool = 1;
    }

    return view('2022/events/'.$slug,['regbool' => $regbool, 'regopen' => $regopen, 'event' => $event]);
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/register', 'UserController@register');

Route::post('/login', 'UserController@login');

Route::post('/061a01a98f80f415b1431236b62bb10b', 'UserController@tswh');

Route::get('/activate', 'UserController@confirm_mail');

Route::group(['prefix'=>'20/api'], function () {
    Route::post('login', 'APIController@login');
    Route::post('register', 'APIController@register');
    Route::post('forgotPassword', 'APIController@forgotPassword');
    Route::get('schedule', 'APIController@getSchedule');
});
