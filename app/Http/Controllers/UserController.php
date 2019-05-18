<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $user = NULL;
        if (Auth::check()) {
            $user = User::where('username', Auth::User()->username)->first();
            return view('profile')->with('user', $user);
        }

        return redirect()->back();
    }
}
