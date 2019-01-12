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

Route::post('/register', 'UserController@register');