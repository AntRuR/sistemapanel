<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$tipomarc = $_GET['tipomarcador'];
//$query0 = "select * from marcadoresmaster where id_tipo='$tipomarc' order by nom_marcador asc";
$query0 = "select  * , id_pro, nom_pro_es from producto  where id_subcat='$tipomarc'";
$rs_query0 = mysql_query($query0, $cn) or die(mysql_error());
$row_rs_query0 = mysql_fetch_assoc($rs_query0);

$query1 = "select  * , id_formato from formato";
$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
$row_rs_query1 = mysql_fetch_assoc($rs_query1);
//$query1 = "select a.*, b.nom_marcador from existencia a, marcadoresmaster b where a.id_marcador=b.id_marcador";
//$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
//$row_rs_query1 = mysql_fetch_assoc($rs_query1);
//$query1 = "SELECT nom_marcador, id_marcador* FROM marcadoresmaster";
//$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
//$row_rs_query1 = mysql_fetch_assoc($rs_query1);
?>
<link href="../SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<script src="../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>

<link href="panel.css" rel="stylesheet" type="text/css" />
<table  style="border:1px solid #006666;">
<tr>
            <td width="428" class="texto">
            <form action="" method="post" name="frm1">            
              <table width="600" border="0" cellspacing="6">
                <tr>
                  <td colspan="5" align="center" class="titulo">&nbsp;</td>
                </tr>
                <tr>   
                  <td colspan="5" align="center" class="titulo"><strong>MARCADORES MASTER</strong></td>           
                </tr>            
                <tr>
                  <td class="titulo">&nbsp;</td>            
                 <td align="left" class="titulo"><strong>IdPro</strong></td>            
                  <td align="left" class="titulo"><strong>IdSubCat</strong></td>            
                  <td align="left" class="titulo"><strong>Producto</strong></td>           
                  <td class="titulo">&nbsp;</td>
                </tr>
                <?php
                $i=0;
            do{
            $i=$i+1;
            ?>
                <tr>
                  <td><input name="formato" type="hidden" value="<?php echo $row_rs_query1['id_formato']?>" /></td>
                  <td><?php echo $idmarc=$row_rs_query0['id_pro']?></td>
                  <td><?php echo $row_rs_query0['id_subcat']?></td>
                  <td><?php echo $row_rs_query0['nom_pro_es']?></td>
                  <td><a href="borrar-producto2.php?id_pro=<?php echo $row_rs_query0['id_pro']; ?>" target="_SELF" class="login">borrar</a></td>
                </tr>
                <?php
            }while($row_rs_query0 = mysql_fetch_array($rs_query0));
            ?>
                <tr>
                  <td colspan="5" align="right">&nbsp;</td>
                </tr>
              </table>
              
            </form>            </td>
  </tr>
        </table>
