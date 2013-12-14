<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);

?>
<body>
<table border="1">
    
  <? 
 	//$subcategoria = 2;
	$subcategoria = $_GET['subcategoria'];
	
	$query1 = "select * from producto where id_subcat = '".$subcategoria."'";
	$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
	$row_rs_query1 = mysql_fetch_assoc($rs_query1);
  if($row_rs_query1['nom_pro_es']==""){
  	echo "<tr><td colspan='4' aling='center'>No se Encontr&oacute; Ning&uacute;n producto con esa Descripci&oacute;n</td></tr>";
  }else{
  	do{
  ?>
    <tr>
      <td><?php echo $row_rs_query1['nom_pro_es']?></td>
      <td><?php echo $row_rs_query1['cod_comer']?></td>
      <td><input type="button" onclick="modificar(<?php echo $row_rs_query1['id_pro']?>)" value="MODIFICAR" /></td>
    </tr>
    <?php
  	}while($row_rs_query1 = mysql_fetch_array($rs_query1));
  }
  ?>
  </table>
  </body>
