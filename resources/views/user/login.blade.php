@extends('layout')
@section('titulo', 'Login')
@section('contenido')
<!-- content page -->
<div class="form">
	<ul class="tab-group">
		<li class="tab active"><a href="#registro">Regístrate</a></li>
		<li class="tab"><a href="#sesion">Iniciar sesión </a></li>
	</ul>
	<div class="tab-content">
		<div id="registro">
			<h1>Regístrate gratis</h1>

			<form action="/" method="post">
				<div class="top-row">
					<div class="field-wrap">
						<label>
							Nombre<span class="req">*</span>
						</label>
						<input style="border: 1px solid #eef0f0;" type="text" required autocomplete="off" />
					</div>

					<div class="field-wrap">
						<label>
							Apellidos<span class="req">*</span>
						</label>
						<input style="border: 1px solid #eef0f0;" type="text" required autocomplete="off" />
					</div>
				</div>

				<div class="field-wrap">
					<label>
						Correo electronico<span class="req">*</span>
					</label>
					<input style="border: 1px solid #eef0f0;" type="email" required autocomplete="off" />
				</div>

				<div class="field-wrap">
					<label>
						Establecer una contraseña<span class="req">*</span>
					</label>
					<input style="border-style: 1px solid #eef0f0;" type="password" required autocomplete="off" />
				</div>

				<button type="submit" class="button button-block">Empezar</button>
			</form>
		</div>

		<div id="sesion">
			<h1>Bienvenido!</h1>

			<form action="{{ url('/login') }}" method="POST">
				<div class="field-wrap">
					<label>
						Correo electronico<span class="req">*</span>
					</label>
					<input name="correo" style="border: 1px solid #eef0f0;" type="email" required autocomplete="off" />
				</div>
				<input name="_token" type="hidden" value="{{ csrf_token() }}">
				<div class="field-wrap">
					<label>
						Contraseña<span class="req">*</span>
					</label>
					<input name="password" style="border: 1px solid #eef0f0;" type="password" required autocomplete="off" />
				</div>

				<p class="forgot"><a href="#">Olvidaste tu contraseña?</a></p>
				<button class="button button-block" type="submit">Iniciar sesión </button>
			</form>
		</div>

	</div>

</div>
@endsection

@section('scripts')
	@parent
	<script src="{{ url('js/index.js') }}"></script>
	<script>
		$(document).ready(function(e){

			@if(session('incorrectUser'))
				alert('Usuario incorrecto');
				{{
					session()->forget('incorrectUser')
				}}

			@endif
			
		})
	</script>
@endsection