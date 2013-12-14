<?php
session_start();
//HACIENDO EL CODIGO PARA ABRIR EL MENU
if(isset($_GET['id1'])){
	$menu = "onLoad='mostrarCategoria(".$_GET['id1'].",".$_GET['subcate'].")'";
}else{
	$menu = " ";
}
require_once('Connections/cn.php');
mysql_select_db($database_cn, $cn);
$empezar = $_GET['empezar'];
if($empezar==""){
	$empezar = 0;
}
$query1 = "select * from categoria";
$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
$row_rs_query1 = mysql_fetch_assoc($rs_query1);
$query2 = "select * from subcategoria";
$rs_query2 = mysql_query($query2, $cn) or die(mysql_error());
$row_rs_query2 = mysql_fetch_assoc($rs_query2);
$query3 = "select * from subcategoria where iniciar='S'";
$rs_query3 = mysql_query($query3, $cn) or die(mysql_error());
$row_rs_query3 = mysql_fetch_assoc($rs_query3);
$img_sub = $row_rs_query3["img_sub"];
//para ver si es el top 30 te quedaste asca en el top 30
if($row_rs_query3["id_subcat"]==16){
	if(isset($_GET['empezar'])){
		$query4 = "select a.id_pro,b.* from top30 as a, producto as b where a.id_pro=b.id_pro order by a.id_top desc limit ".$empezar.",6";
	}else{
		$query4 = "select a.id_pro,b.* from top30 as a, producto as b where a.id_pro=b.id_pro order by a.id_top desc limit 0,6";
	}
}else{
	if(isset($_GET['empezar'])){
		$query4 = "select * from producto where id_subcat='".$row_rs_query3["id_subcat"]."' order by id_pro limit ".$empezar.",6";
	}else{
		$query4 = "select * from producto where id_subcat='".$row_rs_query3["id_subcat"]."' order by id_pro limit 0,6";
	}
}
$rs_query4 = mysql_query($query4, $cn) or die(mysql_error());
$row_rs_query4 = mysql_fetch_assoc($rs_query4);
//PARA EL PAGINADOR DELOSPRODUCTOS
//para ver si es el top 30 te quedaste asca en el top 30
if($row_rs_query3["id_subcat"]==16){
	$query5 = "select count(*) as cantidad from top30";
}else{
	$query5 = "select count(*) as cantidad from producto where id_subcat = '".$row_rs_query3["id_subcat"]."'";
}
$rs_query5 = mysql_query($query5, $cn) or die(mysql_error());
$row_rs_query5 = mysql_fetch_assoc($rs_query5);
$cantidad = ceil($row_rs_query5['cantidad']/6);
$i = 0;
do{
	$codigocategoria[$i]=$row_rs_query1["id_cat"];
	$categoriaes[$i]=$row_rs_query1["des_cat_es"];
	$categoriaen[$i]=$row_rs_query1["des_cat_en"];
	$i=$i+1;
}while($row_rs_query1 = mysql_fetch_array($rs_query1));

$j = 0;

do{
	$codigosubcategoria[$j]=$row_rs_query2["id_cat"];
	$codigosubcategoria2[$j]=$row_rs_query2["id_subcat"];
	$subcategoriaes[$j]=$row_rs_query2["des_subcat_es"];
	$subcategoriaen[$j]=$row_rs_query2["des_subcat_en"];
	$j=$j+1;
}while($row_rs_query2 = mysql_fetch_array($rs_query2));
$k = 0;
do{
	$productocodigo[$k]=$row_rs_query4["id_pro"];
	$productoimagen[$k]=$row_rs_query4["img_pro1"];
	$productonombrees[$k]=$row_rs_query4["nom_pro_es"];
	$productonombreen[$k]=$row_rs_query4["nom_pro_en"];
	$productoprecio_d[$k]=$row_rs_query4["pre_ven"];
	$productoprecio_r[$k]=$row_rs_query4["p_retail"];
	
	$k=$k+1;
}while($row_rs_query4 = mysql_fetch_array($rs_query4));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TruckMax</title>
<style type="text/css">
<!--
body {
	margin-top: 0px;
}
#resumenColor {
	position:absolute;
	width:170px;
	height:135px;
	z-index:1;
	left: 770px;
	top: 210px;
	visibility: hidden;
	background-color: #E9E9E9;
	border: 1px solid #000000;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #000000;
}

#resumenColor2 {
	position:absolute;
	width:172px;
	height:147px;
	z-index:1;
	left: 770px;
	top: 210px;
	visibility: hidden;
}

#cuerpo {
	position:relative;
	width:1005;
	z-index:0;
	margin-right: auto;
	margin-left: auto;
}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<script type="text/javascript" src="js/funciones.js"></script>
<link rel="stylesheet" type="text/css" href="style-article.css"/>
<link rel="stylesheet" type="text/css" href="style-help.css"/>
<script language="javascript" type="text/javascript" src="js/bookmarks.js"></script>
<script src="js/AC_RunActiveContent.js" type="text/javascript"></script>
<script type="text/javascript" src="js/funcionestabs.js"></script>
<script type="text/javascript" src="js/funciones.js"></script>
<link href="estilos/style.css" rel="stylesheet" type="text/css" />
<script language="javascript">
	function validar(valor,ubicacion){
		if(valor<=5 && valor>0){
		}else{
			alert("No debe ser Mayor a 5 ni menor que 0");
			return ubicacion.focus();
		}
	}
	function validar2(){
		for(var i=1;i<=<?php echo $_SESSION['contador']?>;i++){
			if(document.frm1.elements["cantidad"+i]==true){
				formulario = document.frm1.elements["cantidad"+i].value;
			}else{
				formulario = ""
			}
			if(formulario!="" && formulario!=="undefined"){
				if(formulario<=0 || formulario>5){
					alert("Tiene una Cantiadmayor o menor a 0");
					return false;
				}
			}
		}
//		formulario = document.getElementById("frm1");
//		for(var i=0; i<(formulario.elements.length-2); i++) {
//		  var elemento = formulario.elements[i];
//		  if(elemento.value<=0 || elemento.value>5){
//			alert("Tiene una Cantidad mayor a 5 o menor a 0");
//			return false;
//		  }
		  document.frm1.submit();
//		}
	}
	function validar3(){
		for(var i=1;i<=<?php echo $_SESSION['contador']?>;i++){
			if(document.frm1.elements["cantidad"+i]==true){
				formulario = document.frm1.elements["cantidad"+i].value;
			}else{
				formulario = ""
			}
			if(formulario!="" && formulario!=="undefined"){
				if(formulario<=0 || formulario>5){
					alert("Tiene una Cantiadmayor o menor a 0");
					return false;
				}
			}
		}
		  document.frm1.action = "update_cart.php?code=0";
		  document.frm1.submit();
	}
	function eliminarProducto(valor){
		window.location.href = "delete_cart.php?id="+valor;
	}
	function validarLogin(){
		document.frm3.url.value=document.URL;	
		if(validarEmail(document.frm3.correo.value)){
		}else{
		   alert("La dirección de email es incorrecta");
		   return document.frm3.correo.focus();
		}
		if(document.frm3.clave.value==""){
			alert("Debe introducir una clave");
			return document.frm3.clave.focus();
		}
		document.frm3.submit();
	}
	</script>
</head>

<body>
<div id="cuerpo">
<table width="996" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="996"><table width="996" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="3"><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','996','height','266','src','head','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','head' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="996" height="266">
          <param name="movie" value="head.swf" />
          <param name="quality" value="high" />
          <embed src="head.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="996" height="266"></embed>
        </object></noscript></td>
        </tr>
      <tr>
        <td width="13" rowspan="2" valign="top" background="images/bg_left.jpg"><img src="images/bg_left.jpg" width="13" height="712" alt=""></td>
        <td align="left" valign="top"><img src="images/bg_midle.jpg" width="968" height="5" alt=""></td>
        <td width="15" rowspan="2" valign="top" background="images/bg_right.jpg"><img src="images/bg_right.jpg" width="15" height="712" alt=""></td>
      </tr>
      <tr>
        <td width="968" align="left" valign="top">
        <table width="968" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="229" align="left" valign="top">
              <table width="229" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><img src="images/homek2_07.jpg" width="229" height="12" alt=""></td>
              </tr>
              <tr>
                <td align="center" valign="top" background="images/bg_menu.jpg">
                <?php include("menu_1.php")?></td>
              </tr>
              <tr>
                <td align="left" valign="top"><img src="images/homek2_11.jpg" width="229" height="12" alt=""></td>
              </tr>
            </table></td>
            <td width="4"></td>
            <td width="735" align="left" valign="top"><table width="734" border="0" cellspacing="0" cellpadding="0">
              <tr>
            <td height="16"></td>
              </tr>
              <tr>
                <td>
                <table width="728" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td rowspan="7" valign="top" width="1" background="images/div-left.jpg"><img src="images/div-left.jpg" width="1" height="516" /></td>
                    <td><img src="images/div-up.jpg" width="726" height="1" /></td>
                    <td rowspan="7" valign="top" width="1" background="images/div-left.jpg"><img src="images/div-left.jpg" width="1" height="516" /></td>
                  </tr>
                  <tr>
                    <td height="351" align="center" valign="top">
                    <form action="update_cart.php" method="post" name="frm1">
                            <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
                              <tr>
                                <td colspan="6" align="center" valign="middle"></td>
                              </tr>
                              <tr>
                            <td colspan="6" align="center" valign="middle"><table width="440" border="0" align="left" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td width="161" align="center" class="bienvenido" style="left:2px" >
									<? 
									 if ($_SESSION['nivel_u']=="dis"|| $_SESSION['nivel_u']=="ret") {
									 echo $bienvenido; 
									 }elseif($_SESSION['usuario']==""){
									 echo " ";

									 }else{
									 echo $_SESSION['usuario']." : <br> ";
									 }
									 ?></td>
                                    <td width="279" align="left" class="bienvenido"><?php
									 if($_SESSION['nivel_u']==""){
									 echo " ";
									 }else{
									 echo $_SESSION['usuario'];
									 }
									 ?></td>
                                  </tr>
                                </table></td>
                              </tr>
                              <tr>
                                <td height="30" colspan="6" align="center" valign="top"><p class="title-cart" style="margin-top:12px"> Carrito de Pedidos</p></td>
                              </tr>
                              <tr>
                                <td width="49" height="24" align="center" valign="middle" bgcolor="#DDDDDD" class="product"><strong>Item</strong></td>
                                <td width="152" align="center" valign="middle" bgcolor="#DDDDDD" class="product"><strong>Producto<span class="Type10B"><?php echo $row_rs_query1['nom_pro_es']?></span></strong></td>
                                <td width="144" align="center" valign="middle" bgcolor="#DDDDDD" class="product"><strong>Color</strong></td>
                                <td width="58" align="center" valign="middle" bgcolor="#DDDDDD" class="product"><strong>Cantidad</strong></td>
                                <td width="40" align="center" valign="middle" bgcolor="#DDDDDD" class="product"><strong>Precio</strong></td>
                                <td width="28" align="center" valign="middle" bgcolor="#DDDDDD" class="product"><strong>Borrar</strong></td>
                              </tr>
                              <?php
$montototal = 0;
$item = 0;
for($i=1;$i<=$_SESSION['contador'];$i++){
	if($_SESSION["producto".$i]<>""){
		$item = $item + 1;
		if($_SESSION["color".$i]==0){
			$query1 = "select a.id_pro, a.nom_pro_es, a.pre_ven, a.img_pro1, b.des_destal, c.des_col_es from producto a,talladescripcion b, color c where a.id_pro='".$_SESSION["producto".$i]."' and b.id_taldes='".$_SESSION["talla".$i]."'";
		$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
		$row_rs_query1 = mysql_fetch_assoc($rs_query1);
		$total = $_SESSION["cantidad".$i]*$row_rs_query1['pre_ven'];
 		/*if($_SESSION['nivel_u']=="" && $_SESSION['usuario']=="" ){
							$total ="registresee";
							}else{
							if($_SESSION['nivel_u']=="dis"){
							$total = $_SESSION["cantidad".$i]*$row_rs_query1['pre_ven'];
							}else{if ($_SESSION['nivel_u']=="ret" ){
							$total = $_SESSION["cantidad".$i]*$row_rs_query1['p_retail'];
							}
							}
							}*/
		$montototal = $montototal + $total;
		?>
                              <tr>
                                <td align="center" valign="middle" class="Type10B"><p style="margin-top:3px; margin-bottom:3px"><img src="imagenes_producto_chica_thumbnails/<?php echo $row_rs_query1['img_pro1']?>" border="0"></p></td>
                                <td align="center" valign="middle" class="product"><?php echo $row_rs_query1['nom_pro_es']?></td>
                                <td align="center" valign="middle" class="product">Segun muestra</td>
                                <td align="center" valign="middle" class="product"><input name="cantidad<?php echo $i?>" type="text" value="<?php echo $_SESSION["cantidad".$i]?>" size="1" maxlength="1" onKeyUp="validar(this.value,this)"></td>
                                <td align="center" valign="middle" class="product"><strong>S/.<?php echo $total?></strong></td>
                                <td align="center" valign="middle" class="product"><a href="javascript:eliminarProducto(<?php echo $i?>)"><img src="imagenes/trash.gif" border="0"></a></td>
                              </tr>
                              <?php
		}else{
			$query1 = "select a.id_pro, a.nom_pro_es, a.pre_ven, a.img_pro1, b.des_destal, c.des_col_es from producto a,talladescripcion b, color c where a.id_pro='".$_SESSION["producto".$i]."' and b.id_taldes='".$_SESSION["talla".$i]."' and c.id_col='".$_SESSION["color".$i]."'";
		$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
		$row_rs_query1 = mysql_fetch_assoc($rs_query1);
		$total = $_SESSION["cantidad".$i]*$row_rs_query1['pre_ven'];
		/*if($_SESSION['nivel_u']=="" && $_SESSION['usuario']=="" ){
						$total ="registresee";
							}else{
							if($_SESSION['nivel_u']=="dis" ){
							$total = $_SESSION["cantidad".$i]*$row_rs_query1['pre_ven'];
							}else{if ($_SESSION['nivel_u']=="ret" ){
							$total = $_SESSION["cantidad".$i]*$row_rs_query1['p_retail'];
							}
							}
							}*/
		$montototal = $montototal + $total;
		?>
                              <tr>
                                <td align="center" valign="middle"><img src="imagenes_producto_chica_thumbnails/<?php echo $row_rs_query1['img_pro1']?>" border="0"></td>
                                <td align="center" valign="middle" class="product"><?php echo $row_rs_query1['nom_pro_es']?></td>
                                <td align="center" valign="middle" class="product"><?php echo $row_rs_query1['des_col_es']?></td>
                                <td align="center" valign="middle" class="product"><input name="cantidad<?php echo $i?>" type="text" value="<?php echo $_SESSION["cantidad".$i]?>" size="1" maxlength="1" onKeyUp="validar(this.value,this)" onChange="validar(this.value,this)"></td>
                                <td align="center" valign="middle" class="product"><strong>S/.<?php echo $total?></strong></td>
                                <td align="center" valign="middle" class="product"><a href="javascript:eliminarProducto(<?php echo $i?>)"><img src="imagenes/trash.gif" border="0"></a></td>
                              </tr>
                              <?php
		}
	}
}
?>
                              <tr>
                                <td colspan="4" align="right" valign="middle"><span class="product"><strong>Tota</strong></span>l</td>
                                <td align="center" valign="middle" class="product"><strong>S/.
                                  <?php
								 echo $montototal			 
								 ?>
                                </strong></td>
                              </tr>
                              <tr>
                                <td colspan="6" align="right"><input name="Button" type="button" onClick="validar2()" value="Modificar y seguir comprando">
                                  <input type="button" value="Comprar" onClick="validar3()"></td>
                              </tr>
                            </table>
                          </form>
                         <?php if($_SESSION['usuario']==""){?>
                         <hr/>
                          <table width="440" align="center">
                           <tr>
                             <td valign="top"><form method="get" action="cliente1.php" name="frm2">
                                 <table align="center">
                                   <tr>
                                     <td>Registrese si es Nuevo Usuario</td>
                                   </tr>
                                   <tr>
                                     <td align="center"><input type="submit" value="REGISTRARSE">
                                  </table>
                                </form></td>
                              <td  valign="top"><form method="post" action="login1.php" name="frm3">
                                  <div align="center">
                                    <input type="hidden" name="url">
                                  Accese como cliente registrado:                                  </div>
                                  <table width="250" align="center" bgcolor="#FFDFAE">
                                    <tr>

                                      <td width="31">Correo</td>

                                      <td width="171"><input type="text" name="correo"></td>
                                    </tr>

                                    <tr>

                                      <td>Clave</td>

                                      <td><input type="password" name="clave"></td>
                                    </tr>

                                    <tr>

                                      <td colspan="2" align="right"><input type="button" onClick="validarLogin()" value="LOGIN"></td>
                                    </tr>
                                  </table>

                                </form></td>
                          </table>

                        <?php }?>
                    </td>
                    </tr>
                  <tr>
                    <td height="1"><img src="images/div-up.jpg" width="726" height="1" /></td>
                    </tr>
                  <tr>
                    <td align="center"><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','720','height','160','src','banner','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','banner' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="720" height="160">
                      <param name="movie" value="banner.swf" />
                      <param name="quality" value="high" />
                      <embed src="banner.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="720" height="160"></embed>
                    </object></noscript></td>
                  </tr>
                  <tr>
                    <td height="1"><img src="images/div-up.jpg" width="726" height="1" /></td>
                    </tr>
                </table></td>
              </tr>
              
            </table></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><img src="images/chica-truckmax.jpg" width="229" height="129" alt=""></td>
            <td></td>
            <td><table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="238" align="left"><img src="images/coaster.jpg" width="236" height="129" alt=""></td>
                <td width="256" align="right"><img src="images/alarmaGratis.jpg" width="254" height="129" alt=""></td>
                <td width="240" align="right"><img src="images/contact.jpg" width="238" height="129" alt=""></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td height="8"></td>
            <td></td>
            <td></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td><img src="images/bg_left-down.jpg" width="13" height="43" alt=""></td>
        <td width="968" height="43" align="center" background="images/bg_foot.jpg"><table width="960" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="580"><span class="txtwhite">TruckMax.com.pe © 2010</span> <span class="txtwhite">|</span> <span class="txtyellow">Politicas</span> <span class="txtwhite">|</span> <span class="txtyellow">Terminos de uso</span></td>
            <td width="200" class="txtwhite">Av. Javier Prado Este 5223 La Molina</td>
            <td width="180"><span class="txtwhite">Teléfono: 511 - 123 - 1234</span><br />
              <span class="txtwhite">Email:</span><a href="mailto:ventas@truckmax.com.pe" class="txtyellow">ventas@truckmax.com.pe</a></td>
          </tr>
        </table></td>
        <td><img src="images/bg_right-down.jpg" width="15" height="43" alt=""></td>
      </tr>
    </table></td>
  </tr>
</table>
</div>
</body>
</html>
