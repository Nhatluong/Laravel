<?php

namespace App\Http\Controllers;


use App\Category;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function showListProduct(){
        $products = Product::all();
        return view('product.list',["products" => $products]);
    }
    public function showAddForm(){
        $categories = Category::all();
        return view('product.add',["cate" => $categories] );
    }
    public function addProduct(Request $request){
        $product = new Product();
        $product->name = $request->input('name');
        $product->idCategory = $request->input('category');
        $product->price = $request->input('price');
        $product->promotionPrice = $request->input('promotion');
        $product->image = $request->input('image');
        $product->description = $request->input('description');
        $product->new = $request->input('new');
        $product->save();
        return redirect(route('product.list'));

    }
}
