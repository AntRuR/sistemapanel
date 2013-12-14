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
	$productoprecio[$k]=$row_rs_query4["pre_ven"];
	$k=$k+1;
}while($row_rs_query4 = mysql_fetch_array($rs_query4));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="tm.css"/>
<link href="estilos/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="style-article.css"/>
<link rel="stylesheet" type="text/css" href="style-help.css"/>
<script src="js/AC_RunActiveContent.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript" src="js/bookmarks.js"></script>
<script type="text/javascript" src="js/funciones.js"></script>
<script language="javascript">

function validarEmail(valor) {
  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(valor)){
   return (true)
  } else {
   return (false);
  }
}
function validar0(){
	if(document.frm1.titulo2.value==0){
		alert("Debe Seleccionar un titulo");
		return false;
	}
	if(document.frm1.nom2.value==""){
		alert("Debe Introducir su Nombre");
		return document.frm1.nom2.focus();
	}
	if(document.frm1.ape2.value==""){
		alert("Debe Introducir su Apellido");
		return document.frm1.ape2.focus();
	}
	if(document.frm1.dir2.value==""){
		alert("Debe Introducir una Dirección");
		return document.frm1.dir2.focus();
	}
	if(document.frm1.zip2.value==""){
		alert("Debe Introducir un Codigo Postal");
		return document.frm1.zip2.focus();
	}
	if(document.frm1.ciudad2.value==""){
		alert("Debe Introducir una ciudad");
		return document.frm1.ciudad2.focus();
	}
	if(document.frm1.pais2.value==0){
		alert("Debe Seleccionar un pais");
		return false;
	}
	if(document.frm1.telfijo.value==""){
		alert("Debe Introducir un numero de telefono fijo");
		return document.frm1.telfijo.focus();
	}
	document.frm1.submit();
}
function validarPaso1(){
	if(document.frm1.correo.value==""){
		alert("Debe Introducir una direccion de correo electronico");
		return document.frm1.nom.focus();
	}
	if(document.frm1.correo.value==""){
		alert("Confirmar la direccion de correo electronico");
		return document.frm1.ape.focus();
	}
	if(document.frm1.clave.value==""){
		alert("Debe Introducir una Clave");
		return document.frm1.clave.focus();
	}
	if(document.frm1.clave2.value==""){
		alert("Confirme su Clave");
		return document.frm1.clave2.focus();
	}
	if(validarEmail(document.frm1.correo.value)){
	}else{
	   alert("La dirección de email es incorrecta");
	   return document.frm1.correo.focus();
	}
	if(document.frm1.clave.value===document.frm1.clave2.value){	
	}else{
		alert("No coinciden sus claves, verifique");
		return document.frm1.correo.focus();
	}
	document.getElementById("paso1").style.visibility = "hidden";
	document.getElementById("paso2").style.visibility = "visible";
	document.getElementById("paso2").style.left = 190;
	document.getElementById("paso2").style.top = 0;
	document.getElementById("paso3").style.visibility = "hidden";

}

function validarPaso2(){
	if(document.frm1.titulo.value==0){
		alert("Debe Seleccionar un titulo");
		return false;
	}

	if(document.frm1.nom.value==""){
		alert("Debe Introducir un Nombre");
		return document.frm1.nom.focus();
	}
	if(document.frm1.ape.value==""){
		alert("Debe Introducir un Apellido");
		return document.frm1.ape.focus();
	}
	if(document.frm1.dir.value==""){
		alert("Debe Introducir una Dirección");
		return document.frm1.dir.focus();
	}
	if(document.frm1.zip.value==""){
		alert("Debe Introducir un Codigo Postal");
		return document.frm1.zip.focus();
	}
	if(document.frm1.ciudad.value==""){
		alert("Debe Introducir el nombre de una ciudad");
		return document.frm1.ciudad.focus();
	}
	if(document.frm1.pais.value==0){
		alert("Debe Seleccionar un pais");
		return false;
	}
	if(document.frm1.tel.value==""){
		alert("Debe Introducir un numero de telefono fijo");
		return document.frm1.tel.focus();
	}
	document.getElementById("paso1").style.visibility = "hidden";

	document.getElementById("paso2").style.visibility = "hidden";
	document.getElementById("paso3").style.visibility = "visible";
	document.getElementById("paso3").style.left = 190;
	document.getElementById("paso3").style.top = 0;
	
}
function validarPaso4(){
	document.getElementById("paso1").style.visibility = "visible";
	document.getElementById("paso2").style.visibility = "hidden";
	document.getElementById("paso2").style.left = 190;
	document.getElementById("paso2").style.top = 0;
	document.getElementById("paso3").style.visibility = "hidden";
	
}

function validarPaso3(){
	document.getElementById("paso1").style.visibility = "hidden";
	document.getElementById("paso1").style.left = 190;
	document.getElementById("paso1").style.top = 0;
	document.getElementById("paso2").style.visibility = "hidden";
	document.getElementById("paso2").style.left = 190;
	document.getElementById("paso2").style.top = 0;
	document.getElementById("paso3").style.visibility = "visible";
	
}
function validarPaso5(){
	document.getElementById("paso1").style.visibility = "hidden";
	document.getElementById("paso2").style.visibility = "visible";
	document.getElementById("paso2").style.left = 190;
	document.getElementById("paso2").style.top = 0;
	document.getElementById("paso3").style.visibility = "hidden";
	
}


</script>

<script type="text/javascript">
function copiar() {
  	document.forms['frm1']['titulo2'].value = document.forms['frm1']['titulo'].value 
    document.forms['frm1']['nom2'].value = document.forms['frm1']['nom'].value 
	document.forms['frm1']['ape2'].value = document.forms['frm1']['ape'].value
	document.forms['frm1']['emp2'].value = document.forms['frm1']['emp'].value 
    document.forms['frm1']['dir2'].value = document.forms['frm1']['dir'].value 
	document.forms['frm1']['zip2'].value = document.forms['frm1']['zip'].value
	document.forms['frm1']['ciudad2'].value = document.forms['frm1']['ciudad'].value 
    document.forms['frm1']['pais2'].value = document.forms['frm1']['pais'].value 
	document.forms['frm1']['estado2'].value = document.forms['frm1']['estado'].value
	document.forms['frm1']['telfijo'].value = document.forms['frm1']['tel'].value 
    document.forms['frm1']['telcel'].value = document.forms['frm1']['tel2'].value 
	document.forms['frm1']['fax2'].value = document.forms['frm1']['fax'].value

	document.getElementById("paso2").style.visibility = "visible";
	document.getElementById("paso3").style.visibility = "visible";

}
</script>

<script type="text/javascript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function validar(){
	
	valor2 = 4;
	
	valor4 = document.frm1.producto.value ;
	//valor4 = 9 ;
	
	
	//alert("valor4:"+valor4);
	alert('carrito.php?cantidad='+valor2+'&producto='+valor4);//&fecha='+Date(),'carrito'
	//ObtenerDatos('carrito.php?cantidad='+valor2+'&producto='+valor4+');
	//document.frm1.submit();
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
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
//-->
</script>
<title> </title>
<style type="text/css">
<!--
body {
	background-color: #292623;
	margin-top: 0px;
	background-image: url(images/head-up.jpg);
	background-repeat: repeat-x;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
#pasos {
	position:relative;
	height: auto;
	width: auto;
}
#paso1 {
	position:absolute;
	visibility: visible;
	height: auto;
	width: auto;
	left: 1px;
}
#paso2 {
	position:absolute;
	visibility: hidden;
	height: auto;
	width: auto;
	left: 1px;
	top: 0px;
}
#paso3 {
	position:absolute;
	visibility:  hidden;
	height: auto;
	width: auto;
	top:480px;
}
.style1 {
	font-size: 12px;
	font-weight: bold;
}
.style2 {
	font-size: 9px
}
.style7 {
	color: #DF0059
}
.style8 {
	color: #0000FF
}
-->
</style>

<link href="estilos/page.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
#paso6 {	position:absolute;
	visibility: hidden;
	height: auto;
	width: auto;
}
-->
</style>
</head>

<body onload="MM_preloadImages('images/soporte2.png','images/home2.gif','images/nosotros2.png','images/servicios2.png','images/productos2.png','images/forum2.png','images/contacto2.png')">
<script type="text/javascript" src="wz_tooltip.js"></script>
<table width="980" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#292623">
  <tr>
    <td height="48" align="right" valign="top"><table height="20" width="980" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="61" align="left" valign="top"><a href="#" class="menu-sup">ESPAÑOL</a> </td>
        <td width="35" align="left" valign="top" class="info"><img src="images/spain.jpg" width="22" height="18" /></td>
        <td width="60" align="left" valign="top"><a href="#" class="menu-sup">ENGLISH </a></td>
        <td width="44" align="left" valign="top" class="info"><img src="images/usa.jpg" width="22" height="18" /></td>
        <td width="221" valign="top" class="menu-sup"><?php include("formbusqCam.php");?></td>
        <td width="20" align="center" valign="top" class="info">&nbsp;</td>
        <td width="96" align="center" valign="top" class="info"><a href="#" class="menu-sup">MAPA DE SITIO</a></td>
        <td width="149" align="center" valign="top" class="info"><a href="trabaja.php" class="menu-sup">TRABAJA CON NOSOTROS</a></td>
        <td width="98" align="center" valign="top"><a href="cliente1.php" class="menu-sup">CLIENTE NUEVO</a></td>
        <td width="98" align="center" valign="top"><a href="checkout1.php" class="menu-sup">TU CUENTA</a></td>
        <td width="98" align="center" valign="top"><a href="shopping_cart.php" class="menu-sup"><img src="images/btn-comprar.jpg" width="77" height="15" border="0" /></a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="right" valign="top"><table width="974" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="15"><img src="images/menu-bg-left.gif" width="15" height="85" alt="" /></td>
        <td width="215"><a href="index.php"><img src="images/logo.gif" width="215" height="85" alt="" border="0" /></a></td>
        <td width="2"><img src="images/menu-bg-line.gif" width="2" height="85" alt="" /></td>
        <td width="102"><a href="index.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('home21','','images/home2.gif',1)"><img src="images/home.gif" name="home21" width="102" height="85" border="0" usemap="#homeMap" id="home21" /></a></td>
        <td width="4"><img src="images/m_09.png" width="4" height="85" alt="" /></td>
        <td width="3"><a href="nosotros.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('nosotros21','','images/nosotros2.png',1)"><img src="images/nosotros.png" name="nosotros21" width="104" height="85" border="0" id="nosotros21" /></a></td>
        <td width="3"><img src="images/m_11.png" width="3" height="85" alt="" /></td>
        <td width="124"><a href="servicios.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('servicios21','','images/servicios2.png',1)"><img src="images/servicios.png" name="servicios21" width="124" height="85" border="0" id="servicios21" /></a></td>
        <td width="3"><img src="images/m_11.png" width="3" height="85" alt="" /></td>
        <td width="133"><a href="productos.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('productos21','','images/productos2.png',1)"><img src="images/productos.png" name="productos21" width="133" height="85" border="0" id="productos21" /></a></td>
        <td width="3"><img src="images/m_11.png" width="3" height="85" alt="" /></td>
        <td width="121"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('forum21','','images/forum2.png',1)"><img src="images/forum.png" name="forum21" width="133" height="85" border="0" id="forum21" /></a></td>
        <td width="130"><img src="images/m_11.png" width="3" height="85" alt="" /></td>
        <td width="104" background="images/bg_btn.jpg"><a href="contacto.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('contacto21','','images/contacto2.png',1)"><img src="images/contacto.png" name="contacto21" width="130" height="85" border="0" id="contacto21" /></a></td>
        <td width="15"><img src="images/menu-bg-right.gif" width="15" height="85" alt="" /></td>
      </tr>
    </table></td>
  </tr>
  
  <tr>
    <td align="center" valign="top"><table width="980" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="left" valign="top" bgcolor="#C0C0C0">&nbsp;</td>
        <td align="right" valign="top" bgcolor="#c0c0c0">&nbsp;</td>
      </tr>
      <tr>
        <td width="20" align="left" valign="top" bgcolor="#C0C0C0">&nbsp;</td>
        <td width="960" align="left" valign="top" bgcolor="#c0c0c0"><table width="940" border="0" cellspacing="0" cellpadding="0">
          
          <tr>
            <td width="769" align="left" valign="top"><table width="940" border="0" align="left" cellpadding="0" cellspacing="0">
              
              <tr>
                <td width="734" height="50"><form action="cliente2.php" method="post" name="frm1" id="frm1">
                      <div id="pasos">
                        <div id="paso1">
                        <div id="paso4">
                          <table width="940" border="0" align="center" cellpadding="0" cellspacing="0">
                            
                            <tr>
                              <td height="47" align="left" valign="middle">
                              <table width="770" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="593" height="36" align="left" valign="middle" class="red-title">Registro</td>
                <td width="177" align="left" valign="middle" class="lista-product">Paso 1 de 3</td>
              </tr>
            </table>
            <hr class="red-title"/>                              </td>
                            </tr>
                            <tr>
                              <td height="24" align="left" valign="middle"><?php

				  if(isset($_GET['regis'])){

                  ?>
                    <table align="center">
                      <tr>
                        <td class="textos">Usuario ya registrado con ese correo desea <a href="#">enviar su clave</a></td>
                      </tr>
                    </table>
                  <?php

				  }

                  ?>                    </td>
                            </tr>
                            
                            <tr>
                              <td width="220" height="30" align="left" valign="top">
                              <table width="500" border="0" align="left" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td height="24" align="left" colspan="2" valign="middle" class="Type10AColumns">&nbsp; &nbsp;<span class="style1">Información de la cuenta</span></td>
                                </tr>
                                <tr>
                                  <td width="220" height="24" align="left" valign="middle">Correo Electrónico : </td>
                                  <td width="400" height="20" align="left" valign="middle"><input type="text" name="correo" size="50" />
                                      <span class="style7">*</span></td>
                                </tr>
                                <tr>
                                  <td height="24" align="left" valign="middle">Confirmar Correo Electrónico :</td>
                                  <td height="20" align="left" valign="middle"><input name="correo2" type="text" id="correo2" size="50" />
                                      <span class="style7">*</span></td>
                                </tr>
                                <tr>
                                  <td height="24" align="left" valign="middle">Contraseña :</td>
                                  <td height="20" align="left" valign="middle"><input type="password" name="clave" size="50" />
                                      <span class="style7">*</span></td>
                                </tr>
                                <tr>
                                  <td height="20" align="left" valign="middle">Confirmar Contraseña :</td>
                                  <td align="left" valign="middle"><input type="password" name="clave2" size="50" />
                                      <span class="style7">*</span></td>
                                </tr>
                                <tr>
                                  <td height="20" align="left" valign="middle">Idioma del Usuario :</td>
                                  <td align="left" valign="middle"><label>
                                    <select name="idioma" size="1" id="idioma">
                                      <option value="es">Español</option>
                                      <option value="en">English</option>
                                    </select>
                                  </label></td>
                                </tr>
                                <tr>
                                  <td height="30" colspan="2">Se requiere que todos los campos con <span class="style7">* </span>sean rellenados</td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td height="30" align="left"><input type="button" class="txt_grey_bold" onclick="validarPaso1()" value="Continuar" /></td>
                                </tr>
                              </table></td>
                              </tr>
                          </table>
                          </div>
                        </div>
                        <div id="paso2">
                        <div id="paso5">
                          <table width="400" border="0" align="left" cellpadding="0" cellspacing="0">
                            <tr>
                              <td width="550" height="47" colspan="2" align="left" valign="middle">
                              <table width="770" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td width="593" height="36" align="left" valign="middle" class="red-title">Registro</td>
                                    <td width="177" align="left" valign="middle" class="lista-product">Paso 2 de 3</td>
                                  </tr>
                                </table>
                                <hr class="red-title"/>                                </td>
                               </tr>
                            <tr>
                              <td align="left" colspan="2" valign="middle">&nbsp;</td>
                            </tr>
                            <tr>
                              <td align="left" colspan="2" valign="middle">
                              <table width="400" border="0" align="left" cellpadding="0" cellspacing="0">
                            
                            <tr>
                              <td align="left" colspan="2" valign="middle" class="Type10AColumns">&nbsp; <span class="style1">Dirección de Facturación</span></td>
                            </tr>
                            <tr>
                              <td width="250" height="22" align="left" valign="middle">Titulo :</td>
                              <td height="22" align="left" valign="middle"><label>
                                <select name="titulo" size="1">
                                  <option value="0">Elejir</option>
                                  <option value="srta">Srta</option>
                                  <option value="sr">Sr</option>
                                  <option value="sra">Sra</option>
                                </select>
                                <span class="style7">*</span> </label>                              </td>
                              </tr>
                            <tr>
                              <td width="250" height="22" align="left" valign="middle">Nombres :</td>
                              <td width="300" height="22" align="left" valign="middle"><input name="nom" type="text" size="50" /> <span class="style7">*</span></td>
                              </tr>
                            <tr>
                              <td height="22" align="left" valign="middle">Apellidos :</td>
                              <td align="left" valign="middle"><input type="text" name="ape" size="50" /> <span class="style7">*</span></td>
                              </tr>
                            <tr>
                              <td height="22" align="left" valign="middle">Empresa :</td>
                              <td align="left" valign="middle"><input type="text" name="emp" size="50" /></td>
                              </tr>
                            <tr>
                              <td height="22" align="left" valign="middle">Direcci&oacute;n :</td>
                              <td align="left" valign="middle"><input type="text" name="dir" id="dir" size="50" /> <span class="style7">*</span></td>
                              </tr>
                            <tr>
                              <td height="18" align="left" valign="middle">Código Postal :<span class="style7"> </span></td>
                              <td align="left" valign="middle"><input type="text" name="zip" id="zip" size="50" /> <span class="style7">*</span></td>
                              </tr>
                            <tr>
                              <td height="20" align="left" valign="middle">Ciudad :</td>
                              <td align="left" valign="middle"><input type="text" name="ciudad" id="ciudad" size="50" /> <span class="style7">*</span></td>
                              </tr>
                            <tr>
                              <td height="20" align="left" valign="middle">País :</td>
                              <td align="left" valign="middle">
                              <select name="pais">
                                <option value="0">Elegir un pais</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Aland Islands">Aland Islands</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                            
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antarctica">Antarctica</option>
                                <option value="Antigua And Barbuda">Antigua And Barbuda</option>
                            
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                            
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                            
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                            
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                            
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                            
                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                                <option value="Cook Islands">Cook Islands</option>
                            
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                            
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="East Timor">East Timor</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                            
                                <option value="El Salvador">El Salvador</option>
                                <option value="England">England</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Espana">España</option>
                                <option value="Estonia">Estonia</option>
                            
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Island">Falkland Islands</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                            
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Territories">French Southern Territories</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                            
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Great Britain">Great Britain</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                            
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guernsey">Guernsey</option>
                                <option value="Guinea">Guinea</option>
                            
                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                            
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle Of Man">Isle Of Man</option>
                            
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jersey">Jersey</option>
                                <option value="Jordan">Jordan</option>
                            
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea, Republic of">Korea, Republic of</option>
                                <option value="Korea (South)">Korea (South)</option>
                                <option value="Kuwait">Kuwait</option>
                            
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                            
                                <option value="Libya">Libya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macau">Macau</option>
                                <option value="Macedonia">Macedonia</option>
                            
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                            
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                            
                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montenegro">Montenegro</option>
                                <option value="Montserrat">Montserrat</option>
                            
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                            
                                <option value="Netherlands">Netherlands</option>
                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                            
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Ireland">Northern Ireland</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                            
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Palestinian Territories">Palestinian Territories</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                            
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                            
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russia">Russia</option>
                                <option value="Russian Federation">Russian Federation</option>
                            
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Barthelemy">Saint Barthelemy</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Martin">Saint Martin</option>
                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                            
                                <option value="Samoa (Independent)">Samoa (Independent)</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Scotland">Scotland</option>
                                <option value="Senegal">Senegal</option>
                            
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                            
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                <option value="South Korea">South Korea</option>
                                <option value="Spain">Spain</option>
                            
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="St. Helena">St. Helena</option>
                                <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                                <option value="Swaziland">Swaziland</option>
                            
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Taiwan">Taiwan</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Thailand">Thailand</option>
                            
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad">Trinidad</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                            
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                            
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="USA">USA</option>
                            
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Viet Nam">Viet Nam</option>
                                <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                            
                                <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                <option value="Wales">Wales</option>
                                <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                            
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select> <span class="style7">*</span></td>
                              </tr>
                            <tr>
                              <td height="22" align="left" valign="middle">Estado :</td>
                              <td align="left" valign="middle"><input type="text" name="estado" size="50" /></td>
                              </tr>
                            <tr>
                              <td height="22" align="left" valign="middle">Teléfono fijo :</td>
                              <td height="22" align="left" valign="middle"><input type="text" name="tel" size="50" /> <span class="style7">*</span></td>
                              </tr>
                            <tr>
                              <td align="left" valign="middle">Teléfono Celular :</td>
                              <td height="20" align="left" valign="middle"><input type="text" name="tel2" size="50" /></td>
                              </tr>
                            <tr>
                              <td height="28">Fax :</td>
                              <td height="28" align="left"><input name="fax" type="text" id="fax" size="50" /></td>
                              </tr>
                            <tr>
                              <td height="28" colspan="2">Se requiere que todos los campos con <span class="style7">*</span> sean rellenados</td>
                            </tr>
                            <tr>
                              <td height="28" colspan="2">
                              <table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td><strong>&iquest;Su direcci&oacute;n de envio es igual a los datos registrados?</strong></td>
                                  <td width="60"><label>S&iacute;
                                        <input name="" type="radio" value="" onClick="copiar()">
                                    </label>
                                  </td>
                                </tr>
                              </table>                             </td>
                              </tr>
                            <tr>
                              <td><input type="button" value="Retroceder" onclick="validarPaso4()" /></td>
                              <td height="28" align="left"><input type="button" class="txt_grey_bold" onclick="validarPaso2()" value="Continuar" /></td>
                              </tr>
                          </table>
                              </td>
                            </tr>
                          </table>
                          </div>
                          </div>
                          <div id="paso3">
                            <table width="770" border="0" align="left" cellpadding="0" cellspacing="0">
                            <tr>
                              <td width="770" height="47" colspan="2" align="left" valign="middle">
                              <table width="770" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td width="593" height="36" align="left" valign="middle" class="red-title">Registro</td>
                                    <td width="177" align="left" valign="middle" class="lista-product">Paso 3 de 3</td>
                                  </tr>
                                </table>
                                <hr class="red-title"/>                                </td>
                               </tr>
                            
                            <tr>
                              <td align="left"><table width="400" border="0" align="left" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td height="22" align="left" colspan="2" valign="middle" class="Type10AColumns"> &nbsp; &nbsp;<span class="style1">Direccion de Envio</span></td>
                                </tr>
                                <tr>
                                  <td width="250" height="22" align="left" valign="middle">Titulo :</td>
                                  <td height="21" align="left" valign="middle"><label>
                                    <input name="titulo2" type="text" size="50" />
                                    <span class="style7">*</span> </label>                                   </td>
                                </tr>
                                <tr>
                                  <td width="250" height="22" align="left" valign="middle">Nombres :</td>
                                  <td width="300" height="21" align="left" valign="middle"><input name="nom2" type="text" size="50" />
                                      <span class="style7">*</span></td>
                                </tr>
                                <tr>
                                  <td height="22" align="left" valign="middle">Apellidos :</td>
                                  <td align="left" valign="middle"><input type="text" name="ape2" size="50" />
                                      <span class="style7">*</span></td>
                                </tr>
                                <tr>
                                  <td height="22" align="left" valign="middle">Empresa :</td>
                                  <td align="left" valign="middle"><input type="text" name="emp2" size="50" /></td>
                                </tr>
                                <tr>
                                  <td height="22" align="left" valign="middle">Direcci&oacute;n :</td>
                                  <td align="left" valign="middle"><input type="text" name="dir2" id="dir2" size="50" />
                                      <span class="style7">*</span></td>
                                </tr>
                                <tr>
                                  <td height="18" align="left" valign="middle">Código Postal :<span class="style7"> </span></td>
                                  <td align="left" valign="middle"><input type="text" name="zip2" id="zip2" size="50" />
                                      <span class="style7">*</span></td>
                                </tr>
                                <tr>
                                  <td height="20" align="left" valign="middle">Ciudad :</td>
                                  <td align="left" valign="middle"><input type="text" name="ciudad2" id="ciudad2" size="50" />
                                      <span class="style7">*</span></td>
                                </tr>
                                <tr>
                                  <td height="20" align="left" valign="middle">País :</td>
                                  <td align="left" valign="middle"><span class="style7">
                              <input type="text" name="pais2" size="50" />
                                      *</span></td>
                                </tr>
                                <tr>
                                  <td height="22" align="left" valign="middle">Estado :</td>
                                  <td align="left" valign="middle"><input type="text" name="estado2" size="50" /></td>
                                </tr>
                                <tr>
                                  <td height="22" align="left" valign="middle">Teléfono fijo :</td>
                                  <td height="22" align="left" valign="middle"><input type="text" name="telfijo" size="50" />
                                      <span class="style7">*</span></td>
                                </tr>
                                <tr>
                                  <td align="left" valign="middle">Teléfono Celular :</td>
                                  <td height="20" align="left" valign="middle"><input type="text" name="telcel" size="50" /></td>
                                </tr>
                                <tr>
                                  <td height="22">Fax :</td>
                                  <td height="28" align="left"><input name="fax2" type="text" id="fax2" size="50" /></td>
                                </tr>
                                <tr>
                                  <td height="28" colspan="2">Se requiere que todos los campos con <span class="style7">* </span>sean rellenados</td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td align="left"><input type="button" value="Retroceder" onclick="validarPaso5()" />
                                      <input type="button" value="Finalizar" onclick="validar0()" /></td>
                                </tr>
                              </table></td>
                            </tr>
                          </table>
                </div>
                      </div>
                    </form></td>
              </tr>
              <tr>
                <td height="838" align="left" valign="top"></td>
              </tr>
              <tr>
                <td valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td align="left" valign="top" class="textos"><p class="textos"><strong>CONSIDERACIONES:</strong></p>
                    <p class="textos">El registro en nuestra tienda virtual es a libre eleccion  del visitante y su información será verificada para clasificar su acceso como  cliente Retail o distribuidor.</p>
                  <p>Los datos en nuestra lista son totalmente confidenciales, y  no vendemos ni cambiamos información por considerarlo de carácter privado y  respeto a su confidencialidad.</p>
                  <p>Una vez registrado usted podrá solicitar precios de  inmediato lo cual sera respondido desde nuestro departamento de ventas, luego  de la validación de información y calificación usted tendrá acceso a los  precios respectivos ONLINE y podrá incluso pagar usando cualquier tarjeta de crédito  vía la prestigiosa pasarela de pagos PAYPAL (seguridad y alta confiabilidad  universal).</p>
                  <p>Las entregas del stock que no están disponibles demoran 10 días  útiles en la entrega, por lo que sugerimos confirmar el stock antes de pagar en  PAYPAL..</p
                        ></td>
              </tr>
              <tr>
                <td align="left" valign="top" class="textos">&nbsp;</td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="6" align="center" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><table width="979" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td valign="top"><img src="images/footer-bg-left.gif" width="15" height="76" alt="" /></td>
        <td width="949" height="76" align="center"  valign="middle" background="images/foot_bg.jpg"><table width="900" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="330" align="left" class="info">Copyright 2009 SG Cert, todos los derechos reservados</td>
            <td width="289" align="center" class="info">&nbsp;</td>
            <td width="330" align="right" class="info"><a href="politica-privacidad.htm" class="info">Politica de Privacidad</a></td>
          </tr>
        </table></td>
        <td valign="top"><img src="images/footer-bg-right.gif" width="15" height="76" alt="" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" bgcolor="#292623" class="info"><table width="900" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="right"><span class="info">Desarrolado por:</span> <span class="pixel"><a href="http://www.pixel.pe/" target="_blank" class="pixel"> Pixel</a></span><a href="http://www.pixel.pe/" target="_blank" class="graphic">Graphic</a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
</table>
</body>
</html>
