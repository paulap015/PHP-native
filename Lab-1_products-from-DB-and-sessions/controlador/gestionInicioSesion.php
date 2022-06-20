<?php
 require("../vista/inicioSesion.php");

if (isset($_POST["btnInicioSesion"])) {
       
    include('../modelo/clsInicioSesion.php');
    $usuario = $_POST['email'];
    $password = $_POST['password'];
    $registro = new clsInicioSesion();
    $respuesta = $registro->getUsuario($usuario, $password);

    if ($respuesta) {
        // existe la persona -> iniciamos sesion 
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['nombre'] = $respuesta[1];
        $_SESSION['usuario'] = $respuesta[2];
        $_SESSION['rol'] = $respuesta[4];
        $_SESSION['start'] = time();
        $_SESSION['expire'] = $_SESSION['start'] + (1 * 60);
        header("location: ../vista/paginaProducto.php");
       
    } else {
        echo "<script> 
        if (window.confirm('Usuario [ $usuario ] NO ENCONTRADO  ')){
            window.location.href = '../index.php';
        }
        </script>";
    }
}