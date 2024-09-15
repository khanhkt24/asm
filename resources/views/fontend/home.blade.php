@extends('fontend.layouts.master')

@section('content')
<section class="section pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-5">
                <h2 class="h5 section-title">Bài viết đã sửa</h2>
                <article class="card">
                    <div class="post-slider slider-sm">
                        <img src="fontend/images/post/post-1.jpg" class="card-img-top" alt="post-thumb">
                    </div>

                    <div class="card-body">
                        <h3 class="h4 mb-3"><a class="post-title" href="post-details.html">Dùng táo để làm
                            caramel nướng của bạn </a></h3>
                        <ul class="card-meta list-inline">
                            <li class="list-inline-item">
                                <a href="author-single.html" class="card-meta-author">
                                  <img src="fontend/images/john-doe.jpg">
                                  <span>Man za ha</span>
                                </a>
                              </li>
                            <li class="list-inline-item">
                                <i class="ti-timer"></i>6 lượt đọc
                            </li>
                            <li class="list-inline-item">
                                <i class="ti-calendar"></i>18 july, 2024
                            </li>
                            <li class="list-inline-item">
                                <ul class="card-meta-tag list-inline">
                                    <li class="list-inline-item"><a href="tags.html">Giải trí</a></li>
                                    <li class="list-inline-item"><a href="tags.html">Sức khỏe</a></li>
                                </ul>
                            </li>
                        </ul>
                        <p>Không có gì bí mật khi ngành công nghiệp kỹ thuật số đang bùng nổ…</p>
                        <a href="post-details.html" class="btn btn-outline-primary">Đọc ngay</a>
                    </div>
                </article>
            </div>
            <div class="col-lg-4 mb-5">
                <h2 class="h5 section-title">Bài viết thịnh hành</h2>

                <article class="card mb-4">
                    <div class="card-body d-flex">
                        <img class="card-img-sm" src="fontend/images/post/post-3.jpg">
                        <div class="ml-3">
                            <h4><a href="post-details.html" class="post-title">Lời khuyên từ tuổi đôi mươi</a>
                            </h4>
                            <ul class="card-meta list-inline mb-0">
                                <li class="list-inline-item mb-0">
                                    <i class="ti-calendar"></i>14 jan, 2020
                                </li>
                                <li class="list-inline-item mb-0">
                                    <i class="ti-timer"></i>2 lượt đọc
                                </li>
                            </ul>
                        </div>
                    </div>
                </article>

                <article class="card mb-4">
                    <div class="card-body d-flex">
                        <img class="card-img-sm" src="fontend/images/post/post-2.jpg">
                        <div class="ml-3">
                            <h4><a href="post-details.html" class="post-title">TFile Thiết Kế - Homes
                                tối giản</a></h4>
                            <ul class="card-meta list-inline mb-0">
                                <li class="list-inline-item mb-0">
                                    <i class="ti-calendar"></i>13 jan, 2024
                                </li>
                                <li class="list-inline-item mb-0">
                                    <i class="ti-timer"></i>3 lượt đọc
                                </li>
                            </ul>
                        </div>
                    </div>
                </article>

                <article class="card mb-4">
                    <div class="card-body d-flex">
                        <img class="card-img-sm" src="fontend/images/post/post-4.jpg">
                        <div class="ml-3">
                            <h4><a href="post-details.html" class="post-title">Bí mật gầy gò</a></h4>
                            <ul class="card-meta list-inline mb-0">
                                <li class="list-inline-item mb-0">
                                    <i class="ti-calendar"></i>14 jan, 2024
                                </li>
                                <li class="list-inline-item mb-0">
                                    <i class="ti-timer"></i>4 lượt đọc
                                </li>
                            </ul>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-lg-4 mb-5">
                <h2 class="h5 section-title">Bài viết phổ biến</h2>

                <article class="card">
                    <div class="post-slider slider-sm">
                        <img src="fontend/images/post/post-5.jpg" class="card-img-top" alt="post-thumb">
                    </div>
                    <div class="card-body">
                        <h3 class="h4 mb-3"><a class="post-title" href="post-details.html">Cách làm bánh nướng nhỏ
                            và Công thức làm cashmere tại nhà</a></h3>
                        <ul class="card-meta list-inline">
                            <li class="list-inline-item">
                                <a href="author-single.html" class="card-meta-author">
                                  <img src="fontend/images/My.jpg">
                                  <span>Khổng Trọng Khánh</span>
                                </a>
                              </li>
                            <li class="list-inline-item">
                                <i class="ti-timer"></i>5 lượt đọc
                            </li>
                            <li class="list-inline-item">
                                <i class="ti-calendar"></i>18 july, 2024
                            </li>
                            <li class="list-inline-item">
                                <ul class="card-meta-tag list-inline">
                                    <li class="list-inline-item"><a href="tags.html">Giải trí</a></li>
                                    <li class="list-inline-item"><a href="tags.html">Sức khỏe</a></li>
                                </ul>
                            </li>
                        </ul>
                        <p>Không có gì bí mật khi ngành công nghiệp kỹ thuật số đang bùng nổ…</p>
                        <a href="post-details.html" class="btn btn-outline-primary">Đọc ngay</a>
                    </div>
                </article>
            </div>
            <div class="col-12">
                <div class="border-bottom border-default"></div>
            </div>
        </div>
    </div>
</section>

<section class="section-sm">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8  mb-5 mb-lg-0">
                <h2 class="h5 section-title">Bài đăng gần đây</h2>
                <article class="card mb-4">
                    @foreach ($data as $item)
                    <div class="post-slider">
                        <img src="{{ Storage::url($item->image) }}" class="card-img-top" alt="post-thumb">
                    </div>
                    <div class="card-body">
                        <h3 class="mb-3"><a class="post-title" href="post-elements.html">{{ $item->name }}</a></h3>
                        <ul class="card-meta list-inline">
                            <li class="list-inline-item">
                                <a href="author-single.html" class="card-meta-author">
                                    <img src="fontend/images/john-doe.jpg" alt="John Doe">
                                    <span>John Doe</span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <i class="ti-timer"></i>{{ $item->view }}
                            </li>
                            <li class="list-inline-item">
                                <i class="ti-calendar"></i>{{ $item->date_add }}
                            </li>
                            <li class="list-inline-item">
                                <ul class="card-meta-tag list-inline">
                                    <li class="list-inline-item"><a href="tags.html">Sức khỏe</a></li>
                                    <li class="list-inline-item"><a href="tags.html">Giải trí</a></li>
                                </ul>
                            </li>
                        </ul>
                        <p>{{ $item->title }}</p>
                        <a href="{{ route('font.detal',$item->id) }}" class="btn btn-outline-primary">Read More</a>
                    </div>
                    @endforeach

                </article>


                <ul class="pagination justify-content-center">
                    <li class="page-item page-item active ">
                        <a href="#!" class="page-link">1</a>
                    </li>
                    <li class="page-item">
                        <a href="#!" class="page-link">2</a>
                    </li>
                    <li class="page-item">
                        <a href="#!" class="page-link">&raquo;</a>
                    </li>
                </ul>
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
