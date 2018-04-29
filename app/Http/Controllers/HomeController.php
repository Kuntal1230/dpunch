<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Product;
use App\Review;
use App\Slider;
use App\Banner;
use App\Promote;
use App\Category;
use App\Subcategory;
use App\Singlepage;
use App\Categorybanner;
use App\Undersubcategory;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $mobilebanner = Categorybanner::where('category','mobile')->get();
      $fashionbanner = Categorybanner::where('category','fashion')->get();
      $computersbanner = Categorybanner::where('category','computers')->get();
      $electronicsbanner = Categorybanner::where('category','electronics')->get();
      $entertainmentbanner = Categorybanner::where('category','entertainment')->get();
      $carsbanner = Categorybanner::where('category','cars')->get();
      $slider = Slider::all();
      $banner = Banner::all();
      $promotes = Promote::status()->get();
      $mobile_tablets = Product::status()->where('category_id','1')->take(6)->get();
      $computers = Product::status()->where('category_id','2')->take(6)->get();
      $electronic_appliances = Product::status()->where('category_id','3')->take(6)->get();
      $entertainments = Product::status()->where('category_id','4')->take(6)->get();
      $dailyneeds = Product::status()->where('category_id','5')->take(6)->get();
      $fashionbeautys = Product::status()->where('category_id','6')->take(6)->get();
      $carbikes = Product::status()->where('category_id','7')->take(6)->get();
        return view('home.home',compact('promotes','mobilebanner','fashionbanner','computersbanner','electronicsbanner','entertainmentbanner','carsbanner','slider','banner','mobile_tablets','computers','electronic_appliances','entertainments','dailyneeds','fashionbeautys','carbikes'));
    }

    public function CategoryWise($category)
    {
      $category = Category::where('slug',$category)->first();
      $categoryproducts = Product::where('category_id',$category->id)->get();
      return view('home.category-wise',compact('category','categoryproducts'));
    }

    public function SubCategoryWise($category,$subcategory)
    {
      // $category = Category::where('slug',$category)->first();
      $subcategory = Subcategory::where('slug',$subcategory)->first();
      $subcategoryproducts = Product::where('subcategory_id',$subcategory->id)->get();
      return view('home.subcategory-wise',compact('subcategory','subcategoryproducts'));
    }
    public function ChildcategoryWise($category,$subcategory,$childcategory)
    {
      $childcategory = Undersubcategory::where('slug',$childcategory)->first();
      $childcategoryproducts = Product::where('undersubcategory_id',$childcategory->id)->get();
      // dd($childcategoryproducts);
      return view('home.childcategory-wise',compact('childcategory','childcategoryproducts'));
    }

    public function SingleProduct($sku,$slug)
    {
      $singleProduct = Product::where('sku',$sku)->first();
      $avgrating = Review::where('product_id', $singleProduct->id)->avg('rating');
      $reviewcount = Review::where('product_id', $singleProduct->id)->count();
      $reletedproduct = Product::status()->where('subcategory_id',$singleProduct->subcategory_id)->get();
      return view('home.single-product',compact('singleProduct','avgrating','reviewcount','reletedproduct'));
    }

    public function SingleProductReview(Request $request,$sku)
    {
      $product = Product::where('sku',$sku)->first();
      $review = new Review;
      $review->product_id = $product->id;
      $review->user_id = 1;
      $review->rating = $request->rating;
      $review->title = $request->title;
      $review->comment =$request->detail;
      $review->save();
      Session::flash('message', 'Review add Successfully!');
      return back();

    }

    public function Singlepage($slug)
    {
      $page = Singlepage::where('slug',$slug)->first();
      return view('home.single-page',compact('page'));
    }
    public function SearchProduct()
    {
      $q = Input::get('q');
      $product = Product::where('title', 'like', "%{$q}%")->get();
      return view('home.search-product',compact('product'));
    }
}
