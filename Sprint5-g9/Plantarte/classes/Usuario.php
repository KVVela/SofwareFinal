<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author FELIPE
 */
class Usuario {
    //put your code here
    private $id_usuario;
    private $ciudad;
    private $email;
    private $pass;
    private $id_rol;
    private $fecha_sistema;
    
      function __construct($campo, $valor) {
        if ($campo != NULL) {
            if (is_array($campo)) {
                $this->cargarObjetoDeVector($campo);
            } else {
                $cadenaSQL = "select * from  usuario  where $campo = '$valor' ";
                $resultado = ConectorBD::ejecutarQuery($cadenaSQL, null);
                if (count($resultado) > 0) {
                    $this->cargarObjetoDeVector($resultado[0]);
                }
            }
        }
    }
    
      private function cargarObjetoDeVector($vector) {
        $this->id_usuario = $vector[0];
        $this->ciudad = $vector[1];
        $this->email = $vector[2];
        $this->pass = $vector[3];
        $this->id_rol = $vector[4];        
        $this->fecha_sistema = $vector[5];        
    }
    public function getId_rol() {
        return $this->id_rol;
    }

    public function setId_rol($id_rol){
        $this->id_rol = $id_rol;
    }

        public function getId_usuario() {
        return $this->id_usuario;
    }

    public function getCiudad() {
        return $this->ciudad;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPass() {
        return $this->pass;
    }

    public function getFecha_sistema() {
        return $this->fecha_sistema;
    }

    public function setId_usuario($id_usuario): void {
        $this->id_usuario = $id_usuario;
    }

    public function setCiudad($ciudad): void {
        $this->ciudad = $ciudad;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setPass($pass): void {
        $this->pass = $pass;
    }

    public function setFecha_sistema($fecha_sistema): void {
        $this->fecha_sistema = $fecha_sistema;
    }

    
 public function grabar() {
        $cadenaSQL = "insert into usuario(ciudad,email,pass,id_rol,fecha_sistema) values( '$this->ciudad','$this->email','$this->pass','$this->id_rol','$this->fecha_sistema' )";
        if (ConectorBD::ejecutarQuery($cadenaSQL, null)) {
            return true;
        } else {
            return false;
        }
    }
 public function consulta_id() {
     return ConectorBD::ejecutarQuery(" select id_usuario from usuario where fecha_sistema = '$this->fecha_sistema' and email = '$this->email' ", null)[0][0];
    }
 public function modificar( $id ) {
        $cadenaSQL = "update usuario set ciudad='$this->ciudad',email='$this->email',pass='$this->pass',id_rol='$this->id_rol' where id_usuario = '$this->id_usuario' ";
        if (ConectorBD::ejecutarQuery($cadenaSQL, null)) {
            return true;
        } else {
            return false;
        }
    }
 public function eliminar( $id ) {
        $cadenaSQL = "delete usuario where id_usuario = '$this->id_usuario' ";
        if (ConectorBD::ejecutarQuery($cadenaSQL, null)) {
            return true;
        } else {
            return false;
        }
    }
}
