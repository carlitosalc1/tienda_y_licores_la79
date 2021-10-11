<h1> {{ $modo }} proveedor </h1>
<label for="Nombre"> Nombre </label>
<input type="text" name="nombre" value="{{ isset($proveedor->nombre) ? $proveedor->nombre : ''  }}" id="nombre">
<br><br>
<label for="Apellido"> Apellido </label>
<input type="text" name="apellido" value="{{ isset($producto->apellido) ? $producto->apellido : ''  }}" id="apellido">
<br><br>
<label for="Razon Social"> Razon Social </label>
<input type="text" name="razon_social" value=" {{ isset($producto->razon_social ) ? $producto->razon_social : ''  }}" id="razon_social">
<br><br>
<label for="Nit"> Nit </label>
<input type="text" name="nit" value="{{ isset($producto->nit) ? $producto->nit : ''  }}" id="nit">
<br><br>
<label for="Direccion"> Direccion </label>
<input type="text" name="direccion" value="{{ isset($producto->direccion) ? $producto->direccion : ''  }}" id="direccion">
<br><br>
<label for="Correo"> Correo </label>
<input type="text" name="correo" value="{{ isset($producto->correo) ? $producto->correo : ''  }}" id="correo">
<br><br>
<label for="Telefono"> Telefono</label>
<input type="text" name="telefono" value="{{ isset($producto->telefono) ? $producto->telefono : ''  }}" id="telefono">
<br><br>
<input type="submit" value=" Guardar datos" >
<br><br>