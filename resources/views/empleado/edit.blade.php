@extends('layouts.main')
@section('content')
<div class="container">

<form action="{{ url('/empleado/'.$empleado->id ) }}" method="post" enctype="multiplart/form-data"> 
@csrf
{{ method_field('PATCH') }}
@include('empleado.form', ['modo'=>'Editar']);

</form>
</div>
@endsection
 