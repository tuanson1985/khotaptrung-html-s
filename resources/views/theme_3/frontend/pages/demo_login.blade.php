@extends('theme_3.frontend.layouts.master')
@section('styles')
    
@endsection
@section('scripts')
    <script src="/assets/{{env('THEME_VERSION')}}/js/js_phu/withdraw_items.js"></script>
@endsection
@section('content')
<button type="button" onclick="openLoginModal();">Đăng nhập</button>
<button type="button" onclick="openRegisterModal();">Đăng kí</button>
@endsection