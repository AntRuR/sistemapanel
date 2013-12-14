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

$datos_html="COLESI INMOBILIARIA SAC<br>
$web_html <br>
Calle Tarapacá 252 Miraflores Lima Perú<br>
Teléfonos Oficina: 241-2595 / 241-3399<br>
Email: <a href='mailto:colesi@colesiinmobiliaria.com' style='color:green'>colesi@colesiinmobiliaria.com</a>";

$subject_web="SUBSCRIPCION AL BOLETIN INFORMATIVO";
$subject_cliente="GRACIAS POR REGISTRARSE";
$nextel_asunto="subscripcion al registro";

$remitente_web="COLESI INMOBILIARIA";
$remitente_cliente="COLESI INMOBILIARIA";

$remite_web="web@colesiinmobiliaria.com";
$remite_cliente="colesi@colesiinmobiliaria.com";

$logo="http://".$web."/img/logo_web.gif";

$mensaje_html_web="<br><br>
<font face='arial' size='2'>
Mensaje enviado desde la pagina web para subscribirse al boletin informativo<br>
con los siguientes datos<br>
<br>
<b>nombre</b>   :     $nombre <br>
<b>email</b>    :     $email <br>
<font><br><br>
";

$mensaje_html_cliente="<br><br>
<font size='2' face='arial'>
Hola $nombre,<br><br>

Queremos darte la Bienvenida <br>
a nuestro Boletín Electrónico.<br><br>
 
Agradecemos vuestro interés y atención <br>
prestada y le comunicamos que en breve <br>
recibriá noticias sobre los proyectos que <br>
viene realizando nuestra empresa. <br><br>
 
Si usted tiene alguna duda o consulta, <br>
comuníquese con nosotros sin compromiso <br>
alguno. Gustosos estaremos en atenderle. <br><br>
 
Quedamos de usted<br><br>

<br>$datos_html
<br>
Si desea retirar su inscripción a nuestro
boletín electrónico, puede escribirnos a:
darsedebaja@colesiinmobiliaria.com
<br><br></font>
";

$nextel_mensaje="se ha suscrito al boletin informativo de colesi
NOMBRE: $nombre
EMAIL: $email";

if((isset($nombre))and(trim($nombre)!='')){


mail_html($destino,$subject_web,$mensaje_html_web,$remitente_web,$remite_web,"",$logo,$botom);

mail_html($email,$subject_cliente,$mensaje_html_cliente,$remitente_cliente,$remite_cliente,$remite_cliente,$logo,$botom);

mail_simple($nextel,$nextel_asunto,$nextel_mensaje,"From: colesi<".$remite_web.">");


$kk[nombre]=$nombre;
$kk[email]=$email;
$kk[tipo]="boletin";
$kk[fecha]=date("U");;

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