<?php


unset($objeto_tabla_comp);


$objeto_tabla_comp['GEO_DEPARTAMENTOS']=array_merge(
	[
		'titulo'		=> 'Departamentos',
		'nombre_singular'=> 'departamento',
		'nombre_plural'	=> 'departamentos',
		'tabla'			=> 'geo_departamentos',
		'archivo'		=> 'geo_departamentos',
		// 'archivo_hijo'	=> 'geo_provincias',
		'prefijo'		=> 'geodep',
		'me'			=> 'GEO_DEPARTAMENTOS',
		'menu_label'	=> 'Departamentos',
		'grupo'			=> 'geoposicion',
		'campos'		=>array(
			'id'			=>array(
				'campo'			=> 'id',
				'tipo'			=> 'id'
			),
			'fecha_creacion'	=>array(
				'campo'			=> 'fecha_creacion',
				'tipo'			=> 'fcr'
			),
			'fecha_edicion'	=>array(
				'campo'			=> 'fecha_edicion',
				'tipo'			=> 'fed'
			),
			'posicion'		=>array(
				'campo'			=> 'posicion',
				'tipo'			=> 'pos'
			),
			'visibilidad'	=>array(
				'campo'			=> 'visibilidad',
				'tipo'			=> 'vis'
			),
			'nombre'		=>array(
				'campo'			=> 'nombre',
				'label'			=> 'Departamento',
				'width'			=> '150px',
				'unique'		=> '1',
				'tipo'			=> 'inp',
				'listable'		=> '1',
				'validacion'	=> '1',
			),
			'geo'			=>array(
				'campo'			=> 'geo',
				'tipo'			=> 'inp',
				'listable'		=> '1',
				'validacion'	=> '0',
				'disabled'		=> '1'
			)
		),
	],
	[
		'eliminar'		=> '0',
		'editar'		=> '0',
		'crear'			=> '0',
		'visibilidad'	=> '1',
		'altura_listado'	=> 'auto',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'por_pagina'	=> '100',
		'orden'			=> '0',

		'width_listado'	=> '400px',
		'set_fila_fijo'	=> '1',
		'edicion_rapida'	=> '0',
		'edicion_completa'=> '0'		
	]
);

$objeto_tabla_comp['GEO_PROVINCIA']=array_merge(
	[
		'titulo'		=> '<a href="custom/geo_departamentos.php">Departamentos del Perú</a>  -
			Provincias de {select nombre from geo_departamentos where id=[id]}',
		'titulo'		=> 'Provincias',

		'nombre_singular'=> 'provincia',
		'nombre_plural'	=> 'provincias',
		'tabla'			=> 'geo_provincias',
		'archivo'		=> 'geo_provincias',
		// 'archivo_hijo'	=> 'geo_distritos',
		'prefijo'		=> 'geodis',
		'me'			=> 'GEO_PROVINCIA',
		'grupo'			=> 'geoposicion',
		'campos'		=>array(
			'id'			=>array(
				'campo'			=> 'id',
				'tipo'			=> 'id'
			),
			'fecha_creacion'	=>array(
				'campo'			=> 'fecha_creacion',
				'tipo'			=> 'fcr'
			),
			'fecha_edicion'	=>array(
				'campo'			=> 'fecha_edicion',
				'tipo'			=> 'fed'
			),
			'posicion'		=>array(
				'campo'			=> 'posicion',
				'tipo'			=> 'pos'
			),
			'visibilidad'	=>array(
				'campo'			=> 'visibilidad',
				'tipo'			=> 'vis'
			),
			'nombre'		=>array(
				'campo'			=> 'nombre',
				'label'			=> 'Nombre',
				'tipo'			=> 'inp',
				'unique'		=> '1',
				'listable'		=> '1',
				'validacion'	=> '1',
				'width'			=> '150px',
			),
			'geo'			=>array(
				'campo'			=> 'geo',
				'tipo'			=> 'inp',
				'listable'		=> '1',
				'validacion'	=> '0',
				'disabled'		=> '1'
			)
		)		
	],
	[		
		'eliminar'		=> '0',
		'editar'		=> '0',
		'crear'			=> '0',
		'crear_label'	=> '200px',
		'crear_txt'		=> '400px',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '0',
		'menu_label'	=> '',
		'por_pagina'	=> '100',
		'orden'			=> '1',

		'width_listado'	=> '400px',		
		'edicion_rapida'	=> '0',
		'set_fila_fijo'	=> '1',
		'edicion_completa'=> '0'
	]
);

$objeto_tabla_comp['GEO_DISTRITOS']=array_merge(
	[
		'titulo'		=> '<a href="custom/geo_departamentos.php">Departamentos del Perú</a>
				- <a href="custom/geo_provincias.php?id={select id_departamento from geo_provincias where id=[id]}">Provincias de {select geo_departamentos.nombre from geo_departamentos,geo_provincias where geo_departamentos.id=geo_provincias.id_departamento and geo_provincias.id=[id]}</a>
				- Distritos de {select nombre from geo_provincias where id=[id]}',
		'titulo'		=> 'Distritos',			  
		'nombre_singular'=> 'distrito',
		'nombre_plural'	=> 'distritos',
		'tabla'	        => 'geo_distritos',
		'archivo'		=> 'geo_distritos',
		'prefijo'		=> 'geodis',
		'me'			=> 'GEO_DISTRITOS',
		'grupo'			=> 'geoposicion',		
		'campos'		=>array(
			'id'			=>array(
				'campo'			=> 'id',
				'tipo'			=> 'id'
			),
			'fecha_creacion'	=>array(
				'campo'			=> 'fecha_creacion',
				'tipo'			=> 'fcr'
			),
			'fecha_edicion'	=>array(
				'campo'			=> 'fecha_edicion',
				'tipo'			=> 'fed'
			),
			'posicion'		=>array(
				'campo'			=> 'posicion',
				'tipo'			=> 'pos'
			),
			'visibilidad'	=>array(
				'campo'			=> 'visibilidad',
				'tipo'			=> 'vis'
			),
			'nombre'		=>array(
				'campo'			=> 'nombre',
				'label'			=> 'Nombre',
				'unique'		=> '1',
				'tipo'			=> 'inp',
				'listable'		=> '1',
				'validacion'	=> '1',
				'width'			=> '150px'
			),
			'geo'			=>array(
				'campo'			=> 'geo',
				'tipo'			=> 'inp',
				'listable'		=> '1',
				'validacion'	=> '0',
				'disabled'		=> '1'
			)
		),
	],
	[
		'eliminar'		=> '0',
		'editar'		=> '0',
		'crear'			=> '0',
		'crear_label'	=> '200px',
		'crear_txt'		=> '400px',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '0',
		'menu_label'	=> '',
		'por_pagina'	=> '100',
		'orden'			=> '1',	

		'width_listado'	=> '400px',
		'set_fila_fijo'	=> '1',
		'edicion_rapida'	=> '0',
		'edicion_completa'=> '0'
	]
);

function tabla_chain($obj,$chain_items=[]){

	$chain=[];
	foreach($chain_items as $ii=>$item){

		if($obj[$chain_items[$ii-1]]['archivo']){
			$chain[$item]['prev']='id_'.$obj[$chain_items[$ii-1]]['archivo'];			
		}
	
		if($obj[$chain_items[$ii+1]]['archivo']){
			$next_tabla=$obj[$chain_items[$ii+1]]['tabla'];
			$next_archivo=$obj[$chain_items[$ii+1]]['archivo'];
			$next_plural=$obj[$chain_items[$ii+1]]['nombre_plural'];
			$current_id_foreig='id_'.$obj[$chain_items[$ii]]['archivo'];
			$obj[$chain_items[$ii]]['campos']['nombre']['controles']= "<a href='custom/$next_archivo.php?id=[id]'>{select count(*) from $next_tabla where $current_id_foreig=[id]} $next_plural</a>";
		}

	}
	// prin($chain);exit();

	foreach($chain as $jj=>$chai){

		$id_foreig_prev=$chai['prev'];			
		$obj[$jj]['campos'][$id_foreig_prev]=[
			'campo'			=> $id_foreig_prev,
			'tipo'			=> 'hid',
			'listable'		=> '0',
			'validacion'	=> '0',
			'default'		=> '[id]',
			'foreig'		=> '1'
		];		

	}
	// prin($obj);exit();
	return $obj;
}

$objeto_tabla_comp=tabla_chain($objeto_tabla_comp,
	[
		'GEO_DEPARTAMENTOS',
		'GEO_PROVINCIA',
		'GEO_DISTRITOS',
	]

    // 'titulo'		=> '<a href="custom/geo_departamentos.php">Departamentos</a>  -
	// 	  Provincias de {select nombre from geo_departamentos where id=[id]}',
		  
	// 'titulo'		=> '<a href="custom/geo_departamentos.php">Departamentos</a>
	// 	  - <a href="custom/geo_provincias.php?id={select id_departamento from geo_provincias where id=[id]}">Provincias de {select geo_departamentos.nombre from geo_departamentos,geo_provincias where geo_departamentos.id=geo_provincias.id_departamento and geo_provincias.id=[id]}</a>
	// 	  - Distritos de {select nombre from geo_provincias where id=[id]}',

);


return $objeto_tabla_comp;