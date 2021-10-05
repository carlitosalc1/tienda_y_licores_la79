<label for="Tipo de Identificacion"> Tipo de Identificacion </label>
<input type="text" name="tipo_identificacion" value="{{ $empleado->tipo_identificacion }}" id="tipo_identificacion">
<br><br>
<label for="Numero de Identificacion"> Numero de identificacion </label>
<input type="text" name="numero_identificacion" value="{{ $empleado->numero_identificacion }}" id="numero_identificacion">
<br><br>
<label for="Nombre"> Nombre </label>
<input type="text" name="nombre" value="{{ $empleado->nombre }}" id="nombre">
<br><br>
<label for="Apellido"> Apellido </label>
<input type="text" name="apellido" value="{{ $empleado->apellido }}" id="apellido">
<br><br>
<label for="Direccion"> Direccion </label>
<input type="text" name="direccion" value="{{ $empleado->direccion }}" id="direccion">
<br><br>
<label for="Telefono"> Telefono </label>
<input type="text" name="telefono" value="{{ $empleado->telefono }}" id="telefono">
<br><br>
<label for="Correo"> Correo</label>
<input type="text" name="correo" value="{{ $empleado->correo }}" id="correo">
<br><br>
<label for="Foto"> Foto </label>
{{ $empleado->foto }}
<img scr="{{ asset('storage').'/'.$empleado->foto }}" alt="">  

<input type="file" name="foto" value="" id="foto">
<br><br>
<input type="submit" value="Guardar datos">
<br><br>