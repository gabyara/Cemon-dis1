
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<title>CEMON</title>
	<script src="http://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="jquery/jquery-2.1.4.js"></script>
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
					json_data = JSON.parse(data)
					console.log(json_data.frase);
                    $("#"+componente).html(json_data.frase);
                    var current_value = $("#current_value").val() * json_data.probabilidad;
                    $("#current_value").val(current_value);
                    $("#Final").html($("#current_value").val());
                },
				error: function(data){
					console.log("error");
				}
            });
            return "HOLA";
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
			              						echo '<option value="'.$i.'" selected>'.$i.'</option>';
			            					else
			                					echo '<option value="'.$i.'">'.$i.'</option>';
			       						}
		        					?>
								</select>

								<select id="ano" name="ano">
		        					<?php
			        					for($i=date('o'); $i>=1910; $i--){
			            					if ($i == date('o'))
			               						echo '<option value="'.$i.'" selected>'.$i.'</option>';
			            					else
			                					echo '<option value="'.$i.'">'.$i.'</option>';
		        						}
		     
		        					?>
								</select>
							</center>
							<br>
								<center><input type="submit" name="monitorear" value="Monitorear"></center><br>
								<?php
									if (isset($_POST['monitorear'])) {
										
										$date=$_POST['mes'] .'-'.$_POST['ano'];
										echo '<center><strong>Fecha a consultar: '.$date.'</strong></center><br>';
										include('vista.inc'); 
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
