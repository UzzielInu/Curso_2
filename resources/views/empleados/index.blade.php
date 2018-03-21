<h1>Employeeees</h1>

<table>
	<thead>
		<tr>
			<th>#</th>
			<th>Materno</th>
			<th>Paterno</th>
			<th>Nombre</th>
			<th>Fecha_nacimiento</th>
			<th>Sexo</th>
			<th>id_t</th>
			<th>id_d</th>
			<th>Acciones</th>
		</tr>
		<tbody>
			@foreach  ($empleados as $empleado)
			<tr>
				<td>{!! $empleado->matricula !!}</td>
				<td>{!! $empleado->paterno !!}</td>
				<td>{!! $empleado->materno !!}</td>
				<td>{!! $empleado->nombre !!}</td>
				<td>{!! $empleado->fecha_nacimiento !!}</td>
				<td>{!! $empleado->sexo !!}</td>
				<td>{!! $empleado->id_turno !!}</td>
				<td>{!! $empleado->id_departamento !!}</td>
				<td><a href="/empleados/{!!$empleado->id!!}/edit">Editar</a></td>
				<td>{!! Form::model($empleado,['route' => ['empleados.destroy', $empleado->id], 'method' => 'DELETE']) !!}
					{!! Form::submit('Eliminar')!!}
					{!! Form::close() !!}
				</td>
				<!-- <td><a href="empleados/{!!$empleado->id!!}/destroy">Eliminar</a></td> -->
			</tr>
			@endforeach
		</tbody>
	</thead>
</table>

{!! $empleados -> links() !!}