<?php
session_start();
include("../Conexion/cn.php");
include("../Layout/scripts.php");
/* $nombre = $_POST['txtNombre'];
$apepat = $_POST['txtApepat'];
$apemat = $_POST['txtApemat'];
$numCel = $_POST['txtNumeroCel'];
$usuario = $_POST['txtUsuario'];
$password = $_POST['txtPassword'];
$cmd =  $conexion->prepare("INSERT INTO `cafe`.`cafeticultor` 
(`Nombre`, `apepat`, `apemat`,`numeroCel`,`usuario`, `pwd`) VALUES (?, ?, ?, ?, ?, ?);");
$cmd->bind_param("ssssss",$nombre,$apepat,$apemat, $numCel,$usuario,$password);
echo"¡Se almaceno correctamente tu informacion!";
$cmd->execute();
echo $cmd->error;
mysqli_close($conexion);
header("location: Login.php"); */
if(isset($_POST["guardar"])){
    $nombre = mysqli_real_escape_string($conexion, $_POST['txtNombre']);
    $apepat = mysqli_real_escape_string($conexion, $_POST['txtApepat']);
    $apemat = mysqli_real_escape_string($conexion, $_POST['txtApemat']);
    $numCel = mysqli_real_escape_string($conexion, $_POST['txtNumeroCel']);
    $usuario = mysqli_real_escape_string($conexion, $_POST['txtUsuario']);
    $password = mysqli_real_escape_string($conexion, $_POST['txtPassword']);

    $sqlUser = "SELECT id_Agricultor FROM cafeticultor WHERE usuario = '$usuario'";

    $resultadoUser = $conexion -> query($sqlUser);

    $filas = $resultadoUser -> num_rows;
    if($filas > 0){
        $_SESSION['MensajeUsuarioExiste'] = "El usuario ya existe";
        header("Location: wfrmRegistrar.php");
    }
    else{
        //Insertar informacion del usuario
        $sqlUsuario = "INSERT INTO Cafeticultor(nombre, apepat, apemat, numeroCel, usuario, pwd)
        VALUES ('$nombre', '$apepat', '$apemat', '$numCel', '$usuario', '$password')";
        $resultadoUsuario = $conexion->query($sqlUsuario);
        if($resultadoUsuario > 0){
            $_SESSION['MensajeExito'] = "Has sido registrado";
            header("Location: Login.php");

        }
        else{
            $_SESSION['MensajeError'] = "Error al registrarse";
            header("Location: wfrmRegistrar.php");

        }
    }
}  
?>