<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetail;

class BasketController extends Controller
{
    protected $fillable=['item_id', 'order_id', 'price', 'amount', 'address', 'phone', 'date'];


    function checkout(Request $request)
    {
        if(isset($_COOKIE['basket'])) // проверяем, есть ли заказы
        {
            $orders = $_COOKIE['basket'];
            $orders=json_decode($orders); //перекодируем строку из куки в массив с объектами
        }
        else
        {
            return redirect('/'); //если заказ пустой, то редиректим на главную страницу
        }

        $ids=[]; //все идентификаторы товаров
        $amount=[];//количество товаров
        $total_cost=0; //общая цена заказа
        $order_id=Order::latest()->first();//получаем последний заказ

        empty($order_id)? $order_id=1:$order_id=$order_id->id+1; //определяемся с новым заказом, увеличивая номер последнего заказа на 1

        foreach($orders as $order)
        {
            $ids[]=$order->item_id;//создаем массив из id заказанных товаров
            $amount[$order->item_id]=$order->amount; //создаем массив с количеством каждого товара ['id товара'=>'количество товара']
        }



        $items=Product::whereIn('id',$ids)->get(); //выбираем все заказанные товары из базы


        foreach($items as $item)
        {
            $total_cost=$total_cost+$item->price*$amount[$item->id];
//            $orders=Order::create(['item_id'=>$item->id,'price'=>$item->price,'order_id'=>$order_id,'amount'=>$amount[$item->id],'name'=>$request->name,'address'=>$request->address,'phone'=>$request->phone]);//сохраняем заказ в базу

//            Order::create(['date'=>date("Y-m-d H:i:s"), 'address'=>$request->address, 'name'=>$request->name, 'phone'=>$request->phone,'total_price'=>$total_cost, 'user_id'=>Auth::user()->id , 'status'=>'in processing']);

            $orders=OrderDetail::create(['product_id'=>$item->id,'product_price'=>$item->price,'product_name'=>$item->name, 'order_id'=>$order_id, 'product_quantity'=>$amount[$item->id] ]);
        }

        Order::create(['address'=>$request->address, 'name'=>$request->name, 'phone'=>$request->phone,'total_price'=>$total_cost, 'user_id'=>Auth::user()->id , 'status'=>'in processing']);

        setcookie('basket',''); //удаляем куки
        $orders=Order::where('id',$orders->order_id)->get();//получаем только, что добавленный заказ
        return view('cabinet.finish_order',['orders'=>$orders])->with('activemenu','cabinet');
    }
}
