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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/assets/frontend/{{env('THEME_VERSION')}}/lib/sweetalert2/sw2.css">
    <link rel="stylesheet" href="/assets/frontend/{{env('THEME_VERSION')}}/lib/bootstrap/bootstrap.min.css">
    <!--    swiper-->
    <link rel="stylesheet" href="/assets/frontend/{{env('THEME_VERSION')}}/lib/swiper/swiper.min.css">
    <link rel="stylesheet" href="/assets/frontend/{{env('THEME_VERSION')}}/lib/animate/animate.min.css">
    <link rel="stylesheet" href="/assets/frontend/{{env('THEME_VERSION')}}/lib/OwlCarousel2/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/frontend/{{env('THEME_VERSION')}}/lib/date-picker/bootstrap-datetimepicker.css">
    <link rel="stylesheet" href="/assets/frontend/{{env('THEME_VERSION')}}/lib/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/assets/frontend/{{env('THEME_VERSION')}}/lib/fancybox/fancybox.css">
    <link rel="stylesheet" href="/assets/frontend/{{env('THEME_VERSION')}}/lib/toastr/toastr.css">
    <link rel="stylesheet" href="/assets/frontend/{{env('THEME_VERSION')}}/lib/steps/jquery-steps.css">
    <link rel="stylesheet" href="/assets/frontend/{{env('THEME_VERSION')}}/lib/select-nice/select-nice.css">

    <link rel="stylesheet" href="/assets/frontend/{{env('THEME_VERSION')}}/css/son/login_modal.css">
    <link rel="stylesheet" href="/assets/frontend/{{env('THEME_VERSION')}}/css/modal-custom.css">
    <link rel="stylesheet" href="/assets/frontend/{{env('THEME_VERSION')}}/css/main.css">
    <link rel="stylesheet" href="/assets/frontend/{{env('THEME_VERSION')}}/css/duong/style.css">
    <link rel="stylesheet" href="/assets/frontend/{{env('THEME_VERSION')}}/css/normalize.css">
    <link rel="stylesheet" href="/assets/frontend/{{env('THEME_VERSION')}}/css/main.css">
    <link rel="stylesheet" href="/assets/frontend/{{env('THEME_VERSION')}}/css/style-custom.css">
    <link rel="stylesheet" href="/assets/frontend/{{env('THEME_VERSION')}}/css/son/style.css">
    <link rel="stylesheet" href="/assets/frontend/{{env('THEME_VERSION')}}/css/phu/style.css">
    <link rel="stylesheet" href="/assets/frontend/{{env('THEME_VERSION')}}/css/nam/header.css">
    <link rel="stylesheet" href="/assets/frontend/{{env('THEME_VERSION')}}/css/nam/menu-category.css">
    <link rel="stylesheet" href="/assets/frontend/{{env('THEME_VERSION')}}/css/nam/menu-bottom.css">
    <link rel="stylesheet" href="/assets/frontend/{{env('THEME_VERSION')}}/css/nam/slide-banner.css">
    <link rel="stylesheet" href="/assets/frontend/{{env('THEME_VERSION')}}/css/nam/change-password.css">
    <link rel="stylesheet" href="/assets/frontend/{{env('THEME_VERSION')}}/lib/nouislider/nouislider.css">
    <link rel="stylesheet" href="/assets/frontend/{{env('THEME_VERSION')}}/css/son/service-mobile.css">
    <link rel="stylesheet" href="/assets/frontend/{{env('THEME_VERSION')}}/css/duong/component-style.css">
    <link rel="stylesheet" href="/assets/frontend/{{env('THEME_VERSION')}}/css/trong/components.css">

    {{--    import css --}}
    @yield('styles')
</head>
<body>

@include('frontend.layouts.includes.header')
<div class="layout" >
    <div class="content" style="">
        @yield('content')
    </div>
</div>


@include('frontend.layouts.includes.footer')

@include('frontend.layouts.includes.menu-bottom')
@include('frontend.widget.modal.__login')
<!-- Messenger Plugin chat Code -->

<script src="/assets/frontend/{{env('THEME_VERSION')}}/lib/jquery/jquery.min.js"></script>
<script src="/assets/frontend/{{env('THEME_VERSION')}}/lib/wnumb-1.2.0/wNumb.min.js"></script>

<script src="/assets/frontend/{{env('THEME_VERSION')}}/lib/bootstrap/bootstrap.min.js"></script>
<script src="/assets/frontend/{{env('THEME_VERSION')}}/lib/lazyload/lazyloadGen.js"></script>
<script src="/assets/frontend/{{env('THEME_VERSION')}}/lib/toastr/toastr.min.js"></script>
<script src="/assets/frontend/{{env('THEME_VERSION')}}/lib/sweetalert2/sw2.js"></script>
<script src="/assets/frontend/{{env('THEME_VERSION')}}/lib/select-nice/select-nice.js"></script>
<script src="/assets/frontend/{{env('THEME_VERSION')}}/lib/popper/popper.min.js"></script>
<script src="/assets/frontend/{{env('THEME_VERSION')}}/lib/popper/tippy-bundle.umd.js"></script>
<script src="/assets/frontend/{{env('THEME_VERSION')}}/lib/steps/jquery-steps.js"></script>
<script src="/assets/frontend/{{env('THEME_VERSION')}}/lib/easeJquery/easing.js"></script>
<script src="/assets/frontend/{{env('THEME_VERSION')}}/js/login/login_modal.js"></script>
<script src="/assets/frontend/{{env('THEME_VERSION')}}/lib/nouislider/nouislider.min.js"></script>

<script src="/assets/frontend/{{env('THEME_VERSION')}}/lib/fancybox/fancybox.umd.js"></script>
<script src="/assets/frontend/{{env('THEME_VERSION')}}/lib/fancybox/jquery.fancybox.min.js"></script>
<script src="/assets/frontend/{{env('THEME_VERSION')}}/lib/OwlCarousel2/OwlCarousel2.min.js"></script>
<script src="/assets/frontend/{{env('THEME_VERSION')}}/lib/slick/slick.min.js"></script>
<script src="/assets/frontend/{{env('THEME_VERSION')}}/lib/swiper/swiper.min.js"></script>
<script src="/assets/frontend/{{env('THEME_VERSION')}}/js/config/swiper-slider-conf.js"></script>
<script src="/assets/frontend/{{env('THEME_VERSION')}}/lib/date-picker/moment.js"></script>
<script src="/assets/frontend/{{env('THEME_VERSION')}}/lib/date-picker/bootstrap-datetimepicker.js"></script>
<script src="/assets/frontend/{{env('THEME_VERSION')}}/lib/validate-form/validate.js"></script>
<script src="/assets/frontend/{{env('THEME_VERSION')}}/js/config/form-validate.js"></script>
<script src="/assets/frontend/{{env('THEME_VERSION')}}/lib/date-picker/i18n/vi.js"></script>
<script src="/assets/frontend/{{env('THEME_VERSION')}}/js/custom/main.js"></script>
<script src="/assets/frontend/{{env('THEME_VERSION')}}/js/nam/header.js"></script>
<script src="/assets/frontend/{{env('THEME_VERSION')}}/js/nam/swiper-banner.js"></script>
<script src="/assets/frontend/{{env('THEME_VERSION')}}/js/nam/login.js"></script>
<script src="/assets/frontend/{{env('THEME_VERSION')}}/lib/bottom-sheet/main.js" defer></script>
<script src="/assets/frontend/{{env('THEME_VERSION')}}/lib/history-filter/handle.js"></script>
{{--impport script--}}
@yield('scripts')
</body>


</html>
