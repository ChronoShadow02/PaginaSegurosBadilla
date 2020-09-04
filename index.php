<?php
if (!isset($_POST['EnviarInformacion'])) {

	$NombreCompleto = "";
	$Email = "";
	$Telefono = "";
}
if (isset($_POST['EnviarInformacion'])) {
	$NombreCompleto = $_POST['NombreYApellido'];
	$Email = $_POST['Email'];
	$Telefono = $_POST['Telefono'];
}
if (isset($_POST['EnviarInformaciónModal'])) {
	$NombreCompleto = "";
	$Correo = "";
	$Telefono = "";
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
	<title>Seguros Badilla | P&aacute;gina Principal</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
	<meta http-equiv=" X-UA-Compatible" content="ie=edge">
	<meta name="author" lang="es" content="Angel Vega Cordero">
	<meta name="keywords" lang="es" content="Seguros, Protección, Prevención, Medicina, Médicos, Hospitales, Doctores, Costa Rica, Corporativo, Individual, Vida, Muerte, Familia, Bebés, Recién Nacidos, Casados, Comprometidos, Economía, Blue Cross, Blue Shield, Puerto Rico, Alianza, Colectivo, Maternidad, Hospitalización, Consulta Médica, Consulta, Ambulatorio, Especialistas, Buenos,Badilla">
	<meta name="description" lang="es" content="En seguros badilla encontrarás todo tipo de seguros de vida y salud">
	<link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/pre-loader.css">
	<link rel="stylesheet" href="css/Reponsive-min.css">
	<link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.9.0/jquery.validate.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
	<script src="js/mascarasTelefono.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-168359863-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-168359863-1');
	</script>

</head>

<body onload="tiempoPagina();">
	<div id="divCarga">
		<figure style="margin: 0; padding: 0;">
			<img src="img/logo-preloader.png" alt="" srcset="" class="img-preload">
		</figure>
		<div class="lds-ellipsis">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div>
	<div style="display:none;" class="animate-bottom" id="contenedor-principal">
		<!-- #region Menu desplegable telefono-->
		<div class="hamburguer-menu">
			<input type="checkbox" class="toggle-menu">
			<div class="hamburger">
				<div></div>
			</div>
			<div class="menu">
				<div>
					<div>
						<ul>
							<li><a href="https://www.segurosbadillacr.com">Inicio</a></li>
							<li><a href="nuestros-seguros">Nuestros Seguros</a></li>
							<li><a href="preguntas-frecuentes">Preguntas Frecuentes</a></li>
							<li><a href="formularios">Formularios</a></li>
							<li><a href="contactanos">Cont&aacute;ctanos</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- #endregion Menu desplegable-->
		<header>
			<div class="logocentrado">
				<a href="https://www.segurosbadillacr.com"><img src="img/logo.png" class="clImgLogo" loading="lazy"></a>
			</div>
		</header>
		<!-- #region Menu tablet-->
		<div class="sticky-navbar">
			<ul>
				<li>
					<a href="https://www.segurosbadillacr.com">Inicio</a>
				<li><a href="nuestros-seguros">Nuestros Seguros</a></li>
				<li><a href="preguntas-frecuentes">Preguntas Frecuentes</a></li>
				<li><a href="formularios">Formularios</a></li>
				<li><a href="contactanos">Cont&aacute;ctanos</a></li>
				</li>
			</ul>
		</div>
		<!-- #endregion Menu tablet-->
		<!-- #region Contenido de la página-->
		<section class="clContent">
			<!-- #region Contenido del Silder de imágenes-->
			<div class="carousel slide" data-ride="carousel" id="carrouselSlider">
				<!-- Indicatores de las imágenes -->
				<ul class="carousel-indicators">
					<li data-target="#carrouselSlider" data-slide-to="0" class="active"></li>
					<li data-target="#carrouselSlider" data-slide-to="1"></li>
					<li data-target="#carrouselSlider" data-slide-to="2"></li>
					<li data-target="#carrouselSlider" data-slide-to="3"></li>
				</ul>
				<!-- Imágenes que se van a mostrar -->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="img/imgSlider1.jpg" loading="lazy">
					</div>
					<div class="carousel-item">
						<img src="img/imgSlider2.jpg" loading="lazy">
					</div>
					<div class="carousel-item">
						<img src="img/imgSlider3.jpg" loading="lazy">
					</div>
					<div class="carousel-item">
						<img src="img/imgSlider4.jpg" loading="lazy">
					</div>
				</div>
				<!-- Controles de el slider -->
				<a class="carousel-control-prev" href="#carrouselSlider" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#carrouselSlider" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
			</div>
			<!-- #endregion Contenido del Silder de imágenes-->

			<div class="clImportanciaSeguros">
				<h2>Importancia de los seguros</h2>
				<p>Como buen costarricense con el paso del tiempo me he dado el concepto que nuestra cultura no existe la prevención, ni conceptualización de Seguros (en todas las ramas). Un seguro se diseña para prevenir un futuro incierto como alguna enfermedad, accidente o algún bien material que no se vea afectado y que tenga el respaldo de una compañía de seguros. <br>
					Mi gestión va más allá de solo asesorarle con su seguro médico y vida, soy partidario a que nuestra cultura debe incluirse los seguros y la prevención. Debemos iniciar con un cambio y de mi parte profesional en intangibles hare lo necesario para que usted, pueda comprender la función y necesidad de un seguro. <br>
					“Es mejor tener un seguro y no utilizarlo, que tener que utilizarlo y no tenerlo”.
				</p>
				<img src="img/img3.jpeg" class="rounded mx-auto d-block imgImportanciaSeguros" loading="lazy">
			</div>

			<img src="img/Logo_oficial_BCBS.png" class="rounded mx-auto d-block imgLogoBCBS" loading="lazy">
			<div class="clFormularioContacto">
				<form class="clContacto" method="POST" id="frmContacto" name="frmContacto">
					<h3 class="textoContactanosindex">Cont&aacute;ctanos</h3>
					<div class="form-group">
						<i class="fa fa-address-card position-absolute pl-3 pt-3"></i>
						<input type="text" class="form-control py-4" style="padding-left: 38px;" placeholder="Nombre completo" name="NombreYApellido" id="txtNombreCompleto" value="<?php echo $NombreCompleto;
																																													if ($_SERVER['REQUEST_METHOD'] == 'POST') {
																																														echo "";
																																													} ?>">
					</div>
					<?php include('php/validarnombre.php'); ?>

					<div class="form-group">
						<i class="fa fa-envelope position-absolute pl-3 pt-3"></i>
						<input type="email" class="form-control py-4" style="padding-left: 38px;" placeholder="Correo electrónico" name="Email" id="txtEmail" value="<?php echo $Email;
																																										if ($_SERVER['REQUEST_METHOD'] == 'POST') {
																																											echo "";
																																										} ?>">
					</div>
					<?php include('php/validarcorreo.php') ?>

					<div class="form-group ">
						<i class="fa fa-phone position-absolute pl-3 pt-3" aria-hidden="true"></i>
						<input type="text" class="form-control py-4" style="padding-left: 38px;" placeholder="Teléfono" name="Telefono" id="txtTelefono" value="<?php echo $Telefono;
																																								if ($_SERVER['REQUEST_METHOD'] == 'POST') {
																																									echo "";
																																								} ?>">
					</div>
					<?php include('php/validartelefono.php'); ?>
					<div class="form-group text-center">
						<button type="button" class="clBtnEnviarInformacion" name="EnviarInformacion" id="EnviarForm">Enviar Información</button>
					</div>
				</form>
				<!-- #endregion Formulario de Contacto-->
			</div>
		</section>

		<!-- #endregion Contenido de la página-->
		<div class="redesFijas">
			<a href="https://www.facebook.com/sumejorasesoriaseguros" class="btn"><i class="fab fa-facebook"></i></a>
			<a href="https://www.instagram.com/seguros_bluecross_blueshield/?hl=es-la" class="btn"><i class="fab fa-instagram"></i></a>
		</div>
		<footer>
			<p>&copy; 2020 Seguros Badilla</p>
		</footer>
		<!--Modal-->
	</div>
	<div class="modal fade" id="ModalContacto" tabindex="-1" role="dialog" aria-labelledby="ModalContactoLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="ModalContactoLabel">¿Desea conocer más de nuestros seguros?
						<br>
						<small>Favor llena el siguiente formulario:</small>
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST" id="frmContactoModal" class="form-text">
						<div class="form-group">
							<label for="txtNombreCompleto">Nombre completo</label>
							<input class="form-control" type="text" placeholder="Nombre y Apellido" name="NombreCompletoModal" id="txtNombreCompletoModal">
						</div>
						<div class="form-group">
							<label for="txtEmail">Email</label>
							<input class="form-control" type="email" placeholder="Email Personal" name="EmailModal" id="txtEmailModal">
						</div>
						<div class="form-group">
							<label for="txtTelefono">Teléfono</label>
							<input class="form-control" type="text" placeholder="Teléfono" name="TelefonoModal" id="txtTelefonoModal">
						</div>
						<div class="form-group">
							<label for="opcionSeguro" class="control-label">Tipo de Seguro que desea información</label> <br>
							<select name="opcionSeguro" id="ddlopcionSeguro" class="form-control">
								<option value="">Seleccione una opción</option>
								<option value="Seguro de Vida">Seguro de vida</option>
								<option value="Seguro de Salud">Seguro de salud</option>
							</select>
							<label for="opcionSeguro" class="error" style="display:none;"></label>
						</div>
						<div class="form-group text-center">
							<input type="button" value="Enviar Información" class="btn btn-primary" name="EnviarInformaciónModal" id="btnAceptarModal">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script src="js/validacionesGenericas.js"></script>
	<script src="js/validarFormsEnviarCorreo.js"></script>
	<script src="js/precargarPagina.js"></script>
	<script src="js/tiempoAparicionModal.js"></script>
	<script src="js/animar.js"></script>
</body>

</html>