<?php

namespace App\Http\Controllers;

use App\ProductCategory;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ProductCategoryController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect('/catalogue');
        }

        return redirect('/signup');
    }

    public function show(){
        $categories = ProductCategory::All();
        return view('home')->with('categories', $categories);
    }



    public function update(Request $request)
    {
        dd($request);

        $category = ProductCategory::find($request->id);

        $category->material = $request->material;
        $category->flutes = $request->flutes;
        $category->coating = $request->coating;
        $category->hardness = $request->hardness;
        $category->updated_at = Carbon::now();
        $category->save();

        return redirect()->back();
    }
}
