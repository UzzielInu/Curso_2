@extends('layouts.app')
@section('content')
        <div class="flex-center position-ref full-height">
            <!-- NAV -->
            @include('layouts.nav')

            <div class="content">
                <div class="jumbotron">
                    <h1>Laravel</h1>
                </div>

                <div class="">
                    <a href="https://laravel.com/docs">Inicio</a>
                    <a href="{!! route('empleados.index')!!}">Empleados</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
@endsection
