<!DOCTYPE html>
<html lang="es">

	<head>
		<meta charset="utf-8">
		<title>Encuestas</title>
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/animate.css">
		<!-- Custom Stylesheet -->
		<link rel="stylesheet" href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	</head>

	<body>
			<header id="main-header">
		<a id="logo-header" href="#">
			<span class="site-name">IES Virgen de Gracia</span>
			<span class="site-desc">Encuestas</span>
		</a> <!-- / #logo-header -->

	</header><!-- / #main-header -->
	
	
	
		<div class="container">
			<div class="login-box animated fadeInUp">
				<div class="box-header">
					<h2>Encuestas</h2>
				</div>
				<form id="myform" action="validar_entrada.php" method="POST">
					<label for="username">Usuario</label>
					<br/>
					<input type="text" id="user" name="user">
					<br/>
					<label for="password">Contraseña</label>
					<br/>
					<input type="password" id="pass" name="pass">
					<br/>
					<input type="submit" method="POST" value="Entrar" class="button"></input>
					<br/>
					<a href="#"><p class="small">¿Tienes problemas?</p></a>
				</form>
			</div>
		</div>
	
<!--		<footer id="main-footer">
		<p>&copy; 2017 <a href="#">Rafael Mata</a></p>
	</footer>  / #main-footer -->
	</body>

	<script>
		$(document).ready(function () {
			$('#logo').addClass('animated fadeInDown');
			$("input:text:visible:first").focus();
		});
		$('#username').focus(function () {
			$('label[for="username"]').addClass('selected');
		});
		$('#username').blur(function () {
			$('label[for="username"]').removeClass('selected');
		});
		$('#password').focus(function () {
			$('label[for="password"]').addClass('selected');
		});
		$('#password').blur(function () {
			$('label[for="password"]').removeClass('selected');
		});
	</script>

</html>
