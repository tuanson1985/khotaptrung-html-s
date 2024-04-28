@extends('frontend.layouts.master')
@section('styles')
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/css/lib_bootstrap.css">
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/css/minigame.css">
@endsection

@section('content')
    <div class="container container-fix">
        <section class="media-mobile">
            <div class=" banner-mobile-container-ct">
                <div class="row marginauto banner-mobile-row-ct">
                    <div class="col-auto left-right" style="width: 10%">
                        <a href="/">
                            <img class="lazy" src="/assets/{{env('THEME_VERSION')}}/image/cay-thue/back.png" alt="" >
                        </a>

                    </div>

                    <div class="col-auto left-right banner-mobile-span text-center" style="width: 80%">
                        <h3>Danh mục vòng quay</h3>
                    </div>
                    <div class="col-auto left-right" style="width: 10%">
                    </div>
                </div>
            </div>
        </section>
        <section class="media-web mb-fix-16">
            <div class=" menu-container-ct">
                <ul class="d-flex" style="float: inherit">
                    <li><a href="/">Trang chủ</a></li>
                    <li class="menu-container-li-ct"><img class="lazy" src="/assets/{{env('THEME_VERSION')}}/image/cay-thue/arrow-right.png" alt=""></li>
                    <li class="menu-container-li-ct"><a href="">Danh mục vòng quay</a></li>
                    {{--                            <li class="menu-container-li-ct"><img class="lazy" src="/assets/{{env('THEME_VERSION')}}/image/cay-thue/arrow-right.png" alt=""></li>--}}
                    {{--                            <li class="menu-container-li-ct"><a href="">Cày xếp hạng ELO/ Liên Minh</a></li>--}}
                </ul>
            </div>
        </section>
        <div class="block-mini-game ">
            <div class="row">
                <div class="col-lg-8 col-md-12 pr-md-0" >
                    <div class=" block-product ">
                        <div class="product-header d-flex">
                                <span>
                                    <img src="/assets/{{env('THEME_VERSION')}}/image/minigame_title_detail.png" alt="">
                                </span>
                            <p class="text-title" >Top vòng quay</p>
                            <div class="navbar-spacer"></div>
                            <div class="minigame-button-swiper d-flex d-g-md-none">
                                <div class="swiper-button-next"><img src="/assets/{{env('THEME_VERSION')}}/image/swiper_prev.png" alt=""></div>
                                <div class="swiper-button-prev"> <img src="/assets/{{env('THEME_VERSION')}}/image/swiper_next.png" alt=""></div>

                            </div>

                        </div>
                        <div class="box-product " >
                            <div class="  list-minigame minigame-swiper swiper-container" >
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="row">
                                            <div class="list-minigame_box-left col-md-6 pr-fix-8 ">
                                                <div class="item-minigame_first">
                                                    <a href="">
                                                        <img src="/assets/{{env('THEME_VERSION')}}/image/minigame_first_detail.png" alt="">

                                                        <div class="item-minigame-content">
                                                            <div class="item-minigame-name_detail">Vòng quay Freefire</div>
                                                            <div class="item-minigame-user">123.456.789 đã chơi</div>
                                                            <div class="item-minigame-amount">
                                                                80.000 đ
                                                            </div>
                                                        </div>
                                                        <div class="item-minigame-top">
                                                            <img src="/assets/{{env('THEME_VERSION')}}/image/minigame_top.png" alt=""> <div>Top 1</div>

                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="list-minigame_box-right col-md-6">
                                                <div class="row">
                                                    <div class="col-md-6 pr-fix-8 pl-fix-8 ">
                                                        <div class="item-minigame_second">
                                                            <a href="">
                                                                <img src="/assets/{{env('THEME_VERSION')}}/image/minigame_second_detail.png" alt="">
                                                                <div class="item-minigame-content">
                                                                    <div class="item-minigame-name_detail">Vòng quay Freefire</div>
                                                                    <div class="item-minigame-user">123.456.789 đã chơi</div>
                                                                    <div class="item-minigame-amount">
                                                                        80.000 đ
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <div class="item-minigame-top">
                                                                <img src="/assets/{{env('THEME_VERSION')}}/image/minigame_top.png" alt=""> <div>Top 2</div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6 pr-fix-8 pl-fix-8">
                                                        <div class="item-minigame_second">
                                                            <a href="">
                                                                <img src="/assets/{{env('THEME_VERSION')}}/image/minigame_second_detail.png" alt="">

                                                                <div class="item-minigame-content">
                                                                    <div class="item-minigame-name_detail">Vòng quay Freefire</div>
                                                                    <div class="item-minigame-user">123.456.789 đã chơi</div>
                                                                    <div class="item-minigame-amount">
                                                                        80.000 đ
                                                                    </div>
                                                                </div>
                                                                <div class="item-minigame-top">
                                                                    <img src="/assets/{{env('THEME_VERSION')}}/image/minigame_top.png" alt=""> <div>Top 1</div>

                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pr-fix-8 pl-fix-8">
                                                        <div class="item-minigame_second">
                                                            <a href="">
                                                                <img src="/assets/{{env('THEME_VERSION')}}/image/minigame_second_detail.png" alt="">

                                                                <div class="item-minigame-content">
                                                                    <div class="item-minigame-name_detail">Vòng quay Freefire</div>
                                                                    <div class="item-minigame-user">123.456.789 đã chơi</div>
                                                                    <div class="item-minigame-amount">
                                                                        80.000 đ
                                                                    </div>
                                                                </div>
                                                                <div class="item-minigame-top">
                                                                    <img src="/assets/{{env('THEME_VERSION')}}/image/minigame_top.png" alt=""> <div>Top 3</div>

                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pr-fix-8 pl-fix-8">
                                                        <div class="item-minigame_second">
                                                            <a href="">
                                                                <img src="/assets/{{env('THEME_VERSION')}}/image/minigame_second_detail.png" alt="">

                                                                <div class="item-minigame-content">
                                                                    <div class="item-minigame-name_detail">Vòng quay Freefire</div>
                                                                    <div class="item-minigame-user">123.456.789 đã chơi</div>
                                                                    <div class="item-minigame-amount">
                                                                        80.000 đ
                                                                    </div>
                                                                </div>
                                                                <div class="item-minigame-top">
                                                                    <img src="/assets/{{env('THEME_VERSION')}}/image/minigame_top.png" alt=""> <div>Top 4</div>

                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="row">
                                            <div class="list-minigame_box-left col-md-6 pr-fix-8 ">
                                                <div class="item-minigame_first">
                                                    <a href="">
                                                        <img src="/assets/{{env('THEME_VERSION')}}/image/minigame_first_detail.png" alt="">

                                                        <div class="item-minigame-content">
                                                            <div class="item-minigame-name_detail">Vòng quay Freefire</div>
                                                            <div class="item-minigame-user">123.456.789 đã chơi</div>
                                                            <div class="item-minigame-amount">
                                                                80.000 đ
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="list-minigame_box-right col-md-6">
                                                <div class="row">
                                                    <div class="col-md-6 pr-fix-8 pl-fix-8 ">
                                                        <div class="item-minigame_second">
                                                            <a href="">
                                                                <img src="/assets/{{env('THEME_VERSION')}}/image/minigame_second_detail.png" alt="">
                                                                <div class="item-minigame-content">
                                                                    <div class="item-minigame-name_detail">Vòng quay Freefire</div>
                                                                    <div class="item-minigame-user">123.456.789 đã chơi</div>
                                                                    <div class="item-minigame-amount">
                                                                        80.000 đ
                                                                    </div>
                                                                </div>
                                                            </a>

                                                        </div>

                                                    </div>
                                                    <div class="col-md-6 pr-fix-8 pl-fix-8">
                                                        <div class="item-minigame_second">
                                                            <a href="">
                                                                <img src="/assets/{{env('THEME_VERSION')}}/image/minigame_second_detail.png" alt="">

                                                                <div class="item-minigame-content">
                                                                    <div class="item-minigame-name_detail">Vòng quay Freefire</div>
                                                                    <div class="item-minigame-user">123.456.789 đã chơi</div>
                                                                    <div class="item-minigame-amount">
                                                                        80.000 đ
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pr-fix-8 pl-fix-8">
                                                        <div class="item-minigame_second">
                                                            <a href="">
                                                                <img src="/assets/{{env('THEME_VERSION')}}/image/minigame_second_detail.png" alt="">

                                                                <div class="item-minigame-content">
                                                                    <div class="item-minigame-name_detail">Vòng quay Freefire</div>
                                                                    <div class="item-minigame-user">123.456.789 đã chơi</div>
                                                                    <div class="item-minigame-amount">
                                                                        80.000 đ
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pr-fix-8 pl-fix-8">
                                                        <div class="item-minigame_second">
                                                            <a href="">
                                                                <img src="/assets/{{env('THEME_VERSION')}}/image/minigame_second_detail.png" alt="">

                                                                <div class="item-minigame-content">
                                                                    <div class="item-minigame-name_detail">Vòng quay Freefire</div>
                                                                    <div class="item-minigame-user">123.456.789 đã chơi</div>
                                                                    <div class="item-minigame-amount">
                                                                        80.000 đ
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>



                            </div>
                            <div class="list-minigame_mobile">
                                <div class="list-minigame_box-left w-100">
                                    <div class="item-minigame_first">
                                        <a href="">
                                            <img src="/assets/{{env('THEME_VERSION')}}/image/minigame_first_detail.png" alt="">
                                        </a>
                                        <div class="item-minigame-content">
                                            <div class="item-minigame-name">Vòng quay Freefire </div>
                                            <div class="item-minigame-amount">123.456.789 đã chơi</div>
                                            <div class="item-minigame-view">
                                                <img src="/assets/{{env('THEME_VERSION')}}/image/view_eyes.png" alt=""> <span>232</span>  <img src="/assets/{{env('THEME_VERSION')}}/image/view_video.png" alt=""> <span>123456</span>
                                            </div>
                                        </div>
                                        <div class="item-minigame-view_mobile">
                                            <img src="/assets/{{env('THEME_VERSION')}}/image/view_eyes.png" alt=""> <span>232</span>  <img src="/assets/{{env('THEME_VERSION')}}/image/view_video.png" alt=""> <span>123456</span>

                                        </div>
                                    </div>


                                </div>
                                <div class="list-minigame_box-right minigame-swiper swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="item-minigame_second">
                                                <a href="">
                                                    <img src="/assets/{{env('THEME_VERSION')}}/image/minigame_second_detail.png" alt="">
                                                    <div class="item-minigame-content">
                                                        <div class="item-minigame-name">Vòng quay Freefire</div>
                                                        <div class="item-minigame-amount">123.456.789 đã chơi</div>
                                                        <div class="item-minigame-view">
                                                            <img src="/assets/{{env('THEME_VERSION')}}/image/view_eyes.png" alt=""> <span>232</span>  <img src="/assets/{{env('THEME_VERSION')}}/image/view_video.png" alt=""> <span>123456</span>
                                                        </div>
                                                    </div>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="item-minigame_second">
                                                <a href="">
                                                    <img src="/assets/{{env('THEME_VERSION')}}/image/minigame_second_detail.png" alt="">
                                                    <div class="item-minigame-content">
                                                        <div class="item-minigame-name">Vòng quay Freefire</div>
                                                        <div class="item-minigame-amount">123.456.789 đã chơi</div>
                                                        <div class="item-minigame-view">
                                                            <img src="/assets/{{env('THEME_VERSION')}}/image/view_eyes.png" alt=""> <span>232</span>  <img src="/assets/{{env('THEME_VERSION')}}/image/view_video.png" alt=""> <span>123456</span>
                                                        </div>
                                                    </div>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="item-minigame_second">
                                                <a href="">
                                                    <img src="/assets/{{env('THEME_VERSION')}}/image/minigame_second_detail.png" alt="">
                                                    <div class="item-minigame-content">
                                                        <div class="item-minigame-name">Vòng quay Freefire</div>
                                                        <div class="item-minigame-amount">123.456.789 đã chơi</div>
                                                        <div class="item-minigame-view">
                                                            <img src="/assets/{{env('THEME_VERSION')}}/image/view_eyes.png" alt=""> <span>232</span>  <img src="/assets/{{env('THEME_VERSION')}}/image/view_video.png" alt=""> <span>123456</span>
                                                        </div>
                                                    </div>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12  " >
                    <div class=" top-list ">
                        <p><img src="/assets/{{env('THEME_VERSION')}}/image/star_top.png" alt=""> Top lượt quay</p>
                        <div class="top-days default-tab">
                            <ul class="nav justify-content-between row pr-fix-16 pl-fix-16" role="tablist" >
                                <li class="nav-item col-4 col-md-4 p-0  p-md-0" role="presentation">
                                    <a  class="active pb-fix-8 d-flex justify-content-center" id="sevendays-minigame-tab" data-toggle="tab" href="#sevendays-minigame" role="tab" aria-selected="true">7 ngày</a>
                                </li >
                                <li class="nav-item col-4 col-md-4 p-0 p-md-0" role="presentation">
                                    <a  class="pb-fix-8 d-flex justify-content-center"  id="thirtyday-minigame-tab" data-toggle="tab" href="#thirtydays-minigame" role="tab" aria-selected="false"> 30 ngày</a>
                                </li>
                                <li class="nav-item col-4 col-md-4 p-0 p-md-0" role="presentation">
                                    <a  class=" pb-fix-8 d-flex justify-content-center" id="sixty-minigame-tab" data-toggle="tab" href="#sixtydays-minigame" role="tab" aria-selected="false">60 ngày</a>
                                </li>
                            </ul>
                        </div>
                        <div class="top-content tab-content">
                            <div class="tab-pane fade active show item-top mt-3" id="sevendays-minigame" role="tabpanel" aria-labelledby="sevendays-minigame-tab" >
                                <div class="item-top-content">
                                    <ul class="nav flex-column">
                                        <li class="d-flex">
                                            <span><img src="/assets/{{env('THEME_VERSION')}}/image/top_star.png" alt=""></span>
                                            <span class="top-name">Tên dài hai dòng </span>
                                            <span class="float-right top-amount">100.000.000đ</span>
                                        </li>
                                        <li class="d-flex">
                                            <span><img src="/assets/{{env('THEME_VERSION')}}/image/top_star.png" alt=""></span>
                                            <span class="top-name">Tên dài </span>
                                            <span class="float-right top-amount">100.000.000đ</span>
                                        </li>
                                        <li class="d-flex">
                                            <span><img src="/assets/{{env('THEME_VERSION')}}/image/top_star.png" alt=""></span>
                                            <span class="top-name">Tên dài </span>
                                            <span class="float-right top-amount">100.000.000đ</span>
                                        </li>
                                        <li class="d-flex">
                                            <span class="top-rank"><div style="">4</div></span>
                                            <span class="top-name">Tên dài hai dòng Tên dài hai dòng</span>
                                            <span class="float-right top-amount">100.000.000đ</span>
                                        </li>
                                        <li class="d-flex">
                                            <span class="top-rank"><div style="">5</div></span>
                                            <span class="top-name">Tên dài hai dòng Tên dài hai dòng</span>
                                            <span class="float-right top-amount">100.000.000đ</span>
                                        </li>
                                        <li class="d-flex">
                                            <span class="top-rank"><div style="">6</div></span>
                                            <span class="top-name">Tên dài hai dòng Tên dài hai dòng</span>
                                            <span class="float-right top-amount">100.000.000đ</span>
                                        </li>
                                        <li class="d-flex">
                                            <span class="top-rank"><div style="">7</div></span>
                                            <span class="top-name">Tên dài hai dòng Tên dài hai dòng</span>
                                            <span class="float-right top-amount">100.000.000đ</span>
                                        </li>


                                    </ul>
                                </div>

                                <div class="footer-row-ct d-lg-none d-block">
                                    <div  class="col-md-12 left-right text-center js-toggle-content">
                                        <div class="view-more-top ">
                                            Xem thêm <img src="/assets/theme_3/image/icons/arrow-down.png" alt="">
                                        </div>
                                        <div class="view-less-top ">
                                            Rút gọn <img src="/assets/theme_3/image/icons/iconright.png" alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade item-top mt-3" id="thirtydays-minigame" role="tabpanel" aria-labelledby="thirtyday-minigame-tab">
                                <div class="item-top-content">
                                    <ul class="nav flex-column">
                                        <li class="d-flex">
                                            <span><img src="/assets/{{env('THEME_VERSION')}}/image/top_star.png" alt=""></span>
                                            <span class="top-name">Tên dài hai dòng </span>
                                            <span class="float-right top-amount">100.000.000đ</span>
                                        </li>
                                        <li class="d-flex">
                                            <span><img src="/assets/{{env('THEME_VERSION')}}/image/top_star.png" alt=""></span>
                                            <span class="top-name">Tên dài </span>
                                            <span class="float-right top-amount">100.000.000đ</span>
                                        </li>
                                        <li class="d-flex">
                                            <span><img src="/assets/{{env('THEME_VERSION')}}/image/top_star.png" alt=""></span>
                                            <span class="top-name">Tên dài </span>
                                            <span class="float-right top-amount">100.000.000đ</span>
                                        </li>
                                        <li class="d-flex">
                                            <span class="top-rank"><div style="">4</div></span>
                                            <span class="top-name">Tên dài hai dòng Tên dài hai dòng</span>
                                            <span class="float-right top-amount">100.000.000đ</span>
                                        </li>
                                        <li class="d-flex">
                                            <span class="top-rank"><div style="">5</div></span>
                                            <span class="top-name">Tên dài hai dòng Tên dài hai dòng</span>
                                            <span class="float-right top-amount">100.000.000đ</span>
                                        </li>
                                        <li class="d-flex">
                                            <span class="top-rank"><div style="">6</div></span>
                                            <span class="top-name">Tên dài hai dòng Tên dài hai dòng</span>
                                            <span class="float-right top-amount">100.000.000đ</span>
                                        </li>
                                        <li class="d-flex">
                                            <span class="top-rank"><div style="">7</div></span>
                                            <span class="top-name">Tên dài hai dòng Tên dài hai dòng</span>
                                            <span class="float-right top-amount">100.000.000đ</span>
                                        </li>


                                    </ul>
                                </div>

                                <div class="footer-row-ct d-lg-none d-block">
                                    <div  class="col-md-12 left-right text-center js-toggle-content">
                                        <div class="view-more-top ">
                                            Xem thêm <img src="/assets/theme_3/image/icons/arrow-down.png" alt="">
                                        </div>
                                        <div class="view-less-top ">
                                            Rút gọn <img src="/assets/theme_3/image/icons/iconright.png" alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane  fade item-top mt-3" id="sixtydays-minigame"  role="tabpanel" aria-labelledby="sixty-minigame-tab">
                                <div class="item-top-content">
                                    <ul class="nav flex-column">
                                        <li class="d-flex">
                                            <span><img src="/assets/{{env('THEME_VERSION')}}/image/top_star.png" alt=""></span>
                                            <span class="top-name">Tên dài hai dòng </span>
                                            <span class="float-right top-amount">100.000.000đ</span>
                                        </li>
                                        <li class="d-flex">
                                            <span><img src="/assets/{{env('THEME_VERSION')}}/image/top_star.png" alt=""></span>
                                            <span class="top-name">Tên dài </span>
                                            <span class="float-right top-amount">100.000.000đ</span>
                                        </li>
                                        <li class="d-flex">
                                            <span><img src="/assets/{{env('THEME_VERSION')}}/image/top_star.png" alt=""></span>
                                            <span class="top-name">Tên dài </span>
                                            <span class="float-right top-amount">100.000.000đ</span>
                                        </li>
                                        <li class="d-flex">
                                            <span class="top-rank"><div style="">4</div></span>
                                            <span class="top-name">Tên dài hai dòng Tên dài hai dòng</span>
                                            <span class="float-right top-amount">100.000.000đ</span>
                                        </li>
                                        <li class="d-flex">
                                            <span class="top-rank"><div style="">5</div></span>
                                            <span class="top-name">Tên dài hai dòng Tên dài hai dòng</span>
                                            <span class="float-right top-amount">100.000.000đ</span>
                                        </li>
                                        <li class="d-flex">
                                            <span class="top-rank"><div style="">6</div></span>
                                            <span class="top-name">Tên dài hai dòng Tên dài hai dòng</span>
                                            <span class="float-right top-amount">100.000.000đ</span>
                                        </li>
                                        <li class="d-flex">
                                            <span class="top-rank"><div style="">7</div></span>
                                            <span class="top-name">Tên dài hai dòng Tên dài hai dòng</span>
                                            <span class="float-right top-amount">100.000.000đ</span>
                                        </li>


                                    </ul>
                                </div>

                                <div class="footer-row-ct d-lg-none d-block">
                                    <div  class="col-md-12 left-right text-center js-toggle-content">
                                        <div class="view-more-top ">
                                            Xem thêm <img src="/assets/theme_3/image/icons/arrow-down.png" alt="">
                                        </div>
                                        <div class="view-less-top ">
                                            Rút gọn <img src="/assets/theme_3/image/icons/iconright.png" alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="flash-sales block-product mt-fix-20 ">
            <div class="product-header d-flex">
                    <span>
                        <img src="/assets/{{env('THEME_VERSION')}}/image/flash_sales.png" alt="">
                    </span>
                <p class="text-title">Giảm sốc <span class="d-g-md-none"> trong ngày</span></p>
                <div class="timer" id="timer">
                    <span id="hourHome"></span>
                    <span id="minuteHome"></span>
                    <span id="secondHome"></span>
                </div>

                <div class="text-view-more">
                    <a href="/mua-acc" class="global__link">Xem thêm<i class="__icon --sm --link ml-1" style="--path : url(/assets/theme_3/image/icons/arrow-right-blue.png)"></i></a>
                </div>
            </div>
            <div class="box-product">
                <div class="swiper-container list-product" >
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" >
                            <a href="/minigame/slug">
                            <div class="item-product__box-img">

                                <img src="/assets/{{env('THEME_VERSION')}}/image/minigame1.gif" alt="">

                            </div>
                            <div class="item-product__box-content">


                                    <div class="item-product__box-name">
                                        Acc liên quan siêu vip
                                    </div>
                                    <div class="item-product__box-sale">
                                        Đã bán: 68,9K
                                    </div>
                                    <div class="item-product__box-price">

                                        <div class="special-price">15.000đ</div>
                                        <div class="old-price">30.000đ</div>
                                        <div class="item-product__sticker-percent">
                                            -50%
                                        </div>
                                    </div>

                            </div>
                            </a>
                        </div>
                        <div class="swiper-slide" >
                            <a href="/minigame/slug">
                                <div class="item-product__box-img">

                                    <img src="/assets/{{env('THEME_VERSION')}}/image/minigame3.gif" alt="">

                                </div>
                                <div class="item-product__box-content">


                                    <div class="item-product__box-name">
                                        Acc liên quan siêu vip
                                    </div>
                                    <div class="item-product__box-sale">
                                        Đã bán: 68,9K
                                    </div>
                                    <div class="item-product__box-price">

                                        <div class="special-price">15.000đ</div>
                                        <div class="old-price">30.000đ</div>
                                        <div class="item-product__sticker-percent">
                                            -50%
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide" >
                            <a href="/minigame/slug">
                                <div class="item-product__box-img">

                                    <img src="/assets/{{env('THEME_VERSION')}}/image/minigame2.gif" alt="">

                                </div>
                                <div class="item-product__box-content">


                                    <div class="item-product__box-name">
                                        Acc liên quan siêu vip
                                    </div>
                                    <div class="item-product__box-sale">
                                        Đã bán: 68,9K
                                    </div>
                                    <div class="item-product__box-price">

                                        <div class="special-price">15.000đ</div>
                                        <div class="old-price">30.000đ</div>
                                        <div class="item-product__sticker-percent">
                                            -50%
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide" >
                            <a href="/minigame/slug">
                                <div class="item-product__box-img">

                                    <img src="/assets/{{env('THEME_VERSION')}}/image/minigame4.gif" alt="">

                                </div>
                                <div class="item-product__box-content">


                                    <div class="item-product__box-name">
                                        Acc liên quan siêu vip
                                    </div>
                                    <div class="item-product__box-sale">
                                        Đã bán: 68,9K
                                    </div>
                                    <div class="item-product__box-price">

                                        <div class="special-price">15.000đ</div>
                                        <div class="old-price">30.000đ</div>
                                        <div class="item-product__sticker-percent">
                                            -50%
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide" >
                            <a href="/minigame/slug">
                                <div class="item-product__box-img">

                                    <img src="/assets/{{env('THEME_VERSION')}}/image/minigame6.gif" alt="">

                                </div>
                                <div class="item-product__box-content">


                                    <div class="item-product__box-name">
                                        Acc liên quan siêu vip
                                    </div>
                                    <div class="item-product__box-sale">
                                        Đã bán: 68,9K
                                    </div>
                                    <div class="item-product__box-price">

                                        <div class="special-price">15.000đ</div>
                                        <div class="old-price">30.000đ</div>
                                        <div class="item-product__sticker-percent">
                                            -50%
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide" >
                            <a href="/minigame/slug">
                                <div class="item-product__box-img">

                                    <img src="/assets/{{env('THEME_VERSION')}}/image/minigame2.gif" alt="">

                                </div>
                                <div class="item-product__box-content">


                                    <div class="item-product__box-name">
                                        Acc liên quan siêu vip
                                    </div>
                                    <div class="item-product__box-sale">
                                        Đã bán: 68,9K
                                    </div>
                                    <div class="item-product__box-price">

                                        <div class="special-price">15.000đ</div>
                                        <div class="old-price">30.000đ</div>
                                        <div class="item-product__sticker-percent">
                                            -50%
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" block-product mt-fix-20">
            <div class="product-header d-flex">
                    <span>
                        <img src="/assets/{{env('THEME_VERSION')}}/image/flash_sales.png" alt="">
                    </span>
                <p class="text-title">Dành cho bạn</p>
                <div class="product-catecory" >
                    <ul class="nav d-g-md-none" role="tablist" >
                        <li class="nav-item" role="presentation">
                            <a  class="nav-link active" id="account-tab" data-toggle="tab" href="#account" role="tab" aria-selected="true">Chơi gần đây</a>
                        </li >
                        <li class="nav-item" role="presentation">
                            <a  class="nav-link"  id="favourite_game-tab" data-toggle="tab" href="#favourite_game" role="tab" aria-selected="false"> Game mới siêu hot</a>
                        </li>

                    </ul>
                </div>

                <div class="text-view-more">
                    <a href="/recharge-game" class="global__link">Xem thêm<i class="__icon --sm --link ml-1" style="--path : url(/assets/theme_3/image/icons/arrow-right-blue.png)"></i></a>
                </div>
            </div>
            <div class="product-catecory d-none d-g-lg-block pt-fix-16 pr-fix-16 pl-fix-16" >
                <ul class="nav justify-content-between row" role="tablist" >
                    <li class="nav-item col-6 p-0 col-md-4 p-md-0" role="presentation">
                        <a  class="pb-fix-8 d-flex justify-content-center active"  data-toggle="tab" href="#account" role="tab" aria-selected="true">Chơi gần đây</a>
                    </li >
                    <li class="nav-item col-6 p-0 col-md-4 p-md-0" role="presentation">
                        <a  class="pb-fix-8 d-flex justify-content-center"  data-toggle="tab" href="#favourite_game" role="tab" aria-selected="false"> Game mới siêu hot</a>
                    </li>

                </ul>
            </div>
            <div class="box-product-content tab-content">
                <div class="box-product tab-pane fade active show" id="account" role="tabpanel" aria-labelledby="account-tab">
                    <div class="swiper-container list-product" >
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" >
                                <a href="/minigame/slug">
                                    <div class="item-product__box-img">

                                        <img src="/assets/{{env('THEME_VERSION')}}/image/minigame2.gif" alt="">

                                    </div>
                                    <div class="item-product__box-content">


                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <div class="special-price">15.000đ</div>
                                            <div class="old-price">30.000đ</div>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>

                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide" >
                                <a href="/minigame/slug">
                                    <div class="item-product__box-img">

                                        <img src="/assets/{{env('THEME_VERSION')}}/image/minigame4.gif" alt="">

                                    </div>
                                    <div class="item-product__box-content">


                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <div class="special-price">15.000đ</div>
                                            <div class="old-price">30.000đ</div>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>

                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide" >
                                <a href="/minigame/slug">
                                    <div class="item-product__box-img">

                                        <img src="/assets/{{env('THEME_VERSION')}}/image/minigame5.gif" alt="">

                                    </div>
                                    <div class="item-product__box-content">


                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <div class="special-price">15.000đ</div>
                                            <div class="old-price">30.000đ</div>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>

                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide" >
                                <a href="/minigame/slug">
                                    <div class="item-product__box-img">

                                        <img src="/assets/{{env('THEME_VERSION')}}/image/minigame3.gif" alt="">

                                    </div>
                                    <div class="item-product__box-content">


                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <div class="special-price">15.000đ</div>
                                            <div class="old-price">30.000đ</div>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>

                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide" >
                                <a href="/minigame/slug">
                                    <div class="item-product__box-img">

                                        <img src="/assets/{{env('THEME_VERSION')}}/image/minigame2.gif" alt="">

                                    </div>
                                    <div class="item-product__box-content">


                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <div class="special-price">15.000đ</div>
                                            <div class="old-price">30.000đ</div>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>

                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide" >
                                <a href="/minigame/slug">
                                    <div class="item-product__box-img">

                                        <img src="/assets/{{env('THEME_VERSION')}}/image/minigame1.gif" alt="">

                                    </div>
                                    <div class="item-product__box-content">


                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <div class="special-price">15.000đ</div>
                                            <div class="old-price">30.000đ</div>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>

                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="box-product tab-pane fade" id="favourite_game" role="tabpanel" aria-labelledby="favourite_game-tab">
                    <div class="swiper-container list-product" >
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" >
                                <a href="/minigame/slug">
                                    <div class="item-product__box-img">

                                        <img src="/assets/{{env('THEME_VERSION')}}/image/minigame5.gif" alt="">

                                    </div>
                                    <div class="item-product__box-content">


                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <div class="special-price">15.000đ</div>
                                            <div class="old-price">30.000đ</div>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>

                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide" >
                                <a href="/minigame/slug">
                                    <div class="item-product__box-img">

                                        <img src="/assets/{{env('THEME_VERSION')}}/image/minigame4.gif" alt="">

                                    </div>
                                    <div class="item-product__box-content">


                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <div class="special-price">15.000đ</div>
                                            <div class="old-price">30.000đ</div>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>

                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide" >
                                <a href="/minigame/slug">
                                    <div class="item-product__box-img">

                                        <img src="/assets/{{env('THEME_VERSION')}}/image/minigame2.gif" alt="">

                                    </div>
                                    <div class="item-product__box-content">


                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <div class="special-price">15.000đ</div>
                                            <div class="old-price">30.000đ</div>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>

                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide" >
                                <a href="/minigame/slug">
                                    <div class="item-product__box-img">

                                        <img src="/assets/{{env('THEME_VERSION')}}/image/minigame1.gif" alt="">

                                    </div>
                                    <div class="item-product__box-content">


                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <div class="special-price">15.000đ</div>
                                            <div class="old-price">30.000đ</div>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class=" block-product mt-fix-20 ">
            <div class="product-header d-flex">
                    <span>
                        <img src="/assets/{{env('THEME_VERSION')}}/image/flash_sales.png" alt="">
                    </span>
                <p class="text-title">Vòng quay Game Freefire</span></p>
                <div class="product-catecory"></div>
                <div class="text-view-more">
                    <a href="/dich-vu" class="global__link">Xem thêm<i class="__icon --sm --link ml-1" style="--path : url(/assets/theme_3/image/icons/arrow-right-blue.png)"></i></a>

                </div>
            </div>
            <div class="box-product">
                <div class="swiper-container list-product" >
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" >
                            <a href="/minigame/slug">
                                <div class="item-product__box-img">

                                    <img src="/assets/{{env('THEME_VERSION')}}/image/minigame1.gif" alt="">

                                </div>
                                <div class="item-product__box-content">


                                    <div class="item-product__box-name">
                                        Acc liên quan siêu vip
                                    </div>
                                    <div class="item-product__box-sale">
                                        Đã bán: 68,9K
                                    </div>
                                    <div class="item-product__box-price">

                                        <div class="special-price">15.000đ</div>
                                        <div class="old-price">30.000đ</div>
                                        <div class="item-product__sticker-percent">
                                            -50%
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide" >
                            <a href="/minigame/slug">
                                <div class="item-product__box-img">

                                    <img src="/assets/{{env('THEME_VERSION')}}/image/minigame1.gif" alt="">

                                </div>
                                <div class="item-product__box-content">


                                    <div class="item-product__box-name">
                                        Acc liên quan siêu vip
                                    </div>
                                    <div class="item-product__box-sale">
                                        Đã bán: 68,9K
                                    </div>
                                    <div class="item-product__box-price">

                                        <div class="special-price">15.000đ</div>
                                        <div class="old-price">30.000đ</div>
                                        <div class="item-product__sticker-percent">
                                            -50%
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
