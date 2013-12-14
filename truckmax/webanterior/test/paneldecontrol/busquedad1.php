<?php
session_start();
if($_SESSION['idioma']=="" or $_SESSION['idioma']=="ES"){
	//echo "La sesion del contador es : ".$_SESSION['contador'];
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
	$categoria = "";
	$subcategoria = "";
	$palabraclave = $_GET['palabraclave'];
	if($palabraclave<>""){
		$palabraclave="%".$palabraclave."%";
	}else{
		$palabraclave="%";
	}
	if(isset($_GET['categoria']) and $_GET['categoria']<>0){
		$buscacategoria = " and a.id_cat='".$_GET['categoria']."'";
	}
	if(isset($_GET['subcate']) and $_GET['subcate']<>0){
		$buscasubcategoria = " and a.id_subcat='".$_GET['subcate']."'";
	}
	$query4 = "select a.* from producto a where a.nom_pro_es like '".$palabraclave."' or a.nom_pro_en like '".$palabraclave."' or des_cor_es like '".$palabraclave."' or des_cor_en like '".$palabraclave."' ".$buscacategoria." ".$buscasubcategoria." order by a.id_pro limit $empezar,6";
	$rs_query4 = mysql_query($query4, $cn) or die(mysql_error());
	$row_rs_query4 = mysql_fetch_assoc($rs_query4);
	$query5 = "select count(*) as cantidad from producto a where a.nom_pro_es like '".$palabraclave."' or a.nom_pro_en like '".$palabraclave."' or des_cor_es like '".$palabraclave."' or des_cor_en like '".$palabraclave."' ".$buscacategoria." ".$buscasubcategoria." order by a.id_pro";
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
		//jalando las imagenes
		if($row_rs_query2["id_subcat"]==$_GET['subcate']){
			$img_sub = $row_rs_query2["img_sub"];
		}
		$codigosubcategoria[$j]=$row_rs_query2["id_cat"];
		$codigosubcategoria2[$j]=$row_rs_query2["id_subcat"];
		$subcategoriaes[$j]=$row_rs_query2["des_subcat_es"];
		$subcategoriaen[$j]=$row_rs_query2["des_subcat_en"];
		$j=$j+1;
	}while($row_rs_query2 = mysql_fetch_array($rs_query2));
	$k = 0;
	//echo $palabraclave;
	do{
//		if($palabraclave<>""){
//			//$cadena = strtolower(utf8_encode($row_rs_query4["nom_pro_es"]))." ".strtolower(utf8_encode($row_rs_query4["nom_pro_en"]));
//			//$cadena = $row_rs_query4["nom_pro_es"]." ".$row_rs_query4["nom_pro_en"];
//			$cadena = $row_rs_query4["busquedad"];
//			//if(eregi(strtoupper($palabraclave),$cadena)){
//			//if(stristr($cadena,$palabraclave)){
//			if(ereg_replace($palabraclave,$cadena)){
//				echo $cadena."<br/>";
//				$productocodigo[$k]=$row_rs_query4["id_pro"];
//				$productoimagen[$k]=$row_rs_query4["img_pro1"];
//				$productonombrees[$k]=$row_rs_query4["nom_pro_es"];
//				$productonombreen[$k]=$row_rs_query4["nom_pro_en"];
//				$productoprecio[$k]=$row_rs_query4["pre_ven"];
//				$productooferta[$k]=$row_rs_query4["pre_ofer"];
//				$k=$k+1;
//			}
//		}else{
			$productocodigo[$k]=$row_rs_query4["id_pro"];
			$productoimagen[$k]=$row_rs_query4["img_pro1"];
			$productonombrees[$k]=$row_rs_query4["nom_pro_es"];
			$productonombreen[$k]=$row_rs_query4["nom_pro_en"];
			$productoprecio[$k]=$row_rs_query4["pre_ven"];
			$productooferta[$k]=$row_rs_query4["pre_ofer"];
			$k=$k+1;
//		}
	}while($row_rs_query4 = mysql_fetch_array($rs_query4));
	//echo $k."<br/>";
	//$cantidad = ceil($k/6);
	//viendo si es del top30
	if($_GET['subcate']==16){
	$nombre_categoria = "TOP 30";
	$nombre_subcategoria = "TOP 30";
	$top30 = "&subcate=16";
	}
	?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
<TITLE>||| :: SplendorLine Online Shop :: |||</TITLE>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<link href="estilos/style.css" rel="stylesheet" type="text/css">
<script src="js/AC_RunActiveContent.js" type="text/javascript"></script>
<script type="text/javascript" src="js/funciones.js"></script>
<script language="javascript">
		function cambiarIdioma(valor){
			//alert(valor);
			window.location.href='cambiaridioma.php?idi='+valor+"&url="+document.URL;
		}
		</script>
<META content="MSHTML 6.00.2900.3059" name=GENERATOR>
<style type="text/css">
<!--
.style1 {
	color: #0000FF
}
-->
</style>
</HEAD>
<BODY>
<TABLE cellSpacing=0 cellPadding=0 width=1005 align=center border=0>
  <TBODY>
    <TR>
    
    <TD vAlign=top width=25><IMG height=660 
	
		  src="imagesbase/green_latLeftl.jpg" width=25></TD>
    <TD vAlign=top width=940>
    <table width="941" height="234" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <td width="941" height="200" align="center" valign="top"><script type="text/javascript">
	
	AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','940','height','200','src','head','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','head' ); //end AC code
	
	</script>
          <noscript>
          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="940" height="200">
            <param name="movie" value="head.swf">
            <param name="quality" value="high">
            <embed src="head.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="940" height="200"></embed>
          </object>
          </noscript></td>
      </tr>
      <tr>
        <td valign="top">
        <table width="938" border="0" cellspacing="0" cellpadding="0">
          <tr>
          
          <td width="200" valign="top" class="bg_sidel">
          <table style="width:100%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><img src="images/categry.gif" width="190" height="26"></td>
            </tr>
            <tr>
              <td><img src="images/side_top.gif" width="188" height="12"></td>
            </tr>
            <tr>
              <td><table style="width:100%"  border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td class="bg_side_l">&nbsp;</td>
                    <td style="background-color:#FFFFFF"><table style="width:100%"  border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td><table style="width:96%"  border="0" align="center" cellpadding="0" cellspacing="0">
                              <?php
											$i = 0;
											$j = 0;
											for($i=0;$i<sizeof($codigocategoria);$i++){
												echo "<tr>";
													echo "<td style='width:15px' valign='top'>";
													echo "<img src='images/dots.gif' width='9' height='16' vspace='3'>";
													echo "</td>";
													echo "<td>";
													echo "<span class='Estilo1'>".$categoriaes[$i]."</span>";
													echo "</td>";
												echo "</tr>";
												for($j=0;$j<sizeof($codigosubcategoria);$j++){
													if($codigosubcategoria[$j]==$codigocategoria[$i]){
														echo "<tr>";
															echo "<td style='width:15px' valign='top'>";
															echo "<div align='right'><img src='images/dots.gif' width='5' height='5' vspace='3'></div>";
															echo "</td>";
															echo "<td>";
															echo "<a href='subcategoria.php?subcate=".$codigosubcategoria2[$j]."' class='Estilo4'>".$subcategoriaes[$j]."</A>";
															echo "</td>";
														echo "</tr>";
													}
												}
											}
											?>
                            </table></td>
                        </tr>
                      </table></td>
                    <td class="bg_side_r">&nbsp;</td>
                  </tr>
                </table></td>
            </tr>
            <tr>
              <td><img src="images/side_bottom.gif" width="188" height="14"></td>
            </tr>
            <tr>
              <td><img src="images/clearance.gif" width="188" height="26"></td>
            </tr>
            <tr>
              <td><img src="images/side_top.gif" width="188" height="12"></td>
            </tr>
            <tr>
              <td><table style="width:100%"  border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td class="bg_side_l">&nbsp;</td>
                    <td style="background-color:#FFFFFF"><table style="width:100%"  border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td><?php include("menuclearance.php")?></td>
                        </tr>
                      </table></td>
                    <td class="bg_side_r">&nbsp;</td>
                  </tr>
                </table></td>
            </tr>
            <tr>
              <td><img src="images/side_bottom.gif" width="188" height="14"></td>
            </tr>
            <tr>
              <td><img src="images/account.gif" width="188" height="26"></td>
            </tr>
            <tr>
              <td><img src="images/side_top.gif" width="188" height="12"></td>
            </tr>
            <tr>
              <td>
              <table style="width:100%"  border="0" cellspacing="0" cellpadding="0">
                <tr>
                
                <td class="bg_side_l">&nbsp;</td>
                <td style="background-color:#FFFFFF">
                <table style="width:100%"  border="0" cellspacing="0" cellpadding="0">
                  <tr>
                  
                  <td>
                  <?php include("menu-login.php")?>
                  </td>
                  
                  </tr>
                  
                </table>
                </td>
                
                <td class="bg_side_r">&nbsp;</td>
                </tr>
              </table>
            </td>
            
            </tr>
            
            <tr>
              <td><img src="images/side_bottom.gif" width="188" height="14"></td>
            </tr>
          </table>
          </td>
          
          <td width="4" height="27">&nbsp;</td>
            <td width="539" valign="top"><table width="78%"  border="0" cellpadding="0" cellspacing="0" style="width:100%">
                <tr>
                  <td width="97%" class="Estilo10" ><p style=" margin-top:4px">
                      <?php
								//echo $nombre_categoria." -- ".$nombre_subcategoria;
							?>
                    </p></td>
                  <td width="3%">&nbsp;</td>
                </tr>
                <tr>
                  <td><img src="images/bikini-top30.jpg" width="540"></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="39" style="height:20px"><table width="540" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td class="Estilo1 Estilo6">&nbsp;</td>
                      </tr>
                      <tr>
                        <td class="Estilo1 Estilo6">&nbsp;</td>
                      </tr>
                    </table>
                    <?php if($productoimagen[0]==""){
						
						}else{?>
                    <table width="540" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="29">P&aacute;g. <?php echo ceil($_GET['empezar']/6)+1?></td>
                        <td width="198"><?php
								  //echo $cantidad;
								  if($cantidad==1){
								  }else{
									  $enviar=0;
									  echo "<center><< Prev ";
									  for ($i=1;$i<=$cantidad;$i++){
									  echo "<a href='busquedad1.php?empezar=".$enviar."&categoria=".$_GET['categoria']."&subcate=".$_GET['subcate']."&palabraclave=".$palabraclave."'>";
									  echo $i."&nbsp;&nbsp;";
									  echo "</a>";
									  $enviar = $enviar+6;
									  }
									  echo " Next >></center>";
									}
	
							  ?></td>
                        <td width="184">&nbsp;</td>
                        <td width="58">&nbsp;</td>
                        <td width="49">&nbsp;</td>
                        <td width="22">&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                    </table>
                    <?php }?></td>
                  <td style="height:20px">&nbsp;</td>
                </tr>
              </table>
              <?php if($productoimagen[0]==""){
						?>
              <table>
                <tr>
                  <td>No se Encontro Productos relacionados a la busquedad</td>
                </tr>
              </table>
              <?php
                        }else{?>
              <table width="535" border="0" cellspacing="0" cellpadding="0">
                <tr align="center" valign="top">
                  <?php
						  $contador_producto = 0;
						  $k = 0;
						  for($k=0;$k<sizeof($productoimagen);$k++){
							$contador_producto=$contador_producto+1;
							echo "<td>";
							echo "<table width='167' border='0' cellpadding='0' cellspacing='1' bgcolor='e1e1e1'>";
							echo "<tr><td height='153' align='center' bgcolor='fafafa'>";
								echo "<table width='150' border='0' cellpadding='7' cellspacing='0' >
									  <tr>
										<td align='center'><a href='detalleproducto.php?producto=".$productocodigo[$k]."&empezar=".$empezar."&pag=2".$top30."&deta=1'><img border='0' src='imagenes_producto_chica/".$productoimagen[$k]."'></a></td>
									  </tr>
									  <tr>
										<td align='center'><div align='left'>".$productonombrees[$k]."</div></td>
									  </tr>
									</table>";
							echo "</td></tr>";
							echo "<tr>
								  <td height='25' align='center' valign='bottom'><table width='100%' border='0' cellpadding='6' cellspacing='0' class='text'>
									  <tr align='center'>
										<td width='39%' height='24' bgcolor='#fa9fa0'><strong><font color='#FFFFFF'>Buy Now</font></strong></td>
										<td width='61%' bgcolor='#e0090d'><strong><font color='#FFFFFF'>";
										if($productooferta[$k]<>""){
											echo "<strike>$".$productoprecio[$k]."</strike><br/>$".$productooferta[$k]."";
										}else{
											echo "$".$productoprecio[$k]."";
										}
										echo "</font></strong></td>
									  </tr>
									</table></td>
								</tr>
							  </table></td>";
							  if($contador_producto==3){
								echo "</tr><tr align='center' valign='top'>";
								$contador_producto = 0;
							  }
						  }
						  ?>
                </tr>
                <tr align="center" valign="top">
                  <td height="5" colspan="3"><img src="images/spacer.gif" width="30" height="5"></td>
                </tr>
              </table>
              <table width="540" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="16"></td>
                  <td width="207"><?php
								  if($cantidad==1){
								  }else{
									  $enviar=0;
									  echo "<center><< Prev ";
									  for ($i=1;$i<=$cantidad;$i++){
									  echo "<a href='busquedad1.php?empezar=".$enviar."&categoria=".$_GET['categoria']."&subcate=".$_GET['subcate']."&palabraclave=".$palabraclave."'>";
									  echo $i."&nbsp;&nbsp;";
									  echo "</a>";
									  $enviar = $enviar+6;
									  }
									  echo " Next >></center>";
									}
	
							  ?></td>
                  <td width="82">&nbsp;</td>
                  <td width="47">&nbsp;</td>
                  <td width="167">&nbsp;</td>
                  <td width="21">&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
              </table>
              <?php }?></td>
            <td width="190" valign="top"><table width="190" border="0" align="right" cellpadding="0" cellspacing="0">
                <?php 
						$montototal = 0;
						$item = 0;
						for($i=1;$i<=$_SESSION['contador'];$i++){
							if($_SESSION["producto".$i]<>""){		
								$item = $item + 1;
								if($_SESSION["color".$i]==0){
									$query1 = "select a.nom_pro_es, a.pre_ven, a.pre_ofer, b.des_destal, c.des_col_es from producto a,talladescripcion b, color c where a.id_pro='".$_SESSION["producto".$i]."' and b.id_taldes='".$_SESSION["talla".$i]."'";
								$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
								$row_rs_query1 = mysql_fetch_assoc($rs_query1);
								if($row_rs_query1['pre_ofer']<>""){
									$total = $_SESSION["cantidad".$i]*$row_rs_query1['pre_ofer'];
								}else{
									$total = $_SESSION["cantidad".$i]*$row_rs_query1['pre_ven'];
								}
								$montototal = $montototal + $total;
								}else{
									$query1 = "select a.nom_pro_es, a.pre_ven, a.pre_ofer, b.des_destal, c.des_col_es from producto a,talladescripcion b, color c where a.id_pro='".$_SESSION["producto".$i]."' and b.id_taldes='".$_SESSION["talla".$i]."' and c.id_col='".$_SESSION["color".$i]."'";
								$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
								$row_rs_query1 = mysql_fetch_assoc($rs_query1);
								if($row_rs_query1['pre_ofer']<>""){
									$total = $_SESSION["cantidad".$i]*$row_rs_query1['pre_ofer'];
								}else{
									$total = $_SESSION["cantidad".$i]*$row_rs_query1['pre_ven'];
								}
								$montototal = $montototal + $total;
								}
							}
						}
						?>
                <tr>
                  <td><img src="images/basket.gif" width="190" height="26"></td>
                </tr>
                <tr>
                  <td><strong>Item : <?php echo $item ?></strong></td>
                </tr>
                <tr>
                  <td><strong>Total : $<?php echo $montototal ?></strong></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td align="center"><a href="javascript:cambiarIdioma('ES')">ESPA&Ntilde;OL</a> / <a href="javascript:cambiarIdioma('EN')">ENGLISH</a></td>
                </tr>
                <tr>
                  <td><table width="190" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td><img src="images/search.gif" width="190" height="26"></td>
                      </tr>
                      <tr>
                        <td height="221" background="images/fondorosado3.JPG"><?php include("formulariobusquedad.php");?></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                    </table></td>
                </tr>
                <tr>
                  <td><img src="images/ADVERTISING.gif" width="190" height="210"></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><img src="images/ADVERTISING.gif" width="190" height="210"></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
              </table>
              <p>&nbsp;</p>
              <p>&nbsp;</p></td>
          </tr>
        </table>
      </td>
      
      </tr>
      
      <tr>
        <td background="images/fondobottom.gif" bgcolor="#FFFFFF"><table width="902" height="21" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="489"><div align="center"><span class="Estilo8">COPYRIGHT &copy; 2008 Splendorlinee.com All Rights Reserved.</span></div></td>
              <td width="413"><div align="center"><span class="Estilo8">Developed by <span class="style1">Pixel</span>graphicserver | Marketing by THB</span></div></td>
            </tr>
          </table></td>
      </tr>
    </table>
    </TD>
    
  <TD vAlign=top width=40><IMG height=660 
	
		  src="imagesbase/green_latright.jpg" 
	
	width=25></TD>
  </TR>
  </TBODY>
  
</TABLE>
</BODY>
</HTML>
<?php
}
if($_SESSION['idioma']=="EN"){
	//echo "La sesion del contador es : ".$_SESSION['contador'];
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
	$categoria = "";
	$subcategoria = "";
	$palabraclave = $_GET['palabraclave'];
	if($palabraclave<>""){
		$palabraclave="%".$palabraclave."%";
	}else{
		$palabraclave="%";
	}
	if(isset($_GET['categoria']) and $_GET['categoria']<>0){
		$buscacategoria = " and a.id_cat='".$_GET['categoria']."'";
	}
	if(isset($_GET['subcate']) and $_GET['subcate']<>0){
		$buscasubcategoria = " and a.id_subcat='".$_GET['subcate']."'";
	}
//	$query4 = "select a.*,b.des_cat_es as nombre_categoria,c.des_subcat_es as nombre_subcategoria from producto a,categoria b,subcategoria c where a.nom_pro_es like '".$palabraclave."' or a.nom_pro_en like '".$palabraclave."' or des_cor_es like '".$palabraclave."' or des_cor_en like '".$palabraclave."' ".$buscacategoria." ".$buscasubcategoria." and a.id_cat=b.id_cat and a.id_subcat=c.id_subcat order by a.id_pro limit $empezar,6";
		$query4 = "select a.*,b.des_cat_es as nombre_categoria,c.des_subcat_es as nombre_subcategoria from producto a,categoria b,subcategoria c where a.des_cor_es like '".$palabraclave."' ".$buscacategoria." ".$buscasubcategoria." and a.id_cat=b.id_cat and a.id_subcat=c.id_subcat order by a.id_pro limit $empezar,6";
		//echo $query4;
	//PARA EL PAGINADOR DELOSPRODUCTOS
	//para ver si es el top 30 te quedaste asca en el top 30
	$query5 = "select count(*) as cantidad from producto a where a.des_cor_es like '".$palabraclave."' ".$buscacategoria." ".$buscasubcategoria."";
	$rs_query5 = mysql_query($query5, $cn) or die(mysql_error());
	$row_rs_query5 = mysql_fetch_assoc($rs_query5);
	$cantidad = ceil($row_rs_query5['cantidad']/6);
	$rs_query4 = mysql_query($query4, $cn) or die(mysql_error());
	$row_rs_query4 = mysql_fetch_assoc($rs_query4);
	$i = 0;
	do{
		$codigocategoria[$i]=$row_rs_query1["id_cat"];
		$categoriaes[$i]=$row_rs_query1["des_cat_es"];
		$categoriaen[$i]=$row_rs_query1["des_cat_en"];
		$i=$i+1;
	}while($row_rs_query1 = mysql_fetch_array($rs_query1));
	$j = 0;
	do{
		//jalando las imagenes
		if($row_rs_query2["id_subcat"]==$_GET['subcate']){
			$img_sub = $row_rs_query2["img_sub"];
		}
		$codigosubcategoria[$j]=$row_rs_query2["id_cat"];
		$codigosubcategoria2[$j]=$row_rs_query2["id_subcat"];
		$subcategoriaes[$j]=$row_rs_query2["des_subcat_es"];
		$subcategoriaen[$j]=$row_rs_query2["des_subcat_en"];
		$j=$j+1;
	}while($row_rs_query2 = mysql_fetch_array($rs_query2));
	$k = 0;
	do{
		//$nombre_categoria = $row_rs_query4["nombre_categoria"];
		//$nombre_subcategoria = $row_rs_query4["nombre_subcategoria"];
		$productocodigo[$k]=$row_rs_query4["id_pro"];
		$productoimagen[$k]=$row_rs_query4["img_pro1"];
		$productonombrees[$k]=$row_rs_query4["nom_pro_es"];
		$productonombreen[$k]=$row_rs_query4["nom_pro_en"];
		$productoprecio[$k]=$row_rs_query4["pre_ven"];
		$productooferta[$k]=$row_rs_query4["pre_ofer"];
		$k=$k+1;
	}while($row_rs_query4 = mysql_fetch_array($rs_query4));
	//viendo si es del top30
	if($_GET['subcate']==16){
	$nombre_categoria = "TOP 30";
	$nombre_subcategoria = "TOP 30";
	$top30 = "&subcate=16";
	}
	?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
<TITLE>||| :: SplendorLine Online Shop :: |||</TITLE>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<link href="estilos/style.css" rel="stylesheet" type="text/css">
<script src="js/AC_RunActiveContent.js" type="text/javascript"></script>
<script type="text/javascript" src="js/funciones.js"></script>
<script language="javascript">
		function cambiarIdioma(valor){
			//alert(valor);
			window.location.href='cambiaridioma.php?idi='+valor+"&url="+document.URL;
		}
		</script>
<META content="MSHTML 6.00.2900.3059" name=GENERATOR>
<style type="text/css">
<!--
.style1 {
	color: #0000FF
}
-->
</style>
</HEAD>
<BODY>
<TABLE cellSpacing=0 cellPadding=0 width=1005 align=center border=0>
  <TBODY>
    <TR>
    
    <TD vAlign=top width=25><IMG height=660 
	
		  src="imagesbase/green_latLeftl.jpg" width=25></TD>
    <TD vAlign=top width=940>
    <table width="941" height="234" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <td width="941" height="200" align="center" valign="top"><script type="text/javascript">
	
	AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','940','height','200','src','head','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','head' ); //end AC code
	
	</script>
          <noscript>
          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="940" height="200">
            <param name="movie" value="head.swf">
            <param name="quality" value="high">
            <embed src="head.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="940" height="200"></embed>
          </object>
          </noscript></td>
      </tr>
      <tr>
        <td valign="top">
        <table width="938" border="0" cellspacing="0" cellpadding="0">
          <tr>
          
          <td width="200" valign="top" class="bg_sidel">
          <table style="width:100%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><img src="images/categry.gif" width="190" height="26"></td>
            </tr>
            <tr>
              <td><img src="images/side_top.gif" width="188" height="12"></td>
            </tr>
            <tr>
              <td><table style="width:100%"  border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td class="bg_side_l">&nbsp;</td>
                    <td style="background-color:#FFFFFF"><table style="width:100%"  border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td><table style="width:96%"  border="0" align="center" cellpadding="0" cellspacing="0">
                              <?php
											$i = 0;
											$j = 0;
											for($i=0;$i<sizeof($codigocategoria);$i++){
												echo "<tr>";
													echo "<td style='width:15px' valign='top'>";
													echo "<img src='images/dots.gif' width='9' height='16' vspace='3'>";
													echo "</td>";
													echo "<td>";
													echo "<span class='Estilo1'>".$categoriaes[$i]."</span>";
													echo "</td>";
												echo "</tr>";
												for($j=0;$j<sizeof($codigosubcategoria);$j++){
													if($codigosubcategoria[$j]==$codigocategoria[$i]){
														echo "<tr>";
															echo "<td style='width:15px' valign='top'>";
															echo "<div align='right'><img src='images/dots.gif' width='5' height='5' vspace='3'></div>";
															echo "</td>";
															echo "<td>";
															echo "<a href='subcategoria.php?subcate=".$codigosubcategoria2[$j]."' class='Estilo4'>".$subcategoriaes[$j]."</A>";
															echo "</td>";
														echo "</tr>";
													}
												}
											}
											?>
                            </table></td>
                        </tr>
                      </table></td>
                    <td class="bg_side_r">&nbsp;</td>
                  </tr>
                </table></td>
            </tr>
            <tr>
              <td><img src="images/side_bottom.gif" width="188" height="14"></td>
            </tr>
            <tr>
              <td><img src="images/clearance.gif" width="193" height="26"></td>
            </tr>
            <tr>
              <td><img src="images/side_top.gif" width="188" height="12"></td>
            </tr>
            <tr>
              <td><table style="width:100%"  border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td class="bg_side_l">&nbsp;</td>
                    <td style="background-color:#FFFFFF"><table style="width:100%"  border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td><?php include("menuclearance.php")?></td>
                        </tr>
                      </table></td>
                    <td class="bg_side_r">&nbsp;</td>
                  </tr>
                </table></td>
            </tr>
            <tr>
              <td><img src="images/side_bottom.gif" width="188" height="14"></td>
            </tr>
            <tr>
              <td><img src="images/account.gif" width="193" height="26"></td>
            </tr>
            <tr>
              <td><img src="images/side_top.gif" width="188" height="12"></td>
            </tr>
            <tr>
              <td>
              <table style="width:100%"  border="0" cellspacing="0" cellpadding="0">
                <tr>
                
                <td class="bg_side_l">&nbsp;</td>
                <td style="background-color:#FFFFFF">
                <table style="width:100%"  border="0" cellspacing="0" cellpadding="0">
                  <tr>
                  
                  <td>
                  <?php include("menu-login.php")?>
                  </td>
                  
                  </tr>
                  
                </table>
                </td>
                
                <td class="bg_side_r">&nbsp;</td>
                </tr>
              </table>
            </td>
            
            </tr>
            
            <tr>
              <td><img src="images/side_bottom.gif" width="188" height="14"></td>
            </tr>
          </table>
          </td>
          
          <td width="4" height="27">&nbsp;</td>
            <td width="539" valign="top"><table width="78%"  border="0" cellpadding="0" cellspacing="0" style="width:100%">
                <tr>
                  <td width="97%" class="Estilo10" ><p style=" margin-top:4px">
                      <?php
								//echo $nombre_categoria." -- ".$nombre_subcategoria;
							?>
                    </p></td>
                  <td width="3%">&nbsp;</td>
                </tr>
                <tr>
                  <td><img src="images/bikini-top30.jpg" width="540"></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="39" style="height:20px"><table width="540" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td class="Estilo1 Estilo6">&nbsp;</td>
                      </tr>
                      <tr>
                        <td class="Estilo1 Estilo6">&nbsp;</td>
                      </tr>
                    </table>
                    <table width="540" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="29">P&aacute;g. <?php echo ceil($_GET['empezar']/6)+1?></td>
                        <td width="198"><?php
								  //echo $cantidad;
								  if($cantidad==1){
								  }else{
									  $enviar=0;
									  echo "<center><< Prev ";
									  for ($i=1;$i<=$cantidad;$i++){
									  echo "<a href='busquedad1.php?empezar=".$enviar."&categoria=".$_GET['categoria']."&subcate=".$_GET['subcate']."&palabraclave=".$palabraclave."'>";
									  echo $i."&nbsp;&nbsp;";
									  echo "</a>";
									  $enviar = $enviar+6;
									  }
									  echo " Next >></center>";
									}
	
							  ?></td>
                        <td width="184">&nbsp;</td>
                        <td width="58">&nbsp;</td>
                        <td width="49">&nbsp;</td>
                        <td width="22">&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                    </table></td>
                  <td style="height:20px">&nbsp;</td>
                </tr>
              </table>
              <table width="535" border="0" cellspacing="0" cellpadding="0">
                <tr align="center" valign="top">
                  <?php
						  $contador_producto = 0;
						  $k = 0;
						  for($k=0;$k<sizeof($productoimagen);$k++){
							$contador_producto=$contador_producto+1;
							echo "<td>";
							echo "<table width='167' border='0' cellpadding='0' cellspacing='1' bgcolor='e1e1e1'>";
							echo "<tr><td height='153' align='center' bgcolor='fafafa'>";
								echo "<table width='150' border='0' cellpadding='7' cellspacing='0' >
									  <tr>
										<td align='center'><a href='detalleproducto.php?producto=".$productocodigo[$k]."&empezar=".$empezar."&pag=2".$top30."&deta=1'><img border='0' src='imagenes_producto_chica/".$productoimagen[$k]."'></a></td>
									  </tr>
									  <tr>
										<td align='center'><div align='left'>".$productonombrees[$k]."</div></td>
									  </tr>
									</table>";
							echo "</td></tr>";
							echo "<tr>
								  <td height='25' align='center' valign='bottom'><table width='100%' border='0' cellpadding='6' cellspacing='0' class='text'>
									  <tr align='center'>
										<td width='39%' height='24' bgcolor='#fa9fa0'><strong><font color='#FFFFFF'>Buy Now</font></strong></td>
										<td width='61%' bgcolor='#e0090d'><strong><font color='#FFFFFF'>";
										if($productooferta[$k]<>""){
											echo "<strike>$".$productoprecio[$k]."</strike><br/>$".$productooferta[$k]."";
										}else{
											echo "$".$productoprecio[$k]."";
										}
										echo "</font></strong></td>
									  </tr>
									</table></td>
								</tr>
							  </table></td>";
							  if($contador_producto==3){
								echo "</tr><tr align='center' valign='top'>";
								$contador_producto = 0;
							  }
						  }
						  ?>
                </tr>
                <tr align="center" valign="top">
                  <td height="5" colspan="3"><img src="images/spacer.gif" width="30" height="5"></td>
                </tr>
              </table>
              <table width="540" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="16"></td>
                  <td width="207"><?php
								  if($cantidad==1){
								  }else{
									  $enviar=0;
									  echo "<center><< Prev ";
									  for ($i=1;$i<=$cantidad;$i++){
									  echo "<a href='busquedad1.php?empezar=".$enviar."&categoria=".$_GET['categoria']."&subcate=".$_GET['subcate']."&palabraclave=".$palabraclave."'>";
									  echo $i."&nbsp;&nbsp;";
									  echo "</a>";
									  $enviar = $enviar+6;
									  }
									  echo " Next >></center>";
									}
	
							  ?></td>
                  <td width="82">&nbsp;</td>
                  <td width="47">&nbsp;</td>
                  <td width="167">&nbsp;</td>
                  <td width="21">&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
              </table></td>
            <td width="190" valign="top"><table width="190" border="0" align="right" cellpadding="0" cellspacing="0">
                <?php 
						$montototal = 0;
						$item = 0;
						for($i=1;$i<=$_SESSION['contador'];$i++){
							if($_SESSION["producto".$i]<>""){		
								$item = $item + 1;
								if($_SESSION["color".$i]==0){
									$query1 = "select a.nom_pro_es, a.pre_ven, b.des_destal, c.des_col_es from producto a,talladescripcion b, color c where a.id_pro='".$_SESSION["producto".$i]."' and b.id_taldes='".$_SESSION["talla".$i]."'";
								$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
								$row_rs_query1 = mysql_fetch_assoc($rs_query1);
								$total = $_SESSION["cantidad".$i]*$row_rs_query1['pre_ven'];
								$montototal = $montototal + $total;
								}else{
									$query1 = "select a.nom_pro_es, a.pre_ven, b.des_destal, c.des_col_es from producto a,talladescripcion b, color c where a.id_pro='".$_SESSION["producto".$i]."' and b.id_taldes='".$_SESSION["talla".$i]."' and c.id_col='".$_SESSION["color".$i]."'";
								$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
								$row_rs_query1 = mysql_fetch_assoc($rs_query1);
								$total = $_SESSION["cantidad".$i]*$row_rs_query1['pre_ven'];
								$montototal = $montototal + $total;
								}
							}
						}
						?>
                <tr>
                  <td><img src="images/basket.gif" width="190" height="26"></td>
                </tr>
                <tr>
                  <td><strong>Item : <?php echo $item ?></strong></td>
                </tr>
                <tr>
                  <td><strong>Total : $<?php echo $montototal ?></strong></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td align="center"><a href="javascript:cambiarIdioma('ES')">ESPA&Ntilde;OL</a> / <a href="javascript:cambiarIdioma('EN')">ENGLISH</a></td>
                </tr>
                <tr>
                  <td><table width="190" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td><img src="images/search.gif" width="190" height="26"></td>
                      </tr>
                      <tr>
                        <td height="317" background="images/fondorosado.JPG"><?php include("formulariobusquedad.php");?></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
              </table>
              <p>&nbsp;</p>
              <p>&nbsp;</p></td>
          </tr>
        </table>
      </td>
      
      </tr>
      
      <tr>
        <td background="images/fondobottom.gif" bgcolor="#FFFFFF"><table width="902" height="21" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="489"><div align="center"><span class="Estilo8">COPYRIGHT &copy; 2008 Splendorlinee.com All Rights Reserved.</span></div></td>
              <td width="413"><div align="center"><span class="Estilo8">Developed by <span class="style1">Pixel</span>graphicserver | Marketing by THB</span></div></td>
            </tr>
          </table></td>
      </tr>
    </table>
    </TD>
    
  <TD vAlign=top width=40><IMG height=660 
	
		  src="imagesbase/green_latright.jpg" 
	
	width=25></TD>
  </TR>
  </TBODY>
  
</TABLE>
</BODY>
</HTML>
<?php
}
?>
