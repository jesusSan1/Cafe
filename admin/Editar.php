<?php
include('../Conexion/cn.php');
/* if(isset($_POST['editar'])){
    $id = $_GET['id'];
   // $usuario = $_SESSION['idUsuario'];
    $nombre = $_POST['txtNombre'];
    $apepat = $_POST['txtApepat'];
    $apemat = $_POST['txtApemat'];
    $numeroCel = $_POST['txtNumeroCel'];
    $query = "UPDATE Cafeticultor set nombre = '$nombre', apepat = '$apepat', apemat = '$apemat', numeroCel = '$numeroCel' WHERE id_Agricultor = '$id'";
    mysqli_query($conexion, $query);
    echo "<script> alert('Actualizado correctamente'); </script>";
    header("location: usuarios.php");
}
else{
    echo "<script> alert('Ocurrio un error'); </script>";
    header('Location: wfrmEditar.php');
} */

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM cafeticultor WHERE id_Agricultor = $id";
    $resultado = mysqli_query($conexion, $query);
    if(mysqli_num_rows($resultado)==1){
        $fila = mysqli_fetch_array($resultado);
        $nombre = $fila['nombre'];
        $apepat = $fila['apepat'];
        $apemat = $fila['apemat'];
        $numeroCel = $fila['numeroCel'];
        $usuario = $fila['usuario'];
        $pwd = $fila['pwd'];
    }
}
if(isset($_POST['editar'])){
    $id = $_GET['id'];
    $nombre = $_POST['txtNombre'];
    $apepat = $_POST['txtapepat'];
    $apemat = $_POST['txtapemat'];
    $numeroCel = $_POST['txtNumeroCel'];
    $usuario = $_POST['txtUsuario'];
    $pwd = $_POST['txtPassword'];
    $query = "UPDATE cafeticultor set nombre = '$nombre', apepat = '$apepat', apemat = '$apemat', numeroCel = '$numeroCel, usuario = '$usuario', pwd = '$pwd' WHERE id_Agricultor = $id";
    mysqli_query($conexion, $query);
    echo "<script> alert('Usuario actualizado'); </script>";
    header("Location: usuarios.php");
}
?>