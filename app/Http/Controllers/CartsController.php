<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trancribe;
use Auth;

class CartsController extends Controller
{
    public function index()
    {
        $cartitems= \Cart::session(Auth::id())->getContent();
        return view('Front.cart',compact('cartitems'));

    }

    public function add(Trancribe $file)
    {
        \Cart::session(Auth::id())->add(array(
            'id' => $file->id,
            'name' => $file->file,
            'price' => $file->cost,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $file
        ));
        return redirect()->route('cart.index');

    }

    public function adddirect(Trancribe $file)
    {
        \Cart::session(Auth::id())->add(array(
            'id' => $file->id,
            'name' => $file->file,
            'price' => $file->cost,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $file
        ));
        return redirect()->route('payment.index');

    }
    public function destroy($id)
    {
        \Cart::session(Auth::id())->remove($id);
         return redirect()->back();
        

    }

    
    //
}
