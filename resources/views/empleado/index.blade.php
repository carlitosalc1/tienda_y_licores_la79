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
            <td>{{ $empleado->foto }}</td>
            <td>{{ $empleado->tipo_identificacion }}</td>
            <td>{{ $empleado->numero_identificacion }}</td>
            <td>{{ $empleado->nombre }}</td>
            <td>{{ $empleado->apellido }}</td>
            <td>{{ $empleado->direccion }}</td>
            <td>{{ $empleado->telefono }}</td>
            <td>{{ $empleado->corrreo }}</td>
            <td> Editar | Borrar </td>
        </tr>
        @endforeach
    </tbody>
</table>