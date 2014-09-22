<?php //á

include("common/head.php");

$string_class='';
if($_GET)
	foreach($_GET as $iiii=>$gggg)
		$string_class.=$iiii."_is_".$gggg." ";

echo "<body class='".$string_class."'>\n";

//include("common/header_out.php");
//echo HTML_ALL_INICIO.HTML_MAIN_INICIO;
// echo '<div class="div_fila div_body">';
//echo '<div class="div_fila">';

// if($tet==1){ 
// echo '<div id="main_content">'; 
// }

// prin($OBJECT);

// $deep=0;
function esquema_unitario($fila,$deep){

	global $_SESSION;
	global $SERVER;
	global $PARAMS;
	global $OBJECT;
	global $deep;

	if(!is_array($fila)){ 
		// echo "$fila";
		include(incluget($fila)); 

	} else {

		if(sizeof($fila)>1 and $deep>1) echo '<div class="row show-grid">';

		foreach($fila as $jj=>$columna){

			if($jj=='canvas' ) echo "<section class='contenido container-fluid'>\n";

			if((enhay($jj,"col-"))) echo '<div class="'.$jj.'">';

			esquema_unitario($columna,$deep+1);

			if((enhay($jj,"col-")))	echo '</div>';

			if($jj=='canvas' ) echo "</section>\n";

		}

		if(sizeof($fila)>1 and $deep>1) echo '</div>';

	}


}

// prin($EsquemaT);

// echo "<section class='contenido container-fluid'>\n";
esquema_unitario($EsquemaT,1);
// echo "</section>\n";

// if($tet==sizeof($EsquemaT)){ 
// echo '</div>'; 
// }


// echo '</div>';
//echo '</div>';
//echo HTML_MAIN_FIN.HTML_ALL_FIN;
//include("common/footer_out.php"); 
echo "</body>\n";
echo "</html>";
