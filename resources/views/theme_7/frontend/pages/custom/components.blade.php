@extends('frontend.layouts.master')
@section('styles')
    <link rel="stylesheet" href="/assets/frontend/{{env('THEME_VERSION')}}/css/trong/components.css">
@endsection
@section('content')
    <div class="container c-container">

        <!-- Margin trục dọc ra cho dễ nhìn thôi, không có gì đâu ^^ -->


        <div class="my-4"></div>
        @include('frontend.pages.components.outstanding-service')
        <div class="my-4"></div>
        @include('frontend.pages.components.description')
        <div class="my-4"></div>
        @include('frontend.pages.components.flash-sale')
        <div class="my-4"></div>
        @include('frontend.pages.components.buy-the-most')
        <div class="my-4"></div>
        @include('frontend.pages.components.slider-news')
        <div class="my-4"></div>
        @include('frontend.pages.components.related-posts')
        <div class="my-4"></div>
        @include('frontend.pages.components.list-account')
        <div class="my-4"></div>
        @include('frontend.pages.components.service-detail')
        <div class="my-4"></div>
        @include('frontend.pages.components.listing-service')
        <div class="my-4"></div>
        @include('frontend.pages.components.section-category')
        <div class="my-4"></div>
        @include('frontend.pages.components.section-category-tab')
        <div class="my-4"></div>
        @include('frontend.pages.components.acc-game')
        <div class="my-4"></div>
        @include('frontend.pages.components.acc-game-v2')
        <div class="my-4"></div>
        @include('frontend.pages.components.related-service')
        <div class="my-4"></div>
        @include('frontend.pages.components.withdraw-money')
{{--        <div class="c-my-50"></div>--}}
{{--        @include('frontend.pages.components.withdraw-items')--}}
{{--        @include('frontend.pages.components.acc-detail')--}}

    </div>
@endsection
