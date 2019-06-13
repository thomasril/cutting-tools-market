<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use App\Sales;
use App\SalesDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

class SalesController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            if (Auth::user()->role == 'Customer') {
                $sales = Sales::where('buyer_id', Auth::user()->id)->paginate(5);
                return view('order-sales')->with('sales', $sales)->with('header', 'My Order');
            } else if (Auth::user()->role == 'Sales Manager') {
                $sales = Sales::paginate(5);
                return view('order-sales')->with('sales', $sales)->with('header', 'Customer Order');
            } else if (Auth::user()->role == 'Finance Manager') {
                $sales = Sales::paginate(5);
                return view('order-sales')->with('sales', $sales)->with('header', 'Customer Order');
            } else if (Auth::user()->role == 'Director') {
                $currentPath= Route::getFacadeRoot()->current()->uri();

                $tempStatus = ($currentPath == 'order/sales' ? 'sales' : 'finance');

                $sales = Sales::paginate(5);
                return view('order-sales')->with('sales', $sales)->with('header', 'Customer Order')->with('status', $tempStatus);
            }
        }
    }

    protected function getRomanNumber($decimalInteger)
    {
        $n = intval($decimalInteger);
        $res = '';

        $roman_numerals = array(
            'M'  => 1000,
            'CM' => 900,
            'D'  => 500,
            'CD' => 400,
            'C'  => 100,
            'XC' => 90,
            'L'  => 50,
            'XL' => 40,
            'X'  => 10,
            'IX' => 9,
            'V'  => 5,
            'IV' => 4,
            'I'  => 1);

        foreach ($roman_numerals as $roman => $numeral)
        {
            $matches = intval($n / $numeral);
            $res .= str_repeat($roman, $matches);
            $n = $n % $numeral;
        }

        return $res;
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'buyer_name' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:255'],
            'payment_method' => ['required', 'string'],
        ]);
    }

    public function store(Request $request)
    {
//        $validator = $this->validator($request->all());
//
//        if ($validator->fails()) {
//            return redirect()->back()->withErrors($validator);
//        }

        $now = Carbon::now();

        $invoice = Sales::whereYear('created_at', '=', $now->year)->count() + 1;

        $temp_id = ($invoice == 1 ? '001' : (($invoice > 1 || $invoice < 11) ? '00'.$invoice : (($invoice > 10 || $invoice < 100) ? '0'.$invoice : $invoice)));

        $sales = new Sales();
        $sales->order_id = $request->order_id;
        $sales->buyer_id = Auth::user()->id;
        $sales->buyer_name = $request->buyer_name;
        $sales->recipient_name = $request->name;
        $sales->recipient_title = $request->title;
        $sales->recipient_phone = $request->phone;
        $sales->payment_method = $request->payment_method;
        $sales->subtotal= $request->subtotal;
        $sales->total_price = $request->total_price;
        $sales->order_date = $now;
        $sales->delivery_id = substr($request->order_id, strlen($request->order_id)-5, 2).
            '/'.self::getRomanNumber($now->month).
            '/'. substr($now->year, 2,2).
            '/'.Auth::user()->initial;
        $sales->delivery_date = '1970-01-01 01:00:00.00000';
        $sales->invoice_id = ($now->month < 10 ? '0'.$now->month : $now->month) . $temp_id . '/' . substr($now->year, 2,2);
        $sales->invoice_date = $now;
        $sales->status = 'Order Placed';
        $sales->notif_status = 'Waiting';
        $sales->created_at = $now;
        $sales->save();

        $carts = explode("+", substr($request->cart_id, 0, strlen($request->cart_id)-1));

        foreach ($carts as $cart) {
            $selected_cart = Cart::where('cart_id', $cart)->first();

            $sales_detail = new SalesDetail();
            $sales_detail->order_id = $sales->order_id;
            $sales_detail->product_id = $selected_cart->product_id;
            $sales_detail->qty = $selected_cart->qty;
            $sales_detail->created_at = $now;
            $sales_detail->save();

            $selected_cart->delete();
        }

        return redirect('/order');
    }

    public function show($id) // show Purchase Order
    {
        if (Auth::check()) {
            $currentPath= Route::getFacadeRoot()->current()->uri();
            $header = "";

            if ($currentPath == 'order/{id}/purchase')
                $header = 'Purchase Order';
            else if ($currentPath == 'order/{id}/delivery')
                $header = 'Delivery Order';
            else if ($currentPath == 'order/{id}/invoice')
                $header = 'Invoice';

            $sales = Sales::find($id);

            $details = SalesDetail::where('order_id', $sales->order_id)->get();

            return view ('order-detail')->with('sales', $sales)->with('details', $details)->with('header', $header);
        }

        return redirect('/order');

    }

    public function showNotification() {
        if (Auth::check() && Auth::user()->role == 'Logistic Manager') {
            $sales = Sales::all();
            $salesDetail = SalesDetail::all();
            return view('product-outgoing')->with('sales', $sales)->with('salesDetail', $salesDetail);
        }

        return redirect('/');
    }

    function pdf($id)
    {
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->convertToPDF($id));
        return $pdf->stream();
    }

    public function convertToPDF($id) {
        $path = Route::getFacadeRoot()->current()->uri();

        $sales = Sales::find($id);

        $details = SalesDetail::where('order_id', $sales->order_id)->get();

        $output = "<div>Terjadi kesalahan sistem!</div>";

        if ($path == 'order/{id}/purchase/pdf') {
            $output = '
                    <div>
                        <div style = "width: 50%; margin:auto">
                            <div style="display: inline-block">
                                <img width="100px" height="100px" src = "https://i.ibb.co/XZ4K7zF/icon.png">
                            </div>
                            <div style="display: inline-block">
                                <h2><strong>PT. Dirgaraya Harsa</strong></h2>
                                <div style="margin-top: -10px">Sawah Lio No. 50, Jakarta 11250</div>
                                <div>Telp. (021) 6308312 Fax (021) 6335625</div>
                            </div>
                        </div>
                        
                        <div style = "text-align: right; margin-right: 80px; margin-top: 10px">No: '.$sales->order_id.'</div>
                        <div style = "text-align: right; margin-right: 80px;">Tanggal PO: '.date ('d M Y',strtotime($sales->order_date)).'</div>
        
                        <div style="text-align:center">
                           <h3>PURCHASE ORDER</h3>
                           <table style="text-align:center; width: 80%; border-collapse: collapse;" align="center">
                                <tr>
                                   <th style="border: 1px solid #dddddd; padding: 2px;">No.</th>
                                   <th style="border: 1px solid #dddddd; padding: 2px;">Nama Barang</th>
                                   <th style="border: 1px solid #dddddd; padding: 2px;">Quantity</th>
                                   <th style="border: 1px solid #dddddd; padding: 2px;">Harga Satuan</th>
                                   <th style="border: 1px solid #dddddd; padding: 2px;">Jumlah</th>
                                </tr>';

            foreach ($details as $index => $d) {
                $output .= '
                        <tr>
                            <td style="border: 1px solid #dddddd; padding: 2px;">'.($index+1).'</td>
                            <td style="border: 1px solid #dddddd; padding: 2px;">'.$d->product->name.'</td>
                            <td style="border: 1px solid #dddddd; padding: 2px;">'.$d->qty.'</td>
                            <td style="border: 1px solid #dddddd; padding: 2px;"> Rp.'.number_format($d->product->price).'</td>
                            <td style="border: 1px solid #dddddd; padding: 2px;"> Rp.'.number_format($d->product->price * $d->qty).'</td>
                        </tr>';
            }

            $output .= '
                            <tr>
                                <td  colspan="4" style="text-align: right">Subtotal</td>
                                <td style="border: 1px solid #dddddd; padding: 2px;"> Rp.'.number_format($sales->subtotal).'</td>
                            </tr>
                            
                            <tr>
                                <td colspan="4" style="text-align: right">PPN</td>
                                <td style="border: 1px solid #dddddd; padding: 2px;"> Rp.'.number_format($sales->subtotal * 10 / 100).'</td>
                            </tr>
                            
                            <tr>
                                <td colspan="4" style="text-align: right">Total</td>
                                <td style="border: 1px solid #dddddd; padding: 2px;">Rp. '.number_format($sales->total_price).'</td>
                            </tr>
                        </table>
                        </div>
                        
                        <div style = "margin-left: 80px; margin-top: 30px">Metode Pembayaran: '.$sales->payment_method.'</div>
                        <div style = "margin-left: 80px; margin-bottom: 30px">Batas Pembayaran: 30 hari sejak barang diterima</div>
                        
                        <div style="text-align:center">
                            <table style="text-align:center" align="center">
                                <tr>
                                    <td width = "200" align="left">Disetujui</td>
                                    <td width = "200" align="right">Company Name</td>
                                </tr>
                                <tr>
                                    <td height="150" align="left" valign="bottom">(Liliana Harsono)</td>
                                    <td height="150 " align="right" valign="bottom">('.$sales->buyer_name.')</td>
                                </tr>
                            </table>
                        </div>
                   </div>';
        }
        else if ($path == 'order/{id}/delivery/pdf') {
            $output = '
                    <div>
                        <div style = "width: 50%; margin:auto">
                            <div style="display: inline-block">
                                <img width="100px" height="100px" src = "https://i.ibb.co/XZ4K7zF/icon.png">
                            </div>
                            <div style="display: inline-block">
                                <h2><strong>PT. Dirgaraya Harsa</strong></h2>
                                <div style="margin-top: -10px">Sawah Lio No. 50, Jakarta 11250</div>
                                <div>Telp. (021) 6308312 Fax (021) 6335625</div>
                            </div>
                        </div>
                        
                         <div style="margin-top: 20px">
                             <div style="width: 50%; display: inline-block"></div>
                             <div style="width: 50%; display: inline-block">Tanggal: '.date ('d M Y',strtotime($sales->order_date)).'</div>
                        </div>
                        <div>
                             <div style="width: 50%; display: inline-block">No. PO: '.$sales->order_id.'</div>
                             <div style="width: 50%; display: inline-block;">Perusahaan: '.$sales->buyer->name.'</div>
                        </div>
                        <div>
                             <div style="width: 60%; display: inline-block">No. Delivery: '.$sales->delivery_id.'</div>
                             <div style="width: 40%; display: inline-block;">'.$sales->buyer->address.'</div>
                        </div>
        
                        <div style="text-align:center">
                           <h3>DELIVERY ORDER</h3>
                           <table style="text-align:center; width: 80%; border-collapse: collapse;" align="center">
                                <tr>
                                   <th style="border: 1px solid #dddddd; padding: 2px;">No.</th>
                                   <th style="border: 1px solid #dddddd; padding: 2px;">Nama Barang</th>
                                   <th style="border: 1px solid #dddddd; padding: 2px;">Quantity</th>
                                </tr>';

            foreach ($details as $index => $d) {
                $output .= '
                        <tr>
                            <td style="border: 1px solid #dddddd; padding: 2px;">'.($index+1).'</td>
                            <td style="border: 1px solid #dddddd; padding: 2px;">'.$d->product->name.'</td>
                            <td style="border: 1px solid #dddddd; padding: 2px;">'.$d->qty.'</td>
                        </tr>';
            }

            $output .= '
                            </table>
                        </div>
                        
                        <div style="text-align:center; margin-top: 30px">
                            <table style="text-align:center" align="center">
                                <tr>
                                    <td width = "200" align="left">Tanda Terima</td>
                                    <td width = "200" align="right">Hormat Kami,</td>
                                </tr>
                                <tr>
                                    <td height="150" align="left" valign="bottom">('.$sales->recipient_name.')</td>
                                    <td height="150 " align="right" valign="bottom">PT. Dirgaraya Harsa</td>
                                </tr>
                            </table>
                        </div>
                   </div>';
        }
        else if ($path == 'order/{id}/invoice/pdf') {
            $output = '
                    <div>
                        <div style = "width: 50%; margin:auto">
                            <div style="display: inline-block">
                                <img width="100px" height="100px" src = "https://i.ibb.co/XZ4K7zF/icon.png">
                            </div>
                            <div style="display: inline-block">
                                <h2><strong>PT. Dirgaraya Harsa</strong></h2>
                                <div style="margin-top: -10px">Sawah Lio No. 50, Jakarta 11250</div>
                                <div>Telp. (021) 6308312 Fax (021) 6335625</div>
                            </div>
                        </div>
                        
                        <table width: 80%; align="center">
                            <tr>
                               <td width="15%">No. PO</td>
                               <td width="2%">:</td>
                               <td width="40%">'.$sales->order_id.'</td>
                               <td width="30%">Jakarta, '.date ('d M Y',strtotime($sales->invoice_date)).'</td>
                            </tr>
                            
                            <tr>
                               <td>No. Surat Jalan</td>
                               <td>:</td>
                               <td>'.$sales->delivery_id.'</td>
                               <td>Kepada :'.$sales->buyer->name.'</td>
                            </tr>
                            
                            <tr>
                               <td>No. Invoice</td>
                               <td>:</td>
                               <td>'.$sales->invoice_id.'</td>
                               <td>'.$sales->buyer->address.'</td>
                            </tr>
                        </table>
                        
                        <div style="text-align:center">
                           <h3>INVOICE</h3>
                           <table style="text-align:center; width: 80%; border-collapse: collapse;" align="center">
                                <tr>
                                   <th style="border: 1px solid #dddddd; padding: 2px;">No.</th>
                                   <th style="border: 1px solid #dddddd; padding: 2px;">Nama Barang</th>
                                   <th style="border: 1px solid #dddddd; padding: 2px;">Quantity</th>
                                   <th style="border: 1px solid #dddddd; padding: 2px;">Harga Satuan</th>
                                   <th style="border: 1px solid #dddddd; padding: 2px;">Jumlah</th>
                                </tr>';

            foreach ($details as $index => $d) {
                $output .= '
                        <tr>
                            <td style="border: 1px solid #dddddd; padding: 2px;">'.($index+1).'</td>
                            <td style="border: 1px solid #dddddd; padding: 2px;">'.$d->product->name.'</td>
                            <td style="border: 1px solid #dddddd; padding: 2px;">'.$d->qty.'</td>
                            <td style="border: 1px solid #dddddd; padding: 2px;"> Rp.'.number_format($d->product->price).'</td>
                            <td style="border: 1px solid #dddddd; padding: 2px;"> Rp.'.number_format($d->product->price * $d->qty).'</td>
                        </tr>';
            }

            $output .= '
                            <tr>
                                <td  colspan="4" style="text-align: right">Subtotal</td>
                                <td style="border: 1px solid #dddddd; padding: 2px;"> Rp.'.number_format($sales->subtotal).'</td>
                            </tr>
                            
                            <tr>
                                <td colspan="4" style="text-align: right">PPN</td>
                                <td style="border: 1px solid #dddddd; padding: 2px;"> Rp.'.number_format($sales->subtotal * 10 / 100).'</td>
                            </tr>
                            
                            <tr>
                                <td colspan="4" style="text-align: right">Total</td>
                                <td style="border: 1px solid #dddddd; padding: 2px;">Rp. '.number_format($sales->total_price).'</td>
                            </tr>
                        </table>
                        </div>
                        
                        <div style="text-align:center; margin-top: 20px">
                            <table style="text-align:center" align="center">
                                <tr>
                                    <td width = "200" align="left">
                                        Pembayaran ditujukan kepada: <br/>
                                        PT Dirgaraya Harsa <br/>
                                        (BCA KCP KHM Mansyur 1) <br/>
                                        179 3000 573</td>
                                    <td width = "200" align="right" align="top">Hormat Kami</td>
                                </tr>
                                <tr>
                                    <td align="left">
                                         
                                    </td>
                                    <td height="150 " align="right" valign="bottom">PT. Dirgaraya Harsa</td>
                                </tr>
                            </table>
                        </div>
                   </div>';
        }
        return $output;
    }

    public function update(Request $request)
    {
        $sales = Sales::where('id', $request->id)->first();

        $sales->status = ($request->status == 'dispatched' ? 'Order Dispatched' : 'Order Completed');
        $sales->delivery_date = $request->date;
        $sales->save();

        return redirect()->back();
    }

    public function changeStatus (Request $request) {
        $sales = Sales::find($request->id);

        $sales->notif_status = 'Confirmed';


        $salesDetail = SalesDetail::where('order_id', $sales->order_id)->get();

        foreach ($salesDetail as $sd) {
            $product = Product::where('product_id', $sd->product_id)->first();

            $product->stock -= $sd->qty;
            $product->save();
        }

        $sales->save();

        return redirect()->back();
    }

    public function destroy(Request $request)
    {
        $sales = Sales::where('id', $request->id)->first();
        $sales->status = 'Order Cancelled';
        $sales->save();

        return redirect()->back();
    }
}
