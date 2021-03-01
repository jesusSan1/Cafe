<?php
    session_start();
    include("../Conexion/cn.php");
    $nombre = $_POST['txtUsuario'];
    $password = $_POST['txtPassword'];
    $cmd = $conexion->prepare("select * from cafeticultor ".
    " where usuario=? and pwd=?");
    $cmd->bind_param("ss",$nombre,$password);
    $cmd->execute();
    $cmd->store_result();
    $cmd->bind_result($Id,$nombre,$usuario,$password);
    $cmd->fetch();

    if($cmd->num_rows > 0){
       $_SESSION['autenticado'] = true;
       $_SESSION['usuario'] = $nombre;
       $_SESSION['IdUsuario'] = $Id;
       header("location: ../index.html");
    }
    else{
        //acción cuando es incorrecto
        header("location: Login.php?status=400");
    }


?>