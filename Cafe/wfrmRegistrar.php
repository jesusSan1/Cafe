<?php
//session_start();
//if(!isset($_SESSION['Autenticado'])){
  //  header("location: Login.php?status=500");
//}
include("../Conexion/cn.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link  rel="icon"   href="../assets/img/favicon.png" type="image/png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <script src="../burbujas.js"></script>
    <title>Registro de usuario</title>
    <?php
        include("../Layout/estilos.php");
    ?>
</head>

<body>
    <?php
            include("../Layout/header.php");
        ?>
<!--     <form class="container" method="post" action="registro.php">

        <div class="form-group row">
            <div class="col-md-4">
                <label>Ingrese su Nombre</label>
                <input type="text" name="txtNombre" id="" class="form-control">
            </div>

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

    </form> -->
    
    <form method="POST" action="registro.php" onclick="return validacion()">
    <div class="container">

    <div class="signup-form-container">
    
         <!-- form start -->
         <form role="form" id="register-form" autocomplete="off">
         
         <div class="form-header">
          <h3 class="form-title"><i class="fa fa-user"></i>Registrarse</h3>
                      
         <div class="pull-right">
             <h3 class="form-title"><span class="glyphicon glyphicon-pencil"></span></h3>
         </div>
                      
         </div>
         
         <div class="form-body">
                      
            <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                   <input name="txtNombre" type="text" class="form-control" placeholder="Nombre" id="txtNombre" autofocus="autofocus" required>
                   </div>
                   <span class="help-block" id="error"></span>
              </div>
                        
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="txtApepat" type="text" class="form-control" id="txtApepat" placeholder="Apellido paterno" required>
                   </div> 
                   <span class="help-block" id="error"></span>                     
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="txtApemat" type="text" class="form-control" id="txtApemat" placeholder="Apellido materno" required>
                   </div> 
                   <span class="help-block" id="error"></span>                     
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="txtNumeroCel" type="text" class="form-control" id="txtNumeroCel" placeholder="Número de telefono" required>
                   </div> 
                   <span class="help-block" id="error"></span>                     
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="txtUsuario" type="text" class="form-control" id="txtUsuario" placeholder="usuario" required>
                   </div> 
                   <span class="help-block" id="error"></span>                     
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="txtPassword" type="password" class="form-control" id="txtPassword" placeholder="Password" required>
                   </div> 
                   <span class="help-block" id="error"></span>                     
              </div>
                        
              <div class="row">
                        
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                        <!-- Guardar -->
                        <input  type="submit" value="Guardar" class="btn btn-dark" name="guardar">

                        </div>  
                        <span class="help-block" id="error"></span>                    
                   </div>
                            
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                        <!-- Pagina principal -->
                        <a href="Login.php" class="btn btn-danger">Pagina Principal</a>

                        </div>  
                        <span class="help-block" id="error"></span>                    
                   </div>
                       <?php
                        //incluir mensaje de usuario existente
                        include("../Layout/scripts.php");
                        if(isset($_SESSION['MensajeUsuarioExiste'])){?>
                            <script> swal('Cuidado', 'El usuario ya existe', 'warning');</script>
                            <?php session_unset();}?>     
                       <?php
                        //incluir mensaje de error
                        include("../Layout/scripts.php");
                        if(isset($_SESSION['MensajeError'])){?>
                            <script> swal('Error', 'Hubo un error, vuelve a intentar', 'error');</script>
                            <?php session_unset();}?>     
 
             </div>
                        
                        
            </div>


            </form>
            
           </div>

 </div>
 </form>

<script src="validacionDeCampos.js"></script>
</body>

</html>