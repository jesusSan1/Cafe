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
    <title>Recuperacion de contraseña</title>
    <script src="../burbujas.js"></script>
</head>
<body>
<header>
	<h2>Industrias Cafetaleras</h2>
	<h1>Cuide su café</h1>
</header>
<br>
<div class="container">
        <form action="Recuperar.php" method="post">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="card border-dark">
                        <h5 class="card-header bg-dark text-white text-center">Recuperar contraseña</h5>
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" name="txtUsuario" id="txtUsuario" class="form-control" autofocus="autofocus" placeholder="Escribe tu usuario">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success btn-block" value="Recuperar" name="buscar"/>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-1 col-md-2 col-lg-4"></div>
        </form>

<?php 
include("../Layout/scripts.php");
if(isset($_SESSION['error'])){?>
    <script> swal('Error', 'El usuario no existe', 'error');</script>
    <?php session_unset();}?>  

				<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
				<script src="assets/js/script.js"></script>
</body>
</html>