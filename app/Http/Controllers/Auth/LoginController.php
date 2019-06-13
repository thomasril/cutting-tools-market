<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\UserInterface;
use Illuminate\Support\Facades\Route;

class LoginController extends Controller
{
    public function index(){
        if(Auth::check()){
            return redirect ('/');
        }

        return view('login');
    }

    public function logout(){
        Auth::logout();
        return redirect('/signup');
    }

    protected function validateLogin(Request $request){

        $path = Route::getFacadeRoot()->current()->uri();
        $user = User::where('username', $request->username)->where('password', $request->password)->first();

        if ($path == 'navbar/login') {
            if ($user == null)
                return redirect('/login');
            else if ($user != null && $user->name != '') {
                Auth::login($user);
                return redirect('/');
            }
        }
        else {
            if ($user == null) {
                $err = 'User Tidak Ada';
                return redirect()->back()->withErrors(['err' => $err]);
            } else if ($user != null && $user->name == '') {
                $err = 'Maaf, username / password yang Anda masukkan tidak sesuai. Pastikan Anda telah terdaftar sebagai konsumen PT. Dirgaraya Harsa.';
                return redirect()->back()->withErrors(['err' => $err]);
            } else if ($user != null && $user->name != '') {
                Auth::login($user);
                return redirect('/');
            }
        }


        return redirect('/signup');
    }
}
