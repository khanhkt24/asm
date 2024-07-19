@extends('fontend.layouts.tag')

@section('tag-content')
<section class="section">
    <div class="py-4"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8  mb-5 mb-lg-0">
                <h1 class="h2 mb-4">Hiển thị các mục từ <mark>Tin mới nhất</mark></h1>
                <article class="card mb-4">
                    <div class="post-slider">
                        <img src="fontend/images/post/post-7.jpg" class="card-img-top" alt="post-thumb">
                    </div>
                    <div class="card-body">
                        <h3 class="mb-3"><a class="post-title" href="detail">Lời khuyên từ tuổi đôi mươi
                            Thứ gì đó</a></h3>
                        <ul class="card-meta list-inline">
                            <li class="list-inline-item">
                                <a href="author-single.html" class="card-meta-author">
                                    <img src="fontend/images/john-doe.jpg">
                                    <span>Hồng Đăng</span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <i class="ti-timer"></i>7 phút để đọc
                            </li>
                            <li class="list-inline-item">
                                <i class="ti-calendar"></i>15 july, 2024
                            </li>
                            <li class="list-inline-item">
                                <ul class="card-meta-tag list-inline">
                                    <li class="list-inline-item"><a href="tags.html">TIn mới nhất</a></li>
                                    <li class="list-inline-item"><a href="tags.html">Sức khỏe</a></li>
                                    <li class="list-inline-item"><a href="tags.html">Giải trí</a></li>
                                </ul>
                            </li>
                        </ul>
                        <p>Không có gì bí mật khi ngành công nghiệp kỹ thuật số đang bùng nổ. Từ khởi nghiệp thú vị đến toàn cầu
                            các thương hiệu, công ty đang tiếp cận với các đại lý kỹ thuật số, đáp ứng xu hướng mới
                            khả năng có sẵn</p>
                        <a href="detail" class="btn btn-outline-primary">Đọc ngay</a>
                    </div>
                </article>
                <article class="card mb-4">
                    <div class="post-slider">
                        <img src="fontend/images/post/post-8.jpg" class="card-img-top" alt="post-thumb">
                        <img src="fontend/images/post/post-9.jpg" class="card-img-top" alt="post-thumb">
                    </div>
                    <div class="card-body">
                        <h3 class="mb-3"><a class="post-title" href="detail">Cách làm bánh nướng nhỏ
                            và Công thức làm cashmere tại nhà</a></h3>
                        <ul class="card-meta list-inline">
                            <li class="list-inline-item">
                                <a href="author-single.html" class="card-meta-author">
                                    <img src="fontend/images/john-doe.jpg" alt="John Doe">
                                    <span>John Doe</span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <i class="ti-timer"></i>10 phút để đọc
                            </li>
                            <li class="list-inline-item">
                                <i class="ti-calendar"></i>14 july, 2024
                            </li>
                            <li class="list-inline-item">
                                <ul class="card-meta-tag list-inline">
                                    <li class="list-inline-item"><a href="tags.html">TIn mới nhất</a></li>
                                    <li class="list-inline-item"><a href="tags.html">Sức khỏe</a></li>
                                    <li class="list-inline-item"><a href="tags.html">Giải trí</a></li>
                                </ul>
                            </li>
                        </ul>
                        <p>Không có gì bí mật khi ngành công nghiệp kỹ thuật số đang bùng nổ. Từ khởi nghiệp thú vị đến toàn cầu
                            các thương hiệu, công ty đang tiếp cận với các đại lý kỹ thuật số, đáp ứng xu hướng mới
                            khả năng có sẵn</p>
                        <a href="detail" class="btn btn-outline-primary">Đọc ngay</a>
                    </div>
                </article>
                <article class="card mb-4">
                    <div class="post-slider">
                        <img src="fontend/images/post/post-1.jpg" class="card-img-top" alt="post-thumb">
                    </div>
                    <div class="card-body">
                        <h3 class="mb-3"><a class="post-title" href="post/post-1/">Dùng táo để tặng của bạn
                            nướng caramel và nó sẽ có kết cấu mềm ngon!</a></h3>
                        <ul class="card-meta list-inline">
                            <li class="list-inline-item">
                                <a href="author-single.html" class="card-meta-author">
                                    <img src="fontend/images/john-doe.jpg">
                                    <span>Nguyễn Hằng</span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <i class="ti-timer"></i>4 phút để đọc
                            </li>
                            <li class="list-inline-item">
                                <i class="ti-calendar"></i>13 july, 2024
                            </li>
                            <li class="list-inline-item">
                                <ul class="card-meta-tag list-inline">
                                    <li class="list-inline-item"><a href="tags.html">TIn mới nhất</a></li>
                                    <li class="list-inline-item"><a href="tags.html">Sức khỏe</a></li>
                                    <li class="list-inline-item"><a href="tags.html">Giải trí</a></li>
                                </ul>
                            </li>
                        </ul>
                        <p>Không có gì bí mật khi ngành công nghiệp kỹ thuật số đang bùng nổ. Từ khởi nghiệp thú vị đến toàn cầu
                            các thương hiệu, công ty đang tiếp cận với các đại lý kỹ thuật số, đáp ứng xu hướng mới
                            khả năng có sẵn</p>
                        <a href="detail" class="btn btn-outline-primary">Đọc ngay</a>
                    </div>
                </article>
            </div>

            <aside class="col-lg-4 @@sidebar">
                <!-- Search -->
                <div class="widget">
                    <h4 class="widget-title"><span>Tìm kiếm</span></h4>
                    <form action="#!" class="widget-search">
                        <input class="mb-3" id="search-query" name="s" type="search"
                            placeholder="Nhập &amp; từ cần tìm kiếm">
                        <i class="ti-search"></i>
                        <button type="submit" class="btn btn-primary btn-block">Tìm kiếm</button>
                    </form>
                </div>

                <!-- about me -->
                <div class="widget widget-about">
                    <h4 class="widget-title">Khổng Trọng Khánh</h4>
                    <img class="img-fluid" src="fontend/images/My.jpg" alt="Themefisher">
                    <p>Để trưởng thành được như ngày hôm nay chắc hẳn bạn đã trải qua rất nhiều những vấp ngã và tổn thương.
                         Vậy để vượt qua những lúc như vậy, chúng ta cần có đọng lực để bước tiếp.</p>
                    <ul class="list-inline social-icons mb-3">

                        <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>

                        <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt"></i></a></li>

                        <li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>

                        <li class="list-inline-item"><a href="#"><i class="ti-github"></i></a></li>

                        <li class="list-inline-item"><a href="#"><i class="ti-youtube"></i></a></li>

                    </ul>
                    <a href="about-me.html" class="btn btn-primary mb-2">About me</a>
                </div>

                <!-- Search -->

                <div class="widget">
                    <h4 class="widget-title"><span>Không bao giờ lỡ tin mới nhất</span></h4>
                    <form action="#!" method="post" name="mc-embedded-subscribe-form" target="_blank"
                        class="widget-search">
                        <input class="mb-3" id="search-query" name="s" type="search"
                            placeholder="Email của bạn">
                        <i class="ti-email"></i>
                        <button type="submit" class="btn btn-primary btn-block" name="subscribe">Theo dõi ngay</button>
                        <div style="position: absolute; left: -5000px;" aria-hidden="true">
                            <input type="text" name="b_463ee871f45d2d93748e77cad_a0a2c6d074" tabindex="-1">
                        </div>
                    </form>
                </div>

                <!-- categories -->
                <div class="widget widget-categories">
                    <h4 class="widget-title"><span>Danh mục</span></h4>
                    <ul class="list-unstyled widget-list">
                        <li><a href="tag" class="d-flex">Tin mới nhất <small class="ml-auto">(4)</small></a>
                        </li>
                        <li><a href="tag" class="d-flex">Thể thao <small class="ml-auto">(1)</small></a></li>
                        <li><a href="tag" class="d-flex">Kinh doanh <small class="ml-auto">(1)</small></a>
                        </li>
                        <li><a href="tag" class="d-flex">Giải trí<small class="ml-auto">(1)</small></a></li>
                        <li><a href="tag" class="d-flex">Xã hội <small class="ml-auto">(1)</small></a>
                        </li>
                        <li><a href="tag" class="d-flex">Sức khỏe <small class="ml-auto">(3)</small></a>
                        </li>
                        <li><a href="tag" class="d-flex">Việc làm <small class="ml-auto">(1)</small></a></li>
                        <li><a href="tag" class="d-flex">Giáo dục <small class="ml-auto">(1)</small></a></li>

                        <li><a href="tag" class="d-flex">An ninh <small class="ml-auto">(2)</small></a></li>
                        <li><a href="tag" class="d-flex">Pháp luật <small class="ml-auto">(1)</small></a></li>


                    </ul>
                </div><!-- tags -->
                <div class="widget">
                    <h4 class="widget-title"><span>Các trang</span></h4>
                    <ul class="list-inline widget-list-inline widget-card">
                        <li class="list-inline-item"><a href="tag">Tin mới nhất</a></li>
                        <li class="list-inline-item"><a href="tag">Thể thao</a></li>
                        <li class="list-inline-item"><a href="tag">Kinh doanh</a></li>
                        <li class="list-inline-item"><a href="tag">Xã hội</a></li>
                        <li class="list-inline-item"><a href="tag">Thế giới</a></li>
                        <li class="list-inline-item"><a href="tag">Giải trí</a></li>
                        <li class="list-inline-item"><a href="tag">Sức khỏe</a></li>
                        <li class="list-inline-item"><a href="tag">Việc làm</a></li>
                        <li class="list-inline-item"><a href="tag">Giáo dục</a></li>
                        <li class="list-inline-item"><a href="tag">An ninh</a></li>
                        <li class="list-inline-item"><a href="tag">Pháp luật</a></li>

                    </ul>
                </div><!-- recent post -->


                <!-- Social -->
                <div class="widget">
                    <h4 class="widget-title"><span>Mạnh xã hội</span></h4>
                    <ul class="list-inline widget-social">
                        <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="ti-github"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="ti-youtube"></i></a></li>
                    </ul>
                </div>
            </aside>

        </div>
    </div>
</section>
@endsection
