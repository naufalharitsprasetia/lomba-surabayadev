<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    // 
    public function index(){
        return view('index', ['active' => 'home']);
    }
    public function login(){
        return view('login' ,['active' => 'login']);
    }
    public function register(){
        return view('register',['active' => 'register']);
    }
    public function addUser(Request $request){
        $validatedData = $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'picture' => 'nullable',
                ]
        ); 
        // return view('');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/')->with('success', "Login Successfully!");
        }
 
        return back()->withErrors([
            'loginError' => 'Login Failled !',
        ])->onlyInput('email');
    }
}
