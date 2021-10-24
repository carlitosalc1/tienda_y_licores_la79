@extends('layouts.main')
@section('content')
<div class="container">

<h1> Mostrar la lista de Productos </h1>
<a href="producto/create" class="btn btn-primary mb-3">Crear un Producto</a>

<table class="table table-dark">

    <thead class="thead-white">
        <tr>
            <th>#</th>
            <th>Nombre del producto</th>
            <th>Descripcion</th>
            <th>Marca</th>
            <th>Categoria</th>
            <th>Cantidad</th>
            <th>Codigo de barra</th>
            <th>Stock</th>
            <th>Precio de compra</th>
            <th>Precio de venta</th>
            <th  colspan="2" class="text-center">Acciones </th> 
            <th></th>
        </tr>
    </thead>

    <tbody>
        @foreach( $productos as $producto )
        <tr>
            <td>{{ $producto->id }}</td>

        
                           
            
          </td>

            <td>{{ $producto->nombre_producto }}</td>
            <td>{{ $producto->descripcion }}</td>
            <td>{{ $producto->marca }}</td>
            <td>{{ $producto->categoria }}</td>
            <td>{{ $producto->cantidad }}</td>
            <td>{{ $producto->codigo_barra }}</td>
            <td>{{ $producto->stock }}</td>
            <td>{{ $producto->precio_compra }}</td>
            <td>{{ $producto->precio_venta }}</td>
            <td> 
                <a href="{{url('/producto/'.$producto->id.'/edit') }}"class="btn btn-warning ">
                Editar 
            </a>
             
                </td>
                <td>

             <form action="{{ url('/producto/'.$producto->id ) }}" class="d-inline" method="post">
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