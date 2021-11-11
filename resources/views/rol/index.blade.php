@extends('layouts.main')
@section('content')
<div class="container">
    <div class="card" style='width: 1200px;'>
        <div class="card-header card-header-primary">
            <h4 class="card-title">Lista de Roles</h4>
            <p class="card-category">Datos de los Usuarios</p>
            <a href="rol/create" class="btn btn-warning mx-sm-3 mb-3">Crear un Usuario</a>
        </div>

        <div class="card-body">


            <table class="table table-white">

                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Rol</th>
                        <th colspan="2" class="text-center">Acciones </th>
                        <th></th>

                    </tr>
                </thead>

                <tbody>
                    @foreach( $roles as $rol )
                    <tr>
                        <td>{{ $rol->id }}</td>




                        </td>


                        <td>{{ $rol->nombre }}</td>
                        
                        <td>
                            <a href="{{url('/rol/'.$rol->id.'/edit') }}" class="btn btn-warning ">
                                Editar
                            </a>

                        </td>

                        <td>
                            <form action="{{ url('/rol/'.$rol->id ) }}" class="d-inline" method="post">

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