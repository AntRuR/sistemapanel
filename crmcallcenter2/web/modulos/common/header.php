<?php //á
$THIS=$PARAMS['this'];
$object=array();
//web_render_swf_script($SERVER['BASE'].THEME_PATH."img/particular/bar/bg.swf","bar_bg_swf","930x100");


//web_render_swf_script($SERVER['BASE'].THEME_PATH."img/particular/header/bg.swf","header_bg_swf","930x145");

/*
$COMMON['header_info'] = "
<span class='ico ico_mobile'>".$COMMON['datos']['nextel_1']."</span>
<span class='ico ico_phone'>".$COMMON['datos']['telefono_1']." / ".$COMMON['datos']['telefono_2']."</span>
<a href='mailto:".$COMMON['datos']['email_ventas']."' class='ico ico_email'>".$COMMON['datos']['email_ventas']."</a>
";
*/

/*
$COMMON['categorias'] = select(
        "id,nombre"
        ,"productos_grupos"
        ,"where 1 and  visibilidad='1' order by id asc limit 0,100"
        ,0
		);
*/

$object['menu']=array(
						array(
							'url'=>'index.php?modulo=app&tab=home'
							,'label'=>'Inicio'
						),						
						array(
							'url'=>'index.php?modulo=app&tab=pages&page=quienes_somos'
							,'label'=>'Quienes Somos'
						),	
						array(
							'url'=>'index.php?modulo=app&tab=pages&page=servicios'
							,'label'=>'Servicios'
						),							
						array(
							'url'=>'index.php?modulo=app&tab=pages&page=ubicacion_wt'
							,'label'=>'Ubicación'
						),																					
					);

$object['menu'] = web_procesar_menu($object['menu'],"izquierda");

$OBJECT[$THIS]=$object;
?>