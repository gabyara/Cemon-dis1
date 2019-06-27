<?php 
   header('Access-Control-Allow-Origin: *');
   include_once 'lib/nusoap.php';
   
   $componente = $_POST['componente'];
   $fecha = $_POST['fecha'];


   $ruta = 'https://cemon--dis1.herokuapp.com';

   $cliente = new nusoap_client($ruta."/".$componente.".php?wsdl",true);
   $client -> setEndpoint($ruta."/".$componente.".php); 

   function randomAlpha() {
      $rnd = rand(0,100);
      return $rnd/100;
   }

   $probabilidad = randomAlpha();

   $parametros = array('componente'=>$componente, 'probabilidad'=>$probabilidad);

   $data = $cliente->call("MiFuncion", $parametros);
   $err = $cliente -> getError();
   if($err){echo "Error".$err;}
   
   echo  $data;
   
?>
