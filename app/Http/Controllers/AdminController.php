<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
    }

    public function allSeller()
    {
      return view('admin.seller');
    }

    public function allProduct()
    {
      return view('admin.product');
    }

    public function allCustomer()
    {
      return view('admin.customer');
    }

    public function allOrder()
    {
      return view('admin.order');
    }
}
