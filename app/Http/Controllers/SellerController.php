<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;
use App\Store;
use App\Brand;
use App\Product;
use App\Promote;
use App\Category;
use App\Subcategory;
use App\Undersubcategory;

class SellerController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth:seller');
  }
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      return view('seller.home');
  }

  public function storeStting()
  {
    $store = Store::where('seller_id', Auth::user()->id)->first();
      return view('seller.setting.general',compact('store'));
  }
  public function addStoreInfo(Request $request)
  {
    $image = $request->store_banar;
    if ($image != '') {
      $imageName = time().'-'.$image->getClientOriginalName();
      $path = base_path();
      $public_path = str_replace("dpunch", "dpunch.com", $path);
      $destinationPath = $public_path.'/store-banar';
      $img = Image::make($image->getRealPath());
      $img->resize(250, 250, function ($constraint) {
        $constraint->aspectRatio();})->save($destinationPath.'/'.$imageName);
    }
    $store_banar = "";
    if (isset($imageName) && $imageName != null) {
      $store_banar = $imageName;
    }
    $store = Store::firstOrNew(array('seller_id' => Auth::user()->id));
    $store->mobile = $request->mobile;
    $store->address = $request->address;
    $store->store_name = $request->store_name;
    $store->store_banar = $store_banar;
    $store->save();

    Session::flash('message', 'Store Info Update Successfully!');
    return back();
  }

  public function ajaxForSubCategory(Request $request)
  {
    if ($request->isMethod('post')){
      $cat_id= $request->id;
      $subcat = Subcategory::where('category_id', $cat_id)->get();
        return response()->json($subcat);
      }

      return response()->json(['response' => 'This is get method']);
  }

  public function ajaxForUnderSubCategory(Request $request)
  {
    if ($request->isMethod('post')){
      $subcat_id= $request->id;
      $undersubcat = Undersubcategory::where('subcategory_id', $subcat_id)->get();
        return response()->json($undersubcat);
      }

      return response()->json(['response' => 'This is get method']);
  }

  public function ajaxForBrand(Request $request)
  {
    if ($request->isMethod('post')){
      $unsubcat_id= $request->id;
      $brand = Brand::where('undersubcategory_id', $unsubcat_id)->get();
        return response()->json($brand);
      }

      return response()->json(['response' => 'This is get method']);

  }

  public function ajaxForBrandBySubcat(Request $request)
  {
    if ($request->isMethod('post')){
      $subcat_id= $request->id;
      $brand = Brand::where('subcategory_id', $subcat_id)->get();
        return response()->json($brand);
      }

      return response()->json(['response' => 'This is get method']);
  }

  public function allProduct()
  {
    $seller_name = Auth::guard('seller')->user()->name;
    $allprodutcs = Product::where('seller', $seller_name)->get();
    return view('seller.product',compact('allprodutcs'));
  }

  public function addProductForm()
  {
    $allcategory = Category::all();
    return view('seller.product-add',compact('allcategory'));
  }

  public function addProduct(Request $request)
  {
    // return $request->all();
    $productimage = array();
        if ($request->image != '') {
            foreach ($request->image as $image){
                $imageName = time().'-'.$image->getClientOriginalName();
                $productimage[] = $imageName;
                $path = base_path();
                $public_path = str_replace("dpunch", "dpunch.com", $path);
                $destinationPathsmall = $public_path .'/images/small';
                $destinationPaththumbnail = $public_path .'/images/thumbnail';
                $destinationPathzoom = $public_path .'/images/zoom';
                $img = Image::make($image->getRealPath());
                $img->resize(800, 800, function ($constraint) {
                  $constraint->aspectRatio();})->save($destinationPathzoom.'/'.$imageName);
                $img->resize(450, 450, function ($constraint) {
                  $constraint->aspectRatio();})->save($destinationPaththumbnail.'/'.$imageName);
                $img->resize(100, 100, function ($constraint) {
                  $constraint->aspectRatio();})->save($destinationPathsmall.'/'.$imageName);
            }
        }
        $image0="";
        $image1="";
        $image2="";
        $image3="";
        $image4="";
        $image5="";
        if (isset($productimage[0]) && $productimage[0] != null) {
          $image0 = $productimage[0];
        }
        if (isset($productimage[1]) && $productimage[1] != null) {
          $image1 = $productimage[1];
        }
        if (isset($productimage[2]) && $productimage[2] != null) {
          $image2 = $productimage[2];
        }
        if (isset($productimage[3]) && $productimage[3] != null) {
          $image3 = $productimage[3];
        }
        if (isset($productimage[4]) && $productimage[4] != null) {
          $image4 = $productimage[4];
        }
        if (isset($productimage[5]) && $productimage[5] != null) {
          $image4 = $productimage[5];
        }

        if (Auth::guard('seller')->check()) {
          $seller_name = Auth::guard('seller')->user()->name;
          $seller_id = Auth::guard('seller')->user()->id;
        }
        $subcategoris = Subcategory::findOrFail($request->subcategory_id);
        $subcategory = $subcategoris->name;
        $sku = "DPN".$seller_id.strtoupper(substr($subcategory,0,3)).date("s", time());

        $product = new Product;
        $product->seller = $seller_name;
        $product->sku = $sku;
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->undersubcategory_id = $request->undersubcategory_id;
        $product->brand_id = $request->brand_id;
        $product->product_condition = $request->product_condition;
        $product->product_origin = $request->product_origin;
        $product->title = $request->title;
        $product->slug = str_slug($request->title, "-");
        $product->color = $request->color;
        $product->main_price = $request->price;
        $product->discount = $request->discount;
        $product->price = $request->price-($request->price*($request->discount/100));
        $product->size_1 = $request->size_1;
        $product->size_2 = $request->size_2;
        $product->size_3 = $request->size_3;
        $product->size_4 = $request->size_4;
        $product->size_5 = $request->size_5;
        $product->size_6 = $request->size_6;
        $product->availability = $request->availability;
        $product->image0 = $image0;
        $product->image1 = $image1;
        $product->image2 = $image2;
        $product->image3 = $image3;
        $product->image4 = $image4;
        $product->image5 = $image5;
        $product->detailes = $request->detailes;
        $product->specification = $request->specification;
        $product->status = 0;
        $product->save();
        Session::flash('message', 'Product Add Successfully!');
        return back();
  }

  public function editProductForm($id)
  {
    $allcategory = Category::all();
    $product = Product::findOrFail($id);
    return view('seller.product-edit',compact('allcategory','product'));
  }

  public function updateProduct(Request $request,$id)
  {
        $prev_img0 = $request->prev_img0;
        $prev_img1 = $request->prev_img1;
        $prev_img2 = $request->prev_img2;
        $prev_img3 = $request->prev_img3;
        $prev_img4 = $request->prev_img4;
        $prev_img5 = $request->prev_img5;
        $productimage = array();
        if ($request->image != '') {
          if($prev_img0){
              unlink(base_path('dpunch.com/images/small'.$prev_img0));
              unlink(base_path('dpunch.com/images/thumbnail'.$prev_img0));
              unlink(base_path('dpunch.com/images/zoom'.$prev_img0));
              }
          if($prev_img1){
              unlink(base_path('dpunch.com/images/small'.$prev_img1));
              unlink(base_path('dpunch.com/images/thumbnail'.$prev_img1));
              unlink(base_path('dpunch.com/images/zoom'.$prev_img1));
              }
          if($prev_img2){
              unlink(base_path('dpunch.com/images/small'.$prev_img2));
              unlink(base_path('dpunch.com/images/thumbnail'.$prev_img2));
              unlink(base_path('dpunch.com/images/zoom'.$prev_img2));
              }
          if($prev_img3){
              unlink(base_path('dpunch.com/images/small'.$prev_img3));
              unlink(base_path('dpunch.com/images/thumbnail'.$prev_img3));
              unlink(base_path('dpunch.com/images/zoom'.$prev_img3));
              }
          if($prev_img4){
              unlink(base_path('dpunch.com/images/small'.$prev_img4));
              unlink(base_path('dpunch.com/images/thumbnail'.$prev_img4));
              unlink(base_path('dpunch.com/images/zoom'.$prev_img4));
              }
          if($prev_img5){
              unlink(base_path('dpunch.com/images/small'.$prev_img5));
              unlink(base_path('dpunch.com/images/thumbnail'.$prev_img5));
              unlink(base_path('dpunch.com/images/zoom'.$prev_img5));
              }
            foreach ($request->image as $image){
                $imageName = time().'-'.$image->getClientOriginalName();
                $productimage[] = $imageName;

                $path = base_path();
                $public_path = str_replace("dpunch", "dpunch.com", $path);
                $destinationPathsmall = $public_path .'/images/small';
                $destinationPaththumbnail = $public_path .'/images/thumbnail';
                $destinationPathzoom = $public_path .'/images/zoom';
                $img = Image::make($image->getRealPath());
                $img->resize(800, 800, function ($constraint) {
                  $constraint->aspectRatio();})->save($destinationPathzoom.'/'.$imageName);
                $img->resize(450, 450, function ($constraint) {
                  $constraint->aspectRatio();})->save($destinationPaththumbnail.'/'.$imageName);
                $img->resize(100, 100, function ($constraint) {
                  $constraint->aspectRatio();})->save($destinationPathsmall.'/'.$imageName);
            }
        }
        $image0=$prev_img0;
        $image1=$prev_img1;
        $image2=$prev_img2;
        $image3=$prev_img3;
        $image4=$prev_img4;
        $image5=$prev_img5;
        if (isset($productimage[0]) && $productimage[0] != null) {
          $image0 = $productimage[0];
        }
        if (isset($productimage[1]) && $productimage[1] != null) {
          $image1 = $productimage[1];
        }
        if (isset($productimage[2]) && $productimage[2] != null) {
          $image2 = $productimage[2];
        }
        if (isset($productimage[3]) && $productimage[3] != null) {
          $image3 = $productimage[3];
        }
        if (isset($productimage[4]) && $productimage[4] != null) {
          $image4 = $productimage[4];
        }
        if (isset($productimage[5]) && $productimage[5] != null) {
          $image4 = $productimage[5];
        }

        $product = Product::findOrFail($id);
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->undersubcategory_id = $request->undersubcategory_id;
        $product->brand_id = $request->brand_id;
        $product->product_condition = $request->product_condition;
        $product->product_origin = $request->product_origin;
        $product->title = $request->title;
        $product->color = $request->color;
        $product->main_price = $request->price;
        $product->discount = $request->discount;
        $product->price = $request->price-($request->price*($request->discount/100));
        $product->size_1 = $request->size_1;
        $product->size_2 = $request->size_2;
        $product->size_3 = $request->size_3;
        $product->size_4 = $request->size_4;
        $product->size_5 = $request->size_5;
        $product->size_6 = $request->size_6;
        $product->availability = $request->availability;
        $product->image0 = $image0;
        $product->image1 = $image1;
        $product->image2 = $image2;
        $product->image3 = $image3;
        $product->image4 = $image4;
        $product->image5 = $image5;
        $product->detailes = $request->detailes;
        $product->specification = $request->specification;
        $product->save();
        Session::flash('message', 'Product Edit Successfully!');
        return Redirect::to('admin/manageproduct');

  }

  public function deleteProduct($id)
  {
    // delete
      $product = Product::findOrFail($id);
      $product->delete();

      // redirect
      Session::flash('message', 'Successfully deleted the Product!');
      return Redirect::to('admin/manageproduct');

  }

  public function promoteProductFrom($id)
  {
    $product = Product::findOrFail($id);
    return view('seller.product-promote',compact('product'));
  }

  public function promoteProduct(Request $request,$id)
  {
    $product = Product::findOrFail($id);
    $product->main_price = $request->price;
    $product->discount = $request->discount;
    $product->price = $request->price-($request->price*($request->discount/100));

          $promote = new Promote;
          $promote->product_id = $product->id;
          $promote->message = $request->message;
          $promote->save();
    $product->save();

  }

  public function allOrder()
  {
    return view('seller.order');
  }
}
