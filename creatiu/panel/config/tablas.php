<?php //á

/******************************************************************************************************************************************************/
$objeto_tabla['PAGINAS_GROUPS']=array(
		'titulo'		=> '{select name from paginas_groups where id=[id]}',
		'nombre_singular'=> 'grupo de páginas',
		'nombre_plural'	=> 'grupos de pagínas',
		'tabla'			=> 'paginas_groups',
		'archivo'		=> 'paginas_groups',
		'archivo_hijo'	=> 'PAGINAS_GROUPS',
		'prefijo'		=> 'progru',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '0',
		'menu_label'	=> 'Páginas',
		'me'			=> 'PAGINAS_GROUPS',
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
				'id_grupo'		=>array(
						'campo'			=> 'id_grupo',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'validacion'	=> '0',
						'default'		=> '[id]',
						'foreig'		=> '1',
						'foreigkey'		=> 'PAGINAS_GROUPS',
						'opciones'		=> 'id,name|paginas_groups|where id_grupo=0'
				),					
				'weight'		=>array(
						'campo'			=> 'weight',
						'label'			=> 'Peso',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'width'			=> '100px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '1',
						'style'			=> 'width:100px;',
				),	
				'url'		=>array(
						'campo'			=> 'url',
						'label'			=> 'Url',
						'tipo'			=> 'inp',
						'width'			=> '200px',
						// 'unique'		=> '1',
						'listable'		=> '0',
						'validacion'	=> '1',
						// 'constante'		=> '1',
						'setup'			=> 'nosotros,paginas-web,sistemas-web,servicio-tecnico,marketing-y-publicidad,consultoria-empresarial,planes-hosting,dominio-y-hosting',
				),								
				'name'		=>array(
						'campo'			=> 'name',
						'label'			=> 'Nombre',
						'width'			=> '200px',
						'unique'		=> '0',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'controles'		=> '
						<a  rel="subs" href="custom/paginas_groups.php?id=[id]">{select count(*) from paginas_groups where id_grupo=[id]}  grupos</a>
						<a  rel="subs" href="custom/paginas.php?id=[id]">{select count(*) from paginas where id_grupo=[id]}  páginas</a>
						',
						'style'			=> 'width:70%;',
						// 'constante'		=> '1',
				),
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'DATOS WEB',
		'por_linea'		=> '1',
		'disabled'		=> '0',
		'page'			=> '0',

);

$objeto_tabla['PAGINAS']=array(
		'titulo'		=> ' {select name from paginas_groups where id=[id]}',
		'nombre_singular'=> 'página',
		'nombre_plural'	=> 'páginas',
		'tabla'			=> 'paginas',
		'archivo'		=> 'paginas',
		'prefijo'		=> 'pag',
		'eliminar'		=> '0',
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

		'app'			=> '
		
		<a href="custom/paginas.php?i=1">Quiénes Somos</a>
		<a href="custom/paginas.php?i=2">Metodologías</a>
		<a href="custom/paginas.php?i=3">Políticas de la empresa</a>
		<a href="custom/paginas.php?i=4">Formas de Pago</a>

		',					
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
						'foreigkey'		=> 'PAGINAS_GROUPS',
						'opciones'		=> 'id,name|paginas_groups',
						'disabled'		=> '1',
				),				
				'weight'		=>array(
						'campo'			=> 'weight',
						'label'			=> '',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '100px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '1',
						'style'			=> 'width:100px;',
						'disabled'		=> '1',
				),				
				'name'		=>array(
						'campo'			=> 'name',
						'label'			=> 'Título',
						'tipo'			=> 'inp',
						'unique'		=> '1',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:70%;'						
				),

				'text'			=>array(
						'campo'			=> 'text',
						'label'			=> 'Breve Descripción',
						'tipo'			=> 'txt',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '400px',
						'style'			=> 'height:300px;',
						'disabled'		=> '1'
				),

				'html'			=>array(
						'campo'			=> 'html',
						'label'			=> 'Descripción',
						'tipo'			=> 'html',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '400px',
						'style'			=> 'height:300px;'
				),
				'foto'			=>array(
						'campo'			=> 'foto',
						'label'			=> 'Foto',
						'tipo'			=> 'img',
						'listable'		=> '0',
						'validacion'	=> '0',
						'prefijo'		=> 'pag',
						'carpeta'		=> 'pag_imas',
						'tamanos'		=> '70x70,800x600',
						'tamano_listado'	=> '1'
				),
				'foto_name'=>array(
						'campo'			=> 'foto_name',
						'label'			=> '',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '207px'
				),
				'web'			=>array(
						'campo'			=> 'web',
						'tipo'			=> 'web'
				)
		),
		// 'seccion'		=> 'paginas',
		'grupo'			=> 'DATOS WEB',
		'edicion_completa'=> '1',
		'web'			=> '0',
		'visibilidad'	=> '0'
);

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
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '0',
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
						'width'			=> '130px',
						'setup'			=> 'banner_main'
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
		'grupo'			=> 'DATOS WEB',
		// 'seccion'		=> 'banner',		
		'por_linea'		=> '1',
		'crear_quick'	=> '0',
		'page'			=> '0'
);


$objeto_tabla['BANNERS_FOTOS_FOTOS']=array(
		'titulo'		=> 'Fotos : {select nombre from banners_fotos where id=[id]}',
		'nombre_singular'=> 'foto',
		'nombre_plural'	=> 'fotos',
		'tabla'			=> 'banners_fotos_fotos',
		'archivo'		=> 'banners_fotos_fotos',
		'prefijo'		=> 'banfot',
		'eliminar'		=> '1',
		'edicion_completa'=> '1',		
		'edicion_rapida'	=> '0',
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
						// 'validacion'	=> '1',
						'prefijo'		=> 'banfot',
						'carpeta'		=> 'banfot_imas',
						'tamanos'		=> '150x120',
						'tamano_listado'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px,height:auto,'
				),
				'small'			=>array(
						'campo'			=> 'small',
						'label'			=> 'Móvil',
						'tipo'			=> 'img',
						'listable'		=> '1',
						// 'validacion'	=> '1',
						'prefijo'		=> 'banfotsmall',
						'carpeta'		=> 'banfotsmall_imas',
						'tamanos'		=> '150x120',
						'tamano_listado'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px,height:auto,'
				),				
				'name'=>array(
						'campo'			=> 'name',
						'label'			=> '',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '207px',
						'disabled'		=> '1'
				),
				'weight'		=>array(
						'campo'			=> 'weight',
						'label'			=> 'Peso',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'width'			=> '100px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '1',
						'style'			=> 'width:100px;',
						'disabled'		=> '1',
				),					
				'url'			=>array(
						'campo'			=> 'url',
						'label'			=> 'Url',
						'tipo'			=> 'inp',
						'width'			=> '200px',
						'style'			=> 'width:200px;',
						'listable'		=> '1',
						'size'			=> '160',
						// 'disabled'		=> '1'
				),
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'DATOS WEB',
		'por_linea'		=> '4',
		// 'crear_quick'	=> '1',
		'page'			=> '0'
);

/******************************************************************************************************************************************************/






$objeto_tabla['GALLERIES_VIDEOS']=array(
		'titulo'		=> 'Galerías de video',
		'nombre_singular'=> 'galería',
		'nombre_plural'	=> 'galerias',
		'tabla'			=> 'galleries_videos',
		'archivo'		=> 'galleries_videos',
		'archivo_hijo'	=> 'galleries_videos_videos',
		'prefijo'		=> 'gal',
		'eliminar'		=> '0',
		'editar'		=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '0',
		'menu_label'	=> 'Galerías de video',
		'me'			=> 'GALLERIES_VIDEOS',
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
				'url'		=>array(
						'campo'			=> 'url',
						'label'			=> 'Url',
						'tipo'			=> 'inp',
						'width'			=> '200px',
						'unique'		=> '1',
						'listable'		=> '1',
						'validacion'	=> '1',
						'constante'		=> '1',
						'setup'			=> 'galeria-videos',
						'disabled'		=> '1'
				),				
				'fecha'			=>array(
						'campo'			=> 'fecha',
						'label'			=> 'Fecha',
						'tipo'			=> 'fch',
						'width'			=> '200px',
						'listable'		=> '1',
						'validacion'	=> '1',
						'formato'		=> '10',
						'default'		=> 'now()'
				),
				'name'		=>array(
						'campo'			=> 'name',
						'label'			=> 'Nombre',
						'width'			=> '200px',
						'unique'		=> '0',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						// 'constante'		=> '1',
						'validacion'	=> '1',
						'controles'		=> '<a  rel="subs" href="custom/galleries_videos_videos.php?id=[id]">{select count(*) from galleries_videos_videos where id_grupo=[id]}  fotos</a>

							'
				),
				'html'			=>array(
						'campo'			=> 'html',
						'label'			=> 'Texto',
						'tipo'			=> 'html',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '400px',
						'style'			=> 'height:200px;'
				),					
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'DATOS WEB',
		'por_linea'		=> '1',
		'seccion'		=> '',
		'disabled'		=> '0',
		'page'			=> '0'
);
/******************************************************************************************************************************************************/

$objeto_tabla['GALLERIES_VIDEOS_VIDEOS']=array(
		'titulo'		=> 'Fotos : {select name from galleries_videos where id=[id]}',
		'nombre_singular'=> 'video',
		'nombre_plural'	=> 'videos',
		'tabla'			=> 'galleries_videos_videos',
		'archivo'		=> 'galleries_videos_videos',
		'prefijo'		=> 'galvidvid',
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
		'me'			=> 'GALLERIES_VIDEOS_VIDEOS',
		'orden'			=> '1',
		/*'app'			=> '
		<a href="custom/galleries_videos_videos.php?id=0&conf=weight%257Clistable%3D0%26crear%3D0%26eliminar%3D0%26">Video Home</a>
		',*/
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
				'weight'		=>array(
						'campo'			=> 'weight',
						'label'			=> 'Peso',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '100px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '1',
						'style'			=> 'width:100px;',
				),					
				'id_grupo'		=>array(
						'campo'			=> 'id_grupo',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'validacion'	=> '0',
						'default'		=> '[id]',
						'foreig'		=> '1',
						'foreigkey'		=> 'GALLERIES_VIDEOS'
				),
				'name'=>array(
						'campo'			=> 'name',
						'label'			=> '',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '207px'
				),				
				'video'		=>array(
						'campo'			=> 'video',
						'label'			=> 'Código Youtube',
						'tipo'			=> 'yot',
						'listable'		=> '1',
						'validacion'	=> '1'
				),
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'DATOS WEB',
		'por_linea'		=> '5',
		'disabled'		=> '0',
		'page'			=> '0'
);




$objeto_tabla['PAGES_PHOTOS']=array(
		'titulo'		=> 'Productos',
		'nombre_singular'=> 'producto',
		'nombre_plural'	=> 'productos',
		'tabla'			=> 'pages_photos',
		'archivo'		=> 'pages_photos',
		'archivo_hijo'	=> 'pages_photos_photos',
		'prefijo'		=> 'profot',
		'eliminar'		=> '0',
		'editar'		=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '0',
		'menu_label'	=> 'Productos',
		'me'			=> 'PAGES_PHOTOS',
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
				'url'		=>array(
						'campo'			=> 'url',
						'label'			=> 'Url',
						'tipo'			=> 'inp',
						'width'			=> '200px',
						'listable'		=> '1',
						'validacion'	=> '0',
						// 'constante'		=> '1',
						'disabled'		=> '1'
				),				
				'fecha'			=>array(
						'campo'			=> 'fecha',
						'label'			=> 'Fecha',
						'tipo'			=> 'fch',
						'width'			=> '200px',
						'listable'		=> '1',
						'validacion'	=> '1',
						'formato'		=> '10',
						'default'		=> 'now()',
						'disabled'		=> '1'
				),
				'name'		=>array(
						'campo'			=> 'name',
						'label'			=> 'Nombre',
						'width'			=> '200px',
						'unique'		=> '0',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						// 'constante'		=> '1',
						'controles'		=> '<a  rel="subs" href="custom/pages_photos_photos.php?id=[id]">{select count(*) from pages_photos_photos where id_grupo=[id]}  fotos</a>

							'
				),
				'html'			=>array(
						'campo'			=> 'html',
						'label'			=> 'Texto',
						'tipo'			=> 'html',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '400px',
						'style'			=> 'height:200px;'
				),					
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'DATOS WEB',
		'por_linea'		=> '1',
		'seccion'		=> '',
		'disabled'		=> '0',
		'page'			=> '0'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PAGES_PHOTOS_PHOTOS']=array(
		'titulo'		=> 'Fotos : {select name from pages_photos where id=[id]}',
		'nombre_singular'=> 'foto',
		'nombre_plural'	=> 'fotos',
		'tabla'			=> 'pages_photos_photos',
		'archivo'		=> 'pages_photos_photos',
		'prefijo'		=> 'profotfot',
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
		'me'			=> 'PAGES_PHOTOS_PHOTOS',
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
				'weight'		=>array(
						'campo'			=> 'weight',
						'label'			=> 'Peso',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '100px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '1',
						'style'			=> 'width:100px;',
				),					
				'id_grupo'		=>array(
						'campo'			=> 'id_grupo',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'validacion'	=> '0',
						'default'		=> '[id]',
						'foreig'		=> '1',
						'foreigkey'		=> 'PAGES_PHOTOS'
				),
				'file'			=>array(
						'campo'			=> 'file',
						'label'			=> 'Foto',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '1',
						'prefijo'		=> 'profot',
						'carpeta'		=> 'profot_imas',
						'tamanos'		=> '150x120,219x102,219x110,961x302',
						'tamano_listado'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px,height:auto,'
				),
				'name'=>array(
						'campo'			=> 'name',
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
						'disabled'		=> '1'
				),
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'DATOS WEB',
		'por_linea'		=> '5',
		'disabled'		=> '0',
		'page'			=> '0'
);



$objeto_tabla['NEWS']=array(
		'titulo'		=> 'Avances de Obras',
		'nombre_singular'=> 'noticia',
		'nombre_plural'	=> 'noticias',
		'tabla'			=> 'news',
		'archivo'		=> 'news',
		'prefijo'		=> 'new',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'edicion_completa'=> '1',
		'crear'			=> '1',
		'crear_label'	=> '100px',
		'crear_txt'		=> '670px',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '0',
		'menu_label'	=> 'Avances de Obras',
		'por_pagina'	=> '20',
		'me'			=> 'NEWS',
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
				'weight'		=>array(
						'campo'			=> 'weight',
						'label'			=> 'Peso',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '100px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '1',
						'style'			=> 'width:100px;',
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
				'name'		=>array(
						'campo'			=> 'name',
						'label'			=> 'Título',
						'unique'		=> '0',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'like'			=> '1',
						'width'			=> '230px',
						'style'			=> 'width:75%;',
				),
				'text'			=>array(
						'campo'			=> 'text',
						'label'			=> 'Descripción breve',
						'tipo'			=> 'txt',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '400px',
						'style'			=> 'height:200px;',
				),
				'html'			=>array(
						'campo'			=> 'html',
						'label'			=> 'Descripción completa',
						'tipo'			=> 'html',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '400px',
						'style'			=> 'height:200px;'
				),	
				'foto'			=>array(
						'campo'			=> 'foto',
						'label'			=> 'Foto',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '0',
						'prefijo'		=> 'new',
						'carpeta'		=> 'new_imas',
						'tamanos'		=> '70x70',
						'tamano_listado'	=> '1'
				),
				'foto_name'=>array(
						'campo'			=> 'foto_name',
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
		'grupo'			=> 'DATOS WEB',
		'edicion_completa'=> '1',
		'alias_grupo'	=> '',
		'edicion_rapida'	=> '1',
		'page'			=> '0',
		'disabled'		=> '0',
);


$objeto_tabla['LINKS']=array(
		'titulo'		=> 'Enlaces',
		'nombre_singular'=> 'enlace',
		'nombre_plural'	=> 'enlaces',
		'tabla'			=> 'links',
		'archivo'		=> 'links',
		'prefijo'		=> 'link',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'crear_label'	=> '100px',
		'crear_txt'		=> '670px',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '0',
		'menu_label'	=> 'Enlaces',
		'por_pagina'	=> '20',
		'me'			=> 'LINKS',
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
				'weight'		=>array(
						'campo'			=> 'weight',
						'label'			=> 'Peso',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '100px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '1',
						'style'			=> 'width:100px;',
				),					
				'name'		=>array(
						'campo'			=> 'name',
						'label'			=> 'Título',
						'unique'		=> '0',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'like'			=> '1',
						'width'			=> '230px',
						'style'			=> 'width:75%;',
				),
				'url'		=>array(
						'campo'			=> 'url',
						'label'			=> 'Url',
						'tipo'			=> 'inp',
						'width'			=> '400px',
						'listable'		=> '1',
						'validacion'	=> '1',
						'style'			=> 'width:75%;',

				),
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'DATOS WEB',
		'edicion_completa'=> '1',
		'alias_grupo'	=> '',
		'edicion_rapida'	=> '1',
		'page'			=> '0',
		'disabled'		=> '0',
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
						'width'			=> '300px',
						'setup'			=> 'url_facebook,url_youtube,url_twitter,url_radio'
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
		'grupo'			=> 'DATOS WEB',
		'page'			=> '0',
		'disabled'		=> '1'
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
		'menu'			=> '0',
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
						'validacion'	=> '0',
						'derecha'		=> '1',
						'tipo'			=> 'inp',
						'width'			=> '150px',
						'style'			=> 'width:200px;',
						'web_form'		=> '1',
						'disabled'		=> '1'

				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '100px',
						'style'			=> 'width:200px;',
						'derecha'		=> '1'
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
						'web_form'		=> '1',
						'disabled'		=> '1'

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
						'web_form'		=> '1',
						'disabled'		=> '1'

				),
				'provincia'		=>array(
						'label'			=> 'Provincia',
						'campo'			=> 'provincia',
						'derecha'		=> '2',
						'tipo'			=> 'inp',
						'width'			=> '150px',
						'style'			=> 'width:150px;',
						'web_form'		=> '1',
						'disabled'		=> '1'

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
						'web_form'		=> '1',
						'disabled'		=> '1'

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
						'disabled'		=> '1',

				),
				'ciudad'		=>array(
						'campo'			=> 'ciudad',
						'label'			=> 'Ciudad',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '300px',
						'web_form'		=> '0',
						'disabled'		=> '1',

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


$objeto_tabla['RECOMENDACIONES']=array(
		'titulo'		=> 'Mensajes de recomendaciones',
		'nombre_singular'=> 'mensaje',
		'nombre_plural'	=> 'mensajes',
		'tabla'			=> 'recomendaciones',
		'archivo'		=> 'recomendaciones',
		'prefijo'		=> 'con',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'crear'			=> '1',
		'crear_label'	=> '100px',
		'crear_txt'		=> '400px',
		'menu'			=> '0',
		'menu_label'	=> 'Mensajes de recomendaciones',
		'me'			=> 'RECOMENDACIONES',
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
						'validacion'	=> '0',
						'derecha'		=> '1',
						'tipo'			=> 'inp',
						'width'			=> '150px',
						'style'			=> 'width:200px;',
						'web_form'		=> '1',
						'disabled'		=> '1'

				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '100px',
						'style'			=> 'width:200px;',
						'derecha'		=> '1'
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
						'web_form'		=> '1',
						'disabled'		=> '1'

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
						'web_form'		=> '1',
						'disabled'		=> '1'

				),
				'provincia'		=>array(
						'label'			=> 'Provincia',
						'campo'			=> 'provincia',
						'derecha'		=> '2',
						'tipo'			=> 'inp',
						'width'			=> '150px',
						'style'			=> 'width:150px;',
						'web_form'		=> '1',
						'disabled'		=> '1'

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
						'web_form'		=> '1',
						'disabled'		=> '1'

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
						'disabled'		=> '1',

				),
				'ciudad'		=>array(
						'campo'			=> 'ciudad',
						'label'			=> 'Ciudad',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '300px',
						'web_form'		=> '0',
						'disabled'		=> '1',

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


$objeto_tabla['POST-VENTA']=array(
		'titulo'		=> 'Mensajes de post-venta',
		'nombre_singular'=> 'mensaje',
		'nombre_plural'	=> 'mensajes',
		'tabla'			=> 'postventa',
		'archivo'		=> 'postventa',
		'prefijo'		=> 'con',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'crear'			=> '1',
		'crear_label'	=> '100px',
		'crear_txt'		=> '400px',
		'menu'			=> '0',
		'menu_label'	=> 'Mensajes de post-venta',
		'me'			=> 'POST-VENTA',
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
						'validacion'	=> '0',
						'derecha'		=> '1',
						'tipo'			=> 'inp',
						'width'			=> '150px',
						'style'			=> 'width:200px;',
						'web_form'		=> '1',
						'disabled'		=> '1'

				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '100px',
						'style'			=> 'width:200px;',
						'derecha'		=> '1'
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
						'web_form'		=> '1',
						'disabled'		=> '1'

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
						'web_form'		=> '1',
						'disabled'		=> '1'

				),
				'provincia'		=>array(
						'label'			=> 'Provincia',
						'campo'			=> 'provincia',
						'derecha'		=> '2',
						'tipo'			=> 'inp',
						'width'			=> '150px',
						'style'			=> 'width:150px;',
						'web_form'		=> '1',
						'disabled'		=> '1'

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
						'web_form'		=> '1',
						'disabled'		=> '1'

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
						'disabled'		=> '1',

				),
				'ciudad'		=>array(
						'campo'			=> 'ciudad',
						'label'			=> 'Ciudad',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '300px',
						'web_form'		=> '0',
						'disabled'		=> '1',

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


$objeto_tabla['TERRENO']=array(
		'titulo'		=> 'Mensajes de venta de terreno',
		'nombre_singular'=> 'mensaje',
		'nombre_plural'	=> 'mensajes',
		'tabla'			=> 'terreno',
		'archivo'		=> 'terreno',
		'prefijo'		=> 'con',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'crear'			=> '1',
		'crear_label'	=> '100px',
		'crear_txt'		=> '400px',
		'menu'			=> '0',
		'menu_label'	=> 'Mensajes de venta de terreno',
		'me'			=> 'TERRENO',
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
						'validacion'	=> '0',
						'derecha'		=> '1',
						'tipo'			=> 'inp',
						'width'			=> '150px',
						'style'			=> 'width:200px;',
						'web_form'		=> '1',
						'disabled'		=> '1'

				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '100px',
						'style'			=> 'width:200px;',
						'derecha'		=> '1'
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
						'web_form'		=> '1',
						'disabled'		=> '1'

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
						'web_form'		=> '1',
						'disabled'		=> '1'

				),
				'provincia'		=>array(
						'label'			=> 'Provincia',
						'campo'			=> 'provincia',
						'derecha'		=> '2',
						'tipo'			=> 'inp',
						'width'			=> '150px',
						'style'			=> 'width:150px;',
						'web_form'		=> '1',
						'disabled'		=> '1'

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
						'web_form'		=> '1',
						'disabled'		=> '1'

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
						'disabled'		=> '1',

				),
				'ciudad'		=>array(
						'campo'			=> 'ciudad',
						'label'			=> 'Ciudad',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '300px',
						'web_form'		=> '0',
						'disabled'		=> '1',

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



$objeto_tabla['PROJECTS_GROUPS']=array(
		'titulo'		=> 'Categorías',
		'nombre_singular'=> 'categoría',
		'nombre_plural'	=> 'categorías',
		'tabla'			=> 'projects_groups',
		'archivo'		=> 'projects_groups',
		'archivo_hijo'	=> 'PROJECTS',
		'prefijo'		=> 'progru',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Categorías',
		'me'			=> 'PROJECTS_GROUPS',
		'orden'			=> '0',
		'order_by'		=> 'weight asc',
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
				'weight'		=>array(
						'campo'			=> 'weight',
						'label'			=> 'Orden',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '100px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '1',
						'style'			=> 'width:100px;',
				),					
				'name'		=>array(
						'campo'			=> 'name',
						'label'			=> 'Nombre',
						'width'			=> '200px',
						'unique'		=> '0',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'controles'		=> '<a  rel="subs" href="custom/projects.php?id=[id]">{select count(*) from projects where id_grupo=[id]}  cursos</a>'
				),
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'AREA ACADEMICA',
		'por_linea'		=> '1',
		'disabled'		=> '0',
		'crear_quick'	=> '1',
		'page'			=> '0',

);


$objeto_tabla['PROJECTS']=array(
		'titulo'		=> 'Cursos',
		'nombre_singular'=> 'curso',
		'nombre_plural'	=> 'cursos',
		'tabla'			=> 'projects',
		'archivo'		=> 'projects',
		'archivo_hijo'	=> 'PROJECTS_PHOTOS',
		'prefijo'		=> 'pro',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'edicion_completa'=> '1',		
		'crear'			=> '1',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Cursos',
		'me'			=> 'PROJECTS',
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
				'weight'		=>array(
						'campo'			=> 'weight',
						'label'			=> 'Peso',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'width'			=> '100px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '1',
						'style'			=> 'width:100px;',
						'disabled'		=> '1',
				),	
				'id_grupo'		=>array(
						'campo'			=> 'id_grupo',
						'label'			=> 'Categoría',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '0',
						'default'		=> '[id]',
						'foreig'		=> '1',
						'opciones'		=> 'id,name|projects_groups',						
						'foreigkey'		=> 'PROJECTS_GROUPS',
						'disabled'		=> '0',
						'queries'		=> '1',
						'derecha'		=> '1',
				),						
				'tipo'			=>array(
						'campo'			=> 'tipo',
						'label'			=> 'Tipo',
						'tipo'			=> 'com',
						'default'		=> '0',
						'opciones'		=>array(
								'1'			=> 'Curso',
								'2'			=> 'Diplomado',
								'3'			=> 'Especialización',
						),
						'listable'		=> '1',
						'width'			=> '150px',
						'validacion'	=> '0',
						'derecha'		=> '2',
						'size'			=> '8',
						'queries'		=> '1'
				),								
				'modalidad'			=>array(
						'campo'			=> 'modalidad',
						'label'			=> 'Modalidad',
						'tipo'			=> 'com',
						'default'		=> '2',
						'opciones'		=>array(
								'1'			=> 'Virtual',
								'2'			=> 'Presencial',
						),
						'listable'		=> '0',
						'width'			=> '150px',
						'validacion'	=> '0',
						'derecha'		=> '2',
						'size'			=> '8',
						'queries'		=> '1'
				),				
				'name'		=>array(
						'campo'			=> 'name',
						'label'			=> 'Nombre',
						'width'			=> '200px',
						'unique'		=> '0',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'style'			=> 'width:500px;',
						'controles'		=> '
<a  rel="subs" href="custom/horarios.php?id=[id]">{select count(*) from horarios where id_project=[id]}  cursos</a>
<a rel="subs" href="custom/galleries_photos.php?id_item=[id]">{select count(*) from galleries_photos where id_item=[id]} Galerías</a>
<a rel="subs" href="custom/productos_tipos.php?id_item=[id]">{select count(*) from productos_tipos where id_item=[id]} Departamentos</a>
<a rel="subs" href="custom/productos_items_items.php?id_item=[id]">{select count(*) from productos_items_items where id_item=[id]} Niveles</a>
						',							
				),			
				'file'			=>array(
						'campo'			=> 'file',
						'label'			=> 'foto',
						'tipo'			=> 'img',
						'listable'		=> '0',
						'validacion'	=> '0',
						'prefijo'		=> 'proban',
						'carpeta'		=> 'pro_imas',
						'tamanos'		=> '150x120',
						'tamano_listado'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px,height:auto,'
				),
				'text'			=>array(
						'campo'			=> 'text',
						'label'			=> 'Descripción breve',
						'tipo'			=> 'txt',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '400px',
						'style'			=> 'height:200px;'
				),



				'html'			=>array(
						'campo'			=> 'html',
						'label'			=> 'Descripción',
						'tipo'			=> 'html',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '400px',
						'style'			=> 'height:200px;'
				),
				'html_presentacion'			=>array(
						'campo'			=> 'html_presentacion',
						'label'			=> 'Presentación',
						'tipo'			=> 'html',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '400px',
						'style'			=> 'height:200px;',
				),	

				'duracion'		=>array(
						'campo'			=> 'duracion',
						'label'			=> 'Duración',
						'label_after'  => 'horas',
						'width'			=> '50px',
						'tipo'			=> 'inp',
						'variable'		=> 'float',
						'like'			=> '1',
						'style'			=> 'width:50px;',
						'derecha'		=> '1',
						'validacion'	=> '0',
						'listable'		=> '0'
				),					

				'inversion'		=>array(
						'campo'			=> 'inversion',
						'label_before' => 'S/.',
						'label'			=> 'Inversión',
						'width'			=> '50px',
						'tipo'			=> 'inp',
						'variable'		=> 'float',
						'like'			=> '1',
						'style'			=> 'width:50px;',
						'derecha'		=> '2',
						'validacion'	=> '0',
						'listable'		=> '0'
				),	

				'html_pagos'			=>array(
						'campo'			=> 'html_pagos',
						'label'			=> 'Formas de pago',
						'tipo'			=> 'html',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '400px',
						'style'			=> 'height:200px;',
				),	

				'html_ventajas'			=>array(
						'campo'			=> 'html_ventajas',
						'label'			=> 'Ventajas',
						'tipo'			=> 'html',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '400px',
						'style'			=> 'height:200px;',
				),		
				'html_syllabus'			=>array(
						'campo'			=> 'html_syllabus',
						'label'			=> 'Syllabus',
						'tipo'			=> 'html',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '400px',
						'style'			=> 'height:200px;',
				),	
				'html_certificacion'			=>array(
						'campo'			=> 'html_certificacion',
						'label'			=> 'Certificación',
						'tipo'			=> 'html',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '400px',
						'style'			=> 'height:200px;',
				),																	
				
							
														
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'AREA ACADEMICA',
		'por_linea'		=> '1',
		'disabled'		=> '0',
		'page'			=> '0',
		// 'group'			=> 'id_grupo',
		'order_by'		=> 'id_grupo asc, tipo asc',
);


/******************************************************************************************************************************************************/

$objeto_tabla['HORARIOS']=array(
		'grupo'			=> 'AREA ACADEMICA',
		'titulo'		=> 'Horarios',
		'nombre_singular'=> 'horario',
		'nombre_plural'	=> 'horarios',
		'tabla'			=> 'horarios',
		'archivo'		=> 'horarios',
		'prefijo'		=> 'proven',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'duplicar'		=> '0',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Horarios',
		'por_pagina'	=> '20',
		'me'			=> 'HORARIOS',
		'orden'			=> '1',
		'crear_label'	=> '80px',
		'crear_txt'		=> '660px',
		'filtros_extra'	=> '',
		'postscript'	=> '


				if(SS=="insert" or SS=="update"){

					$info=""
						 ." ".dato("name","sedes","where id=".LL["id_sede"],0)
						 ." Inicio:"
						 ." ".fecha_formato(LL["inicio"],12)
						 ." ".LL["horas"]."H"
						 ." ".dato("horarios",TT,"where id=".II,0)
						 ."";

					update(
						[
						"info"			=>$info
						],
						TT,
						"where id=".II,0);													


				}
				

		',		
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id',
						'listable'		=> '0',
						'width'			=> '50px',
						'label'			=> 'Correl'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr',
						'listable'		=> '0',
						// 'formato'		=> '7b',
						// 'queries'		=> '1',
						// 'edit'			=> '1',
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
				'id_project'	=>array(
						'listable'		=> '1',					
						'label'			=> 'Curso',
						'campo'			=> 'id_project',
						'tipo'			=> 'hid',
						'opciones'		=> 'id,name|projects',	
						'tip_foreig'	=> '1',		
						'queries'		=> '1',
						'default'		=> '[id]',
						'foreig'		=> '1',
						'opciones'		=> 'id,name|projects',						
						'foreigkey'		=> 'PROJECTS',								
				),	
				'id_sede'	=>array(
						'listable'		=> '1',					
						'label'			=> 'Sede',
						'campo'			=> 'id_sede',
						'tipo'			=> 'hid',
						'opciones'		=> 'id,name|sedes',	
						'tip_foreig'	=> '1',	
						'queries'		=> '1'									
				),	
				'capacidad'		=>array(
						'campo'			=> 'capacidad',
						'label'			=> 'Capacidad',
						'width'			=> '50px',
						'tipo'			=> 'inp',
						'variable'		=> 'float',
						'like'			=> '1',
						'style'			=> 'width:50px;',
						'derecha'		=> '1',
						'validacion'	=> '0',
						'listable'		=> '0'
				),	
				'cupos'		=>array(
						'campo'			=> 'cupos',
						'label'			=> 'Cupos',
						'width'			=> '50px',
						'tipo'			=> 'inp',
						'variable'		=> 'float',
						'like'			=> '1',
						'style'			=> 'width:50px;',
						'derecha'		=> '2',
						'validacion'	=> '0',
						'listable'		=> '0',
						'frozen'		=> '1',
				),	
				'horas'		=>array(
						'campo'			=> 'horas',
						'label'			=> 'Horas',
						'width'			=> '50px',
						'tipo'			=> 'inp',
						'variable'		=> 'float',
						'like'			=> '1',
						'style'			=> 'width:50px;',
						'derecha'		=> '1',
						'validacion'	=> '0',
						'listable'		=> '0'
				),								
				'inicio'		=>array(
						'campo'			=> 'inicio',
						'label'			=> 'Inicio',
						'tipo'			=> 'fch',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '150px',
						'style'			=> 'width:500px;',
						'derecha'		=> '1',
						'rango'			=> 'now,+1 years',
						'formato'		=> '10',
						'default'		=> 'now()',
				),	
				'final'		=>array(
						'campo'			=> 'final',
						'label'			=> 'Final',
						'tipo'			=> 'fch',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '150px',
						'style'			=> 'width:500px;',
						'derecha'		=> '2',
						'rango'			=> 'now,+1 years',
						'formato'		=> '10',
				),					
				'horarios'		=>array(
						'help'			=> 'Ej: Lu 8-12 Mi 8-12',
						'campo'			=> 'horarios',
						'label'			=> 'Horarios',
						'tipo'			=> 'txt',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '200px',
						'style'			=> 'width:500px;',
						'derecha'		=> '1',
						'controles'		=> '
						<a  rel="subs" href="custom/matriculas.php?id=[id]">{select count(*) from matriculas where id_horario=[id]} matrículas</a>
						',		
				),	
				'id_profesor'	=>array(
						'listable'		=> '1',					
						'label'			=> 'Profesor',
						'campo'			=> 'id_profesor',
						'tipo'			=> 'hid',
						'opciones'		=> 'id,nombre;apellidos|profesores',	
						'tip_foreig'	=> '1',	
						'queries'		=> '1'									
				),	
				'info'		=>array(
						'campo'			=> 'info',
						'label'			=> 'info',
						'tipo'			=> 'txt',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '300px',
						'style'			=> 'width:500px;',
						'derecha'		=> '1',
						'disabled'		=> '1',
				),	

				'status'		=>array(
						'campo'			=> 'status',
						'label'			=> 'Status',
						'tipo'			=> 'com',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'Abierto',
								'2'			=> 'Cerrado',
						),
						'default'		=> '1',
						// 'style'			=> 'width:60px;',
						'derecha'		=> '1',
						'width'			=> '100px',
						'queries'		=> '1'
				),


		),
		'edicion_completa'=> '1',
		'calificacion'	=> '0',
		'importar_csv'	=> '0',
		'width_listado'	=> '',
		'edicion_rapida'	=> '0',
		'crear_pruebas'	=> '0',
		// 'exportar_excel'	=> '1',
		'disabled'		=> '0',
		'user'			=> '1'
);

/******************************************************************************************************************************************************/

$objeto_tabla['MATRICULAS']=array(
		'grupo'			=> 'AREA ACADEMICA',
		'titulo'		=> 'Matrículas',
		'nombre_singular'=> 'matricula',
		'nombre_plural'	=> 'matrículas',
		'tabla'			=> 'matriculas',
		'archivo'		=> 'matriculas',
		'prefijo'		=> 'proven',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'duplicar'		=> '0',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Matrículas',
		'por_pagina'	=> '20',
		'me'			=> 'MATRICULAS',
		'orden'			=> '1',
		'crear_label'	=> '80px',
		'crear_txt'		=> '660px',
		'filtros_extra'	=> '',
		'onload_include'	=> 'base2/update_horarios.php',		
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id',
						'listable'		=> '0',
						'width'			=> '50px',
						'label'			=> 'Correl'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr',
						'listable'		=> '0',
						// 'formato'		=> '7b',
						// 'queries'		=> '1',
						// 'edit'			=> '1',
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

				'id_project'	=>array(
						'listable'		=> '1',					
						'label'			=> 'Curso',
						'campo'			=> 'id_project',
						'tipo'			=> 'hid',
						'opciones'		=> 'id,name|projects',	
						'width'			=> '120px',
						'tip_foreig'	=> '1',											
						// 'load'			=> 'id_horario||id,inicio;fin|horarios|where id_project=',
						'load'			=> 'id_horario||id,info|horarios|where id_project=',
						'queries'		=> '1',
						'derecha'		=> '1',					
				),	

				'id_horario'	=>array(
						'listable'		=> '1',					
						'label'			=> 'Horario',
						'campo'			=> 'id_horario',
						'tipo'			=> 'hid',
						'opciones'		=> 'id,info|horarios',	
						'tip_foreig'	=> '1',	
						'width'			=> '300px',
						'queries'		=> '1',
						'derecha'		=> '2',
						// 'default'		=> '[id]',
						// 'foreig'		=> '1',
						// 'foreigkey'		=> 'HORARIOS',
						// 'directlink'	=> 'id,inicio;fin|horarios|where status=1',
				),

				'id_alumno'	=>array(
						'listable'		=> '1',					
						'label'			=> 'Alumno',
						'campo'			=> 'id_alumno',
						'style'			=> 'width:300px',
						'tipo'			=> 'hid',
						'opciones'		=> 'id,nombre;apellidos|alumnos',	
						'tip_foreig'	=> '1',											
						'directlink'	=> 'id,nombre;apellidos;dni;email|alumnos|where 1',	
						'crearforeig'	=> '1',
						'derecha'		=> '1',
						'width'			=> '250px',
				),	

				'status'		=>array(
						'campo'			=> 'status',
						'label'			=> 'Status',
						'tipo'			=> 'com',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'pago incompleto',
								'2'			=> 'pago completo',
						),
						'default'		=> '1',
						// 'style'			=> 'width:60px;',
						'derecha'		=> '1',
						'width'			=> '100px',
						'queries'		=> '1'
				),				

		),
		'edicion_completa'=> '1',
		'calificacion'	=> '0',
		'importar_csv'	=> '0',
		'width_listado'	=> '',
		'edicion_rapida'	=> '0',
		'crear_pruebas'	=> '0',
		// 'exportar_excel'	=> '1',
		'disabled'		=> '0',
		'user'			=> '1'
);

/******************************************************************************************************************************************************/

$objeto_tabla['ALUMNOS']=array(
		'grupo'			=> 'AREA ACADEMICA',
		'alias_grupo'	=> '',
		'titulo'		=> 'Alumnos',
		'nombre_singular'=> 'alumno',
		'nombre_plural'	=> 'alumnos',
		'tabla'			=> 'alumnos',
		'archivo'		=> 'alumnos',
		'prefijo'		=> 'usuope',
		'eliminar'		=> '1',
		'editar'			=> '1',
		'buscar'			=> '1',
		'menu'			=> '1',
		'menu_label'	=> 'Alumnos',
		'me'				=> 'ALUMNOS',
		'orden'			=> '1',
		'detail_include'=>"base2/detail_alumnos.php",
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr',
						'listable'		=> '1',
						'formato'		=> '7b',
						'width'			=> '100px',
						'queries'		=> '1',
						'label'			=> 'Fecha/Hora'
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
						'width'			=> '150px',
						'derecha'		=> '1',
						'like'			=> '1',
						'validacion'	=> '1'
				),
				'apellidos'		=>array(
						'campo'			=> 'apellidos',
						'label'			=> 'Apellidos',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '150px',
						'derecha'		=> '2',
						'like'			=> '1',
						'validacion'	=> '0',
						'controles'		=> '
							<a href="pop.php?app=enviar_cotizacion&id=[id]" class="mb mensaje_cliente">mensaje</a>
							<a href="custom/ventas_mensajes.php?id=[id]" rel="subs crear popup">{select count(*) from ventas_mensajes where id_grupo=[id]} mensajes</a>
						',	
				),
				'dni'			=>array(
						'campo'			=> 'dni',
						'label'			=> 'DNI',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'subvalidacion'		=> 'dni',						
						'width'			=> '65px',
						'derecha'		=> '2',
						'default'		=> '',
						'like'			=> '1',
						'unique'		=> '0',
						'size'			=> '11',
						// 'onchange'		=> 'if(this.value.length<8){alert("minimo 8 caracteres");}'
				),	
				'email'			=>array(
						'campo'			=> 'email',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'subvalidacion'		=> 'email',																		
						'listable'		=> '1',
						'width'			=> '150px',
						'derecha'		=> '1',
						'validacion'	=> '1'
				),	
				'email2'			=>array(
						'campo'			=> 'email2',
						'label'			=> 'Email 2',
						'tipo'			=> 'inp',
						'subvalidacion'		=> 'email',																		
						'listable'		=> '1',
						'width'			=> '150px',
						'derecha'		=> '1',
						'validacion'	=> '0'
				),															
				'telefono'	=>array(
						'campo'			=> 'telefono',
						'label'			=> 'Teléfono',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '65px',
						'style'			=> 'width:100px;',
						'derecha'		=> '1'
				),

				'celular1empresa'	=>array(
						'label'			=> 'Operador',
						'campo'			=> 'celular1empresa',
						'derecha'		=> '1',
						'width'			=> '55px',
						'tipo'			=> 'com',
						'opciones'		=>array(
								'1'			=> 'Claro',
								'2'			=> 'Movistar',
								'3'			=> 'Entel',
								'4'			=> 'Bitel',
								'5'			=> 'Tuenti',
								'6'			=> 'Virgin'
						),
						'listable'		=> '1',
						// 'web_form'		=> '1',
						// 'disabled'		=> '1'

				),

				'celular1'	=>array(
						'campo'			=> 'celular1',
						'label'			=> 'celular',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '80px',
						'style'			=> 'width:100px;',
						'derecha'		=> '2'
				),


				'celular2empresa'	=>array(
						'label'			=> 'Celular',
						'campo'			=> 'celular2empresa',
						'derecha'		=> '1',
						'tipo'			=> 'com',
						'width'			=> '55px',
						'opciones'		=>array(
								'1'			=> 'Claro',
								'2'			=> 'Movistar',
								'3'			=> 'Entel',
								'4'			=> 'Bitel',
								'5'			=> 'Tuenti',
								'6'			=> 'Virgin'
						),
						'disabled'		=> '1',

				),

				'celular2'	=>array(
						'campo'			=> 'celular2',
						'label'			=> '',
						'tipo'			=> 'inp',
						'validacion'	=> '0',
						'label'			=> 'número',
						'width'			=> '80px',
						'style'			=> 'width:100px;',
						'derecha'		=> '2',
						'disabled'		=> '1',
				),
				'departamento'	=>array(
						'campo'			=> 'departamento',
						'label'			=> 'Departamento',
						'combo'			=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'tipo'			=> 'hid',
						'opciones'		=> 'id,nombre|geo_departamentos|where visibilidad=1',
						'load'			=> 'provincia||id,nombre|geo_provincias|where id_departamento=',
						'style'			=> 'width:150px;',
						'derecha'		=> '1'
				),
				'provincia'		=>array(
						'campo'			=> 'provincia',
						'label'			=> 'Provincia',
						'tipo'			=> 'hid',
						'combo'			=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=> 'id,nombre|geo_provincias|where 0',
						'load'			=> 'distrito||id,nombre|geo_distritos|where visibilidad=1 and id_provincia=',
						'style'			=> 'width:150px;',
						'derecha'		=> '2'
				),
				'distrito'		=>array(
						'campo'			=> 'distrito',
						'label'			=> 'Distrito',
						'tipo'			=> 'hid',
						'combo'			=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=> 'id,nombre|geo_distritos|where visibilidad=1 and id_provincia=8',
						'style'			=> 'width:150px;',
						'derecha'		=> '2',
						'queries'		=> '0'
				),

				'id_universidad'	=>array(
						'campo'			=> 'id_universidad',
						'label'			=> 'Universidad',
						'combo'			=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'tipo'			=> 'hid',
						'opciones'		=> 'id,nombre|universidades',
						'style'			=> 'width:150px;',
						'derecha'		=> '1',
						'queries'		=> '1'
				),
							
				'especialidad'		=>array(
						'campo'			=> 'especialidad',
						'label'			=> 'Especialidad',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '120px',
						'style'			=> 'width:250px;',
						'derecha'		=> '2'
				),								

				'id_medio'	=>array(
						'campo'			=> 'id_medio',
						'label'			=> 'Medio',
						'combo'			=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'tipo'			=> 'hid',
						'opciones'		=> 'id,nombre|medios',
						'style'			=> 'width:150px;',
						'derecha'		=> '1'
				),	


				'id_horario'	=>array(
						'listable'		=> '1',					
						'label'			=> 'Horario',
						'campo'			=> 'id_horario',
						'tipo'			=> 'hid',
						'opciones'		=> 'horarios.id,projects.name;horarios.info|horarios|left join projects on horarios.id_project=projects.id 
 where horarios.status=1',	
						// 'tip_foreig'	=> '1',
						'width'			=> '300px',
						'queries'		=> '0',
						'multi'			=> '1',
						'variable'		=> 'longtext',						

						// 'default'		=> '[id]',
						// 'foreig'		=> '1',
						// 'foreigkey'		=> 'HORARIOS',
						// 'directlink'	=> 'id,inicio;fin|horarios|where status=1',
				),


				'password'		=>array(
						'campo'			=> 'password',
						'label'			=> 'Clave',
						'tipo'			=> 'pas',
						// 'listable'		=> '1',
						// 'validacion'	=> '1',
						// 'sesion_password'=> '1'
				),		
				'status'		=>array(
						'campo'			=> 'status',
						'label'			=> 'Status',
						'tipo'			=> 'com',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'Información',
								'2'			=> 'Va a venir a la oficina (interesado)',
								'3'			=> 'Deposita (muy interesado)',
								'4'			=> 'Preinscrito',
								'5'			=> 'Inscrito',
						),
						'default'		=> '1',
						// 'style'			=> 'width:60px;',
						'derecha'		=> '1',
						'width'			=> '100px',
						'queries'		=> '1'
				),	
				/*			
				'texto'			=>array(
						'legend'			=> 'Evento',
						'campo'			=> 'texto',
						'label'			=> 'Comentario',
						'tipo'			=> 'txt',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '270px',
						'style'			=> 'height:100px;width:300px;',
						'listhtml'		=> '1',
						'noedit'			=> '1',
						'disabled'		=> '1',
				),

				'evento_fecha'	=>array(
						'campo'			=> 'evento_fecha',
						'label'			=> '',
						'tipo'			=> 'fch',
						'listable'		=> '1',
						'formato'		=> '7b',
						'time'			=> '1',
						'width'			=> '152px',
						'derecha'		=> '1',
						'default'		=> '',
						'rango'			=> 'now,+1 years',
						'queries'		=> '0',
						'noedit'			=> '1',
						'disabled'		=> '1',						
				),
				*/

		),
		'importar_csv'	=> '0',
		'disabled'		=> '0',
		'edicion_rapida'	=> '0',
		'crear_label'	=> '',
);


/******************************************************************************************************************************************************/

$objeto_tabla['VENTAS_MENSAJES']=array(
		'grupo'			=> 'AREA ACADEMICA',
		'alias_grupo'	=> '',
		'titulo'		=> 'Eventos',
		'nombre_singular'=> 'evento',
		'nombre_plural'=> 'eventos',
		'tabla'			=> 'ventas_mensajes',
		'archivo'		=> 'ventas_mensajes',
		'prefijo'		=> 'venmen',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'crear'			=> '1',
		'crear_label'	=> '60px',
		'crear_txt'		=> '550px',
		'menu'			=> '0',
		'menu_label'	=> 'Eventos',
		'por_pagina'	=> '10',
		'me'			=> 'VENTAS_MENSAJES',
		'orden'			=> '0',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
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
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr',
						'listable'		=> '1',
						'formato'		=> '7b',
						'width'			=> '100px',
						'queries'		=> '1',
						'label'			=> 'Fecha/Hora'
				),
				'id_grupo'		=>array(
						'campo'			=> 'id_grupo',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'validacion'	=> '0',
						'default'		=> '[id]',
						'foreig'		=> '1'
				),
				'status'		=>array(
						'campo'			=> 'status',
						'label'			=> 'Tipo',
						'tipo'			=> 'com',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'Información',
								'2'			=> 'Va a venir a la oficina (interesado)',
								'3'			=> 'Deposita (muy interesado)',
								'4'			=> 'Preinscrito',
								'5'			=> 'Inscrito',
						),
						'default'		=> '1',
						// 'style'			=> 'width:60px;',
						'derecha'		=> '1',
						'width'			=> '100px',
						'queries'		=> '1'
				),				
				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Comentario',
						'tipo'			=> 'html',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '270px',
						'style'			=> 'height:120px;width:550px;',
						'listhtml'		=> '1'
				),

				'evento_fecha'	=>array(
						'campo'			=> 'evento_fecha',
						'label'			=> 'Fecha/hora',
						'tipo'			=> 'fch',
						'listable'		=> '1',
						'formato'		=> '7b',
						'time'			=> '1',
						'width'			=> '152px',
						'derecha'		=> '1',
						'default'		=> '',
						'rango'			=> 'now,+1 years',
						'queries'		=> '0'
				),




		),
		'edicion_rapida'	=> '1',
		'calificacion'	=> '0',
		'edicion_completa'=> '1',
		'disabled'		=> '0',
		'user'			=> '1',
		'order_by'		=> 'id asc',
		'stat'			=> '0',
		//'exportar_excel'	=> '1'
);

/******************************************************************************************************************************************************/

$objeto_tabla['PROFESORES']=array(
		'grupo'			=> 'AREA ACADEMICA',
		'alias_grupo'	=> '',
		'titulo'		=> 'Profesores',
		'nombre_singular'=> 'profesor',
		'nombre_plural'	=> 'profesores',
		'tabla'			=> 'profesores',
		'archivo'		=> 'profesores',
		'prefijo'		=> 'usuope',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '1',
		'menu'			=> '1',
		'menu_label'	=> 'Profesores',
		'me'			=> 'PROFESORES',
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
						'width'			=> '150px',
						'derecha'		=> '1',
						'like'			=> '1',
						'validacion'	=> '1'
				),
				'apellidos'		=>array(
						'campo'			=> 'apellidos',
						'label'			=> 'Apellidos',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '150px',
						'derecha'		=> '2',
						'like'			=> '1',
						'validacion'	=> '1'
				),
				'dni'			=>array(
						'campo'			=> 'dni',
						'label'			=> 'DNI',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'subvalidacion'		=> 'dni',						
						'width'			=> '150px',
						'derecha'		=> '2',
						'default'		=> '',
						'like'			=> '1',
						'unique'		=> '0',
						'size'			=> '11',
						// 'onchange'		=> 'if(this.value.length<8){alert("minimo 8 caracteres");}'
				),	
				'email'			=>array(
						'campo'			=> 'email',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'subvalidacion'		=> 'email',																		
						'listable'		=> '1',
						'width'			=> '150px',
						'derecha'		=> '1',
						'validacion'	=> '1'
				),							
				
				'telefono'	=>array(
						'campo'			=> 'telefono',
						'label'			=> 'Teléfono',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '100px',
						'style'			=> 'width:100px;',
						'derecha'		=> '1'
				),

				'celular1empresa'	=>array(
						'label'			=> 'Celular',
						'campo'			=> 'celular1empresa',
						'derecha'		=> '1',
						'width'			=> '55px',
						'tipo'			=> 'com',
						'opciones'		=>array(
								'1'			=> 'Claro',
								'2'			=> 'Movistar',
								'3'			=> 'Entel',
								'4'			=> 'Bitel',
								'5'			=> 'Tuenti',
								'6'			=> 'Virgin'
						),
						'listable'		=> '1',
						// 'web_form'		=> '1',
						// 'disabled'		=> '1'

				),

				'celular1'	=>array(
						'campo'			=> 'celular1',
						'label'			=> 'número',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '80px',
						'style'			=> 'width:100px;',
						'derecha'		=> '2'
				),


				'celular2empresa'	=>array(
						'label'			=> 'Celular',
						'campo'			=> 'celular2empresa',
						'derecha'		=> '1',
						'tipo'			=> 'com',
						'width'			=> '55px',
						'opciones'		=>array(
								'1'			=> 'Claro',
								'2'			=> 'Movistar',
								'3'			=> 'Entel',
								'4'			=> 'Bitel',
								'5'			=> 'Tuenti',
								'6'			=> 'Virgin'
						),

				),

				'celular2'	=>array(
						'campo'			=> 'celular2',
						'label'			=> '',
						'tipo'			=> 'inp',
						'validacion'	=> '0',
						'label'			=> 'número',
						'width'			=> '80px',
						'style'			=> 'width:100px;',
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
						'style'			=> 'width:150px;',
						'derecha'		=> '1'
				),
		),
		'importar_csv'	=> '0',
		'disabled'		=> '0',
		'edicion_rapida'	=> '1',
		'crear_label'	=> '',
);

/******************************************************************************************************************************************************/

$objeto_tabla['SEDES']=array(
		'grupo'			=> 'AREA ACADEMICA',
		'alias_grupo'	=> '',
		'titulo'		=> 'Sedes',
		'nombre_singular'=> 'sede',
		'nombre_plural'	=> 'sedes',
		'tabla'			=> 'sedes',
		'archivo'		=> 'sedes',
		'prefijo'		=> 'usuope',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '1',
		'menu'			=> '1',
		'menu_label'	=> 'Sedes',
		'me'			=> 'SEDES',
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
				'name'		=>array(
						'campo'			=> 'name',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '150px',
						'derecha'		=> '1',
						'like'			=> '1',
						'validacion'	=> '1'
				),						
				'telefono'	=>array(
						'campo'			=> 'telefono',
						'label'			=> 'Teléfono',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '100px',
						'style'			=> 'width:100px;',
						'derecha'		=> '1'
				),					
				'distrito'		=>array(
						'campo'			=> 'distrito',
						'label'			=> 'Distrito',
						'tipo'			=> 'hid',
						'combo'			=> '1',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=> 'id,nombre|geo_distritos',
						'style'			=> 'width:150px;',
						'derecha'		=> '1'
				),
				'direccion'		=>array(
						'campo'			=> 'direccion',
						'label'			=> 'Dirección',
						'tipo'			=> 'txt',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '300px',
						'style'			=> 'width:500px;',
						'derecha'		=> '1',
				),					
		),
		'importar_csv'	=> '0',
		'disabled'		=> '0',
		'edicion_rapida'	=> '1',
		'crear_label'	=> '',
);


$objeto_tabla['UNIVERSIDADES']=array(
		'titulo'		=> 'Universidades',
		'nombre_singular'=> 'universidad',
		'nombre_plural'	=> 'universidades',
		'tabla'			=> 'universidades',
		'archivo'		=> 'universidades',
		'prefijo'		=> 'univ',
		'eliminar'		=> '0',
		'editar'		=> '0',
		'crear'			=> '1',
		'crear_label'	=> '200px',
		'crear_txt'		=> '400px',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Universidades',
		'por_pagina'	=> '100',
		'me'			=> 'UNIVERSIDADES',
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
						'unique'		=> '1',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '150px'
				),
		),
		'grupo'			=> 'AREA ACADEMICA',
		'width_listado'	=> '400px',
		'set_fila_fijo'	=> '1',
		'edicion_rapida'	=> '0',
		'edicion_completa'=> '0'
);


$objeto_tabla['MEDIOS']=array(
		'titulo'		=> 'Medios',
		'nombre_singular'=> 'medio',
		'nombre_plural'	=> 'medios',
		'tabla'			=> 'medios',
		'archivo'		=> 'medios',
		'prefijo'		=> 'univ',
		'eliminar'		=> '0',
		'editar'		=> '0',
		'crear'			=> '1',
		'crear_label'	=> '200px',
		'crear_txt'		=> '400px',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Medios',
		'por_pagina'	=> '100',
		'me'			=> 'MEDIOS',
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
						'unique'		=> '1',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '150px'
				),
		),
		'grupo'			=> 'AREA ACADEMICA',
		'width_listado'	=> '400px',
		'set_fila_fijo'	=> '1',
		'edicion_rapida'	=> '0',
		'edicion_completa'=> '0'
);

$objeto_tabla['GALLERIES_PHOTOS']=array(
		'titulo'		=> 'Galerías de Fotos',
		'nombre_singular'=> 'galería',
		'nombre_plural'	=> 'galerias',
		'tabla'			=> 'galleries_photos',
		'archivo'		=> 'galleries_photos',
		'archivo_hijo'	=> 'galleries_photos_photos',
		'prefijo'		=> 'galfot',
		'eliminar'		=> '0',
		'editar'		=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '0',
		'menu_label'	=> 'Galerías de Fotos',
		'me'			=> 'GALLERIES_PHOTOS',
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
				'id_item'		=>array(
						'campo'			=> 'id_item',
						'label'			=> 'curso',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '1',
						'default'		=> '[id_item]',
						'foreig'		=> '1',
						'style'			=> 'width:200px,',
						'opciones'		=> 'id,name|projects',
						'width'			=> '140px',
						'derecha'		=> '1',
						'tags'			=> '1',
						'queries'		=> '1',
						'tip_foreig'	=> '1'
				),				
				'url'		=>array(
						'campo'			=> 'url',
						'label'			=> 'Url',
						'tipo'			=> 'inp',
						'width'			=> '200px',
						'unique'		=> '1',
						'listable'		=> '1',
						'validacion'	=> '1',
						'constante'		=> '1',
						'setup'			=> 'staff,clientes',
						'disabled'		=> '1'
				),				
				'fecha'			=>array(
						'campo'			=> 'fecha',
						'label'			=> 'Fecha',
						'tipo'			=> 'fch',
						'width'			=> '200px',
						'listable'		=> '1',
						'validacion'	=> '0',
						'formato'		=> '10',
						'default'		=> 'now()',
						'disabled'		=> '1'
				),
				'name'		=>array(
						'campo'			=> 'name',
						'label'			=> 'Nombre',
						'width'			=> '200px',
						'unique'		=> '0',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						// 'constante'		=> '1',
						'controles'		=> '<a  rel="subs" href="custom/galleries_photos_photos.php?id=[id]">{select count(*) from galleries_photos_photos where id_grupo=[id]}  fotos</a>

							'
				),
				'html'			=>array(
						'campo'			=> 'html',
						'label'			=> 'Texto',
						'tipo'			=> 'html',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '400px',
						'style'			=> 'height:200px;',
						'disabled'		=> '1'
				),					
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'AREA ACADEMICA',
		'por_linea'		=> '1',
		'seccion'		=> '',
		'disabled'		=> '0',
		'page'			=> '0'
);
/******************************************************************************************************************************************************/

$objeto_tabla['GALLERIES_PHOTOS_PHOTOS']=array(
		'titulo'		=> 'Fotos : {select name from galleries_photos where id=[id]}',
		'nombre_singular'=> 'foto',
		'nombre_plural'	=> 'fotos',
		'tabla'			=> 'galleries_photos_photos',
		'archivo'		=> 'galleries_photos_photos',
		'prefijo'		=> 'galfotfot',
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
		'me'			=> 'GALLERIES_PHOTOS_PHOTOS',
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
				'weight'		=>array(
						'campo'			=> 'weight',
						'label'			=> 'Peso',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '100px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '1',
						'style'			=> 'width:100px;',
						'disabled'		=> '1',
				),					
				'id_grupo'		=>array(
						'campo'			=> 'id_grupo',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'validacion'	=> '0',
						'default'		=> '[id]',
						'foreig'		=> '1',
						'foreigkey'		=> 'GALLERIES_PHOTOS'
				),
				'file'			=>array(
						'campo'			=> 'file',
						'label'			=> 'Foto',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '1',
						'prefijo'		=> 'galfot',
						'carpeta'		=> 'galfot_imas',
						'tamanos'		=> '150x120,219x102',
						'tamano_listado'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px,height:auto,'
				),
				'name'=>array(
						'campo'			=> 'name',
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
						'disabled'		=> '0'
				),
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'AREA ACADEMICA',
		'por_linea'		=> '5',
		'disabled'		=> '0',
		'page'			=> '0'
);




$objeto_tabla['PRODUCTOS_FOTOS_FOTOS']=array(
		'titulo'		=> 'Galería {select nombre from productos_items_items where id=[id]}',
		'nombre_singular'=> 'foto',
		'nombre_plural'	=> 'fotos',
		'tabla'			=> 'productos_fotos_fotos',
		'archivo'		=> 'productos_fotos_fotos',
		'prefijo'		=> 'banfot',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'edicion_completa'=> '1',
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
		'me'			=> 'PRODUCTOS_FOTOS_FOTOS',
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
				'idtemp'		=>array(
						'campo'			=> 'idtemp',
						'label'			=> 'ID ANT',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '100px',
						'validacion'	=> '0',
						'derecha'		=> '1',
						'style'			=> 'width:100px;',
						'disabled'		=> '1',
				),
				'imatemp'		=>array(
						'campo'			=> 'imatemp',
						'label'			=> 'IMA ANT',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '100px',
						'validacion'	=> '0',
						'derecha'		=> '1',
						'style'			=> 'width:300px;',
						'disabled'		=> '1',
				),								
				'weight'		=>array(
						'campo'			=> 'weight',
						'label'			=> 'Peso',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '100px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '1',
						'style'			=> 'width:100px;',
						'disabled'		=> '1',
				),				
				'id_item'		=>array(
						'campo'			=> 'id_item',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '0',
						'default'		=> '[id_item]',
						'foreig'		=> '1',
						'foreigkey'		=> 'PRODUCTOS_ITEMS_ITEMS',
						'opciones'		=> 'id,nombre|productos_items_items'
				),
				'file'			=>array(
						'campo'			=> 'file',
						'label'			=> 'Foto',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '1',
						'prefijo'		=> 'profot',
						'carpeta'		=> 'profot_imas',
						'tamanos'		=> '150x120,980x980',
						'tamano_listado'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px,height:auto,'
				),
				'foto_descripcion'=>array(
						'campo'			=> 'foto_descripcion',
						'label'			=> 'texto',
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
						'listable'		=> '0'
				),
				'web'			=>array(
						'campo'			=> 'web',
						'tipo'			=> 'web'
				)
		),
		'grupo'			=> 'AREA ACADEMICA',
		'por_linea'		=> '4',
		'web'			=> '0',
		'calificacion'	=> '1',

);



$objeto_tabla['PROJECTS_PHOTOS']=array(
		'titulo'		=> 'Fotos : {select nombre from projects where id=[id]}',
		'nombre_singular'=> 'foto',
		'nombre_plural'	=> 'fotos',
		'tabla'			=> 'projects_photos',
		'archivo'		=> 'projects_photos',
		'prefijo'		=> 'profot',
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
		'me'			=> 'PROJECTS_PHOTOS',
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
						'foreigkey'		=> 'PROJECTS'
				),
				'weight'		=>array(
						'campo'			=> 'weight',
						'label'			=> 'Peso',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '100px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '1',
						'style'			=> 'width:100px;',
				),					
				'file'			=>array(
						'campo'			=> 'file',
						'label'			=> 'Foto',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '1',
						'prefijo'		=> 'profot',
						'carpeta'		=> 'profot_imas',
						'tamanos'		=> '150x120',
						'tamano_listado'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px,height:auto,'
				),
				'name'=>array(
						'campo'			=> 'name',
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
		'grupo'			=> 'AREA ACADEMICA',
		'por_linea'		=> '5',
		'disabled'		=> '0',
		'page'			=> '0'
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
		'grupo'			=> 'sistema'
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
		'grupo'			=> 'config',
		'width_listado'	=> '400px',
		'set_fila_fijo'	=> '4',
		'edicion_rapida'	=> '0',
		'edicion_completa'=> '0',
		'seccion'		=> 'ubigeo'
);
/******************************************************************************************************************************************************/

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
		'grupo'			=> 'config',
		'edicion_rapida'	=> '0',
		'set_fila_fijo'	=> '1',
		'width_listado'	=> '400px'
);
/******************************************************************************************************************************************************/

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
		'grupo'			=> 'config',
		'width_listado'	=> '400px',
		'set_fila_fijo'	=> '1',
		'edicion_rapida'	=> '0',
		'edicion_completa'=> '0'
);


/******************************************************************************************************************************************************/

?>