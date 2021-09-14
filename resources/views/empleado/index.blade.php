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
        @foreach( $empleado as $empleado )
        <tr>
            <td>{{ $empleado->id }}</td>
            <td>{{ $empleado->Foto }}</td>
            <td>{{ $empleado->TipoIdentificacion }}</td>
            <td>{{ $empleado->NumeroIdentificacion }}</td>
            <td>{{ $empleado->Nombre }}</td>
            <td>{{ $empleado->Apellido }}</td>
            <td>{{ $empleado->Direccion }}</td>
            <td>{{ $empleado->Telefono }}</td>
            <td>{{ $empleado->Corrreo }}</td>
            <td>{{ Editar  Borrar }}</td>
        </tr>
        @endforeach
    </tbody>
</table>