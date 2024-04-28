@extends('layouts.main')

@section('content')
<div class="container-fluid p-4 mt-3">
    <h2>Register Yourself</h2>
    <form method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="email" class="form-control" name="name" id="name" aria-describedby="emailHelp">            
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Kita Tidak Akan Membagikan Email Anda Pada Siapapun.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="">Upload Photo Profile *(opsional)</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div> 
       </div>
        <small class="form-text">Anda Sudah Daftar ? <a href="" class="text-primary"> Login disini !</a> </small>      
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection