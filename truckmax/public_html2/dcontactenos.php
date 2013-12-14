<?php
### Powered By PERUCLICK #####
require "class.phpmailer.php";

$redirect = 'http://www.truckmax.com.pe/enviado.php'; 
$mailtos[]="faviozea@peruclick.com";


$name_boton_enviar="Boton_Enviar";// nombre del boton submit
$dir_tmp= "/home/caza/public_html/tmp_attachment";
$asunto="NUEVO CLIENTE DESDE WEB";
$mail_remitente=$_POST['CONTACTENOS_EMAIL'];
$nombre_remitente=$_POST['CONTACTENOS_NOMBRE'];

if($_POST["$name_boton_enviar"]){
$html="<div style='font-size:12px;font-family:arial;line-height:22px;'>";
foreach($_POST as $clave=>$valor){
if($clave!=$name_boton_enviar){
$html.="<b>$clave</b> : $valor<br>";
}
}

$total_files=count($_FILES);
if($total_files>0){
foreach($_FILES as $clave=>$valor){
$archivo=$dir_tmp."/".$_FILES["$clave"]["name"];
if(@move_uploaded_file($_FILES["$clave"]['tmp_name'],$archivo)){
$files_attachment[]=$archivo;
chmod("$archivo",0777);
}
}
}

$mail = new phpmailer();
$mail->IsSMTP();
$mail->Host = "localhost";
$mail->IsSendmail();
$mail->From = $mail_remitente;
$mail->FromName = $nombre_remitente;
foreach($mailtos as $valor){
$mail->AddAddress($valor);
}
foreach($files_attachment as $valor){
$mail->AddAttachment($valor);
}
$mail->IsHTML(true);

$mail->Subject = $asunto;
$mail->Body = $html;
if(!$mail->Send()){
echo "El mensaje no se pudo enviar<br>";
echo "Error: " . $mail->ErrorInfo;
exit;
}else{
foreach($files_attachment as $valor){
@unlink("$valor");
}

Header("Location: $redirect");
}




}
?>

