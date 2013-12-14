<?php

$nombre=$_POST["nombre"];
$email=$_POST["email"];
$telefono=$_POST["telefono"];
$direccion=$_POST["direccion"];
$comentario=$_POST["comentario"];
$action=$_POST["action"];

$adminaddress = "info@mecatronicsystems.com";


$siteaddress ="http://www.mecatronicsystems.com";
$sitename = "MECATRONIC SYSTEMS -  ESPECIALISTAS EN MANTENIMIENTOS A MAQUINAS Y EQUIPOS INDUSTRIALES";
$date = date("d/m/Y   H:i:s");
if ($REMOTE_ADDR == "") 
	$ip = "no ip";
 else 
	$ip = getHostByAddr($REMOTE_ADDR);
	


if ($action != ""){

//echo "1";

mail("$adminaddress","CONTACTENOS :: Mecatronic Systems",
"$date\n
Desde la página web, se ha enviado un e-mail con los siguientes datos\n
NOMBRE    : $nombre
EMAIL     : $email
TELEF     : $telefono
CIUDAD    : $direccion\n
MENSAJE   : 
------------------------------------------------------
$comentario


HOST INFO :
------------------------------------------------------
Using: $HTTP_USER_AGENT
Hostname: $ip
IP address: $REMOTE_ADDR","FROM:$adminaddress");

mail("$email","Gracias por visitar $sitename",
"Hola $nombre,\n
Gracias por enviarnos un e-mail. Nosotros
te responderemos lo más rápido posible.
Atentamente,\n$sitename!\n
-----------------------------------------\n
$sitename
$siteaddress","FROM:$adminaddress");

mail("wtavara@prodiserv.com","CONTACTENOS :: Mecatronic Systems",
"$date\n
Desde la página web $siteaddress, se ha enviado un e-mail con los siguientes datos\n
NOMBRE    : $nombre
EMAIL     : $email
TELEF     : $telefono
CIUDAD    : $direccion\n
MENSAJE   : 
------------------------------------------------------
$comentario


HOST INFO :
------------------------------------------------------
Using: $HTTP_USER_AGENT
Hostname: $ip
IP address: $REMOTE_ADDR","FROM:$adminaddress");




$respuesta = "Gracias por escribirnos.";
$send_answer = "_root.popup.mensaje=";
$send_answer .= rawurlencode($respuesta);
echo "$send_answer";

}
?>