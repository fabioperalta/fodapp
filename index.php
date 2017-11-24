<?php 
	session_start();
	if (isset($_SESSION['usuario']))
	{
		header("Location:view/home/home.php");
	} else {
?>

<!DOCTYPE html>
<html class="gt-ie8 gt-ie9 not-ie"> 
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>BSE PEDIDOS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

	<!-- Open Sans font from Google CDN -->
	<link href="assets/css/fonts.css" rel="stylesheet" type="text/css">
	<link href="assets/css/modulos.css" rel="stylesheet" type="text/css">

	<!-- Pixel Admin's stylesheets -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	
	<link href="assets/css/pages.min.css" rel="stylesheet" type="text/css">
	
	<link href="assets/css/themes.min.css" rel="stylesheet" type="text/css">

</head>

<body class="theme-default page-signin">
	
	<div id="page-signin-bg">		
		<div class="overlay"></div>		
		<img src="assets/images/background.jpg" alt="">
	</div>

	<div class="signin-container">	
		<div class="signin-info">
			<!--LOGO-->
			<img  src="assets/images/logo.png" alt="">
		</div>

		<div class="signin-form">			
			
				<div class="signin-text">
					<span>Iniciar Sesión</span>
				</div> 
				<div class="form-group w-icon">
					<input type="text" name="usuario" id="txtUsuario" class="form-control input-lg" placeholder="Usuario" autocomplete="off">
					<span class="fa fa-user signin-form-icon"></span>
				</div> 
				<div class="form-group w-icon">
					<input type="password" name="password" id="txtPass" class="form-control input-lg" placeholder="Contraseña">
					<span class="fa fa-lock signin-form-icon"></span>
				</div>
				<div class="form-actions">
					<button type="submit" class="btn btn-block btn-primary" style="padding: 10px 0 10px 0;" id="btnAcceder">
						INGRESAR <span><i class="fa fa-sign-in" style="margin-left: 10px;"></i></span>
					</button>
				</div> 
							
		</div>		
	</div>

	<div class="not-a-member">
		<b>BSE PEDIDOS</b> 2017 &copy; All Rights Reserved
	</div>

<!-- Pixel Admin's javascripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.noty.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>	
	<script src="assets/js/bootstrapValidator.min.js"></script>	
	<script src="view/js/Acceso/despachadorIndex.js"></script>
</body>
</html>

<?php 
	}
?>