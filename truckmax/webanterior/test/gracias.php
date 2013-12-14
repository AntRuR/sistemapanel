<?php
session_start();
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
$f = 0;
do{
	$idSubC[$f]=$row_rs_query2["id_subcat"];
	$nombre_subcate[$f]=$row_rs_query2["des_subcat_es"];
	
	$f=$f+1;
}while($row_rs_query2 = mysql_fetch_array($rs_query2));
	
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
		$productoprecio[$k]=$row_rs_query4["pre_ven"];
		
		$productooferta[$k]=$row_rs_query4["pre_ofer"];
		$CodComercial[$k]=$row_rs_query4["cod_comer"];
		$descCortasp[$k]=$row_rs_query4["des_cor_es"];
		$descCortaen[$k]=$row_rs_query4["des_cor_en"];
		
		$k=$k+1;
	}while($row_rs_query4 = mysql_fetch_array($rs_query4));
	
	
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
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<script type="text/javascript" src="js/funciones.js"></script>
<link href="estilos/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
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
                <td height="8"></td>
              </tr>
              <tr>
                <td>
                <table width="728" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="1" rowspan="7" valign="top" background="images/div-left.jpg"><img src="images/div-left.jpg" width="1" height="516" /></td>
                    <td height="1" background="images/div-up.jpg"><img src="images/div-up.jpg" width="726" height="1" /></td>
                    <td rowspan="7" valign="top" background="images/div-left.jpg"><img src="images/div-left.jpg" width="1" height="516" /></td>
                  </tr>
                  <tr>
                    <td height="351" align="center" valign="top"><table width="700" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td class="title-contact">Contáctenos</td>
                      </tr>
                      <tr>
                        <td><table width="700" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><table width="400" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td height="30" class="ruta">Departamento de Ventas</td>
                              </tr>
                              <tr>
                                <td height="26" class="product"><strong>Teléfono: 250 - 1452</strong></td>
                              </tr>
                              <tr>
                                <td height="26" class="product"><strong>Horario: 9a.m - 6:00 p.m</strong></td>
                              </tr>
                              <tr>
                                <td height="26" class="product"><strong>Email: ventas@truckmax.compe</strong></td>
                              </tr>
                              <tr>
                                <td height="10" class="ruta"></td>
                              </tr>
                              <tr>
                                <td height="30" class="ruta">Soporte Técnico</td>
                              </tr>
                              <tr>
                                <td height="26" class="product"><strong>Teléfono: 250 - 1452</strong></td>
                              </tr>
                              <tr>
                                <td height="26" class="product"><strong>Horario: 9a.m - 6:00 p.m</strong></td>
                              </tr>
                              <tr>
                                <td height="26" class="product"><strong>Email: ventas@truckmax.compe</strong></td>
                              </tr>
                              <tr>
                                <td height="26" class="product">&nbsp;</td>
                              </tr>
                            </table></td>
                            <td>
                            
                            <table border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="230" height="336" align="center" valign="top" background="images/bg_widget_bot.png"><table width="180" border="0" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td valign="top"><p class="texto"><strong>AGRADECEMOS SU REGISTRO</strong>; pronto estaremos tomando contacto con usted.</p>
                                      <p> <span class="ruta">Truck</span><span class="pixel">Max</span><br />
                                        <span class="texto">Presidente </span></p></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                  </tr>
                                </table></td>
                              </tr>
                            </table></td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td class="product">&nbsp;</td>
                      </tr>
                    </table></td>
                    </tr>
                  <tr>
                    <td height="1" background="images/div-up.jpg"><img src="images/div-up.jpg" width="726" height="1" /></td>
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
</body>
</html>
