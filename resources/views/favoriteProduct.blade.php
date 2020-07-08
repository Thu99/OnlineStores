@extends('layouts.header_footer')
@section('content')



<div class="form-cart-big">
    <div class="container form-cart-small">
        <div class="card-body text-center">
            <h3 style="color: red;">SẢN PHẨM YÊU THÍCH</h3>
            <br>
            <br>
            <!-- PRODUCT -->
            <hr>
            <div class="row">
                @foreach ($user->favoriteProduct as $fa)
                <div class="card col-sm-6 col-md-3 text-center list-product">
                    <img class=" card-img-top mx-auto " src="{{asset('img/products/'.$fa-> img_main)}}"
                        alt="Card image cap" style="height: 180px; width: 180px;">
                    <div class="card-body">
                        <h5 class="card-title">{{$fa-> product_name}} </h5>
                        <h5 class="card-title">{{number_format($fa-> price)}} ₫</h5>

                        <a href="/{{$fa-> slug}}" class="btn btn-dark col-8">XEM CHI TIẾT</a>


                    </div>
                </div>


                @endforeach


            </div>
            <br>
            <button class="btn btn-success"> Về trang chủ</button>
            <hr>
        </div>
    </div>
</div>
@endsection