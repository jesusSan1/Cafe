    <!-- Iniciar una nueva sesión o reanudar la existente-->
    <?php
session_start();
//if(!isset($_SESSION['Autenticado'])){
//    header("location: Login.php?status=500");
//}
include("../Conexion/cn.php");
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link  rel="icon"   href="../assets/img/favicon.png" type="image/png" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
        <title>Actualizar datos</title>
        <?php
        include("../Layout/estilos.php");
    ?>
    </head>

    <body>
        <?php
            include("../Layout/header.php");
        ?>
        <?php
           
            //AQUI VAMOS A PROGRAMAR LA PARTE DE LA CARGA DE LA INFORMACION ALMACENADA
            if(!isset($_GET['Id'])){
                
                $cmd = $conexion->prepare("select * from Cafeticultor where id_Agricultor=?");
                $cmd->bind_param("i",$id_Agricultor);
                $cmd->execute();
                $cmd->bind_result($id_Agricultor,$nombre,$apepat,$apemat,$numeroCel);
                $cmd->store_result();
                $cmd->fetch();
                $cmd->close();
            }
          
        ?>

        <ul>
            <!---->
            <form class="container" method="post" action="Actualizar.php">
                    <div class="col-md-4">
                        <label>Nombre </label>
                        <input type="text" name="txtnombre" id="" class="form-control" value="">
                    </div>
                    </br></br>
                    <div class="col-md-4">
                        <label>Apellido Paterno</label>
                        <input type="text" name="txtapepat" id="" class="form-control" value="">
                    </div>
                    </br></br>
                    <div class="col-md-4">
                        <label>Apellido Materno</label>
                        <input type="text" name="txtapemat" id="" class="form-control" value="">
                    </div>
                    </br></br>
                    <div class="col-md-4">
                        <label>Numero Celular</label>
                        <input type="text" name="txtNum" id="" class="form-control" value="">
                    </div>
                </div>
                </div>

                <br />
                <p>
                    <center>
                        <input  href="Informacion.php"type="submit" value="Actualizar" class="btn btn-success">
                        <input  href="Informacion.php"type="submit" value="Regresar" class="btn btn-success">
                        <!--<a href="../Info/Informacion.html" class="btn btn-dark">Pagina Principal</a>-->
                    </center>
                </p>
                </br></br></br></br>
            </form>
            <?php include("../Layout/scripts.php");
        ?>

            <!--$_SESSION-->
    </body>

    </html>