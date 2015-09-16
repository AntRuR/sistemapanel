<?php //á

/**********************************************/
//////////////listado.php/////////////////
/**********************************************/

$sql_busqueda = "";
$variables = "";

if($_GET['tipo']!=''){ 
$sql_busqueda.=" and id_grupo=\"".$_GET['tipo']."\" "; 
$titulo = ucfirst(select_dato(
					"nombre"
					,"productos_grupos"
					,"where id='".$_GET['tipo']."'")); 
$variables.= "&tipo=".$_GET['tipo'];
} else { 
$titulo = "Inmuebles"; 
}

if($_GET['aviso']!=''){ 
$sql_busqueda.=" and tipo=\"".$_GET['aviso']."\" "; $titulo.=" en ".$_GET['aviso']; 
$variables.= "&aviso=".$_GET['aviso'];
}

if($_GET['departamento']!=''){ 
$sql_busqueda.=" and departamento=\"".$_GET['departamento']."\" "; $titulo.=" en ".select_dato(
																							"nombre"
																							,"geo_departamentos"
																							,"where id='".$_GET['departamento']."'"
																							,0
																							); 
$variables.= "&departamento=".$_GET['departamento'];																							
							 }
																							
if($_GET['provincia']!=''){ 
$sql_busqueda.=" and provincia=\"".$_GET['provincia']."\" ";  $titulo.=" - ". select_dato(
																						"nombre"
																						,"geo_provincias"
																						,"where id='".$_GET['provincia']."'"
																						,0
																						); 
$variables.= "&provincia=".$_GET['provincia'];																						
							}
if($_GET['distrito']!=''){ 
$sql_busqueda.=" and distrito=\"".$_GET['distrito']."\" "; $titulo.=" - ". select_dato(
																						"nombre"
																						,"geo_distritos"
																						,"where id='".$_GET['distrito']."'"
																						,0
																						); 
$variables.= "&distrito=".$_GET['distrito'];																						
							}

$LISTADO = paginacionnumerada(
        array(
            'separador'=>""
            ,'porpag'=>"5"
            ,'anterior'=>"«anterior"
            ,'siguiente'=>"siguiente»"
            ,'enlace'=>"index.php?modulo=items".$variables."&pag="
			,'procesar_url'=>"1"
            //,'onclick'=>"?pag="
        )
        ,"id,nombre,codigo,tipo,direccion,descripcion,area,contacto,id_grupo,departamento,provincia,distrito,file,fecha_creacion,foto_descripcion"
        ,"productos_items"
        ,"where 1 $sql_busqueda and  visibilidad='1' order by id desc"
        ,0
        ,array(
        	'carpeta'=>'prodite_imas'
                ,'tamano'=>'2'
                ,'dimensionado'=>'76x86'
				,'centrado'=>'1'
                ,'get_atributos'=>array('get_atributos'=>array(
                                            'carpeta'=>'{carpeta}'
                                            ,'fecha'=>'{fecha_creacion}'
                                            ,'file'=>'{file}'
                                            ,'tamano'=>'{tamano}'
                                            ,'dimensionado'=>'{dimensionado}'
											,'centrado'=>'{centrado}'
                                            )
                                        )
				/*						
                ,'get_archivo'=>array('get_archivo'=>array(
                                            'carpeta'=>'{carpeta}'
                                            ,'fecha'=>'{fecha_creacion}'
                                            ,'file'=>'{file}'
                                            ,'tamano'=>'{tamano}'
                                            )
                                        )
				*/						
				,'nombre'=>array('limit_string'=>array(
											'string'=>'{nombre}'
											,'limit'=>'90'
											)
										)
										
				,'direccion'=>array('limit_string'=>array(
											'string'=>'{direccion}'
											,'limit'=>'100'
											)
										)
				/*																										
				,'descripcion'=>array('limit_string'=>array(
											'string'=>'{descripcion}'
											,'limit'=>'1000'
											)
										)	
				*/
				,'area'=>array('limit_string'=>array(
											'string'=>'{area}'
											,'limit'=>'20'
											)
										)																														
    
              )
        );

$LISTADO['vacio'] = 'No se encontraron inmuebles en esta búsqueda';

$LISTADO['titulo'] = ($sql_busqueda=='')?"Últimos inmuebles":$titulo;

//$filas = $matriz['filas'];
//$total = $matriz['total'];
//$anterior = $matriz['anterior'];
//$siguiente = $matriz['siguiente'];
//$desde = $matriz['desde'];
//$hasta = $matriz['hasta'];       
//$tren = $matriz['tren'];
//prin($LISTADO);

		
?>		