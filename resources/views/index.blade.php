@extends('layouts.main')

@section('content')
<div class="container-fluid p-4 mt-3">
    @if(session()->flash('success'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session()->messages('success') }}
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
            <button class="btn btn-warning">Explore More</button>
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
        <a href="#" class="card text-dark" style="width: 12rem;">
            <img src="/assets/category/camera.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
                <h5 class="card-title ">Kamera</h5>
            </div>
        </a>
    </div>
    <hr>
    <!-- category END -->
    <!-- produk start -->
    <div class="products-container">
        <h2>Products : </h2>
        <a href="#" class="card text-dark" style="width: 16rem;">
            <img src="/assets/products/airpod.png" class="card-img-top" alt="...">
            <div class="card-body ">
                <h6 class="card-subtitle mb-2 text-muted">Rp. 50.000,-</h6>
                <h5 class="card-title ">Airpod Camera</h5>
            </div>
        </a>
    </div>
    <hr>
    <!-- produk end -->
</div>
@endsection