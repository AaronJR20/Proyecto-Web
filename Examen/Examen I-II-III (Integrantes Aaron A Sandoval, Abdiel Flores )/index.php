<?php
    session_start();
    error_reporting(0);
    $varsesion = $_SESSION["usuario"];
    
    /*
    if($varsesion==null || $varsesion=''){
        //die();
    }
    */
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>DD TECH 2.0</title>
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
                <li><a href="crearCuenta.php">Crear cuenta</a></li>
                <li><a href="login.php">Iniciar sesion</a></li>
                <li><a href="cerrarSesion.php">Cerrar Sesion</a></li>
            </ul>
        </nav>
    </header>
   
    <nav class="nav_opciones">
        <ul class="categorias">
            <li><a href="#">Categorias</a></li>
            <li><a href="#">Accesorios</a></li>
            <li><a href="#">Componentes</a></li>
            <li><a href="#">Monitores</a></li>
            <li><a href="#">Computadoras</a></li>
            <li><a href="carrito.php">Carrito</a></li>
            <li><a href="productos.php">Todos los productos</a></li>
            <li><a href=""><?php echo $_SESSION["usuario"]?></a></li>
        </ul>
    </nav>

    <br><br><br><br><br><br><br><br><br>
       
    <div class="container_img">
        <img src="./img/banner.jpg" alt="banner">
    </div>

        <div class="container_productos">
            <div class="item">
                <img src="img/img1.jpg" alt="" class="item-img">
                <div class="item-text">
                    <h3>Tarjeta Grafica<span style="color: red;"> $20,000</h3>
                    <p>Tarjeta Grafica RTX 3090 24gb</p>
                    <input type="submit" class="agregarCarrito" value="Agregar al carrito">
                </div>
            </div>
            
            <div class="item">
                <img src="img/img2.png" alt="" class="item-img">
                <div class="item-text">
                <h3>Mouse Logitech<span style="color: red;"> $1,200</h3>
                <p>Mouse Logitech G502 / 16,000 DPI</p>
                <input type="submit" class="agregarCarrito" value="Agregar al carrito">
                </div>
            </div>
            
            <div class="item">
                <img src="img/img3.jpeg" alt="" class="item-img">
                <div class="item-text">
                    <h3>Procesador Intel<span style="color: red;"> $7,500</h3>
                    <p>Procesador Intel Core i9 11900K de Onceava Generaci??n 3.5 GHz  </p>
                    <input type="submit" class="agregarCarrito" value="Agregar al carrito">
                </div>
            </div>
            
            <div class="item">
                <img src="img/img4.jpeg" alt="" class="item-img">
                <div class="item-text">
                    <h3>Disco Duro Samsung<span style="color: red;"> $900</h3>
                    <p>Samsung 870 QVO SATA III 2.5" SSD 2TB</p>
                    <input type="submit" class="agregarCarrito" value="Agregar al carrito">
                </div>
            </div>
            
            
            <div class="item">
                <img src="img/img5.jpeg" alt="" class="item-img">
                <div class="item-text">
                    <h3>Camara Digital<span style="color: red;"> $5,000</h3>
                    <p>C??mara Fotogr??fica Digital Canon Canon Eos Rebel T7 24.1 MP</p>
                    <input type="submit" class="agregarCarrito" value="Agregar al carrito">
                </div>
            </div>
            
            <div class="item">
                <img src="img/img6.png" alt="" class="item-img">
                <div class="item-text">
                    <h3>Laptop Omen<span style="color: red;"> $25,000</h3>
                    <p>Laptop Gamer Hp Omen 15'' I7 32gb 512gb Rtx 2070</p>
                    <input type="submit" class="agregarCarrito" value="Agregar al carrito">
                </div>
            </div>


    </div>

</body>
</html>