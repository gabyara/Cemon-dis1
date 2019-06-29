
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<title>CEMON</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript">
        function Monitorear(componente) {
            var mes = $("#mes").val();
            var ano= $("#ano").val();
            var fecha = mes+'-'+ano;
            $.ajax({
                type: 'POST',
                url:  'https://cemon--dis1.herokuapp.com/cliente.php',
                data: {"componente": componente,"fecha": fecha},
                success: function(data) {
					json_data = JSON.parse(data);
					$("#"+componente).html(json_data.probabilidad)
                    var current_value = $("#current_value").val() * json_data.probabilidad;
                    $("#current_value").val(current_value);
                    $("#Final").html($("#current_value").val());
                },
				error: function(data){
					console.log("Error");
				}
            });
            return "Listo";
        }
	</script>
	<script type="text/javascript">
        function Distribuidor2(componente) {
            var mes = $("#mes").val();
            var ano= $("#ano").val();
            var fecha = mes+'-'+ano;
            $.ajax({
                method: 'POST',
                url:  'https://cemondist2.herokuapp.com/cemon.php',
                data: {"name": componente,"date": fecha},
				dataType: "json",
                success: function(data) {
					switch (componente) {
						case 'Hardware':
							var dis = data.hardware;
							break;
						case 'BD':
							var dis = data.bd;
						break;
						case 'Aplicación':
							var dis = data.aplicacion;
							break;
						case 'Enlace':
							var dis = data.enlace;
						break;
						case 'Router':
							var dis = data.router;
						break;
					}
					$("#"+componente).html(dis)
                    var current_value = $("#current_value").val() * parseFloat(dis);
                    $("#current_value").val(current_value);
                    $("#Final").html($("#current_value").val());
                },
				error: function(data){
					console.log("Error");
				}
            });
            return "Listo";
        }
    </script>
		<script type="text/javascript">
        function Tienda1(componente) {
            var mes = $("#mes").val();
            var ano= $("#ano").val();
            var fecha = ano+'-'+mes;
			console.log(fecha);
			switch (componente) {
				case 'Hardware':
					var dir = "Nodo1";
					break;
				case 'Base de Datos':
					var dir = "Nodo2";
				break;
				case 'Aplicación':
					var dir = "Nodo3";
					break;
				case 'Enlace Internet':
					var dir = "Nodo4";
				break;
				case 'Router Internet':
					var dir = "Nodo5";
				break;
			}
            $.ajax({
                method: 'POST',
                url:  'https://tiendauno-comercio-node.herokuapp.com/'+dir,
                data: {"name": componente,"date": fecha},
				dataType: "json",
                success: function(data) {
					var dis = data.response.value;
					switch (componente) {
						case 'Base de Datos':
							$("#BD").html(dis)
						break;
						case 'Enlace Internet':
							$("#Enlace").html(dis)
						break;
						case 'Router Internet':
							$("#Router").html(dis)
						break;
						default:
							$("#"+componente).html(dis)
						break;
					}
                    var current_value = $("#current_value").val() * parseFloat(dis);
                    $("#current_value").val(current_value);
                    $("#Final").html($("#current_value").val());
                },
				error: function(data){
					console.log("prueba");
				}
            });
            return "Listo";
        }
	</script>
	<script type="text/javascript">
        function Tienda2(componente) {
            var mes = $("#mes").val();
            var ano= $("#ano").val();
            var fecha = mes+'-'+ano;
            $.ajax({
                method: 'GET',
                url:  'https://sgda.herokuapp.com/rs/component',
                data: {"name": componente,"date": fecha},
				dataType: "json",
                success: function(data) {
					var dis = data.disponibility;
					switch (componente) {
						case 'Base de Datos':
							$("#BD").html(dis)
						break;
						case 'Enlace Internet':
							$("#Enlace").html(dis)
						break;
						case 'Router Internet':
							$("#Router").html(dis)
						break;
						default:
							$("#"+componente).html(dis)
						break;
					}
                    var current_value = $("#current_value").val() * parseFloat(dis);
                    $("#current_value").val(current_value);
                    $("#Final").html($("#current_value").val());
				},
				error: function(data){
					console.log("Error");
				}
            });
            return "Listo";
        }
    </script>
	<script type="text/javascript">
        function Banco1(componente) {
            var mes = $("#mes").val();
            var ano= $("#ano").val();
            var fecha = mes+'-'+ano;
            $.ajax({
                method: 'POST',
                url:  'https://banco-1-tarea.herokuapp.com/status',
                data: {"name": componente,"date": fecha},
				dataType: "json",
                success: function(data) {
					var dis = data.value;
					$("#"+componente).html(dis)
					var current_value = $("#current_value").val() * parseFloat(dis);
					$("#current_value").val(current_value);
					$("#Final").html($("#current_value").val());
				},
				error: function(data){
					console.log("Error");
				}
            });
            return "Listo";
        }
	</script>
	<script type="text/javascript">
        function Banco2(componente) {
            var mes = $("#mes").val();
            var ano= $("#ano").val();
            var fecha = mes+'-'+ano;
            $.ajax({
                method: 'POST',
                url:  'https://cemon-banco-2.herokuapp.com/component/'+componente,
                data:  JSON.stringify({'name': componente,'date': fecha}),
				dataType: "json",
				contentType: 'application/json',
                success: function(data) {
					var dis = data.disponibility;
					$("#"+componente).html(dis)
					var current_value = $("#current_value").val() * parseFloat(dis);
					$("#current_value").val(current_value);
					$("#Final").html($("#current_value").val());
				},
				error: function(data){
					console.log("Error");
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
						<a class="navbar-brand" href="index.php"><p>CEMON</p></a>
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
						<p style="text-align: justify;">Seleccione el mes y año en donde desea monitorear la disponibilidad de los servicios de CEMON: <br></p>
						<form action="index.php" method="POST">
							<center>
								<select id="mes" name="mes">
									<?php
			       						for ($i=1; $i<=12; $i++) {
			            					if ($i == date('m'))
			              						echo '<option value="'.$i.'">'.$i.'</option>';
			            					else
			                					echo '<option value="'.$i.'">'.$i.'</option>';
			       						}
		        					?>
								</select>

								<select id="ano" name="ano">
									<?php
			        					for($i=date('o'); $i>=1910; $i--){
			            					if ($i == date('o'))
			               						echo '<option value="'.$i.'">'.$i.'</option>';
			            					else
			                					echo '<option value="'.$i.'">'.$i.'</option>';
										}
									?>
								</select>

								<select id="Entidad" name="Entidad">
									<?php
			               				echo '<option value="Nosotros"> Nuestros servicios </option>';
										echo '<option value="Dis2"> Ditribuidor 2</option>';
										echo '<option value="tien1">Tienda 1</option>';
										echo '<option value="tien2">Tienda 2</option>';
										echo '<option value="ban1">Banco 1</option>';
										echo '<option value="ban2">Banco 2</option>';

		        					?>
								</select>
							</center>
							<br>
								<center><input type="submit" name="monitorear" value="Monitorear"></center><br>
								<?php
									
									if (isset($_POST['monitorear'])) {

										switch ($_POST["Entidad"]) {
											case "Nosotros":
												if(is_numeric($_POST['mes']) && is_numeric($_POST['ano'])){
													$date=$_POST['mes'] .'-'.$_POST['ano'];
													echo '<center><strong>Fecha a consultar: '.$date.'</strong></center><br>';
													include('vista.inc'); 
												}else{
													echo "Escoja una fecha";
												}
											break;
											case "Dis2":
												if(is_numeric($_POST['mes']) && is_numeric($_POST['ano'])){
													echo '<center><strong>Distribuidor 2</strong></center><br>';
													include('dist2.inc'); 
												}else{
													echo "Escoja una fecha";
												}
											break;
											case "tien1":
												if(is_numeric($_POST['mes']) && is_numeric($_POST['ano'])){
													echo '<center><strong>Tienda 1</strong></center><br>';
													include('tien1.inc'); 
												}else{
													echo "Escoja una fecha";
												}
											break;
											case "tien2":
												if(is_numeric($_POST['mes']) && is_numeric($_POST['ano'])){
													echo '<center><strong>Tienda 2</strong></center><br>';
													include('tien2.inc'); 
												}else{
													echo "Escoja una fecha";
												}
												break;
											case "ban1":
												if(is_numeric($_POST['mes']) && is_numeric($_POST['ano'])){
													echo '<center><strong>Banco 1</strong></center><br>';
													include('ban1.inc'); 
												}else{
													echo "Escoja una fecha";
												}
											break;
											case "ban2":
												if(is_numeric($_POST['mes']) && is_numeric($_POST['ano'])){
													echo '<center><strong>Banco 2</strong></center><br>';
													include('ban2.inc'); 
												}else{
													echo "Escoja una fecha";
												}
											break;
											default:
												echo "Escoja una Entidad";
											break;
										}
										
									}
								?>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
