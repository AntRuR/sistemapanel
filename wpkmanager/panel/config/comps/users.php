<?php
unset($objeto_tabla_comp);


$objecto_tabla_common['person']['config']=[

	'eliminar'		=> '0',
	'editar'		=> '1',
	'crear'			=> '1',
	'crear_quick'	=> '0',
	'altura_listado'	=> 'auto',
	'visibilidad'	=> '0',
	'buscar'		=> '0',
	'bloqueado'		=> '0',
	'menu'			=> '1',
	'orden'			=> '1',
	'width_listado'	=> '800px',
	'edicion_completa'=> '1',
	'expandir_vertical'=> '0',
	'edicion_rapida'	=> '0',
	'calificacion'	=> '0',
	// 'set_fila_fijo'	=> '3',
	'disabled'		=> '0'

];

$objeto_tabla_common['person']['campos']=array_merge(
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
	chain_campos(
		$objeto_tabla,
		$objeto_chain['ubi']
	),	
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



$objeto_tabla_comp['SUPER_ADMINISTRADORES']=array_merge(
	[
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
		'archivo_sub'	=> 'usuarios_acceso',
		'campos'		=>array_merge(
			$objeto_tabla_common['base'],
			$objeto_tabla_common['person']['campos'],
			objeto_tabla_sesion(101)
		),		
	],
	$objecto_tabla_common['person']['config']

);

$objeto_tabla_comp['ADMINISTRADORES']=array_merge(
	[
		'grupo'			=> 'configuracion',
		'me'			=> 'ADMINISTRADORES',
		'titulo'		=> 'Administradores',
		'menu_label'	=> 'Administradores',
		'nombre_singular'=> 'administrador',
		'nombre_plural'	=> 'administradores',
		'tabla'			=> 'administradores',
		'archivo'		=> 'administradores',
		'prefijo'		=> 'adm',
		'archivo_sub'	=> 'usuarios_acceso',
		'campos'		=>array_merge(
			$objeto_tabla_common['base'],
			$objeto_tabla_common['person']['campos'],
			objeto_tabla_sesion(102)
		),	
	],
	$objecto_tabla_common['person']['config']
);

$objeto_tabla_comp['TECNICOS']=array_merge(
	[
		'grupo'			=> 'configuracion',
		'me'			=> 'TECNICOS',
		'titulo'		=> 'técnicos',
		'menu_label'	=> 'técnicos',
		'nombre_singular'=> 'técnico',
		'nombre_plural'	=> 'técnicos',
		'tabla'			=> 'tecnicos',
		'archivo'		=> 'tecnicos',
		'prefijo'		=> 'tec',
		'archivo_sub'	=> 'usuarios_acceso',
		'campos'		=>array_merge(
			$objeto_tabla_common['base'],
			$objeto_tabla_common['person']['campos'],
			objeto_tabla_sesion(103)
		),
	],
	$objecto_tabla_common['person']['config']
);

$objeto_tabla_comp['LOGISTICA']=array_merge(
	[
		'grupo'			=> 'configuracion',
		'me'			=> 'LOGISTICA',
		'titulo'		=> 'gerentes',
		'menu_label'	=> 'Usuarios de Logística',
		'nombre_singular'=> 'usuario de logística',
		'nombre_plural'	=> 'usuarios de logística',
		'tabla'			=> 'logistica_users',
		'archivo'		=> 'logistica_users',
		'prefijo'		=> 'log_user',
		'archivo_sub'	=> 'usuarios_acceso',
		'campos'		=>array_merge(
			$objeto_tabla_common['base'],
			$objeto_tabla_common['person']['campos'],
			objeto_tabla_sesion(104)
		),
	],
	$objecto_tabla_common['person']['config']
);
	
//! BY EMPRESA
$objeto_tabla_comp['GERENTES']=array_merge(
	[
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
			$objeto_tabla_common['person']['campos'],
			objeto_tabla_sesion(105)
		),
	],
	$objecto_tabla_common['person']['config']
);

$objeto_tabla_comp['GERENTES_PLANTA']=array_merge(
	[
		'grupo'			=> 'configuracion',
		'me'			=> 'GERENTES_PLANTA',
		'titulo'		=> 'Gerentes de planta',
		'menu_label'	=> 'Gerentes de planta',
		'nombre_singular'=> 'gerente de planta',
		'nombre_plural'	=> 'gerentes de planta',
		'tabla'			=> 'gerentes_planta',
		'archivo'		=> 'gerentes_planta',
		'prefijo'		=> 'ger_plan',
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
			$objeto_tabla_common['person']['campos'],
			objeto_tabla_sesion(106)
		),
	],
	$objecto_tabla_common['person']['config']
);

$objeto_tabla_comp['JEFES_PLANTA']=array_merge(
	[
		'grupo'			=> 'configuracion',
		'me'			=> 'JEFES_PLANTA',
		'titulo'		=> 'Jefes de Planta/Producción',
		'menu_label'	=> 'Jefes de Planta/Producción',
		'nombre_singular'=> 'jefe de planta/producción',
		'nombre_plural'	=> 'jefes de planta/producción',
		'tabla'			=> 'jefes_planta',
		'archivo'		=> 'jefes_planta',
		'prefijo'		=> 'jef_plan',
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
			$objeto_tabla_common['person']['campos'],
			objeto_tabla_sesion(107)
		),
	],
	$objecto_tabla_common['person']['config']
);

$objeto_tabla_comp['JEFES_MANTENIMIENTO']=array_merge(
	[
		'grupo'			=> 'configuracion',
		'me'			=> 'JEFES_MANTENIMIENTO',
		'titulo'		=> 'Jefes de Mantenimiento',
		'menu_label'	=> 'Jefes de Mantenimiento',
		'nombre_singular'=> 'jefe de mantenimiento',
		'nombre_plural'	=> 'jefes de mantenimiento',
		'tabla'			=> 'jefes_mantenimiento',
		'archivo'		=> 'jefes_mantenimiento',
		'prefijo'		=> 'jef_man',
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
			$objeto_tabla_common['person']['campos'],
			objeto_tabla_sesion(108)
		),
	],
	$objecto_tabla_common['person']['config']
);

return $objeto_tabla_comp;