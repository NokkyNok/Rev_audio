<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Auth;
use NunoMaduro\Collision\Provider;
use Srmklive\PayPal\Services\ExpressCheckout;
use Srmklive\PayPal\Services\AdaptivePayments;


class PaypalController extends Controller
{

    public function getExpressCheckout($orderId)
    {
        $checkoutData = $this->checkoutData($orderId);

        $provider = new ExpressCheckout();

        $response = $provider->setExpressCheckout($checkoutData);

        return redirect($response['paypal_link']);

        
    }
    public function checkoutData($orderId)
    {
        $cart = \Cart::session(auth()->id());

        $cartItems = array_map(function ($item) use($cart) {
            return [
                'name' => $item['name'],
                'price' => $item['price'],
                'qty' => $item['quantity']

            ];
        }, $cart->getContent()->toarray());



        $checkoutData = [
            'items' => $cartItems,
            'return_url' => route('paypal.success',$orderId),
            'cancel_url' => route('paypal.cancel'),
            'invoice_id' => uniqid(),
            'invoice_description' => " Order description ",
            'total' => $cart->getSubTotal(),
            

        ];

        return $checkoutData;
    }

    public function cancel()
    {
        dd('payment Failed');
    }

    public function getExpressCheckoutSuccess(Request $request, $orderId)
    {

        $token = $request->get('token');
        $payerId = $request->get('PayerID');
        $provider = new ExpressCheckout();
        $checkoutData = $this->checkoutData($orderId);
        $response = $provider->getExpressCheckoutDetails($token);

        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {

            // Perform transaction on PayPal
            $payment_status = $provider->doExpressCheckoutPayment($checkoutData, $token, $payerId);
            $status = $payment_status['PAYMENTINFO_0_PAYMENTSTATUS'];

            if(in_array($status, ['Completed','Processed']))
            {
                $order = Order::find($orderId);
                $order->is_paid = 1;
                $order->status = 'complete';
                $order->save();

                \Cart::session(auth()->id())->clear();


                return redirect()->route('client_order')->with('success','Payment received succesfully');

            }
            
                

            
        }
        
        return redirect()->route('cart.index')->with('warning','Payment Not succesful, try again');

    }
    //
}
