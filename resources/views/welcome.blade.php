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

            <div id="carouselExampleIndicators" class="col-7 carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 img" src="{{ asset('img/banner/banner12.png')}}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('img/banner/banner11.png')}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="{{ asset('img/banner/banner13.png')}}"
                            alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>




            <div class="col-5" style="padding:0px;">

                <img class="img1" alt="" src="{{ asset('img/banner/banner2.png')}}">

                <img class="img1" alt="" src="{{ asset('img/banner/banner3.png')}}">
            </div>
        </div>

    </div>

</main>


<div class="filter">
    <div class="manu manu14">
        <form action="{{route('search')}}" method="get">

            <input type="hidden" name="name" value="iPhone">
            <button><img src="{{ asset('img/logo/iphone.jpg')}}"></button>

        </form>

        <form action="{{route('search')}}" method="get">

            <input type="hidden" name="name" value="samsung">
            <button><img src="{{ asset('img/logo/samsung.jpg')}}"></button>

        </form>

        <form action="{{route('search')}}" method="get">

            <input type="hidden" name="name" value="oppo">
            <button><img src="{{ asset('img/logo/oppo.png')}}"></button>

        </form>

        <form action="{{route('search')}}" method="get">

            <input type="hidden" name="name" value="xiaomi">
            <button><img src="{{ asset('img/logo/xiaomi.jpg')}}"></button>

        </form>

        <form action="{{route('search')}}" method="get">

            <input type="hidden" name="name" value="vivo">
            <button><img src="{{ asset('img/logo/vivo.jpg')}}"></button>

        </form>

        <form action="{{route('search')}}" method="get">

            <input type="hidden" name="name" value="vsmart">
            <button><img src="{{ asset('img/logo/vsmart.png')}}"></button>

        </form>

    </div>
</div>

<br>
<br>
<div class="container">

    <div class="row justify-content-center">

        <label style="font-weight: bold;">Chọn mức giá</label>
        &nbsp; &nbsp;
        <form action="{{route('price')}} " method="get">
            <div class="input-group">
                <input type="hidden" name="search" class="form-control" value="2to5">
                <span class="input-group-prepend">
                    <button type="submit" class="btn btn-primary">Từ 2 đến 5 triệu</button>
                </span>
            </div>
        </form>


        <form action="{{route('price')}}" method="get">
            <div class="input-group">
                <input type="hidden" name="search" class="form-control" value="5to10">
                <span class="input-group-prepend">
                    <button type="submit" class="btn btn-primary">Từ 5 đến 10 triệu</button>
                </span>
            </div>
        </form>

        <form action="{{route('price')}}" method="get">
            <div class="input-group">
                <input type="hidden" name="search" class="form-control" value="10to15">
                <span class="input-group-prepend">
                    <button type="submit" class="btn btn-primary">Từ 10 đến 15 triệu</button>
                </span>
            </div>
        </form>

        <form action="{{route('price')}}" method="get">
            <div class="input-group">
                <input type="hidden" name="search" class="form-control" value="15to20">
                <span class="input-group-prepend">
                    <button type="submit" class="btn btn-primary">Từ 15 đến 20 triệu</button>
                </span>
            </div>
        </form>

        <form action="{{route('price')}}" method="get">
            <div class="input-group">
                <input type="hidden" name="search" class="form-control" value="over20">
                <span class="input-group-prepend">
                    <button type="submit" class="btn btn-primary">Trên 20 triệu</button>
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
                <h5 class="card-title">{{number_format($product-> price,0)}} ₫</h5>
                <a href="/onlinestores/{{$product-> slug}}" class="btn btn-dark">XEM CHI TIẾT</a>
            </div>
        </div>
        @endforeach

    </div>
</div>
<br>



@endsection