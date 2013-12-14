<?php
session_start(); 
//$var1=$_SESSION['nombre'];
if($_SESSION['nombre']<>""){
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$sql=mysql_query("select * from usuario ORDER BY id_usu ASC");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::INGRESO DE CATEGORIA::.</title>
<script language="javascript">
function pedirDatos(id_usu){
	//donde se mostrará el formulario con los datos
	divFormulario = document.getElementById('formulario');
	
	//instanciamos el objetoAjax
	ajax=objetoAjax();
	//uso del medotod GET
	ajax.open("POST", "consulta_por_id.php");
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			//mostrar resultados en esta capa
			divFormulario.innerHTML = ajax.responseText
			//mostrar el formulario
			divFormulario.style.display="block";
		}
	}
	//como hacemos uso del metodo GET
	//colocamos null
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//enviando los valores
	ajax.send("idusu="+id_usu)
}
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
    <td align="center" valign="top"><table width="1290" height="1000" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center" valign="top" background="imagenes/bg-top.gif" style="background-repeat:no-repeat;">
        <table width="1018" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="75" valign="top">
            <table width="1018" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="200"><table width="200" border="0" cellspacing="0" cellpadding="0">
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
          
        </table>
            </td>
          </tr>
          <tr>
            <td height="33"><?php include("menu2.php");?></td>
          </tr>
          <tr>
            <td height="772" align="center" valign="top">
            <table width="950" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td align="left" valign="top" class="correcto">
            <?php if(isset($_GET['ok'])){ echo "Ingreso Correcto";}?>
            <p/>
<strong class="BigTitles">CREAR USUARIO</strong>
<p/>
<form name="frm1" action="ingreso-usuario2.php" method="post">
  <table border="0">
    <tr>
      <td width="140" height="22" align="right" class="texto"><strong class="textos">Nombre de Usuario : </strong></td>
      <td width="8"><input name="correo" type="hidden" value="aegas@sgcert.com" /></td>
      <td width="120"><input name="nombre" type="text" class="textos" id="nombre" /></td>
    </tr>
    
    <tr>
      <td height="22" align="right" class="textos">Clave :</td>
      <td>&nbsp;</td>
      <td><input name="clave" type="text" class="textos" id="clave" /></td>
    </tr>
    
    <tr>
      <td colspan="3" align="right" valign="top"><input type="submit" class="actualizar" value="GRABAR" /></td>
    </tr>
  </table>
</form>            </td>
            </tr>
          <tr>
            <td>&nbsp;</td>
              </tr>
              <tr>
            <td height="28" align="left" valign="middle" class="idioma"><strong class="texts">USUARIOS EXITENTES</strong></td>
</tr>
          <tr>
            <td height="300" align="left" valign="top">
            <table cellspacing="2" class="listado"  bordercolor="#BBBBBB" style="border:1px solid #BBBBBB;">
            <tr style="background:#777777;">
                  <td width="32" class="textos"><strong>Cód</strong></td>
              <td width="500" class="textos"><strong> &nbsp; Usuarios</strong></td>
            </tr>
                <?php
                while($row = mysql_fetch_array($sql)){
                    echo "<tr>";
                    echo " 		<td class='textos' bgcolor='#DDDDDD' width='38' aling='center'> &nbsp; <a onclick=\"pedirDatos('".$row['id_usu']."')\">".$row['id_usu']."</a></td>";
                    echo " 		<td class='textos' bgcolor='#DDDDDD'> &nbsp; ".$row['nombre']."</td>";
                    echo "	</tr>";
                }
                ?>
            </table>            </td>
          </tr>
            </table>
            </td>
          </tr>
          <tr>
            <td height="100">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>

</body>
</html>
<?php
}else{
	header("Location:index.php?var=$var1");
	
}
?>