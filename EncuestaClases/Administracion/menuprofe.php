<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Encuestas</title>
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
		<!--		<link rel="stylesheet" href="css/animate.css">-->
		<!-- Custom Stylesheet -->
		<link rel="stylesheet" href="../css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<style>
			table, th, td {
				border: 1px solid brown;
				background-color: white;

			}
		</style>
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
				<li><a href="../Administracion/menuAdmin.php">Volver</a></li>
			</ul>
		</nav><!-- / nav -->
	</header><!-- / #main-header -->
		<div class="box-header">
			<h2>Resumen</h2>
		</div>
		
		<br/>
	<center>
		<table border="1">
			<tr>
				<th><label for="username">Usuario</label></th>
				<th><label for="username">Asignatura</label></th>
				<th><label for="username">Respuesta pregunta 1</label></th>
				<th><label for="username">Respuesta pregunta 2</label></th>
				<th><label for="username">Respuesta pregunta 3</label></th>
				<th><label for="username">Detalle</label></th>
			</tr>
			<?php
			require_once '../Conexion/Conexion.php';
			require_once '../Conexion/Constante.php';
			$bd = new Conexion();
                            $bd->Conectar(Constante::$baseDatos, Constante::$usuario, Constante::$pass);
			$bd->VerEncuestas();
			while ($bd->Ir_Siguiente()) {
				$id = $bd->Obtener_Campo("pregunta");
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
					$asignumero=0;
				}
				if ($asignatura == "1") {
					$asignatura = "Desarrollo Web servidor";
					$asignumero=1;
				}
				if ($asignatura == "2") {
					$asignatura = "Empresa";
					$asignumero=2;
				}
				if ($asignatura == "3") {
					$asignatura = "Diseño web";
					$asignumero=3;
				}
				if ($asignatura == "4") {
					$asignatura = "Desarrollo web cliente";
					$asignumero=4;
				}
				$observaciones = $bd->Obtener_Campo("observaciones");
					?>
					<tr>
						<td><?php echo $id; ?></td>
						<td><?php echo $asignatura; ?></td>
						<td><?php echo $respuesta1; ?></td>
						<td><?php echo $respuesta2; ?></td>
						<td><?php echo $respuesta3; ?></td>
						<td><a href="detalle.php?variable1=<?php echo $id; ?>&variable2=<?php echo $asignumero; ?>">Ver</a></td>
					</tr>	
										<?php
				}
				?>
				</table>
			</center>
	<br/>

</form>

<!--		<footer id="main-footer">
		<p>&copy; 2017 <a href="#">Rafael Mata</a></p>
	</footer>  -->
</body>
</html>