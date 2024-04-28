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
    Route::get('custom',function (){
        return view('frontend.pages.custom.index');
    });
    Route::get('/components',function (){
        return view('frontend.pages.custom.components');
    });
    Route::get('trong-test',function (){
        return view('frontend.pages.custom.trong-test');
    });

    Route::get('/dich-vu-da-mua/chi-tiet',function (){
        return view('frontend.pages.service.logsdetail');
    });

    Route::get('/the-cao-da-mua/chi-tiet',function (){
        return view('frontend.pages.storeCard.logsdetail');
    });
    Route::get('/lich-su-nap-the/chi-tiet',function (){
        return view('frontend.pages.charge.logsdetail');
    });
    Route::get('/lich-su-atm-tu-dong',function(){
        return view('frontend.pages.recharge-atm.logs');
    });
    Route::get('/lich-su-atm-tu-dong/chi-tiet',function (){
        return view('frontend.pages.recharge-atm.logsdetail');
    });
    Route::get('/lich-su-mua-nick/chi-tiet',function (){
        return view('frontend.pages.account.logsdetail');
    });
    Route::get('/lich-su-tra-gop/chi-tiet',function (){
        return view('frontend.pages.account.logsdetail-installment');
    });
    Route::get('/withdrawitem-slug/chi-tiet',function (){
        return view('frontend.pages.minigame.withdrawitem-detail');
    });
    Route::get('mua-the-v2',function (){
        return view('frontend.pages.storeCard-v2.index');
    });
});



