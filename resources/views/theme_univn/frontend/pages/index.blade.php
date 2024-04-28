@extends('frontend.layouts.master')
@section('content')

    <div id="content" class="site-content">
        <div id="primary" class="content-sidebar-wrap">
            <main id="main" class="site-main" role="main">
                <h1 class="d-none">UNIVN &#8211; Công ty thiết kế website chuyên nghiệp tại Hà Nội</h1>
                <section class="uni-section" id="home-slides">
                    <div class="wtb-slider">
                        <div id="carouselMainSlide" class="carousel slide carousel-fade" data-ride="" data-interval="5000" data-pause="">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselMainSlide" data-slide-to="0" class=" active"></li>
                                <li data-target="#carouselMainSlide" data-slide-to="1" class=""></li>
                                <li data-target="#carouselMainSlide" data-slide-to="2" class=""></li>
                                <li data-target="#carouselMainSlide" data-slide-to="3" class=""></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item  active">
                                    <img width="1920" height="600" src="https://univn.vn/wp-content/uploads/2021/04/6.jpg" class="attachment-full size-full" alt="" decoding="async" loading="false" srcset="https://univn.vn/wp-content/uploads/2021/04/6.jpg 1920w, https://univn.vn/wp-content/uploads/2021/04/6-300x94.jpg 300w, https://univn.vn/wp-content/uploads/2021/04/6-1024x320.jpg 1024w, https://univn.vn/wp-content/uploads/2021/04/6-768x240.jpg 768w, https://univn.vn/wp-content/uploads/2021/04/6-1536x480.jpg 1536w, https://univn.vn/wp-content/uploads/2021/04/6-370x116.jpg 370w" sizes="(max-width: 1920px) 100vw, 1920px" />
                                </div>
                                <div class="carousel-item ">
                                    <a href="https://univn.vn/dich-vu-thiet-ke-website/">
                                        <img width="1920" height="600" src="https://univn.vn/wp-content/uploads/2020/04/slider_uni_2.jpg" class="attachment-full size-full" alt="" decoding="async" loading="lazy" srcset="https://univn.vn/wp-content/uploads/2020/04/slider_uni_2.jpg 1920w, https://univn.vn/wp-content/uploads/2020/04/slider_uni_2-300x94.jpg 300w, https://univn.vn/wp-content/uploads/2020/04/slider_uni_2-1024x320.jpg 1024w, https://univn.vn/wp-content/uploads/2020/04/slider_uni_2-768x240.jpg 768w, https://univn.vn/wp-content/uploads/2020/04/slider_uni_2-1536x480.jpg 1536w" sizes="(max-width: 1920px) 100vw, 1920px" />
                                    </a>
                                </div>
                                <div class="carousel-item ">
                                    <a href="https://univn.vn/dich-vu-quang-cao/">
                                        <img width="1920" height="600" src="https://univn.vn/wp-content/uploads/2020/06/digital-marketting.jpg" class="attachment-full size-full" alt="" decoding="async" loading="lazy" srcset="https://univn.vn/wp-content/uploads/2020/06/digital-marketting.jpg 1920w, https://univn.vn/wp-content/uploads/2020/06/digital-marketting-300x94.jpg 300w, https://univn.vn/wp-content/uploads/2020/06/digital-marketting-1024x320.jpg 1024w, https://univn.vn/wp-content/uploads/2020/06/digital-marketting-768x240.jpg 768w, https://univn.vn/wp-content/uploads/2020/06/digital-marketting-1536x480.jpg 1536w, https://univn.vn/wp-content/uploads/2020/06/digital-marketting-370x116.jpg 370w" sizes="(max-width: 1920px) 100vw, 1920px" />
                                    </a>
                                </div>
                                <div class="carousel-item ">
                                    <a href="https://univn.vn/viet-noi-dung-website/">
                                        <img width="1920" height="600" src="https://univn.vn/wp-content/uploads/2020/06/content-marketing.jpg" class="attachment-full size-full" alt="" decoding="async" loading="lazy" srcset="https://univn.vn/wp-content/uploads/2020/06/content-marketing.jpg 1920w, https://univn.vn/wp-content/uploads/2020/06/content-marketing-300x94.jpg 300w, https://univn.vn/wp-content/uploads/2020/06/content-marketing-1024x320.jpg 1024w, https://univn.vn/wp-content/uploads/2020/06/content-marketing-768x240.jpg 768w, https://univn.vn/wp-content/uploads/2020/06/content-marketing-1536x480.jpg 1536w, https://univn.vn/wp-content/uploads/2020/06/content-marketing-370x116.jpg 370w" sizes="(max-width: 1920px) 100vw, 1920px" />
                                    </a>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselMainSlide" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselMainSlide" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </section>
                <section class="uni-section" id="home-services">
                    <div class="container">
                        <div class="uni-heading">
                            <h2>Dịch vụ của chúng tôi </h2>
                            <p>Dịch vụ nổi bật chúng tôi cung cấp</p>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-4 item-service">
                                <div class="item-service__wrap">
                                    <div class="img">
                                        <img width="96" height="96" alt="ic1" src="https://univn.vn/wp-content/themes/unicreation/lib/images/home/icon1.svg" loading="lazy">
                                    </div>
                                    <h3>Thiết kế Website</h3>
                                    <p>Dịch vụ thiết kế website chuẩn SEO giá rẻ, tối ưu trả nghiệm người dùng và thân thiện với mọi trình duyệt</p>
                                    <a href="https://univn.vn/dich-vu-thiet-ke-website/" title="Xem chi tiết">
                                        <span>Xem chi tiết</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 item-service">
                                <div class="item-service__wrap">
                                    <div class="img">
                                        <img width="96" height="96" alt="ic2" src="https://univn.vn/wp-content/themes/unicreation/lib/images/home/icon2.svg" loading="lazy">
                                    </div>
                                    <h3>Hosting Tên Miền</h3>
                                    <p>Đăng ký tên miền, mua Domain đẹp nhanh chóng với giá cực kỳ ưu đãi, kích hoạt chỉ 5 phút. Mua Hosting tốc độ cao, an toàn phù hợp với cá nhân và doanh nghiệp</p>
                                    <a href="https://univn.vn/dich-vu-ten-mien/" title="Xem chi tiết">
                                        <span>Xem chi tiết</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 item-service">
                                <div class="item-service__wrap">
                                    <div class="img">
                                        <img width="96" height="96" alt="ic3" src="https://univn.vn/wp-content/themes/unicreation/lib/images/home/icon3.svg" loading="lazy">
                                    </div>
                                    <h3>Chiến dịch quảng cáo</h3>
                                    <p>Lựa chọn từ khóa phù hợp, nhắm đúng khách hàng mục tiêu, gia tăng doanh số bán hàng với chi phí quảng cáo thấp nhất</p>
                                    <a href="https://univn.vn/dich-vu-quang-cao/" title="Xem chi tiết">
                                        <span>Xem chi tiết</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 item-service">
                                <div class="item-service__wrap">
                                    <div class="img">
                                        <img width="96" height="96" alt="ic4" src="https://univn.vn/wp-content/themes/unicreation/lib/images/home/icon4.svg" loading="lazy">
                                    </div>
                                    <h3>Bộ nhận diện thương hiệu</h3>
                                    <p>Tư vấn khách hàng lựa chọn được Bộ nhận diện thương hiệu chuyên nghiệp nhất cho doanh nghiệp.</p>
                                    <a href="https://univn.vn/nhan-dien-thuong-hieu/" title="Xem chi tiết">
                                        <span>Xem chi tiết</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 item-service">
                                <div class="item-service__wrap">
                                    <div class="img">
                                        <img width="96" height="96" alt="ic5" src="https://univn.vn/wp-content/themes/unicreation/lib/images/home/icon5.svg" loading="lazy">
                                    </div>
                                    <h3>Viết nội dung website</h3>
                                    <p>Xây dựng nội dung phù hợp với từng sản phẩm, dịch vụ của quý khách. Đáp ứng chuẩn SEO mang lại hiệu quả cao nhất</p>
                                    <a href="https://univn.vn/viet-noi-dung-website/" title="Xem chi tiết">
                                        <span>Xem chi tiết</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 item-service">
                                <div class="item-service__wrap">
                                    <div class="img">
                                        <img width="96" height="96" alt="ic6" src="https://univn.vn/wp-content/themes/unicreation/lib/images/home/icon6.svg" loading="lazy">
                                    </div>
                                    <h3>Email tên miền</h3>
                                    <p>Dịch vụ Email tên miền mang đến một giải pháp toàn diện: Email theo Tên miền riêng, Tốc độ nhanh, Bảo mật cao</p>
                                    <a href="https://univn.vn/dich-vu-email-doanh-nghiep/" title="Xem chi tiết">
                                        <span>Xem chi tiết</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="uni-section" id="home-feature">
                    <img width="772" height="684" alt="surface" class="surface d-none d-lg-block" src="https://univn.vn/wp-content/themes/unicreation/lib/images/home/surface.png" loading="lazy">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 pr-lg-5">
                                <div class="uni-heading text-left">
                                    <h2>Tính năng tiêu biểu </h2>
                                        <p>Tính năng Chất lượng của chúng tôi mà khách hàng luôn thích sử dụng trên các sản phẩm của họ</p>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="item-feature d-flex">
                                            <div class="item-feature__img">
                                                <img width="24" height="24" alt="icon-check" src="https://univn.vn/wp-content/themes/unicreation/lib/images/home/icon-check.svg" loading="lazy">
                                            </div>
                                            <div class="item-feature__box">
                                                <h3>Website dễ dàng sử dụng</h3>
                                                <p>Thuận tiện cho cả người quản trị website và khách sử dụng.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="item-feature d-flex">
                                            <div class="item-feature__img">
                                                <img width="24" height="24" alt="icon-check" src="https://univn.vn/wp-content/themes/unicreation/lib/images/home/icon-check.svg" loading="lazy">
                                            </div>
                                            <div class="item-feature__box">
                                                <h3>Website chuẩn SEO</h3>
                                                <p>Website được xây dựng tối ưu SEO, hỗ trợ marketing online và giúp khách hàng dễ dàng tìm thấy bạn.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="item-feature d-flex">
                                            <div class="item-feature__img">
                                                <img width="24" height="24" alt="icon-check" src="https://univn.vn/wp-content/themes/unicreation/lib/images/home/icon-check.svg" loading="lazy">
                                            </div>
                                            <div class="item-feature__box">
                                                <h3>Cung cấp SSL miễn phí</h3>
                                                <p>Nâng cấp bảo mật SSL giúp website lợi thế trên công cụ tìm kiếm và nâng cao sự tin tưởng của khách hàng.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="item-feature d-flex">
                                            <div class="item-feature__img">
                                                <img width="24" height="24" alt="icon-check" src="https://univn.vn/wp-content/themes/unicreation/lib/images/home/icon-check.svg" loading="lazy">
                                            </div>
                                            <div class="item-feature__box">
                                                <h3>Website tốc độ cao</h3>
                                                <p>Chúng tôi tôn trọng ý kiến khách hàng của chúng tôi và thỏa thuận với họ với khung lưới hoàn hảo</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="item-feature d-flex">
                                            <div class="item-feature__img">
                                                <img width="24" height="24" alt="icon-check" src="https://univn.vn/wp-content/themes/unicreation/lib/images/home/icon-check.svg" loading="lazy">
                                            </div>
                                            <div class="item-feature__box">
                                                <h3>Tính năng responsive</h3>
                                                <p>Giao diện website tự tuỳ biến để hiển thị hoàn hảo nhất trên desktop, smartphone, tablet...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="item-feature d-flex">
                                            <div class="item-feature__img">
                                                <img width="24" height="24" alt="icon-check" src="https://univn.vn/wp-content/themes/unicreation/lib/images/home/icon-check.svg" loading="lazy">
                                            </div>
                                            <div class="item-feature__box">
                                                <h3>Tối ưu hóa Google</h3>
                                                <p>Cam kết điểm Google Speed PC từ 70 điểm trở lên.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="uni-section" id="home-package">
                    <div class="container">
                        <div class="uni-heading">
                            <h2>BẢNG GIÁ WEBSITE TRỌN GÓI </h2>
                            <p>Công nghệ web hàng đầu – Tiết kiệm Chi Phí – Bàn giao web nhanh chóng</p>
                        </div>
                        <div class="row no-gutters list-package">
                            <div class="col-md-3">
                                <div class="feature-table">
                                    <div class="feature-table__head">Chức năng</div>
                                    <div class="feature-table__price"></div>
                                    <div class="feature-table__body">
                                        <ul>
                                            <li>Giao diện website</li>
                                            <li>Thời gian bàn giao</li>
                                            <li>Tên miền</li>
                                            <li>Dung lượng lưu trữ</li>
                                            <li>Băng thông</li>
                                            <li>Bảo mật SSL</li>
                                            <li>Tối ưu SEO</li>
                                            <li>Tương thích thiết bị di động</li>
                                            <li>Thiết kế banner</li>
                                            <li>Ngôn ngữ</li>
                                            <li>Hỗ trợ bài viết</li>
                                            <li>Hỗ trợ tùy chỉnh</li>
                                            <li>Email doanh nghiệp</li>
                                            <li>Bộ nhận diện thương hiệu</li>
                                            <li>Bàn giao code</li>
                                            <li>Tư vấn marketing</li>
                                            <li>Dịch vụ quảng cáo</li>
                                            <li>Bảo hành web trọn đời</li>
                                            <li>Thông báo Bộ công thương</li>
                                        </ul>
                                    </div>
                                    <div class="feature-table__footer"> Đăng ký</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="pricing-table pricing-table__first">
                                    <div class="pricing-table__head">GÓI STARTUP</div>
                                    <div class="pricing-table__price">2.500.000 <br>
                                        <span>vnđ</span>
                                    </div>
                                    <div class="pricing-table__body">
                                        <ul>
                                            <li>Giao diện có sẵn <a target="_blank" href="https://univn.vn/goi-startup/">Xem ngay</a>
                                            </li>
                                            <li>1 - 2 ngày</li>
                                            <li>.com / .net</li>
                                            <li>1 Gb</li>
                                            <li>Không giới hạn</li>
                                            <li>
                                                <img alt="icon-tick" width="14" height="15" src="https://univn.vn/wp-content/themes/unicreation/lib/images/home/tick.png">
                                            </li>
                                            <li>Chuẩn SEO 100%</li>
                                            <li>
                                                <img alt="icon-tick" width="14" height="15" src="https://univn.vn/wp-content/themes/unicreation/lib/images/home/tick.png">
                                            </li>
                                            <li>1 Banner</li>
                                            <li>Google dịch</li>
                                            <li>10 bài copy</li>
                                            <li>Đổi màu</li>
                                            <li>Giảm 5%</li>
                                            <li>Giảm 5%</li>
                                            <li>
                                                <img alt="icon-tick" width="14" height="15" src="https://univn.vn/wp-content/themes/unicreation/lib/images/home/tick.png">
                                            </li>
                                            <li>
                                                <img width="9" height="8" alt="" src="https://univn.vn/wp-content/themes/unicreation/lib/images/home/x.png">
                                            </li>
                                            <li>Tặng voucher 200.000 vnđ</li>
                                            <li>Khi sử dụng Hosting</li>
                                            <li>Hướng dẫn thông báo</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-table__footer">
                                        <a href="javascript:void(0)" title="Đăng ký" data-pack="GÓI WEB STARTUP" data-toggle="modal" data-target="#msgModal">Đăng ký</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="pricing-table pricing-table__second">
                                    <div class="pricing-table__head"> GÓI PRO <div class="listing-badges">
                                            <span class="featured">Nổi bật</span>
                                        </div>
                                    </div>
                                    <div class="pricing-table__price">4.000.000 <br>
                                        <span>vnđ</span>
                                    </div>
                                    <div class="pricing-table__body">
                                        <ul>
                                            <li>Giao diện có sẵn <a target="_blank" href="https://univn.vn/goi-pro/">Xem ngay</a>
                                            </li>
                                            <li>3 - 5 ngày</li>
                                            <li>.com / .net</li>
                                            <li>1.5 Gb</li>
                                            <li>Không giới hạn</li>
                                            <li>
                                                <img alt="icon-tick" width="14" height="15" src="https://univn.vn/wp-content/themes/unicreation/lib/images/home/tick.png">
                                            </li>
                                            <li>Chuẩn SEO 100%</li>
                                            <li>
                                                <img alt="icon-tick" width="14" height="15" src="https://univn.vn/wp-content/themes/unicreation/lib/images/home/tick.png">
                                            </li>
                                            <li>2 Banner</li>
                                            <li>Google dịch</li>
                                            <li>15 bài copy</li>
                                            <li>Đổi màu</li>
                                            <li>Giảm 7%</li>
                                            <li>Giảm 7%</li>
                                            <li>
                                                <img alt="icon-tick" width="14" height="15" src="https://univn.vn/wp-content/themes/unicreation/lib/images/home/tick.png">
                                            </li>
                                            <li>
                                                <img alt="icon-tick" width="14" height="15" src="https://univn.vn/wp-content/themes/unicreation/lib/images/home/tick.png">
                                            </li>
                                            <li>Tặng voucher 350.000 vnđ</li>
                                            <li>Khi sử dụng Hosting</li>
                                            <li>Hướng dẫn thông báo</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-table__footer">
                                        <a href="javascript:void(0)" title="Đăng ký" data-pack="GÓI WEB PRO" data-toggle="modal" data-target="#msgModal">Đăng ký</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="pricing-table pricing-table__third">
                                    <div class="pricing-table__head">GÓI VIP</div>
                                    <div class="pricing-table__price">Liên hệ</div>
                                    <div class="pricing-table__body">
                                        <ul>
                                            <li>Giao diện độc quyền <a target="_blank" href="https://univn.vn/cac-du-an-vip/">Xem ngay</a>
                                            </li>
                                            <li>Trên 7 ngày</li>
                                            <li>.com / .net / .info / .org</li>
                                            <li>3 Gb</li>
                                            <li>Không giới hạn</li>
                                            <li>
                                                <img alt="icon-tick" width="14" height="15" src="https://univn.vn/wp-content/themes/unicreation/lib/images/home/tick.png">
                                            </li>
                                            <li>Chuẩn SEO 100%</li>
                                            <li>
                                                <img alt="icon-tick" width="14" height="15" src="https://univn.vn/wp-content/themes/unicreation/lib/images/home/tick.png">
                                            </li>
                                            <li>5 Banner</li>
                                            <li>Đa ngôn ngữ</li>
                                            <li>30 bài copy</li>
                                            <li>Tùy chỉnh theo yêu cầu</li>
                                            <li>Giảm 10%</li>
                                            <li>Giảm 10%</li>
                                            <li>
                                                <img alt="icon-tick" width="14" height="15" src="https://univn.vn/wp-content/themes/unicreation/lib/images/home/tick.png">
                                            </li>
                                            <li>
                                                <img alt="icon-tick" width="14" height="15" src="https://univn.vn/wp-content/themes/unicreation/lib/images/home/tick.png">
                                            </li>
                                            <li>Tặng voucher 500.000 vnđ</li>
                                            <li>Khi sử dụng Hosting</li>
                                            <li>Hỗ trợ thông báo</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-table__footer">
                                        <a href="javascript:void(0)" title="Đăng ký" data-pack="GÓI WEB VIP" data-toggle="modal" data-target="#msgModal">Đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="uni-section" id="home-themes">
                    <div class="container-fluid">
                        <div class="uni-heading">
                            <h2>Kho giao diện website </h2>
                            <p>Các mẫu mới nhất theo xu hướng thiết kế năm 2020</p>
                        </div>
                        <div class="tab-product">
                            <ul class="nav justify-content-center product-tab" role="tablist">
                                <li class="nav-item col-4 col-sm-3 col-xl" role="presentation">
                                    <a id="nav-8" class="nav-link active" href="#tab-8" role="tab" aria-controls="dm-8" aria-selected="true" data-cat="8">
                                        <div class="icon-theme">
                                            <img alt="icondm1" width="40" height="40" src="https://univn.vn/wp-content/themes/unicreation/lib/images/home/icon/ic1.svg" loading="lazy">
                                        </div>Tất cả
                                    </a>
                                </li>
                                <li class="nav-item col-4 col-sm-3 col-xl" role="presentation">
                                    <a id="nav-12" class="nav-link " href="#tab-12" role="tab" aria-controls="dm-12" aria-selected="false" data-cat="12">
                                        <div class="icon-theme">
                                            <img alt="icondm2" width="40" height="40" src="https://univn.vn/wp-content/themes/unicreation/lib/images/home/icon/ic2.svg" loading="lazy">
                                        </div>Giới thiệu công ty
                                    </a>
                                </li>
                                <li class="nav-item col-4 col-sm-3 col-xl" role="presentation">
                                    <a id="nav-13" class="nav-link " href="#tab-13" role="tab" aria-controls="dm-13" aria-selected="false" data-cat="13">
                                        <div class="icon-theme">
                                            <img alt="icondm3" width="40" height="40" src="https://univn.vn/wp-content/themes/unicreation/lib/images/home/icon/ic3.svg" loading="lazy">
                                        </div>Thương mại điện tử
                                    </a>
                                </li>
                                <li class="nav-item col-4 col-sm-3 col-xl" role="presentation">
                                    <a id="nav-14" class="nav-link " href="#tab-14" role="tab" aria-controls="dm-14" aria-selected="false" data-cat="14">
                                        <div class="icon-theme">
                                            <img alt="icondm4" width="40" height="40" src="https://univn.vn/wp-content/themes/unicreation/lib/images/home/icon/ic4.svg" loading="lazy">
                                        </div>Bất động sản
                                    </a>
                                </li>
                                <li class="nav-item col-4 col-sm-3 col-xl" role="presentation">
                                    <a id="nav-15" class="nav-link " href="#tab-15" role="tab" aria-controls="dm-15" aria-selected="false" data-cat="15">
                                        <div class="icon-theme">
                                            <img alt="icondm5" width="40" height="40" src="https://univn.vn/wp-content/themes/unicreation/lib/images/home/icon/ic5.svg" loading="lazy">
                                        </div>Ô tô
                                    </a>
                                </li>
                                <li class="nav-item col-4 col-sm-3 col-xl" role="presentation">
                                    <a id="nav-16" class="nav-link " href="#tab-16" role="tab" aria-controls="dm-16" aria-selected="false" data-cat="16">
                                        <div class="icon-theme">
                                            <img alt="icondm6" width="40" height="40" src="https://univn.vn/wp-content/themes/unicreation/lib/images/home/icon/ic6.svg" loading="lazy">
                                        </div>Du lịch
                                    </a>
                                </li>
                                <li class="nav-item col-4 col-sm-3 col-xl" role="presentation">
                                    <a id="nav-18" class="nav-link " href="#tab-18" role="tab" aria-controls="dm-18" aria-selected="false" data-cat="18">
                                        <div class="icon-theme">
                                            <img alt="icondm7" width="40" height="40" src="https://univn.vn/wp-content/themes/unicreation/lib/images/home/icon/ic7.svg" loading="lazy">
                                        </div>Nội thất
                                    </a>
                                </li>
                                <li class="nav-item col-4 col-sm-3 col-xl" role="presentation">
                                    <a id="nav-41" class="nav-link " href="#tab-41" role="tab" aria-controls="dm-41" aria-selected="false" data-cat="41">
                                        <div class="icon-theme">
                                            <img alt="icondm8" width="40" height="40" src="https://univn.vn/wp-content/themes/unicreation/lib/images/home/icon/ic8.svg" loading="lazy">
                                        </div>Landing page
                                    </a>
                                </li>
                                <li class="nav-item col-4 col-sm-3 col-xl" role="presentation">
                                    <a id="nav-19" class="nav-link " href="#tab-19" role="tab" aria-controls="dm-19" aria-selected="false" data-cat="19">
                                        <div class="icon-theme">
                                            <img alt="icondm9" width="40" height="40" src="https://univn.vn/wp-content/themes/unicreation/lib/images/home/icon/ic9.svg" loading="lazy">
                                        </div>Dịch vụ khác
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab-8">
                                    <div class="row">
                                        <div class="col-6 col-md-3">
                                            <div class="item-theme">
                                                <div class="img">
                                                    <img width="700" height="760" src="https://univn.vn/wp-content/uploads/2023/01/vietransjsc-thumb.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://univn.vn/wp-content/uploads/2023/01/vietransjsc-thumb.jpg 700w, https://univn.vn/wp-content/uploads/2023/01/vietransjsc-thumb-276x300.jpg 276w, https://univn.vn/wp-content/uploads/2023/01/vietransjsc-thumb-370x402.jpg 370w" sizes="(max-width: 700px) 100vw, 700px" />
                                                    <div class="dual-button">
                                                        <a class="btn button-detail" href="https://univn.vn/van-tai-vietrans-jsc/">Chi tiết</a>
                                                        <a class="btn button-view" target="_blank" rel="nofollow" href="http://vietransjsc.giaodiendep.com/">Xem demo</a>
                                                    </div>
                                                </div>
                                                <div class="item-theme__name">Vận tải Vietrans JSC</div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="item-theme">
                                                <div class="img">
                                                    <img width="700" height="760" src="https://univn.vn/wp-content/uploads/2023/01/hito-thumb.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://univn.vn/wp-content/uploads/2023/01/hito-thumb.jpg 700w, https://univn.vn/wp-content/uploads/2023/01/hito-thumb-276x300.jpg 276w, https://univn.vn/wp-content/uploads/2023/01/hito-thumb-370x402.jpg 370w" sizes="(max-width: 700px) 100vw, 700px" />
                                                    <div class="dual-button">
                                                        <a class="btn button-detail" href="https://univn.vn/canxi-hito/">Chi tiết</a>
                                                        <a class="btn button-view" target="_blank" rel="nofollow" href="http://hito.giaodiendep.com/">Xem demo</a>
                                                    </div>
                                                </div>
                                                <div class="item-theme__name">Canxi Hito</div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="item-theme">
                                                <div class="img">
                                                    <img width="700" height="760" src="https://univn.vn/wp-content/uploads/2023/01/skillking-thumb.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://univn.vn/wp-content/uploads/2023/01/skillking-thumb.jpg 700w, https://univn.vn/wp-content/uploads/2023/01/skillking-thumb-276x300.jpg 276w, https://univn.vn/wp-content/uploads/2023/01/skillking-thumb-370x402.jpg 370w" sizes="(max-width: 700px) 100vw, 700px" />
                                                    <div class="dual-button">
                                                        <a class="btn button-detail" href="https://univn.vn/skillking-fpt/">Chi tiết</a>
                                                        <a class="btn button-view" target="_blank" rel="nofollow" href="http://skillking.giaodiendep.com/">Xem demo</a>
                                                    </div>
                                                </div>
                                                <div class="item-theme__name">Skillking FPT</div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="item-theme">
                                                <div class="img">
                                                    <img width="700" height="760" src="https://univn.vn/wp-content/uploads/2023/01/quatang-thumb.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://univn.vn/wp-content/uploads/2023/01/quatang-thumb.jpg 700w, https://univn.vn/wp-content/uploads/2023/01/quatang-thumb-276x300.jpg 276w, https://univn.vn/wp-content/uploads/2023/01/quatang-thumb-370x402.jpg 370w" sizes="(max-width: 700px) 100vw, 700px" />
                                                    <div class="dual-button">
                                                        <a class="btn button-detail" href="https://univn.vn/qua-tang/">Chi tiết</a>
                                                        <a class="btn button-view" target="_blank" rel="nofollow" href="http://quatang.giaodiendep.com/">Xem demo</a>
                                                    </div>
                                                </div>
                                                <div class="item-theme__name">Quà tặng</div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="item-theme">
                                                <div class="img">
                                                    <img width="700" height="760" src="https://univn.vn/wp-content/uploads/2023/01/dienmayhlp-thumb.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://univn.vn/wp-content/uploads/2023/01/dienmayhlp-thumb.jpg 700w, https://univn.vn/wp-content/uploads/2023/01/dienmayhlp-thumb-276x300.jpg 276w, https://univn.vn/wp-content/uploads/2023/01/dienmayhlp-thumb-370x402.jpg 370w" sizes="(max-width: 700px) 100vw, 700px" />
                                                    <div class="dual-button">
                                                        <a class="btn button-detail" href="https://univn.vn/dien-may-hlp/">Chi tiết</a>
                                                        <a class="btn button-view" target="_blank" rel="nofollow" href="http://dienmayhlp.giaodiendep.com/">Xem demo</a>
                                                    </div>
                                                </div>
                                                <div class="item-theme__name">Điện máy HLP</div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="item-theme">
                                                <div class="img">
                                                    <img width="350" height="380" src="https://univn.vn/wp-content/uploads/2023/01/ava-goldenpen.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://univn.vn/wp-content/uploads/2023/01/ava-goldenpen.jpg 350w, https://univn.vn/wp-content/uploads/2023/01/ava-goldenpen-276x300.jpg 276w" sizes="(max-width: 350px) 100vw, 350px" />
                                                    <div class="dual-button">
                                                        <a class="btn button-detail" href="https://univn.vn/golden-pen/">Chi tiết</a>
                                                        <a class="btn button-view" target="_blank" rel="nofollow" href="http://goldenpen.giaodiendep.com/">Xem demo</a>
                                                    </div>
                                                </div>
                                                <div class="item-theme__name">Golden Pen</div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="item-theme">
                                                <div class="img">
                                                    <img width="350" height="380" src="https://univn.vn/wp-content/uploads/2023/01/ava-omecosmetic.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://univn.vn/wp-content/uploads/2023/01/ava-omecosmetic.jpg 350w, https://univn.vn/wp-content/uploads/2023/01/ava-omecosmetic-276x300.jpg 276w" sizes="(max-width: 350px) 100vw, 350px" />
                                                    <div class="dual-button">
                                                        <a class="btn button-detail" href="https://univn.vn/ome-cosmetic/">Chi tiết</a>
                                                        <a class="btn button-view" target="_blank" rel="nofollow" href="http://omecosmetic.giaodiendep.com/">Xem demo</a>
                                                    </div>
                                                </div>
                                                <div class="item-theme__name">OME Cosmetic</div>
                                                <span class="item-theme__label label_Hot">Hot</span>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="item-theme">
                                                <div class="img">
                                                    <img width="350" height="380" src="https://univn.vn/wp-content/uploads/2023/01/ava-quathungcuong.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://univn.vn/wp-content/uploads/2023/01/ava-quathungcuong.jpg 350w, https://univn.vn/wp-content/uploads/2023/01/ava-quathungcuong-276x300.jpg 276w" sizes="(max-width: 350px) 100vw, 350px" />
                                                    <div class="dual-button">
                                                        <a class="btn button-detail" href="https://univn.vn/quat-hung-cuong/">Chi tiết</a>
                                                        <a class="btn button-view" target="_blank" rel="nofollow" href="http://quathungcuong.giaodiendep.com/">Xem demo</a>
                                                    </div>
                                                </div>
                                                <div class="item-theme__name">Quạt Hùng Cường</div>
                                                <span class="item-theme__label label_Hot">Hot</span>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="item-theme">
                                                <div class="img">
                                                    <img width="700" height="760" src="https://univn.vn/wp-content/uploads/2022/10/golfbooking-thumb.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://univn.vn/wp-content/uploads/2022/10/golfbooking-thumb.jpg 700w, https://univn.vn/wp-content/uploads/2022/10/golfbooking-thumb-276x300.jpg 276w, https://univn.vn/wp-content/uploads/2022/10/golfbooking-thumb-370x402.jpg 370w" sizes="(max-width: 700px) 100vw, 700px" />
                                                    <div class="dual-button">
                                                        <a class="btn button-detail" href="https://univn.vn/golf-booking/">Chi tiết</a>
                                                        <a class="btn button-view" target="_blank" rel="nofollow" href="http://golfbooking.giaodiendep.com/">Xem demo</a>
                                                    </div>
                                                </div>
                                                <div class="item-theme__name">Golf Booking</div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="item-theme">
                                                <div class="img">
                                                    <img width="700" height="760" src="https://univn.vn/wp-content/uploads/2022/10/hoanghaigroup-thumb.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://univn.vn/wp-content/uploads/2022/10/hoanghaigroup-thumb.jpg 700w, https://univn.vn/wp-content/uploads/2022/10/hoanghaigroup-thumb-276x300.jpg 276w, https://univn.vn/wp-content/uploads/2022/10/hoanghaigroup-thumb-370x402.jpg 370w" sizes="(max-width: 700px) 100vw, 700px" />
                                                    <div class="dual-button">
                                                        <a class="btn button-detail" href="https://univn.vn/hoang-hai-group/">Chi tiết</a>
                                                        <a class="btn button-view" target="_blank" rel="nofollow" href="http://hoanghaigroup.giaodiendep.com/">Xem demo</a>
                                                    </div>
                                                </div>
                                                <div class="item-theme__name">Hoàng Hải Group</div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="item-theme">
                                                <div class="img">
                                                    <img width="700" height="760" src="https://univn.vn/wp-content/uploads/2022/10/luxury-hotel-thumb.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://univn.vn/wp-content/uploads/2022/10/luxury-hotel-thumb.jpg 700w, https://univn.vn/wp-content/uploads/2022/10/luxury-hotel-thumb-276x300.jpg 276w, https://univn.vn/wp-content/uploads/2022/10/luxury-hotel-thumb-370x402.jpg 370w" sizes="(max-width: 700px) 100vw, 700px" />
                                                    <div class="dual-button">
                                                        <a class="btn button-detail" href="https://univn.vn/luxury-hotel/">Chi tiết</a>
                                                        <a class="btn button-view" target="_blank" rel="nofollow" href="http://hotel.giaodienuni.com/">Xem demo</a>
                                                    </div>
                                                </div>
                                                <div class="item-theme__name">Luxury Hotel</div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="item-theme">
                                                <div class="img">
                                                    <img width="350" height="380" src="https://univn.vn/wp-content/uploads/2022/10/ava-hiwin.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://univn.vn/wp-content/uploads/2022/10/ava-hiwin.png 350w, https://univn.vn/wp-content/uploads/2022/10/ava-hiwin-276x300.png 276w" sizes="(max-width: 350px) 100vw, 350px" />
                                                    <div class="dual-button">
                                                        <a class="btn button-detail" href="https://univn.vn/hiwinvietnam/">Chi tiết</a>
                                                        <a class="btn button-view" target="_blank" rel="nofollow" href="http://hiwin.giaodiendep.com/">Xem demo</a>
                                                    </div>
                                                </div>
                                                <div class="item-theme__name">HIWINVIETNAM</div>
                                                <span class="item-theme__label label_Hot">Hot</span>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="item-theme">
                                                <div class="img">
                                                    <img width="350" height="380" src="https://univn.vn/wp-content/uploads/2022/10/ava-bb.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://univn.vn/wp-content/uploads/2022/10/ava-bb.png 350w, https://univn.vn/wp-content/uploads/2022/10/ava-bb-276x300.png 276w" sizes="(max-width: 350px) 100vw, 350px" />
                                                    <div class="dual-button">
                                                        <a class="btn button-detail" href="https://univn.vn/blackbullshoes/">Chi tiết</a>
                                                        <a class="btn button-view" target="_blank" rel="nofollow" href="http://blackbull.giaodiendep.com">Xem demo</a>
                                                    </div>
                                                </div>
                                                <div class="item-theme__name">BlackbullShoes</div>
                                                <span class="item-theme__label label_Hot">Hot</span>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="item-theme">
                                                <div class="img">
                                                    <img width="350" height="380" src="https://univn.vn/wp-content/uploads/2022/10/ava-bingcheng.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://univn.vn/wp-content/uploads/2022/10/ava-bingcheng.png 350w, https://univn.vn/wp-content/uploads/2022/10/ava-bingcheng-276x300.png 276w" sizes="(max-width: 350px) 100vw, 350px" />
                                                    <div class="dual-button">
                                                        <a class="btn button-detail" href="https://univn.vn/bingcheng/">Chi tiết</a>
                                                        <a class="btn button-view" target="_blank" rel="nofollow" href="http://bingcheng.giaodiendep.com/">Xem demo</a>
                                                    </div>
                                                </div>
                                                <div class="item-theme__name">BingCheng</div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="item-theme">
                                                <div class="img">
                                                    <img width="350" height="380" src="https://univn.vn/wp-content/uploads/2022/10/ava-btk.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://univn.vn/wp-content/uploads/2022/10/ava-btk.jpg 350w, https://univn.vn/wp-content/uploads/2022/10/ava-btk-276x300.jpg 276w" sizes="(max-width: 350px) 100vw, 350px" />
                                                    <div class="dual-button">
                                                        <a class="btn button-detail" href="https://univn.vn/bach-thuan-khang/">Chi tiết</a>
                                                        <a class="btn button-view" target="_blank" rel="nofollow" href="http://bachthuankhang.giaodiendep.com">Xem demo</a>
                                                    </div>
                                                </div>
                                                <div class="item-theme__name">Bách Thuận Khang</div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="item-theme">
                                                <div class="img">
                                                    <img width="350" height="380" src="https://univn.vn/wp-content/uploads/2022/08/ava-vpp.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://univn.vn/wp-content/uploads/2022/08/ava-vpp.png 350w, https://univn.vn/wp-content/uploads/2022/08/ava-vpp-276x300.png 276w" sizes="(max-width: 350px) 100vw, 350px" />
                                                    <div class="dual-button">
                                                        <a class="btn button-detail" href="https://univn.vn/van-phong-pham/">Chi tiết</a>
                                                        <a class="btn button-view" target="_blank" rel="nofollow" href="http://vanphongphambaoan.giaodiendep.com">Xem demo</a>
                                                    </div>
                                                </div>
                                                <div class="item-theme__name">Văn phòng phẩm</div>
                                                <span class="item-theme__label label_New">New</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <a class="btn-viewall btn-gradient" href="https://univn.vn/tat-ca/">Xem thêm các mẫu &rarr;</a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-12"></div>
                                <div class="tab-pane fade" id="tab-13"></div>
                                <div class="tab-pane fade" id="tab-14"></div>
                                <div class="tab-pane fade" id="tab-15"></div>
                                <div class="tab-pane fade" id="tab-16"></div>
                                <div class="tab-pane fade" id="tab-18"></div>
                                <div class="tab-pane fade" id="tab-41"></div>
                                <div class="tab-pane fade" id="tab-19"></div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="uni-section" id="home-reason">
                    <div class="container">
                        <div class="uni-heading">
                            <h3>Vì sao nên chọn chúng tôi </h3>
                                <p>Với 1200+ khách hàng sử dụng dịch vụ</p>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-4 box-reasonl">
                                <div class="item-reason d-flex">
                                    <div class="item-reason__img">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="57.855" height="57.855" viewBox="0 0 57.855 57.855">
                                            <path class="cls-1" d="M426,5269.071A28.927,28.927,0,1,0,454.927,5298,28.96,28.96,0,0,0,426,5269.071Zm16.127,19.281-17.8,20.026a2.227,2.227,0,0,1-3.054.26l-11.126-8.9a2.225,2.225,0,0,1,2.78-3.475l9.476,7.58,16.4-18.448a2.226,2.226,0,0,1,3.326,2.959Z" transform="translate(-397.073 -5269.071)" />
                                        </svg>
                                    </div>
                                    <div class="item-reason__box">
                                        <h3>Cung cấp Source Code</h3>
                                        <p>Công ty Uni Creation luôn sẵn sàng cung cấp Source Code để khách hàng có thể tự tùy chỉnh, thêm các câu lệnh,…</p>
                                    </div>
                                </div>
                                <div class="item-reason d-flex">
                                    <div class="item-reason__img">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="57.855" height="57.855" viewBox="0 0 57.855 57.855">
                                            <path class="cls-2" d="M426,5269.071A28.927,28.927,0,1,0,454.927,5298,28.96,28.96,0,0,0,426,5269.071Zm16.127,19.281-17.8,20.026a2.227,2.227,0,0,1-3.054.26l-11.126-8.9a2.225,2.225,0,0,1,2.78-3.475l9.476,7.58,16.4-18.448a2.226,2.226,0,0,1,3.326,2.959Z" transform="translate(-397.073 -5269.071)" />
                                        </svg>
                                    </div>
                                    <div class="item-reason__box">
                                        <h3>Cam kết giá tốt nhất</h3>
                                        <p>Chúng tôi cam kết giá dịch vụ tại đây là tốt nhất. Bạn có thể hoàn toàn yên tâm khi chọn dịch vụ tại Uni Creation</p>
                                    </div>
                                </div>
                                <div class="item-reason d-flex">
                                    <div class="item-reason__img">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="57.855" height="57.855" viewBox="0 0 57.855 57.855">
                                            <path class="cls-3" d="M426,5269.071A28.927,28.927,0,1,0,454.927,5298,28.96,28.96,0,0,0,426,5269.071Zm16.127,19.281-17.8,20.026a2.227,2.227,0,0,1-3.054.26l-11.126-8.9a2.225,2.225,0,0,1,2.78-3.475l9.476,7.58,16.4-18.448a2.226,2.226,0,0,1,3.326,2.959Z" transform="translate(-397.073 -5269.071)" />
                                        </svg>
                                    </div>
                                    <div class="item-reason__box">
                                        <h3>Bảo hành trọn đời</h3>
                                        <p>Khách hàng khi sử dụng dịch vụ thiết kế website trọn gói. Sẽ được bảo trì, sửa lỗi hoàn toàn miễn phí nếu có lỗi phát sinh.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-center">
                                <img class="iphone" width="345" height="692" alt="iphone" src="https://univn.vn/wp-content/themes/unicreation/lib/images/home/iphone.png" loading="lazy">
                            </div>
                            <div class="col-lg-4 box-reasonr">
                                <div class="item-reason d-flex">
                                    <div class="item-reason__img">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="57.855" height="57.855" viewBox="0 0 57.855 57.855">
                                            <path class="cls-4" d="M426,5269.071A28.927,28.927,0,1,0,454.927,5298,28.96,28.96,0,0,0,426,5269.071Zm16.127,19.281-17.8,20.026a2.227,2.227,0,0,1-3.054.26l-11.126-8.9a2.225,2.225,0,0,1,2.78-3.475l9.476,7.58,16.4-18.448a2.226,2.226,0,0,1,3.326,2.959Z" transform="translate(-397.073 -5269.071)" />
                                        </svg>
                                    </div>
                                    <div class="item-reason__box">
                                        <h3>Nâng cấp không giới hạn</h3>
                                        <p>Chỉ cần khách hàng yêu cầu, chúng tôi sẽ nâng cấp liên tục để chất lượng website tối ưu nhất, đảm bảo nhu cầu kinh doanh của bạn.</p>
                                    </div>
                                </div>
                                <div class="item-reason d-flex">
                                    <div class="item-reason__img">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="57.855" height="57.855" viewBox="0 0 57.855 57.855">
                                            <path class="cls-5" d="M426,5269.071A28.927,28.927,0,1,0,454.927,5298,28.96,28.96,0,0,0,426,5269.071Zm16.127,19.281-17.8,20.026a2.227,2.227,0,0,1-3.054.26l-11.126-8.9a2.225,2.225,0,0,1,2.78-3.475l9.476,7.58,16.4-18.448a2.226,2.226,0,0,1,3.326,2.959Z" transform="translate(-397.073 -5269.071)" />
                                        </svg>
                                    </div>
                                    <div class="item-reason__box">
                                        <h3>Chính sách hoàn tiền</h3>
                                        <p>Nếu khách hàng không hài lòng về website đúng theo cam kết đã ghi trong hợp đồng, Uni Creation sẽ hoàn 100% chi phí thiết kế web cho bạn.</p>
                                    </div>
                                </div>
                                <div class="item-reason d-flex">
                                    <div class="item-reason__img">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="57.855" height="57.855" viewBox="0 0 57.855 57.855">
                                            <path class="cls-6" d="M426,5269.071A28.927,28.927,0,1,0,454.927,5298,28.96,28.96,0,0,0,426,5269.071Zm16.127,19.281-17.8,20.026a2.227,2.227,0,0,1-3.054.26l-11.126-8.9a2.225,2.225,0,0,1,2.78-3.475l9.476,7.58,16.4-18.448a2.226,2.226,0,0,1,3.326,2.959Z" transform="translate(-397.073 -5269.071)" />
                                        </svg>
                                    </div>
                                    <div class="item-reason__box">
                                        <h3>Hỗ trợ nhanh, tận tình</h3>
                                        <p>Với đội ngũ nhân viên, kỹ thuật viên chuyên nghiệp, Uni Creation cam kết phục vụ khách hàng 24/7. Các yêu cầu đơn giản của khách hàng được phản hồi trong vòng từ 15 đến 30 phút.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="uni-section" id="home-news">
                    <div class="container">
                        <div class="uni-heading">
                            <h2>TIN TỨC </h3>
                        </div>
                        <div class="tab-post">
                            <ul class="nav justify-content-center post-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a id="nav-3" class="nav-link active" href="#tab-3" role="tab" aria-controls="tabnews-3" aria-selected="true" data-cat="3">Tin tức</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a id="nav-28" class="nav-link " href="#tab-28" role="tab" aria-controls="tabnews-28" aria-selected="false" data-cat="28">Kiến thức Website</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab-3">
                                    <div class="row">
                                        <div class="col-6 col-sm-4">
                                            <a class="item-post" href="https://univn.vn/huong-dan-su-dung-sos-map-ban-do-cuu-tro-thoi-dich-covid-19/" title="HƯỚNG DẪN SỬ DỤNG SOS MAP – BẢN ĐỒ CỨU TRỢ THỜI DỊCH COVID-19">
                                                <div class="item-post__image">
                                                    <img width="370" height="190" src="https://univn.vn/wp-content/uploads/2021/08/sosmap-370x190.png" class="attachment-thumb370 size-thumb370 wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://univn.vn/wp-content/uploads/2021/08/sosmap-370x190.png 370w, https://univn.vn/wp-content/uploads/2021/08/sosmap-300x154.png 300w, https://univn.vn/wp-content/uploads/2021/08/sosmap-1024x525.png 1024w, https://univn.vn/wp-content/uploads/2021/08/sosmap-768x394.png 768w, https://univn.vn/wp-content/uploads/2021/08/sosmap.png 1420w" sizes="(max-width: 370px) 100vw, 370px" />
                                                </div>
                                                <div class="item-post__wrap">
                                                    <span class="post-date">Chủ Nhật, 22/08/2021</span>
                                                    <h3>HƯỚNG DẪN SỬ DỤNG SOS MAP – BẢN ĐỒ CỨU TRỢ THỜI DỊCH COVID-19</h3>
                                                    <span class="viewmore" href="https://univn.vn/huong-dan-su-dung-sos-map-ban-do-cuu-tro-thoi-dich-covid-19/" title="Đọc tiếp">Đọc tiếp</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4">
                                            <a class="item-post" href="https://univn.vn/chi-phi-duy-tri-website-hang-nam/" title="Chi phí duy trì website hàng năm là bao nhiêu?">
                                                <div class="item-post__image">
                                                    <img width="370" height="195" src="https://univn.vn/wp-content/uploads/2021/07/web-hosting-370x195.jpg" class="attachment-thumb370 size-thumb370 wp-post-image" alt="Chi phí hosting cho website" decoding="async" loading="lazy" srcset="https://univn.vn/wp-content/uploads/2021/07/web-hosting-370x195.jpg 370w, https://univn.vn/wp-content/uploads/2021/07/web-hosting-300x158.jpg 300w, https://univn.vn/wp-content/uploads/2021/07/web-hosting.jpg 700w" sizes="(max-width: 370px) 100vw, 370px" />
                                                </div>
                                                <div class="item-post__wrap">
                                                    <span class="post-date">Thứ Hai, 19/07/2021</span>
                                                    <h3>Chi phí duy trì website hàng năm là bao nhiêu?</h3>
                                                    <span class="viewmore" href="https://univn.vn/chi-phi-duy-tri-website-hang-nam/" title="Đọc tiếp">Đọc tiếp</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4">
                                            <a class="item-post" href="https://univn.vn/lam-web-gia-re/" title="Làm web giá rẻ cần lưu ý điều gì?">
                                                <div class="item-post__image">
                                                    <img width="370" height="231" src="https://univn.vn/wp-content/uploads/2021/07/web-gia-re-can-luu-y-dieu-gi-370x231.jpg" class="attachment-thumb370 size-thumb370 wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://univn.vn/wp-content/uploads/2021/07/web-gia-re-can-luu-y-dieu-gi-370x231.jpg 370w, https://univn.vn/wp-content/uploads/2021/07/web-gia-re-can-luu-y-dieu-gi-300x188.jpg 300w, https://univn.vn/wp-content/uploads/2021/07/web-gia-re-can-luu-y-dieu-gi-768x480.jpg 768w, https://univn.vn/wp-content/uploads/2021/07/web-gia-re-can-luu-y-dieu-gi.jpg 800w" sizes="(max-width: 370px) 100vw, 370px" />
                                                </div>
                                                <div class="item-post__wrap">
                                                    <span class="post-date">Thứ Hai, 12/07/2021</span>
                                                    <h3>Làm web giá rẻ cần lưu ý điều gì?</h3>
                                                    <span class="viewmore" href="https://univn.vn/lam-web-gia-re/" title="Đọc tiếp">Đọc tiếp</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <a class="btn-viewall btn-gradient" href="https://univn.vn/tin-tuc/">XEM TẤT CẢ &rarr;</a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-28"></div>
                            </div>
                        </div>
                        </h2>
                </section>
                <section class="uni-section" id="home-customer">
                    <div class="container">
                        <div class="uni-heading">
                            <h2>KHÁCH HÀNG TIN DÙNG</h2>
                            <p>Sự hài lòng của khách hàng chính là thành công lớn nhất của Uni Creation</p>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-4 col-lg-3 col-xl-2">
                                <a href="javascript:void(0)" class="item-partner" data-id="2288" data-toggle="modal" data-target="#partnerModal">
                                    <img width="210" height="120" src="https://univn.vn/wp-content/uploads/2022/12/LogoSCOTSENGLISH.jpg" class="attachment-thumbnail_large size-thumbnail_large wp-post-image" alt="" decoding="async" loading="lazy" />
                                    <div class="overlay">Xem chi tiết</div>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <a href="javascript:void(0)" class="item-partner" data-id="2290" data-toggle="modal" data-target="#partnerModal">
                                    <img width="210" height="120" src="https://univn.vn/wp-content/uploads/2022/12/LogoSKILLKING.jpg" class="attachment-thumbnail_large size-thumbnail_large wp-post-image" alt="" decoding="async" loading="lazy" />
                                    <div class="overlay">Xem chi tiết</div>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <a href="javascript:void(0)" class="item-partner" data-id="1308" data-toggle="modal" data-target="#partnerModal">
                                    <img width="183" height="112" src="https://univn.vn/wp-content/uploads/2021/01/lumi.jpg" class="attachment-thumbnail_large size-thumbnail_large wp-post-image" alt="" decoding="async" loading="lazy" />
                                    <div class="overlay">Xem chi tiết</div>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <a href="javascript:void(0)" class="item-partner" data-id="1311" data-toggle="modal" data-target="#partnerModal">
                                    <img width="183" height="112" src="https://univn.vn/wp-content/uploads/2021/01/cis.jpg" class="attachment-thumbnail_large size-thumbnail_large wp-post-image" alt="" decoding="async" loading="lazy" />
                                    <div class="overlay">Xem chi tiết</div>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <a href="javascript:void(0)" class="item-partner" data-id="1313" data-toggle="modal" data-target="#partnerModal">
                                    <img width="183" height="112" src="https://univn.vn/wp-content/uploads/2021/01/gentis.jpg" class="attachment-thumbnail_large size-thumbnail_large wp-post-image" alt="" decoding="async" loading="lazy" />
                                    <div class="overlay">Xem chi tiết</div>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <a href="javascript:void(0)" class="item-partner" data-id="1797" data-toggle="modal" data-target="#partnerModal">
                                    <img width="183" height="112" src="https://univn.vn/wp-content/uploads/2021/09/amd.jpg" class="attachment-thumbnail_large size-thumbnail_large wp-post-image" alt="" decoding="async" loading="lazy" />
                                    <div class="overlay">Xem chi tiết</div>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <a href="javascript:void(0)" class="item-partner" data-id="1317" data-toggle="modal" data-target="#partnerModal">
                                    <img width="183" height="112" src="https://univn.vn/wp-content/uploads/2021/01/baoviet.jpg" class="attachment-thumbnail_large size-thumbnail_large wp-post-image" alt="" decoding="async" loading="lazy" />
                                    <div class="overlay">Xem chi tiết</div>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <a href="javascript:void(0)" class="item-partner" data-id="1793" data-toggle="modal" data-target="#partnerModal">
                                    <img width="183" height="112" src="https://univn.vn/wp-content/uploads/2021/09/hoabinhminh.jpg" class="attachment-thumbnail_large size-thumbnail_large wp-post-image" alt="" decoding="async" loading="lazy" />
                                    <div class="overlay">Xem chi tiết</div>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <a href="javascript:void(0)" class="item-partner" data-id="1323" data-toggle="modal" data-target="#partnerModal">
                                    <img width="183" height="112" src="https://univn.vn/wp-content/uploads/2021/01/smartmen.jpg" class="attachment-thumbnail_large size-thumbnail_large wp-post-image" alt="" decoding="async" loading="lazy" />
                                    <div class="overlay">Xem chi tiết</div>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <a href="javascript:void(0)" class="item-partner" data-id="1322" data-toggle="modal" data-target="#partnerModal">
                                    <img width="183" height="112" src="https://univn.vn/wp-content/uploads/2021/01/gte.jpg" class="attachment-thumbnail_large size-thumbnail_large wp-post-image" alt="" decoding="async" loading="lazy" />
                                    <div class="overlay">Xem chi tiết</div>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <a href="javascript:void(0)" class="item-partner" data-id="1370" data-toggle="modal" data-target="#partnerModal">
                                    <img width="183" height="112" src="https://univn.vn/wp-content/uploads/2021/09/quattrangmy.jpg" class="attachment-thumbnail_large size-thumbnail_large wp-post-image" alt="" decoding="async" loading="lazy" />
                                    <div class="overlay">Xem chi tiết</div>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <a href="javascript:void(0)" class="item-partner" data-id="1324" data-toggle="modal" data-target="#partnerModal">
                                    <img width="183" height="112" src="https://univn.vn/wp-content/uploads/2021/01/vbi.jpg" class="attachment-thumbnail_large size-thumbnail_large wp-post-image" alt="" decoding="async" loading="lazy" />
                                    <div class="overlay">Xem chi tiết</div>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <a href="javascript:void(0)" class="item-partner" data-id="1325" data-toggle="modal" data-target="#partnerModal">
                                    <img width="183" height="112" src="https://univn.vn/wp-content/uploads/2021/01/detkim.jpg" class="attachment-thumbnail_large size-thumbnail_large wp-post-image" alt="" decoding="async" loading="lazy" />
                                    <div class="overlay">Xem chi tiết</div>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <a href="javascript:void(0)" class="item-partner" data-id="1305" data-toggle="modal" data-target="#partnerModal">
                                    <img width="183" height="112" src="https://univn.vn/wp-content/uploads/2021/01/longbiencorp.jpg" class="attachment-thumbnail_large size-thumbnail_large wp-post-image" alt="" decoding="async" loading="lazy" />
                                    <div class="overlay">Xem chi tiết</div>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <a href="javascript:void(0)" class="item-partner" data-id="1794" data-toggle="modal" data-target="#partnerModal">
                                    <img width="183" height="112" src="https://univn.vn/wp-content/uploads/2021/09/emera.jpg" class="attachment-thumbnail_large size-thumbnail_large wp-post-image" alt="" decoding="async" loading="lazy" />
                                    <div class="overlay">Xem chi tiết</div>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <a href="javascript:void(0)" class="item-partner" data-id="1796" data-toggle="modal" data-target="#partnerModal">
                                    <img width="183" height="112" src="https://univn.vn/wp-content/uploads/2021/09/hungtin.jpg" class="attachment-thumbnail_large size-thumbnail_large wp-post-image" alt="" decoding="async" loading="lazy" />
                                    <div class="overlay">Xem chi tiết</div>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <a href="javascript:void(0)" class="item-partner" data-id="1799" data-toggle="modal" data-target="#partnerModal">
                                    <img width="183" height="112" src="https://univn.vn/wp-content/uploads/2021/09/tce.jpg" class="attachment-thumbnail_large size-thumbnail_large wp-post-image" alt="" decoding="async" loading="lazy" />
                                    <div class="overlay">Xem chi tiết</div>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <a href="javascript:void(0)" class="item-partner" data-id="1798" data-toggle="modal" data-target="#partnerModal">
                                    <img width="183" height="112" src="https://univn.vn/wp-content/uploads/2021/09/songcau.jpg" class="attachment-thumbnail_large size-thumbnail_large wp-post-image" alt="" decoding="async" loading="lazy" />
                                    <div class="overlay">Xem chi tiết</div>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <a href="javascript:void(0)" class="item-partner" data-id="1315" data-toggle="modal" data-target="#partnerModal">
                                    <img width="183" height="112" src="https://univn.vn/wp-content/uploads/2021/01/dicom.jpg" class="attachment-thumbnail_large size-thumbnail_large wp-post-image" alt="" decoding="async" loading="lazy" />
                                    <div class="overlay">Xem chi tiết</div>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <a href="javascript:void(0)" class="item-partner" data-id="2289" data-toggle="modal" data-target="#partnerModal">
                                    <img width="210" height="120" src="https://univn.vn/wp-content/uploads/2022/12/LogoHIWIN.jpg" class="attachment-thumbnail_large size-thumbnail_large wp-post-image" alt="" decoding="async" loading="lazy" />
                                    <div class="overlay">Xem chi tiết</div>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <a href="javascript:void(0)" class="item-partner" data-id="2291" data-toggle="modal" data-target="#partnerModal">
                                    <img width="210" height="120" src="https://univn.vn/wp-content/uploads/2022/12/LogoBABILALA.jpg" class="attachment-thumbnail_large size-thumbnail_large wp-post-image" alt="" decoding="async" loading="lazy" />
                                    <div class="overlay">Xem chi tiết</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>

@endsection
