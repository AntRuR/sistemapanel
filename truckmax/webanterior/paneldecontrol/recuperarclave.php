<?php
session_start();
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$sql=mysql_query("select * from usuario ORDER BY id_usu ASC");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::OLVIDO CLAVE::.</title>
<script language="javascript">
	function validarLogin(){
	if(document.frm3.correo.value==""){
		alert("Introdusca su login");
		return document.frm3.correo.focus();
	}
	if(document.frm3.login.value==""){
		alert("Introdusca su login");
		return document.frm3.login.focus();
	}
		document.frm3.submit();
	}
	</script>
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
                <td height="1000" align="left" valign="top" class="textos"><table width="500" align="left">
          <tr>
            <td valign="top" class="info"><p align="center" class="BigTitles"> Ingrese sus datos de usuario</p>
                <form action="recuperarclave2.php" method="post" name="frm3" id="frm3">
                
                  <table width="600" align="center">
                    <tr>
                      <td height="14"><input name="correo" type="hidden" value="aegas@sgcert.com" /></td>
                    </tr>
                    <tr>
                      <td width="120" align="left" class="textos">Ingrese su login :</td>
                      <td><input name="login" type="text" class="textos" /></td>
                    </tr>
                    <tr>
                      <td align="center">&nbsp;</td>
                      <td align="left"><input type="button" class="recuperar" onclick="validarLogin()" value="RECUPERAR CLAVE" /></td>
                    </tr>
                  </table>
                </form>
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
