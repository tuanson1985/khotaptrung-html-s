@extends('theme_5.frontend.layouts.master')
@section('content')
    <link rel="stylesheet" href="/assets/frontend/theme_5/lib/nouislider/nouislider.css">
    <div class="container c-container c-py-50 c-mt-50">
        <div class="btn primary" data-toggle="modal" data-target="#modal-demo-07">Modal</div>
    </div>
    <div class="modal fade" id="modal-demo-07" aria-modal="true">
        <div class="modal-dialog modal-dialog-centered modal-custom">
            <div class="modal-content c-p-24">
                <div class="modal-header">
                    <h2 class="modal-title center">Thể lệ</h2>
                    <button type="button" class="close" data-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="slider-input" data-min="20" data-max="50" data-option="10,100" data-start="50,60"></div>
                </div>
                <div class="modal-footer">
                    <button class="btn ghost">Xoá bộ lọc</button>
                    <button class="btn primary">Xem kết quả</button>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
@endsection
