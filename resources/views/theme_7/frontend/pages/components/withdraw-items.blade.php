<div class="card unset-lg withdraw-items">
    <div class="card-header d-none d-lg-block">
        <h1 class="text-title-bold fz-20 lh-28">
            Rút vật phẩm
        </h1>
    </div>
    <div class="head-mobile">
        <a href="#" class="link-back"></a>

        <h1 class="head-title text-title">Rút vật phẩm</h1>

        <a href="#" class="notify" data-notify="2"></a>
    </div>
    <div class="card-body c-px-16 c-px-lg-0 c-py-0">
        <ul class="nav nav-tabs size-auto c-pb-16" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="tab active" data-toggle="tab" href="#tab-1" role="tab" aria-selected="true">Rút vật phẩm</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="tab" data-toggle="tab" href="#tab-2" role="tab" aria-selected="false">Lịch sử</a>
            </li>
        </ul>
        <div class="tab-content withdraw-body">
            <div class="tab-pane fade active show c-pt-16 c-pb-lg-50 c-mb-lg-50" id="tab-1" role="tabpanel">
                <div class="input-group c-mb-10">
                    <span class="form-label">
                        Chọn loại vật phẩm
                    </span>
                    <select name="" id="">
                        <option value="">Kim cương FreeFire</option>
                    </select>
                </div>

                <div class="group-info c-mb-16">
                    <span class="fw-400">Số tiền hiện có:</span>
                    <span class="text-primary-color">10.000.000đ</span>
                </div>

                <div class="input-group">
                    <span class="form-label">
                        Gói muốn rút
                    </span>
                    <select name="" id="">
                        <option value="">Kim cương FreeFire</option>
                    </select>
                </div>

                <div class="input-group">
                    <span class="form-label">
                        Tài khoản trong game
                    </span>
                    <input type="text" placeholder="Tên tài khoản">
                </div>

                <div class="input-group">
                    <span class="form-label">
                        Mật khẩu trong game
                    </span>
                    <div class="toggle-password">
                        <input type="password" placeholder="Mật khẩu">
                    </div>
                </div>

                <div class="input-group">
                    <span class="form-label">
                        Số điện thoại (nếu có)
                    </span>
                    <input type="text" placeholder="Số điện thoại">
                </div>


                <div class="footer-mobile v2 group-btn c-my-24 c-my-lg-0 w-100 c-px-lg-16 c-pt-lg-16" style="--data-between:12px">
                    <button type="button" class="btn secondary open-sheet" data-toggle="modal" data-target="#modal-add-bank" data-target_2="#sheet-add-bank">Thêm NH/ Ví ĐT</button>
                    <button type="button" class="btn primary" data-toggle="modal" data-target="#modal-success">Giao dịch</button>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-2" role="tabpanel">
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
