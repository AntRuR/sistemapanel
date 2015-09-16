<?php //á
include("../ajax_includes.php");

switch($_GET['get']){
case "provincias":
$items= select(
        "id as i,nombre as n"
        ,"geo_provincias"
        ,"where id_departamento='".$_GET['id']."' and  visibilidad='1' order by id asc limit 0,100"
        ,0
		,array(
			'n'=>array('ucfirst'=>array(
			  							'string'=>'{n}'
			  							)
			 			   )
			)			 
        );
//prin($items);		
echo json_encode($items);		
break;
case "distritos":
$items= select(
        "id as i,nombre as n"
        ,"geo_distritos"
        ,"where id_provincia='".$_GET['id']."' and  visibilidad='1' order by id asc limit 0,100"
        ,0
		,array(
			'n'=>array('ucfirst'=>array(
			  							'string'=>'{n}'
			  							)
			 			   )
			)				
        );
echo json_encode($items);
break;
}

?>