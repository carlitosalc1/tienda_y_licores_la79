<h1> {{ $modo }} producto </h1>
<label for="Nombre de producto"> Nombre de producto </label>
<input type="text" name="nombre_producto" value="{{ isset($empleado->nombre_producto) ? $empleado->nombre_producto : ''  }}" id="nombre_producto">
<br><br>
<label for="Descripcion"> Descripcion </label>
<input type="text" name="descripcion" value="{{ isset($producto->descripcion) ? $producto->descripcion : ''  }}" id="descripcion">
<br><br>
<label for="Marca"> Marca </label>
<input type="text" name="marca" value=" {{ isset($producto->marca) ? $producto->marca : ''  }}" id="marca">
<br><br>
<label for="Categoria"> Categoria </label>
<input type="text" name="categoria" value="{{ isset($producto->categoria) ? $producto->categoria : ''  }}" id="categoria">
<br><br>
<label for="Cantidad"> Cantidad </label>
<input type="text" name="cantidad" value="{{ isset($producto->cantidad) ? $producto->cantidad : ''  }}" id="cantidad">
<br><br>
<label for="Codigo de barras"> Codigo de barras </label>
<input type="text" name="codigo_barra" value="{{ isset($producto->codigo_barra) ? $producto->codigo_barra : ''  }}" id="codigo_barra">
<br><br>
<label for="Codigo de barras"> Stock </label>
<input type="text" name="stock" value="{{ isset($producto->stock) ? $producto->stock : ''  }}" id="stock">
<br><br>
<label for="Precio de compra"> Precio de compra</label>
<input type="text" name="precio_compra" value="{{ isset($producto->precio_compra) ? $producto->precio_compra : ''  }}" id="precio_compra">
<br><br>
<label for="Precio de venta"> Precio de venta</label>
<input type="text" name="precio_venta" value="{{ isset($producto->precio_venta) ? $producto->precio_venta : ''  }}" id="precio_venta">
<br><br>
<input type="submit" value="{{ $modo }} datos" >
<br><br>