<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Billing;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Shipping;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckOutController extends Controller
{
    public function save_checkout_information(Request $request)
    {
        // dd($request->all());
        if(Address::where('user_id',Auth::user()->id)->exists()){
            $address = Address::where('user_id',Auth::user()->id)->first();
        }else{
            $address = new Address();
        }

        $req_billing_address = (object) $request->billing_address;
        $address->user_id = Auth::user()->id;
        $address->address1 = $req_billing_address->address;
        $address->address2 = $req_billing_address->address2;
        $address->city_name = $req_billing_address->state;
        $address->phone = $req_billing_address->phone;
        $address->comment = $request->order_notes;
        $address->created_at = Carbon::now()->toDateTimeString();
        $address->save();

        if(Billing::where('user_id',Auth::user()->id)->exists()){
            $billing_address = Billing::where('user_id',Auth::user()->id)->first();
        }else{
            $billing_address = new Billing();
        }

        $billing_address->user_id = Auth::user()->id;
        $billing_address->address1 = $req_billing_address->address;
        $billing_address->address2 = $req_billing_address->address2;
        $billing_address->city = $req_billing_address->state;
        $billing_address->phone = $req_billing_address->phone;
        $billing_address->mobile = $req_billing_address->phone;
        $billing_address->created_at = Carbon::now()->toDateTimeString();
        $billing_address->save();

        if(Shipping::where('user_id',Auth::user()->id)->exists()){
            $shipping_address = Shipping::where('user_id',Auth::user()->id)->first();
        }else{
            $shipping_address = new Shipping();
        }

        $shipping_address->user_id = Auth::user()->id;
        $shipping_address->address1 = $req_billing_address->address;
        $shipping_address->address2 = $req_billing_address->address2;
        $shipping_address->city = $req_billing_address->state;
        $shipping_address->phone = $req_billing_address->phone;
        $shipping_address->mobile = $req_billing_address->phone;
        $shipping_address->created_at = Carbon::now()->toDateTimeString();
        $shipping_address->save();

        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->invoice_date = Carbon::now()->toDateTimeString();
        // $order->total_discount = ;
        $order->subtotal = $request->sub_total;
        $order->total = $request->sub_total;
        $order->created_at = Carbon::now()->toDateTimeString();
        $order->save();
        $order->invoice_id = 10000+$order->id;
        $order->save();

        foreach($request->cart as $cart){
            $cart = (object) $cart;
            $product_info = (object) $cart->product;
            $order_product = new OrderProduct();
            $order_product->customer_id = Auth::user()->id;
            $order_product->order_id = $order->id;
            $order_product->product_id = $product_info->id;
            $order_product->product_code = $product_info->code;
            $order_product->product_name = $product_info->name;
            $order_product->qty = $cart->qty;
            $order_product->color = $cart->color;
            $order_product->size = $cart->size;
            $order_product->price = $cart->product_price;
            $order_product->creator = Auth::user()->id;
            $order_product->created_at = Carbon::now()->toDateTimeString();
            $order_product->save();
        }

        return response()->json([
            'invoice_id' => $order->invoice_id,
            'invoice_date' => Carbon::parse($order->invoice_date)->format('d,M Y'),
        ]);
    }

    public function get_latest_checkout_information()
    {
        $order = Order::where('user_id',Auth::user()->id)->orderBy('id','DESC')->with('order_products')->first();
        return $order;
    }

}
