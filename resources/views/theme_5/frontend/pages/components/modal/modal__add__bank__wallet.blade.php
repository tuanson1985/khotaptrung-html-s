<div class="modal fade" id="modal-add-bank">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title center">Thêm ngân hàng/Ví điện tử</h2>
                <button type="button" class="close" data-dismiss="modal"></button>
            </div>
            <hr class="mx-n4 c-mt-16">
            <ul class="nav nav-tabs size-auto c-pb-16 mx-n4" role="tablist">
                <li class="nav-item w-50" role="presentation">
                    <a class="tab active lh-24" data-toggle="tab" href="#tab-add-bank" role="tab" aria-selected="true">Tài khoản ngân hàng</a>
                </li>
                <li class="nav-item w-50" role="presentation">
                    <a class="tab lh-24" data-toggle="tab" href="#tab-add-wallet" role="tab" aria-selected="false">Ví điện tử</a>
                </li>
            </ul>

            <div class="tab-content withdraw-body">
                <div class="tab-pane fade active show" id="tab-add-bank" role="tabpanel">
                    <div class="modal-body c-p-0">
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
                    </div>
                    <div class="text-title c-mt-4 c-mb-8">
                        Lưu ý
                    </div>
                    <span class="link-color">
                        Các thông tin trên bạn vui lòng cung cấp chính xác để không xảy ra lỗi khi xử lý yêu cầu rút tiền. Nếu nhập sai thông tin, ngân hàng sẽ hoàn trả lại tiền và không hoàn phí rút tiền
                    </span>
                    <div class="modal-footer c-mt-40">
                        <a class="btn primary">Thêm ngân hàng</a>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-add-wallet" role="tabpanel">
                    <div class="modal-body c-p-0">
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
                    </div>
                    <div class="text-title c-mt-4 c-mb-8">
                        Lưu ý
                    </div>
                    <span class="link-color">
                        Rút về các ví điện tử, Tất cả thông tin gồm tên tài khoản, số điện thoại, hoặc email tài khoản ở ví đó
                    </span>
                    <div class="modal-footer c-mt-40">
                        <a class="btn primary">Thêm ví điện tử</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
