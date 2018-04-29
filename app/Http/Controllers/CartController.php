<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Coupon;
use LukePOLO\LaraCart\Facades\LaraCart;
use LukePOLO\LaraCart\Coupons\Fixed;
use LukePOLO\LaraCart\Coupons\Percentage;
use Illuminate\Support\Facades\Session;
class CartController extends Controller
{
  public function index()
    {
      return view('home.cart');
    }
    public function add(Request $request)
    {
      if ($request->isMethod('post'))
      {
            $id = $request->productID;
            $size = $request->size;
            $qty = $request->qty;
            $items =  LaraCart::add(
                            $itemID=$id,
                            $name = null,
                            $qty = $qty,
                            $price = '0.00',
                            $options = ['size' => $size],
                            $taxable = false,
                            $lineItem = false
                          );
      }
    }

    public function AddClubPoint(Request $request)
    {
      $point = new Fixed($request->CouponCode, $request->CouponValue, [
        'description' => $request->Description]);
      LaraCart::addCoupon($point);
      Session::flash('c_point', 'added');
      return back();
    }
    public function addCoupon(Request $request)
    {
      // $coupon = Coupon::where('code',$request->coupon_code)->first();
      // LaraCart::addCoupon($coupon);
      // return back();

    }
    public function RemoveClubPoint(Request $request)
    {
      # code...
    }
    public function CartUpdate(Request $request)
    {
      if ($request->isMethod('post')){
        $qty = $request->qty;
        $itemHash = $request->itemHash;

        LaraCart::updateItem($itemHash, 'qty', $qty);
      }
    }
    public function delete($itemHash)
    {
      LaraCart::removeItem($itemHash);
      return back();
    }

    public function ClearCart()
    {
      LaraCart::emptyCart();
      return back();
    }

    public function Checkout()
    {
      return view('home.checkout.checkout');
    }

    public function CheckoutLogin(Request $request)
    {
      return view('home.checkout.checkout-login');
    }
    public function CheckoutShipping(Request $request)
    {

      return view('home.checkout.checkout-shipping');
    }
    public function CheckoutPayment(Request $request)
    {
      return view('home.checkout.checkout-payment');
    }
    public function CheckoutReview(Request $request)
    {
      return view('home.checkout.checkout-review');
    }

}
