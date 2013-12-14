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
<title>.:: TruckMax ::.</title>
<style type="text/css">
<!--
body {
	margin-top: 0px;
	background-image: url(images/green_backTotal.jpg);
	background-repeat: repeat-x;
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
	window.open('detallepopup.php?producto='+valor ,'Detalle', 'resizable=yes,height=610,width=740,scrollbars=yes');
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
<table border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="25" valign="top"><img src="images/green_latLeftl.jpg" width="25" height="660" /></td>
    <td width="996" valign="top">
    <table width="996" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="996" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td>
        <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','996','height','266','src','head','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','head' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="996" height="266">
          <param name="movie" value="head.swf" />
          <param name="quality" value="high" />
          <embed src="head.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="996" height="266"></embed>
        </object></noscript>
        </td>
      </tr>
      <tr>
        <td valign="top"><table width="996" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td valign="top" background="images/bg_left.jpg"><img src="images/bg_left.jpg" width="13" height="712" alt=""></td>
            <td valign="top"><table width="968" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><img src="images/bg_midle.jpg" width="968" height="5" alt=""></td>
              </tr>
              <tr>
                <td><table width="968" border="0" cellspacing="0" cellpadding="0">
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
            </table>                    </td>
                    <td width="4"></td>
                    <td valign="top"><table border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td height="8"></td>
                        <td height="8"></td>
                        <td height="8"></td>
                      </tr>
                      <tr>
                        <td width="1" background="images/div-left.jpg"></td>
                        <td height="1"><img src="images/div-up.jpg" width="726" height="1" /></td>
                        <td width="1" background="images/div-left.jpg"></td>
                      </tr>
                      <tr>
                        <td width="1" background="images/div-left.jpg"></td>
                        <td align="center" valign="top">
                        <form action="carrito.php" method="post" name="frm1">
                        <input type="hidden" value="<?php echo $row_rs_query1['id_pro']?>" name="producto">
                        <table width="600" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td height="6" align="left" class="product"></td>
                          </tr>
                          <tr>
                            <td align="left" class="product">
                            <strong class="ruta"><?php echo $row_rs_query1['nombre_categoria']." - ".$row_rs_query1['nombre_subcategoria']." - ".$row_rs_query1['nom_pro_es']?></strong>                            </td>
                          </tr>
                          <tr>
                            <td>
                            <a href="<?php if($_GET['deta']){ echo "javascript:history.back()";}else{ if($_GET['pag']==1){ echo "index.php?empezar=".$_GET['empezar']; } if($_GET['pag']==2){ if(isset($_GET['subcate'])){ echo "subcategoria.php?empezar=".$_GET['empezar']."&subcate=".$_GET['subcate'];}else{ echo "subcategoria.php?empezar=".$_GET['empezar']."&subcate=".$row_rs_query1['id_subcat']; }}}?>" class="txtyellow"><strong>Back</strong></a>                            </td>
                          </tr>
                          <tr>
                            <td>
                            <table width="700" align="center">
                          <tr>
                            <td width="488" align="left" valign="top">
                              <table border="0" cellspacing="0" cellpadding="0">
                             <tr>
                               <td><img src="images/mar_det1.jpg" width="14" height="14" alt="" /></td>
                               <td height="14" background="images/mar_det2.jpg"></td>
                               <td><img src="images/mar_det3.jpg" width="14" height="14" alt="" /></td>
                               </tr>
                             <tr>
                               <td width="14" background="images/mar_det4.jpg"></td>
                               <td align="center"><a href="javascript:imagenGrande(<?php echo $row_rs_query1['id_pro']?>)"><img src="imagenes_producto_mediana/<?php echo $row_rs_query1['img_pro1']?>" name="foto1" width="400" border="0" /></a><a href="javascript:imagenGrande(<?php echo $row_rs_query1['id_pro']?>)"></a></td>
                               <td width="14" background="images/mar_det5.jpg"></td>
                               </tr>
                             <tr>
                               <td><img src="images/mar_det6.jpg" width="14" height="14" alt="" /></td>
                               <td height="14" background="images/mar_det7.jpg"></td>
                               <td><img src="images/mar_det8.jpg" width="14" height="14" alt="" /></td>
                               </tr>
                           </table>                            </td>
                            <td width="200" align="left" valign="top">
                            <table align="center" cellpadding="6">
                                <tr>
<td align="center">
<table border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                            <td height="1" background="images/div_sub_up.jpg"></td>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                          </tr>
                          <tr>
                            <td width="1" valign="top" background="images/div_sub.jpg"><img src="images/div_sub.jpg" width="1" height="80" /></td>
                            <td width="100" background="images/div_sub_degrade.jpg" style="background-image:url(images/div_sub_degrade.jpg); background-repeat:repeat-x;"><a href="javascript:nada()"><img src="imagenes_producto_chica_thumbnails/<?php echo $row_rs_query1['img_pro1']?>" width="100" border="0" onmouseover="cambiarImagen('imagenes_producto_mediana/<?php echo $row_rs_query1['img_pro1']?>','foto1')" style='padding:4px;' /></a></td>
                            <td width="1" valign="top" background="images/div_sub.jpg"><img src="images/div_sub.jpg" width="1" height="80" /></td>
                          </tr>
                          <tr>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                            <td height="1" background="images/div_sub_up.jpg"></td>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                          </tr>
                        </table></td>
                                  <?php
		  if($row_rs_query1['img_pro2']<>""){
	  ?>
  <td align="center">
  <table border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                            <td height="1" background="images/div_sub_up.jpg"></td>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                          </tr>
                          <tr>
                            <td width="1" valign="top" background="images/div_sub.jpg"><img src="images/div_sub.jpg" width="1" height="80" /></td>
                            <td width="100" background="images/div_sub_degrade.jpg" style="background-image:url(images/div_sub_degrade.jpg); background-repeat:repeat-x;">
                            <? 
							$imgfoto=$row_rs_query1['img_pro2'];
							if($imgfoto){ ?>
                            <a href="javascript:nada()"><img src="imagenes_producto_chica_thumbnails/<?php echo $row_rs_query1['img_pro2']?>" width="100" border="0" onMouseOver="cambiarImagen('imagenes_producto_mediana/<?php echo $row_rs_query1['img_pro2']?>','foto1')" style='padding:4px;'/></a>
                            <? } ?>
                            
                            </td>
                            <td width="1" valign="top" background="images/div_sub.jpg"><img src="images/div_sub.jpg" width="1" height="80" /></td>
                          </tr>
                          <tr>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                            <td height="1" background="images/div_sub_up.jpg"></td>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                          </tr>
                        </table>  </td>
                                  <?php
		  }
		  ?>
                                  <?php
		  if($row_rs_query1['img_pro3']<>""){
		  ?>
       <?php
		  }
		  ?>
           </tr>
                                <tr>
                                  <td align="center">
                                  <table border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                            <td height="1" background="images/div_sub_up.jpg"></td>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                          </tr>
                          <tr>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                            <td width="100" background="images/div_sub_degrade.jpg" style="background-image:url(images/div_sub_degrade.jpg); background-repeat:repeat-x;">
                            <? 
							$imgfoto=$row_rs_query1['img_pro3'];
							if($imgfoto){ ?>
                            <a href="javascript:nada()"><img src="imagenes_producto_chica_thumbnails/<?php echo $row_rs_query1['img_pro3']?>" width="100" border="0" onmouseover="cambiarImagen('imagenes_producto_mediana/<?php echo $row_rs_query1['img_pro3']?>','foto1')" style='padding:4px;' /></a>
                            <? } ?>
                            </td>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                          </tr>
                          <tr>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                            <td height="1" background="images/div_sub_up.jpg"></td>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                          </tr>
                        </table>                                  </td>
                                  <td align="center">
                                  <table border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                            <td height="1" background="images/div_sub_up.jpg"></td>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                          </tr>
                          <tr>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                            <td width="100" background="images/div_sub_degrade.jpg" style="background-image:url(images/div_sub_degrade.jpg); background-repeat:repeat-x;">
                            <? 
							$imgfoto=$row_rs_query1['img_pro4'];
							if($imgfoto){ ?>
                            <a href="javascript:nada()"><img src="imagenes_producto_chica_thumbnails/<?php echo $row_rs_query1['img_pro4']?>" width="100" border="0" onmouseover="cambiarImagen('imagenes_producto_mediana/<?php echo $row_rs_query1['img_pro4']?>','foto1')" style='padding:4px;' /></a>
                            <? } ?>
                            </td>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                          </tr>
                          <tr>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                            <td height="1" background="images/div_sub_up.jpg"></td>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                          </tr>
                        </table>                                  </td>
                                  </tr>
                                <tr>
                                  <td align="center">
                                  <table border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                            <td height="1" background="images/div_sub_up.jpg"></td>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                          </tr>
                          <tr>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                            <td width="100" background="images/div_sub_degrade.jpg" style="background-image:url(images/div_sub_degrade.jpg); background-repeat:repeat-x;">
                            <? 
							$imgfoto=$row_rs_query1['img_pro5'];
							if($imgfoto){ ?>
                            <a href="javascript:nada()"><img src="imagenes_producto_chica_thumbnails/<?php echo $row_rs_query1['img_pro5']?>" width="100" border="0" onmouseover="cambiarImagen('imagenes_producto_mediana/<?php echo $row_rs_query1['img_pro5']?>','foto1')" style='padding:4px;' /></a>
                            <? } ?>
                            </td>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                          </tr>
                          <tr>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                            <td height="1" background="images/div_sub_up.jpg"></td>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                          </tr>
                        </table>                                  </td>
                                  <td align="center">
                                  <table border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                            <td height="1" background="images/div_sub_up.jpg"></td>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                          </tr>
                          <tr>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                            <td width="100" background="images/div_sub_degrade.jpg" style="background-image:url(images/div_sub_degrade.jpg); background-repeat:repeat-x;">
                            <? 
							$imgfoto=$row_rs_query1['img_pro6'];
							if($imgfoto){ ?>
                            <a href="javascript:nada()"><img src="imagenes_producto_chica_thumbnails/<?php echo $row_rs_query1['img_pro6']?>" width="100" border="0" onMouseOver="cambiarImagen('imagenes_producto_mediana/<?php echo $row_rs_query1['img_pro6']?>','foto1')" style='padding:4px;'/></a>
                            <? } ?>
                            </td>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                          </tr>
                          <tr>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                            <td height="1" background="images/div_sub_up.jpg"></td>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                          </tr>
                        </table>                                  </td>
                                  </tr>
                                <tr>
                                  <td align="center">
                                  <table border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                            <td height="1" background="images/div_sub_up.jpg"></td>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                          </tr>
                          <tr>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                            <td width="100" background="images/div_sub_degrade.jpg" style="background-image:url(images/div_sub_degrade.jpg); background-repeat:repeat-x;">
                            <? 
							$imgfoto=$row_rs_query1['img_pro7'];
							if($imgfoto){ ?>
                            <a href="javascript:nada()"><img src="imagenes_producto_chica_thumbnails/<?php echo $row_rs_query1['img_pro7']?>" width="100" border="0" onMouseOver="cambiarImagen('imagenes_producto_mediana/<?php echo $row_rs_query1['img_pro7']?>','foto1')" style='padding:4px;'/></a>
                            <? } ?>
                            </td>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                          </tr>
                          <tr>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                            <td height="1" background="images/div_sub_up.jpg"></td>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                          </tr>
                        </table>                                  </td>
                                  <td align="center">
                                  <table border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                            <td height="1" background="images/div_sub_up.jpg"></td>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                          </tr>
                          <tr>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                            <td width="100" background="images/div_sub_degrade.jpg" style="background-image:url(images/div_sub_degrade.jpg); background-repeat:repeat-x;">
                            <? 
							$imgfoto=$row_rs_query1['img_pro8'];
							if($imgfoto){ ?>
                            <a href="javascript:nada()"><img src="imagenes_producto_chica_thumbnails/<?php echo $row_rs_query1['img_pro8']?>" width="100" border="0" onMouseOver="cambiarImagen('imagenes_producto_mediana/<?php echo $row_rs_query1['img_pro8']?>','foto1')" style='padding:4px;'/></a>
                            <? } ?>
                            </td>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                          </tr>
                          <tr>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                            <td height="1" background="images/div_sub_up.jpg"></td>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                          </tr>
                        </table>                                  </td>
                                  </tr>
                                <tr>
                                  <td align="center">
                                  <table border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                            <td height="1" background="images/div_sub_up.jpg"></td>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                          </tr>
                          <tr>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                            <td width="100" background="images/div_sub_degrade.jpg" style="background-image:url(images/div_sub_degrade.jpg); background-repeat:repeat-x;">
                            <? 
							$imgfoto=$row_rs_query1['img_pro9'];
							if($imgfoto){ ?>
                            <a href="javascript:nada()"><img src="imagenes_producto_chica_thumbnails/<?php echo $row_rs_query1['img_pro9']?>" width="100" border="0" onMouseOver="cambiarImagen('imagenes_producto_mediana/<?php echo $row_rs_query1['img_pro9']?>','foto1')" style='padding:4px;'/></a>
                            <? } ?>
                            </td>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                          </tr>
                          <tr>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                            <td height="1" background="images/div_sub_up.jpg"></td>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                          </tr>
                        </table>                                  </td>
                                  <td align="center">
                                  <table border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                            <td height="1" background="images/div_sub_up.jpg"></td>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                          </tr>
                          <tr>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                            <td width="100" background="images/div_sub_degrade.jpg" style="background-image:url(images/div_sub_degrade.jpg); background-repeat:repeat-x;">
                            <? 
							$imgfoto=$row_rs_query1['img_pro10'];
							if($imgfoto){ ?>
                            <a href="javascript:nada()"><img src="imagenes_producto_chica_thumbnails/<?php echo $row_rs_query1['img_pro10']?>" width="100" border="0" onmouseover="cambiarImagen('imagenes_producto_mediana/<?php echo $row_rs_query1['img_pro10']?>')"  style='padding:4px;'/></a>
                            <? } ?>
                            </td>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                          </tr>
                          <tr>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                            <td height="1" background="images/div_sub_up.jpg"></td>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                          </tr>
                        </table>                                  </td>
                                  </tr>
                                <tr>
                                  <td align="center">&nbsp;</td>
                                  <?
								  $cotizacion = $row_rs_query1['descarga'];
								  if($cotizacion<>""){
								   ?>
                                  <td align="center"><a href="cotizacion/<? echo $cotizacion ?>"><img src="images/btn-cotizacion.jpg" width="110" height="21" border="0"/></a></td>
                                  <? }else{?>
                                  <td></td>
								  <? } ?>
                                  </tr>
           </table>           </td>
                          </tr>
                          <?php
  if($row_rs_query1['img_pro2']<>"" or $row_rs_query1['img_pro3']<>""){
  ?>
                          
                          <?php
  }
  ?>
                       </table>                            </td>
                          </tr>
                          <tr>
                            <td>
                            <table border="0" cellspacing="0" cellpadding="0">
                               <tr>
                                 <td><img src="images/detalle2_32.jpg" width="14" height="40" alt=""></td>
                                 <td width="338"><table border="0" cellspacing="0" cellpadding="0">
                                   <tr>
                                     <td height="40" align="left" background="images/detalle2_33.jpg"><table width="317" border="0" cellspacing="0" cellpadding="0">
                                       <tr>
                                         <td class="product"><strong>Descripción Técnica</strong></td>
                                       </tr>
                                     </table></td>
                                     <td><img src="images/detalle2_34.jpg" width="20" height="40" alt="" /></td>
                                   </tr>
                                 </table></td>
                                 <td width="357" valign="bottom"><img src="images/detalle2_36.jpg" width="359" height="13" alt=""></td>
                                 <td valign="bottom"><img src="images/detalle2_37.jpg" width="5" height="13" alt="" /></td>
                                 </tr>
                               <tr>
                                 <td width="14" background="images/detalle2_38.jpg"></td>
                                 <td colspan="2" align="left" valign="top"><table width="690" border="0" cellpadding="0" cellspacing="3">
                                   <tr>
                                     <td><div align="left" class="texto"><strong><?php echo $row_rs_query1['nom_pro_es']?></strong></div></td>
                                   </tr>
                                   <tr>
                                     <td><div align="left" class="texto"><?php echo $row_rs_query1['des_cor_es']?></div></td>
                                   </tr>
                                   <tr>
                                     <td><div align="left" class="texto"><?php echo $row_rs_query1['des_lar_es']?></div></td>
                                   </tr>
                                   <tr>
                                     <td><table width="690" border="0" cellspacing="0" cellpadding="0">
                                       <tr>
                                         <td>
                                         <!-- inicio de consulta para descripcion tecnica-->
                                         <?
                                         $query11 = "SELECT * FROM `des_lar_det` where id_pro='".$id_pro."'  limit 1 ";
										$rs_query11 = mysql_query($query11, $cn) or die(mysql_error());
										$row_rs_query11 = mysql_fetch_assoc($rs_query11);
?>
                                         <table width="300" border="0" cellspacing="0" cellpadding="0">
                                           <tr>
                                             <td width="140" class="texto">Categoría del Vehículo</td>
                                             <td class="texto"><? echo $row_rs_query11["cat_veh"] ?></td>
                                           </tr>
                                           <tr>
                                             <td width="140" class="texto">Modelo</td>
                                             <td class="texto"><? echo $row_rs_query11["model"] ?></td>
                                           </tr>
                                           <tr>
                                             <td width="140" class="texto">País de Fabricación</td>
                                             <td class="texto"><? echo $row_rs_query11["pais_fab"] ?></td>
                                           </tr>
                                           <tr>
                                             <td width="140" class="texto">Modelo de Motor</td>
                                             <td class="texto"><? echo $row_rs_query11["model_mot"] ?></td>
                                           </tr>
                                           <tr>
                                             <td width="140" class="texto">Numero de Pasajeros</td>
                                             <td class="texto"><? echo $row_rs_query11["num_pas"] ?></td>
                                           </tr>
                                           <tr>
                                             <td width="140" class="texto">Numero de Puertas</td>
                                             <td class="texto"><? echo $row_rs_query11["num_pue"] ?></td>
                                           </tr>
                                         </table>                                         </td>
                                         <td>
                                         <table width="300" border="0" cellspacing="0" cellpadding="0">
                                           <tr>
                                             <td width="140" class="texto">Marca</td>
                                             <td class="texto"><? echo $row_rs_query11["mar"] ?></td>
                                           </tr>
                                           <tr>
                                             <td width="140" class="texto">Fabricación del Vahículo</td>
                                             <td class="texto"><? echo $row_rs_query11["fab_veh"] ?></td>
                                           </tr>
                                           <tr>
                                             <td width="140" class="texto">Marca del Motor</td>
                                             <td class="texto"><? echo $row_rs_query11["mar_mot"] ?></td>
                                           </tr>
                                           <tr>
                                             <td width="140" class="texto">Combustible</td>
                                             <td class="texto"><? echo $row_rs_query11["combustible"] ?></td>
                                           </tr>
                                           <tr>
                                             <td width="140" class="texto">Numero de Asientos</td>
                                             <td class="texto"><? echo $row_rs_query11["num_asi"] ?></td>
                                           </tr>
                                           <tr>
                                             <td width="140" class="texto">Colores</td>
                                             <td class="texto"><? echo $row_rs_query11["color"] ?></td>
                                           </tr>
                                         </table>                                         </td>
                                       </tr>
                                       <tr>
                                         <td>&nbsp;</td>
                                         <td>&nbsp;</td>
                                       </tr>
                                       <tr>
                                         <td>
                                         <table width="300" border="0" cellspacing="0" cellpadding="0">
                                           <tr>
                                             <td width="140" class="texto">Direccion</td>
                                             <td class="texto"><? echo $row_rs_query11["direc"] ?></td>
                                           </tr>
                                           <tr>
                                             <td width="140" class="texto">Frenos de servcico</td>
                                             <td class="texto"><? echo $row_rs_query11["fre_ser"] ?></td>
                                           </tr>
                                           <tr>
                                             <td width="140" class="texto">Ubicacion de Motor</td>
                                             <td class="texto"><? echo $row_rs_query11["ubi_mot"] ?></td>
                                           </tr>
                                           <tr>
                                             <td width="140" class="texto">Numero de Cilindros</td>
                                             <td class="texto"><? echo $row_rs_query11["num_cil"] ?></td>
                                           </tr>
                                         </table>                                         </td>
                                         <td>
                                         <table width="300" border="0" cellspacing="0" cellpadding="0">
                                           <tr>
                                             <td width="140" class="texto">Frenos delanteros</td>
                                             <td class="texto"><? echo $row_rs_query11["fre_del"] ?></td>
                                           </tr>
                                           <tr>
                                             <td width="140" class="texto">Frenos Posteriores</td>
                                             <td class="texto"><? echo $row_rs_query11["fre_post"] ?></td>
                                           </tr>
                                           <tr>
                                             <td width="140" class="texto">Posición de Motor</td>
                                             <td class="texto"><? echo $row_rs_query11["pos_mot"] ?></td>
                                           </tr>
                                           <tr>
                                             <td width="140" class="texto">Configuración de Motor</td>
                                             <td class="texto"><? echo $row_rs_query11["conf_mot"] ?></td>
                                           </tr>
                                         </table>                                         </td>
                                       </tr>
                                       <tr>
                                         <td>&nbsp;</td>
                                         <td>&nbsp;</td>
                                       </tr>
                                       <tr>
                                         <td>
                                         <table width="300" border="0" cellspacing="0" cellpadding="0">
                                           <tr>
                                             <td width="140" class="texto">Largo Total (Mm.)</td>
                                             <td class="texto"><? echo $row_rs_query11["lar_tot"] ?></td>
                                           </tr>
                                           <tr>
                                             <td width="140" class="texto">Alto Total (Mm.)</td>
                                             <td class="texto"><? echo $row_rs_query11["alt_tot"] ?></td>
                                           </tr>
                                           <tr>
                                             <td width="140" class="texto">Ancho Total (Mm.)</td>
                                             <td class="texto"><? echo $row_rs_query11["anc_tot"] ?></td>
                                           </tr>
                                           <tr>
                                             <td width="140" class="texto">Largo Carrozable</td>
                                             <td class="texto"><? echo $row_rs_query11["lar_car"] ?></td>
                                           </tr>
                                           <tr>
                                             <td width="140" class="texto">Alto Carrozable</td>
                                             <td class="texto"><? echo $row_rs_query11["alt_car"] ?></td>
                                           </tr>
                                           <tr>
                                             <td width="140" class="texto">Ancho Carrozable</td>
                                             <td class="texto"><? echo $row_rs_query11["anc_car"] ?></td>
                                           </tr>
                                         </table>                                         </td>
                                         <td>
                                         <table width="300" border="0" cellspacing="0" cellpadding="0">
                                           <tr>
                                             <td width="140" class="product">Numero de Ejes</td>
                                             <td class="texto"><? echo $row_rs_query11["num_eje"] ?></td>
                                           </tr>
                                           <tr>
                                             <td width="140" class="product">Distancia entre Ejes (m)</td>
                                             <td class="texto"><? echo $row_rs_query11["dist_eje"] ?></td>
                                           </tr>
                                           <tr>
                                             <td width="140" class="product">Peso Bruto</td>
                                             <td class="texto"><? echo $row_rs_query11["pes_bru"] ?></td>
                                           </tr>
                                           <tr>
                                             <td width="140" class="product">Capacidad de Carga</td>
                                             <td class="texto"><? echo $row_rs_query11["cap_car"] ?></td>
                                           </tr>
                                           <tr>
                                             <td width="140" class="product">Peso Neto</td>
                                             <td class="texto"><? echo $row_rs_query11["pes_net"] ?></td>
                                           </tr>
                                           <tr>
                                             <td width="140" class="product">Formula Rodante</td>
                                             <td class="texto"><? echo $row_rs_query11["for_rod"] ?></td>
                                           </tr>
                                         </table>                                         </td>
                                       </tr>
                                       <tr>
                                         <td>&nbsp;</td>
                                         <td>&nbsp;</td>
                                       </tr>
                                       <tr>
                                         <td>
                                         <table width="300" border="0" cellspacing="0" cellpadding="0">
                                           <tr>
                                             <td width="140" class="texto">Cilindrada</td>
                                             <td class="texto"><? echo $row_rs_query11["cilindrada"] ?></td>
                                           </tr>
                                           <tr>
                                             <td width="140" class="texto">Neumáticos</td>
                                             <td class="texto"><? echo $row_rs_query11["neumaticos"] ?></td>
                                           </tr>
                                           <tr>
                                             <td width="140" class="texto">Tracción</td>
                                             <td class="texto"><? echo $row_rs_query11["traccion"] ?></td>
                                           </tr>
                                         </table>                                         </td>
                                         <td>
                                         <table width="300" border="0" cellspacing="0" cellpadding="0">
                                           <tr>
                                             <td width="140" class="texto">Potencia máxima</td>
                                             <td class="texto"><? echo $row_rs_query11["pot_max"] ?></td>
                                           </tr>
                                           <tr>
                                             <td width="140" class="texto">Número de Ruedas</td>
                                             <td class="texto"><? echo $row_rs_query11["num_rue"] ?></td>
                                           </tr>
                                           <tr>
                                             <td width="140" class="texto">Tipo de Caja</td>
                                             <td class="texto"><? echo $row_rs_query11["tip_caj"] ?></td>
                                           </tr>
                                         </table></td>
                                       </tr>
                                     </table></td>
                                   </tr>
                                   <tr>
                                     <td>&nbsp;</td>
                                   </tr>
                                   <tr>
                                     <td>&nbsp;</td>
                                   </tr>
                                   <tr>
                                     <td>&nbsp;</td>
                                   </tr>
                                 </table></td>
                                 <td width="10" background="images/detalle2_40.jpg"></td>
                                 </tr>
                               <tr>
                                 <td><img src="images/detalle2_41.jpg" width="14" height="5" alt="" /></td>
                                 <td height="5" colspan="2" background="images/detalle2_42.jpg"><img src="images/detalle2_42.jpg" width="694" height="5" alt="" /></td>
                                 <td><img src="images/detalle2_43.jpg" width="5" height="5" alt="" /></td>
                                 </tr>
                             </table>                            </td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                          </tr>
                        </table>
                        </form>                       </td>
                        <td width="1" background="images/div-left.jpg"></td>
                      </tr>
                      <tr>
                        <td width="1" background="images/div-left.jpg"></td>
                        <td height="1"><img src="images/div-up.jpg" width="726" height="1" /></td>
                        <td width="1" background="images/div-left.jpg"></td>
                      </tr>
                      <tr>
                        <td width="1" background="images/div-left.jpg"></td>
                        <td align="center">
                        <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','720','height','160','src','banner','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','banner' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="720" height="160">
                      <param name="movie" value="banner.swf" />
                      <param name="quality" value="high" />
                      <embed src="banner.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="720" height="160"></embed>
                    </object></noscript>                        </td>
                        <td width="1" background="images/div-left.jpg"></td>
                      </tr>
                      <tr>
                        <td width="1" background="images/div-left.jpg"></td>
                        <td height="1"><img src="images/div-up.jpg" width="726" height="1" /></td>
                        <td width="1" background="images/div-left.jpg"></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>&nbsp;</td>
                        <td></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><img src="images/chica-truckmax.jpg" width="229" height="129" alt="" /></td>
                    <td></td>
                    <td>
                    <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="238" align="left"><img src="images/coaster.jpg" width="236" height="129" alt=""></td>
                <td width="256" align="right"><img src="images/alarmaGratis.jpg" width="254" height="129" alt=""></td>
                <td width="240" align="right"><img src="images/contact.jpg" width="238" height="129" alt=""></td>
              </tr>
            </table>                    </td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
            <td background="images/bg_right.jpg" valign="top"><img src="images/bg_right.jpg" width="15" height="712" alt=""></td>
          </tr>
          <tr>
            <td><img src="images/bg_left-down.jpg" width="13" height="43" alt=""></td>
            <td width="968" height="43" align="center" background="images/bg_foot.jpg"><table width="960" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="290"><span class="txtwhite">TruckMax.com.pe © 2010</span> <span class="txtwhite">|</span> <span class="txtyellow">Politicas</span> <span class="txtwhite">|</span> <span class="txtyellow">Terminos de uso</span></td>
            <td width="200" class="txtwhite">Av. Javier Prado Este 5223 La Molina</td>
            <td width="290"><span class="txtwhite">Teléfono: 250 - 1452 </span>&nbsp; &nbsp;
              <span class="txtwhite">Email:</span><a href="mailto:ventas@truckmax.com.pe" class="txtyellow">ventas@truckmax.com.pe</a></td>
            <td width="180" align="right"><span class="txtwhite">Desarrollado por:</span> <span class="pixel"><a href="http://www.pixelgraphicperu.com/" target="_blank" class="pixel">Pixel</a></span><a href="http://www.pixelgraphicperu.com/" class="graphic" target="_blank"><span class="graphic">Graphic</span></a></td>
          </tr>
        </table></td>
            <td><img src="images/bg_right-down.jpg" width="15" height="43" alt="" /></td>
          </tr>
        </table></td>
      </tr>
      
    </table></td>
  </tr>
</table>
    </td>
    <td valign="top"><img src="images/green_latright.jpg" width="25" height="800" /></td>
  </tr>
</table>
</body>
</html>
