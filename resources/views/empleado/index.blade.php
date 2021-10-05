Mostrar las listas de empleados

<table class="table table-dark">

    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Foto</th>
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
        @foreach( $empleados as $empleado )
        <tr>
            <td>{{ $empleado->id }}</td>

            <td>
              <img scr="{{ asset('storage').'/'.$empleado->foto}}" alt="">  
                           
            
          </td>

            <td>{{ $empleado->tipo_identificacion }}</td>
            <td>{{ $empleado->numero_identificacion }}</td>
            <td>{{ $empleado->nombre }}</td>
            <td>{{ $empleado->apellido }}</td>
            <td>{{ $empleado->direccion }}</td>
            <td>{{ $empleado->telefono }}</td>
            <td>{{ $empleado->correo }}</td>
            <td> 
                <a href="{{url('/empleado/'.$empleado->id.'/edit') }}">
                Editar 
            </a>
                

             <form action="{{ url('/empleado/'.$empleado->id ) }}" method="post">
             @csrf
             {{method_field('DELETE') }}
            <input type="submit" onclick="return confirm('¿ Quieres borrar ?')"
            value="Borrar">
             </form>   
            
            
            
        </tr>
        @endforeach
        
    </tbody>
</table>