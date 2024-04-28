@extends('layouts.main')

@section('content')
<?php
$fmt = new NumberFormatter( 'id_ID', NumberFormatter::CURRENCY, );
$fmt->setAttribute(\NumberFormatter::MIN_FRACTION_DIGITS, 0);
// echo $fmt->formatCurrency(, "Rp.")."\n";

?>
    <div class="container-fluid p-4 mt-3">
        <!--  -->
        @if(session()->has('success'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('success')  }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama barang</th>
                <th scope="col">Brand</th>
                <th scope="col">Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <th scope="row">{{ $loop->iteration  }}</th>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->product_brand}}</td>
                    <td>{{$product->product_price}}</td>
                 </tr>
                @endforeach
            </tbody>
        </table>
        <!--  -->
    </div>
@endsection