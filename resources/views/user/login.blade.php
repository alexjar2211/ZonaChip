@extends('layout') 
@section('titulo', 'Login')
@section('contenido')
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.jpg');">
	<h2 class="ltext-105 cl0 txt-center" style="font-size: 40px;">
		Iniciar sesión/Registro
	</h2>
</section>

<section class="bg0 p-t-104 p-b-116" style="padding-top: 20PX;padding-bottom: 10px;">
	<div class="container">

		<div class="form">
			<ul class="tab-group">
				<li class="tab active"><a href="#signup">Regístrate</a></li>
				<li class="tab"><a href="#login">Iniciar sesión </a></li>
			</ul>

			<div class="tab-content">
				<div id="signup">
					<h1>Regístrate gratis</h1>
					<form action="{{ url('/registrarse')}}" method="POST">
						{{csrf_field()}}
						<div class="top-row">
							<div class="field-wrap">
								<label>
				                Nombre<span class="req">*</span>
				             </label>
								<input type="text" name="nombre" required autocomplete="off" />
							</div>

							<div class="field-wrap">
								<label>
				                Apellidos<span class="req">*</span>
				             </label>
								<input type="text" name="apellido" required autocomplete="off" />
							</div>
						</div>

						<div class="field-wrap">
							<label>
			              Correo electronico<span class="req">*</span>
			            </label>
							<input type="email" name="correo" required autocomplete="off" />
						</div>

						<div class="field-wrap">
							<label>
			              Establecer una contraseña<span class="req">*</span>
			            </label>
							<input type="password" name="password" required autocomplete="off" />
						</div>
						<button type="submit" class="button button-block" />Empezar</button>
					</form>
				</div>
				<div id="login">
					<h1>Bienvenido!</h1>
					<form action="{{url('/login')}}" method="POST">
						{{csrf_field()}}
						<div class="field-wrap">
							<label>
						   	Correo electronico<span class="req">*</span>
						   </label>
							<input type="email" name="correo" required autocomplete="off" />
						</div>

						<div class="field-wrap">
							<label>
						      Contraseña<span class="req">*</span>
					     </label>
							<input type="password" name="password" required autocomplete="off" />
						</div>
						<p class="forgot"><a href="#">Olvidaste tu contraseña?</a></p>
						<button class="button button-block" />Iniciar sesión </button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
 
@section('scripts')

<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<script>
	$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})

</script>
<!--===============================================================================================-->
<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script>
	$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});

</script>
<!--===============================================================================================-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>
<script src="js/index.js"></script>
@endsection