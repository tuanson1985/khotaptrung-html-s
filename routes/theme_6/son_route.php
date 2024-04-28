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

//    Bai viet.
    Route::get('/tin-tuc',function (){
        return view('frontend.pages.article.list');
    });

    Route::get('/tin-tuc/slug',function (){
        return view('frontend.pages.article.detail');
    });

    Route::get('/tin-tuc/danh-muc',function (){
        return view('frontend.pages.article.category');
    });

//    Minigame.

    Route::get('/minigame-slug',function (){
        return view('frontend.pages.minigame.detail');
    });

    Route::get('/minigame',function (){
        return view('frontend.pages.minigame.category');
    });

    Route::get('/custom',function (){
        return view('frontend.pages.custom.index');
    });

    Route::get('/custom/modal',function (){
        return view('frontend.pages.custom.modal');
    });

    Route::get('/service-mobile',function (){
        return view('frontend.layouts.components.history-detail.service-mobile');
    });

    Route::get('/mua-acc',function (){
        return view('frontend.pages.account.category');
    });

    Route::get('/acc/id',function (){
        return view('frontend.pages.account.detail');
    });

    Route::get('/mua-acc/id',function (){
        return view('frontend.pages.account.list');
    });

    Route::get('/lich-su-mua-nick',function (){
        return view('frontend.pages.account.logs-custom');
    });

    Route::get('/lich-su-tra-gop',function (){
        return view('frontend.pages.account.logs-installment');
    });

//    dịch vụ.

    Route::get('/dich-vu',function (){
        return view('frontend.pages.service.list');
    });

    Route::get('/dich-vu/slug',function (){
        return view('frontend.pages.service.detail');
    });

    Route::get('/dich-vu-da-mua',function (){
        return view('frontend.pages.service.logs');
    });

    Route::get('/thong-tin',function (){
        return view('frontend.pages.profile.index');
    });

    Route::get('/lich-su-giao-dich',function (){
        return view('frontend.pages.transaction.logs');
    });

    Route::get('/changepassword',function (){
        return view('frontend.pages.profile.change_password');
    });

    Route::get('/profile-navbar',function (){
        return view('frontend.pages.profile.profile-navbar');
    });

    Route::get('/withdrawitem-slug',function (){
        return view('frontend.pages.minigame.withdrawitem');
    });

    Route::get('/minigame-log-id',function (){
        return view('frontend.pages.minigame.log');
    });

    Route::get('/lich-su-rut-tien',function (){
        return view('frontend.pages.withdraw-money.logs');
    });

});


