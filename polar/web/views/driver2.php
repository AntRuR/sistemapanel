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

$tet=0;
// prin($EsquemaT);
foreach($EsquemaT as $iidd=>$Esquema){

	$tet++;

	if($iidd=='canvas'){ echo "<section class='contenido'>\n"; }
	//prin($Esquema);

	foreach($Esquema as $Linea){ //$Linea es fila
	
		if(!is_array($Linea)){ 
		// echo '<div class="div_fila"><div class="div_columna div_col_1d1">'; 
		include(incluget($Linea)); 
		// echo '</div></div>'; 
		} else {
			$numCols=sizeof($Linea);
			//$deepcol=(isset($Linea[0][0][0][0]))?1:0;
			$deepcol=0;
			// echo '<div class="div_fila">';
			$Iii=0;
			foreach($Linea as $ii=>$Line){ //$Line es columna
					if((($numCols>1) or ($iidd=='canvas')) and !$deepcol){ 
					$width=($ii>50)?$ii:'';
					$Iii++;
					if($Iii==1) echo '<div class="div_fila">';
					echo '<div class="div_columna div_col_'.($Iii).'d'.$numCols.'" '.( ($width)?'style="width:'.$width.'px;"':'' ).' >'; 
					}
					if(!is_array($Line)){ //echo '<div class="div_fila">'; 
					include(incluget($Line)); //echo '</div>';
					} else {
						//prin($Line);																	
						foreach($Line as $ii1=>$Lin){ //echo '<div class="div_fila">';  //$Lin es fila
							if(!is_array($Lin)){ //echo '<div class="div_fila">'; 							
							include(incluget($Lin)); //echo '</div>';
							} else {
								$numCols2=sizeof($Lin);
								echo '<div class="div_fila">';
								$Iii2=0;

								foreach($Lin as $ii2=>$Lin2){ //echo '<div class="div_fila">'; //$Lin2 es columna				
									//prin($ii2);
									if((($numCols2>1) or ($iidd=='canvas')) and $width==''){ 
									$width2=($ii2>50)?$ii2:'';
									$Iii2++;
									echo '<div class="div_columna '.(($Iii2>1)?'margen_izquierda':'').'" '.( ($width2)?'style="width:'.$width2.'px;"':'' ).' >'; 
									}							
									if(!is_array($Lin2)){
									include(incluget($Lin2)); //echo '</div>';
									} else {
										foreach($Lin2 as $ii3=>$Lin3){ //echo '<div class="div_fila">'; //$Lin2 es columna				
											include(incluget($Lin3)); //echo '</div>';											
										}
									}
									echo ((($numCols2>1) or ($iidd=='canvas'))and $width=='')?'</div>':'';					
								}
								echo '</div>';
							}
						} 
					}

					if($Iii==$numCols) echo '</div>';

					echo ((($numCols>1) or ($iidd=='canvas'))and !$deepcol)?'</div>':'';						
			}
			// echo '</div>';
		}
	}
	
	if($iidd=='canvas'){ echo '</section>'; }

}

// if($tet==sizeof($EsquemaT)){ 
// echo '</div>'; 
// }


// echo '</div>';
//echo '</div>';
//echo HTML_MAIN_FIN.HTML_ALL_FIN;
//include("common/footer_out.php"); 
echo "</body>\n";
echo "</html>";
