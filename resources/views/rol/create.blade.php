@extends('layouts.main')
@section('content')
<div class="container">
    
<form action="{{ url('/rol') }}" method="post" enctype="multiplart/form-data"> 
@csrf
<br>
@include('rol.form', ['modo'=>'Crear'] );

</form>
</div>
@endsection