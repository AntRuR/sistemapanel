<?php

unset($objeto_tabla_comp);


$objeto_tabla_comp['MANTENIMIENTO_ITEMS']=array_merge(
	[
		'me'			=> 'MANTENIMIENTO_ITEMS',
		'grupo'			=> 'mantenimiento',
		'titulo'		=> 'Mantenimientos',
		'nombre_singular'=> 'mantenimiento',
		'nombre_plural'	=> 'mantenimientos',
		'tabla'			=> 'mantenimientos_items',
		'archivo'		=> 'mantenimientos_items',
		// 'archivo_hijo'	=> 'productos_fotos',
		'prefijo'		=> 'emp',
		'menu_label'	=> 'Mantenimientos',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'duplicar'		=> '0',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'por_pagina'	=> '100',
		'orden'			=> '1',
		'crear_label'	=> '80px',
		'crear_txt'		=> '660px',
		'filtros_extra'	=> '',
		'campos'		=>array_merge(
			
			$objeto_tabla_common['base'],

			chain_campos(
				$objeto_tabla,
				$objeto_chain['issues'],
				[
					'id_equipo'=>[
						'controles'=>'<a href="custom/man_actividades.php?id_equipo=[id_equipo]" rel="crear subs popup">{select count(*) from man_actividades where id_equipo=[id_equipo]} actividades</a>'
					]	
				]
			),

			// [
			// 	'id_actividad'		=>array(
			// 		'campo'			=> 'id_actividad',
			// 		'label'			=> 'Actividad',
			// 		'width'			=> '150px',
			// 		'tipo'			=> 'hid',
			// 		'multi'			=> '1',
			// 		'listable'		=> '1',
			// 		'validacion'	=> '1',
			// 		// 'controles'		=> '<a rel="subs" href="custom/productos_items.php?id_tipo=[id]" >{select count(*) from productos_items where id_tipo=[id]} modelos</a>',
			// 		'opciones'	=> 'id,nombre|actividades|where visibilidad=1'
			// 	)			
			// ],
			/*
			[
				'id_grupo'		=>array(
					'campo'			=> 'id_grupo',
					'label'			=> 'Empresa',
					'tipo'			=> 'hid',
					'listable'		=> '1',
					'validacion'	=> '1',
					'default'		=> '[id_grupo]',
					'foreig'		=> '1',
					'style'			=> 'width:100px,',
					'opciones'		=> 'id,nombre|empresas|where visibilidad=1 order by nombre asc',
					'load'			=> 'id_planta||id,nombre|plantas|where visibilidad=1 and id_grupo=[id_grupo] order by nombre desc',
					'width'			=> '80px',
					'derecha'		=> '1',
					'tags'			=> '1',
					'queries'		=> '1',
					// 'noedit'		=> '1',
					'controles'		=> ''

					.'<a href="custom/man_herramientas.php?id=[id]" rel="crear subs popup">{select count(*) from man_herramientas where id_grupo=[id]} herramientas</a>'
					.'<a href="custom/man_tecnicos.php?id=[id]" rel="crear subs popup">{select count(*) from man_tecnicos where id_grupo=[id]} tecnicos</a>'

					.'<a href="custom/man_actividades.php?id=[id]" rel="crear subs popup">{select count(*) from man_actividades where id_grupo=[id]} actividades</a>'
					// .'<a href="custom/productos_ventas_docs.php?id=[id]" rel="subs popup">{select count(*) from productos_ventas_docs where id_grupo=[id]} documentos</a>'
					// .'<a style="font-weight:bold;margin-left:5px !important;" target="_blank" href="custom/ventas_items.php?id_grupo=[id_grupo]">IR A OC</a>'

					.'',

				),

				'id_planta'		=>array(
					'campo'			=> 'id_planta',
					'label'			=> 'Planta',
					'tipo'			=> 'hid',
					'listable'		=> '1',
					'validacion'	=> '1',
					'default'		=> '[id_item]',
					'foreig'		=> '1',
					'style'			=> 'width:150px;',
					'opciones'		=> 'id,nombre|plantas|where visibilidad=1 order by nombre asc',
					'load'			=> 'id_area||id,nombre|areas|where visibilidad=1 and id_grupo=[id] order by nombre desc',
					'width'			=> '250px',
					'derecha'		=> '2',
					'tip_foreig'	=> '0',
					'tags'			=> '1',
					'queries'		=> '0',
					// 'noedit'		=> '1',
				),

				'id_area'		=>array(
					'campo'			=> 'id_area',
					'label'			=> 'Area',
					'tipo'			=> 'hid',
					'listable'		=> '1',
					'validacion'	=> '1',
					'default'		=> '[id_item]',
					'foreig'		=> '1',
					'style'			=> 'width:150px;',
					'opciones'		=> 'id,nombre|areas|where visibilidad=1 order by nombre asc',
					'load'			=> 'id_cat||id,nombre|equipos|where visibilidad=1 and id_grupo=[id] order by nombre desc',
					'width'			=> '250px',
					'derecha'		=> '2',
					'tip_foreig'	=> '0',
					'tags'			=> '1',
					'queries'		=> '0',
					// 'noedit'		=> '1',
				),

				'id_cat'		=>array(
					'campo'			=> 'id_cat',
					'label'			=> 'Categoría',
					'tipo'			=> 'hid',
					'listable'		=> '1',
					'validacion'	=> '1',
					'default'		=> '[id_item]',
					'foreig'		=> '1',
					'style'			=> 'width:150px;',
					'opciones'		=> 'id,nombre|equipos_categorias|where visibilidad=1 order by nombre asc',
					'load'			=> 'id_item||id,nombre|equipos|where visibilidad=1 and id_grupo=[id] order by nombre desc',
					'width'			=> '250px',
					'derecha'		=> '2',
					'tip_foreig'	=> '0',
					'tags'			=> '1',
					'queries'		=> '0',
					// 'noedit'		=> '1',
				),

				'id_item'		=>array(
						'campo'			=> 'id_item',
						'label'			=> 'Equipo',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '1',
						'default'		=> '[id_item]',
						'foreig'		=> '1',
						'style'			=> 'width:150px;',
						'opciones'		=> 'id,nombre|equipos|where visibilidad=1 order by nombre asc',
						'width'			=> '250px',
						'derecha'		=> '2',
						'tip_foreig'	=> '0',
						'tags'			=> '1',
						'queries'		=> '0',
						// 'noedit'		=> '1',
				),
			],
			*/
			[
				
				'fecha_inicio'	=>array(
						'campo'			=> 'fecha_inicio',
						'label'			=> 'Inicio',
						'tipo'			=> 'fch',
						'listable'		=> '1',
						'formato'		=> '7b',
						'time'			=> '1',
						'width'			=> '136px',
						'derecha'		=> '1',
						'default'		=> '',
						'rango'			=> 'now,+1 years',
						'queries'		=> '0',
						'validacion'	=> '0',
				),	

				'fecha_fin'	=>array(
					'campo'			=> 'fecha_fin',
					'label'			=> 'Fin',
					'tipo'			=> 'fch',
					'listable'		=> '1',
					'formato'		=> '7b',
					'time'			=> '1',
					'width'			=> '136px',
					'derecha'		=> '1',
					'default'		=> '',
					'rango'			=> 'now,+1 years',
					'queries'		=> '0',
					'validacion'	=> '0',
			),						
				/*
				'id_herramientas'		=>array(
						'campo'			=> 'id_herramientas',
						'label'			=> 'Herramientas',
						'width'			=> '100px',
						'listable'		=> '0',
						'tipo'			=> 'hid',
						'opciones'		=> 'id,nombre|herramientas|order by nombre asc',
						'derecha'		=> '1',
						'tags'			=> '1',
						'queries'		=> '1',
						'validacion'	=> '0',
						'select_multiple'=> '1'
				),		
				*/

			]
		),
		'edicion_completa'=> '1',
		'calificacion'	=> '1',
		'importar_csv'	=> '0',
		// 'order_by'		=> 'orden desc, id_grupo desc',
		'width_listado'	=> '',
		'edicion_rapida'	=> '1',
		'crear_pruebas'	=> '0'
	]
);

$objeto_tabla_comp['MAN_ACTIVIDADES']=array(
	'grupo'			=> 'mantenimiento',
	'titulo'		=> 'Actividades',
	'nombre_singular'=> 'actividad',
	'nombre_plural'	=> 'actividades',
	'tabla'			=> 'man_actividades',
	'archivo'		=> 'man_actividades',
	// 'archivo_hijo'	=> 'productos_fotos',
	'prefijo'		=> 'manact',
	'eliminar'		=> '1',
	'editar'		=> '1',
	'crear'			=> '1',
	'duplicar'		=> '0',
	'altura_listado'	=> 'auto',
	'visibilidad'	=> '1',
	'buscar'		=> '1',
	'bloqueado'		=> '0',
	'menu'			=> '0',
	'menu_label'	=> 'Actividades',
	'por_pagina'	=> '100',
	'me'			=> 'MAN_ACTIVIDADES',
	'orden'			=> '1',
	'crear_label'	=> '80px',
	'crear_txt'		=> '660px',
	'filtros_extra'	=> '',
	'campos'		=>array_merge(
		$objeto_tabla_common['base'],
		[
			'fecha_creacion'	=>array(
					'campo'			=> 'fecha_creacion',
					'tipo'			=> 'fcr',
					'listable'		=> '1',
					'formato'		=> '7b',
					'width'			=> '100px',
					'queries'		=> '0',
			),		
			'id_equipo'		=>array(
					'campo'			=> 'id_equipo',
					'tipo'			=> 'hid',
					'listable'		=> '1',
					'validacion'	=> '0',
					'default'		=> '[id_equipo]',
					'foreig'		=> '1',
					'opciones'		=> 'id,nombre|equipos'
					// 'controles'		=> '<a style="font-weight:bold;margin-left:5px !important;" target="_blank" href="custom/mantenimientos_items.php?i=[id_grupo]">IR A MANTENIMIENTO</a>',
			),	
			'man_actividades_tipos'		=>array(
				'campo'			=> 'man_actividades_tipos',
				'label'			=> 'Tipo',
				'width'			=> '80px',
				'listable'		=> '1',
				'tipo'			=> 'hid',
				'derecha'		=> '1',
				// 'default'		=> '[id_equipo]',
				'opciones'		=> 'id,nombre|actividades|where id_equipo='.$_GET[id_equipo],
				// 'default'		=> '3',
				'queries'		=> '1',
				'validacion'	=> '1',
			),	
			/*			
			'nombre'		=>array(
					'campo'			=> 'nombre',
					'label'			=> 'Nombre',
					'unique'		=> '0',
					'width'			=> '130px',
					'tipo'			=> 'txt',
					'listable'		=> '1',
					'validacion'	=> '1',
					'like'			=> '0',
					'size'			=> '140',
					'style'			=> 'width:450px;',
					'tags'			=> '1',
					'derecha'		=> '2'
			),
	
			'material'		=>array(
				'campo'			=> 'material',
				'label'			=> 'Material',
				'width'			=> '80px',
				'listable'		=> '1',
				'tipo'			=> 'hid',
				'derecha'		=> '1',
				'opciones'		=> 'id,nombre|materiales',
				// 'default'		=> '3',
				'queries'		=> '1',
				'validacion'	=> '1',
			),
			*/
		]
	),
	'edicion_completa'=> '1',
	'calificacion'	=> '1',
	'edicion_rapida'	=> '1',
);

$objeto_tabla_comp['MAN_HERRAMIENTAS']=array(
	'grupo'			=> 'mantenimiento',
	'titulo'		=> 'Herramientas',
	'nombre_singular'=> 'herramienta',
	'nombre_plural'	=> 'herramientas',
	'tabla'			=> 'man_herramientas',
	'archivo'		=> 'man_herramientas',
	// 'archivo_hijo'	=> 'productos_fotos',
	'prefijo'		=> 'manher',
	'eliminar'		=> '1',
	'editar'		=> '1',
	'crear'			=> '1',
	'duplicar'		=> '0',
	'altura_listado'	=> 'auto',
	'visibilidad'	=> '1',
	'buscar'		=> '1',
	'bloqueado'		=> '0',
	'menu'			=> '0',
	'menu_label'	=> 'Herramientas',
	'por_pagina'	=> '100',
	'me'			=> 'MAN_HERRAMIENTAS',
	'orden'			=> '1',
	'crear_label'	=> '80px',
	'crear_txt'		=> '660px',
	'filtros_extra'	=> '',
	'campos'		=>array_merge(
		
		$objeto_tabla_common['base'],
		[
			'id_grupo'		=>array(
					'campo'			=> 'id_grupo',
					'tipo'			=> 'hid',
					'listable'		=> '1',
					'validacion'	=> '0',
					'default'		=> '[id]',
					'foreig'		=> '1',
					'controles'		=> '<a style="font-weight:bold;margin-left:5px !important;" target="_blank" href="custom/mantenimientos_items.php?i=[id_grupo]">IR A MANTENIMIENTO</a>',
			),		
			'herramienta'		=>array(
				'campo'			=> 'herramienta',
				'label'			=> 'Herramienta',
				'width'			=> '80px',
				'listable'		=> '1',
				'tipo'			=> 'hid',
				'derecha'		=> '1',
				'opciones'		=> 'id,nombre|herramientas',
				// 'default'		=> '3',
				'queries'		=> '1',
				'validacion'	=> '1',
			),			
		]
	),
	'edicion_completa'=> '1',
	'calificacion'	=> '1',
	'edicion_rapida'	=> '1',
);

$objeto_tabla_comp['MAN_TECNICOS']=array(
	'grupo'			=> 'mantenimiento',
	'titulo'		=> 'Tecnicos',
	'nombre_singular'=> 'tecnico',
	'nombre_plural'	=> 'tenicos',
	'tabla'			=> 'man_tecnicos',
	'archivo'		=> 'man_tecnicos',
	// 'archivo_hijo'	=> 'productos_fotos',
	'prefijo'		=> 'mantec',
	'eliminar'		=> '1',
	'editar'		=> '1',
	'crear'			=> '1',
	'duplicar'		=> '0',
	'altura_listado'	=> 'auto',
	'visibilidad'	=> '1',
	'buscar'		=> '1',
	'bloqueado'		=> '0',
	'menu'			=> '0',
	'menu_label'	=> 'Tecnicos',
	'por_pagina'	=> '100',
	'me'			=> 'MAN_TECNICOS',
	'orden'			=> '1',
	'crear_label'	=> '80px',
	'crear_txt'		=> '660px',
	'filtros_extra'	=> '',
	'campos'		=>array_merge(
		$objeto_tabla_common['base'],
		[
			'id_grupo'		=>array(
					'campo'			=> 'id_grupo',
					'tipo'			=> 'hid',
					'listable'		=> '1',
					'validacion'	=> '0',
					'default'		=> '[id]',
					'foreig'		=> '1',
					'controles'		=> '<a style="font-weight:bold;margin-left:5px !important;" target="_blank" href="custom/mantenimientos_items.php?i=[id_grupo]">IR A MANTENIMIENTO</a>',
			),		
			'tecnico'		=>array(
				'campo'			=> 'tecnico',
				'label'			=> 'Tecnico',
				'width'			=> '80px',
				'listable'		=> '1',
				'tipo'			=> 'hid',
				'derecha'		=> '1',
				'opciones'		=> 'id,nombre;apellidos|tecnicos_persons',
				// 'default'		=> '3',
				'queries'		=> '1',
				'validacion'	=> '1',
			),				
		]
	),
	'edicion_completa'=> '1',
	'calificacion'	=> '1',
	'edicion_rapida'	=> '1',
);

return $objeto_tabla_comp;