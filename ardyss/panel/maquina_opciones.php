<?php


$tablas_creadas=get_tablas_creadas();

$tblsinc=array();
$cam='sincromysql';

foreach($objeto_tabla as $ot){

	if( ($saved[$ot['me']][$cam]==1) and (in_array($ot['tabla'],$tablas_creadas)) ){
	
		$tblsinc[]=$ot['tabla']; 

	}

}

$tablassincro="&tablas=".implode(",",$tblsinc);


$items[]= '<a href="maquina.php?tab=documentos" class="links_menu" title="documentos">docs</a>';
$items[]= '<a href="maquina.php?tab=procesos" class="links_menu" title="procesos">procesos</a>';
$items[]= '<a href="maquina.php?accion=config" class="links_menu" title="config" style="background-color:#FFF; color:#000;">conf ('.$get_num_vars.')</a>';
// $items[]= '<a href="maquina.php?edicionpanel='. ( ($_SESSION['edicionpanel']=='1')?'0':'1' ).'" class="links_menu" style="background-color:'.( ($_SESSION['edicionpanel']=='1')?'#09A707':'#DE1010').';color:#FFF;" title="'.( ($_SESSION['edicionpanel']=='1')?'apagar':'encender').' edición panel">panel</a>';

if($Local=='1'){

	if($vars['INTERNO']['ID_PROYECTO']!="0"){

		// $items[]= '<a href="maquina.php?edicionweb='.(($_SESSION['edicionweb']=='1')?'0':'1').'" class="links_menu" style="background-color:'.(($_SESSION['edicionweb']=='1')?'#09A707':'#DE1010').';color:#FFF;" title="'.(($_SESSION['edicionweb']=='1')?'apagar':'encender').' edición web">web</a>';

		// $items[]= '<a href="maquina.php?accion=updatepanel" class="links_menu" title="subir archivos de custom">▲subir custom</a>';

		$items[]= '<a href="'. str_replace("[http]","http://",str_replace("//","/",str_replace("http://","[http]",$vars['REMOTE']['url_publica'])."/".$vars['GENERAL']['DIRECTORIO_PANEL'])).'" class="links_menu" style="color:#F00; background-color:#000;" target="_blank" title="panel remoto">remoto</a>';

		// $items[]= '<a href="maquina.php?accion=bajarconfig" class="links_menu" title="bajar archivos de config">▼down</a>';
		// $items[]= '<a href="maquina.php?accion=subirconfig" class="links_menu" title="subir archivos de config">▲up</a>';

	}


	if($vars['GENERAL']['EXPORTARDB']=='1'){

		$items[]= '<a href="maquina.php?accion=exportdb'.$tablassincro.'" class="links_menu" style="background-color:#003399; color:#FFFFFF;" title="export DB" >▲export</a>';
	}

	if($vars['INTERNO']['ID_PROYECTO']!="0"){

		if($vars['GENERAL']['IMPORTARDB']!='0'){

			$item_input= '<input type="text" id="importDBdominio" style="width:100%;" />';
			$item_input.= '<span 
			onclick="javascript:location.href=($v(\'importDBdominio\')==\'\')?\'maquina.php?accion=importdb'.$tablassincro.'\':\'maquina.php?accion=importdb'.$tablassincro.'&domain=\'+$v(\'importDBdominio\');return false;" 
			rel="nofollow" 
			style="margin:0px;padding:0;border:0;float:none; text-decoration:underline;" 
			title="import DB" >▼import&nbsp;</span>';
			$item_input.= '';
			$items[]= $item_input;
			unset($item_input);

		}

	}

	// $items[]= '<a href="maquina.php?accion=creardbremota" class="links_menu" title="subir archivos de config">crear DB remota</a>';

}


$items[]= '<a href="maquina.php?tab=libraries" class="links_menu" title="librerias">libs</a>';
$items[]= '<a href="maquina.php?accion=phpinfo" class="links_menu" title="phpinfo"  >info</a>';
// $items[]= '<a href="removerbom/remover_bom.php" class="links_menu" title="remover bom" target="_blank">borrar bom</a>';
// $items[]= '<a href="maquina.php?accion=recrearcustom" class="links_menu" title="recrear archivos custom" >recrear custom</a>';

if($vars['INTERNO']['ID_PROYECTO']!="0"){

	// $items[]= '<a href="maquina.php?accion=borrarcustom" class="links_menu" title="borrar archicos de carpeta custom" >borrar custom</a>';
	// $items[]= '<a href="maquina.php?accion=borrarmemory" class="links_menu" title="resetear archivo de memoria" >reset mem</a>';
	$items[]= '<a href="<?php echo $httpfiles; ?>:2082/3rdparty/phpMyAdmin/index.php?lang=es-utf-8" class="links_menu" target="_blank" title="my admin" >phpmyadmin</a>';

	if($Local=='1'){

		// $items[]= '<a href="maquina.php?accion=makedump'.$tablassincro.'" class="links_menu" title="make dump" style="background-color:#000;color:#FFF;" >make dump</a>';

	} else {

		$items[]= '<a href="maquina.php?accion=importfromdump" class="links_menu" title="import from dump" style="background-color:#000;color:#FFF;" >import from dump</a>';

	}

}

$items[]= '<a href="maquina.php?accion=esquema" class="links_menu" title="ESQUEMA" style="background-color:#333;color:yellow;"  >ESQUEMA</a>';


$ret = ['items'=>$items];

unset($items);

return $ret;

