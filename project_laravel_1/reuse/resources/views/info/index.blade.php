@extends('Layouts.navbar')
{{-- @extends('Layouts.table') --}}
@section('content')
 <br>
<div class="row">
    <div class="col align-self-start">
       <a class="btn btn-primary" href="{{route('info.create')}}" >create</a> 
    </div>
</div>
<br>
<x-table-index :columns="['id', 'name', 'age' , 'address']" :data="$info" />
@endsection


















{{-- test
@if ($message = Session::get('success'))
<div class="alert alert-success" role="alert">
        {{$message}}
</div>
@endif --}}