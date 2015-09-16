<?php //á

switch($_GET['get']){
case "provincias":
$ID=select_dato("id","geo_departamentos","where nombre='".url_decode_seo($_GET['id'])."'");
$items= select(
        "id as i,nombre as n"
        ,"geo_provincias"
        ,"where id_departamento='".$ID."' and  visibilidad='1' order by id asc limit 0,100"
        ,0
		,array(
			'i'=>array('url_encode_seo'=>array(
			  							'string'=>'{n}'
			  							)
			 			   )		
			,'n'=>array('ucfirst'=>array(
			  							'string'=>'{n}'
			  							)
			 			   )
			)			 
        );
//prin($items);		
echo json_encode($items);		
break;
case "distritos":
$ID=select_dato("id","geo_provincias","where nombre='".url_decode_seo($_GET['id'])."'");
$items= select(
        "id as i,nombre as n"
        ,"geo_distritos"
        ,"where id_provincia='".$ID."' and  visibilidad='1' order by id asc limit 0,100"
        ,0
		,array(
			'i'=>array('url_encode_seo'=>array(
			  							'string'=>'{n}'
			  							)
			 			   )		
			,'n'=>array('ucfirst'=>array(
			  							'string'=>'{n}'
			  							)
			 			   )
			)					
        );
echo json_encode($items);
break;
}

?>