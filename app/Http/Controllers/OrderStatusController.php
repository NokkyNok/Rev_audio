<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use DB;


class OrderStatusController extends Controller
{
    public function complete()
    {
        $c_orders = Order::where('is_paid',1)->get();
        return view('Admin.Orders.complete_orders',compact('c_orders'));
    }
    public function editcom($id)
    {
    
        $details = DB::table('order_items')->where('order_id',$id)->get();
        return view('Admin.Orders.details.show',compact('details'));
        
    }

    


    //pendings function//
    public function pending()
    {
        $p_orders = Order::where('is_paid',0)->get();

        return view('Admin.Orders.pending_orders',compact('p_orders'));
    }
    
}
