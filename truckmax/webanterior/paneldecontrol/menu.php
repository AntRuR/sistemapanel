<? 
session_start();
$varlocal=$_GET["var"];
//echo "variable session: ".$varlocal;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Panel de Control</title>
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
</head>
<body>
<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="top"><table width="1290" height="1000" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center" valign="top" background="imagenes/bg-top.gif" style="background-repeat:no-repeat;">
        <table width="1018" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="75" valign="top">
            <table width="1018" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="200"><table width="200" border="0" cellspacing="0" cellpadding="0">
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
          
        </table>
            </td>
          </tr>
          <tr>
            <td height="33"><?php include("menu2.php");?></td>
          </tr>
          <tr>
            <td height="772" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td height="100">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
