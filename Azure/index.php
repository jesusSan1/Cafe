<?php
    session_start();
    include("../Conexion/cn.php");
    //Si el usuario no está logeado, lo redirige a inicio de sesion
    if(!isset($_SESSION['idUsuario'])){
        header("Location: ../Cafe/Login.php");
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<head>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="../burbujas.js"></script>
	<title>Analizador de Imagenes</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="Slide Down Box Menu with jQuery and CSS3" />
	<meta name="keywords" content="jquery, css3, sliding, box, menu, cube, navigation, portfolio, thumbnails" />
	<link rel="icon" href="../assets/img/favicon.png" type="image/png" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
	<style>
		body {
			background: #333 url(background.jpg);
			-webkit-background-size: 100% 200%;
			/* Safari 3.0 */
			-moz-background-size: 100% 200%;
			/* Gecko 1.9.2 (Firefox 3.6) */
			-o-background-size: 100% 200%;
			/* Opera 9.5 */
			background-size: 100% 200%;
			/* Gecko 2.0 (Firefox 4.0) and other CSS3-compliant browsers */
			font-family: Arial;
		}

		span.reference {
			position: fixed;
			left: 10px;
			bottom: 10px;
			font-size: 12px;
		}

		span.reference a {
			color: #aaa;
			text-transform: uppercase;
			text-decoration: none;
			text-shadow: 1px 1px 1px #000;
			margin-right: 30px;
		}

		span.reference a:hover {
			color: #ddd;
		}

		ul.sdt_menu {
			margin-top: 150px;
		}

		h1.title {
			text-indent: -9000px;
			background: transparent url(title.png) no-repeat top left;
			width: 633px;
			height: 69px;
		}

		h1 {
			font: normal 28px 'Rochester', cursive;
			text-align: center;
			padding: 5px;
			background-color: #3a3a3b;
			box-shadow: 0 1px 2px #888;
			border: 1px solid #333;
			position: relative;
			top: 0;
			left: 50%;
			width: 160px;
			margin-left: -80px;
			color: #fff;
		}


		#modalContent {
			position: absolute;
			top: 50%;
			left: 50%;
			z-index: 6;
			margin: -2% 0px 0px -150px;
			float: left;
			width: 300px;
			color: #fff;
			line-height: 22px;
			padding: 15px;
			border-radius: 5px;
			background: #00A6B6;
			border: 1px solid #fff;
			box-shadow: 0px 2px 1px #999;
		}

		#modal {
			position: fixed;
			top: 0px;
			left: 0px;
			z-index: 5;
			float: left;
			width: 100%;
			height: 100%;
			background: rgba(0, 0, 0, 0.2);
			display: none;
			opacity: 0;
		}

		#modal>a {
			position: fixed;
			top: 0px;
			left: 0px;
			z-index: 1;
			float: left;
			width: 100%;
			height: 100%;
		}

		:target {
			display: block !important;
			opacity: 1 !important;
		}

		#modalContent>a {
			position: absolute;
			top: -4px;
			right: -4px;
			color: #00A6B6;
			border-radius: 2px;
			background: #fff;
			padding: 4px;
		}
	</style>
</head>

<body>
	<script type="text/javascript">
		function processImage() {
			// **********************************************
			// **_ Update or verify the following values. _*_
			// _*********************************************

			var subscriptionKey = document.getElementById("subscriptionKey").value;
			var endpoint = document.getElementById("endpointUrl").value;

			var uriBase = endpoint;

			// Request parameters.
			/*      var params = {
			 "visualFeatures": "tagId,probability,tagName",
			  "details": " Si tu planta ",
				"language": "en",
			};*/

			// Display the image.
			var sourceImageUrl = document.getElementById("inputImage").value;
			document.querySelector("#sourceImage").src = sourceImageUrl;

			// Make the REST API call.
			$.ajax({
				// url: uriBase + "?" + $.param(params),
				url: uriBase,

				// Request headers.
				beforeSend: function (xhrObj) {
					xhrObj.setRequestHeader("Content-Type", "application/json");
					xhrObj.setRequestHeader(
						"Prediction-Key", subscriptionKey);
				},

				type: "POST",

				// Request body.
				data: '{"url": ' + '"' + sourceImageUrl + '"}',
			})

				.done(function (data) {
					// Show formatted JSON on webpage.
					$("#responseTextArea").val(JSON.stringify(data, null, 2));
				})

				.fail(function (jqXHR, textStatus, errorThrown) {
					// Display error message.
					var errorString = (errorThrown === "") ? "Error. " :
						errorThrown + " (" + jqXHR.status + "): ";
					errorString += (jqXHR.responseText === "") ? "" :
						jQuery.parseJSON(jqXHR.responseText).message;
					alert(errorString);
				});
		};
	</script>
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

		</br>
		<h1 style="color: azure; text-align: center;">Analiza tu imagen del cafe:</h1>
		</br>
		<form>
			<fieldset>
				<legend style="color: beige;">Dato Escencial</legend>
				<p>
				<p>
					<label Style="color: beige; display:none;" for="taste_2">Subscription key:</label>
					<input Style="background: transparent; color: white;display:none;" readonly=»readonly» margin
						type="text" name="subscriptionKey" id="subscriptionKey"
						value="f0259d048f4d413ab16187f68df2e0e1" />

				</p>
				</p>
				<p>
					<label Style="color: beige;display:none;" for="size_2">Endpoint URL:</label>
					<input Style="background: transparent; color: white;display:none;" readonly=»readonly» type="text"
						name="endpointUrl" id="endpointUrl"
						value="https://customresourse.cognitiveservices.azure.com/customvision/v3.0/Prediction/2a5dd742-3340-4f24-af73-6c3f436aab8f/classify/iterations/Iteration3/url" />

				</p>
				<p>
				<div class="form-group">
					<div class="col-sm-3">
						<label Style="color: beige;" for="size_2">Inserte la URL de la imagen: </label>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-4">
						<input type="text" name="inputImage" id="inputImage" value=" " class="form-control" />

					</div>
				</div>

				</p>
			</fieldset>
		</form>

		<br><br>

		<div class="form-group">
			<div class="col-sm-3">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
					Instrucciones
				</button>
			</div>

			<div class="form-group">
				<div class="col-sm-3">
					<button class="btn btn-primary" onclick="processImage()">Analizar imagen</button>
				</div>
			</div>
			<!-- La modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
				aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Instrucciones</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							Ingrese la URL de la imagen que desea analizar, luego haga clic en el boton denominado
							analizar
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
						</div>
					</div>
				</div>
			</div>

			</br></br></br></br>

<!-- 			<div class="form-group">
				<div class="col-sm-3">
					<div id="wrapper" style="width:1020px; display:table;">
						<div Style=" margin-left: 30px; color: beige;" id="jsonOutput" style="width:600px; display:table-cell;">
							Datos Generados
						</div>
						<div Style=" margin-left: 30px; color: black;" id="jsonOutput" style="width:600px; display:table-cell;">
							<br><br>
							<textarea id="responseTextArea" class="UIInput" style="width:350px; height:200px;"></textarea>
						</div>
				</div>
			</div>
		</div> -->
<!-- 		<div class="col-md-12">
			<div id="imageDiv" style="color:beige; width:400px; display:table-cell; text-decoration: solid;">
				Cargar Imagen
				<br><br>
				<img id="sourceImage" width="400" />
		</div>
	</div> -->


		<div class="col-12 col-md-4">
			<div Style=" margin-left: 30px; color: beige;" id="jsonOutput" style="width:600px; display:table-cell;">
				Datos Generados
			</div>
			<div Style=" margin-left: 30px; color: black;" id="jsonOutput" style="width:600px; display:table-cell;">
				<br><br>
				<textarea id="responseTextArea" class="UIInput" style="width:350px; height:200px;"></textarea>
			</div>
		</div>
		<div class="col-6 col-md-4">
<!-- 			<div id="imageDiv" style="color:beige; width:400px; margin-left: 30px;display:table-cell; text-decoration: solid;">
 -->			<div Style=" margin-left: 30px; color: beige;" id="imageDiv" style="width:600px; display:table-cell;">

				Cargar Imagen
				<br><br>
				<img id="sourceImage" width="350px" height="200px"/>
	
			</div>
		</div>

			<script>
				focusMethod = function getFocus() {
					document.getElementById("inputImage").focus();
				}
			</script>
</body>

</html>