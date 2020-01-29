<?php //á

/*
 ######  ##          ###     ######  ########  ######
##    ## ##         ## ##   ##    ## ##       ##    ##
##       ##        ##   ##  ##       ##       ##
##       ##       ##     ##  ######  ######    ######
##       ##       #########       ## ##             ##
##    ## ##       ##     ## ##    ## ##       ##    ##
 ######  ######## ##     ##  ######  ########  ######
*/
$objeto_tabla_common['base']=[
	'id'			=>[
			'campo'			=> 'id',
			'tipo'			=> 'id'
	],
	'fecha_creacion'=>[
			'campo'			=> 'fecha_creacion',
			'tipo'			=> 'fcr'
	],
	'fecha_edicion'	=>[
			'campo'			=> 'fecha_edicion',
			'tipo'			=> 'fed'
	],
	// 'posicion'		=>[
	// 		'campo'			=> 'posicion',
	// 		'tipo'			=> 'pos'
	// ],
	'visibilidad'	=>[
			'campo'			=> 'visibilidad',
			'tipo'			=> 'vis'
	],
	// 'calificacion'	=>[
	// 		'campo'			=> 'calificacion',
	// 		'tipo'			=> 'cal'
	// ]
];

$objeto_tabla_person=array_merge(
	// basico
	[
		'nombre'		=>array(
				'campo'			=> 'nombre',
				'label'			=> 'Nombre',
				'tipo'			=> 'inp',
				'listable'		=> '1',
				'validacion'	=> '1',
				'width'			=> '150px',
				'style'			=> 'width:150px;',
				'derecha'		=> '1',
				'like'			=> '0',
				'tags'			=> '1',
				'queries'		=> '0',
				'dlquery'		=> '0',
				'noedit'			=> '1'
		),
		'apellidos'		=>array(
				'campo'			=> 'apellidos',
				'label'			=> 'Apellidos',
				'tipo'			=> 'inp',
				'listable'		=> '1',
				'validacion'	=> '0',
				'width'			=> '130px',
				'style'			=> 'width:150px;',
				'derecha'		=> '2',
				'like'			=> '0',
				'tags'			=> '1',
				'noedit'			=> '1'						
		),
		'email'			=>array(
				'campo'			=> 'email',
				'label'			=> 'Email',
				'subvalidacion'		=> 'email',
				'tipo'			=> 'inp',
				'listable'		=> '1',
				// 'validacion'	=> '1',
				'width'			=> '150px',
				'style'			=> 'width:150px;',
				'derecha'		=> '1',
				'default'		=> '',
				'like'			=> '1',
				'unique'		=> '0'
		),
	],
	// ubi
	[
		'departamento'	=>array(
				'campo'			=> 'departamento',
				'label'			=> 'Departamento',
				'tipo'			=> 'hid',
				'combo'			=> '1',
				'listable'		=> '0',
				'validacion'	=> '0',
				'opciones'		=> 'id,nombre|geo_departamentos',
				'load'			=> 'provincia||id,nombre|geo_provincias|where id_departamento=',
				'style'			=> 'width:130px;',
				'derecha'		=> '1'
		),
		'provincia'		=>array(
				'campo'			=> 'provincia',
				'label'			=> 'Provincia',
				'tipo'			=> 'hid',
				'combo'			=> '1',
				'listable'		=> '0',
				'validacion'	=> '0',
				'opciones'		=> 'id,nombre|geo_provincias',
				'load'			=> 'distrito||id,nombre|geo_distritos|where id_provincia=',
				'style'			=> 'width:130px;',
				'derecha'		=> '2'
		),
		'distrito'		=>array(
				'campo'			=> 'distrito',
				'label'			=> 'Distrito',
				'tipo'			=> 'hid',
				'combo'			=> '1',
				'listable'		=> '0',
				'validacion'	=> '0',
				'opciones'		=> 'id,nombre|geo_distritos',
				'style'			=> 'width:130px;',
				'derecha'		=> '2'
		),
	],
	// more
	[
		'direccion'		=>array(
				'campo'			=> 'direccion',
				'label'			=> 'Dirección',
				'tipo'			=> 'inp',
				'listable'		=> '0',
				'validacion'	=> '0',
				'width'			=> '150px',
				'style'			=> 'width:300px;',
				'derecha'		=> '1'
		),
		'telefono'		=>array(
				'campo'			=> 'telefono',
				'label'			=> 'Teléfono Casa',
				'tipo'			=> 'inp',
				'listable'		=> '0',
				'validacion'	=> '0',
				'width'			=> '70px',
				'style'			=> 'width:70px;',
				'derecha'		=> '1'
		),
		'celular'=>array(
				'campo'			=> 'celular',
				'label'			=> 'Teléfono Celular',
				'tipo'			=> 'inp',
				'listable'		=> '0',
				'validacion'	=> '0',
				'width'			=> '70px',
				'style'			=> 'width:70px;',
				'derecha'		=> '2'
		),
	]
);

function objeto_tabla_sesion($ID_PERMISO){

	return [
		'usuarios_acceso_nombre'=>array(
			'legend'		=> 'Datos de Acceso',
			'campo'			=> 'usuarios_acceso_nombre',
			'label'			=> 'Usuario',
			'tipo'			=> 'inp',
			'unique'		=> '1',
			'validacion'	=> '1',
			'sync'			=> 'usuarios_acceso,nombre,[usuarios_acceso_nombre],id,[id_sesion]',
			'listable'		=> '1',
			'style'			=> 'width:150px;',
			'width'			=> '150px'
		),
		'usuarios_acceso_password'=>array(
			'campo'			=> 'usuarios_acceso_password',
			'label'			=> 'Password',
			'tipo'			=> 'pas',
			'validacion'	=> '1',
			'sync'			=> 'usuarios_acceso,password,[usuarios_acceso_password],id,[id_sesion]',
			'listable'		=> '1',
			'style'			=> 'width:150px;',
			'width'			=> '150px'
		),
		'usuarios_acceso_id_permisos'=>array(
				'campo'			=> 'usuarios_acceso_id_permisos',
				'tipo'			=> 'inp',
				'sync'			=> 'usuarios_acceso,id_permisos,[usuarios_acceso_id_permisos],id,[id_sesion]',
				'default'		=> $ID_PERMISO,
				'indicador'		=> '1'
		),
		'id_sesion'		=>array(
				'campo'			=> 'id_sesion',
				'label'			=> 'usuario sessión',
				'width'			=> '120px',
				'tipo'			=> 'hid',
				'listable'		=> '0',
				'opciones'		=> 'id,nombre|usuarios_acceso',
				'biunivoca'		=> '1',
				'subform'		=> '1',
				'unique'		=> '1',
				'indicador'		=> '1'
		)

	];

};

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
	'campos'		=>array_merge($objeto_tabla_common['base'],
		[
			'id_grupo'		=>array(
				'campo'			=> 'id_grupo',
				'label' => 'Empresa',
				'tipo'			=> 'hid',
				'listable'		=> '1',
				'validacion'	=> '1',
				'default' => '[id_grupo]',
				'foreig'		=> '1',
				'style'			=> 'width:100px,',
				'opciones'		=> 'id,nombre|empresas|where visibilidad=1 order by nombre asc',
				'load' => 'id_planta||id,nombre|plantas|where visibilidad=1 and id_grupo=[id_grupo] order by nombre desc',
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
				'load'			=> 'id_subarea||id,nombre|subareas|where visibilidad=1 and id_grupo=[id] order by nombre desc',
				'width'			=> '250px',
				'derecha'		=> '2',
				'tip_foreig'	=> '0',
				'tags'			=> '1',
				'queries'		=> '0',
				// 'noedit'		=> '1',
			),

			'id_subarea'		=>array(
				'campo'			=> 'id_subarea',
				'label'			=> 'SubArea',
				'tipo'			=> 'hid',
				'listable'		=> '1',
				'validacion'	=> '1',
				'default'		=> '[id_item]',
				'foreig'		=> '1',
				'style'			=> 'width:150px;',
				'opciones'		=> 'id,nombre|subareas|where visibilidad=1 order by nombre asc',
				'load'			=> 'id_cat||id,nombre|equipos_categorias|where visibilidad=1 and id_grupo=[id] order by nombre desc',
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
				'load'			=> 'id_subcat||id,nombre|equipos_subcategorias|where visibilidad=1 and id_grupo=[id] order by nombre desc',
				'width'			=> '250px',
				'derecha'		=> '2',
				'tip_foreig'	=> '0',
				'tags'			=> '1',
				'queries'		=> '0',
				// 'noedit'		=> '1',
			),

			'id_subcat'		=>array(
				'campo'			=> 'id_subcat',
				'label'			=> 'Sub Categoría',
				'tipo'			=> 'hid',
				'listable'		=> '1',
				'validacion'	=> '1',
				'default'		=> '[id_item]',
				'foreig'		=> '1',
				'style'			=> 'width:150px;',
				'opciones'		=> 'id,nombre|equipos_subcategorias|where visibilidad=1 order by nombre asc',
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
			$objeto_tabla_common['base'],[
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
	'campos'		=>array_merge($objeto_tabla_common['base'],[
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
	'campos'		=>array_merge($objeto_tabla_common['base'],[
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
		'campos'		=>array_merge($objeto_tabla_common['base'],[
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
	'campos'		=>array_merge($objeto_tabla_common['base'],[
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
	'campos'		=>array_merge($objeto_tabla_common['base'],[
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

$objeto_tabla['SUBAREAS']=array(
	'grupo'			=> 'configuracion',
	'titulo'		=> 'subareas',
	'nombre_singular'=> 'subarea',
	'nombre_plural'	=> 'subareas',
	'tabla'			=> 'subareas',
	'archivo'		=> 'subareas',
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
	'menu_label'	=> 'subareas',
	'por_pagina'	=> '100',
	'me'			=> 'SUBAREAS',
	'orden'			=> '1',
	'crear_label'	=> '80px',
	'crear_txt'		=> '660px',
	'filtros_extra'	=> '',
	'campos'		=>array_merge($objeto_tabla_common['base'],[
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
	'campos'		=>array_merge($objeto_tabla_common['base'],[
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
					'label'			=> 'SubArea',
					'tipo'			=> 'hid',
					'listable'		=> '1',
					'validacion'	=> '1',
					'default'		=> '[id_grupo]',
					'foreig'		=> '1',
					'style'			=> 'width:200px,',
					'opciones'		=> 'id,nombre|subareas',
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

$objeto_tabla['EQUIPOS_SUBCATEGORIAS']=array(
	'grupo'			=> 'configuracion',
	'titulo'		=> 'Sub Categorías',
	'nombre_singular'=> 'subcategoria',
	'nombre_plural'	=> 'subcategoria',
	'tabla'			=> 'equipos_subcategorias',
	'archivo'		=> 'equipos_subcategorias',
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
	'menu_label'	=> 'Sub Categorías',
	'por_pagina'	=> '100',
	'me'			=> 'EQUIPOS_SUBCATEGORIAS',
	'orden'			=> '1',
	'crear_label'	=> '80px',
	'crear_txt'		=> '660px',
	'filtros_extra'	=> '',
	'campos'		=>array_merge($objeto_tabla_common['base'],[
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
	'campos'		=>array_merge($objeto_tabla_common['base'],[
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
	'campos'		=>array_merge($objeto_tabla_common['base'],[
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
	'campos'		=>array_merge($objeto_tabla_common['base'],[
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
		$objeto_tabla_person,[

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
	'campos'		=>array_merge($objeto_tabla_common['base'],[
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
	'archivo'		=> 'super_administradores',
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
		$objeto_tabla_person,
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
		$objeto_tabla_person,
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
		$objeto_tabla_person,
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
		$objeto_tabla_person,
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
		$objeto_tabla_person,
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
		$objeto_tabla_person,
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
		$objeto_tabla_person,
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
		$objeto_tabla_person,
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


/*
 ######  ##    ##  ######  ######## ######## ##     ##
##    ##  ##  ##  ##    ##    ##    ##       ###   ###
##         ####   ##          ##    ##       #### ####
 ######     ##     ######     ##    ######   ## ### ##
      ##    ##          ##    ##    ##       ##     ##
##    ##    ##    ##    ##    ##    ##       ##     ##
 ######     ##     ######     ##    ######## ##     ##
*/
$objeto_tabla['VARIABLES']=array(
		'titulo'		=> 'Variables',
		'nombre_singular'=> 'variable',
		'nombre_plural'	=> 'variables',
		'tabla'			=> 'variables',
		'archivo'		=> 'variables',
		'prefijo'		=> 'var',
		'eliminar'		=> '0',
		'ocultar'		=> '0',
		'crear'			=> '0',
		'editar'		=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'crear_label'	=> '100px',
		'crear_txt'		=> '400px',
		'menu'			=> '1',
		'menu_label'	=> 'Variables',
		'me'			=> 'VARIABLES',
		'orden'			=> '1',
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
				'variable'		=>array(
						'campo'			=> 'variable',
						'label'			=> 'Variable',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'constante'		=> '1',
						'width'			=> '300px'
				),
				'valor'			=>array(
						'campo'			=> 'valor',
						'label'			=> 'Valor',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '300px'
				),
				'web'			=>array(
						'campo'			=> 'web',
						'tipo'			=> 'web'
				)
		),
		'grupo'			=> 'contenidos',
		'web'			=> '1',
		'disabled'		=> '1'
);

$objeto_tabla['USUARIOS_ACCESO']=array(
		'grupo'			=> 'sistema',
		'alias_grupo'	=> 'core',
		'titulo'		=> 'Administración de Acceso de Usuarios',
		'nombre_singular'=> 'usuario',
		'nombre_plural'	=> 'usuarios',
		'tabla'			=> 'usuarios_acceso',
		'archivo'		=> 'usuarios_acceso',
		'prefijo'		=> 'usu',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '1',
		'menu'			=> '0',
		'menu_label'	=> 'usuarios',
		'me'			=> 'USUARIOS_ACCESO',
		'orden'			=> '1',
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
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'sesion_login'	=> '1',
						'like'			=> '1'
				),
				'password'		=>array(
						'campo'			=> 'password',
						'label'			=> 'Password',
						'tipo'			=> 'pas',
						'listable'		=> '1',
						'validacion'	=> '1',
						'sesion_password'=> '1',
						'width'			=> '200px'
				),
				'nombre_completo'=>array(
						'campo'			=> 'nombre_completo',
						'label'			=> 'Nombre Completo',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'sesion_complete'=> '1',
						'width'			=> '200px',
						'like'			=> '1'
				),
				'id_permisos'	=>array(
						'campo'			=> 'id_permisos',
						'label'			=> 'Permisos',
						'width'			=> '120px',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'opciones'		=> 'id,nombre|usuarios_permisos',
						'sesion_permisos'=> '1',
						'tip_foreig'	=> '1',
						'queries'		=> '1'
				),

		),
		'importar_csv'	=> '0',
		'disabled'		=> '0'
);

$objeto_tabla['USUARIOS_PERMISOS']=array(
		'grupo'			=> 'sistema',
		'titulo'		=> 'Permisos de Usuarios',
		'nombre_singular'=> 'permiso',
		'nombre_plural'	=> 'permisos',
		'tabla'			=> 'usuarios_permisos',
		'archivo'		=> 'usuarios_permisos',
		'prefijo'		=> 'usuper',
		'eliminar'		=> '0',
		'editar'		=> '1',
		'buscar'		=> '0',
		'menu'			=> '0',
		'menu_label'	=> 'Permisos',
		'me'			=> 'USUARIOS_PERMISOS',
		'orden'			=> '1',
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
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'unique'		=> '1',
						'width'			=> '200PX'
				),
				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Propiedades',
						'tipo'			=> 'txt',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '700px',
						'style'			=> 'width:500px;height:300px;'
				),
				'multiusuario'	=>array(
						'campo'			=> 'multiusuario',
						'label'			=> 'Multiusuario',
						'width'			=> '100px',
						'listable'		=> '1',
						'tipo'			=> 'com',
						'opciones'		=>array(
								'2'			=> 'Multi Grupo',
								'1'			=> 'Multi Total',
								'0'			=> 'Individual',
								'3'			=> 'Registro'
						),
						'default'		=> '0',
						'derecha'		=> '2'
				)
		),
		'importar_csv'	=> '0',
		'disabled'		=> '0',
		'edicion_completa'=> '1',
		'visibilidad'	=> '0',
		'calificacion'	=> '0'
);

$objeto_tabla['CONFIGURACIONES_ROOT']=array(
		'grupo'			=> 'sistema',
		'titulo'		=> 'Configuración root',
		'nombre_singular'=> 'variable',
		'nombre_plural'	=> 'variables',
		'tabla'			=> 'configuraciones_root',
		'archivo'		=> 'configuraciones_root',
		'prefijo'		=> 'conr',
		'eliminar'		=> '0',
		'ocultar'		=> '0',
		'crear'			=> '1',
		'editar'		=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'crear_label'	=> '100px',
		'crear_txt'		=> '400px',
		'menu'			=> '0',
		'menu_label'	=> 'Configuración root',
		'me'			=> 'CONFIGURACIONES_ROOT',
		'orden'			=> '1',
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
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'variable'		=>array(
						'campo'			=> 'variable',
						'label'			=> 'Variable',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'constante'		=> '1',
						'width'			=> '300px'
				),
				'valor'			=>array(
						'campo'			=> 'valor',
						'label'			=> 'Valor',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '300px'
				)
		)
);

$objeto_tabla['CONFIGURACIONES']=array(
		'grupo'			=> 'sistema',
		'titulo'		=> 'Configuración',
		'nombre_singular'=> 'variable',
		'nombre_plural'	=> 'variables',
		'tabla'			=> 'configuraciones',
		'archivo'		=> 'configuraciones',
		'prefijo'		=> 'con',
		'eliminar'		=> '0',
		'ocultar'		=> '0',
		'crear'			=> '0',
		'editar'		=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'crear_label'	=> '100px',
		'crear_txt'		=> '400px',
		'menu'			=> '0',
		'menu_label'	=> 'Configuración',
		'me'			=> 'CONFIGURACIONES',
		'orden'			=> '1',
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
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'variable'		=>array(
						'campo'			=> 'variable',
						'label'			=> 'Variable',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'constante'		=> '1',
						'width'			=> '300px'
				),
				'valor'			=>array(
						'campo'			=> 'valor',
						'label'			=> 'Valor',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '300px'
				)
		)
);

$objeto_tabla['WEB_CONFIG']=array(
		'grupo'			=> 'sistema',
		'titulo'		=> 'Webs',
		'nombre_singular'=> 'web',
		'nombre_plural'	=> 'webs',
		'tabla'			=> 'web_config',
		'archivo'		=> 'web_config',
		'prefijo'		=> 'webcon',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '0',
		'menu'			=> '0',
		'menu_label'	=> 'Webs',
		'me'			=> 'WEB_CONFIG',
		'orden'			=> '1',
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
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '300px'
				),
				'proyecto'		=>array(
						'campo'			=> 'proyecto',
						'label'			=> 'ID Proyecto',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				)
		),
		'importar_csv'	=> '0',
		'disabled'		=> '0'
);

/*
##     ## ########  ####
##     ## ##     ##  ##
##     ## ##     ##  ##
##     ## ########   ##
##     ## ##     ##  ##
##     ## ##     ##  ##
 #######  ########  ####
*/
$objeto_tabla['GEO_DEPARTAMENTOS']=array(
		'titulo'		=> 'Departamentos',
		'nombre_singular'=> 'departamento',
		'nombre_plural'	=> 'departamentos',
		'tabla'			=> 'geo_departamentos',
		'archivo'		=> 'geo_departamentos',
		'archivo_hijo'	=> 'geo_provincias',
		'prefijo'		=> 'geodep',
		'eliminar'		=> '0',
		'editar'		=> '0',
		'crear'			=> '0',
		'visibilidad'	=> '1',
		'altura_listado'	=> 'auto',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Departamentos',
		'por_pagina'	=> '100',
		'me'			=> 'GEO_DEPARTAMENTOS',
		'orden'			=> '0',
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
						'controles'		=> '<a href="custom/geo_provincias.php?id=[id]">{select count(*) from geo_provincias where id_departamento=[id]} provincias</a>'
				),
				'geo'			=>array(
						'campo'			=> 'geo',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'disabled'		=> '1'
				)
		),
		'grupo'			=> 'geoposicion',
		'width_listado'	=> '400px',
		'set_fila_fijo'	=> '1',
		'edicion_rapida'	=> '0',
		'edicion_completa'=> '0'
);

$objeto_tabla['GEO_PROVINCIA']=array(
		'titulo'		=> '<a href="custom/geo_departamentos.php">Departamentos del Perú</a>  -
                      Provincias de {select nombre from geo_departamentos where id=[id]}',
		'nombre_singular'=> 'provincia',
		'nombre_plural'	=> 'provincias',
		'tabla'			=> 'geo_provincias',
		'archivo'		=> 'geo_provincias',
		'archivo_hijo'	=> 'geo_distritos',
		'prefijo'		=> 'geodis',
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
		'me'			=> 'GEO_PROVINCIA',
		'orden'			=> '1',
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
						'controles'		=> '<a href="custom/geo_distritos.php?id=[id]">{select count(*) from geo_distritos where id_provincia=[id]} distritos</a>'
				),
				'id_departamento'=>array(
						'campo'			=> 'id_departamento',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'validacion'	=> '0',
						'foreig'		=> '1',
						'default'		=> '[id]'
				),
				'geo'			=>array(
						'campo'			=> 'geo',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'disabled'		=> '1'
				)
		),
		'grupo'			=> 'geoposicion',
		'edicion_rapida'	=> '0',
		'set_fila_fijo'	=> '1',
		'width_listado'	=> '400px'
);

$objeto_tabla['GEO_DISTRITOS']=array(
		'titulo'		=> '<a href="custom/geo_departamentos.php">Departamentos del Perú</a>
                          - <a href="custom/geo_provincias.php?id={select id_departamento from geo_provincias where id=[id]}">Provincias de {select geo_departamentos.nombre from geo_departamentos,geo_provincias where geo_departamentos.id=geo_provincias.id_departamento and geo_provincias.id=[id]}</a>
                          - Distritos de {select nombre from geo_provincias where id=[id]}',
		'nombre_singular'=> 'distrito',
		'nombre_plural'	=> 'distritos',
		'tabla'			=> 'geo_distritos',
		'archivo'		=> 'geo_distritos',
		'prefijo'		=> 'geodis',
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
		'me'			=> 'GEO_DISTRITOS',
		'orden'			=> '1',
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
				'id_provincia'	=>array(
						'campo'			=> 'id_provincia',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'validacion'	=> '0',
						'default'		=> '[id]',
						'foreig'		=> '1'
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
		'grupo'			=> 'geoposicion',
		'width_listado'	=> '400px',
		'set_fila_fijo'	=> '1',
		'edicion_rapida'	=> '0',
		'edicion_completa'=> '0'
);

