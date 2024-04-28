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

    Route::get('/shop', function ()
    {
        return view('frontend.pages.shop');
    });
    Route::get('/shop/all', function ()
    {
        return view('frontend.pages.shop-all');
    });
    Route::get('/shop/id', function ()
    {
        return view('frontend.pages.shop-detail');
    });

    Route::get('/shop/id2', function ()
    {
        return view('frontend.pages.shop-detail2');
    });
    Route::get('/register', function ()
    {
        return view('frontend.pages.register');
    });
    Route::get('/login', function ()
    {
        return view('frontend.pages.login');
    });

    Route::get('/category', function ()
    {
        return view('frontend.pages.category');
    });

    Route::get('/category/slug', function ()
    {
        return view('frontend.pages.category-detail');
    });

    Route::get('/member', function ()
    {
        return view('frontend.pages.member');
    });

    Route::get('/robux/vipserver', function ()
    {
        return view('frontend.pages.vipserver');
    });
    Route::get('/robux/idpass', function ()
    {
        return view('frontend.pages.vipserver');
    });
    Route::get('/profile', function ()
    {
        return view('frontend.pages.profile');
    });
    Route::get('/history', function ()
    {
        return view('frontend.pages.history');
    });

});

