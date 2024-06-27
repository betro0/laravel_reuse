@extends('Layouts.navbar')
{{-- @extends('Layouts.table') --}}
@section('content')
 <br>
<br>
<h1></h1>
<x-table-show :columns="['id', 'name', 'age' , 'address']" :d="$info" />
@endsection


















{{-- test
@if ($message = Session::get('success'))
<div class="alert alert-success" role="alert">
        {{$message}}
</div>
@endif --}}