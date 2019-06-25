@extends('layout')

@section('titulo', 'Vestidos')

@section('estilos')
	@parent
	<style>
		.background-camisetas{
			background: #1ddbb1;
		}
		
		.color-camiseta{
			color: #1ddbb1;
		}

		.background-vestidos{
			background: #de4b7d;
		}

		.color-vestidos{
			color: #de4b7d;
		}

		.text-diseño {
			font-size: 30px;
			text-align: center;
			margin-top:10px
		}

		.btn-vestidos:hover{
			background: #de4b7d;
			color: #fff;
		}
		
		.btn-camisetas:hover{
			background: #1ddbb1;
			color: #fff;
		}
		
	</style>
@endsection

@section('contenido')
<!-- Slide1 -->
<section class="slide1">
	<div class="wrap-slick1">
		<div class="slick1">
			<div class="item-slick1 item1-slick1" style="background-image: url(images/slider.jpg);">
				<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
					<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
						Experimenta la magia de diseñar
					</span>

					<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
						Lleve su imaginacion
					</h2>

					<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn" style="width: 180px">
						<!-- Button -->
						<a href="{{ url('/upload') }}" 
						class="flex-c-m size2 bo-rad-23 s-text2 bgwhite trans-0-4 {{ $tipo == "camiseta" ? "btn-camisetas" : "btn-vestidos" }} ">
							Pide tu {{ $tipo }}
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
		<div style="max-width: 15%;margin-bottom: 20px;margin: 0 auto">
			<img style="width: 100%;vertical-align:top" 
				src="{{ $tipo == "camiseta" ? "images/printer2.svg" : "images/printer.svg" }}" 
				alt="IMG-BANNER"> <br>
		</div>
			<h3 class="text-diseño ltext-103 cl5 {{ $tipo == "camiseta" ? "color-camiseta" : "color-vestidos"}} ">
				Imprime tus plantillas de vestir para colorear y empieza!
			</h3>

		<div style="width: 30%;margin: 20px auto">
			<select class="selection-1" name="time" id="selectTalla">
				<option value="0">Elegir el tipo de {{ $tipo }}</option>
				@if ($tipo == "camiseta")
					<option value="kid">Para Niños</option>
					<option value="men">Para Hombres</option>
					<option value="women">Para Mujeres</option>
				@else
					<option value="kid">Para Niñas</option>
					<option value="women">Para Mujeres</option>
				@endif

			</select>
		</div>

		<div class="wrap-btn-slide1 w-size1 animated" style="margin: 0 auto;width: 180px">
			<a style="color: #fff; display:none" href="" target="_blank" id="urlPlantilla"
				class="flex-c-m size2 bo-rad-23 trans-0-4  
				{{ $tipo == "camiseta" ? "background-camisetas" : "background-vestidos" }} "   >
				Descargar plantilla
			</a>
		</div>
	</div>
</section>

<section class="instagram p-t-20">
	<div class="sec-title p-b-52 p-l-15 p-r-15">
		<h3 class="m-text5 t-center">
			@Síguenos en Instagram
		</h3>
	</div>

	<div class="flex-w">
		<!-- Block4 -->
		<div class="block4 wrap-pic-w">
			<img src="images/zona-insta.jpg" alt="IMG-INSTAGRAM">

			<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
				<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
					<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
					<span class="p-t-2">39</span>
				</span>

				<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
					<p class="s-text10 m-b-15 h-size1 of-hidden">@zona chic</p>

					<span class="s-text9">
						Photo by @zona chic
					</span>
				</div>
			</a>
		</div>

		<!-- Block4 -->
		<div class="block4 wrap-pic-w">
			<img src="images/zona-insta.jpg" alt="IMG-INSTAGRAM">

			<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
				<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
					<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
					<span class="p-t-2">39</span>
				</span>

				<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
					<p class="s-text10 m-b-15 h-size1 of-hidden">
						@zona chic
					</p>

					<span class="s-text9">
						Photo by @zonachic
					</span>
				</div>
			</a>
		</div>

		<!-- Block4 -->
		<div class="block4 wrap-pic-w">
			<img src="images/zona-insta.jpg" alt="IMG-INSTAGRAM">

			<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
				<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
					<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
					<span class="p-t-2">39</span>
				</span>

				<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
					<p class="s-text10 m-b-15 h-size1 of-hidden">
						@zona chic
					</p>

					<span class="s-text9">
						Photo by @zonachic
					</span>
				</div>
			</a>
		</div>

		<!-- Block4 -->
		<div class="block4 wrap-pic-w">
			<img src="images/zona-insta.jpg" alt="IMG-INSTAGRAM">

			<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
				<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
					<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
					<span class="p-t-2">39</span>
				</span>

				<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
					<p class="s-text10 m-b-15 h-size1 of-hidden">@zona chic</p>

					<span class="s-text9">Photo by @zonachic</span>
				</div>
			</a>
		</div>

		<!-- Block4 -->
		<div class="block4 wrap-pic-w">
			<img src="images/zona-insta.jpg" alt="IMG-INSTAGRAM">

			<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
				<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
					<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
					<span class="p-t-2">39</span>
				</span>

				<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
					<p class="s-text10 m-b-15 h-size1 of-hidden">@zona chic</p>

					<span class="s-text9">Photo by @zonachic</span>
				</div>
			</a>
		</div>
	</div>
</section>

@endsection

@section('scripts')
	@parent

	<script>
		$(document).ready(function(e){
			var url = @json($urlPlantillas);
			var diseño = @json($tipo);
			let urlPlantillas =  diseño == "camiseta" ? url.camisetas : url.vestidos;
			
			$("#selectTalla").change(function(e){
				const tipoTalla = $(this).val();
				if(tipoTalla != "0"){
					$("#urlPlantilla").fadeIn(300);
					const url = urlPlantillas[tipoTalla];
					$("#urlPlantilla").attr('href', url);
				}
				else{
					$("#urlPlantilla").fadeOut(300);

				}
			});

		})
	</script>
@endsection