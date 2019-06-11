<?php

namespace App\Http\Controllers;

use App\Cart;
use App\PaymentMethod;
use App\Product;
use App\Sales;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::where('user_id', Auth::user()->id)->with('product')->get();

        return view('cart')->with('carts', $carts);
    }

    public function store(Request $request)
    {
        foreach($request->qty as $index => $qty) {
            if ($qty > 0) {
                $product_id = $request->product_id[$index];
                $product = Product::where('product_id', $product_id)->first();
                $product->stock -= $qty;
                $product->save();

                $cart = new Cart();
                $cart->user_id = Auth::user()->id;
                $cart->product_id = $product_id;
                $cart->qty = $qty;
                $cart->save();
            }
        }

        return redirect('/cart');
    }

    public function destroy(Request $request)
    {
        $deleted_cart = Cart::where('cart_id', $request->id)->first();

        $product = Product::where('product_id', $deleted_cart->product_id)->first();
        $product->stock += $deleted_cart->qty;
        $product->save();

        Cart::destroy($request->id);

        return redirect()->back();
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'cart_id' => ['required', 'string'],
            'subtotal' => ['required', 'integer', 'min:1'],
        ]);
    }

    public function checkout (Request $request) {

        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            return redirect()->back()->withErrors('Anda harus centang salah satu cart!');
        }

        $time = Carbon::now();

        $order = Sales::orderBy('id', 'DESC')->first();

        $order_id = Auth::user()->initial . ($time->month < 10 ? '0'.$time->month : $time->month) .
                    substr($time->year, 2,2) .
                    (isset($order) && $order->id < 10 ? '0'.$order->id :
                        (isset($order) && $order->id > 10 ? $order->id : '01'))
                    . 'HAR';

        return view ('checkout')->with('cart', $request)->with('order_id', $order_id);
    }
}
