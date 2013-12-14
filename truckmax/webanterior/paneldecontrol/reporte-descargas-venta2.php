<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$id_compra = $_POST['id'];
$query1 = "select * from compra where id_compra='$id_compra'";
$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
$row_rs_query1 = mysql_fetch_assoc($rs_query1);
$query2 = "select * from cliente where id_cli='".$row_rs_query1['id_cli']."'";
$rs_query2 = mysql_query($query2, $cn) or die(mysql_error());
$row_rs_query2 = mysql_fetch_assoc($rs_query2);
$query3 = "select * from cliente_shipping where id_cli='".$row_rs_query1['id_cli']."'";
$rs_query3 = mysql_query($query3, $cn) or die(mysql_error());
$row_rs_query3 = mysql_fetch_assoc($rs_query3);
$query4 = "select * from carro_compra where id_compra='$id_compra'";
$rs_query4 = mysql_query($query4, $cn) or die(mysql_error());
$row_rs_query4 = mysql_fetch_assoc($rs_query4);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::DETALLE DE LA COMPRA::.</title>
<style type="text/css">
<!--
body {
	margin-top: 0px;
	background-color: #b7bfc0;
	margin-bottom: 0px;
	margin-left: 0px;
	margin-right: 0px;
}
-->
</style>
<link href="panel.css" rel="stylesheet" type="text/css" />
<link href="estilos/estilos.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="top">
    <table width="1290" height="1000" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="1290" height="75" align="center" valign="top" background="imagenes/bg_top1.jpg"><table width="1018" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="200">
            <table width="200" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td align="center" class="pixel">Desarrolado por: <a href="http://www.pixelgraphicperu.com/" target="_blank" class="pixel">PixeGraphic</a></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table></td>
            <td  class="panel">Panel de Control &nbsp; &nbsp;</td>
          </tr>
          
        </table></td>
      </tr>
      <tr>
        <td height="34" align="center" valign="top" background="imagenes/bg_btn.jpg">
        <table width="1018" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="34"><?php include("menu2.php");?></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="1000" align="center" valign="top" background="imagenes/bg-midle.jpg"><table width="1018" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" valign="top">
            <table width="950" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td height="1000" align="left" valign="top" class="correcto">
                <table bordercolor="#BBBBBB" style="border:1px solid #BBBBBB;" cellspacing="0" cellpadding="0">
  <tr>
    <td>
    
    <table width="720">
      <tr>
        <td colspan="2" align="center" bgcolor="#777777" class="BigTitles">Datos del Cliente</td>
      </tr>
      <tr>
        <td colspan="2" align="left" bgcolor="#777777" class="textos">&nbsp; <strong>DATOS DEL CLIENTE</strong></td>
      </tr>
      <tr>
        <td width="123" align="left" bgcolor="#DDDDDD" class="textos">&nbsp; NOMBRE</td>
        <td width="572" align="left" bgcolor="#DDDDDD" class="textos"><?php echo $row_rs_query2['nom_cli'].", ".$row_rs_query2['ape_cli']?></td>
        </tr>
      <tr>
        <td align="left" bgcolor="#DDDDDD" class="textos">&nbsp; DIRECCION</td>
        <td align="left" bgcolor="#DDDDDD" class="textos"><?php echo $row_rs_query2['direccion']?></td>
        </tr>
      <tr>
        <td align="left" bgcolor="#DDDDDD" class="textos">&nbsp; CIUDAD</td>
        <td align="left" bgcolor="#DDDDDD" class="textos"><?php echo $row_rs_query2['ciudad']?></td>
        </tr>
      <tr>
        <td align="left" bgcolor="#DDDDDD" class="textos">&nbsp; ESTADO</td>
        <td align="left" bgcolor="#DDDDDD" class="textos"><?php echo $row_rs_query2['estado']?></td>
        </tr>
      <tr>
        <td align="left" bgcolor="#DDDDDD" class="textos">&nbsp; ZIP-CODE</td>
        <td align="left" bgcolor="#DDDDDD" class="textos"><?php echo $row_rs_query2['zip_code']?></td>
        </tr>
      <tr>
        <td align="left" bgcolor="#DDDDDD" class="textos">&nbsp; TELEFONO 1</td>
        <td align="left" bgcolor="#DDDDDD" class="textos"><?php echo $row_rs_query2['telefono1']?></td>
        </tr>
      <tr>
        <td align="left" bgcolor="#DDDDDD" class="textos">&nbsp; TELEFONO 2</td>
        <td align="left" bgcolor="#DDDDDD" class="textos"><?php echo $row_rs_query2['telefono2']?></td>
        </tr>
      <tr>
        <td align="left" bgcolor="#DDDDDD" class="textos">&nbsp; CORREO</td>
        <td align="left" bgcolor="#DDDDDD" class="textos"><?php echo $row_rs_query2['correo']?></td>
        </tr>
      <tr align="left">
        <td colspan="2" bgcolor="#777777" class="textos">&nbsp; <strong>SHIPPING ADDRESS</strong></td>
      </tr>
      <tr>
        <td align="left" bgcolor="#DDDDDD" class="textos">&nbsp; DIRECCION</td>
        <td align="left" bgcolor="#DDDDDD" class="textos"><?php echo $row_rs_query3['direccion']?></td>
        </tr>
      <tr>
        <td align="left" bgcolor="#DDDDDD" class="textos">&nbsp; CIUDAD</td>
        <td align="left" bgcolor="#DDDDDD" class="textos"><?php echo $row_rs_query3['ciudad']?></td>
        </tr>
      <tr>
        <td align="left" bgcolor="#DDDDDD" class="textos">&nbsp; ESTADO</td>
        <td align="left" bgcolor="#DDDDDD" class="textos"><?php echo $row_rs_query3['estado']?></td>
        </tr>
      <tr>
        <td align="left" bgcolor="#DDDDDD" class="textos">&nbsp; ZIP-CODE</td>
        <td align="left" bgcolor="#DDDDDD" class="textos"><?php echo $row_rs_query3['zip_code']?></td>
        </tr>
    </table>
    <table width="720" bordercolor="#BBBBBB" style="border:1px solid #BBBBBB;">
 <tr>
    <td colspan="5" align="left" bgcolor="#777777" class="textos">&nbsp; <strong>COMPRA</strong></td>
  </tr>
  <tr>
    <td align="left" bgcolor="#777777" class="textos">&nbsp; &nbsp;<strong>PRODUCTO</strong></td>
    <td align="left" bgcolor="#777777" class="textos">&nbsp; &nbsp;<strong>PRECIO UNITARIO</strong></td>
    <td align="left" bgcolor="#777777" class="textos">&nbsp; &nbsp;<strong>CANTIDAD</strong></td>
    <td align="left" bgcolor="#777777" class="textos">&nbsp; &nbsp;<strong>PRECIO TOTAL</strong></td>
    <td align="left" class="textos">&nbsp;</td>
  </tr>
  <?php
  	$montototal = 0;
	do{
		$query5 = "select * from producto where id_pro='".$row_rs_query4['id_pro']."'";
		$rs_query5 = mysql_query($query5, $cn) or die(mysql_error());
		$row_rs_query5 = mysql_fetch_assoc($rs_query5);
		?>
        <form name="frm2" action="descargas-venta-proceder.php" method="post">
        <input name="id_pro" type="hidden" value="<?php echo $row_rs_query5['id_pro']?>" />
        <input name="nom" type="hidden" value="<?php echo $row_rs_query2['nom_cli']?>" />
        <input name="ape" type="hidden" value="<?php echo $row_rs_query2['ape_cli']?>" />
        <input name="correo" type="hidden" value="<?php echo $row_rs_query2['correo']?>" />
                <tr>
                <td bgcolor="#DDDDDD" class="textos">&nbsp;<?php echo $row_rs_query5['nom_pro_es']?></td>
                <td align="right" bgcolor="#DDDDDD" class="textos"><?php echo $row_rs_query4['pre_ven']?>&nbsp;</td>
                <td align="right" bgcolor="#DDDDDD" class="textos"><?php echo $row_rs_query4['cantidad']?>&nbsp;</td>
                <td bgcolor="#DDDDDD" class="textos">&nbsp;
				<?php
					$montototal = $montototal+($row_rs_query4['pre_ven']*$row_rs_query4['cantidad']);
					echo $row_rs_query4['pre_ven']*$row_rs_query4['cantidad'];
				 ?>
                 </td>
       	        <td align="center" class="info"><input type="submit" class="actualizar" value="Proceder" /></td>
        </tr>
        </form>
	<?php
	}while($row_rs_query4 = mysql_fetch_array($rs_query4));
	?>
  <tr>
    <td height="24" colspan="3" align="right" bgcolor="#DDDDDD" class="textos">COSTO DEL SHIPPING</td>
    <td height="24" align="left" bgcolor="#DDDDDD" class="textos"><?php echo $row_rs_query1['costo_ship']?></td>
    <td align="left" class="info">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" align="right" bgcolor="#DDDDDD" class="textos">MONTO TOTAL</td>
    <td align="left" bgcolor="#DDDDDD" class="textos">
	<?php
		$montototal = $montototal + $row_rs_query1['costo_ship'];
		echo $montototal
	?>    </td>
    <td align="left" class="info">&nbsp;</td>
  </tr>
</table>

    </td>
  </tr>
</table>
                </td>
              </tr>
              <tr>
            <td height="28" align="left" valign="middle" class="idioma">&nbsp;</td>
</tr>
            </table>
            </td>
          </tr>
        </table></td>
      </tr>
      
      <tr>
        <td align="center" valign="top"><img src="imagenes/bg_foot.jpg" width="1290" height="121" /></td>
      </tr>
    </table></td>
  </tr>
</table>

</body>
</html>
