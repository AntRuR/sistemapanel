<?php //á

$objeto_tabla['PRODUCTOS_GRUPOS']=array(
		'titulo'		=> 'Líneas',
		'nombre_singular'=> 'línea',
		'nombre_plural'	=> 'líneas',
		'tabla'			=> 'productos_grupos',
		'archivo'		=> 'productos_grupos',
		'prefijo'		=> 'progru',
		'eliminar'		=> '0',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Líneas',
		'me'			=> 'PRODUCTOS_GRUPOS',
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
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'controles'		=> '<a href="custom/productos_items.php?id_grupo=[id]">{select count(*) from productos_items where id_grupo=[id]} modelos</a>',
						'style'			=> 'width:300px;'
				)
		),
		'grupo'			=> 'productos',
		'edicion_completa'=> '0',
		'expandir_vertical'=> '0',
		'control'		=> '1'
);

/******************************************************************************************************************************************************/


$objeto_tabla['PRODUCTOS_ITEMS']=array(
		'grupo'			=> 'productos',
		'titulo'		=> 'Modelos',
		'nombre_singular'=> 'modelo',
		'nombre_plural'	=> 'modelos',
		'tabla'			=> 'productos_items',
		'archivo'		=> 'productos_items',
		'archivo_hijo'	=> 'productos_fotos',
		'prefijo'		=> 'proite',
		'eliminar'		=> '0',
		'editar'		=> '1',
		'crear'			=> '1',
		'duplicar'		=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Modelos',
		'por_pagina'	=> '35',
		'me'			=> 'PRODUCTOS_ITEMS',
		'orden'			=> '1',
		'crear_label'	=> '100px',
		'crear_txt'		=> '660px',
		'filtros_extra'	=> '',
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
						'unique'		=> '0',
						'width'			=> '320px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'like'			=> '1',
						'controles'		=> '<a href="custom/productos_fotos.php?id=[id]">{select count(*) from productos_fotos where id_item=[id]} fotos</a>
<!--<a href="base2/ver_paquete.php?id=[id]" style="color:blue;">Rev</a>-->
							',
						'size'			=> '140',
						'style'			=> 'width:550px;'
				),

				'id_grupo'		=>array(
						'campo'			=> 'id_grupo',
						'label'			=> 'Línea',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '1',
						'default'		=> '[id_grupo]',
						'foreig'		=> '1',
						'style'			=> 'width:200px,',
						'opciones'		=> 'id,nombre|productos_grupos',
						'width'			=> '100px',
						'derecha'		=> '1'
				),

				'id_color'		=>array(
						'campo'			=> 'id_color',
						'label'			=> 'Color',
						'width'			=> '80px',
						'listable'		=> '1',
						'foreig'		=> '1',
						'tipo'			=> 'hid',
						'default'		=> '[id_color]',
						'opciones'		=> 'id,nombre|productos_colores',
						'derecha'		=> '1',
						'style'			=> 'width:100px;'
				)
		),
		'edicion_completa'=> '1',
		'creacion_hijo'	=> 'productos_fotos',
		'calificacion'	=> '1',
		'importar_csv'	=> '0'
);

/******************************************************************************************************************************************************/


$objeto_tabla['PRODUCTOS_FOTOS']=array(
		'titulo'		=> '<a href="custom/productos_grupos.php">Categorías</a>  -
                          <a href="custom/productos_items.php?id={select id_grupo from productos_items where id=[id]}">SubCategorías</a> -
                          Fotos de {select nombre from productos_items where id=[id]}',
		'nombre_singular'=> 'foto',
		'nombre_plural'	=> 'fotos',
		'tabla'			=> 'productos_fotos',
		'archivo'		=> 'productos_fotos',
		'prefijo'		=> 'profot',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'crear_label'	=> '200px',
		'crear_txt'		=> '400px',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '0',
		'menu_label'	=> '',
		'me'			=> 'PRODUCTOS_FOTOS',
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

				'id_item'		=>array(
						'campo'			=> 'id_item',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'validacion'	=> '0',
						'foreig'		=> '1',
						'default'		=> '[id]'
				),

				'file'			=>array(
						'campo'			=> 'file',
						'label'			=> 'Foto',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '1',
						'prefijo'		=> 'profot',
						'carpeta'		=> 'profot_imas',
						'tamanos'		=> '100x200,190x190,400x300,800x800',
						'tamano_listado'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px,height:auto,'
				),

				'foto_descripcion'=>array(
						'campo'			=> 'foto_descripcion',
						'label'			=> 'Descripción de foto',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '207px'
				),

				'source'		=>array(
						'campo'			=> 'source',
						'label'			=> 'source',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '207px',
						'style'			=> 'width:100px;',
						'size'			=> '250'
				)
		),
		'grupo'			=> 'miniblog',
		'por_linea'		=> '4'
);

/******************************************************************************************************************************************************/


$objeto_tabla['PRODUCTOS_COLORES']=array(
		'titulo'		=> 'Colores',
		'nombre_singular'=> 'color',
		'nombre_plural'	=> 'colores',
		'tabla'			=> 'productos_colores',
		'archivo'		=> 'productos_colores',
		'prefijo'		=> 'procol',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Colores',
		'me'			=> 'PRODUCTOS_COLORES',
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
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				)
		),
		'grupo'			=> 'productos',
		'edicion_completa'=> '0',
		'expandir_vertical'=> '0',
		'calificacion'	=> '0'
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
		'grupo'			=> 'sistema'
);

/******************************************************************************************************************************************************/


$objeto_tabla['CONFIGURACIONES_ROOT']=array(
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
		),
		'grupo'			=> 'sistema'
);

/******************************************************************************************************************************************************/


$objeto_tabla['CONFIGURACIONES']=array(
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
		),
		'grupo'			=> 'sistema'
);

/******************************************************************************************************************************************************/


$objeto_tabla['PAGINAS']=array(
		'titulo'		=> 'Páginas',
		'nombre_singular'=> 'página',
		'nombre_plural'	=> 'páginas',
		'tabla'			=> 'paginas',
		'archivo'		=> 'paginas',
		'prefijo'		=> 'pag',
		'eliminar'		=> '0',
		'crear'			=> '0',
		'editar'		=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
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
		'grupo'			=> 'contenidos',
		'edicion_completa'=> '1'
);

/******************************************************************************************************************************************************/


$objeto_tabla['CONTACTO']=array(
		'grupo'			=> 'formularios',
		'titulo'		=> 'Contactenos',
		'nombre_singular'=> 'mensaje',
		'nombre_plural'	=> 'mensajes',
		'tabla'			=> 'contacto',
		'archivo'		=> 'contacto',
		'prefijo'		=> 'con',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'crear'			=> '0',
		'crear_label'	=> '100px',
		'crear_txt'		=> '400px',
		'menu'			=> '1',
		'menu_label'	=> 'Contactenos',
		'me'			=> 'CONTACTO',
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

				'fecha'			=>array(
						'campo'			=> 'fecha',
						'label'			=> 'Fecha',
						'tipo'			=> 'fch',
						'width'			=> '300px',
						'listable'		=> '1',
						'validacion'	=> '1',
						'constante'		=> '1',
						'formato'		=> '7'
				),

				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '300px'
				),

				'empresa'		=>array(
						'campo'			=> 'empresa',
						'label'			=> 'Empresa',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '300px'
				),

				'telefono'		=>array(
						'campo'			=> 'telefono',
						'label'			=> 'Teléfono',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
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

				'comentario'	=>array(
						'campo'			=> 'comentario',
						'label'			=> 'Comentario',
						'tipo'			=> 'txt',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '300px'
				)
		),
		'disabled'		=> '0'
);

/******************************************************************************************************************************************************/


$objeto_tabla['RECOMENDAR']=array(
		'titulo'		=> 'Recomendaciones',
		'nombre_singular'=> 'recomendación',
		'nombre_plural'	=> 'recomendaciones',
		'tabla'			=> 'recomendar',
		'archivo'		=> 'recomendar',
		'prefijo'		=> 'rec',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'crear'			=> '0',
		'crear_label'	=> '100px',
		'crear_txt'		=> '400px',
		'menu'			=> '1',
		'menu_label'	=> 'Recomendaciones',
		'me'			=> 'RECOMENDAR',
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

				'fecha'			=>array(
						'campo'			=> 'fecha',
						'label'			=> 'Fecha',
						'tipo'			=> 'fch',
						'width'			=> '300px',
						'listable'		=> '1',
						'validacion'	=> '1',
						'constante'		=> '1',
						'formato'		=> '7'
				),

				'nombre_amigo'	=>array(
						'campo'			=> 'nombre_amigo',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '300px'
				),

				'email_amigo'	=>array(
						'campo'			=> 'email_amigo',
						'label'			=> 'Email',
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
						'validacion'	=> '0',
						'width'			=> '300px'
				),

				'email'			=>array(
						'campo'			=> 'email',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '300px'
				),

				'titulo'		=>array(
						'campo'			=> 'titulo',
						'label'			=> 'Título',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '300px'
				),

				'foto'			=>array(
						'campo'			=> 'foto',
						'label'			=> 'archivo',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '300px'
				),

				'url'			=>array(
						'campo'			=> 'url',
						'label'			=> 'página a compartir',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '300px'
				)
		),
		'grupo'			=> 'formularios'
);

/******************************************************************************************************************************************************/


$objeto_tabla['BOLETINES']=array(
		'titulo'		=> 'Suscritos a Boletín',
		'nombre_singular'=> 'suscrito',
		'nombre_plural'	=> 'suscritos',
		'tabla'			=> 'boletines',
		'archivo'		=> 'boletines',
		'prefijo'		=> 'bol',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'crear'			=> '0',
		'crear_label'	=> '100px',
		'crear_txt'		=> '400px',
		'menu'			=> '1',
		'menu_label'	=> 'Suscritos a Boletín',
		'me'			=> 'BOLETINES',
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

				'fecha'			=>array(
						'campo'			=> 'fecha',
						'label'			=> 'Fecha',
						'tipo'			=> 'fch',
						'width'			=> '300px',
						'listable'		=> '1',
						'validacion'	=> '1',
						'constante'		=> '1',
						'formato'		=> '7'
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
				)
		),
		'grupo'			=> 'formularios'
);

/******************************************************************************************************************************************************/


$objeto_tabla['PROVEEDORES']=array(
		'me'			=> 'PROVEEDORES',
		'titulo'		=> 'Postular para prooveedor',
		'nombre_singular'=> 'proveedor',
		'nombre_plural'	=> 'proveedores',
		'tabla'			=> 'proveedores',
		'archivo'		=> 'proveedores',
		'prefijo'		=> 'pro',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '1',
		'calificacion'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Postular para prooveedor',
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
		'grupo'			=> 'formularios',
		'disabled'		=> '1'
);

/******************************************************************************************************************************************************/


$objeto_tabla['RECLUTAMIENTO']=array(
		'me'			=> 'RECLUTAMIENTO',
		'titulo'		=> 'Trabaja con nosotros',
		'nombre_singular'=> 'reclutamiento',
		'nombre_plural'	=> 'reclutamiento',
		'tabla'			=> 'reclutamiento',
		'archivo'		=> 'reclutamiento',
		'prefijo'		=> 'rec',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '1',
		'calificacion'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Trabaja con nosotros',
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
		'grupo'			=> 'formularios',
		'disabled'		=> '1'
);

/******************************************************************************************************************************************************/


$objeto_tabla['TEXTOS_GRUPOS']=array(
		'titulo'		=> '<a href="custom/productos_grupos.php">Categorías</a>',
		'nombre_singular'=> 'categoría',
		'nombre_plural'	=> 'categorías',
		'seccion'		=> 'Centro Informativo',
		'tabla'			=> 'textos_grupos',
		'archivo'		=> 'textos_grupos',
		'prefijo'		=> 'texsubgru',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Categorías',
		'me'			=> 'TEXTOS_GRUPOS',
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
						'label'			=> 'Nombre',
						'width'			=> '200px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'controles'		=> '<a  href="custom/textos_items.php?id_item=[id]">{select count(*) from textos_items where id_item=[id]} textos</a>'
				),

				'id_grupo'		=>array(
						'label'			=> 'Bloque',
						'campo'			=> 'id_grupo',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'width'			=> '200px',
						'validacion'	=> '0',
						'default'		=> '[id_grupo]',
						'opciones'		=> 'id,nombre|textos_grupos',
						'foreig'		=> '1'
				)
		),
		'grupo'			=> 'contenidos'
);

/******************************************************************************************************************************************************/


$objeto_tabla['TEXTOS_ITEMS']=array(
		'titulo'		=> '<a href="custom/textos_grupos.php?">Categorías</a>
                          - Textos',
		'nombre_singular'=> 'texto',
		'nombre_plural'	=> 'textos',
		'tabla'			=> 'textos_items',
		'archivo'		=> 'textos_items',
		'archivo_hijo'	=> 'textos_fotos',
		'prefijo'		=> 'texite',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'crear_label'	=> '60px',
		'crear_txt'		=> '580px',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Textos',
		'por_pagina'	=> '50',
		'me'			=> 'TEXTOS_ITEMS',
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
						'validacion'	=> '1',
						'width'			=> '219px',
						'like'			=> '1',
						'style'			=> 'width:408px;',
						'derecha'		=> '1',
						'controles'		=> '<a href="custom/textos_fotos.php?id=[id]">{select count(*) from textos_fotos where id_item=[id]} fotos</a>'
				),

				'id_grupo'		=>array(
						'label'			=> 'Bloque',
						'campo'			=> 'id_grupo',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '0',
						'default'		=> '[id_grupo]',
						'opciones'		=> 'id,nombre|textos_grupos',
						'foreig'		=> '1',
						'foreigkey'		=> 'TEXTOS_GRUPOS',
						'load'			=> 'id_subgrupo||id,nombre|textos_subgrupos|where id_grupo=',
						'style'			=> 'width:150px;',
						'derecha'		=> '1',
						'width'			=> '100px'
				),

				'id_subgrupo'	=>array(
						'label'			=> 'Categoría',
						'campo'			=> 'id_subgrupo',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '0',
						'default'		=> '[id_subgrupo]',
						'opciones'		=> 'id,nombre|textos_subgrupos',
						'foreig'		=> '1',
						'foreigkey'		=> 'TEXTOS_SUBGRUPOS',
						'style'			=> 'width:150px;',
						'load'			=> 'id_filtro||id,nombre|textos_filtros|where id_subgrupo=',
						'derecha'		=> '2',
						'width'			=> '100px'
				),

				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Texto',
						'tipo'			=> 'html',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '150px',
						'style'			=> 'height:350px,'
				)
		),
		'grupo'			=> 'contenidos',
		'edicion_rapida'	=> '1',
		'creacion_hijo'	=> 'productos_fotos'
);

/******************************************************************************************************************************************************/


$objeto_tabla['NOTICIAS_ITEMS']=array(
		'titulo'		=> 'Noticias',
		'nombre_singular'=> 'noticia',
		'nombre_plural'	=> 'noticias',
		'tabla'			=> 'noticias_items',
		'archivo'		=> 'noticias_items',
		'prefijo'		=> 'notite',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'crear_label'	=> '100px',
		'crear_txt'		=> '670px',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Noticias',
		'por_pagina'	=> '20',
		'me'			=> 'NOTICIAS_ITEMS',
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

				'fecha'			=>array(
						'campo'			=> 'fecha',
						'label'			=> 'Fecha',
						'tipo'			=> 'fch',
						'width'			=> '300px',
						'style'			=> 'width:300px;',
						'formato'		=> '7',
						'default'		=> 'now()',
						'rango'			=> '-1 years,now',
						'validacion'	=> '1'
				),

				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Título',
						'unique'		=> '1',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'like'			=> '1',
						'width'			=> '230px'
				),

				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Publicación',
						'tipo'			=> 'html',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '150px',
						'style'			=> 'height:350px,'
				)
		),
		'grupo'			=> 'miniblog',
		'edicion_completa'=> '1',
		'alias_grupo'	=> 'miniblog'
);

/******************************************************************************************************************************************************/


$objeto_tabla['ACTIVIDADES_ITEMS']=array(
		'titulo'		=> 'Actividades',
		'nombre_singular'=> 'actividad',
		'nombre_plural'	=> 'actividades',
		'tabla'			=> 'actividades_items',
		'archivo'		=> 'actividades_items',
		'prefijo'		=> 'actite',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'crear_label'	=> '100px',
		'crear_txt'		=> '670px',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Actividades',
		'por_pagina'	=> '20',
		'me'			=> 'ACTIVIDADES_ITEMS',
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

				'fecha'			=>array(
						'campo'			=> 'fecha',
						'label'			=> 'Fecha',
						'tipo'			=> 'fch',
						'width'			=> '300px',
						'style'			=> 'width:300px;',
						'formato'		=> '7',
						'default'		=> 'now()',
						'rango'			=> '-1 years,now',
						'validacion'	=> '1'
				),

				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Título',
						'unique'		=> '1',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'like'			=> '1',
						'width'			=> '230px'
				),

				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Publicación',
						'tipo'			=> 'html',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '150px',
						'style'			=> 'height:350px,'
				)
		),
		'grupo'			=> 'miniblog',
		'edicion_completa'=> '1'
);

/******************************************************************************************************************************************************/


$objeto_tabla['PUBLICIDAD_FOTOS']=array(
		'titulo'		=> 'Albumes de Fotos',
		'nombre_singular'=> 'albumes de fotos',
		'nombre_plural'	=> 'album de fotos',
		'tabla'			=> 'publicidad_fotos',
		'archivo'		=> 'publicidad_fotos',
		'archivo_hijo'	=> 'publicidad_fotos_fotos',
		'prefijo'		=> 'pubfot',
		'eliminar'		=> '0',
		'editar'		=> '1',
		'crear'			=> '0',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Albumes de Fotos',
		'me'			=> 'PUBLICIDAD_FOTOS',
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
						'label'			=> 'Nombre',
						'width'			=> '300px',
						'unique'		=> '0',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'controles'		=> '<a  href="custom/publicidad_fotos_fotos.php?id=[id]">{select count(*) from publicidad_fotos_fotos where id_grupo=[id]}  fotos</a>
							'
				)
		),
		'grupo'			=> 'miniblog',
		'por_linea'		=> '1'
);

/******************************************************************************************************************************************************/


$objeto_tabla['PUBLICIDAD_FOTOS_FOTOS']=array(
		'titulo'		=> '<a href="custom/publicidad_fotos.php">Bloques de fotos</a>
                          - Fotos del Bloque {select nombre from publicidad_fotos where id=[id]}',
		'nombre_singular'=> 'foto',
		'nombre_plural'	=> 'fotos',
		'tabla'			=> 'publicidad_fotos_fotos',
		'archivo'		=> 'publicidad_fotos_fotos',
		'prefijo'		=> 'pubfot',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'crear_label'	=> '200px',
		'crear_txt'		=> '400px',
		'altura_listado'	=> '60px',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '0',
		'menu_label'	=> '',
		'por_pagina'	=> '56',
		'me'			=> 'PUBLICIDAD_FOTOS_FOTOS',
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

				'id_grupo'		=>array(
						'campo'			=> 'id_grupo',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'validacion'	=> '0',
						'default'		=> '[id]',
						'foreig'		=> '1',
						'foreigkey'		=> 'PUBLICIDAD_FOTOS'
				),

				'file'			=>array(
						'campo'			=> 'file',
						'label'			=> 'Foto',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '1',
						'prefijo'		=> 'pubfot',
						'carpeta'		=> 'pubfot_imas',
						'tamanos'		=> '150x120,175x143,530x330,656x300',
						'tamano_listado'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px,height:auto,'
				),

				'foto_descripcion'=>array(
						'campo'			=> 'foto_descripcion',
						'label'			=> 'Descripción de foto',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '207px'
				),

				'url'			=>array(
						'campo'			=> 'url',
						'label'			=> 'Url',
						'tipo'			=> 'inp',
						'width'			=> '200px',
						'style'			=> 'width:200px;',
						'listable'		=> '1'
				)
		),
		'grupo'			=> 'miniblog',
		'por_linea'		=> '5'
);

/******************************************************************************************************************************************************/


$objeto_tabla['PUBLICIDAD_VIDEOS']=array(
		'titulo'		=> 'Albumes de videos',
		'nombre_singular'=> 'album de videos',
		'nombre_plural'	=> 'albumes de videos',
		'tabla'			=> 'publicidad_videos',
		'archivo'		=> 'publicidad_videos',
		'archivo_hijo'	=> 'publicidad_videos_videos',
		'prefijo'		=> 'pubvid',
		'eliminar'		=> '0',
		'editar'		=> '1',
		'crear'			=> '0',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Albumes de videos',
		'me'			=> 'PUBLICIDAD_VIDEOS',
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
						'label'			=> 'Nombre',
						'width'			=> '300px',
						'unique'		=> '0',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'controles'		=> '<a class="linkstitu" href="custom/publicidad_videos_videos.php?id=[id]">
{select count(*) from publicidad_videos_videos where id_grupo=[id]} 
videos
</a>'
				)
		),
		'grupo'			=> 'miniblog'
);

/******************************************************************************************************************************************************/


$objeto_tabla['PUBLICIDAD_VIDEOS_VIDEOS']=array(
		'titulo'		=> '<a href="custom/publicidad_videos.php">Albumes de videos</a>
                          - Videos de {select nombre from publicidad_videos where id=[id]}',
		'nombre_singular'=> 'video',
		'nombre_plural'	=> 'videos',
		'tabla'			=> 'publicidad_videos_videos',
		'archivo'		=> 'publicidad_videos_videos',
		'prefijo'		=> 'pubvid',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '0',
		'menu_label'	=> '',
		'me'			=> 'PUBLICIDAD_VIDEOS_VIDEOS',
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

				'id_grupo'		=>array(
						'campo'			=> 'id_grupo',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'validacion'	=> '0',
						'default'		=> '[id]',
						'foreig'		=> '1',
						'foreigkey'		=> 'PUBLICIDAD_VIDEOS'
				),

				'titulo'		=>array(
						'campo'			=> 'titulo',
						'label'			=> 'Título',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				),

				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Texto',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0'
				),

				'url'			=>array(
						'campo'			=> 'url',
						'label'			=> 'Url',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0'
				),

				'codigo'		=>array(
						'campo'			=> 'codigo',
						'label'			=> 'Código Youtube',
						'tipo'			=> 'yot',
						'listable'		=> '1',
						'validacion'	=> '1'
				),

				'descripcion'	=>array(
						'campo'			=> 'descripcion',
						'label'			=> 'Descripción',
						'tipo'			=> 'txt',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '300px'
				)
		),
		'grupo'			=> 'miniblog',
		'crear_label'	=> '110px',
		'crear_txt'		=> '600px',
		'por_linea'		=> '5'
);

/******************************************************************************************************************************************************/




?>