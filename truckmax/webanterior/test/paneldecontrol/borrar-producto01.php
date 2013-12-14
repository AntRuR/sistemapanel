<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$query1 = "select * from subcategoria ORDER BY des_subcat_es ASC";
$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
$row_rs_query1 = mysql_fetch_assoc($rs_query1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::MODIFICACION DE PRODUCTO::.</title>
<script type="text/javascript" src="js/funcionestabs.js"></script>
<script language="javascript">
function mostrarMarcadores(valor){
	ObtenerDatos('borrar-producto02.php?tipomarcador='+valor+'&fecha='+Date(),'marcadoresmaster');
}
</script>
<script language="javascript">
function borrar(valor){
	if(!confirm("Seguro que desea eliminar el Producto")) {
    }else{
	document.frm1.producto.value=valor;
	document.frm1.submit();
	}
}
</script>
</head>
<body>
<?php include("menu.php");?><br/><br />
<table width="900" cellspacing="0" cellpadding="0">
          <tr>
            <td height="50">&nbsp;</td>
          </tr>
          <tr>
            <td height="50" valign="top">
            	<strong class="ingresoOk"><?php if(isset($_GET['ok'])){ echo "Modificacion Correcta";}?></strong>
                <br/>
                <strong class="titulo">MODIFICAR PRODUCTO</strong>
                <form name="frm1"  action="borrar-producto2.php" method="post" >
                  <table width="764">
                    <tr>
                      <td width="150" align="center" class="texto"><strong>PRODUCTO</strong></td>
                      <td width="579"><?php
                    if($row_rs_query1['des_subcat_es']==""){
                    ?>
                    <select name='tipomarcador'>
                     <option value='0'>No Tiene Productos</option>
                 	</select>
                	 <?php					 
                    }else{                
                    ?>                
                        <select name='tipomarcador' onchange="mostrarMarcadores(this.value)">                
                        <option value="0">Selecione un Productos</option>
                   <?php
                        do{
                        ?>
                          <option value='<?php echo $row_rs_query1['id_subcat'] ?>'><?php echo $row_rs_query1['des_subcat_es'] ?></option>
                          <?php
                        }while($row_rs_query1 = mysql_fetch_array($rs_query1));
                        ?>
                        </select>
                        <?php
                    }
                    ?></td>
                    </tr>
                  </table>
                </form>            </td>
          </tr>
          <tr>
            <td height="20">
                        </td>
          </tr>
          <tr>
            <td height="50">
            <div id="marcadoresmaster"></div>
            </td>
          </tr>
        </table>

</body>
</html>
