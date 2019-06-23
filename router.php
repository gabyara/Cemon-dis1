<?php
	include_once 'lib/nusoap.php';
	$servicio = new soap_server();

	$ns = "urn:miserviciowsdl";
	$servicio->configureWSDL("MiPrimerServicioWeb",$ns);
	$servicio->schemaTargetNamespace = $ns;

	$servicio->register("MiFuncion", array('componente' => 'xsd:string', 'probabilidad' => 'xsd:string'), array('return' => 'xsd:string'), $ns );

	function MiFuncion($componente, $probabilidad){

		$resultadoDisponibilidad = $probabilidad;
		$resultado = "La disponibilidad del componente " . $componente . " es de: " . $resultadoDisponibilidad;	
		$respuesta = array(
			'frase' => $resultado,
			'probabilidad' => $resultadoDisponibilidad
		);

		return json_encode($respuesta);
	
	}

	$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
	$servicio->service(file_get_contents("php://input"));
?>
