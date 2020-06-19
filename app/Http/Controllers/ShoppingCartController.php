<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class ShoppingCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productCart = Cart::content();
        //   dd($productCart->toArray());
        return view('shoppingcart', ['productCart' => $productCart]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //B1.find product thought id of product
        $product = Product::findOrFail($request->id);

        //B2.store product information to Cart
        Cart::add($product->id, $product->product_name, 1, $product->price)->associate('\App\Product');
        return redirect()->route('cart.index')->with('success', 'Add product success ^^');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $rowId)
    {
        //get product entered

        $row = Cart::get($rowId);

        $quantity = $row->qty;
        if ($quantity < 5) {

            if ($request->operator == 1) {
                Cart::update($rowId, $row->qty + 1);
                return back();
            } else {
                Cart::update($rowId, $row->qty - 1);
                return back();
            }
        } else {
            return back();
        }

        // Cart::remove($rowId);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($rowId)
    {
        Cart::remove($rowId);
        return back()->with('sucess', 'Remove product success !');
    }
}
