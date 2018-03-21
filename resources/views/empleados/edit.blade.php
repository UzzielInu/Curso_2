@extends('layouts.app')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

	{!! Form::model($empleado, 
		['route' => ['empleados.update', $empleado->id],
		'method'=>'PUT']) !!}
	<div class="form-group col-md-4 col-md-4">
			{!! Form::label('matricula', 'Matricula') !!}
			{!! Form::text('matricula', old('matricula'), ['class' => 'form-control']) !!}
		</div>
		<div class="form-group col-md-4">
			{!! Form::label('nombre', 'Nombre') !!}
			{!! Form::text('nombre', old('nombre'), ['class' => 'form-control']) !!}
		</div>
		<div class="form-group col-md-4">
			{!! Form::label('paterno', 'Paterno') !!}
			{!! Form::text('paterno', old('paterno'), ['class' => 'form-control']) !!}
		</div>
		<div class="form-group col-md-4">
			{!! Form::label('materno', 'Materno') !!}
			{!! Form::text('materno', old('materno'), ['class' => 'form-control']) !!}
		</div>
		<div class="form-group col-md-4">
			{!! Form::label('fecha', 'Fecha') !!}
			{!! Form::text('fecha_nacimiento', old('fecha_nacimiento'), ['class' => 'form-control']) !!}
		</div>
		<div class="form-group col-md-4">
			{!! Form::label('sexo', 'Sexo') !!}
			{!! Form::select('sexo',$sexos,'',['class' => 'form-control']) !!}
 		</div>
 		<div class="form-group col-md-4">
			{!! Form::label('turno', 'Turno') !!}
			{!! Form::select('id_turno',$turnos,$empleado->id_turno,['class' => 'form-control']) !!}
 		</div>
 		<div class="form-group col-md-4">
			{!! Form::label('departamento', 'Departamento') !!}
			{!! Form::select('id_departamento',$departamentos,$empleado->id_departamento,['class' => 'form-control']) !!}
 		</div>
 		<div class="form-group form-control col-md-4" align="center">
		{!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
		</div>
	{!! Form::close() !!} 

