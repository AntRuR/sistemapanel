<? 
require("../meb/mysql2.php");
include_once("../meb/conexion0.php");

$destino[administrador]="colesi@colesiinmobiliaria.com";
$destino[guille]="guillermolozan@gmail.com";
$nextel[guille2]="m2v.198170184@mensajes.nextel.com.pe";
$nextel[walter]="m2v.198222104@mensajes.nextel.com.pe";
$destino[walter2]="walter@3dproyecta.com";
//$nextel[marky]="m2v.198378968@mensajes.nextel.com.pe";
//$destino[marky2]="jmarkyv@viabcp.com";

$web="www.colesiinmobiliaria.com";
$web_html="<a href='http://".$web."' style='color:green'><b>www.colesiinmobiliaria.com</b></a>";

$datos_html="Colesi Inmobiliaria SAC<br>
$web_html <br>
Calle Tarapacá 252 Miraflores Lima Perú<br>
Teléfonos Oficina: 241-2595 / 241-3399<br>
Email: <a href='mailto:colesi@colesiinmobiliaria.com' style='color:green'>colesi@colesiinmobiliaria.com</a>";

$subject_web="MENSAJE SOBRE VENTA DE TERRENO DESDE LA WEB";
$subject_cliente="GRACIAS POR SU INFORMACION";
$nextel_asunto="subscripcion de un terreno";

$remitente_web="COLESI INMOBILIARIA";
$remitente_cliente="COLESI INMOBILIARIA";

$remite_web="web@colesiinmobiliaria.com";
$remite_cliente="colesi@colesiinmobiliaria.com";

$logo="http://".$web."/img/logo_web.gif";

$mensaje_html_web="<br><br>
<font face='arial' size='2'>
Mensaje enviado desde la pagina web para<br>
inscribir un terreno<br></font>
<br>
<table cellspacing=0 cellpadding=0 border=0 style='font-family:arial; font-size:12px;'>
<tr><td colspan=2><u>Información del Propietario</u></td></tr>

<tr><td><b>nombre</b></td><td>: $nombre </td></tr>
<tr><td><b>email</b></td><td>:     $email </td></tr>
<tr><td><b>telefono</b></td><td>:     $telefono</td></tr>
<tr><td><b>celular</b></td><td>:     $celular </td></tr>
<tr><td><b>direccion</b></td><td>:     $direccion</td></tr>
<tr><td colspan=2>&nbsp;</td></tr>
<tr><td  colspan=2><u>Información del Terreno</u></td></tr>
<tr><td><b>direccion</b></td><td>:     $direccionterreno</td></tr>
<tr><td><b>distrito</b></td><td>:     $distritoterreno</td></tr>
<tr><td><b>area</b></td><td>:     $areaterreno</td></tr>
<tr><td><b>medidas preliminares</b></td><td>: $medidasterreno </td></tr>
<tr><td colspan=2><b>Comentarios adicionales</b> </td></tr>
<tr><td colspan=2>".nl2br($comentarios)."</td></tr>
<tr><td colspan=2>&nbsp;</td></tr>
</table><br>
";

$mensaje_html_cliente="<br><br>
<font size='2' face='arial'>
Hola $nombre,<br><br>

Gracias por comunicarte con nosotros.<br>
En breve nos comunicaremos contigo para responder a tu mensaje.<br>
<br>$datos_html
<br>
</font><br><br>
";
$nextel_mensaje="nombre: $nombre 
email: $email 
telefono: $telefono $celular 
distrito: $distritoterreno";

if((isset($nombre))and(trim($nombre)!='')){

mail_html($destino,$subject_web,$mensaje_html_web,$remitente_web,$remite_web,"",$logo,$botom);

mail_html($email,$subject_cliente,$mensaje_html_cliente,$remitente_cliente,$remite_cliente,$remite_cliente,$logo,$botom);

mail_simple($nextel,$nextel_asunto,$nextel_mensaje,"From: colesi<".$remite_web.">");

$kk[nombre]=$nombre;
$kk[email]=$email;
$kk[tipo]="terreno";
$kk[fecha]=date("U");

$kk[comentario]="<table cellspacing=0 cellpadding=0 border=0>
<tr><td  ><u>Informacion del Terreno</u>&nbsp;&nbsp;&nbsp;</td><td></td></tr>
<tr><td><b>direccion</b></td><td>:     ".$direccionterreno."</td></tr>
<tr><td><b>distrito</b></td><td>:     ".$distritoterreno."</td></tr>
<tr><td><b>area</b></td><td>:     ".$areaterreno."</td></tr>
<tr><td><b>medidas preliminares</b></td><td>:  ".$medidasterreno."</td></tr>
<tr><td colspan=2><b>Comentarios adicionales</b> </td></tr>
<tr><td colspan=2>".$comentarios."</td></tr>
</table>";

//$kk[pais]=$pais;
$kk[telefono]=$telefono."/ ".$celular;
insert($kk,"contacto");

}



/*
include("central.php");

$kk[nombre]=$nombre;
$kk[email]=$email;
$kk[referencia_contacto]="COLESI";
$kk[boletin]="COLESI";

$kk[necesidad]='departemento';
insert($kk,"directorio");
*/


?>