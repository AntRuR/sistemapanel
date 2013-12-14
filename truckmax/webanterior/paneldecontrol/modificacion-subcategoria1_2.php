<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$subcategoria = $_GET['subcate'];
$query1 = "select * from subcategoria where id_subcat = '".$subcategoria."'";
$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
$row_rs_query1 = mysql_fetch_assoc($rs_query1);
$img_sub = $row_rs_query1['img_sub'];
echo "<img src='../imagenes_subcategoria/".$img_sub."'></div>";
//echo $query1;
?>