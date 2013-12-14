<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$tipo = $_GET['idTipo'];
$Idmarc = $_GET['id_marcador'];
$nom_m = $_GET['nom_marc'];
$query1 = "SELECT * FROM `existencia` WHERE `id_marcador`=$Idmarc";
//echo $query1."<br/>";
$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
$row_rs_query1 = mysql_fetch_assoc($rs_query1);
$i=0;
do{

	$cant[$i]=$row_rs_query1["cantidad"];
	$valor_cant=$$cant[$i];
//echo "equival=".$equival[$i]."/i=".$i;
	$i=$i+1;

}while($row_rs_query1 = mysql_fetch_assoc($rs_query1));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.:: Panel de Control ::.</title>
<script type="text/javascript" src="../js/funcionestabs.js"></script>
<script language="javascript">
function mostrarMarcadores(valor){
	ObtenerDatos('modificar-cantidad2.php?tipomarcador='+valor+'&fecha='+Date(),'marcadoresmaster');
}
</script>
<style type="text/css">
body {
	background-image: url(../images/fondo_linea_a.gif);
}
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<script src="../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="panel.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="910" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td align="center" valign="top"><table width="900" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><img src="images/head1.jpg" width="900" height="163" /></td>
      </tr>
      <tr>
        <td align="left"><table width="900" border="0" cellpadding="0" cellspacing="0" bgcolor="#006A3A">
          <tr>
            <td align="left" bgcolor="#eeeeee">
            <ul id="MenuBar1" class="MenuBarHorizontal">
                      <li>
                        <center>
                           <a class="MenuBarItemSubmenu" href="#">NUEVO</a>
                        </center>
                        <ul>
                            <li><a href="ingreso-usuario.php">CREAR USUARIO</a></li>
                            <li><a href="ingreso-marcador.php">CREAR UN TIPO DE MARCADOR</a></li>
                            <li><a href="ingreso-marcadores-master.php">CREAR MARCADOR MASTER</a></li>
                            <li><a href="ingreso-proveedor.php">CREARPROVEEDOR</a></li>
                            <li><a href="ingreso-almacen.php">CREAR ALMACEN</a></li>
                        </ul>
                      </li>
                      <li>
                        <center>
                          <a href="#">MODIFICACIONES</a>
                        </center>
                        <ul>
                          <li><a href="modificacion-usuario.php">MODIFICAR USUARIO</a></li>
                          <li><a href="modificacion-marcador.php">MODIFICAR TIPO DE MARCADOR</a></li>
                          <li><a href="modificacion-marcadores-master.php">MODIFICAR MARCADORES MASTER</a></li>
                          <li><a href="lista.php">MODIFICAR PROVEEDOR </a></li>
                          <li><a href="modificacion-almacen.php">MODIFICAR ALMACEN</a></li>
                        </ul>
                      </li>
                      <li>
                        <center>
                          <a class="MenuBarItemSubmenu" href="#">ELIMINAR</a>
                        </center>
                        <ul>
                          <li><a href="borrar-usuario.php">ELIMINAR USUARIO</a></li>
                          <li><a href="borrar-marcador.php">ELIMINAR TIPO DE MARCADOR</a></li>
                          <li><a href="borrar-marcadores-master.php">ELIMINAR MARCADOR MASTER</a></li>
                          <li><a href="lista.php">ELIMINAR PROVEEDOR </a></li>
                          <li><a href="borrar-almacen.php">ELIMINAR ALMACEN</a></li>
                        </ul>
                      </li>
                       <li>
                        <center>
                          <a href="#">MODIFICAR PARAMETROS</a>
                        </center>
                        <ul>
                          <li><a href="modificar-cantidad.php">MODIFICAR CANTIDAD</a></li>
                          <li><a href="modificacion-equivalencia.php">MODIFICAR EQUIVALENCIA</a></li>
                          <li><a href="modificar-existencia.php">MODIFICAR TOTAL EXISTENCIA</a></li>
                        </ul>
                      </li>
                    </ul> 
            </td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td align="center" valign="top">
        <table width="900" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="550" align="left" valign="top">
            <table width="900" cellspacing="0" cellpadding="0">
          <tr>
            <td height="50">&nbsp;</td>
          </tr>
          <tr>
            <td valign="top">
            <table  style="border:1px solid #006666;">
          <tr>
            <td class="texto">
            <form action="modificaR-cantidad1-2.php" method="post" name="frm2">      
              <table border="0" cellspacing="6">
                <tr>   
                  <td align="center" class="titulo">MARCADORES MASTER</td>           
                </tr>            
                
            	<tr>
                  <td align="left" class="titulo">C&oacute;digo del marcador
                  <input name="Id_mar" type="hidden" id="Id_mar" value="<?php echo $Idmarc ?>" /></td>
                </tr>
                <tr>
                  <td align="left" class="texto"><p>
                    <label>
                    
                    <input type="text" disabled="disabled" value="<?php echo $Idmarc ?>"/>
                    </label>
                  </p></td>
                </tr>
                <tr>
                  <td align="left" class="titulo">Marcador Master</td>
                </tr>
                <tr>
                  <td align="left" class="texto"><p>
                    <label>
                    
                    <input type="text" disabled="disabled" name="Id_mar" id="Id_mar" value="<?php echo $nom_m?>" />
                    </label>
                  </p></td>
                </tr>
                <tr>
                  <td align="left" class="titulo">Cantidad</td>
                </tr>
                <tr>
                  <td align="left"><p>
                    <input name="cant" type="text" class="texto" value="<?php echo $cant[0]?>">
                  </p>
                    <p>
                      <label></label>
</p></td>
                </tr>
                <tr>
                  <td align="left"><input type="submit" class="boton" onclick="modificar(<?php echo $row_rs_query1['id_marcador']?>)" value="MODIFICAR" /></td>
                </tr>
              </table>
            </form>            </td>
          </tr>
        </table>
            </td>
          </tr>
          <tr>
            <td height="50">&nbsp;</td>
          </tr>
        </table>
            </td>
            </tr>
          <tr>
            <td align="left" valign="top">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="center"><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','760','height','40','src','foot','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','foot' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="760" height="40">
          <param name="movie" value="foot.swf" />
          <param name="quality" value="high" />
          <embed src="foot.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="760" height="40"></embed>
        </object></noscript></td>
      </tr>
    </table></td>
  </tr>
</table>
<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"../SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>
</body>
</html>

