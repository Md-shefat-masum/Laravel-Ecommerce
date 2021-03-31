<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelperController extends Controller
{
    public static function discount_price($main_price,$discount)
    {
        $discount_price = $main_price - ( $main_price * ( $discount / 100 ));
        return $discount_price;
    }
}
