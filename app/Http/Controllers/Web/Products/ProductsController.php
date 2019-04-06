<?php

namespace App\Http\Controllers\Web\Products;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use Carbon\Carbon;
use App\ProductImages;

class ProductsController extends Controller
{
    /**
     * Show product page
     *
     * @return response
     */
    public function landing($id,Request $request){
        if(!isset($request->page)||$request->page==1){
            $page=0;
        }elseif($request->page==2){
            $page=8;
        }
     // return $page;
//      $smallprojects=Product::select("products.*")->join('categories',"categories.id","=","products.category_id")->where('position',1)->where('categories.id',$id)->orderBy('id','desc')->paginate(4);
//      $mediumprojects=Product::select("products.*")->join('categories',"categories.id","=","products.category_id")->where('position',2)->where('categories.id',$id)->orderBy('id','desc')->paginate(4);
//       $largeprojects=Product::select("products.*")->join('categories',"categories.id","=","products.category_id")->where('position',3)->where('categories.id',$id)->orderBy('id','desc')->paginate(4);
        $projects=Product::select("products.*")->
        join('categories',"categories.id","=","products.category_id")->where('categories.id',$id)->orderBy('position','desc')->paginate(8);
       $cat=Category::where('id',$id)->first();
//dd($projects);
        return view('web.products.category',compact('projects','cat','page'));
    }

//    =====================================
    public function index($permalink) {
      $product = Product::where('permalink', $permalink)->first();
       //dd($permalink);
      if ($product) {
        $product->full_image = asset('public/uploads/' . $product->image);
        $product->image3 = asset('public/uploads/thumbs3/' . $product->image3);
           $images=ProductImages::where('product_id',$product->id)->get();
        }

      
      

      return $product ? view('web.products.product', compact('product','images')) : view('web.errors.notfound');
    }
}
