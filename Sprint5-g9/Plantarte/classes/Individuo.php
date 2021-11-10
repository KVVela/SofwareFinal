<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Registro
 *
 * @author FELIPE
 */
class Individuo {
    private $identificaacion;
    private $nombre;
    private $apeliido;
    private $edad;
    private $id_usuario;
    
      function __construct($campo, $valor) {
        if ($campo != NULL) {
            if (is_array($campo)) {
                $this->cargarObjetoDeVector($campo);
            } else {
                $cadenaSQL = "select * from  individuo  where $campo = '$valor'";
                $resultado = ConectorBD::ejecutarQuery($cadenaSQL, null);
                if (count($resultado) > 0) {
                    $this->cargarObjetoDeVector($resultado[0]);
                }
            }
        }
    }
    
      private function cargarObjetoDeVector($vector) {
        $this->identificaacion = $vector[0];
        $this->nombre = $vector[1];
        $this->apeliido = $vector[2];
        $this->edad = $vector[3];
        $this->id_usuario = $vector[4];        
    }
    public function getIdentificaacion() {
        return $this->identificaacion;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApeliido() {
        return $this->apeliido;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function getId_usuario() {
        return $this->id_usuario;
    }

    public function setIdentificaacion($identificaacion): void {
        $this->identificaacion = $identificaacion;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setApeliido($apeliido): void {
        $this->apeliido = $apeliido;
    }

    public function setEdad($edad): void {
        $this->edad = $edad;
    }

    public function setId_usuario($id_usuario): void {
        $this->id_usuario = $id_usuario;
    }

 public function grabar() {
        $cadenaSQL = "insert into individuo values( '$this->identificaacion','$this->nombre','$this->apeliido','$this->edad','$this->id_usuario' )";
        if (ConectorBD::ejecutarQuery($cadenaSQL, null)) {
            return true;
        } else {
            return false;
        }
    }
 public function modificar( $id ) {
        $cadenaSQL = "update individuo set identificacion='$this->identificaacion',nombre='$this->nombre',apellido='$this->apeliido',edad='$this->edad' where id_usuario = '$this->id_usuario' ";
        if (ConectorBD::ejecutarQuery($cadenaSQL, null)) {
            return true;
        } else {
            return false;
        }
    }
public function eliminar( $id ) {
        $cadenaSQL = "delete individuo where id_usuario = '$this->id_usuario' ";
        if (ConectorBD::ejecutarQuery($cadenaSQL, null)) {
            return true;
        } else {
            return false;
        }
    }
}
