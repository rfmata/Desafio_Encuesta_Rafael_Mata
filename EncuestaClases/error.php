<!DOCTYPE html>
<html lang="es">

	<head>
		<meta charset="utf-8">
		<title>Encuestas</title>
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
		<!--	<link rel="stylesheet" href="css/animate.css">-->
		<!-- Custom Stylesheet -->
		<link rel="stylesheet" href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	</head>

	<body>
		<div class="container">
			<div class="login-box animated fadeInUp">
				<div class="box-header">
					<h2>Error</h2>
				</div>
				<form id="myform" action="validar_entrada.php" method="POST">
					<label for="error">Algo salio muy mal</label>
					<a href="index.php"><p class="small">volver</p></a>
				</form>
			</div>
		</div>
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
