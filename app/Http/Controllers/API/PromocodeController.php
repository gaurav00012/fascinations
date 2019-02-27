<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\promocode;

class PromocodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $successStatus = 200;

    public function __construct(){
       // echo "hey this constructor";
    }

    public function index()
    {
        //
        
        $getAllCoupons = promocode::select('coupon_code','from_date','to_date','coupon_type','coupon_min_value','coupon_limit','coupon_for','product_name','product_link')->get();
        $success['allcoupons'] = $getAllCoupons;
        return response()->json(['success'=>$success,$this->successStatus]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       $validator = Validator::make($request->all(),[
        'from_date' => 'required|date',
        'to_date' => 'required|date',
        'coupon_code' => 'required|unique:Promocodes',
        'coupon_type' => 'required',
        'coupon_value' => 'required',
        'coupon_min_value' => 'required',
        'coupon_max_value' => 'required',
        'coupon_limit' => 'required',
        'coupon_for' => 'required|in:opt,total,product',
        'product_name' => 'required_if:coupon_for,==,product',
        'product_link' => 'required_if:coupon_for,==,product',
        'comments' => 'required',
        //'created_by' => 'required'
       ]);

       if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);            
        }

        $couponInput = $request->all();
        $createCoupon = promocode::create($couponInput);
        $success['couponcode'] = $createCoupon->coupon_code;
        return response()->json(['success'=>$success],$this->successStatus);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

     public function useCoupon(Request $request){

       $validator = Validator::make($request->all(),[
        'email' => 'required|email',
        'promocode' => 'required'
       ]);
       
       if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);            
        }
         

    }
}
