<?php
session_start();
include("../Conexion/cn.php");
//Si el usuario no está logeado, lo redirige a inicio de sesion
if(!isset($_SESSION['idUsuario'])){
    header("Location: ../Cafe/Login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../burbujas.js"></script>
    <title>Calendario</title>
    
    <link  rel="icon"   href="../assets/img/favicon.png" type="image/png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <!-- Calendario -->  
    <script src="fullcalendar/lib/jquery.min.js"></script>
    <script src="fullcalendar/lib/moment.min.js"></script>
    <link rel="stylesheet" href="fullcalendar/fullcalendar.min.css">
    <script src="fullcalendar/fullcalendar.min.js"></script>
    <script src="fullcalendar/locale/es.js"></script>
</head>
<body>
<a class="btn btn-primary" href="../index.html" role="button">Regresar Inicio</a>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-7"> <div id="CalendarioWeb"></div> </div>
            <div class="col"></div>
        </div>
    </div>
    

    <script>
         $(document).ready(function() {
             $('#CalendarioWeb').fullCalendar();
         });
    </script>
</body>

</html>