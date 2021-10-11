Formulario para registrar empleados
@extends('layouts.main')
@section('content')

<form action="{{ url('/empleado') }}" method="post" enctype="multiplart/form-data"> 
@csrf
<br>
@include('empleado.form', ['modo'=>'Crear'] );


</form>
@endsection