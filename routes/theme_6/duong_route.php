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
//    Bai viet.


Route::group(array('middleware' => ['theme']) , function (){
    Route::get('/tin-tuc',function (){
        return view('frontend.pages.article.list');
    });

    Route::get('/tin-tuc/{slug}',function (){
        return view('frontend.pages.article.detail');
    });

    Route::get('/tin-tuc/danh-muc',function (){
        return view('frontend.pages.article.category');
    });

    Route::get('/chi-tiet-lich-su-giao-dich',function (){
        return view('theme_5.frontend.pages.transaction.logdetail');
    });

});

