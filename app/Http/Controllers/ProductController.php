<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductCategory;
use App\ProductPicture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{
    public function index($id)
    {
        if (Auth::check()) {
            $products =Product::where('category_id', $id)->with('productCategory')->with('productType')->get();
            $types = $products->groupBy('type_id');
            $category= ProductCategory::where('category_id', $id)->first();
            $pictures=ProductPicture::All();

            return view('product-detail')->with(['types' => $types, 'pictures' => $pictures, 'category' => $category]);
        }

//      $products = DB::table('products')->where('category_id', $id)->join('product_types', 'product_types.type_id', '=', 'products.type_id')->get();

        return redirect('/');
    }

    public function search (Request $request) {
//        $product = Product::where('name', 'LIKE', '%'.$request->data.'%')->get();
//        dd($product);
//        if ($product != null) {
//            $category = ProductCategory::where('category_id', $product->category_id)->get();
//            dd($category);
//        }

        $category = ProductCategory::where('name', 'LIKE', '%'.$request->data.'%')->first();

        if ($category != null) {
            return redirect('/category/'.$category->category_id.'/catalogue');
        }

        return redirect('/');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'id' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'price' => ['required'],
            'lot' => ['required'],
        ]);
    }

    public function store(Request $request) // insert
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $product = new Product();
        $product->product_id = $request->id;
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->type_id = $request->type_id;
        $product->price = $request->price;
        $product->stock = 0;
        $product->lot_size = $request->lot;
        $product->created_at = Carbon::now();

        $product->save();

        return redirect()->back();
    }

    public function show(Product $product) // show data
    {
        if (Auth::check() && Auth::user()->role != 'Customer') {
            $products =Product::with('productCategory')->with('productType')->get();
            $types = $products->groupBy('type_id');

            return view('inventory')->with(['types' => $types]);
        }

        return redirect('/');
    }

    public function edit($id) // show update form
    {
        if (Auth::check() && Auth::user()->role != 'Customer') {
            $products =Product::where('category_id', $id)->with('productCategory')->with('productType')->get();
            $types = $products->groupBy('type_id');
            $category= ProductCategory::where('category_id', $id)->first();

            $pictures=ProductPicture::All();

            return view('product-manage')->with(['types' => $types, 'pictures' => $pictures, 'category' => $category]);
        }

        return redirect('/');
    }

    public function update(Request $request) // update
    {
        $product = Product::where('product_id', $request->id)->first();

        $product->name = $request->name;
        $product->price = $request->price;
        $product->updated_at = Carbon::now();

        $product->save();

        return redirect()->back();
    }

    public function destroy(Request $request) // delete
    {
        $product = Product::where('product_id', $request->id)->first();

        $product->delete();
        return redirect()->back();
    }

}
