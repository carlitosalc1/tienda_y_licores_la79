Formulario para registrar empleados
<form action="{{ url('/empleado') }}" method="post" enctype="multiplart/form-data"> 
@csrf
<br>
<label for="Tipo de Identificacion"> Tipo de Identificacion </label>
<input type="text" name="tipo_identificacion">
<br><br>
<label for="Numero de Identificacion"> Numero de identificacion </label>
<input type="text" name="numero_identificacion">
<br><br>
<label for="Nombre"> Nombre </label>
<input type="text" name="nombre">
<br><br>
<label for="Apellido"> Apellido </label>
<input type="text" name="apellido">
<br><br>
<label for="Direccion"> Direccion </label>
<input type="text" name="direccion">
<br><br>
<label for="Telefono"> Telefono </label>
<input type="text" name="telefono">
<br><br>
<label for="Correo"> Correo</label>
<input type="text" name="correo">
<br><br>
<label for="Foto"> Foto </label>
<input type="file" name="foto">
<br><br>
<input type="submit" value="Guardar datos">
<br><br>
</form>