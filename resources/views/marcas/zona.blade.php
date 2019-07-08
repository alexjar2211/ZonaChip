@extends('layout')
@section('titulo', 'Marcas')

@section('estilos')
	@parent
	<style>
		.block2-price:before{
			content:'$'
		}
	</style>
@endsection

@section('contenido')

<!-- Title Page -->
<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-color: black">
	<h2 class="l-text2 t-center">
		Zona Army
	</h2>
	<p class="m-text13 t-center">
		Marcas
	</p>
</section>

<!-- Content page -->
<section class="bgwhite p-t-55 p-b-65">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
				<div class="leftbar p-r-20 p-r-0-sm">
					<h4 class="m-text14 p-b-7">Categorias</h4>

					<ul class="p-b-54">
						<li class="p-t-4">
							<a href="{{ url('/kid') }}" class="s-text13">Zona Kids</a>
						</li>

						<li class="p-t-4">
							<a href="{{ url('/gym') }}" class="s-text13">Zona Gym</a>
						</li>

						<li class="p-t-4">
							<a href="{{ url('/army') }}" class="s-text13">Zona Army</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
				<!-- Product -->
				<div class="row">
					@foreach ($listaProductos as $producto)
					<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
								<img src="images/{{ $producto['portada'] }}" alt="">

								<div class="block2-overlay trans-0-4">
									<div class="block2-btn-addcart w-size1 trans-0-4">
										<button class="btnComprar flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Comprar
										</button>
									</div>
								</div>
							</div>

							<input type="hidden" name="" class="block2-id" value="{{ $producto['id'] }}">

							<div class="block2-txt p-t-20">
								<a href="{{ url('/detalle-producto/'.$producto['id']) }}" class="block2-name dis-block s-text3 p-b-5">
									{{ $producto['nombre'] }}
								</a>
								<span class="block2-price m-text6 p-r-5">{{ $producto['precio'] }}</span>
							</div>
						</div>
					</div> 
					@endforeach
				</div>

				<!-- Pagination -->
				{{-- <div class="pagination flex-m flex-w p-t-26">
					<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
					<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
				</div> --}}
			</div>
		</div>
	</div>
</section>

@section('scripts')
	@parent
	<script>
		$(document).ready(function(e){
			$('.btnComprar').click(function(e){
				const productContainer = $(this).parent().parent().parent().parent();
				let precio = productContainer.children('.block2-txt').children('.block2-price').text().trim();
				precio = parseFloat(precio);
				const nombre = productContainer.children('.block2-txt').children('.block2-name').text().trim();
				const cantidad = parseInt($("#cantidad_productos_cart").text());
				const id = productContainer.children('.block2-id').val();
				
				const datos = {
					precio: precio,
					nombre: nombre,
					id:id,
					cantidad: 1,
					_token: '{{ csrf_token() }}'
				};

				console.log(datos);
				
				$('#cantidad_productos_cart').text(cantidad+1);
				$('#cantidad_productos_cart_responsive').text(cantidad+1);

				$.ajax({
					type: "POST",
					url: "carrito/producto",
					dataType: "json",
					data: datos,
					success: function (response) {
						console.log(response);
					}
				});
			})
		})
	</script>
@endsection

@endsection