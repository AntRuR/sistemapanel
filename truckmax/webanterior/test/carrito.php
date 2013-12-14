<?php
session_start();
require_once('Connections/cn.php');
mysql_select_db($database_cn, $cn);
$producto=$_GET['producto'];
//$talla=$_GET['talla'];
$cantidad=$_GET['cantidad'];
$color=$_GET['color'];
if(!isset($_SESSION["contador"])){
    $_SESSION["contador"] = 1;
	//nombres de las sesiones
	$nombreproducto = "producto".$_SESSION['contador'];
	//$nombretalla = "talla".$_SESSION['contador'];
	$nombrecantidad = "cantidad".$_SESSION['contador'];
	$nombrecolor = "color".$_SESSION['contador'];
	$_SESSION[$nombreproducto]=$producto;
	//$_SESSION[$nombretalla]=$talla;
	$_SESSION[$nombrecantidad]=$cantidad;
	$_SESSION[$nombrecolor]=$color;
}else{
	$comparador = "NO";
	for($i=1;$i<=$_SESSION['contador'];$i++){
		//if($_SESSION["producto".$i]==$producto and $_SESSION["color".$i]==$color and $_SESSION["talla".$i]==$talla){
		if($_SESSION["producto".$i]==$producto and $_SESSION["color".$i]==$color ){
			$comparador = "SI";
			$_SESSION["producto".$i]=$producto;
			//$_SESSION["talla".$i]=$talla;
			$_SESSION["cantidad".$i]=$cantidad;
			$_SESSION["color".$i]=$color;
		}
	}
	if($comparador=="NO"){
		$_SESSION["contador"]++;
		//nombres de las sesiones
		$nombreproducto = "producto".$_SESSION['contador'];
		//$nombretalla = "talla".$_SESSION['contador'];
		$nombrecantidad = "cantidad".$_SESSION['contador'];
		$nombrecolor = "color".$_SESSION['contador'];
		$_SESSION[$nombreproducto]=$producto;
		//$_SESSION[$nombretalla]=$talla;
		$_SESSION[$nombrecantidad]=$cantidad;
		$_SESSION[$nombrecolor]=$color;		
	}
}
//if (!isset($_SESSION["contador"])){
//    $_SESSION["contador"] = 1;
//}else{
//    $_SESSION["contador"]++;
//}
////nombres de las sesiones
//$nombreproducto = "producto".$_SESSION['contador'];
//$nombretalla = "talla".$_SESSION['contador'];
//$nombrecantidad = "cantidad".$_SESSION['contador'];
//$nombrecolor = "color".$_SESSION['contador'];
//$_SESSION[$nombreproducto]=$producto;
//$_SESSION[$nombretalla]=$talla;
//$_SESSION[$nombrecantidad]=$cantidad;
//$_SESSION[$nombrecolor]=$color;

//echo "Carro de compras<br/>";
$montototal = 0;
$item = 0;
for($i=1;$i<=$_SESSION['contador'];$i++){
	if($_SESSION["producto".$i]<>""){		
		$item = $item + 1;
		if($_SESSION["color".$i]==0){
/*		$query1 = "select a.nom_pro_es, a.pre_ven, a.pre_ofer, b.des_destal, c.des_col_es from producto a,talladescripcion b, color c where a.id_pro='".$_SESSION["producto".$i]."' and b.id_taldes='".$_SESSION["talla".$i]."'";*/
			$query1 = "select a.nom_pro_es, a.pre_ven, a.pre_ofer, c.des_col_es from producto a, color c where a.id_pro='".$_SESSION["producto".$i]."' ";
		$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
		$row_rs_query1 = mysql_fetch_assoc($rs_query1);
			if($row_rs_query1['pre_ofer']<>""){
				$total = $_SESSION["cantidad".$i]*$row_rs_query1['pre_ofer'];
			}else{
				$total = $_SESSION["cantidad".$i]*$row_rs_query1['pre_ven'];
			}
		$montototal = $montototal + $total;
		//echo $row_rs_query1['nom_pro_es']." - ".$row_rs_query1['des_destal']." - color de la muestra - ".$_SESSION["cantidad".$i]." - $".$total."<br/>";
		}else{
	/*		$query1 = "select a.nom_pro_es, a.pre_ven, a.pre_ofer, b.des_destal, c.des_col_es from producto a,talladescripcion b, color c where a.id_pro='".$_SESSION["producto".$i]."' and b.id_taldes='".$_SESSION["talla".$i]."' and c.id_col='".$_SESSION["color".$i]."'";*/
			$query1 = "select a.nom_pro_es, a.pre_ven, a.pre_ofer from producto a, color c where a.id_pro='".$_SESSION["producto".$i]."'";
		$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
		$row_rs_query1 = mysql_fetch_assoc($rs_query1);
			if($row_rs_query1['pre_ofer']<>""){
				$total = $_SESSION["cantidad".$i]*$row_rs_query1['pre_ofer'];
			}else{
				$total = $_SESSION["cantidad".$i]*$row_rs_query1['pre_ven'];
			}
		$montototal = $montototal + $total;
		//echo $row_rs_query1['nom_pro_es']." - ".$row_rs_query1['des_destal']." - ".$row_rs_query1['des_col_es']." - ".$_SESSION["cantidad".$i]." - $".$total."<br/>";
		}
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
?>
<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
                          <td height="30" colspan="6" align="center" valign="top"><p class="title-cart" style="margin-top:12px"> Carrito de Pedidos</p></td>
  </tr>
                        <tr>
                          <td width="49" height="24" align="center" valign="middle" bgcolor="#DDDDDD" class="product" style="font-weight: bold">Item</td>
                          <td width="152" align="center" valign="middle" bgcolor="#DDDDDD" class="product" style="font-weight: bold">Producto</td>
                          <td width="144" align="center" valign="middle" bgcolor="#DDDDDD" class="product" style="font-weight: bold">Precio Unitario</td>
                          <td width="58" align="center" valign="middle" bgcolor="#DDDDDD" class="product" style="font-weight: bold">Cantidad</td>
                          <td width="40" align="center" valign="middle" bgcolor="#DDDDDD" class="product"><span style="font-weight: bold">
                          <? echo "Precio" ?>
                          </span> </td>
  </tr>
                        <?php
$montototal = 0;
$item = 0;
for($i=1;$i<=$_SESSION['contador'];$i++){
	if($_SESSION["producto".$i]<>""){
		$item = $item + 1;
		if($_SESSION["color".$i]==0){
/*			$query1 = "select a.id_pro, a.nom_pro_es, a.pre_ven, a.img_pro1, b.des_destal, c.des_col_es from producto a,talladescripcion b, color c where a.id_pro='".$_SESSION["producto".$i]."' and b.id_taldes='".$_SESSION["talla".$i]."'";*/
$query1 = "select a.id_pro, a.nom_pro_es, a.pre_ven, a.img_pro1 from producto a where a.id_pro='".$_SESSION["producto".$i]."'";		$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
		$row_rs_query1 = mysql_fetch_assoc($rs_query1);
		$total = $_SESSION["cantidad".$i]*$row_rs_query1['pre_ven'];
		$montototal = $montototal + $total;
		?>
                        <tr>
                          <td align="center" valign="middle" class="Type10B"><p style="margin-top:3px; margin-bottom:3px"><img src="imagenes_producto_chica_thumbnails/<?php echo $row_rs_query1['img_pro1']?>" border="0"></p></td>
                          <td align="center" valign="middle" class="product" style="font-weight: bold"><?php echo $row_rs_query1['nom_pro_es']?></td>
                          <td align="center" valign="middle" class="product" style="font-weight: bold">
                          <strong><? 
								  $oferta = $row_rs_query1["pre_ofer"];
								  if($oferta<>""){
								  echo "Offer Price $ :".$oferta;
								  }else{
								  echo "Price US$ :" . $row_rs_query1['pre_ven'];
								  
								   }
								  ?></strong>
                          </td>
                          <td align="center" valign="middle" class="product"><?php echo $_SESSION["cantidad".$i]?></td>
                          <td align="center" valign="middle" class="product"><strong>S/. <? //if ($_SESSION['nivel_u']=="dis"){
                                  echo $total  ;
								  //}else {echo "registrese";}
								   ?></strong></td>
                        </tr>
                        <?php
		}else{
		/*	$query1 = "select a.id_pro, a.nom_pro_es, a.pre_ven, a.img_pro1, b.des_destal, c.des_col_es from producto a,talladescripcion b, color c where a.id_pro='".$_SESSION["producto".$i]."' and b.id_taldes='".$_SESSION["talla".$i]."' and c.id_col='".$_SESSION["color".$i]."'";*/
			$query1 = "select a.id_pro, a.nom_pro_es, a.pre_ven, a.img_pro1 from producto a where a.id_pro='".$_SESSION["producto".$i]."'";
		$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
		$row_rs_query1 = mysql_fetch_assoc($rs_query1);
		$total = $_SESSION["cantidad".$i]*$row_rs_query1['pre_ven'];
		$montototal = $montototal + $total;
		?>
                        <tr>
                          <td align="center" valign="middle"><img src="imagenes_producto_chica_thumbnails/<?php echo $row_rs_query1['img_pro1']?>" border="0"></td>
                          <td align="center" valign="middle" class="product"><?php echo $row_rs_query1['nom_pro_es']?></td>
                          <td align="center" valign="middle" class="product"><?php echo $row_rs_query1['des_col_es']?></td>
                          <td align="center" valign="middle" class="product"><?php echo $_SESSION["cantidad".$i]?></td>
                          <td align="center" valign="middle" class="product"><strong>S/.
<? //if ($_SESSION['nivel_u']=="dis"){
                                  echo $total  ;
								  //}else {echo "registrese";}
								   ?></strong>                          </td>
                        </tr>
                        <?php
		}
	}
}
?>
                        <tr>
                          <td colspan="4" align="right" valign="middle" class="product"><span class="producto">
                            <strong><? echo "Total" ?></strong>
                          </span></td>
                          <td align="center" valign="middle" class="product">
						  <strong>S/.
<? //if ($_SESSION['nivel_u']=="dis"){
                                  echo $montototal  ;
								  //}else {echo "registrese";}*/
								   ?>
                            </strong>                          </td>
                        </tr>
                        <tr>
                          <td colspan="5" align="right" valign="middle">
                          <table width="180" border="0" cellspacing="0" cellpadding="0">
                           <tr>
                             <td align="center"><a href="checkout1.php" class="txtwhite"><img src="images/continuar-orden.jpg" width="180" height="16" border="0"/></a></td>
                           </tr>
                         </table>                          </td>
                        </tr>
                      </table>
