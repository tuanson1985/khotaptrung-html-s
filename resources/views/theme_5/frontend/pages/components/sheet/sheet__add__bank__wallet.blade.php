<div class="bottom-sheet" id="sheet-add-bank" aria-hidden="true" data-height="75">
    <div class="layer"></div>
    <div class="content-bottom-sheet bar-slide">
        <form action="" class="form-filter">
            <div class="sheet-header">
                <h2 class="text-title center">
                    Thêm ngân hàng/Ví điện tử
                </h2>
                <label class="close"></label>
            </div>
            <div class="sheet-body overflow-visible">
                <!-- body -->
                <ul class="nav nav-tabs size-auto c-pb-16" role="tablist">
                    <li class="nav-item w-50" role="presentation">
                        <a class="tab active lh-24" data-toggle="tab" href="#tab-add-bank-sheet" role="tab" aria-selected="true">Tài khoản ngân hàng</a>
                    </li>
                    <li class="nav-item w-50" role="presentation">
                        <a class="tab lh-24" data-toggle="tab" href="#tab-add-wallet-sheet" role="tab" aria-selected="false">Ví điện tử</a>
                    </li>
                </ul>

                <div class="tab-content withdraw-body">
                    <div class="tab-pane fade active show" id="tab-add-bank-sheet" role="tabpanel">
                        <div class="input-group">
                            <span class="form-label title-color">Ngân hàng</span>
                            <select name="" id="">
                                <option value="">Chọn ngân hàng nhận tiền</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <span class="form-label title-color">Chủ tài khoản</span>
                            <input type="text" placeholder="Nhập tên chủ tài khoản nhận tiền">
                        </div>

                        <div class="input-group">
                            <span class="form-label title-color">Số tài khoản</span>
                            <input type="text" placeholder="Nhập tài khoản nhận tiền">
                        </div>

                        <div class="input-group">
                            <span class="form-label title-color">Chi nhánh</span>
                            <input type="text" placeholder="Nhập tài khoản nhận tiền">
                        </div>
                        <div class="text-title c-mt-4 c-mb-8">
                            Lưu ý
                        </div>
                        <span class="link-color">
                        Các thông tin trên bạn vui lòng cung cấp chính xác để không xảy ra lỗi khi xử lý yêu cầu rút tiền. Nếu nhập sai thông tin, ngân hàng sẽ hoàn trả lại tiền và không hoàn phí rút tiền
                    </span>
                    </div>
                    <div class="tab-pane fade" id="tab-add-wallet-sheet" role="tabpanel">
                        <div class="input-group">
                            <span class="form-label title-color">Ví điện tử</span>
                            <select name="" id="">
                                <option value="">Chọn loại ví điện tử</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <span class="form-label title-color">Số tài khoản ví</span>
                            <input type="text" placeholder="Nhập tên chủ tài khoản nhận tiền">
                        </div>

                        <div class="input-group">
                            <span class="form-label title-color">Xác nhận lại số tài khoản ví</span>
                            <input type="text" placeholder="Nhập tài khoản nhận tiền">
                        </div>
                        <div class="text-title c-mt-4 c-mb-8">
                            Lưu ý
                        </div>
                        <span class="link-color">
                        Rút về các ví điện tử, Tất cả thông tin gồm tên tài khoản, số điện thoại, hoặc email tài khoản ở ví đó
                    </span>
                    </div>
                </div>
            </div>
            <div class="sheet-footer">
                <button class="btn primary js-submit-form">Thêm ngân hàng</button>
            </div>
        </form>
    </div>
</div>
