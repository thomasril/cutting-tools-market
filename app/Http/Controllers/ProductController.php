<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductCategory;
use App\ProductPicture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        if (Auth::check()) {
            $products =Product::where('category_id', $id)->with('productCategory')->with('productType')->get();
            $types = $products->groupBy('type_id');
            $category= ProductCategory::where('category_id', $id)->first();

            $pictures=ProductPicture::All();

//            dd($types);
            return view('product-detail')->with(['types' => $types, 'pictures' => $pictures, 'category' => $category]);
        }

//      $products = DB::table('products')->where('category_id', $id)->join('product_types', 'product_types.type_id', '=', 'products.type_id')->get();

        return redirect('/');
    }

    public function store(Request $request) // insert
    {
        //
    }

    public function show(Product $product) // show data
    {
        //
    }

    public function edit(Product $product) // show update form
    {
        //
    }

    public function update(Request $request, Product $product) // update
    {
        //
    }

    public function destroy(Product $product) // delete
    {
        //
    }

}
