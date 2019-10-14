<?php


$objeto_tabla_common=[
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
