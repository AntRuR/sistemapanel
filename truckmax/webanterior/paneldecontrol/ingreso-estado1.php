<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::INGRESO DESTADOS::.</title>
</head>
<body>
<?php include("menu.php");?><br/><br />
<?php if(isset($_GET['ok'])){ echo "Ingreso Correcto";}?><br/>
<strong>INGRESO DE ESTADO</strong>
<form name="frm1" action="ingreso-estado2.php" method="post">
  <table border="1">
    <tr>
      <td>Nombre del Estado</td>
      <td><input name="nom_estado" type="text" id="nom_estado" /></td>
    </tr>
    <tr>
      <td colspan="2" align="right"><input type="submit" value="GRABAR" /></td>
    </tr>
  </table>
</form>
<hr/>
Los Estados Actuales son :<br/>
<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$query1 = "select * from estado order by nom_estado";
$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
$row_rs_query1 = mysql_fetch_assoc($rs_query1);
$i=1;
do{
	echo $i.".- ".$row_rs_query1['nom_estado']."<br/>";
	$i=$i+1;
}while($row_rs_query1 = mysql_fetch_array($rs_query1));
?>
</body>
</html>
