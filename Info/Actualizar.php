<?php
    session_start();
    include("../Conexion/cn.php");
   // $id_Agricultor = $_POST['txtId'];
/*     $nombre = $_POST['txtnombre'];
    $apepat = $_POST['txtapepat'];
    $apemat = $_POST['txtapemat'];
    $numeroCel = $_POST['txtNum'];
    if($cmd=$conexion->prepare("update usuario set nombre=?, apepat=?, apemat=?, numeroCel=? where id_Agricultor=?")){
        $cmd->bind_param("ssss",$nombre,$apepat,$apemat,$numeroCel);
        $cmd->execute();
        $cmd->close();
        mysqli_close($conexion);
        header("location: ../Info/Informacion.php");
    }
    else{
        echo "Ocurrió un error a la hora de actualizar";
    } */

    if(isset($_POST['actualizar'])){
        $id = $_GET['id'];
        $nombre = $_POST['txtNombre'];
        $apepat = $_POST['txtApepat'];
        $apemat = $_POST['txtApemat'];
        $numeroCel = $_POST['txtNumCel'];
//        $query = "UPDATE mascota set nombre = '$nombre', descripcion = '$descripcion' WHERE id = $id";
        $query = "UPDATE Cafeticultor set nombre = '$nombre', apepat = '$apepat', apemat = '$apemat', numeroCel = '$numeroCel'";
        mysqli_query($conexion, $query);
        header("location: ../Info/Informacion.php");
    }
    else{
        echo "<script> alert('Ocurrio un error'); </script>";
        header("location: ../Info/Informacion.php");
    }
