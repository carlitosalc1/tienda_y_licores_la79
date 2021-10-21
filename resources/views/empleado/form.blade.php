<h1> {{ $modo }} empleado </h1>
@if(count($errors)>0)

<div class="alert alert-danger" role="alert">
 <ul>

   @foreach( $errors->all() as $error)
   <li> {{ $error}} </li>
@endforeach
 </ul>
</div>

@endif
<br>
<div class="form-group">
<label for="Tipo de Identificacion"> Tipo de Identificacion </label>
<input type="text" class="form-control" name="tipo_identificacion" value="{{ isset($empleado->tipo_identificacion) ? $empleado->tipo_identificacion : ''  }}" id="tipo_identificacion">
</div>
<div class="form-group">
<label for="Numero de Identificacion"> Numero de identificacion </label>
<input type="text" class="form-control"  name="numero_identificacion" value="{{ isset($empleado->numero_identificacion) ? $empleado->numero_identificacion : ''  }}" id="numero_identificacion">
</div>
<div class="form-group">
<label for="Nombre"> Nombre </label>
<input type="text" class="form-control"  name="nombre" value=" {{ isset($empleado->nombre) ? $empleado->nombre : ''  }}" id="nombre">
</div>
<div class="form-group">
<label for="Apellido"> Apellido </label>
<input type="text" class="form-control"  name="apellido" value="{{ isset($empleado->apellido) ? $empleado->apellido : ''  }}" id="apellido">
</div>
<div class="form-group">
<label for="Direccion"> Direccion </label>
<input type="text" class="form-control"  name="direccion" value="{{ isset($empleado->direccion) ? $empleado->direccion : ''  }}" id="direccion">
</div>
<div class="form-group">
<label for="Telefono"> Telefono </label>
<input type="text" class="form-control"  name="telefono" value="{{ isset($empleado->telefono) ? $empleado->telefono : ''  }}" id="telefono">
</div>
<div class="form-group">
<label for="Correo"> Correo</label>
<input type="text" class="form-control"  name="correo" value="{{ isset($empleado->correo) ? $empleado->correo : ''  }}" id="correo">
</div>

<input class="btn btn-success" type="submit" value="{{ $modo }} datos" >
<br>