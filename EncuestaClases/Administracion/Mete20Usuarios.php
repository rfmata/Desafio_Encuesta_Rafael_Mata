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
		<h1>METIENDO USUARIOS</h1>
		<?php
		require_once '../Conexion/Conexion.php';
		require_once '../Conexion/Constante.php';
		$bd = new Conexion();
                            $bd->Conectar(Constante::$baseDatos, Constante::$usuario, Constante::$pass);
		$bd->BorrarUser();
		$id = 0;
		for ($x = 0; $x != 20; $x++) {
			$random1 = rand(1, 100);
			$random2 = rand(1, 100);
			$bd->Insertar_Usuario($id, $random1, $random2);
			$id++;
		}
		header("Location: menuAdmin.php");
		?>
    </body>
</html>
