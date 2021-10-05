Formulario para registrar empleados

<form action="{{ url('/empleado') }}" method="post" enctype="multiplart/form-data"> 
@csrf
<br>
@include('empleado.form');


</form>