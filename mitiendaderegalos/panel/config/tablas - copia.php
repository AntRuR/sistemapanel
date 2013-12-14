<?php //á

$objeto_tabla['PROYECTOS']=array(
		'titulo'		=> 'Proyectos',
		'nombre_singular'=> 'proyecto',
		'nombre_plural'	=> 'proyectos',
		'tabla'			=> 'proyectos',
		'archivo'		=> 'proyectos',
		'prefijo'		=> 'proy',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'crear_label'	=> '110px',
		'crear_txt'		=> '600px',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'crear_pruebas'	=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Proyectos',
		'controles'		=> '<a class="linkstitu" href="base/actualizar_panel.php">actualizar todos los paneles</a>

<a class="linkstitu" href="base/proceso_analisis.php">procesar análisis</a>							
						',
		'exportar_excel'	=> '1',
		'por_pagina'	=> '30',
		'me'			=> 'PROYECTOS',
		'orden'			=> '1',
		'order_by'		=> 'fecha_acceso desc, id desc',
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

				'logo'			=>array(
						'campo'			=> 'logo',
						'label'			=> 'foto',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '0',
						'prefijo'		=> 'proy',
						'carpeta'		=> 'proy_imas',
						'tamanos'		=> '100x100,400x60',
						'tamano_listado'	=> '1',
						'controles'		=> '<a href="base/actualizar_logo.php?id=[id]">Up</a>',
						'enlace'		=> 'base/ir_a_panel.php?id=[id]'
				),

				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '150px',
						'enlace'		=> 'base/ir_a_panel.php?id=[id]',
						'controles'		=> '<a style="color:purple;" href="base/crear_hosting.php?id=[id]">crear hosting</a>
<a href="base/actualizar_panel.php?id=[id]">Update</a> 
<a style="color:green" href="base/crear_config.php?id=[id]">Crear Config</a> 
<a style="color:blue" href="base/startup.php?id=[id]">Crear Web</a>',
						'like'			=> '1',
						'style'			=> 'width:150px;',
						'unique'		=> '0',
						'derecha'		=> '1'
				),

				'carpeta'		=>array(
						'campo'			=> 'carpeta',
						'label'			=> 'CARPETA',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '120px',
						'enlace'		=> 'base/ir_a_panel.php?id=[id]',
						'like'			=> '1',
						'style'			=> 'width:200px;',
						'derecha'		=> '2'
				),

				'url'			=>array(
						'campo'			=> 'url',
						'label'			=> 'Url',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '120px',
						'enlace'		=> 'http://[enlace]/panel',
						'like'			=> '1',
						'style'			=> 'width:200px;',
						'derecha'		=> '2'
				),

				'dominio'		=>array(
						'campo'			=> 'dominio',
						'label'			=> 'FTP HOST',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '150px',
						'like'			=> '1',
						'style'			=> 'width:200px;',
						'derecha'		=> '1'
				),

				'ftp_user'		=>array(
						'campo'			=> 'ftp_user',
						'label'			=> 'FTP USER',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '150px',
						'derecha'		=> '2',
						'style'			=> 'width:100px;'
				),

				'ftp_pass'		=>array(
						'campo'			=> 'ftp_pass',
						'label'			=> 'FTP PASS',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '150px',
						'derecha'		=> '2',
						'style'			=> 'width:100px;'
				),

				'ftp_root'		=>array(
						'campo'			=> 'ftp_root',
						'label'			=> 'FTP ROOT',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '150px',
						'default'		=> '/www/',
						'style'			=> 'width:60px;',
						'derecha'		=> '2'
				),

				'descripcion'	=>array(
						'campo'			=> 'descripcion',
						'label'			=> 'Descripcion',
						'tipo'			=> 'txt',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '150px',
						'style'			=> 'width:300px;height:50px;'
				),

				'FORMATO'		=>array(
						'campo'			=> 'FORMATO',
						'label'			=> 'Formato',
						'tipo'			=> 'com',
						'listable'		=> '1',
						'validacion'	=> '1',
						'opciones'		=>array(
								'BASE'			=> 'BASE',
								'CSPV'			=> 'CSPV',
								'CPV'			=> 'CPV',
								'PUBLICACIONES'	=> 'PUBLICACIONES',
								'INMOBILIARIA'	=> 'INMOBILIARIA',
								'CONTENIDO'		=> 'CONTENIDO'
						),
						'default'		=> 'BASE',
						'style'			=> 'width:100px;'
				),

				'seguro'		=>array(
						'campo'			=> 'seguro',
						'label'			=> 'Poner seguridad',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'si',
								'0'			=> 'no'
						),
						'default'		=> '0',
						'width'			=> '40px'
				),

				'para_subir'	=>array(
						'campo'			=> 'para_subir',
						'label'			=> 'Para subir',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'si',
								'0'			=> 'no'
						),
						'default'		=> '0',
						'width'			=> '40px'
				),

				'fecha_acceso'	=>array(
						'campo'			=> 'fecha_acceso',
						'label'			=> 'último acceso',
						'tipo'			=> 'fch',
						'width'			=> '300px',
						'listable'		=> '1',
						'validacion'	=> '1',
						'formato'		=> '7',
						'default'		=> 'now()'
				)
		),
		'disabled'		=> '0',
		'ocultar'		=> '0',
		'expandir_vertical'=> '0',
		'edicion_rapida'	=> '1'
);

/******************************************************************************************************************************************************/


$objeto_tabla['PAGINAS']=array(
		'titulo'		=> 'Páginas',
		'nombre_singular'=> 'página',
		'nombre_plural'	=> 'páginas',
		'tabla'			=> 'paginas',
		'archivo'		=> 'paginas',
		'prefijo'		=> 'pag',
		'eliminar'		=> '1',
		'crear'			=> '1',
		'editar'		=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '0',
		'crear_label'	=> '60px',
		'crear_txt'		=> '550px',
		'menu_label'	=> 'Páginas',
		'me'			=> 'PAGINAS',
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

				'pagina'		=>array(
						'campo'			=> 'pagina',
						'label'			=> 'Página',
						'tipo'			=> 'inp',
						'unique'		=> '1',
						'listable'		=> '1',
						'validacion'	=> '1',
						'constante'		=> '1'
				),

				'titulo'		=>array(
						'campo'			=> 'titulo',
						'label'			=> 'Título',
						'tipo'			=> 'inp',
						'unique'		=> '1',
						'listable'		=> '1',
						'validacion'	=> '1'
				),

				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Texto',
						'tipo'			=> 'html',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '300px'
				),

				'foto'			=>array(
						'campo'			=> 'foto',
						'label'			=> 'Foto',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '0',
						'prefijo'		=> 'pag',
						'carpeta'		=> 'pag_imas',
						'tamanos'		=> '70x70,400x300',
						'tamano_listado'	=> '1'
				),

				'foto_descripcion'=>array(
						'campo'			=> 'foto_descripcion',
						'label'			=> 'Descripción de foto',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '207px'
				)
		),
		'disabled'		=> '0'
);

/******************************************************************************************************************************************************/


$objeto_tabla['FEEDBACK']=array(
		'titulo'		=> 'Feedback',
		'nombre_singular'=> 'comentario',
		'nombre_plural'	=> 'comentarios',
		'tabla'			=> 'feedback',
		'archivo'		=> 'feedback',
		'prefijo'		=> 'fee',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'crear'			=> '0',
		'crear_label'	=> '100px',
		'crear_txt'		=> '400px',
		'menu'			=> '1',
		'menu_label'	=> 'Feedback',
		'me'			=> 'FEEDBACK',
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

				'proyecto'		=>array(
						'campo'			=> 'proyecto',
						'label'			=> 'Poyecto',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '300px'
				),

				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '300px'
				),

				'email'			=>array(
						'campo'			=> 'email',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '300px'
				),

				'motivo'		=>array(
						'campo'			=> 'motivo',
						'label'			=> 'Motivo',
						'tipo'			=> 'com',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'Error',
								'2'			=> 'Idea',
								'3'			=> 'Otro'
						)
				),

				'comentario'	=>array(
						'campo'			=> 'comentario',
						'label'			=> 'Comentario',
						'tipo'			=> 'txt',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '300px'
				)
		)
);

/******************************************************************************************************************************************************/


$objeto_tabla['USUARIOS_ACCESO']=array(
		'titulo'		=> 'Administración de Acceso de Usuarios',
		'nombre_singular'=> 'usuario',
		'nombre_plural'	=> 'usuarios',
		'tabla'			=> 'usuarios_acceso',
		'archivo'		=> 'usuarios_acceso',
		'prefijo'		=> 'usu',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '0',
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

				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'sesion_login'	=> '1'
				),

				'password'		=>array(
						'campo'			=> 'password',
						'label'			=> 'Password',
						'tipo'			=> 'pas',
						'listable'		=> '1',
						'validacion'	=> '1',
						'sesion_password'=> '1'
				)
		),
		'disabled'		=> '0'
);

/******************************************************************************************************************************************************/




?>