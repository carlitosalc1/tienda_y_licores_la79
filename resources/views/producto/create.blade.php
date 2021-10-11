Formulario para registrar empleados

<form action="{{ url('/producto') }}" method="post" enctype="multiplart/form-data"> 
@csrf
<br>
@include('producto.form', ['modo'=>'Crear'] );


</form>