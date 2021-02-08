<?php
//session_start();
//if(!isset($_SESSION['Autenticado'])){
  //  header("location: Login.php?status=500");
//}
include("../Conexion/cn.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <title>Document</title>
    <?php
        include("../Layout/estilos.php");
    ?>
</head>

<body>
    <?php
            include("../Layout/header.php");
        ?>
    <form class="container" method="post" action="registro.php">
        <!--CAJA DE TEXTO-->
        <div class="form-group row">
            <div class="col-md-4">
                <label>Ingrese su Nombre</label>
                <input type="text" name="txtNombre" id="" class="form-control">
            </div>
            <!--TEXT AREA-->
            <div class="col-md-8">
                <label>Ingrese usuario</label>
                <textarea name="txtUsuario" id="" class="form-control"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-6">
                <label>Contraseña</label>
                <input type="text" name="txtPassword" id="" class="form-control">
            </div>
        </div>
        </div>
        <p>
            <center>
                <input href="Login.php" type="submit" value="Guardar" class="btn btn-dark">
                <a href="Login.php" class="btn btn-danger">Pagina Principal</a>
            </center>
        </p>

    </form>
    <?php include("../Layout/scripts.php");
        ?>

    <!--$_SESSION-->
</body>

</html>