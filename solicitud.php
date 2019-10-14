<?php

include_once 'lib/nusoap.php';
$servicio = new soap_server();

$ns = "urn:miserviciowsdl";
$servicio->configureWSDL("MiPrimerServicioWeb",$ns);
$servicio->schemaTargetNamespace = $ns;

$servicio->register("MiFuncion", array('tipo' => 'xsd:string','rif' => 'xsd:int','comprador' => 'xsd:int','fecha' => 'xsd:date','productos' => 'xsd:string','direc' => 'xsd:string'), array('return' => 'xsd:string'), $ns );

function MiFuncion($tipo,$rif,$comprador,$fecha,$productos,$direc){
	$nuevafecha = strtotime('+30 day',strtotime($fecha));
	$nuevafecha = date('Y-m-d' , $nuevafecha);
	switch($dire){
		case "Caracas":
			$costo = "10";
		break;
	}
	$respuesta = array(
		'tipo' => $tipo,
		'ID' => '0',  //Identificador de la solicitud
		'rif' => $rif,
		'comprador' => $comprador,
		'fecha' => $fecha,
		'fechaF' => $nuevafecha,
		'costo' => $costo,
		'productos'=> $productos,
		'direc' => $direc,
		'Estatus' => "Entrante",
		'error' => ' '
	);
	
	return json_encode($respuesta);
 
}

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$servicio->service(file_get_contents("php://input"));


?>
