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

   $probabilidad = randomAlpha();

   $parametros = array('componente'=>$componente, 'probabilidad'=>$probabilidad);

   $data = $cliente->call("MiFuncion", $parametros);
   
   if($cliente->fault){
      
      $error = array('componente'=>'No respondio', 'probabilidad'=>'Vacio');
      console.log($error);
      echo json_encode($error);
   }

   echo  $data;
   
?>
