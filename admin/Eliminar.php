<?php
include '../Conexion/cn.php';
if (isset($_GET['Id'])) {
    $id = $_GET['Id'];
    $query = "DELETE FROM Cafeticultor WHERE id_Agricultor = $id";
    $resultado = mysqli_query($conexion, $query);
    if (!$resultado) {
        die("consulta fallida");
    } else {
        $_SESSION['mensaje'] = 'Usuario aggregado';
        header("Location: usuarios.php");
    }
}
