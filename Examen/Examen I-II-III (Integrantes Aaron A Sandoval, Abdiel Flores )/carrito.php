<!DOCTYPE html>  
 <html>  
      <head>  
           <title>DD TECH 2.0</title>

           <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <style>
                .container{padding: 50px;}
                input[type="number"]{width: 20%;}
            </style>

            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="./css/styles.css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
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
                        <li><a href="crearCuenta.php">Crear cuenta</a></li>
                        <li><a href="login.php">Iniciar sesion</a></li>
                        <li><a href="cerrarSesion.php">Cerrar Sesion</a></li>
                    </ul>
                </nav>
            </header>

            <br><br>

            <div class="container">
                <h1>Carrito de Compra</h1>
                <table class="table">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                   
                </tbody>
                <tfoot>
                    
                </tfoot>
                </table>
            </div>
        </body>  
 </html>