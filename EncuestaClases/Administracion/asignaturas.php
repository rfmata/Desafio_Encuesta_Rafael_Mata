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
		<div class="container">
			<div class="login-box animated fadeInUp">
				<div class="box-header">
					<h2>Usuarios disponibles</h2>
				</div>
				

					<br/>
					<?php
					require_once '../Conexion/Conexion.php';
					require_once '../Conexion/Constante.php';
					$bd = new Conexion();
                            $bd->Conectar(Constante::$baseDatos, Constante::$usuario, Constante::$pass);
							session_start();
							$id=$_SESSION['id'];
					$bd->VerAsig($id);
					while ($bd->Ir_Siguiente()) {
					$nombre = $bd->Obtener_Campo("nombre");
						?>
							<label for="nombreasi">Asignatura</label>
							<br/>
							<a> <?php echo $nombre; ?></a>
							<br/>
							
							<?php
					} 			
		?>
			</div>
		</div>
<!--		<br><br><br><br><br><br><br><br><br><br>
		<footer id="main-footer">
		<p>&copy; 2017 <a href="#">Rafael Mata</a></p>
	</footer> -->
    </body>
</html>