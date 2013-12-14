<?php
session_start(); 
require_once('Connections/cn.php');
mysql_select_db($database_cn, $cn);

$ls_nombre  = $_POST["login"];


$ls_html = '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style type="text/css">
<!--
.Estilo4 {font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #333333;
}
.Estilo5 {
	color: #FFFFFF;
	font-weight: bold;
	font-size: 14px;
}
-->
</style>
</head>

<body>
<table width="500" border="1" align="center" cellpadding="0" cellspacing="0" class="Estilo4">
  <tr bgcolor="#999999">
    <td height="35" bgcolor="#FF9900"><div align="center" class="Estilo5"><strong>SGCERT - RECUPERAR CLAVE</strong></div></td>
  </tr>
  <tr bordercolor="#FFFFFF">
    <td height="10">&nbsp;</td>
  </tr>
  <tr bordercolor="#FFFFFF">
    <td align="center" valign="top">
    <table border="0" cellspacing="0" cellpadding="0">
       <tr bordercolor="#FFFFFF">
    <td width="150" height="24">&nbsp;Login: </td>
    <td width="12" bordercolor="#FFFFFF"><div align="center">:</div></td>
    <td width="257">LSX_NOMBRE</td>
  </tr>
  <tr bordercolor="#FFFFFF">
    <td width="150" height="24">&nbsp;Clave</td>
    <td width="12" bordercolor="#FFFFFF"><div align="center">:</div></td>
    <td width="257">LSX_CLAVE</td>
  </tr>
</table>
</body>
</html>
'

;

$ls_html = str_replace( "LSX_LOGIN",$ls_nombre,$ls_html );
$ls_html = str_replace( "LSX_CLAVE",$ls_ape,$ls_html );

//$email = "marketing@dms.com.pe,potmast@dms.com.pe";
$email3 = $ls_email;
$email2 = "contacto@sgcert.com";
$email1 = "contacto@sgcert.com";
$asunto = 'Solicitud de Contactos';
$cabeceras = "From: ".$ls_email."\r\nContent-type: text/html\r\n";
//mail($email1,$asunto,$ls_html,$cabeceras);
//mail($email2,$asunto,$ls_html,$cabeceras);
mail($email3,$asunto,$ls_html,$cabeceras);
mail($email2,$asunto,$ls_html,$cabeceras);
mail($email1,$asunto,$ls_html,$cabeceras);
?>
<?php
//header("Location:contactenos.php");
header("Location:index.php");
?>

