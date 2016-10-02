<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

use App\Http\Requests;

class ShopController extends Controller
{
    public function index(){
        return redirect()->route('shop-category', 'all');
    }

    public function shopCategory($category_slug, $sort='newest'){
        if ($category_slug=='all') {
            if ($sort == 'newest')
                $products = Product::orderBy('created_at', 'asc')->paginate(9);
            elseif ($sort == 'by-name')
                $products = Product::orderBy('name', 'asc')->paginate(9);
            elseif ($sort == 'price-low')
                $products = Product::orderBy('price', 'asc')->paginate(9);
            elseif ($sort == 'price-high')
                $products = Product::orderBy('price', 'desc')->paginate(9);
        }
        else{
            if ($sort == 'newest')
                $products = Product::where('category_slug','=' ,$category_slug)->orderBy('created_at','asc')->paginate(9);
            elseif ($sort == 'by-name')
                $products = Product::where('category_slug','=' ,$category_slug)->orderBy('name','asc')->paginate(9);
            elseif ($sort == 'price-low')
                $products = Product::where('category_slug','=' ,$category_slug)->orderBy('price','asc')->paginate(9);
            elseif ($sort == 'price-high')
                $products = Product::where('category_slug','=' ,$category_slug)->orderBy('price','desc')->paginate(9);
        }


        $categories = Category::all();
        return view('shop.shop', ['categories' => $categories], ['products' => $products])->with('activecategory', $category_slug)->with('sort', $sort)->with('activemenu','shop');
    }

    public function shopSearch(Request $request){
        $products = Product::where('name','like','%'.$request->searchitem.'%')->get();
        return view('shop.search', ['products' => $products])->with('search', $request->searchitem)->with('activemenu','shop');
    }

}
