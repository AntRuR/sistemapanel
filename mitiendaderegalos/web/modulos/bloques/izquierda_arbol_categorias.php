<?php //á


if($_GET['fil']=='grupos' and $_GET['val']!=''){

	$ID_SUBGRUPO=select_dato("id_subgrupo","productos_filtros","where id='".$_GET['val']."'");
	$ID_GRUPO=select_dato("id_grupo","productos_subgrupos","where id='".$ID_SUBGRUPO."'");
	$ID_FILTRO=$_GET['val'];
	
}elseif($_GET['id']!=''){ 

	$ID_GRUPO=select_dato("id_grupo","productos_items","where id='".$_GET['id']."'");
	$ID_SUBGRUPO=select_dato("id_subgrupo","productos_items","where id='".$_GET['val']."'");
	$ID_FILTRO=select_dato("id_filtro","productos_items","where id='".$_GET['id']."'");
	
} elseif($_GET['gru']!=''){ 

	if($_GET['tab']=='rubros'){
		$ID_GRUPO=$_GET['gru'];
		$ID_SUBGRUPO='';
		$ID_FILTRO='';
	} elseif($_GET['tab']=='productos'){		
		$ID_GRUPO=select_dato("id_grupo","productos_subgrupos","where id='".$_GET['gru']."'");
		$ID_SUBGRUPO=$_GET['gru'];
		$ID_FILTRO='';
	}
	
}



$items= select(
	"id,nombre,fecha_creacion",
	"productos_subgrupos",
	"where 1 and  visibilidad='1' AND id_grupo='".$ID_GRUPO."' order by nombre asc limit 0,100"
	,0
    );

//$ITEMS['menu'][]=array('nivel'=>'menu_nivel_1','url'=>'#'.$item['id'],'label'=>$NOMBRE,'selected'=>'');	

//$ITEMS['menu'][]=array('nivel'=>'menu_nivel_1','url'=>procesar_url('index.php?modulo=items&tab=productos'),'label'=>'Categorías de productos','selected'=>'');		

/*
if($_GET['id_grupo']!=''){ 
	$GET_ID_GRUPO=($_GET['id_grupo']=='')?"":select_dato("id","productos_grupos","where nombre='".url_decode_seo($_GET['id_grupo'])."'",0);		
} elseif($_GET['id_subgrupo']!=''){ 
	$GET_ID_SUBGRUPO=($_GET['id_subgrupo']=='')?"":select_dato("id","productos_subgrupos","where nombre='".url_decode_seo($_GET['id_subgrupo'])."'",0);
} 
*/
		

foreach($items as $item){

	$sub_items= select(
		"id,nombre,fecha_creacion",
		"productos_filtros",
		"where id_subgrupo='".$item['id']."' and  visibilidad='1' order by nombre asc limit 0,100"
		,0
		);
		$ITEMS['menu'][]=array('nivel'=>'menu_nivel_1','url'=>procesar_url('index.php?modulo=items&tab=productos&acc=list&gru='.$item['id'].'&friendly='.$item['nombre']),'label'=>$item['nombre'],'selected'=>($ID_SUBGRUPO==$item['id'] and $ID_FILTRO=='')?'selected':'');		
		
		foreach($sub_items as $sub_item){
		
			$ITEMS['menu'][]=array('nivel'=>'menu_nivel_2','url'=>procesar_url("index.php?modulo=items&tab=productos&acc=list&fil=grupos&val=".$sub_item['id']."&friendly=".$sub_item['nombre']),'label'=>$sub_item['nombre'],'selected'=>($ID_FILTRO==$sub_item['id'])?'selected':'');		

		}

}

$ITEMS['rubro']['label']=select_dato("nombre","productos_grupos","where id='".$ID_GRUPO."'");
$ITEMS['rubro']['link']=procesar_url('index.php?modulo=items&tab=rubros&acc=list&gru='.$ID_GRUPO.'&friendly='.$ITEMS['rubro']['label']);

//prin($ITEMS);

$LISTADO[$PARAMS['conector']]=$ITEMS;
	
?>