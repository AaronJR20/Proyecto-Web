<?php 
 try {
    require "conexion.php";
   

    $user = $_POST['usuario'];
    $password = $_POST['password'];

    session_start();
    $_SESSION['usuario']=$user;

    $consulta = "SELECT * FROM usuario WHERE nombre_usuario = '$user' AND contra_usuario = '$password'";
    
    $query = mysqli_query($con, $consulta);

    $filas = mysqli_num_rows($query);

    if($filas){
        header("Location: index.php");
    }else{
        header("Location: login.php");
    }

    /*
    if($query->num_rows!=0){
        header('Location: index.php');
    }
    */

 } catch (\Throwable $th) {
     //throw $th;

 }

 ?>

