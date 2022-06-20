<?php
    include("../modelo/clsSesion.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../css/estiloProductos.css">
    <title>Tabla productos</title>

</head>

<body>
    
    <nav>
		<ul>
			
            <li class="logo"><img alt="" src="../media/perfil.jpeg"></li>
            <div class="info-usuario">
                <?php
                    echo '<p class="user-name">' . $_SESSION['nombre'] . '</p>';
                    echo '<p class="user-rol">' . $_SESSION['rol'] . '</p>';
                ?>
            </div>
            
			<li>
				<a href="../controlador/gestionSesion.php">Sesión</a>
			</li>
            
            <li>
                <a name="btnProducto" href="../vista/paginaProducto.php">Productos</a>
            </li>
                
			<li>
                <a href="../modelo/clsCerrarSesion.php">Cerrar sesión </a>
			</li>
		
		</ul>
	</nav>
	<div class="wrapper">
		<div class="section">
            
			<div class="box-area">
                <main>

                    <h1 class="titulo">Información del Usuario</h1>
                    
                    
                        
                        <?php
                            echo '<div class="info-sesion">';
                            echo '<h3><strong>Nombre:  </strong> '. $_SESSION['nombre'] .' </h3>';
                            echo '<h3><strong>Usuario: </strong>' . $_SESSION['usuario'] . '</h3>';
                            echo '<h3><strong>Rol:     </strong> ' . $_SESSION['rol'] . '</h3>';
                            echo '</div>';
                        ?>
                    
                    

                </main>
			</div>
		</div>
	</div>

    <div>
        <button>Cerrar Sesión</button>
        <button>Información de la Sesión</button>
    </div>

    
</body>

</html>