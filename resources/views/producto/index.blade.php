@extends('layouts.main')
@section('content')
<div class="container">
    <div class="card" style='width: 1200px;'>
        <div class="card-header card-header-primary">
            <h4 class="card-title">Lista de Productos</h4>
            <p class="card-category">Datos de los Productos</p>
            <a href="producto/create" class="btn btn-warning mx-sm-3 mb-3">Crear un Producto</a>
        </div>
        
        <div class="card-body">

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
            <td>{{ $producto->id_categoria }}</td>
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
{!! $productos->links() !!}
</div>
@endsection