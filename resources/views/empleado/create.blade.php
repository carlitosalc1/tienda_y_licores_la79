@extends('layouts.main')
@section('content')
<div class="container">
    
<form action="{{ url('/empleado') }}" method="post" enctype="multiplart/form-data"> 
@csrf
<br>
@include('empleado.form', ['modo'=>'Crear'] );

</form>
</div>
@endsection