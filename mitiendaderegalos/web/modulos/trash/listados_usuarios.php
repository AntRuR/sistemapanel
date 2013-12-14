<?php //á

/**********************************************/
//////////////listado_usuarios.php//////////////
/**********************************************/

$LISTADO = paginacionnumerada(
        array(
            'separador'=>""
            ,'porpag'=>"5"
            ,'anterior'=>"«anterior"
            ,'siguiente'=>"siguiente»"
            ,'enlace'=>"index.php?modulo=items&tab=usuarios".$variables."&pag="
			,'procesar_url'=>"1"
            //,'onclick'=>"?pag="
        )
        ,"id,nombre,empresa,telefono,email,direccion,registro,descripcion,foto,fecha_creacion"
        ,"clientes"
        ,"where 1 $sql_busqueda and  visibilidad='1' order by id desc"
        ,0
        ,array(
        		'carpeta'=>'cli_imas'
                ,'tamano'=>'2'
                ,'dimensionado'=>'100x100'
				,'centrado'=>'1'
                ,'get_atributos'=>array('get_atributos'=>array(
                                            'carpeta'=>'{carpeta}'
                                            ,'fecha'=>'{fecha_creacion}'
                                            ,'file'=>'{foto}'
                                            ,'tamano'=>'{tamano}'
                                            ,'dimensionado'=>'{dimensionado}'
											,'centrado'=>'{centrado}'
                                            )
                                        )
						
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

				,'comentario'=>array('limit_string'=>array(
											'string'=>'{comentario}'
											,'limit'=>'100'
											)
										)
																																																	
				,'nombre'=>array('concat'=>array(
										'values'=>'{nombre}'
										)
									)
										    
              )
			  ,$concat
        );

$LISTADO['vacio'] = 'Aún no hay asociados';

$LISTADO['titulo'] = 'Asociados';

$HEAD['titulo'] = $LISTADO['titulo']." | Agente Inmobiliario Perú";

$HEAD['meta_keywords'] = procesar_keywords(implode(" ",$concat['nombre']));

//$filas = $matriz['filas'];
//$total = $matriz['total'];
//$anterior = $matriz['anterior'];
//$siguiente = $matriz['siguiente'];
//$desde = $matriz['desde'];
//$hasta = $matriz['hasta'];       
//$tren = $matriz['tren'];
//prin($LISTADO);

		
?>