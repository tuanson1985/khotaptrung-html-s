@extends('frontend.layouts.master')
@section('content')
    <div class="container mx-auto mb-4">
        <div class="card">
            <div class="card-body">
                <div class="section-title">
                    Các loại font chữ được sử dụng trên web
                </div>
                <div class="t-h1">.t-h1</div>
                <div class="t-h2">.t-h2</div>
                <div class="t-h3">.t-h3</div>
                <div class="t-h4">.t-h4</div>
                <div class="t-title-1">.t-title-1</div>
                <div class="t-title-2">.t-title-2</div>
                <div class="t-title-3">.t-title-3</div>
                <div class="t-sub-1">.t-sub-1</div>
                <div class="t-sub-2">.t-sub-2</div>
                <div class="t-sub-3">.t-sub-3</div>
                <div class="t-sub-4">.t-sub-4</div>
                <div class="t-sub-5">.t-sub-5</div>
                <div class="t-body-1">.t-body-1</div>
                <div class="t-body-2">.t-body-2</div>
                <div class="t-cap-1">.t-cap-1</div>
                <div class="t-cap-2">.t-cap-2</div>
                <div class="t-cap-3">.t-cap-3</div>
                <div class="my-3">
                    <div class="t-body-2 t-color-primary-50">.t-color-primary-50</div>
                    <div class="t-body-2 t-color-primary-100">.t-color-primary-100</div>
                    <div class="t-body-2 t-color-primary-200">.t-color-primary-200</div>
                    <div class="t-body-2 t-color-primary-500">.t-color-primary-500</div>
                    <div class="t-body-2 t-color-primary-600">.t-color-primary-600</div>
                    <div class="t-body-2 t-color-primary-700">.t-color-primary-700</div>
                </div>
                <div class="my-3">
                    <div class="t-body-2 t-color-50">.t-color-50</div>
                    <div class="t-body-2 t-color-100">.t-color-100</div>
                    <div class="t-body-2 t-color-200">.t-color-200</div>
                    <div class="t-body-2 t-color-300">.t-color-300</div>
                    <div class="t-body-2 t-color-400">.t-color-400</div>
                    <div class="t-body-2 t-color-500">.t-color-500</div>
                    <div class="t-body-2 t-color-600">.t-color-600</div>
                    <div class="t-body-2 t-color-700">.t-color-700</div>
                    <div class="t-body-2 t-color-800">.t-color-800</div>
                    <div class="t-body-2 t-color-900">.t-color-900</div>
                </div>
                <div class="my-3">
                    <div class="t-body-2 t-color-link-50">.t-color-link-50</div>
                    <div class="t-body-2 t-color-link-100">.t-color-link-100</div>
                    <div class="t-body-2 t-color-link-200">.t-color-link-200</div>
                    <div class="t-body-2 t-color-link-500">.t-color-link-500</div>
                    <div class="t-body-2 t-color-link-600">.t-color-link-600</div>
                    <div class="t-body-2 t-color-link-700">.t-color-link-700</div>
                </div>
                <div class="my-3">
                    <div class="t-body-2 t-color-success-50">.t-color-success-50</div>
                    <div class="t-body-2 t-color-success-100">.t-color-success-100</div>
                    <div class="t-body-2 t-color-success-200">.t-color-success-200</div>
                    <div class="t-body-2 t-color-success-500">.t-color-success-500</div>
                    <div class="t-body-2 t-color-success-600">.t-color-success-600</div>
                    <div class="t-body-2 t-color-success-700">.t-color-success-700</div>
                </div>
                <div class="my-3">
                    <div class="t-body-2 t-color-pending-50">.t-color-pending-50</div>
                    <div class="t-body-2 t-color-pending-100">.t-color-pending-100</div>
                    <div class="t-body-2 t-color-pending-200">.t-color-pending-200</div>
                    <div class="t-body-2 t-color-pending-500">.t-color-pending-500</div>
                    <div class="t-body-2 t-color-pending-600">.t-color-pending-600</div>
                    <div class="t-body-2 t-color-pending-700">.t-color-pending-700</div>
                </div>
                <div class="my-3">
                    <div class="t-body-2 t-color-error-100">.t-color-error-100</div>
                    <div class="t-body-2 t-color-error-200">.t-color-error-200</div>
                    <div class="t-body-2 t-color-error-300">.t-color-error-300</div>
                    <div class="t-body-2 t-color-error-500">.t-color-error-500</div>
                    <div class="t-body-2 t-color-error-600">.t-color-error-600</div>
                    <div class="t-body-2 t-color-error-700">.t-color-error-700</div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Demo Validate Form
                </h5>
                <span class="link-color">
                    (Config trong "public/assets/frontend/theme_5/js/config/form-validate.js" )
                </span>
            </div>
            <div class="card-body">
                <form action="" id="form-validate-demo">
                    <div class="input-group">
                        <div class="form-label">Tài khoản</div>
                        <input type="text" placeholder="Tên tài khoản" class="username">
                        <span class="text-error"></span>
                    </div>
                    <div class="input-group">
                        <div class="form-label">Email</div>
                        <input type="text" placeholder="Email" class="email">
                        <span class="text-error"></span>
                    </div>
                    <div class="input-group">
                        <div class="form-label">File</div>
                        <input type="file" placeholder="Chọn 1 file" class="files">
                        <span class="text-error"></span>
                    </div>
                    <div class="input-group">
                        <div class="form-label">Dịch vụ muốn mua</div>
                        <label class="input-checkbox w-100">
                            <input type="checkbox" name="select" class="service-select">
                            <span class="checkmark"></span>
                            <span class="text-label">Up đệ tử đẹp trai</span>
                        </label>

                        <label class="input-checkbox w-100">
                            <input type="checkbox" name="select" class="service-select">
                            <span class="checkmark"></span>
                            <span class="text-label">Up đệ tử đẹp gái</span>
                        </label>

                        <label class="input-checkbox w-100">
                            <input type="checkbox" name="select" class="service-select">
                            <span class="checkmark"></span>
                            <span class="text-label">Up đệ tử đẹp vừa vừa</span>
                        </label>
                        <span class="text-error"></span>
                    </div>
                    <div class="input-group">
                        <div class="form-label">Giới tính</div>
                        <label class="input-radio w-100">
                            <input type="radio" name="gender">
                            <span class="checkmark"></span>
                            <span class="text-label">Nam</span>
                        </label>
                        <label class="input-radio w-100">
                            <input type="radio" name="gender">
                            <span class="checkmark"></span>
                            <span class="text-label">Nữ</span>
                        </label>
                        <label class="input-radio w-100">
                            <input type="radio" name="gender">
                            <span class="checkmark"></span>
                            <span class="text-label">Khác</span>
                        </label>
                        <span class="text-error"></span>
                    </div>
                    <div class="input-group ">
                        <div class="form-label">Mật khẩu</div>
                        <div class="toggle-password">
                            <input type="password" placeholder="Mật khẩu" class="password">
                        </div>
                        <span class="text-error"></span>
                    </div>
                    <div class="input-group">
                        <div class="form-label">Xác nhận mật khẩu</div>
                        <input type="text" placeholder="Mật khẩu" class="confirm_password">
                        <span class="text-error"></span>
                    </div>

                    <div class="input-group">
                        <label class="input-checkbox w-100">
                            <input type="checkbox" name="select" class="confirm-rules">
                            <span class="checkmark"></span>
                            <span class="text-label">Bạn đã đọc và đồng ý với các điều khoản của chúng tôi ?</span>
                        </label>
                        <span class="text-error"></span>
                    </div>
                    <div class="group-btn">
                        <button type="submit" class="btn primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <input type="text" name="" id="" placeholder="placeholder">
        <div class="m-3"></div>
        <span class="input-group toggle-password">
            <input type="password" name="" id="" class="" placeholder="placeholder">
        </span>
        <div class="m-3"></div>
        <div class="js-quantity">
            <div class="js-quantity-minus"></div>
            <input type="text" class="js-quantity-input" value="1">
            <div class="js-quantity-add"></div>
        </div>
        <div class="m-3"></div>
        <div class="copy-input">
            <input type="text" name="" id="" placeholder="placeholder">
        </div>
        <div class="m-3"></div>

        <div class="copy-input toggle-password">
            <input type="text" name="" id="" placeholder="placeholder">
        </div>
        <div class="m-3"></div>

        <div class="text-error c-mt-4">Help message here.</div>
        <div class="m-3"></div>
        <input type="text" name="" id="" placeholder="disabled" disabled>
        <div class="m-3"></div>

        <input type="text" name="" id="" value="Value" placeholder="disabled" disabled>
        <div class="m-3"></div>

        <input type="text" name="" id="" value="Value" class="invalid" placeholder="placeholder">
        <div class="m-3"></div>
        <div class="position-relative">
            <input type="text" class="date-right" placeholder="placeholder">
        </div>
        <div class="m-3"></div>
        <div class="position-relative">
            <input type="text" class="date-left" placeholder="placeholder">
        </div>
        <div class="m-3"></div>
        <div class="position-relative">
            <input type="text" class="date-left date-right" placeholder="placeholder">
        </div>
        <div class="m-3"></div>
        <input type="text" class="vnd" placeholder="placeholder">
        <div class="m-3"></div>
        <textarea name="" id="" cols="9" rows="3" placeholder="placeholder"></textarea>
        <div class="m-3"></div>
        <textarea name="" id="" cols="9" rows="3" placeholder="Textarea disable" disabled></textarea>
        <hr>
        <button class="btn primary sm">Primary</button>
        <button class="btn primary">Primary</button>
        <button class="btn primary xl">Primary Primary</button>
        <button class="btn primary xl" disabled>Primary Primary</button>
        <button class="btn primary" disabled>Primary disabled</button>
        <button class="btn primary sm" disabled>Primary</button>
        <div class="m-4"></div>
        <button class="btn secondary sm">Secondary</button>
        <button class="btn secondary">Secondary</button>
        <button class="btn secondary xl">Secondary Secondary</button>
        <button class="btn secondary xl" disabled>Secondary disabled</button>
        <button class="btn secondary" disabled>Secondary disabled</button>
        <button class="btn secondary sm" disabled>Secondary disabled</button>
        <div class="m-4"></div>
        <div class="btn ghost sm">Ghost</div>
        <div class="btn ghost">Ghost</div>
        <div class="btn ghost xl">Ghost Ghost</div>
        <button class="btn ghost xl" disabled>Ghost disabled</button>
        <button class="btn ghost" disabled>Ghost disabled</button>
        <button class="btn ghost sm" disabled>Ghost disabled</button>
        <div class="m-4"></div>
        <button class="btn w-ghost sm">White ghost</button>
        <button class="btn w-ghost">White ghost</button>
        <button class="btn w-ghost xl">White ghost</button>
        <button class="btn w-ghost xl" disabled="">White ghost</button>
        <button class="btn w-ghost" disabled="">White ghost</button>
        <button class="btn w-ghost sm" disabled="">White ghost</button>
        <div class="my-4"></div>
        <div class="group-btn" style="--data-between: 12px">
            <button class="btn primary two-line">
                <span class="line-1 t-sub-1">ĐẶT HÀNG NGAY</span>
                <span class="line-2 t-body-2">Thanh toán 3.000.000đ</span>
            </button>
            <button class="btn primary two-line">
                <span class="line-1 t-sub-1">ĐẶT HÀNG NGAY</span>
                <span class="line-2 t-body-2">Thanh toán 3.000.000đ</span>
            </button>
        </div>
        <hr>
        <div class="navigation slider-next"></div>
        <div class="mt-3"></div>
        <div class="navigation slider-prev"></div>
        <hr>
        <ul class="breadcrumb-list">
            <li class="breadcrumb-item">
                <a href="" class="breadcrumb-link">Trang chủ</a>
            </li>
            <li class="breadcrumb-item">
                <a href="" class="breadcrumb-link">Mua thẻ</a>
            </li>
            <li class="breadcrumb-item">
                <a href="" class="breadcrumb-link">Mua thẻ garena</a>
            </li>
        </ul>
        <hr>
        <a href="" class="link">Text Default</a>
        <br>
        <a href="" class="link disabled">Link disable</a>
        <br>
        <a href="" class="link blue">Text Default</a>
        <br>
        <a href="" class="link arr-right">Text Default</a>
        <br>
        <a href="" class="link arr-left">Text Default</a>
        <br>
        <a href="" class="link blue arr-right">Text Default</a>
        <br>
        <a href="" class="link blue arr-left">Text Default</a>
        <br>
        <a href="" class="link arr-right disabled">Link disable</a>
        <br>
        <a href="" class="link arr-left disabled">Link disable</a>
        <br>
        <span class="see-more" data-content="Xem thêm"></span>
        <hr>

        <div class="tag sz-s">Tag content</div>
        <div class="tag">Tag content</div>

        <hr>
        <div class="my-4">
            <a class="tab">Tabs</a>
            <a class="tab active">Tabs</a>
            <a class="tab notify" data-notity="4">Tabs</a>
            <a class="tab info">Tabs</a>
            <a class="tab notify active info" data-notity="4">Tabs</a>
        </div>
        <div class="my-4">
            <!-- Tab Demo -->
            <ul class="nav nav-tabs size-auto w-100" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="tab active notify" data-notity="1" data-toggle="tab" href="#tab-1" role="tab" aria-selected="true">Tab1</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="tab notify" data-notity="2" data-toggle="tab" href="#tab-2" role="tab" aria-selected="false">Tab2</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="tab notify" data-notity="3" data-toggle="tab" href="#tab-3" role="tab" aria-selected="false">Tab3</a>
                </li>
            </ul>
            <div class="tab-content mt-4">
                <div class="tab-pane fade show active" id="tab-1" role="tabpanel">tab 1</div>
                <div class="tab-pane fade" id="tab-2" role="tabpanel">tab 2</div>
                <div class="tab-pane fade" id="tab-3" role="tabpanel">tab 3</div>
            </div>
        </div>

        <hr>
        <div class="my-4">
            <div class="tab-round">Tabs Round</div>
            <div class="tab-round active">Tabs Round</div>
        </div>

        <hr>
        <a href="" class="selection">Selection button</a>
        <a href="" class="selection active">Selection button</a>
        <a href="" class="selection active dropdown">Selection button</a>
        <div class="m-4"></div>
        <a href="" class="selection md">Selection button</a>
        <a href="" class="selection active md">Selection button</a>
        <a href="" class="selection active dropdown md">Selection button</a>

        <div class="m-4"></div>
        <a href="" class="selection lg">Selection button</a>
        <a href="" class="selection active lg">Selection button</a>
        <a href="" class="selection active dropdown lg">Selection button</a>

        <div class="m-4"></div>
        <a href="" class="selection xl">Selection button</a>
        <a href="" class="selection active xl">Selection button</a>
        <a href="" class="selection active dropdown xl">Selection button</a>
        <hr>
        <div class="my-4">
            <select name="" id="">
                <option value="">--- Chọn giá trị ---</option>
                <option value="">Is Text Demo</option>
                <option value="">Is Text Demo</option>
                <option value="">Is Text Demo</option>
            </select>
            <select name="" id="" class="c-mt-24">
                <option value="" class="12312">--- Chọn giá trị ---</option>
                <option value="">Is Text Demo</option>
                <option value="">Is Text Demo</option>
                <option value="">Is Text Demo</option>
            </select>
        </div>
        <hr>
        <div class="my-4">
            <button type="button" class="btn primary" data-toggle="modal" data-target="#modal-demo">
                Show modal
            </button>
        </div>

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
                        <div class="c-pt-50">
                            <div class="slider-input" data-min="20" data-max="50" data-option="10,100" data-start="50,60"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a class="btn ghost">Về trang chủ</a>
                        <a class="btn primary">Xem kết quả</a>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <label for="male" class="input-radio">
            <input type="radio" name="gender" id="male">
            <span class="checkmark"></span>
            <span class="text-label">Label</span>
        </label>
        <div class="m-4"></div>
        <label for="female" class="input-radio">
            <input type="radio" name="gender" id="female">
            <span class="checkmark"></span>
            <span class="text-label">Label</span>
        </label>
        <div class="m-4"></div>
        <label for="radio-disabled" class="input-radio">
            <input type="radio" name="asd" id="radio-disabled" disabled checked>
            <span class="checkmark"></span>
            <span class="text-label">Label</span>
        </label>
        <hr>
        <label for="checkbox1" class="input-checkbox">
            <input type="checkbox" name="select" id="checkbox1">
            <span class="checkmark"></span>
            <span class="text-label">Label</span>
        </label>
        <div class="m-4"></div>
        <label for="checkbox2" class="input-checkbox v2">
            <input type="checkbox" name="select" id="checkbox2">
            <span class="checkmark"></span>
            <span class="text-label">Label</span>
        </label>
        <div class="m-4"></div>
        <label for="checkbox3" class="input-checkbox v2">
            <input type="checkbox" name="select" id="checkbox3" disabled checked>
            <span class="checkmark"></span>
            <span class="text-label">Label</span>
        </label>
        <div class="m-4"></div>
        <label for="checkbox4" class="input-checkbox">
            <input type="checkbox" name="select" id="checkbox4" disabled checked>
            <span class="checkmark"></span>
            <span class="text-label">Label</span>
        </label>
        <hr>
        <div class="w-50">
            <input type="search" placeholder="Tìm kiếm">
            <input type="search" placeholder="Tìm kiếm" class="search mt-4">
        </div>
        <div class="my-4">
            <label class="input-switch sz-s">
                <input type="checkbox" name="select" checked>
                <span class="slider"></span>
            </label>
            <label class="input-switch">
                <input type="checkbox" name="select" checked>
                <span class="slider"></span>
            </label>
        </div>
        <form action="" class="form-search mt-4 position-relative">
            <input type="search" placeholder="Tìm kiếm" class="search has-submit">
            <button type="submit"></button>
        </form>

        <hr>
        <div class="c-pt-50" id="demo-fix">
            <div class="my-4">
                <div class="slider-input" data-min="20" data-max="50" data-option="10,100" data-start="50,60"></div>        </div>

        </div>
        <hr>
        <div class="default-paginate">
            <ul class="pagination pagination-custom">
                <li class="page-item disabled">
                    <a href="" class="page-link"></a>
                </li>
                <li class="page-item">
                    <a href="" class="page-link"></a>
                </li>
                <li class="page-item active">
                    <span class="page-link">1</span>
                </li>
                <li class="page-item">
                    <a class="page-link" href="">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="">3</a>
                </li>
                <li class="page-item disabled hidden-xs">
                    <span class="page-link">...</span>
                </li>
                <li class="page-item hidden-xs">
                    <a class="page-link" href="">14</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="" rel="next"></a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="" rel="next"></a>
                </li>
            </ul>
        </div>
        <hr>
        <div class="scale-thumb">
            <img src="/assets/frontend/theme_5/image/trong/image 4.png" alt="" class="service-thumb-image">
        </div>
        <hr>
        <h5>Đây là phần này hiện thị trên mobile</h5>
        <button class="btn primary open-sheet" data-target="#sheet-demo">Open Sheet</button>


        <!-- handle bottom sheet -->
        <div class="bottom-sheet" id="sheet-demo" aria-hidden="true" data-height="80">
            <div class="layer"></div>
            <div class="content-bottom-sheet bar-slide" >
                <div class="sheet-header">
                    <h2 class="text-title center">
                        Bộ lọc
                    </h2>
                    <label for="check-bottom-sheet" class="close"></label>
                </div>
                <div class="sheet-body">
                    <!-- body -->
                    <div class="input-group">
                        <span class="form-label">
                            Mã số
                        </span>
                        <input type="text" placeholder="Nhập mã số nick">
                    </div>

                    <div class="input-group">
                        <span class="form-label">
                            Trạng thái
                        </span>
                        <select name="" id="">
                            <option value="">Chưa bán</option>
                            <option value="">Đã bán</option>
                        </select>
                    </div>

                    <div class="input-group">
                        <span class="form-label">
                            Rank
                        </span>
                        <select name="" id="">
                            <option value="">Tinh anh</option>
                            <option value="">Cao thủ</option>
                        </select>
                    </div>

                    <div class="input-group">
                        <span class="form-label">
                            Giá tiền
                        </span>
                    </div>
                    <div class="c-px-16 c-mt-45">
                        <div class="slider-input" data-min="20" data-max="50" data-option="10,100" data-start="50,60"></div>
                    </div>
                </div>
                <div class="sheet-footer">
                    <button class="btn ghost">Xoá bộ lọc</button>
                    <button class="btn primary">Xem kết quả</button>
                </div>
            </div>
        </div>
        <!-- end bottom sheet -->
        <!-- Demo Step Mobile -->
        <hr>
        <button class="btn secondary js-step" data-target="#step2">Go to step 2</button>
        <div class="step" id="step2">
            <div class="head-mobile">
                <a href="#" class="link-back close-step"></a>

                <h1 class="head-title text-title">Trang 2</h1>

                <a href="#" class="notify" data-notify="2"></a>
            </div>
            <div class="body-mobile">
                <button class="btn secondary js-step" data-target="#step3">Go to step 3</button>
                <br><button class="btn secondary js-step" data-target="#step3">Go to step 3</button>
                <br><button class="btn secondary js-step" data-target="#step3">Go to step 3</button>
                <br><button class="btn secondary js-step" data-target="#step3">Go to step 3</button>
                <br><button class="btn secondary js-step" data-target="#step3">Go to step 3</button>
                <br><button class="btn secondary js-step" data-target="#step3">Go to step 3</button>
                <br><button class="btn secondary js-step" data-target="#step3">Go to step 3</button>
                <br><button class="btn secondary js-step" data-target="#step3">Go to step 3</button>
                <br><button class="btn secondary js-step" data-target="#step3">Go to step 3</button>
                <br><button class="btn secondary js-step" data-target="#step3">Go to step 3</button>
                <br><button class="btn secondary js-step" data-target="#step3">Go to step 3</button>
                <br><button class="btn secondary js-step" data-target="#step3">Go to step 3</button>
                <br><button class="btn secondary js-step" data-target="#step3">Go to step 3</button>
                <br><button class="btn secondary js-step" data-target="#step3">Go to step 3</button>
                <br><button class="btn secondary js-step" data-target="#step3">Go to step 3</button>
                <br><button class="btn secondary js-step" data-target="#step3">Go to step 3</button>
                <br><button class="btn secondary js-step" data-target="#step3">Go to step 3</button>
                <br><button class="btn secondary js-step" data-target="#step3">Go to step 3</button>
                <br><button class="btn secondary js-step" data-target="#step3">Go to step 3</button>
                <br><button class="btn secondary js-step" data-target="#step3">Go to step 3</button>
                <br><button class="btn secondary js-step" data-target="#step3">Go to step 3</button>
                <br><button class="btn secondary js-step" data-target="#step3">Go to step 3</button>
                <br><button class="btn secondary js-step" data-target="#step3">Go to step 3</button>
                <br><button class="btn secondary js-step" data-target="#step3">Go to step 3</button>
                <br><button class="btn secondary js-step" data-target="#step3">Go to step 3</button>
                <br><button class="btn secondary js-step" data-target="#step3">Go to step 3</button>
                <br><button class="btn secondary js-step" data-target="#step3">Go to step 3</button>
                <br>
            </div>

            <div class="footer-mobile">

            </div>
        </div>
        <div class="step" id="step3">
            <div class="head-mobile">
                <a href="#" class="link-back close-step"></a>

                <div class="head-title text-title">Trang 3</div>

                <a href="#" class="notify" data-notify="2"></a>
            </div>
            <div class="body-mobile">
            </div>
        </div>
        <!-- end -->
    </div>
@endsection
@section('scripts')
@endsection
