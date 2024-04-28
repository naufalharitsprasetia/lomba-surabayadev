@extends('layouts.main')

@section('content')
<?php
$fmt = new NumberFormatter( 'id_ID', NumberFormatter::CURRENCY, );
$fmt->setAttribute(\NumberFormatter::MIN_FRACTION_DIGITS, 0);
// echo $fmt->formatCurrency(, "Rp.")."\n";

?>
<div class="container-fluid p-4 mt-3">
    <a href="/products" class="btn btn-primary" >Back</a>
    <h2>Detail Product :</h2>
    <div class="d-flex">
        <div class="card" style="width: 25vw;">
            <img src="/assets/products/{{$product->product_img}}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">{{$product->product_brand}}</p>
                <h5 class="card-title">{{$product->product_name}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$fmt->formatCurrency($product->product_price, "Rp.")}}</h6>
                <p class="card-text text-success">Sisa : {{$product->product_stock}}</p>
                <form action="/addToCart" method="post">
                    @csrf  
                    <input type="hidden" name="cart_product_id" value="{{$product->id}}">
                    <button type="submit" class="btn btn-primary">Masukkan Keranjang</a>
                </form>
                    
            </div>
        </div>
        <div class="desc mx-3">
            <h4>{{$product->product_name}}</h4>
            <h2>{{$fmt->formatCurrency($product->product_price, "Rp.")}}</h2>
            <p>Deskripsi :</p>
            <br>
            <p>{{$product->product_desc}}</p>
        </div>
    </div>    
</div>  
@endsection