<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class HelperController extends Controller
{
    public static function discount_price($main_price,$discount,$expiration_date)
    {
        $today_date = Carbon::now()->format('Y-m-d');

        if($expiration_date > $today_date){
            $discount_price = $main_price - ( $main_price * ( $discount / 100 ));
            return ceil($discount_price);
        }else{
            return 0;
        }

    }
}
