@extends('layouts.main')

@section('content')
    <div class="container-fluid p-4 mt-3">
        <h2>All Product :</h2>
        <div class="row" style="gap:1rem">
            @foreach($products as $product)
            <a href="#" class="card text-dark" style="width: 16rem;">
                <img src="/assets/products/{{$product->product_img}}" class="card-img-top" alt="...">
                <div class="card-body ">
                    <h6 class="card-subtitle mb-2 text-muted">Rp. {{$product->product_price}},-</h6>
                    <h5 class="card-title ">{{$product->product_name}}</h5>
                </div>
            </a>
            @endforeach
        </div>
    </div>
@endsection