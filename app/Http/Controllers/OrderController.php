<?php

namespace App\Http\Controllers;

use App\Order;
use Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return view('Admin.Orders.general_orders',compact('orders'));      //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $order = new Order;

        $order->Order_number = uniqid('OrderNumber-');
        $order->user_id = Auth::id();
        $order->user_email = Auth::user()->email;
        $order->grand_total = \Cart::session(Auth::id())->getTotal();
        $order->item_count= \Cart::session(Auth::id())->getContent()->count();

        $order->save();

        $cartItems = \Cart::session(Auth::id())->getContent();

        foreach ($cartItems as $item)
        {
            $order->items()->attach($item->id,['price'=> $item->price, 'Filename'=>$item->name, 'quantity'=>$item->quantity]);
        }



        return redirect(route('paypal.checkout',$order->id));

        

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
