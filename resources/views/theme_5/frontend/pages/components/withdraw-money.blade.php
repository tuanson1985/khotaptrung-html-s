<div class="card unset-lg withdraw-money">
    <div class="card-header d-none d-lg-block">
        <h1 class="text-title-bold fz-20 lh-28">
            Rút tiền ATM - Ví điện tử
        </h1>
    </div>
    <div class="head-mobile">
        <a href="#" class="link-back"></a>

        <h1 class="head-title text-title">Rút tiền ATM - Ví điện tử</h1>

        <a href="#" class="notify" data-notify="2"></a>
    </div>
    <div class="card-body c-px-16 c-px-lg-0 c-py-0">
        <ul class="nav nav-tabs size-auto c-pb-16" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="tab active" data-toggle="tab" href="#tab-1" role="tab" aria-selected="true">Rút tiền</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="tab" data-toggle="tab" href="#tab--2" role="tab" aria-selected="false">Lịch sử</a>
            </li>
        </ul>
        <div class="tab-content withdraw-body">
            <div class="tab-pane fade active show c-pt-16 c-pb-lg-50 c-mb-lg-50" id="tab-1" role="tabpanel">
                <div class="group-info">
                    <span class="fw-400">Số tiền hiện có:</span>
                    <span class="text-primary-color">10.000.000đ</span>
                </div>
                <p class="text-title title-color c-mt-16 c-mb-8">
                    Chọn phương thức rút tiền
                </p>
                <div class="group-info">
                    <div class="c-mb-12">
                        <label for="atm" class="input-radio">
                            <input type="radio" name="payment_method" id="atm" checked>
                            <span class="checkmark"></span>
                            <span class="text-label">Tài khoản ngân hàng</span>
                        </label>
                    </div>
                    <div>
                        <label for="wallet" class="input-radio">
                            <input type="radio" name="payment_method" id="wallet">
                            <span class="checkmark"></span>
                            <span class="text-label">Ví điện tử</span>
                        </label>
                    </div>
                </div>
                <p class="text-title title-color c-mt-16 c-mb-4">
                    Chọn tài khoản nhận tiền
                </p>
                <select name="" id="">
                    <option value="">Techcombank - 1903 2345 24355</option>
                </select>
                <p class="text-title title-color c-mt-8 c-mb-4">
                    Họ và tên chủ tài khoản
                </p>
                <input type="text" placeholder="Nhập họ tên chủ tài khoản nhận tiền">
                <p class="text-title title-color c-mt-8 c-mb-4">
                    Nhập số tiền cần rút
                </p>
                <input type="text" placeholder="Nhập số tiền" numberic>
                <p class="text-title title-color c-mt-8 c-mb-4">
                    Nhập nội dung rút tiền
                </p>
                <textarea name="" id="" style="height: 84px" placeholder="Vui lòng nhập nội dung (nếu có)"></textarea>

                <div class="footer-mobile v2 group-btn c-my-24 c-my-lg-0 w-100 c-px-lg-16 c-pt-lg-16" style="--data-between:12px">
                    <button type="button" class="btn secondary open-sheet" data-toggle="modal" data-target="#modal-add-bank" data-target_2="#sheet-add-bank">Thêm NH/ Ví ĐT</button>
                    <button type="button" class="btn primary" data-toggle="modal" data-target="#modal-success">Giao dịch</button>
                </div>
            </div>
            <div class="tab-pane fade" id="tab--2" role="tabpanel">
                @include('frontend.pages.components.history')
            </div>
        </div>
    </div>
</div>
<!-- Modal Add Bank,Wallet -->
@include('frontend.pages.components.modal.modal__add__bank__wallet')
<!-- Modal Success -->
@include('frontend.pages.components.modal.modal__success')
<!-- Sheet Add Bank,Wallet -->
@include('frontend.pages.components.sheet.sheet__add__bank__wallet')
