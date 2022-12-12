<?php

include 'config.php';
error_reporting(0);
session_start();


if(isset($_SESSION['nombre'])){
    header("Location: inicio");
}

if(isset($_POST['submit'])){
    $user = $_POST['user'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

if($password==$cpassword){
    $sql = "SELECT * FROM users WHERE Email='$email'";
    $result = mysqli_query($conexion, $sql);

    if(!$result->num_rows > 0){
        $sql = "INSERT INTO users (Username, Email, Password) VALUES ('$user', '$email', '$password')";
        $result = mysqli_query($conexion, $sql);
        if($result){
            echo "<script> alert ('Usuario registrado con exito') </script>";
            $user = "";
            $email = "";
            $_POST['password'] = "";
            $_POST['cpassword'] = "";
        }else{
            echo "<script> alert ('Error al registrar el usuario') </script>";
        }

}else{
    echo "<script> alert ('El correo ya esta registrado') </script>";
}

}else{
    echo "<script> alert ('Las contraseñas no coinciden') </script>";
}
}

?>