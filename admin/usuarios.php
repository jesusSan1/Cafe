
<?php 
include("../Layout/scripts.php");
include("../Conexion/cn.php");
include("../Layout/estilos.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../burbujas.js"></script>
    <title>Administrador</title>
    <link rel="stylesheet" href="../Plugins/font-awesome/css/font-awesome.min.css">
    <link  rel="icon"   href="../assets/img/favicon.png" type="image/png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>

<body>
    <?php 
        include("navbar.php");
    ?><center>
        <h2>Aqui puedes editar o eliminar un usuario</h2>
    </center>
    <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido paterno</th>
      <th scope="col">Apellido materno</th>
      <th scope="col">Numero de Telefono</th>
      <th scope="col">Usuario</th>
      <th scope="col">Contraseña</th>
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
                <td>
                    <?php 
                                echo $row['usuario']
                            ?>
                </td>
                <td>
                    <?php 
                                echo $row['pwd']
                            ?>
                </td>
                <center>
                    <td><a href="Editar.php?Id=<?php echo $row['id_Agricultor']; ?>"
                            class="btn btn-success"><i class="fa fa-edit"></i></a></td>
                </center>
                <center>
                    <td><a href="Eliminar.php?Id=<?php echo $row['id_Agricultor']; ?>"
                            class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                </center>
                </td>
               <?php }?>
  </tbody>
</table>
    </div>
    <script src=".../burbujas.js"></script>
</body>

</html>