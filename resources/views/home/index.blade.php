@extends('layout')

@section('titulo', 'Home')

@section('estilos')
@parent
<style>
	.block2-price:before {
		content: '$'
	}
</style>
@endsection

@section('contenido')
<!-- Slide1 -->
<section class="slide1">
	<div class="wrap-slick1">
		<div class="slick1">
			<div class="item-slick1 item1-slick1" style="background-image: url(images/slider1.png);">
				<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
					<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
						Experimenta la magia de diseñar
					</span>

					<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
						Lleve su imaginacion
					</h2>

					<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
						<!-- Button -->
						<a href="{{ url('/productos') }}" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
							Conseguir
						</a>
					</div>
				</div>
			</div>

			<div class="item-slick1 item2-slick1" style="background-image: url(images/slider2.png);">
				<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
					<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
						Experimenta la magia de diseñar
					</span>

					<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
						Lleve su imaginacion
					</h2>

					<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
						<!-- Button -->
						<a href="product.php" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
							Conseguir
						</a>
					</div>
				</div>
			</div>

			<div class="item-slick1 item3-slick1" style="background-image: url(images/slider3.png);">
				<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
					<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="zoomIn">
						Experimenta la magia de diseñar
					</span>

					<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
						Lleve su imaginacion
					</h2>

					<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
						<!-- Button -->
						<a href="product.php" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
							Conseguir
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Banner -->
<section class="banner bgwhite p-t-40 p-b-40">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
				<!-- block1 -->
				<div class="block1 hov-img-zoom pos-relative m-b-30">
					<img src="images/banner-02.jpg" alt="IMG-BENNER">

					<div class="block1-wrapbtn w-size2">
						<!-- Button -->
						<a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
							....
						</a>
					</div>
				</div>

				<!-- block1 -->
				<div class="block1 hov-img-zoom pos-relative m-b-30">
					<img src="images/banner-05.jpg" alt="IMG-BENNER">

					<div class="block1-wrapbtn w-size2">
						<!-- Button -->
						<a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
							.....
						</a>
					</div>
				</div>
			</div>

			<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
				<!-- block1 -->
				<div class="block1 hov-img-zoom pos-relative m-b-30">
					<img src="images/banner-03.jpg" alt="IMG-BENNER">

					<div class="block1-wrapbtn w-size2">
						<!-- Button -->
						<a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
							....
						</a>
					</div>
				</div>

				<!-- block1 -->
				<div class="block1 hov-img-zoom pos-relative m-b-30">
					<img src="images/banner-07.jpg" alt="IMG-BENNER">

					<div class="block1-wrapbtn w-size2">
						<!-- Button -->
						<a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
							....
						</a>
					</div>
				</div>
			</div>

			<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
				<!-- block1 -->
				<div class="block1 hov-img-zoom pos-relative m-b-30">
					<img src="images/banner-04.jpg" alt="IMG-BENNER">

					<div class="block1-wrapbtn w-size2">
						<!-- Button -->
						<a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
							....
						</a>
					</div>
				</div>

				<!-- block2 -->
				<div class="block2 wrap-pic-w pos-relative m-b-30">
					<img src="images/icons/bg-01.jpg" alt="IMG">

					<div class="block2-content sizefull ab-t-l flex-col-c-m">
						<h4 class="m-text4 t-center w-size3 p-b-8">
							Aprovecha nuestros descuentos
						</h4>

						<p class="t-center w-size4">
							grandes ofertas y ropa exclusiva
						</p>

						<div class="w-size2 p-t-25">
							<!-- Button -->
							<a href="#" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
								VER
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- New Product -->
<section class="newproduct bgwhite p-t-45 p-b-105">
	<div class="container">
		<div class="sec-title p-b-60">
			<h3 class="m-text5 t-center">
				Productos
			</h3>
		</div>

		<!-- Slide2 -->
		<div class="wrap-slick2">
			<div class="slick2">
				<div class="item-slick2 p-l-15 p-r-15">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-img wrap-pic-w of-hidden pos-relative">
							<img src="images/item-02.jpg" alt="IMG-PRODUCT">

							<div class="block2-overlay trans-0-4">
								<div class="block2-btn-addcart w-size1 trans-0-4">
									<!-- Button -->
									<button class="btnComprar flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
										comprar
									</button>
								</div>
							</div>
						</div>

						<input type="hidden" name="" class="block2-id" value="5">

						<div class="block2-txt p-t-20">
							<a href="product-detail.php" class="block2-name dis-block s-text3 p-b-5">
								Producto A
							</a>

							<span class="block2-price m-text6 p-r-5">
								75.00
							</span>
						</div>
					</div>
				</div>

				<div class="item-slick2 p-l-15 p-r-15">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-img wrap-pic-w of-hidden pos-relative">
							<img src="images/item-03.jpg" alt="IMG-PRODUCT">

							<div class="block2-overlay trans-0-4">
								<div class="block2-btn-addcart w-size1 trans-0-4">
									<!-- Button -->
									<button class="btnComprar flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
										comprar
									</button>
								</div>
							</div>
						</div>

						<input type="hidden" name="" class="block2-id" value="6">

						<div class="block2-txt p-t-20">
							<a href="product-detail.php" class="block2-name dis-block s-text3 p-b-5">
								Producto B
							</a>

							<span class="block2-price m-text6 p-r-5">
								92.50
							</span>
						</div>
					</div>
				</div>

				<div class="item-slick2 p-l-15 p-r-15">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-img wrap-pic-w of-hidden pos-relative">
							<img src="images/item-05.jpg" alt="IMG-PRODUCT">

							<div class="block2-overlay trans-0-4">
								<div class="block2-btn-addcart w-size1 trans-0-4">
									<!-- Button -->
									<button class="btnComprar flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
										comprar
									</button>
								</div>
							</div>
						</div>

						<input type="hidden" name="" class="block2-id" value="7">

						<div class="block2-txt p-t-20">
							<a href="product-detail.php" class="block2-name dis-block s-text3 p-b-5">
								Producto C
							</a>

							<span class="block2-price m-text6 p-r-5">
								165.90
							</span>
						</div>
					</div>
				</div>

				<div class="item-slick2 p-l-15 p-r-15">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-img wrap-pic-w of-hidden pos-relative">
							<img src="images/item-07.jpg" alt="IMG-PRODUCT">

							<div class="block2-overlay trans-0-4">
								<div class="block2-btn-addcart w-size1 trans-0-4">
									<!-- Button -->
									<button class="btnComprar flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
										comprar
									</button>
								</div>
							</div>
						</div>

						<input type="hidden" name="" class="block2-id" value="8">

						<div class="block2-txt p-t-20">
							<a href="product-detail.php" class="block2-name dis-block s-text3 p-b-5">
								Producto D
							</a>

							<span class="block2-oldprice m-text7 p-r-5">$29.50</span>

							<span class="block2-price block2-newprice m-text8 p-r-5">
								15.90
							</span>
						</div>
					</div>
				</div>

				<div class="item-slick2 p-l-15 p-r-15">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-img wrap-pic-w of-hidden pos-relative">
							<img src="images/item-02.jpg" alt="IMG-PRODUCT">

							<div class="block2-overlay trans-0-4">
								<div class="block2-btn-addcart w-size1 trans-0-4">
									<!-- Button -->
									<button class="btnComprar flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
										comprar
									</button>
								</div>
							</div>
						</div>

						<input type="hidden" name="" class="block2-id" value="5">

						<div class="block2-txt p-t-20">
							<a href="product-detail.php" class="block2-name dis-block s-text3 p-b-5">
								Producto A
							</a>

							<span class="block2-price m-text6 p-r-5">
								75.00
							</span>
						</div>
					</div>
				</div>

				<div class="item-slick2 p-l-15 p-r-15">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-img wrap-pic-w of-hidden pos-relative">
							<img src="images/item-03.jpg" alt="IMG-PRODUCT">

							<div class="block2-overlay trans-0-4">
								<div class="block2-btn-addcart w-size1 trans-0-4">
									<!-- Button -->
									<button class="btnComprar flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
										comprar
									</button>
								</div>
							</div>
						</div>

						<input type="hidden" name="" class="block2-id" value="6">

						<div class="block2-txt p-t-20">
							<a href="product-detail.php" class="block2-name dis-block s-text3 p-b-5">
								Producto B
							</a>

							<span class="block2-price m-text6 p-r-5">
								92.50
							</span>
						</div>
					</div>
				</div>

				<div class="item-slick2 p-l-15 p-r-15">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-img wrap-pic-w of-hidden pos-relative">
							<img src="images/item-05.jpg" alt="IMG-PRODUCT">

							<div class="block2-overlay trans-0-4">
								<div class="block2-btn-addcart w-size1 trans-0-4">
									<!-- Button -->
									<button class="btnComprar flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
										comprar
									</button>
								</div>
							</div>
						</div>

						<input type="hidden" name="" class="block2-id" value="7">

						<div class="block2-txt p-t-20">
							<a href="product-detail.php" class="block2-name dis-block s-text3 p-b-5">
								Producto C
							</a>

							<span class="block2-price m-text6 p-r-5">
								165.90
							</span>
						</div>
					</div>
				</div>

				<div class="item-slick2 p-l-15 p-r-15">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-img wrap-pic-w of-hidden pos-relative">
							<img src="images/item-07.jpg" alt="IMG-PRODUCT">

							<div class="block2-overlay trans-0-4">
								<div class="block2-btn-addcart w-size1 trans-0-4">
									<!-- Button -->
									<button class="btnComprar flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
										comprar
									</button>
								</div>
							</div>
						</div>

						<input type="hidden" name="" class="block2-id" value="8">

						<div class="block2-txt p-t-20">
							<a href="product-detail.php" class="block2-name dis-block s-text3 p-b-5">
								Producto D
							</a>

							<span class="block2-oldprice m-text7 p-r-5">$29.50</span>
							<span class="block2-price block2-newprice m-text8 p-r-5">15.90</span>
						</div>
					</div>
				</div>
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