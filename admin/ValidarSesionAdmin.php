<?php
    session_start();
    include('../Conexion/cn.php');
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    $query = "SELECT COUNT(*) as contar from administrador where usuario = '$usuario' and pwd = '$clave'";
    $consulta = mysqli_query($conexion, $query);
    $array = mysqli_fetch_array($consulta);

    if($array['contar'] > 0){
        $_SESSION['username'] = $usuario; 
        header('Location: index.php');
    }
    else{
        header("location: LoginAdmin.php");
    }
?>