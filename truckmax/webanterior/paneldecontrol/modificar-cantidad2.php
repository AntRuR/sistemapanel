<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$tipomarc = $_GET['tipomarcador'];
//$query0 = "select * from marcadoresmaster where id_tipo='$tipomarc' order by nom_marcador asc";
$query0 = "select a. * , b.id_subcat from producto a, subcategoria b where a.id_subcat = b.id_subcat AND a.id_pro='$tipomarc'";
$rs_query0 = mysql_query($query0, $cn) or die(mysql_error());
$row_rs_query0 = mysql_fetch_assoc($rs_query0);
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
            <td class="texto">
            <form action="" method="post" name="frm2">            
              <table border="0" cellspacing="6">
                <tr>
                  <td colspan="5" align="center" class="titulo">&nbsp;</td>
                </tr>
                <tr>   
                  <td colspan="5" align="center" class="titulo">MARCADORES MASTER</td>           
                </tr>            
                <tr>
                  <td class="titulo">&nbsp;</td>            
                 <td class="titulo">Cód.</td>            
                  <td class="titulo">Marcador Master</td>            
                  <td class="titulo">Cantidad</td>           
                  <td class="titulo">&nbsp;</td>
                </tr>
                <?php
                $i=0;
            do{
            $i=$i+1;
            ?>
                <tr>
                  <td>&nbsp;</td>
                  <td><?php echo $idmarc=$row_rs_query0['id_pro']?></td>
                  <td><?php echo $row_rs_query0['id_subcat']?></td>
                  <td><?php echo $row_rs_query0['nom_pro_es']?></td>
                  <td><a href="modificacion-producto2.php?id_pro=<?php echo $row_rs_query0['id_pro']; ?>&idTipo=<? echo $tipomarc ?>&nom_marc=<?php echo $row_rs_query0['nom_pro_es']?>" target="_SELF" class="login">edit</a></td>
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
