
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<title>Conecciones</title>
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>-->
	<script type="text/javascript" src="./jquery/jquery.3.4.js"></script>
    <script type="text/javascript">
        function Solicitar() {
			var tipo = $("#tipo").val();
			var cod = $("#codigo").val();
			var rif = $("#rif").val();
			var comprador = $("#comprador").val();
			var fecha = $("#fecha").val();
			var direc = $("#direc").val();
			var productos = document.getElementById("productos").value;
			
          	$.ajax({
                type: 'post',
                url:  './cliente.php',
                data: {"tipo":tipo,"cod":cod,"rif":rif,"comprador":comprador,"fecha":fecha,"productos":productos,"direc":direc},
                success: function(data) {
					json_data = JSON.parse(data);
					console.log(json_data);
					$("#fechafin").html(json_data.fechaF)
					$("#costo").html(json_data.costo)
					$("#error").html(json_data.error)
                },
				error: function(data){
					console.log("Error: ", data);
				}
            });
            return "Listo";
		}
	</script>	

</head>
<body>
	<header>
		<div class="navbar navbar-default navbar-static-top ">
			<div class="navbar navbar-default navbar-static-top">
				<div class="container">
					<div class="navbar-header" style=" margin-bottom: 10px;">
						<a class="navbar-brand"><p>Conecciones</p></a>
					</div>
				</div>
			</div>
		</div>	
	</header>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="marco marco2">
					<div class="Contenido">
						<center><?php echo  date("d") ." del " . date("m") . " de " . date("Y");?></center>
						<br>
						<p style="text-align: justify;">Solicitudes<br></p>
						<form action="index.php" method="post">
							<center>
								<h3>Elija el tipo de servicio:</h3>
								<select id="tipo" name="tipo"> <!--Tipo de servicio-->
									<?php
										   echo '<option value="solicitud">Solicitud</option>';
										   echo '<option value="confirmacion">Confirmacion</option>';
		        					?>
								</select>
								<h3>Identificador de la confirmacion (solo si el servicio es de confirmacion, sino dejelo en blanco)</h3>
								<input type="number" id="codigo" name="codigo" value=" "> <!--identificador de la solicitud para la confirmacion-->
								<h3>RIF de la tienda</h3>
								<input type="number" id="rif" name="rif" value="0"> <!--identificador de la tienda-->
								<h3>Identificador del comprador de la tienda</h3>
								<input type="number" id="comprador" name="comprador" value="0"> <!--identificador del comprador de la tienda-->
								<h3>Fecha en que se realiza el servicio</h3>
								<input type="date" id="fecha" name="fecha" value="<?php echo date("Y")."-".date("m")."-".date("d");?>"> <!--fecha de la solicitud-->
								<h3>Direccion del comprador (solo si el servicio es de solicitud, sino dejelo en blanco)</h3>
								<input  id="direc" name="direc" value="Caracas"> <!--Direccion del comprador-->
								<h3>Array de los identificadores de los productos (solo si el servicio es de solicitud, sino dejelo en blanco)</h3>
								<textarea id="productos" name="productos">1</textarea> <!--Array de los productos solicitados-->
								
							</center>
							<br>
							<center><button type="button" onclick="Solicitar()">Solicitar</button></center><br>
						</form>
						<p>Fecha en que se vence la solicitud</p>
						<div id="fechafin"></div>
						<p>Costo del envio</p>
						<div id="costo"></div>
						<div id="error"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
