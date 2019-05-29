<?php

namespace App\Http\Controllers;

use App\ProductCategory;
use Illuminate\Http\Request;

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

    public function update(Request $request, ProductCategory $productCategory)
    {
        //
    }


    public function destroy(ProductCategory $productCategory)
    {
        //
    }
}
