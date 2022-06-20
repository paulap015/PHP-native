<?php
require('clsConexion.php');

class clsInicioSesion{

    private $user;
    private $password;
    private $conexion;
 
    public function __construct(){
        
        $this->conexion = new clsConexion();
        
    }
    public function getUsuario($user,$password){
        $this->user=$user;
        $this->password=$password;
        
        $sql = "SELECT * FROM persona where usuario = '$this->user' and clave = '$this->password'" ;
        $consulta = $this->conexion->getConexion()->query($sql);
        $usuario = mysqli_fetch_array($consulta);
        return $usuario;
    }
    
}