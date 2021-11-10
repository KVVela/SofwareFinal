<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Administrador
 *
 * @author FELIPE
 */
class Administrador {
    //put your code here
    private $id_admin;
    private $nombre;
    private $apellido;
    private $id_usuario;
    
      function __construct($campo, $valor) {
        if ($campo != NULL) {
            if (is_array($campo)) {
                $this->cargarObjetoDeVector($campo);
            } else {
                $cadenaSQL = "select * from  admin  where $campo = '$valor'";
                $resultado = ConectorBD::ejecutarQuery($cadenaSQL, null);
                if (count($resultado) > 0) {
                    $this->cargarObjetoDeVector($resultado[0]);
                }
            }
        }
    }
    
      private function cargarObjetoDeVector($vector) {
        $this->id_admin = $vector[0];
        $this->nombre = $vector[1];
        $this->apellido = $vector[2];
        $this->id_usuario = $vector[3];        
    }
    public function getId_admin() {
        return $this->id_admin;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getId_usuario() {
        return $this->id_usuario;
    }

    public function setId_admin($id_admin): void {
        $this->id_admin = $id_admin;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido): void {
        $this->apellido = $apellido;
    }

    public function setId_usuario($id_usuario): void {
        $this->id_usuario = $id_usuario;
    }

        
 public function grabar() {
        $cadenaSQL = "insert into admin values( '$this->id_admin','$this->nombre','$this->apellido','$this->id_usuario' )";
        if (ConectorBD::ejecutarQuery($cadenaSQL, null)) {
            return true;
        } else {
            return false;
        }
    }
 public function modificar( $id ) {
        $cadenaSQL = "update admin set id_admin='$this->id_admin',nombre='$this->nombre', apellido='$this->apellido' where id_usuario = '$this->id_usuario' ";
        if (ConectorBD::ejecutarQuery($cadenaSQL, null)) {
            return true;
        } else {
            return false;
        }
    }
public function eliminar( $id ) {
        $cadenaSQL = "delete admin where id_usuario = '$this->id_usuario' ";
        if (ConectorBD::ejecutarQuery($cadenaSQL, null)) {
            return true;
        } else {
            return false;
        }
    }
}
