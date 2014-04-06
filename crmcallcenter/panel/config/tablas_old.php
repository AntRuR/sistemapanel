<?php //á

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
		'por_pagina'	=> '100',
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
						'width'			=> '130px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'like'			=> '0',
						'controles'		=> '<a rel="subs" href="custom/productos_fotos.php?id=[id]">{select count(*) from productos_fotos where id_item=[id]} fotos</a>
<a href="custom/productos_stock.php?id_item=[id]">stock: {select count(*) from productos_stock where id_item=[id]}</a>',
						'size'			=> '140',
						'style'			=> 'width:550px;',
						'tags'			=> '1'
				),
				'id_grupo'		=>array(
						'campo'			=> 'id_grupo',
						'label'			=> 'Marca',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '1',
						'default'		=> '[id_grupo]',
						'foreig'		=> '1',
						'style'			=> 'width:200px,',
						'opciones'		=> 'id,nombre|productos_grupos',
						'width'			=> '70px',
						'derecha'		=> '1',
						'tags'			=> '1'
				),
				'id_tipo'		=>array(
						'campo'			=> 'id_tipo',
						'label'			=> 'Grupo',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '0',
						'default'		=> '[id_tipo]',
						'foreig'		=> '1',
						'style'			=> 'width:200px,',
						'opciones'		=> 'id,nombre|productos_tipos',
						'width'			=> '95px',
						'derecha'		=> '1',
						'tags'			=> '1'
				),
				'ficha'			=>array(
						'campo'			=> 'ficha',
						'label'			=> 'Ficha',
						'tipo'			=> 'html',
						'validacion'	=> '1',
						'style'			=> 'width:600px;height:400px;',
						'width'			=> '360px',
						'derecha'		=> '1',
						'css'			=> 'table { width:100%; margin-bottom:10px; background:#F3F3F3; }',
						'botones'		=> 'nombre,texto|productos_bloques',
						'default'		=> '',
						'listable'		=> '0',
						'listhtml'		=> '1'
				),
				'stock'			=>array(
						'campo'			=> 'stock',
						'label'			=> 'Stock',
						'width'			=> '30px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'style'			=> 'width:30px;',
						'disabled'		=> '1'
				),
				'source'		=>array(
						'campo'			=> 'source',
						'label'			=> 'Source',
						'width'			=> '200px',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'style'			=> 'width:550px;',
						'disabled'		=> '1'
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
		'edicion_completa'=> '1',
		'creacion_hijo'	=> 'productos_fotos',
		'calificacion'	=> '1',
		'importar_csv'	=> '0',
		'group'			=> 'id_grupo',
		'order_by'		=> 'id_grupo desc, id desc',
		'width_listado'	=> '',
		'edicion_rapida'	=> '1',
		'crear_pruebas'	=> '0'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PRODUCTOS_FOTOS']=array(
		'grupo'			=> 'productos',
		'titulo'		=> '<a href="custom/productos_items.php">Vehículos</a>  -  
                      Fotos de {select nombre from productos_items where id=[id]}',
		'nombre_singular'=> 'foto',
		'nombre_plural'	=> 'fotos',
		'tabla'			=> 'productos_fotos',
		'archivo'		=> 'productos_fotos',
		'prefijo'		=> 'profot',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'crear_label'	=> '100px',
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
						'default'		=> '[id]',
						'foreig'		=> '1'
				),
				'file'			=>array(
						'campo'			=> 'file',
						'label'			=> 'Foto',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '1',
						'prefijo'		=> 'profot',
						'carpeta'		=> 'profot_fot',
						'tamanos'		=> '100x100,200x200,350x220,850x450',
						'tamano_listado'	=> '1',
						'disabled'		=> '0'
				),
				'foto_descripcion'=>array(
						'campo'			=> 'foto_descripcion',
						'label'			=> 'Descripción',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '200px',
						'disabled'		=> '1'
				)
		),
		'por_linea'		=> '6',
		'crear_quick'	=> '1',
		'edicion_completa'=> '0'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PRODUCTOS_TIPOS']=array(
		'titulo'		=> 'Grupos ',
		'nombre_singular'=> 'tipo',
		'nombre_plural'	=> 'tipos',
		'tabla'			=> 'productos_tipos',
		'archivo'		=> 'productos_tipos',
		'prefijo'		=> 'protip',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Grupos',
		'me'			=> 'PRODUCTOS_TIPOS',
		'orden'			=> '1',
		'width_listado'	=> '',
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
						'controles'		=> '<a rel="subs" href="custom/productos_items.php?id_tipo=[id]" >{select count(*) from productos_items where id_tipo=[id]} modelos</a>',
						'multiopciones'	=> 'Productos|productos_items_tipos|id,nombre|productos_items|where visibilidad=1'
				)
		),
		'grupo'			=> 'productos',
		'edicion_completa'=> '1',
		'expandir_vertical'=> '0',
		'edicion_rapida'	=> '1',
		'calificacion'	=> '1',
		'set_fila_fijo'	=> '',
		'crear_quick'	=> '0',
		'order_by'		=> 'calificacion desc'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PRODUCTOS_STOCK']=array(
		'titulo'		=> 'Stock',
		'nombre_singular'=> 'producto',
		'nombre_plural'	=> 'productos',
		'tabla'			=> 'productos_stock',
		'archivo'		=> 'productos_stock',
		'prefijo'		=> 'prosto',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Stock',
		'me'			=> 'PRODUCTOS_STOCK',
		'orden'			=> '0',
		'app'			=> '
		<a href="app.php?ap=importar_stock">Importador de Stock</a> 
		<a href="app.php?ap=exportar_clientes">Exportador de correos de clientes</a>
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
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'codigo'		=>array(
						'campo'			=> 'codigo',
						'label'			=> 'Número',
						'width'			=> '30px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'like'			=> '1',
						'style'			=> 'width:30px;',
						'derecha'		=> '1'
				),
				'id_grupo'		=>array(
						'campo'			=> 'id_grupo',
						'label'			=> 'Marca',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '1',
						'default'		=> '[id_grupo]',
						'foreig'		=> '1',
						'style'			=> 'width:200px,',
						'opciones'		=> 'id,nombre|productos_grupos',
						'load'			=> 'id_item||id,nombre|productos_items|where id_grupo=',
						'width'			=> '80px',
						'derecha'		=> '1',
						'tags'			=> '1',
						'queries'		=> '1'
				),
				'id_item'		=>array(
						'campo'			=> 'id_item',
						'label'			=> 'Modelo',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '1',
						'default'		=> '[id_item]',
						'style'			=> 'width:200px,',
						'opciones'		=> 'id,nombre|productos_items',
						'width'			=> '140px',
						'derecha'		=> '2',
						'tags'			=> '1',
						'queries'		=> '1'
				),
				'chasis'		=>array(
						'campo'			=> 'chasis',
						'label'			=> 'Chasis',
						'width'			=> '120px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'derecha'		=> '1',
						'like'			=> '1'
				),
				'motor'			=>array(
						'campo'			=> 'motor',
						'label'			=> 'Motor',
						'width'			=> '75px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'derecha'		=> '2',
						'like'			=> '1'
				),
				'id_color'		=>array(
						'campo'			=> 'id_color',
						'label'			=> 'Color',
						'width'			=> '80px',
						'listable'		=> '1',
						'tipo'			=> 'hid',
						'opciones'		=> 'id,nombre|productos_colores',
						'derecha'		=> '1',
						'tags'			=> '1',
						'queries'		=> '1'
				),
				'transmision'	=>array(
						'campo'			=> 'transmision',
						'label'			=> 'Transmisión',
						'width'			=> '40px',
						'listable'		=> '1',
						'tipo'			=> 'com',
						'opciones'		=>array(
								'0'			=> 'MT',
								'1'			=> 'AT'
						),
						'default'		=> '0',
						'derecha'		=> '2'
				),
				'id_carroceria'	=>array(
						'campo'			=> 'id_carroceria',
						'label'			=> 'Carrocería',
						'width'			=> '75px',
						'listable'		=> '1',
						'tipo'			=> 'hid',
						'opciones'		=> 'id,nombre|productos_carrocerias',
						'tags'			=> '1'
				),
				'ubicacion'		=>array(
						'campo'			=> 'ubicacion',
						'label'			=> 'Ubicación',
						'width'			=> '120px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'derecha'		=> '1',
						'tags'			=> '1',
						'queries'		=> '1'
				),
				'id_ptoventa'	=>array(
						'campo'			=> 'id_ptoventa',
						'label'			=> 'Punto de Venta',
						'width'			=> '120px',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'opciones'		=> 'id,nombre|productos_ptoventa',
						'tags'			=> '1',
						'queries'		=> '1'
				),
				'id_status'		=>array(
						'campo'			=> 'id_status',
						'label'			=> 'Status',
						'width'			=> '60px',
						'listable'		=> '1',
						'tipo'			=> 'hid',
						'opciones'		=> 'id,nombre|productos_status',
						'tags'			=> '1',
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
		'grupo'			=> 'productos',
		'edicion_completa'=> '1',
		'expandir_vertical'=> '0',
		'control'		=> '1',
		'edicion_rapida'	=> '1',
		'por_pagina'	=> '50',
		'set_fila_fijo'	=> '4',
		'seccion'		=> 'stock'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PRODUCTOS_GRUPOS']=array(
		'titulo'		=> 'Marcas',
		'nombre_singular'=> 'marca',
		'nombre_plural'	=> 'marcas',
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
		'menu_label'	=> 'Marcas',
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
						'width'			=> '140px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'style'			=> 'width:300px;',
						'controles'		=> '<a rel="subs" href="custom/productos_items.php?id_grupo=[id]" >{select count(*) from productos_items where id_grupo=[id]} modelos</a> 
<a  href="custom/productos_stock.php?id_grupo=[id]">{select count(*) from productos_stock where id_grupo=[id]} items</a>'
				)
		),
		'grupo'			=> 'productos',
		'edicion_completa'=> '0',
		'expandir_vertical'=> '0',
		'control'		=> '1',
		'set_fila_fijo'	=> '1',
		'seccion'		=> 'configuraciones'
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
		'width_listado'	=> '900px',
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
						'width'			=> '550px',
						'tipo'			=> 'html',
						'listable'		=> '1',
						'validacion'	=> '1',
						'style'			=> 'width:650px;height:150px;',
						'botones'		=> 'nombre,texto|productos_bloques|where id=25'
				)
		),
		'grupo'			=> 'productos',
		'edicion_completa'=> '0',
		'expandir_vertical'=> '0',
		'edicion_rapida'	=> '1',
		'calificacion'	=> '0',
		'set_fila_fijo'	=> '3',
		'crear_quick'	=> '1'
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
		'calificacion'	=> '0',
		'edicion_rapida'	=> '1',
		'width_listado'	=> '300px',
		'set_fila_fijo'	=> '3',
		'crear_quick'	=> '1',
		'disabled'		=> '0'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PRODUCTOS_PTOVENTA']=array(
		'titulo'		=> 'Puntos de Venta',
		'nombre_singular'=> 'punto de venta',
		'nombre_plural'	=> 'puntos de venta',
		'tabla'			=> 'productos_ptoventa',
		'archivo'		=> 'productos_ptoventa',
		'prefijo'		=> 'propto',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Puntos de Venta',
		'me'			=> 'PRODUCTOS_PTOVENTA',
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
		'crear_quick'	=> '1',
		'disabled'		=> '0'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PRODUCTOS_STATUS']=array(
		'titulo'		=> 'Status',
		'nombre_singular'=> 'status',
		'nombre_plural'	=> 'status',
		'tabla'			=> 'productos_status',
		'archivo'		=> 'productos_status',
		'prefijo'		=> 'prosta',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Status',
		'me'			=> 'PRODUCTOS_STATUS',
		'orden'			=> '1',
		'width_listado'	=> '300px',
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
		'edicion_rapida'	=> '1',
		'calificacion'	=> '0',
		'set_fila_fijo'	=> '3',
		'crear_quick'	=> '1',
		'disabled'		=> '0'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PRODUCTOS_CARROCERIAS']=array(
		'titulo'		=> 'Carrocerias',
		'nombre_singular'=> 'carroceria',
		'nombre_plural'	=> 'carrocerias',
		'tabla'			=> 'productos_carrocerias',
		'archivo'		=> 'productos_carrocerias',
		'prefijo'		=> 'procar',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Carrocerias',
		'me'			=> 'PRODUCTOS_CARROCERIAS',
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
		'edicion_rapida'	=> '1',
		'calificacion'	=> '0',
		'width_listado'	=> '300px',
		'set_fila_fijo'	=> '3',
		'crear_quick'	=> '1',
		'disabled'		=> '0'
);
/******************************************************************************************************************************************************/

$objeto_tabla['VENTAS_ITEMS']=array(
		'titulo'		=> 'Atenciones',
		'nombre_singular'=> 'atención',
		'nombre_plural'	=> 'atenciones',
		'tabla'			=> 'ventas_items',
		'archivo'		=> 'ventas_items',
		'prefijo'		=> 'venite',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Atenciones',
		'me'			=> 'VENTAS_ITEMS',
		'orden'			=> '0',
		'onload_include'	=> 'base2/update_alertas.php',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr',
						'listable'		=> '1',
						'formato'		=> '7',
						'select_multiple'=> '0',
						'queries'		=> '1'
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
				'id_cliente'	=>array(
						'campo'			=> 'id_cliente',
						'label'			=> 'Cliente',
						'width'			=> '100px',
						'listable'		=> '1',
						'foreig'		=> '1',
						'default'		=> '[id_cliente]',
						'tipo'			=> 'hid',
						'opciones'		=> 'id,nombre;apellidos|clientes|order by nombre asc',
						'derecha'		=> '',
						'style'			=> 'width:320px;',
						'controles'		=> '
							<a href="pop.php?app=enviar_cotizacion&id=[id]" style="color:red;" >Nuevo Mensaje</a>						
							<a target="_black" href="../index.php?modulo=items&tab=productos_imprimir&acc=file&id_venta=[id]">imprimir</a>							
							<a href="custom/ventas_alertas.php?id=[id]" rel="subs">{select count(*) from ventas_alertas where id_grupo=[id]} alertas</a>
							<a href="custom/ventas_mensajes.php?id=[id]" rel="subs">{select count(*) from ventas_mensajes where id_grupo=[id]} mensajes</a>
							',
						'tip_foreig'	=> '1',
						'like'			=> '0',
						'tags'			=> '1'
				),
				'id_grupo'		=>array(
						'campo'			=> 'id_grupo',
						'label'			=> 'Marca',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '1',
						'default'		=> '[id_grupo]',
						'foreig'		=> '1',
						'style'			=> 'width:100px,',
						'opciones'		=> 'id,nombre|productos_grupos',
						'load'			=> 'id_item||id,nombre|productos_items|where visibilidad=1 and id_grupo=',
						'width'			=> '80px',
						'derecha'		=> '1',
						'tags'			=> '1',
						'queries'		=> '1',
						'select_multiple'=> '1'
				),
				'id_item'		=>array(
						'campo'			=> 'id_item',
						'label'			=> 'Modelo',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '1',
						'default'		=> '[id_item]',
						'foreig'		=> '1',
						'style'			=> 'width:150px;',
						'opciones'		=> 'id,nombre|productos_items|where visibilidad=1',
						'width'			=> '140px',
						'derecha'		=> '2',
						'tip_foreig'	=> '0',
						'tags'			=> '1',
						'queries'		=> '1',
						'select_multiple'=> '1'
				),
				'id_usuario'	=>array(
						'campo'			=> 'id_usuario',
						'label'			=> 'Vendedor',
						'width'			=> '120px',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'opciones'		=> 'id,nombre;apellidos|usuarios',
						'derecha'		=> '1',
						'tip_foreig'	=> '0',
						'tags'			=> '1',
						'queries'		=> '1',
						'select_multiple'=> '1'
				),
				'id_status'		=>array(
						'campo'			=> 'id_status',
						'label'			=> 'Status',
						'width'			=> '100px',
						'listable'		=> '1',
						'tipo'			=> 'hid',
						'opciones'		=> 'id,nombre|ventas_status|order by calificacion asc',
						'derecha'		=> '2',
						'tags'			=> '1',
						'queries'		=> '1',
						'select_multiple'=> '1'
				),
				'id_canal'		=>array(
						'campo'			=> 'id_canal',
						'label'			=> 'contactado x',
						'width'			=> '120px',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'opciones'		=> 'id,nombre|contacto_canales',
						'tags'			=> '1',
						'queries'		=> '1',
						'noedit'		=> '0',
						'select_multiple'=> '1'
				),
				'id_cuenta_email'=>array(
						'campo'			=> 'id_cuenta_email',
						'label'			=> 'enviar desde',
						'width'			=> '75px',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'opciones'		=> 'id,nombre;email|envios_cuentas'
				),
				'fecha_venta'	=>array(
						'campo'			=> 'fecha_venta',
						'label'			=> 'Fecha de la venta',
						'legend'		=> 'Información Final',
						'tipo'			=> 'fch',
						'listable'		=> '0',
						'validacion'	=> '0',
						'rango'			=> 'now,+1 year',
						'derecha'		=> '1',
						'select_multiple'=> '0'
				),
				'n_chasis'		=>array(
						'campo'			=> 'n_chasis',
						'label'			=> 'N° de chasis',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'derecha'		=> '1'
				),
				'n_unidad'		=>array(
						'campo'			=> 'n_unidad',
						'label'			=> 'N° de unidad',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'derecha'		=> '2'
				),
				'forma_pago'	=>array(
						'campo'			=> 'forma_pago',
						'label'			=> 'Forma de Pago',
						'tipo'			=> 'com',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'Efectivo',
								'2'			=> 'Crédito',
								'3'			=> 'Leasing'
						),
						'derecha'		=> '1'
				),
				'banco'			=>array(
						'campo'			=> 'banco',
						'label'			=> 'Banco',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'style'			=> 'width:150px;',
						'derecha'		=> '1'
				),
				'sectorista'	=>array(
						'campo'			=> 'sectorista',
						'label'			=> 'Sectorista',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> 'width:150px;',
						'derecha'		=> '1',
						'style'			=> 'width:150px;'
				),
				'sectorista_fijo'=>array(
						'campo'			=> 'sectorista_fijo',
						'label'			=> 'Fijo',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'style'			=> 'width:100px;',
						'derecha'		=> '2'
				),
				'sectorista_movistar'=>array(
						'campo'			=> 'sectorista_movistar',
						'label'			=> 'Movistar',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'style'			=> 'width:100px;',
						'derecha'		=> '2'
				),
				'sectorista_claro'=>array(
						'campo'			=> 'sectorista_claro',
						'label'			=> 'Claro',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'style'			=> 'width:100px;',
						'derecha'		=> '2'
				),
				'sectorista_rpc'	=>array(
						'campo'			=> 'sectorista_rpc',
						'label'			=> 'RPC',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'style'			=> 'width:100px;',
						'derecha'		=> '1'
				),
				'sectorista_rpm'	=>array(
						'campo'			=> 'sectorista_rpm',
						'label'			=> 'RPM',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'derecha'		=> '2',
						'style'			=> 'width:100px;'
				),
				'sectorista_nextel'=>array(
						'campo'			=> 'sectorista_nextel',
						'label'			=> 'Nextel',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'style'			=> 'width:100px;',
						'derecha'		=> '2'
				),
				'sectorista_email'=>array(
						'campo'			=> 'sectorista_email',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'derecha'		=> '2',
						'style'			=> 'width:170px;'
				),
				'tags'			=>array(
						'campo'			=> 'tags',
						'label'			=> 'tags',
						'tipo'			=> 'txt',
						'indicador'		=> '1',
						'fulltext'		=> '1',
						'autotags'		=> '1'
				),
				'user'			=>array(
						'campo'			=> 'user',
						'tipo'			=> 'user'
				)
		),
		'grupo'			=> 'ventas',
		'edicion_completa'=> '1',
		'expandir_vertical'=> '0',
		'control'		=> '1',
		'edicion_rapida'	=> '1',
		'set_fila_fijo'	=> '',
		'alias_grupo'	=> '',
		'seccion'		=> '',
		'order_by'		=> 'id desc',
		'por_pagina'	=> '20',
		'exportar_excel'	=> '1',
		'user'			=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['CLIENTES']=array(
		'grupo'			=> 'ventas',
		'titulo'		=> 'Clientes',
		'nombre_singular'=> 'cliente',
		'nombre_plural'	=> 'cliente',
		'tabla'			=> 'clientes',
		'archivo'		=> 'clientes',
		'prefijo'		=> 'clie',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'crear_label'	=> '100px',
		'crear_txt'		=> '400px',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Clientes',
		'me'			=> 'CLIENTES',
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
						'width'			=> '150px',
						'style'			=> 'width:150px;',
						'derecha'		=> '1',
						'like'			=> '1',
						'controles'		=> '
							<a href="custom/ventas_items.php?id_cliente=[id]" rel="mensajes">{select count(*) from ventas_items where id_cliente=[id]} atenciones</a>'
				),
				'apellidos'		=>array(
						'campo'			=> 'apellidos',
						'label'			=> 'Apellidos',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '130px',
						'style'			=> 'width:150px;',
						'derecha'		=> '2',
						'like'			=> '1'
				),
				'genero'		=>array(
						'campo'			=> 'genero',
						'label'			=> 'Género',
						'tipo'			=> 'com',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'Masculino',
								'2'			=> 'Femenino'
						),
						'default'		=> '1',
						'style'			=> 'width:45px;',
						'derecha'		=> '2',
						'width'			=> '30px'
				),
				'id_status'		=>array(
						'campo'			=> 'id_status',
						'label'			=> 'Status',
						'width'			=> '60px',
						'listable'		=> '1',
						'tipo'			=> 'hid',
						'opciones'		=> 'id,nombre|clientes_status|order by calificacion asc',
						'style'			=> 'width:100px;',
						'derecha'		=> '1'
				),
				'ciudad'		=>array(
						'campo'			=> 'ciudad',
						'label'			=> 'Ciudad',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '130px',
						'style'			=> 'width:120px;',
						'derecha'		=> '1'
				),
				'direccion'		=>array(
						'campo'			=> 'direccion',
						'label'			=> 'Dirección',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '150px',
						'style'			=> 'width:300px;',
						'derecha'		=> '2'
				),
				'email'			=>array(
						'campo'			=> 'email',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '150px',
						'style'			=> 'width:150px;',
						'derecha'		=> '1',
						'default'		=> '',
						'like'			=> '1',
						'unique'		=> '1'
				),
				'dni'			=>array(
						'campo'			=> 'dni',
						'label'			=> 'DNI',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '150px',
						'derecha'		=> '2',
						'default'		=> '',
						'like'			=> '1',
						'unique'		=> '1',
						'size'			=> '8'
				),
				'telefono'		=>array(
						'campo'			=> 'telefono',
						'label'			=> 'Teléfono Casa',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '1'
				),
				'telefono_oficina'=>array(
						'campo'			=> 'telefono_oficina',
						'label'			=> 'Teléfono Oficina',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '2'
				),
				'celular_claro'	=>array(
						'campo'			=> 'celular_claro',
						'label'			=> 'Claro',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '1'
				),
				'celular_movistar'=>array(
						'campo'			=> 'celular_movistar',
						'label'			=> 'Movistar',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '2'
				),
				'nextel'		=>array(
						'campo'			=> 'nextel',
						'label'			=> 'Nextel',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '2'
				),
				'rpm'			=>array(
						'campo'			=> 'rpm',
						'label'			=> 'RPM',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '2'
				),
				'rpc'			=>array(
						'campo'			=> 'rpc',
						'label'			=> 'RPC',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '2'
				),
				'empresa'		=>array(
						'campo'			=> 'empresa',
						'label'			=> 'Empresa',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '200px',
						'style'			=> 'width:200px;',
						'derecha'		=> '1',
						'constante'		=> '0'
				),
				'pag_tipo_documento'=>array(
						'campo'			=> 'pag_tipo_documento',
						'label'			=> 'Tipo de Recibo',
						'legend'		=> 'Pago',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'Boleta',
								'2'			=> 'Factura'
						),
						'default'		=> '0'
				),
				'pag_factura_ruc'=>array(
						'campo'			=> 'pag_factura_ruc',
						'label'			=> 'RUC',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'style'			=> 'width:100px;',
						'width'			=> '100px'
				),
				'pag_factura_razonsocial'=>array(
						'campo'			=> 'pag_factura_razonsocial',
						'label'			=> 'Razón Social',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'style'			=> 'width:200px;',
						'width'			=> '200px'
				),
				'pag_factura_direccion'=>array(
						'campo'			=> 'pag_factura_direccion',
						'label'			=> 'Factura Dirección',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'style'			=> 'width:200px;',
						'width'			=> '200px'
				)
		),
		'edicion_rapida'	=> '1',
		'edicion_completa'=> '1',
		'exportar_excel'	=> '1',
		'importar_csv'	=> '1'
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
						'width'			=> '80px',
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
						'width'			=> '150px'
				),
				'empresa'		=>array(
						'campo'			=> 'empresa',
						'label'			=> 'Empresa',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '150px',
						'disabled'		=> '1'
				),
				'ciudad'		=>array(
						'campo'			=> 'ciudad',
						'label'			=> 'Ciudad',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '150px'
				),
				'pais'			=>array(
						'campo'			=> 'pais',
						'label'			=> 'País',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '150px',
						'disabled'		=> '1'
				),
				'telefono'		=>array(
						'campo'			=> 'telefono',
						'label'			=> 'Teléf/Celular',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '150px'
				),
				'email'			=>array(
						'campo'			=> 'email',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '150px'
				),
				'comentario'	=>array(
						'campo'			=> 'comentario',
						'label'			=> 'Comentario',
						'tipo'			=> 'txt',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '350px'
				)
		),
		'grupo'			=> 'ventas'
);
/******************************************************************************************************************************************************/

$objeto_tabla['ENVIOS_CUENTAS']=array(
		'grupo'			=> 'ventas',
		'titulo'		=> 'Cuentas para envios',
		'nombre_singular'=> 'cuenta',
		'nombre_plural'	=> 'cuentas',
		'tabla'			=> 'envios_cuentas',
		'archivo'		=> 'envios_cuentas',
		'prefijo'		=> 'envcue',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '0',
		'menu'			=> '0',
		'menu_label'	=> 'Cuentas para envios',
		'me'			=> 'ENVIOS_CUENTAS',
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
						'validacion'	=> '0',
						'width'			=> '100px'
				),
				'email'			=>array(
						'campo'			=> 'email',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '200px'
				),
				'password'		=>array(
						'campo'			=> 'password',
						'label'			=> 'Password',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0'
				),
				'server'		=>array(
						'campo'			=> 'server',
						'label'			=> 'Server',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0'
				),
				'port'			=>array(
						'campo'			=> 'port',
						'label'			=> 'PORT',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '100px'
				),
				'logo'			=>array(
						'campo'			=> 'logo',
						'label'			=> 'Logo',
						'tipo'			=> 'sto',
						'width'			=> '150px',
						'style'			=> 'width:200px;',
						'listable'		=> '1',
						'validacion'	=> '0',
						'prefijo'		=> 'log',
						'carpeta'		=> 'log_imas'
				),
				'dominio'		=>array(
						'campo'			=> 'dominio',
						'label'			=> 'Dominio',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '200px'
				)
		),
		'seccion'		=> 'configuraciones',
		'edicion_rapida'	=> '1',
		'edicion_completa'=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['VENTAS_STATUS']=array(
		'titulo'		=> 'Status Atenciones',
		'nombre_singular'=> 'status',
		'nombre_plural'	=> 'status',
		'tabla'			=> 'ventas_status',
		'archivo'		=> 'ventas_status',
		'prefijo'		=> 'vensta',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Status Atenciones',
		'me'			=> 'VENTAS_STATUS',
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
		'grupo'			=> 'ventas',
		'edicion_completa'=> '0',
		'expandir_vertical'=> '0',
		'edicion_rapida'	=> '1',
		'calificacion'	=> '1',
		'width_listado'	=> '300px',
		'set_fila_fijo'	=> '3',
		'crear_quick'	=> '1',
		'order_by'		=> 'calificacion asc'
);
/******************************************************************************************************************************************************/

$objeto_tabla['CLIENTES_STATUS']=array(
		'titulo'		=> 'Status Clientes',
		'nombre_singular'=> 'status',
		'nombre_plural'	=> 'status',
		'tabla'			=> 'clientes_status',
		'archivo'		=> 'clientes_status',
		'prefijo'		=> 'clista',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Status Clientes',
		'me'			=> 'CLIENTES_STATUS',
		'orden'			=> '1',
		'width_listado'	=> '300px',
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
		'grupo'			=> 'ventas',
		'edicion_completa'=> '0',
		'expandir_vertical'=> '0',
		'edicion_rapida'	=> '1',
		'calificacion'	=> '1',
		'set_fila_fijo'	=> '3',
		'crear_quick'	=> '1',
		'disabled'		=> '0'
);
/******************************************************************************************************************************************************/

$objeto_tabla['VENTAS_MENSAJES']=array(
		'grupo'			=> 'ventas',
		'alias_grupo'	=> '',
		'titulo'		=> 'Mensajes',
		'nombre_singular'=> 'mensaje',
		'nombre_plural'	=> 'mensajes',
		'tabla'			=> 'ventas_mensajes',
		'archivo'		=> 'ventas_mensajes',
		'prefijo'		=> 'venmen',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'crear'			=> '1',
		'crear_label'	=> '100px',
		'crear_txt'		=> '550px',
		'menu'			=> '0',
		'menu_label'	=> 'Mensajes',
		'por_pagina'	=> '20',
		'me'			=> 'VENTAS_MENSAJES',
		'orden'			=> '1',
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
				'id_grupo'		=>array(
						'campo'			=> 'id_grupo',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'validacion'	=> '0',
						'default'		=> '[id]',
						'foreig'		=> '1'
				),
				'tipo'			=>array(
						'campo'			=> 'tipo',
						'label'			=> '',
						'tipo'			=> 'com',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'enviado',
								'2'			=> 'recibido',
								'3'			=> 'comentario',
								'4'			=> 'soporte'
						),
						'default'		=> '3',
						'style'			=> 'width:100px;',
						'derecha'		=> '1',
						'width'			=> '30px'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr',
						'listable'		=> '1',
						'formato'		=> '7',
						'width'			=> '120px'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> '',
						'width'			=> '200px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				),
				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Mensaje',
						'tipo'			=> 'html',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '400px',
						'style'			=> 'height:400px;width:550px;',
						'listhtml'		=> '1'
				),
				'adjunto'		=>array(
						'campo'			=> 'adjunto',
						'label'			=> 'Adjunto',
						'tipo'			=> 'sto',
						'width'			=> '150px',
						'style'			=> 'width:200px;',
						'listable'		=> '1',
						'validacion'	=> '0',
						'prefijo'		=> 'atc',
						'carpeta'		=> 'atc_imas'
				),
				'id_speech'		=>array(
						'campo'			=> 'id_speech',
						'label'			=> '',
						'tipo'			=> 'inp',
						'derecha'		=> '1',
						'indicador'		=> '1',
						'listable'		=> '1',
						'width'			=> '20px'
				)
		),
		'edicion_rapida'	=> '1',
		'calificacion'	=> '0',
		'edicion_completa'=> '1',
		'disabled'		=> '0'
);
/******************************************************************************************************************************************************/

$objeto_tabla['VENTAS_ALERTAS']=array(
		'grupo'			=> 'ventas',
		'alias_grupo'	=> '',
		'titulo'		=> 'Alertas',
		'nombre_singular'=> 'alerta',
		'nombre_plural'	=> 'alertas',
		'tabla'			=> 'ventas_alertas',
		'archivo'		=> 'ventas_alertas',
		'prefijo'		=> 'venale',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'crear'			=> '1',
		'crear_label'	=> '50px',
		'crear_txt'		=> '550px',
		'menu'			=> '0',
		'menu_label'	=> 'Alertas',
		'por_pagina'	=> '20',
		'me'			=> 'VENTAS_ALERTAS',
		'orden'			=> '1',
		'onedit'		=> 'base2/update_alertas.php',
		'oncreate'		=> 'base2/update_alertas.php',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr',
						'formato'		=> '7',
						'width'			=> '120px'
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
				'id_grupo'		=>array(
						'campo'			=> 'id_grupo',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'validacion'	=> '0',
						'default'		=> '[id]',
						'foreig'		=> '1',
						'foreig_parent'	=> 'ventas_items|where id=[id]'
				),
				'alerta_fecha'	=>array(
						'campo'			=> 'alerta_fecha',
						'label'			=> '',
						'tipo'			=> 'fch',
						'listable'		=> '1',
						'formato'		=> '7',
						'time'			=> '1',
						'width'			=> '140px',
						'derecha'		=> '1',
						'default'		=> 'tomorrow()',
						'rango'			=> 'now,+1 years'
				),
				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Mensaje',
						'tipo'			=> 'txt',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '400px',
						'style'			=> 'width:350px;height:70px;',
						'listhtml'		=> '1'
				),
				'estado'		=>array(
						'campo'			=> 'estado',
						'label'			=> 'Estado',
						'tipo'			=> 'com',
						'listable'		=> '1',
						'indicador'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'pendiente|#136CB2',
								'2'			=> 'para hoy|green',
								'3'			=> 'atrazado|red',
								'4'			=> 'cumplido|black'
						),
						'default'		=> '1',
						'style'			=> 'width:150px;',
						'width'			=> '100px'
				),
				'cumplido'		=>array(
						'campo'			=> 'cumplido',
						'label'			=> 'Cumplido',
						'radio'			=> '1',
						'tipo'			=> 'com',
						'opciones'		=>array(
								'1'			=> 'si',
								'0'			=> 'no'
						),
						'default'		=> '0',
						'style'			=> 'width:150px;',
						'width'			=> '100px'
				)
		),
		'edicion_rapida'	=> '1',
		'calificacion'	=> '0',
		'edicion_completa'=> '1',
		'disabled'		=> '0',
		'crear_quick'	=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['VENTAS_CUENTAS']=array(
		'grupo'			=> 'ventas',
		'titulo'		=> 'Cuentas para envio de pedidos',
		'nombre_singular'=> 'cuenta',
		'nombre_plural'	=> 'cuentas',
		'tabla'			=> 'ventas_cuentas',
		'archivo'		=> 'ventas_cuentas',
		'prefijo'		=> 'vencue',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Cuentas',
		'me'			=> 'VENTAS_CUENTAS',
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
						'validacion'	=> '0'
				),
				'email'			=>array(
						'campo'			=> 'email',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0'
				),
				'password'		=>array(
						'campo'			=> 'password',
						'label'			=> 'Password',
						'tipo'			=> 'pas',
						'listable'		=> '1',
						'validacion'	=> '1'
				),
				'relays'		=>array(
						'campo'			=> 'relays',
						'label'			=> 'Relays',
						'tipo'			=> 'inp',
						'variable'		=> 'float',
						'size'			=> '10',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '30px'
				),
				'enabled'		=>array(
						'campo'			=> 'enabled',
						'label'			=> 'Enabled',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'si',
								'0'			=> 'no'
						),
						'width'			=> '30px'
				),
				'time_0'		=>array(
						'campo'			=> 'time_0',
						'label'			=> 'Tiempo Cero',
						'tipo'			=> 'fch',
						'width'			=> '50px',
						'listable'		=> '1',
						'validacion'	=> '1',
						'constante'		=> '1',
						'formato'		=> '7'
				)
		),
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['USUARIOS']=array(
		'grupo'			=> 'ventas',
		'alias_grupo'	=> '',
		'titulo'		=> 'Vendedores',
		'nombre_singular'=> 'vendedor',
		'nombre_plural'	=> 'vendedores',
		'tabla'			=> 'usuarios',
		'archivo'		=> 'usuarios',
		'prefijo'		=> 'usuope',
		'eliminar'		=> '1',
		'archivo_sub'	=> 'usuarios_acceso',
		'editar'		=> '1',
		'buscar'		=> '1',
		'menu'			=> '1',
		'menu_label'	=> 'Vendedores',
		'me'			=> 'USUARIOS',
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
						'width'			=> '100px',
						'derecha'		=> '1'
				),
				'apellidos'		=>array(
						'campo'			=> 'apellidos',
						'label'			=> 'Apellidos',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '150px',
						'derecha'		=> '2'
				),
				'genero'		=>array(
						'campo'			=> 'genero',
						'label'			=> 'Género',
						'tipo'			=> 'com',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'Masculino',
								'2'			=> 'Femenino'
						),
						'default'		=> '1',
						'style'			=> 'width:45px;',
						'derecha'		=> '2',
						'width'			=> '30px'
				),
				'email'			=>array(
						'campo'			=> 'email',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'listable'		=> '2',
						'width'			=> '150px',
						'derecha'		=> '2'
				),
				'direccion'		=>array(
						'campo'			=> 'direccion',
						'label'			=> 'Dirección casa',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '130px',
						'style'			=> 'width:120px;',
						'derecha'		=> '1'
				),
				'id_ptoventa'	=>array(
						'campo'			=> 'id_ptoventa',
						'label'			=> 'Pto de venta',
						'width'			=> '120px',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'opciones'		=> 'id,nombre|productos_ptoventa'
				),
				'telefono'		=>array(
						'campo'			=> 'telefono',
						'label'			=> 'Teléfono Casa',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '1'
				),
				'telefono_oficina'=>array(
						'campo'			=> 'telefono_oficina',
						'label'			=> 'Teléfono Oficina / Sucursal',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '2'
				),
				'celular_claro'	=>array(
						'campo'			=> 'celular_claro',
						'label'			=> 'Claro',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '1'
				),
				'celular_movistar'=>array(
						'campo'			=> 'celular_movistar',
						'label'			=> 'Movistar',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '2'
				),
				'nextel'		=>array(
						'campo'			=> 'nextel',
						'label'			=> 'Nextel',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '2'
				),
				'rpm'			=>array(
						'campo'			=> 'rpm',
						'label'			=> 'RPM',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '2'
				),
				'rpc'			=>array(
						'campo'			=> 'rpc',
						'label'			=> 'RPC',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '2'
				),
				'usuarios_acceso_nombre'=>array(
						'legend'		=> 'Datos de Acceso',
						'campo'			=> 'usuarios_acceso_nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'unique'		=> '1',
						'validacion'	=> '1',
						'sync'			=> 'usuarios_acceso,nombre,[usuarios_acceso_nombre],id,[id_sesion]'
				),
				'usuarios_acceso_password'=>array(
						'campo'			=> 'usuarios_acceso_password',
						'label'			=> 'Password',
						'tipo'			=> 'pas',
						'validacion'	=> '1',
						'sync'			=> 'usuarios_acceso,password,[usuarios_acceso_password],id,[id_sesion]'
				),
				'usuarios_acceso_id_permisos'=>array(
						'campo'			=> 'usuarios_acceso_id_permisos',
						'tipo'			=> 'inp',
						'sync'			=> 'usuarios_acceso,id_permisos,[usuarios_acceso_id_permisos],id,[id_sesion]',
						'default'		=> '3',
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
		'importar_csv'	=> '0',
		'disabled'		=> '0',
		'edicion_rapida'	=> '1',
		'crear_label'	=> ''
);
/******************************************************************************************************************************************************/

$objeto_tabla['SPEECHES']=array(
		'grupo'			=> 'ventas',
		'alias_grupo'	=> '',
		'titulo'		=> 'Speaches',
		'nombre_singular'=> 'speech',
		'nombre_plural'	=> 'speeches',
		'tabla'			=> 'speeches',
		'archivo'		=> 'speeches',
		'prefijo'		=> 'spe',
		'eliminar'		=> '0',
		'crear'			=> '1',
		'editar'		=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'crear_label'	=> '100px',
		'crear_txt'		=> '600px',
		'menu_label'	=> 'Speeches',
		'me'			=> 'SPEECHES',
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
						'width'			=> '300px',
						'validacion'	=> '1'
				),
				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Texto',
						'tipo'			=> 'html',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '500px',
						'style'			=> 'height:270px;'
				)
		)
);
/******************************************************************************************************************************************************/

$objeto_tabla['CONTACTO_CANALES']=array(
		'titulo'		=> 'Canal de Contacto',
		'nombre_singular'=> 'canal',
		'nombre_plural'	=> 'canales',
		'tabla'			=> 'contacto_canales',
		'archivo'		=> 'contacto_canales',
		'prefijo'		=> 'cancon',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Canal de Contacto',
		'me'			=> 'CONTACTO_CANALES',
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
		'grupo'			=> 'ventas',
		'edicion_completa'=> '0',
		'expandir_vertical'=> '0',
		'calificacion'	=> '0',
		'edicion_rapida'	=> '1',
		'width_listado'	=> '300px',
		'set_fila_fijo'	=> '3',
		'crear_quick'	=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['CAMPAINS']=array(
		'grupo'			=> 'marketing',
		'alias_grupo'	=> 'MKT',
		'titulo'		=> 'Campañas',
		'nombre_singular'=> 'campaña',
		'nombre_plural'	=> 'campañas',
		'tabla'			=> 'campains',
		'archivo'		=> 'campains',
		'archivo_hijo'	=> 'solicitudes',
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
		'menu_label'	=> 'Campañas',
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
							<a href="custom/solicitudes.php?id=[id]">{select count(*) from solicitudes where id_grupo=[id]} Solicitudes</a>
							<a href="custom/campains_fotos.php?id=[id]">{select count(*) from campains_fotos where id_grupo=[id]} Bloques</a>
							<a href="base2/show.php?id=[id]" target="_blank" style="color:green;" >vista previa</a>
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
						'default'		=> 'Calandria Travel',
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
						'default'		=> 'ventas@calandriatravel.com',
						'style'			=> 'width:200px;'
				),
				'enviar_texto'	=>array(
						'campo'			=> 'enviar_texto',
						'label'			=> 'Enviar Texto',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'si',
								'0'			=> 'no'
						),
						'default'		=> '0'
				),
				'enviar_firma'	=>array(
						'campo'			=> 'enviar_firma',
						'label'			=> 'Enviar Firma',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'si',
								'0'			=> 'no'
						),
						'default'		=> '0'
				),
				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Texto',
						'tipo'			=> 'html',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '220px',
						'style'			=> 'height:250px;'
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
				),
				'publicado'		=>array(
						'campo'			=> 'publicado',
						'label'			=> 'Publicado',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'0'			=> 'no',
								'1'			=> 'si'
						),
						'default'		=> '1'
				),
				'n_solicitados'	=>array(
						'campo'			=> 'n_solicitados',
						'label'			=> 'Nro solicitados',
						'tipo'			=> 'inp',
						'variable'		=> 'float',
						'size'			=> '10',
						'listable'		=> '1',
						'validacion'	=> '0',
						'derecha'		=> '1',
						'default'		=> '0',
						'width'			=> '150px'
				),
				'n_enviados'	=>array(
						'campo'			=> 'n_enviados',
						'label'			=> 'Nro Enviados',
						'tipo'			=> 'inp',
						'variable'		=> 'float',
						'size'			=> '10',
						'listable'		=> '1',
						'default'		=> '0',
						'derecha'		=> '1',
						'validacion'	=> '0',
						'width'			=> '150px'
				),
				'n_leidos'		=>array(
						'campo'			=> 'n_leidos',
						'label'			=> 'Nro Leidos',
						'tipo'			=> 'inp',
						'variable'		=> 'float',
						'size'			=> '10',
						'listable'		=> '1',
						'validacion'	=> '0',
						'derecha'		=> '1',
						'default'		=> '0',
						'width'			=> '150px'
				),
				'n_linkeados'	=>array(
						'campo'			=> 'n_linkeados',
						'label'			=> 'Nro Linkeados',
						'tipo'			=> 'inp',
						'variable'		=> 'float',
						'size'			=> '10',
						'listable'		=> '1',
						'validacion'	=> '0',
						'derecha'		=> '1',
						'default'		=> '0',
						'width'			=> '150px'
				)
		),
		'creacion_hijo'	=> '',
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['CAMPAINS_FOTOS']=array(
		'grupo'			=> 'marketing',
		'titulo'		=> '<a href="custom/campains.php">Campañas</a>  -  
                      Fotos de {select nombre from campains where id=[id]}',
		'nombre_singular'=> 'bloque',
		'nombre_plural'	=> 'bloques',
		'tabla'			=> 'campains_fotos',
		'archivo'		=> 'campains_fotos',
		'prefijo'		=> 'camfot',
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
		'menu_label'	=> '',
		'me'			=> 'CAMPAINS_FOTOS',
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
				'id_grupo'		=>array(
						'campo'			=> 'id_grupo',
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
						'validacion'	=> '0',
						'prefijo'		=> 'camfot',
						'carpeta'		=> 'camfot_imas',
						'tamanos'		=> '70x70,400x3000,800x6000',
						'tamano_listado'	=> '1'
				),
				'link'			=>array(
						'campo'			=> 'link',
						'label'			=> 'Enlace web',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '207px',
						'size'			=> '200'
				),
				'bloque'		=>array(
						'campo'			=> 'bloque',
						'label'			=> 'Bloque',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'una columna',
								'2'			=> 'doble columna'
						),
						'default'		=> '2'
				)
		),
		'por_linea'		=> '4',
		'edicion_completa'=> '1',
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['SOLICITUDES']=array(
		'grupo'			=> 'marketing',
		'titulo'		=> 'Solicitudes',
		'nombre_singular'=> 'solicitud',
		'nombre_plural'	=> 'solicitudes',
		'tabla'			=> 'solicitudes',
		'archivo'		=> 'solicitudes',
		'archivo_hijo'	=> 'lista_envio',
		'prefijo'		=> 'soli',
		'eliminar'		=> '1',
		'editar'		=> '0',
		'crear'			=> '1',
		'crear_label'	=> '100px',
		'crear_txt'		=> '200px',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Solicitudes',
		'por_pagina'	=> '100',
		'me'			=> 'SOLICITUDES',
		'controles'		=> '
							<a href="base2/hilo_de_envio.php">ENVIAR UN BLOQUE DE SOLICITUDES</a> 
						',
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
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'id_grupo'		=>array(
						'campo'			=> 'id_grupo',
						'label'			=> 'Campaña',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'validacion'	=> '1',
						'default'		=> '[id]',
						'opciones'		=> 'nombre,id|campains',
						'foreig'		=> '1'
				),
				'id_emails_grupos'=>array(
						'campo'			=> 'id_emails_grupos',
						'label'			=> 'Base',
						'tipo'			=> 'hid',
						'combo'			=> '1',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '200px',
						'opciones'		=> 'id,nombre|emails_grupos',
						'controles'		=> '<a style="color:green;font-weight:bold;" href="base2/crear_lista_envio.php?id=[id]">ENVIAR</a>
							<a style="color:blue;font-weight:bold;" href="base2/cancelar_lista.php?id=[id]">CANCELAR</a>							
							<span style="color:#000;">{select count(*) from lista_envio where id_grupo=[id]} solicitados</span>
							<span style="color:green;">{select count(*) from lista_envio where id_grupo=[id] and enviado=1} enviádos</span>
							<span style="color:blue;">{select count(*) from lista_envio where id_grupo=[id] and leido=1} leídos	</span>						
							'
				)
		),
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['LISTA_ENVIO']=array(
		'grupo'			=> 'marketing',
		'titulo'		=> 'Lista de envio',
		'nombre_singular'=> 'lista_envio',
		'nombre_plural'	=> 'lista_envio',
		'tabla'			=> 'lista_envio',
		'archivo'		=> 'lista_envio',
		'prefijo'		=> 'list',
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
		'menu_label'	=> 'Lista de envio',
		'por_pagina'	=> '100',
		'me'			=> 'LISTA_ENVIO',
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
				'id_grupo'		=>array(
						'campo'			=> 'id_grupo',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'validacion'	=> '1',
						'default'		=> '[id]',
						'foreig'		=> '1'
				),
				'id_email'		=>array(
						'campo'			=> 'id_email',
						'label'			=> 'email',
						'tipo'			=> 'hid',
						'combo'			=> '1',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=> 'id,email|emails_items'
				),
				'enviado'		=>array(
						'campo'			=> 'enviado',
						'label'			=> 'enviado',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'si',
								'0'			=> 'no'
						)
				),
				'leido'			=>array(
						'campo'			=> 'leido',
						'label'			=> 'leido',
						'tipo'			=> 'inp',
						'variable'		=> 'float',
						'size'			=> '10',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '150px'
				),
				'fallido'		=>array(
						'campo'			=> 'fallido',
						'label'			=> 'fallido',
						'tipo'			=> 'inp',
						'variable'		=> 'float',
						'size'			=> '10',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '150px'
				),
				'linkeado'		=>array(
						'campo'			=> 'linkeado',
						'label'			=> 'linkeado',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'si',
								'0'			=> 'no'
						)
				)
		),
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['EMAILS_GRUPOS']=array(
		'grupo'			=> 'marketing',
		'titulo'		=> 'Bases',
		'nombre_singular'=> 'Base',
		'nombre_plural'	=> 'Bases',
		'tabla'			=> 'emails_grupos',
		'archivo'		=> 'emails_grupos',
		'archivo_hijo'	=> 'emails_items',
		'prefijo'		=> 'emagru',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Bases',
		'por_pagina'	=> '20',
		'me'			=> 'EMAILS_GRUPOS',
		'controles'		=> '<a href="base2/exclusiones.php">Exclusiones</a>',
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
						'width'			=> '350px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'like'			=> '1',
						'validacion'	=> '1',
						'controles'		=> '							
							<a href="custom/emails_items.php?id=[id]">{select count(*) from emails_items where id_grupo=[id]} emails</a>
							<a href="base2/importar_emails.php?id=[id]">IMPORTAR</a>
							'
				)
		),
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['EMAILS_ITEMS']=array(
		'grupo'			=> 'marketing',
		'titulo'		=> '<a href="custom/emails_grupos.php">Grupos de Emails</a>  -
                      {select nombre from emails_grupos where id=[id]}',
		'nombre_singular'=> 'email',
		'nombre_plural'	=> 'emails',
		'tabla'			=> 'emails_items',
		'archivo'		=> 'emails_items',
		'prefijo'		=> 'emaite',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'edicion_completa'=> '1',
		'crear'			=> '1',
		'crear_label'	=> '200px',
		'crear_txt'		=> '400px',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Emails',
		'por_pagina'	=> '100',
		'me'			=> 'EMAILS_ITEMS',
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
				'id_grupo'		=>array(
						'campo'			=> 'id_grupo',
						'label'			=> 'Grupo',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'validacion'	=> '1',
						'default'		=> '[id]',
						'foreig'		=> '1',
						'opciones'		=> 'id,nombre|emails_grupos'
				),
				'email'			=>array(
						'campo'			=> 'email',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '219px',
						'like'			=> '1'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '219px'
				),
				'enabled'		=>array(
						'campo'			=> 'enabled',
						'label'			=> 'Enabled',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'si',
								'0'			=> 'no'
						),
						'default'		=> '1'
				),
				'tipo_disabled'	=>array(
						'campo'			=> 'tipo_disabled',
						'label'			=> 'Tipo de Eliminacion',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'por el sistema',
								'2'			=> 'por el administrador',
								'3'			=> 'por el usuario'
						)
				),
				'comprobado'	=>array(
						'campo'			=> 'comprobado',
						'label'			=> 'Comprobado',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'si',
								'0'			=> 'no'
						),
						'default'		=> '0'
				)
		),
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['CUENTAS']=array(
		'grupo'			=> 'marketing',
		'titulo'		=> 'Cuentas',
		'nombre_singular'=> 'cuenta',
		'nombre_plural'	=> 'cuentas',
		'tabla'			=> 'cuentas',
		'archivo'		=> 'cuentas',
		'prefijo'		=> 'cuen',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'crear_label'	=> '200px',
		'crear_txt'		=> '400px',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Cuentas',
		'por_pagina'	=> '100',
		'me'			=> 'CUENTAS',
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
				'usuario'		=>array(
						'campo'			=> 'usuario',
						'label'			=> 'Usuario',
						'unique'		=> '1',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '219px',
						'like'			=> '1'
				),
				'ordenprove'	=>array(
						'campo'			=> 'ordenprove',
						'label'			=> 'Orden',
						'tipo'			=> 'inp',
						'variable'		=> 'float',
						'size'			=> '10',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '30px'
				),
				'proveedor'		=>array(
						'campo'			=> 'proveedor',
						'label'			=> 'proveedor',
						'tipo'			=> 'com',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'godaddy - calandriapromociones.info',
								'2'			=> 'aplus',
								'3'			=> 'godaddy - ofertastravel.info',
								'5'			=> 'hostgator - calandriatravel.net',
								'6'			=> 'godaddy - travelofertas.info',
								'10'			=> 'travelofertas.info HG',
								'11'			=> 'ofertastravel.info HG',
								'12'			=> 'cajamarcatravel.info HG',
								'13'			=> 'eshoradeviajar.com HG',
								'14'			=> 'calandriatravel.net HG',
								'15'			=> 'introducingperu.com HG'
						)
				),
				'clave'			=>array(
						'campo'			=> 'clave',
						'label'			=> 'Clave',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '219px'
				),
				'relays'		=>array(
						'campo'			=> 'relays',
						'label'			=> 'Relays',
						'tipo'			=> 'inp',
						'variable'		=> 'float',
						'size'			=> '10',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '30px'
				),
				'enabled'		=>array(
						'campo'			=> 'enabled',
						'label'			=> 'Enabled',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'si',
								'0'			=> 'no'
						),
						'width'			=> '30px'
				),
				'time_0'		=>array(
						'campo'			=> 'time_0',
						'label'			=> 'Tiempo Cero',
						'tipo'			=> 'fch',
						'width'			=> '50px',
						'listable'		=> '1',
						'validacion'	=> '1',
						'constante'		=> '1',
						'formato'		=> '7'
				)
		),
		'disabled'		=> '1'
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
		'seccion'		=> '',
		'alias_grupo'	=> 'web',
		'web'			=> '1'
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
						'unique'		=> '1',
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
				'web'			=>array(
						'campo'			=> 'web',
						'tipo'			=> 'web'
				)
		),
		'grupo'			=> 'contenidos',
		'edicion_completa'=> '0',
		'seccion'		=> 'Archivos y Variables',
		'web'			=> '1'
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
						'validacion'	=> '1',
						'width'			=> '300px'
				),
				'web'			=>array(
						'campo'			=> 'web',
						'tipo'			=> 'web'
				)
		),
		'grupo'			=> 'contenidos',
		'web'			=> '1'
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
		'eliminar'		=> '1',
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
						'controles'		=> '<a rel="subs"  href="custom/banners_fotos_fotos.php?id=[id]">{select count(*) from banners_fotos_fotos where id_grupo=[id]}  fotos</a>
							'
				),
				'web'			=>array(
						'campo'			=> 'web',
						'tipo'			=> 'web'
				)
		),
		'grupo'			=> 'publicidad',
		'por_linea'		=> '1',
		'crear_quick'	=> '0',
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
						'tamanos'		=> '150x120,188x122,484x174',
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
		'crear_quick'	=> '1',
		'web'			=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['BOLETINES']=array(
		'grupo'			=> 'formularios',
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
				'email'			=>array(
						'campo'			=> 'email',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '300px'
				)
		),
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['USUARIOS_ACCESO']=array(
		'grupo'			=> 'sistema',
		'alias_grupo'	=> 'core',
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
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
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
						'sesion_password'=> '1',
						'width'			=> '200px'
				),
				'id_permisos'	=>array(
						'campo'			=> 'id_permisos',
						'label'			=> 'Permisos',
						'width'			=> '120px',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'opciones'		=> 'id,nombre|usuarios_permisos',
						'sesion_permisos'=> '1'
				)
		),
		'importar_csv'	=> '0',
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
		'buscar'		=> '0',
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
						'unique'		=> '1'
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
						'derecha'		=> '2'
				)
		),
		'importar_csv'	=> '0',
		'disabled'		=> '0',
		'edicion_completa'=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['CONFIGURACIONES_ROOT']=array(
		'grupo'			=> 'sistema',
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
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
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
		)
);
/******************************************************************************************************************************************************/

$objeto_tabla['CONFIGURACIONES']=array(
		'grupo'			=> 'sistema',
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
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
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
		)
);
/******************************************************************************************************************************************************/

$objeto_tabla['WEB_CONFIG']=array(
		'grupo'			=> 'sistema',
		'titulo'		=> 'Webs',
		'nombre_singular'=> 'web',
		'nombre_plural'	=> 'webs',
		'tabla'			=> 'web_config',
		'archivo'		=> 'web_config',
		'prefijo'		=> 'webcon',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '0',
		'menu'			=> '0',
		'menu_label'	=> 'Webs',
		'me'			=> 'WEB_CONFIG',
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
						'validacion'	=> '0',
						'width'			=> '300px'
				),
				'proyecto'		=>array(
						'campo'			=> 'proyecto',
						'label'			=> 'ID Proyecto',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				)
		),
		'importar_csv'	=> '0',
		'disabled'		=> '0'
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