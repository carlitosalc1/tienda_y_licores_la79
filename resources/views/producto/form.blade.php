<h1> {{ $modo }} producto </h1>
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
<label for="Nombre de producto"> Nombre de producto </label>
<input type="text" class="form-control" name="nombre_producto" value="{{ isset($empleado->nombre_producto) ? $empleado->nombre_producto : ''  }}" id="nombre_producto">
</div>
<div class="form-group">
<label for="Descripcion"> Descripcion </label>
<input type="text" class="form-control" name="descripcion" value="{{ isset($producto->descripcion) ? $producto->descripcion : ''  }}" id="descripcion">
</div>
<div class="form-group">
<label for="Marca"> Marca </label>
<input type="text" class="form-control" name="marca" value=" {{ isset($producto->marca) ? $producto->marca : ''  }}" id="marca">
</div>
<div class="form-group">
<label for="Categoria"> Categoria </label>
<input type="text" class="form-control" name="categoria" value="{{ isset($producto->categoria) ? $producto->categoria : ''  }}" id="categoria">
</div>
<div class="form-group">
<label for="Cantidad"> Cantidad </label>
<input type="text" class="form-control" name="cantidad" value="{{ isset($producto->cantidad) ? $producto->cantidad : ''  }}" id="cantidad">
</div>
<div class="form-group">
<label for="Codigo de barras"> Codigo de barras </label>
<input type="text" class="form-control" name="codigo_barra" value="{{ isset($producto->codigo_barra) ? $producto->codigo_barra : ''  }}" id="codigo_barra">
</div>
<div class="form-group">
<label for="Codigo de barras"> Stock </label>
<input type="text" class="form-control" name="stock" value="{{ isset($producto->stock) ? $producto->stock : ''  }}" id="stock">
</div>
<div class="form-group">
<label for="Precio de compra"> Precio de compra</label>
<input type="text" class="form-control" name="precio_compra" value="{{ isset($producto->precio_compra) ? $producto->precio_compra : ''  }}" id="precio_compra">
</div>
<div class="form-group">
<label for="Precio de venta"> Precio de venta</label>
<input type="text" class="form-control" name="precio_venta" value="{{ isset($producto->precio_venta) ? $producto->precio_venta : ''  }}" id="precio_venta">
</div>

<input class="btn btn-success" type="submit" value="{{ $modo }} datos" >
<br>