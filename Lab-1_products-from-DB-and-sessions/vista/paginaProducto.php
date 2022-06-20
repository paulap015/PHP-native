<?php
    include("../modelo/clsSesion.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/estiloProductos.css">
    <title>Tabla productos</title>

</head>

<body>
    
    <nav>
		<ul>
			
            <li class="logo"><img alt="" src="../media/perfil.jpeg"></li>
            <div class="info-usuario">
                <?php
                    echo '<p class="info-usuario">' . $_SESSION['nombre'] . '</p>';
                    echo '<p class="info-usuario">' . $_SESSION['rol'] . '</p>';
                ?>
            </div>
			<li>
				<a href="../controlador/gestionSesion.php">Sesión</a>
			</li>
			<li>
				<a href="#">Productos</a>
			</li>
			<li>
				<a href="../modelo/clsCerrarSesion.php">Cerrar sesión </a>
			</li>
		
		</ul>
	</nav>
	<div class="wrapper">
		<div class="section">
			<div class="box-area">
                <center>
                <h1 class="titulo">Productos</h1>
                    <table class="content-table">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require('../modelo/clsProductoAcceso.php');
                            $datos = new clsProductoAcceso();
                            $lstProductos = $datos->listar();
                            foreach ($lstProductos as $item) {
                                echo '<tr>';
                                echo '<td>' . $item["codigo"] . '</td>';
                                echo '<td>' . $item["nombre"] . '</td>';
                                echo '<td>' . $item["precio"] . '</td>';
                                echo '</tr>';
                            }
                            ?>
                        </tbody>
                    </table>

                </center>
			</div>
		</div>
	</div>

    
</body>

</html>