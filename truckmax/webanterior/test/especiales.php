<?php
session_start();
$top30 = "";
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

	if(isset($_GET['empezar'])){
		$query4 = "SELECT * FROM `producto` WHERE `especial`<>'' ORDER BY `producto`.`id_pro` DESC limit ".$empezar.",6";
	}else{
		$query4 = "SELECT * FROM `producto` WHERE  `especial`<>'' ORDER BY `producto`.`id_pro` DESC limit 0,6";
	}

//PARA EL PAGINADOR DELOSPRODUCTOS
//para ver si es el top 30 te quedaste asca en el top 30
if($_GET['subcate']==16){
	$query5 = "select count(*) as cantidad from top30";
}else{
	$query5 = "select count(*) as cantidad from producto where `pre_ofer` >= '1' ";
}
$rs_query5 = mysql_query($query5, $cn) or die(mysql_error());
$row_rs_query5 = mysql_fetch_assoc($rs_query5);
$cantidad = ceil($row_rs_query5['cantidad']/6);
$rs_query4 = mysql_query($query4, $cn) or die(mysql_error());
$row_rs_query4 = mysql_fetch_assoc($rs_query4);
$i = 0;
do{
	$codigocategoria[$i]=$row_rs_query1["id_cat"];
	$categoriaes[$i]=$row_rs_query1["des_cat_es"];
	$i=$i+1;
}while($row_rs_query1 = mysql_fetch_array($rs_query1));
$j = 0;
do{
	//jalando las imagenes
	if($row_rs_query2["id_subcat"]==$_GET['subcate']){
		$img_sub = $row_rs_query2["img_sub"];
		$menu_cat = $row_rs_query2["id_cat"];
	}
	$codigosubcategoria[$j]=$row_rs_query2["id_cat"];
	$codigosubcategoria2[$j]=$row_rs_query2["id_subcat"];
	$subcategoriaes[$j]=$row_rs_query2["des_subcat_es"];
	$comentario_sc[$j]=$row_rs_query2["coment_sc"];
	$j=$j+1;
}while($row_rs_query2 = mysql_fetch_array($rs_query2));
$k = 0;
do{
	$nombre_categoria = $row_rs_query4["nombre_categoria"];
	$nombre_subcategoria = $row_rs_query4["nombre_subcategoria"];
	$productocodigo[$k]=$row_rs_query4["id_pro"];
	$productoimagen[$k]=$row_rs_query4["img_pro1"];
	$productonombrees[$k]=$row_rs_query4["nom_pro_es"];
	$productoprecio[$k]=$row_rs_query4["pre_ven"];
	$k=$k+1;
}while($row_rs_query4 = mysql_fetch_array($rs_query4));
//viendo si es del top30
if($_GET['subcate']==16){
$nombre_categoria = "TOP 30";
$nombre_subcategoria = "TOP 30";
$top30 = "&subcate=16";
}
//HACIENDO EL CODIGO PARA ABRIR EL MENU
if(isset($_GET['subcate'])){
	$menu = "onLoad='mostrarCategoria(".$menu_cat.",".$_GET['subcate'].")'";
}else{
	$menu = " ";
}
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
<script type="text/javascript" src="js/funciones.js"></script>
<link rel="stylesheet" type="text/css" href="style-article.css"/>
<link rel="stylesheet" type="text/css" href="style-help.css"/>
<script language="javascript" type="text/javascript" src="js/bookmarks.js"></script>
<script src="js/AC_RunActiveContent.js" type="text/javascript"></script>
<script type="text/javascript" src="js/funcionestabs.js"></script>
<script type="text/javascript" src="js/funciones.js"></script>
<link href="estilos/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="cuerpo">
<table border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top"><img src="images/green_latLeftl.jpg" width="25" height="660" /></td>
    <td valign="top">
    <table width="996" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="996"><table width="996" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="3"><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','996','height','266','src','head','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','head' ); //end AC code
        </script>
          <noscript>
          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="996" height="266">
            <param name="movie" value="head.swf" />
            <param name="quality" value="high" />
            <embed src="head.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="996" height="266"></embed>
          </object>
          </noscript>          </td>
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
            <td><img src="images/bg_title.jpg" width="56" height="16" /><img src="images/title-nuestros-vehiculos.jpg" width="150" height="16" /></td>
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
                    <td align="center" valign="top">
                    <table width="700" border="0" cellpadding="0" cellspacing="0" style="width:100%">
                      <tr>
                        <td height="28" class="ruta">ESPECIALES               </td>
                        </tr>
                      <tr>
                        <td height="28">
                        <table width="716" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                            <td height="1" background="images/div_sub_up.jpg"></td>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                          </tr>
                          <tr>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                            <td height="60" align="center" valign="top" background="images/div_sub_degrade.jpg" style="background-image:url(images/div_sub_degrade.jpg); background-repeat:repeat-x;">
                              <table width="700" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                              <? //consulta para identificar el comentario de subcategoria
							  	$query22 = "SELECT * FROM `subcategoria` WHERE `id_subcat`='".$_GET["subcate"]."' limit 1 ";
								$rs_query22 = mysql_query($query22, $cn) or die(mysql_error());
								$row_rs_query22 = mysql_fetch_assoc($rs_query22);
							  
							   ?>
                                <td class="texto"><p>
                                  <? //echo $row_rs_query22["coment_sc"] ?>
                                  PRESENTAMOS nuestros productos ESPECIALES, nuevas l&iacute;neas de veh&iacute;culos o maquinarias para construcci&oacute;n o la agro industria asi como motocicletas para pistas o todo terreno y mucho mas a su disposici&oacute;n. </p>
                                  <p>&nbsp;</p></td>
                              </tr>
                            </table>
                            </td>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                          </tr>
                          <tr>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                            <td height="1" background="images/div_sub_up.jpg"></td>
                            <td width="1" valign="top" background="images/div_sub.jpg"></td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td height="39" style="height:20px"><table width="536" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td width="5">&nbsp;</td>
                              <td width="44" class="product"><span class="product">Page.</span><?php $pagina = ceil($_GET['empezar']/6)+1; echo $pagina?></td>
                              <td width="479" align="left"><?php
							  //echo $cantidad;
							  if($cantidad==1){
							  }else{
								  $enviar=0;
								  ?>
                                <left>
                                      <?php
									  if($pagina<>1){
                                      ?>
                                      <span class="txtyellow"><< <a href='subcategoria.php?empezar=<?php echo (($pagina*6)-12) ?>&subcate=<?php echo $_GET['subcate']?>' class="detalles">Prev</a></span>
									<?php
                                    }
                                    ?>
                                  <?php
								  for ($i=1;$i<=$cantidad;$i++){
								  ?>
                                  <a href='subcategoria.php?empezar=<?php echo $enviar."&subcate=".$_GET['subcate']?>' class="detalles"> <?php echo $i?><span class="txtyellow">&nbsp;&nbsp; </span></a>
                                  <?php
								  $enviar = $enviar+6;
								  }
								  ?>
                                  <?php
								  if($pagina<>$cantidad){
                                  ?>
                                  <span class="txtyellow"><a href='subcategoria.php?empezar=<?php echo $pagina*6 ?>&subcate=<?php echo $_GET['subcate']?>' class="detalles">Next</a> >></span>
                                   <?php
								   }
                                   ?>
                                </left>
                                <?php
								}
						  ?>                          </td>
                              </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              </tr>
                          </table></td>
                        </tr>
                    </table>
                    <table width="700" border="0" cellspacing="0" cellpadding="0">
                      <tr align="center" valign="top">
                        <?php
					  $contador = 0;
					  $k = 0;
					  for($k=0;$k<sizeof($productoimagen);$k++){
						$contador=$contador+1;
						?>
                        <td>
                        <table width='167' border='0' cellpadding='0' cellspacing='0' bgcolor='e1e1e1'>
                            <tr>
                              <td height='124' align='center' valign="top" bgcolor='fafafa'>
                              <table border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><img src="images/mar_03.jpg" width="11" height="11" /></td>
                            <td height="11" background="images/mar_04.jpg"></td>
                            <td><img src="images/mar_05.jpg" width="11" height="11" /></td>
                          </tr>
                          <tr>
                            <td width="11" background="images/mar_07.jpg">&nbsp;</td>
                            <td valign="top">
                              <table border='0' cellpadding='7' cellspacing='0' >
                          <tr>
                            <td align='center'><a href='detalleproducto.php?producto=<?php echo $productocodigo[$k]."&empezar=".$empezar."&pag=2".$top30 ?>'><img border='0' src='imagenes_producto_mediana/<?php echo $productoimagen[$k]?>' width='180' /></a></td>
                          </tr>
                        </table>                        </td>
                            <td width="11" background="images/mar_09.jpg"></td>
                          </tr>
                          <tr>
                            <td><img src="images/mar_10.jpg" width="11" height="11" /></td>
                            <td height="11" background="images/mar_11.jpg"></td>
                            <td><img src="images/mar_12.jpg" width="11" height="11" /></td>
                          </tr>
                        </table>                              </td>
                            </tr>
                            <tr>
                              <td valign="top" height="56" bgcolor='fafafa'><div align='center' class="product" style="height:100%"><strong><?php echo $productonombrees[$k] ?></strong></div></td>
                            </tr>
                          </table>
                          </td>
                        <?php
                          if($contador==3){
						  ?>
                      </tr>
                      <tr align='center' valign='top'>
                        <?php
							$contador = 0;
						  }
					  }
                      ?>
                      </tr>
                      <tr align="center" valign="top">
                        <td height="5" colspan="3">&nbsp;</td>
                      </tr>
                    </table>
                    <table width="540" border="0" cellspacing="0" cellpadding="0">
                     <tr>
                        <td width="13"></td>
                        <td width="527"><?php
							  //echo $cantidad;
							  if($cantidad==1){
							  }else{
								  $enviar=0;
								  ?>
                          <center>
                                      <p>
  <?php
									  if($pagina<>1){
                                      ?>
  <span class="txtyellow"><< <a href='subcategoria.php?empezar=<?php echo (($pagina*6)-12) ?>&subcate=<?php echo $_GET['subcate']?>' class="detalles">Prev</a></span>
                                        <?php
										}
                                       ?>
                                        <?php
								  for ($i=1;$i<=$cantidad;$i++){
								  ?>
                                                    <a href='subcategoria.php?empezar=<?php echo $enviar."&subcate=".$_GET['subcate']?>' class="detalles"> <?php echo $i?><span class="txtyellow">&nbsp;&nbsp; </span></a>
                                        <?php
								  $enviar = $enviar+6;
								  }
								  ?>
                                              <?php
								  if($pagina<>$cantidad){
                                  ?>
                                                     <span class="txtyellow"><a href='subcategoria.php?empezar=<?php echo $pagina*6 ?>&subcate=<?php echo $_GET['subcate']?>' class="detalles">Next</a> >></span>
                                              <?php
								  }
                                  ?>
                                              </p>
                          </center>
                          <?php
								}
						  ?></td>
                        </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        </tr>
                    </table></td>
                </tr>
              </table>                    </td>
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
            <td width="290"><span class="txtwhite">TruckMax.com.pe © 2010</span> <span class="txtwhite">|</span> <span class="txtyellow">Politicas</span> <span class="txtwhite">|</span> <span class="txtyellow">Terminos de uso</span></td>
            <td width="200" class="txtwhite">Av. Javier Prado Este 5223 La Molina</td>
            <td width="290"><span class="txtwhite">Teléfono: 250 - 1452 </span>&nbsp; &nbsp;
              <span class="txtwhite">Email:</span><a href="mailto:ventas@truckmax.com.pe" class="txtyellow">ventas@truckmax.com.pe</a></td>
            <td width="180" align="right"><span class="txtwhite">Desarrollado por:</span> <span class="pixel"><a href="http://www.pixelgraphicperu.com/" target="_blank" class="pixel">Pixel</a></span><a href="http://www.pixelgraphicperu.com/" class="graphic" target="_blank"><span class="graphic">Graphic</span></a></td>
          </tr>
        </table></td>
        <td><img src="images/bg_right-down.jpg" width="15" height="43" alt=""></td>
      </tr>
    </table></td>
  </tr>
</table>
    </td>
    <td valign="top"><img src="images/green_latright.jpg" width="25" height="800" /></td>
  </tr>
</table>

</div>
</body>
</html>
