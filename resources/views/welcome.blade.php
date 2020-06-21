@extends('layouts.header_footer')
@section('content')


<!---End header-->
@if(session()->has('successes'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Thông báo !</strong> {{session()->get('successes')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<br>
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-7" id="page-banner">
                <div>
                    <img class=" img" alt="" src="{{ asset('img/banner/banner1.jpg')}}">
                </div>
            </div>

            <div class=" col-5">

                <img class="img1" alt="" src="{{ asset('img/banner/banner2.png')}}">

                <img class="img1" alt="" src="{{ asset('img/banner/banner3.png')}}">
            </div>
        </div>

    </div>

</main>

<div class="filter">
    <div class="manu manu14">
        <a href="/dtdd-apple-iphone" data-id="80" class=""><img src="{{ asset('img/logo/iphone.jpg')}}"></a>
        <a href="/dtdd-samsung" data-id="2" class=""><img src="{{ asset('img/logo/samsung.jpg')}}"></a>
        <a href="/dtdd-oppo" data-id="1971" class=""><img src="{{ asset('img/logo/oppo.png')}}"></a>
        <a href="/dtdd-xiaomi" data-id="2235" class=""><img src="{{ asset('img/logo/xiaomi.jpg')}}"></a>
        <a href="/dtdd-vivo" data-id="2236" class=""><img src="{{ asset('img/logo/vivo.jpg')}}"></a>
        <a href="/dtdd-vsmart" data-id="17566" class=""><img src="{{ asset('img/logo/vsmart.png')}}"></a>
    </div>
</div>
<br>
<br>
<div class="container">

    <div class="row justify-content-center">

        <label style="font-weight: bold;">Chọn mức giá</label>
        &nbsp; &nbsp;
        <form action="/phanloai" method="get">
            <div class="input-group">
                <input type="hidden" name="search" class="form-control" value="5to30">
                <span class="input-group-prepend">
                    <button type="submit" class="btn btn-primary">Từ 5 đến 30 triệu</button>
                </span>
            </div>
        </form>


        <form action="/phanloai" method="get">
            <div class="input-group">
                <input type="hidden" name="search" class="form-control" value="5to30">
                <span class="input-group-prepend">
                    <button type="submit" class="btn btn-primary">Từ 5 đến 30 triệu</button>
                </span>
            </div>
        </form>

        <form action="/phanloai" method="get">
            <div class="input-group">
                <input type="hidden" name="search" class="form-control" value="5to30">
                <span class="input-group-prepend">
                    <button type="submit" class="btn btn-primary">Từ 5 đến 30 triệu</button>
                </span>
            </div>
        </form>

        <form action="/phanloai" method="get">
            <div class="input-group">
                <input type="hidden" name="search" class="form-control" value="5to30">
                <span class="input-group-prepend">
                    <button type="submit" class="btn btn-primary">Từ 5 đến 30 triệu</button>
                </span>
            </div>
        </form>

        <form action="/phanloai" method="get">
            <div class="input-group">
                <input type="hidden" name="search" class="form-control" value="5to30">
                <span class="input-group-prepend">
                    <button type="submit" class="btn btn-primary">Từ 5 đến 30 triệu</button>
                </span>
            </div>
        </form>

    </div>
</div>
<br>
<div class="container">
    <div class="row">
        @foreach ($product as $product)
        <div class="card col-sm-6 col-md-3 text-center list-product">
            <img class=" card-img-top mx-auto " src="{{asset('img/products/'.$product-> img_main)}}"
                alt="Card image cap" style="height: 180px; width: 180px;">
            <div class="card-body">
                <h5 class="card-title">{{$product-> product_name}} </h5>
                <h5 class="card-title">{{$product-> price}} đ</h5>
                <a href="/onlinestores/{{$product-> slug}}" class="btn btn-dark">XEM CHI TIẾT</a>
            </div>
        </div>
        @endforeach

    </div>
</div>
<br>



@endsection