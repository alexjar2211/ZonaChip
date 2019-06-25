@extends('layout')

@section('titulo', 'Contactenos')

@section('contenido')

<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-color:black;">
	<h2 class="l-text2 t-center">
		Contáctanos
	</h2>
</section>

<!-- content page -->
<section class="bgwhite p-t-66 p-b-60">
	<div class="container">
		<div class="row">
			<div class="col-md-6 p-b-30">
				<div class="p-r-20 p-r-0-lg">
					<div class="contact-map size21" data-pin="images/icons/icon-position-map.png" data-scrollwhell="0"
						data-draggable="1">
						<iframe style="min-height: 500px;width: 100%;"
							src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.1388316807324!2d-79.91127668572106!3d-2.0999615376460725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d13685782c27f%3A0xe80ea1b72d84ed48!2sZona+Chic+y+algo+mas!5e0!3m2!1ses!2sec!4v1553756271612!5m2!1ses!2sec"></iframe>
					</div>
				</div>
			</div>

			<div class="col-md-6 p-b-30">
				<form class="leave-comment">
					<h4 class="m-text26 p-b-36 p-t-15">
						Envia tu mensaje
					</h4>

					<div class="bo4 of-hidden size15 m-b-20">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="#" placeholder="Nombres">
					</div>

					<div class="bo4 of-hidden size15 m-b-20">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="#" placeholder="Telefono">
					</div>

					<div class="bo4 of-hidden size15 m-b-20">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="Email">
					</div>

					<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="#"
						placeholder="Mensaje"></textarea>

					<div class="w-size25">
						<!-- Button -->
						<button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
							Enviar
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
@endsection