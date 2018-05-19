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
						'setup'			=> 'empresa,servicios',
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
		<a href="custom/banners_fotos_fotos.php?id=1">Banners</a>
		<a href="custom/paginas.php?i=1">Bienvenido</a>
		<a href="custom/paginas.php?id=1">Empresa</a>
		<a href="custom/paginas.php?id=5">Servicios</a>
		<a href="custom/galleries_photos_photos.php?id=1">Marcas</a>
		<a href="custom/galleries_photos_photos.php?id=2">Clientes</a>
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
						'style'			=> 'width:70%;',
						'controles'		=> '<a rel="subs"  href="custom/paginas_photos.php?id=[id]">{select count(*) from paginas_photos where id_grupo=[id]}  fotos</a>
						'
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
		'visibilidad'	=> '0'
);


$objeto_tabla['PAGINAS_PHOTOS']=array(
		'titulo'		=> 'Fotos : {select name from paginas where id=[id]}',
		'nombre_singular'=> 'foto',
		'nombre_plural'	=> 'fotos',
		'tabla'			=> 'paginas_photos',
		'archivo'		=> 'paginas_photos',
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
		'me'			=> 'PAGINAS_PHOTOS',
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
						'foreigkey'		=> 'PAGINAS'
				),
				'file'			=>array(
						'campo'			=> 'file',
						'label'			=> 'Foto',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '1',
						'prefijo'		=> 'pagfot',
						'carpeta'		=> 'pagfot_imas',
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
						'width'			=> '207px',
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
		'grupo'			=> 'contenidos',
		'por_linea'		=> '5',
		'disabled'		=> '0',
		'page'			=> '0'
);

$objeto_tabla['BANNERS_FOTOS']=array(
		'titulo'		=> 'Banners',
		'nombre_singular'=> 'banner',
		'nombre_plural'=> 'banners',
		'tabla'			=> 'banners_fotos',
		'archivo'		=> 'banners_fotos',
		'archivo_hijo'	=> 'banners_fotos_fotos',
		'prefijo'		=> 'banfot',
		'eliminar'		=> '0',
		'editar'		=> '1',
		'edicion_completa'=> '1',
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
				'file'			=>array(
						'campo'			=> 'file',
						'label'			=> 'Foto',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '1',
						'prefijo'		=> 'banfotm',
						'carpeta'		=> 'banfotm_imas',
						'tamanos'		=> '150x120,983x347,202x237,202x93,245x109,245x221,245x110',
						'tamano_listado'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px,height:auto,',
						'disabled'		=> '1'
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



/******************************************************************************************************************************************************/

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
		'edicion_completa'=> '1',		
		'edicion_rapida'	=> '0',			
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
				'bg'			=>array(
						'campo'			=> 'bg',
						'label'			=> 'fondo',
						'tipo'			=> 'img',
						'listable'		=> '1',
						// 'validacion'	=> '1',
						'prefijo'		=> 'banbg',
						'carpeta'		=> 'banbg_imas',
						'tamanos'		=> '150x120',
						'tamano_listado'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px,height:auto,'
				),
				'bgmovil'			=>array(
						'campo'			=> 'bgmovil',
						'label'			=> 'fondo movil',
						'tipo'			=> 'img',
						'listable'		=> '1',
						// 'validacion'	=> '1',
						'prefijo'		=> 'banbgmovil',
						'carpeta'		=> 'banbgmovil_imas',
						'tamanos'		=> '150x120',
						'tamano_listado'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px,height:auto,',
						'disabled'		=> '1'						
				),									
				'file'			=>array(
						'campo'			=> 'file',
						'label'			=> 'Foto desde la derecha',
						'tipo'			=> 'img',
						'listable'		=> '1',
						// 'validacion'	=> '1',
						'prefijo'		=> 'banfot',
						'carpeta'		=> 'banfot_imas',
						'tamanos'		=> '150x120,983x347,202x237,202x93,245x109,245x221,245x110',
						'tamano_listado'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px,height:auto,',
						'disabled'		=> '1'												
				),
				'foto_descripcion'=>array(
						'campo'			=> 'foto_descripcion',
						'label'			=> 'Texto 1',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '207px',
						'style'			=> 'width:600px',
						'size'			=> '160',
						'disabled'		=> '1'											
				),	
				'texto2'=>array(
						'campo'			=> 'texto2',
						'label'			=> 'Texto 2',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '207px',
						'style'			=> 'width:600px',
						'size'			=> '160',
						'disabled'		=> '1'														
				),	
				'texto3'=>array(
						'campo'			=> 'texto3',
						'label'			=> 'Texto 3',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '207px',
						'style'			=> 'width:600px',
						'size'			=> '160',
						'disabled'		=> '1'									
				),									
				'filecentro'			=>array(
						'campo'			=> 'filecentro',
						'label'			=> 'Foto al centro',
						'tipo'			=> 'img',
						'listable'		=> '1',
						// 'validacion'	=> '1',
						'prefijo'		=> 'banfotcen',
						'carpeta'		=> 'banfotcen_imas',
						'tamanos'		=> '150x120',
						'tamano_listado'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px,height:auto,',
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
						'style'			=> 'width:600px;',
						'listable'		=> '1',
						'size'			=> '160'
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
$objeto_tabla['GALLERIES_CLIENTES']=array(
		'titulo'		=> 'Clientes',
		'nombre_singular'=> 'foto',
		'nombre_plural'	=> 'fotos',
		'tabla'			=> 'galleries_clientes',
		'archivo'		=> 'galleries_clientes',
		'prefijo'		=> 'galclie',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'crear_label'	=> '200px',
		'crear_txt'		=> '400px',
		'altura_listado'	=> '60px',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Clientes',
		'por_pagina'	=> '56',
		'me'			=> 'GALLERIES_CLIENTES',
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
						'validacion'	=> '1',
						'prefijo'		=> 'galfot',
						'carpeta'		=> 'galcli_imas',
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
		'grupo'			=> 'contenidos',
		'por_linea'		=> '5',
		'disabled'		=> '1',
		'page'			=> '0'
);

$objeto_tabla['TESTIMONIOS']=array(
		'titulo'		=> 'Testimonios',
		'nombre_singular'=> 'testimonio',
		'nombre_plural'	=> 'testimonios',
		'tabla'			=> 'testimonios',
		'archivo'		=> 'testimonios',
		'prefijo'		=> 'tes',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'edicion_completa'=> '1',		
		'crear'			=> '1',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Testimonios',
		'me'			=> 'TESTIMONIOS',
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
				// 'id_grupo'		=>array(
				// 		'campo'			=> 'id_grupo',
				// 		'label'			=> 'grupo',
				// 		'tipo'			=> 'hid',
				// 		'listable'		=> '0',
				// 		'validacion'	=> '0',
				// 		'default'		=> '[id]',
				// 		'foreig'		=> '1',
				// 		'opciones'		=> 'id,name|projects_groups',						
				// 		'foreigkey'		=> 'PROJECTS_GROUPS',
				// 		'disabled'		=> '1'
				// ),				
				'fecha'			=>array(
						'campo'			=> 'fecha',
						'label'			=> 'Fecha',
						'tipo'			=> 'fch',
						'width'			=> '100px',
						'listable'		=> '1',
						'validacion'	=> '1',
						'formato'		=> '7',
						'default'		=> 'now()',
						'disabled'		=> '1',
				),
				// 'url'		=>array(
				// 		'campo'			=> 'url',
				// 		'label'			=> 'Url',
				// 		'tipo'			=> 'inp',
				// 		'width'			=> '200px',
				// 		// 'unique'		=> '1',
				// 		'validacion'	=> '1',
				// 		'listable'		=> '0',
				// 		'validacion'	=> '1',
				// 		// 'constante'		=> '1',
				// ),						
				'name'		=>array(
						'campo'			=> 'name',
						'label'			=> 'Nombre',
						'width'			=> '200px',
						'unique'		=> '0',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'style'			=> 'width:75%;',						
				),
				// 'status'	=>array(
				// 		'campo'			=> 'status',
				// 		'label'			=> 'Estado',
				// 		'width'			=> '100px',
				// 		'listable'		=> '1',
				// 		'tipo'			=> 'com',
				// 		'opciones'		=>array(
				// 				'1'			=> 'Entrega Inmediata',
				// 				'2'			=> 'En pre-venta',
				// 				'3'			=> 'En Construcción',
				// 				'4'			=> 'En Venta'
				// 		),
				// 		'default'		=> '0',
				// 		'derecha'		=> '1'
				// ),				
				'file'			=>array(
						'help'			=> 'Tamaño 292x440px',
						'campo'			=> 'file',
						'label'			=> 'Foto',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '0',
						'prefijo'		=> 'tesfot',
						'carpeta'		=> 'tesfot_imas',
						'tamanos'		=> '150x120',
						'tamano_listado'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px,height:auto,'
				),
				'file_banner'			=>array(
						'help'			=> 'Tamaño 1000x750px',
						'campo'			=> 'file_banner',
						'label'			=> 'Banner',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '0',
						'prefijo'		=> 'tesban',
						'carpeta'		=> 'tesban_imas',
						'tamanos'		=> '150x120',
						'tamano_listado'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px,height:auto,'
				),

				// 'text'			=>array(
				// 		'campo'			=> 'text',
				// 		'label'			=> 'Descripción breve',
				// 		'tipo'			=> 'txt',
				// 		'listable'		=> '0',
				// 		'validacion'	=> '0',
				// 		'width'			=> '400px',
				// 		'style'			=> 'height:200px;'
				// ),
				// 'html'			=>array(
				// 		'campo'			=> 'html',
				// 		'label'			=> 'Descripción',
				// 		'tipo'			=> 'html',
				// 		'listable'		=> '0',
				// 		'validacion'	=> '0',
				// 		'width'			=> '400px',
				// 		'style'			=> 'height:200px;'
				// ),	
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'contenidos',
		'por_linea'		=> '1',
		'disabled'		=> '1',
		'page'			=> '0'
);


$objeto_tabla['GALLERIES_PHOTOS']=array(
		'titulo'		=> 'Galerías de Fotos',
		'nombre_singular'=> 'evento',
		'nombre_plural'	=> 'eventos',
		'tabla'			=> 'galleries_photos',
		'archivo'		=> 'galleries_photos',
		'archivo_hijo'	=> 'galleries_photos_photos',
		'prefijo'		=> 'galfot',
		'eliminar'		=> '0',
		'editar'		=> '1',
		'edicion_completa'=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '0',
		'menu_label'	=> 'Eventos',
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
						'validacion'	=> '0',
						'constante'		=> '1',
						'setup'			=> 'clientes,promociones',
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
						'disabled'		=> '0'
				),					
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'contenidos',
		'por_linea'		=> '1',
		'seccion'		=> '',
		'disabled'		=> '1',
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
		'edicion_rapida'	=> '0',
		'edicion_completa'=> '1',
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
		'grupo'			=> 'contenidos',
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
		'grupo'			=> 'contenidos',
		'por_linea'		=> '5',
		'disabled'		=> '0',
		'page'			=> '0'
);



$objeto_tabla['NEWS']=array(
		'titulo'		=> 'Notas de Interés',
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
		'menu_label'	=> 'Notas de Interés',
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
		'titulo'		=> 'Grupos de productos',
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
		'menu'			=> '1',
		'menu_label'	=> 'Grupos de productos',
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
				'url'		=>array(
						'campo'			=> 'url',
						'label'			=> 'Url',
						'tipo'			=> 'inp',
						'width'			=> '200px',
						// 'unique'		=> '1',
						'validacion'	=> '1',
						'listable'		=> '1',
						'validacion'	=> '1',
						// 'constante'		=> '1',
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
		'grupo'			=> 'productos',
		'por_linea'		=> '1',
		'disabled'		=> '1',
		'crear_quick'	=> '1',
		'page'			=> '0',

);



$objeto_tabla['PROJECTS']=array(
		'titulo'		=> 'Categorías',
		'nombre_singular'=> 'categoría',
		'nombre_plural'	=> 'cagegorías',
		'tabla'			=> 'projects',
		'archivo'		=> 'projects',
		'archivo_hijo'	=> 'PROJECT_GALLERIES_PHOTOS',
		'prefijo'		=> 'pro',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'edicion_completa'=> '1',		
		'crear'			=> '1',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Categorías',
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
						'disabled'		=> '0',
				),					
				// 'id_grupo'		=>array(
				// 		'campo'			=> 'id_grupo',
				// 		'label'			=> 'grupo',
				// 		'tipo'			=> 'hid',
				// 		'listable'		=> '0',
				// 		'validacion'	=> '0',
				// 		'default'		=> '[id]',
				// 		'foreig'		=> '1',
				// 		'opciones'		=> 'id,name|projects_groups',						
				// 		'foreigkey'		=> 'PROJECTS_GROUPS',
				// 		'disabled'		=> '1'
				// ),				
				'fecha'			=>array(
						'campo'			=> 'fecha',
						'label'			=> 'Fecha',
						'tipo'			=> 'fch',
						'width'			=> '100px',
						'listable'		=> '1',
						'validacion'	=> '1',
						'formato'		=> '7',
						'default'		=> 'now()',
						'disabled'		=> '1',
				),
				'url'		=>array(
						'campo'			=> 'url',
						'label'			=> 'Url',
						'tipo'			=> 'inp',
						'width'			=> '200px',
						// 'unique'		=> '1',
						'validacion'	=> '1',
						'listable'		=> '0',
						'validacion'	=> '1',
						// 'constante'		=> '1',
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
						'controles'		=> '
<a rel="subs" href="custom/project_galleries_photos.php?id_grupo=[id]">{select count(*) from project_galleries_photos where id_grupo=[id]} Productos</a>',							
				),
				// 'status'	=>array(
				// 		'campo'			=> 'status',
				// 		'label'			=> 'Estado',
				// 		'width'			=> '100px',
				// 		'listable'		=> '1',
				// 		'tipo'			=> 'com',
				// 		'opciones'		=>array(
				// 				'1'			=> 'Entrega Inmediata',
				// 				'2'			=> 'En pre-venta',
				// 				'3'			=> 'En Construcción',
				// 				'4'			=> 'En Venta'
				// 		),
				// 		'default'		=> '0',
				// 		'derecha'		=> '1'
				// ),				
				// 'file_banner'			=>array(
				// 		'help'			=> 'Tamaño 1000x750px',
				// 		'campo'			=> 'file_banner',
				// 		'label'			=> 'Banner',
				// 		'tipo'			=> 'img',
				// 		'listable'		=> '0',
				// 		'validacion'	=> '0',
				// 		'prefijo'		=> 'proban',
				// 		'carpeta'		=> 'pro_imas',
				// 		'tamanos'		=> '150x120',
				// 		'tamano_listado'	=> '1',
				// 		'width'			=> '150px',
				// 		'style'			=> 'width:150px,height:auto,'
				// ),
				'file'			=>array(
						'help'			=> 'Tamaño 292x440px',
						'campo'			=> 'file',
						'label'			=> 'Foto',
						'tipo'			=> 'img',
						'listable'		=> '0',
						'validacion'	=> '0',
						'prefijo'		=> 'pro',
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
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'productos',
		'por_linea'		=> '1',
		'disabled'		=> '0',
		'page'			=> '0'
);




$objeto_tabla['PROJECT_GALLERIES_PHOTOS']=array(
		'titulo'		=> 'Sub Categoría',
		'nombre_singular'=> 'producto',
		'nombre_plural'	=> 'productos',
		'tabla'			=> 'project_galleries_photos',
		'archivo'		=> 'project_galleries_photos',
		'archivo_hijo'	=> 'project_galleries_photos_photos',
		'prefijo'		=> 'progalfot',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'edicion_completa'=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '0',
		'menu_label'	=> 'Sub Categoría',
		'me'			=> 'PROJECT_GALLERIES_PHOTOS',
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
						'label'			=> 'Proyecto',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '1',
						'default'		=> '[id_grupo]',
						'foreig'		=> '1',
						'style'			=> 'width:200px,',
						'opciones'		=> 'id,name|projects',
						'width'			=> '140px',
						'derecha'		=> '1',
						'tags'			=> '1',
						// 'queries'		=> '1',
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
				'name'		=>array(
						'campo'			=> 'name',
						'label'			=> 'Nombre',
						'width'			=> '200px',
						'unique'		=> '0',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						// 'constante'		=> '1',
						'controles'		=> '<a  rel="subs" href="custom/project_galleries_photos_photos.php?id_grupo=[id]">{select count(*) from project_galleries_photos_photos where id_grupo=[id]}  fotos</a>

							'
				),
				'text'			=>array(
						'campo'			=> 'text',
						'label'			=> 'Breve Descripción',
						'tipo'			=> 'txt',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '400px',
						'style'			=> 'height:300px;',
						'disabled'		=> '0'
				),					
				'html'			=>array(
						'campo'			=> 'html',
						'label'			=> 'Descripción',
						'tipo'			=> 'html',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '400px',
						'style'			=> 'height:200px;',
						'disabled'		=> '0'
				),	
				'adjunto'		=>array(
						'campo'			=> 'adjunto',
						'label'			=> 'Archivo Adjunto',
						'tipo'			=> 'sto',
						'width'			=> '150px',
						'style'			=> 'width:200px;',
						'listable'		=> '1',
						'validacion'	=> '0',
						'prefijo'		=> 'atc',
						'carpeta'		=> 'atc_imas',
						'disabled'		=> '0'
				),	
				'foto'			=>array(
						'help'			=> 'Tamaño 1400x614px',
						'campo'			=> 'foto',
						'label'			=> 'Foto',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '0',
						'prefijo'		=> 'ser_imas',
						'carpeta'		=> 'ser_imas_imas',
						'tamanos'		=> '150x120,219x102',
						'tamano_listado'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px,height:auto,'
				),	
												
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'servicios',
		'por_linea'		=> '1',
		'seccion'		=> '',
		'disabled'		=> '1',
		'page'			=> '0',
);
/******************************************************************************************************************************************************/

$objeto_tabla['PROJECT_GALLERIES_PHOTOS_PHOTOS']=array(
		'titulo'		=> 'Fotos : {select name from project_galleries_photos where id=[id]}',
		'nombre_singular'=> 'foto',
		'nombre_plural'	=> 'fotos',
		'tabla'			=> 'project_galleries_photos_photos',
		'archivo'		=> 'project_galleries_photos_photos',
		'prefijo'		=> 'progalfotfot',
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
		'me'			=> 'PROJECT_GALLERIES_PHOTOS_PHOTOS',
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
						'default'		=> '[id_grupo]',
						'foreig'		=> '1',
						'foreigkey'		=> 'PROJECT_GALLERIES_PHOTOS'
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
				// 'url'			=>array(
				// 		'campo'			=> 'url',
				// 		'label'			=> 'Url',
				// 		'tipo'			=> 'inp',
				// 		'width'			=> '200px',
				// 		'style'			=> 'width:200px;',
				// 		'listable'		=> '1',
				// 		'disabled'		=> '0'
				// ),
				'page'			=>array(
						'campo'			=> 'page',
						'tipo'			=> 'page'
				)
		),
		'grupo'			=> 'servicios',
		'por_linea'		=> '5',
		'disabled'		=> '0',
		'page'			=> '0',
		'crear_quick'	=> '1',		
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