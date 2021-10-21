@extends('layouts.main')
@section('content')
<div class="container">

<form action="{{ url('/proveedor') }}" method="post" enctype="multiplart/form-data"> 
@csrf
<br>
@include('proveedor.form', ['modo'=>'Crear'] );

</form>
</div>
@endsection