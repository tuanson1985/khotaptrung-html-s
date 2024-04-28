@extends('frontend.layouts.master')

@section('content')
    <div class="container c-container">

        <div class="menu-category ">
                <ul class="d-flex justify-content-between px-0 menu-category_fixm ">
                    <li class="w-100 c-px-8 ">
                        <a href=""  >
                            <div class="c-p-18 brs-8 menu-category-item d-flex justify-content-center">
                                <img src="/assets/frontend/{{env('THEME_VERSION')}}/image/nam/storecard.svg" alt="" class="c-pr-4">
                                <span class="fw-500 fz-15 lh-24">Mua thẻ</span>
                            </div>
                        </a>
                    </li>
                    <li class="w-100 c-px-8 ">
                        <a href=""  >
                            <div class="c-p-18 brs-8 menu-category-item d-flex justify-content-center">
                                <img src="/assets/frontend/{{env('THEME_VERSION')}}/image/nam/storecard.svg" alt="" class="c-pr-4">
                                <span class="fw-500 fz-15 lh-24">Mua thẻ</span>
                            </div>
                        </a>
                    </li>
                    <li class="w-100 c-px-8 ">
                        <a href=""  >
                            <div class="c-p-18 brs-8 menu-category-item d-flex justify-content-center">
                                <img src="/assets/frontend/{{env('THEME_VERSION')}}/image/nam/storecard.svg" alt="" class="c-pr-4">
                                <span class="fw-500 fz-15 lh-24">Mua thẻ</span>
                            </div>
                        </a>
                    </li>
                    <li class="w-100 c-px-8 ">
                        <a href=""  >
                            <div class="c-p-18 brs-8 menu-category-item d-flex justify-content-center">
                                <img src="/assets/frontend/{{env('THEME_VERSION')}}/image/nam/storecard.svg" alt="" class="c-pr-4">
                                <span class="fw-500 fz-15 lh-24">Mua thẻ</span>
                            </div>
                        </a>
                    </li>
                    <li class="w-100 c-px-8 ">
                        <a href=""  >
                            <div class="c-p-18 brs-8 menu-category-item d-flex justify-content-center">
                                <img src="/assets/frontend/{{env('THEME_VERSION')}}/image/nam/storecard.svg" alt="" class="c-pr-4">
                                <span class="fw-500 fz-15 lh-24">Mua thẻ</span>
                            </div>
                        </a>
                    </li>
                    <li class="w-100 c-px-8 ">
                        <a href=""  >
                            <div class="c-p-18 brs-8 menu-category-item d-flex justify-content-center">
                                <img src="/assets/frontend/{{env('THEME_VERSION')}}/image/nam/storecard.svg" alt="" class="c-pr-4">
                                <span class="fw-500 fz-15 lh-24">Mua thẻ</span>
                            </div>
                        </a>
                    </li>

                </ul>
        </div>
    </div>

{{--    <div id="menu-bottom-tabs" class="tabs">--}}
{{--        <ul class="d-flex justify-content-between px-0 mb-0 flex-grow-1 flex-shrink-0">--}}
{{--            <li class="menu-bottom-item px-0 ">--}}
{{--                <a href="" class="d-flex justify-content-center c-p-5 fz-13 fw-400 flex-column align-items-center">--}}

{{--                    <span class="menu-bottom_icon c-pt-6 c-pb-2 text-center  c-mb-4 brs-24">--}}
{{--                        @if(Request::is('/'))--}}
{{--                             <i class="__icon__profile --sm__profile --link__profile" style="--path : url(/assets/frontend/theme_5/image/nam/menu-bottom-home_active.svg)"></i>--}}
{{--                        @else--}}
{{--                            <i class="__icon__profile --sm__profile --link__profile" style="--path : url(/assets/frontend/theme_5/image/nam/menu-bottom-home.svg)"></i>--}}

{{--                        @endif--}}
{{--                    </span>--}}

{{--                    <span class="menu-bottom_text">Home</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="menu-bottom-item px-0 ">--}}
{{--                <a href="" class="d-flex justify-content-center c-p-5 fz-13 fw-400 flex-column align-items-center">--}}
{{--                    <span class="menu-bottom_icon c-pt-6 c-pb-2 text-center  c-mb-4 brs-24">--}}
{{--                      @if(Request::has('/dich-vu/'))--}}
{{--                        <i class="__icon__profile --sm__profile --link__profile" style="--path : url(/assets/frontend/theme_5/image/nam/menu-bottom-service_active.svg)"></i>--}}
{{--                      @else--}}
{{--                        <i class="__icon__profile --sm__profile --link__profile" style="--path : url(/assets/frontend/theme_5/image/nam/menu-bottom-service_active.svg)"></i>--}}
{{--                    @endif--}}
{{--                    </span>--}}

{{--                    <span class="menu-bottom_text">Dịch vụ</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="menu-bottom-item px-0 ">--}}
{{--                <a href="" class="d-flex justify-content-center c-p-5 fz-13 fw-400 flex-column align-items-center">--}}
{{--                    <span class="menu-bottom_icon c-pt-6 c-pb-2 text-center  c-mb-4 brs-24">--}}
{{--                        <i class="__icon__profile --sm__profile --link__profile" style="--path : url(/assets/frontend/theme_5/image/nam/menu-bottom-charge.svg)"></i>--}}
{{--                    </span>--}}

{{--                    <span class="menu-bottom_text">Nạp tiền</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="menu-bottom-item px-0 ">--}}
{{--                <a href="" class="d-flex justify-content-center c-p-5 fz-13 fw-400 flex-column align-items-center">--}}
{{--                    <span class="menu-bottom_icon c-pt-6 c-pb-2 text-center  c-mb-4 brs-24">--}}
{{--                        <i class="__icon__profile --sm__profile --link__profile" style="--path : url(/assets/frontend/theme_5/image/nam/menu-bottom-minigame.svg)"></i>--}}
{{--                    </span>--}}

{{--                    <span class="menu-bottom_text">Mini Game</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="menu-bottom-item px-0 is-active">--}}
{{--                <a href="" class="d-flex justify-content-center c-p-5 fz-13 fw-400 flex-column align-items-center">--}}
{{--                    <span class="menu-bottom_icon c-pt-6 c-pb-2  text-center  c-mb-4 brs-24">--}}
{{--                        <i class="__icon__profile --sm__profile --link__profile" style="--path : url(/assets/frontend/theme_5/image/nam/menu-bottom-profile.svg)"></i>--}}
{{--                    </span>--}}

{{--                    <span class="menu-bottom_text">Tài khoản</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </div>--}}
@endsection
