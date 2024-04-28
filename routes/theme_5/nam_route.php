<?php

use Illuminate\Support\Facades\Cache;
use \Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(array('middleware' => ['theme']) , function (){

    Route::get('/menu', function ()
    {
        return view('frontend.pages.menu');
    });
    Route::get('/slide-banner', function ()
    {
        return view('theme_5.frontend.pages.slide-banner');
    });
    Route::get('/change-password', function ()
    {
        return view('theme_5.frontend.pages.components.change-password');
    });
    Route::get('/nap-the', function ()
    {
        return view('frontend.pages.charge.index');
    });
    Route::get('/menu-profile', function ()
    {
        return view('frontend.pages.profile.profile');
    });

});




