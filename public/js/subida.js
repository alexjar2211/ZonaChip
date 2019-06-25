$(document).ready(function (e) {
	let isPhotoUpload = false;
	let isFirstTime = false;
	let fileImg;

	const tallasCamiseta = [
		'S',
		'M',
		'L'
	];

	$("#photoContainer").click(function (e) {
		if (!isPhotoUpload) {
			$("#inputFile").trigger('click');
		}

		if (isFirstTime) {
			isPhotoUpload = false;
		}
	});

	$("#selectTipo").change(function (e) {
		const tipoPrenda = $(this).val();

		$("#selectTalla option").each(function (e) {
			$(this).remove();
		});

		if (tipoPrenda != 0) {
			$("#selectTalla").slideDown(300);
			$("#selectTalla").append(new Option('Seleccione la talla', '0'));
			tallasCamiseta.forEach((e) => {
				$("#selectTalla").append(new Option(e, e));
			})
		}
		else {
			$("#selectTalla option").each(function (e) {
				$(this).remove();
			})
			$("#selectTalla").slideUp(300);
			$("#btnNextReview").fadeOut(300);
		}
	});

	$("#selectTalla").change(function(e){
		const talla = $(this).val();

		if(talla != 0 && $(".txt-upload").val() != ""){
			$("#btnNextReview").fadeIn(300);
		}
		else{
			$("#btnNextReview").fadeOut(300);
		}
	});

	$(".txt-upload").keyup(function(e){
		const valor = $(this).val();

		if(valor != "" && $("#selectTalla").val() != 0){
			$("#btnNextReview").fadeIn(300);
		}
		else{
			$("#btnNextReview").fadeOut(300);			
		}
	})

	$("#inputFile").change(function (e) {
		const files = e.target.files;
		fileImg = files;

		if (FileReader && files && files.length) {
			var fr = new FileReader();
			fr.onload = function () {
				$("#wrapper-upload-photo").fadeOut();
				$("#imgDiseño").attr('src', fr.result);
				$(".delete-photo").fadeIn();
				isPhotoUpload = true;

				$("#photoContainer").css({
					"cursor": "initial"
				});
			}
			fr.readAsDataURL(files[0]);
		}
	});

	$(".delete-photo").click(function (e) {
		$("#imgDiseño").attr('src', '');
		$(".delete-photo").fadeOut();
		$("#wrapper-upload-photo").fadeIn();
		$("#inputFile").val('');

		$("#photoContainer").css({
			"cursor": "pointer"
		});

		isFirstTime = true;
	});

	$("#btnNextReview").click(function (e) {

		$("#containerUploadPhoto").fadeOut(500, "", function (e) {
			$("#containerReview").fadeIn();
		});

		const files = fileImg;

		if (FileReader && files && files.length) {
			var fr = new FileReader();
			fr.onload = function () {
				// $("#wrapper-upload-photo").fadeOut();
				$("#photo-min").attr('src', fr.result);
				// $(".delete-photo").fadeIn();
				// isPhotoUpload = true;

				// $("#photoContainer").css({
				// 	"cursor": "initial"
				// });
			}
			fr.readAsDataURL(files[0]);
		}

	});

	$(".btn-num-product-down").click(function(e){
		recalcularPrecio($(this), 'menos');
	});

	$(".btn-num-product-up").click(function(e){
		recalcularPrecio($(this), 'mas');
	})

	function recalcularPrecio(e, operacion){
		const cantidad = parseInt($(".inputNumberQuantity").val());
		const precio = parseFloat($("#precio-inicial").val());

		$(".price-design").text(cantidad * precio);
	}
});