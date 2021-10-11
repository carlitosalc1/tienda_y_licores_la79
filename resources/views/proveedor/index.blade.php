@extends('layouts.main')
@section('content')

<h1> Mostrar las listas de Proveedores </h1>

<table class="table table-dark">

    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Razon Social</th>
            <th>Nit</th>
            <th>Direccion</th>          
            <th>Correo</th>
            <th>Telefono</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $proveedores as $proveedor )
        <tr>
            <td>{{ $proveedor->id }}</td>

        
                           
            
          </td>

            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->apellido }}</td>
            <td>{{ $producto->razon_social }}</td>
            <td>{{ $producto->nit }}</td>
            <td>{{ $producto->direccion }}</td>         
            <td>{{ $producto->correo }}</td>
            <td>{{ $producto->telefono }}</td>
            <td> 
                <a href="{{url('/proveedor/'.$proveedor->id.'/edit') }}">
                Editar 
            </a>
                

             <form action="{{ url('/proveedor/'.$proveedor->id ) }}" method="post">
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