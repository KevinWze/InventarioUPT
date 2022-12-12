<?php


include 'config.php';
error_reporting(0);
session_start();

if(isset($_SESSION['user'])){
    header("Location: inicio");
}

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE Email='$email' AND Password='$password'";
    $result = mysqli_query($conexion, $sql);

if($result->num_rows > 0){
    $row = mysqli_fetch_assoc($result);
    $_SESSION['user'] = $row['user'];
    header("Location: inicio");
}else{
    echo "<script> alert ('Usuario o contraseña incorrectos') </script>";
}
}






?>