<?php
	require_once('../Connections/cn.php');
	mysql_select_db($database_cn, $cn);
	$login= $_POST['login'];
	$query_correo="select * from usuario where correo='".$_POST['correo']."' and login='$login'";
	$rs_query_correo = mysql_query($query_correo, $cn) or die(mysql_error());
	$row_rs_query_correo = mysql_fetch_assoc($rs_query_correo);
	$destinatario = 'aegas@sgcert.com';
	$asunto = "Recuperacion de Clave";
	//$cuerpo = "a ver si llega".$row_rs_query_correo['correo'];
	$cuerpo = '
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Untitled Document</title><style type="text/css">
	
	.style1 {font-size: 8.5pt}
	.style2 {
		font-family: Verdana, Arial, Helvetica, sans-serif;
		font-weight: bold;
		font-size: 12px;
	}
	
	</style></head>
	<body>
	<table>
	  <tr>
		<td colspan="2" bordercolor="#333333" style="border: 1pt inset rgb(216, 225, 229); padding: 2pt; background: rgb(224, 230, 233) none repeat scroll 0%; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;"><p class="style2">Aquí tu Clave de administrador de SgCert</p></td>
	  </tr>
	  <tr>
		<td style="border: 1pt inset rgb(216, 225, 229); padding: 3pt; background: rgb(224, 230, 233) none repeat scroll 0%; width: 98.25pt; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;" width="131"><p><strong><span style="font-size: 8.5pt;">Usuario:</span></strong></p></td>
		<td style="border: 1pt inset rgb(216, 225, 229); padding: 3pt;"><p><span style="font-size: 10.5pt; color: rgb(84, 84, 84);">'.$row_rs_query_correo['login'].'</span></p></td>
		</tr>
		<tr>
		<td style="border: 1pt inset rgb(216, 225, 229); padding: 3pt; background: rgb(224, 230, 233) none repeat scroll 0%; width: 82.5pt; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;" width="110"><p><strong><span class="style1">Clave</span></strong></p></td>
		<td style="border: 1pt inset rgb(216, 225, 229); padding: 3pt;"><p><span style="font-size: 10.5pt; color: rgb(84, 84, 84);">'.$row_rs_query_correo['clave'].'</span></p></td>
	  </tr>
	  <tr>
	
	
	<td style="border: 1pt inset rgb(216, 225, 229); padding: 3pt; background: rgb(224, 230, 233) none repeat scroll 0%; width: 82.5pt; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;" width="110"><p><strong><span class="style1">Correo:</span></strong></p></td>
<td style="border: 1pt inset rgb(216, 225, 229); padding: 3pt;"><p><span style="font-size: 10.5pt; color: rgb(84, 84, 84);">'.$row_rs_query_correo['correo'].'</span></p></td>
	  </tr>
	</table>
	</body>
	</html>
	';	
	//para el envío en formato HTML
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";	
	//dirección del remitente
	$headers .= "From: Web SgCert <no-replay@sgcert.com>\r\n";
	mail($destinatario,$asunto,$cuerpo,$headers);
	//echo $cuerpo2."<br/>".$destinatario;
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
-->
</style>
<script language="javascript">
	function validarLogin(){
		if(validarEmail(document.frm3.correo.value)){
			
		}else{
		   alert("La dirección de email es incorrecta");
		   return document.frm3.correo.focus();
		}
		document.frm3.submit();
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
<style type="text/css">
<!--
body {
	margin-top: 0px;
	background-color: #b7bfc0;
	margin-bottom: 0px;
	margin-left: 0px;
	margin-right: 0px;
}
-->
</style>
<link href="panel.css" rel="stylesheet" type="text/css" />
<link href="estilos/estilos.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="top">
    <table width="1290" height="1000" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="1290" height="75" align="center" valign="top" background="imagenes/bg_top1.jpg"><table width="1018" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="200">
            <table width="200" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td align="center" class="pixel">Desarrolado por: <a href="http://www.pixelgraphicperu.com/" target="_blank" class="pixel">PixeGraphic</a></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table></td>
            <td  class="panel">Panel de Control &nbsp; &nbsp;</td>
          </tr>
          
        </table></td>
      </tr>
      <tr>
        <td height="34" align="center" valign="top" background="imagenes/bg_btn.jpg">
        <table width="1018" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="34"><?php include("menu2.php");?></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="1000" align="center" valign="top" background="imagenes/bg-midle.jpg"><table width="1018" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" valign="top">
            <table width="950" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td height="1000" align="left" valign="top" class="textos"><table width="980" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="20" align="center" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td height="100" align="center" valign="top" class="textos">Su Clave ser&aacute; enviada a su correo electr&oacute;nico</td>
  </tr>
</table></td>
              </tr>
              <tr>
            <td height="28" align="left" valign="middle" class="idioma">&nbsp;</td>
</tr>
            </table>
            </td>
          </tr>
        </table></td>
      </tr>
      
      <tr>
        <td align="center" valign="top"><img src="imagenes/bg_foot.jpg" width="1290" height="121" /></td>
      </tr>
    </table></td>
  </tr>
</table>

</body>
</html>
