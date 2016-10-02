<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Product;

class ProductController extends Controller
{
    public function index($id){
        $products = Product::where('id','=' ,$id)->paginate(1);
        return view('product.product', ['products' => $products])->with('activemenu','product');
    }
}
