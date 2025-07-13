<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showSignup(){
        return view('auth.signup');
    }

    public function signup(Request $request){
        $request->validate([
            'name'=>'required|min:3',
            'password'=>'required|min:6|confirmed',
            'email'=>'required|email|unique:users',
        ]);

        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);

        Auth::login($user);
        return redirect()->route('dashboard');

    }

    public function showSignin(){
        return view('auth.signin');
    }

    public function signin(Request $request){
        $credentials=$request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        return back()->withErrors([
            'email'=>'Invalid Credentials!',
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/signin');
    }
}
