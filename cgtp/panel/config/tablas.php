<?php //á

$objeto_tabla['BANNER_DEPARTAMENTOS_FOTOS']=array(
		'titulo'		=> 'Banner Departamentos',
		'nombre_singular'=> 'foto',
		'nombre_plural'	=> 'fotos',
		'tabla'			=> 'banner_departamentos_fotos',
		'archivo'		=> 'banner_departamentos_fotos',
		'prefijo'		=> 'bandepfot',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'crear_label'	=> '60px',
		'crear_txt'		=> '400px',
		'altura_listado'	=> '60px',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Banner de Departamentos',
		'por_pagina'	=> '56',
		'me'			=> 'BANNER_DEPARTAMENTOS_FOTOS',
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
				'file'			=>array(
						'campo'			=> 'file',
						'label'			=> 'Foto',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '1',
						'prefijo'		=> 'bandep',
						'carpeta'		=> 'bandep_imas',
						'tamanos'		=> '150x120,202x88',
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
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'contenidos',
		'por_linea'		=> '4',
		'crear_quick'	=> '1',
		'page'			=> '1'
		
);
/******************************************************************************************************************************************************/

$objeto_tabla['BANNER_SERVICIOS_FOTOS']=array(
		'titulo'		=> 'Banner Servicios',
		'nombre_singular'=> 'foto',
		'nombre_plural'	=> 'fotos',
		'tabla'			=> 'banner_servicios_fotos',
		'archivo'		=> 'banner_servicios_fotos',
		'prefijo'		=> 'bandepfot',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'crear_label'	=> '60px',
		'crear_txt'		=> '400px',
		'altura_listado'	=> '60px',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Banner Servicios',
		'por_pagina'	=> '56',
		'me'			=> 'BANNER_SERVICIOS_FOTOS',
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
				'file'			=>array(
						'campo'			=> 'file',
						'label'			=> 'Foto',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '1',
						'prefijo'		=> 'banser',
						'carpeta'		=> 'banser_imas',
						'tamanos'		=> '150x120,210x175',
						'tamano_listado'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px,height:auto,'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
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
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'contenidos',
		'por_linea'		=> '4',
		'crear_quick'	=> '1',
		'page'			=> '1'
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
						'listable'		=> '1',
						'validacion'	=> '1',
						'constante'		=> '1',
						'setup'			=> 'organizacion,estatuto,secretariado-ejecutivo,nuestra-historia,concejo-nacional,concejo-vigilancia'
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
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'contenidos',
		'edicion_completa'=> '1',
		'page'			=> '1',
		'edicion_rapida'	=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PUBLICACIONES_GRUPOS']=array(
		'titulo'		=> 'Directorios',
		'nombre_singular'=> 'directorio',
		'nombre_plural'	=> 'directorios',
		'tabla'			=> 'publicaciones_grupos',
		'archivo'		=> 'publicaciones_grupos',
		'prefijo'		=> 'pubgru',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Directorios',
		'crear_label'	=> '80px',
		'crear_txt'		=> '400px',
		'me'			=> 'PUBLICACIONES_GRUPOS',
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
						'width'			=> '300px',
						'unique'		=> '0',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'controles'		=> '<a  href="custom/publicaciones_items.php?id_grupo=[id]">{select count(*) from publicaciones_items where id_grupo=[id]} publicaciones</a>'
				),
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'contenidos',
		'edicion_rapida'	=> '1',
		'crear_quick'	=> '1',
		'page'			=> '1',
		'seccion'		=> 'Publicaciones'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PUBLICACIONES_ITEMS']=array(
		'titulo'		=> 'Publicaciones',
		'nombre_singular'=> 'publicación',
		'nombre_plural'	=> 'publicaciones',
		'tabla'			=> 'publicaciones_items',
		'archivo'		=> 'publicaciones_items',
		'prefijo'		=> 'pubite',
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
		'menu_label'	=> 'Documentos',
		'por_pagina'	=> '50',
		'me'			=> 'PUBLICACIONES_ITEMS',
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
						'label'			=> 'Directorio',
						'campo'			=> 'id_grupo',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'width'			=> '200px',
						'validacion'	=> '0',
						'default'		=> '[id_grupo]',
						'opciones'		=> 'id,nombre|publicaciones_grupos',
						'foreig'		=> '1'
				),
				'fecha'			=>array(
						'campo'			=> 'fecha',
						'label'			=> 'Fecha',
						'tipo'			=> 'fch',
						'width'			=> '70px',
						'listable'		=> '1',
						'validacion'	=> '0',
						'formato'		=> '5',
						'rango'			=> '-4 years,now',
						'default'		=> 'now()'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '200px',
						'like'			=> '1',
						'style'			=> 'width:408px;',
						'derecha'		=> '1'
				),
				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Textp',
						'tipo'			=> 'html',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '150px',
						'style'			=> 'height:250px,'
				),
				'fichero'		=>array(
						'campo'			=> 'fichero',
						'label'			=> 'Archivo',
						'tipo'			=> 'sto',
						'width'			=> '300px',
						'style'			=> 'width:200px;',
						'listable'		=> '1',
						'validacion'	=> '0',
						'prefijo'		=> 'doc',
						'carpeta'		=> 'doc_fil',
						'name'			=> 'nombre',
						'enlace'		=> 'down'
				),
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'contenidos',
		'edicion_rapida'	=> '1',
		'group'			=> 'id_grupo',
		'page'			=> '1',
		'edicion_completa'=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PUBLICACIONES2_GRUPOS']=array(
		'titulo'		=> 'Directorios',
		'nombre_singular'=> 'directorio',
		'nombre_plural'	=> 'directorios',
		'tabla'			=> 'publicaciones2_grupos',
		'archivo'		=> 'publicaciones2_grupos',
		'prefijo'		=> 'pubgru2',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Directorios',
		'crear_label'	=> '80px',
		'crear_txt'		=> '400px',
		'me'			=> 'PUBLICACIONES2_GRUPOS',
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
				'codigo'		=>array(
						'label'			=> 'Código',
						'campo'			=> 'codigo',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '100px',
						'style'			=> 'width:100px;',
						'derecha'		=> '1'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'style'			=> 'width:290px;',
						'width'			=> '450px',
						'derecha'		=> '2',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'controles'		=> '<a  href="custom/publicaciones2_items.php?id_grupo=[id]">{select count(*) from publicaciones2_items where id_grupo=[id]} publicaciones</a>'
				),
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'contenidos',
		'edicion_rapida'	=> '1',
		'crear_quick'	=> '1',
		'page'			=> '1',
		'seccion'		=> 'Acerbo Documentario',
		'order_by'		=> 'codigo asc',
		'set_fila_fijo'	=> '4'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PUBLICACIONES2_ITEMS']=array(
		'titulo'		=> 'Publicaciones',
		'nombre_singular'=> 'publicación',
		'nombre_plural'	=> 'publicaciones',
		'tabla'			=> 'publicaciones2_items',
		'archivo'		=> 'publicaciones2_items',
		'prefijo'		=> 'pubite2',
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
		'menu_label'	=> 'Documentos',
		'por_pagina'	=> '50',
		'me'			=> 'PUBLICACIONES2_ITEMS',
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
						'label'			=> 'Directorio',
						'campo'			=> 'id_grupo',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'width'			=> '200px',
						'validacion'	=> '0',
						'default'		=> '[id_grupo]',
						'opciones'		=> 'id,nombre|publicaciones2_grupos',
						'foreig'		=> '1'
				),
				'fecha'			=>array(
						'campo'			=> 'fecha',
						'label'			=> 'Fecha',
						'tipo'			=> 'fch',
						'width'			=> '70px',
						'listable'		=> '1',
						'validacion'	=> '0',
						'formato'		=> '5',
						'rango'			=> '-4 years,now',
						'default'		=> 'now()'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '200px',
						'like'			=> '1',
						'style'			=> 'width:408px;',
						'derecha'		=> '1'
				),
				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Textp',
						'tipo'			=> 'html',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '150px',
						'style'			=> 'height:350px,'
				),
				'fichero'		=>array(
						'campo'			=> 'fichero',
						'label'			=> 'Archivo',
						'tipo'			=> 'sto',
						'width'			=> '300px',
						'style'			=> 'width:200px;',
						'listable'		=> '1',
						'validacion'	=> '0',
						'prefijo'		=> 'doc',
						'carpeta'		=> 'doc_fil2',
						'name'			=> 'nombre',
						'enlace'		=> 'down'
				),
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'contenidos',
		'edicion_rapida'	=> '1',
		'group'			=> 'id_grupo',
		'page'			=> '1',
		'edicion_completa'=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PUBLICACIONES3_GRUPOS']=array(
		'titulo'		=> 'Directorios',
		'nombre_singular'=> 'directorio',
		'nombre_plural'	=> 'directorios',
		'tabla'			=> 'publicaciones3_grupos',
		'archivo'		=> 'publicaciones3_grupos',
		'prefijo'		=> 'pubgru3',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Directorios',
		'crear_label'	=> '80px',
		'crear_txt'		=> '400px',
		'me'			=> 'PUBLICACIONES3_GRUPOS',
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
						'width'			=> '300px',
						'unique'		=> '0',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'controles'		=> '<a  href="custom/publicaciones3_items.php?id_grupo=[id]">{select count(*) from publicaciones3_items where id_grupo=[id]} publicaciones</a>'
				),
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'contenidos',
		'edicion_rapida'	=> '1',
		'crear_quick'	=> '1',
		'page'			=> '1',
		'seccion'		=> 'Normas Laborales'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PUBLICACIONES3_ITEMS']=array(
		'titulo'		=> 'Publicaciones',
		'nombre_singular'=> 'publicación',
		'nombre_plural'	=> 'publicaciones',
		'tabla'			=> 'publicaciones3_items',
		'archivo'		=> 'publicaciones3_items',
		'prefijo'		=> 'pubite3',
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
		'menu_label'	=> 'Documentos',
		'por_pagina'	=> '50',
		'me'			=> 'PUBLICACIONES3_ITEMS',
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
						'label'			=> 'Directorio',
						'campo'			=> 'id_grupo',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'width'			=> '200px',
						'validacion'	=> '0',
						'default'		=> '[id_grupo]',
						'opciones'		=> 'id,nombre|publicaciones3_grupos',
						'foreig'		=> '1'
				),
				'fecha'			=>array(
						'campo'			=> 'fecha',
						'label'			=> 'Fecha',
						'tipo'			=> 'fch',
						'width'			=> '70px',
						'listable'		=> '1',
						'validacion'	=> '0',
						'formato'		=> '5',
						'style'			=> '',
						'rango'			=> '-4 years,now',
						'default'		=> 'now()'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '200px',
						'like'			=> '1',
						'style'			=> 'width:408px;',
						'derecha'		=> '1'
				),
				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Textp',
						'tipo'			=> 'html',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '150px',
						'style'			=> 'height:250px,'
				),
				'fichero'		=>array(
						'campo'			=> 'fichero',
						'label'			=> 'Archivo',
						'tipo'			=> 'sto',
						'width'			=> '300px',
						'style'			=> 'width:200px;',
						'listable'		=> '1',
						'validacion'	=> '0',
						'prefijo'		=> 'doc',
						'carpeta'		=> 'doc_fil3',
						'name'			=> 'nombre',
						'enlace'		=> 'down'
				),
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'contenidos',
		'edicion_rapida'	=> '1',
		'group'			=> 'id_grupo',
		'page'			=> '1',
		'edicion_completa'=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['DOCUMENTOS_GRUPOS']=array(
		'titulo'		=> 'Directorios',
		'nombre_singular'=> 'directorio',
		'nombre_plural'	=> 'directorios',
		'tabla'			=> 'documentos_grupos',
		'archivo'		=> 'documentos_grupos',
		'prefijo'		=> 'docgru',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Directorios',
		'crear_label'	=> '80px',
		'crear_txt'		=> '400px',
		'me'			=> 'DOCUMENTOS_GRUPOS',
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
						'width'			=> '300px',
						'unique'		=> '0',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'controles'		=> '<a  href="custom/documentos_items.php?id_grupo=[id]">{select count(*) from documentos_items where id_grupo=[id]} documentos</a>'
				),
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'contenidos',
		'edicion_rapida'	=> '1',
		'crear_quick'	=> '1',
		'page'			=> '1',
		'seccion'		=> 'Documentos'
);
/******************************************************************************************************************************************************/

$objeto_tabla['DOCUMENTOS_ITEMS']=array(
		'titulo'		=> 'Documentos',
		'nombre_singular'=> 'documento',
		'nombre_plural'	=> 'documentos',
		'tabla'			=> 'documentos_items',
		'archivo'		=> 'documentos_items',
		'prefijo'		=> 'docite',
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
		'menu_label'	=> 'Documentos',
		'por_pagina'	=> '50',
		'me'			=> 'DOCUMENTOS_ITEMS',
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
						'label'			=> 'Directorio',
						'campo'			=> 'id_grupo',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'width'			=> '200px',
						'validacion'	=> '0',
						'default'		=> '[id_grupo]',
						'opciones'		=> 'id,nombre|documentos_grupos',
						'foreig'		=> '1'
				),
				'fecha'			=>array(
						'campo'			=> 'fecha',
						'label'			=> 'Fecha',
						'tipo'			=> 'fch',
						'width'			=> '70px',
						'listable'		=> '1',
						'validacion'	=> '0',
						'formato'		=> '5'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '200px',
						'like'			=> '1',
						'style'			=> 'width:408px;',
						'derecha'		=> '1'
				),
				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Textp',
						'tipo'			=> 'html',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '150px',
						'style'			=> 'height:350px,'
				),
				'fichero'		=>array(
						'campo'			=> 'fichero',
						'label'			=> 'Archivo',
						'tipo'			=> 'sto',
						'width'			=> '300px',
						'style'			=> 'width:200px;',
						'listable'		=> '1',
						'validacion'	=> '0',
						'prefijo'		=> 'doc',
						'carpeta'		=> 'doc_fil',
						'name'			=> 'nombre',
						'enlace'		=> 'down'
				),
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'contenidos',
		'edicion_rapida'	=> '1',
		'group'			=> 'id_grupo',
		'page'			=> '1',
		'edicion_completa'=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['NEWS_GRUPOS']=array(
		'titulo'		=> 'Categorías',
		'nombre_singular'=> 'categoría',
		'nombre_plural'	=> 'categorías',
		'tabla'			=> 'news_grupos',
		'archivo'		=> 'news_grupos',
		'archivo_hijo'	=> 'news_items',
		'prefijo'		=> 'newsgru',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Categorías',
		'me'			=> 'NEWS_GRUPOS',
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
						'width'			=> '300px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'controles'		=> '<a href="custom/news_items.php?id=[id]">{select count(*) from news_items where id_grupo=[id]} publicaciones</a>',
						'style'			=> 'width:300px;'
				),
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'contenidos',
		'edicion_completa'=> '0',
		'expandir_vertical'=> '0',
		'control'		=> '1',
		'seccion'		=> 'noticias',
		'page'			=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['NEWS_ITEMS']=array(
		'titulo'		=> 'Noticias',
		'nombre_singular'=> 'noticia',
		'nombre_plural'	=> 'noticias',
		'tabla'			=> 'news_items',
		'archivo'		=> 'news_items',
		'archivo_hijo'	=> 'news_fotos',
		'prefijo'		=> 'newite',
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
		'me'			=> 'NEWS_ITEMS',
		'orden'			=> '1',
		'order_by'		=> 'fecha desc',
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
						'label'			=> 'Categoría',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '1',
						'default'		=> '[id]',
						'foreig'		=> '1',
						'style'			=> 'width:200px,',
						'opciones'		=> 'id,nombre|news_grupos',
						'queries'		=> '0'
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
						'validacion'	=> '1',
						'listable'		=> '1',
						'queries'		=> '0'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Título',
						'unique'		=> '1',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'like'			=> '1',
						'width'			=> '230px',
						'controles'		=> '<a href="custom/news_fotos.php?id=[id]">{select count(*) from news_fotos where id_item=[id]} fotos</a>',
						'control'		=> '1',
						'size'			=> '250'
				),
				'resumen'		=>array(
						'campo'			=> 'resumen',
						'label'			=> 'Resúmen',
						'tipo'			=> 'txt',
						'listable'		=> '0',
						'like'			=> '1',
						'validacion'	=> '0',
						'width'			=> '150px',
						'fulltext'		=> '1',
						'style'			=> 'height:100px;'
				),
				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Publicación',
						'tipo'			=> 'html',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '150px',
						'style'			=> 'height:350px,'
				),
				'estructura'	=>array(
						'campo'			=> 'estructura',
						'label'			=> 'Estructura',
						'tipo'			=> 'com',
						'width'			=> '180px',
						'listable'		=> '1',
						'validacion'	=> '1',
						'opciones'		=>array(
								'1'			=> 'PRINCIPAL',
								'2'			=> 'REGULAR'
						),
						'style'			=> 'width:200px;'
				),
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'contenidos',
		'edicion_completa'=> '1',
		'page'			=> '1',
		'creacion_hijo'	=> 'news_fotos'
);
/******************************************************************************************************************************************************/

$objeto_tabla['NEWS_FOTOS']=array(
		'titulo'		=> 'Fotos de {select nombre from news_items where id=[id]}',
		'nombre_singular'=> 'foto',
		'nombre_plural'	=> 'fotos',
		'tabla'			=> 'news_fotos',
		'archivo'		=> 'news_fotos',
		'prefijo'		=> 'newfot',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'crear_label'	=> '120px',
		'crear_txt'		=> '400px',
		'altura_listado'	=> '60px',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '0',
		'menu_label'	=> '',
		'me'			=> 'NEWS_FOTOS',
		'orden'			=> '1',
		'por_linea'		=> '4',
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
				'id_item'		=>array(
						'campo'			=> 'id_item',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'validacion'	=> '0',
						'default'		=> '[id]',
						'foreig'		=> '1'
				),
				'file'			=>array(
						'campo'			=> 'file',
						'label'			=> 'Foto',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '1',
						'prefijo'		=> 'newite',
						'carpeta'		=> 'newite_imas',
						'tamanos'		=> '150x120,273x1000,590x1000',
						'tamano_listado'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px,height:auto,',
						'image_library'	=> '1'
				),
				'foto_descripcion'=>array(
						'campo'			=> 'foto_descripcion',
						'label'			=> 'Descripción',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '207px'
				),
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'contenidos',
		'page'			=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['SECCIONES']=array(
		'grupo'			=> 'contenidos',
		'titulo'		=> 'Secciones',
		'nombre_singular'=> 'sección',
		'nombre_plural'	=> 'secciones',
		'tabla'			=> 'secciones',
		'archivo'		=> 'secciones',
		'prefijo'		=> 'pagdep',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '0',
		'menu'			=> '0',
		'menu_label'	=> 'Secciones',
		'me'			=> 'SECCIONES',
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
						'width'			=> '300px'
				),
				'seccion'		=>array(
						'campo'			=> 'seccion',
						'label'			=> 'Sección',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				),
				'file'			=>array(
						'campo'			=> 'file',
						'label'			=> 'Foto',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'prefijo'		=> 'depfot',
						'carpeta'		=> 'depfot_imas',
						'tamanos'		=> '150x120,203x88',
						'tamano_listado'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px,height:auto,'
				),
				'tipo'			=>array(
						'campo'			=> 'tipo',
						'label'			=> 'Tipo',
						'listable'		=> '1',
						'tipo'			=> 'com',
						'opciones'		=>array(
								'1'			=> 'Departamento',
								'2'			=> 'Principal'
						),
						'width'			=> '150px'
				),
				'color'			=>array(
						'campo'			=> 'color',
						'label'			=> 'Color',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '50px'
				)
		),
		'importar_csv'	=> '0',
		'disabled'		=> '0',
		'edicion_rapida'	=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['TEXTOS_GRUPOS']=array(
		'titulo'		=> 'Bloques',
		'nombre_singular'=> 'bloque',
		'nombre_plural'	=> 'bloques',
		'tabla'			=> 'textos_grupos',
		'archivo'		=> 'textos_grupos',
		'archivo_hijo'	=> 'textos_subgrupos',
		'prefijo'		=> 'texgru',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Bloques',
		'crear_label'	=> '80px',
		'crear_txt'		=> '400px',
		'me'			=> 'TEXTOS_GRUPOS',
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
						'width'			=> '300px',
						'unique'		=> '0',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'controles'		=> '<a  href="custom/textos_items.php?id_grupo=[id]">{select count(*) from textos_items where id_grupo=[id]} textos</a>

						<a  href="custom/textos_subgrupos.php?id_grupo=[id]">{select count(*) from textos_subgrupos where id_grupo=[id]} categorías</a>'
				),
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'contenidos',
		'edicion_rapida'	=> '1',
		'crear_quick'	=> '1',
		'page'			=> '1',
		'seccion'		=> 'Bloques'
);
/******************************************************************************************************************************************************/

$objeto_tabla['TEXTOS_SUBGRUPOS']=array(
		'titulo'		=> '<a href="custom/productos_grupos.php">Bloques</a>  -

                      Categorías de bloque {select nombre from textos_grupos where id=[id]}',
		'nombre_singular'=> 'categoría',
		'nombre_plural'	=> 'categorías',
		'tabla'			=> 'textos_subgrupos',
		'archivo'		=> 'textos_subgrupos',
		'prefijo'		=> 'texsubgru',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Categorías',
		'me'			=> 'TEXTOS_SUBGRUPOS',
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
						'controles'		=> '<a href="custom/textos_items.php?id_subgrupo=[id]">{select count(*) from textos_items where id_subgrupo=[id]} textos</a>'
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
				),
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'contenidos',
		'crear_quick'	=> '1',
		'group'			=> 'id_grupo',
		'page'			=> '1'
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
				),
				'id_subgrupo'	=>array(
						'label'			=> 'Categoría',
						'campo'			=> 'id_subgrupo',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'width'			=> '200px',
						'validacion'	=> '0',
						'default'		=> '[id_subgrupo]',
						'opciones'		=> 'id,nombre|textos_subgrupos',
						'foreig'		=> '1'
				),
				'fecha'			=>array(
						'campo'			=> 'fecha',
						'label'			=> 'Fecha',
						'tipo'			=> 'fch',
						'width'			=> '70px',
						'listable'		=> '1',
						'validacion'	=> '0',
						'formato'		=> '5'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '200px',
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
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'contenidos',
		'edicion_rapida'	=> '1',
		'seccion'		=> '',
		'group'			=> 'id_grupo',
		'order_by'		=> 'id_subgrupo asc',
		'page'			=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['BANNERS']=array(
		'me'			=> 'BANNERS',
		'titulo'		=> 'Archivos',
		'nombre_singular'=> 'archivo',
		'nombre_plural'	=> 'archivos',
		'tabla'			=> 'banners',
		'archivo'		=> 'banners',
		'prefijo'		=> 'ban',
		'eliminar'		=> '0',
		'editar'		=> '1',
		'crear'			=> '0',
		'visibilidad'	=> '1',
		'crear_label'	=> '110px',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Archivos',
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
						'listable'		=> '1',
						'validacion'	=> '1',
						'constante'		=> '1',
						'width'			=> '100px',
						'style'			=> 'width:100px;'
				),
				'titulo'		=>array(
						'campo'			=> 'titulo',
						'label'			=> 'Titulo',
						'tipo'			=> 'inp',
						'width'			=> '100px',
						'style'			=> 'width:200px;',
						'listable'		=> '1'
				),
				'fichero'		=>array(
						'campo'			=> 'fichero',
						'label'			=> 'Archivo',
						'tipo'			=> 'sto',
						'width'			=> '150px',
						'style'			=> 'width:200px;',
						'listable'		=> '1',
						'validacion'	=> '0',
						'prefijo'		=> 'ban',
						'carpeta'		=> 'ban_imas'
				),
				'url'			=>array(
						'campo'			=> 'url',
						'label'			=> 'Url',
						'tipo'			=> 'inp',
						'width'			=> '150px',
						'style'			=> 'width:200px;',
						'listable'		=> '1'
				),
				'dimensiones'	=>array(
						'campo'			=> 'dimensiones',
						'label'			=> 'Dimensiones',
						'tipo'			=> 'inp',
						'width'			=> '50px',
						'style'			=> 'width:50px;',
						'listable'		=> '1'
				),
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'contenidos',
		'edicion_completa'=> '0',
		'seccion'		=> 'Archivos y Variables',
		'page'			=> '1',
		'edicion_rapida'	=> '1'
);
/******************************************************************************************************************************************************/

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
						'validacion'	=> '0',
						'width'			=> '300px'
				),
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'contenidos',
		'page'			=> '1',
		'disabled'		=> '0'
);
/******************************************************************************************************************************************************/

$objeto_tabla['BLOG_NOTICIAS']=array(
		'titulo'		=> 'Notas',
		'nombre_singular'=> 'nota',
		'nombre_plural'	=> 'notas',
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
		'menu_label'	=> 'Notas',
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
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'contenidos',
		'edicion_completa'=> '1',
		'alias_grupo'	=> '',
		'edicion_rapida'	=> '1',
		'page'			=> '1',
		'disabled'		=> '0',
		'seccion'		=> 'blog'
);
/******************************************************************************************************************************************************/

$objeto_tabla['BLOG_ACTIVIDADES']=array(
		'titulo'		=> 'Actividades',
		'nombre_singular'=> 'actividad',
		'nombre_plural'	=> 'actividades',
		'tabla'			=> 'blog_actividades',
		'archivo'		=> 'blog_actividades',
		'archivo_hijo'	=> 'blog_actividades_fotos',
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
						'width'			=> '230px',
						'controles'		=> '<a  rel="subs" href="custom/blog_actividades_fotos.php?id=[id]">{select count(*) from blog_actividades_fotos where id_grupo=[id]}  fotos</a>'
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
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'contenidos',
		'edicion_completa'=> '1',
		'edicion_rapida'	=> '1',
		'page'			=> '1',
		'disabled'		=> '0'
);
/******************************************************************************************************************************************************/

$objeto_tabla['BLOG_ACTIVIDADES_FOTOS']=array(
		'titulo'		=> '<a href="custom/blog_actividades.php">Actividades</a>

                          - Fotos del Bloque {select nombre from blog_actividades where id=[id]}',
		'nombre_singular'=> 'foto',
		'nombre_plural'	=> 'fotos',
		'tabla'			=> 'blog_actividades_fotos',
		'archivo'		=> 'blog_actividades_fotos',
		'prefijo'		=> 'bloactfot',
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
		'me'			=> 'BLOG_ACTIVIDADES_FOTOS',
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
						'foreigkey'		=> 'BLOG_ACTIVIDADES'
				),
				'file'			=>array(
						'campo'			=> 'file',
						'label'			=> 'Foto',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '1',
						'prefijo'		=> 'bloact',
						'carpeta'		=> 'bloact_imas',
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
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'contenidos',
		'por_linea'		=> '5',
		'disabled'		=> '0',
		'page'			=> '1'
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
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'contenidos',
		'page'			=> '1',
		'disabled'		=> '0'
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
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'contenidos',
		'crear_label'	=> '110px',
		'crear_txt'		=> '600px',
		'por_linea'		=> '5',
		'page'			=> '1',
		'disabled'		=> '0'
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
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'contenidos',
		'por_linea'		=> '1',
		'seccion'		=> '',
		'disabled'		=> '0',
		'page'			=> '1'
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
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'contenidos',
		'por_linea'		=> '5',
		'disabled'		=> '0',
		'page'			=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['BLOG_LINKS_ADICIONALES']=array(
		'titulo'		=> 'Links Adicionales',
		'nombre_singular'=> 'link',
		'nombre_plural'	=> 'links',
		'tabla'			=> 'blog_links_adicionales',
		'archivo'		=> 'blog_links_adicionales',
		'prefijo'		=> 'blolin',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'crear_label'	=> '60px',
		'crear_txt'		=> '400px',
		'altura_listado'	=> '60px',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Links Adicionales',
		'por_pagina'	=> '56',
		'me'			=> 'BLOG_LINKS_ADICIONALES',
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
						'label'			=> '',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'style'			=> 'width:200px;',
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
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'contenidos',
		'crear_quick'	=> '1',
		'page'			=> '1'
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
				'name'			=>array(
						'campo'			=> 'name',
						'label'			=> 'Name',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'constante'		=> '1',
						'size'			=> '20',
						'width'			=> '130px'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '300px',
						'unique'		=> '0',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'controles'		=> '<a rel="subs"  href="custom/banners_fotos_fotos.php?id=[id]">{select count(*) from banners_fotos_fotos where id_grupo=[id]}  fotos</a>

							'
				),
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'publicidad',
		'por_linea'		=> '1',
		'crear_quick'	=> '0',
		'page'			=> '1'
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
		'crear_label'	=> '60px',
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
						'tamanos'		=> '150x120,750x243,202x237,202x93,245x109,245x221,245x110',
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
						'listable'		=> '1',
						'size'			=> '160'
				),
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'publicidad',
		'por_linea'		=> '4',
		'crear_quick'	=> '1',
		'page'			=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['BANNERS2_FOTOS']=array(
		'titulo'		=> 'Banners Especiales',
		'nombre_singular'=> 'bloques de fotos',
		'nombre_plural'	=> 'bloque de fotos',
		'tabla'			=> 'banners2_fotos',
		'archivo'		=> 'banners2_fotos',
		'archivo_hijo'	=> 'banners2_fotos_fotos',
		'prefijo'		=> 'ban2fot',
		'eliminar'		=> '0',
		'editar'		=> '1',
		'crear'			=> '0',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Banners Especiales',
		'me'			=> 'BANNERS2_FOTOS',
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
				'name'			=>array(
						'campo'			=> 'name',
						'label'			=> 'Name',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'constante'		=> '1',
						'size'			=> '20',
						'width'			=> '130px',
						'disabled'		=> '1'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '300px',
						'unique'		=> '0',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'controles'		=> '<a rel="subs"  href="custom/banners2_fotos_fotos.php?id=[id]">{select count(*) from banners2_fotos_fotos where id_grupo=[id]}  fotos</a>

							'
				),
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'publicidad',
		'por_linea'		=> '1',
		'crear_quick'	=> '0',
		'page'			=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['BANNERS2_FOTOS_FOTOS']=array(
		'titulo'		=> '<a href="custom/banners2_fotos.php">Bloques de fotos</a>

                          - Fotos del Bloque {select nombre from banners2_fotos where id=[id]}',
		'nombre_singular'=> 'foto',
		'nombre_plural'	=> 'fotos',
		'tabla'			=> 'banners2_fotos_fotos',
		'archivo'		=> 'banners2_fotos_fotos',
		'prefijo'		=> 'ban2fot',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'crear_label'	=> '60px',
		'crear_txt'		=> '400px',
		'altura_listado'	=> '60px',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '0',
		'menu_label'	=> '',
		'por_pagina'	=> '56',
		'me'			=> 'BANNERS2_FOTOS_FOTOS',
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
						'foreigkey'		=> 'BANNERS2_FOTOS',
						'opciones'		=> 'id,nombre|banners2_fotos'
				),
				'file'			=>array(
						'campo'			=> 'file',
						'label'			=> 'Foto',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '1',
						'prefijo'		=> 'banfot2',
						'carpeta'		=> 'banfot2_imas',
						'tamanos'		=> '150x120,211x132',
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
						'listable'		=> '1',
						'size'			=> '160'
				),
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'publicidad',
		'por_linea'		=> '4',
		'crear_quick'	=> '1',
		'page'			=> '1'
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
						'width'			=> '100px',
						'listable'		=> '1',
						'validacion'	=> '1',
						'constante'		=> '1',
						'formato'		=> '7'
				),
				'apellidos'		=>array(
						'label'			=> 'Apellidos',
						'campo'			=> 'apellidos',
						'validacion'	=> '1',
						'derecha'		=> '1',
						'tipo'			=> 'inp',
						'width'			=> '150px',
						'style'			=> 'width:200px;',
						'web_form'		=> '1'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '100px',
						'style'			=> 'width:200px;',
						'derecha'		=> '2'
				),
				'telefono'		=>array(
						'campo'			=> 'telefono',
						'label'			=> 'Teléfono',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '100px',
						'style'			=> 'width:100px;',
						'derecha'		=> '1'
				),
				'celular'		=>array(
						'label'			=> 'Celular',
						'campo'			=> 'celular',
						'derecha'		=> '2',
						'tipo'			=> 'inp',
						'width'			=> '150px',
						'style'			=> 'width:100px;',
						'web_form'		=> '1'
				),
				'email'			=>array(
						'campo'			=> 'email',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px;',
						'derecha'		=> '1'
				),
				'distrito'		=>array(
						'label'			=> 'Distrito',
						'campo'			=> 'distrito',
						'derecha'		=> '1',
						'tipo'			=> 'inp',
						'width'			=> '150px',
						'style'			=> 'width:150px;',
						'web_form'		=> '1'
				),
				'provincia'		=>array(
						'label'			=> 'Provincia',
						'campo'			=> 'provincia',
						'derecha'		=> '2',
						'tipo'			=> 'inp',
						'width'			=> '150px',
						'style'			=> 'width:150px;',
						'web_form'		=> '1'
				),
				'como_se_entero'	=>array(
						'label'			=> 'Cómo se enteró de nosotros',
						'campo'			=> 'como_se_entero',
						'derecha'		=> '1',
						'tipo'			=> 'com',
						'opciones'		=>array(
								'1'			=> 'Web',
								'2'			=> 'Páginas Amarillas',
								'3'			=> 'Mailing',
								'4'			=> 'Publicidad de vehículos',
								'5'			=> 'Recomendación de clientes',
								'6'			=> 'Redes Sociales (Facebook, Twitter)'
						),
						'web_form'		=> '1'
				),
				'comentario'	=>array(
						'campo'			=> 'comentario',
						'label'			=> 'Comentario',
						'tipo'			=> 'txt',
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
						'width'			=> '300px',
						'web_form'		=> '0',
						'disabled'		=> '1'
				),
				'ciudad'		=>array(
						'campo'			=> 'ciudad',
						'label'			=> 'Ciudad',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '300px',
						'web_form'		=> '0',
						'disabled'		=> '1'
				),
				'pais'			=>array(
						'campo'			=> 'pais',
						'label'			=> 'País',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '300px',
						'web_form'		=> '0',
						'disabled'		=> '1'
				)
		),
		'grupo'			=> 'formularios',
		'edicion_completa'=> '1'
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
		'menu'			=> '0',
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

$objeto_tabla['COTIZACIONES']=array(
		'me'			=> 'COTIZACIONES',
		'titulo'		=> 'Cotizaciones',
		'nombre_singular'=> 'cotizaciones',
		'nombre_plural'	=> 'cotizaciones',
		'tabla'			=> 'cotizaciones',
		'archivo'		=> 'cotizaciones',
		'prefijo'		=> 'cot',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'edicion_rapida'	=> '1',
		'edicion_completa'=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '1',
		'calificacion'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Cotizaciones',
		'por_pagina'	=> '50',
		'orden'			=> '0',
		'crear_label'	=> '110px',
		'crear_txt'		=> '550px',
		'altura_listado'	=> 'auto',
		'grupo'			=> 'formularios',
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
						'label'			=> 'Nombre o Razón Social',
						'campo'			=> 'nombre',
						'validacion'	=> '1',
						'derecha'		=> '1',
						'tipo'			=> 'inp',
						'width'			=> '100px',
						'style'			=> 'width:100px;',
						'web_form'		=> '1'
				),
				'ruc'			=>array(
						'label'			=> 'N° RUC',
						'campo'			=> 'ruc',
						'derecha'		=> '2',
						'tipo'			=> 'inp',
						'width'			=> '100px',
						'style'			=> 'width:150px;',
						'web_form'		=> '1'
				),
				'contacto_nombre'=>array(
						'label'			=> 'Persona de Contacto',
						'campo'			=> 'contacto_nombre',
						'derecha'		=> '1',
						'tipo'			=> 'inp',
						'width'			=> '100px',
						'style'			=> 'width:150px;',
						'web_form'		=> '1'
				),
				'contacto_cargo'	=>array(
						'label'			=> 'Cargo',
						'campo'			=> 'contacto_cargo',
						'derecha'		=> '2',
						'tipo'			=> 'inp',
						'width'			=> '100px',
						'style'			=> 'width:150px;',
						'web_form'		=> '1'
				),
				'telefono'		=>array(
						'label'			=> 'Teléfono',
						'campo'			=> 'telefono',
						'derecha'		=> '1',
						'tipo'			=> 'inp',
						'width'			=> '100px',
						'style'			=> 'width:150px;',
						'web_form'		=> '1'
				),
				'celular'		=>array(
						'label'			=> 'Celular',
						'campo'			=> 'celular',
						'derecha'		=> '2',
						'tipo'			=> 'inp',
						'width'			=> '100px',
						'style'			=> 'width:150px;',
						'web_form'		=> '1'
				),
				'email'			=>array(
						'label'			=> 'Correo Electrónico',
						'campo'			=> 'email',
						'validacion'	=> '1',
						'derecha'		=> '2',
						'tipo'			=> 'inp',
						'width'			=> '100px',
						'style'			=> 'width:150px;',
						'web_form'		=> '1'
				),
				'tipo_servicio'	=>array(
						'label'			=> 'Tipo de Servicio',
						'campo'			=> 'tipo_servicio',
						'derecha'		=> '1',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'opciones'		=>array(
								'1'			=> 'Envios/Distribución',
								'2'			=> 'Gestión/Trámites',
								'3'			=> 'Outsourcing'
						),
						'web_form'		=> '1'
				),
				'envio_servicio'	=>array(
						'legend'		=> 'Envios/Distribución',
						'label'			=> 'Servicio',
						'campo'			=> 'envio_servicio',
						'derecha'		=> '1',
						'tipo'			=> 'com',
						'opciones'		=>array(
								'1'			=> 'servicio envios permanentes',
								'2'			=> 'servicio envio única vez',
								'3'			=> 'servicio de distribución única vez',
								'4'			=> 'servicio de distribución permanente',
								'5'			=> 'otros',
								'6'			=> 'servicios varios'
						),
						'web_form'		=> '1'
				),
				'que_enviar'	=>array(
						'label'			=> '¿Qué desea enviar?',
						'campo'			=> 'que_enviar',
						'derecha'		=> '1',
						'tipo'			=> 'com',
						'opciones'		=>array(
								'1'			=> 'envío de sobres',
								'2'			=> 'envío de paquetes',
								'3'			=> 'envío de sobres y paquetes',
								'4'			=> 'mercadería',
								'5'			=> 'sobre+paquetes+mercadería',
								'6'			=> 'otros'
						),
						'web_form'		=> '1'
				),
				'envio_valor'	=>array(
						'label'			=> '¿el valor de contenido se encuentre entre?',
						'campo'			=> 'envio_valor',
						'derecha'		=> '2',
						'tipo'			=> 'com',
						'opciones'		=>array(
								'1'			=> 'S/1 a S/300',
								'2'			=> 'S/300 a S/600',
								'3'			=> 'S/600 a S/1,000',
								'4'			=> 'S/1,000 a S/2,000',
								'5'			=> 'S/2,000 a S/3,000',
								'6'			=> 'S/3,000 a S/5,000',
								'7'			=> 'S/5,000 a S/10,000',
								'8'			=> 'S/2,000 a más'
						),
						'web_form'		=> '1'
				),
				'envio_frecuencia'=>array(
						'label'			=> 'Frecuencia de envío',
						'campo'			=> 'envio_frecuencia',
						'derecha'		=> '2',
						'tipo'			=> 'com',
						'opciones'		=>array(
								'1'			=> 'un vez a la semana',
								'2'			=> '2 veces a la semana',
								'3'			=> '3 veces a la semana',
								'4'			=> 'díario',
								'5'			=> 'única vez',
								'6'			=> 'esporádico'
						),
						'web_form'		=> '1'
				),
				'envio_catidad'	=>array(
						'label'			=> 'Cantidad de envíos mensuales',
						'campo'			=> 'envio_catidad',
						'derecha'		=> '1',
						'tipo'			=> 'com',
						'opciones'		=>array(
								'1'			=> '1-100',
								'2'			=> '101-500',
								'3'			=> '501-1000',
								'4'			=> '1001-a más',
								'5'			=> 'única vez'
						),
						'web_form'		=> '1'
				),
				'tiempo_entrega'	=>array(
						'label'			=> '¿Cúal es el tiempo de entrega que desea para su envío?',
						'campo'			=> 'tiempo_entrega',
						'derecha'		=> '2',
						'tipo'			=> 'com',
						'opciones'		=>array(
								'1'			=> 'menos de 24 horas',
								'2'			=> '24hrs',
								'3'			=> '48hrs',
								'4'			=> '72hrs',
								'5'			=> 'lo que demores el servicio',
								'6'			=> 'varios tiempos según cada servicio'
						),
						'web_form'		=> '1'
				),
				'servicios_complementarios'=>array(
						'label'			=> '¿Desea servicios complementarios?',
						'campo'			=> 'servicios_complementarios',
						'derecha'		=> '1',
						'tipo'			=> 'txt',
						'web_form'		=> '1'
				),
				'servicio_requerido'=>array(
						'legend'		=> 'Gestión/Trámite',
						'label'			=> 'Servicio Requerido',
						'campo'			=> 'servicio_requerido',
						'derecha'		=> '1',
						'tipo'			=> 'com',
						'opciones'		=>array(
								'1'			=> 'verificación laboral',
								'2'			=> 'verificación domiciliaria',
								'3'			=> 'recojo y entrega de cheques',
								'4'			=> 'recojo y entrega de letras',
								'5'			=> 'recojo y entrega de facturas',
								'7'			=> 'partida de bautizo',
								'8'			=> 'partida de confirmación',
								'9'			=> 'partida de matrimonio',
								'10'			=> 'partida de naciomiento',
								'11'			=> 'partida de defunción',
								'12'			=> 'copia de minuta',
								'13'			=> 'cartas notaría',
								'14'			=> 'compra de bases para licitaciones',
								'15'			=> 'representación en concurso público',
								'16'			=> 'representación en adjudicaciones directas',
								'17'			=> 'recojo de muestras',
								'18'			=> 'recojo de comprobantes de retención',
								'19'			=> 'certificado de estudios',
								'20'			=> 'compra de formato de título',
								'21'			=> 'títulos de propiedad',
								'22'			=> 'título vehícular',
								'23'			=> 'duplicado de tarjeta de propiedad'
						),
						'web_form'		=> '1'
				),
				'tramites_frecuencia'=>array(
						'label'			=> 'Frecuencia',
						'campo'			=> 'tramites_frecuencia',
						'derecha'		=> '2',
						'tipo'			=> 'com',
						'opciones'		=>array(
								'1'			=> 'única vez',
								'2'			=> 'frecuentemente'
						),
						'web_form'		=> '1'
				),
				'tramite_direccion'=>array(
						'label'			=> 'Dirección donde ser realiza el servicio',
						'campo'			=> 'tramite_direccion',
						'derecha'		=> '1',
						'tipo'			=> 'inp',
						'width'			=> '100px',
						'style'			=> 'width:150px;',
						'web_form'		=> '1'
				),
				'tramite_provincia'=>array(
						'label'			=> 'Provincia',
						'campo'			=> 'tramite_provincia',
						'derecha'		=> '2',
						'tipo'			=> 'inp',
						'width'			=> '100px',
						'style'			=> 'width:150px;',
						'web_form'		=> '1'
				),
				'tramite_fecha'	=>array(
						'label'			=> 'Fecha requerida para la gestión',
						'campo'			=> 'tramite_fecha',
						'derecha'		=> '2',
						'tipo'			=> 'fch',
						'formato'		=> '7',
						'width'			=> '300px',
						'style'			=> 'width:300px;',
						'web_form'		=> '1'
				),
				'tramite_observaciones'=>array(
						'label'			=> 'Observaciones',
						'campo'			=> 'tramite_observaciones',
						'derecha'		=> '1',
						'tipo'			=> 'txt',
						'web_form'		=> '1'
				),
				'outsourcing_mortizados'=>array(
						'legend'		=> 'Outsourcing',
						'label'			=> 'Mortizados',
						'campo'			=> 'outsourcing_mortizados',
						'derecha'		=> '1',
						'tipo'			=> 'inp',
						'width'			=> '100px',
						'style'			=> 'width:150px;',
						'web_form'		=> '1'
				),
				'outsourcing_mensajero_interno'=>array(
						'label'			=> 'Mensajero Interno',
						'campo'			=> 'outsourcing_mensajero_interno',
						'derecha'		=> '1',
						'tipo'			=> 'inp',
						'width'			=> '100px',
						'style'			=> 'width:150px;',
						'web_form'		=> '1'
				),
				'outsourcing_mensajero_externo'=>array(
						'label'			=> 'Mensajero externo',
						'campo'			=> 'outsourcing_mensajero_externo',
						'derecha'		=> '1',
						'tipo'			=> 'inp',
						'width'			=> '100px',
						'style'			=> 'width:150px;',
						'web_form'		=> '1'
				),
				'outsourcing_coordinador'=>array(
						'label'			=> 'Coordinador de mesa de partes',
						'campo'			=> 'outsourcing_coordinador',
						'derecha'		=> '1',
						'tipo'			=> 'inp',
						'width'			=> '100px',
						'style'			=> 'width:150px;',
						'web_form'		=> '1'
				),
				'oursourcing_tiempo'=>array(
						'label'			=> 'Tiempo del requerimiento',
						'campo'			=> 'oursourcing_tiempo',
						'derecha'		=> '1',
						'tipo'			=> 'com',
						'opciones'		=>array(
								'1'			=> '6 meses',
								'2'			=> '1 año',
								'3'			=> '2 años'
						),
						'web_form'		=> '1'
				),
				'outsourcing_observaciones'=>array(
						'label'			=> 'Observaciones',
						'campo'			=> 'outsourcing_observaciones',
						'derecha'		=> '1',
						'tipo'			=> 'txt',
						'web_form'		=> '1'
				)
		),
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['BOLETINES_FILTROS']=array(
		'titulo'		=> 'Grupo de contactos',
		'nombre_singular'=> 'grupo',
		'nombre_plural'	=> 'grupos',
		'tabla'			=> 'boletines_filtros',
		'archivo'		=> 'boletines_filtros',
		'prefijo'		=> 'bolfil',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'crear_label'	=> '200px',
		'crear_txt'		=> '400px',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Grupos de contactos',
		'por_pagina'	=> '56',
		'me'			=> 'BOLETINES_FILTROS',
		'controles'		=> '

							<a class="linkstitu red" href="base2/envio.php">ENVIAR A TODOS</a> 

						',
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
						'controles'		=> '<a class="red" href="base2/envio.php?id_filtro=[id]">enviar</a>

						<a href="custom/boletines.php?id_filtro=[id]">{select count(*) from boletines where id_filtro=[id]} suscritos</a>

						'
				)
		),
		'grupo'			=> 'boletin',
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['BANNERS_BOLETIN']=array(
		'me'			=> 'BANNERS_BOLETIN',
		'titulo'		=> 'Bloques',
		'nombre_singular'=> 'banner',
		'nombre_plural'	=> 'banners',
		'tabla'			=> 'banners_boletin',
		'archivo'		=> 'banners_boletin',
		'prefijo'		=> 'banbol',
		'eliminar'		=> '0',
		'editar'		=> '1',
		'crear'			=> '0',
		'visibilidad'	=> '1',
		'crear_label'	=> '110px',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Bloques de Boletín',
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
						'label'			=> 'Banner',
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
						'width'			=> '100px',
						'style'			=> 'width:200px;',
						'listable'		=> '1',
						'validacion'	=> '0',
						'prefijo'		=> 'banbol',
						'carpeta'		=> 'banbol_imas'
				),
				'titulo'		=>array(
						'campo'			=> 'titulo',
						'label'			=> 'Título',
						'tipo'			=> 'inp',
						'width'			=> '150px',
						'listable'		=> '1'
				),
				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Texto',
						'tipo'			=> 'html',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '300px'
				),
				'url'			=>array(
						'campo'			=> 'url',
						'label'			=> 'Url',
						'tipo'			=> 'inp',
						'width'			=> '110px',
						'style'			=> 'width:200px;',
						'listable'		=> '1'
				),
				'dimensiones'	=>array(
						'campo'			=> 'dimensiones',
						'label'			=> 'Dimensiones',
						'tipo'			=> 'inp',
						'width'			=> '50px',
						'style'			=> 'width:30px;',
						'listable'		=> '1'
				)
		),
		'grupo'			=> 'boletin',
		'edicion_completa'=> '1',
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['CAMPAINS']=array(
		'grupo'			=> 'boletin',
		'titulo'		=> 'Boletines',
		'nombre_singular'=> 'boletín',
		'nombre_plural'	=> 'boletines',
		'tabla'			=> 'campains',
		'archivo'		=> 'campains',
		'prefijo'		=> 'camps',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'crear_label'	=> '100px',
		'crear_txt'		=> '600px',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Boletines',
		'por_pagina'	=> '20',
		'me'			=> 'CAMPAINS',
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
						'unique'		=> '1',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'like'			=> '1',
						'width'			=> '319px',
						'controles'		=> '

							<a href="base2/hilo_boletin.php?verprueba=1&id_campain=[id]" target="_blank" style="color:green;" >vista previa</a>

							'
				),
				'asunto'		=>array(
						'campo'			=> 'asunto',
						'label'			=> 'Asunto',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '219px',
						'size'			=> '250'
				),
				'fronname'		=>array(
						'campo'			=> 'fronname',
						'label'			=> 'From Name',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '219px',
						'default'		=> 'Olva Compras',
						'derecha'		=> '1',
						'style'			=> 'width:200px;'
				),
				'replayto'		=>array(
						'campo'			=> 'replayto',
						'label'			=> 'Replay To',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '219px',
						'derecha'		=> '1',
						'default'		=> 'boletin@olvacompras.com',
						'style'			=> 'width:200px;'
				),
				'file'			=>array(
						'campo'			=> 'file',
						'label'			=> 'Flyer',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '0',
						'prefijo'		=> 'camp',
						'carpeta'		=> 'camp_imas',
						'tamanos'		=> '150x120,800x10000',
						'tamano_listado'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px,height:auto,'
				)
		),
		'creacion_hijo'	=> '',
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
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'sesion_login'	=> '1',
						'like'			=> '1'
				),
				'password'		=>array(
						'campo'			=> 'password',
						'label'			=> 'Password',
						'tipo'			=> 'pas',
						'listable'		=> '1',
						'validacion'	=> '1',
						'sesion_password'=> '1'
				),
				'id_permisos'	=>array(
						'campo'			=> 'id_permisos',
						'label'			=> 'Permisos',
						'width'			=> '120px',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'opciones'		=> 'id,nombre|usuarios_permisos',
						'sesion_permisos'=> '1',
						'queries'		=> '1'
				)
		),
		'grupo'			=> 'sistema',
		'disabled'		=> '0'
);
/******************************************************************************************************************************************************/

$objeto_tabla['USUARIOS_PERMISOS']=array(
		'grupo'			=> 'sistema',
		'titulo'		=> 'Permisos de Usuarios',
		'nombre_singular'=> 'permiso',
		'nombre_plural'	=> 'permisos',
		'tabla'			=> 'usuarios_permisos',
		'archivo'		=> 'usuarios_permisos',
		'prefijo'		=> 'usuper',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '1',
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
						'width'			=> '160px',
						'like'			=> '1'
				),
				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Propiedades',
						'tipo'			=> 'txt',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '300px'
				),
				'multiusuario'	=>array(
						'campo'			=> 'multiusuario',
						'label'			=> 'Multiusuario',
						'width'			=> '40px',
						'listable'		=> '1',
						'tipo'			=> 'com',
						'opciones'		=>array(
								'1'			=> 'Si',
								'0'			=> 'No'
						),
						'default'		=> '0',
						'derecha'		=> '1'
				),
				'per_pages'		=>array(
						'campo'			=> 'per_pages',
						'label'			=> 'Páginas',
						'tipo'			=> 'txt',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '300px'
				)
		),
		'importar_csv'	=> '0',
		'disabled'		=> '0',
		'edicion_completa'=> '1'
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

$objeto_tabla['PAGE_CONFIG']=array(
		'grupo'			=> 'sistema',
		'titulo'		=> 'Páginas de Sección',
		'nombre_singular'=> 'página de sección',
		'nombre_plural'	=> 'paginas de sección',
		'tabla'			=> 'page_config',
		'archivo'		=> 'page_config',
		'prefijo'		=> 'pagcon',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '0',
		'menu'			=> '0',
		'menu_label'	=> 'Pagínas de Sección',
		'me'			=> 'PAGE_CONFIG',
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
						'width'			=> '300px'
				),
				'seccion'		=>array(
						'campo'			=> 'seccion',
						'label'			=> 'Sección',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				)
		),
		'importar_csv'	=> '0',
		'disabled'		=> '0'
);
/******************************************************************************************************************************************************/

$objeto_tabla['CONSULTAS_ITEMS']=array(
		'titulo'		=> 'Consultas',
		'nombre_singular'=> 'consulta',
		'nombre_plural'	=> 'consultas',
		'tabla'			=> 'consultas_items',
		'archivo'		=> 'consultas_items',
		'prefijo'		=> 'consul',
		'archivo_hijo'	=> 'consultas_seguimientos,consultas_documentos',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'stat'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Consultas',
		'me'			=> 'CONSULTAS_ITEMS',
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
				'fecha_consulta'	=>array(
						'label'			=> 'Fecha Consulta',
						'campo'			=> 'fecha_consulta',
						'derecha'		=> '1',
						'tipo'			=> 'fch',
						'formato'		=> '5c',
						'width'			=> '80px',
						'listable'		=> '1',
						'queries'		=> '1',
						'default'		=> 'now()',
						'rango'			=> '-4 years,now'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Apellidos y Nombres',
						'tipo'			=> 'inp',
						'width'			=> '200px',
						'style'			=> 'width:300px;',
						'validacion'	=> '1',
						'listable'		=> '1',
						'like'			=> '1',
						'derecha'		=> '1',
						'controles'		=> '<a href="pop.php?app=enviar_cotizacion&id=[id]" style="color:red;" >Nuevo Mensaje</a>
						<a rel="subs crear" href="custom/consultas_seguimientos.php?id=[id]">{select count(*) from consultas_seguimientos where id_item=[id]} seguimientos</a>
						<a rel="subs" href="custom/consultas_documentos.php?id=[id]">{select count(*) from consultas_documentos where id_item=[id]} documentos</a>'
				),
				'dni'			=>array(
						'campo'			=> 'dni',
						'label'			=> 'DNI',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '80px',
						'style'			=> 'width:60px;',
						'derecha'		=> '2'
				),
				'genero'		=>array(
						'campo'			=> 'genero',
						'label'			=> 'Género',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'Hombre',
								'2'			=> 'Mujer'
						),
						'default'		=> '0',
						'width'			=> '60px',
						'derecha'		=> '2',
						'queries'		=> '1'
				),
				'telefonos'		=>array(
						'campo'			=> 'telefonos',
						'label'			=> 'Teléfonos',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'derecha'		=> '1',
						'style'			=> 'width:100px;',
						'width'			=> '80px'
				),
				'email'			=>array(
						'campo'			=> 'email',
						'label'			=> 'E-mail',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'style'			=> 'width:150px;',
						'width'			=> '150px',
						'derecha'		=> '2'
				),
				'condicion'		=>array(
						'campo'			=> 'condicion',
						'label'			=> 'Condición Laboral',
						'tipo'			=> 'com',
						'opciones'		=>array(
								'T'			=> 'Trabajador',
								'E'			=> 'ExTrabajador'
						),
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '80px',
						'style'			=> 'width:100px;',
						'derecha'		=> '1',
						'queries'		=> '1'
				),
				'empresa'		=>array(
						'campo'			=> 'empresa',
						'label'			=> 'Empresa',
						'tipo'			=> 'inp',
						'width'			=> '180px',
						'style'			=> 'width:300px;',
						'validacion'	=> '0',
						'listable'		=> '1',
						'like'			=> '1',
						'derecha'		=> '2'
				),
				'trabajo_anios'	=>array(
						'label'			=> 'Servicio Años',
						'campo'			=> 'trabajo_anios',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'width'			=> '30px',
						'style'			=> 'width:16px;',
						'variable'		=> 'float',
						'derecha'		=> '1'
				),
				'trabajo_meses'	=>array(
						'label'			=> 'meses',
						'campo'			=> 'trabajo_meses',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'width'			=> '30px',
						'style'			=> 'width:16px;',
						'variable'		=> 'float',
						'derecha'		=> '2'
				),
				'relacion'		=>array(
						'campo'			=> 'relacion',
						'label'			=> 'Relación',
						'tipo'			=> 'com',
						'opciones'		=>array(
								'AFINOAP'		=> 'Afiliado No Aportante',
								'NOAFILI'		=> 'No Afiliado',
								'AFIAPOR'		=> 'Afiliado Aportante'
						),
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '50px',
						'style'			=> 'width:100px;',
						'derecha'		=> '2'
				),
				'dirigente'		=>array(
						'label'			=> 'es Dirigente',
						'campo'			=> 'dirigente',
						'derecha'		=> '2',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'opciones'		=>array(
								'1'			=> 'si',
								'0'			=> 'no'
						),
						'listable'		=> '1',
						'width'			=> '30px'
				),
				'id_razon_social'=>array(
						'label'			=> 'Organismo Sindical',
						'campo'			=> 'id_razon_social',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'width'			=> '150px',
						'validacion'	=> '0',
						'default'		=> '[id_razon_social]',
						'foreig'		=> '1',
						'style'			=> 'width:250px;',
						'tags'			=> '1',
						'queries'		=> '0',
						'derecha'		=> '1',
						'directlink'	=> 'id,nombre|razones_sociales|where visibilidad=1',
						'opciones'		=> 'id,nombre|razones_sociales|where visibilidad=1',
						'crearforeig'	=> '1',
						'ondlselect'	=> '0'
				),
				'sindical'		=>array(
						'label'			=> 'Sindicalizado',
						'campo'			=> 'sindical',
						'derecha'		=> '2',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'opciones'		=>array(
								'1'			=> 'si',
								'0'			=> 'no'
						),
						'listable'		=> '0',
						'width'			=> '30px'
				),
				'id_sector'		=>array(
						'label'			=> 'Sector',
						'campo'			=> 'id_sector',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'width'			=> '100px',
						'validacion'	=> '0',
						'default'		=> '[id_sector]',
						'opciones'		=> 'id,nombre|sectores',
						'foreig'		=> '1',
						'style'			=> 'width:200px;',
						'derecha'		=> '1',
						'queries'		=> '1'
				),
				'id_sector_prod'	=>array(
						'label'			=> 'Sector de Producción',
						'campo'			=> 'id_sector_prod',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'width'			=> '100px',
						'validacion'	=> '0',
						'default'		=> '[id_sector_prod]',
						'opciones'		=> 'id,nombre|sector_prod|order by nombre asc',
						'foreig'		=> '1',
						'style'			=> 'width:200px;',
						'derecha'		=> '2',
						'queries'		=> '1'
				),
				'tipo'			=>array(
						'label'			=> 'Tipo de Consulta',
						'campo'			=> 'tipo',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'width'			=> '150px',
						'validacion'	=> '0',
						'default'		=> '[tipo]',
						'opciones'		=> 'id,nombre|tip_consultas',
						'foreig'		=> '1',
						'style'			=> 'width:250px;',
						'tags'			=> '1',
						'queries'		=> '1',
						'derecha'		=> '1'
				),
				'tags'			=>array(
						'campo'			=> 'tags',
						'label'			=> 'tags',
						'tipo'			=> 'txt',
						'indicador'		=> '1',
						'fulltext'		=> '1',
						'autotags'		=> '1'
				)
		),
		'grupo'			=> 'negociaciones',
		'edicion_completa'=> '1',
		'expandir_vertical'=> '0',
		'calificacion'	=> '0',
		'edicion_rapida'	=> '1',
		'disabled'		=> '1',
		'alias_grupo'	=> 'Negociaciones y Consultas',
		'exportar_excel'	=> '1',
		'set_fila_fijo'	=> '2',
		'seccion'		=> 'Consultas',
		'descripcion'	=> 'Registro de consultas que  realizarn los agremiados y que resuelven los abogados'
);
/******************************************************************************************************************************************************/

$objeto_tabla['CONSULTAS_SEGUIMIENTOS']=array(
		'titulo'		=> 'Seguimientos',
		'nombre_singular'=> 'seguimiento',
		'nombre_plural'	=> 'seguimientos',
		'tabla'			=> 'consultas_seguimientos',
		'archivo'		=> 'consultas_seguimientos',
		'prefijo'		=> 'conseg',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '0',
		'menu_label'	=> 'Seguimientos',
		'me'			=> 'CONSULTAS_SEGUIMIENTOS',
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
				'fecha_opinion'	=>array(
						'label'			=> 'Fecha Opinión',
						'campo'			=> 'fecha_opinion',
						'derecha'		=> '1',
						'tipo'			=> 'fch',
						'formato'		=> '5c',
						'width'			=> '115px',
						'listable'		=> '1',
						'default'		=> 'now()',
						'rango'			=> '-10 years,now'
				),
				'id_item'		=>array(
						'campo'			=> 'id_item',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'validacion'	=> '0',
						'foreig'		=> '1',
						'default'		=> '[id]',
						'disabled'		=> '0'
				),
				'correlativo'	=>array(
						'label'			=> 'Correlativo',
						'campo'			=> 'correlativo',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '40px',
						'style'			=> 'width:40px;',
						'variable'		=> 'float',
						'derecha'		=> '1',
						'disabled'		=> '1'
				),
				'id_abogado'	=>array(
						'label'			=> 'Abogados',
						'campo'			=> 'id_abogado',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'width'			=> '120px',
						'validacion'	=> '0',
						'default'		=> '[id_abogado]',
						'opciones'		=> 'id,nombre|abogados',
						'foreig'		=> '1',
						'style'			=> 'width:250px;',
						'derecha'		=> '1'
				),
				'fecha_derivado'	=>array(
						'label'			=> 'Fecha Derivado',
						'campo'			=> 'fecha_derivado',
						'derecha'		=> '1',
						'tipo'			=> 'fch',
						'formato'		=> '5c',
						'width'			=> '80px',
						'listable'		=> '1',
						'disabled'		=> '1'
				),
				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Opinión',
						'tipo'			=> 'html',
						'width'			=> '240px',
						'style'			=> 'width:400px;',
						'listable'		=> '1'
				),
				'fecha_atencion'	=>array(
						'label'			=> 'Fecha Atención',
						'campo'			=> 'fecha_atencion',
						'derecha'		=> '1',
						'tipo'			=> 'fch',
						'formato'		=> '5c',
						'width'			=> '80px',
						'listable'		=> '1',
						'disabled'		=> '1'
				)
		),
		'grupo'			=> 'negociaciones',
		'edicion_completa'=> '1',
		'expandir_vertical'=> '0',
		'calificacion'	=> '0',
		'edicion_rapida'	=> '1',
		'disabled'		=> '1',
		'order_by'		=> 'id asc'
);
/******************************************************************************************************************************************************/

$objeto_tabla['CONSULTAS_DOCUMENTOS']=array(
		'titulo'		=> 'Documentos',
		'nombre_singular'=> 'documento',
		'nombre_plural'	=> 'documentos',
		'tabla'			=> 'consultas_documentos',
		'archivo'		=> 'consultas_documentos',
		'prefijo'		=> 'condoc',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '0',
		'menu_label'	=> 'Documentos',
		'me'			=> 'CONSULTAS_DOCUMENTOS',
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
						'default'		=> '[id]',
						'disabled'		=> '0'
				),
				'fichero'		=>array(
						'campo'			=> 'fichero',
						'label'			=> 'Archivo',
						'tipo'			=> 'sto',
						'width'			=> '300px',
						'style'			=> 'width:200px;',
						'listable'		=> '1',
						'validacion'	=> '0',
						'prefijo'		=> 'condoc',
						'carpeta'		=> 'doc_con',
						'name'			=> 'nombre',
						'enlace'		=> 'down'
				)
		),
		'grupo'			=> 'negociaciones',
		'edicion_completa'=> '1',
		'expandir_vertical'=> '0',
		'calificacion'	=> '0',
		'edicion_rapida'	=> '1',
		'disabled'		=> '0',
		'order_by'		=> 'id asc'
);
/******************************************************************************************************************************************************/

$objeto_tabla['FAQ_GRUPOS']=array(
		'titulo'		=> 'Temas',
		'nombre_singular'=> 'tema',
		'nombre_plural'	=> 'temas',
		'tabla'			=> 'faq_grupos',
		'archivo'		=> 'faq_grupos',
		'prefijo'		=> 'faqgru',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '0',
		'menu_label'	=> 'Temas',
		'crear_label'	=> '80px',
		'crear_txt'		=> '400px',
		'me'			=> 'FAQ_GRUPOS',
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
						'width'			=> '300px',
						'unique'		=> '0',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'controles'		=> '<a  href="custom/faq_items.php?id_grupo=[id]">{select count(*) from faq_items where id_grupo=[id]} preguntas</a>'
				),
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'negociaciones',
		'edicion_rapida'	=> '1',
		'crear_quick'	=> '1',
		'page'			=> '0',
		'seccion'		=> 'Preguntas Frecuentes'
);
/******************************************************************************************************************************************************/

$objeto_tabla['FAQ_ITEMS']=array(
		'titulo'		=> 'Preguntas',
		'nombre_singular'=> 'pregunta',
		'nombre_plural'	=> 'preguntas',
		'tabla'			=> 'faq_items',
		'archivo'		=> 'faq_items',
		'prefijo'		=> 'faqite',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'crear_label'	=> '60px',
		'crear_txt'		=> '580px',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '0',
		'menu_label'	=> 'Preguntas',
		'por_pagina'	=> '50',
		'me'			=> 'FAQ_ITEMS',
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
						'label'			=> 'Directorio',
						'campo'			=> 'id_grupo',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'width'			=> '200px',
						'validacion'	=> '0',
						'default'		=> '[id_grupo]',
						'opciones'		=> 'id,nombre|faq_grupos',
						'foreig'		=> '1'
				),
				'fecha'			=>array(
						'campo'			=> 'fecha',
						'label'			=> 'Fecha',
						'tipo'			=> 'fch',
						'width'			=> '70px',
						'listable'		=> '1',
						'validacion'	=> '0',
						'formato'		=> '5',
						'style'			=> '',
						'rango'			=> '-4 years,now'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '200px',
						'like'			=> '1',
						'style'			=> 'width:408px;',
						'derecha'		=> '1'
				),
				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Textp',
						'tipo'			=> 'html',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '150px',
						'style'			=> 'height:350px,'
				),
				'fichero'		=>array(
						'campo'			=> 'fichero',
						'label'			=> 'Archivo',
						'tipo'			=> 'sto',
						'width'			=> '300px',
						'style'			=> 'width:200px;',
						'listable'		=> '1',
						'validacion'	=> '0',
						'prefijo'		=> 'doc',
						'carpeta'		=> 'doc_fil4',
						'name'			=> 'nombre',
						'enlace'		=> 'down'
				),
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'negociaciones',
		'edicion_rapida'	=> '1',
		'group'			=> 'id_grupo',
		'page'			=> '0',
		'edicion_completa'=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['CONVENIOS_ITEMS']=array(
		'titulo'		=> 'Convenios Colectivos',
		'nombre_singular'=> 'convenio',
		'nombre_plural'	=> 'convenios',
		'tabla'			=> 'convenios_items',
		'archivo'		=> 'convenios_items',
		'prefijo'		=> 'conite',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Convenios',
		'me'			=> 'CONVENIOS_ITEMS',
		'orden'			=> '1',
		'onedit'		=> 'base2/update_convenios_subitems.php',
		'oncreate'		=> 'base2/update_convenios_subitems.php',
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
				'id_razon_social'=>array(
						'label'			=> 'Razón Social',
						'campo'			=> 'id_razon_social',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'width'			=> '300px',
						'validacion'	=> '1',
						'default'		=> '[id_razon_social]',
						'directlink'	=> 'id,nombre|razones_sociales',
						'opciones'		=> 'id,nombre|razones_sociales|where 1 order by nombre asc',
						'crearforeig'	=> '1',
						'ondlselect'	=> '0',
						'foreig'		=> '1',
						'style'			=> 'width:500px;',
						'controles'		=> '<a rel="subs crear" href="custom/convenios_subitems.php?id=[id]">{select count(*) from convenios_subitems where id_item=[id]} clausulas</a>',
						'tags'			=> '0',
						'queries'		=> '1',
						'like'			=> '0',
						'derecha'		=> '1',
						'dlquery'		=> '1'
				),
				'id_tipo_org_sindical'=>array(
						'label'			=> 'Org Sindical',
						'campo'			=> 'id_tipo_org_sindical',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'width'			=> '130px',
						'validacion'	=> '0',
						'default'		=> '[id_tipo_org_sindical]',
						'opciones'		=> 'id,nombre|tipo_org_sindical',
						'foreig'		=> '1',
						'style'			=> 'width:200px;',
						'derecha'		=> '1',
						'queries'		=> '1'
				),
				'id_etapa_solucion'=>array(
						'label'			=> 'Etapa de Solución',
						'campo'			=> 'id_etapa_solucion',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'width'			=> '50px',
						'validacion'	=> '0',
						'default'		=> '[id_etapa_solucion]',
						'opciones'		=> 'id,abr|etapa_solucion',
						'foreig'		=> '1',
						'style'			=> 'width:50px;',
						'tip_foreig'	=> '0',
						'derecha'		=> '2',
						'queries'		=> '1'
				),
				'id_referencia_salarial'=>array(
						'label'			=> 'Referencia Salarial',
						'campo'			=> 'id_referencia_salarial',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'width'			=> '80px',
						'validacion'	=> '0',
						'default'		=> '[id_referencia_salarial]',
						'opciones'		=> 'id,nombre|ref_salariales',
						'foreig'		=> '1',
						'style'			=> 'width:180px;',
						'derecha'		=> '2'
				),
				'id_sector'		=>array(
						'label'			=> 'Sector',
						'campo'			=> 'id_sector',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'width'			=> '100px',
						'validacion'	=> '0',
						'default'		=> '[id_sector]',
						'opciones'		=> 'id,nombre|sectores',
						'foreig'		=> '1',
						'style'			=> 'width:200px;',
						'derecha'		=> '1',
						'queries'		=> '1'
				),
				'id_sector_prod'	=>array(
						'label'			=> 'Sector de Producción',
						'campo'			=> 'id_sector_prod',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'width'			=> '100px',
						'validacion'	=> '0',
						'default'		=> '[id_sector_prod]',
						'opciones'		=> 'id,nombre|sector_prod',
						'foreig'		=> '1',
						'style'			=> 'width:200px;',
						'derecha'		=> '2',
						'queries'		=> '1'
				),
				'fecha_presentacion'=>array(
						'label'			=> 'Presentación',
						'campo'			=> 'fecha_presentacion',
						'derecha'		=> '1',
						'tipo'			=> 'fch',
						'formato'		=> '5c',
						'width'			=> '80px',
						'listable'		=> '1',
						'queries'		=> '1',
						'default'		=> 'now()',
						'rango'			=> '-8 years,now'
				),
				'fecha_solucion'	=>array(
						'label'			=> 'Solución',
						'campo'			=> 'fecha_solucion',
						'derecha'		=> '2',
						'tipo'			=> 'fch',
						'formato'		=> '5c',
						'width'			=> '80px',
						'listable'		=> '1',
						'rango'			=> '-8 years,now'
				),
				'fecha_vig_inicio'=>array(
						'label'			=> 'Inicio',
						'campo'			=> 'fecha_vig_inicio',
						'derecha'		=> '1',
						'tipo'			=> 'fch',
						'formato'		=> '5c',
						'width'			=> '80px',
						'listable'		=> '1',
						'rango'			=> '-8 years,now'
				),
				'fecha_vig_fin'	=>array(
						'label'			=> 'Final',
						'campo'			=> 'fecha_vig_fin',
						'derecha'		=> '2',
						'tipo'			=> 'fch',
						'formato'		=> '5c',
						'width'			=> '80px',
						'listable'		=> '1',
						'rango'			=> '-8 years,now'
				),
				'atendido_cgtp'	=>array(
						'label'			=> 'Atendido CGTP',
						'campo'			=> 'atendido_cgtp',
						'derecha'		=> '1',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'opciones'		=>array(
								'1'			=> 'si',
								'0'			=> 'no'
						),
						'listable'		=> '1',
						'width'			=> '50px',
						'queries'		=> '1'
				),
				'afiliado_cgtp'	=>array(
						'label'			=> 'Afiliado CGTP',
						'campo'			=> 'afiliado_cgtp',
						'derecha'		=> '1',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'opciones'		=>array(
								'1'			=> 'si',
								'0'			=> 'no'
						),
						'listable'		=> '1',
						'width'			=> '50px',
						'queries'		=> '1'
				),
				'tags'			=>array(
						'campo'			=> 'tags',
						'label'			=> 'tags',
						'tipo'			=> 'txt',
						'indicador'		=> '1',
						'fulltext'		=> '1',
						'autotags'		=> '1'
				)
		),
		'grupo'			=> 'negociaciones',
		'edicion_completa'=> '1',
		'expandir_vertical'=> '0',
		'calificacion'	=> '0',
		'edicion_rapida'	=> '1',
		'disabled'		=> '0',
		'stat'			=> '1',
		'exportar_excel'	=> '1',
		'set_fila_fijo'	=> '2',
		'seccion'		=> 'Negociaciones',
		'descripcion'	=> 'Registro de Convenioas, Lista de condiciones y etapa de solución'
);
/******************************************************************************************************************************************************/

$objeto_tabla['CONVENIOS_SUBITEMS']=array(
		'titulo'		=> 'Condiciones',
		'nombre_singular'=> 'condición',
		'nombre_plural'	=> 'condiciones',
		'tabla'			=> 'convenios_subitems',
		'archivo'		=> 'convenios_subitems',
		'prefijo'		=> 'consubite',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Condiciones',
		'me'			=> 'CONVENIOS_SUBITEMS',
		'onedit'		=> 'base2/update_convenios_subitems.php',
		'oncreate'		=> 'base2/update_convenios_subitems.php',
		'orden'			=> '0',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr',
						'queries'		=> '1',
						'listable'		=> '1',
						'label'			=> 'Fecha',
						'formato'		=> '7b'
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
				'fecha_presentacion'=>array(
						'label'			=> 'Presentación',
						'campo'			=> 'fecha_presentacion',
						'derecha'		=> '1',
						'tipo'			=> 'fch',
						'formato'		=> '5c',
						'width'			=> '80px',
						'listable'		=> '0',
						'queries'		=> '0'
				),
				'id_sector'		=>array(
						'label'			=> 'Sector',
						'campo'			=> 'id_sector',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'width'			=> '100px',
						'validacion'	=> '0',
						'default'		=> '[id_sector]',
						'opciones'		=> 'id,nombre|sectores',
						'foreig'		=> '1',
						'style'			=> 'width:200px;',
						'derecha'		=> '1',
						'queries'		=> '1'
				),
				'id_sector_prod'	=>array(
						'label'			=> 'Sector de Producción',
						'campo'			=> 'id_sector_prod',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'width'			=> '100px',
						'validacion'	=> '0',
						'default'		=> '[id_sector_prod]',
						'opciones'		=> 'id,nombre|sector_prod',
						'foreig'		=> '1',
						'style'			=> 'width:200px;',
						'derecha'		=> '2',
						'queries'		=> '1'
				),
				'id_item'		=>array(
						'campo'			=> 'id_item',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'validacion'	=> '0',
						'foreig'		=> '1',
						'default'		=> '[id]'
				),
				'id_clausula'	=>array(
						'label'			=> 'Clausula',
						'campo'			=> 'id_clausula',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'width'			=> '170px',
						'validacion'	=> '1',
						'default'		=> '[id_clausula]',
						'directlink'	=> 'id,nombre|clausulas',
						'opciones'		=> 'id,nombre|clausulas|where 1 order by nombre asc',
						'crearforeig'	=> '1',
						'ondlselect'	=> '0',
						'foreig'		=> '1',
						'style'			=> 'width:250px;',
						'derecha'		=> '1',
						'queries'		=> '1',
						'dlquery'		=> '1'
				),
				'id_correlativo'	=>array(
						'label'			=> 'Correlativo',
						'campo'			=> 'id_correlativo',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '30px',
						'validacion'	=> '0',
						'style'			=> 'width:30px;',
						'derecha'		=> '2',
						'disabled'		=> '1'
				),
				'efectivo'		=>array(
						'label'			=> 'Efectivo',
						'campo'			=> 'efectivo',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '40px',
						'style'			=> 'width:40px;',
						'variable'		=> 'float',
						'derecha'		=> '1',
						'cuantity'		=> '1'
				),
				'porcentaje'	=>array(
						'label'			=> 'Porcentaje',
						'campo'			=> 'porcentaje',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '40px',
						'style'			=> 'width:40px;',
						'variable'		=> 'float',
						'derecha'		=> '2',
						'cuantity'		=> '1'
				),
				'valor'			=>array(
						'label'			=> 'Valor',
						'campo'			=> 'valor',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '40px',
						'style'			=> 'width:40px;',
						'variable'		=> 'float',
						'derecha'		=> '1',
						'cuantity'		=> '1'
				),
				'id_unidad'		=>array(
						'label'			=> 'Unidad',
						'campo'			=> 'id_unidad',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'width'			=> '60px',
						'validacion'	=> '0',
						'default'		=> '[id_unidad]',
						'opciones'		=> 'id,nombre|unidades',
						'foreig'		=> '1',
						'style'			=> 'width:60px;',
						'derecha'		=> '2',
						'queries'		=> '1'
				),
				'id_veces'		=>array(
						'label'			=> 'Veces',
						'campo'			=> 'id_veces',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'width'			=> '80px',
						'validacion'	=> '0',
						'default'		=> '[id_veces]',
						'opciones'		=> 'id,nombre|veces',
						'foreig'		=> '1',
						'style'			=> 'width:80px;',
						'derecha'		=> '2',
						'queries'		=> '1'
				),
				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Texto',
						'tipo'			=> 'txt',
						'width'			=> '180px',
						'style'			=> 'width:400px;',
						'listable'		=> '0'
				)
		),
		'grupo'			=> 'negociaciones',
		'edicion_completa'=> '1',
		'expandir_vertical'=> '0',
		'calificacion'	=> '0',
		'edicion_rapida'	=> '1',
		'disabled'		=> '0',
		'stat'			=> '1',
		'exportar_excel'	=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['RAZON_SOCIAL']=array(
		'me'			=> 'RAZON_SOCIAL',
		'titulo'		=> 'Razones Sociales',
		'nombre_singular'=> 'razón social',
		'nombre_plural'	=> 'razones sociales',
		'tabla'			=> 'razones_sociales',
		'archivo'		=> 'razones_sociales',
		'prefijo'		=> 'razsoc',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'edicion_rapida'	=> '1',
		'edicion_completa'=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '0',
		'calificacion'	=> '0',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Razones Sociales',
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
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'width'			=> '400px',
						'style'			=> 'width:600px;',
						'validacion'	=> '1',
						'listable'		=> '1',
						'like'			=> '1',
						'derecha'		=> '1'
				),
				'id_organizacion'=>array(
						'label'			=> 'Organización',
						'campo'			=> 'id_organizacion',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'width'			=> '400px',
						'validacion'	=> '0',
						'default'		=> '[id_organizacion]',
						'opciones'		=> 'id,nombre|organizaciones',
						'foreig'		=> '1',
						'style'			=> 'width:400px;',
						'derecha'		=> '1'
				),
				'id_ciiu'		=>array(
						'label'			=> 'CIIU',
						'campo'			=> 'id_ciiu',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'width'			=> '80px',
						'validacion'	=> '0',
						'default'		=> '[id_ciiu]',
						'opciones'		=> 'id,cod_ciiu|ciiu',
						'foreig'		=> '1',
						'style'			=> 'width:80px;',
						'derecha'		=> '2'
				)
		),
		'grupo'			=> 'negociaciones',
		'set_fila_fijo'	=> '4',
		'seccion'		=> 'Mantenimiento Negociaciones'
);
/******************************************************************************************************************************************************/

$objeto_tabla['CIIU']=array(
		'me'			=> 'CIIU',
		'titulo'		=> 'Ciiu',
		'nombre_singular'=> 'registro',
		'nombre_plural'	=> 'registros',
		'tabla'			=> 'ciiu',
		'archivo'		=> 'ciiu',
		'prefijo'		=> 'cii',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'edicion_rapida'	=> '1',
		'edicion_completa'=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '0',
		'calificacion'	=> '0',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Tabla CIIU',
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
				'cod_ciiu'		=>array(
						'campo'			=> 'cod_ciiu',
						'label'			=> 'CIIU',
						'tipo'			=> 'inp',
						'width'			=> '80px',
						'style'			=> 'width:80px;',
						'validacion'	=> '1',
						'unique'		=> '0',
						'listable'		=> '1'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'width'			=> '400px',
						'style'			=> 'width:400px;',
						'validacion'	=> '1',
						'listable'		=> '1'
				)
		),
		'grupo'			=> 'negociaciones',
		'width_listado'	=> '700px',
		'set_fila_fijo'	=> '4'
);
/******************************************************************************************************************************************************/

$objeto_tabla['CLAUSULAS']=array(
		'me'			=> 'CLAUSULAS',
		'titulo'		=> 'Clausulas',
		'nombre_singular'=> 'clausula',
		'nombre_plural'	=> 'clausulas',
		'tabla'			=> 'clausulas',
		'archivo'		=> 'clausulas',
		'prefijo'		=> 'cla',
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
		'menu_label'	=> 'Clausulas de Reclamo',
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
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'width'			=> '500px',
						'style'			=> 'width:500px;',
						'validacion'	=> '1',
						'unique'		=> '0',
						'listable'		=> '1',
						'like'			=> '1'
				)
		),
		'grupo'			=> 'negociaciones',
		'set_fila_fijo'	=> '1',
		'width_listado'	=> '700px',
		'exportar_excel'	=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['UNIDADES']=array(
		'me'			=> 'UNIDADES',
		'titulo'		=> 'Unidades',
		'nombre_singular'=> 'unidad',
		'nombre_plural'	=> 'unidades',
		'tabla'			=> 'unidades',
		'archivo'		=> 'unidades',
		'prefijo'		=> 'uni',
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
		'menu_label'	=> 'Unidad Recibida',
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
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'width'			=> '400px',
						'style'			=> 'width:400px;',
						'validacion'	=> '1',
						'unique'		=> '0',
						'listable'		=> '1',
						'like'			=> '1'
				)
		),
		'grupo'			=> 'negociaciones',
		'set_fila_fijo'	=> '1',
		'width_listado'	=> '600px'
);
/******************************************************************************************************************************************************/

$objeto_tabla['ETAPA_SOLUCION']=array(
		'me'			=> 'ETAPA_SOLUCION',
		'titulo'		=> 'Etapas de Solución',
		'nombre_singular'=> 'etapa de solución',
		'nombre_plural'	=> 'etapas de solución',
		'tabla'			=> 'etapa_solucion',
		'archivo'		=> 'etapa_solucion',
		'prefijo'		=> 'etasol',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'edicion_rapida'	=> '1',
		'edicion_completa'=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '0',
		'calificacion'	=> '0',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Etapas de solución',
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
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'width'			=> '400px',
						'style'			=> 'width:400px;',
						'validacion'	=> '1',
						'unique'		=> '0',
						'listable'		=> '1'
				),
				'abr'			=>array(
						'campo'			=> 'abr',
						'label'			=> 'Abreviatura',
						'tipo'			=> 'inp',
						'width'			=> '80px',
						'style'			=> 'width:80px;',
						'validacion'	=> '1',
						'listable'		=> '1'
				)
		),
		'grupo'			=> 'negociaciones',
		'width_listado'	=> '600px',
		'set_fila_fijo'	=> '4'
);
/******************************************************************************************************************************************************/

$objeto_tabla['REF_SALARIALES']=array(
		'me'			=> 'REF_SALARIALES',
		'titulo'		=> 'Referencias Salariales',
		'nombre_singular'=> 'referencia salarial',
		'nombre_plural'	=> 'referencias salariales',
		'tabla'			=> 'ref_salariales',
		'archivo'		=> 'ref_salariales',
		'prefijo'		=> 'refsal',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'edicion_rapida'	=> '1',
		'edicion_completa'=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '0',
		'calificacion'	=> '0',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Referencias Salariales',
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
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'width'			=> '400px',
						'style'			=> 'width:400px;',
						'validacion'	=> '1',
						'unique'		=> '0',
						'listable'		=> '1'
				),
				'abr'			=>array(
						'campo'			=> 'abr',
						'label'			=> 'Abreviatura',
						'tipo'			=> 'inp',
						'width'			=> '80px',
						'style'			=> 'width:80px;',
						'validacion'	=> '1',
						'listable'		=> '1'
				)
		),
		'grupo'			=> 'negociaciones',
		'width_listado'	=> '600px',
		'set_fila_fijo'	=> '4'
);
/******************************************************************************************************************************************************/

$objeto_tabla['TIPO_ORG_SINDICAL']=array(
		'me'			=> 'TIPO_ORG_SINDICAL',
		'titulo'		=> 'Tipos de Organismos Sindicales',
		'nombre_singular'=> 'tipo de organización',
		'nombre_plural'	=> 'tipos de organización',
		'tabla'			=> 'tipo_org_sindical',
		'archivo'		=> 'tipo_org_sindical',
		'prefijo'		=> 'tiporg',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'edicion_rapida'	=> '1',
		'edicion_completa'=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '0',
		'calificacion'	=> '0',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Tipos de Organismos Sindicales',
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
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'width'			=> '400px',
						'style'			=> 'width:400px;',
						'validacion'	=> '1',
						'unique'		=> '0',
						'listable'		=> '1'
				),
				'abr'			=>array(
						'campo'			=> 'abr',
						'label'			=> 'Abreviatura',
						'tipo'			=> 'inp',
						'width'			=> '80px',
						'style'			=> 'width:80px;',
						'validacion'	=> '1',
						'listable'		=> '1'
				)
		),
		'grupo'			=> 'negociaciones',
		'width_listado'	=> '600px',
		'set_fila_fijo'	=> '4'
);
/******************************************************************************************************************************************************/

$objeto_tabla['ORGANIZACIONES']=array(
		'me'			=> 'ORGANIZACIONES',
		'titulo'		=> 'Organizaciones',
		'nombre_singular'=> 'organización',
		'nombre_plural'	=> 'organizaciones',
		'tabla'			=> 'organizaciones',
		'archivo'		=> 'organizaciones',
		'prefijo'		=> 'org',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'edicion_rapida'	=> '1',
		'edicion_completa'=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '0',
		'calificacion'	=> '0',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Organizaciones',
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
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'width'			=> '450px',
						'style'			=> 'width:400px;',
						'validacion'	=> '1',
						'unique'		=> '0',
						'listable'		=> '1'
				)
		),
		'grupo'			=> 'negociaciones',
		'width_listado'	=> '600px',
		'set_fila_fijo'	=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['ABOGADOS']=array(
		'me'			=> 'ABOGADOS',
		'titulo'		=> 'Abogados',
		'nombre_singular'=> 'abogado',
		'nombre_plural'	=> 'abogados',
		'tabla'			=> 'abogados',
		'archivo'		=> 'abogados',
		'prefijo'		=> 'abo',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'edicion_rapida'	=> '1',
		'edicion_completa'=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '0',
		'calificacion'	=> '0',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Abogados',
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
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'width'			=> '400px',
						'style'			=> 'width:400px;',
						'validacion'	=> '1',
						'unique'		=> '0',
						'listable'		=> '1'
				),
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
						'default'		=> '19',
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
		),
		'grupo'			=> 'negociaciones',
		'set_fila_fijo'	=> '1',
		'width_listado'	=> '',
		'seccion'		=> 'Mantenimiento General'
);
/******************************************************************************************************************************************************/

$objeto_tabla['EDITORES']=array(
		'me'			=> 'EDITORES',
		'titulo'		=> 'Editores y Administradores',
		'nombre_singular'=> 'editor',
		'nombre_plural'	=> 'editores',
		'tabla'			=> 'editores',
		'archivo'		=> 'editores',
		'prefijo'		=> 'edi',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'edicion_rapida'	=> '1',
		'edicion_completa'=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '0',
		'calificacion'	=> '0',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Editores y Administradores',
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
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'width'			=> '250px',
						'style'			=> 'width:400px;',
						'validacion'	=> '1',
						'unique'		=> '0',
						'listable'		=> '1'
				),
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
						'label'			=> 'Departamento',
						'tipo'			=> 'com',
						'sync'			=> 'usuarios_acceso,id_permisos,[usuarios_acceso_id_permisos],id,[id_sesion]',
						'default'		=> '2',
						'validacion'	=> '1',
						'opciones'		=>array(
								'2'			=> 'Editor CGTP',
								'3'			=> 'Editor Economía y Finanzas',
								'4'			=> 'Editor Organización',
								'5'			=> 'Editor Defensa Laboral',
								'6'			=> 'Editor Prensa y Comunicaciones',
								'7'			=> 'Editor Juventud Trabajadora',
								'8'			=> 'Editor Cultura y Educación',
								'9'			=> 'Editor Relaciones Internacionales',
								'10'			=> 'Editor Planificación y Seguimiento',
								'11'			=> 'Editor Bienestar Social',
								'12'			=> 'Editor Mujer Trabajadora',
								'1'			=> 'Administrador General'
						),
						'listable'		=> '1',
						'listhtml'		=> '',
						'width'			=> '200px'
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
		),
		'grupo'			=> 'negociaciones',
		'set_fila_fijo'	=> '4',
		'width_listado'	=> '',
		'order_by'		=> '',
		'group'			=> 'usuarios_acceso_id_permisos'
);
/******************************************************************************************************************************************************/

$objeto_tabla['EMPRESAS']=array(
		'me'			=> 'EMPRESAS',
		'titulo'		=> 'Empresas',
		'nombre_singular'=> 'empresa',
		'nombre_plural'	=> 'empresas',
		'tabla'			=> 'empresas',
		'archivo'		=> 'empresas',
		'prefijo'		=> 'emp',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'edicion_rapida'	=> '1',
		'edicion_completa'=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '0',
		'calificacion'	=> '0',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Empresas',
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
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'width'			=> '400px',
						'style'			=> 'width:400px;',
						'validacion'	=> '1',
						'unique'		=> '0',
						'listable'		=> '1',
						'derecha'		=> '1'
				),
				'direccion'		=>array(
						'label'			=> 'Dirección',
						'campo'			=> 'direccion',
						'derecha'		=> '1',
						'tipo'			=> 'inp',
						'width'			=> '250px',
						'style'			=> 'width:250px;',
						'listable'		=> '1'
				),
				'rtn'			=>array(
						'label'			=> 'RTN',
						'campo'			=> 'rtn',
						'derecha'		=> '2',
						'tipo'			=> 'inp',
						'width'			=> '100px',
						'style'			=> 'width:150px;',
						'listable'		=> '1'
				),
				'telefonos'		=>array(
						'label'			=> 'Teléfono',
						'campo'			=> 'telefonos',
						'derecha'		=> '1',
						'tipo'			=> 'inp',
						'width'			=> '100px',
						'style'			=> 'width:150px;',
						'listable'		=> '1'
				),
				'fax'			=>array(
						'label'			=> 'Fax',
						'campo'			=> 'fax',
						'derecha'		=> '2',
						'tipo'			=> 'inp',
						'width'			=> '100px',
						'style'			=> 'width:150px;',
						'listable'		=> '1'
				),
				'vigente'		=>array(
						'label'			=> 'Vigente',
						'campo'			=> 'vigente',
						'derecha'		=> '1',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'opciones'		=>array(
								'1'			=> 'si',
								'0'			=> 'no'
						),
						'listable'		=> '1',
						'width'			=> '40px',
						'style'			=> 'width:40px;'
				)
		),
		'grupo'			=> 'negociaciones',
		'set_fila_fijo'	=> '4',
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['SECTORES']=array(
		'me'			=> 'SECTORES',
		'titulo'		=> 'Sectores',
		'nombre_singular'=> 'sector',
		'nombre_plural'	=> 'sectores',
		'tabla'			=> 'sectores',
		'archivo'		=> 'sectores',
		'prefijo'		=> 'sec0',
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
		'menu_label'	=> 'Sectores',
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
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'width'			=> '400px',
						'style'			=> 'width:400px;',
						'validacion'	=> '1',
						'unique'		=> '0',
						'listable'		=> '1'
				)
		),
		'grupo'			=> 'negociaciones',
		'set_fila_fijo'	=> '1',
		'width_listado'	=> '600px'
);
/******************************************************************************************************************************************************/

$objeto_tabla['SECTOR_PROD']=array(
		'me'			=> 'SECTOR_PROD',
		'titulo'		=> 'Sectores de Producción',
		'nombre_singular'=> 'sector',
		'nombre_plural'	=> 'sectores',
		'tabla'			=> 'sector_prod',
		'archivo'		=> 'sector_prod',
		'prefijo'		=> 'secpro',
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
		'menu_label'	=> 'Sectores de Producción',
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
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'width'			=> '400px',
						'style'			=> 'width:400px;',
						'validacion'	=> '1',
						'unique'		=> '0',
						'listable'		=> '1'
				)
		),
		'grupo'			=> 'negociaciones',
		'set_fila_fijo'	=> '1',
		'width_listado'	=> '600px'
);
/******************************************************************************************************************************************************/

$objeto_tabla['TIP_CONSULTAS']=array(
		'me'			=> 'TIP_CONSULTAS',
		'titulo'		=> 'Tipos de Consultas',
		'nombre_singular'=> 'tipo de consulta',
		'nombre_plural'	=> 'tipos de consulta',
		'tabla'			=> 'tip_consultas',
		'archivo'		=> 'tip_consultas',
		'prefijo'		=> 'tipcon',
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
		'menu_label'	=> 'Tipos de Consultas',
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
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'width'			=> '400px',
						'style'			=> 'width:400px;',
						'validacion'	=> '1',
						'unique'		=> '0',
						'listable'		=> '1'
				)
		),
		'grupo'			=> 'negociaciones',
		'set_fila_fijo'	=> '1',
		'width_listado'	=> '600px'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PERIODOS']=array(
		'me'			=> 'PERIODOS',
		'titulo'		=> 'Periodos de Trabajo',
		'nombre_singular'=> 'periodo',
		'nombre_plural'	=> 'periodos',
		'tabla'			=> 'periodos',
		'archivo'		=> 'periodos',
		'prefijo'		=> 'per',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'edicion_rapida'	=> '1',
		'edicion_completa'=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '1',
		'calificacion'	=> '1',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Periodos de Trabajo',
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
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'width'			=> '200px',
						'style'			=> 'width:200px;',
						'validacion'	=> '1',
						'unique'		=> '0',
						'listable'		=> '1'
				)
		),
		'grupo'			=> 'negociaciones'
);
/******************************************************************************************************************************************************/

$objeto_tabla['CORRELATIVOS']=array(
		'me'			=> 'CORRELATIVOS',
		'titulo'		=> 'Correlativos de Documentos',
		'nombre_singular'=> 'correlativo',
		'nombre_plural'	=> 'correlativos',
		'tabla'			=> 'correlativos',
		'archivo'		=> 'correlativos',
		'prefijo'		=> 'cor',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'edicion_rapida'	=> '1',
		'edicion_completa'=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '1',
		'calificacion'	=> '1',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Correlativos de Documentos',
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
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'width'			=> '200px',
						'style'			=> 'width:200px;',
						'validacion'	=> '1',
						'unique'		=> '0',
						'listable'		=> '1'
				)
		),
		'grupo'			=> 'negociaciones',
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['VECES']=array(
		'me'			=> 'VECES',
		'titulo'		=> 'Veces',
		'nombre_singular'=> 'vez',
		'nombre_plural'	=> 'veces',
		'tabla'			=> 'veces',
		'archivo'		=> 'veces',
		'prefijo'		=> 'vec',
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
		'menu_label'	=> 'Veces',
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
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'width'			=> '200px',
						'style'			=> 'width:200px;',
						'validacion'	=> '1',
						'listable'		=> '1'
				)
		),
		'grupo'			=> 'negociaciones',
		'width_listado'	=> '350px',
		'set_fila_fijo'	=> '3'
);
/******************************************************************************************************************************************************/



?>