@extends('layout')
@section('titulo', 'Detalle')
@section('estilos')
@parent
<style>
	.block2-price:before {
		content: '$'
	}
</style>
@endsection
@section('contenido')
<div class="container bgwhite p-t-35 p-b-80">
	<div class="flex-w flex-sb">
		<div class="w-size13 p-t-30 respon5">
			<div class="wrap-slick3 flex-sb flex-w">
				<div class="wrap-slick3-dots"></div>

				<div class="slick3">
					<div class="item-slick3" data-thumb="images/thumb-item-01.jpg">
						<div class="wrap-pic-w">
							<img src="images/product-detail-01.jpg" alt="IMG-PRODUCT">
						</div>
					</div>

					<div class="item-slick3" data-thumb="images/thumb-item-02.jpg">
						<div class="wrap-pic-w">
							<img src="images/product-detail-02.jpg" alt="IMG-PRODUCT">
						</div>
					</div>

					<div class="item-slick3" data-thumb="images/thumb-item-03.jpg">
						<div class="wrap-pic-w">
							<img src="images/product-detail-03.jpg" alt="IMG-PRODUCT">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="w-size14 p-t-30 respon5">
			<h4 class="product-detail-name m-text16 p-b-13">
				Boxy T-Shirt with Roll Sleeve Detail
			</h4>

			<span class="m-text17 block2-price" id="txtPrecio">22</span>

			<p class="s-text8 p-t-10">
				Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
			</p>

			<input type="hidden" name="" id="idProduct" value="100">

			<div class="p-t-33 p-b-60">
				<div class="flex-m flex-w p-b-10">
					<div class="s-text15 w-size15 t-center">
						Talla
					</div>

					<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
						<select class="selection-2" name="size">
							<option>Elegir Talla</option>
							<option>Talla S</option>
							<option>Talla M</option>
							<option>Talla L</option>
							<option>Talla XL</option>
						</select>
					</div>
				</div>

				<div class="flex-r-m flex-w p-t-10">
					<div class="w-size16 flex-m flex-w">
						<div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
							<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
								<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
							</button>

							<input class="size8 m-text18 t-center num-product" 
								type="number" name="num-product" value="1" id="cantidad">

							<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
								<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
							</button>
						</div>

						<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
							<!-- Button -->
							<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" id="btnComprar">
								comprar
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@section('scripts')
	@parent
	<script>
		$(document).ready(function(e){
			$("#btnComprar").click(function(e){
				const cantidad = parseInt($("#cantidad").val());
				const precio = parseFloat($("#txtPrecio").text());
				const id = $("#idProduct").val();
				const nombre = $(".product-detail-name").text();

				const datos = {
					precio: precio,
					nombre: nombre,
					id:id,
					cantidad: cantidad,
					_token: '{{ csrf_token() }}'
				};

				console.log(datos);
				
				const cantidadCarrito = parseInt($('#cantidad_productos_cart').text());

				$('#cantidad_productos_cart').text(cantidad + cantidadCarrito);
				$('#cantidad_productos_cart_responsive').text(cantidad + cantidadCarrito);

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