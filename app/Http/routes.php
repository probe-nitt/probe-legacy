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

Route::group(['middleware' => 'checkSession'], function() {
    
    Route::get('/payments/processing', function () {
        return view('payments');
    });

    Route::get('/logout', 'UserController@logout');

    Route::get('/workshops/register', 'UserController@workshop_reg');

    Route::post('/workshops/register', 'UserController@regworkshop');

});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/events/paper', function () {
    return view('paper');
});

Route::get('/events/bullseye-event', function () {
    return view('bullseye');
});

Route::get('/events/cryptech', function () {
    return view('cryptech');
});

Route::get('/events/embedtronix', function () {
    return view('embedtronix');
});

Route::get('/events/matrix', function () {
    return view('matrix');
});

Route::get('/events/probequiz', function () {
    return view('probequiz');
});

Route::get('/events/makeathon', function () {
    return view('makeathon');
});

Route::get('/events/probeit', function () {
    return view('probeit');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});



Route::post('/register', 'UserController@register');

Route::post('/login', 'UserController@login');

Route::post('/tswh', 'UserController@tswh');

Route::get('/activate', 'UserController@confirm_mail');