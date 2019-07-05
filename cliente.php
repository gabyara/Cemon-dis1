<?php 
   header('Access-Control-Allow-Origin: *');
   include_once 'lib/nusoap.php';
   
   $componente = $_POST['componente'];
   $fecha = $_POST['fecha'];


   $ruta = 'https://cem--dis1.herokuapp.com';

   $cliente = new nusoap_client($ruta."/".$componente.".php?wsdl",true);

   $cliente -> setEndpoint($ruta."/".$componente.".php"); 

   function randomAlpha() {
      $rnd = rand(0,100);
      return $rnd/100;
   }
   if($cliente->fault){
      $error = "No respondio";
      $data = json_encode(array('componente'=>$componente, 'probabilidad'=> $error));
   }else{
      $probabilidad = randomAlpha();
      $parametros = array('componente'=>$componente, 'probabilidad'=>$probabilidad);
      $data = $cliente->call("MiFuncion", $parametros);
      $data = json_encode(array('componente'=>$componente, 'probabilidad'=> $error));
   }
   echo  $data;
   
?>
