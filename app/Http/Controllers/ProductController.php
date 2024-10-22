<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    public function getProducts(){
        $products = product::all();
        return response()->json($products);
    }

    public function newProduct(Request $request){
        $product = product::create($request->all());
        return response()->json($product);
    }
}
