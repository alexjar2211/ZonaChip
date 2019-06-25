@extends('layout')

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
{{-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> --}}
<script src="{{asset('js/instafeed.min.js')}}"></script>
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<link rel="stylesheet" href="{{ asset('cart/css/style.css')}}">

@endsection

@section('titulo', 'Carrito')
@section('contenido')

<input type="hidden" id="token" value="{{ csrf_token() }}">
<input type="hidden" id="idUsuario" value="{{ session('idUsuario') }}">
<!-- Cart -->
<section class="cart bgwhite p-t-70 p-b-100">
	<div class="container contenedor-carrito" >
		<!-- Cart item -->
		<div class="container-table-cart pos-relative">
			<div class="wrap-table-shopping-cart bgwhite">
				<div class="shopping-cart" style="margin: 20px;">

					<div class="column-labels">
						<label class="product-image">Image</label>
						<label class="product-details">Producto</label>
						<label class="product-price">Precio</label>
						<label class="product-quantity">Cantidad</label>
						<label class="product-removal">Remover</label>
						<label class="product-line-price">Total</label>
					</div>

					<section class="contenedor-productos">
						@if($nroProductos != 0)
							@foreach ($factura->listaProductos as $producto)
							<div class="product">
								<div class="product-image">
									<img src="images/item-cart-01.jpg">
								</div>
								<input type="hidden" class="block2-id" value="{{ $producto['id'] }}">
								<div class="product-details">
									<div class="product-title"> {{ $producto['nombre'] }} </div>
									<p class="product-description">-------------------</p>
								</div>
								<div class="product-price">{{$producto['precio']}}</div>
								<div class="product-quantity">
									<input type="number" class="cantidadProd" value="{{$producto['cantidad']}}" min="1">
								</div>
								<div class="product-removal">
									<button class="remove-product">
										Remover
									</button>
								</div>
							<div class="product-line-price">{{ $producto['cantidad'] * $producto['precio']}}</div>
							</div>
							@endforeach
						@else
							<h2>No hay productos en el carrito</h2>
						@endif
					</section>
				</div>

			</div>
		</div>

		
		<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
			@if ($nroProductos != 0)
			<div class="flex-w flex-m w-full-sm">
				<div class="size11 bo4 m-r-10">
					<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="coupon-code"
						placeholder="Codigo del cupon" id="cupon">
				</div>

				
				<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
					<!-- Button -->
					<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" id="btnApplyCuppon">
						Aplicar cupon
					</button>
				</div>
			</div>
			@endif
		</div>
	

		@if ($nroProductos != 0)
		<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
			<h5 class="m-text20 p-b-24">Carrito Total	</h5>

			<!--  -->
			<div class="flex-w flex-sb-m p-b-12">
				<span class="s-text18 w-size19 w-full-sm">Subtotal:</span>

				<span class="m-text21 w-size20 w-full-sm">
					<div class="totals-value" id="cart-subtotal">{{ $factura['subtotal']}}</div>
				</span>
			</div>
			<div class="flex-w flex-sb-m p-b-12">
				<span class="s-text18 w-size19 w-full-sm">IVA 12%:</span>

				<span class="m-text21 w-size20 w-full-sm">
					<div class="totals-value" id="cart-tax">{{ $factura['iva'] }}</div>
				</span>
			</div>
			<div class="flex-w flex-sb-m p-b-12">
				<span class="s-text18 w-size19 w-full-sm">Envio:</span>

				<span class="m-text21 w-size20 w-full-sm">
					<div class="totals-value" id="cart-shipping">{{ $factura['envio'] }}</div>
				</span>
			</div>

			<div class="flex-w flex-sb-m p-b-12">
				<span class="s-text18 w-size19 w-full-sm">Descuento:</span>

				<span class="m-text21 w-size20 w-full-sm">
					<div class="totals-value" id="cart-descuento">{{ $factura['descuento'] }}</div>
				</span>
			</div>
			
			<div class="flex-w flex-sb-m p-b-12">
				<span class="s-text18 w-size19 w-full-sm">Total:</span>

				<span class="m-text21 w-size20 w-full-sm">
					<div class="totals-value" id="cart-total"> {{ $factura['total'] }} </div>
				</span>
			</div>

			<div class="size15 trans-0-4">
				@if(session('idUsuario')!= null)
				<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" id="btnComprar">
					Proceder a comprar
				</button>

				@else
				<a href="{{ url('login') }}" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" style="color: #fff;cursor:pointer">
					Iniciar Sesion
				</a>
				@endif
			</div>
		</div>
		@endif
	</div>
</section>

<section class="container-fluid contenedor-resultado-compra" >
	<div class="row resultado-compra">
		<p class="titulo-post-compra">
			<span>Compra registrada</span>
		</p>

		<span class="cerrar-modal" id="btnCerrarModal">X</span>

		<div class="col-12 mt-3">
			<div class="row contenedor-pasos-post-compra justify-content-between">
				<div class="col-4 form-group">
					<div>
						<img src="{{ asset('images/64622.jpg') }}" alt="" style="width: 100%">
						<span class="titulo-instruccion">Deposito en cuenta</span> 
						
					</div>
				</div>
				<div class="col-4 form-group">
					<div>
						<img src="{{ asset('images/take_phoyo.png') }}" alt="" style="width:100%">
						<span class="titulo-instruccion">Sube tu comprobante</span>
						
					</div>
				</div>
				<div class="col-4">
					<div>
						<img src="{{ asset('images/envio.png') }}" alt="" style="width:100%">
						<span class="titulo-instruccion">Espera el envio</span>
					</div>
				</div>
			</div>

			<div class="row">
					<p style="padding: 0px 15px 10px 15px">
							Cta: 1234565 <br>
							Banco Pichincha<br>
							Zona Chip
						</p>
			</div>
		</div>
	</div>
</section>

@section('scripts')
	@parent
	<script  src="{{asset('cart/js/index.js')}}"></script>
@endsection

@endsection