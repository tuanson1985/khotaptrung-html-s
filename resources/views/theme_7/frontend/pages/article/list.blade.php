@extends('frontend.layouts.master')
@section('scripts')
    <script src="/assets/frontend/{{env('THEME_VERSION')}}/js/article/article.js"></script>
    <link rel="stylesheet" href="/assets/frontend/{{env('THEME_VERSION')}}/lib/swiper/swiper.min.css">
@endsection
@section('content')
    <div class="container-fix container">
        <ul class="breadcrumb-list">
            <li class="breadcrumb-item">
                <a href="/" class="breadcrumb-link">Trang chủ</a>
            </li>
            <li class="breadcrumb-item">
                <a href="javascript:void(0)" class="breadcrumb-link">Tin tức</a>
            </li>
        </ul>
        <div class="head-mobile">
            <a href="/" class="link-back"></a>

            <h1 class="head-title text-title">Tin tức</h1>

            <a href="/" class="home"></a>
        </div>
        @include('theme_5.frontend.widget.__slide__news')
        <div class="card--mobile__title c-pt-24">
            <h4>Danh mục tin tức</h4>
        </div>
        <div class="row flex-column-reverse " id="card--body__news">
            <div class=" px-0 mt-lg-0" id="list-article" style="max-width: 100%">
                <div class=" --custom p-3" id="new-article-update">
                    <div>
                        <ul class="nav nav-tabs article-list size-auto d-lg-table w-100" role="tablist">
                            <li class="nav-item"  aria-selected="true">
                                <a class="tab active" href="#tab-1" style="display: flex" data-toggle="tab" role="tab">
                                    <span class="icon-custom c-pl-lg-22"
                                          style="--path-icon:url('/assets/frontend/{{env('THEME_VERSION')}}/image/duong/menu-article.svg')">Tất cả tin tức</span>
                                </a>
                            </li>
                            <li class="nav-item"  aria-selected="false">
                                <a class="tab" href="#tab-2" style="display: flex" data-toggle="tab" role="tab">
                                    <span class="icon-custom c-pl-lg-22"
                                          style="--path-icon:url('/assets/frontend/{{env('THEME_VERSION')}}/image/duong/menu-article.svg')">Tin tức mới</span>
                                </a>
                            </li>
                            <li class="nav-item"  aria-selected="false">
                                <a class="tab " href="#tab-3" style="display: flex" data-toggle="tab" role="tab">
                                    <span class="icon-custom c-pl-lg-22"
                                          style="--path-icon:url('/assets/frontend/{{env('THEME_VERSION')}}/image/duong/menu-article.svg')">Hướng dẫn</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content-title mt-4">
                        <div class="card--body tab-pane fade show active" id="tab-1">
                            <div class="item-article c-mt-16">
                                <a href="/tin-tuc/baiviet">
                                    <div class="card">
                                        <div class="card-body c-p-16 c-p-lg-8">
                                            <div class="article-thumb c-mb-lg-0">
                                                <img
                                                    src="/assets/frontend/{{env('THEME_VERSION')}}/image/duong/leon.png"
                                                    class="article-thumb-image" alt="article-thumbnail">
                                            </div>
                                            <div class="article-body">
                                                <div
                                                    class="article-title text-limit limit-2 limit-lg-3 fz-lg-13 lh-lg-20 c-ml-12">
                                                    Riot cho ra mắt phần mới của nhóm trang phục Vệ Binh Tinh Tú, cộng
                                                    đồng
                                                    vẫn chê ‘không bằng Tốc Chiến’
                                                </div>
                                                <div class="article--description d-none d-lg-block c-pt-16 c-ml-12 ">
                                                    Mỗi người một ý, đối với mình việc để cây xanh trong góc PC khá là
                                                    thư giãn,
                                                    thoải mái và thả lỏng tâm trạng hiệu quả Góc PC là...
                                                </div>
                                                <div class="article-info c-mt-16 c-mt-lg-6 c-ml-12">
                                                    <div class="datetime">21/01/2022</div>
                                                    <div class="author c-ml-4 bread-word text-limit limit-1">An Nguyen
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="item-article c-mt-16">
                                <a href="/tin-tuc/baiviet">
                                    <div class="card">
                                        <div class="card-body c-p-16 c-p-lg-8">
                                            <div class="article-thumb c-mb-lg-0">
                                                <img
                                                    src="/assets/frontend/{{env('THEME_VERSION')}}/image/duong/leon.png"
                                                    class="article-thumb-image" alt="article-thumbnail">
                                            </div>
                                            <div class="article-body">
                                                <div
                                                    class="article-title text-limit limit-2 limit-lg-3 fz-lg-13 lh-lg-20 c-ml-12">
                                                    Riot cho ra mắt phần mới của nhóm trang phục Vệ Binh Tinh Tú, cộng
                                                    đồng
                                                    vẫn chê ‘không bằng Tốc Chiến’
                                                </div>
                                                <div class="article--description d-none d-lg-block c-pt-16 c-ml-12 ">
                                                    Mỗi người một ý, đối với mình việc để cây xanh trong góc PC khá là
                                                    thư giãn,
                                                    thoải mái và thả lỏng tâm trạng hiệu quả Góc PC là...
                                                </div>
                                                <div class="article-info c-mt-16 c-mt-lg-6 c-ml-12">
                                                    <div class="datetime">21/01/2022</div>
                                                    <div class="author c-ml-4 bread-word text-limit limit-1">An Nguyen
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="item-article c-mt-16">
                                <a href="/tin-tuc/baiviet">
                                    <div class="card">
                                        <div class="card-body c-p-16 c-p-lg-8">
                                            <div class="article-thumb c-mb-lg-0">
                                                <img
                                                    src="/assets/frontend/{{env('THEME_VERSION')}}/image/duong/leon.png"
                                                    class="article-thumb-image" alt="article-thumbnail">
                                            </div>
                                            <div class="article-body">
                                                <div
                                                    class="article-title text-limit limit-2 limit-lg-3 fz-lg-13 lh-lg-20 c-ml-12">
                                                    Riot cho ra mắt phần mới của nhóm trang phục Vệ Binh Tinh Tú, cộng
                                                    đồng
                                                    vẫn chê ‘không bằng Tốc Chiến’
                                                </div>
                                                <div class="article--description d-none d-lg-block c-pt-16 c-ml-12 ">
                                                    Mỗi người một ý, đối với mình việc để cây xanh trong góc PC khá là
                                                    thư giãn,
                                                    thoải mái và thả lỏng tâm trạng hiệu quả Góc PC là...
                                                </div>
                                                <div class="article-info c-mt-16 c-mt-lg-6 c-ml-12">
                                                    <div class="datetime">21/01/2022</div>
                                                    <div class="author c-ml-4 bread-word text-limit limit-1">An Nguyen
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="item-article c-mt-16">
                                <a href="/tin-tuc/baiviet">
                                    <div class="card">
                                        <div class="card-body c-p-16 c-p-lg-8">
                                            <div class="article-thumb c-mb-lg-0">
                                                <img
                                                    src="/assets/frontend/{{env('THEME_VERSION')}}/image/duong/leon.png"
                                                    class="article-thumb-image" alt="article-thumbnail">
                                            </div>
                                            <div class="article-body">
                                                <div
                                                    class="article-title text-limit limit-2 limit-lg-3 fz-lg-13 lh-lg-20 c-ml-12">
                                                    Riot cho ra mắt phần mới của nhóm trang phục Vệ Binh Tinh Tú, cộng
                                                    đồng
                                                    vẫn chê ‘không bằng Tốc Chiến’
                                                </div>
                                                <div class="article--description d-none d-lg-block c-pt-16 c-ml-12 ">
                                                    Mỗi người một ý, đối với mình việc để cây xanh trong góc PC khá là
                                                    thư giãn,
                                                    thoải mái và thả lỏng tâm trạng hiệu quả Góc PC là...
                                                </div>
                                                <div class="article-info c-mt-16 c-mt-lg-6 c-ml-12">
                                                    <div class="datetime">21/01/2022</div>
                                                    <div class="author c-ml-4 bread-word text-limit limit-1">An Nguyen
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="item-article c-mt-16">
                                <a href="/tin-tuc/baiviet">
                                    <div class="card">
                                        <div class="card-body c-p-16 c-p-lg-8">
                                            <div class="article-thumb c-mb-lg-0">
                                                <img
                                                    src="/assets/frontend/{{env('THEME_VERSION')}}/image/duong/leon.png"
                                                    class="article-thumb-image" alt="article-thumbnail">
                                            </div>
                                            <div class="article-body">
                                                <div
                                                    class="article-title text-limit limit-2 limit-lg-3 fz-lg-13 lh-lg-20 c-ml-12">
                                                    Riot cho ra mắt phần mới của nhóm trang phục Vệ Binh Tinh Tú, cộng
                                                    đồng
                                                    vẫn chê ‘không bằng Tốc Chiến’
                                                </div>
                                                <div class="article--description d-none d-lg-block c-pt-16 c-ml-12 ">
                                                    Mỗi người một ý, đối với mình việc để cây xanh trong góc PC khá là
                                                    thư giãn,
                                                    thoải mái và thả lỏng tâm trạng hiệu quả Góc PC là...
                                                </div>
                                                <div class="article-info c-mt-16 c-mt-lg-6 c-ml-12">
                                                    <div class="datetime">21/01/2022</div>
                                                    <div class="author c-ml-4 bread-word text-limit limit-1">An Nguyen
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-2" role="tabpanel">tab 2</div>
                        <div class="tab-pane fade" id="tab-3" role="tabpanel">tab 3</div>
                    </div>
                    <div class="default-paginate c-pt-32">
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
                </div>
            </div>
        </div>
    </div>
@endsection



