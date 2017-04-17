<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Encuestas</title>
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
		<!-- Custom Stylesheet -->
		<link rel="stylesheet" href="../css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script>
            function Provin() {
//                var numero = document.getElementById("codigopostal").value;//Cogemos el dato introducido por el usuario
                var cajas = "<label for='pregunta1'>¿Estas contento?</label>"+
						"<input type='number' max='5' min='1' id='respuesta1' name='respuesta1' required>"+
						"<label for='pregunta2'>¿Recomendarias el ciclo?</label>"+
						"<input type='radio' value='1' id='respuesta2' name='respuesta2' checked>Si"+
						"<input type='radio' value='0' id='respuesta2' name='respuesta2'>No"+
						"<br/>"+
						"<label for='pregunta3'>¿Valoran tu trabajo?</label>"+
						"<input type='number' max='5' min='1' id='respuesta3' name='respuesta3' required>"+
						"<input type='text' id='observaciones' name='observaciones' required>"+
						"<br/>"+
						"<input type='submit' method='POST' value='Enviar' class='button'>"
                     $("#caja").append(cajas);
                }
		</script>
	</head>
    <body>
		<header id="main-header">
		<a id="logo-header" href="#">
			<span class="site-name">IES Virgen de Gracia</span>
			<span class="site-desc">Encuestas</span>
		</a> <!-- / #logo-header -->
		<nav>
			<ul>	
				<li><a href="../index.php">Salir</a></li>
			</ul>
		</nav><!-- / nav -->
	</header><!-- / #main-header -->
		<div class="container">
			<div class="login-box animated fadeInUp">
				<div class="box-header">
					<h2>Asignaturas</h2>
				</div>
				<form id="myform" action="inserta.php" method="POST">
					<label for="username">Selecciona</label>
					<br/>
					<select name="opcion" id="salida"  onblur="Provin()">
						<option value="0">Despliegue de aplicaciones</option>
						<option value="1">Desarrollo Web servidor</option>
						<option value="2">Empresa</option>
						<option value="3">Diseño web</option>
						<option value="4">Desarrollo web cliente</option>
					</select>
					<br/>
					<br/>
				<div id="caja"></div>
					</form>
			</div>
		</div>

    </body>
</html>
