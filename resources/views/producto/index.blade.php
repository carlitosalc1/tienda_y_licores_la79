@extends('layouts.main')
@section('content')

<h1> Mostrar las listas de Productos </h1>

<table class="table table-dark">

    <thead class="thead-dark">
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
            <th>Acciones</th>
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
                <a href="{{url('/producto/'.$producto->id.'/edit') }}">
                Editar 
            </a>
                

             <form action="{{ url('/producto/'.$producto->id ) }}" method="post">
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