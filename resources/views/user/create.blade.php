@extends('layouts.main')
@section('content')
<div class="container">
    
<form action="{{ url('/user') }}" method="post" enctype="multiplart/form-data"> 
@csrf
<br>
@include('user.form', ['modo'=>'Crear'] );

</form>
</div>
@endsection