<?php 
   include_once 'lib/nusoap.php';
   
   $componente = $_POST['componente'];
   $fecha = $_POST['fecha'];


   $ruta = 'http://localhost/Cemon';

   $cliente = new nusoap_client($ruta."/".$componente.".php?wsdl",true);

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
