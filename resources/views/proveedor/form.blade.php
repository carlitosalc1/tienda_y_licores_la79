<h1> {{ $modo }} proveedor </h1>

<div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Nuevo Proveedor</h4>
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
<label for="Nombre" class="col-sm-3 col-form-label"> Nombre </label>
<div class="col-sm-7">
<input type="text" class="form-control" name="nombre" placeholder="Ingrese su Nombre" value="{{ isset($proveedor->nombre) ? $proveedor->nombre : old('nombre') }}" id="nombre">
@if ($errors->has('nombre'))
                    <span class="error text-danger" for="input-nombre">{{ $errors->first('nombre') }}</span>
                  @endif
                </div>
              </div>
<div class="row">
<label for="Apellido" class="col-sm-3 col-form-label"> Apellido </label>
<div class="col-sm-7">
<input type="text" class="form-control" name="apellido" placeholder="Ingrese su Apellido" value="{{ isset($proveedor->apellido) ? $proveedor->apellido : old('apellido')  }}" id="apellido">
@if ($errors->has('apellido'))
                    <span class="error text-danger" for="input-apellido">{{ $errors->first('apellido') }}</span>
                  @endif
                </div>
              </div>
<div class="row">
<label for="Razon Social" class="col-sm-3 col-form-label"> Razon Social </label>
<div class="col-sm-7">
<input type="text" class="form-control" name="razon_social" placeholder="Ingrese la Razon Social" value="{{ isset($proveedor->razon_social ) ? $proveedor->razon_social : old('razon_social')  }}" id="razon_social">
@if ($errors->has('razon_social'))
                    <span class="error text-danger" for="input-razon_social">{{ $errors->first('razon_social') }}</span>
                  @endif
                </div>
              </div>
<div class="row">
<label for="Nit" class="col-sm-3 col-form-label"> Nit </label>
<div class="col-sm-7">
<input type="number" class="form-control" name="nit" placeholder="Ingrese el Nit" value="{{ isset($proveedor->nit) ? $proveedor->nit : old('nit') }}" id="nit">
@if ($errors->has('nit'))
                    <span class="error text-danger" for="input-nit">{{ $errors->first('nit') }}</span>
                  @endif
                </div>
              </div>
<div class="row">
<label for="Direccion" class="col-sm-3 col-form-label"> Direccion </label>
<div class="col-sm-7">
<input type="text" class="form-control" name="direccion" placeholder="Ingrese su Direccion" value="{{ isset($proveedor->direccion) ? $proveedor->direccion : old('direccion') }}" id="direccion">
@if ($errors->has('direccion'))
                    <span class="error text-danger" for="input-direccion">{{ $errors->first('direccion') }}</span>
                  @endif
                </div>
              </div>
<div class="row">
<label for="Correo" class="col-sm-3 col-form-label"> Correo </label>
<div class="col-sm-7">
<input type="email" class="form-control" name="correo" placeholder="Ingrese su Correo" value="{{ isset($proveedor->correo) ? $proveedor->correo : old('correo') }}" id="correo">
@if ($errors->has('correo'))
                    <span class="error text-danger" for="input-correo">{{ $errors->first('correo') }}</span>
                  @endif
                </div>
              </div>
<div class="row">
<label for="Telefono" class="col-sm-3 col-form-label"> Telefono</label>
<div class="col-sm-7">
<input type="text" class="form-control" name="telefono" placeholder="Ingrese su Telefono" value="{{ isset($proveedor->telefono) ? $proveedor->telefono : old('telefono') }}" id="telefono">
@if ($errors->has('telefono'))
                    <span class="error text-danger" for="input-telefono">{{ $errors->first('telefono') }}</span>
                  @endif
                </div>
              </div>

              </div>
            <!--Footer-->
            <div class="card-footer ml-auto mr-auto">
            <input class="btn btn-primary" type="submit" value="{{ $modo }} Nuevo Proveedor" >
           
            </div>
            <!--End footer-->
          </div>
        </form>
      </div>
    </div>
  </div>
</div>