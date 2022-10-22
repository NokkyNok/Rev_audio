<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Auth;
use DB;

class ClientOrderController extends Controller
{

    public function index()
    {
        $orders = Order::where('user_id',Auth::id())->get();
        $order_count = Order::where('user_id',Auth::id())->count();
        return view('Front.orders',compact('orders','order_count'));
    }

    public function details($id)
    {
        $details = DB::table('order_items')->where('order_id',$id)->get();
        return view('Front.order_details',compact('details'));
    }
    //
}
