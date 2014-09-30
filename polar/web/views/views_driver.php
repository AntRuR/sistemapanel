<?php //á

/**
 * RENDER_HTML
 */

$just=(isset($_GET['just']))?urldecode($_GET['just']):NULL;

include "../../".$panel_path."/lib/compresionInicio.php" ; //compresion

web_render_head($HEAD,$SERVER); // hed

web_render_edit_toolbar($SELECTORS); // toolbar

$string_class=str_replace(array('&','='), array(' ','_is_'), $_SERVER['QUERY_STRING']);

echo "<body class='".$string_class." '>\n";

web_render_esquema($Esquema,1,1,NULL,$just); // all the body content // header, nav, sections, footer

web_render_foot($HEAD,$SERVER); // javascript to the bottom

echo "</body>\n";

echo "</html>";

include "../../".$panel_path."/lib/compresionFinal.php"; //compresion
