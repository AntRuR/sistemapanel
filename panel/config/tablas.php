<?php //á

$objeto_tabla['PROVEEDOR_TARIFARIOS']=array(
		'me'			=> 'PROVEEDOR_TARIFARIOS',
		'titulo'		=> 'Tarifarios',
		'nombre_singular'=> 'documento',
		'nombre_plural'	=> 'documentos',
		'tabla'			=> 'proveedor_tarifarios',
		'archivo'		=> 'proveedor_tarifarios',
		'prefijo'		=> 'protar',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '1',
		'crear_label'	=> '110px',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Tarifarios',
		'por_pagina'	=> '40',
		'orden'			=> '0',
		'crear_txt'		=> '640px',
		'altura_listado'	=> 'auto',
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
						'label'			=> 'nombre',
						'tipo'			=> 'inp',
						'unique'		=> '1',
						'listable'		=> '1',
						'validacion'	=> '1',
						'constante'		=> '1',
						'width'			=> '100px',
						'style'			=> 'width:100px;'
								),

								'fichero'		=>array(
								'campo'			=> 'fichero',
								'label'			=> 'Archivo',
								'tipo'			=> 'sto',
								'width'			=> '150px',
								'style'			=> 'width:200px;',
								'listable'		=> '1',
								'validacion'	=> '0',
								'prefijo'		=> 'doc',
								'carpeta'		=> 'doc_imas'
										)
		),
		'grupo'			=> 'productos',
		'edicion_completa'=> '0'
);

/******************************************************************************************************************************************************/


$objeto_tabla['PRODUCTOS_ITEMS']=array(
		'me'			=> 'PRODUCTOS_ITEMS',
		'titulo'		=> 'Productos_items',
		'nombre_singular'=> 'productos_item',
		'nombre_plural'	=> 'productos_items',
		'tabla'			=> 'productos_items',
		'archivo'		=> 'productos_items',
		'archivo_hijo'	=> 'productos_fotos',
		'prefijo'		=> 'proite',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '1',
		'calificacion'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Productos_items',
		'por_pagina'	=> '40',
		'orden'			=> '0',
		'crear_label'	=> '110px',
		'crear_txt'		=> '640px',
		'altura_listado'	=> 'auto',
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
						'width'			=> '200px',
						'style'			=> 'width:200px;',
						'validacion'	=> '1',
						'unique'		=> '1',
						'listable'		=> '1'
				)
		),
		'grupo'			=> 'productos'
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
		'disabled'		=> '0',
		'grupo'			=> 'contenidos'
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
		'menu'			=> '1',
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
		'disabled'		=> '0',
		'grupo'			=> 'sistema',
		'edicion_completa'=> '0',
		'edicion_rapida'	=> '1',
		'expandir_vertical'=> '0'
);

/******************************************************************************************************************************************************/


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
		'crear_label'	=> '100px',
		'crear_txt'		=> '600px',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '1',
		'duplicar'		=> '1',
		'bloqueado'		=> '0',
		'crear_pruebas'	=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Proyectos',
		'controles'		=> '<a href="base/actualizar_panel.php">actualizar todos los paneles</a>
		<a href="base/proceso_analisis.php">procesar análisis</a>',
		'exportar_excel'	=> '1',
		'por_pagina'	=> '50',
		'me'			=> 'PROYECTOS',
		'orden'			=> '1',
		'order_by'		=> 'fecha_acceso desc',
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

				'logo'			=>array(
						'campo'			=> 'logo',
						'label'			=> 'foto',
						'tipo'			=> 'img',
						'listable'		=> '0',
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
						'width'			=> '160px',
						'enlace'		=> 'base/ir_a_panel.php?id=[id]',
						'controles'		=> '<a style="color:purple;" href="base/crear_hosting.php?id=[id]">Host</a>
						<a href="base/actualizar_panel.php?id=[id]">Panel</a>
						<a style="color:green;" href="pop.php?app=crear_config&id=[id]">Config</a>
						<a style="color:red;" href="pop.php?app=startup&id=[id]">Web</a>',
						'like'			=> '1',
						'style'			=> 'width:180px;',
						'unique'		=> '0',
						'derecha'		=> '1'
				),

				'carpeta'		=>array(
						'campo'			=> 'carpeta',
						'label'			=> 'DIR',
						'tipo'			=> 'inp',
						'validacion'	=> '1',
						'width'			=> '100px',
						'enlace'		=> '../[enlace]',
						'like'			=> '1',
						'style'			=> 'width:180px;',
						'derecha'		=> '2',
						'listable'		=> '1'
				),

				'url'			=>array(
						'campo'			=> 'url',
						'label'			=> 'Url',
						'tipo'			=> 'inp',
						'validacion'	=> '0',
						'width'			=> '120px',
						'enlace'		=> '',
						'like'			=> '1',
						'style'			=> 'width:200px;',
						'derecha'		=> '2',
						'listable'		=> '1'
				),

				'dominio'		=>array(
						'campo'			=> 'dominio',
						'label'			=> 'ftp host',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '100px',
						'like'			=> '1',
						'style'			=> 'width:180px;',
						'derecha'		=> '1'
				),

				'ftp_user'		=>array(
						'campo'			=> 'ftp_user',
						'label'			=> 'ftp user',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '100px',
						'derecha'		=> '2',
						'style'			=> 'width:100px;'
				),

				'ftp_pass'		=>array(
						'campo'			=> 'ftp_pass',
						'label'			=> 'ftp pass',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '100px',
						'derecha'		=> '2',
						'style'			=> 'width:100px;'
				),

				'ftp_root'		=>array(
						'campo'			=> 'ftp_root',
						'label'			=> 'ftp root',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '100px',
						'default'		=> '/www/',
						'style'			=> 'width:60px;',
						'derecha'		=> '2'
				),

				'email'			=>array(
						'campo'			=> 'email',
						'label'			=> 'email',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '150px',
						'derecha'		=> '2',
						'style'			=> 'width:150px;'
				),

				'descripcion'	=>array(
						'campo'			=> 'descripcion',
						'label'			=> 'Descripcion',
						'tipo'			=> 'txt',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '150px',
						'style'			=> 'width:600px;height:50px;'
				),

				'semilla'		=>array(
						'campo'			=> 'semilla',
						'label'			=> 'Semilla',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'validacion'	=> '1',
						'opciones'		=> 'id,nombre|proyectos|where para_subir=1',
						'style'			=> 'width:100px;',
						'derecha'		=> '1'
				),

				'tipo'			=>array(
						'campo'			=> 'tipo',
						'label'			=> 'Tipo',
						'tipo'			=> 'com',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'master-heredero',
								'2'			=> 'esclavo'
						),
						'default'		=> '1',
						'width'			=> '40px',
						'derecha'		=> '2'
				),

				'seguro'		=>array(
						'campo'			=> 'seguro',
						'label'			=> 'secure',
						'tipo'			=> 'bit',
						'radio'			=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'si',
								'0'			=> 'no'
						),
						'default'		=> '0',
						'width'			=> '40px',
						'derecha'		=> '2'
				),

				'para_subir'	=>array(
						'campo'			=> 'para_subir',
						'label'			=> 'develop',
						'tipo'			=> 'bit',
						'radio'			=> '1',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'si',
								'0'			=> 'no'
						),
						'default'		=> '0',
						'width'			=> '40px',
						'derecha'		=> '2'
				),

				'firma'			=>array(
						'campo'			=> 'firma',
						'label'			=> 'Firma',
						'tipo'			=> 'com',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'Prodiserv',
								'2'			=> 'Websentidos',
								'3'			=> '3DProyecta'
						),
						'default'		=> '1',
						'width'			=> '40px',
						'derecha'		=> '2',
						'listable'		=> '1'
				),

				'fecha_acceso'	=>array(
						'campo'			=> 'fecha_acceso',
						'label'			=> 'acceso',
						'tipo'			=> 'fch',
						'width'			=> '300px',
						'listable'		=> '0',
						'validacion'	=> '0',
						'formato'		=> '7',
						'default'		=> 'now()'
				),

				'archivo'		=>array(
						'campo'			=> 'archivo',
						'label'			=> 'archivo',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '150px',
						'derecha'		=> '1',
						'style'			=> 'width:300px;'
				)
		),
		'disabled'		=> '0',
		'expandir_vertical'=> '0',
		'edicion_rapida'	=> '1',
		'grupo'			=> 'proyectos',
		'calificacion'	=> '1',
		'edicion_completa'=> '1',
		'importar_csv'	=> '0',
		'crear_quick'	=> ''
);

/******************************************************************************************************************************************************/


$objeto_tabla['ESTRUCTURA_TIPOS']=array(
		'me'			=> 'ESTRUCTURA_TIPOS',
		'titulo'		=> 'Tipos',
		'nombre_singular'=> 'tipo',
		'nombre_plural'	=> 'tipos',
		'tabla'			=> 'estructura_tipos',
		'archivo'		=> 'estructura_tipos',
		'prefijo'		=> 'esttip',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '0',
		'calificacion'	=> '0',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Tipos',
		'por_pagina'	=> '40',
		'orden'			=> '0',
		'crear_label'	=> '110px',
		'crear_txt'		=> '640px',
		'altura_listado'	=> 'auto',
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
						'width'			=> '200px',
						'style'			=> 'width:200px;',
						'validacion'	=> '1',
						'listable'		=> '1'
				),

				'dir'			=>array(
						'campo'			=> 'dir',
						'label'			=> 'Dir',
						'tipo'			=> 'inp',
						'width'			=> '100px',
						'style'			=> 'width:200px;',
						'validacion'	=> '1',
						'listable'		=> '1'
				)
		),
		'grupo'			=> 'proyectos',
		'edicion_completa'=> '0',
		'edicion_rapida'	=> '1',
		'crear_quick'	=> '1',
		'width_listado'	=> '500px',
		'crear_pruebas'	=> '0'
);

/******************************************************************************************************************************************************/


$objeto_tabla['ESTRUCTURA']=array(
		'me'			=> 'ESTRUCTURA',
		'titulo'		=> 'Estructura',
		'nombre_singular'=> 'estructura',
		'nombre_plural'	=> 'estructura',
		'tabla'			=> 'estructura',
		'archivo'		=> 'estructura',
		'prefijo'		=> 'est',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'edicion_rapida'	=> '1',
		'edicion_completa'=> '0',
		'crear'			=> '1',
		'visibilidad'	=> '0',
		'calificacion'	=> '0',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Estructura',
		'por_pagina'	=> '50',
		'orden'			=> '0',
		'crear_label'	=> '110px',
		'crear_txt'		=> '640px',
		'altura_listado'	=> 'auto',
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

				'id_proyecto'	=>array(
						'campo'			=> 'id_proyecto',
						'label'			=> 'source',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'default'		=> '[id_proyecto]',
						'foreig'		=> '1',
						'opciones'		=> 'id,nombre|proyectos|where para_subir=1',
						'width'			=> '120px',
						'style'			=> 'width:200px;'
				),

				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'width'			=> '120px',
						'style'			=> 'width:200px;',
						'validacion'	=> '1',
						'unique'		=> '0',
						'listable'		=> '1',
						'controles'		=> '
						<a rel="subs" href="custom/estructura_objetos.php?id=[id]">{select count(*) from estructura_objetos where id_item=[id]} Objetos</a>
						<a rel="subs" href="custom/estructura_modelos.php?id=[id]">{select count(*) from estructura_modelos where id_item=[id]} Modelos</a>
						<a rel="subs" href="custom/estructura_vistas.php?id=[id]">{select count(*) from estructura_vistas where id_item=[id]} Vistas</a>
						<a href="base/importar_estructura.php?id=[id]" class="red">import</a>
						<a href="base/exportar_estructura.php?id=[id]" class="green">export</a>
						'
				),

				'id_tipo'		=>array(
						'campo'			=> 'id_tipo',
						'label'			=> 'Tipo',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '1',
						'default'		=> '[id_tipo]',
						'foreig'		=> '1',
						'opciones'		=> 'id,nombre|estructura_tipos',
						'width'			=> '80px',
						'style'			=> 'width:200px;'
				)
		),
		'grupo'			=> 'proyectos',
		'crear_quick'	=> '0',
		'group'			=> 'id_tipo',
		'width_listado'	=> ''
);

/******************************************************************************************************************************************************/


$objeto_tabla['ESTRUCTURA_OBJECTOS']=array(
		'me'			=> 'ESTRUCTURA_OBJECTOS',
		'titulo'		=> 'Objetos',
		'nombre_singular'=> 'objeto',
		'nombre_plural'	=> 'objetos',
		'tabla'			=> 'estructura_objetos',
		'archivo'		=> 'estructura_objetos',
		'prefijo'		=> 'estobj',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '0',
		'calificacion'	=> '0',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Objetos',
		'por_pagina'	=> '40',
		'orden'			=> '0',
		'crear_label'	=> '60px',
		'crear_txt'		=> '640px',
		'altura_listado'	=> 'auto',
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

				'id_item'		=>array(
						'campo'			=> 'id_item',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'validacion'	=> '0',
						'default'		=> '[id]',
						'foreig'		=> '1'
				),

				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'width'			=> '150px',
						'style'			=> 'width:200px;',
						'listable'		=> '1'
				),

				'file'			=>array(
						'campo'			=> 'file',
						'label'			=> 'file',
						'tipo'			=> 'txt',
						'width'			=> '150px',
						'style'			=> 'width:550px;height:400px;'
				)
		),
		'grupo'			=> 'proyectos',
		'edicion_completa'=> '1',
		'edicion_rapida'	=> '1',
		'crear_quick'	=> '1',
		'width_listado'	=> '700px',
		'crear_pruebas'	=> '0'
);

/******************************************************************************************************************************************************/


$objeto_tabla['ESTRUCTURA_MODELOS']=array(
		'me'			=> 'ESTRUCTURA_MODELOS',
		'titulo'		=> 'Modelos',
		'nombre_singular'=> 'modelo',
		'nombre_plural'	=> 'modelos',
		'tabla'			=> 'estructura_modelos',
		'archivo'		=> 'estructura_modelos',
		'prefijo'		=> 'estmod',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '0',
		'calificacion'	=> '0',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Modelos',
		'por_pagina'	=> '40',
		'orden'			=> '0',
		'crear_label'	=> '60px',
		'crear_txt'		=> '640px',
		'altura_listado'	=> 'auto',
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

				'id_item'		=>array(
						'campo'			=> 'id_item',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'validacion'	=> '0',
						'default'		=> '[id]',
						'foreig'		=> '1'
				),

				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'width'			=> '200px',
						'style'			=> 'width:200px;',
						'listable'		=> '1'
				),

				'file'			=>array(
						'campo'			=> 'file',
						'label'			=> 'file',
						'tipo'			=> 'txt',
						'width'			=> '150px',
						'style'			=> 'width:550px;height:400px;'
				)
		),
		'grupo'			=> 'proyectos',
		'edicion_completa'=> '0',
		'edicion_rapida'	=> '1',
		'crear_quick'	=> '1',
		'width_listado'	=> '700px',
		'crear_pruebas'	=> '0'
);

/******************************************************************************************************************************************************/


$objeto_tabla['ESTRUCTURA_VISTAS']=array(
		'me'			=> 'ESTRUCTURA_VISTAS',
		'titulo'		=> 'Vistas',
		'nombre_singular'=> 'vista',
		'nombre_plural'	=> 'vistas',
		'tabla'			=> 'estructura_vistas',
		'archivo'		=> 'estructura_vistas',
		'prefijo'		=> 'estvis',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '0',
		'calificacion'	=> '0',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Vistas',
		'por_pagina'	=> '40',
		'orden'			=> '0',
		'crear_label'	=> '60px',
		'crear_txt'		=> '640px',
		'altura_listado'	=> 'auto',
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

				'id_item'		=>array(
						'campo'			=> 'id_item',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'validacion'	=> '0',
						'default'		=> '[id]',
						'foreig'		=> '1'
				),

				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'width'			=> '150px',
						'style'			=> 'width:200px;',
						'listable'		=> '1'
				),

				'file'			=>array(
						'campo'			=> 'file',
						'labl'			=> 'file',
						'tipo'			=> 'txt',
						'width'			=> '200px',
						'style'			=> 'width:550px;height:400px;'
				)
		),
		'grupo'			=> 'proyectos',
		'edicion_completa'=> '0',
		'edicion_rapida'	=> '1',
		'crear_quick'	=> '1',
		'width_listado'	=> '700px',
		'crear_pruebas'	=> '0'
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




?>