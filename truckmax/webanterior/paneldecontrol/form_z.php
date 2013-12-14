<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>
<body>
<tr>
                        <td align="center" valign="top">
             <!--aca creamos el pop - boton continuar comprando con el contenido dinamico y un form con los valores iniciales usando metodo POST -->
                        <div id='mypopup<? echo $k ?>' name='mypopup<? echo $k ?>' style='position: absolute; width: 250px; height: 130px; left:780px; display: none; background: #eee; border: 1px solid #000;'>
                            <? $url = $_SERVER['PHP_SELF'] . "?" . $_SERVER['QUERY_STRING'];  ?>
						<table width="240" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td height="50" align="center">El producto <b><? echo $nomProd[$k] ?></b>:<BR>ha sido agregado a su carrito</td>
                          </tr>
                          <tr>
                            <td height="26" align="center">
                            <!--aca ponemos los valores iniciales usando metodo POST -->
                            <form action="carrito.php" method="post"  name="frm1" id="frm1" enctype="multipart/form-data">
							<input type="hidden" value="<?php echo $row_rs_query0['id_pro']?>" name="id_pro" />
                            <table width="400" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td>imagen</td>
                                <td><input type="file" name="img_prod2" /></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td><label>
                                  <input type="submit" name="button" id="button" value="Enviar" />
                                </label></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                              </tr>
                            </table>
                            </form></td>
                          </tr>
                        </table>


<!--  fin de pop -->
</div>
</td>
                      </tr>
</body>
</html>
