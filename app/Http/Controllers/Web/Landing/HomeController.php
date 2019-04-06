<?php

namespace App\Http\Controllers\Web\Landing;

use App\Category;
use App\Discover;
use App\ImageGallery;
use App\Information;
use App\Process;
use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Banner;
use App\About;
use App\Product;
use App\News;
use Carbon\Carbon;

class HomeController extends Controller
{
public function landing(Request $request){

    $setting = Setting::first();
   $banners=Banner::all();
   $info=Information::paginate(4);
//   $smallprojects=Product::where('position',1)->orderBy('id','desc')->paginate(4);
//    $mediumprojects=Product::where('position',2)->orderBy('id','desc')->paginate(2);
//    $largeprojects=Product::where('position',3)->orderBy('id','desc')->paginate(2);
    //dd($mediumprojects);
    $projects=Product::orderBy('position','asc')->orderBy('id','desc')->paginate(8);
    $discovers=Discover::orderBy('id','desc')->paginate(6);
    //dd($smallprojects);
   $setting=Setting::first();
   //dd($setting);
    $blogs=News::orderBy('id','desc')->paginate(3);
    $processes=Process::orderBy('id','desc')->limit(4)->get();
    //dd($process);
    //dd($projects[1]);
    $cats=Category::orderBy('id','desc')->paginate(4);
    foreach ($cats as $cat){
        $cat->full_image=asset('public/uploads/'.$cat->image);
        $cat->image=asset('public/uploads/thumbs/'.$cat->image);

    }
    $photos=ImageGallery::all();
    //dd($cats);
    foreach ($photos as $ph){
        $ph->main_image=asset('public/uploads/thumbs/'.$ph->main_image);
        $ph->afterimage=asset('public/uploads/thumbs/'.$ph->afterimage);
    }
   foreach ($banners as $banner){
       $banner->image=asset('public/uploads/'.$banner->image);
   }
    foreach ($blogs as $blog){
        $blog->image=asset('public/uploads/thumbs/'.$blog->image);
    }
    return view('web.landing.index',compact('banners','setting','info',
        'projects','page','blogs','cats','photos','discovers','processes'));
}
}
