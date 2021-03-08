<?php
session_start();
include("../Conexion/cn.php");
//Si el usuario no está logeado, lo redirige a inicio de sesion
if(!isset($_SESSION['idUsuario'])){
    header("Location: ../Cafe/Login.php");
}
//Sirve para mostrar la informacion del usuario logeado
$usuario = $_SESSION['idUsuario'];
$sql = "SELECT nombre, apepat, apemat, numeroCel FROM Cafeticultor WHERE id_Agricultor = '$usuario'";
$resultado = $conexion->query($sql);
$row = $resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../burbujas.js"></script>
    <title>Perfil de usuario</title>
    
    <link  rel="icon"   href="../assets/img/favicon.png" type="image/png" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../css/miPerfil.css">
    <!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>-->
    <!--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->

</head>

<body>
    <div class="container emp-profile">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="../assets/img/profile.png"
                            alt="" />
                        <div class="file btn btn-lg btn-primary">
                            Cambiar foto
                            <input type="file" name="file" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                        <h5>
                           Actualizacion de datos
                        </h5>
                        <p class="proile-rating">Ubicación : <span>Teziutlán</span></p>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">Perfil</a>
                            </li>
                            <li class="nav-item">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <a class="btn btn-primary" href="../index.html" role="button">Regresar Inicio</a>
                    <br>
                    <br>
                    <a class="btn btn-danger" href="salir.php" role="button">Cerrar sesión</a>
                    
                </div>

                <div class="col-md-2">
                </div>
            </div>
            <div class="row">
                <form action="Actualizar.php" method="POST">
                <table class="table">
                    <thead>
                      <tr>
                        <!-- <th scope="col" name="txtId">Id</th> -->
                        <th scope="col" name="txtnombre">Nombre</th>
                        <th scope="col" name="txtapepat">Apellido Paterno</th>
                        <th scope="col" name="txtpemat">Apellido Materno</th>
                        <th scope="col" name="txtNum">numero celular</th>
                      </tr>
                    </thead>
                    <tbody>

            <tr>
<!--                 <th scope="row">

                </th> -->
                
                <td>
                   <!-- Aqui -->
                  <?php echo $row['nombre'];?>
                </td>
                <td>
                    <?php 
                                echo $row['apepat']
                            ?>
                </td>
                <td>
                    <?php 
                                echo $row['apemat']
                            ?>
                </td>
                <td>
                    <?php 
                                echo $row['numeroCel']
                            ?>
                </td>

                <center>
                    <td><a href="wfrmActualizar.php?Id=<?php echo $row['id_Agricultor']; ?>"
                            class="btn btn-warning">Actualizar</a></td>
                </center>
            </tr>

        </tbody>
        </form>
    </table>


            </div>
        </form>
    </div>
</body>

</html>