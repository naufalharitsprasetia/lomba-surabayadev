@extends('layouts.main')

@section('content')
<?php
$fmt = new NumberFormatter( 'id_ID', NumberFormatter::CURRENCY, );
$fmt->setAttribute(\NumberFormatter::MIN_FRACTION_DIGITS, 0);
// echo $fmt->formatCurrency(, "Rp.")."\n";

?>
    <div class="container-fluid p-4 mt-3">
        <h2>All Product :</h2>
        <div class="row" style="gap:1rem">
            @foreach($products as $product)
            <a href="/product/{{ $product->id }}" class="card text-dark" style="width: 16rem;">
                <img src="/assets/products/{{$product->product_img}}" class="card-img-top" alt="...">
                <div class="card-body ">
                    <h6 class="card-subtitle mb-2 text-muted">{{$fmt->formatCurrency($product->product_price, "Rp.")}}</h6>
                    <h5 class="card-title ">{{$product->product_name}}</h5>
                </div>
            </a>
            @endforeach
        </div>
    </div>
@endsection