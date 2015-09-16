<?php //á

/**********************************************/
//////////////listado_productos.php/////////////////
/**********************************************/

$sql_busqueda = "";
$variables = "";
	
	$GET_ID_TIPO=($_GET['tipo']=='inmuebles')?"":select_dato("id","productos_grupos","where nombre='".url_decode_seo($_GET['tipo'])."'");
	
	if($GET_ID_TIPO!=''){ 
	$sql_busqueda.=" and id_grupo=\"".$GET_ID_TIPO."\" "; 
	$titulo = ucfirst(select_dato(
						"nombre"
						,"productos_grupos"
						,"where id='".$GET_ID_TIPO."'")); 
	$variables.= "&tipo=".$_GET['tipo'];
	} else { 
	$titulo = "Inmuebles"; 
	}

	$_GET['aviso']=($_GET['aviso']=='alquiler-y-venta')?"":$_GET['aviso'];

	if($_GET['aviso']!=''){ 
		$sql_busqueda.=" and tipo=\"".$_GET['aviso']."\" "; $titulo.=" en ".$_GET['aviso']; 
		$variables.= "&aviso=".$_GET['aviso'];
	}

	$GET_ID_DEPARTAMENTO=($_GET['departamento']=='')?"":select_dato("id","geo_departamentos","where nombre='".url_decode_seo($_GET['departamento'])."'");

	if($GET_ID_DEPARTAMENTO!=''){ 
	$sql_busqueda.=" and departamento=\"".$GET_ID_DEPARTAMENTO."\" "; $titulo.=" en ".ucfirst(select_dato(
																								"nombre"
																								,"geo_departamentos"
																								,"where id='".$GET_ID_DEPARTAMENTO."'"
																								,0
																								)); 
	$variables.= "&departamento=".$_GET['departamento'];																							
								 }
					
	$GET_ID_PROVINCIA=($_GET['provincia']=='')?"":select_dato("id","geo_provincias","where nombre='".url_decode_seo($_GET['provincia'])."'");
																							
	if($GET_ID_PROVINCIA!=''){ 
	$sql_busqueda.=" and provincia=\"".$GET_ID_PROVINCIA."\" ";  $titulo.=" - ". ucfirst(select_dato(
																							"nombre"
																							,"geo_provincias"
																							,"where id='".$GET_ID_PROVINCIA."'"
																							,0
																							)); 
	$variables.= "&provincia=".$_GET['provincia'];																						
								}
					
	$GET_ID_DISTRITO=($_GET['distrito']=='')?"":select_dato("id","geo_distritos","where nombre='".url_decode_seo($_GET['distrito'])."'");
							
	if($GET_ID_DISTRITO!=''){ 
	$sql_busqueda.=" and distrito=\"".$GET_ID_DISTRITO."\" "; $titulo.=" - ". ucfirst(select_dato(
																							"nombre"
																							,"geo_distritos"
																							,"where id='".$GET_ID_DISTRITO."'"
																							,0
																							)); 
	$variables.= "&distrito=".$_GET['distrito'];																						
								}



	if($_GET['en_cartera']!=''){ 
		$sql_busqueda.=" and en_cartera=\"".$_GET['en_cartera']."\" "; $titulo="Inmuebles en Cartera"; 
		$variables.= "&en_cartera=".$_GET['en_cartera'];
	}


$LISTADO = paginacionnumerada(
        array(
            'separador'=>""
            ,'porpag'=>"5"
            ,'anterior'=>"«anterior"
            ,'siguiente'=>"siguiente»"
            ,'enlace'=>"index.php?modulo=items&tab=productos".$variables."&pag="
			,'procesar_url'=>"1"
            //,'onclick'=>"?pag="
        )
        ,"id,estado,nombre,codigo,tipo,direccion,descripcion,area,contacto,id_grupo,departamento as id_departamento,provincia as id_provincia,distrito as id_distrito,file,fecha_creacion,foto_descripcion"
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
                                        ),
						
				'departamento'=>array('sub_select_dato'=>array(
												'campo'=>"nombre"
												,'tabla'=>"geo_departamentos"
												,'donde'=>"where id='{id_departamento}'"
												,'debug'=>0
											)
										),
										
				'provincia'=>array('sub_select_dato'=>array(
												'campo'=>"nombre"
												,'tabla'=>"geo_provincias"
												,'donde'=>"where id='{id_provincia}'"
												,'debug'=>0
											)
										),
										
				'distrito'=>array('sub_select_dato'=>array(
												'campo'=>"nombre"
												,'tabla'=>"geo_distritos"
												,'donde'=>"where id='{id_distrito}'"
												,'debug'=>0
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

				,'area'=>array('limit_string'=>array(
											'string'=>'{area}'
											,'limit'=>'20'
											)
										)
										
				,'id'=>'{nombre}'																																								
    
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