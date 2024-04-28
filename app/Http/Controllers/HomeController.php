<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    // 
    public function contact(){
        return view('contact', ['active' => 'contact' ]);
    }
    public function dashboard(){
        $products = Product::all();
        return view('dashboard', ['active' => 'dashboard','products' => $products ]);
    }
    public function index(){
        $products = Product::all();
        $categories = Category::all();
        return view('index', ['active' => 'home' , 'products' => $products, 'categories' => $categories]);
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
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);
        return redirect('/login')->with('success', "berhasil membuat akun baru!");
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
    public function logout(Request $request)
    {
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/login');
    }   
}
