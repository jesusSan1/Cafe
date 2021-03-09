<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
    <?php
        include("../Layout/estilos.php");
    ?>
     <link  rel="icon"   href="../assets/img/favicon.png" type="image/png" />

    <link rel="stylesheet" href="../css/nuevo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <script src="../burbujas.js"></script>
</head>
<body>
<header>
	<h2>Industrias Cafetaleras</h2>
	<h1>Cuide su café</h1>
</header>
<br>
<div class="container">
        <form action="validarSesion.php" method="post">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="card border-dark">
                        <h5 class="card-header bg-dark text-white text-center">Iniciar Sesión</h5>
                        <div class="card-body">
                            <div class="text-center">
                                <img src="../Imagenes/portada.png" width="150" height="150"/>
                            </div>
                            <div class="form-group">
                                <label for="txtUsuario">Usuario</label>
                                <input type="text" name="txtUsuario" id="txtUsuario" class="form-control" autofocus="autofocus">
                            </div>
                            <div class="form-group">
                                <label for="txtPassword">Password</label>
                                <input type="password" name="txtPassword" id="txtPassword" class="form-control">
                            </div>
                            <div class="form-group">
                                <input href="index.html" type="submit" class="btn btn-success btn-block" value="Iniciar Sesión" />

                            </div>
                            <div class="form-group">
                                <center>
                                    <a href="wfrmRegistrar.php" class="btn btn-outline-primary btn-block" name="registrarse">Registrarse</a>
                                    <br>
                                    <a href="wfrmUsuario.php" >¿Olvidó su contraseña?</a>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-1 col-md-2 col-lg-4"></div>
        </form>
        <?php
                        //incluir mensaje exito al registrarse
                        include("../Layout/scripts.php");
                        if(isset($_SESSION['MensajeExito'])){?>
                            <script> swal('Enhorabuena', 'Has sido registrado en el sistema', 'success');</script>
                            <?php session_unset();}?>    
    </div>
    <?php
        include("../Layout/scripts.php");
        if(isset($_GET["status"])){
            $status = $_GET['status'];  
            echo "<script type='text/javascript' >";
            if($status == 400){
                echo "swal('Cuidado','Usuario y/o contraseña incorrectas','warning');";
            }   
            if($status == 500){
                echo "swal('Cuidado','Error de sesión','error');";
            }    
            echo "</script>"; 
        }
    ?>

				<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
				<script src="assets/js/script.js"></script>
</body>
</html>