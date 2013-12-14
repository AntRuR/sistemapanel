<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$query1 = "select * from marca";
$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
$row_rs_query1 = mysql_fetch_assoc($rs_query1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::MODIFICACION DE MARCA::.</title>
<script type="text/javascript" src="js/funcionestabs.js"></script>
<script language="javascript">
function mostrarProductos(valor){
	ObtenerDatos('modificacion-producto-marca2.php?marca='+valor+'&fecha='+Date(),'producto');
}
</script>
<link href="panel.css" rel="stylesheet" type="text/css" />
<link href="estilos/estilos.css" rel="stylesheet" type="text/css" />
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
                <td valign="top"><?php if(isset($_GET['ok'])){ echo "Modificacion Correcta";}?></td>
              </tr>
              <tr>
                <td height="1000" align="left" valign="top">
                <strong>MODIFICACI&Oacute;N DE PRODUCTOS X MARCA</strong>
                <form name="frm1" action="modificacion-marca2.php" method="post">
                  <table>
                    <tr>
                      <td align="center">Marcas Registradas</td>
                      <td><?php
                    if($row_rs_query1['des_mar']==""){
                    ?>
                        <select name='marca'>
                          <option value='0'>No Tiene Marcas Registradas</option>
                        </select>
                        <?php
                    }else{
                    ?>
                        <select name='marca' onchange="mostrarProductos(this.value)">
                        <option value="0">Selecione una Marca</option>
                          <?php
                        do{
                        ?>
                          <option value='<?php echo $row_rs_query1['id_mar'] ?>'><?php echo $row_rs_query1['des_mar'] ?></option>
                          <?php
                        }while($row_rs_query1 = mysql_fetch_array($rs_query1));
                        ?>
                        </select>
                        <?php
                    }
                    ?></td>
                    </tr>
                  </table>
                </form>
                <div id="producto">
                
                </div>
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
