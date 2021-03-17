
<?php 
include('../Conexion/cn.php');
include("../Layout/scripts.php");
/* if(isset($_POST['editar'])){
    $id = $_GET['id'];
   // $usuario = $_SESSION['idUsuario'];
    $nombre = $_POST['txtNombre'];
    $apepat = $_POST['txtApepat'];
    $apemat = $_POST['txtApemat'];
    $numeroCel = $_POST['txtNumeroCel'];
    $query = "UPDATE Cafeticultor set nombre = '$nombre', apepat = '$apepat', apemat = '$apemat', numeroCel = '$numeroCel' WHERE id_Agricultor = '$id'";
    mysqli_query($conexion, $query);
    echo "<script> alert('Actualizado correctamente'); </script>";
    header("location: usuarios.php");
}
else{
    echo "<script> alert('Ocurrio un error'); </script>";
    header('Location: wfrmEditar.php');
} */

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM cafeticultor WHERE id_Agricultor = $id";
    $resultado = mysqli_query($conexion, $query);
    if(mysqli_num_rows($resultado)==1){
        $fila = mysqli_fetch_array($resultado);
        $nombre = $fila['nombre'];
        $apepat = $fila['apepat'];
        $apemat = $fila['apemat'];
        $numeroCel = $fila['numeroCel'];
        $usuario = $fila['usuario'];
        $pwd = $fila['pwd'];
    }
}
if(isset($_POST['editar'])){
    $id = $_GET['id'];
    $nombre = $_POST['txtNombre'];
    $apepat = $_POST['txtapepat'];
    $apemat = $_POST['txtapemat'];
    $numeroCel = $_POST['txtNumeroCel'];
    $usuario = $_POST['txtUsuario'];
    $pwd = $_POST['txtPassword'];
    $query = "UPDATE cafeticultor set nombre = '$nombre', apepat = '$apepat', apemat = '$apemat', numeroCel = '$numeroCel, usuario = '$usuario', pwd = '$pwd' WHERE id_Agricultor = $id";
    mysqli_query($conexion, $query);
    echo "<script> alert('Usuario actualizado'); </script>";
    header("Location: usuarios.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../burbujas.js"></script>
    <title>Administrador</title>
    
    <link  rel="icon"   href="../assets/img/favicon.png" type="image/png" />
    <link rel="stylesheet" href="../Plugins/font-awesome/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</head>

<body>
    <?php 
        include("navbar.php");
    ?>
    <br>
<form action="wfrmEditar.php?id=<?php echo $_GET['id']?>" method="POST">
    <div class="container">

    <div class="signup-form-container">
    
         <!-- form start -->
         <form role="form" id="register-form" autocomplete="off">
         
         <div class="form-header">
          <h3 class="form-title"><i class="fa fa-edit"></i>Editar usuario</h3>
                      
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
                   <br>
              </div>
                        
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="txtApepat" type="text" class="form-control" id="txtApepat" placeholder="Apellido paterno" required>
                   </div> 
                   <br>
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="txtApemat" type="text" class="form-control" id="txtApemat" placeholder="Apellido materno" required>
                   </div> 
                   <br>                     
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="txtNumeroCel" type="text" class="form-control" id="txtNumeroCel" placeholder="Número de telefono" required>
                   </div> 
                   <br>                     
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="txtUsuario" type="text" class="form-control" id="txtUsuario" placeholder="usuario" required>
                   </div> 
                   <br>                     
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="txtPassword" type="password" class="form-control" id="txtPassword" placeholder="Password" required>
                   </div> 
                   <br>                    
              </div>
                        
              <div class="row">
                        
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                        <!-- Guardar -->
                        <td><a class="btn btn-success">Editar</a></td>
                        </div>  
                        <span class="help-block" id="error"></span>                    
                   </div>
                            
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                        <!-- Pagina principal -->
                        <a href="usuarios.php" class="btn btn-danger">Regresar</a>

                        </div>  
                        <span class="help-block" id="error"></span>                    
                   </div>
             </div>
                        
                        
            </div>


            </form>
            
           </div>

 </div>
 </form>
    <script src=".../burbujas.js"></script>
</body>

</html>