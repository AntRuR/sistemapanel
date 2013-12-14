<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::INGRESO DE CATEGORIA::.</title>
</head>
<body>
<?php include("menu.php");?><br/>
<?php if(isset($_GET['ok'])){ echo "Ingreso Correcto";}?><br/>
<strong>INGRESO DE CATEGORIA</strong>
<form name="frm1" action="ingreso-categoria2.php" method="post">
  <table border="1">
    <tr>
      <td>Nombre de categoria (Castellano) </td>
      <td><input type="text" name="nom_es" /></td>
    </tr>
    <tr>
      <td>Nombre de categoria (Ingles) </td>
      <td><input type="text" name="nom_en" /></td>
    </tr>
    <tr>
      <td colspan="2" align="right"><input type="submit" value="GRABAR" /></td>
    </tr>
  </table>
</form>
</body>
</html>
