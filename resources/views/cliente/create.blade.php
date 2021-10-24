@extends('layouts.main')
@section('content')

<div class="container">
<form action="{{ url('/cliente') }}" method="post" enctype="multiplart/form-data"> 
@csrf
<br>
@include('cliente.form', ['modo'=>'Crear'] );

</form>
</div>
@endsection