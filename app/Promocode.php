<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promocode extends Model
{
    //
    protected $fillable=[
    	'from_date','to_date','coupon_code','coupon_type','coupon_date','coupon_value','coupon_min_value','coupon_max_value','coupon_limit','coupon_for','product_name','product_link','comments','created_by'];
}
