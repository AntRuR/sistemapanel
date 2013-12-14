<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<table width="240" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td height="50" align="center">El producto :<BR>ha sido agregado a su carrito</td>
                          </tr>
                          <tr>
                            <? $url =$_SERVER['PHP_SELF'] . "?" . $_SERVER['QUERY_STRING'];  ?>
                            <td height="26" align="center">
                            <!--aca ponemos los valores iniciales usando metodo POST -->
                            <form action="ingreso-producto32.php" method="post"  name="frm1" id="frm1" enctype="multipart/form-data">
                              <input type="hidden" value="1" name="id_pro" />
                              <input name="urlOrigen" type="hidden" id="urlOrigen" value="<? echo $url ?>" />
                              <table width="400" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td>imagen</td>
                                
                                <td><input type="file" name="img_prod1" id="img_prod1" /></td>
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
</body>
</html>
