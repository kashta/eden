<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function () {
    return View::make('csTheme.home');
});

Route::post('contact-us', function () {
    $name = Input::get('name');
   $email= Input::get('email');
   $message= Input::get('message');
   $message= Input::get('message');
});

