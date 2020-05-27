@extends('layouts.header_footer')
@section('content')
<br>
<div class="container  detail-product">
    @foreach ($product as $product)
    <h3>Điện thoại {{$product->product_name}}</h3>
    <hr>
    <br>
    <div class="row">

        <div class="col-6">
            <div id="productDeail" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#productDeail" data-slide-to="0" class="active"></li>
                    <li data-target="#productDeail" data-slide-to="1"></li>
                    <li data-target="#productDeail" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    @foreach ($product->image as $key=>$image )
                    <div class="carousel-item   {{$key == 0 ? 'active' : '' }}">
                        <img class=" d-block w-100" src="{{asset('img/products/'.$image-> url_image) }}"
                            alt="First slide">
                    </div>
                    @endforeach
                </div>

                <a class="carousel-control-prev" href="#productDeail" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#productDeail" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="col-6 my-right " style="font-size: 16px; font-weight: 500;">
            <h3 class="">Thông số kỹ thuật</h3>
            <br><br>
            <ul class="parameter">
                <li style="list-style: none;"><span>Màn hình:</span>
                    <span>{{$product-> screen}}</span>
                    <hr>
                </li>
                <li><span>Hệ điều hành:</span>
                    <span>{{$product-> operation_system}}</span>
                    <hr>
                </li>
                <li><span>Camera:</span>
                    <span>{{$product-> camera}}</span>
                </li>
                <hr>
                <li><span>CPU:</span>
                    <span>{{$product-> cpu}}</span>
                </li>
                <hr>
                <li><span>RAM:</span>
                    <span>{{$product-> ram}}</span>
                    <hr>
                </li>
                <li><span>Bộ nhớ trong:</span>
                    <span>{{$product-> memory}}</span>
                    <hr>
                </li>
                <li><span>Dung lượng pin:</span>
                    <span>{{$product-> battery_capacity}}</span>
                </li>
            </ul>
            <form action="mobile/cart/add" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$product-> id}} ">
                <button class="btn btn-success">Mua Ngay</button>
            </form>
        </div>

        @endforeach
    </div>
</div>
</div>
<br>
</div>

@endsection