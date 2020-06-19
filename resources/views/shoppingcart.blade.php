@extends('layouts.header_footer')
@section('content')

<div id="back"><i class="fa fa-home" aria-hidden="true"></i> <a href="index.html">Trang chủ</a>
    &rsaquo; <a href="shoppingcart.html">Giỏ Hàng</a>
</div>


@if (Cart::count() > 0 )

<div class="form-cart-big">
    <div class="container form-cart-small">
        <div class="text-right">
            <a href="{{route('destroyall')}} " style="font-size: 20px ; color:black;  text-decoration: none;">
                <strong>X</strong>
            </a>
        </div>
        <div class="card-body text-center">
            <div class="clearfix">
                <h3 class="float-left">GIỎ HÀNG CỦA BẠN</h3>
                <a href="{{route('welcome')}} " class="float-right" style="font-size: 20px;  text-decoration: none;">Mua
                    thêm sản phẩm khác</a>
            </div>
            <br>
            <br>
            <!--Product-->
            @foreach ($productCart as $productCart)


            <div class="row">
                <div class="col-2 text-center">
                    <img class="img-responsive img-thumbnail" src="{{asset('img/products/'.$productCart->model->img)}}"
                        alt=" prewiew" width="90px" height="90px" style="border: 1px solid #928C8C;">
                </div>
                <div class="col-3">
                    <h4 class="product-name"><strong>{{$productCart-> name}} </strong></h4>
                </div>
                <div class="col-7 text-md-right row">
                    <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                        <h5><strong>{{$productCart-> price}} </strong></h5>
                    </div>

                    <div class="col-4">

                        <div class="row">
                            <div class="col-4">
                                <form action="{{ route('cart.update',$productCart-> rowId)}} " method="post">
                                    <input type="hidden" name="operator" value="0">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" style="width:40px; height:40px">-</button>
                                </form>
                            </div>
                            <div class="col-4">
                                <h4>
                                    {{$productCart -> qty}}
                                </h4>
                            </div>
                            <div class="col-4">
                                <form action="{{ route('cart.update',$productCart->rowId)}} " method="POST">
                                    <input type="hidden" name="operator" value="1">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" style="width:40px; height:40px">+</button>
                                </form>
                            </div>
                        </div>
                    </div>



                    <div class="col-2 text-right">

                        <form action="{{ route('cart.destroy',$productCart->rowId)}} " method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger btn-xs"> <i
                                    class="fas fa-times"></i></i></button>

                        </form>

                    </div>
                </div>
            </div>
            <hr>
            @endforeach



            <div class="clearfix">
                <div class="float-right"> Tổng tiền : <b>{{Cart::subtotal()}}</b></div>
            </div>
            <hr>
            <div class="clearfix">
                <h3 class="float-left">THÔNG TIN KHÁCH HÀNG</h3>
            </div>
            <br>
            <form action="{{ route('checkout.store')}}" method="post">
                @csrf
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label  text-left">Họ và tên</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" placeholder="Nhập họ và tên"
                            autocomplete="off">
                        @error('name') <p class="text-left" style="color:red">Bạn chưa nhập tên</p> @enderror
                    </div>

                </div>


                <div class="form-group row">
                    <label for="phone" class="col-sm-2 col-form-label  text-left">Số điện thoại</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="phone" placeholder="Nhập số điện thoại"
                            autocomplete="off">
                        @error('phone') <p class="text-left" style="color:red">Bạn chưa nhập số điện thoại</p> @enderror
                    </div>
                </div>
                <div class="form-group row ">
                    <label for="address" class="col-sm-2 col-form-label  text-left">Địa chỉ</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="address" placeholder="Nhập địa chỉ nhận hàng"
                            autocomplete="off">
                        @error('name') <p class="text-left" style="color:red">Bạn chưa nhập địa chỉ</p> @enderror
                    </div>
                </div>

                <div class="form-group row ">
                    <label for="notes" class="col-sm-2 col-form-label  text-left">Ghi chú </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="notes" placeholder="Nhập ghi chú khi nhận hàng"
                            autocomplete="off">

                    </div>
                </div>

                <button class="btn btn-outline-success">THANH TOÁN</button>
            </form>
        </div>
    </div>
</div>
@else
<div class="col-12 text-center" style="height: 260px">
    <P>Không có sản phẩm nào trong giỏ hàng của bạn</P>

    <a href="{{route('welcome')}}" class="btn btn-outline-success ">
        Về trang chủ
    </a>
</div>
@endif
@endsection