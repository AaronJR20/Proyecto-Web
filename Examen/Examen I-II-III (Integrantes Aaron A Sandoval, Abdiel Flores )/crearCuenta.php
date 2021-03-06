
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

        <!--Animacion-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

    <title>Crear Cuenta</title>

</head>
<body>
    <header>
        <div class="logoMain">
            <img onclick="window.location.href='index.php'" src="./img/logo.png" alt="">
        </div>
        <div class="barra">
            <input type="search" placeholder="Buscar articulo">
            
        </div>
        <div class="btnbuscar">
           <input type='image' src="./img/search.png" width="40" height="40"/> 
        </div>
        <nav class="nav_menu">
            <ul class="nav_links">
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="carrito.php">Carrito de compra</a></li>
                <li><a href="login.php">Iniciar sesion</a></li>
                <li><a href="cerrarSesion.php">Cerrar Sesion</a></li>
            </ul>
        </nav>
    </header>

    <div class="contact-wrapper animated bounceInUp">
        <div class="contenedor">
        <h2>Crear cuenta</h2>
        <form method="post" action="insertarCrearCuenta.php">
            <div class="elemento">
                <label for="usuario">Nombre de usuario</label>
                <input type="text" id="usuario" name="usuario" required="true" placeholder="Ej: El_Viejon" />
            </div>
            <div class="elemento">
                <label for="email">Correo electronico</label>
                <input type="text" id="email" name="email" required="true" placeholder="EJ: elviejon@gmail.com"  />
            </div>
            <div class="elemento">
                <label for="password">Contrase??a</label>
                <input type="password" id="password" name="password" required="true"   placeholder="**********"/>
            </div>
            <div class="elemento">
                <label for="password">Confirmar contrase??a</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required="true"   placeholder="**********" />
            </div>
            <div class="elemento">
                <input type="submit" name="enviar" value="Registrarme"/>
            </div>
        </form>
    </div>
    </div>
    
</body>
</html>