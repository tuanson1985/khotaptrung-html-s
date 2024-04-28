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
    Route::get('/sidebar',function (){
        return view('frontend.layouts.components.sidebar');
    });

    Route::get('/recharge-money',function (){
        return view('frontend.layouts.components.money-recharge');
    });

    Route::get('/buy-card',function (){
        return view('frontend.layouts.components.buy-card');
    });

    Route::get('/detail-withdraw-money',function (){
        return view('frontend.layouts.components.history-detail.withdraw-money');
    });

    Route::get('/detail-withdraw-items',function (){
        return view('frontend.layouts.components.history-detail.withdraw-items');
    });

    Route::get('/detail-balance-change',function (){
        return view('frontend.layouts.components.history-detail.balance-change');
    });

    Route::get('/detail-recharge-money',function (){
        return view('frontend.layouts.components.history-detail.recharge-money');
    });

    Route::get('/detail-prize-history',function (){
        return view('frontend.layouts.components.history-detail.prize-history');
    });

    Route::get('/detail-nick-purchase',function (){
        return view('frontend.layouts.components.history-detail.nick-purchase');
    });

    Route::get('/detail-installment-history',function (){
        return view('frontend.layouts.components.history-detail.installment-history');
    });

    Route::get('/detail-service-purchase',function (){
        return view('frontend.layouts.components.history-detail.service-purchase');
    });

    Route::get('/minigame-detail',function (){
        return view('frontend.layouts.components.minigame-detail');
    });

    Route::get('/login-mobile',function (){
        return view('frontend.layouts.components.login-mobile');
    });

});




