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

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index(){
        if(Auth::check()){
            return view('home');
        }
        $username = Cookie::get('username');
        return view('login')->with(['username'=>$username]);
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

    public function checkUser(){
        if(Auth::check()){
            $user = Auth::user();
            return response()->json(['check'=>true,'user'=>$user]);
        }
        return response()->json(['check'=>false,]);
    }

    protected function validateLogin(Request $request)
    {
        $user = User::where('username', $request->username)->first();

        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        if(!$user) {
            $err = 'user not found';
            return redirect()->back()->withErrors(['err' => $err]);
        }

        if (!$user->name) {
            $err = 'you must register first!';
            return redirect()->back()->withErrors(['err' => $err]);
        }

        if (Auth::attempt(['username' => $user->username, 'password' => $user->password, 'role' => $user->role]))
        {
            Cookie::queue('username',$user->username,60);
            return redirect('/');
        }
        $err = 'Wrong username/password combination';
        return redirect()->back()->withErrors(['err' => $err]);

    }
}
