<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class RegisterController extends Controller
{
//    use RegistersUsers;

    public function index(){
      if(Auth::check()){
            return redirect('/');
        }
        return view('register');
    }


    public function checkRegisterData(Request $request)
    {
        $user = User::where('username', $request->username)->where('password', $request->password)->first();

        if($user == null) {
            $err = "User tidak ada!";
            return redirect()->back()->withErrors(['err' => $err])->withInput(Input::all());
        }

        if ($user->name != null || $user->email != null){
            $err = "Anda telah terdaftar sebelumnya dengan username ".$user->username.". 
             Silakan lakukan Login.";
            return redirect()->back()->withErrors(['err' => $err]);
        }

        if ($user != null) {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->address = $request->address;

            return view('confirmation')->with('user', $user);
        }

        return redirect('/register');
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
