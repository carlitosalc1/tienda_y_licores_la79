<h1> {{ $modo }} producto </h1>


<div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Nuevo Producto</h4>
              <p class="card-category">Ingresar datos</p>
            </div>
            <div class="card-body">
            <!-- @if(count($errors)>0)

<div class="alert alert-danger" role="alert">
 <ul>
   @foreach( $errors->all() as $error)
   <li> {{ $error}} </li>
@endforeach
 </ul>
</div>
@endif -->
            <div class="row">
           <label for="Nombre de producto" class="col-sm-3 col-form-label"> Nombre de producto </label>
           <div class="col-sm-7">
            <input type="text" class="form-control" name="nombre_producto" placeholder="Ingrese nombre del Producto" value="{{ isset($producto->nombre_producto) ? $producto->nombre_producto : old('nombre_producto')  }}" id="nombre_producto"autofocus>
            @if ($errors->has('nombre_producto'))
                    <span class="error text-danger" for="input-nombre_producto">{{ $errors->first('nombre_producto') }}</span>
                  @endif
                </div>
              </div>
            <div class="row">
<label for="Descripcion" class="col-sm-3 col-form-label"> Descripcion </label>
<div class="col-sm-7">
<input type="text" class="form-control" name="descripcion" placeholder="Ingrese su Descripcion" value="{{ isset($producto->descripcion) ? $producto->descripcion : old('descripcion')  }}" id="descripcion">
@if ($errors->has('descripcion'))
                    <span class="error text-danger" for="input-descripcion">{{ $errors->first('descripcion') }}</span>
                  @endif
                </div>
              </div>
              <div class="row">
<label for="Marca" class="col-sm-3 col-form-label"> Marca </label>
<div class="col-sm-7">
<input type="text" class="form-control" name="marca" placeholder="Ingrese su Marca" value="{{ isset($producto->marca) ? $producto->marca : old('marca')  }}" id="marca">
@if ($errors->has('marca'))
                    <span class="error text-danger" for="input-marca">{{ $errors->first('marca') }}</span>
                  @endif
                </div>
              </div>
<div class="row">
<label for="Categoria" class="col-sm-3 col-form-label"> Categoria </label>
<div class="col-sm-7">
<input type="text" class="form-control" name="categoria" placeholder="Ingrese su Categoria" value="{{ isset($producto->categoria) ? $producto->categoria : old('categoria')  }}" id="categoria">
@if ($errors->has('categoria'))
                    <span class="error text-danger" for="input-categoria">{{ $errors->first('categoria') }}</span>
                  @endif
                </div>
              </div>
<div class="row">
<label for="Cantidad" class="col-sm-3 col-form-label"> Cantidad </label>
<div class="col-sm-7">
<input type="text" class="form-control" name="cantidad" placeholder="Ingrese su Cantidad" value="{{ isset($producto->cantidad) ? $producto->cantidad : old('cantidad') }}" id="cantidad">
@if ($errors->has('cantidad'))
                    <span class="error text-danger" for="input-cantidad">{{ $errors->first('cantidad') }}</span>
                  @endif
                </div>
              </div>
<div class="row">
<label for="Codigo de barras" class="col-sm-3 col-form-label"> Codigo de barras </label>
<div class="col-sm-7">
<input type="text" class="form-control" name="codigo_barra" placeholder="Ingrese Codigo de Barra" value="{{ isset($producto->codigo_barra) ? $producto->codigo_barra : old('codigo_barra')   }}" id="codigo_barra">
@if ($errors->has('codigo_barra'))
                    <span class="error text-danger" for="input-codigo_barra">{{ $errors->first('codigo_barra') }}</span>
                  @endif
                </div>
              </div>
<!-- <div class="row">
<label for="Stock" class="col-sm-3 col-form-label"> Stock </label>
<div class="col-sm-7">
<input type="text" class="form-control" name="stock" placeholder="Ingrese Stock" value="{{ isset($producto->stock) ? $producto->stock : old('stock') }}" id="stock">
@if ($errors->has('stock'))
                    <span class="error text-danger" for="input-stock">{{ $errors->first('stock') }}</span>
                  @endif
                </div>
              </div> -->
<div class="row">
<label for="Precio de compra" class="col-sm-3 col-form-label"> Precio de compra</label>
<div class="col-sm-7">
<input type="text" class="form-control" name="precio_compra" placeholder="Ingrese Precio de Compra" value="{{ isset($producto->precio_compra) ? $producto->precio_compra : old('precio_compra') }}" id="precio_compra">
@if ($errors->has('precio_compra'))
                    <span class="error text-danger" for="input-precio_compra">{{ $errors->first('precio_compra') }}</span>
                  @endif
                </div>
              </div>
<div class="row">
<label for="Precio de venta" class="col-sm-3 col-form-label"> Precio de venta</label>
<div class="col-sm-7">
<input type="text" class="form-control" name="precio_venta" placeholder="Ingrese precio de Venta" value="{{ isset($producto->precio_venta) ? $producto->precio_venta : old('precio_venta')  }}" id="precio_venta">
@if ($errors->has('precio_venta'))
                    <span class="error text-danger" for="input-precio_venta">{{ $errors->first('precio_venta') }}</span>
                  @endif
                </div>
              </div>

              </div>
            <!--Footer-->
            <div class="card-footer ml-auto mr-auto">
            <input class="btn btn-primary" type="submit" value="{{ $modo }} Nuevo Producto" >
           
            </div>
            <!--End footer-->
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
