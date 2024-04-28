@extends('frontend.layouts.master')
@section('content')
    <div class="container mx-auto mb-4">
        <h3>Modal </h3>
        <button class="btn primary" data-toggle="modal" data-target="#loginModal">Đăng ký đăng nhập</button>
{{--        <button class="btn primary" onclick="openLoginModal();">Đăng ký đăng nhập</button>--}}
        <br>
        <hr>
        <button class="btn primary" data-toggle="modal" data-target="#modal-demo-02">Modal 02</button>
        <br>
        <hr>
        <button class="btn primary" data-toggle="modal" data-target="#modal-demo-03">Modal 03</button>
        <br>
        <hr>
        <button class="btn primary" data-toggle="modal" data-target="#modal-demo-04">Modal 04</button>

        <br>
        <hr>
        <button class="btn primary" data-toggle="modal" data-target="#modal-demo-05">Modal 05</button>

        <br>
        <hr>
        <button class="btn primary" data-toggle="modal" data-target="#modal-demo-06">Modal 06</button>

        <br>
        <hr>
        <button class="btn primary" data-toggle="modal" data-target="#modal-demo-07">Modal 07</button>

        <br>
        <hr>
        <button class="btn primary" data-toggle="modal" data-target="#modal-demo-08">Modal 08</button>

        <br>
        <hr>
        <button class="btn primary" data-toggle="modal" data-target="#modal-demo-09">Modal 09</button>

        <br>
        <hr>
        <button class="btn primary" data-toggle="modal" data-target="#modal-demo-10">Modal 10</button>

        <br>
        <hr>
        <button class="btn primary" data-toggle="modal" data-target="#modal-demo-11">Modal 11</button>

        <br>
        <hr>
        <button class="btn primary" data-toggle="modal" data-target="#modal-demo-12">Modal 12</button>

        <br>
        <hr>
        <button class="btn primary" data-toggle="modal" data-target="#modal-demo-13">Modal 13</button>

        <br>
        <hr>
        <button class="btn primary modal-demo-14" data-toggle="modal" data-target="#modal-demo-14">Modal 14</button>

        <br>
        <hr>
        <button class="btn primary modal-demo-15" data-toggle="modal" data-target="#modal-demo-15">Modal 15</button>

        <br>
        <hr>
        <button class="btn primary modal-demo-15" data-toggle="modal" data-target="#modal-demo-16">Modal 16</button>
    </div>


{{--    Đăng ký đăng nhập   --}}

    <!-- Modal -->
    <div class="modal fade" id="modal-demo">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title center">Modal title</h2>
                    <button type="button" class="close" data-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button class="btn ghost">Xoá bộ lọc</button>
                    <button class="btn primary">Xem kết quả</button>
                </div>
            </div>
        </div>
    </div>

{{--    Modal login --}}
    <div class="modal fade" id="loginModal">
        <div class="modal-dialog modal-lg modal-dialog-centered animated">
            <div class="modal-content">
                <div class="modal-login-container" id="modal-login-container">
                    <div class="modal-login-form-container sign-up-container">
                        <img class="close-login-modal" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/close.svg" alt="">
                        <form class="modal-login-form formRegister" id="formRegister" action="" method="POST">
                            @csrf
                            <p class="fw-700 fz-24 fz-lg-24 fz-md-18 fz-sm-16 color-pink">Đăng ký</p>
{{--                            <small class="fz-13 fz-md-12 fz-sm-10 fw-400 c-mb-12">Vui lòng đăng ký để sử dụng dịch vụ của chúng tôi</small>--}}
                            <input class="input-primary c-mt-16" type="text" name="username" placeholder="Nhập tên tài khoản" required>
                            <div class="text-error c-mt-4 w-100 text-left">Help message here.</div>
                            <div class="password-input-container c-mt-16">
                                <input class="input-primary" type="password" name="password" placeholder="Nhập mật khẩu của bạn" autocomplete="off" required>
                                <img class="password-input-hide" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/eye-show.svg" alt="" style="display: none">
                                <img class="password-input-show" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/eye-hide.svg" alt="" >
                            </div>
{{--                            <div class="text-error c-mt-4 w-100 text-left">Help message here.</div>--}}
                            <div class="password-input-container c-mt-16">
                                <input class="input-primary" type="password" name="password_confirmation" placeholder="Nhập lại mật khẩu của bạn" autocomplete="off" required>
                                <img class="password-input-hide" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/eye-show.svg" alt="" style="display: none">
                                <img class="password-input-show" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/eye-hide.svg" alt="" >
                            </div>
{{--                            <div class="text-error c-mt-4 w-100 text-left">Help message here.</div>--}}

                            <button type="submit" class="btn pink btn-pink-default c-mt-32">Đăng ký</button>
                        </form>
                    </div>
                    <div class="modal-login-form-container sign-in-container"   >
                        <form class="modal-login-form formLogin" action="" id="formLogin"  method="POST">
                            @csrf
                            <p class="fw-700 fz-24 fz-lg-24 fz-md-18 fz-sm-16">Đăng nhập</p>
                            <small class="fz-13 fz-md-12 fz-sm-10 fw-400 c-mb-12">Vui lòng đăng nhập để sử dụng dịch vụ của chúng tôi</small>
                            <input class="input-primary c-mt-12" type="text" name="username" placeholder="Nhập tên tài khoản" autocomplete="off" required>
{{--                            <div class="text-error c-mt-4 w-100 text-left">Help message here.</div>--}}
                            <div class="password-input-container c-mt-16">
                                <input class="input-primary" type="password" name="password" placeholder="Nhập mật khẩu" autocomplete="off">
                                <img class="password-input-hide" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/eye-show.svg" alt="" style="display: none" required>
                                <img class="password-input-show" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/eye-hide.svg" alt="" >
                            </div>
{{--                            <div class="text-error c-mt-4 w-100 text-left">Help message here.</div>--}}
                            <a href="" class="link blue w-100 text-left c-mt-4">Bạn quên mật khẩu?</a>
                            <button type="submit" class="btn primary c-mt-18 c-mt-md-16 c-mt-sm-16 btn-primary-default">Đăng nhập</button>
                            <span class="login-via fw-400 fz-13 fz-md-12 fz-sm-10 c-mt-24 c-mt-lg-20 c-mt-md-16 c-mt-sm-8 cr_textclore">Hoặc đăng nhập qua</span>
                            <div class="social-container c-mt-24 c-mt-lg-20 c-mt-md-16">
                                <a href="http://fb.nhapnick.com/{{str_replace(".","_",Request::getHost())}}" class="social">
                                    <img src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/facebook.svg" alt="">
                                </a>
                            </div>
                        </form>
                    </div>
                    <div class="modal-login-overlay-container">
                        <div class="modal-login-overlay">
                            <div class="modal-login-overlay-panel modal-login-overlay-left" style="background-color:#F1D9DC">
                                <img src="/assets/frontend/{{env('THEME_VERSION')}}/image/duong/image-login.png" alt="">
                                <p class="modal-login-suggestion fw-700 fz-24 fz-lg-20 fz-md-18 fz-sm-16 c-mt-24 c-mt-lg-20 c-mt-md-16 c-mt-sm-8 mb-0 c_color_default">Nick.vn xin chào</p>
                                <p class="fw-400 fz-13 fz-md-12 fz-sm-10 c-mb-24 c-mb-lg-20 c-mb-md-16 c-md-sm-8 c_color_small_default">Bạn đã có tài khoản, vui lòng đăng nhập tại đây</p>
                                <button class="btn primary btn-primary-default" id="signIn">Đăng nhập</button>
                            </div>
                            <div class="modal-login-overlay-panel modal-login-overlay-right" style="background-color:#F1D9DC">
                                <img class="close-login-modal" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/close.svg" alt="">
                                <img src="/assets/frontend/{{env('THEME_VERSION')}}/image/duong/image-login.png" alt="">
                                    <p class="modal-login-suggestion fw-700 fz-24 fz-lg-20 fz-md-18 fz-sm-16 c-mt-24 c-mt-lg-20 c-mt-md-16 c-mt-sm-8 mb-0">Nick.vn xin chào</p>
                                    <p class="fw-400 fz-13 fz-md-12 fz-sm-10 c-mb-32 c-mb-lg-20 c-mb-md-16 c-md-sm-8">Vui lòng đăng ký ngay tại đây</p>
                                <button class="btn pink btn-pink-default" id="signUp">Đăng ký</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 02 -->

    <div class="modal fade modal-big" id="modal-demo-02">
        <div class="modal-dialog modal-dialog-centered modal-custom">
            <div class="modal-content c-p-24">
                <div class="modal-header">
                    <h2 class="modal-title center">Xác nhận thanh toán</h2>
                    <button type="button" class="close" data-dismiss="modal"></button>
                </div>
                <div class="modal-body pl-0 pr-0 c-pt-24 c-pb-24">
                    <div class="dialog--content__title fw-700 fz-13 c-mb-12 text-title-theme">
                        Thông tin mua thẻ
                    </div>
                    <div class="card--gray c-mb-16 c-pt-8 c-pb-8 c-pl-12 c-pr-12">
                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Loại thẻ
                            </div>
                            <div class="card--attr__value fz-13 fw-500">10.000đ</div>
                        </div>
                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Mệnh giá
                            </div>
                            <div class="card--attr__value fz-13 fw-500">10.000đ</div>
                        </div>
                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Số lượng
                            </div>
                            <div class="card--attr__value fz-13 fw-500">01</div>
                        </div>
                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Chiết khấu
                            </div>
                            <div class="card--attr__value fz-13 fw-500">1%</div>
                        </div>
                    </div>
                    <div class="card--gray c-mb-16 c-pt-8 c-pb-8 c-pl-12 c-pr-12">
                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fz-13 fw-400 text-center">
                                Phương thức thanh toán
                            </div>
                            <div class="card--attr__value fz-13 fw-500">
                                Tài khoản Shopbrand
                            </div>
                        </div>
                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Phí thanh toán
                            </div>
                            <div class="card--attr__value fz-13 fw-500">
                                Miễn phí
                            </div>
                        </div>
                    </div>
                    <div class="card--gray c-mb-0 c-pt-8 c-pb-8 c-pl-12 c-pr-12">
                        <div class="card--attr__total justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Tổng thanh toán
                            </div>
                            <div class="card--attr__value fz-13 fw-500">
                                <a href="javascript:void(0)">
                                <span class="c-text-primary">9.900 đ</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn ghost">Xoá bộ lọc</button>
                    {{--                    <a class="btn secondary" data-dismiss="modal">Về trang chủ</a>--}}
                    {{--                    <button class="btn primary">Xem kết quả</button>--}}
                    <button class="btn primary">Xem kết quả</button>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal 03 -->

    <div class="modal fade modal-big" id="modal-demo-03">
        <div class="modal-dialog modal-dialog-centered modal-custom">
            <div class="modal-content c-p-24">
                <div class="modal-header">
                    <h2 class="modal-title center">Mua thẻ thành công</h2>
                    <button type="button" class="close" data-dismiss="modal"></button>
                </div>
                <div class="modal-body pl-0 pr-0 c-pt-24 c-pb-24">
                    <div class="dialog--content__title fw-700 fz-13 c-mb-12 text-title-theme">
                        Thông tin thẻ đã mua
                    </div>
                    <div class="card--gray c-mb-16 c-pt-8 c-pb-8 c-pl-12 c-pr-12">
                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Loại thẻ
                            </div>
                            <div class="card--attr__value fz-13 fw-500">10.000đ</div>
                        </div>
                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Mệnh giá
                            </div>
                            <div class="card--attr__value fz-13 fw-500">10.000đ</div>
                        </div>
                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Số lượng
                            </div>
                            <div class="card--attr__value fz-13 fw-500">01</div>
                        </div>
                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Chiết khấu
                            </div>
                            <div class="card--attr__value fz-13 fw-500">1%</div>
                        </div>
                    </div>

                    <div class="swiper slider--card swiper-container-horizontal swiper-container-free-mode">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide card__detail swiper-slide-active">
                                <div class="card--header__detail c-p-12">
                                    <div class="card--info__wrap">
                                        <div class="card--logo d-flex c-mr-8">
                                            <img src="/assets/frontend/{{env('THEME_VERSION')}}/image/duong/zing.png" alt="">
                                        </div>
                                        <div class="card--info">
                                            <div class="card--info__name fw-400 fz-13 text-left">
                                                Zing 1
                                            </div>
                                            <div class="card--info__value fz-13 fw-500">
                                                <a href="javascript:void(0)" class="text-primary">100.000 đ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card--gray c-m-10 c-mb-10">
                                    <div class="card--attr justify-content-between d-flex c-pb-8 c-pt-12 c-pl-12 c-pr-12 text-center">
                                        <div class="card--attr__name fw-400 fz-13 text-center">
                                            Mã thẻ
                                        </div>
                                        <div class="card--attr__value fz-13 fw-500 d-flex">
                                            <div class="card__info c-mr-8">
                                                48563415693486456
                                            </div>
                                            <div class="icon--coppy js-copy-text">
                                                <img class="c-cursor" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/copy.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card--attr justify-content-between c-pb-8 pt-0 c-pl-12 c-pr-12 d-flex text-center">
                                        <div class="card--attr__name fw-400 fz-13 text-center">
                                            Seri
                                        </div>
                                        <div class="card--attr__value fz-13 fw-500 d-flex">
                                            <div class="card__info c-mr-8">
                                                12121212121
                                            </div>
                                            <div class="icon--coppy js-copy-text">
                                                <img class="c-cursor" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/copy.svg" alt="">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide card__detail swiper-slide-active">
                                <div class="card--header__detail c-p-12">
                                    <div class="card--info__wrap">
                                        <div class="card--logo d-flex c-mr-8">
                                            <img src="/assets/frontend/{{env('THEME_VERSION')}}/image/duong/zing.png" alt="">
                                        </div>
                                        <div class="card--info">
                                            <div class="card--info__name fw-400 fz-13 text-left">
                                                Zing 1
                                            </div>
                                            <div class="card--info__value fz-13 fw-500">
                                                <a href="javascript:void(0)" class="text-primary">100.000 đ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card--gray c-m-10 c-mb-10">
                                    <div class="card--attr justify-content-between d-flex c-pb-8 c-pt-12 c-pl-12 c-pr-12 text-center">
                                        <div class="card--attr__name fw-400 fz-13 text-center">
                                            Mã thẻ
                                        </div>
                                        <div class="card--attr__value fz-13 fw-500 d-flex">
                                            <div class="card__info c-mr-8">
                                                48563415693486456
                                            </div>
                                            <div class="icon--coppy js-copy-text">
                                                <img class="c-cursor" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/copy.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card--attr justify-content-between c-pb-8 pt-0 c-pl-12 c-pr-12 d-flex text-center">
                                        <div class="card--attr__name fw-400 fz-13 text-center">
                                            Seri
                                        </div>
                                        <div class="card--attr__value fz-13 fw-500 d-flex">
                                            <div class="card__info c-mr-8">
                                                12121212121
                                            </div>
                                            <div class="icon--coppy js-copy-text">
                                                <img class="c-cursor" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/copy.svg" alt="">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide card__detail swiper-slide-active">
                                <div class="card--header__detail c-p-12">
                                    <div class="card--info__wrap">
                                        <div class="card--logo d-flex c-mr-8">
                                            <img src="/assets/frontend/{{env('THEME_VERSION')}}/image/duong/zing.png" alt="">
                                        </div>
                                        <div class="card--info">
                                            <div class="card--info__name fw-400 fz-13 text-left">
                                                Zing 1
                                            </div>
                                            <div class="card--info__value fz-13 fw-500">
                                                <a href="javascript:void(0)" class="text-primary">100.000 đ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card--gray c-m-10 c-mb-10">
                                    <div class="card--attr justify-content-between d-flex c-pb-8 c-pt-12 c-pl-12 c-pr-12 text-center">
                                        <div class="card--attr__name fw-400 fz-13 text-center">
                                            Mã thẻ
                                        </div>
                                        <div class="card--attr__value fz-13 fw-500 d-flex">
                                            <div class="card__info c-mr-8">
                                                48563415693486456
                                            </div>
                                            <div class="icon--coppy js-copy-text">
                                                <img class="c-cursor" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/copy.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card--attr justify-content-between c-pb-8 pt-0 c-pl-12 c-pr-12 d-flex text-center">
                                        <div class="card--attr__name fw-400 fz-13 text-center">
                                            Seri
                                        </div>
                                        <div class="card--attr__value fz-13 fw-500 d-flex">
                                            <div class="card__info c-mr-8">
                                                12121212121
                                            </div>
                                            <div class="icon--coppy js-copy-text">
                                                <img class="c-cursor" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/copy.svg" alt="">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn ghost">Trang chủ</button>
                    {{--                    <a class="btn secondary" data-dismiss="modal">Về trang chủ</a>--}}
                    {{--                    <button class="btn primary">Xem kết quả</button>--}}
                    <button class="btn primary">Mua thêm </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 04 -->
    <div class="modal fade modal-small" id="modal-demo-04">
        <div class="modal-dialog modal-dialog-centered modal-custom">
            <div class="modal-content">
                <div class="modal-header justify-content-center p-0">
                    {{--                    Ảnh thất bại    --}}
{{--                                        <img class="c-pt-16 c-pb-16" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/thatbai.png" alt="">--}}
                    {{--                    Ảnh Thành công    --}}
                    <img class="c-pt-20 c-pb-20" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/success.png" alt="">
                </div>
                <div class="modal-body text-center c-pl-24 c-pr-24 pt-0 pb-0">
                    {{--                    Content 1  --}}
                    {{--                    <p class="fw-700 fz-15 c-mt-12 mb-0 text-title-theme">Mua thẻ thất bại</p>--}}
                    {{--                    <p class="fw-400 fz-13 c-mt-10 mb-0">Rất tiếc việc mua thẻ đã thất bại do tài khoản của bạn không đủ, vui lòng nạp tiền để tiếp tục giao dịch!</p>--}}
                    {{--                    Content 2  --}}
                    {{--                    <p class="fw-700 fz-15 c-mt-12 mb-0 text-title-theme">Nạp thẻ thành công</p>--}}
                    {{--                    <p class="fw-400 fz-13 c-mt-10 mb-0">--}}
                    {{--                        Sau khi chuyển khoản thành công hệ thống sẽ xử lí từ 2 giây tới 2 phút và cộng tiền vào tài khoản của bạn. Nếu sai thông tin hoặc xảy ra lỗi, vui lòng liên hệ--}}
                    {{--                        <a class="c-text-primary" href="">fanpage</a> để được hỗ trợ.--}}
                    {{--                    </p>--}}
                    {{--                    Content 3  --}}
                    {{--                    <p class="fw-700 fz-15 fz-lg-15 fz-md-14 fz-sm-12 c-mt-12 mb-0 text-title-theme">Chúc mừng bạn đã quay trúng</p>--}}
                    {{--                    <p class="fw-400 fz-13 fz-lg-13 fz-md-12 fz-sm-11 c-mt-10 mb-0">Giải thưởng: 100.000 kim cương</p>--}}
                    {{--                    <p class="fw-400 fz-13 fz-lg-13 fz-md-12 fz-sm-11 mt-0 mb-0">Giải thưởng: 100.000 kim cương</p>--}}
                    {{--                    <p class="fw-400 fz-13 fz-lg-13 fz-md-12 fz-sm-11 mt-0 mb-0">Tổng nhận được: <a class="c-text-pink" href="javascript:void(0)">100.100 kim cương</a></p>--}}
                    {{--                    Content 4  --}}
                    <p class="fw-700 fz-15 fz-lg-15 fz-md-14 fz-sm-12 c-mt-12 mb-0 text-title-theme">Chúc mừng bạn đã rút quà thành công</p>
                    <p class="fw-400 fz-13 fz-lg-13 fz-md-12 fz-sm-11 c-mt-10 mb-0">Tổng nhận được: <a class="c-text-pink" href="javascript:void(0)">100.100 kim cương</a></p>
                </div>
                <div class="modal-footer c-p-24">
                    <button class="btn ghost" data-dismiss="modal">Thoát</button>
                    {{--                    <a class="btn secondary" data-dismiss="modal">Về trang chủ</a>--}}
                    {{--                    <button class="btn primary">Xem kết quả</button>--}}
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 05 -->
    <div class="modal fade modal-big" id="modal-demo-05">
        <div class="modal-dialog modal-dialog-centered modal-custom">
            <div class="modal-content c-p-24">
                <div class="modal-header">
                    <h2 class="modal-title center">Bộ lọc</h2>
                    <button type="button" class="close" data-dismiss="modal"></button>
                </div>
                <div class="modal-body pl-0 pr-0 c-pt-32 c-pb-40">
                    <div class="c-mt-8">
                        <label class="c-mb-4 fw-500 fz-13 lh-20">MÃ ID</label>
                        <div class="col-md-12 p-0">
                            <input type="text" name="" id="" placeholder="placeholder">
                        </div>
                    </div>
                    <div class="c-mt-8">
                        <label class="c-mb-4 fw-500 fz-13 lh-20">Dịch vụ</label>
                        <div class="col-md-12 p-0">
                            <select class="default-select brs-8 fz-13" name="" id="">
                                <option value="">--- Chọn---</option>
                                <option value="">Is Text Demo</option>
                                <option value="">Is Text Demo</option>
                                <option value="">Is Text Demo</option>
                            </select>
                        </div>
                    </div>
                    <div class="c-mt-8">
                        <label class="c-mb-4 fw-500 fz-13 lh-20">Trạng thái</label>
                        <div class="col-md-12 p-0">
                            <select class="default-select brs-8 fz-13" name="" id="">
                                <option value="">--- Chọn---</option>
                                <option value="">Is Text Demo</option>
                                <option value="">Is Text Demo</option>
                                <option value="">Is Text Demo</option>
                            </select>
                        </div>
                    </div>
                    <div class="c-mt-8">
                        <label class="c-mb-4 fw-500 fz-13 lh-20">Giá tiền</label>
                        <div class="col-md-12 px-0 c-pt-48">
                            <input type="text" id="input-slider">

                        </div>
                    </div>
                    <div class="c-mt-8 row marginauto">
                        <div class="col-md-6 pl-0 c-pr-8">
                            <div class="row marginauto">
                                <label class="c-mb-4 fw-500 fz-13 lh-20">Trạng thái</label>
                                <div class="col-md-12 p-0">
                                    <input type="text" class="date-right date-right-default" placeholder="placeholder">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pr-0 c-pl-8">
                            <div class="row marginauto">
                                <label class="c-mb-4 fw-500 fz-13 lh-20">Trạng thái</label>
                                <div class="col-md-12 p-0">
                                    <input type="text" class="date-right date-right-default" placeholder="placeholder">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn ghost">Xoá bộ lọc</button>
                    {{--                    <a class="btn secondary" data-dismiss="modal">Về trang chủ</a>--}}
                    {{--                    <button class="btn primary">Xem kết quả</button>--}}
                    <button class="btn primary">Xem kết quả</button>
                </div>
            </div>
        </div>
    </div>

{{--    Modal 06--}}

    <div class="modal fade modal-big modal-tra-gop" id="modal-demo-06">
        <div class="modal-dialog modal-dialog-centered modal-custom">
            <div class="modal-content c-p-24">
                <div class="modal-header">
                    <h2 class="modal-title center">Xác nhận thanh toán</h2>
                    <button type="button" class="close" data-dismiss="modal"></button>
                </div>
                <div class="modal-body py-0 pl-0 c-pr-8 c-mt-24 c-mb-24" id="modal-body-scroll">
                    <div class="dialog--content__title fw-500 fz-13 c-mb-12 text-title-theme">
                        Thông tin mua thẻ
                    </div>
                    <div class="card--gray c-mb-16 c-pt-8 c-pb-8 c-pl-12 c-pr-12">
                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Loại thẻ
                            </div>
                            <div class="card--attr__value fz-13 fw-500">10.000đ</div>
                        </div>
                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Mệnh giá
                            </div>
                            <div class="card--attr__value fz-13 fw-500">10.000đ</div>
                        </div>
                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Số lượng
                            </div>
                            <div class="card--attr__value fz-13 fw-500">01</div>
                        </div>
                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Chiết khấu
                            </div>
                            <div class="card--attr__value fz-13 fw-500">1%</div>
                        </div>
                    </div>
                    <div class="card--gray c-mb-16 c-pt-8 c-pb-8 c-pl-12 c-pr-12">
                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fz-13 fw-400 text-center">
                                Phương thức thanh toán
                            </div>
                            <div class="card--attr__value fz-13 fw-500">
                                Tài khoản Shopbrand
                            </div>
                        </div>
                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Phí thanh toán
                            </div>
                            <div class="card--attr__value fz-13 fw-500">
                                Miễn phí
                            </div>
                        </div>
                    </div>
                    <div class="card--gray c-mb-0 c-pt-8 c-pb-8 c-pl-12 c-pr-12">
                        <div class="card--attr__total justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Tổng thanh toán
                            </div>
                            <div class="card--attr__value fz-13 fw-500"><a href="javascript:void(0)" class="c-text-primary">9.900 đ</a></div>
                        </div>
                    </div>

                    <div class="dialog--content__title c-mt-24 fw-500 fz-13 c-mb-12 text-title-theme">
                        Thông tin trả góp
                    </div>

                    <div class="c-mt-8">
                        <label class="c-mb-4 fw-500 fz-13 lh-20">Trả lần 1</label>
                        <div class="col-md-12 p-0">
                            <input type="text" name="" id="" placeholder="placeholder">
                        </div>
                    </div>
                    <div class="c-mt-8">
                        <label class="c-mb-4 fw-500 fz-13 lh-20">Trả lần 2</label>
                        <div class="col-md-12 p-0">
                            <input type="text" name="" id="" placeholder="placeholder">
                        </div>
                    </div>
                    <div class="c-mt-12">
                        <label class="c-mb-4 fw-500 fz-13 lh-20">Mã bảo vệ</label>
                        <div class="col-md-12 p-0 d-flex">
                            <input class="input-form w-100" type="text" placeholder="Nhập mã bảo vệ">
                            <div class="c-ml-8 c-mr-8">
                                <div class="brs-8 overflow-hidden">
                                <span class="brs-8">
                                      <img src="https://frontend.theme.tichhop.pro/captcha/default?ID2lPXbi" alt="">
                                </span>
                                </div>
                            </div>
                            <button class="refresh-captcha brs-8" id="reload">
                                <img src="/assets/frontend/{{env('THEME_VERSION')}}/image/nam/refresh_captcha.svg" alt="">
                            </button>
                        </div>
                    </div>

                    <div class="dialog--content__title c-mt-24 fw-500 fz-13 c-mb-12 text-title-theme">
                        Quy định trả góp
                    </div>
                    <div class="c-mt-8 content-tra-gop">
                        <div class="col-md-12 c-py-12 c-px-8">
                            <ul>
                                <li>Trả góp ban đầu 20% giá trị tài khoản dự kiến mua để giữ tài khoản. Áp dụng cho tài khoản trị giá từ 200.000đ trở lên.</li>
                                <li>Thời gian trả góp: 7 ngày. Không tính ngày xác nhận trả góp.</li>
                                <li>Phí trả góp: 0%</li>
                                <li>Trong thời gian trả góp bạn phải hoàn tất phần còn lại để giao dịch hoàn tất.</li>
                                <li>Trường hợp quá thời gian trả góp giao dịch của bạn sẽ tự động bị hủy bỏ và hoàn lại 20% số tiền đã góp ban đầu.Lúc này tài khoản được tự do. (Ví dụ: tài khoản cần mua trị giá 1 triệu, trả góp ban đầu 200.000đ.</li>
                                <li>Nếu quá thời gian giao dịch trả góp bị hủy bỏ thì bạn sẽ nhận lại 20% tức 40.000đ trong tài khoản) Quy trình giao dịch đều xử lý tự động, bạn không thể gọi hỗ trợ gia hạn thêm ngày trả góp hoặc đổi khác quy định trên.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn ghost">Xoá bộ lọc</button>
                    {{--                    <a class="btn secondary" data-dismiss="modal">Về trang chủ</a>--}}
                    {{--                    <button class="btn primary">Xem kết quả</button>--}}
                    <button class="btn primary">Xem kết quả</button>

                </div>
            </div>
        </div>
    </div>


    {{--    Modal 07--}}

    <div class="modal fade modal-big" id="modal-demo-07">
        <div class="modal-dialog modal-dialog-centered modal-custom">
            <div class="modal-content c-p-24">
                <div class="modal-header">
                    <h2 class="modal-title center">Thể lệ</h2>
                    <button type="button" class="close" data-dismiss="modal"></button>
                </div>
                <div class="modal-body pl-0 pr-0 c-pt-24 c-pb-24">
                    <div class="card--gray c-p-16">
                        <div class="card--attr justify-content-between d-flex c-mb-16">
                            <p class="fz-13 fw-400 text-theme lh-20 mb-0">
                                Chỉ với 10 trong tài khoản bạn đã có ngay 1 lượt chơi <a href="#">Vòng Quay Giải Nhiệt Hè</a>, sẽ càng rẻ hơn nếu bạn chơi nhiều lượt cùng lúc

                                Cách chơi rất đơn giản khi bạn quay kim quay dừng ở vị trí nào bạn sẽ nhận được phần thưởng tương ứng ở vị trí đó

                                Rất nhiều phần quà hấp dẫn đang chờ đợi bạn.

                                Chúc bạn chơi game vui vẻ và may mắn !!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn ghost">Xoá bộ lọc</button>
                    {{--                    <a class="btn secondary" data-dismiss="modal">Về trang chủ</a>--}}
                    {{--                    <button class="btn primary">Xem kết quả</button>--}}
                    <button class="btn primary">Xem kết quả</button>

                </div>
            </div>
        </div>
    </div>

{{--    Modal 08   --}}
    <div class="modal fade modal-big" id="modal-demo-08">
        <div class="modal-dialog modal-dialog-centered modal-custom">
            <div class="modal-content c-p-24">
                <div class="modal-header">
                    <h2 class="modal-title center">Hủy bỏ yêu cầu dịch vụ</h2>
                    <button type="button" class="close" data-dismiss="modal"></button>
                </div>
                <div class="modal-body pl-0 pr-0 c-pt-40 c-pb-40">
                    <div class="c-mt-8">
                        <label class="c-mb-4 fw-500 fz-13 lh-20">Lỗi thuộc về</label>
                        <div class="col-md-12 p-0">
                            <select class="default-select brs-8 fz-13" name="" id="">
                                <option value="">--- Chọn---</option>
                                <option value="">Is Text Demo</option>
                                <option value="">Is Text Demo</option>
                                <option value="">Is Text Demo</option>
                            </select>
                        </div>
                    </div>
                    <div class="c-mt-8">
                        <label class="c-mb-4 fw-500 fz-13 lh-20">Nội dung</label>
                        <div class="col-md-12 p-0">
                            <textarea name="" id="" cols="9" rows="3" placeholder="placeholder" style="height: 93px;"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn ghost">Xoá bộ lọc</button>
                    {{--                    <a class="btn secondary" data-dismiss="modal">Về trang chủ</a>--}}
                    {{--                    <button class="btn primary">Xem kết quả</button>--}}
                    <button class="btn primary">Xem kết quả</button>
                </div>
            </div>
        </div>
    </div>

    {{--    Modal 09   --}}
    <div class="modal fade modal-big" id="modal-demo-09">
        <div class="modal-dialog modal-dialog-centered modal-custom">
            <div class="modal-content c-p-24">
                <div class="modal-header">
                    <h2 class="modal-title center">Gửi tin nhắn</h2>
                    <button type="button" class="close" data-dismiss="modal"></button>
                </div>
                <div class="modal-body pl-0 pr-0 c-pt-12 c-pb-24">
                    <div class="c-mt-12">
                        <label class="c-mb-4 fw-500 fz-13 lh-20">Nội dung</label>
                        <div class="col-md-12 p-0">
                            <textarea name="" id="" cols="9" rows="3" placeholder="placeholder" style="height: 93px;"></textarea>
                        </div>
                    </div>
                    <div class="c-mt-12">
                        <label class="c-mb-4 fw-500 fz-13 lh-20">Lỗi thuộc về</label>
                        <div class="col-md-12 p-0 position-relative">
                            <input type="text" name="" id="" placeholder="placeholder">
                            <img class="img-error-service" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/mocicon.svg" alt="">
                        </div>
                    </div>
                    <div class="c-mt-4">
                        <div class="col-md-12 p-0 position-relative">
                            <label for="checkbox1" class="input-checkbox">
                                <input type="checkbox" checked name="select" id="checkbox1">
                                <span class="checkmark"></span>
                                <span class="text-label c-cursor w-100">Label</span>
                            </label>
                        </div>
                    </div>
                    <div class="c-mt-12">
                        <label class="c-mb-4 fw-500 fz-13 lh-20">Mã bảo vệ</label>
                        <div class="col-md-12 p-0 d-flex">
                            <input class="input-form w-100" type="text" placeholder="Nhập mã bảo vệ">
                            <div class="c-ml-8 c-mr-8">
                                <div class="brs-8 overflow-hidden">
                                <span class="brs-8">
                                      <img src="https://frontend.theme.tichhop.pro/captcha/default?ID2lPXbi" alt="">
                                </span>
                                </div>
                            </div>
                            <button class="refresh-captcha brs-8" id="reload">
                                <img src="/assets/frontend/{{env('THEME_VERSION')}}/image/nam/refresh_captcha.svg" alt="">
                            </button>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn primary">Xem kết quả</button>
                </div>
            </div>
        </div>
    </div>

    {{--    Modal 10--}}

    <div class="modal fade modal-big modal-logs-minigame" id="modal-demo-10">
        <div class="modal-dialog modal-dialog-centered modal-custom">
            <div class="modal-content c-p-24">
                <div class="modal-header">
                    <h2 class="modal-title center">Lịch sử trúng thưởng</h2>
                    <button type="button" class="close" data-dismiss="modal"></button>
                </div>
                <div class="modal-body pl-0 pr-0 c-pt-24 c-pb-24">
                    <div class="card--gray">
                        <div class="card--attr justify-content-between d-flex c-mb-16 default-table" id="logs-minigame">
                            <table class="table table-responsive-lg table-striped table-hover table-logs">
                                <thead>
                                <tr class="row marginauto">
                                    <th class="fw-500 fz-13 lh-20 text-title text-left col-auto">Thời gian</th>
                                    <th class="fw-500 fz-13 lh-20 text-title text-right col-auto ml-auto">Kiểu nạp</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr class="row marginauto">
                                    <td class="text-left col-auto fw-400 fz-13 lh-20 c-pl-16 c-pt-8 c-pb-8 pr-0">+100.000 kim cương</td>
                                    <td class="col-auto ml-auto fw-400 fz-13 lh-20 pl-0 c-pt-8 c-pb-8 c-pr-16">2022-04-08, 20:30</td>
                                </tr>

                                <tr class="row marginauto">
                                    <td class="text-left col-auto fw-400 fz-13 lh-20 c-pl-16 c-pt-8 c-pb-8 pr-0">+100.000 kim cương</td>
                                    <td class="col-auto ml-auto fw-400 fz-13 lh-20 pl-0 c-pt-8 c-pb-8 c-pr-16">2022-04-08, 20:30</td>
                                </tr>

                                <tr class="row marginauto">
                                    <td class="text-left col-auto fw-400 fz-13 lh-20 c-pl-16 c-pt-8 c-pb-8 pr-0">+100.000 kim cương</td>
                                    <td class="col-auto ml-auto fw-400 fz-13 lh-20 pl-0 c-pt-8 c-pb-8 c-pr-16">2022-04-08, 20:30</td>
                                </tr>

                                <tr class="row marginauto">
                                    <td class="text-left col-auto fw-400 fz-13 lh-20 c-pl-16 c-pt-8 c-pb-8 pr-0">+100.000 kim cương</td>
                                    <td class="col-auto ml-auto fw-400 fz-13 lh-20 pl-0 c-pt-8 c-pb-8 c-pr-16">2022-04-08, 20:30</td>
                                </tr>

                                <tr class="row marginauto">
                                    <td class="text-left col-auto fw-400 fz-13 lh-20 c-pl-16 c-pt-8 c-pb-8 pr-0">+100.000 kim cương</td>
                                    <td class="col-auto ml-auto fw-400 fz-13 lh-20 pl-0 c-pt-8 c-pb-8 c-pr-16">2022-04-08, 20:30</td>
                                </tr>

                                <tr class="row marginauto">
                                    <td class="text-left col-auto fw-400 fz-13 lh-20 c-pl-16 c-pt-8 c-pb-8 pr-0">+100.000 kim cương</td>
                                    <td class="col-auto ml-auto fw-400 fz-13 lh-20 pl-0 c-pt-8 c-pb-8 c-pr-16">2022-04-08, 20:30</td>
                                </tr>

                                <tr class="row marginauto">
                                    <td class="text-left col-auto fw-400 fz-13 lh-20 c-pl-16 c-pt-8 c-pb-8 pr-0">+100.000 kim cương</td>
                                    <td class="col-auto ml-auto fw-400 fz-13 lh-20 pl-0 c-pt-8 c-pb-8 c-pr-16">2022-04-08, 20:30</td>
                                </tr>

                                <tr class="row marginauto">
                                    <td class="text-left col-auto fw-400 fz-13 lh-20 c-pl-16 c-pt-8 c-pb-8 pr-0">+100.000 kim cương</td>
                                    <td class="col-auto ml-auto fw-400 fz-13 lh-20 pl-0 c-pt-8 c-pb-8 c-pr-16">2022-04-08, 20:30</td>
                                </tr>

                                <tr class="row marginauto">
                                    <td class="text-left col-auto fw-400 fz-13 lh-20 c-pl-16 c-pt-8 c-pb-8 pr-0">+100.000 kim cương</td>
                                    <td class="col-auto ml-auto fw-400 fz-13 lh-20 pl-0 c-pt-8 c-pb-8 c-pr-16">2022-04-08, 20:30</td>
                                </tr>

                                <tr class="row marginauto">
                                    <td class="text-left col-auto fw-400 fz-13 lh-20 c-pl-16 c-pt-8 c-pb-8 pr-0">+100.000 kim cương</td>
                                    <td class="col-auto ml-auto fw-400 fz-13 lh-20 pl-0 c-pt-8 c-pb-8 c-pr-16">2022-04-08, 20:30</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn ghost">Xoá bộ lọc</button>
                    {{--                    <a class="btn secondary" data-dismiss="modal">Về trang chủ</a>--}}
                    {{--                    <button class="btn primary">Xem kết quả</button>--}}
                    <button class="btn primary">Xem kết quả</button>

                </div>
            </div>
        </div>
    </div>

    {{--    Modal 11--}}

    <div class="modal fade modal-big" id="modal-demo-11">
        <div class="modal-dialog modal-dialog-centered modal-custom">
            <div class="modal-content c-p-24">
                <div class="modal-header">
                    <h2 class="modal-title center">Chỉnh sửa thông tin</h2>
                    <button type="button" class="close" data-dismiss="modal"></button>
                </div>
                <div class="modal-body pl-0 pr-0 c-pt-12 c-pb-40">
                    <div class="c-mt-12">
                        <label class="c-mb-4 fw-500 fz-13 lh-20">Tài khoản</label>
                        <div class="col-md-12 p-0">
                            <input type="text" name="" id="" placeholder="placeholder">
                        </div>
                    </div>
                    <div class="c-mt-12">
                        <label class="c-mb-4 fw-500 fz-13 lh-20">Mật khẩu</label>
                        <div class="col-md-12 p-0 position-relative password-input-container">
                            <input class="input-primary" type="text" name="" id="" placeholder="placeholder">
                            <img class="password-input-hide" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/eye-show.svg" alt="" style="display: none">
                            <img class="password-input-show" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/eye-hide.svg" alt="" >
                        </div>
                    </div>
                    <div class="c-mt-4">
                        <div class="col-md-12 p-0 position-relative">
                            <label for="checkbox2" class="input-checkbox">
                                <input type="checkbox" checked name="select" id="checkbox2">
                                <span class="checkmark"></span>
                                <span class="text-label c-cursor">Bạn Đã Đọc Kĩ Quy Định Và Chuẩn Bị Đầy Đủ Vật Phẩm, Phụ Kiện Theo Yêu Cầu Của Shop Chưa?</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn primary">Xem kết quả</button>
                </div>
            </div>
        </div>
    </div>
    {{--    Modal 12--}}

    <div class="modal fade modal-small" id="modal-demo-12">
        <div class="modal-dialog modal-dialog-centered modal-custom">
            <div class="modal-content">
                <div class="modal-header justify-content-center p-0">
                    <img class="c-pt-20 c-pb-20" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/success.png" alt="">
                </div>
                <div class="modal-body c-pl-24 c-pr-24 pt-0 pb-0">
                    <div class="c-mt-12">
                        <label class="c-mb-4 fw-500 fz-13 lh-20">Tài khoản</label>
                        <div class="col-md-12 p-0 position-relative div__copy-text">
                            <input class="" type="text" name="" id="" placeholder="placeholder">
                            <img class="copy-email c-copy-text" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/copyright.svg" alt="">
                        </div>
                    </div>
                    <div class="c-mt-12">
                        <label class="c-mb-4 fw-500 fz-13 lh-20">Mật khẩu</label>
                        <div class="col-md-12 p-0 position-relative password-input-container div__copy-text">
                            <input class="input-primary" type="password" name="" id="" placeholder="placeholder">
                            <img class="password-input-hide" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/eye-show.svg" alt="" style="display: none">
                            <img class="password-input-show" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/eye-hide.svg" alt="" >
                            <img class="copy-password c-copy-text" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/copyright.svg" alt="">
                        </div>
                    </div>
                    <div class="c-mt-12">
                        <a class="c-mb-4 fw-400 fz-13 lh-20 text-center" href="javascript:void(0)">
                            <span>Đã lấy mật khẩu lúc: 05-05-2022, 121:32:56</span>
                        </a>
                    </div>
                    <div class="c-mt-16">
                        <label class="c-mb-4 fw-400 fz-13 lh-20 text-center">Để bảo mật bạn vui lòng thay đổi mật khẩu và tên đăng nhập của tải khoản đã mua!</label>
                    </div>
                </div>
                <div class="modal-footer c-pt-16 c-px-24 c-pb-24">
                    <button class="btn ghost" data-dismiss="modal">Thoát</button>
                </div>
            </div>
        </div>
    </div>

    {{--    Modal 13--}}

    <div class="modal fade modal-big" id="modal-demo-13">
        <div class="modal-dialog modal-dialog-centered modal-custom">
            <div class="modal-content c-p-24">
                <div class="modal-header">
                    <h2 class="modal-title center">Hoàn tiền</h2>
                    <button type="button" class="close" data-dismiss="modal"></button>
                </div>
                <div class="modal-body pl-0 pr-0 c-pt-32 c-pb-24">
                    <div class="c-mt-12">
                        <label class="c-mb-4 fw-500 fz-13 lh-20">Thông tin acc đã mua</label>
                        <p class="c-text-ghost mb-0 fw-400 fz-13 lh-20">#1085 - (Acc #523961)</p>
                    </div>
                    <div class="c-mt-12">
                        <label class="c-mb-4 fw-500 fz-13 lh-20">Đã thanh toán</label>
                        <div class="col-md-12 p-0 position-relative div__copy-text">
                            <input class="" type="text" name="" id="" placeholder="placeholder">
                            <img class="copy-email c-copy-text" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/copyright.svg" alt="">
                        </div>
                    </div>
                    <div class="c-mt-8">
                        <label class="c-mb-4 fw-500 fz-13 lh-20">Hoàn tiền</label>
                        <div class="col-md-12 p-0 position-relative div__copy-text">
                            <input class="" type="text" name="" id="" placeholder="placeholder">
                            <img class="copy-email c-copy-text" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/copyright.svg" alt="">
                        </div>
                    </div>

                    <div class="c-mt-8">
                        <label class="c-mb-4 fw-500 fz-13 lh-20">Mã bảo vệ</label>
                        <div class="col-md-12 p-0 d-flex">
                            <input class="input-form w-100" type="text" placeholder="Nhập mã bảo vệ">
                            <div class="c-ml-8 c-mr-8">
                                <div class="brs-8 overflow-hidden">
                                <span class="brs-8">
                                      <img src="https://frontend.theme.tichhop.pro/captcha/default?ID2lPXbi" alt="">
                                </span>
                                </div>
                            </div>
                            <button class="refresh-captcha brs-8" id="reload">
                                <img src="/assets/frontend/{{env('THEME_VERSION')}}/image/nam/refresh_captcha.svg" alt="">
                            </button>

                        </div>
                    </div>

                    <div class="card--gray c-mt-16 c-p-16">
                        <div class="card--attr c-mb-16">
                            <a class="fw-400 fz-13 lh-20" href="">Đúng 01-01-2022, 00:00:00 giao dịch sẽ tự động hủy bỏ và hoàn lại tiền hoặc quý khách có thể hủy bỏ giao dịch tại đây</a>
                            <p class="fz-13 fw-400 text-theme lh-20 mb-0 c-pt-16">
                                Tài khoản chưa được cấu hình ODP, Click “ Hủy bỏ trả góp” nếu quý khách không muốn tiếp tục trả góp.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn ghost">Xoá bộ lọc</button>
                    {{--                    <a class="btn secondary" data-dismiss="modal">Về trang chủ</a>--}}
                    {{--                    <button class="btn primary">Xem kết quả</button>--}}
                    <button class="btn primary">Xem kết quả</button>

                </div>
            </div>
        </div>
    </div>

    {{--    Modal 14--}}

    <div class="c-modal__nick-lmht c-modal__nick-lmht-tuong" style="z-index: 1005; background: rgba(67, 70, 87, 0.5);">
        <div class="header-modal__nick-lmht c-px-24 c-pt-24 pb-0 position-relative text-uppercase text-center ml-auto mr-auto fw-700">
            <div class="row marginauto c-pb-24 header-modal__nick-lmht-row">
                <div class="col-auto pl-0 pr-0 mb-0 c-mr-24">
                    <h2 class="fw-700 fz-24 lh-32 mb-0">Tướng</h2>
                    <p class="fw-400 fz-13 lh-20 mb-0">(100 tướng)</p>
                </div>
                <div class="col-auto pl-0 pr-0 form-search input-search-lmht position-relative">
                    <input id="keyword--search" type="search" placeholder="Tìm kiếm" class="has-submit input-search-lmht">
                    <button class="submit--search" type="submit"></button>
                </div>
                <img class="c-close-modal" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/close.svg" alt="">
            </div>
        </div>
        <div class="body-modal__nick-lmht pb-0 c-px-18 c-pt-10 mr-auto ml-auto">
            <div class="row marginauto modal-container-body">
                <div class="col-md-12 c-px-6 c-py-8 body-modal__nick__text-error">
                    <div class="text-error c-mt-4">Không có kết quả phù hợp.</div>
                </div>
                <div class="col-auto c-px-6 c-py-8 item-nick-lmht">
                    <a href="">
                        <div class="row marginauto item-nick-lmht__border">
                            <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Axtrox">
                            </div>
                            <div class="col-md-12 pl-0 pr-0 text-center">
                                <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Axtrox</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-auto c-px-6 c-py-8 item-nick-lmht">
                    <a href="">
                        <div class="row marginauto item-nick-lmht__border">
                            <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Amumu">
                            </div>
                            <div class="col-md-12 pl-0 pr-0 text-center">
                                <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Amumu</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-auto c-px-6 c-py-8 item-nick-lmht">
                    <a href="">
                        <div class="row marginauto item-nick-lmht__border">
                            <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Garen">
                            </div>
                            <div class="col-md-12 pl-0 pr-0 text-center">
                                <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Garen</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-auto c-px-6 c-py-8 item-nick-lmht">
                    <a href="">
                        <div class="row marginauto item-nick-lmht__border">
                            <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Sona">
                            </div>
                            <div class="col-md-12 pl-0 pr-0 text-center">
                                <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Sona</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-auto c-px-6 c-py-8 item-nick-lmht">
                    <a href="">
                        <div class="row marginauto item-nick-lmht__border">
                            <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Axtrox">
                            </div>
                            <div class="col-md-12 pl-0 pr-0 text-center">
                                <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Axtrox</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-auto c-px-6 c-py-8 item-nick-lmht">
                    <a href="">
                        <div class="row marginauto item-nick-lmht__border">
                            <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Amumu">
                            </div>
                            <div class="col-md-12 pl-0 pr-0 text-center">
                                <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Amumu</p>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <div class="modal-footer" style="height: 16px">

            </div>
        </div>

    </div>

    {{--    Modal 15--}}

    <div class="c-modal__nick-lmht c-modal__nick-lmht-ttk" style="z-index: 1005; background: rgba(67, 70, 87, 0.5);">
        <div class="header-modal__nick-lmht c-px-24 c-pt-24 pb-0 position-relative text-uppercase text-center ml-auto mr-auto fw-700">
            <div class="row marginauto c-pb-24 header-modal__nick-lmht-row">
                <div class="col-auto pl-0 pr-0 mb-0 c-mr-24">
                    <h2 class="fw-700 fz-24 lh-32 mb-0">Thông tin khác</h2>
                    <p class="fw-400 fz-13 lh-20 mb-0">(10)</p>
                </div>
                <div class="col-auto pl-0 pr-0 form-search input-search-lmht position-relative">
                    <input id="keyword--search" type="search" placeholder="Tìm kiếm" class="has-submit input-search-lmht">
                    <button class="submit--search" type="submit"></button>
                </div>
                <img class="c-close-modal" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/close.svg" alt="">
            </div>
        </div>
        <div class="body-modal__nick-lmht pb-0 c-px-18 c-pt-10 mr-auto ml-auto">
            <div class="row marginauto modal-container-body">
                <div class="col-md-12 c-px-6 c-py-8 body-modal__nick__text-error">
                    <div class="text-error c-mt-4">Không có kết quả phù hợp.</div>
                </div>
                <div class="col-md-12 pl-0 pr-0 c-px-6 c-py-8">
                    <a href="">
                        <div class="row marginauto">
                            <div class="col-md-12 pl-0 pr-0">
                                <img class="w-100 h-auto brs-4" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Axtrox">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-12 pl-0 pr-0 c-px-6 c-py-8">
                    <a href="">
                        <div class="row marginauto">
                            <div class="col-md-12 pl-0 pr-0">
                                <img class="w-100 h-auto brs-4" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Axtrox">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-12 pl-0 pr-0 c-px-6 c-py-8">
                    <a href="">
                        <div class="row marginauto">
                            <div class="col-md-12 pl-0 pr-0">
                                <img class="w-100 h-auto brs-4" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Axtrox">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-12 pl-0 pr-0 c-px-6 c-py-8">
                    <a href="">
                        <div class="row marginauto">
                            <div class="col-md-12 pl-0 pr-0">
                                <img class="w-100 h-auto brs-4" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Axtrox">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="modal-footer" style="height: 16px">

            </div>
        </div>

    </div>

    {{--    Modal 16--}}

    <div class="modal fade modal-big" id="modal-demo-16">
        <div class="modal-dialog modal-dialog-centered modal-custom">
            <div class="modal-content p-0">
                <div class="modal-header c-pl-24 c-pr-24 c-pt-24 c-pb-16" style="border-bottom: 1px solid #E4E5F0">
                    <h2 class="modal-title center">Thêm ngân hàng/Ví điện tử</h2>
                    <button type="button" class="close" data-dismiss="modal" style="right: 24px;top: 36px"></button>
                </div>
                <div class="modal-body pl-0 pr-0 c-pt-12 c-pb-24">
                    <section class="section-category-tab">
                        <div class="c-mb-16 c-mb-lg-16">
                            <ul class="nav nav-tabs size-auto" role="tablist" style="width: 100%;margin: 0 auto">
                                <li class="nav-item" role="presentation">
                                    <a class="tab active" data-toggle="tab" href="#tab-1" role="tab" aria-selected="true">Tài khoản game</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="tab" data-toggle="tab" href="#tab-2" role="tab" aria-selected="false">Game yêu thích</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content c-pl-24 c-pl-lg-16 c-pr-24 c-pr-lg-16">
                            <div class="tab-pane fade show active" id="tab-1" role="tabpanel">

                                <div class="c-mt-8">
                                    <label class="c-mb-4 fw-500 fz-13 lh-20">Ngân hàng</label>
                                    <div class="col-md-12 p-0">
                                        <select class="default-select brs-8 fz-13" name="" id="">
                                            <option value="">--- Chọn---</option>
                                            <option value="">Is Text Demo</option>
                                            <option value="">Is Text Demo</option>
                                            <option value="">Is Text Demo</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="c-mt-8">
                                    <label class="c-mb-4 fw-500 fz-13 lh-20">Chủ tài khoản</label>
                                    <div class="col-md-12 p-0">
                                        <input type="text" name="" id="" placeholder="placeholder">
                                    </div>
                                </div>

                                <div class="c-mt-8">
                                    <label class="c-mb-4 fw-500 fz-13 lh-20">Số tài khoản</label>
                                    <div class="col-md-12 p-0">
                                        <input type="text" name="" id="" placeholder="placeholder">
                                    </div>
                                </div>

                                <div class="c-mt-8">
                                    <label class="c-mb-4 fw-500 fz-13 lh-20">Chi nhánh</label>
                                    <div class="col-md-12 p-0">
                                        <input type="text" name="" id="" placeholder="placeholder">
                                    </div>
                                </div>

                                <div class="c-mt-12">
                                    <label class="c-mb-4 fw-500 fz-13 lh-20">Lưu ý</label>
                                    <div class="col-md-12 p-0">
                                        <span class="fz-13 fw-400 lh-28" style="color: #82869E;">
                                            Các thông tin trên bạn vui lòng cung cấp chính xác để không xảy ra lỗi khi xử lý yêu cầu rút tiền. Nếu nhập sai thông tin, ngân hàng sẽ hoàn trả lại tiền và không hoàn phí rút tiền
                                        </span>
                                    </div>
                                </div>
                                <div class="modal-footer c-mt-40 c-mt-lg-24">
                                    <button class="btn primary">Xem kết quả</button>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                <div class="c-mt-8">
                                    <label class="c-mb-4 fw-500 fz-13 lh-20">Ví điện tử</label>
                                    <div class="col-md-12 p-0">
                                        <select class="default-select brs-8 fz-13" name="" id="">
                                            <option value="">--- Chọn---</option>
                                            <option value="">Is Text Demo</option>
                                            <option value="">Is Text Demo</option>
                                            <option value="">Is Text Demo</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="c-mt-8">
                                    <label class="c-mb-4 fw-500 fz-13 lh-20">Số tài khoản ví</label>
                                    <div class="col-md-12 p-0">
                                        <input type="text" name="" id="" placeholder="placeholder">
                                    </div>
                                </div>

                                <div class="c-mt-8">
                                    <label class="c-mb-4 fw-500 fz-13 lh-20">Xác nhận lại số tài khoản ví</label>
                                    <div class="col-md-12 p-0">
                                        <input type="text" name="" id="" placeholder="placeholder">
                                    </div>
                                </div>

                                <div class="c-mt-12">
                                    <label class="c-mb-4 fw-500 fz-13 lh-20">Lưu ý</label>
                                    <div class="col-md-12 p-0">
                                        <span class="fz-13 fw-400 lh-28" style="color: #82869E;">
                                            Rút về các ví điện tử, Tất cả thông tin gồm tên tài khoản, số điện thoại, hoặc email tài khoản ở ví đó
                                        </span>
                                    </div>
                                </div>

                                <div class="modal-footer c-mt-40 c-mt-lg-24">
                                    <button class="btn primary">Xem kết quả</button>
                                </div>
                            </div>
                        </div>

                    </section>
                </div>

            </div>
        </div>
    </div>

    <script>
        // Input Slider On Modal
        // let slider_modal;
        // $('#modal-demo-05').on('shown.bs.modal', function (e) {
        //     if(slider_modal){
        //         slider_modal.destroy();
        //     }
        //     slider_modal = new rSlider({
        //         target: '#input-slider',
        //         values: {min:0,max:200},
        //         step:1,
        //         range: true,
        //         tooltip: true,
        //         scale: false,
        //         labels: false,
        //         disabled:false,
        //         set:[10,60],
        //     });
        // })


        //modal lấy mật khẩu

        tippy('.c-copy-text', {
            // default
            trigger: 'click',
            content: "Đã coppy !",
            placement: 'right',
        });

        $('.c-copy-text').on('click', function () {
            let text_value = $(this).parent().find('input').val();
            navigator.clipboard.writeText(text_value);
        });
        /*Hết modal lấy mật khẩu*/

    //    Modal nick liên minh huyển thoại.

        $('body').on('click','.c-close-modal',function(e){
            e.preventDefault();
            $('.c-modal__nick-lmht-tuong').css('display','none');
            $('.c-modal__nick-lmht-ttk').css('display','none');
        });


        $('body').on('click','.modal-demo-14',function(e){
            e.preventDefault();
            $('.c-modal__nick-lmht-tuong').css('display','block');
        });

        $('body').on('click','.modal-demo-15',function(e){
            e.preventDefault();
            $('.c-modal__nick-lmht-ttk').css('display','block');
        });
    </script>
@endsection

