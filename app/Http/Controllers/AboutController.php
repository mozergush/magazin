<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Service;

class AboutController extends Controller
{
   public function index() {
       $services = Service::where('published', '=', true)->get();

       return view('about.about', ['services' => $services])->with('activemenu', 'about');

   }

}
