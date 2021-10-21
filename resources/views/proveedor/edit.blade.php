@extends('layouts.main')
@section('content')
<div class="container">

<form action="{{ url('/proveedor/'.$proveedor->id ) }}" method="post" enctype="multiplart/form-data"> 
@csrf
{{ method_field('PATCH') }}
@include('proveedor.form', ['modo'=>'Editar']);

</form>
</div>
@endsection
 