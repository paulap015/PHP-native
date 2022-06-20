<?php


session_start();

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
   
}else{
    
    header('location: ../index.php');
}

$now = time();

if ($now > $_SESSION['expire']) {
    session_destroy();
    echo "<script> 
    if (window.confirm('Tu sesión ha expirado vuelve a iniciarla..')){
        window.location.href = '../index.php';
    }else{
        window.location.href = '../index.php';
    };
    </script>";
    exit;
}

?>