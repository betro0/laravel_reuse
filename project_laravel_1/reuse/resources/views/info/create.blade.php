@extends('Layouts.navbar')
@section('content')
<form action="{{route('info.store')}}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label"> name </label>
      <input type="text" class="form-control"  aria-describedby="emailHelp" name="name">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label"> age </label>
      <input type="text" class="form-control" name="age">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label"> address </label>
      <input type="text" class="form-control" name="address">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br>
<div class="row">
    <div class="col align-self-start">
       <a class="btn btn-primary" href="{{route('info.index')}}" >all studen</a> 
    </div>
</div>
<br>
@endsection

























{{-- @if ($errors->any())
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach ($errors->all as $item)
           <li>
            {{$item}}
        </li>  
        @endforeach
       
    </ul>
</div>
@endif --}}