<?php
session_start(); 
require_once('../Connections/cn.php');
require_once('class/ClassGeneraRuta.php');
mysql_select_db($database_cn, $cn);

$idpro = $_POST['id_pro'];
//$idpro = 1;
$nom = $_POST['nom'];
$ape = $_POST['ape'];
$correo = $_POST['correo'];
$nom_pro = $_POST['nom_pro_es'];
$pre_ven = $_POST['pre_ven'];
$cantidad = $_POST['cantidad'];

//generamos en la clave el numero rand
$obj =new ClassGeneraRuta();
$numRand = $obj->generaNumero();
//echo "Numero random:".$numRand;

$query1="select DISTINCT img_pro2 from producto where id_pro=$idpro";
$rs_query1=mysql_query($query1,$cn) or die(mysql_error);
while($fila1=mysql_fetch_row($rs_query1)){
				$nombrearchiDescar = $fila1[0];
				$file=$nombrearchiDescar;
//echo "Nombre del archivo".$nombrearchiDescar;
}

//crear directorio nuevo
mkdir("../$numRand", 0755);
//la ruta de la descarga
$ls_linkdw ="http://www.sgcert.com/".$numRand."/".$nombrearchiDescar;
//echo "--- Ruta de descarga:".$ls_linkdw;
//copia el archivo a la ruta random copy('El_archivo.xxx','/nuevo_directorio/'); 

//$path_absoluto="c:/xampp/htdocs/libros";
copy("../descargas/".$file, "../$numRand/".$file); 
  


$ls_html = '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style type="text/css">
<!--
.Estilo4 {font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #333333;
}
.Estilo5 {
	color: #FFFFFF;
	font-weight: bold;
	font-size: 14px;
}
-->
</style>
</head>

<body>
<table width="500" border="1" align="center" cellpadding="0" cellspacing="0" class="Estilo4">
  <tr bgcolor="#999999">
    <td height="35" bgcolor="#FF9900"><div align="center" class="Estilo5"><strong>SGCERT - Autorizacion de uso</strong></div></td>
  </tr>
  <tr bordercolor="#FFFFFF">
    <td height="10"><p>Usted :</p>
    </td>
  </tr>
  <tr >
    <td align="center" valign="top">
    <table border="0" cellspacing="0" cellpadding="0">
       <tr bordercolor="#FFFFFF">
    <td width="150" height="24">&nbsp;Nombre</td>
    <td width="12" bordercolor="#FFFFFF"><div align="center">:</div></td>
    <td width="257">LSX_NOMBRE, LSX_APELLIDO</td>
  </tr>
  <tr bordercolor="#FFFFFF">
    <td width="150" height="24">&nbsp;Correo Electronico</td>
    <td width="12" bordercolor="#FFFFFF"><div align="center">:</div></td>
    <td width="257">LSX_CORREO</td>
  </tr>
  <tr bordercolor="#FFFFFF">
    <td height="24" colspan="3"><p align="left">esta autorizado a usar el siguiente producto:</p>
      <p align="left"><strong>LSX_PRODUCTO</strong></p>
      <p align="left">bajo las siguientes condiciones:</p>
      <p align="left">BLA BLA BLA...</p></td>
    </tr>
  <tr bordercolor="#FFFFFF">
    <td height="24" colspan="3"><p align="left">&nbsp;</p>
      <p align="left">para lo cual se les brinda el siguiente link: <a href="LSX_LINKDW">DESCARGAR</a></p>
      <p align="left">&nbsp;</p></td>
    </tr>
    </table>
    <p align="left">&nbsp;</p>
    <p align="left">&nbsp;</p>
    <p align="left">&nbsp;</p>
    <p align="left">&nbsp;</p></td>
   </tr
  
  ><tr bordercolor="#FFFFFF">
    <td valign="top">&nbsp;</td>
    </tr>
  <tr>
    <td height="35" valign="top" bgcolor="#FF9900"><div align="center" class="Estilo5">
      <p>Agradecemos su interes, </p>
      <p>administrador</p>
    </div></td>
  </tr>
</table>
</body>
</html>
';

$ls_html = str_replace( "LSX_NOMBRE",$nom ,$ls_html );
$ls_html = str_replace( "LSX_APELLIDO",$ape ,$ls_html );
$ls_html = str_replace( "LSX_CORREO",$correo,$ls_html );
$ls_html = str_replace( "LSX_PRODUCTO",$$nom_pro,$ls_html );
$ls_html = str_replace( "LSX_LINKDW",$ls_linkdw,$ls_html );





$email1 = $correo;

$asunto = 'SGCERT: Solicitud de autorizacion Link de descarga';
$cabeceras = "MIME-Version: 1.0\r\n"; 
$cabeceras .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$cabeceras .= "From: ventas@sgcert.com\r\n";
//$cabeceras .= "Reply-To:".$correo."\r\n"; 
//$cabeceras .= "Return-path: contacto@sgcert.com\r\n"; 
//$cabeceras .= "Bcc: ".$correo."\r\n"; 

mail($email1, $asunto, $ls_html, $cabeceras);


?>
<?php 
header("Location:activar-descargas-ventas.php");
?>