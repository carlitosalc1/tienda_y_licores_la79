@extends('layouts.main', ['class' => 'off-canvas-sidebar', 'activePage' => 'register', 'title' => __('')])

@section('content')
<div class="container" style="height: auto;">
    <div class="row align-items-center">
        <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
            <form class="form" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="card card-login card-hidden mb-3">
                    <div class="card-header card-header-primary text-center">
                        <h4 class="card-title"><strong>{{ __('Registrarse a Tienda y Licores la 79') }}</strong></h4>

                    </div>
                    <div class="card-body ">
                        <p class="card-description text-center">{{ __('') }}</p>
                        <div class="bmd-form-group{{ $errors->has('tipo_identificacion') ? ' has-danger' : '' }}">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">face</i>
                                    </span>
                                </div>
                                <input type="text" name="tipo_identificacion" class="form-control" placeholder="{{ __('Tipo de Identificacion ...') }}"
                                    value="{{ old('tipo_identificacion') }}" required autocomplete="tipo_identificacion" autofocus>
                            </div>
                            @if ($errors->has('tipo_identificacion'))
                            <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                                <strong>{{ $errors->first('tipo_identificacion') }}</strong>
                            </div>
                            @endif
                        </div>
                        <p class="card-description text-center">{{ __('') }}</p>
                        <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">face</i>
                                    </span>
                                </div>
                                <input type="text" name="name" class="form-control" placeholder="{{ __('Nombre...') }}"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                            @if ($errors->has('name'))
                            <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                                <strong>{{ $errors->first('name') }}</strong>
                            </div>
                            @endif
                        </div>
                        <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }} mt-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">email</i>
                                    </span>
                                </div>
                                <input type="email" name="email" class="form-control"
                                    placeholder="{{ __('Correo...') }}" value="{{ old('email') }}" required
                                    autocomplete="email" autofocus>
                            </div>
                            @if ($errors->has('email'))
                            <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                                <strong>{{ $errors->first('email') }}</strong>
                            </div>
                            @endif
                        </div>
                        <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">lock_outline</i>
                                    </span>
                                </div>
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="{{ __('Contraseña...') }}" required autocomplete="new-password"
                                    autofocus>
                            </div>
                            @if ($errors->has('password'))
                            <div id="password-error" class="error text-danger pl-3" for="password"
                                style="display: block;">
                                <strong>{{ $errors->first('password') }}</strong>
                            </div>
                            @endif
                        </div>
                        <div
                            class="bmd-form-group{{ $errors->has('password_confirmation') ? ' has-danger' : '' }} mt-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">lock_outline</i>
                                    </span>
                                </div>
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    class="form-control" placeholder="{{ __('Confirmar Contraseña..') }}" required
                                    autocomplete="new-password" autofocus>
                            </div>
                            @if ($errors->has('password_confirmation'))
                            <div id="password_confirmation-error" class="error text-danger pl-3"
                                for="password_confirmation" style="display: block;">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </div>
                            @endif


                            <div class="form-group row">
                                <div class="input-group-prepend pl-3">
                                    <span class="input-group-text">
                                        <i class="material-icons">supervised_user_circle</i>
                                    </span>
                                </div>
                                <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('Rol') }}</label>

                                <div class="col-md-6">

                                    <select id="inputState" class="form-control" name="id_rol" required>
                                        <option value="" selected>Seleccione</option>
                                        <option value="1">Administrador </option>
                                        <option value="2">Vendedor</option>
                                    </select>

                                </div>
                            </div>
                            <div class="card-footer justify-content-center">
                                <button type="submit"
                                    class="btn btn-primary btn-link btn-lg">{{ __('Crear Cuenta') }}</button>
                            </div>
                        </div>
            </form>
        </div>
    </div>
</div>
@endsection