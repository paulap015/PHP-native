<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Inicio de sesion </title>

</head>

<body>

    <div class="contact_form">
        <h1>Inicio de sesión</h1>
        <form method="POST">

            <label for="usuario">Usuario
                <span>*</span>
            </label>
            <br>
            <input type="text" name="email" id="email" required" placeholder="Correo electrónico">
            <br>
            <label for="motivo">Contraseña
                <span>*</span>
            </label>
            <br>
            <input type="password" name="password" id="" cols="30" rows="10" placeholder="Dame más detalles de tu contacto" required></textarea>
            <input class="button" name="btnInicioSesion"  type="submit">
            
        </form>
    </div>

</body>

</html>