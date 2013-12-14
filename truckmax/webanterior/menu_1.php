<?php
session_start();
require_once('Connections/cn.php');
mysql_select_db($database_cn, $cn);

$query01 = "SELECT * FROM `subcategoria`";
$rs_query01 = mysql_query($query01, $cn) or die(mysql_error());
$row_rs_query01 = mysql_fetch_assoc($rs_query01);

$i = 0;
do{
	$idSubC[$i]=$row_rs_query01["id_subcat"];
	$nombre_subcate[$i]=$row_rs_query01["des_subcat_es"];
	
	$i=$i+1;
}while($row_rs_query01 = mysql_fetch_array($rs_query01));


?>
<link href="estilos/style.css" rel="stylesheet" type="text/css" />
        <table width="216" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td height="8" align="left"></td>
          </tr>
		<? $i=0;
				for ($i;$i<sizeof($idSubC);$i++){ ?>
          <tr>
            <td height="20" align="left">
	       <!--<a href="<?echo $nombre_subcate[$i].'.php?idscat='.$idSubC[$i] ?>" class="subcat"><?echo $nombre_subcate[$i] ?></a>-->
           <A href='subcategoria.php?subcate=<? echo  $idSubC[$i] ?>' class="subcat"><? echo $nombre_subcate[$i] ?></A>
           <br /></td>
          </tr>
          <tr>
            <td height="2" background="images/bg_menu_div.jpg"></td>
          </tr>
          <tr>
            <td>
            <? 
				 $query011 = "SELECT * FROM `producto` WHERE `id_cat` = '1' AND `id_subcat` =".$idSubC[$i];
				 //echo $query011;
				$rs_query011 = mysql_query($query011, $cn) or die(mysql_error());
				$row_rs_query011 = mysql_fetch_assoc($rs_query011);
				$num_rows = mysql_num_rows($rs_query011);

				$j = 0;
				
				do{
				$idProd[$j]=$row_rs_query011["id_pro"];
				$nombre_prod[$j]=$row_rs_query011["nom_pro_es"];
	
				$j=$j+1;
				}while($row_rs_query011 = mysql_fetch_assoc($rs_query011));
				  ?>
            <table width="215" border="0" cellspacing="0" cellpadding="0">
             <? // aca loop para listar productos
				  $k=0;
				  for($k=0;$k<=($num_rows-1);$k++){
				  ?>
             	 <tr>
                  <td ><div class="product"><img src="images/rombito.jpg" border="0"/><a href="detalleproducto.php?producto=<? echo $idProd[$k] ?>" class="product"><? echo $nombre_prod[$k] ?> </a></div></td>
              </tr>
                  <tr>
				  <td height="2" background="images/bg_menu_div.jpg"></td>
                  </tr>
              <? }?>
            </table></td>
          </tr>
       
          <tr>
            <td height="10"></td>
          </tr>
             <? } ?>
        </table>
      
        