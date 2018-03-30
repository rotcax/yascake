<?php
	
	$variable = $_GET['var'];
?>

<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<!-- titulo del sitio
   ================================================== -->
	<title>Yascake´s - Los mejores postres de Venezuela</title>

	<!-- Bootstrap CSS
   ================================================== -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Animate CSS
   ================================================== -->
	<link rel="stylesheet" href="css/animate.css">

	<!-- Font Icons CSS
   ================================================== -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/et-line-font.css">

	<!-- Nivo Lightbox CSS
   ================================================== -->
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">

	<!-- Owl Carousel CSS
   ================================================== -->
   	<link rel="stylesheet" href="css/owl.theme.css">
	<link rel="stylesheet" href="css/owl.carousel.css">

	<!-- Main CSS
   ================================================== -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Google web font 
   ================================================== -->	
   <link href='https://fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet' type='text/css'>
	
</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


<!-- preloader
================================================== -->
<div  class="preloader">

	<div class="sk-spinner sk-spinner-pulse"></div>

</div>


<!-- contacto
================================================== -->
<section id="contact" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- titulo de la seccion
			================================================== -->
			<div class="col-md-offset-2 col-md-8 col-sm-12">
				<div class="section-title">
					<h1>¿Deseas Contactarnos?</h1>
					<p>Envianos un mensaje haciendo cualquier pregunta, en la brevedad te responderemos a tu correo.</p>
				</div>
			</div>

			<!-- seccion del contacto
			================================================== -->
			<div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 wow fadeIn" data-wow-delay="0.6s">
				<form action="" method="post" enctype="multipart/form-data" class = "form"> <!-- es necesario tener el formulario de esta manera -->
					<div class="col-md-6 col-sm-6">
						<input type="hidden" class="form-control" name="cake" value="<?= $variable; ?>">
						<input type="text" class="form-control" placeholder="Nombre" name="name" >
						<input type="email" class="form-control" placeholder="Correo" name="email" >
						<input type="telephone" class="form-control" placeholder="Teléfono" name="phone" >
					</div>
					<div class="col-md-6 col-sm-6">
						<textarea class="form-control" placeholder="Mensaje" rows="7" name = "message"></textarea>
					</div>
					<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
						<input type="submit" class="form-control" value="¡ENVIAR MENSAJE!">
						<center>
						<div class="loading"></div> <!-- img gif load -->
						</center>
					</div>
				</form>
				<div class="mostrar"></div> <!-- me permite visualizar alertas y demas elementos -->
			</div>

		</div>
	</div>
</section>

<!-- =============Envio de correo================= -->

<script  src="js/jquery-3.2.1.min.js"></script>
<script src="js/sweetalert.js"></script>

<script>
	$(function(){
		$('.form').submit(function(){
			$('.loading').html("<img src='images/loading.gif' width='45'>");
			$.ajax({
				url: 'contactoP.php',
				type: 'POST',
				data: $('.form').serialize(),
				success: function(data){
					$('.mostrar').html(data);
					$('.loading').hide();
					$('.form')[0].reset();
				}
			});
			return false;
		});
	});
</script>


<!-- Javascript 
================================================== -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/script.js"></script>


</body>
</html>