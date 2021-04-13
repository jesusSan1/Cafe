<?php
session_start();
include "../Conexion/cn.php";
//Si el usuario no está logeado, lo redirige a inicio de sesion
if (!isset($_SESSION['idUsuario'])) {
    header("Location: ../Cafe/Login.php");
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contactenos</title>
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="Shortcut Icon" type="image/x-icon" href="../assets/img/favicon.png" />
        <link href='http://fonts.googleapis.com/css?family=Lobster'
            rel='stylesheet' type='text/css'>
        <script
            src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/modernizr.js"></script>
        <script src="js/main.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="../burbujas.js"></script>
    </head>
    <body>
        <div class="page-container">
            <nav class="full-reset nav-phonestore">

            <a href="../index.html"><div class="logo tittles-pages" href="./index.html">
                Cafe contigo
            </div></a>
            <ul class="list-unstyled full-reset navigation-list">
                <li><a href="../index.html">Inicio</a></li>
            </ul>
            <i class="fa fa-bars visible-xs btn-mobile"></i>
        </nav>
            <div class="content-page cover-background font-content-contact">
                <section class="contact-form-info section">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-10 col-xs-offset-1 col-sm-5
                                col-sm-offset-0">
                                <div class="well">
                                    <h3 class="text-center" style="font-family:
                                        'Lobster', cursive; font-size: 27px;">Dirección</h3>
                                    <address>
                                        <strong>Pais:</strong>Mexico<br>
                                        <strong>Dirección:</strong> Carreteran
                                        Federal Teziutlan-Perote<br>
                                        <strong>Ciudad:</strong>Teziutlán<br>
                                        <strong>Email:</strong>
                                        paquito.martinez2502.pm@gmail.com
                                    </address>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-7">
                                <div class="well">
                                    <h3 class="tittles-pages text-center">Conocenos...!!</h3>
                                    <p>Cafe contigo se encargara de cuidar tus
                                        sembradios, en base al reconocimiento de
                                        patrones de tus cultivos, con el fin de
                                        tener un diagnostico de las plantas de cafe.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-4 col-md-push-8">
                                <h2 class="tittles-pages text-center">Reflexiones</h2>
                                <p>
                                    1. El optimismo perpetuo es un multiplicador
                                    de fuerzas (Colin Powell).<br><br>
                                    2. Puedes hacerlo, deberías hacerlo, y si
                                    eres lo suficientemente valiente como para
                                    empezar, lo harás (Stephen King)<br><br>
                                    3. La verdadera oportunidad hacia el éxito
                                    reside en la persona, no en el puesto de
                                    trabajo (Zig Ziglar).
                                </p>
                            </div>

                            <div class="col-xs-12 col-md-8 col-md-pull-4">
                                <h2 class="tittles-pages text-center">Formulario
                                    de contacto</h2>
                                <form action="correo.php"method="post" class="form-horizontal">
                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Tu
                                            nombre</label>
                                        <div class="col-sm-10">
                                            <input type="text"
                                                class="form-control
                                                input-form-contact"
                                                placeholder="Escribe tu nombre" name="name" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Tu
                                            Email</label>
                                        <div class="col-sm-10">
                                            <input type="email"
                                                class="form-control
                                                input-form-contact"
                                                placeholder="Escribe tu Email" name="email" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Asunto</label>
                                        <div class="col-sm-10">
                                            <input type="text"
                                                class="form-control
                                                input-form-contact"
                                                placeholder="Asunto" name="asunto" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Tu
                                            mensaje</label>
                                            <div class="col-sm-10">
                                            <textarea class="form-control
                                                input-form-contact" rows="3"
                                                placeholder="Escribe tu
                                                mensaje" name="mensaje" required></textarea>
                                        </div>
                                    </div>
                                    <button  type="submit" class="btn btn-primary
                                        pull-right" name="enviar">Enviar</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="col-xs-12 text-center">
                        <h3>Siguenos en</h3>
                        <ul class="list-unstyled list-social-icons">
                            <li>
                                <a href="#!">
                                    <i class="fa fa-facebook"
                                        style="background-color: #3B5998;"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <i class="fa fa-google-plus"
                                        style="background-color: #DD4B39;"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <i class="fa fa-twitter"
                                        style="background-color: #56A3D9;"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <i class="fa fa-youtube"
                                        style="background-color: #BF221F;"></i>
                                </a>
                            </li>
                        </ul>
                        <h4>PhoneStore &copy; 2016</h4>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
