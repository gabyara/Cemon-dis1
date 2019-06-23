<?php
	include_once 'lib/nusoap.php';
	$servicio = new soap_server();

	$ns = "urn:miserviciowsdl";
	$servicio->configureWSDL("MiPrimerServicioWeb",$ns);
	$servicio->schemaTargetNamespace = $ns;

	$servicio->register("MiFuncion", array('fecha' => 'xsd:string','componente' => 'xsd:string', 'probabilidad' => 'xsd:string'), array('return' => 'xsd:string'), $ns );

	function MiFuncion($fecha, $componente, $probabilidad){

		$resultadoDisponibilidad = $probabilidad;
		$resultado = "La disponibilidad del componente " . $componente . " en la fecha: " . $fecha . " es de: " . $resultadoDisponibilidad;	
		return $resultado;
	
	}

	$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
	$servicio->service(file_get_contents("php://input"));
?>
