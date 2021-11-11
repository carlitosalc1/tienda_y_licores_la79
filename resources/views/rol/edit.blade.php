@extends('layouts.main')
@section('content')
<div class="container">

<form action="{{ url('/rol/'.$rol->id ) }}" method="post" enctype="multiplart/form-data"> 
@csrf
{{ method_field('PATCH') }}
@include('rol.form', ['modo'=>'Editar']);

</form>
</div>
@endsection
 