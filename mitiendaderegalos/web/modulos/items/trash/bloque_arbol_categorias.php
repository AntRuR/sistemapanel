<?php //á

/**********************************************/
//////////////items_left.php/////////////////
/**********************************************/

$items= select(
	"id,nombre,fecha_creacion",
	"productos_grupos",
	"where 1 and  visibilidad='1' order by id asc limit 0,100"
	,0
    );
	


//$ITEMS['menu'][]=array('nivel'=>'menu_nivel_1','url'=>'#'.$item['id'],'label'=>'Conceptos Básicos','selected'=>'');
	
//$ITEMS['menu'][]=array('nivel'=>'menu_nivel_1','url'=>procesar_url('index.php?modulo=items&tab=productos'),'label'=>'Categorías de productos','selected'=>'');		
			

if($_GET['id_grupo']!=''){ 

	$GET_ID_GRUPO=($_GET['id_grupo']=='')?"":select_dato("id","productos_grupos","where nombre='".url_decode_seo($_GET['id_grupo'])."'",0);		

} elseif($_GET['id_subgrupo']!=''){ 

	$GET_ID_SUBGRUPO=($_GET['id_subgrupo']=='')?"":select_dato("id","productos_subgrupos","where nombre='".url_decode_seo($_GET['id_subgrupo'])."'",0);

} 
		
foreach($items as $item){
	
	$sub_items= select(
		"id,id_grupo,nombre,fecha_creacion",
		"productos_subgrupos",
		"where id_grupo='".$item['id']."' and  visibilidad='1' order by id asc limit 0,100"
		,0
		);
		
		$ITEMS['menu'][]=array('nivel'=>'menu_nivel_2','url'=>procesar_url('index.php?modulo=pagina-items&tab=productos&id_grupo='.$item['nombre']),'label'=>$item['nombre'],'selected'=>($GET_ID_GRUPO==$item['id'])?'selected':'');		

		foreach($sub_items as $sub_item){
		
			$ITEMS['menu'][]=array('nivel'=>'menu_nivel_3','url'=>procesar_url('index.php?modulo=pagina-items&tab=productos&id_subgrupo='.$sub_item['nombre']),'label'=>$sub_item['nombre'],'selected'=>($GET_ID_SUBGRUPO==$sub_item['id'])?'selected':'');	
			
		}
	
}

//prin($ITEMS['menu']);

?>