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
        
        foreach($getallBanners as $key => $banner)
        {
           $url =  asset('images/banner/'.$banner->banner_url);
            array_push($bannerArray,$url);
        }
        print_r ($bannerArray);
        // $success['banners'] = $bannerArray;
        // return response()->json(['success'=>$success,$this->successStatus]);
        //return $bannerArray;
        //print_r (json_encode($bannerArray));
    }

    
}
