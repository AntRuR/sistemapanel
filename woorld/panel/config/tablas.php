<?php //á
/******************************************************************************************************************************************************/
$objeto_tabla['PAGINAS_GROUPS']=array(
		'titulo'          => '{select name from paginas_groups where id=[id]}',
		'nombre_singular' => 'grupo de páginas',
		'nombre_plural'   => 'grupos de pagínas',
		'tabla'           => 'paginas_groups',
		'archivo'         => 'paginas_groups',
		'archivo_hijo'    => 'PAGINAS_GROUPS',
		'prefijo'         => 'progru',
		'eliminar'        => '1',
		'editar'          => '1',
		'crear'           => '1',
		'visibilidad'     => '1',
		'buscar'          => '0',
		'bloqueado'       => '0',
		'menu'            => '0',
		'menu_label'      => 'Páginas',
		'me'              => 'PAGINAS_GROUPS',
		'orden'           => '0',
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
		'grupo'			=> 'contenidos',
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

		'app'			=> '


		<a href="custom/paginas.php?id=9">Empresa</a>
		
		<a href="custom/paginas.php?id=8">Servicios</a>


		<a href="custom/galleries_photos_photos.php?id=2">Marcas</a>

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
						'opciones'		=> 'id,name|paginas_groups'
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
						'style'			=> 'height:300px;'
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
		'grupo'			=> 'contenidos',
		'edicion_completa'=> '1',
		'web'			=> '0',
		'visibilidad'	=> '1'
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
		'grupo'			=> 'contenidos',
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
						'tamanos'		=> '150x120,983x347,202x237,202x93,245x109,245x221,245x110',
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
						'listable'		=> '1',
						'width'			=> '100px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '1',
						'style'			=> 'width:100px;',
				),					
				'url'			=>array(
						'campo'			=> 'url',
						'label'			=> 'Url',
						'tipo'			=> 'inp',
						'width'			=> '200px',
						'style'			=> 'width:200px;',
						'listable'		=> '1',
						'size'			=> '160',
						'disabled'		=> '0'
				),
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'contenidos',
		'por_linea'		=> '4',
		// 'crear_quick'	=> '1',
		'page'			=> '0'
);

/******************************************************************************************************************************************************/



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
		'edicion_completa'=> '1',
		'edicion_rapida'	=> '0',		
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
				'url'		=>array(
						'campo'			=> 'url',
						'label'			=> 'Url',
						'tipo'			=> 'inp',
						'width'			=> '200px',
						'unique'		=> '1',
						'listable'		=> '1',
						'validacion'	=> '1',
						'constante'		=> '1',
						// 'setup'			=> 'distinciones,certificaciones,galeria-fotos'
						'disabled'		=> '1'
				),				
				'fecha'			=>array(
						'campo'			=> 'fecha',
						'label'			=> 'Fecha',
						'tipo'			=> 'fch',
						'width'			=> '200px',
						'listable'		=> '1',
						// 'validacion'	=> '1',
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
						'validacion'	=> '1',
						// 'constante'		=> '1',
						'controles'		=> '<a  rel="subs" href="custom/galleries_photos_photos.php?id=[id]">{select count(*) from galleries_photos_photos where id_grupo=[id]}  fotos</a>

							'
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
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'contenidos',
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
		'grupo'			=> 'contenidos',
		'por_linea'		=> '5',
		'disabled'		=> '0',
		'page'			=> '0'
);



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
		'edicion_completa'=> '1',
		'edicion_rapida'	=> '0',
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
						'label'			=> 'Descripción completa',
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
		'grupo'			=> 'contenidos',
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
		'grupo'			=> 'contenidos',
		'por_linea'		=> '5',
		'disabled'		=> '0',
		'page'			=> '0'
);



$objeto_tabla['PAGES_PHOTOS']=array(
		'titulo'		=> 'Productos',
		'nombre_singular'=> 'grupo de productos',
		'nombre_plural'	=> 'grupos de productos',
		'tabla'			=> 'pages_photos',
		'archivo'		=> 'pages_photos',
		'archivo_hijo'	=> 'pages_photos_photos',
		'prefijo'		=> 'profot',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Grupos de Productos',
		'me'			=> 'PAGES_PHOTOS',
		'orden'			=> '0',
		'app'			=> '
		

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
						'controles'		=> '<a  rel="subs" href="custom/pages_photos_photos.php?id=[id]">{select count(*) from pages_photos_photos where id_grupo=[id]}  productos</a>

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
		'grupo'			=> 'contenidos',
		'por_linea'		=> '1',
		'seccion'		=> '',
		'disabled'		=> '0',
		'page'			=> '0'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PAGES_PHOTOS_PHOTOS']=array(
		'titulo'		=> 'Fotos : {select name from pages_photos where id=[id]}',
		'nombre_singular'=> 'producto',
		'nombre_plural'	=> 'productos',
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
						'validacion'	=> '0',
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
				'html'			=>array(
						'campo'			=> 'html',
						'label'			=> 'Texto',
						'tipo'			=> 'html',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '400px',
						'style'			=> 'height:200px;'
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
		'grupo'			=> 'contenidos',
		'por_linea'		=> '5',
		'disabled'		=> '0',
		'page'			=> '0'
);


$objeto_tabla['NEWS']=array(
		'titulo'		=> 'Noticias',
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
		'menu_label'	=> 'Noticias',
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
						'style'			=> 'height:200px;'
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
						'tamanos'		=> '70x70,400x300',
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
		'grupo'			=> 'contenidos',
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
		'menu'			=> '1',
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
				'file'			=>array(
						'campo'			=> 'file',
						'label'			=> 'Foto',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '0',
						'prefijo'		=> 'links',
						'carpeta'		=> 'links_imas',
						'tamanos'		=> '150x120,219x102',
						'tamano_listado'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px,height:auto,'
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
		'grupo'			=> 'contenidos',
		'edicion_completa'=> '1',
		'alias_grupo'	=> '',
		'edicion_rapida'	=> '1',
		'page'			=> '0',
		'disabled'		=> '1',
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
		'grupo'			=> 'contenidos',
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
				'dni'		=>array(
						'campo'			=> 'dni',
						'label'			=> 'DNI',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '100px',
						'style'			=> 'width:100px;',
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
		'titulo'		=> 'Grupos de Proyectos',
		'nombre_singular'=> 'grupos',
		'nombre_plural'	=> 'grupo',
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
		'menu'			=> '0',
		'menu_label'	=> 'Grupos de Proyectos',
		'me'			=> 'PROJECTS_GROUPS',
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
						'controles'		=> '<a  rel="subs" href="custom/projects.php?id=[id]">{select count(*) from projects where id_grupo=[id]}  proyectos</a>'
				),
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'proyectos',
		'por_linea'		=> '1',
		'disabled'		=> '0',
		'crear_quick'	=> '1',
		'page'			=> '0',

);

$objeto_tabla['PROJECTS']=array(
		'titulo'		=> 'Proyectos',
		'nombre_singular'=> 'proyecto',
		'nombre_plural'	=> 'proyectos',
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
		'menu'			=> '0',
		'menu_label'	=> 'Proyectos',
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
						'listable'		=> '1',
						'width'			=> '100px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '1',
						'style'			=> 'width:100px;',
				),					
				'id_grupo'		=>array(
						'campo'			=> 'id_grupo',
						'label'			=> 'grupo',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'validacion'	=> '0',
						'default'		=> '[id]',
						'foreig'		=> '1',
						'opciones'		=> 'id,name|projects_groups',						
						'foreigkey'		=> 'PROJECTS_GROUPS'
				),				
				'fecha'			=>array(
						'campo'			=> 'fecha',
						'label'			=> 'Fecha',
						'tipo'			=> 'fch',
						'width'			=> '100px',
						'listable'		=> '1',
						'validacion'	=> '1',
						'formato'		=> '7',
						'default'		=> 'now()',
				),
				'name'		=>array(
						'campo'			=> 'name',
						'label'			=> 'Nombre',
						'width'			=> '200px',
						'unique'		=> '0',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'style'			=> 'width:75%;',
						'controles'		=> '<a  rel="subs" href="custom/projects_photos.php?id=[id]">{select count(*) from projects_photos where id_grupo=[id]}  fotos</a>

							'
				),
				'text'			=>array(
						'campo'			=> 'text',
						'label'			=> 'Descripción breve',
						'tipo'			=> 'txt',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '400px',
						'style'			=> 'height:200px;'
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
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'proyectos',
		'por_linea'		=> '1',
		'disabled'		=> '0',
		'page'			=> '0'
);
/******************************************************************************************************************************************************/

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
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'proyectos',
		'por_linea'		=> '5',
		'disabled'		=> '0',
		'page'			=> '0'
);


/******************************************************************************************************************************************************/


$objeto_tabla['PRODUCTOS_GRUPOS']=array(
		'titulo'		=> 'Categorías',
		'nombre_singular'=> 'categoría',
		'nombre_plural'	=> 'categorias',
		'tabla'			=> 'productos_grupos',
		'archivo'		=> 'productos_grupos',
		'archivo_hijo'	=> 'productos_subgrupos',
		'prefijo'		=> 'progru',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Categorías',
		'crear_label'	=> '80px',
		'crear_txt'		=> '400px',
		'edicion_completa'=> '1',
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

				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '300px',
						'unique'		=> '1',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'controles'		=> '<a rel="subs" class="linkstitu" href="custom/productos_subgrupos.php?id_grupo=[id]">{select count(*) from productos_subgrupos where id_grupo=[id]} categorías</a>'
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
				),	
				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Texto',
						'tipo'			=> 'html',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '300px',
				),

				'foto'			=>array(
						'campo'			=> 'foto',
						'label'			=> 'Foto',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '0',
						'prefijo'		=> 'progru',
						'carpeta'		=> 'progru_imas',
						'tamanos'		=> '70x70,400x300',
						'tamano_listado'	=> '1'
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
		),
		'grupo'			=> 'productos',
		'edicion_rapida'	=> '0'
);

/******************************************************************************************************************************************************/


$objeto_tabla['PRODUCTOS_SUBGRUPOS']=array(
		'titulo'		=> 'Subcategorías',
		'nombre_singular'=> 'subcategoría',
		'nombre_plural'	=> 'subcategorías',
		'tabla'			=> 'productos_subgrupos',
		'archivo'		=> 'productos_subgrupos',
		'prefijo'		=> 'prosubgru',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Subcategorías',
		'me'			=> 'PRODUCTOS_SUBGRUPOS',
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
						'unique'		=> '1',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'controles'		=> '<a  rel="subs" href="custom/productos_filtros.php?id_subgrupo=[id]">{select count(*) from productos_filtros where id_subgrupo=[id]} sub-categorias</a>
<a  href="custom/productos_items.php?id_subgrupo=[id]">{select count(*) from productos_items where id_subgrupo=[id]} productos</a>'
				),

				'id_grupo'		=>array(
						'label'			=> 'Categoría',
						'campo'			=> 'id_grupo',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'width'			=> '200px',
						'validacion'	=> '0',
						'default'		=> '[id_grupo]',
						'opciones'		=> 'id,nombre|productos_grupos',
						'foreig'		=> '1'
				),

				'ver_home'		=>array(
						'campo'			=> 'ver_home',
						'label'			=> 'Ver en HOME',
						'width'			=> '40px',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'si',
								'0'			=> 'no'
						),
						'default'		=> '1',
						'disabled'		=> 1
				),

				'ver_rubro'		=>array(
						'campo'			=> 'ver_rubro',
						'label'			=> 'Ver en Grupo',
						'width'			=> '40px',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'si',
								'0'			=> 'no'
						),
						'default'		=> '1',
						'disabled'		=> 1
				),

				'relevancia'	=>array(
						'campo'			=> 'relevancia',
						'label'			=> 'Relevancia',
						'width'			=> '40px',
						'tipo'			=> 'inp',
						'variable'		=> 'float',
						'listable'		=> '1',
						'validacion'	=> '0',
						'default'		=> '0',
						'style'			=> 'width:40px;',
						'disabled'		=> 1
				)
		),
		'grupo'			=> 'productos',
		'group'			=> 'id_grupo'
);

/******************************************************************************************************************************************************/


$objeto_tabla['PRODUCTOS_FILTROS']=array(
		'titulo'		=> 'Lineas',
		'nombre_singular'=> 'línea',
		'nombre_plural'	=> 'lineas',
		'tabla'			=> 'productos_filtros',
		'archivo'		=> 'productos_filtros',
		'prefijo'		=> 'prodfil',
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
		'menu_label'	=> 'Lineas',
		'por_pagina'	=> '56',
		'me'			=> 'PRODUCTOS_FILTROS',
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
						'controles'		=> '<a class="linkstitu" href="custom/productos_items.php?id_filtro=[id]">{select count(*) from productos_items where id_filtro=[id]} productos</a>'
				),

				'id_subgrupo'	=>array(
						'label'			=> 'Subcategoría',
						'opciones'		=> 'id,nombre|productos_subgrupos',
						'campo'			=> 'id_subgrupo',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '0',
						'default'		=> '[id_subgrupo]',
						'foreig'		=> '1',
						'foreigkey'		=> 'PRODUCTOS_SUBGRUPOS'
				),
				'ver_home'		=>array(
						'campo'			=> 'ver_home',
						'label'			=> 'Ver en HOME',
						'width'			=> '90px',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'si',
								'0'			=> 'no'
						),
						'default'		=> '1',
						// 'disabled'		=> 1
				),				
		),
		'grupo'			=> 'productos'
);

/******************************************************************************************************************************************************/


$objeto_tabla['PRODUCTOS_ITEMS']=array(
		'titulo'		=> 'Productos',
		'nombre_singular'=> 'producto',
		'nombre_plural'	=> 'productos',
		'tabla'			=> 'productos_items',
		'archivo'		=> 'productos_items',
		'archivo_hijo'	=> 'productos_fotos',
		'prefijo'		=> 'prodite',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'crear_label'	=> '120px',
		'crear_txt'		=> '550px',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Productos',
		'por_pagina'	=> '200',
		'me'			=> 'PRODUCTOS_ITEMS',
		'orden'			=> '1',
		// 'oncreate'		=> 'base2/after_productos_items.php',
		// 'onedit'		=> 'base2/after_productos_items.php',
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
						'label'			=> 'Categoría',
						'campo'			=> 'id_grupo',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '0',
						'default'		=> '[id_grupo]',
						'opciones'		=> 'id,nombre|productos_grupos',
						'foreig'		=> '1',
						'foreigkey'		=> 'PRODUCTOS_GRUPOS',
						'load'			=> 'id_subgrupo||id,nombre|productos_subgrupos|where id_grupo=',
						'style'			=> 'width:150px;',
						'derecha'		=> '1',
						'width'			=> '90px',
						'queries'		=> '1'
				),

				'id_subgrupo'	=>array(
						'label'			=> 'Sub categoría',
						'campo'			=> 'id_subgrupo',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '0',
						'default'		=> '[id_subgrupo]',
						'opciones'		=> 'id,nombre|productos_subgrupos',
						'foreig'		=> '1',
						'foreigkey'		=> 'PRODUCTOS_SUBGRUPOS',
						'style'			=> 'width:150px;',
						'load'			=> 'id_filtro||id,nombre|productos_filtros|where id_subgrupo=',
						'derecha'		=> '2',
						'width'			=> '90px',
						'queries'		=> '1'						
				),

				'id_filtro'		=>array(
						'campo'			=> 'id_filtro',
						'label'			=> 'Línea',
						'tipo'			=> 'hid',
						'combo'			=> '1',
						'default'		=> '[id_filtro]',
						'foreig'		=> '1',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=> 'id,nombre|productos_filtros|where id_subgrupo=[id_subgrupo]',
						'width'			=> '90px',
						'derecha'		=> '2',
						'style'			=> 'width:100px;',
						'queries'		=> '1'						
				),


				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '100px',
						'like'			=> '1',
						'style'			=> 'width:250px;',
						'derecha'		=> '1',
						'controles'		=> '<a href="custom/productos_fotos.php?id=[id]">{select count(*) from productos_fotos where id_item=[id]} fotos</a>'
				),

				'marca'			=>array(
						'campo'			=> 'marca',
						'label'			=> 'Marca',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '90px',
						'like'			=> '1',
						'style'			=> 'width:150px;',
						'derecha'		=> '2'
				),
				'codigo'		=>array(
						'campo'			=> 'codigo',
						'label'			=> 'cod.',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '80px',
						'like'			=> '1',
						'style'			=> 'width:150px;',
						'derecha'		=> '1',
						'disabled'		=> '0'
				),



				'descripcion'	=>array(
						'campo'			=> 'descripcion',
						'label'			=> 'Descripción',
						'tipo'			=> 'html',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '150px',
						'style'			=> 'height:150px;'
				),

				'moneda'		=>array(
						'campo'			=> 'moneda',
						'label'			=> 'Moneda',
						'tipo'			=> 'com',
						'derecha'		=> '1',
						'listable'		=> '0',
						'validacion'	=> '1',
						'opciones'		=>array(
								'1'			=> 'Dólares Americanos',
								'2'			=> 'Nuevos Soles'
						),
						'default'		=> '1',
						'style'			=> 'width:100px;'
				),

				'precio'		=>array(
						'campo'			=> 'precio',
						'label'			=> 'Precio',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '50px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '2',
						'size'			=> '8'
				),
				'adjunto'		=>array(
						'campo'			=> 'adjunto',
						'label'			=> 'Archivo Adjunto',
						'tipo'			=> 'sto',
						'width'			=> '150px',
						'style'			=> 'width:200px;',
						'listable'		=> '0',
						'validacion'	=> '0',
						'prefijo'		=> 'atc',
						'carpeta'		=> 'atc_imas',
						'disabled'		=> '0'
				),	
				
				'tags'			=>array(
						'campo'			=> 'tags',
						'label'			=> 'Tags',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'indicador'		=> '1',
						'width'			=> '150px',
						'style'			=> 'height:150px;'
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
						'disabled'		=> 0
				),	

				'viewed'		=>array(
						'campo'			=> 'viewed',
						'label'			=> 'Visitas',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '100px',
						// 'style'			=> 'width:200px;',
						'indicador'		=> '1',						
						'disabled'		=> '1'
						// 'default'		=> '1',
						// 'variable'		=> 'longtext',
						// 'obj'			=> '1'
				),	
			

								
		),
		'grupo'			=> 'productos',
		'edicion_rapida'	=> '0',
		'calificacion'	=> '0',
		'edicion_completa'=> '1',
		'duplicar'		=> '0'
);

/******************************************************************************************************************************************************/




$objeto_tabla['PRODUCTOS_FOTOS']=array(
		'titulo'		=> 'Fotos de {select nombre from productos_items where id=[id]}',
		'nombre_singular'=> 'vista',
		'nombre_plural'	=> 'vistas',
		'tabla'			=> 'productos_fotos',
		'archivo'		=> 'productos_fotos',
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
				)
		),
		'grupo'			=> 'productos',
		'por_linea'		=> '5'
);


$objeto_tabla['PRODUCTOS_ITEMS_IMPOR']=array(
		'titulo'		=> 'Importaciones',
		'nombre_singular'=> 'producto',
		'nombre_plural'	=> 'productos',
		'tabla'			=> 'productos_items_impor',
		'archivo'		=> 'productos_items_impor',
		'archivo_hijo'	=> 'productos_fotos_impor',
		'prefijo'		=> 'proditeim',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'crear_label'	=> '120px',
		'crear_txt'		=> '550px',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Importaciones',
		'por_pagina'	=> '30',
		'me'			=> 'PRODUCTOS_ITEMS_IMPOR',
		'orden'			=> '1',
		// 'oncreate'		=> 'base2/after_productos_items.php',
		// 'onedit'		=> 'base2/after_productos_items.php',
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
						'width'			=> '100px',
						'like'			=> '1',
						'style'			=> 'width:250px;',
						'derecha'		=> '1',
						'controles'		=> '<a href="custom/productos_fotos_impor.php?id=[id]">{select count(*) from productos_fotos_impor where id_item=[id]} fotos</a>'
				),

				'marca'			=>array(
						'campo'			=> 'marca',
						'label'			=> 'Marca',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '90px',
						'like'			=> '1',
						'style'			=> 'width:150px;',
						'derecha'		=> '2'
				),
				'codigo'		=>array(
						'campo'			=> 'codigo',
						'label'			=> 'cod.',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '80px',
						'like'			=> '1',
						'style'			=> 'width:150px;',
						'derecha'		=> '1',
						'disabled'		=> '0'
				),



				'descripcion'	=>array(
						'campo'			=> 'descripcion',
						'label'			=> 'Descripción',
						'tipo'			=> 'html',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '150px',
						'style'			=> 'height:150px;'
				),

				'moneda'		=>array(
						'campo'			=> 'moneda',
						'label'			=> 'Moneda',
						'tipo'			=> 'com',
						'derecha'		=> '1',
						'listable'		=> '0',
						'validacion'	=> '1',
						'opciones'		=>array(
								'1'			=> 'Dólares Americanos',
								'2'			=> 'Nuevos Soles'
						),
						'default'		=> '1',
						'style'			=> 'width:100px;'
				),

				'precio'		=>array(
						'campo'			=> 'precio',
						'label'			=> 'Precio',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '50px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '2',
						'size'			=> '8'
				),
				'adjunto'		=>array(
						'campo'			=> 'adjunto',
						'label'			=> 'Archivo Adjunto',
						'tipo'			=> 'sto',
						'width'			=> '150px',
						'style'			=> 'width:200px;',
						'listable'		=> '0',
						'validacion'	=> '0',
						'prefijo'		=> 'atc',
						'carpeta'		=> 'atc_imas',
						'disabled'		=> '0'
				),	
				
				'tags'			=>array(
						'campo'			=> 'tags',
						'label'			=> 'Tags',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'indicador'		=> '1',
						'width'			=> '150px',
						'style'			=> 'height:150px;'
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
						'disabled'		=> 0
				),	

				'viewed'		=>array(
						'campo'			=> 'viewed',
						'label'			=> 'Visitas',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '100px',
						// 'style'			=> 'width:200px;',
						'indicador'		=> '1',						
						'disabled'		=> '1'
						// 'default'		=> '1',
						// 'variable'		=> 'longtext',
						// 'obj'			=> '1'
				),	
			

								
		),
		'grupo'			=> 'productos',
		'edicion_rapida'	=> '0',
		'calificacion'	=> '0',
		'edicion_completa'=> '1',
		'duplicar'		=> '0'
);


$objeto_tabla['PRODUCTOS_FOTOS_IMPOR']=array(
		'titulo'		=> 'Fotos de {select nombre from productos_items_impor where id=[id]}',
		'nombre_singular'=> 'vista',
		'nombre_plural'	=> 'vistas',
		'tabla'			=> 'productos_fotos_impor',
		'archivo'		=> 'productos_fotos_impor',
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
		'me'			=> 'PRODUCTOS_FOTOS_IMPOR',
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
						'carpeta'		=> 'profot2_imas',
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
				)
		),
		'grupo'			=> 'productos',
		'por_linea'		=> '5'
);

$objeto_tabla['PRODUCTOS_ITEMS_DESCU']=array(
		'titulo'		=> 'Descuentos',
		'nombre_singular'=> 'producto',
		'nombre_plural'	=> 'productos',
		'tabla'			=> 'productos_items_descu',
		'archivo'		=> 'productos_items_descu',
		'archivo_hijo'	=> 'productos_fotos_descu',
		'prefijo'		=> 'proditeim',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'crear_label'	=> '120px',
		'crear_txt'		=> '550px',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Descuentos',
		'por_pagina'	=> '30',
		'me'			=> 'PRODUCTOS_ITEMS_DESCU',
		'orden'			=> '1',
		// 'oncreate'		=> 'base2/after_productos_items.php',
		// 'onedit'		=> 'base2/after_productos_items.php',
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
						'width'			=> '100px',
						'like'			=> '1',
						'style'			=> 'width:250px;',
						'derecha'		=> '1',
						'controles'		=> '<a href="custom/productos_fotos_descu.php?id=[id]">{select count(*) from productos_fotos_descu where id_item=[id]} fotos</a>'
				),

				'marca'			=>array(
						'campo'			=> 'marca',
						'label'			=> 'Marca',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '90px',
						'like'			=> '1',
						'style'			=> 'width:150px;',
						'derecha'		=> '2'
				),
				'codigo'		=>array(
						'campo'			=> 'codigo',
						'label'			=> 'cod.',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '80px',
						'like'			=> '1',
						'style'			=> 'width:150px;',
						'derecha'		=> '1',
						'disabled'		=> '0'
				),



				'descripcion'	=>array(
						'campo'			=> 'descripcion',
						'label'			=> 'Descripción',
						'tipo'			=> 'html',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '150px',
						'style'			=> 'height:150px;'
				),

				'moneda'		=>array(
						'campo'			=> 'moneda',
						'label'			=> 'Moneda',
						'tipo'			=> 'com',
						'derecha'		=> '1',
						'listable'		=> '0',
						'validacion'	=> '1',
						'opciones'		=>array(
								'1'			=> 'Dólares Americanos',
								'2'			=> 'Nuevos Soles'
						),
						'default'		=> '1',
						'style'			=> 'width:100px;'
				),

				'precio'		=>array(
						'campo'			=> 'precio',
						'label'			=> 'Precio',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '50px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '2',
						'size'			=> '8'
				),

				'oferta'		=>array(
						'campo'			=> 'oferta',
						'label'			=> 'Oferta',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '50px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '2',
						'size'			=> '8'
				),				

				'adjunto'		=>array(
						'campo'			=> 'adjunto',
						'label'			=> 'Archivo Adjunto',
						'tipo'			=> 'sto',
						'width'			=> '150px',
						'style'			=> 'width:200px;',
						'listable'		=> '0',
						'validacion'	=> '0',
						'prefijo'		=> 'atc',
						'carpeta'		=> 'atc_imas',
						'disabled'		=> '0'
				),	
								
				'tags'			=>array(
						'campo'			=> 'tags',
						'label'			=> 'Tags',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'indicador'		=> '1',
						'width'			=> '150px',
						'style'			=> 'height:150px;'
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
						'disabled'		=> 0
				),	

				'viewed'		=>array(
						'campo'			=> 'viewed',
						'label'			=> 'Visitas',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '100px',
						// 'style'			=> 'width:200px;',
						'indicador'		=> '1',						
						'disabled'		=> '1'
						// 'default'		=> '1',
						// 'variable'		=> 'longtext',
						// 'obj'			=> '1'
				),	
			

								
		),
		'grupo'			=> 'productos',
		'edicion_rapida'	=> '0',
		'calificacion'	=> '0',
		'edicion_completa'=> '1',
		'duplicar'		=> '0'
);


$objeto_tabla['PRODUCTOS_FOTOS_DESCU']=array(
		'titulo'		=> 'Fotos de {select nombre from productos_items_descu where id=[id]}',
		'nombre_singular'=> 'vista',
		'nombre_plural'	=> 'vistas',
		'tabla'			=> 'productos_fotos_descu',
		'archivo'		=> 'productos_fotos_descu',
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
		'me'			=> 'PRODUCTOS_FOTOS_DESCU',
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
						'carpeta'		=> 'profot3_imas',
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
				)
		),
		'grupo'			=> 'productos',
		'por_linea'		=> '5'
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
/******************************************************************************************************************************************************/

?>