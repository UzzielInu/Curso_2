
@if (Route::has('login'))
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<ul class="navbar-nav">
	@auth
	<li class="nav-item active">
		<a class="nav-link" href="{!! url('/home') !!}">HOME</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="{!! route('empleados.index') !!}">Empleados</a>
	</li>
	@else
	<li class="nav-item">
		<a class="nav-link active" href="{!! route('login') !!}">HOME</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="{!! route('register') !!}">HOME</a>
	</li>
	@endauth
</ul>
</nav>
@endif