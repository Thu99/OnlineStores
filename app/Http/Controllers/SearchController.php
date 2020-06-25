<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function Search(Request $request)
    {
        $search = $request->input('name');

        $product = DB::table('products')->where('product_name', 'like', '%' . $search . '%')->get();

        return view('welcome', [
            'product' => $product
        ]);
    }

    public function price(Request $request)
    {
        $search = $request->input('search');

        if ($search == "2to5") {
            $product = DB::table('products')->whereBetween('price', [2000000, 5000000])->get();
            return view('welcome', [
                'product' => $product
            ]);
        }
        if ($search == "5to10") {
            $product = DB::table('products')->whereBetween('price', [5000000, 10000000])->get();
            return view('welcome', [
                'product' => $product
            ]);
        }

        if ($search == "10to15") {
            $product = DB::table('products')->whereBetween('price', [10000000, 15000000])->get();
            return view('welcome', [
                'product' => $product
            ]);
        }
        if ($search == "15to20") {
            $product = DB::table('products')->whereBetween('price', [15000000, 20000000])->get();
            return view('welcome', [
                'product' => $product
            ]);
        }
        if ($search == "over20") {
            $product = DB::table('products')->whereBetween('price', [20000000, 200000000])->get();
            return view('welcome', [
                'product' => $product
            ]);
        }
    }
}
