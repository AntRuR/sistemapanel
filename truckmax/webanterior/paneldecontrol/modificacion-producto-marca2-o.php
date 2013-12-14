<?php

require_once('../Connections/cn.php');

mysql_select_db($database_cn, $cn);

$marca = $_GET['marca'];

$query0 = "select * from producto where id_mar='$marca' order by id_pro";

$rs_query0 = mysql_query($query0, $cn) or die(mysql_error());

$row_rs_query0 = mysql_fetch_assoc($rs_query0);

?>



<form action="modificacion-producto-marca3.php" method="post" name="frm2">

  <table width="950" border="1" cellspacing="0">

    <tr>

      <td colspan="6" align="left">PRODUCTOS</td>
    </tr>

    <tr>

      <td width="204">CASTELLANO</td>

      <td width="158">INGLES</td>

      <td width="156">PRECIO COMPRA</td>

      <td width="157">PRECIO VENTA</td>

      <td width="154">PRECIO RETAIL</td>

      <td width="159">OFERTA</td>
    </tr>

    <?php

	$i=0;

do{

$i=$i+1;

?>

    <tr>

      <td><?php echo $row_rs_query0['nom_pro_es']?></td>

      <td><?php echo $row_rs_query0['nom_pro_en']?></td>

      <td><input type="text" name="com<?php echo $i?>" value="<?php echo $row_rs_query0['pre_com']?>"></td>
	
    	
      <td><input type="text" name="ven<?php echo $i?>" value="<?php echo $row_rs_query0['pre_ven']?>"></td>
		<td><input type="text" name="ret<?php echo $i?>" value="<?php echo $row_rs_query0['p_retail']?>"></td>
      <td><input type="text" name="ofer<?php echo $i?>" value="<?php echo $row_rs_query0['pre_ofer']?>"></td>
    </tr>

    <input type="hidden" name="prod<?php echo $i?>" value="<?php echo $row_rs_query0['id_pro']?>">

    <?php

}while($row_rs_query0 = mysql_fetch_array($rs_query0));

?>

    <tr>

      <td colspan="6" align="right"><input type="submit" value="MODIFICAR"></td>
    </tr>
  </table>

  <input type="hidden" name="cantidad" value="<?php echo $i?>">

</form>

