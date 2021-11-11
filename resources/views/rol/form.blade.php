<h1> {{ $modo }} rol </h1>
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">Nuevo Usuario</h4>
        <p class="card-category">Ingresar datos</p>
    </div>

    <div class="card-body">
        <div class="col-md-6">
            <div class="row">
                <label for="Rol" class="col-sm-3 col-form-label"> Rol </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="nombre" placeholder="Ingrese su Rol"
                        value="{{ isset($rol->nombre) ? $rol->nombre : old('nombre')  }}" id="rol">
                    @if ($errors->has('rol'))
                    <span class="error text-danger" for="input-rol">{{ $errors->first('rol') }}</span>
                    @endif
                </div>

            </div>
        </div>



        <div class="card-footer ml-auto mr-auto">
            <input class="btn btn-primary" type="submit" value="{{ $modo }} Nuevo Rol">

        </div>
    </div>