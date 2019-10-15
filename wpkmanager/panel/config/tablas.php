<?php //á


// CLASSES
include_once 'comps/classes.php';




/*
########  ########   #######   ######   ########     ###    ##     ##
##     ## ##     ## ##     ## ##    ##  ##     ##   ## ##   ###   ###
##     ## ##     ## ##     ## ##        ##     ##  ##   ##  #### ####
########  ########  ##     ## ##   #### ########  ##     ## ## ### ##
##        ##   ##   ##     ## ##    ##  ##   ##   ######### ##     ##
##        ##    ##  ##     ## ##    ##  ##    ##  ##     ## ##     ##
##        ##     ##  #######   ######   ##     ## ##     ## ##     ##
*/
$objeto_tabla['MANTENIMIENTO_ITEMS']=array(
	'grupo'			=> 'mantenimiento',
	'titulo'		=> 'Mantenimientos',
	'nombre_singular'=> 'mantenimiento',
	'nombre_plural'	=> 'mantenimientos',
	'tabla'			=> 'mantenimientos_items',
	'archivo'		=> 'mantenimientos_items',
	// 'archivo_hijo'	=> 'productos_fotos',
	'prefijo'		=> 'emp',
	'eliminar'		=> '1',
	'editar'		=> '1',
	'crear'			=> '1',
	'duplicar'		=> '0',
	'altura_listado'	=> 'auto',
	'visibilidad'	=> '1',
	'buscar'		=> '1',
	'bloqueado'		=> '0',
	'menu'			=> '1',
	'menu_label'	=> 'Mantenimientos',
	'por_pagina'	=> '100',
	'me'			=> 'MANTENIMIENTO_ITEMS',
	'orden'			=> '1',
	'crear_label'	=> '80px',
	'crear_txt'		=> '660px',
	'filtros_extra'	=> '',
	'campos'		=>array_merge(
		$objeto_tabla_common['base'],
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
);

$objeto_tabla['MAN_ACTIVIDADES']=array(
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
			'id_grupo'		=>array(
					'campo'			=> 'id_grupo',
					'tipo'			=> 'hid',
					'listable'		=> '1',
					'validacion'	=> '0',
					'default'		=> '[id]',
					'foreig'		=> '1',
					// 'controles'		=> '<a style="font-weight:bold;margin-left:5px !important;" target="_blank" href="custom/mantenimientos_items.php?i=[id_grupo]">IR A MANTENIMIENTO</a>',
			),	
			'man_actividades_tipos'		=>array(
				'campo'			=> 'man_actividades_tipos',
				'label'			=> 'Tipo',
				'width'			=> '80px',
				'listable'		=> '1',
				'tipo'			=> 'hid',
				'derecha'		=> '1',
				'opciones'		=> 'id,nombre|man_tipos',
				// 'default'		=> '3',
				'queries'		=> '1',
				'validacion'	=> '1',
			),				
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
		]
	),
	'edicion_completa'=> '1',
	'calificacion'	=> '1',
	'edicion_rapida'	=> '1',
);

$objeto_tabla['MAN_HERRAMIENTAS']=array(
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

$objeto_tabla['MAN_TECNICOS']=array(
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

/*
 ######   #######  ##    ## ######## ####  ######
##    ## ##     ## ###   ## ##        ##  ##    ##
##       ##     ## ####  ## ##        ##  ##
##       ##     ## ## ## ## ######    ##  ##   ####
##       ##     ## ##  #### ##        ##  ##    ##
##    ## ##     ## ##   ### ##        ##  ##    ##
 ######   #######  ##    ## ##       ####  ######
*/

/*
 ___  ________   ________  ___  ___  _______   ________
|\  \|\   ____\ |\   ____\|\  \|\  \|\  ___ \ |\   ____\
\ \  \ \  \___|_\ \  \___|\ \  \\\  \ \   __/|\ \  \___|_
 \ \  \ \_____  \\ \_____  \ \  \\\  \ \  \_|/_\ \_____  \
  \ \  \|____|\  \\|____|\  \ \  \\\  \ \  \_|\ \|____|\  \
   \ \__\____\_\  \ ____\_\  \ \_______\ \_______\____\_\  \
    \|__|\_________\\_________\|_______|\|_______|\_________\
        \|_________\|_________|                  \|_________|


*/
$objeto_tabla['EMPRESAS']=array(
		'grupo'			=> 'configuracion',
		'seccion'		=> 'elementos',
		'titulo'		=> 'Empresas',
		'nombre_singular'=> 'empresa',
		'nombre_plural'	=> 'empresas',
		'tabla'			=> 'empresas',
		'archivo'		=> 'empresas',
		// 'archivo_hijo'	=> 'productos_fotos',
		'prefijo'		=> 'emp',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'duplicar'		=> '0',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Empresas',
		'por_pagina'	=> '100',
		'me'			=> 'EMPRESAS',
		'orden'			=> '1',
		'crear_label'	=> '80px',
		'crear_txt'		=> '660px',
		'filtros_extra'	=> '',
		'campos'		=>array_merge(
			$objeto_tabla_common['base'],
			[
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'unique'		=> '0',
						'width'			=> '130px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'like'			=> '0',
						'size'			=> '140',
						'style'			=> 'width:450px;',
						'tags'			=> '1',
						'derecha'		=> '2'
				),
			]
		),
		'edicion_completa'=> '1',
		'calificacion'	=> '1',
		'importar_csv'	=> '0',
		// 'order_by'		=> 'orden desc, id_grupo desc',
		'width_listado'	=> '',
		'edicion_rapida'	=> '1',
		'crear_pruebas'	=> '0'
);

$objeto_tabla['PLANTAS']=array(
	'grupo'			=> 'configuracion',
	'titulo'		=> 'Plantas',
	'nombre_singular'=> 'planta',
	'nombre_plural'	=> 'plantas',
	'tabla'			=> 'plantas',
	'archivo'		=> 'plantas',
	// 'archivo_hijo'	=> 'productos_fotos',
	'prefijo'		=> 'emp',
	'eliminar'		=> '1',
	'editar'		=> '1',
	'crear'			=> '1',
	'duplicar'		=> '0',
	'altura_listado'	=> 'auto',
	'visibilidad'	=> '1',
	'buscar'		=> '1',
	'bloqueado'		=> '0',
	'menu'			=> '1',
	'menu_label'	=> 'Plantas',
	'por_pagina'	=> '100',
	'me'			=> 'PLANTAS',
	'orden'			=> '1',
	'crear_label'	=> '80px',
	'crear_txt'		=> '660px',
	'filtros_extra'	=> '',
	'campos'		=>array_merge(
		$objeto_tabla_common['base'],
		[
			'nombre'		=>array(
					'campo'			=> 'nombre',
					'label'			=> 'Nombre',
					'unique'		=> '0',
					'width'			=> '130px',
					'tipo'			=> 'inp',
					'listable'		=> '1',
					'validacion'	=> '1',
					'like'			=> '0',
					'size'			=> '140',
					'style'			=> 'width:450px;',
					'tags'			=> '1',
					'derecha'		=> '2'
			),
			'id_grupo'		=>array(
					'campo'			=> 'id_grupo',
					'label'			=> 'Empresa',
					'tipo'			=> 'hid',
					'listable'		=> '1',
					'validacion'	=> '1',
					'default'		=> '[id_grupo]',
					'foreig'		=> '1',
					'style'			=> 'width:200px,',
					'opciones'		=> 'id,nombre|empresas',
					'width'			=> '70px',
					'derecha'		=> '1',
					'tags'			=> '1',
					'queries'		=> '1'
			),			
		]
	),
	'edicion_completa'=> '1',
	'calificacion'	=> '1',
	'importar_csv'	=> '0',
	// 'order_by'		=> 'orden desc, id_grupo desc',
	'width_listado'	=> '',
	'edicion_rapida'	=> '1',
	'crear_pruebas'	=> '0'
);

$objeto_tabla['AREAS']=array(
	'grupo'			=> 'configuracion',
	'titulo'		=> 'Areas',
	'nombre_singular'=> 'area',
	'nombre_plural'	=> 'areas',
	'tabla'			=> 'areas',
	'archivo'		=> 'areas',
	// 'archivo_hijo'	=> 'productos_fotos',
	'prefijo'		=> 'emp',
	'eliminar'		=> '1',
	'editar'		=> '1',
	'crear'			=> '1',
	'duplicar'		=> '0',
	'altura_listado'	=> 'auto',
	'visibilidad'	=> '1',
	'buscar'		=> '1',
	'bloqueado'		=> '0',
	'menu'			=> '1',
	'menu_label'	=> 'Areas',
	'por_pagina'	=> '100',
	'me'			=> 'AREAS',
	'orden'			=> '1',
	'crear_label'	=> '80px',
	'crear_txt'		=> '660px',
	'filtros_extra'	=> '',
	'campos'		=>array_merge(
		$objeto_tabla_common['base'],
		[
			'nombre'		=>array(
					'campo'			=> 'nombre',
					'label'			=> 'Nombre',
					'unique'		=> '0',
					'width'			=> '130px',
					'tipo'			=> 'inp',
					'listable'		=> '1',
					'validacion'	=> '1',
					'like'			=> '0',
					'size'			=> '140',
					'style'			=> 'width:450px;',
					'tags'			=> '1',
					'derecha'		=> '2'
			),
			'id_grupo'		=>array(
					'campo'			=> 'id_grupo',
					'label'			=> 'Planta',
					'tipo'			=> 'hid',
					'listable'		=> '1',
					'validacion'	=> '1',
					'default'		=> '[id_grupo]',
					'foreig'		=> '1',
					'style'			=> 'width:200px,',
					'opciones'		=> 'id,nombre|plantas',
					'width'			=> '70px',
					'derecha'		=> '1',
					'tags'			=> '1',
					'queries'		=> '1'
			),			
		]
	),
	'edicion_completa'=> '1',
	'calificacion'	=> '1',
	'importar_csv'	=> '0',
	// 'order_by'		=> 'orden desc, id_grupo desc',
	'width_listado'	=> '',
	'edicion_rapida'	=> '1',
	'crear_pruebas'	=> '0'
);

$objeto_tabla['EQUIPOS_CATEGORIAS']=array(
	'grupo'			=> 'configuracion',
	'titulo'		=> 'Categorías',
	'nombre_singular'=> 'categoria',
	'nombre_plural'	=> 'categoria',
	'tabla'			=> 'equipos_categorias',
	'archivo'		=> 'equipos_categorias',
	// 'archivo_hijo'	=> 'productos_fotos',
	'prefijo'		=> 'emp',
	'eliminar'		=> '1',
	'editar'		=> '1',
	'crear'			=> '1',
	'duplicar'		=> '0',
	'altura_listado'	=> 'auto',
	'visibilidad'	=> '1',
	'buscar'		=> '1',
	'bloqueado'		=> '0',
	'menu'			=> '1',
	'menu_label'	=> 'Categorías',
	'por_pagina'	=> '100',
	'me'			=> 'EQUIPOS_CATEGORIAS',
	'orden'			=> '1',
	'crear_label'	=> '80px',
	'crear_txt'		=> '660px',
	'filtros_extra'	=> '',
	'campos'		=>array_merge(
		$objeto_tabla_common['base'],
		[
			'nombre'		=>array(
					'campo'			=> 'nombre',
					'label'			=> 'Nombre',
					'unique'		=> '0',
					'width'			=> '130px',
					'tipo'			=> 'inp',
					'listable'		=> '1',
					'validacion'	=> '1',
					'like'			=> '0',
					'size'			=> '140',
					'style'			=> 'width:450px;',
					'tags'			=> '1',
					'derecha'		=> '2'
			),
			'id_grupo'		=>array(
					'campo'			=> 'id_grupo',
					'label'			=> 'Area',
					'tipo'			=> 'hid',
					'listable'		=> '1',
					'validacion'	=> '1',
					'default'		=> '[id_grupo]',
					'foreig'		=> '1',
					'style'			=> 'width:200px,',
					'opciones'		=> 'id,nombre|areas',
					'width'			=> '70px',
					'derecha'		=> '1',
					'tags'			=> '1',
					'queries'		=> '1'
			),			
		]
	),
	'edicion_completa'=> '1',
	'calificacion'	=> '1',
	'importar_csv'	=> '0',
	// 'order_by'		=> 'orden desc, id_grupo desc',
	'width_listado'	=> '',
	'edicion_rapida'	=> '1',
	'crear_pruebas'	=> '0'
);

$objeto_tabla['EQUIPOS']=array(
	'grupo'			=> 'configuracion',
	'titulo'		=> 'Equipos',
	'nombre_singular'=> 'equipo',
	'nombre_plural'	=> 'equipos',
	'tabla'			=> 'equipos',
	'archivo'		=> 'equipos',
	// 'archivo_hijo'	=> 'productos_fotos',
	'prefijo'		=> 'emp',
	'eliminar'		=> '1',
	'editar'		=> '1',
	'crear'			=> '1',
	'duplicar'		=> '0',
	'altura_listado'	=> 'auto',
	'visibilidad'	=> '1',
	'buscar'		=> '1',
	'bloqueado'		=> '0',
	'menu'			=> '1',
	'menu_label'	=> 'Equipos',
	'por_pagina'	=> '100',
	'me'			=> 'EQUIPOS',
	'orden'			=> '1',
	'crear_label'	=> '80px',
	'crear_txt'		=> '660px',
	'filtros_extra'	=> '',
	'campos'		=>array_merge(
		$objeto_tabla_common['base'],
		[
			'nombre'		=>array(
					'campo'			=> 'nombre',
					'label'			=> 'Nombre',
					'unique'		=> '0',
					'width'			=> '130px',
					'tipo'			=> 'inp',
					'listable'		=> '1',
					'validacion'	=> '1',
					'like'			=> '0',
					'size'			=> '140',
					'style'			=> 'width:450px;',
					'tags'			=> '1',
					'derecha'		=> '2'
			),
			'id_grupo'		=>array(
					'campo'			=> 'id_grupo',
					'label'			=> 'Categpría',
					'tipo'			=> 'hid',
					'listable'		=> '1',
					'validacion'	=> '1',
					'default'		=> '[id_grupo]',
					'foreig'		=> '1',
					'style'			=> 'width:200px,',
					'opciones'		=> 'id,nombre|equipos_categorias',
					'width'			=> '70px',
					'derecha'		=> '1',
					'tags'			=> '1',
					'queries'		=> '1'
			),			
		]
	),
	'edicion_completa'=> '1',
	'calificacion'	=> '1',
	'importar_csv'	=> '0',
	// 'order_by'		=> 'orden desc, id_grupo desc',
	'width_listado'	=> '',
	'edicion_rapida'	=> '1',
	'crear_pruebas'	=> '0'
);

$objeto_tabla['MATERIALES']=array(
	'grupo'			=> 'configuracion',
	'titulo'		=> 'Materiales',
	'nombre_singular'=> 'material',
	'nombre_plural'	=> 'materiales',
	'tabla'			=> 'materiales',
	'archivo'		=> 'materiales',
	// 'archivo_hijo'	=> 'productos_fotos',
	'prefijo'		=> 'emp',
	'eliminar'		=> '1',
	'editar'		=> '1',
	'crear'			=> '1',
	'duplicar'		=> '0',
	'altura_listado'	=> 'auto',
	'visibilidad'	=> '1',
	'buscar'		=> '1',
	'bloqueado'		=> '0',
	'menu'			=> '1',
	'menu_label'	=> 'Materiales',
	'por_pagina'	=> '100',
	'me'			=> 'MATERIALES',
	'orden'			=> '1',
	'crear_label'	=> '80px',
	'crear_txt'		=> '660px',
	'filtros_extra'	=> '',
	'campos'		=>array_merge(
		$objeto_tabla_common['base'],
		[
			'nombre'		=>array(
					'campo'			=> 'nombre',
					'label'			=> 'Nombre',
					'unique'		=> '0',
					'width'			=> '130px',
					'tipo'			=> 'inp',
					'listable'		=> '1',
					'validacion'	=> '1',
					'like'			=> '0',
					'size'			=> '140',
					'style'			=> 'width:450px;',
					'tags'			=> '1',
					'derecha'		=> '2'
			),
		]
	),
	'edicion_completa'=> '1',
	'calificacion'	=> '1',
	'importar_csv'	=> '0',
	// 'order_by'		=> 'orden desc, id_grupo desc',
	'width_listado'	=> '',
	'edicion_rapida'	=> '1',
	'crear_pruebas'	=> '0'
);

$objeto_tabla['HERRAMIENTAS']=array(
	'grupo'			=> 'configuracion',
	'titulo'		=> 'Herramientas',
	'nombre_singular'=> 'herramienta',
	'nombre_plural'	=> 'herramientas',
	'tabla'			=> 'herramientas',
	'archivo'		=> 'herramientas',
	// 'archivo_hijo'	=> 'productos_fotos',
	'prefijo'		=> 'emp',
	'eliminar'		=> '1',
	'editar'		=> '1',
	'crear'			=> '1',
	'duplicar'		=> '0',
	'altura_listado'	=> 'auto',
	'visibilidad'	=> '1',
	'buscar'		=> '1',
	'bloqueado'		=> '0',
	'menu'			=> '1',
	'menu_label'	=> 'Herramientas',
	'por_pagina'	=> '100',
	'me'			=> 'HERRAMIENTAS',
	'orden'			=> '1',
	'crear_label'	=> '80px',
	'crear_txt'		=> '660px',
	'filtros_extra'	=> '',
	'campos'		=>array_merge(
		$objeto_tabla_common['base'],
		[
			'nombre'		=>array(
					'campo'			=> 'nombre',
					'label'			=> 'Nombre',
					'unique'		=> '0',
					'width'			=> '130px',
					'tipo'			=> 'inp',
					'listable'		=> '1',
					'validacion'	=> '1',
					'like'			=> '0',
					'size'			=> '140',
					'style'			=> 'width:450px;',
					'tags'			=> '1',
					'derecha'		=> '2'
			),
		]
	),
	'edicion_completa'=> '1',
	'calificacion'	=> '1',
	'importar_csv'	=> '0',
	// 'order_by'		=> 'orden desc, id_grupo desc',
	'width_listado'	=> '',
	'edicion_rapida'	=> '1',
	'crear_pruebas'	=> '0'
);

$objeto_tabla['TECNICOS_PERSONS']=array(
	'grupo'			=> 'configuracion',
	'titulo'		=> 'Tecnicos',
	'nombre_singular'=> 'técnico',
	'nombre_plural'	=> 'técnicos',
	'tabla'			=> 'tecnicos_persons',
	'archivo'		=> 'tecnicos_persons',
	'archivo_hijo'	=> 'productos_fotos',
	'prefijo'		=> 'tec',
	'eliminar'		=> '1',
	'editar'		=> '1',
	'crear'			=> '1',
	'duplicar'		=> '0',
	'altura_listado'	=> 'auto',
	'visibilidad'	=> '1',
	'buscar'		=> '1',
	'bloqueado'		=> '0',
	'menu'			=> '1',
	'menu_label'	=> 'Tecnicos',
	'por_pagina'	=> '100',
	'me'			=> 'TECNICOS_PERSONS',
	'orden'			=> '1',
	'crear_label'	=> '80px',
	'crear_txt'		=> '660px',
	'filtros_extra'	=> '',
	'campos'		=>array_merge(
		$objeto_tabla_common['base'],
		$objeto_tabla_common['person'],[

		]
	),
	'edicion_completa'=> '1',
	'calificacion'	=> '1',
	'importar_csv'	=> '0',
	// 'order_by'		=> 'orden desc, id_grupo desc',
	'width_listado'	=> '',
	'edicion_rapida'	=> '1',
	'crear_pruebas'	=> '0'
);

$objeto_tabla['MAN_TIPOS']=array(
	'grupo'			=> 'configuracion',
	'titulo'		=> 'Tipos de mantenimientos',
	'nombre_singular'=> 'tipo',
	'nombre_plural'	=> 'tipos',
	'tabla'			=> 'man_tipos',
	'archivo'		=> 'man_tipos',
	// 'archivo_hijo'	=> 'productos_fotos',
	'prefijo'		=> 'mantip',
	'eliminar'		=> '1',
	'editar'		=> '1',
	'crear'			=> '1',
	'duplicar'		=> '0',
	'altura_listado'	=> 'auto',
	'visibilidad'	=> '1',
	'buscar'		=> '1',
	'bloqueado'		=> '0',
	'menu'			=> '1',
	'menu_label'	=> 'Tipos de mantenimientos',
	'por_pagina'	=> '100',
	'me'			=> 'MAN_TIPOS',
	'orden'			=> '1',
	'crear_label'	=> '80px',
	'crear_txt'		=> '660px',
	'filtros_extra'	=> '',
	'campos'		=>array_merge(
		$objeto_tabla_common['base'],
		[
			'nombre'		=>array(
					'campo'			=> 'nombre',
					'label'			=> 'Modelo',
					'unique'		=> '0',
					'width'			=> '130px',
					'tipo'			=> 'inp',
					'listable'		=> '1',
					'validacion'	=> '1',
					'like'			=> '0',
					'size'			=> '140',
					'style'			=> 'width:450px;',
					'tags'			=> '1',
					'derecha'		=> '2'
			),
		]
	),
	'edicion_completa'=> '1',
	'calificacion'	=> '1',
	'importar_csv'	=> '0',
	// 'order_by'		=> 'orden desc, id_grupo desc',
	'width_listado'	=> '',
	'edicion_rapida'	=> '1',
	'crear_pruebas'	=> '0'
);

$objeto_tabla=array_merge($objeto_tabla,require 'comps/issues.php');


/*
 ___  ___  ________  _______   ________  ________
|\  \|\  \|\   ____\|\  ___ \ |\   __  \|\   ____\
\ \  \\\  \ \  \___|\ \   __/|\ \  \|\  \ \  \___|_
 \ \  \\\  \ \_____  \ \  \_|/_\ \   _  _\ \_____  \
  \ \  \\\  \|____|\  \ \  \_|\ \ \  \\  \\|____|\  \
   \ \_______\____\_\  \ \_______\ \__\\ _\ ____\_\  \
    \|_______|\_________\|_______|\|__|\|__|\_________\
             \|_________|                  \|_________|


*/

$objeto_tabla['SUPER_ADMINISTRADORES']=array(
	'grupo'			=> 'configuracion',
	'seccion'		=> 'usuarios',
	'me'			=> 'SUPER_ADMINISTRADORES',
	'titulo'		=> 'Super Administradores',
	'menu_label'	=> 'Super Administradores',
	'nombre_singular'=> 'administrador',
	'nombre_plural'	=> 'administradores',
	'tabla'			=> 'super_administradores',
	'archivo'		=> 'super_admins',
	'prefijo'		=> 'supadm',
	'eliminar'		=> '1',
	'editar'		=> '1',
	'crear'			=> '1',
	'altura_listado'	=> 'auto',
	'visibilidad'	=> '0',
	'buscar'		=> '0',
	'bloqueado'		=> '0',
	'menu'			=> '1',
	'orden'			=> '1',
	'width_listado'	=> '800px',
	'archivo_sub'	=> 'usuarios_acceso',
	'campos'		=>array_merge(
		$objeto_tabla_common['base'],
		$objeto_tabla_common['person'],
		objeto_tabla_sesion(101)
	),
	'edicion_completa'=> '0',
	'expandir_vertical'=> '0',
	'edicion_rapida'	=> '1',
	'calificacion'	=> '0',
	'set_fila_fijo'	=> '4',
	'crear_quick'	=> '1',
	'disabled'		=> '0'
);

$objeto_tabla['ADMINISTRADORES']=array(
	'grupo'			=> 'configuracion',
	'me'			=> 'ADMINISTRADORES',
	'titulo'		=> 'Administradores',
	'menu_label'	=> 'Administradores',
	'nombre_singular'=> 'administrador',
	'nombre_plural'	=> 'administradores',
	'tabla'			=> 'administradores',
	'archivo'		=> 'administradores',
	'prefijo'		=> 'adm',
	'eliminar'		=> '1',
	'editar'		=> '1',
	'crear'			=> '1',
	'altura_listado'	=> 'auto',
	'visibilidad'	=> '0',
	'buscar'		=> '0',
	'bloqueado'		=> '0',
	'menu'			=> '1',
	'orden'			=> '1',
	'width_listado'	=> '800px',
	'archivo_sub'	=> 'usuarios_acceso',
	'campos'		=>array_merge(
		$objeto_tabla_common['base'],
		$objeto_tabla_common['person'],
		objeto_tabla_sesion(102)
	),
	'edicion_completa'=> '0',
	'expandir_vertical'=> '0',
	'edicion_rapida'	=> '1',
	'calificacion'	=> '0',
	'set_fila_fijo'	=> '4',
	'crear_quick'	=> '1',
	'disabled'		=> '0'
);

$objeto_tabla['TECNICOS']=array(
	'grupo'			=> 'configuracion',
	'me'			=> 'TECNICOS',
	'titulo'		=> 'técnicos',
	'menu_label'	=> 'técnicos',
	'nombre_singular'=> 'técnico',
	'nombre_plural'	=> 'técnicos',
	'tabla'			=> 'tecnicos',
	'archivo'		=> 'tecnicos',
	'prefijo'		=> 'tec',
	'eliminar'		=> '1',
	'editar'		=> '1',
	'crear'			=> '1',
	'altura_listado'	=> 'auto',
	'visibilidad'	=> '0',
	'buscar'		=> '0',
	'bloqueado'		=> '0',
	'menu'			=> '1',
	'orden'			=> '1',
	'width_listado'	=> '800px',
	'archivo_sub'	=> 'usuarios_acceso',
	'campos'		=>array_merge(
		$objeto_tabla_common['base'],
		$objeto_tabla_common['person'],
		objeto_tabla_sesion(103)
	),
	'edicion_completa'=> '0',
	'expandir_vertical'=> '0',
	'edicion_rapida'	=> '1',
	'calificacion'	=> '0',
	'set_fila_fijo'	=> '4',
	'crear_quick'	=> '1',
	'disabled'		=> '0'
);

$objeto_tabla['LOGISTICA']=array(
	'grupo'			=> 'configuracion',
	'me'			=> 'LOGISTICA',
	'titulo'		=> 'gerentes',
	'menu_label'	=> 'Usuarios de Logística',
	'nombre_singular'=> 'usuario de logística',
	'nombre_plural'	=> 'usuarios de logística',
	'tabla'			=> 'logistica_users',
	'archivo'		=> 'logistica_users',
	'prefijo'		=> 'log_user',
	'eliminar'		=> '1',
	'editar'		=> '1',
	'crear'			=> '1',
	'altura_listado'	=> 'auto',
	'visibilidad'	=> '0',
	'buscar'		=> '0',
	'bloqueado'		=> '0',
	'menu'			=> '1',
	'orden'			=> '1',
	'width_listado'	=> '800px',
	'archivo_sub'	=> 'usuarios_acceso',
	'campos'		=>array_merge(
		$objeto_tabla_common['base'],
		$objeto_tabla_common['person'],
		objeto_tabla_sesion(104)
	),
	'edicion_completa'=> '0',
	'expandir_vertical'=> '0',
	'edicion_rapida'	=> '1',
	'calificacion'	=> '0',
	'set_fila_fijo'	=> '4',
	'crear_quick'	=> '1',
	'disabled'		=> '0'
);

//! BY EMPRESA
$objeto_tabla['GERENTES']=array(
	'grupo'			=> 'configuracion',
	'seccion'		=> 'clientes',
	'me'			=> 'GERENTES',
	'titulo'		=> 'Gerentes',
	'menu_label'	=> 'Gerentes',
	'nombre_singular'=> 'gerente',
	'nombre_plural'	=> 'gerentes',
	'tabla'			=> 'gerentes',
	'archivo'		=> 'gerentes',
	'prefijo'		=> 'ger_user',
	'eliminar'		=> '1',
	'editar'		=> '1',
	'crear'			=> '1',
	'altura_listado'	=> 'auto',
	'visibilidad'	=> '0',
	'buscar'		=> '0',
	'bloqueado'		=> '0',
	'menu'			=> '1',
	'orden'			=> '1',
	'width_listado'	=> '800px',
	'archivo_sub'	=> 'usuarios_acceso',
	'campos'		=>array_merge(
		[
			'id_empresa'		=>array(
				'campo'			=> 'id_empresa',
				'label'			=> 'Empresa',
				'tipo'			=> 'hid',
				'listable'		=> '1',
				'validacion'	=> '1',
				'default'		=> '[id_empresa]',
				'foreig'		=> '1',
				'style'			=> 'width:160px,',
				'opciones'		=> 'id,nombre|empresas',
				'width'			=> '120px',
				'derecha'		=> '1',
				'tip_foreig'	=> '1',
				'queries'		=> '1'
			)
		],
		$objeto_tabla_common['base'],
		$objeto_tabla_common['person'],
		objeto_tabla_sesion(105)
	),
	'edicion_completa'=> '0',
	'expandir_vertical'=> '0',
	'edicion_rapida'	=> '1',
	'calificacion'	=> '0',
	'set_fila_fijo'	=> '4',
	'crear_quick'	=> '1',
	'disabled'		=> '0'
);

$objeto_tabla['GERENTES_PLANTA']=array(
	'grupo'			=> 'configuracion',
	'me'			=> 'GERENTES_PLANTA',
	'titulo'		=> 'Gerentes de planta',
	'menu_label'	=> 'Gerentes de planta',
	'nombre_singular'=> 'gerente de planta',
	'nombre_plural'	=> 'gerentes de planta',
	'tabla'			=> 'gerentes_planta',
	'archivo'		=> 'gerentes_planta',
	'prefijo'		=> 'ger_plan',
	'eliminar'		=> '1',
	'editar'		=> '1',
	'crear'			=> '1',
	'altura_listado'	=> 'auto',
	'visibilidad'	=> '0',
	'buscar'		=> '0',
	'bloqueado'		=> '0',
	'menu'			=> '1',
	'orden'			=> '1',
	'width_listado'	=> '800px',
	'archivo_sub'	=> 'usuarios_acceso',
	'campos'		=>array_merge(
		[
			'id_planta'		=>array(
				'campo'			=> 'id_planta',
				'label'			=> 'Planta',
				'tipo'			=> 'hid',
				'listable'		=> '1',
				'validacion'	=> '1',
				'default'		=> '[id_empresa]',
				'foreig'		=> '1',
				'style'			=> 'width:160px,',
				'opciones'		=> 'id,nombre|plantas',
				'width'			=> '120px',
				'derecha'		=> '1',
				'tip_foreig'	=> '1',
				'queries'		=> '1'
			)
		],
		$objeto_tabla_common['base'],
		$objeto_tabla_common['person'],
		objeto_tabla_sesion(106)
	),
	'edicion_completa'=> '0',
	'expandir_vertical'=> '0',
	'edicion_rapida'	=> '1',
	'calificacion'	=> '0',
	'set_fila_fijo'	=> '4',
	'crear_quick'	=> '1',
	'disabled'		=> '0'
);

$objeto_tabla['JEFES_PLANTA']=array(
	'grupo'			=> 'configuracion',
	'me'			=> 'JEFES_PLANTA',
	'titulo'		=> 'Jefes de Planta/Producción',
	'menu_label'	=> 'Jefes de Planta/Producción',
	'nombre_singular'=> 'jefe de planta/producción',
	'nombre_plural'	=> 'jefes de planta/producción',
	'tabla'			=> 'jefes_planta',
	'archivo'		=> 'jefes_planta',
	'prefijo'		=> 'jef_plan',
	'eliminar'		=> '1',
	'editar'		=> '1',
	'crear'			=> '1',
	'altura_listado'	=> 'auto',
	'visibilidad'	=> '0',
	'buscar'		=> '0',
	'bloqueado'		=> '0',
	'menu'			=> '1',
	'orden'			=> '1',
	'width_listado'	=> '800px',
	'archivo_sub'	=> 'usuarios_acceso',
	'campos'		=>array_merge(
		[
			'id_planta'		=>array(
				'campo'			=> 'id_planta',
				'label'			=> 'Planta',
				'tipo'			=> 'hid',
				'listable'		=> '1',
				'validacion'	=> '1',
				'default'		=> '[id_empresa]',
				'foreig'		=> '1',
				'style'			=> 'width:160px,',
				'opciones'		=> 'id,nombre|plantas',
				'width'			=> '120px',
				'derecha'		=> '1',
				'tip_foreig'	=> '1',
				'queries'		=> '1'
			)
		],
		$objeto_tabla_common['base'],
		$objeto_tabla_common['person'],
		objeto_tabla_sesion(107)
	),
	'edicion_completa'=> '0',
	'expandir_vertical'=> '0',
	'edicion_rapida'	=> '1',
	'calificacion'	=> '0',
	'set_fila_fijo'	=> '4',
	'crear_quick'	=> '1',
	'disabled'		=> '0'
);

$objeto_tabla['JEFES_MANTENIMIENTO']=array(
	'grupo'			=> 'configuracion',
	'me'			=> 'JEFES_MANTENIMIENTO',
	'titulo'		=> 'Jefes de Mantenimiento',
	'menu_label'	=> 'Jefes de Mantenimiento',
	'nombre_singular'=> 'jefe de mantenimiento',
	'nombre_plural'	=> 'jefes de mantenimiento',
	'tabla'			=> 'jefes_mantenimiento',
	'archivo'		=> 'jefes_mantenimiento',
	'prefijo'		=> 'jef_man',
	'eliminar'		=> '1',
	'editar'		=> '1',
	'crear'			=> '1',
	'altura_listado'	=> 'auto',
	'visibilidad'	=> '0',
	'buscar'		=> '0',
	'bloqueado'		=> '0',
	'menu'			=> '1',
	'orden'			=> '1',
	'width_listado'	=> '800px',
	'archivo_sub'	=> 'usuarios_acceso',
	'campos'		=>array_merge(
		[
			'id_planta'		=>array(
				'campo'			=> 'id_planta',
				'label'			=> 'Planta',
				'tipo'			=> 'hid',
				'listable'		=> '1',
				'validacion'	=> '1',
				'default'		=> '[id_empresa]',
				'foreig'		=> '1',
				'style'			=> 'width:160px,',
				'opciones'		=> 'id,nombre|plantas',
				'width'			=> '120px',
				'derecha'		=> '1',
				'tip_foreig'	=> '1',
				'queries'		=> '1'
			)
		],
		$objeto_tabla_common['base'],
		$objeto_tabla_common['person'],
		objeto_tabla_sesion(108)
	),
	'edicion_completa'=> '0',
	'expandir_vertical'=> '0',
	'edicion_rapida'	=> '1',
	'calificacion'	=> '0',
	'set_fila_fijo'	=> '4',
	'crear_quick'	=> '1',
	'disabled'		=> '0'
);


$objeto_tabla=array_merge($objeto_tabla,require 'comps/users.php');


// SYSTEM
$objeto_tabla=array_merge($objeto_tabla,require 'comps/system.php');

// UBI
$objeto_tabla=array_merge($objeto_tabla,require 'comps/ubi.php');


