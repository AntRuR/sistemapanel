<?php
session_start();
require_once('Connections/cn.php');
mysql_select_db($database_cn, $cn);
//$producto=$_GET['producto'];
$producto=$_POST['producto'];

//$cantidad=$_GET['cantidad'];
$cantidad=$_POST['cantidad'];

$urlRetorno=$_POST['urlOrigen'];

if(!isset($_SESSION["contador"])){
    $_SESSION["contador"] = 1;
	//nombres de las sesiones
	$nombreproducto = "producto".$_SESSION['contador'];
	
	$nombrecantidad = "cantidad".$_SESSION['contador'];
	
	$_SESSION[$nombreproducto]=$producto;
	
	$_SESSION[$nombrecantidad]=$cantidad;
	
}else{
	$comparador = "NO";
	for($i=1;$i<=$_SESSION['contador'];$i++){
		if($_SESSION["producto".$i]==$producto ){
			$comparador = "SI";
			$_SESSION["producto".$i]=$producto;
			
			$_SESSION["cantidad".$i]=$cantidad;
			
		}
	}
	if($comparador=="NO"){
		$_SESSION["contador"]++;
		//nombres de las sesiones
		$nombreproducto = "producto".$_SESSION['contador'];
	
		$nombrecantidad = "cantidad".$_SESSION['contador'];
		
		$_SESSION[$nombreproducto]=$producto;
	
		$_SESSION[$nombrecantidad]=$cantidad;
		
	}
}

$montototal = 0;
$item = 0;
for($i=1;$i<=$_SESSION['contador'];$i++){
	if($_SESSION["producto".$i]<>""){		
		$item = $item + 1;
		
			$query1 = "select a.nom_pro_es, a.pre_ven, a.pre_ofer from producto a where a.id_pro='".$_SESSION["producto".$i]."' ";
		$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
		$row_rs_query1 = mysql_fetch_assoc($rs_query1);
			if($row_rs_query1['pre_ofer']<>""){
				$total = $_SESSION["cantidad".$i]*$row_rs_query1['pre_ofer'];
			}else{
				$total = $_SESSION["cantidad".$i]*$row_rs_query1['pre_ven'];
			}
		$montototal = $montototal + $total;
		//echo $row_rs_query1['nom_pro_es']." - ".$row_rs_query1['des_destal']." - color de la muestra - ".$_SESSION["cantidad".$i]." - $".$total."<br/>";
		//echo $row_rs_query1['nom_pro_es']." - ".$row_rs_query1['des_destal']." - ".$row_rs_query1['des_col_es']." - ".$_SESSION["cantidad".$i]." - $".$total."<br/>";
		
	}
}
//echo "Total : $".$montototal."<br/>";
/*
--------------------------------------------
				OTRA VISTA
--------------------------------------------
*/

//echo "Items : ".$item."<br/>";
//echo "Total : $".$montototal;
header("location:shopping_cart.php");
//header("location: $urlRetorno");
?>
<table width="613" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td colspan="7" align="center" valign="middle"><p class="Estilo10" style="margin-top:12px"> Carrito de Compras</p></td>
                        </tr>
                        <tr>
                          <td width="49" align="center" valign="middle" class="Type10AColumns">Item</td>
                          <td width="152" align="center" valign="middle" class="Type10AColumns">Producto</td>
                          <td width="142" align="center" valign="middle" class="Type10AColumns">Caracter&iacute;scticas</td>
                          <td width="144" align="center" valign="middle" class="Type10AColumns">Color (ipod-laptops)</td>
                          <td width="58" align="center" valign="middle" class="Type10AColumns">Cantidad</td>
                          <td width="40" align="center" valign="middle" class="Type10AColumns">Precio</td>
                        </tr>
                        <?php
$montototal = 0;
$item = 0;
for($i=1;$i<=$_SESSION['contador'];$i++){
	if($_SESSION["producto".$i]<>""){
		$item = $item + 1;
		
			$query1 = "select a.id_pro, a.nom_pro_es, a.pre_ven, a.img_pro1 from producto a where a.id_pro='".$_SESSION["producto".$i]."' ";
		$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
		$row_rs_query1 = mysql_fetch_assoc($rs_query1);
		$total = $_SESSION["cantidad".$i]*$row_rs_query1['pre_ven'];
		$montototal = $montototal + $total;
		?>
                        <tr>
                          <td align="center" valign="middle" class="Type10B"><p style="margin-top:3px; margin-bottom:3px"><img src="imagenes_producto_chica_thumbnails/<?php echo $row_rs_query1['img_pro1']?>" border="0" width="50"></p></td>
                          <td align="center" valign="middle" class="Type10B"><?php echo $row_rs_query1['nom_pro_es']?></td>
                          <td align="center" valign="middle" class="Type10B"><?php echo $row_rs_query1['des_destal']?></td>
                          <td align="center" valign="middle" class="Type10B"></td>
                          <td align="center" valign="middle" class="Type10B"><?php echo $_SESSION["cantidad".$i]?></td>
                          <td align="center" valign="middle" class="Type10B">$<? 
                                  echo $total  ;
								  
								   ?></td>
                        </tr>
                        <?php
		
       
	}
}
?>
                        <tr>
                          <td colspan="5" align="right" valign="middle">Total</td>
                          <td align="center" valign="middle">$<? 
                                  echo $montototal  ;
								 
								   ?></td>
                        </tr>
                      </table>