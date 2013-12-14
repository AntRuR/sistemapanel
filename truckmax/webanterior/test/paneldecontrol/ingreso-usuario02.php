<?php
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
	background-color: #292623;
	margin-top: 0px;
	background-image: url(images/head-up.jpg);
	background-repeat: repeat-x;
}
-->
</style>
<link href="estilos/estilos.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="900" border="0" align="left" cellpadding="0" cellspacing="0">
<tr>
  <td height="20" align="left" valign="top"><?php include("menu2.php");?></td>
</tr>
<tr>
            <td height="20" align="left" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td align="left" valign="top" class="info">
            <?php if(isset($_GET['ok'])){ echo "Ingreso Correcto";}?>
            <p/>
<strong class="idioma">CREAR USUARIO</strong>
<p/>
<form name="frm1" action="ingreso-usuario2.php" method="post">
  <table border="0">
    <tr>
      <td width="140" height="22" align="right" class="texto"><strong class="info">Nombre de Usuario : </strong></td>
      <td width="8"><input name="correo" type="hidden" value="aegas@sgcert.com" /></td>
      <td width="120"><input name="nombre" type="text" class="textos" id="nombre" /></td>
    </tr>
    
    <tr>
      <td height="22" align="right" class="info">Clave :</td>
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
            <td height="28" align="left" valign="middle" class="titulo">&nbsp;</td>
          </tr>
          <tr>
            <td height="28" align="left" valign="middle" class="idioma"><strong>USUARIOS EXITENTES</strong></td>
</tr>
          <tr>
            <td height="300" align="left" valign="top">
            <table cellspacing="2" class="listado" style="border:1px solid #006666;">
            <tr style="background:#CCCCCC;">
                  <td width="32" class="textos"><strong>Cód</strong></td>
              <td width="500" class="textos"><strong> &nbsp; Usuarios</strong></td>
            </tr>
                <?php
                while($row = mysql_fetch_array($sql)){
                    echo "<tr>";
                    echo " 		<td class='info'> &nbsp; <a onclick=\"pedirDatos('".$row['id_usu']."')\">".$row['id_usu']."</a></td>";
                    echo " 		<td class='info'> &nbsp; ".$row['nombre']."</td>";
                    echo "	</tr>";
                }
                ?>
            </table>            </td>
          </tr>
          <tr>
            <td align="left" valign="top">&nbsp;</td>
          </tr>
        </table>
</body>
</html>
