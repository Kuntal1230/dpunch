<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Brand;
use App\Banner;
use App\User;
use App\Order;
use App\Seller;
use App\Slider;
use App\Product;
use App\Promote;
use App\Category;
use App\Customer;
use App\Coupon;
use App\Subcategory;
use App\Singlepage;
use App\Categorybanner;
use App\Undersubcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;

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

    public function Slidermanage()
    {
      return view('admin.setting.addslider');
    }
    public function BannerManage()
    {
      return view('admin.setting.addbanner');
    }
    public function CategoryBannermanage()
    {
      return view('admin.setting.addcategorybanner');
    }

    public function AddSlider(Request $request, $id)
    {
      $image = $request->slider;
      $imageName = time().'-'.$image->getClientOriginalName();
      $path = base_path();
      $public_path = str_replace("dpunch", "dpunch.com", $path);
      $destinationPath =$public_path.'/assets/img/slider';
      $img = Image::make($image->getRealPath());
      $img->resize(1170, 400)->save($destinationPath.'/'.$imageName);

      $flight = Slider::updateOrCreate(
      ['slider_id' => $id],
      [
        'slidertext' => $request->slidertext,
        'sliderimg' => $imageName,
        'slidelink' => $request->sliderlink,
      ]
      );
      Session::flash('message', 'Slider Add Successfully!');
      return back();
    }

    public function AddBanner(Request $request, $id)
    {
      $image = $request->banner;
      $imageName = time().'-'.$image->getClientOriginalName();
      $path = base_path();
      $public_path = str_replace("dpunch", "dpunch.com", $path);
      $destinationPath = $public_path .'/assets/img/banner';
      $img = Image::make($image->getRealPath());
      $img->resize(1160, 180)->save($destinationPath.'/'.$imageName);

      $flight = Banner::updateOrCreate(
      ['id' => $id],
      ['banner' => $imageName,
        'bannerlink' =>$request->bannerlink]
      );
      Session::flash('message', 'Banner Add Successfully!');
      return back();
    }

    public function AddCAtegoryBanner(Request $request, $category)
    {
      $image = $request->bannerimg;
      $imageName = time().'-'.$image->getClientOriginalName();
      $path = base_path();
      $public_path = str_replace("dpunch", "dpunch.com", $path);
      $destinationPath = $public_path .'/assets/img/categorybanner';
      $img = Image::make($image->getRealPath());
      $img->resize(338, 478)->save($destinationPath.'/'.$imageName);

      $flight = Categorybanner::updateOrCreate(
      ['category' => $category],
      [
        'bannerimg' => $imageName,
        'bannerlink' => $request->bannerlink,
      ]
      );
      Session::flash('message', 'Slider Add Successfully!');
      return back();
    }

    public function generalSetting()
    {
      return view('admin.setting.site-setting');
    }

    public function menuManage()
    {
      $mainmenu = Category::all();
      return view('admin.setting.menu',compact('mainmenu'));
    }

    public function addMenu()
    {

      $allcategory = Category::all();
      // $subcat = Subcategory::find($id);
      return view('admin.setting.add-menu')->with(compact('allcategory'));
    }

    public function addCategory(Request $request)
    {
      $category = new Category;
      $category->slug = str_slug($request->category, "-");
      $category->name = $request->category;
      $category->save();
      Session::flash('menustatus', 'Category Add Successfully!');
      return redirect('admin/addmenu');
    }
    public function addSubcategory(Request $request)
    {
      $subcategory = new Subcategory;
      $subcategory->category_id = $request->category_id;
      $subcategory->slug = str_slug($request->subcategory, "-");
      $subcategory->name = $request->subcategory;
      $subcategory->save();
      Session::flash('submenustatus', 'Subcategory Add Successfully!');
      return redirect('admin/addmenu');
    }

    public function addUndersubcategory(Request $request)
    {
      $childcategory = new Undersubcategory;
      $childcategory->category_id = $request->category_id;
      $childcategory->subcategory_id = $request->subcategory_id;
      $childcategory->slug = str_slug($request->undersubcategory, "-");
      $childcategory->name = $request->undersubcategory;
      $childcategory->save();
      Session::flash('childmenustatus', 'Child category Add Successfully!');
      return redirect('admin/addmenu');

    }

    public function addBrand(Request $request)
    {
      $brand = new Brand;
      $brand->category_id = $request->category_id;
      $brand->subcategory_id = $request->subcategory_id;
      $brand->undersubcategory_id = $request->undersubcategory_id;
      $brand->slug = str_slug($request->brand, "-");
      $brand->name = $request->brand;
      $brand->save();
      Session::flash('brandstatus', 'Brand Add Successfully!');
      return redirect('admin/addmenu');
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

    public function allSeller()
    {
      $allseller = Seller::all();
      return view('admin.seller',compact('allseller'));
    }

    public function updateSeller(Request $request)
    {
      if ($request->isMethod('post')){
        $id= $request->id;
        $status = $request->status;
        $seller = Seller::findOrFail($id);
        $seller->status = $status;
        $seller->save();
          return response()->json($status);
        }
    }

    public function allProduct()
    {
      $allprodutcs = Product::all();
      return view('admin.product',compact('allprodutcs'));
    }

    public function publishProduct(Request $request)
    {
      if ($request->isMethod('post')){
        $id= $request->id;
        $status = $request->status;
        $product = Product::findOrFail($id);
        $product->status = $status;
        $product->save();
          return response()->json($status);
        }
    }

    public function allArchiveProduct()
    {
      $archiveproducts = Product::onlyTrashed()->get();
      return view('admin.product-archive',compact('archiveproducts'));
    }

    public function viewProduct($id)
    {
      $product = Product::findOrFail($id);
      return view('admin.product-view',compact('product'));
    }
    public function addProductForm()
    {
      $allcategory = Category::all();
      return view('admin.product-add',compact('allcategory'));
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

          if (Auth::guard('admin')->check()) {
            $seller_name = Auth::guard('admin')->user()->name;
            $seller_id = Auth::guard('admin')->user()->id;
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
          $product->status = 1;
          $product->save();
          Session::flash('productstatus', 'Product Add Successfully!');
          return back();
    }

    public function editProductForm($id)
    {
      $allcategory = Category::all();
      $product = Product::findOrFail($id);
      return view('admin.product-edit',compact('allcategory','product'));
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
            // if($prev_img0){
            //     unlink(base_path('dpunch.com/images/small'.$prev_img0));
            //     unlink(base_path('dpunch.com/images/thumbnail'.$prev_img0));
            //     unlink(base_path('dpunch.com/images/zoom'.$prev_img0));
            //     }
            // if($prev_img1){
            //     unlink(base_path('dpunch.com/images/small'.$prev_img1));
            //     unlink(base_path('dpunch.com/images/thumbnail'.$prev_img1));
            //     unlink(base_path('dpunch.com/images/zoom'.$prev_img1));
            //     }
            // if($prev_img2){
            //     unlink(base_path('dpunch.com/images/small'.$prev_img2));
            //     unlink(base_path('dpunch.com/images/thumbnail'.$prev_img2));
            //     unlink(base_path('dpunch.com/images/zoom'.$prev_img2));
            //     }
            // if($prev_img3){
            //     unlink(base_path('dpunch.com/images/small'.$prev_img3));
            //     unlink(base_path('dpunch.com/images/thumbnail'.$prev_img3));
            //     unlink(base_path('dpunch.com/images/zoom'.$prev_img3));
            //     }
            // if($prev_img4){
            //     unlink(base_path('dpunch.com/images/small'.$prev_img4));
            //     unlink(base_path('dpunch.com/images/thumbnail'.$prev_img4));
            //     unlink(base_path('dpunch.com/images/zoom'.$prev_img4));
            //     }
            // if($prev_img5){
            //     unlink(base_path('dpunch.com/images/small'.$prev_img5));
            //     unlink(base_path('dpunch.com/images/thumbnail'.$prev_img5));
            //     unlink(base_path('dpunch.com/images/zoom'.$prev_img5));
            //     }
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
    public function promoteProductList()
    {
      $promotelist = Promote::all();
      return view('admin.product-promote-list',compact('promotelist'));
    }

    public function promoteProductView($id)
    {
      $promote = Promote::where('product_id', $id)->firstOrFail();
      return view('admin.product-promote',compact('promote'));
    }

    public function promoteProduct(Request $request,$id)
    {
      $promote = Promote::where('product_id', $id)->firstOrFail();
      $promote->promote_status = 1;
      $promote->save();
      return back();
    }

    public function allCustomer()
    {
      $allcustomer = User::all();
      return view('admin.customer',compact('allcustomer'));
    }

    public function allOrder()
    {
      $allorder = Order::where('status','0')->get();
      return view('admin.order',compact('allorder'));
    }

    public function Orderdetailes($id)
    {
      $orderdetailes = Order::find($id);
      // return $orderdetailes;
    return view('admin.order-detailes',compact('orderdetailes'));
    }

    public function ConfirmOrder($id)
    {
      $confirm = Order::findOrFail($id);
      $confirm->status = 1;
      $confirm->save();

      Session::flash('message', 'Order Confirmed Successfully!');

      return redirect('admin/manageconfirmedorder');
    }

    public function CancleOrder($id)
    {
      $confirm = Order::findOrFail($id);
      $confirm->status = 2;
      $confirm->save();

      Session::flash('message', 'Order Cancled Successfully!');

      return redirect('admin/managecancledorder');
    }



    public function OrderdetailesPrint($id)
    {
      $orderdetailes = Order::find($id);
      // return $orderdetailes;
    return view('admin.print-order-detailes',compact('orderdetailes'));
    }

    public function allCancleOrder()
    {
      $allorder = Order::where('status','2')->get();
      return view('admin.cancledorder',compact('allorder'));
    }
    public function allConfirmedOrder()
    {
      $allorder = Order::status()->get();
      // return $allorder;
      return view('admin.confirmedorder',compact('allorder'));
    }

    public function ViewAllPage()
    {
      $singlepages = Singlepage::all();
      return view('admin.setting.single-page',compact('singlepages'));
    }
    public function AddsinglePage()
    {
      return view('admin.setting.add-single-page');
    }
    public function AddPage(Request $request)
    {
      $singlepage = new Singlepage;
      $singlepage->title = $request->page_title;
      $singlepage->slug = str_slug($request->page_title, "-");
      $singlepage->description = $request->description;
      $singlepage->save();
      Session::flash('message', 'Page add Successfully!');
      return back();
    }
    public function EditPage($id)
    {
      $singlepage = Singlepage::findOrFail($id);
        return view('admin.setting.edit-single-page',compact('singlepage'));
    }
    public function UpdatePage(Request $request, $id)
    {
      $singlepage = Singlepage::findOrFail($id);
      $singlepage->title = $request->page_title;
      $singlepage->description = $request->description;
      $singlepage->save();
      Session::flash('message', 'Page Edit Successfully!');
      return back();
    }

    public function allCuppon()
    {
      $coupons = Coupon::all();
      return view('admin.cuppon',compact('coupons'));
    }

    public function addCupponform()
    {
      return view('admin.cuppon-add');
    }
    public function addCuppon(Request $request)
    {
      $coupon = new Coupon;
      $coupon->code = $request->code;
      $coupon->type = $request->cupon_type;
      $coupon->value = $request->value;
      $coupon->discription = $request->discription;
      $coupon->validity = 1;
      $coupon->save();
      Session::flash('cupponstatus', 'Cupon Add Successfully!');
      return back();
    }

    public function editCupponform($id)
    {
      $coupon = Coupon::findOrFail($id);
      return view('admin.cuppon-edit',compact('coupon'));
    }
    public function editCuppon(Request $request, $id)
    {
      $coupon = Coupon::findOrFail($id);
      $coupon->code = $request->code;
      $coupon->type = $request->cupon_type;
      $coupon->value = $request->value;
      $coupon->discription = $request->discription;
      $coupon->save();
      Session::flash('cupponstatus', 'Cupon Update Successfully!');
      return back();
    }
    public function manageCuppon(Request $request,$id)
    {
      $coupon = Coupon::findOrFail($id);
      $coupon->validity = $request->validity;
      $coupon->save();
      Session::flash('message', 'Cupon Update Successfully!');
      return back();
    }


}
