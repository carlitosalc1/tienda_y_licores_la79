@extends('layouts.main')
@section('content')
<div class="container">
    <div class="card" style='width: 1200px;'>
        <div class="card-header card-header-primary">
            <h4 class="card-title">Lista de Proveedores</h4>
            <p class="card-category">Datos de los Proveedores</p>
            <a href="proveedor/create" class="btn btn-warning mx-sm-3 mb-3">Crear un Proveedor</a>
        </div>
        
        <div class="card-body">
<table class="table table-dark">

    <thead class="thead-white">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Razon Social</th>
            <th>Nit</th>
            <th>Direccion</th>          
            <th>Correo</th>
            <th>Telefono</th>
            <th  colspan="2" class="text-center">Acciones </th> 
            <th></th>
        </tr>
    </thead>

    <tbody>
        @foreach( $proveedores as $proveedor )
        <tr>
            <td>{{ $proveedor->id }}</td>

        
                           
            
          </td>

            <td>{{ $proveedor->nombre }}</td>
            <td>{{ $proveedor->apellido }}</td>
            <td>{{ $proveedor->razon_social }}</td>
            <td>{{ $proveedor->nit }}</td>
            <td>{{ $proveedor->direccion }}</td>         
            <td>{{ $proveedor->correo }}</td>
            <td>{{ $proveedor->telefono }}</td>
            <td> 
                <a href="{{url('/proveedor/'.$proveedor->id.'/edit') }}"class="btn btn-warning ">
                Editar 
            </a>
                
            </td>
            
            <td>
            <form action="{{ url('/proveedor/'.$proveedor->id ) }}" class="d-inline" method="post">
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
{!! $proveedores->links() !!}
</div>
@endsection