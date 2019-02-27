<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Banner as Banner;

class BannerController extends Controller
{
    public $successStatus = 200;

    public function index(){
        $getallBanners = Banner::select('banner_url')->get();
        $bannerArray = array();
        $url = array();
        foreach($getallBanners as $key => $banner)
        {
           $url[$key] = asset('images/banner/'.$banner->banner_url);
            //array_push($bannerArray,$url);
        }
        
       $success['banners'] = json_encode($bannerArray);
        return response()->json(['success'=>$url,$this->successStatus]);
        //print_r (json_encode($bannerArray));
    }
}
