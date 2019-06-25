/* Set rates + misc */
var taxRate = 0.12;
var shippingRate = 15.00;
var fadeTime = 300;


/* Assign actions */
$('.product-quantity input').change(function () {
	updateQuantity(this);
});

$('.product-removal button').click(function () {
	removeItem(this);
});

$("#btnApplyCuppon").click(function(e){
	const codigoCupon = $("#cupon").val();
	const userId = $("#idUsuario").val();

	const datos = {
		codigoCupon: codigoCupon,
		userId: parseInt(userId),
		_token: $("#token").val()
	};

	$.ajax({
		type: "POST",
		url: "carrito/cupon",
		data: datos,
		dataType: "json",
		success: function (response) {
			console.log(response);
		}
	});
});

$("#btnComprar").click(function(e){
	var token = $("#token").val();

	$.ajax({
		type: "POST",
		url: "carrito/comprar",
		data: {_token: token},
		dataType: "json",
		success: function (response) {
			console.log(response);
			$(".contenedor-resultado-compra").fadeIn('slow', 0, function(e){
				$(".resultado-compra").fadeIn('fast');
			})
			// location.reload();
		}
	});
});

$("#btnCerrarModal").click(function(e){
	$(".contenedor-resultado-compra").fadeOut('slow');
})

/* Recalculate cart */
function recalculateCart() {
	var subtotal = 0;

	/* Sum up row totals */
	$('.product').each(function () {
		subtotal += parseFloat($(this).children('.product-line-price').text());
	});

	/* Calculate totals */
	var tax = subtotal * taxRate;
	var shipping = (subtotal > 0 ? shippingRate : 0);
	var total = subtotal + tax + shipping;

	/* Update totals display */
	$('.totals-value').fadeOut(fadeTime, function () {
		$('#cart-subtotal').html(subtotal.toFixed(2));
		$('#cart-tax').html(tax.toFixed(2));
		$('#cart-shipping').html(shipping.toFixed(2));
		$('#cart-total').html(total.toFixed(2));
		if (total == 0) {
			$('.checkout').fadeOut(fadeTime);
		} else {
			$('.checkout').fadeIn(fadeTime);
		}
		$('.totals-value').fadeIn(fadeTime);
	});
}


/* Update quantity */
function updateQuantity(quantityInput) {
	/* Calculate line price */
	var productRow = $(quantityInput).parent().parent();
	var price = parseFloat(productRow.children('.product-price').text());
	var quantity = $(quantityInput).val();
	var linePrice = price * quantity;

	const id = productRow.children('.block2-id').val();
	const token = $("#token").val();

	const datos = {
		id: id,
		cantidad: quantity,
		_token: token
	};
	
	$.ajax({
		type: "POST",
		url: "carrito/producto",
		data: datos,
		dataType: "json",
		success: function (response) {
			$('#cantidad_productos_cart').text(response);
			$('#cantidad_productos_cart_responsive').text(response);
		}
	});

	/* Update line price display and recalc cart totals */
	productRow.children('.product-line-price').each(function () {
		$(this).fadeOut(fadeTime, function () {
			$(this).text(linePrice.toFixed(2));
			recalculateCart();
			$(this).fadeIn(fadeTime);
		});
	});
}


/* Remove item from cart */
function removeItem(removeButton) {
	/* Remove row from DOM and recalc cart total */
	var productRow = $(removeButton).parent().parent();
	var producId = productRow.children('.block2-id').val();
	var token = $("#token").val();

	$.ajax({
		type: "DELETE",
		url: "carrito/producto",
		data: { producId: producId, _token: token },
		dataType: "json",
		success: function (response) {
			console.log(response);
			$('#cantidad_productos_cart').text(response);
			$('#cantidad_productos_cart_responsive').text(response);
		}
	});


	productRow.slideUp(fadeTime, function () {
		productRow.remove();
		recalculateCart();
	});

}
