Formulario para registrar Clientes

<form action="{{ url('/cliente') }}" method="post" enctype="multiplart/form-data"> 
@csrf
<br>
@include('cliente.form', ['modo'=>'Crear'] );


</form>