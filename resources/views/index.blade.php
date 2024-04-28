@extends('layouts.main')

@section('content')
<style>
    .card {
        transition:1s;
        padding:1rem
    }
    .card:hover{
        transform: translateY(-15px);
        box-shadow: 1px 1px 20px 0px black;
    }
</style>
<div class="container-fluid p-4 mt-3">
    @if(session()->flash('success'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ flash('success')->messages  }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
    @endif
    <!-- HERO START -->
    <div class="hero-container d-flex align-items-center"style="justify-content: space-between;">
        <div class="left-hero mx-5">
            <h1 style="color:#00215E; font-size:4rem;" class="poppins-bold">Merah Putih</h1>
            <p style="color:#00215E;font-size:1.3rem;" class="poppins-medium">Toko Online Masa Depan <br>Bangsa Indonesia</p>
            <a href="#products" class="btn btn-warning">Explore More</a>
        </div>
        <div class="right-hero">
            <img src="/assets/banner/home.png" alt="">
        </div>
    </div>
    <hr>
    <!-- HERO END -->
    <!-- category start -->
    <div class="cateogry-container">
        <h2>Categories : </h2>
        <div class="row" style="gap:1rem">
        @foreach($categories as $category)
        <a href="#" class="card text-dark" style="width: 12rem;">
            <img src="/assets/category/{{$category->category_icon}}" class="card-img-top" alt="...">
            <div class="card-body text-center">
                <h5 class="card-title ">{{$category->category_name}}</h5>
            </div>
        </a>
        @endforeach
        </div>
    </div>
    <hr>
    <!-- category END -->
    <!-- produk start -->
    <div class="products-container">
        <h2 id="products">All Products : </h2>
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
    <hr>
    <!-- produk end -->
</div>
@endsection