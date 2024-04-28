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
    Route::get('/mua-the',function (){
        return view('frontend.pages.buy-card.index');
    });
    Route::get('/mua-the-garena',function (){
        return view('frontend.pages.buy-card.card-list');
    });
    Route::get('/mua-the-garena-20k',function (){
        return view('frontend.pages.buy-card.card-single');
    });
    Route::get('/minigame',function (){
        return view('frontend.pages.minigame.index');
    });

    Route::get('/minigame/slug',function (){
        return view('frontend.pages.minigame.detail');
    });

    Route::get('/lich-su-quay-thuong',function (){
        return view('frontend.pages.minigame.logs');
    });

    Route::get('demo-login-modal',function (){
        return view('frontend.pages.demo_login');
    });

    Route::get('rut-vat-pham',function (){
        return view('frontend.pages.withdraw_items.detail');
    });

    Route::get('rut-tien',function (){
        return view('frontend.pages.withdraw-money.detail');
    });

    Route::get('/chi-tiet-caythue',function(){
        return view('frontend.html.chitiet');

    });



//    Nạp game

    Route::get('/recharge-game',function(){
        return view('frontend.pages.recharge-game.list');
    });

    Route::get('/recharge-game/slug',function(){
        return view('frontend.pages.recharge-game.detail');
    });

    Route::get('/404',function(){
        return view('frontend.pages.error.404');
    });

//    Biến động số dư

    Route::get('/lich-su-giao-dich',function(){
        return view('frontend.pages.transaction.logs');
    });

//    Thẻ cào đã mua
    Route::get('/the-cao-da-mua',function (){
        return view('frontend.pages.storecard.logs');
    });

    Route::get('/the-cao-da-mua/detail',function (){
        return view('frontend.pages.storecard.detail');
    });
//    tin tức
    Route::get('/tin-tuc',function (){
        return view('frontend.pages.news.index');
    });


    Route::get('/profile',function(){
        return view('frontend.pages.user.profile');
    });

    Route::get('/change-password',function(){
        return view('frontend.pages.user.change_password');
    });

//    Dịch vụ.
    Route::get('/lich-su-dich-vu',function(){
        return view('frontend.pages.service.logs');
    });

    Route::get('/lich-su-dich-vu/detail',function(){
        return view('frontend.pages.service.logs-detail');
    });

    Route::get('/dich-vu',function(){
        return view('frontend.pages.service.list');
    });

    Route::get('/dich-vu/slug',function(){
        return view('frontend.pages.service.detail');
    });

    Route::get('/nhan-tin',function (){
        return view('frontend.pages.service.chat');
    });

//    Account

    Route::get('/mua-acc',function(){
        return view('frontend.pages.account.category');
    });

    Route::get('/mua-acc/slug',function(){
        return view('frontend.pages.account.list');
    });

    Route::get('/acc/id',function(){
        return view('frontend.pages.account.detail');
    });

    Route::get('/lich-su-mua-nick',function(){
        return view('frontend.pages.account.logs');
    });

    Route::get('/lich-su-tra-gop',function(){
        return view('frontend.pages.account.logs-installment');
    });

//    Nạp thẻ

    Route::get('/lich-su-nap-the',function(){
        return view('frontend.pages.charge.logs');
    });
    Route::get('/tin-tuc/slug',function (){
        return view('frontend.pages.news.list');
    });

    Route::get('/tin-tuc/baiviet',function (){
        return view('frontend.pages.news.detail');
    });

//    nạp thẻ
    Route::get('/nap-the',function(){
        return view('frontend.pages.charge');
    });

});

