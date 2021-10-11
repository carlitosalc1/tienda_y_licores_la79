@extends('layouts.main')
@section('content')

<h1> Mostrar las listas de clientes </h1>

<table class="table table-dark">

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
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $clientes as $cliente )
        <tr>
            <td>{{ $cliente->id }}</td>

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
            <td> 
                <a href="{{url('/cliente/'.$cliente->id.'/edit') }}">
                Editar 
            </a>
                

             <form action="{{ url('/cliente/'.$cliente->id ) }}" method="post">
             @csrf
             {{method_field('DELETE') }}
            <input type="submit" onclick="return confirm('¿ Quieres borrar ?')"
            value="Borrar">
             </form>   
            
            
            
        </tr>
        @endforeach
        
    </tbody>
</table>
</div>
@endsection