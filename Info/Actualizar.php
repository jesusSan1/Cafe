<?php
    session_start();
    $id_Agricultor = $_POST['txtId'];
    $nombre = $_POST['txtnombre'];
    $apepat = $_POST['txtapepat'];
    $apemat = $_POST['txtapemat'];
    $numeroCel = $_POST['txtNum'];
    include("../Conexion/cn.php");
    if($cmd=$conexion->prepare("update usuario set nombre=?, apepat=?, apemat=?, numeroCel=? where id_Agricultor=?")){
        $cmd->bind_param("ssssi",$nombre,$apepat,$apemat,$numeroCel,$id_Agricultor);
        $cmd->execute();
        $cmd->close();
        mysqli_close($conexion);
        header("location: ../Info/Informacion.php");
    }
    else{
        echo "Ocurrió un error a la hora de actualizar";
    }
