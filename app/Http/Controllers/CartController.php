<?php

namespace App\Http\Controllers;

use App\Cart;
use App\PaymentMethod;
use App\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
            $product_id = $request->product_id[$index];
            if ($qty > 0) {
                $cart = new Cart();
                $cart->user_id = Auth::user()->id;
                $cart->product_id = $product_id;
                $cart->qty = $qty;
                $cart->save();
            }
        }

        return redirect('/cart');
    }

    public function show(Cart $cart)
    {
        //
    }

    public function edit(Cart $cart)
    {
        //
    }

    public function update(Request $request, Cart $cart)
    {
        //
    }

    public function destroy($id)
    {
        Cart::destroy($id);

        return response()->json();
    }

    public function checkout () {
        $methods = PaymentMethod::all();

        return view ('checkout')->with('methods', $methods);
    }
}
