<?php 
 

 try {
    require "conexion.php";
   

    $user = $_POST['usuario'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $consulta = "INSERT INTO usuario VALUES (0,'".$user."','".$email."','".$password."')";
    
    $query = mysqli_query($con, $consulta);
    
    if($query){
        header('Location: index.php');
    }

 } catch (\Throwable $th) {
     //throw $th;

     echo "Aqui tambien";
 }

?>