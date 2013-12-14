<?php


/////////////////CATEGORIAS//////////////////

$LISTADO['productos']['categorias']= select(
        "id,nombre"
        ,"productos_grupos"
        ,"where 1 and  visibilidad='1' order by id asc limit 0,100"
        ,0
        ,array(
				'link'=>array('procesar_url'=>array(
											'url'=>'index.php?modulo=home&tab=productos&id_grupo={nombre}'
										)
							)	
				,'selected'=>array('match'=>array(
											'a'=>'{nombre}'
											,'b'=>$_GET['id_grupo']
											,'equal'=>'selected'
											,'else'=>''
											)
							   )												
              )
        );
		
$LISTADO['productos']['categorias']=array_merge($LISTADO['productos']['categorias'],array(
			array(
				'nombre'=>'pack para niños'
				,'link'=>procesar_url('index.php?modulo=formulario&tab=contacto&id=niños')
			),
			array(
				'nombre'=>'familiares'
				,'link'=>procesar_url('index.php?modulo=formulario&tab=contacto&id=familiares')
			)																					
																					));
																					
				
				
?>