<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="./css/styles.css">
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
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="carrito.php">Carrito de compra</a></li>
                <li><a href="crearCuenta.php">Crear cuenta</a></li>
                <li><a href="login.php">Iniciar sesion</a></li>
            </ul>
        </nav>
    </header>

    

    <article class="articleProduct">
        <h1>Todos los productos</h1>
        <div class="productos_container_productos">
            <!-- Renglon 1-->
            <div class="item">
                <form method="POST">
                <img src="img/img1.jpg" alt="" class="item-img">
                <input type="hidden" value="img/img1.jpg" name="img">
                <div class="item-text">
                    <h3>Tarjeta Grafica<span style="color: red;"> $20,000</h3>
                    <input type="hidden" value="Tarjeta Grafica" name="producto">
                    <input type="hidden" value="20,000" name="precio">
                    <p>Tarjeta Grafica RTX 3090 24gb</p>
                    <input type="submit" class="agregarCarrito" value="Agregar al carrito">
                </div>
                </form>
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
                    <p>Procesador Intel Core i9 11900K de Onceava Generación 3.5 GHz  </p>
                    <input type="submit" class="agregarCarrito" value="Agregar al carrito">
                </div>
            </div>
            <!-- Renglon 2-->
            <div class="item">
                <img src="img/pc1.png" alt="" class="item-img">
                <div class="item-text">
                    <h3>Computadora PRIDE GAMING<span style="color: red;"> $12,500</h3>
                    <p>Geforce RTX 3060 / AMD Ryzen 5 5600X / 16GB RAM</p>
                    <input type="submit" class="agregarCarrito" value="Agregar al carrito">
                </div>
            </div>
            
            
            <div class="item">
                <img src="img/pc2.png" alt="" class="item-img">
                <div class="item-text">
                    <h3>Computadora All In One HP<span style="color: red;"> $6,500</h3>
                    <p>All In One HP 205 G3 / AMD Carrizo-L E2-7110 / SSD 240GB</p>
                    <input type="submit" class="agregarCarrito" value="Agregar al carrito">
                </div>
            </div>
            
            <div class="item">
                <img src="img/pc3.png" alt="" class="item-img">
                <div class="item-text">
                    <h3>Computadora PRIDE GAMING<span style="color: red;"> $45,000</h3>
                    <p>AORUS PC GORILLA / NVIDIA® GeForce RTX™ 3070 / AMD RYZEN 7 5800X / 32GB RAM </p>
                    <input type="submit" class="agregarCarrito" value="Agregar al carrito">
                </div>
            </div>

            <!-- Renglon 3-->
            <div class="item">
                <img src="img/img4.jpeg" alt="" class="item-img">
                <div class="item-text">
                    <h3>SSD Samsung <span style="color: red;"> $2,500</h3>
                    <p>Samsung T7 2.5" SSD 500GB</p>
                    <input type="submit" class="agregarCarrito" value="Agregar al carrito">
                </div>
            </div>
            
            
            <div class="item">
                <img src="img/img5.jpeg" alt="" class="item-img">
                <div class="item-text">
                    <h3>Camara Sony<span style="color: red;"> $35,000</h3>
                    <p>Cámara Fotográfica Digital Sony A7Rii</p>
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

            <!-- Renglon 4-->
            <div class="item">
                <img src="img/img7.png" alt="" class="item-img">
                <div class="item-text">
                    <h3>MousePad Logitech <span style="color: red;"> $1200</h3>
                    <p>ALFOMBRILLA DE TELA GRANDE PARA JUEGOS</p>
                    <input type="submit" class="agregarCarrito" value="Agregar al carrito">
                </div>
            </div>
            
            
            <div class="item">
                <img src="img/img8.png" alt="" class="item-img">
                <div class="item-text">
                    <h3>Audifonos Logitech <span style="color: red;"> $2,000</h3>
                    <p>Audifonos que hacen que aprendas en clase</p>
                    <input type="submit" class="agregarCarrito" value="Agregar al carrito">
                </div>
            </div>
            
            <div class="item">
                <img src="img/img9.png" alt="" class="item-img">
                <div class="item-text">
                    <h3>Teclado gamer<span style="color: red;"> $2,000</h3>
                    <p>Teclado gamer que tiene 0 lag y ayuda de camino</p>
                    <input type="submit" class="agregarCarrito" value="Agregar al carrito">
                </div>
            </div>
    </article>
    
</body>
</html>