@extends('layouts.main')

@section('content')
<div class="container-fluid p-4 mt-3">
    <h2>Register Yourself</h2>
    <form method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">            
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Kita Tidak Akan Membagikan Email Anda Pada Siapapun.</small>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <!-- <div class="form-group">
            <label for="">Upload Photo Profile *(opsional)</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div> 
       </div> -->
        <small class="form-text">Anda Sudah Daftar ? <a href="/login" class="text-primary"> Login disini !</a> </small>      
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection