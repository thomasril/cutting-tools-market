<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class RegisterController extends Controller
{
    use RegistersUsers;

    public function index(){
      if(Auth::check()){
            return redirect('/');
        }
        return view('register');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string'],
            'username' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:5 '],
        ]);
    }


    public function checkRegisterData(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $user = User::where('username', $request->username)->where('password', $request->password)->first();
        if(!$user) {
            $err = "User not found! 
            Maaf, username / password yang Anda masukkan tidak sesuai.
             Pastikan Anda telah terdaftar sebagai konsumen PT. Dirgaraya Harsa.";
            return redirect()->back()->withErrors(['err' => $err]);
        }

        if ($user->name != null){
            $err = "You have already registered! 
            Anda telah terdaftar sebelumnya dengan username ".$user->username.". 
             Silakan lakukan Login.";
            return redirect()->back()->withErrors(['err' => $err]);
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;

        return view('confirmation')->with('user', $user);
    }

    public function register (Request $request) {
        $user = User::where('username', $request->username)->where('password', $request->password)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->role="Customer";
        $user->save();

        Auth::login($user);
        return view('profile-saved')->with('user', $user);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'username' => $data['username'],
            'password' => $data['password'],
        ]);
    }
}
