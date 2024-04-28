@extends('frontend.layouts.master')

@section('content')

    {{--  Menu  --}}
    <section class="media-web">
        <div class="container container-fix menu-container-ct">
            <ul>
                <li><a href="/">Trang chủ</a></li>
                <li class="menu-container-li-ct"><img class="lazy" src="/assets/{{env('THEME_VERSION')}}/image/cay-thue/arrow-right.png" alt=""></li>
                <li class="menu-container-li-ct"><a href="/profile">Đổi mật khẩu</a></li>
            </ul>
        </div>
    </section>

    <section class="media-mobile">
        <div class="container container-fix banner-mobile-container-ct">

            <div class="row marginauto banner-mobile-row-ct">
                <div class="col-auto left-right" style="width: 10%">
                    <a href="#" class="previous-step-one box-account-mobile_open" style="line-height: 28px">
                        <img class="lazy" src="/assets/{{env('THEME_VERSION')}}/image/cay-thue/back.png" alt="" >
                    </a>
                </div>

                <div class="col-auto left-right banner-mobile-span text-center" style="width: 80%">
                    <h3>Đổi mật khẩu</h3>
                </div>
                <div class="col-auto left-right" style="width: 10%">
                </div>
            </div>

        </div>
    </section>

    {{--   Bopdy --}}
    <section>
        <div class="container container-fix body-container-ct">
            <div class="row marginauto body-container-row-ct profile-category-body body-container-row-mobile-ct">
                @include('theme_3.frontend.widget.__navbar__profile')

                <div class="col-lg-9 col-12 body-container-detail-right-ct ">
                    <div class="row marginauto logs-content profile-category">
                        <div class="col-md-12 left-right">
                            <div class="row marginauto">
                                <div class="col-md-12 left-right">
                                    <div class="row marginauto logs-title">
                                        <div class="col-md-12 left-right">
                                            <span>Đổi mật khẩu</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 left-right text-change-password-default">

                                    <div class="row marginauto change-password-first change-password-row">
                                        <div class="col-12 left-right">
                                            <span>Mật khẩu cũ</span>
                                        </div>
                                        <div class="col-auto change-password-default change-password-col-last left-right">
                                            <input type="text" class="input-defautf-ct password-old" autocomplete="off" placeholder="Nhập mật khẩu cũ">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-m-12 password-old-error">

                                </div>
                                <div class="col-md-12 left-right text-change-password-default">

                                    <div class="row marginauto change-password-last change-password-row">
                                        <div class="col-12 left-right">
                                            <span>Mật khẩu mới</span>
                                        </div>
                                        <div class="col-auto change-password-default change-password-col-last left-right">
                                            <input type="text" class="input-defautf-ct password-new" autocomplete="off" placeholder="Nhập mật khẩu mới">
                                        </div>

                                    </div>

                                </div>
                                <div class="col-m-12 password-new-error">

                                </div>
                                <div class="col-md-12 left-right text-change-password-default">

                                    <div class="row marginauto change-password-last change-password-row">
                                        <div class="col-12 left-right">
                                            <span>Xác nhận mật khẩu</span>
                                        </div>
                                        <div class="col-auto change-password-default change-password-col-last left-right">
                                            <input type="text" class="input-defautf-ct password-confirm" autocomplete="off" placeholder="Xác nhận mật khẩu">
                                        </div>

                                    </div>

                                </div>
                                <div class="col-m-12 password-confirm-error">

                                </div>
                                <div class="col-md-12 left-right text-change-password-default">

                                    <div class="row marginauto change-password-last change-password-row">
                                        <div class="col-auto  change-password-default change-password-col-last left-right">
                                            <button class="button-default-ct btn-data" type="button">Đổi mật khẩu</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="modal fade login show default-Modal" id="successModal" aria-modal="true">
        <div class="modal-dialog modal-md modal-dialog-centered login animated">
            <!--        <div class="image-login"></div>-->
            <div class="modal-content">
                <div class="modal-header modal-header-success-ct">
                    <div class="row marginauto modal-header-success-row-ct justify-content-center">
                        <div class="col-md-12 text-center">
                            <span>Thay đổi mật khẩu thành công</span>
                        </div>
                    </div>
                </div>

                <div class="modal-body modal-body-success-ct">
                    <div class="row marginauto justify-content-center">
                        <div class="col-auto">
                            <img class="lazy" src="/assets/{{env('THEME_VERSION')}}/image/cay-thue/group.png" alt="">
                        </div>
                    </div>
                    <div class="row marginauto modal-body-span-success-ct justify-content-center">
                        <div class="col-md-12 text-center">
                            <span>Bạn đã thay đổi mật khẩu thành công, vui lòng đăng nhập lại!</span>
                        </div>
                    </div>
                    <div class="row marginauto justify-content-center modal-footer-success-ct">
                        <div class="col-md-6 col-6 modal-footer-success-col-left-ct">
                            <div class="row marginauto modal-footer-success-row-not-ct">
                                <div class="col-md-12 left-right">
                                    <a href="/" class="button-not-bg-ct"><span>Về trang chủ</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-6 modal-footer-success-col-right-ct">
                            <div class="row marginauto modal-footer-success-row-ct">
                                <div class="col-md-12 left-right">
                                    <a href="/" class="button-bg-ct"><span>Đăng nhập lại</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/assets/{{env('THEME_VERSION')}}/js/user/change-password.js"></script>
@endsection

