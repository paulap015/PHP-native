<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <title>Registro</title>

</head>

<body>
    <div class="contact_form">
        <h1>Registro</h1>
        <form method="POST">
            <label for="nombre">Nombre
                <span>*</span>
            </label>
            <br>
            <input type="text" name="name" id="nombre" required" placeholder="Escribe tu nombre">
            <br>
            <label for="usuario">Usuario
                <span>*</span>
            </label>
            <br>
            <input type="text" name="email" id="email" required" placeholder="Correo electrónico">
            <br>
             <label for="nombre">Contraseña
                <span>*</span>
            </label>
            <br>
            <input type="password" name="password" id="password" required" placeholder="Escribe tu contraseña">
            <br>
             <input class="button" name="btnRegistro" type="submit">

            
                <button><a href="controlador/gestionInicioSesion.php">Inicia sesión </a></button>
            
            
        </form>


        
    </div>
</body>
</html>