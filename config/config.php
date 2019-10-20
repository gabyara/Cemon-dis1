<?php
class Clients_Staff{
	var $id;
	var $id_profile;
	var $tid;
	var $numsolicitudes;
	var $email;
	var $pass;
	var $address;
	var $city;
	var $state;
	var $phonenumber;
	var $fecha;
	var $status;
	var $empresa;
	var $departamento;
	}
class Factura{
	var $id;
	var $userid;
	var $subject;
	var $message;
	var $datee;
	var $too;
	var $cc;
	var $bcc;	
	}
class Novedades{
	var $id;
	var $userid;
	var $description;
	var $datee;
	var $img;
	var $title;
	var $status;	
	}
class Tickets{
	var $id;
	var $tid;
	var $userid;
	var $facturaid;
	var $replyingadmin;
	var $did;
	var $empresa;
	var $email;
	var $DirDestino;
	var $PesoPaquete;
	var $datee;
	var $title;
	var $message;
	var $DirOrigen;
	var $precio;
	var $ruta;
	var $status;
	var $total;
	var $count1;
	var $count;
	var $count3;	
	}
class Persistencia{
	function LoginUser($izuzu,$pass,$profile){
		$Clients_Staff = new Clients_Staff();
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl("SELECT * FROM clients_staff WHERE email='$izuzu' AND pass='$pass' AND id_profile = ".$profile."");
		$Clients_Staff->id = $row['id'];
		$Clients_Staff->id_profile = $row['id_profile'];
		$Clients_Staff->tid = $row['tid'];
		$Clients_Staff->numsolicitudes = $row['numsolicitudes'];
		$Clients_Staff->pass = $row['pass'];
		$Clients_Staff->email = $row['email'];
		$Clients_Staff->address = $row['address'];		
		$Clients_Staff->city = $row['city'];
		$Clients_Staff->state = $row['state'];
		$Clients_Staff->phonenumber = $row['phonenumber'];
		$Clients_Staff->datee = $row['fecha'];
		$Clients_Staff->status = $row['status'];
		$Clients_Staff->empresa = $row['empresa'];
		$Clients_Staff->departamento = $row['departamento'];
		return $Clients_Staff;
		}
	function LoginUserAdmin($izuzu,$pass){
		$Clients_Staff = new Clients_Staff();
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl("SELECT * FROM clients_staff WHERE email='$izuzu' AND pass='$pass'");
		$Clients_Staff->id = $row['id'];
		$Clients_Staff->id_profile = $row['id_profile'];
		$Clients_Staff->rif = $row['rif'];
		$Clients_Staff->numsolicitudes = $row['numsolicitudes'];
		$Clients_Staff->pass = $row['pass'];
		$Clients_Staff->email = $row['email'];
		$Clients_Staff->address = $row['address'];		
		$Clients_Staff->city = $row['city'];
		$Clients_Staff->state = $row['state'];
		$Clients_Staff->phonenumber = $row['phonenumber'];
		$Clients_Staff->datee = $row['fecha'];
		$Clients_Staff->status = $row['status'];
		$Clients_Staff->empresa = $row['empresa'];
		$Clients_Staff->departamento = $row['departamento'];
		return $Clients_Staff;
		}
	function VerifyEmail($izuzu,$profile){
		$Clients_Staff = new Clients_Staff();
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl("SELECT * FROM clients_staff WHERE email='$izuzu' AND id_profile = ".$profile."");
		$Clients_Staff->id = $row['id'];
		$Clients_Staff->id_profile = $row['id_profile'];
		$Clients_Staff->tid = $row['tid'];
		$Clients_Staff->numsolicitudes = $row['numsolicitudes'];
		$Clients_Staff->pass = $row['pass'];
		$Clients_Staff->email = $row['email'];
		$Clients_Staff->address = $row['address'];		
		$Clients_Staff->city = $row['city'];
		$Clients_Staff->state = $row['state'];
		$Clients_Staff->phonenumber = $row['phonenumber'];
		$Clients_Staff->datee = $row['fecha'];
		$Clients_Staff->status = $row['status'];
		$Clients_Staff->empresa = $row['empresa'];
		$Clients_Staff->departamento = $row['departamento'];
		return $Clients_Staff;
		}
	function VerifyEmailAdmin($izuzu){
		$Clients_Staff = new Clients_Staff();
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl("SELECT * FROM clients_staff WHERE email='$izuzu'");
		$Clients_Staff->id = $row['id'];
		$Clients_Staff->id_profile = $row['id_profile'];
		$Clients_Staff->tid = $row['tid'];
		$Clients_Staff->numsolicitudes = $row['numsolicitudes'];
		$Clients_Staff->pass = $row['pass'];
		$Clients_Staff->email = $row['email'];
		$Clients_Staff->address = $row['address'];		
		$Clients_Staff->city = $row['city'];
		$Clients_Staff->state = $row['state'];
		$Clients_Staff->phonenumber = $row['phonenumber'];
		$Clients_Staff->datee = $row['fecha'];
		$Clients_Staff->status = $row['status'];
		$Clients_Staff->empresa = $row['empresa'];
		$Clients_Staff->departamento = $row['departamento'];
		return $Clients_Staff;
		}
	
	function ClientStaffID($Id){
		$Clients_Staff = new Clients_Staff();
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl('SELECT * FROM clients_staff WHERE id = '.$Id.'');
		$Clients_Staff->id = $row['id'];
		$Clients_Staff->id_profile = $row['id_profile'];
		$Clients_Staff->rif = $row['rif'];
		$Clients_Staff->numsolicitudes = $row['numsolicitudes'];
		$Clients_Staff->email = $row['email'];
		$Clients_Staff->pass = $row['pass'];
		$Clients_Staff->address = $row['address'];
		$Clients_Staff->city = $row['city'];
		$Clients_Staff->state = $row['state'];
		$Clients_Staff->phonenumber = $row['phonenumber'];
		$Clients_Staff->fecha = $row['fecha'];
		$Clients_Staff->status = $row['status'];
		$Clients_Staff->empresa = $row['empresa'];
		$Clients_Staff->departamento = $row['departamento'];
		return $Clients_Staff;
		}
	function ClientStaffALL($Profile){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl2('SELECT *, TIMESTAMPDIFF(YEAR, fecha, now()) as _year, TIMESTAMPDIFF(MONTH, fecha, now()) % 12 as _month, FLOOR(TIMESTAMPDIFF(DAY, fecha, now()) % 30.4375 ) as _day FROM clients_staff WHERE id_profile = '.$Profile.'');
		return $row;
		}
	function NovedadesALL(){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl2('SELECT * FROM novedades');
		return $row;
		}
	function NovedadesALLStatus($status){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl2('SELECT * FROM novedades WHERE status = '.$status.'');
		return $row;
		}
	function NovedadesLIMIT($lim,$nroLotes,$status){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl2('SELECT * FROM novedades WHERE status = '.$status.' LIMIT '.$lim.', '.$nroLotes.'');
		return $row;
		}
	function NovedadesID($Id){
		$Novedades = new Novedades();
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl('SELECT * FROM novedades WHERE id = '.$Id.'');
		$Novedades->id = $row['id'];
		$Novedades->userid = $row['userid'];
		$Novedades->description = $row['description'];
		$Novedades->datee = $row['date'];
		$Novedades->img = $row['img'];
		$Novedades->title = $row['title'];
		$Novedades->status = $row['status'];
		return $Novedades;
		}
	function TicketsALLStatus($status,$userid){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl2('SELECT * FROM tickets WHERE status = '.$status.' and userid = '.$userid.' GROUP BY tid');
		return $row;
		}
	function TicketsALL($userid){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl2('SELECT * FROM tickets WHERE userid = '.$userid.' GROUP BY tid ORDER BY status ASC');
		return $row;
		}
	function TicketsCOUNTAR($status1,$status2){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl2('SELECT * FROM tickets WHERE status = '.$status1.' OR status = '.$status2.' GROUP BY tid');
		return $row;
		}
	function TicketsCOUNT($status,$userid){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl2('SELECT * FROM tickets WHERE status = '.$status.' AND userid = '.$userid.' GROUP BY tid');
		return $row;
		}
	function TicketsALLStatus1($status){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl2('SELECT * FROM tickets WHERE status = '.$status.' GROUP BY tid');
		return $row;
		}
	function TicketsALLStatus2($status1,$status2){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl2('SELECT * FROM tickets WHERE status = '.$status1.' OR status = '.$status2.' GROUP BY tid');
		return $row;
		}
	function TicketsALLTID($tid){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl2('SELECT * FROM tickets WHERE tid = '.$tid.' ORDER BY id DESC');
		return $row;
		}
	function TicketsTID($TId){
		$Tickets = new Tickets();
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl('SELECT * FROM tickets WHERE tid = '.$TId.'');
		$Tickets->id = $row['id'];
		$Tickets->tid = $row['tid'];
		$Tickets->userid = $row['userid'];
		$Tickets->facturaid = $row['facturaid'];
		$Tickets->replyingadmin = $row['replyingadmin'];
		$Tickets->did = $row['did'];
		$Tickets->empresa = $row['empresa'];
		$Tickets->email = $row['email'];
		$Tickets->DirDestino = $row['DirDestino'];
		$Tickets->PesoPaquete = $row['PesoPaquete'];
		$Tickets->datee = $row['date'];
		$Tickets->title = $row['title'];
		$Tickets->message = $row['message'];
		$Tickets->DirOrigen = $row['DirOrigen'];
		$Tickets->precio = $row['precio'];
		$Tickets->ruta = $row['ruta'];
		$Tickets->status = $row['status'];
		return $Tickets;
		}
	function FacturaClientALL($userid){
		$Factura = new Factura();
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl2('SELECT * FROM factura WHERE userid = '.$userid.'');
		return $row;
		}
	function FacturaClientID($id){
		$Factura = new Factura();
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl('SELECT * FROM factura WHERE id = '.$id.'');
		$Factura->id = $row['id'];
		$Factura->userid = $row['userid'];
		$Factura->subject = $row['subject'];
		$Factura->message = $row['message'];
		$Factura->datee = $row['datee'];
		$Factura->too = $row['too'];
		$Factura->cc = $row['cc'];
		$Factura->bcc = $row['bcc'];
		return $Factura;
		}
	
	function GuardarClients_Staff($Clients_Staff){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl("INSERT INTO clients_staff (id_profile,tid,numsolicitudes,email,pass,empresa,departamento,address,city,state,phonenumber,fecha)
		VALUES(
		'".$Clients_Staff->id_profile."',
		'".$Clients_Staff->tid."',
		'".$Clients_Staff->numsolicitudes."',
		'".$Clients_Staff->email."',
		'".$Clients_Staff->pass."',
		'".$Clients_Staff->empresa."',
		'".$Clients_Staff->departamento."',
		'".$Clients_Staff->address."',
		'".$Clients_Staff->city."',
		'".$Clients_Staff->state."',
		'".$Clients_Staff->phonenumber."',
		'".date('Y-m-d')."')");
		return $Clients_Staff;
		}
	function GuardarNovedades($Novedades){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl("INSERT INTO novedades (userid,description,date,img,title)
		VALUES(
		'".$Novedades->userid."',
		'".$Novedades->description."',
		'".date('Y-m-d')."',
		'".$Novedades->img."',
		'".$Novedades->title."')");
		return $Novedades;
		}
	function GuardarTickets($Tickets){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl("INSERT INTO tickets (tid,userid,replyingadmin,did,rif,email,date,title,message)
		VALUES(
		'".$Tickets->tid."',
		'".$Tickets->userid."',
		'".$Tickets->replyingadmin."',
		'".$Tickets->did."',
		'".$Tickets->rif."',
		'".$Tickets->email."',
		'".date('Y-m-d H:m:s')."',
		'".$Tickets->title."',
		'".$Tickets->message."')");
		return $Tickets;
		}
	function GuardarTicketsReply($Tickets){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl("INSERT INTO tickets (tid,userid,replyingadmin,did,empresa,email,date,title,message,status)
		VALUES(
		'".$Tickets->tid."',
		'".$Tickets->userid."',
		'".$Tickets->replyingadmin."',
		'".$Tickets->did."',
		'".$Tickets->empresa."',
		'".$Tickets->email."',
		'".date('Y-m-d H:m:s')."',
		'".$Tickets->title."',
		'".$Tickets->message."',
		'".$Tickets->status."')");
		return $Tickets;
		}
	function GuardarFactura($Factura){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl("INSERT INTO factura (userid,subject,message,datee,too,cc,bcc)
		VALUES(
		'".$Factura->userid."',
		'".$Factura->subject."',
		'".$Factura->message."',
		'".date('Y-m-d H:m:s')."',
		'".$Factura->too."',
		'".$Factura->cc."',
		'".$Factura->bcc."')");
		return $Factura;
		}
	
	function DeletClientStaff($ClientStaff){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl2("DELETE FROM clients_staff WHERE id = '$ClientStaff'");
		return $ClientStaff;
	}
	function DeletNovedad($Novedad){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl2("DELETE FROM novedades WHERE id = '$Novedad'");
		return $Novedad;
	}
	
	function ModificarClientStaff($ModifClientStaff){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl2("UPDATE clients_staff SET
		tid = '".$ModifClientStaff->tid."',
		numsolicitudes = '".$ModifClientStaff->numsolicitudes."',
		pass = '".$ModifClientStaff->pass."',
		empresa = '".$ModifClientStaff->empresa."',
		departamento = '".$ModifClientStaff->departamento."',
		address = '".$ModifClientStaff->address."',
		city = '".$ModifClientStaff->city."',
		state = '".$ModifClientStaff->state."',
		phonenumber = '".$ModifClientStaff->phonenumber."' WHERE id  = '".$ModifClientStaff->id."'");
		return $ModifClientStaff;
	}
	function ModificarClientStaffStatus($ModifClientStaffStatus){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl2("UPDATE clients_staff SET
		status = '".$ModifClientStaffStatus->status."' WHERE id  = '".$ModifClientStaffStatus->id."'");
		return $ModifClientStaffStatus;
	}
	function ModificarNovedadStatus($ModifNovedadStatus){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl2("UPDATE novedades SET
		status = '".$ModifNovedadStatus->status."' WHERE id  = '".$ModifNovedadStatus->id."'");
		return $ModifNovedadStatus;
	}
	function ModificarNovedad($ModifNovedad){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl2("UPDATE novedades SET
		description = '".$ModifNovedad->description."',
		img = '".$ModifNovedad->img."',
		title = '".$ModifNovedad->title."' WHERE id  = '".$ModifNovedad->id."'");
		return $ModifNovedad;
	}
	function ModificarTicketStatus($ModifTicketStatus){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl2("UPDATE tickets SET
		status = '".$ModifTicketStatus->status."' WHERE tid  = '".$ModifTicketStatus->tid."'");
		return $ModifTicketStatus;
	}
	function ModificarPass($ModifPass){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl2("UPDATE clients_staff SET
		pass = '".$ModifPass->pass."' WHERE id  = '".$ModifPass->id."'");
		return $ModifPass;
	}
	function MaxValorClientStaff(){
		$MaxValorClientStaff = new Clients_Staff();
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl("SELECT MAX(id) as VMayor FROM clients_staff");
		$MaxValorClientStaff->id = $row["VMayor"];
		return $MaxValorClientStaff;
		}
		
	}

?>