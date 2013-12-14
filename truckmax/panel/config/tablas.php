<?php //á

$objeto_tabla['PRODUCTOS_GRUPOS']=array(
		'titulo'		=> 'Líneas',
		'nombre_singular'=> 'línea',
		'nombre_plural'	=> 'líneas',
		'tabla'			=> 'productos_grupos',
		'archivo'		=> 'productos_grupos',
		'prefijo'		=> 'progru',
		'eliminar'		=> '1',
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
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'duplicar'		=> '0',
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

				'codigo'		=>array(
						'campo'			=> 'codigo',
						'label'			=> 'cod',
						'width'			=> '50px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'like'			=> '1',
						'style'			=> 'width:30px;',
						'derecha'		=> '1'
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
						'width'			=> '90px',
						'derecha'		=> '2'
				),

				'id_marca'		=>array(
						'campo'			=> 'id_marca',
						'label'			=> 'Marca',
						'width'			=> '100px',
						'listable'		=> '1',
						'tipo'			=> 'hid',
						'opciones'		=> 'id,nombre|productos_marcas',
						'derecha'		=> '2',
						'style'			=> 'width:150px;'
				),

				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'unique'		=> '0',
						'width'			=> '200px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'like'			=> '1',
						'controles'		=> '<a href="custom/productos_comentarios.php?id=[id]">{select count(*) from productos_comentarios where id_item=[id]} consultas</a>
						<a rel="subs" href="custom/productos_fotos.php?id=[id]">{select count(*) from productos_fotos where id_item=[id]} fotos</a>
							',
						'size'			=> '140',
						'style'			=> 'width:550px;'
				),

				'precio'		=>array(
						'campo'			=> 'precio',
						'label'			=> 'Precio',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'style'			=> 'width:50px;',
						'derecha'		=> '1'
				),

				'descripcion'	=>array(
						'campo'			=> 'descripcion',
						'label'			=> 'Descripción',
						'tipo'			=> 'html',
						'validacion'	=> '0',
						'style'			=> 'width:550px;height:100px;',
						'width'			=> '400px',
						'derecha'		=> '1',
						'default'		=> '',
						'listable'		=> '0',
						'listhtml'		=> '1'
				),

				'ficha'			=>array(
						'campo'			=> 'ficha',
						'label'			=> 'Ficha',
						'tipo'			=> 'html',
						'validacion'	=> '0',
						'style'			=> 'width:550px;height:400px;',
						'width'			=> '320px',
						'derecha'		=> '1',
						'css'			=> 'table { width:100%; margin-bottom:10px; } table td,table th { vertical-align:top; border:0; color:#4F5767;font-family:Arial; }',
						'botones'		=> 'nombre,texto|productos_bloques',
						'default'		=> '',
						'listable'		=> '1',
						'listhtml'		=> '1'
				)
		),
		'edicion_completa'=> '1',
		'creacion_hijo'	=> 'productos_fotos',
		'calificacion'	=> '0',
		'importar_csv'	=> '0',
		'group'			=> 'id_grupo',
		'edicion_rapida'	=> '1'
);

/******************************************************************************************************************************************************/


$objeto_tabla['PRODUCTOS_MARCAS']=array(
		'titulo'		=> 'Marcas',
		'nombre_singular'=> 'marca',
		'nombre_plural'	=> 'marcas',
		'tabla'			=> 'productos_marcas',
		'archivo'		=> 'productos_marcas',
		'prefijo'		=> 'promar',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Marcas',
		'me'			=> 'PRODUCTOS_MARCAS',
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
		'calificacion'	=> '0',
		'edicion_rapida'	=> '1',
		'width_listado'	=> '300px',
		'set_fila_fijo'	=> '3',
		'crear_quick'	=> '1'
);

/******************************************************************************************************************************************************/


$objeto_tabla['PRODUCTOS_BLOQUES']=array(
		'titulo'		=> 'Bloques',
		'nombre_singular'=> 'bloque',
		'nombre_plural'	=> 'bloques',
		'tabla'			=> 'productos_bloques',
		'archivo'		=> 'productos_bloques',
		'prefijo'		=> 'problo',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Bloques',
		'me'			=> 'PRODUCTOS_BLOQUES',
		'orden'			=> '1',
		'width_listado'	=> '850px',
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
				),

				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Bloque',
						'width'			=> '600px',
						'tipo'			=> 'html',
						'listable'		=> '1',
						'validacion'	=> '1',
						'style'			=> 'width:600px;height:150px;'
				)
		),
		'grupo'			=> 'productos',
		'edicion_completa'=> '1',
		'expandir_vertical'=> '0',
		'edicion_rapida'	=> '1',
		'calificacion'	=> '0',
		'set_fila_fijo'	=> '3',
		'crear_quick'	=> '1'
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
						'label'			=> '',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '207px'
				)
		),
		'grupo'			=> 'productos',
		'por_linea'		=> '4'
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
						'validacion'	=> '1',
						'width'			=> '150px'
				),

				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Texto',
						'tipo'			=> 'html',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '400px',
						'style'			=> 'height:300px;'
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
						'label'			=> '',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '207px'
				),

				'web'			=>array(
						'campo'			=> 'web',
						'tipo'			=> 'web'
				)
		),
		'grupo'			=> 'contenidos',
		'edicion_completa'=> '1',
		'web'			=> '1'
);

/******************************************************************************************************************************************************/


$objeto_tabla['TEXTOS_ITEMS']=array(
		'titulo'		=> 'Textos',
		'nombre_singular'=> 'texto',
		'nombre_plural'	=> 'textos',
		'tabla'			=> 'textos_items',
		'archivo'		=> 'textos_items',
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

				'fecha'			=>array(
						'campo'			=> 'fecha',
						'label'			=> 'Fecha',
						'tipo'			=> 'fch',
						'width'			=> '300px',
						'listable'		=> '1',
						'validacion'	=> '1',
						'formato'		=> '7'
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
						'derecha'		=> '1'
				),

				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Texto',
						'tipo'			=> 'html',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '300px',
						'style'			=> 'height:350px,'
				),

				'foto'			=>array(
						'campo'			=> 'foto',
						'label'			=> 'Foto',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '0',
						'prefijo'		=> 'tex',
						'carpeta'		=> 'tex_imas',
						'tamanos'		=> '70x70,400x300',
						'tamano_listado'	=> '1'
				),

				'foto_descripcion'=>array(
						'campo'			=> 'foto_descripcion',
						'label'			=> '',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '207px'
				),

				'web'			=>array(
						'campo'			=> 'web',
						'tipo'			=> 'web'
				)
		),
		'grupo'			=> 'contenidos',
		'edicion_rapida'	=> '1',
		'seccion'		=> 'centro informativo',
		'web'			=> '1'
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
		'grupo'			=> 'contenidos',
		'por_linea'		=> '1',
		'seccion'		=> '',
		'disabled'		=> '1'
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
						'tamanos'		=> '150x120,219x102,219x110,961x302',
						'tamano_listado'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px,height:auto,'
				),

				'foto_descripcion'=>array(
						'campo'			=> 'foto_descripcion',
						'label'			=> '',
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
		'grupo'			=> 'contenidos',
		'por_linea'		=> '5',
		'disabled'		=> '1'
);

/******************************************************************************************************************************************************/


$objeto_tabla['BANNERS_FOTOS']=array(
		'titulo'		=> 'Banners',
		'nombre_singular'=> 'bloques de fotos',
		'nombre_plural'	=> 'bloque de fotos',
		'tabla'			=> 'banners_fotos',
		'archivo'		=> 'banners_fotos',
		'archivo_hijo'	=> 'banners_fotos_fotos',
		'prefijo'		=> 'banfot',
		'eliminar'		=> '0',
		'editar'		=> '1',
		'crear'			=> '0',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Banners',
		'me'			=> 'BANNERS_FOTOS',
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
						'controles'		=> '<a  href="custom/banners_fotos_fotos.php?id=[id]">{select count(*) from banners_fotos_fotos where id_grupo=[id]}  fotos</a>
							'
				),

				'web'			=>array(
						'campo'			=> 'web',
						'tipo'			=> 'web'
				)
		),
		'grupo'			=> 'publicidad',
		'por_linea'		=> '1',
		'web'			=> '1'
);

/******************************************************************************************************************************************************/


$objeto_tabla['BANNERS_FOTOS_FOTOS']=array(
		'titulo'		=> '<a href="custom/banners_fotos.php">Bloques de fotos</a>
                          - Fotos del Bloque {select nombre from banners_fotos where id=[id]}',
		'nombre_singular'=> 'foto',
		'nombre_plural'	=> 'fotos',
		'tabla'			=> 'banners_fotos_fotos',
		'archivo'		=> 'banners_fotos_fotos',
		'prefijo'		=> 'banfot',
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
		'me'			=> 'BANNERS_FOTOS_FOTOS',
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
						'foreigkey'		=> 'BANNERS_FOTOS',
						'opciones'		=> 'id,nombre|banners_fotos'
				),

				'file'			=>array(
						'campo'			=> 'file',
						'label'			=> 'Foto',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '1',
						'prefijo'		=> 'banfot',
						'carpeta'		=> 'banfot_imas',
						'tamanos'		=> '150x120,218x123,961x302,65x47,206x122',
						'tamano_listado'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px,height:auto,'
				),

				'foto_descripcion'=>array(
						'campo'			=> 'foto_descripcion',
						'label'			=> '',
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
				),

				'web'			=>array(
						'campo'			=> 'web',
						'tipo'			=> 'web'
				)
		),
		'grupo'			=> 'publicidad',
		'por_linea'		=> '4',
		'web'			=> '1'
);

/******************************************************************************************************************************************************/


$objeto_tabla['PRODUCTOS_COMENTARIOS']=array(
		'titulo'		=> 'Consultas del producto "
		{select nombre from productos_items where id=[id]}"',
		'nombre_singular'=> 'comentario',
		'nombre_plural'	=> 'comentarios',
		'tabla'			=> 'productos_comentarios',
		'archivo'		=> 'productos_comentarios',
		'prefijo'		=> 'com',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'crear'			=> '0',
		'crear_label'	=> '100px',
		'crear_txt'		=> '400px',
		'menu'			=> '1',
		'menu_label'	=> 'Consultas del producto',
		'me'			=> 'PRODUCTOS_COMENTARIOS',
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
						'width'			=> '100px',
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
						'validacion'	=> '0',
						'width'			=> '100px'
				),

				'empresa'		=>array(
						'campo'			=> 'empresa',
						'label'			=> 'Empresa',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '100px'
				),

				'ciudad'		=>array(
						'campo'			=> 'ciudad',
						'label'			=> 'Ciudad',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '100px'
				),

				'pais'			=>array(
						'campo'			=> 'pais',
						'label'			=> 'País',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '100px'
				),

				'telefono'		=>array(
						'campo'			=> 'telefono',
						'label'			=> 'Teléf/Celular',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '100px'
				),

				'email'			=>array(
						'campo'			=> 'email',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '100px'
				),

				'id_item'		=>array(
						'label'			=> 'producto',
						'campo'			=> 'id_item',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '0',
						'foreig'		=> '1',
						'default'		=> '[id]',
						'width'			=> '150px',
						'opciones'		=> 'id,nombre|productos_items',
						'controles'		=> '',
						'constante'		=> '1'
				),

				'comentario'	=>array(
						'campo'			=> 'comentario',
						'label'			=> 'Comentario',
						'tipo'			=> 'txt',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '260px'
				)
		),
		'grupo'			=> 'formularios',
		'edicion_completa'=> '1',
		'edicion_rapida'	=> '0'
);

/******************************************************************************************************************************************************/


$objeto_tabla['CONTACTO']=array(
		'titulo'		=> 'Mensajes de Contacto',
		'nombre_singular'=> 'mensaje',
		'nombre_plural'	=> 'mensajes',
		'tabla'			=> 'contacto',
		'archivo'		=> 'contacto',
		'prefijo'		=> 'con',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'crear'			=> '1',
		'crear_label'	=> '100px',
		'crear_txt'		=> '400px',
		'menu'			=> '1',
		'menu_label'	=> 'Mensajes de Contacto',
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

				'ciudad'		=>array(
						'campo'			=> 'ciudad',
						'label'			=> 'Ciudad',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '300px'
				),

				'pais'			=>array(
						'campo'			=> 'pais',
						'label'			=> 'País',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '300px'
				),

				'telefono'		=>array(
						'campo'			=> 'telefono',
						'label'			=> 'Teléf/Celular',
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
		'grupo'			=> 'formularios'
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

				'nombre_usuario'	=>array(
						'campo'			=> 'nombre_usuario',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '300px'
				),

				'email_usuario'	=>array(
						'campo'			=> 'email_usuario',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '300px'
				),

				'nombre_pagina'	=>array(
						'campo'			=> 'nombre_pagina',
						'label'			=> 'Página',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '300px'
				),

				'url_pagina'	=>array(
						'campo'			=> 'url_pagina',
						'label'			=> 'URL',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '300px'
				),

				'foto_pagina'	=>array(
						'campo'			=> 'foto_pagina',
						'label'			=> 'archivo',
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
						'width'			=> '150px'
				),

				'valor'			=>array(
						'campo'			=> 'valor',
						'label'			=> 'Valor',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '200px'
				)
		),
		'grupo'			=> 'sistema',
		'width_listado'	=> '550px'
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
						'width'			=> '150px'
				),

				'valor'			=>array(
						'campo'			=> 'valor',
						'label'			=> 'Valor',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '200px'
				)
		),
		'grupo'			=> 'sistema',
		'width_listado'	=> '550px'
);

/******************************************************************************************************************************************************/


$objeto_tabla['BLOG_NOTICIAS']=array(
		'titulo'		=> 'Noticias',
		'nombre_singular'=> 'noticia',
		'nombre_plural'	=> 'noticias',
		'tabla'			=> 'blog_noticias',
		'archivo'		=> 'blog_noticias',
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
		'me'			=> 'BLOG_NOTICIAS',
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
						'width'			=> '100px',
						'style'			=> 'width:300px;',
						'formato'		=> '0',
						'default'		=> 'now()',
						'rango'			=> '-1 years,now',
						'validacion'	=> '1',
						'listable'		=> '1'
				),

				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Título',
						'unique'		=> '0',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'like'			=> '1',
						'width'			=> '230px'
				),

				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Texto',
						'tipo'			=> 'html',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '400px',
						'style'			=> 'height:350px,'
				),

				'foto'			=>array(
						'campo'			=> 'foto',
						'label'			=> 'Foto',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '0',
						'prefijo'		=> 'blonot',
						'carpeta'		=> 'blonot_imas',
						'tamanos'		=> '70x70,400x300',
						'tamano_listado'	=> '1'
				),

				'foto_descripcion'=>array(
						'campo'			=> 'foto_descripcion',
						'label'			=> '',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '207px'
				),

				'web'			=>array(
						'campo'			=> 'web',
						'tipo'			=> 'web'
				)
		),
		'grupo'			=> 'miniblog',
		'edicion_completa'=> '1',
		'alias_grupo'	=> 'blog',
		'edicion_rapida'	=> '1',
		'web'			=> '1'
);

/******************************************************************************************************************************************************/


$objeto_tabla['BLOG_ACTIVIDADES']=array(
		'titulo'		=> 'Actividades',
		'nombre_singular'=> 'actividad',
		'nombre_plural'	=> 'actividades',
		'tabla'			=> 'blog_actividades',
		'archivo'		=> 'blog_actividades',
		'prefijo'		=> 'bloite',
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
		'me'			=> 'BLOG_ACTIVIDADES',
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
						'width'			=> '100px',
						'style'			=> 'width:300px;',
						'formato'		=> '0',
						'default'		=> 'now()',
						'rango'			=> '-1 years,now',
						'validacion'	=> '1',
						'listable'		=> '1'
				),

				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Título',
						'unique'		=> '0',
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
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '350px',
						'style'			=> 'height:350px,'
				),

				'foto'			=>array(
						'campo'			=> 'foto',
						'label'			=> 'Foto',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '0',
						'prefijo'		=> 'blo',
						'carpeta'		=> 'bloact_imas',
						'tamanos'		=> '70x70,400x300',
						'tamano_listado'	=> '1'
				),

				'foto_descripcion'=>array(
						'campo'			=> 'foto_descripcion',
						'label'			=> '',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '207px'
				),

				'web'			=>array(
						'campo'			=> 'web',
						'tipo'			=> 'web'
				)
		),
		'grupo'			=> 'miniblog',
		'edicion_completa'=> '1',
		'edicion_rapida'	=> '1',
		'web'			=> '1'
);

/******************************************************************************************************************************************************/


$objeto_tabla['BLOG_VIDEOS']=array(
		'titulo'		=> 'Albumes de videos',
		'nombre_singular'=> 'album de videos',
		'nombre_plural'	=> 'albumes de videos',
		'tabla'			=> 'blog_videos',
		'archivo'		=> 'blog_videos',
		'archivo_hijo'	=> 'blog_videos_videos',
		'prefijo'		=> 'blovid',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Albumes de videos',
		'me'			=> 'BLOG_VIDEOS',
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

				'fecha'			=>array(
						'campo'			=> 'fecha',
						'label'			=> 'Fecha',
						'tipo'			=> 'fch',
						'width'			=> '100px',
						'listable'		=> '1',
						'validacion'	=> '1',
						'formato'		=> '7'
				),

				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '200px',
						'unique'		=> '0',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'controles'		=> '<a class="linkstitu" href="custom/blog_videos_videos.php?id=[id]">
{select count(*) from blog_videos_videos where id_grupo=[id]} 
videos
</a>'
				),

				'web'			=>array(
						'campo'			=> 'web',
						'tipo'			=> 'web'
				)
		),
		'grupo'			=> 'miniblog',
		'web'			=> '1'
);

/******************************************************************************************************************************************************/


$objeto_tabla['BLOG_VIDEOS_VIDEOS']=array(
		'titulo'		=> '<a href="custom/blog_videos.php">Albumes de videos</a>
                          - Videos de {select nombre from blog_videos where id=[id]}',
		'nombre_singular'=> 'video',
		'nombre_plural'	=> 'videos',
		'tabla'			=> 'blog_videos_videos',
		'archivo'		=> 'blog_videos_videos',
		'prefijo'		=> 'blovid',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '0',
		'menu_label'	=> '',
		'me'			=> 'BLOG_VIDEOS_VIDEOS',
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

				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Título',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				),

				'codigo'		=>array(
						'campo'			=> 'codigo',
						'label'			=> 'Código Youtube',
						'tipo'			=> 'yot',
						'listable'		=> '1',
						'validacion'	=> '1'
				),

				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Descripción',
						'tipo'			=> 'txt',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '300px'
				),

				'web'			=>array(
						'campo'			=> 'web',
						'tipo'			=> 'web'
				)
		),
		'grupo'			=> 'miniblog',
		'crear_label'	=> '110px',
		'crear_txt'		=> '600px',
		'por_linea'		=> '5',
		'web'			=> '1'
);

/******************************************************************************************************************************************************/


$objeto_tabla['BLOG_FOTOS']=array(
		'titulo'		=> 'Albumes de Fotos',
		'nombre_singular'=> 'albumes de fotos',
		'nombre_plural'	=> 'album de fotos',
		'tabla'			=> 'blog_fotos',
		'archivo'		=> 'blog_fotos',
		'archivo_hijo'	=> 'blog_fotos_fotos',
		'prefijo'		=> 'blofot',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Albumes de Fotos',
		'me'			=> 'BLOG_FOTOS',
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

				'fecha'			=>array(
						'campo'			=> 'fecha',
						'label'			=> 'Fecha',
						'tipo'			=> 'fch',
						'width'			=> '100px',
						'listable'		=> '1',
						'validacion'	=> '1',
						'formato'		=> '7'
				),

				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '200px',
						'unique'		=> '0',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'controles'		=> '<a  rel="subs" href="custom/blog_fotos_fotos.php?id=[id]">{select count(*) from blog_fotos_fotos where id_grupo=[id]}  fotos</a>
							'
				),

				'web'			=>array(
						'campo'			=> 'web',
						'tipo'			=> 'web'
				)
		),
		'grupo'			=> 'miniblog',
		'por_linea'		=> '1',
		'seccion'		=> '',
		'disabled'		=> '0',
		'web'			=> '1'
);

/******************************************************************************************************************************************************/


$objeto_tabla['BLOG_FOTOS_FOTOS']=array(
		'titulo'		=> '<a href="custom/blog_fotos.php">Bloques de fotos</a>
                          - Fotos del Bloque {select nombre from blog_fotos where id=[id]}',
		'nombre_singular'=> 'foto',
		'nombre_plural'	=> 'fotos',
		'tabla'			=> 'blog_fotos_fotos',
		'archivo'		=> 'blog_fotos_fotos',
		'prefijo'		=> 'blofot',
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
		'me'			=> 'BLOG_FOTOS_FOTOS',
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
						'foreigkey'		=> 'BLOG_FOTOS'
				),

				'file'			=>array(
						'campo'			=> 'file',
						'label'			=> 'Foto',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '1',
						'prefijo'		=> 'blofot',
						'carpeta'		=> 'blofot_imas',
						'tamanos'		=> '150x120,219x102,219x110,961x302',
						'tamano_listado'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px,height:auto,'
				),

				'foto_descripcion'=>array(
						'campo'			=> 'foto_descripcion',
						'label'			=> '',
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
				),

				'web'			=>array(
						'campo'			=> 'web',
						'tipo'			=> 'web'
				)
		),
		'grupo'			=> 'miniblog',
		'por_linea'		=> '5',
		'disabled'		=> '0',
		'web'			=> '1'
);

/******************************************************************************************************************************************************/




?>