<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$id_cat = $_POST['categoria'];
$des_subcat_es = $_POST['subcat_es'];
//Renombrando el nombre de la imagen con un codigo
$query0="select max(id_subcat) as img_nombre from subcategoria";
$rs_query0 = mysql_query($query0, $cn) or die(mysql_error());
$row_rs_query0 = mysql_fetch_assoc($rs_query0);
//cuantas filas hay en el menu
$query10="select * from subcategoria";
$rs_query10 = mysql_query($query10, $cn) or die(mysql_error());
$row_rs_query10 = mysql_fetch_assoc($rs_query10);
//$ordenmen= numero de filas
$ordenmen=mysql_num_rows($rs_query10);

//$ordenmen= numero de filas


$query1 = "insert into subcategoria(id_cat,des_subcat_es,iniciar,ordenmenu) values (".$id_cat.",'".$des_subcat_es."','N',$ordenmen)";
mysql_query($query1, $cn) or die(mysql_error());
header("Location:ingreso-subcategoria1.php?ok=ok");
?>