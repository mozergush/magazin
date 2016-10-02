<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cookie;
use App\Http\Requests;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetails;

class CabinetController extends Controller
{

    function show()
    {
        if(isset($_COOKIE['basket'])) // проверяем, есть ли заказы
        {
            $orders = $_COOKIE['basket'];
            $orders=json_decode($orders); //перекодируем строку из куки в массив с объектами
        }
        else
        {
            $orders=[];
        }
        return view('cabinet.cabinet',['orders'=>$orders])->with('activemenu', 'cabinet');
    }
}
