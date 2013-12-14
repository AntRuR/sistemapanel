<?php
require_once('Connections/cn.php');
//insertar a base de datos
//	$nom= $_POST["nom"];
//	$empresa= $_POST["empresa"];
//	$telf= $_POST["telf"];
//	$email= $_POST["email"];
//	$comentario= $_POST["coment"];

	$sendTo = "ventas@truckmax.com.pe";
	//$sendTo = "kelicita296@gmail.com";
	$subject = "Contacto TruckMax";
	$sender = $_POST["email"];
	$headers = "From: " . $_POST["nom"];
	$headers .= "<" . $_POST["nom"] . ">\r\n";	
	$headers .= "Reply-To: " . $_POST["email"];
	$headers .= "Bcc:  " . $_POST["email"];
	$message = "***Contacto Form: www.trucknax.com.pe ***\r\n";
	$message .= "Nombre y Apellidos: " . $_POST["nom"] . "\r\n";
	$message .= "Nombre de Empresa: " . $_POST["empresa"] . "\r\n";
	$message .= "Telefono de Contacto: " . $_POST["telf"] . "\r\n";
	$message .= "Email: " . $_POST["email"] . "\r\n";
	$message .= "Comentarios -----------------\r\n";
	$message .= $_POST["coment"]."\r\n";		
	mail($sendTo, $subject, $message, $headers);
	
	
	
	header ("Location:gracias.php"); 
?>