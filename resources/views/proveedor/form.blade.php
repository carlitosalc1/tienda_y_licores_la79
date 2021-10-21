<h1> {{ $modo }} proveedor </h1>
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
<label for="Nombre"> Nombre </label>
<input type="text" class="form-control" name="nombre" value="{{ isset($proveedor->nombre) ? $proveedor->nombre : ''  }}" id="nombre">
</div>
<div class="form-group">
<label for="Apellido"> Apellido </label>
<input type="text" class="form-control" name="apellido" value="{{ isset($producto->apellido) ? $producto->apellido : ''  }}" id="apellido">
</div>
<div class="form-group">
<label for="Razon Social"> Razon Social </label>
<input type="text" class="form-control" name="razon_social" value=" {{ isset($producto->razon_social ) ? $producto->razon_social : ''  }}" id="razon_social">
</div>
<div class="form-group">
<label for="Nit"> Nit </label>
<input type="text" class="form-control" name="nit" value="{{ isset($producto->nit) ? $producto->nit : ''  }}" id="nit">
</div>
<div class="form-group">
<label for="Direccion"> Direccion </label>
<input type="text" class="form-control" name="direccion" value="{{ isset($producto->direccion) ? $producto->direccion : ''  }}" id="direccion">
</div>
<div class="form-group">
<label for="Correo"> Correo </label>
<input type="text" class="form-control" name="correo" value="{{ isset($producto->correo) ? $producto->correo : ''  }}" id="correo">
</div>
<div class="form-group">
<label for="Telefono"> Telefono</label>
<input type="text" class="form-control" name="telefono" value="{{ isset($producto->telefono) ? $producto->telefono : ''  }}" id="telefono">
</div>

<input class="btn btn-success" type="submit" value="{{ $modo }} datos" >
<br>