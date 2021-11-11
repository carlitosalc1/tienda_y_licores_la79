<h1> {{ $modo }} cliente </h1>

<div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Nuevo Cliente</h4>
              <p class="card-category">Ingresar datos</p>
            </div>
            <div class="card-body">
           
            <div class="row">
             <label for="Tipo de Identificacion" class="col-sm-3 col-form-label"> Tipo de Identificacion </label>
             <div class="col-sm-7">
           <input type="text" class="form-control" name="tipo_identificacion" placeholder="Ingrese su tipo de Identificacion" value="{{ isset($cliente->tipo_identificacion) ? $cliente->tipo_identificacion : old('tipo_identificacion') }}" id="tipo_identificacion"autofocus>
                  @if ($errors->has('tipo_identificacion'))
                    <span class="error text-danger" for="input-tipo_identificacion">{{ $errors->first('tipo_identificacion') }}</span>
                  @endif
                </div>
              </div>
           <div class="row">
             <label for="Numero de Identificacion" class="col-sm-3 col-form-label"> Numero de identificacion </label>
            <div class="col-sm-7">
            <input type="text" class="form-control" name="numero_identificacion" placeholder="Ingrese su numero de Identificacion" value="{{ isset($cliente->numero_identificacion) ? $cliente->numero_identificacion : old('numero_identificacion') }}" id="numero_identificacion">
                   @if ($errors->has('numero_identificacion'))
                    <span class="error text-danger" for="input-tipo_identificacion">{{ $errors->first('tipo_identificacion') }}</span>
                  @endif
                </div>
              </div>
              <div class="row">
              <label for="Nombre" class="col-sm-3 col-form-label">Nombre </label>
              <div class="col-sm-7">
              <input type="text" class="form-control" name="nombre" placeholder="Ingrese su Nombre" value="{{ isset($cliente->nombre) ? $cliente->nombre: old('nombre')  }}" id="nombre">
                                           
                  @if ($errors->has('nombre'))
                    <span class="error text-danger" for="nombre">{{ $errors->first('nombre') }}</span>
                  @endif
                </div>
              </div>
            <div class="row">
              <label for="Apellido" class="col-sm-3 col-form-label"> Apellido </label>
             <div class="col-sm-7">
             <input type="text" class="form-control" name="apellido" placeholder="Ingrese su Apellido" value="{{ isset($cliente->apellido) ? $cliente->apellido : old('apellido')  }}" id="apellido">
                  @if ($errors->has('apellido'))
                    <span class="error text-danger" for="input-apellido">{{ $errors->first('apellido') }}</span>
                  @endif
                </div>
              </div>
            <div class="row">
               <label for="Direccion" class="col-sm-3 col-form-label"> Direccion </label>
              <div class="col-sm-7">
               <input type="text" class="form-control" name="direccion" placeholder="Ingrese su Direccion"value="{{ isset($cliente->direccion) ? $cliente->direccion :old('direccion') }}" id="direccion">
                 @if ($errors->has('direccion'))
                    <span class="error text-danger" for="input-direccion">{{ $errors->first('direccion') }}</span>
                  @endif
                </div>
              </div>
            <div class="row">
             <label for="Telefono" class="col-sm-3 col-form-label"> Telefono </label>
              <div class="col-sm-7">
               <input type="number" class="form-control" name="telefono" placeholder="Ingrese su Telefono" value="{{ isset($cliente->telefono) ? $cliente->telefono : old('telefono')  }}" id="telefono">
                 @if ($errors->has('telefono'))
                    <span class="error text-danger" for="input-telefono">{{ $errors->first('telefono') }}</span>
                  @endif
                </div>
              </div>
            <div class="row">
             <label for="Correo" class="col-sm-3 col-form-label"> Correo</label>
              <div class="col-sm-7">
              <input type="email" class="form-control" name="correo" placeholder="Ingrese su Correo "value="{{ isset($cliente->correo) ? $cliente->correo : old('correo ')  }}" id="correo">
                 @if ($errors->has('correo'))
                    <span class="error text-danger" for="input-correo">{{ $errors->first('correo') }}</span>
                  @endif
                </div>
              </div>
              </div>
            <!--Footer-->
            <div class="card-footer ml-auto mr-auto">
            <input class="btn btn-primary" type="submit" value="{{ $modo }} Nuevo Cliente" >
           
            </div>
            <!--End footer-->
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

