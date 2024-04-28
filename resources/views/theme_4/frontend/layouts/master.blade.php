<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="index,follow"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="path" content=""/>
    <meta name="jwt" content="jwt"/>
    {{--    <meta name="google-site-verification" content="{{setting('sys_google_search_console')}}" />--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/lib/sweetalert2/sw2.css">
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/lib/bootstrap/bootstrap.min.css">
    <!--    swiper-->
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/lib/swiper/swiper.min.css">
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/lib/animate/animate.min.css">
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/lib/OwlCarousel2/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/lib/date-picker/bootstrap-datetimepicker.css">
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/lib/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/lib/fancybox/fancybox.css">
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/lib/toastr/toastr.css">
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/lib/steps/jquery-steps.css">
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/lib/select-nice/select-nice.css">

    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/css/css_nam/style.css">
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/css/css_nam/lib_bootstrap.css">
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/css/css_nam/minigame.css">
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/css/style_son.css">
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/css/style_trong.css">
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/css/style_duong.css">
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/css/style_phu/form_element.css">
    @if (!Auth::check())
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/css/style_phu/login_modal.css">
    @endif

{{--    import css --}}
    @yield('styles')
    <script src="/assets/{{env('THEME_VERSION')}}/lib/jquery/jquery.min.js"></script>
    <script src="/assets/{{env('THEME_VERSION')}}/lib/bootstrap/bootstrap.min.js"></script>

    <script src="/assets/{{env('THEME_VERSION')}}/lib/lazyload/lazyloadGen.js"></script>
    <script src="/assets/{{env('THEME_VERSION')}}/lib/toastr/toastr.min.js"></script>
    <script src="/assets/{{env('THEME_VERSION')}}/lib/sweetalert2/sw2.js"></script>
    <script src="/assets/{{env('THEME_VERSION')}}/lib/select-nice/select-nice.js"></script>
    <script src="/assets/{{env('THEME_VERSION')}}/lib/popper/popper.min.js"></script>
    <script src="/assets/{{env('THEME_VERSION')}}/lib/popper/tippy-bundle.umd.js"></script>
    <script src="/assets/{{env('THEME_VERSION')}}/lib/steps/jquery-steps.js"></script>
    <script src="/assets/{{env('THEME_VERSION')}}/lib/easeJquery/easing.js"></script>
</head>
<body>
<script>
    $(document).ready(function () {
        @if(Request::is('nap-the'))

        $('#nav-charge').addClass('nav-profile-active')
        @elseif(Request::is('mua-the'))
        $('#nav-store').addClass('nav-profile-active')
        @elseif(Request::is('mua-acc'))
        $('#nav-buy__acc').addClass('nav-profile-active')
        @elseif(Request::is('dich-vu'))
        $('#nav-service').addClass('nav-profile-active')
        @elseif(Request::is('recharge-game'))
        $('#nav-recharge_game').addClass('nav-profile-active')
        @elseif(Request::is('minigame'))
        $('#nav-minigame').addClass('nav-profile-active')
        @endif
    })
</script>
@include('frontend.layouts.includes.header')
<div class="layout">


    <div class="content" style="">
        @yield('content')
    </div>


</div>
@if(Request::is('/'))
@include('frontend.layouts.includes.footer')

@endif
@if (!Auth::check())
    @include('theme_3.frontend.widget.modal.__login')
@endif

<!-- Messenger Plugin chat Code -->
@if (!Auth::check())
<script src="/assets/{{env('THEME_VERSION')}}/js/js_phu/login_modal.js"></script>
@endif
<script src="/assets/{{env('THEME_VERSION')}}/lib/fancybox/fancybox.umd.js"></script>
<script src="/assets/{{env('THEME_VERSION')}}/lib/fancybox/jquery.fancybox.min.js"></script>
<script src="/assets/{{env('THEME_VERSION')}}/lib/OwlCarousel2/OwlCarousel2.min.js"></script>
<script src="/assets/{{env('THEME_VERSION')}}/lib/slick/slick.min.js"></script>
<script src="/assets/{{env('THEME_VERSION')}}/lib/swiper/swiper.min.js"></script>
<script src="/assets/{{env('THEME_VERSION')}}/js/js_nam/main.js"></script>
<script src="/assets/{{env('THEME_VERSION')}}/js/js_nam/swiper.js"></script>
<script src="/assets/{{env('THEME_VERSION')}}/js/js_duong/slider.js"></script>
<script src="/assets/{{env('THEME_VERSION')}}/lib/date-picker/moment.js"></script>
<script src="/assets/{{env('THEME_VERSION')}}/lib/date-picker/bootstrap-datetimepicker.js"></script>

{{--impport script--}}
@yield('scripts')
</body>


</html>
