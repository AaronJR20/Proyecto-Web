<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="./css/styles.css">

    <!--Animacion-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <!--Fuente-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
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
                <li><a href="carrito.php">Carrito Compra</a></li>
                <li><a href="crearCuenta.php">Crear cuenta</a></li>
                <li><a href="login.php">Iniciar sesion</a></li>
                <li><a href="cerrarSesion.php">Cerrar Sesion</a></li>
            </ul>
        </nav>
    </header>

    <div class="titulo">
        <h1>Contacto</h1>
    </div>

     
<div class="content">

     <h1 class="logo">Contacto </h1>

    <div class="contact-wrapper animated bounceInUp">
       
        
        <div class="contact-form">
            <h3>Contactenos</h3>
            <form method="post" action="insertarContacto.php">
                <p>
                    <label>Nombre completo</label>
                    <input type="text" id="nombre"  name="nombre">
                </p>
                <p>
                    <label>Correo electronico</label>
                    <input type="email" id="correo" name="correo">
                </p>
                <p>
                    <label>Numero de telefono</label>
                    <input type="tel" id="numero" name="numero">
                </p>
                <p>
                    <label>Asunto</label>
                    <input type="text" id="asunto" name="asunto">
                </p>
                <p class="block">
                   <label>Mensaje</label> 
                    <textarea id="mensaje" name="mensaje" rows="3"></textarea>
                </p>
                <p class="block">
                    <button>
                        Send
                    </button>
                </p>
            </form>
        </div>
        <div class="contact-info">
            <h4>Mas informacion</h4>
            <ul>
                <li><i class="fas fa-map-marker-alt"></i> Direccion</li>
                <li><i class="fas fa-phone"></i> (111) 111 111 111</li>
                <li><i class="fas fa-envelope-open-text"></i> contacto@ddtech.com</li>
            </ul>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero provident ipsam necessitatibus repellendus?</p>
            <p>Ddtech2.com</p>

        </div>
    </div>

</div>



</body>
</html>