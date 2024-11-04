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

    public function getProduct($id){
        $product = Product::find($id);
        if(!$product){
            return response()->json(['msn'=>'Product not found', 404]);
        }
        return response()->json($product);
    }

    public function destroyProduct($id){
        $product = Product::find($id);
        if(!$product){
            return response()->json(['msn'=>'Product not found', 404]);
        }
        $product -> delete();
        return response()->json(['msn'=>'Producto elimindao']);
    }

    public function updateProduct($id, Request $request){
        $product = Product::find($id);
        if(!$product){
            return response()->json(['msn'=>'Product not found', 404]);
        }
        $product->update($request->all());
        return response()->json($product);
    }
}
