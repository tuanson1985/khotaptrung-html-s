<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="index,follow" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="path" content="" />
    <meta name="jwt" content="jwt" />
{{--    <meta name="google-site-verification" content="{{setting('sys_google_search_console')}}" />--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/lib/sweetalert2/sw2.css">
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/lib/bootstrap/bootstrap.min.css">
    <!--    swiper-->
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/lib/swiper/swiper.min.css">
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/lib/animate/animate.min.css">
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/lib/OwlCarousel2/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/lib/date-picker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/lib/bootstrapdatepicker/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/lib/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/lib/fancybox/fancybox.css">
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/lib/toastr/toastr.css">
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/lib/steps/jquery-steps.css">
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/lib/select-nice/select-nice.css">

    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/css/style.css">
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/css/style_son.css">

    <script src="/assets/{{env('THEME_VERSION')}}/lib/jquery/jquery.min.js"></script>
    <script src="/assets/{{env('THEME_VERSION')}}/lib/bootstrap/bootstrap.min.js"></script>

    <script src="/assets/{{env('THEME_VERSION')}}/lib/lazyload/lazyloadGen.js"></script>
    <script src="/assets/{{env('THEME_VERSION')}}/lib/toastr/toastr.min.js"></script>
    <script src="/assets/{{env('THEME_VERSION')}}/lib/sweetalert2/sw2.js"></script>
    <script src="/assets/{{env('THEME_VERSION')}}/lib/select-nice/select-nice.js"></script>
    <script src="/assets/{{env('THEME_VERSION')}}/lib/tippy/popper.js"></script>
    <script src="/assets/{{env('THEME_VERSION')}}/lib/tippy/tippy.js"></script>
    <script src="/assets/{{env('THEME_VERSION')}}/lib/steps/jquery-steps.js"></script>
    <script src="/assets/{{env('THEME_VERSION')}}/lib/easeJquery/easing.js"></script>
</head>
<body>

<div class="layout">

    @include('frontend.layouts.includes.header')
    <div class="content" style="">
        @yield('content')
    </div>
    @include('frontend.layouts.includes.footer')

</div>


<!-- Messenger Plugin chat Code -->

<script src="/assets/{{env('THEME_VERSION')}}/lib/fancybox/fancybox.umd.js"></script>
<script src="/assets/{{env('THEME_VERSION')}}/lib/fancybox/jquery.fancybox.min.js"></script>
<script src="/assets/{{env('THEME_VERSION')}}/lib/OwlCarousel2/OwlCarousel2.min.js"></script>
<script src="/assets/{{env('THEME_VERSION')}}/lib/slick/slick.min.js"></script>
<script src="/assets/{{env('THEME_VERSION')}}/lib/swiper/swiper.min.js"></script>
<script src="/assets/{{env('THEME_VERSION')}}/js/main.js"></script>
<script src="/assets/{{env('THEME_VERSION')}}/js/swiper.js"></script>

</body>


</html>
