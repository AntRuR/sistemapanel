<?php

error_reporting(0);

extract($_POST);


$adminaddress = "contacto@temanejo.com.pe";

$siteaddress ="http://www.temanejo.com.pe";
$sitename = "TE MANEJO :: Conducimos por tí";
$date = date("d/m/Y   H:i:s");


//echo "1";

//if ($action != ""){


mail("$adminaddress","CONTACTENOS :: TE MANEJO",
"$date\n
Desde la página web, se ha enviado un e-mail con los siguientes datos\n
NOMBRE Y APELLIDOS    : $nombre
CIUAD Y PAIS DE PROCEDENCIA    : $ciudad
FECHA DEL SERVICIO     : $fecha
HORA DEL SERVICIO : $hora_servicio
LUGAR DE RECOJO : $lugar_servicio
DIRECCIÓN DE RECOJO DE LIMA : $direccion_recojo
DIRECCIÓN DE DESTINO EN LIMA : $direccion_destino
TELÉFONO : $telefono
EMAIL : $email
AEROLÍNEA Y N° DE VUELO : $vuelo
PASAJEROS : $pasajeros
TIPO_MOVILIDAD : $tipo_movilidad\n
COMENTARIO   : 
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
Atentamente,\nSandra Meijer de Krumdiek\nGerente General\n
TELEF.: 224-3400\n  CEL.: 99727-0230\nNEXTEL: (98) 134*2674\nreservas@temanejo.com.pe\n
-----------------------------------------\n
$sitename
$siteaddress","FROM:$adminaddress");

mail("wtavara@yahoo.es","CONTACTENOS :: TE MANEJO",
"$date\n
Desde la página web $siteaddress, se ha enviado un e-mail con los siguientes datos\n
NOMBRE Y APELLIDOS    : $nombre
CIUAD Y PAIS DE PROCEDENCIA    : $ciudad
FECHA DEL SERVICIO     : $fecha
HORA DEL SERVICIO : $hora_servicio
LUGAR DE RECOJO : $lugar_servicio
DIRECCIÓN DE RECOJO DE LIMA : $direccion_recojo
DIRECCIÓN DE DESTINO EN LIMA : $direccion_destino
TELÉFONO : $telefono
EMAIL : $email
AEROLÍNEA Y N° DE VUELO : $vuelo
PASAJEROS : $pasajeros
TIPO_MOVILIDAD : $tipo_movilidad\n
COMENTARIO   : 
------------------------------------------------------
$comentario


HOST INFO :
------------------------------------------------------
Using: $HTTP_USER_AGENT
Hostname: $ip
IP address: $REMOTE_ADDR","FROM:$adminaddress");


mail("reservas@temanejo.com.pe","CONTACTENOS :: TE MANEJO",
"$date\n
Desde la página web $siteaddress, se ha enviado un e-mail con los siguientes datos\n
NOMBRE Y APELLIDOS    : $nombre
CIUAD Y PAIS DE PROCEDENCIA    : $ciudad
FECHA DEL SERVICIO     : $fecha
HORA DEL SERVICIO : $hora_servicio
LUGAR DE RECOJO : $lugar_servicio
DIRECCIÓN DE RECOJO DE LIMA : $direccion_recojo
DIRECCIÓN DE DESTINO EN LIMA : $direccion_destino
TELÉFONO : $telefono
EMAIL : $email
AEROLÍNEA Y N° DE VUELO : $vuelo
PASAJEROS : $pasajeros
TIPO_MOVILIDAD : $tipo_movilidad\n
COMENTARIO   : 
------------------------------------------------------
$comentario


HOST INFO :
------------------------------------------------------
Using: $HTTP_USER_AGENT
Hostname: $ip
IP address: $REMOTE_ADDR","FROM:$adminaddress");



mail("sandrameijer@meijereventos.com","CONTACTENOS :: TE MANEJO",
"$date\n
Desde la página web $siteaddress, se ha enviado un e-mail con los siguientes datos\n
Desde la página web, se ha enviado un e-mail con los siguientes datos\n
NOMBRE Y APELLIDOS    : $nombre
CIUAD Y PAIS DE PROCEDENCIA    : $ciudad
FECHA DEL SERVICIO     : $fecha
HORA DEL SERVICIO : $hora_servicio
LUGAR DE RECOJO : $lugar_servicio
DIRECCIÓN DE RECOJO DE LIMA : $direccion_recojo
DIRECCIÓN DE DESTINO EN LIMA : $direccion_destino
TELÉFONO : $telefono
EMAIL : $email
AEROLÍNEA Y N° DE VUELO : $vuelo
PASAJEROS : $pasajeros
TIPO_MOVILIDAD : $tipo_movilidad\n
COMENTARIO   : 
------------------------------------------------------
$comentario


HOST INFO :
------------------------------------------------------
Using: $HTTP_USER_AGENT
Hostname: $ip
IP address: $REMOTE_ADDR","FROM:$adminaddress");

echo json_encode(array(
					't'=>'exito'
					,'u'=>''									
					,'m'=>"Gracias por escribirnos"
					,'n'=>'registro'									
					));	
//}
?>