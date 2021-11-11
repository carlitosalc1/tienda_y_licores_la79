@extends('layouts.main')
@section('content')
<div class="container">

<form action="{{ url('/user/'.$user->id ) }}" method="post" enctype="multiplart/form-data"> 
@csrf
{{ method_field('PATCH') }}
@include('user.form', ['modo'=>'Editar']);

</form>
</div>
@endsection
 