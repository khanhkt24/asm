<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- link css -->
    <link rel="stylesheet" href="dangnhap/style.css">

    <!-- link icon -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"
        integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <div class="container">
        <div class="box">
            <div class="form sign_in">
                <h3>Đăng ký</h3>
                <span>Dùng email của bạn để đăng ký</span>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('register') }}" method="post" id="form_input">
                    @csrf
                    <div class="type">

                        <input type="text" name="name" placeholder="Tên đăng nhập" id="name">
                    </div>
                    <div class="type">

                        <input type="email" name="email" placeholder="Địa chỉ email" id="email">
                    </div>
                    <div class="type">
                        <input type="password" name="password" placeholder="Mật khẩu" id="password">
                    </div>

                    <div class="type">
                        <input type="password" name="password_confirmation" placeholder="Mật lại khẩu"
                            id="password_confirmation">
                    </div>

                    <button type="submit" class="btn bkg">Đăng ký</button>

                </form>
            </div>
            <div class="form sign_up">
                <h3>Đăng nhập</h3>
                <span>Với tài khoản của bạn</span>

                <form action="" method="post" id="form_input">
                    <div class="type">
                        <input type="email" placeholder="Nhập email" name="" id="email">

                    </div>
                    <div class="type">
                        <input type="password" placeholder="Mật khẩu" name="" id="password">
                    </div>

                    <div class="forgot">
                        <span>Quên mật khẩu?</span>
                    </div>
                    <a href="home" class="btn bkg" type="button">Đăng nhập</a>
                </form>
            </div>

        </div>

        <div class="overlay">
            <div class="page page_signIn">
                <h3>Welcome Back!</h3>
                <p>Để theo dõi chúng tôi, vui lòng đăng nhập bằng thông tin cá nhân của bạn</p>

                <button class="btn btnSign-in">Đăng ký <i class="bi bi-arrow-right"></i></button>
            </div>

            <div class="page page_signUp">
                <h3>Hello Friend!</h3>
                <p>Nhập thông tin cá nhân của bạn và bắt đầu hành trình với chúng tôi</p>

                <button class="btn btnSign-up">
                    <i class="bi bi-arrow-left"></i> Đăng nhập</button>
            </div>
        </div>
    </div>


    <!-- link script -->
    <script src="dangnhap/main.js"></script>
</body>

</html>
