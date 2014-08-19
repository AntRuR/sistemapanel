<?php //á

/*BLOQUE PUBLICIDAD*/

$items = paginacionnumerada(
        array(
            'separador'=>""
            ,'porpag'=>"1000"
            ,'anterior'=>"«anterior"
            ,'siguiente'=>"siguiente»"
            ,'enlace'=>"?pag="
            ,'procesar_url'=>1
            //,'onclick'=>"?pag="
        )
        ,"id,nombre"
        ,"productos_subgrupos"
        ,"where 1 and  id_grupo='34' and ver_rubro='1' and visibilidad='1' order by relevancia desc limit 0,100"
        ,0
		,array(
	    'link'=>array('procesar_url'=>array('url'=>'index.php?modulo=items&tab=productos&acc=list&gru={id}&friendly={nombre}'))					
		,'total'=>array('sub_contar'=>array('tabla'=>'productos_items','donde'=>'where id_subgrupo={id}'),'debug'=>1)			
		/*
		,'total_venta'=>array('sub_contar'=>array('tabla'=>'index.php?modulo=items&tab=productos&acc=list&gru={id}&friendly={nombre}'))	
		,'total_alquiler'=>array('sub_contar'=>array('tabla'=>'index.php?modulo=items&tab=productos&acc=list&gru={id}&friendly={nombre}'))	
		*/
		)
        );

$items['titulo']='PLAZA INMUEBLES';

$LISTADO[$PARAMS['this']]=$items;

?>