Formulario para registrar Proveedores

<form action="{{ url('/proveedor') }}" method="post" enctype="multiplart/form-data"> 
@csrf
<br>
@include('proveedor.form', ['modo'=>'Crear'] );


</form>