@extends('layouts.main')

@section('content')
<div class="container-fluid p-4 mt-3">
   <h2>- 1</h2>
   <div class="input-group mb-3">
    <div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect01">Options</label>
    </div>
    <select class="custom-select" id="inputGroupSelect01">
        <option selected disabled>Choose...</option>
        @foreach($data['rajaongkir']['results'] as $result)
        <option value="{{$result['province_id']}}">{{$result['province']}}</option>
        @endforeach
    </select>
    </div>

</div>
@endsection