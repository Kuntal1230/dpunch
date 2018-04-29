<?php

namespace App\Http\Controllers;

use App\Order;
use App\Cartitem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use LukePOLO\LaraCart\Facades\LaraCart;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class OrderController extends Controller
{
  public function TemoData(Request $request)
  {
    // return session()->all();
    if ($request->pagetype == "shipping") {
      session([
        'address'=> [
          'firstname' => $request->firstname,
          'lastname' => $request->lastname,
          'email' => $request->email,
          'phonenum' => $request->phonenum,
          'address' => $request->address,
          'region' => $request->region,
          'city' => $request->city,
          'country' => $request->country,
          'postcode' => $request->postcode,
        ]
      ]);
      return redirect('checkout/shipping');
    }
    if ($request->pagetype == "payment") {
      session([
        'shipping' =>[
          'shipping_method' => $request->shipping_method,
        ]
      ]);
      return redirect('checkout/payment');
    }
    if ($request->pagetype == "review") {
      session([
        'payment' =>[
          'payment_methods' => $request->payment_methods,
        ]
      ]);
      return redirect('checkout/review');
    }

  }
    public function Order(Request $request)
    {
      if (session('shipping.shipping_method')=="regular_shipping") {
        LaraCart::addFee('deliveryFee', 100, $taxable =  false, $options = []);
        $fee = 100;
      }else {
        $fee = 0;
      }

      $orderID = "DPN".Auth::user()->id.date("s", time());
      $order = new Order;
      $order->order_id = $orderID;
      $order->user_id = Auth::user()->id;
      $order->firstname = session('address.firstname');
      $order->lastname = session('address.lastname');
      $order->phonenum = session('address.phonenum');
      $order->address = session('address.address');
      $order->state = session('address.region');
      $order->city = session('address.city');
      $order->country = session('address.country');
      $order->shipping_method = session('shipping.shipping_method');
      $order->payment_methods = session('payment.payment_methods');
      $order->total_price = LaraCart::total($withDiscount = false);
      $order->fees = $fee;
      $order->grand_total = LaraCart::total($formatted = false, $withDiscount = true);
      $order->status = 0;
      $order->save();
      foreach ($items = LaraCart::getItems() as $item) {
        $cartitem = new Cartitem;
        $cartitem->order_id = $order->id;
        $cartitem->product_id = $item->getModel()->id;
        $cartitem->qty = $item->qty;
        $cartitem->price = $item->price;
        $cartitem->color = $item->size;
        $cartitem->size = $item->size;
        $cartitem->save();
      }
      LaraCart::destroyCart();
      session()->flush('address');
      session()->flush('shipping');
      session()->flush('payment');
      Session::flash('ordermessage', 'Your order submited succesfully!');
      return redirect('/customer/order/history');

    }
}
