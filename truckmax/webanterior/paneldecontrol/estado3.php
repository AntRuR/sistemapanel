<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$id_compra = $_POST['id'];
$estado = $_POST['estado'];
$tracking = $_POST['tracking'];
$query1 = "update compra set estado='$estado', tracking='$tracking' where id_compra='$id_compra'";
mysql_query($query1, $cn) or die(mysql_error());
$query2 = "select * from compra where id_compra='$id_compra'";
$rs_query2 = mysql_query($query2, $cn) or die(mysql_error());
$row_rs_query2 = mysql_fetch_assoc($rs_query2);
$query5 = "select * from cliente where id_cli='".$row_rs_query2["id_cli"]."'";
$rs_query5 = mysql_query($query5, $cn) or die(mysql_error());
$row_rs_query5 = mysql_fetch_assoc($rs_query5);
$tabla1 = '<table width="494" border="1">
			  <tr>
				<td colspan="5" align="center" bgcolor="#999999">
                <table border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td>
                        <span class="style44">Actualizaci&oacute;n de la Compra que Realiz&oacute;</span>
                        <p><span class="style44" style="font-family:Arial, Helvetica, sans-serif; font-family:12px;">
                        Estimado Cliente,<br />
                        <br />
                        Gracias por su compra de nuestros productos de SG Cert.<br />
                        Su número de orden de compra es Cart-'.$row_rs_query2['id_compra'].'<br />
                        <br />
                        Ud. puede accesar a su cuenta en linea con su correo electronico y<br />
                         contraseña en:<br />
                         <br /> 
                         <a href="http://www.sgcert.com/checkout1.php" target="_blank">http://www.sgcert.com/checkout1.php</a><br />
                         <br />
                         para:
                         </span></p>
                          <ul>
                            <li><span class="style44" style="font-family:Arial, Helvetica, sans-serif; font-family:12px;"> Ver el estado de su orden de compra<br />
                            </span></li>
                            <li><span class="style44" style="font-family:Arial, Helvetica, sans-serif; font-family:12px;"> Modificar sus datos personales<br />
                            </span></li>
                            <li><span class="style44" style="font-family:Arial, Helvetica, sans-serif; font-family:12px;"> Ver histórico de compras<br />
                                  </span></li>
                        </ul></td>
                      </tr>
                      
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                  </table>                </td>
			  </tr>
			  <tr>
				<td align="center" bgcolor="#6C6A6B"><span class="style57"><strong>Cliente</strong></span></td>
				<td align="center" bgcolor="#6C6A6B"><span class="style57"><strong>Id-Cart</strong></span></td>
				<td align="center" bgcolor="#6C6A6B"><span class="style57"><strong>Monto</strong></span></td>
				<td align="center" bgcolor="#6C6A6B"><span class="style57"><strong>Estado</strong></span></td>
				<td align="center" bgcolor="#6C6A6B"><span class="style57"><strong>Tracking</strong></span></td>
			  </tr>
			  <tr>
				<td align="center">'.$row_rs_query5['nom_cli'].', '.$row_rs_query5['ape_cli'].'</td>
				<td align="center">Cart-'.$row_rs_query2['id_compra'].'</td>
				<td align="center">$'.($row_rs_query2['costo_prod']+$row_rs_query2['costo_ship']).'</td>
				<td align="center">'.$row_rs_query2['estado'].'</td>
				<td align="center">'.$row_rs_query2['tracking'].'</td>
			  </tr>
</table>';
//mandando mails
$correo_remitente = "ventas@sgcert.com";
$nombre_remitente = "Info SGCERT";
$destinatario = $row_rs_query5['correo'];
$asunto = "ACTUALIZACION DEL PEDIDO";
$cuerpo = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<title>Untitled Document</title>
			<style type="text/css">
			<!--
			.style44 {
				color: #FFFFFF;
				font-weight: bold;
				font-family: Verdana, Arial, Helvetica, sans-serif;
				font-size: 12px;
			}
			.style57 {color: #003366; font-weight: bold; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; }
			-->
			</style>
			</head>
			<body>
			'.$tabla1.'
			</body>
			</html>
';
//para el envo en formato HTML
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
//direccin del remitente
$headers .= "From: ".$nombre_remitente."<".$correo_remitente.">\r\n";
//$headers .= "Bcc: anthony.qz@gmail.com\r\n";
mail($destinatario,$asunto,$cuerpo,$headers);
header("Location:estado1.php");
?>