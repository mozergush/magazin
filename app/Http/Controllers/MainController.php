<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Post;
use App\Models\Product;

class MainController extends Controller
{
    public function index(){
        $posts = Post::latest('published_at')
        ->where('published', '=', true)
        ->get()->reverse();

        $products = Product::latest('updated_at')->get()->reverse()->take(10);

        return view('main.main', ['posts' => $posts], ['products' => $products])->with('activemenu','main');
    }
}
