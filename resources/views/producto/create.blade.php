@extends('layouts.main')
@section('content')
<div class="container">

<form action="{{ url('/producto') }}" method="post" enctype="multiplart/form-data"> 
@csrf
<br>
@include('producto.form', ['modo'=>'Crear'] );

</form>
</div>
@endsection