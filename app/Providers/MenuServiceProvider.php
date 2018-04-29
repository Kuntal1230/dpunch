<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Product;
use App\Promote;
use App\Category;
use App\Subcategory;
use App\Undersubcategory;

class MenuServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
      $promoteRequest = Promote::where('promote_status', 0)->count();

      $totalProduct = Product::all()->count();

      // mobile menus start
      $mobile_tablates = Subcategory::where('category_id','1')->get();

      $mobilephonemenus = Undersubcategory::where('subcategory_id','1')->get();

      $tabletmenus = Undersubcategory::where('subcategory_id','2')->get();

      $featurephonemenus = Undersubcategory::where('subcategory_id','3')->get();

      $mobiletabletaccessoriesmenus = Undersubcategory::where('subcategory_id','4')->get();

      // mobile menus start end

      // computer menu start
      $computer_menus = Subcategory::where('category_id','2')->get();

      $computeraccessoriesmenu = Undersubcategory::where('subcategory_id','9')->get();
      // computer menu end

      // electronics menu start
        $electronics = Subcategory::where('category_id','3')->get();

        $televisionmenus = Undersubcategory::where('subcategory_id','10')->get();

        $securitysystemmenus = Undersubcategory::where('subcategory_id','11')->get();

        $homeappliancemenus = Undersubcategory::where('subcategory_id','12')->get();

        $kitchenappliancemenus = Undersubcategory::where('subcategory_id','13')->get();

        $cleaningsuppliestoolmenus = Undersubcategory::where('subcategory_id','14')->get();
      // electronics menu end

      // entertainment menu start
      $entertainment_menus = Subcategory::where('category_id','4')->get();

      $cameramenus = Undersubcategory::where('subcategory_id','15')->get();
      $audioplayerssystemmenus = Undersubcategory::where('subcategory_id','16')->get();
      $gamingconsolmenus = Undersubcategory::where('subcategory_id','17')->get();

      // entertainment menu end

      // daily needs menu start

      $dailyneed_menus = Subcategory::where('category_id','5')->get();
      // daily needs menu end

      // fashion beauty menu start

      $fashion_beautys = Subcategory::where('category_id','6')->get();
      $menstopwearmenus = Undersubcategory::where('subcategory_id','24')->get();
      $mensbottomwearmenus = Undersubcategory::where('subcategory_id','25')->get();
      $menstraditionalwearmenus = Undersubcategory::where('subcategory_id','27')->get();
      // $menswatchesmenus = Undersubcategory::where('subcategory_id','24')->get();
      $mensaccessoriesmenus = Undersubcategory::where('subcategory_id','28')->get();
      $mensfootwearmenus = Undersubcategory::where('subcategory_id','29')->get();
      $mensfragrancemenus = Undersubcategory::where('subcategory_id','30')->get();
      $womenstopwearmenus = Undersubcategory::where('subcategory_id','31')->get();
      $womensbottomwearmenus = Undersubcategory::where('subcategory_id','32')->get();
      $womenstraditionalwearmenus = Undersubcategory::where('subcategory_id','33')->get();
      // $womenswatchesmenus = Undersubcategory::where('subcategory_id','24')->get();
      $womensfootwearmenus = Undersubcategory::where('subcategory_id','35')->get();
      $womenshandbagsbagswalletsmenus = Undersubcategory::where('subcategory_id','36')->get();
      $womensfragrancemenus = Undersubcategory::where('subcategory_id','37')->get();
      $womensmodeswearmenus = Undersubcategory::where('subcategory_id','38')->get();

      $facemakeupmenus = Undersubcategory::where('subcategory_id','39')->get();
      $eyemakeupmenus = Undersubcategory::where('subcategory_id','40')->get();
      $haircaremenus = Undersubcategory::where('subcategory_id','41')->get();
      $lipmakeupmenus = Undersubcategory::where('subcategory_id','42')->get();
      $makeupaccessoriesmenus = Undersubcategory::where('subcategory_id','43')->get();
      $bodyskincaremenus = Undersubcategory::where('subcategory_id','44')->get();
      $nailsmenus = Undersubcategory::where('subcategory_id','45')->get();
      // fashion beauty menu end

      $car_bikes = Subcategory::where('category_id','7')->get();

      View::share('mobile_tablates',$mobile_tablates);
      View::share('computer_menus',$computer_menus);
      View::share('fashion_beautys',$fashion_beautys);
      View::share('electronics',$electronics);
      View::share('entertainment_menus',$entertainment_menus);
      View::share('car_bikes',$car_bikes);
      View::share('dailyneed_menus',$dailyneed_menus);
      View::share('totalProduct',$totalProduct);
      View::share('promoteRequest',$promoteRequest);
      view::share('mobilephonemenus',$mobilephonemenus);
      view::share('tabletmenus',$tabletmenus);
      view::share('featurephonemenus',$featurephonemenus);
      view::share('mobiletabletaccessoriesmenus',$mobiletabletaccessoriesmenus);
      view::share('computeraccessoriesmenu',$computeraccessoriesmenu);
      view::share('televisionmenus',$televisionmenus);
      view::share('securitysystemmenus',$securitysystemmenus);
      view::share('homeappliancemenus',$homeappliancemenus);
      view::share('kitchenappliancemenus',$kitchenappliancemenus);
      view::share('cleaningsuppliestoolmenus',$cleaningsuppliestoolmenus);
      view::share('cameramenus',$cameramenus);
      view::share('audioplayerssystemmenus',$audioplayerssystemmenus);
      view::share('gamingconsolmenus',$gamingconsolmenus);
      view::share('menstopwearmenus',$menstopwearmenus);
      view::share('mensbottomwearmenus',$mensbottomwearmenus);
      view::share('menstraditionalwearmenus',$menstraditionalwearmenus);
      // view::share('menswatchesmenus',$menswatchesmenus);
      view::share('mensaccessoriesmenus',$mensaccessoriesmenus);
      view::share('mensfootwearmenus',$mensfootwearmenus);
      view::share('mensfragrancemenus',$mensfragrancemenus);
      view::share('womenstopwearmenus',$womenstopwearmenus);
      view::share('womensbottomwearmenus',$womensbottomwearmenus);
      view::share('womenstraditionalwearmenus',$womenstraditionalwearmenus);
      // view::share('womenswatchesmenus',$womenswatchesmenus);
      view::share('womensfootwearmenus',$womensfootwearmenus);
      view::share('womenshandbagsbagswalletsmenus',$womenshandbagsbagswalletsmenus);
      view::share('womensfragrancemenus',$womensfragrancemenus);
      view::share('womensmodeswearmenus',$womensmodeswearmenus);
      view::share('facemakeupmenus',$facemakeupmenus);
      view::share('eyemakeupmenus',$eyemakeupmenus);
      view::share('haircaremenus',$haircaremenus);
      view::share('lipmakeupmenus',$lipmakeupmenus);
      view::share('makeupaccessoriesmenus',$makeupaccessoriesmenus);
      view::share('bodyskincaremenus',$bodyskincaremenus);
      view::share('nailsmenus',$nailsmenus);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
