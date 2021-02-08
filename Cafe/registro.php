<?php
include("../Conexion/cn.php");
$nombre = $_POST['txtNombre'];
$usuario = $_POST['txtUsuario'];
$password = $_POST['txtPassword'];
$cmd =  $conexion->prepare("insert into Usuarios (Nombre,Usuario,pwd) values (?,?,?);");
$cmd->bind_param("sss",$nombre,$usuario,$password);
echo"¡Se almaceno correctamente tu informacion!";
$cmd->execute();
echo $cmd->error;
mysqli_close($conexion);
header("location: Login.php");
?>