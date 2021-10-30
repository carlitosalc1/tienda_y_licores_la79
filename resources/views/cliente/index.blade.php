@extends('layouts.main')
@section('content')
<div class="container">

<h1> Mostrar la lista de Clientes </h1>
<a href="cliente/create" class="btn btn-primary mb-3">Crear un Cliente</a>

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
            <th  colspan="2" class="text-center">Acciones </th> 
            <th></th>
           
        </tr>
    </thead>

    <tbody>
        @foreach( $clientes as $cliente )
        <tr>
            <td>{{ $cliente->id }}</td>

                                  
            
          </td>

            <td>{{ $cliente->tipo_identificacion }}</td>
            <td>{{ $cliente->numero_identificacion }}</td>
            <td>{{ $cliente->nombre }}</td>
            <td>{{ $cliente->apellido }}</td>
            <td>{{ $cliente->direccion }}</td>
            <td>{{ $cliente->telefono }}</td>
            <td>{{ $cliente->correo }}</td>
            <td> 
                <a href="{{url('/cliente/'.$cliente->id.'/edit') }}" class="btn btn-warning ">
                Editar 
            </a>
            </td>
            <td>  
             <form action="{{ url('/cliente/'.$cliente->id ) }}" class="d-inline"  method="post">
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
{!! $clientes->links() !!}
</div>
@endsection