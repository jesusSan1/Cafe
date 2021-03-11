<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link  rel="icon"   href="../assets/img/favicon.png" type="image/png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    
</head>
<body>
    <!-- Este solo es el login de las mascotas -->
    <!-- Aqui tendras 2 opciones, Iniciar sesion (Si ya te registraste) y Registrarse (En caso de que no tengas cuenta) -->
    <div class="container">
        <form action="ValidarSesionAdmin.php" method="post">
            <br />
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="card border-dark">
                        <h5 class="card-header bg-info text-white text-center">Iniciar Sesión</h5>
                        <div class="card-body">
                            <div class="text-center">
                            <img src="../assets/img/user.png" width="150" height="150"/>
                            </div>
                            <div class="form-group">
                                <label for="txtUsuario">Usuario</label>
                                <input type="text" name="usuario" id="usuario" class="form-control" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="txtPassword">Password</label>
                                <input type="password" name="clave" id="clave" class="form-control">
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="submit" class="btn btn-outline-primary btn-block" value="Iniciar Sesión" id="boton"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1 col-md-2 col-lg-4"></div>
        </form>
    </div>
</body>
</html>