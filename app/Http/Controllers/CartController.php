<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $carts = Cart::where('cart_user_id',$user_id)->get();
        return view('cart', ['active'=>'cart', 'carts'=> $carts]);
    }
    public function create()
    {
    }
    public function addToCart(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'cart_product_id' => 'required' 
        ]);
        $validatedData['cart_user_id'] = auth()->user()->id;
        $validatedData['cart_quantity'] = 1;
        Cart::create($validatedData);
        return redirect('/cart')->with('success', 'Produk Berhasil ditambahkan !');
    }
    public function show(Cart $cart)
    {
    }
    public function edit(Cart $cart)
    {
    }
    public function updateCart()
    {   
        $cart = Cart::find($_GET['id']);
        $cart->cart_quantity += $_GET['perubahan'];
        $cart->save();
        return redirect('/cart');
    }
    public function destroy(Cart $cart)
    {
    }
    public function tahap1(){
        //    CHECKOUT
        $nama = auth()->user()->name;
        $email = auth()->user()->email;
        $user_id = auth()->user()->id;
        $carts = Cart::where('cart_user_id',$user_id)->get();
        return view('/cart');
        // $dataJson = static::getProvinsi();
        // $data = json_decode($dataJson);
        // // dd($data);
        // return view('tahap1', ['active'=> 'cart', 'data'=> $data]);  
    }
    public function getProvinsi(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "key: efdd43cdce117c14d458eb96bb9870d9"
        ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
        echo "cURL Error #:" . $err;
        } else {
        // echo $response;
        }
        return $response;
    }
}
