<?php

    include("../Conexion/cn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../css/Perfil.css">
    <!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>-->
    <!--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->

</head>

<body background="data:image/jpeg;base64,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">
    <div class="container emp-profile">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="https://assets.stickpng.com/images/585e4bcdcb11b227491c3396.png"
                            alt="" />
                        <div class="file btn btn-lg btn-primary">
                            Change Photo
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
                </div>

                <div class="col-md-2">
                </div>
            </div>
            <div class="row">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido Paterno</th>
                        <th scope="col">Apellido Materno</th>
                        <th scope="col">numero celular</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                $cmd = "select * from Cafeticultor";
                $resultado = $conexion->query($cmd);
                while($row = $resultado->fetch_array(MYSQLI_ASSOC)){
                    ?>
            <tr>
                <th scope="row">
                    <?php 
                                echo $row['id_Agricultor']
                            ?>
                </th>
                <td>
                    <?php 
                                echo $row['nombre']
                            ?>
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
            <?php
                }
                ?>

        </tbody>
    </table>


            </div>
        </form>
    </div>
</body>

</html>