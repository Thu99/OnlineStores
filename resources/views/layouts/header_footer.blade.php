<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OnlineStores</title>
    <!-- CSS here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style-main.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<header>
    <div class="container-fluid" style="padding:20px;">
        <div class="row justify-content-end ">
            <div class="col-xl-2">
                <div class="logo">
                    <a href="{{route('welcome')}} ">OnlineStores</a>
                </div>
            </div>

            <div class="col-xl-5 col-lg-8 col-md-9 col-sm-5 my-col">
                <form action="{{route('search')}} " method="get">
                    <div class="input-group">

                        <input style="width: 500px;" name="name" autocomplete="off" class="form-control"
                            placeholder="Bạn tìm gì ...">
                        <span class="input-group-prepend">
                            <button type="submit" class="btn btn-dark"><i class="fa fa-search"
                                    aria-hidden="true"></i></button>
                        </span>

                    </div>
                </form>
            </div>

            <!----->
            <div class="col-xl-5 align-self-center my-col">
                @if (Route::has('login'))
                @auth
                <ul>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Đăng Xuất
                            </a>
                            <a class="dropdown-item" href="/favorite">
                                Sản phẩm yêu thích
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>




                @else
                <div class="login">
                    <a href="{{ route('login') }}">ĐĂNG NHẬP</a>
                </div>
                &nbsp;&nbsp;&nbsp;
                @if (Route::has('register'))
                <div class="signup">
                    <a style=" color:#F00F0F" href="{{ route('register') }}">ĐĂNG KÝ</a>
                </div>
                @endif
                @endauth
                @endif

                &nbsp;&nbsp;&nbsp;
                <div class="cart">
                    <a href="{{ route('cart.index') }}" class="btn btn-dark">

                        <span><i class="fas fa-shopping-cart"></i></span>
                        <span>Giỏ hàng</span>
                    </a>
                </div>
            </div>

        </div>
</header>
<!---End header-->


@yield('content')
<br>
<br>

<!---Footer-->

<footer>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <label class="font-weight-bold">Đăng ký nhận tin khuyến mãi</label>
                <br>
                <form action="" class="form-inline">
                    <div class="input-group">
                        <input style="width: 280px;" type="email" class="form-control"
                            placeholder="Nhập địa chỉ email ...">
                        <span class="input-group-prepend">
                            <button type="submit" class="btn btn-primary">Gửi</button>
                        </span>
                    </div>
                </form>
            </div>
            <div class="col-4"></div>
        </div>
        <br>

        <div id="footer-icon">
            <div class="text-center">
                <a href="#"> <i id="social-fb" class="fab fa-facebook-f social"></i></a>
                <a href="#"><i id="social-tw" class="fab fa-twitter  social"></i> </a></a>
                <a href="#"><i id="social-yt" class="fab fa-youtube  social"></i></a>
                <a href="#"><i id="social-in" class="fab fa-instagram  social"></i></class=></a>
            </div>

        </div>
    </div>
    <br>
</footer>

<br>

</body>

</html>