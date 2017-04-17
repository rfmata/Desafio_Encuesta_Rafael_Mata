<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Encuestas</title>
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
		<!--	<link rel="stylesheet" href="css/animate.css">-->
		<!-- Custom Stylesheet -->
		<link rel="stylesheet" href="../css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
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
					<li><a href="../Administracion/menuProfe.php">Volver Encuestas</a></li>
					<li><a href="../Administracion/menuAdmin.php">Volver Menu</a></li>
				</ul>
			</nav><!-- / nav -->
		</header><!-- / #main-header -->
		<?php
		require_once '../Conexion/Conexion.php';
		require_once '../Conexion/Constante.php';
		$bd = new Conexion();
		$bd->Conectar(Constante::$baseDatos, Constante::$usuario, Constante::$pass);
		$id = $_GET['variable1'];
		$asignumero = $_GET['variable2'];
		$bd->VerEncuesta($id, $asignumero);
		if ($bd->Ir_Siguiente()) {
			$respuesta1 = $bd->Obtener_Campo("respuesta1");
			$respuesta2 = $bd->Obtener_Campo("respuesta2");
			if ($respuesta2 == "1") {
				$respuesta2 = "Si";
			} else {
				$respuesta2 = "No";
			}
			$respuesta3 = $bd->Obtener_Campo("respuesta3");
			$asignatura = $bd->Obtener_Campo("asignatura");
			if ($asignatura == "0") {
				$asignatura = "Despliegue de aplicaciones";
			}
			if ($asignatura == "1") {
				$asignatura = "Desarrollo Web servidor";
			}
			if ($asignatura == "2") {
				$asignatura = "Empresa";
			}
			if ($asignatura == "3") {
				$asignatura = "Diseño web";
			}
			if ($asignatura == "3") {
				$asignatura = "Desarrollo web cliente";
			}
			$observaciones = $bd->Obtener_Campo("observaciones");
			?>

			<div class="container">
				<div class="login-box animated fadeInUp">
					<div class="box-header">
						<h2>Cuestionario</h2>
					</div>	
					<label for="asignatura">Asignatura</label>
					<p><?php echo $asignatura; ?></p>
					<label for="pregunta1">¿Estas contento?</label>
					<p<?php echo $id; ?> </p>
					<label for="pregunta2">¿Recomendarias el ciclo?</label>
					<p><?php echo $respuesta1; ?></p>
					<label for="pregunta3">¿Valoran tu trabajo?</label>
					<p><?php echo $respuesta3; ?></p>
					<label>Observaciones</label>
					<p><?php echo $observaciones; ?></p>
				</div>
			</div>
			<?php
		} else {
			header("Location: ../error.php");
		}
		?>
		<br><br><br><br><br>
		<footer id="main-footer">
			<p>&copy; 2017 <a href="#">Rafael Mata</a></p>
		</footer>  
    </body>
</html>
