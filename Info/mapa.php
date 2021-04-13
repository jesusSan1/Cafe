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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Localización</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Slide Down Box Menu with jQuery and CSS3" />
    <meta name="keywords" content="jquery, css3, sliding, box, menu, cube, navigation, portfolio, thumbnails" />
    <link rel="Shortcut Icon" type="image/x-icon" href="../assets/img/favicon.png" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">


    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/modernizr.js"></script>
    <script src="js/main.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript"
        src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBK4xh2iO--EJf8AxhPm8vgaZ-c2HvoeLY"></script>
    <script src="../burbujas.js"></script>
    <link rel="stylesheet" href="../css/mapa.css">
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
        <!-- display google map -->
<!--          <center>
            <div id="geomap" style="width: 450px; height: 450px; margin-top:5%">
            </div>

        </center>  -->
        <br>
        <div class="container">
            <div class="abs-center">
                <div class="border p-3 form">
                    <div class="form-group input-group">
                        <center>
                            <div id="geomap" style="width: 450px; height: 450px;">

                        </center>

                    </div>
                    <div class="form-group">

                    </div>
                </div>
            </div>
        </div>
        <!-- Botones de buscar -->
        <div class="container">
            <div class="abs-center">
                <form action="#" class="border p-3 form">
                    <div class="form-group input-group">
                        <input type="text" id="search_location" class="form-control" placeholder="Buscar localización">
                        <div class="input-group-btn">
                            <button class="btn btn-primary get_map" type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="form-group">

                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        navigator.geolocation.getCurrentPosition(function (location) {
            console.log(location.coords.latitude);
            console.log(location.coords.longitude);

            var map;
            var center = { lat: location.coords.latitude, lng: location.coords.longitude };
            function initMap() {
                map = new google.maps.Map(document.getElementById('geomap'), {
                    center: center,
                    zoom: 7
                });

                var marker = new google.maps.Marker({
                    position: { lat: location.coords.latitude, lng: location.coords.longitude },
                    map: map,
                    title: 'Ubication'

                });

            }
            initMap();
        });
        var geocoder;
            var map;
            var marker;

            /*
             * Google Map with marker
             */
            function initialize(posicion) {

                var initialLat = $('.search_latitude').val();
                var initialLong = $('.search_longitude').val();

                var latlng = new google.maps.LatLng(initialLat, initialLong);
                var options = {
                    zoom: 17,
                    center: latlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };

                map = new google.maps.Map(document.getElementById("geomap"), options);

                geocoder = new google.maps.Geocoder();

                marker = new google.maps.Marker({
                    map: map,
                    draggable: true,
                    position: latlng
                });

                google.maps.event.addListener(marker, "dragend", function () {
                    var point = marker.getPosition();
                    map.panTo(point);
                    geocoder.geocode({'latLng': marker.getPosition()}, function (results, status) {
                        if (status == google.maps.GeocoderStatus.OK) {
                            map.setCenter(results[0].geometry.location);
                            marker.setPosition(results[0].geometry.location);
                            $('.search_addr').val(results[0].formatted_address);
                            $('.search_latitude').val(marker.getPosition().lat());
                            $('.search_longitude').val(marker.getPosition().lng());
                        }
                    });
                });

            }

            $(document).ready(function () {
                //load google map
                initialize();

                /*
                 * autocomplete location search
                 */
                var PostCodeid = '#search_location';
                $(function () {
                    $(PostCodeid).autocomplete({
                        source: function (request, response) {
                            geocoder.geocode({
                                'address': request.term
                            }, function (results, status) {
                                response($.map(results, function (item) {
                                    return {
                                        label: item.formatted_address,
                                        value: item.formatted_address,
                                        lat: item.geometry.location.lat(),
                                        lon: item.geometry.location.lng()
                                    };
                                }));
                            });
                        },
                        select: function (event, ui) {
                            $('.search_addr').val(ui.item.value);
                            $('.search_latitude').val(ui.item.lat);
                            $('.search_longitude').val(ui.item.lon);
                            var latlng = new google.maps.LatLng(ui.item.lat, ui.item.lon);
                            marker.setPosition(latlng);
                            initialize();
                        }
                    });
                });

                /*
                 * Point location on google map
                 */
                $('.get_map').click(function (e) {
                    var address = $(PostCodeid).val();
                    geocoder.geocode({'address': address}, function (results, status) {
                        if (status == google.maps.GeocoderStatus.OK) {
                            map.setCenter(results[0].geometry.location);
                            marker.setPosition(results[0].geometry.location);
                            $('.search_addr').val(results[0].formatted_address);
                            $('.search_latitude').val(marker.getPosition().lat());
                            $('.search_longitude').val(marker.getPosition().lng());
                        } else {
                            alert("Geocode was not successful for the following reason: " + status);
                        }
                    });
                    e.preventDefault();
                });

                //Add listener to marker for reverse geocoding
                google.maps.event.addListener(marker, 'drag', function () {
                    geocoder.geocode({'latLng': marker.getPosition()}, function (results, status) {
                        if (status == google.maps.GeocoderStatus.OK) {
                            if (results[0]) {
                                $('.search_addr').val(results[0].formatted_address);
                                $('.search_latitude').val(marker.getPosition().lat());
                                $('.search_longitude').val(marker.getPosition().lng());
                            }
                        }
                    });
                });
            });
    </script>
</body>

</html>
