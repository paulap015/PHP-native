<?php

require('vista/registro.php');

if (isset($_POST["btnRegistro"])) {

    include('modelo/clsRegistro.php');
    $registro = new clsRegistro();
    $nombre = $_POST['name'];
    $usuario = $_POST['email'];
    $password = $_POST['password'];
    $rol = "no-admin";
    $respuesta = $registro->registrarUsuario($nombre, $usuario, $password, $rol);

    if ($respuesta == false) {
        echo "no se pudo hacer registro";
    } else {
        //require('gestionProducto.php');

        //header("location:vista/inicioSesion.php");

        header("location:controlador/gestionInicioSesion.php");
    }
}


