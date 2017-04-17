<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
		<?php
		require_once 'Conexion/Conexion.php';
		require_once 'Conexion/Constante.php';
		session_start();
		$user = $_REQUEST['user'];
		$pass = $_REQUEST['pass'];
		$bd = new Conexion();
                            $bd->Conectar(Constante::$baseDatos, Constante::$usuario, Constante::$pass);
		$bd->Comprobar_Inicio_Sesion($user, $pass);
		if ($bd->Ir_Siguiente()) {
			 $valor = $bd->Obtener_Campo("id");
			 $rol = $bd->Obtener_Campo("rol");
			 $_SESSION['id'] = $valor;
				if ($rol == "1") {
				header("Location: Administracion/menuAdmin.php");
				} else {
					header("Location: Encuestado/menu.php");
				}
			} else {
				header("Location: ../error.php");
			}
		?>
    </body>
</html>
