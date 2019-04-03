@extends('layout') 

@section('titulo', 'Contactenos')

@section('contenido')

<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.jpg');">
	<h2 class="ltext-105 cl0 txt-center">Contáctanos</h2>
</section>

<!-- Content page -->
<section class="bg0 p-t-104 p-b-116">
	<div class="container">
		<div class="flex-w flex-tr">
			<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
				<form>
					<h4 class="mtext-105 cl2 txt-center p-b-30">
						Envia un mensaje
					</h4>

					<div class="bor8 m-b-20 how-pos4-parent">
						<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" placeholder="Escribe tu correo">
						<img class="how-pos4 pointer-none" src="images/icons/icon-email.png" alt="ICON">
					</div>

					<div class="bor8 m-b-30">
						<textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="msg" placeholder="En que te podemos ayudar?"></textarea>
					</div>

					<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
						Enviar
					</button>
				</form>
			</div>

			<div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
				<div class="flex-w w-full p-b-42">
					<span class="fs-18 cl5 txt-center size-211">
						<span class="lnr lnr-map-marker"></span>
					</span>

					<div class="size-212 p-t-2">
						<span class="mtext-110 cl2">Dirección</span>

						<p class="stext-115 cl6 size-213 p-t-18">
							Urbanización estrella del mar, manzana 2 villa 16
						</p>
					</div>
				</div>

				<div class="flex-w w-full p-b-42">
					<span class="fs-18 cl5 txt-center size-211">
						<span class="lnr lnr-phone-handset"></span>
					</span>

					<div class="size-212 p-t-2">
						<span class="mtext-110 cl2">Llámanos</span>

						<p class="stext-115 cl1 size-213 p-t-18">	0995383918</p>
					</div>
				</div>

				<div class="flex-w w-full">
					<span class="fs-18 cl5 txt-center size-211">
						<span class="lnr lnr-envelope"></span>
					</span>

					<div class="size-212 p-t-2">
						<span class="mtext-110 cl2">Correo</span>
						<p class="stext-115 cl1 size-213 p-t-18">	zonachic.sr@gmail.com</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- Map -->
<div class="map">
	<div class="size-303" data-scrollwhell="0" data-draggable="1" data-zoom="11">
		<iframe width="100%" height="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.1388316807324!2d-79.91127668572106!3d-2.0999615376460725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d13685782c27f%3A0xe80ea1b72d84ed48!2sZona+Chic+y+algo+mas!5e0!3m2!1ses!2sec!4v1553756271612!5m2!1ses!2sec"></iframe>
	</div>
</div>	
@endsection