
<?php
    session_start();
    include("../Conexion/cn.php");
    //Si el usuario no está logeado, lo redirige a inicio de sesion
    if(!isset($_SESSION['idUsuario'])){
        header("Location: ../Cafe/Login.php");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Noticias</title>
	<!--<link rel="stylesheet" href="../css/normalize.css">-->
    <link rel="Shortcut Icon" type="image/x-icon" href="../assets/img/favicon.png" />

	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="js/modernizr.js"></script>
	<script src="js/main.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="../burbujas.js"></script>
</head>
<body>
    <div class="page-container">
        <nav class="full-reset nav-phonestore">
           <div class="logo tittles-pages">
                Cafe contigo
           </div>
            <ul class="list-unstyled full-reset navigation-list">
                <li><a href="../index.html">Inicio</a></li>
            </ul>
            <i class="fa fa-bars visible-xs btn-mobile"></i>
        </nav>
        <div class="content-page cover-background font-content-news">
            <div class="jumbotron">
              <h1 class="tittles-pages">Noticias y promociones Cafetaleras</h1>
              <p style="text-align: justify"> En esta sección los cafeticultores podrán observar las noticias mas relevantes sobre las industrias cafetaleras,
                  con el fin de poder darle un mayor panorama sobre lo que pasa en el mundo cafetalero. Por otro lado se presentaran
                  una serie de promociones para las industrias del cafe entre otras cosas mas.
              </p>
            </div>
            <section class="all-news-contents section">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-8 col-sm-push-4">
                            <h2 class="tittles-pages text-center">Propiedades del café en las plantas</h2>
                                <p style="text-align: justify" class="lead">Para ello, los abonos o fertilizantes son un gran aliado. Sin embargo, con el objetivo de contribuir al medioambiente, se puede crear un fertilizante completamente natural gracias a los posos del café. ¿Quédan restos cuando terminas de hacerte un café? ¡No los tires!
                                ¿Qué beneficios tiene el café en las plantas?
                                El café contiene numerosos minerales, potasio y nitrógeno, unas características que benefician a las plantas. Estas propiedades se absorben poco a poco, al contrario que los fertilizantes sintéticos, por lo que son más duraderos en el tiempo. 
                                Además de contribuir al crecimiento de las plantas, el café atrae a las lombrices, un dato curioso que es beneficioso para los vegetales, ya que oxigenan y airean la tierra. 
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-sm-pull-8">
                            <img style="margin-top: 120px;"src="../Imagenes/cafe1.jpeg"   alt="windows-phone" class="img-responsive img-rounded center-box-content">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-xs-12 col-sm-8">
                            <h2 class="tittles-pages text-center">Día del Café: ¿qué cantidad de café deberíamos tomar al día?</h2>
                            <p style="text-align: justify" class="lead">Cada 1 de octubre se celebra el Día Internacional del Café, una conmemoración puesta en marcha por la International Coffee Organization (ICO) para poner en valor la importancia de esta bebida, una de las más consumidas en todo el mundo después del agua, y reunir a todas las personas que participan en todas las etapas de su proceso de elaboración. 
                                Cuatro tazas diarias como máximo
                                ¿Sabes cuántas tazas de café se pueden tomar al día? ¿Qué cantidad de cafeína diaria es la recomendada? Tal y como explican los expertos de Mayo Clinic, los adultos jóvenes sanos pueden consumir hasta 400 miligramos de cafeína diaria al considerarse seguro, una cantidad equivale a cerca de cuatro cafés.
                                El consumo de café tiene efectos beneficiosos para la salud, ya que diversos estudios han demostrado que "se asocia directamente a una mayor longevidad y a una mayor supervivencia de la población general, ya que se ha comprobado que disminuye el riesgo de padecer enfermedades", destaca la Fundación Española del Corazón (FEC). 
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <img style="padding-top: 220px;" src="../Imagenes/cafe2.jpeg" alt="Android" class="img-responsive img-rounded center-box-content">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-xs-12 col-sm-8 col-sm-push-4">
                            <h2 class="tittles-pages text-center">Por qué deberías beber el café después del desayuno y nunca antes</h2>
                            <p style="text-align: justify" class="lead">Tras una mala noche de sueño y poco descanso, es muy habitual que una tomar una taza de café sea lo primero que hagamos. Pero un estudio revela ahora que no es tan buena idea.
                                El estudio, elaborado por la Universidad de Bath, en Reino Unido, y publicado por el British Journal of Nutrition, revela que un café negro y fuerte nada más levantarnos puede afectar negativamente a nuestros niveles de azúcar en sangre.
                                Los investigadores pidieron a 29 hombres y mujeres sanos que se sometieran a tres experimentos nocturnos diferentes en orden aleatorio.
                                En uno de los experimentos, los participantes tenían una noche de sueño normal y se les pidió que consumieran una bebida azucarada al despertarse por la mañana.
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-sm-pull-8">
                            <img style="margin-top: 140px;" src="../Imagenes/cafe3.jpeg" alt="iOS" class="img-responsive img-rounded center-box-content">
                        </div>
                    </div>
                    <div class="row"><!-- Paginacion noticias -->
                        <div class="col-xs-12 text-center">
                            <ul class="pagination">
                              <li><a href="#">&laquo;</a></li>
                              <li class="active"><a href="#">1</a></li>
                              <li><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li><a href="#">4</a></li>
                              <li><a href="#">5</a></li>
                              <li><a href="#">&raquo;</a></li>
                            </ul>
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
                        <li >
                            <a href="#!">
                               <i class="fa fa-facebook" style="background-color: #3B5998;"></i> 
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <i class="fa fa-google-plus" style="background-color: #DD4B39;"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <i class="fa fa-twitter"  style="background-color: #56A3D9;"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <i class="fa fa-youtube" style="background-color: #BF221F;"></i>
                            </a>
                        </li>
                    </ul>
                    <h4><i>Derechos Reservados</i> &copyCopyright PaquitoMartinez&ArturoSerrano</h4>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>