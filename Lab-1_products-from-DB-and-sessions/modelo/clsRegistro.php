<?php
require('modelo/clsConexion.php');

class clsRegistro
{
    private $username;
    private $password;
    private $conexion;
    private $nombre;
    private $rol;

    public function __construct()
    {

        $this->conexion = new clsConexion();
    }
    public function registrarUsuario($nombre,$user,$password, $rol)
    {

        $this->username = $user;
        $this->password = $password;
        $this->nombre = $nombre;
        $this->rol = $rol;
        $sql = "INSERT INTO `persona` (`id`, `nombre`, `usuario`, `clave`,`rol`) VALUES (0,'$this->nombre' , '$this->username', '$this->password', '$this->rol')";
        if (($result = mysqli_query($this->conexion->getConexion(), $sql)) === false) {
            return false;
        } else {
            return true;
        }
    }
}
