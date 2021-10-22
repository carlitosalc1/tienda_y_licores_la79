@extends('layouts.main')
@section('content')
<div class="container">

<h1> Mostrar la lista de Empleados </h1>
<a href="empleado/create" class="btn btn-primary mb-3">Crear un Empleado</a>

<table class="table table-dark">

    <thead class="thead-white">
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
            <th  colspan="2" class="text-center">Acciones </th> 
            <th></th>
           
        </tr>
    </thead>

    <tbody>
        @foreach( $empleados as $empleado )
        <tr>
            <td>{{ $empleado->id }}</td>

            <!-- <td>
              <img scr="{{ asset('storage').'/'.$empleado->foto}}" alt="">   -->
                           
            
          </td>

            <td>{{ $empleado->tipo_identificacion }}</td>
            <td>{{ $empleado->numero_identificacion }}</td>
            <td>{{ $empleado->nombre }}</td>
            <td>{{ $empleado->apellido }}</td>
            <td>{{ $empleado->direccion }}</td>
            <td>{{ $empleado->telefono }}</td>
            <td>{{ $empleado->correo }}</td>
            <td>{{ $empleado->usuario }}</td>
            <td> 
                <a href="{{url('/empleado/'.$empleado->id.'/edit') }}" class="btn btn-warning ">
                Editar 
            </a>
                           
            
            </td>
            
            <td>
            <form action="{{ url('/empleado/'.$empleado->id ) }}" class="d-inline" method="post">
             
             @csrf
             {{method_field('DELETE') }}
            <input class="btn btn-primary " type="submit" onclick="return confirm('¿ Quieres borrar ?')"
            value="Borrar">
             </form>   
            </td>
            
        </tr>
        @endforeach
        
    </tbody>
</table>
</div>
@endsection