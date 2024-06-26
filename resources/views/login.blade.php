@extends('layouts.main')

@section('content')
<div class="container-fluid p-4 mt-3">
    <h2>Login </h2>
     @if(session()->has('success'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session('success')  }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
    @endif
    <form method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Kita Tidak Akan Membagikan Email Anda Pada Siapapun.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
        </div>
        <small class="form-text">Anda Belum Punya Akun ? <a href="/register" class="text-primary"> Daftar Sekarang !</a> </small>      
       
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection