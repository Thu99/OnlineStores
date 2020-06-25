@extends('layouts.header_footer')
@section('content')



<div id="back"><i class="fa fa-home" aria-hidden="true"></i> <a href="index.html">Trang chủ</a>
    &rsaquo; <a href="shoppingcart.html">Giỏ Hàng</a>&rsaquo; <a href="{{route('cart.index')}} ">Thanh Toán</a>
</div>
<div class="form-cart-big">
    <div class="container form-cart-small">

        <div class="card-body text-center">
            <h3 style="color: red;">THÔNG TIN THANH TOÁN</h3>
            <br>
            <br>
            <!-- PRODUCT -->
            <div class="clearfix">
                <h5 class="float-left" style="black"> DANH SÁCH SẢN PHẨM</h5>
            </div>
            <hr>
            <div class="row">
                <div class="col-2 text-center">
                </div>
                <div class="col-4 text-center">
                    <h6 class="product-name">SẢN PHẨM</h6>
                </div>
                <div class="col-6 text-center row">
                    <div class="col-6 text-center">
                        <h6>SỐ LƯỢNG</h6>
                    </div>
                    <div class="col-6">
                        <h6>GIÁ</h6>
                    </div>

                </div>
            </div>
            <hr>


            <!-- PRODUCT -->
            @foreach ($productCart as $productCart)


            <div class="row">
                <div class="col-2 text-center">
                    <img class="img-responsive img-thumbnail"
                        src="{{asset('img/products/'.$productCart->model-> img_main)}}" alt="prewiew" width="60px"
                        height="60px" style="border: 1px solid #928C8C">
                </div>
                <div class="col-4">
                    <h6 class="product-name">{{$productCart->name}}</h6>
                </div>
                <div class="col-6 text-center row">
                    <div class="col-6">
                        <h6>{{$productCart-> qty}}</h6>
                    </div>
                    <div class="col-6">
                        <h6>{{number_format($productCart-> price)}} ₫</h6>
                    </div>
                </div>
            </div>
            <hr>
            @endforeach
            <!-- End PRODUCT -->

            <div class="clearfix">

                <div class="float-right"> Tổng tiền : <b>{{ Cart::subtotal()}} </b> ₫</div>

            </div>



            <hr>
            <div class="clearfix">
                <h5 class="float-left">KHÁCH HÀNG</h5>
            </div>
            <br>
            <form>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label text-left">Họ và tên</label>




                    <label for="name" class="col-sm-2 col-form-label">{{ Session::get('name') }}</label>



                </div>

                <div class="form-group row">
                    <label for="phone" class="col-sm-2 col-form-label text-left">Số điện thoại</label>
                    <label for="phone" class="col-sm-2 col-form-label">{{ Session::get('phone') }}</label>
                </div>

                <div class="form-group row ">
                    <label for="address" class="col-sm-2 col-form-label text-left">Địa chỉ</label>
                    <label for="address" class="col-sm-2 col-form-label">{{ Session::get('address') }}</label>

                </div>
                <div class="form-group row ">
                    <label for="notes" class="col-sm-2 col-form-label text-left">Ghi chú</label>
                    <label for="notes" class="col-sm-2 col-form-label">{{ Session::get('notes') }}</label>

                </div>
            </form>
            <form action="{{ route('order.store')}} " method="post">
                @csrf
                <input type="hidden" name="shipping_name" value="{{ Session::get('name') }}"></input>
                <input type="hidden" name="shipping_phone" value="{{ Session::get('phone') }}"></input>
                <input type="hidden" name="shipping_address" value="{{ Session::get('address') }}"></input>
                <input type="hidden" name="shipping_notes" value="{{ Session::get('notes') }}"></input>
                <input type="hidden" name="total" value="{{Cart::subtotal()}} "></input>


                <button class="btn btn-outline-success"> XÁC NHẬN THANH TOÁN</button>
            </form>




        </div>

    </div>
</div>
@endsection