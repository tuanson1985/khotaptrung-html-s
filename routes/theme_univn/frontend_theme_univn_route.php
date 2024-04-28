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

    Route::get('/cam-on', function ()
    {
        return view('frontend.pages.cam-on');
    });

    Route::get('/ve-chung-toi', function ()
    {
        return view('frontend.pages.ve-chung-toi');
    })->name('ve-chung-toi');

    Route::get('/thanh-toan', function ()
    {
        return view('frontend.pages.thanh-toan');
    })->name('thanh-toan');

    Route::get('/tin-tuc', function ()
    {
        return view('frontend.pages.article.index');
    })->name('tin-tuc');

//    Tin tức ,kiến thức webiste, tuyển dụng thuộc bài viết.
    Route::get('/tin-tuc/slug', function ()
    {
        return view('frontend.pages.article.detail');
    })->name('tin-tuc-detail');
//    Route::get('/tuyen-dung', function ()
//    {
//        return view('frontend.pages.tuyen-dung');
//    });

    Route::get('/lien-he', function ()
    {
        return view('frontend.pages.lien-he');
    })->name('lien-he');

    Route::get('/search', function ()
    {
        return view('frontend.pages.search');
    });

    Route::get('/category', function ()
    {
        return view('frontend.pages.category.index');
    })->name('category');

    Route::get('/category/slug', function ()
    {
        return view('frontend.pages.category.detail');
    })->name('category-detail');

    Route::get('/thiet-ke-website-tron-goi', function ()
    {
        return view('frontend.pages.thiet-ke-website-tron-goi');
    })->name('thiet-ke-website-tron-goi');

    Route::get('/dich-vu-quang-cao', function ()
    {
        return view('frontend.pages.dich-vu-quang-cao');
    })->name('dich-vu-quang-cao');

    Route::get('/dich-vu-hosting', function ()
    {
        return view('frontend.pages.dich-vu-hosting');
    })->name('dich-vu-hosting');

    Route::get('/dich-vu-vps-pro-ssd', function ()
    {
        return view('frontend.pages.dich-vu-vps-pro-ssd');
    })->name('dich-vu-vps-pro-ssd');

    Route::get('/dich-vu-vps-gia-re', function ()
    {
        return view('frontend.pages.dich-vu-vps-gia-re');
    })->name('dich-vu-vps-gia-re');

    Route::get('/dich-vu-ten-mien', function ()
    {
        return view('frontend.pages.dich-vu-ten-mien');
    })->name('dich-vu-ten-mien');

    Route::get('/dich-vu-email-hosting', function ()
    {
        return view('frontend.pages.dich-vu-email-hosting');
    })->name('dich-vu-email-hosting');

    Route::get('/dich-vu-email-google', function ()
    {
        return view('frontend.pages.dich-vu-email-google');
    })->name('dich-vu-email-google');

    Route::get('/nhan-dien-thuong-hieu', function ()
    {
        return view('frontend.pages.nhan-dien-thuong-hieu');
    })->name('nhan-dien-thuong-hieu');

    Route::get('/viet-noi-dung-website', function ()
    {
        return view('frontend.pages.viet-noi-dung-website');
    })->name('viet-noi-dung-website');

    Route::get('/dich-vu-facebook', function ()
    {
        return view('frontend.pages.dich-vu-facebook');
    })->name('dich-vu-facebook');

    Route::get('/quy-dinh-su-dung', function ()
    {
        return view('frontend.pages.quy-dinh-su-dung');
    })->name('quy-dinh-su-dung');

    Route::get('/chinh-sach-bao-mat', function ()
    {
        return view('frontend.pages.chinh-sach-bao-mat');
    })->name('chinh-sach-bao-mat');

    Route::get('/chinh-sach-bao-hanh', function ()
    {
        return view('frontend.pages.chinh-sach-bao-hanh');
    })->name('chinh-sach-bao-hanh');

    Route::get('/chinh-sach-va-quy-dinh-chung', function ()
    {
        return view('frontend.pages.chinh-sach-va-quy-dinh-chung');
    })->name('chinh-sach-va-quy-dinh-chung');

});

