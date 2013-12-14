<?php
if(isset($_POST["name"]) && isset($_POST["lastname"]) && isset($_POST["mail"]) && isset($_POST["message"]) ){
    $fecha = date("D-M-y H:i");
	$mymail = "inmobiliaria@nering.net";
	$subject = "Proyecto Torre Linda: BUSCA PROYECTOS A MEDIDA";
	$contenido = $_POST["name"]."\n";
	$contenido .= $_POST["lastname"]."\n\n";
	$contenido .= $_POST["phone"]."\n\n";
	$contenido .= $_POST["message"]."\n\n";
	$header = "From:".$_POST["mail"]."\nReply-To:".$_POST["mail"]."\n";
	$header .= "X-Mailer:PHP/".phpversion()."\n";
	$header .= "Mime-Version: 1.0\n";
	$header .= "Content-Type: text/plain";
	mail($mymail, $subject, utf8_decode($contenido) ,$header);
	echo "&estatus=ok&";
}
?>