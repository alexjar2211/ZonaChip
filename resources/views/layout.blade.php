<!DOCTYPE html>
<html lang="en">

<head>
	<title>@yield('titulo') - ZonaChip</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@section('estilos')
	<link rel="icon" type="image/png" href=" {{ asset("images/icons/zona.png") }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/themify/themify-icons.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/elegant-font/html-css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/slick/slick.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/lightbox2/css/lightbox.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{asset('js/instafeed.min.js')}}"></script>
	@show

	<style>
		.user-option-container {
			display: flex;
			flex-direction: column;
			position: absolute;
			top: 38px;
			left: 0;
			background: #fff;
			color: #6b6b6b;
			width: 75%;
			text-align: end;
			padding: 10px;
			box-shadow: 0px 0px 4px rgba(0,0,0,.1);
			/* border-radius: 5px; */
		}

		.user-option-container:before{
			content: '';
			width: 0;
			height: 0;
			position: absolute;
			top: -16px;
			right: 12px;
			border-right: 7px solid transparent;
			border-left: 7px solid transparent;
			border-top: 10px solid transparent;
			border-bottom: 10px solid #fff;
		}

		.user-option-container a{
			padding: 4px 10px;
			cursor: pointer;
			font-size: .9rem;
			text-decoration: none;
			color: #000;
		}

		.user-option-container a:hover{
			color: #229dc1;
		}

		.hidden{
			display: none;
		}
		
	</style>
</head>

<body class="animsition">
	<!-- Header -->
	<header class="@yield('clase-header')">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="topbar">
				<div class="topbar-social">
					<a href="https://www.facebook.com/ZonaChicyalgomas.sr/" class="topbar-social-item fa fa-facebook"
						target="_blank"></a>
					<a href="https://www.instagram.com/zonachicyalgomas/" target="_blank"
						class="topbar-social-item fa fa-instagram"></a>
					<a href="https://api.whatsapp.com/send?phone=593995302302&text=Hola%2C%20deseo%20adquirir%20un%20producto%20con%20ustedes"
						target="_blank" class="topbar-social-item fa fa-whatsapp"></a>
				</div>

				<span class="topbar-child1">Envios a todo el pais</span>

				<div class="topbar-child2">
					<span class="topbar-email">zonachic.sr@gmail.com</span>
				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<div class="logo_menu" style="width: auto">
					<a href="{{ url('/') }}" class="logo">
						<img src="images/zona.png" alt="zona chic">
					</a>
					<!-- Menu -->
					<div class="wrap_menu">
						<nav class="menu">
							<ul class="main_menu">
								<li class="sale-noti">
									<a href="{{ url('/')}}">Inicio</a>
								</li>

								<li>
									<a href="">Diseño <span class="fa fa-angle-down"></span></a>
									<ul class="sub_menu">
										<li><a href="{{url('/vestidos')}}">Vestidos</a></li>
										<li><a href="{{url('/camisetas')}}">Camisetas</a></li>
									</ul>
								</li>

								<li>
									<a href="fiesta.php">Fiestas</a>
								</li>

								<li>
									<a href="#">Marcas <span class="fa fa-angle-down"></span></a>
									<ul class="sub_menu">
										<li><a href="{{ url('/kid') }}">Zona Kids</a></li>
										<li><a href="{{ url('/gym') }}">Zona Gym</a></li>
										<li><a href="{{ url('/army') }}">Zona Army</a></li>
									</ul>
								</li>
								<li>
									<a href="{{url('/carrito')}}">Compras</a>
								</li>
								<li>
									<a href="{{ url('/contacto') }}">Contáctanos</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">
					<div style="display: flex;" id="iconUser">
						@if(session('nombreUsuario'))
						<p style="color: #fff; padding-right: 10px">Bienvenido! {{ session('nombreUsuario') }} </p>
						@endif
						<a href="{{ session('nombreUsuario') ? url('miperfil') : url('/login')}}"
							class="header-wrapicon1 dis-block perfil">
							<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
						</a>

						@if(session('idUsuario') != null)
						<div class="user-option-container hidden">
							<a href="{{ url('mi-perfil') }}">Mi Perfil</a>
							<a href="{{ url('logout') }}">Cerrar Sesion</a>
						</div>
						@endif
					</div>

					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<a href="{{ url('/carrito') }}">
							<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
							<span class="header-icons-noti" id="cantidad_productos_cart">{{ $nroProductos }}</span>
						</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.php" class="logo-mobile">
				<img src="images/zona.png" alt="zona chic">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<a href="login.php" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<a href="{{ url('/carrito') }}">
							<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
							<span class="header-icons-noti" id="cantidad_productos_cart_responsive">{{ $nroProductos }}</span>
						</a>
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu">
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">Envios a todo el pais! </span>
					</li>

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">zonachic.sr@gmail.com</span>
						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="https://www.facebook.com/ZonaChicyalgomas.sr/" class="topbar-social-item fa fa-facebook"
								target="_blank"></a>
							<a href="https://www.instagram.com/zonachicyalgomas/" target="_blank"
								class="topbar-social-item fa fa-instagram"></a>
							<a href="https://api.whatsapp.com/send?phone=593995302302&text=Hola%2C%20deseo%20adquirir%20un%20producto%20con%20ustedes"
								target="_blank" class="fs-18 color1 p-r-20 fa fa-whatsapp"></a>
						</div>
					</li>

					<li class="item-menu-mobile">
						<a href="{{ url('/') }}">Inicio</a>
					</li>

					<li class="item-menu-mobile">
						<a href="">Diseño</a>
						<ul class="sub-menu">
							<li><a href="{{ url('/vestidos') }}">Vestidos</a></li>
							<li><a href="{{ url('/camisetas') }}">Camisetas</a></li>
						</ul>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>

					<li class="item-menu-mobile">
						<a href="fiesta.php">Fiestas</a>
					</li>

					<li class="item-menu-mobile">
						<a href="">Marcas</a>
						<ul class="sub-menu">
							<li><a href="kids.php">Zona kids</a></li>
							<li><a href="gym.php">Zona gym</a></li>
							<li><a href="army.php">Zona army</a></li>
						</ul>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>

					<li class="item-menu-mobile">
						<a href="cart.php">Compras</a>
					</li>

					<li class="item-menu-mobile">
						<a href="contact.php">Contáctanos</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>

	@yield('contenido')

	<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45" style="margin-top: 70px; box-shadow: 2px 2px 5px #999;">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					ZONA CHIC
				</h4>

				<div>
					<p class="s-text7 w-size27">
						Somos fabricantes y tenemos los mejores precios del mercado
						pedidos al por mayor y menor.<br>
						Pedidos al whatsapp 📲 <a
							href="https://api.whatsapp.com/send?phone=593995302302&text=Hola%2C%20deseo%20adquirir%20un%20producto%20con%20ustedes"
							target="_blank" class="s-text7"> 0995302302 </a>
					</p>

					<div class="flex-m p-t-30">
						<a href="https://www.facebook.com/ZonaChicyalgomas.sr/" class="fs-18 color1 p-r-20 fa fa-facebook"
							target="_blank"></a>
						<a href="https://www.instagram.com/zonachicyalgomas/" target="_blank"
							class="fs-18 color1 p-r-20 fa fa-instagram"></a>
					</div>
				</div>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Categorias
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="{{ url('/kid') }}" class="s-text7">Zona Kids</a>
					</li>

					<li class="p-b-9">
						<a href="gym.php" class="s-text7">Zona Gym</a>
					</li>

					<li class="p-b-9">
						<a href="army.php" class="s-text7">Zona Army</a>
					</li>


				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">Dirección</h4>

				<ul>
					<li class="s-text7 w-size27">
						Urbanización estrella del mar,<br> manzana 2 villa 16
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">Horario</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">9:00 AM a 8:00 PM</a>
					</li>
				</ul>
			</div>

			<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">Boletín</h4>

				<form>
					<div class="effect1 w-size9">
						<input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="@email.com">
						<span class="effect1-line"></span>
					</div>

					<div class="w-size2 p-t-20">
						<!-- Button -->
						<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
							Subscribete
						</button>
					</div>

				</form>
			</div>
		</div>

		<div class="t-center p-l-15 p-r-15">
			<a href="#">
				<img class="h-size2" src="images/icons/paypal.png" alt="IMG-PAYPAL">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/visa.png" alt="IMG-VISA">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/mastercard.png" alt="IMG-MASTERCARD">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/express.png" alt="IMG-EXPRESS">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/discover.png" alt="IMG-DISCOVER">
			</a>

			<div class="t-center s-text8 p-t-20">
				Copyright © 2019 ZonaChic
			</div>
		</div>
	</footer>

	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>


	@section('scripts')
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').php();
			$(this).on('click', function(){
				swal(nameProduct, "se agrego al carrito !", "success");
			});
		});

	</script>

	<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script>
		$("#iconUser").hover(function(e){
			$(".user-option-container").removeClass('hidden');
		}, function(e){
			$(".user-option-container").addClass('hidden');
		});
	</script>
	@show
</body>

</html>