<?php
	require_once('../Connections/cn.php');
	mysql_select_db($database_cn, $cn);
	$query_correo="select * from usuario where login='".$_POST['login']."'";
	$rs_query_correo = mysql_query($query_correo, $cn) or die(mysql_error());
	$row_rs_query_correo = mysql_fetch_assoc('aegas@sgcert.com');
	$destinatario = "aegas@sgcert.com";
	$asunto = "Recuperacion de Clave";
	//$cuerpo = "a ver si llega".$row_rs_query_correo['correo'];
	$cuerpo = '
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Untitled Document</title><style type="text/css">
	
	.style1 {font-size: 8.5pt}
	.style2 {
		font-family: Verdana, Arial, Helvetica, sans-serif;
		font-weight: bold;
		font-size: 12px;
	}
	
	</style></head>
	<body>
	<table>
	  <tr>
		<td colspan="2" bordercolor="#333333" style="border: 1pt inset rgb(216, 225, 229); padding: 2pt; background: rgb(224, 230, 233) none repeat scroll 0%; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;"><p class="style2">Aquí tu Clave de administrador de SgCert</p></td>
	  </tr>
	  <tr>
		<td style="border: 1pt inset rgb(216, 225, 229); padding: 3pt; background: rgb(224, 230, 233) none repeat scroll 0%; width: 98.25pt; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;" width="131"><p><strong><span style="font-size: 8.5pt;">Login:</span></strong></p></td>
		<td style="border: 1pt inset rgb(216, 225, 229); padding: 3pt; background: rgb(224, 230, 233) none repeat scroll 0%; width: 82.5pt; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;" width="110"><p><strong><span class="style1">Clave:</span></strong></p></td>
	  </tr>
	  <tr>
		<td style="border: 1pt inset rgb(216, 225, 229); padding: 3pt;"><p><span style="font-size: 10.5pt; color: rgb(84, 84, 84);">'.$row_rs_query_correo['login'].'</span></p></td>
		<td style="border: 1pt inset rgb(216, 225, 229); padding: 3pt;"><p><span style="font-size: 10.5pt; color: rgb(84, 84, 84);">'.$row_rs_query_correo['clave'].'</span></p></td>
	  </tr>
	</table>
	</body>
	</html>
	';	
	//para el envío en formato HTML
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";	
	//dirección del remitente
	$headers .= "From: Web SgCert <no-replay@sgcert.com>\r\n";
	mail($destinatario,$asunto,$cuerpo,$headers);
	//echo $cuerpo2."<br/>".$destinatario;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::INGRESO DE CATEGORIA::.</title>
<script language="javascript">
	function validarLogin(){
	if(document.frm3.correo.value==""){
		alert("Introdusca su login");
		return document.frm3.correo.focus();
	}
		document.frm3.submit();
	}
	</script>
<style type="text/css">
<!--
body {
	background-color: #292623;
	margin-top: 0px;
	background-image: url(images/head-up.jpg);
	background-repeat: repeat-x;
}
-->
</style>
<link href="estilos/estilos.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="900" border="0" align="left" cellpadding="0" cellspacing="0">
<tr>
  <td height="20" align="left" valign="top"><?php include("menu2.php");?></td>
</tr>
<tr>
            <td height="20" align="left" valign="top"><table width="980" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="20" align="center" valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td height="100" align="center" valign="top" class="info">Su Clave ser&aacute; enviada a su correo electr&oacute;nico</td>
              </tr>
            </table></td>
          </tr>
<tr>
  <td height="20" align="left" valign="top">&nbsp;</td>
</tr>
        </table>
</body>
</html>
