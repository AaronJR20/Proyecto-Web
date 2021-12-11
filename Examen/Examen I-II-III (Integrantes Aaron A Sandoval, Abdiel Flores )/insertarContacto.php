<?php 
 

 try {
    require "conexion.php";
   
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $numero = $_POST['numero'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $consulta = "INSERT INTO contacto VALUES (0,'".$nombre."','".$correo."','".$numero."','".$asunto."','".$mensaje."')";
    
    $query = mysqli_query($con, $consulta);
    
    if($query){
        header('Location: index.php');
    }

 } catch (\Throwable $th) {
     //throw $th;

 }

?>