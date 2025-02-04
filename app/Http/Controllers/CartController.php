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
        $total = 0;

        foreach($request->qty as $index => $qty) {
            if ($qty > 0) {
                $product_id = $request->product_id[$index];
                $cart = new Cart();
                $cart->user_id = Auth::user()->id;
                $cart->product_id = $product_id;
                $cart->qty = $qty;
                $cart->save();
                $total += $qty;
            }
        }

            if ($total == 0) {
            return redirect()->back()->withErrors(['err' => 'Anda belum memasukkan jumlah yang diinginkan!']);
        }

        return redirect('/cart');
    }

    public function destroy(Request $request)
    {
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

        $order = Sales::whereMonth('created_at', '=', $time->month)->where('order_id', 'like', Auth::user()->initial.'%')->count() + 1;

        $temp_id = ($order == 1 ? '01' : (($order > 1 || $order < 11) ? '0'.$order : $order));

        $order_id = Auth::user()->initial . ($time->month < 10 ? '0'.$time->month : $time->month) .
                    substr($time->year, 2,2) . $temp_id. 'HAR';

        return view ('checkout')->with('cart', $request)->with('order_id', $order_id);
    }
}
