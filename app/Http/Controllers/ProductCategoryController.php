<?php

namespace App\Http\Controllers;

use App\ProductCategory;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $categories = ProductCategory::All();

        return view('home')->with('categories', $categories);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function search (Request $request) {

    }

    public function show(ProductCategory $productCategory)
    {
        //
    }

    public function edit(ProductCategory $productCategory)
    {
        //
    }

    public function update(Request $request)
    {
        $category = ProductCategory::find($request->id);

        $category->material = $request->material;
        $category->flutes = $request->flutes;
        $category->coating = $request->coating;
        $category->hardness = $request->hardness;
        $category->updated_at = Carbon::now();
        $category->save();

        return redirect()->back();
    }


    public function destroy(ProductCategory $productCategory)
    {
        //
    }
}
