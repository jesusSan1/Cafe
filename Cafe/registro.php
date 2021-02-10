<?php
include("../Conexion/cn.php");
$nombre = $_POST['txtNombre'];
$apepat = $POST['txtApepat'];
$apemat = $POST['txtApemat'];
$numCel = $POST['txtNumeroCel'];
$usuario = $_POST['txtUsuario'];
$password = $_POST['txtPassword'];
$cmd =  $conexion->prepare("INSERT INTO Usuario (id_agricultor,nombre,apepat,apemat,numeroCel, usuario, pwd) values (?,?,?,?,?,?,?);");
$cmd->bind_param($nombre,$apepat,$apemat,$numCel,$usuario,$password);
echo"¡Se almaceno correctamente tu informacion!";
$cmd->execute();
echo $cmd->error;
mysqli_close($conexion);
header("location: Login.php");
?>