<?php
session_start();
include("../Conexion/cn.php");
include('../Layout/scripts.php');
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

    <link rel="icon" href="../assets/img/favicon.png" type="image/png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
        crossorigin="anonymous"></script>

    <!-- Calendario -->
    <script src="fullcalendar/lib/jquery.min.js"></script>
    <script src="fullcalendar/lib/moment.min.js"></script>
    <link rel="stylesheet" href="fullcalendar/fullcalendar.min.css">
    <script src="fullcalendar/fullcalendar.min.js"></script>
    <script src="fullcalendar/locale/es.js"></script>

    <!-- Reloj -->
    <script src="clockpicker/dist/bootstrap-clockpicker.js"></script>
    <link rel="stylesheet" href="clockpicker/dist/bootstrap-clockpicker.css">

    <style>
        .fc th{
            padding: 10px 0px;
            virtical-align: middle;
            background: #f2f2f2;
        }
    </style>
</head>

<body>
    <a class="btn btn-primary" href="../index.html" role="button">Regresar Inicio</a>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-7"> <br> <br>
                <div id="CalendarioWeb"></div>
            </div>
            <div class="col"></div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#CalendarioWeb').fullCalendar({
                header: {
                    left: 'today,prev,next',
                    center: 'title',
                    right: 'month,basicWeek,basicDay,agendaWeek,agendaDay'
                },
                dayClick: function (date, jesEvent, view) {
                    $('#btnAgregar').prop('disabled', false);
                    $('#btnModificar').prop('disabled', true);
                    $('#btnEliminar').prop('disabled', true);
                    limpiarFormulario();
                    $('#txtFecha').val(date.format());
                    $('#ModalEventos').modal('show');
                },
                events: 'eventos.php',
                eventClick: function (calEvent, jsEvent, view) {
                    $('#btnAgregar').prop('disabled', true);
                    $('#btnModificar').prop('disabled', false);
                    $('#btnEliminar').prop('disabled', false);
                    
                    // H2
                    $('#tituloEvento').html(calEvent.title);
                    //Mostrar la informacion en los inputs
                    $('#txtDescripcion').val(calEvent.descripcion);
                    $('#txtId').val(calEvent.id);
                    $('#txtTitulo').val(calEvent.title);
                    $('#txtColor').val(calEvent.color);
                    fechaHora = calEvent.start._i.split(' ');
                    $('#txtFecha').val(fechaHora[0]);
                    $('#txtHora').val(fechaHora[1]);
                    $('#ModalEventos').modal('show');
                },
                editable: true,
                eventDrop: function (calEvent) {
                    $('#txtId').val(calEvent.id);
                    $('#txtTitulo').val(calEvent.title);
                    $('#txtColor').val(calEvent.color);
                    $('#txtDescripcion').val(calEvent.descripcion);

                    var fechaHora = calEvent.start.format().split('T');
                    $('#txtFecha').val(fechaHora[0]);
                    $('#txtHora').val(fechaHora[1]);
                    recolectarDatosGUI()
                    enviarInformacion('modificar', nuevoEvento, true);
                }
            });
        });
    </script>
    <!-- Modal para CRUD -->
    <div class="modal fade" id="ModalEventos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tituloEvento"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <input type="hidden" name="txtId" id="txtId">
                    <input type="hidden" name="txtFecha" id="txtFecha">
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label>Titulo</label>
                            <input type="text" name="txtTitulo" id="txtTitulo" class="form-control" placeholder="Titulo del evento">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Hora del evento</label>
                            <div class="input-group clockpicker" data-autoclose="true">
                                <input type="text" name="txtHora" id="txtHora" value="10:30" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Descripcion</label>
                        <textarea name="txtDescripcion" id="txtDescripcion" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Color</label>
                        <input type="color" name="txtColor" id="txtColor" value="ff0000" class="form-control"
                            style="height:36px">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" id="btnAgregar" class="btn btn-success">Agregar</button>
                    <button type="button" id="btnModificar" class="btn btn-warning">Modificar</button>
                    <button type="button" id="btnEliminar" class="btn btn-danger">Borrar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        var nuevoEvento;
        $('#btnAgregar').click(function () {
            recolectarDatosGUI()
            enviarInformacion('agregar', nuevoEvento);
        });
        $('#btnEliminar').click(function () {
            recolectarDatosGUI()
            enviarInformacion('eliminar', nuevoEvento);
        });
        $('#btnModificar').click(function () {
            recolectarDatosGUI()
            enviarInformacion('modificar', nuevoEvento);
        });
        function recolectarDatosGUI() {
            nuevoEvento = {
                id: $('#txtId').val(),
                title: $('#txtTitulo').val(),
                start: $('#txtFecha').val() + ' ' + $('#txtHora').val(),
                color: $('#txtColor').val(),
                descripcion: $('#txtDescripcion').val(),
                textColor: '#ffffff',
                end: $('#txtFecha').val() + ' ' + $('#txtHora').val()
            };
        }
        function enviarInformacion(accion, objEvento, modal) {
            $.ajax({
                type: 'POST',
                url: 'eventos.php?accion=' + accion,
                data: objEvento,
                success: function (msg) {
                    if (msg) {
                        $('#CalendarioWeb').fullCalendar('refetchEvents');
                        if (!modal) {
                            $('#ModalEventos').modal('toggle');
                        }
                    }
                },
                error: function () {
                    alert('Hay un error ..');
                }
            });
        }
        $('.clockpicker').clockpicker();
        function limpiarFormulario(){
            $('#txtId').val('');
            $('#txtTitulo').val('');
            $('#txtColor').val('');
            $('#txtDescripcion').val('');
        }
    </script>
</body>

</html>