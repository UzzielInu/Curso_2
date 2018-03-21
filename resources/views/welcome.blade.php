@extends('layouts.app')
@section('content')
        <div class="flex-center position-ref full-height">
            <!-- NAV -->
            @include('layouts.nav')

            <div class="content">
                <div class="jumbotron" align="center">
                    <h1>Laravel</h1>
                </div>

                <div class="" align="center">
                    <a class="btn btn-info" href="https://laravel.com/docs">Inicio</a>
                    <a class="btn btn-info" href="{!! route('empleados.index')!!}">Empleados</a>
                    <a class="btn btn-info" href="{!! route('empleados.create')!!}">Nuevo Empleado</a>
                    <a class="btn btn-info" href="https://forge.laravel.com">Forge</a>
                    <a class="btn btn-info" href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
@endsection
