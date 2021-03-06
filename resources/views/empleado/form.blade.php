<h1> {{ $modo }} empleado </h1>
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Nuevo Empleado</h4>
              <p class="card-category">Ingresar datos</p>
          </div>
            <div class="card-body">
             <!-- @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
              @endif  -->
              <div class="row">
              <label for="Tipo de Identificacion" class="col-sm-3 col-form-label">Tipo de Identificacion </label>
              <div class="col-sm-7">
              <input type="text" class="form-control" name="tipo_identificacion" placeholder="Ingrese su tipo de Identificacion" value="{{ isset($empleado->tipo_identificacion) ? $empleado->tipo_identificacion:old('tipo_identificacion')  }}" id="tipo_identificacion" autofocus>
                                           
                  @if ($errors->has('tipo_identificacion'))
                    <span class="error text-danger" for="input-tipo_identificacion">{{ $errors->first('tipo_identificacion') }}</span>
                  @endif
                </div>
              </div>
              <div class="row">
              <label for="Numero de Identificacion" class="col-sm-3 col-form-label">Numero de identificacion </label>
              <div class="col-sm-7">
              <input type="text" class="form-control"  name="numero_identificacion" placeholder="Ingrese su numero de Identificacion" value="{{ isset($empleado->numero_identificacion) ? $empleado->numero_identificacion:old('numero_identificacion')  }}" id="numero_identificacion">
                        
                  @if ($errors->has('numero_identificacion'))
                    <span class="error text-danger" for="input-numero_identificacion">{{ $errors->first('numero_identificacion') }}</span>
                  @endif
                </div>
              </div>              
              <div class="row">
              <label for="Nombre" class="col-sm-3 col-form-label">Nombre </label>
              <div class="col-sm-7">
              <input type="text" class="form-control" name="nombre" placeholder="Ingrese su Nombre" value="{{ isset($empleado->nombre) ? $empleado->nombre:old('nombre')  }}" id="nombre">
                                           
                  @if ($errors->has('nombre'))
                    <span class="error text-danger" for="nombre">{{ $errors->first('nombre') }}</span>
                  @endif
                </div>
              </div>
              <div class="row">
              <label for="Apellido" class="col-sm-3 col-form-label"> Apellido </label>
              <div class="col-sm-7">
              <input type="text" class="form-control"  name="apellido" placeholder="Ingrese su Apellido " value="{{ isset($empleado->apellido) ? $empleado->apellido:old('apellido')  }}" id="apellido">
                                                 
                  @if ($errors->has('apellido'))
                    <span class="error text-danger" for="input-apellido">{{ $errors->first('apellido') }}</span>
                  @endif
                </div>
              </div>
              <div class="row">
              <label for="Direccion" class="col-sm-3 col-form-label">Direccion </label>
              <div class="col-sm-7">
              <input type="text" class="form-control" name="direccion" placeholder="Ingrese su Direccion" value="{{ isset($empleado->direccion) ? $empleado->direccion:old('direccion')  }}" id="direccion">
                                           
                  @if ($errors->has('direccion'))
                    <span class="error text-danger" for="input-direccion">{{ $errors->first('direccion') }}</span>
                  @endif
                </div>
              </div>
              <div class="row">
              <label for="Telefono" class="col-sm-3 col-form-label">Telefono </label>
              <div class="col-sm-7">
              <input type="text" class="form-control" name="telefono" placeholder="Ingrese su Telefono" value="{{ isset($empleado->telefono) ? $empleado->telefono:old('telefono')  }}" id="telefono">
                                           
                  @if ($errors->has('telefono'))
                    <span class="error text-danger" for="input-telefono">{{ $errors->first('telefono') }}</span>
                  @endif
                </div>
              </div>              
              <div class="row">
              <label for="Correo" class="col-sm-3 col-form-label">Correo </label>
              <div class="col-sm-7">
              <input type="email" class="form-control"  name="correo" placeholder="Ingrese su Correo" value=" {{ isset($empleado->correo) ? $empleado->correo:old('correo')  }}" id="correo">
                             
                  @if ($errors->has('correo'))
                    <span class="error text-danger" for="input-correo">{{ $errors->first('correo') }}</span>
                  @endif
                </div>
              </div>
           
            </div>
            <!--Footer-->
            <div class="card-footer ml-auto mr-auto">
            <input class="btn btn-primary" type="submit" value="{{ $modo }} Nuevo Empleado" >
           
            </div>
            <!--End footer-->
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
