<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Empresa
 *
 * @author FELIPE
 */
class Empresa {
    //put your code here
    private $nit;
    private $nombre;
    private $id_usuario;
    
      function __construct($campo, $valor) {
        if ($campo != NULL) {
            if (is_array($campo)) {
                $this->cargarObjetoDeVector($campo);
            } else {
                $cadenaSQL = "select * from  empresa  where $campo = '$valor'";
                $resultado = ConectorBD::ejecutarQuery($cadenaSQL, null);
                if (count($resultado) > 0) {
                    $this->cargarObjetoDeVector($resultado[0]);
                }
            }
        }
    }
    
      private function cargarObjetoDeVector($vector) {
        $this->nit = $vector[0];
        $this->nombre = $vector[1];
        $this->id_usuario = $vector[2];        
    }
    public function getNit() {
        return $this->nit;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getId_usuario() {
        return $this->id_usuario;
    }

    public function setNit($nit): void {
        $this->nit = $nit;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setId_usuario($id_usuario): void {
        $this->id_usuario = $id_usuario;
    }

    
 public function grabar() {
        $cadenaSQL = "insert into empresa values( '$this->nit','$this->nombre','$this->id_usuario' )";
        if (ConectorBD::ejecutarQuery($cadenaSQL, null)) {
            return true;
        } else {
            return false;
        }
    }
 public function modificar( $id ) {
        $cadenaSQL = "update empresa set nit='$this->nit',nombre='$this->nombre' where id_usuario = '$this->id_usuario' ";
        if (ConectorBD::ejecutarQuery($cadenaSQL, null)) {
            return true;
        } else {
            return false;
        }
    }
public function eliminar( $id ) {
        $cadenaSQL = "delete empresa where id_usuario = '$this->id_usuario' ";
        if (ConectorBD::ejecutarQuery($cadenaSQL, null)) {
            return true;
        } else {
            return false;
        }
    }
}
