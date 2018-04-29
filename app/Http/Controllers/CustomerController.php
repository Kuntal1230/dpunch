<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\Userinfo;
use App\Membership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $next_membership = Membership::findOrFail(Auth::user()->membership_id +1);
        return view('home.customer.dashboard',compact('next_membership'));
    }

    public function Information(Request $request)
    {
      return view('home.customer.information');
    }

    public function Address(Request $request)
    {
        return view('home.customer.address-book');
    }

    public function UpdateAddress(Request $request)
    {
      // return $request->all();
      $address = Userinfo::updateOrCreate([
        'user_id' => Auth::user()->id
      ],[
        'phonenum' => $request->phonenum,
        'address' => $request->street,
        'country' => $request->country,
        'region' => $request->region,
        'city' => $request->city,
        'postcode' => $request->postcode
      ]);

      return back();
    }

    public function Orderhistory(Request $request)
    {
      $orders = Order::where('user_id',Auth::user()->id)->orderBy('id', 'desc')->get();
      return view('home.customer.orders',compact('orders'));
    }

    public function Review(Request $request)
    {
      return view('home.customer.reviews');
    }

    public function Club(Request $request)
    {
      $next_membership = Membership::findOrFail(Auth::user()->membership_id +1);
      return view('home.customer.dpunch-club',compact('next_membership'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
