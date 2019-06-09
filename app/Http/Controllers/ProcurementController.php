<?php

namespace App\Http\Controllers;

use App\Procurement;
use App\Product;
use App\ProductType;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProcurementController extends Controller
{
    public function index()
    {
        if (Auth::check() && Auth::user()->role == 'Procurement manager') {
            $types = ProductType::all();
            $product =Product::with('productCategory')->with('productType')->get();
            $products = $product->groupBy('type_id');

            $suppliers = User::where('role', 'Supplier')->get();

            return view('reorder', ['types' => $types, 'products' => $products, 'suppliers' => $suppliers]);
        }

        return redirect('/');
    }

    public function create()
    {
        //
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'reorder_date' => ['required', 'date'],
            'qty' => ['required', 'integer', 'min:1'],
            'delivery_date' => ['required', 'date'],
            'supplier' => ['required', 'string', 'max:2']
        ]);
    }

    public function store(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $temp = explode("-", $request->reorder_date);

        $procurement = new Procurement();
        $procurement->procure_id = strval($temp[1]).strval(substr($temp[0], 2,2))."01".$request->supplier;
        $procurement->reorder_date = $request->reorder_date;
        $procurement->product_id = $request->product_id;
        $procurement->qty = $request->qty;
        $procurement->delivery_date = $request->delivery_date;
        $procurement->supplier = ($request->supplier == "LV") ? "Lasting Victory" : "M&V";
        $procurement->status = 'Order will be arrived';
        $procurement->reorder_date = $request->reorder_date;
        $procurement->created_at = Carbon::now();
        $procurement->save();

        $product = Product::where('product_id', $request->product_id)->first();

        $product->stock = $product->stock + $request->qty;
        $procurement->updated_at = Carbon::now();
        $product->save();

        return redirect('/reorder/procure');
    }

    public function show(Procurement $procurement) // Procure Order
    {
        $procurements = Procurement::all();

        return view('order-procurement')->with('procurements', $procurements);
    }

    public function edit(Procurement $procurement)
    {
        //
    }

    public function update(Request $request, Procurement $procurement)
    {
        //
    }

    public function destroy(Procurement $procurement)
    {
        //
    }
}
