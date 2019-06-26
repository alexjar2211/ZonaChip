@extends('layout')

@section('titulo', 'Subir foto')

@section('estilos')
@parent
<link rel="stylesheet" href="{{ asset('css/estilo.css') }}">

@endsection

@section('contenido')
<section class="blog bgwhite p-t-94 p-b-65">
	<form action="{{ url('/carrito/producto') }}" method="POST" enctype="multipart/form-data">
		<div class="container" id="containerUploadPhoto">
			<div class="sec-title p-b-52">
				<h3 class="m-text5 t-center">
					Sube tu Foto!
				</h3>
			</div>

			<input type="file" name="img-diseño" style="display: none" id="inputFile">

			<div class="row justify-content-center">
				<div class="col-5 photo-container" id="photoContainer">
					<img src="" alt="" id="imgDiseño" style="width: 100%">
					<div id="wrapper-upload-photo">
						<div class="img-wrap" style="width:15%;margin:70px auto;margin-bottom: 20px">
							<img style="width: 100%" src="{{ asset('images/upload-photo.png') }}" alt="">
						</div>
						<button class="photo-upload-btn">Sube tu foto</button>
					</div>

					<span class="delete-photo">
						<img src="{{ asset('/images/trash.png') }}" alt="" style="width: 25px">
						<span>
							Eliminar foto
						</span>
					</span>
				</div>
			</div>

			<div class="row justify-content-center mt-4">
				<div class="col-5" style="padding: 0">
					<select class="select-upload" id="selectTipo">
						<option value="0">Seleccione el tipo de camiseta</option>
						<option value="man">Para Hombre</option>
						<option value="kids">Para Niños</option>
						<option value="woman">Para Mujeres</option>
					</select>

					<select class="select-upload" style="margin-top: 15px; display:none" id="selectTalla">
					</select>

					<input type="text" style="display: none" class="txt-upload mt-3"
						placeholder="Ingrese el nombre del diseñador">
				</div>
			</div>

			<div class="row justify-content-center mt-4">
				<div class="col-auto">
					<button type="button" class="photo-upload-btn" id="btnNextReview">Siguiente</button>
				</div>
			</div>
		</div>

		<div class="container" id="containerReview">
			<div class="sec-title p-b-52">
				<h3 class="m-text5 t-center">
					Ultimos detalles!
				</h3>
			</div>

			<div class="row justify-content-center">
				<div class="col-10 container-photo-detail-cart">
					<div style="display:flex;align-items:flex-end  ">
						<div class="wrap-img">
							<img src="" alt="" id="photo-min" style="width: 100%; vertical-align:top">
						</div>
	
						<div class="container-description-photo">
							<span class="nombre-design">Camiseta <br>Kid's | Size 2T (XXS)</span>
							<span>Diseñado por: Andres</span>
						</div>
					</div>
	
					<input type="hidden" name="id" value="101" id="productId">
					<input name="_token" type="hidden" value="{{ csrf_token() }}">
					<input type="hidden" name="precio" value="400">
					<input type="hidden" name="nombre" value="Camiseta Kid's | Size 2T (XXS)">
					<input type="hidden" name="section" value="upload">
	
					<div style="display: flex" class="container-price">
						<div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
							<button class="btn-num-product-down color1 flex-c-m bg8 eff2 btnNumberQuantity">
								-
							</button>
	
							<input class="m-text18 t-center num-product inputNumberQuantity" type="number" name="cantidad"
								value="1" id="cantidad">
	
							<button class="btn-num-product-up color1 flex-c-m bg8 eff2 btnNumberQuantity">
								+
							</button>
						</div>
						<input type="hidden" value="400" id="precio-inicial">
						<span class="price-design">400</span>
					</div>
				</div>
				<div class="col-10" style="display: flex;justify-content: flex-end;margin-top:20px">
					<button type="submit" class="photo-upload-btn" id="btnComprar">Agregar al carrito</button>
				</div>
			</div>
		</div>
	</form>
</section>

@section('scripts')
@parent
<script src="{{ asset('js/subida.js') }}"></script>
<script>
	$(document).ready(function(e){
			$('#btnComprar').click(function(e){
				const precio = parseFloat($('#precio-inicial').val());
				const cantidad = parseFloat($('.inputNumberQuantity').val());
				const productId = parseInt($("#productId").val());
				const nombre = $(".nombre-design").text();

				const datos = {
					precio: precio,
					nombre: nombre,
					id: productId,
					cantidad: cantidad,
					_token: '{{ csrf_token() }}'
				};

				console.log(datos);
				
				
				$.ajax({
					type: "POST",
					url: "carrito/producto",
					dataType: "json",
					data: datos,
					success: function (response) {
						console.log(response);
						$('#cantidad_productos_cart').text(response);
						$('#cantidad_productos_cart_responsive').text(response);
					}
				});
			})
		})
</script>
@endsection
@endsection