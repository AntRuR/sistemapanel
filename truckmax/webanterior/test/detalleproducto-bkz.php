<?php
session_start();
require_once('Connections/cn.php');
mysql_select_db($database_cn, $cn);
$id_pro = $_GET['producto'];
$query1 = "select a.*,b.des_cat_es as nombre_categoria,c.des_subcat_es as nombre_subcategoria from producto a,categoria b,subcategoria c where a.id_pro='".$id_pro."' and a.id_cat=b.id_cat and a.id_subcat=c.id_subcat";
$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
$row_rs_query1 = mysql_fetch_assoc($rs_query1);
//HACIENDO EL CODIGO PARA ABRIR EL MENU
$menu = "onLoad='mostrarCategoria(".$row_rs_query1['id_cat'].",".$row_rs_query1['id_subcat'].")'";
/*
--------------------------------------
		LOS ARREGLOS SON
--------------------------------------
codigocategoria
categoriaes (español)
categoriaen (ingles)
codigosubcategoria
subcategoriaes (español)
subcategoriaen (ingles)
----------------------------------
		PARA LOS PRODUCTOS
----------------------------------
productoimagen
productonombrees
productonombreen
productoprecio
*/
$query1_1 = "select * from categoria";
$rs_query1_1 = mysql_query($query1_1, $cn) or die(mysql_error());
$row_rs_query1_1 = mysql_fetch_assoc($rs_query1_1);
$query2_2 = "select * from subcategoria";
$rs_query2_2 = mysql_query($query2_2, $cn) or die(mysql_error());
$row_rs_query2_2 = mysql_fetch_assoc($rs_query2_2);
$i = 0;
do{
	$codigocategoria[$i]=$row_rs_query1_1["id_cat"];
	$categoriaes[$i]=$row_rs_query1_1["des_cat_es"];
	$i=$i+1;
}while($row_rs_query1_1 = mysql_fetch_array($rs_query1_1));
$j = 0;
do{
	$codigosubcategoria[$j]=$row_rs_query2_2["id_cat"];
	$codigosubcategoria2[$j]=$row_rs_query2_2["id_subcat"];
	$subcategoriaes[$j]=$row_rs_query2_2["des_subcat_es"];
	$j=$j+1;
}while($row_rs_query2_2 = mysql_fetch_array($rs_query2_2));
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
function cambiarIdioma(valor){
		//alert(valor);
		window.location.href='cambiaridioma.php?idi='+valor+"&url="+document.URL;
	}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

function cambiarImagen(valor,foto1){
	document.foto1.src = valor;
}
function mostrarColor(obj,valor)
{
    objOriginal = obj;
    var Yo = 0;
    var Xo = 0;
    while(obj.nodeName != "BODY")
    {
        Yo += parseInt(obj.offsetTop);
        Xo += parseInt(obj.offsetLeft);
        obj = obj.parentNode;
   }   
	var X1 = parseInt(Xo) + parseInt(objOriginal.offsetWidth);
	var Y1 = parseInt(Yo) + parseInt(objOriginal.offsetHeight);
//	showSwatch("SwatchBox");
//	moveElement('SwatchBox', Xo, Yo-246);
	//alert("Xo= "+Xo+"\n X1="+X1+"\n Yo= "+Yo+"\n Y1= "+Y1);
	document.getElementById("resumenColor").style.left = Xo-35;
	document.getElementById("resumenColor").style.top = 230;
	document.getElementById("resumenColor").style.visibility = "visible";
    ObtenerDatos('detalleproducto-color.php?color='+valor,'resumenColor');
}
function ocultarColor(){
	document.getElementById("resumenColor").style.visibility = "hidden";
}
function imagenGrande(valor){
	window.open('detallepopup.php?producto='+valor ,'Detalle', 'resizable=no,height=610,width=570,scrollbars=yes');
}
function nada(){}
function validar(){
	//valor1 = document.frm1.talla.value;
	valor2 = document.frm1.cantidad.value;
	//valor3 = document.frm1.color.value;	
	valor4 = document.frm1.producto.value;
	/*if(valor1==0){
		alert("Choose your size");
		return document.frm1.talla.focus();
     }*/
	if(valor2==0){
		alert("Select Units");
        return document.frm1.cantidad.focus();
	}
	/*if(valor3=="sincolor"){
		alert("Choose a color");
		return document.frm1.color.focus();
	}*/
	//alert('carrito.php?talla='+valor1+'&cantidad='+valor2+'&color='+valor3+'producto='+valor4);
	ObtenerDatos('carrito.php?cantidad='+valor2+'&producto='+valor4+'&fecha='+Date(),'carrito');
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
                    <table width="720" border="0" align="left" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="4" height="27">&nbsp;</td>
                    <td valign="top"><form action="carrito.php" method="post" name="frm1">
                        <p>
                          <input name="producto" type="hidden" class="ruta" value="<?php echo $row_rs_query1['id_pro']?>">
                        </p>
                        <table width="690" height="349" align="center">
                          <tr>
                            <td colspan="2" align="left" class="product"><strong><?php echo $row_rs_query1['nombre_categoria']." - ".$row_rs_query1['nombre_subcategoria']." - ".$row_rs_query1['nom_pro_es']?></strong></td>
                          </tr>
                          <tr>
                            <td colspan="2" align="left"><a href="<?php if($_GET['deta']){ echo "javascript:history.back()";}else{ if($_GET['pag']==1){ echo "index.php?empezar=".$_GET['empezar']; } if($_GET['pag']==2){ if(isset($_GET['subcate'])){ echo "subcategoria.php?empezar=".$_GET['empezar']."&subcate=".$_GET['subcate'];}else{ echo "subcategoria.php?empezar=".$_GET['empezar']."&subcate=".$row_rs_query1['id_subcat']; }}}?>" class="txtyellow"><strong>Back</strong></a> </td>
                          </tr>
                          <tr>
    <td width="274" align="center"><a href="javascript:imagenGrande(<?php echo $row_rs_query1['id_pro']?>)">
   </a><a href="javascript:imagenGrande(<?php echo $row_rs_query1['id_pro']?>)"><span style="border:solid; border: #E8E8E8; border-width:thin"><img name="foto1" src="imagenes_producto_mediana/<?php echo $row_rs_query1['img_pro1']?>" border="0" width="250" /></span></a><a href="javascript:imagenGrande(<?php echo $row_rs_query1['id_pro']?>)"><span style="border:solid; border: #E8E8E8; border-width:thin"></span></a><a href="javascript:imagenGrande(<?php echo $row_rs_query1['id_pro']?>)">
   <p  style="border:solid; border: #E8E8E8; border-width:thin">&nbsp;</p>
   </a></td>
                            <td width="404" align="right" valign="top"><table width="400">
                              <tr>
                    <td align="left" class="precio"><div align="left" class="product"><strong><?php echo $row_rs_query1['nom_pro_es']?></strong></div></td>
                              </tr>
                                <tr>
                                  <td align="left" class="texto"><div align="left" class="product"><?php echo $row_rs_query1['des_cor_es']?></div></td>
                              </tr>
                                <tr>
                                  <td height="26" align="left" class="ruta">
								  <? echo "Price US$ :" . $row_rs_query1['pre_ven']; ?></td>
                              </tr>
                                <tr>
                                  <td align="left">
                                    <select name="cantidad" class="product">
                                      <option value="0">unidades</option>
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                  </select></td>
                              </tr>
                                <tr>
                                  <td colspan="2" align="left"><p style="margin-top:8px; margin-left:10px "><a href="javascript:validar()"><img src="images/btn-comprar.jpg" border="0"></a></p></td>
                                </tr>
                              </table></td>
                          </tr>
                          <?php
  if($row_rs_query1['img_pro2']<>"" or $row_rs_query1['img_pro3']<>""){
  ?>
                         <tr>
                            <td><table width="218" align="center">
                                <tr>
<td align="center"><a href="javascript:nada()"><img src="imagenes_producto_chica_thumbnails/<?php echo $row_rs_query1['img_pro1']?>" border="0" onMouseOver="cambiarImagen('imagenes_producto_mediana/<?php echo $row_rs_query1['img_pro1']?>','foto1')" /></a></td>
                                  <?php
		  if($row_rs_query1['img_pro2']<>""){
	  ?>
  <td align="center"><a href="javascript:nada()"><img src="imagenes_producto_chica_thumbnails/<?php echo $row_rs_query1['img_pro2']?>" border="0" onMouseOver="cambiarImagen('imagenes_producto_mediana/<?php echo $row_rs_query1['img_pro2']?>','foto1')"/></a></td>
                                  <?php
		  }
		  ?>
                                  <?php
		  if($row_rs_query1['img_pro3']<>""){
		  ?>
       <td align="center"><a href="javascript:nada()"><img src="imagenes_producto_chica_thumbnails/<?php echo $row_rs_query1['img_pro3']?>" border="0" onMouseOver="cambiarImagen('imagenes_producto_mediana/<?php echo $row_rs_query1['img_pro3']?>')"/></a></td>
                                  <?php
		  }
		  ?>
           </tr>
           </table></td>
            </tr>
               <?php
  }
  ?>
    </table>
            </form><!--Aca empieza-->
                     <div id="carrito" align="center">
                  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
                     <tr>
<td height="30" colspan="6" align="center" valign="bottom"><p class="title-cart"><strong> CARRITO DE COMPRAS</strong></p></td>
             </tr>
                <tr>
                  <td width="49" height="24" align="center" valign="middle" bgcolor="#DDDDDD" class="product"><strong>Item</strong></td>
                  <td width="152" align="center" valign="middle" bgcolor="#DDDDDD" class="product"><strong>Productos</strong></td>
            <td width="144" align="center" valign="middle" bgcolor="#DDDDDD" class="product"><strong>Precio Unitario</strong></td>
                     <td width="58" align="center" valign="middle" bgcolor="#DDDDDD" class="product"><strong>Cantidad</strong></td>
                     <td width="40" align="center" valign="middle" bgcolor="#DDDDDD" class="product"><strong>Precio</strong></td>
                        </tr>
                          <?php
$montototal = 0;
$item = 0;
for($i=1;$i<=$_SESSION['contador'];$i++){
	if($_SESSION["producto".$i]<>""){
		$item = $item + 1;
		if($_SESSION["color".$i]==0){
		$query1 = "select a.nom_pro_es, a.pre_ven, a.pre_ofer, a.img_pro1 from producto a where a.id_pro='".$_SESSION["producto".$i]."'";
		$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
		$row_rs_query1 = mysql_fetch_assoc($rs_query1);
			if($row_rs_query1['pre_ofer']<>""){
				$total = $_SESSION["cantidad".$i]*$row_rs_query1['pre_ofer'];
			}else{
				$total = $_SESSION["cantidad".$i]*$row_rs_query1['pre_ven'];
			}
		$montototal = $montototal + $total;
			
		?>
        <tr>
<td align="center" valign="middle" class="Type10B"><p style="margin-top:3px; margin-bottom:3px"><img src="imagenes_producto_chica_thumbnails/<?php echo $row_rs_query1['img_pro1']?>" border="0"></p></td>
       <td align="center" valign="middle" class="Type10B"><span class="product"><strong><?php echo $row_rs_query1['nom_pro_es']?></strong></span></td>
       <td align="center" valign="middle" class="product"><b>
                       <? 
								  $oferta = $row_rs_query1["pre_ofer"];
								  if($oferta<>""){
								  echo "Offer Price $ :".$oferta;
								  }else{
								  echo "Price US$ :" . $row_rs_query1['pre_ven'];
								  
								   }
								  ?>
                     </b></td>
           <td align="center" valign="middle" class="product"><?php echo $_SESSION["cantidad".$i]?></td>
        <!-- <td align="center" valign="middle" class="Type10B">$<?php// echo $total?></td>-->
<td align="center" valign="middle" class="product"><strong>S/.
  <? 
                                  echo $total  ;
								  
								   ?>
</strong></td>
                        </tr>
                          <?php
		}else{
			$query1 = "select a.id_pro, a.nom_pro_es, a.pre_ven, a.img_pro1 from producto a where a.id_pro='".$_SESSION["producto".$i]."'";
		$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
		$row_rs_query1 = mysql_fetch_assoc($rs_query1);
		$total = $_SESSION["cantidad".$i]*$row_rs_query1['pre_ven'];
		$montototal = $montototal + $total;
		?>
                          <tr>
                            <td align="center" valign="middle"><img src="imagenes_producto_chica_thumbnails/<?php echo $row_rs_query1['img_pro1']?>" border="0">x</td>
                     <td align="center" valign="middle" class="product"><?php echo $row_rs_query1['nom_pro_es']?></td>
                      <td align="center" valign="middle" class="product"><? 
								  $oferta = $row_rs_query1["pre_ofer"];
								  if($oferta<>""){
								  echo "Offer Price S/. :".$oferta;
								  }else{
								  echo "Price S/. :" . $row_rs_query1['pre_ven'];
								  
								   }
								  ?></td>
                      <td align="center" valign="middle"><?php echo $_SESSION["cantidad".$i]?></td>
<td align="center" valign="middle" class="product"><strong>S/.
  <? 
                                  echo $total  ;
								 
							   ?>
</strong></td>
                        </tr>
                         <?php
		}
	}
}

?>
                       <tr>
                           <td colspan="4" align="right" valign="middle" class="product"><strong>Total</strong></td>
                           <td align="center" valign="middle" class="product"><strong>S/.
                             <? echo $montototal  ;?>
                           </strong></td>
                        </tr>
                       </table>
                      </div>
                     <!--aca acaba-->
                     <div align="right"><a href="shopping_cart.php"><img src="images/continuar-orden.jpg" border="0"/></a>&nbsp; &nbsp;</div>
<table align="center">
                           <?php
               $query4 = "select * from relacionproducto where id_pro='".$row_rs_query1['id_pro']."'";
			   $rs_query4 = mysql_query($query4, $cn) or die(mysql_error());
			   $row_rs_query4 = mysql_fetch_assoc($rs_query4);
				if($row_rs_query4['id_pro_rel']<>""){
					?>
                        <tr>
                          <td colspan="3" align="left" class="precio">Choose other similar products</td>
                        </tr>
                        <tr>
                             <?php
							do{
							$query1 = "select a.*,b.des_cat_es as nombre_categoria,c.des_subcat_es as nombre_subcategoria from producto a,categoria b,subcategoria c where a.id_pro='".$row_rs_query4['id_pro_rel']."' and a.id_cat=b.id_cat and a.id_subcat=c.id_subcat";
							$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
							$row_rs_query1 = mysql_fetch_assoc($rs_query1);
								?>
                          <td><table width="167" border="0" cellpadding="0" cellspacing="1" bgcolor="e1e1e1" >
                              <tr>
                                <td height="153" align="center" bgcolor="fafafa"><table width="150" border="0" cellpadding="7" cellspacing="0" >
                                    <tr>
                                      <td align="center"><a href='detalleproducto.php?producto=<?php echo $row_rs_query1['id_pro'] ?>&empezar=<?php echo $_GET['empezar']?>&pag=<?php echo $_GET['pag']?>&deta=<?php echo $row_rs_query1['id_pro'] ?>'><img src="imagenes_producto_chica/<?php echo $row_rs_query1['img_pro1']?>" border="0"></a></td>
                                    </tr>
                                    <tr>
                                      <td align="center"><div align="left" class="texto"><?php echo $row_rs_query1['nom_pro_es']?></div></td>
                                    </tr>
                                  </table></td>
                              </tr>
                              <tr>
                                <td height="25" align="center" valign="bottom"><table width="100%" border="0" cellpadding="6" cellspacing="0" class="text">
                                    <tr align="center">
                                      <td width="39%" height="24" bgcolor="#45443c"><strong><font color="#FFFFFF">Detail</font></strong></td>
                                      <td width="61%" bgcolor="#c7c5b4"><strong class="199"><font color="#FFFFFF"><?php echo $row_rs_query1['pre_ven'] ?></font></strong></td>
                                  </tr>
                                  </table></td>
                              </tr>
                            </table></td>
                          <?php
							}while($row_rs_query4 = mysql_fetch_array($rs_query4));	
                        }					  
                         ?>
                        </tr>
                      </table>
                      <p>&nbsp;</p></td>
                </tr>
              </table>
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
