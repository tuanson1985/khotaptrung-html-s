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

    Route::get('/', function ()
    {
        return view('frontend.pages.index');
    });

    Route::get('/mua-the', function ()
    {
        return view('frontend.pages.storecard.index');
    });

    Route::get('/the-cao-da-mua', function ()
    {
        return view('frontend.pages.storecard.logs');
    });

    Route::get('/the-cao-da-mua-id', function ()
    {
        return view('frontend.pages.storecard.detail');
    });

    Route::get('/uytinshop', function ()
    {
        return view('frontend.pages.html.uytinshop');
    });

    Route::get('/tin-tuc', function ()
    {
        return view('frontend.pages.article.list');
    });

    Route::get('/tin-tuc/category', function ()
    {
        return view('frontend.pages.article.category');
    });

    Route::get('/tin-tuc/slug', function ()
    {
        return view('frontend.pages.article.detail');
    });

    Route::get('/tin-tuc/reputation', function ()
    {
        return view('frontend.pages.article.reputation');
    });

    Route::get('/nap-the', function ()
    {
        return view('frontend.pages.charge.index');
    });

    Route::get('/lich-su-nap-the', function ()
    {
        return view('frontend.pages.charge.logs');
    });

    Route::get('/recharge-atm', function ()
    {
        return view('frontend.pages.transfer.index');
    });

    Route::get('/dich-vu-da-mua', function ()
    {
        return view('frontend.pages.service.logs');
    });

    Route::get('/lich-su-giao-dich', function ()
    {
        return view('frontend.pages.transaction.logs');
    });

    Route::get('/user/second-level-password', function ()
    {
        return view('frontend.pages.profile.second-level-password');
    });

    Route::get('/user/change-password', function ()
    {
        return view('frontend.pages.profile.change-password');
    });

    Route::get('/user/profile', function ()
    {
        return view('frontend.pages.profile.profile');
    });

    Route::get('/dich-vu/slug', function ()
    {
        return view('frontend.pages.service.detail');
    });

    Route::get('/dich-vu/slug2', function ()
    {
        return view('frontend.pages.service.detail2');
    });

    Route::get('/dich-vu-da-mua-id', function ()
    {
        return view('frontend.pages.service.logsdetail');
    });

    Route::get('/inbox/send/id', function ()
    {
        return view('frontend.pages.service.chat');
    });
});


