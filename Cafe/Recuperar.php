<?php
    session_start();
    include("../Conexion/cn.php");
    $usuario = $_POST['txtUsuario'];

    $sql = "SELECT pwd FROM cafeticultor WHERE usuario = '$usuario'";
    $f = mysqli_query($conexion, $sql);
    $a = mysqli_fetch_assoc($f);
    if(! $a){
        $_SESSION['error'] = "El usuario no existe";
        header("Location: wfrmUsuario.php");
        die();
    }
    
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
    <title>Contraseña recuperada</title>
    <script src="../burbujas.js"></script>
</head>
<body>
<header>
	<h2>Industrias Cafetaleras</h2>
	<h1>Cuide su café</h1>
</header>
<br>
<div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="card border-dark">
                        <h5 class="card-header bg-dark text-white text-center">Contraseña recuperada</h5>
                        <div class="card-body">
                            <div class="form-group">
                            
                            <center><p><?php if($a){
                                    echo "Tu contraseña es ".$a['pwd'];
                                    }?></p></center>
                                <a href="Login.php"><input type="button" class="btn btn-danger btn-block" value="Regresar" role="button"/></a>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-1 col-md-2 col-lg-4"></div>

<?php 
include("../Layout/scripts.php");
if(isset($_SESSION['error'])){?>
    <script> swal('Error', 'El usuario no existe', 'error');</script>
    <?php session_unset();}?>  

				<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
				<script src="assets/js/script.js"></script>

                
</body>
</html>