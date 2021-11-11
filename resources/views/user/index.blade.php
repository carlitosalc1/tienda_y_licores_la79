@extends('layouts.main')
@section('content')
<div class="container">
    <div class="card" style='width: 1200px;'>
        <div class="card-header card-header-primary">
            <h4 class="card-title">Lista de Usuario</h4>
            <p class="card-category">Datos de los Usuarios</p>
            <a href="usuario/create" class="btn btn-warning mx-sm-3 mb-3">Crear un Usuario</a>
        </div>
        
        <div class="card-body">


            <table class="table table-white">

                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Tipo de Identificacion</th>
                        <th>Numero de Identificacion</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th>Usuario</th>
                        <th colspan="2" class="text-center">Acciones </th>
                        <th></th>

                    </tr>
                </thead>

                <tbody>
                    @foreach( $user as $usuario )
                    <tr>
                        <td>{{ $usuario->id }}</td>




                        </td>

                        <td>{{ $usuario->tipo_identificacion }}</td>
                        <td>{{ $usuario->numero_identificacion }}</td>
                        <td>{{ $usuario->name }}</td>
                        <td>{{ $usuario->apellido }}</td>
                        <td>{{ $usuario->direccion }}</td>
                        <td>{{ $usuario->telefono }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>{{ $usuario->id_rol }}</td>
                        <td>
                            <a href="{{url('/usuario/'.$usuario->id.'/edit') }}" class="btn btn-warning ">
                                Editar
                            </a>

                        </td>

                        <td>
                            <form action="{{ url('/usuario/'.$usuario->id ) }}" class="d-inline" method="post">

                                @csrf
                                {{method_field('DELETE') }}
                                <input class="btn btn-primary " type="submit"
                                    onclick="return confirm('¿ Quieres borrar ?')" value="Borrar">
                            </form>
                        </td>

                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
