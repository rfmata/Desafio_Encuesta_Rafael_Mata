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
		require_once '../Conexion/Conexion.php';
		require_once '../Conexion/Constante.php';
		session_start();
		$asignatura = $_REQUEST['opcion'];
		$respuesta1 = $_REQUEST['respuesta1'];
		$respuesta2 = $_REQUEST['respuesta2'];
		$respuesta3 = $_REQUEST['respuesta3'];
		$observaciones = $_REQUEST['observaciones'];
		$id = $_SESSION['id'];
		$bd = new Conexion();
                            $bd->Conectar(Constante::$baseDatos, Constante::$usuario, Constante::$pass);				
		$bd->Comprobar_Encuesta($id, $asignatura);
		if ($bd->Ir_Siguiente()) {
			$bd->Actualiza($id, $asignatura, $respuesta1, $respuesta2, $respuesta3, $observaciones);
		}else{
			$bd->Inserta($id, $asignatura, $respuesta1, $respuesta2, $respuesta3, $observaciones);
		}	
		header("Location: menu.php");
		?>
    </body>
</html>
