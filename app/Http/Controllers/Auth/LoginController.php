<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Cookie;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\UserInterface;

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
        return redirect('/login');
    }

    private function validator(array $data){
        return Validator::make($data, [
            'username' => 'required',
            'password' => 'required|min:5',
        ]);
    }

    protected function validateLogin(Request $request)
    {
        $user = User::where('username', $request->username)->where('password', $request->password)->first();

        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        if(!$user) {
            $err = 'User Tidak Ada';
            return redirect()->back()->withErrors(['err' => $err]);
        }

        Auth::login($user);

        return redirect('/');
    }
}
