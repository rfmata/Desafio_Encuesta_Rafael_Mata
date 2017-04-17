<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conexion
 *
 * @author Rafael Mata <rafaelmatamuela at gmail.com>
 */
class Conexion {
	//Conexion
    private $conexion;
    private $cursor;
    private $fila;
    public function __construct() {  
    }
    public function Conectar($b, $u, $c) {
        if ($this->conexion = new mysqli('localhost', $u, $c, $b)) {
            $exito = true;
        } else
            $exito = false;
        return $exito;
    }
	//Funciones

    public function Ir_Siguiente() {
        if ($this->fila = $this->cursor->fetch_array()) {
            $siguiente = true;
        } else
            $siguiente = false;
        return $siguiente;
    }

    public function Obtener_Campo($campo) {

        return $this->fila[$campo];
    }

    public function Insertar_Usuario($id, $random1, $random2) {
        $query = "insert into usuarios (id, user, pass, rol) values('" . $id . "' , 'DAW2" . $random1 . "' , 'DAW2" . $random2 . "' , false)";
		//echo $query;
		 $this->conexion->query($query);
       
    }

    public function BorrarUser() {
        $query = "DELETE FROM `usuarios` WHERE rol='0'";
        $this->conexion->query($query);
    }

    public function Cerrar_Conexion() {
        $this->cursor->free_result();
        $this->conexion->close();
    }

    public function Comprobar_Inicio_Sesion($user, $pass) {

        $sentencia = "SELECT user, pass, id, rol FROM usuarios where pass='" . $pass . "' && user='" . $user . "'";
        $this->cursor = $this->conexion->query($sentencia);
        if ($this->cursor) {
            $exito = true;
        } else
            $exito = false;
        return $exito;
    }

    public function VerEncuesta($id, $asignumero) {
        if (isset($this->cursor))
            $this->cursor->free_result();
        $sentencia = "SELECT * FROM preguntas WHERE pregunta= '".$id."' && asignatura= '".$asignumero."'"  ;
        $this->cursor = $this->conexion->query($sentencia);
        if ($this->cursor) {
            $exito = true;
        } else
            $exito = false;
        return $exito;
    }

	    public function VerEncuestas() {
        if (isset($this->cursor))
            $this->cursor->free_result();
        $sentencia = "SELECT * FROM preguntas";

        $this->cursor = $this->conexion->query($sentencia);
        if ($this->cursor) {
            $exito = true;
        } else
            $exito = false;
        return $exito;
    }
    public function VerUser() {
        if (isset($this->cursor))
            $this->cursor->free_result();
        $sentencia = "SELECT user, pass FROM usuarios where rol='0'";
        $this->cursor = $this->conexion->query($sentencia);
        if ($this->cursor) {
            $exito = true;
        } else
            $exito = false;
        return $exito;
    }
	
	
	    public function VerAsig($id) {
        if (isset($this->cursor))
            $this->cursor->free_result();
        $sentencia = "SELECT nombre FROM asignaturas where idprofesor='".$id."'";
        $this->cursor = $this->conexion->query($sentencia);
        if ($this->cursor) {
            $exito = true;
        } else
            $exito = false;
        return $exito;
    }
	
	    public function Comprobar_Encuesta($id, $asignatura) {
        if (isset($this->cursor))
            $this->cursor->free_result();
        $sentencia = "select * from preguntas where pregunta='" . $id . "' && asignatura='" . $asignatura . "'";
        $this->cursor = $this->conexion->query($sentencia);
        if ($this->cursor) {
            $exito = true;
        } else
            $exito = false;
        return $exito;
    }	

    public function Actualiza($id, $asignatura, $respuesta1, $respuesta2, $respuesta3, $observaciones) {
        $query = "UPDATE preguntas SET pregunta='" . $id . "', respuesta1='" . $respuesta1 . "', respuesta2='" . $respuesta2 . "', respuesta3='" . $respuesta3 . "', asignatura='" . $asignatura . "', observaciones='" . $observaciones . "' WHERE pregunta='" . $id . "'AND asignatura='" . $asignatura . "'";
		//echo $query;
		 $this->conexion->query($query);
       
    }

    public function Inserta($id, $asignatura, $respuesta1, $respuesta2, $respuesta3, $observaciones) {
        $query = "insert into preguntas (pregunta, respuesta1, observaciones, respuesta2, respuesta3, asignatura) values('" . $id . "' , '" . $respuesta1 . "' , '" . $observaciones . "' ,'" . $respuesta2 . "' ,'" . $respuesta3 . "' , '" . $asignatura . "')";
		//echo $query;
		 $this->conexion->query($query);
       
    }	

    
}
