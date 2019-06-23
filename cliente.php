<?php 
include_once 'lib/nusoap.php';


$componente = $_POST['componente'];
$fecha = $_POST['fecha'];


$ruta = 'http://localhost/tarea';

$cliente = new nusoap_client($ruta."/".$componente.".php",false);

function randomAlpha() {
   
   $rnd = rand(0,100);
   return $rnd/100;
}

$probabilidad = randomAlpha();

$parametros = array('componente'=>$componente, 'probabilidad'=>$probabilidad);

$respuesta = $cliente->call("MiFuncion", $parametros);

echo $respuesta;

?>