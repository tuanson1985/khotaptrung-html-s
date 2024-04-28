
@extends('frontend.layouts.master')

@section('content')
    <div class="container c-container">
        <div class="banner-slide swiper-general c-mt-16">
            <div class=" swiper swiper-banner brs-12">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/assets/frontend/{{env('THEME_VERSION')}}/image/nam/banner1.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="/assets/frontend/{{env('THEME_VERSION')}}/image/nam/banner2.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="/assets/frontend/{{env('THEME_VERSION')}}/image/nam/banner3.png" alt="">
                    </div>

                </div>

                <div class="navigation slider-next "></div>
                <div class="navigation slider-prev "></div>
{{--                <div class="swiper-button-prev"></div>--}}
{{--                <div class="swiper-button-next"></div>--}}
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="container c-container">
        <div class="ads-banner row c-mt-16">
            <div class="banner-slide col-lg-9 col-md-12  c-pr-8 c-pr-lg-16 swiper-general">
                <div class=" swiper swiper-banner brs-12">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/assets/frontend/{{env('THEME_VERSION')}}/image/nam/banner1.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/assets/frontend/{{env('THEME_VERSION')}}/image/nam/banner2.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/assets/frontend/{{env('THEME_VERSION')}}/image/nam/banner3.png" alt="">
                        </div>

                    </div>

                    <div class="navigation slider-next "></div>
                    <div class="navigation slider-prev "></div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="col-md-3 c-pl-8 d-none d-lg-flex flex-column justify-content-between " style="min-height: 100%">
                <div class="ads-banner-second brs-12">
                    <a href="">
                        <img src="/assets/frontend/{{env('THEME_VERSION')}}/image/nam/banner2.png" alt="" >
                    </a>

                </div>
                <div class="ads-banner-second brs-12">
                    <a href="">
                        <img src="/assets/frontend/{{env('THEME_VERSION')}}/image/nam/banner2.png" alt="" >

                    </a>
                </div>

            </div>
    </div>
    </div>

    <div class="container c-container">
        <div class="slide-card c-p-16 c-mt-16 c-p-lg-12 swiper-general banner-news" style="margin-bottom: 200px">
            <div class=" swiper news-ads-slide brs-12">
                <div class=" swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="">
                            <div class="row c-px-16 ">
                                <div class="col-lg-8 col-12 col-md-12 c-px-0 news-ads-img brs-12">
                                    <img src="/assets/frontend/{{env('THEME_VERSION')}}/image/nam/banner1.png" alt="">
                                </div>
                                <div class="col-lg-4 col-12 col-md-12 c-pr-0 c-py-0 c-pl-32 c-pl-lg-0 c-pt-lg-24 news-ads-content">

                                    <div class="news-title fw-700 fz-32 lh-40 limit-6 fz-lg-18 lh-lg-24 text-limit">
                                        BXH top 10 đội tuyển eSpó V Gaming mới Gaming mới vượt mặt được
                                    </div>
                                    <div class="news-title-content c-mt-24 fw-500 fz-15 lh-24 limit-4 text-limit d-none d-lg-block ">
                                        Trước khi ẵm trọn 16 tỷ tiền thưởng tại AIC 2022, V Gaming vẫn là đội giữ giải thưởng cao nhất lịch sử giữ giải thưởng cao nhất lịch sử giữ giải thưởng cao nhất lịch sử Esports ch sử Esports Việt Nam với 4,67 tỷ tiền thưởng tại AIC 2021.

                                    </div>
                                    <div class="news-info d-flex c-mt-12 fz-12 lh-16 d-block d-lg-none">
                                        <div class="c-mr-8">
                                            <img src="/assets/frontend/{{env('THEME_VERSION')}}/image/nam/clock.svg" alt="" class="c-mr-2">
                                            22-02-2022

                                        </div>
                                        <div>
                                            <img src="/assets/frontend/{{env('THEME_VERSION')}}/image/nam/author.svg" alt="" class="c-mr-2">
                                            An Nguyen
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="row c-px-16 ">
                                <div class="col-lg-8 col-12 col-md-12 c-px-0 news-ads-img brs-12">
                                    <img src="/assets/frontend/{{env('THEME_VERSION')}}/image/nam/banner1.png" alt="">
                                </div>
                                <div class="col-lg-4 col-12 col-md-12 c-pr-0 c-py-0 c-pl-32 c-pl-lg-0 c-pt-lg-24 news-ads-content">

                                    <div class="news-title fw-700 fz-32 lh-40 limit-6 fz-lg-18 lh-lg-24 text-limit">
                                        BXH top 10 đội tuyển eSports Việt ‘lụm tiền thưởng’ ‘lụm tiền thưởng’ nhiều nhất trong một giải đấu: Chỉ có V Gaming mới Gaming mới vượt mặt được
                                    </div>
                                    <div class="news-title-content c-mt-24 fw-500 fz-15 lh-24 limit-4 text-limit d-none d-lg-block ">
                                        Trước khi ẵm trọn 16 tỷ tiền thưởng tại AIC 2022, V Gaming vẫn là đội giữ giải thưởng cao nhất lịch sử giữ giải thưởng cao nhất lịch sử giữ giải thưởng cao nhất lịch sử Esports ch sử Esports Việt Nam với 4,67 tỷ tiền thưởng tại AIC 2021.

                                    </div>
                                    <div class="news-info d-flex c-mt-12 fz-12 lh-16 d-block d-lg-none">
                                        <div class="c-mr-8">
                                            <img src="/assets/frontend/{{env('THEME_VERSION')}}/image/nam/clock.svg" alt="" class="c-mr-2">
                                            22-02-2022

                                        </div>
                                        <div>
                                            <img src="/assets/frontend/{{env('THEME_VERSION')}}/image/nam/author.svg" alt="" class="c-mr-2">
                                            An Nguyen
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </a>

                    </div>
                </div>

                <div class="navigation slider-next "></div>
                <div class="navigation slider-prev "></div>
            </div>
            <div class="swiper-pagination"></div>
            </div>
        </div>


@endsection
