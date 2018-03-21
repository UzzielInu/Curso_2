@extends('layouts.app')
@section('content')
<div>
<h1 align="center">Empleados</h1>
<hr>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<table class='table table-hover'>
	<thead class="thead-dark">
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
				<td><a class="btn btn-warning btn-sm btn-block" href="/empleados/{!!$empleado->id!!}/edit">Editar</a>

				<!-- <td>{!! Form::model($empleado,['route' => ['empleados.destroy', $empleado->id], 'method' => 'DELETE']) !!}
					{!! Form::submit('Eliminar')!!}
					{!! Form::close() !!}
				</td> -->

				{!! Form::model($empleado,['route' => ['empleados.destroy', $empleado->id], 'method' => 'DELETE']) !!}
					<button type="submit" class="btn btn-danger btn-sm btn-block">Eliminar</button>
					<!-- {!! Form::submit('Eliminar')!!} -->
					{!! Form::close() !!}
				</td>
				<!-- <td><a href="empleados/{!!$empleado->id!!}/destroy">Eliminar</a></td> -->
			</tr>
			@endforeach
		</tbody>
	</thead>
</table>
</div>
{!! $empleados -> links() !!}