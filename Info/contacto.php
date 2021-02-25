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
        <script type='text/javascript'>
    //Cursor burbujas
    // <![CDATA[
    var colours=new Array("#22b870", "#22b870", "#22b870", "#22b870", "#22b870"); 
    var bubbles=70; 
    var x=ox=400;
    var y=oy=300;
    var swide=800;
    var shigh=600;
    var sleft=sdown=0;
    var bubb=new Array();
var bubbx=new Array();
var bubby=new Array();
var bubbs=new Array();

window.onload=function() { if (document.getElementById) {
var rats, div;
for (var i=0; i<bubbles; i++) {
rats=createDiv("3px", "3px");
rats.style.visibility="hidden";

div=createDiv("auto", "auto");
rats.appendChild(div);
div=div.style;
div.top="1px";
div.left="0px";
div.bottom="1px";
div.right="0px";
div.borderLeft="1px solid "+colours[3];
div.borderRight="1px solid "+colours[1];

div=createDiv("auto", "auto");
rats.appendChild(div);
div=div.style;
div.top="0px";
div.left="1px";
div.right="1px";
div.bottom="0px"
div.borderTop="1px solid "+colours[0];
div.borderBottom="1px solid "+colours[2];

div=createDiv("auto", "auto");
rats.appendChild(div);
div=div.style;
div.left="1px";
div.right="1px";
div.bottom="1px";
div.top="1px";
div.backgroundColor=colours[4];
if (navigator.appName=="Microsoft Internet Explorer") div.filter="alpha(opacity=50)";
else div.opacity=0.5;
document.body.appendChild(rats);
bubb[i]=rats.style;
}
set_scroll();
set_width();
bubble();
}}

function bubble() {
var c;
if (x!=ox || y!=oy) {
ox=x;
oy=y;
for (c=0; c<bubbles; c++) if (!bubby[c]) {
bubb[c].left=(bubbx[c]=x)+"px";
bubb[c].top=(bubby[c]=y)+"px";
bubb[c].width="3px";
bubb[c].height="3px"
bubb[c].visibility="visible";
bubbs[c]=3;
break;
}
}
for (c=0; c<bubbles; c++) if (bubby[c]) update_bubb(c);
setTimeout("bubble()", 40);
}

function update_bubb(i) {
if (bubby[i]) {
bubby[i]-=bubbs[i]/2+i%2;
bubbx[i]+=(i%5-2)/5;
if (bubby[i]>sdown && bubbx[i]>0) {
if (Math.random()<bubbs[i]/shigh*2 && bubbs[i]++<8) {
bubb[i].width=bubbs[i]+"px";
bubb[i].height=bubbs[i]+"px";
}
bubb[i].top=bubby[i]+"px";
bubb[i].left=bubbx[i]+"px";
}
else {
bubb[i].visibility="hidden";
bubby[i]=0;
return;
}
}
}

document.onmousemove=mouse;
function mouse(e) {
set_scroll();
y=(e)?e.pageY:event.y+sleft;
x=(e)?e.pageX:event.x+sdown;
}

window.onresize=set_width;
function set_width() {
var sw_min=999999;
var sh_min=999999;
if (document.documentElement && document.documentElement.clientWidth) {
if (document.documentElement.clientWidth>0) sw_min=document.documentElement.clientWidth;
if (document.documentElement.clientHeight>0) sh_min=document.documentElement.clientHeight;
}
if (typeof(self.innerWidth)!="undefined" && self.innerWidth) {
if (self.innerWidth>0 && self.innerWidth<sw_min) sw_min=self.innerWidth;
if (self.innerHeight>0 && self.innerHeight<sh_min) sh_min=self.innerHeight;
}
if (document.body.clientWidth) {
if (document.body.clientWidth>0 && document.body.clientWidth<sw_min) sw_min=document.body.clientWidth;
if (document.body.clientHeight>0 && document.body.clientHeight<sh_min) sh_min=document.body.clientHeight;
}
if (sw_min==999999 || sh_min==999999) {
sw_min=800;
sh_min=600;
}
swide=sw_min;
shigh=sh_min;
}

window.onscroll=set_scroll;
function set_scroll() {
if (typeof(self.pageYOffset)=="number") {
sdown=self.pageYOffset;
sleft=self.pageXOffset;
}
else if (document.body.scrollTop || document.body.scrollLeft) {
sdown=document.body.scrollTop;
sleft=document.body.scrollLeft;
}
else if (document.documentElement && (document.documentElement.scrollTop || document.documentElement.scrollLeft)) {
sleft=document.documentElement.scrollLeft;
sdown=document.documentElement.scrollTop;
}
else {
sdown=0;
sleft=0;
}
}

function createDiv(height, width) {
var div=document.createElement("div");
div.style.position="absolute";
div.style.height=height;
div.style.width=width;
div.style.overflow="hidden";
return (div);
}

</script>
    </head>
    <body>
        <div class="page-container">
            <nav class="full-reset nav-phonestore">
                <div class="logo tittles-pages">
                    Cafe Contigo
                </div>
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