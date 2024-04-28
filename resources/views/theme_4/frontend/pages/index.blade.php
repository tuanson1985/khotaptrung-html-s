@extends('frontend.layouts.master')
@section('styles')
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/css/lib_bootstrap.css">
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/css/minigame.css">
@endsection
@section('scripts')
    <script src="/assets/{{env('THEME_VERSION')}}/js/js_trong/script_trong.js"></script>
@endsection
@section('content')

    <div class="container container-fix">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="rotation-notify text-slider">
                <img class="img-text-slider" src="/assets/theme_4/image/images_1/sound.svg" alt="">
                <marquee class="rotation-marquee marquee-move">
                    <div class="rotation-marquee-item marquee-item">
                        <h6 class="text-item">Dương</h6> <p class="content-text">Đã trúng <span id="prize">1000 kim cương</span> <span id="prizeTime" style="color: #82869E;">1h trước</span></p>
                    </div>
                </marquee>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner carousel-slider-item">
                <div class="carousel-item active">
                    <img class="d-block w-100 img-slider img-slider-mobile" src="https://i.rada.vn/data/image/2021/01/12/Free-Fire-MAX-1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 img-slider img-slider-mobile" src="https://game8.vn/media/202004/images/free-fire-without-1.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 img-slider img-slider-mobile" src="https://trochoisinhton.vn/wp-content/uploads/2020/06/thumbnail-1024x576.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>



<div class="container container-fix">
        <div class="content__wrap" id="content-store-card">
            <div class="row" id="screen--first">
                <div class="col-12 col-lg-12 col-xl-8 px-lg-3 section--type__card buy-card">
                    <div class="card--mobile__title">
                        <span class="card--back box-account-mobile_open">
                            <img  src="/assets/{{env('THEME_VERSION')}}/image/icons/credit_card.png" alt="">
                        </span>
                        <h4 class="text-buy-card">Mua thẻ nhanh</h4>
                    </div>
                    <div class="card --custom ">
                        <div class="card--header">
                            <div class="card--header__title">
                                <div class="title__icon"><img
                                        src="/assets/{{env('THEME_VERSION')}}/image/icons/credit_card.png" alt=""></div>
                                <h4>Mua thẻ nhanh</h4>
                            </div>
                        </div>
                        <div class="card--body">
                            <ul class="nav nav-tabs tabs--cards" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="card-game-tab" data-toggle="tab" href="#card-game"
                                       role="tab" aria-controls="card-game" aria-selected="true">Thẻ game</a>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="card-phone-tab" data-toggle="tab" href="#card-phone"
                                       role="tab"
                                       aria-controls="card-phone" aria-selected="false">Thẻ điện thoại</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab--title">Chọn loại thẻ</div>
                                <div class="tab-pane fade show active select-tag-type" id="card-game" role="tabpanel" aria-labelledby="card-game-tab">
                                    <ul class="cards__list row">
                                        <li class="cards__item tag-card-item tag-card-item-mobile p_0">
                                            <input type="radio" id="card-zing" name="card-type" checked hidden>
                                            <label for="card-zing">
                                                <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo/zing.png"
                                                     class="card--logo"
                                                     alt="card-zing">
                                            </label>
                                        </li>
                                        <li class="cards__item tag-card-item tag-card-item-mobile p_0">
                                            <input type="radio" id="card-gate" name="card-type" hidden>
                                            <label for="card-gate">
                                                <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo/gate.png"
                                                     class="card--logo"
                                                     alt="card-gate">
                                            </label>
                                        </li>
                                        <li class="cards__item tag-card-item tag-card-item-mobile p_0">
                                            <input type="radio" id="card-garena" name="card-type" hidden>
                                            <label for="card-garena">
                                                <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo/garena.png"
                                                     class="card--logo" alt="card-garena">
                                            </label>
                                        </li>
                                        <li class="cards__item tag-card-item tag-card-item-mobile p_0">
                                            <input type="radio" id="card-vcoin" name="card-type" hidden>
                                            <label for="card-vcoin">
                                                <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo/vcoin.png"
                                                     class="card--logo"
                                                     alt="card-vcoin">
                                            </label>
                                        </li>
                                        <li class="cards__item tag-card-item tag-card-item-mobile p_0">
                                            <input type="radio" id="card-bit" name="card-type" hidden>
                                            <label for="card-bit">
                                                <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo/bit.png"
                                                     class="card--logo"
                                                     alt="card-bit">
                                            </label>
                                        </li>
                                        <li class="cards__item tag-card-item tag-card-item-mobile p_0">
                                            <input type="radio" id="card-ongame" name="card-type" hidden>
                                            <label for="card-ongame">
                                                <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo/ongame.png"
                                                     class="card--logo" alt="card-ongame">
                                            </label>
                                        </li>
                                        <li class="cards__item tag-card-item tag-card-item-mobile p_0">
                                            <input type="radio" id="card-scoin" name="card-type" hidden>
                                            <label for="card-scoin">
                                                <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo/scoin.png"
                                                     class="card--logo"
                                                     alt="card-scoin">
                                            </label>
                                        </li>
                                        <li class="cards__item tag-card-item tag-card-item-mobile p_0">
                                            <input type="radio" id="card-appota" name="card-type" hidden>
                                            <label for="card-appota">
                                                <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo/appota.png"
                                                     class="card--logo" alt="card-appota">
                                            </label>
                                        </li>
                                        <li class="cards__item tag-card-item tag-card-item-mobile p_0">
                                            <input type="radio" id="card-funcard" name="card-type" hidden>
                                            <label for="card-funcard">
                                                <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo/funcard.png"
                                                     class="card--logo" alt="card-funcard">
                                            </label>
                                        </li>
                                        <li class="cards__item tag-card-item tag-card-item-mobile p_0">
                                            <input type="radio" id="card-sohacoin" name="card-type" hidden>
                                            <label for="card-sohacoin">
                                                <img
                                                    src="/assets/{{env('THEME_VERSION')}}/image/cards-logo/sohacoin.png"
                                                    class="card--logo" alt="card-sohacoin">
                                            </label>
                                        </li>
                                        <li class="cards__item tag-card-item tag-card-item-mobile p_0">
                                            <input type="radio" id="card-kulgame" name="card-type" hidden>
                                            <label for="card-kulgame">
                                                <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo/kulgame.png"
                                                     class="card--logo" alt="card-kulgame">
                                            </label>
                                        </li>
                                        <li class="cards__item tag-card-item tag-card-item-mobile p_0">
                                            <input type="radio" id="card-gosu" name="card-type" hidden>
                                            <label for="card-gosu">
                                                <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo/gosu.png"
                                                     class="card--logo"
                                                     alt="card-gosu">
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="card-phone" role="tabpanel" aria-labelledby="card-phone-tab">
                                    <ul class="cards__list row">
                                        <li class="cards__item tag-card-item tag-card-item-mobile p_0">
                                            <input type="radio" id="card-viettel" name="card-type" hidden>
                                            <label for="card-viettel">
                                                <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo/viettel.png"
                                                     class="card--logo"
                                                     alt="card-viettel">
                                            </label>
                                        </li>
                                        <li class="cards__item tag-card-item tag-card-item-mobile p_0">
                                            <input type="radio" id="card-mobifone" name="card-type" hidden>
                                            <label for="card-mobifone">
                                                <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo/mobifone.png"
                                                     class="card--logo"
                                                     alt="card-mobifone">
                                            </label>
                                        </li>
                                        <li class="cards__item tag-card-item tag-card-item-mobile p_0">
                                            <input type="radio" id="card-gmobile" name="card-type" hidden>
                                            <label for="card-gmobile">
                                                <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo/gmobile.png"
                                                     class="card--logo" alt="card-gmobile">
                                            </label>
                                        </li>
                                        <li class="cards__item tag-card-item tag-card-item-mobile p_0">
                                            <input type="radio" id="card-vinaphone" name="card-type" hidden>
                                            <label for="card-vinaphone">
                                                <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo/vinaphone.png"
                                                     class="card--logo" alt="card-vinaphone">
                                            </label>
                                        </li>
                                        <li class="cards__item tag-card-item tag-card-item-mobile p_0">
                                            <input type="radio" id="card-vietnammobile" name="card-type" hidden>
                                            <label for="card-vietnammobile">
                                                <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo/vietnammobile.png"
                                                     class="card--logo" alt="card-vietnammobile">
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xl-4  pl-lg-1 section--amount__card choose-card">
                    <div class="card --custom">
                        <div class="card--body">
                            <div class="denos--wrap">
                                <div class="denos--title">
                                    Chọn mệnh giá
                                </div>
                                <ul class="deno__list row">
                                    <li class="deno__item col-4 col-lg-4">
                                        <input type="radio" id="card-10" name="card-value" checked hidden>
                                        <label for="card-10" class="deno__value card-item-value">
                                            <span>10.000 đ</span>
                                        </label>
                                    </li>
                                    <li class="deno__item col-4 col-lg-4">
                                        <input type="radio" id="card-20" name="card-value" hidden>
                                        <label for="card-20" class="deno__value card-item-value">
                                            <span>20.000 đ</span>
                                        </label>
                                    </li>
                                    <li class="deno__item col-4 col-lg-4">
                                        <input type="radio" id="card-30" name="card-value" hidden>
                                        <label for="card-30" class="deno__value card-item-value">
                                            <span>30.000 đ</span>
                                        </label>
                                    </li>
                                    <li class="deno__item col-4 col-lg-4">
                                        <input type="radio" id="card-50" name="card-value" hidden>
                                        <label for="card-50" class="deno__value card-item-value">
                                            <span>50.000 đ</span>
                                        </label>
                                    </li>
                                    <li class="deno__item col-4 col-lg-4">
                                        <input type="radio" id="card-100" name="card-value" hidden>
                                        <label for="card-100" class="deno__value card-item-value">
                                            <span>100.000 đ</span>
                                        </label>
                                    </li>
                                    <li class="deno__item col-4 col-lg-4">
                                        <input type="radio" id="card-200" name="card-value" hidden>
                                        <label for="card-200" class="deno__value card-item-value">
                                            <span>200.000 đ</span>
                                        </label>
                                    </li>
                                    <li class="deno__item col-4 col-lg-4">
                                        <input type="radio" id="card-300" name="card-value" hidden>
                                        <label for="card-300" class="deno__value card-item-value">
                                            <span>300.000 đ</span>
                                        </label>
                                    </li>
                                    <li class="deno__item col-4 col-lg-4">
                                        <input type="radio" id="card-500" name="card-value" hidden>
                                        <label for="card-500" class="deno__value card-item-value">
                                            <span>500.000 đ</span>
                                        </label>
                                    </li>

                                </ul>
                                <div class="card--amount">
                                    <span class="card--amount__title">
                                        Số lượng thẻ
                                    </span>
                                    <div class="card--amount__group">
                                        <button class="btn--amount -minus js-amount" data-action="minus">
                                            <img src="/assets/{{env('THEME_VERSION')}}/image/icons/minus.png" alt="">
                                        </button>
                                        <input type="text" name="card-amount" class="input--amount" value="1" numberic>
                                        <button class="btn--amount -add js-amount" data-action="add">
                                            <img src="/assets/{{env('THEME_VERSION')}}/image/icons/add.png" alt="">
                                        </button>
                                    </div>
                                </div>
                                <div class="discount">
                                    <span class="discount--title">
                                        Chiết khấu
                                    </span>
                                    <span class="discount--value">
                                        3%
                                    </span>
                                </div>
                                <div class="price--total">
                                    <span class="price--total__title">
                                        Thành tiền
                                    </span>
                                    <span class="price--total__value">
                                        97.000 đ
                                    </span>
                                </div>
                                <button type="button" class="btn -primary btn-big js_step" data-go_to="step2" data-toggle="modal" data-target="#modal--confirm__payment" id="btn-confirm">Chọn mua</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Xác Nhận Thanh Toán-->
            <div class="modal fade" id="modal--confirm__payment" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered animated">
                    <div class="modal-content -custom dialog">
                        <div class="dialog--header">
                            <div class="dialog--header__title">
                                Xác nhận thanh toán
                            </div>
                            <button type="button" class="close dialog__close" data-dismiss="modal">
                                <img src="/assets/{{env('THEME_VERSION')}}/image/icons/close.png" alt="">
                            </button>
                        </div>
                        <div class="dialog--content">
                            <div class="dialog--content__title">
                                Thông tin mua thẻ
                            </div>
                            <div class="card--gray">
                                <div class="card--attr">
                                    <div class="card--attr__name">
                                        Loại thẻ
                                    </div>
                                    <div class="card--attr__value">
                                        <div class="card--logo">
                                            <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo/zing.png"
                                                 alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="card--attr">
                                    <div class="card--attr__name">
                                        Giá niêm yết
                                    </div>
                                    <div class="card--attr__value">
                                        10.000 đ
                                    </div>
                                </div>
                                <div class="card--attr">
                                    <div class="card--attr__name">
                                        Số lượng
                                    </div>
                                    <div class="card--attr__value">
                                        01
                                    </div>
                                </div>
                                <div class="card--attr">
                                    <div class="card--attr__name">
                                        Chiết khấu
                                    </div>
                                    <div class="card--attr__value">
                                        3%
                                    </div>
                                </div>
                                <div class="card--attr">
                                    <div class="card--attr__name">
                                        Thành tiền
                                    </div>
                                    <div class="card--attr__value">
                                        9.700 đ
                                    </div>
                                </div>
                            </div>
                            <div class="card--gray">
                                <div class="card--attr">
                                    <div class="card--attr__name">
                                        Phương thức thanh toán
                                    </div>
                                    <div class="card--attr__value">
                                        Tài khoản Shopbrand
                                    </div>
                                </div>
                                <div class="card--attr">
                                    <div class="card--attr__name">
                                        Phí thanh toán
                                    </div>
                                    <div class="card--attr__value">
                                        Miễn phí
                                    </div>
                                </div>
                            </div>
                            <div class="card--gray">
                                <div class="card--attr__total">
                                    <div class="card--attr__name">
                                        Tổng thanh toán
                                    </div>
                                    <div class="card--attr__value">
                                        9.700 đ
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn -primary btn-big" data-dismiss="modal" data-toggle="modal" data-target="#modal--success__payment">Xác nhận</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Mua Thành Công-->
            <div class="modal fade" id="modal--success__payment" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content -custom dialog">
                        <div class="dialog--header">
                            <div class="dialog--header__title">
                                Mua thẻ thành công
                            </div>
                            <button type="button" class="close dialog__close" data-dismiss="modal">
                                <img src="/assets/{{env('THEME_VERSION')}}/image/icons/close.png" alt="">
                            </button>
                        </div>
                        <div class="dialog--content">
                            <div class="card--gray card__notify">
                                <div class="card__message">
                                    Chúc mừng bạn đã giao dịch thành công
                                </div>
                                <div class="card--success__icon">
                                    <img src="/assets/{{env('THEME_VERSION')}}/image/icons/success.png" alt="">
                                </div>
                            </div>
                            <div class="dialog--content__title">
                                Thông tin thẻ
                            </div>
                            <div class="card--gray">
                                <div class="card--attr">
                                    <div class="card--attr__name">
                                        Loại thẻ
                                    </div>
                                    <div class="card--attr__value">
                                        <div class="card--logo">
                                            <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo/zing.png"
                                                 alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="card--attr">
                                    <div class="card--attr__name">
                                        Giá niêm yết
                                    </div>
                                    <div class="card--attr__value">
                                        10.000 đ
                                    </div>
                                </div>
                                <div class="card--attr">
                                    <div class="card--attr__name">
                                        Số lượng
                                    </div>
                                    <div class="card--attr__value">
                                        01
                                    </div>
                                </div>
                            </div>
                            <div class="swiper slider--card">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide card__detail">
                                        <div class="card--header__detail">
                                            <div class="card--info__wrap">
                                                <div class="card--logo">
                                                    <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo/zing.png" alt="">
                                                </div>
                                                <div class="card--info">
                                                    <div class="card--info__name">
                                                        Zing 1
                                                    </div>
                                                    <div class="card--info__value">
                                                        100.000 đ
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card--gray">
                                            <div class="card--attr">
                                                <div class="card--attr__name">
                                                    Mã thẻ
                                                </div>
                                                <div class="card--attr__value">
                                                    <div class="card__info">
                                                        48563415693486456
                                                    </div>
                                                    <div class="icon--coppy js-copy-text">
                                                        <img src="/assets/{{env('THEME_VERSION')}}/image/icons/coppy.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card--attr">
                                                <div class="card--attr__name">
                                                    Seri
                                                </div>
                                                <div class="card--attr__value">
                                                    <div class="card__info">
                                                        12121212121
                                                    </div>
                                                    <div class="icon--coppy js-copy-text">
                                                        <img src="/assets/{{env('THEME_VERSION')}}/image/icons/coppy.png" alt="">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide card__detail">
                                        <div class="card--header__detail">
                                            <div class="card--info__wrap">
                                                <div class="card--logo">
                                                    <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo/zing.png" alt="">
                                                </div>
                                                <div class="card--info">
                                                    <div class="card--info__name">
                                                        Zing 1
                                                    </div>
                                                    <div class="card--info__value">
                                                        100.000 đ
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card--gray">
                                            <div class="card--attr">
                                                <div class="card--attr__name">
                                                    Mã thẻ
                                                </div>
                                                <div class="card--attr__value">
                                                    <div class="card__info">
                                                        48563415693486456
                                                    </div>
                                                    <div class="icon--coppy js-copy-text">
                                                        <img src="/assets/{{env('THEME_VERSION')}}/image/icons/coppy.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card--attr">
                                                <div class="card--attr__name">
                                                    Seri
                                                </div>
                                                <div class="card--attr__value">
                                                    <div class="card__info">
                                                        12121212121
                                                    </div>
                                                    <div class="icon--coppy js-copy-text">
                                                        <img src="/assets/{{env('THEME_VERSION')}}/image/icons/coppy.png" alt="">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn -primary btn-big">Mua thêm</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="block-card-item mt-fix-20">
        <div class="row">
            <div class="col-lg-5 col-md-12"  style="min-height: 100%">
                <div class=" block-product "  >
                    <div class="product-header d-flex">
                        <span>
                            <img src="/assets/{{env('THEME_VERSION')}}/image/charge_card_icon.png" alt="">
                        </span>
                        <p class="text-title" >Nạp tiền</p>
                        <div class="navbar-spacer"></div>
                    </div>
                    <div class="box-product " >
                        <div class="default-tab pr-fix-16 pl-fix-16">
                            <ul class="nav justify-content-between row" role="tablist" >
                                <li class="nav-item col-4 col-md-4 p-0  p-md-0" role="presentation">
                                    <a  class="nav-link active text-center " data-toggle="tab" href="#charge_card" role="tab" aria-selected="true">Nạp thẻ <span class="d-g-none">cào</span> </a>
                                </li >
                                <li class="nav-item col-4 col-md-4 p-0 p-md-0" role="presentation">
                                    <a  class="nav-link text-center "  data-toggle="tab" href="#atm_card" role="tab" aria-selected="false"> ATM <span class="d-g-none">tự động</span> </a>
                                </li>
                                <li class="nav-item col-4 col-md-4 p-0 p-md-0" role="presentation">
                                    <a  class="nav-link text-center " data-toggle="tab" href="#wallet_card" role="tab" aria-selected="false">Ví điện tử</a>
                                </li>
                            </ul>
                        </div>

                        <div class=" tab-content">
                            <div class="tab-pane fade active show  mt-3" id="charge_card" role="tabpanel" >
                                <form action="">
                                    <div class="box-charge-card">
                                        <div class="default-form-group mb-fix-20">
                                            <label class="text-form">Nhà cung cấp</label>
                                            <div class="col-md-12 p-0">
                                                <select class="select-form w-100" name="select">
                                                    <option value="">Viettel - Nhận 100.0%</option>
                                                    <option value="3">VinaPhone - Nhận 70.0%</option>
                                                    <option value="4">Garena - Nhận 60.0%</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="default-form-group mb-fix-20">
                                            <label class="text-form">Chọn mệnh giá</label>
                                            <div class="col-md-12 p-0">
                                                <div class="row m-0">
                                                    <div class=" col-4 col-md-4 pl-fix-4 pr-fix-4 check-radio-form charge-card-form">
                                                        <input checked name="amount" type="radio" id="recharge_amount_1" hidden>
                                                        <label for="recharge_amount_1">
                                                            <p>10.000đ</p>
                                                        </label>
                                                    </div>
                                                    <div class=" col-4 col-md-4 pl-fix-4 pr-fix-4 check-radio-form charge-card-form">
                                                        <input name="amount"  type="radio" id="recharge_amount_2" hidden>
                                                        <label for="recharge_amount_2">
                                                            <p>20.000đ</p>
                                                        </label>
                                                    </div>
                                                    <div class=" col-4 col-md-4 pl-fix-4 pr-fix-4 check-radio-form charge-card-form">
                                                        <input name="amount" type="radio" id="recharge_amount_3" hidden>
                                                        <label for="recharge_amount_3">
                                                            <p>30.000đ</p>
                                                        </label>
                                                    </div>
                                                    <div class=" col-4 col-md-4 pl-fix-4 pr-fix-4 check-radio-form charge-card-form">
                                                        <input name="amount" type="radio" id="recharge_amount_4" hidden>
                                                        <label for="recharge_amount_4">
                                                            <p>40.000đ</p>
                                                        </label>
                                                    </div>
                                                    <div class="col-4 col-md-4 pl-fix-4 pr-fix-4 check-radio-form charge-card-form">
                                                        <input name="amount" type="radio" id="recharge_amount_5" hidden>
                                                        <label for="recharge_amount_5">
                                                            <p>50.000đ</p>
                                                        </label>
                                                    </div>
                                                    <div class=" col-4 col-md-4 pl-fix-4 pr-fix-4 check-radio-form charge-card-form">
                                                        <input name="amount" type="radio" id="recharge_amount_6" hidden>
                                                        <label for="recharge_amount_6">
                                                            <p>60.000đ</p>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="default-form-group mb-fix-20">
                                            <label class="text-form">Mã số thẻ</label>
                                            <div class="col-md-12 p-0">
                                                <input class="input-form w-100" type="text" placeholder="Nhập mã số thẻ">

                                            </div>
                                        </div>
                                        <div class="default-form-group mb-fix-20">
                                            <label class="text-form">Số Seri</label>
                                            <div class="col-md-12 p-0">
                                                <input class="input-form w-100" type="text" placeholder="Nhập số seri thẻ">

                                            </div>
                                        </div>
                                        <div class="default-form-group mb-fix-20">
                                            <label class="text-form">Mã bảo vệ</label>
                                            <div class="col-md-12 p-0 d-flex">
                                                <input class="input-form w-100" type="text" placeholder="Nhập mã bảo vệ ">
                                                <div class="captcha">
                                                    <div>
                                                        <span>
                                                              <img src="/assets/{{env('THEME_VERSION')}}/image/capcha_example.png" alt="">
                                                        </span>
                                                    </div>
                                                </div>
                                                <button class="refresh-captcha">
                                                    <img src="/assets/{{env('THEME_VERSION')}}/image/captcha_refresh.png" alt="">
                                                </button>

                                            </div>
                                        </div>
                                        <div class="default-form-group mb-fix-20 ">
                                            <button  class="w-100 primary-button button-default-ct btn-charge-data" type="button">
                                                Nạp ngay
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade mt-3" id="atm_card" role="tabpanel" >
                                <form action="">
                                    <div class="box-charge-card">
                                        <div class="atm-card-title mb-fix-20">
                                            <span>Để hoàn tất đơn nạp, bạn vui lòng chuyển khoản theo cú pháp sau:</span>
                                        </div>
                                        <div class="dialog--content mb-fix-20">
                                            <div class="card--gray">
                                                <div class="card--attr">
                                                    <div class="card--attr__name">
                                                        Ngân hàng Kỹ thương Việt Nam
                                                        (Techcombank)
                                                    </div>
                                                    <div class="card--attr__value">
                                                        <div class="card--logo">
                                                            <img src="/assets/theme_4/image/cards-logo/zing.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card--attr">
                                                    <div class="card--attr__name">
                                                        Chủ tài khoản
                                                    </div>
                                                    <div class="card--attr__value">
                                                        BUI THI NHAM
                                                    </div>
                                                </div>
                                                <div class="card--attr">
                                                    <div class="card--attr__name">
                                                        Số tài khoản
                                                    </div>
                                                    <div class="card--attr__value d-flex">

                                                        <div class="card__info"> 19037861065016</div>

                                                        <div class="icon--coppy js-copy-text" aria-describedby="tippy-7">
                                                            <img src="/assets/theme_4/image/icons/copy-black.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card--attr">
                                                    <div class="card--attr__name">
                                                        Nội dung chuyển tiền
                                                    </div>
                                                    <div class="card--attr__value d-flex">
                                                        <div class="card__info"> NAP DTGRN 103764</div>

                                                        <div class="icon--coppy js-copy-text" aria-describedby="tippy-7">
                                                            <img src="/assets/theme_4/image/icons/copy-black.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="default-form-group ">
                                            <button  class="w-100 primary-button button-default-ct btn-data-charge_atm" type="button">
                                                Xác nhận
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade mt-3" id="wallet_card" role="tabpanel" >
                                <form action="">
                                    <div class="box-charge-card">
                                        <div class="default-form-group">
                                            <p class="wallet-card-title"> Vui lòng chọn chuyển khoản vào 1 trong các tài khoản ví dưới đây</p>
                                            <div class="col-md-12 p-0">
                                                <div class="row m-0">
                                                    <div class=" col-12 col-md-12 pr-fix-4 pl-fix-4 mb-fix-16 check-radio-form">
                                                        <input checked name="amount" type="radio" id="walet_card_1" hidden>
                                                        <label for="walet_card_1">
                                                            <div class="wallet-card d-flex justify-content-between">
                                                                <div class="wallet-card-img">
                                                                    <img src="/assets/{{env('THEME_VERSION')}}/image/wallet_logo.png" alt="">
                                                                </div>
                                                                <div class="wallet-card-content">
                                                                    <div class="wallet-card-name">
                                                                        Chủ tài khoản: Trần Văn Sơn
                                                                    </div>
                                                                    <div class="wallet-card-address">
                                                                        Chi nhánh: Hà Nội
                                                                    </div>
                                                                    <div class="wallet-card-web">
                                                                        thesieure.com
                                                                    </div>

                                                                </div>
                                                                <div class="wallet-card-qr">
                                                                    <img src="/assets/{{env('THEME_VERSION')}}/image/wallet_qr.png" alt="">
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class=" col-12 col-md-12 pr-fix-4 pl-fix-4 mb-fix-16 check-radio-form">
                                                        <input checked name="amount" type="radio" id="walet_card_2" hidden>
                                                        <label for="walet_card_2">
                                                            <div class="wallet-card d-flex justify-content-between">
                                                                <div class="wallet-card-img">
                                                                    <img src="/assets/{{env('THEME_VERSION')}}/image/wallet_logo.png" alt="">
                                                                </div>
                                                                <div class="wallet-card-content">
                                                                    <div class="wallet-card-name">
                                                                        Chủ tài khoản: Trần Văn Sơn
                                                                    </div>
                                                                    <div class="wallet-card-address">
                                                                        Chi nhánh: Hà Nội
                                                                    </div>
                                                                    <div class="wallet-card-web">
                                                                        thesieure.com
                                                                    </div>

                                                                </div>
                                                                <div class="wallet-card-qr">
                                                                    <img src="/assets/{{env('THEME_VERSION')}}/image/wallet_qr.png" alt="">
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="wallet-card-title mb-fix-8"> Nội dung thanh toán:</div>
                                            <span class="wallet-card-title wallet-card-title-content"> Doithegarena.com + [ID tài khoản hoặc tên tài khoản]</span>
                                        </div>

                                        <div class="default-form-group mt-fix-16">
                                            <button  class="w-100 primary-button button-default-ct btn-data-wallet_card" type="button">
                                                Xác nhận
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-lg-7 col-md-12 pl-0 d-g-md-none " style="min-height: 100%">
                <img class="w-100" src="/assets/{{env('THEME_VERSION')}}/image/charge_card.png" alt="" style="min-height: 100%">
            </div>
        </div>
    </div>

    <div class=" block-product mt-fix-20 mt-md-fix-8">
        <div class="d-flex product-header-item">
                    <span>
                        <img src="/assets/{{env('THEME_VERSION')}}/image/news.png" alt="">
                    </span>
            <p class="text-title text-content-service">Các dịch vụ liên quan</p>
            <div class="product-catecory"></div>
            <div class="text-view-more">
                <a href="/mua-acc" class="global__link">Xem thêm<i class="__icon --sm --link ml-1" style="--path : url(/assets/theme_4/image/icons/arrow-right-blue.png)"></i></a>
            </div>
        </div>
        <div class="box-product-content tab-content">
            <div class="box-product tab-pane fade active show" role="tabpanel" >
                <div class="swiper-container list-service ">
                    <div class="swiper-wrapper">
                        <div  class="swiper-slide " >
                            <a href="/tin-tuc">
                                <div class="item-product__box-img item-news-img">
                                    <img src="/assets/{{env('THEME_VERSION')}}/image/news_image.png" alt="">
                                </div>
                                <div class="item-product__box-content item-news-content">
                                    <div class="item-product__box-name">
                                        U23 Việt Nam và giấc mơ vô địch
                                    </div>
                                    <div class="item-product__box-date">
                                        21/01/2022
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div  class="swiper-slide " >
                            <a href="/tin-tuc">
                                <div class="item-product__box-img item-news-img">
                                    <img src="/assets/{{env('THEME_VERSION')}}/image/news_image.png" alt="">
                                </div>
                                <div class="item-product__box-content item-news-content">


                                    <div class="item-product__box-name">
                                        U23 Việt Nam và giấc mơ vô địch
                                    </div>
                                    <div class="item-product__box-date">
                                        21/01/2022
                                    </div>


                                </div>
                            </a>
                        </div>
                        <div  class="swiper-slide " >
                            <a href="/tin-tuc">
                                <div class="item-product__box-img item-news-img">
                                    <img src="/assets/{{env('THEME_VERSION')}}/image/news_image2.png" alt="">
                                </div>
                                <div class="item-product__box-content item-news-content">


                                    <div class="item-product__box-name">
                                        U23 Việt Nam và giấc mơ vô địch
                                    </div>
                                    <div class="item-product__box-date">
                                        21/01/2022
                                    </div>


                                </div>
                            </a>
                        </div>
                        <div  class="swiper-slide " >
                            <a href="/tin-tuc">
                                <div class="item-product__box-img item-news-img">
                                    <img src="/assets/{{env('THEME_VERSION')}}/image/news_image2.png" alt="">
                                </div>
                                <div class="item-product__box-content item-news-content">


                                    <div class="item-product__box-name">
                                        U23 Việt Nam và giấc mơ vô địch
                                    </div>
                                    <div class="item-product__box-date">
                                        21/01/2022
                                    </div>


                                </div>
                            </a>
                        </div>
                        <div  class="swiper-slide " >
                            <a href="/tin-tuc">
                                <div class="item-product__box-img item-news-img">
                                    <img src="/assets/{{env('THEME_VERSION')}}/image/news_image.png" alt="">
                                </div>
                                <div class="item-product__box-content item-news-content">


                                    <div class="item-product__box-name">
                                        U23 Việt Nam và giấc mơ vô địch
                                    </div>
                                    <div class="item-product__box-date">
                                        21/01/2022
                                    </div>


                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=" block-product mt-fix-20 mt-md-fix-8">
        <div class="product-header d-flex">
                    <span>
                        <img src="/assets/{{env('THEME_VERSION')}}/image/news.png" alt="">
                    </span>
            <p class="text-title">Tin tức</p>
            <div class="product-catecory " >
                <ul class="nav d-g-md-none" role="tablist" >
                    <li class="nav-item" role="presentation">
                        <a  class="nav-link active"  data-toggle="tab" href="#news_game" role="tab" aria-selected="true">Tin game</a>
                    </li >
                    <li class="nav-item" role="presentation">
                        <a  class="nav-link"   data-toggle="tab" href="#news_gamble" role="tab" aria-selected="false"> Cá độ</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a  class="nav-link"  data-toggle="tab" href="#news_soccer" role="tab" aria-selected="false">Bóng đá</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a  class="nav-link"  data-toggle="tab" href="#news_soccer" role="tab" aria-selected="false">Bóng đá</a>
                    </li>
                </ul>
            </div>


            <div class="text-view-more">

                <a href="/tin-tuc/slug" class="global__link">Xem thêm<i class="__icon --sm --link ml-1" style="--path : url(/assets/theme_4/image/icons/arrow-right-blue.png)"></i></a>

            </div>
        </div>
        <div class="product-catecory d-none d-g-lg-block pt-fix-16 pr-fix-16 pl-fix-16" >
            <ul class="nav justify-content-between row" role="tablist" >
                <li class="nav-item col-3 p-0 col-md-4 p-md-0" role="presentation">
                    <a  class="pb-fix-8 d-flex justify-content-center active"  data-toggle="tab" href="#news_game" role="tab" aria-selected="true">Tin game</a>
                </li >
                <li class="nav-item col-3 p-0 col-md-4 p-md-0" role="presentation">
                    <a  class="pb-fix-8 d-flex justify-content-center"  data-toggle="tab" href="#news_gamble" role="tab" aria-selected="false"> Cá độ</a>
                </li>
                <li class="nav-item col-3 p-0 col-md-4 p-md-0" role="presentation">
                    <a  class="pb-fix-8 d-flex justify-content-center" data-toggle="tab" href="#news_soccer" role="tab" aria-selected="false"> Bóng đá</a>
                </li>
                <li class="nav-item col-3 p-0 col-md-4 p-md-0" role="presentation">
                    <a  class="pb-fix-8 d-flex justify-content-center" data-toggle="tab" href="#news_soccer" role="tab" aria-selected="false"> Idol</a>
                </li>
            </ul>
        </div>
        <div class="box-product-content tab-content">
            <div class="box-product tab-pane fade active show" id="news_game" role="tabpanel" >
                <div class="swiper-container  list-news" >
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" >
                            <a href="/tin-tuc">
                            <div class="item-product__box-img item-news-img">
                                <img src="/assets/{{env('THEME_VERSION')}}/image/news_image.png" alt="">
                            </div>
                            <div class="item-product__box-content item-news-content">


                                    <div class="item-product__box-name">
                                        U23 Việt Nam và giấc mơ vô địch
                                    </div>
                                    <div class="item-product__box-date">
                                        21/01/2022
                                    </div>


                            </div>
                            </a>
                        </div>
                        <div class="swiper-slide" >
                            <a href="/tin-tuc">
                                <div class="item-product__box-img item-news-img">
                                    <img src="/assets/{{env('THEME_VERSION')}}/image/news_image.png" alt="">
                                </div>
                                <div class="item-product__box-content item-news-content">


                                    <div class="item-product__box-name">
                                        U23 Việt Nam và giấc mơ vô địch
                                    </div>
                                    <div class="item-product__box-date">
                                        21/01/2022
                                    </div>


                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide" >
                            <a href="/tin-tuc">
                                <div class="item-product__box-img item-news-img">
                                    <img src="/assets/{{env('THEME_VERSION')}}/image/news_image2.png" alt="">
                                </div>
                                <div class="item-product__box-content item-news-content">


                                    <div class="item-product__box-name">
                                        U23 Việt Nam và giấc mơ vô địch
                                    </div>
                                    <div class="item-product__box-date">
                                        21/01/2022
                                    </div>


                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide" >
                            <a href="/tin-tuc">
                                <div class="item-product__box-img item-news-img">
                                    <img src="/assets/{{env('THEME_VERSION')}}/image/news_image2.png" alt="">
                                </div>
                                <div class="item-product__box-content item-news-content">


                                    <div class="item-product__box-name">
                                        U23 Việt Nam và giấc mơ vô địch
                                    </div>
                                    <div class="item-product__box-date">
                                        21/01/2022
                                    </div>


                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide" >
                            <a href="/tin-tuc">
                                <div class="item-product__box-img item-news-img">
                                    <img src="/assets/{{env('THEME_VERSION')}}/image/news_image.png" alt="">
                                </div>
                                <div class="item-product__box-content item-news-content">


                                    <div class="item-product__box-name">
                                        U23 Việt Nam và giấc mơ vô địch
                                    </div>
                                    <div class="item-product__box-date">
                                        21/01/2022
                                    </div>


                                </div>
                            </a>
                        </div>




                    </div>

                </div>
            </div>
            <div class="box-product tab-pane fade " id="news_gamble" role="tabpanel" >
                <div class="swiper-container  list-news" >
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" >
                            <a href="">
                                <div class="item-product__box-img item-news-img">
                                    <img src="/assets/{{env('THEME_VERSION')}}/image/news_image.png" alt="">
                                </div>
                                <div class="item-product__box-content item-news-content">


                                    <div class="item-product__box-name">
                                        U23 Việt Nam và giấc mơ vô địch
                                    </div>
                                    <div class="item-product__box-date">
                                        21/01/2022
                                    </div>


                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide" >
                            <a href="">
                                <div class="item-product__box-img item-news-img">
                                    <img src="/assets/{{env('THEME_VERSION')}}/image/news_image.png" alt="">
                                </div>
                                <div class="item-product__box-content item-news-content">


                                    <div class="item-product__box-name">
                                        U23 Việt Nam và giấc mơ vô địch
                                    </div>
                                    <div class="item-product__box-date">
                                        21/01/2022
                                    </div>


                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide" >
                            <a href="">
                                <div class="item-product__box-img item-news-img">
                                    <img src="/assets/{{env('THEME_VERSION')}}/image/news_image.png" alt="">
                                </div>
                                <div class="item-product__box-content item-news-content">


                                    <div class="item-product__box-name">
                                        U23 Việt Nam và giấc mơ vô địch
                                    </div>
                                    <div class="item-product__box-date">
                                        21/01/2022
                                    </div>


                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide" >
                            <a href="">
                                <div class="item-product__box-img item-news-img">
                                    <img src="/assets/{{env('THEME_VERSION')}}/image/news_image.png" alt="">
                                </div>
                                <div class="item-product__box-content item-news-content">


                                    <div class="item-product__box-name">
                                        U23 Việt Nam và giấc mơ vô địch
                                    </div>
                                    <div class="item-product__box-date">
                                        21/01/2022
                                    </div>


                                </div>
                            </a>
                        </div>



                    </div>
                </div>
            </div>
            <div class="box-product tab-pane fade " id="news_soccer" role="tabpanel" >
                <div class="swiper-containe list-news" >
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" >
                            <a href="">
                                <div class="item-product__box-img item-news-img">
                                    <img src="/assets/{{env('THEME_VERSION')}}/image/news_image.png" alt="">
                                </div>
                                <div class="item-product__box-content item-news-content">


                                    <div class="item-product__box-name">
                                        U23 Việt Nam và giấc mơ vô địch
                                    </div>
                                    <div class="item-product__box-date">
                                        21/01/2022
                                    </div>


                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide" >
                            <a href="">
                                <div class="item-product__box-img item-news-img">
                                    <img src="/assets/{{env('THEME_VERSION')}}/image/news_image.png" alt="">
                                </div>
                                <div class="item-product__box-content item-news-content">


                                    <div class="item-product__box-name">
                                        U23 Việt Nam và giấc mơ vô địch
                                    </div>
                                    <div class="item-product__box-date">
                                        21/01/2022
                                    </div>


                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide" >
                            <a href="">
                                <div class="item-product__box-img item-news-img">
                                    <img src="/assets/{{env('THEME_VERSION')}}/image/news_image.png" alt="">
                                </div>
                                <div class="item-product__box-content item-news-content">


                                    <div class="item-product__box-name">
                                        U23 Việt Nam và giấc mơ vô địch
                                    </div>
                                    <div class="item-product__box-date">
                                        21/01/2022
                                    </div>


                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide" >
                            <a href="">
                                <div class="item-product__box-img item-news-img">
                                    <img src="/assets/{{env('THEME_VERSION')}}/image/news_image.png" alt="">
                                </div>
                                <div class="item-product__box-content item-news-content">


                                    <div class="item-product__box-name">
                                        U23 Việt Nam và giấc mơ vô địch
                                    </div>
                                    <div class="item-product__box-date">
                                        21/01/2022
                                    </div>


                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide" >
                            <a href="">
                                <div class="item-product__box-img item-news-img">
                                    <img src="/assets/{{env('THEME_VERSION')}}/image/news_image.png" alt="">
                                </div>
                                <div class="item-product__box-content item-news-content">


                                    <div class="item-product__box-name">
                                        U23 Việt Nam và giấc mơ vô địch
                                    </div>
                                    <div class="item-product__box-date">
                                        21/01/2022
                                    </div>


                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide" >
                            <a href="">
                                <div class="item-product__box-img item-news-img">
                                    <img src="/assets/{{env('THEME_VERSION')}}/image/news_image.png" alt="">
                                </div>
                                <div class="item-product__box-content item-news-content">


                                    <div class="item-product__box-name">
                                        U23 Việt Nam và giấc mơ vô địch
                                    </div>
                                    <div class="item-product__box-date">
                                        21/01/2022
                                    </div>


                                </div>
                            </a>
                        </div>



                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="block-product mt-fix-20">

        <div class="box-product">
            <div class="swiper-container  list-intro" >
                <div class="swiper-wrapper">
                    <div class="swiper-slide" >
                        <div class="item-intro-img">
                            <img src="/assets/{{env('THEME_VERSION')}}/image/intro1.png" alt=""></div>
                        <div class="list-intro-title">
                            Sản phẩm, dịch vụ đa dạng, cập nhật thường xuyên
                        </div>
                        <div class="list-intro-content">
                            Hệ thống luôn cung cấp, cập nhật những sản phẩm mới/hot nhất của các dòng game trên thị trường.
                        </div>

                    </div>
                    <div class="swiper-slide" >
                        <div class="item-intro-img">
                            <img src="/assets/{{env('THEME_VERSION')}}/image/intro2.png" alt=""></div>
                        <div class="list-intro-title">
                            Hàng nghìn khách hàng tin tưởng
                        </div>
                        <div class="list-intro-content">
                            Hơn 260.000 giao dịch thành công mỗi ngày. Chúng tôi luôn đặt uy tín, chất lượng dịch vụ lên hàng đầu.
                        </div>

                    </div>
                    <div class="swiper-slide" >
                        <div class="item-intro-img">
                            <img src="/assets/{{env('THEME_VERSION')}}/image/intro3.png" alt=""></div>
                        <div class="list-intro-title">
                            Trung tâm trợ giúp hỗ trợ tư vấn 24/24
                        </div>
                        <div class="list-intro-content">
                            Đội ngũ chăm sóc khách hàng luôn tư vấn và hỗ trợ nhiệt tình khi gặp sự cố trong quá trình trải nghiệm sản phẩm.
                        </div>

                    </div>
                    <div class="swiper-slide" >
                        <div class="item-intro-img">
                            <img src="/assets/{{env('THEME_VERSION')}}/image/intro4.png" alt=""></div>
                        <div class="list-intro-title">
                            Giá cả ưu đãi, siêu rẻ trên thị trường
                        </div>
                        <div class="list-intro-content">
                            Cung cấp những sản phẩm với giá cả tốt nhất cùng với đó là những ưu đãi vô cùng hấp dẫn.
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>

@include('theme_4.frontend.widget.modal.__charge')
@include('theme_4.frontend.widget.modal.__success_charge')
@include('theme_4.frontend.widget.modal.__reject_charge')
@include('theme_4.frontend.widget.modal.__success_charge_atm')
@include('theme_4.frontend.widget.modal.__success_wallet_card')
@endsection
