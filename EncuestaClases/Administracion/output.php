<?php
require_once '/lib/pdf/mpdf.php';
					require_once '../Conexion/Conexion.php';
					require_once '../Conexion/Constante.php';
					$bd = new Conexion();
                            $bd->Conectar(Constante::$baseDatos, Constante::$usuario, Constante::$pass);
					$bd->VerUser();
$mpdf = new mPDF('c', 'A4');
$html .="<!DOCTYPE html>
<html lang='es'>
	<head>
		<meta charset='utf-8'>
		<title>Encuestas</title>
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
		<!--		<link rel='stylesheet' href='css/animate.css'>-->
		<!-- Custom Stylesheet -->
		<link rel='stylesheet' href='../css/style.css'>
		<script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js'></script>
<style>
body{
background:white;
}
</style>
	</head>
    <body>
						<header id='main-header'>
		<a id='logo-header' href='#'>
			<span class='site-name'>IES Virgen de Gracia</span>
			<span class='site-desc'>Encuestas</span>
		</a> <!-- / #logo-header -->
		<nav>
		</nav><!-- / nav -->
	</header><!-- / #main-header -->
		<div class='container'>
			<div class='login-box animated fadeInUp'>
				<div class='box-header'>
					<h2>Usuarios disponibles</h2>
				</div>
				

					<br/>";
					while ($bd->Ir_Siguiente()) {
						$user = $bd->Obtener_Campo('user');
						$pass = $bd->Obtener_Campo('pass');
						
							$html .="<label for='username'>Usuario</label>
							<br/>
							<a> ". $user."</a>
							<br/>
							<label for='username'>Contraseña</label>
							<br/>
							<a>".$pass."</a>
							<br/>
							<hr/>";
					} 			
		
		$html .="</div>
		</div>
		<br><br><br><br><br><br><br><br><br><br>
		<footer id='main-footer'>
		<p>&copy; 2017 <a href='#'>Rafael Mata</a></p>
	</footer> 
    </body>
</html>";
$mpdf->writeHTML($html);
$mpdf->Output('lista.pdf', 'I');