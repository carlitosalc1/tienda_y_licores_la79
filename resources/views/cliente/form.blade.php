<h1> {{ $modo }} cliente </h1>
<label for="Tipo de Identificacion"> Tipo de Identificacion </label>
<input type="text" name="tipo_identificacion" value="{{ isset($empleado->tipo_identificacion) ? $empleado->tipo_identificacion : ''  }}" id="tipo_identificacion">
<br><br>
<label for="Numero de Identificacion"> Numero de identificacion </label>
<input type="text" name="numero_identificacion" value="{{ isset($empleado->numero_identificacion) ? $empleado->numero_identificacion : ''  }}" id="numero_identificacion">
<br><br>
<label for="Nombre"> Nombre </label>
<input type="text" name="nombre" value=" {{ isset($empleado->nombre) ? $empleado->nombre : ''  }}" id="nombre">
<br><br>
<label for="Apellido"> Apellido </label>
<input type="text" name="apellido" value="{{ isset($empleado->apellido) ? $empleado->apellido : ''  }}" id="apellido">
<br><br>
<label for="Direccion"> Direccion </label>
<input type="text" name="direccion" value="{{ isset($empleado->direccion) ? $empleado->direccion : ''  }}" id="direccion">
<br><br>
<label for="Telefono"> Telefono </label>
<input type="text" name="telefono" value="{{ isset($empleado->telefono) ? $empleado->telefono : ''  }}" id="telefono">
<br><br>
<label for="Correo"> Correo</label>
<input type="text" name="correo" value="{{ isset($empleado->correo) ? $empleado->correo : ''  }}" id="correo">
<br><br>
<input type="submit" value=" Guardar datos" >
<br><br>