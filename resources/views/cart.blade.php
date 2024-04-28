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
                <th scope="col">Quantity</th>
                <th scope="col">Harga</th>
                <th scope="col">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($carts as $cart)
                <tr>
                    <th scope="row">{{ $loop->iteration  }}</th>
                    <td>{{$cart->product->product_name}}</td>
                    <td><a href="/updateCart?id={{$cart->id}}&perubahan=-1" class="btn btn-sm btn-primary"><i class="bi bi-dash"></i></a>
                    {{$cart->cart_quantity}}
                    <a href="/updateCart?id={{$cart->id}}&perubahan=1" class="btn btn-sm btn-primary"><i class="bi bi-plus"></i></a>
                    </td>
                    <td>{{$fmt->formatCurrency($cart->product->product_price, "Rp.")}}</td>
                    <td>{{$fmt->formatCurrency($cart->cart_quantity*$cart->product->product_price, "Rp.")}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/checkout" class="btn btn-primary disabled" >Checkout</a>
        <!--  -->
    </div>
@endsection