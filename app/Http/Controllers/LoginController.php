<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function index(){
        return view('loginTemplate.Login');
    }

    public function Login(Request $request){
        $email = $request->email ;
        $pass = $request->password ;
        $credentails = ["email" => $email , "password" => $pass];

        if(Auth::attempt($credentails)){
            $request->session()->regenerate();
            return to_route('UserPage');
        }else{
            return back()->withErrors([
                'email' => "email ou mot de pass incorect"
            ]);
        }
    }


    public function logout(Request $request)
    {
        Auth::logout();

        // Redirect to the main page
        return redirect('/');
    }

function SignUp(){
    return view('loginTemplate.SignUp');
}

public function register(Request $request)
{

    $request->validate([
       'name' => 'required|string',
        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed',
    ]);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    // Return a success response
    return to_route('login')->with(['success' => 'User created successfully']);
}

}
