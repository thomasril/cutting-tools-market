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
        if (Auth::check() && Auth::user()->role == 'Procurement Manager') {
            $types = ProductType::all();
            $product =Product::with('productCategory')->with('productType')->get();
            $products = $product->groupBy('type_id');

            $suppliers = User::where('role', 'Supplier')->get();

            return view('reorder', ['types' => $types, 'products' => $products, 'suppliers' => $suppliers]);
        }

        return redirect('/');
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

        if ($request->product_id == '0')
            return redirect()->back()->withErrors(['err' => 'Anda belum memilih produk']);

        if ($validator->fails())
            return redirect()->back()->withErrors(['err' => 'Anda belum memilih supplier']);

        $temp = explode("-", $request->reorder_date);

        $time = Carbon::now();

        $procure = Procurement::whereMonth('created_at', '=', $time->month)->count() + 1;

        $temp_id = ($procure == 1 ? '01' : (($procure > 1 || $procure < 11) ? '0'.$procure : $procure));

        $procurement = new Procurement();
        $procurement->procure_id = strval($temp[1]).strval(substr($temp[0], 2,2)).$temp_id.$request->supplier;
        $procurement->reorder_date = $request->reorder_date;
        $procurement->product_id = $request->product_id;
        $procurement->qty = $request->qty;
        $procurement->delivery_date = $request->delivery_date;
        $procurement->supplier = ($request->supplier == "LV") ? "Lasting Victory" : "M&V";
        $procurement->status = 'Order Dispatched';
        $procurement->notif_status = 'Waiting';
        $procurement->reorder_date = $request->reorder_date;
        $procurement->created_at = Carbon::now();
        $procurement->save();
        $procurement->updated_at = NULL;

        return redirect('/reorder/procure');
    }

    public function show(Procurement $procurement) // Procure Order
    {
        if (Auth::check() && Auth::user()->role != 'Customer' && Auth::user()->role != 'Finance Manager') {
            $procurements = Procurement::paginate(5);
            return view('order-procurement')->with('procurements', $procurements);
        }

        return redirect('/');
    }

    public function showNotification(Procurement $procurement) // Incoming Product
    {
        if (Auth::check() && Auth::user()->role == 'Logistic Manager') {
            $procurements = Procurement::paginate(5);
            return view('product-incoming')->with('procurements', $procurements);
        }

        return redirect('/');
    }

    public function changeStatus (Request $request) {
        $procure = Procurement::find($request->id);

        $procure->status = 'Order Completed';
        $procure->notif_status = 'Confirmed';

        $product = Product::where('product_id', $procure->product_id)->first();
        $product->stock += $procure->qty;
        $product->save();

        $procure->save();

        return redirect()->back();
    }
}
