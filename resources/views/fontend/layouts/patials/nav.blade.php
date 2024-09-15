<a class="navbar-brand order-1" href="{{ route('member.home') }}">
    <img class="img-fluid" width="100px" src="{{ asset('fontend/images/logo.png') }}"
        alt="Reader | Hugo Personal Blog Template">
</a>
<div class="collapse navbar-collapse text-center order-lg-2 order-3" id="navigation">
    <ul class="navbar-nav mx-auto">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('member.home') }}" role="button" data-toggle=""
                aria-haspopup="true" aria-expanded="false">
                Trang chủ
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="about" role="button" data-toggle=""
                aria-haspopup="true" aria-expanded="false">
                Giới thiệu
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="contact">Liên hệ</a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Thể loại <i class="ti-angle-down ml-1"></i>
            </a>
            <div class="dropdown-menu">

                <a class="dropdown-item" href="tag">Tin mới nhất</a>

                <a class="dropdown-item" href="tag">Thể thao</a>

                <a class="dropdown-item" href="tag">Kinh doanh</a>

                <a class="dropdown-item" href="tag">Xã hội</a>

                <a class="dropdown-item" href="tag">Thế giới</a>

                <a class="dropdown-item" href="tag">Giải trí</a>

                <a class="dropdown-item" href="tag">Sức khỏe</a>

                <a class="dropdown-item" href="tag">Việc làm</a>

                <a class="dropdown-item" href="tag">Giáo dục</a>

                <a class="dropdown-item" href="tag">An ninh</a>

                <a class="dropdown-item" href="tag">Pháp luật</a>

                <a class="dropdown-item" href="404.html">404 Page</a>

            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Đăng ký</a>
        </li>
    </ul>
</div>

<div class="order-2 order-lg-3 d-flex align-items-center">
    <select class="m-2 border-0 bg-transparent" id="select-language">
        <option id="en" value="" selected>VN</option>
        <option id="fr" value="">EN</option>
    </select>

    <!-- search -->
    <form class="search-bar">
        <input id="search-query" name="s" type="search"
            placeholder="Tìm &amp; kiếm">
    </form>

    <button class="navbar-toggler border-0 order-1" type="button" data-toggle="collapse"
        data-target="#navigation">
        <i class="ti-menu"></i>
    </button>

    <form action="{{ route('logout') }}" method="post">
        @csrf

        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
</div>
