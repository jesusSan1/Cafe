<?php
include("../Conexion/cn.php");
$nombre = $_POST['txtNombre'];
$apepat = $_POST['txtApepat'];
$apemat = $_POST['txtApemat'];
$numCel = $_POST['txtNumeroCel'];
$usuario = $_POST['txtUsuario'];
$password = $_POST['txtPassword'];
$cmd =  $conexion->prepare("INSERT INTO `cafe`.`usuarios` 
(`Nombre`, `apepat`, `apemat`,`numeroCel`,`usuario`, `pwd`) VALUES (?, ?, ?, ?, ?, ?);");
$cmd->bind_param("ssssss",$nombre,$apepat,$apemat, $numCel,$usuario,$password);
echo"¡Se almaceno correctamente tu informacion!";
$cmd->execute();
echo $cmd->error;
mysqli_close($conexion);
header("location: Login.php");
?>