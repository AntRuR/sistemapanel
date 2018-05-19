<?php //á

$objeto_tabla['PRODUCTOS_ITEMS']=array(
		'grupo'			=> 'productos',
		'alias_grupo'	=> 'producto',
		'titulo'		=> 'Proyectos',
		'nombre_singular'=> 'proyecto',
		'nombre_plural'	=> 'proyectos',
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
		'menu_label'	=> 'Proyectos',
		'por_pagina'	=> '100',
		'me'			=> 'PRODUCTOS_ITEMS',
		'orden'			=> '1',
		'crear_label'	=> '80px',
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
						'controles'		=> '

						<a rel="subs" href="custom/productos_depositos_tipos.php?id_item=[id]">{select count(*) from productos_depositos_tipos where id_item=[id]} depósitos</a>
						<a rel="subs" href="custom/productos_depositos_items_items.php?id_item=[id]">{select count(*) from productos_depositos_items_items where id_item=[id]} modelos de depósitos</a>

						<a rel="subs" href="custom/productos_estacionamientos_tipos.php?id_item=[id]">{select count(*) from productos_estacionamientos_tipos where id_item=[id]} estacionamientos</a>
						<a rel="subs" href="custom/productos_estacionamientos_items_items.php?id_item=[id]">{select count(*) from productos_estacionamientos_items_items where id_item=[id]} modelos de estacionamientos</a>

						<a rel="subs" href="custom/productos_tipos.php?id_item=[id]">{select count(*) from productos_tipos where id_item=[id]} inmuebles</a>
						<a rel="subs" href="custom/productos_items_items.php?id_item=[id]">{select count(*) from productos_items_items where id_item=[id]} modelos de departamentos</a>

						<a rel="subs" href="custom/productos_subgrupos.php?id_item=[id]">{select count(*) from productos_subgrupos where id_item=[id]} torres</a>

						',
						'size'			=> '140',
						'style'			=> 'width:450px;',
						'tags'			=> '1',
						'derecha'		=> '1'
				),
				'codigo'		=>array(
						'campo'			=> 'codigo',
						'label'			=> 'Código',
						'width'			=> '30px',
						'tipo'			=> 'inp',
						'like'			=> '1',
						'style'			=> 'width:50px;',
						'derecha'		=> '2'
				),
				'departamento'	=>array(
						'campo'			=> 'departamento',
						'label'			=> 'Departamento',
						'tipo'			=> 'hid',
						'combo'			=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=> 'id,nombre|geo_departamentos',
						'load'			=> 'provincia||id,nombre|geo_provincias|where id_departamento 	=',
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
						'opciones'		=> 'id,nombre|geo_provincias',
						'load'			=> 'distrito||id,nombre|geo_distritos|where id_provincia=',
						'style'			=> 'width:150px;',
						'derecha'		=> '2'
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
						'derecha'		=> '2',
						'queries'		=> '1'
				),
				'direccion'		=>array(
						'campo'			=> 'direccion',
						'label'			=> 'Dirección',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '120px',
						'style'			=> 'width:450px;',
						'derecha'		=> '1'
				),
				'referencia'	=>array(
						'campo'			=> 'referencia',
						'label'			=> 'Referencia',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '120px',
						'style'			=> 'width:450px;',
						'derecha'		=> '1'
				),
				'descripcion'	=>array(
						'campo'			=> 'descripcion',
						'label'			=> 'Descripción breve',
						'tipo'			=> 'txt',
						'listable'		=> '0',
						'validacion'	=> '0',
						'style'			=> 'height:70px;width:600px;'
				),
				'descripcion2'	=>array(
						'campo'			=> 'descripcion2',
						'label'			=> 'Descripción',
						'tipo'			=> 'html',
						'validacion'	=> '1',
						'style'			=> 'width:650px;height:350px;',
						'width'			=> '360px',
						'derecha'		=> '1',
						'css'			=> 'table { width:100%; margin-bottom:10px; background:#F3F3F3; }',
						'default'		=> '',
						'listable'		=> '0',
						'listhtml'		=> '1',
						'tags'			=> '1'
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
				),
				'file'			=>array(
						'campo'			=> 'file',
						'label'			=> 'Foto',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '1',
						'prefijo'		=> 'proitefot',
						'carpeta'		=> 'proitefot_imas',
						'tamanos'		=> '150x120,980x383',
						'tamano_listado'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px,height:auto,'
				),
				'foto_descripcion'=>array(
						'campo'			=> 'foto_descripcion',
						'label'			=> 'texto',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '207px'
				)
		),
		'edicion_completa'=> '1',
		'creacion_hijo'	=> 'productos_fotos',
		'calificacion'	=> '1',
		'importar_csv'	=> '0',
		'order_by'		=> 'id desc, id desc',
		'width_listado'	=> '',
		'edicion_rapida'	=> '1',
		'crear_pruebas'	=> '0',
		'seccion'		=> 'proyectos'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PRODUCTOS_SUBGRUPOS']=array(
		'titulo'		=> 'Torres',
		'nombre_singular'=> 'torre',
		'nombre_plural'	=> 'torres',
		'tabla'			=> 'productos_subgrupos',
		'archivo'		=> 'productos_subgrupos',
		'prefijo'		=> 'prosubgru',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Torres',
		'me'			=> 'PRODUCTOS_SUBGRUPOS',
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
				'id_item'		=>array(
						'campo'			=> 'id_item',
						'label'			=> 'Proyecto',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '1',
						'default'		=> '[id_item]',
						'style'			=> 'width:200px,',
						'opciones'		=> 'id,codigo;nombre|productos_items',
						'width'			=> '140px',
						'derecha'		=> '1',
						'tags'			=> '1',
						'queries'		=> '1',
						'tip_foreig'	=> '1'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'controles'		=> '<a rel="subs" href="custom/productos_items_items.php?id_item={select id_item from productos_items_items where id_tipo=[id]}&id_subgrupo=[id]" >{select count(*) from productos_items_items where id_tipo=[id]} inmuebles</a>'
				)
		),
		'grupo'			=> 'productos',
		'edicion_completa'=> '1',
		'expandir_vertical'=> '0',
		'edicion_rapida'	=> '1',
		'calificacion'	=> '1',
		'set_fila_fijo'	=> '',
		'crear_quick'	=> '0',
		'order_by'		=> ''
);
/******************************************************************************************************************************************************/

$objeto_tabla['PRODUCTOS_TIPOS']=array(
		'titulo'		=> 'Modelos de departamentos',
		'nombre_singular'=> 'modelo de departamento',
		'nombre_plural'	=> 'modelos de departamento',
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
		'menu_label'	=> 'Modelos de departamento',
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
				'id_item'		=>array(
						'campo'			=> 'id_item',
						'label'			=> 'Proyecto',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '1',
						'default'		=> '[id_item]',
						'style'			=> 'width:200px,',
						'opciones'		=> 'id,codigo;nombre|productos_items',
						'width'			=> '140px',
						'derecha'		=> '1',
						'tags'			=> '1',
						'queries'		=> '1',
						'tip_foreig'	=> '1'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'controles'		=> '
						<a rel="subs" href="custom/productos_items_items.php?id_tipo=[id]" >{select count(*) from productos_items_items where id_tipo=[id]} inmuebles</a>
						<a rel="subs" href="custom/productos_fotos.php?id_tipo=[id]" >{select count(*) from productos_fotos where id_tipo=[id]} galerias</a>',
						'multiopciones'	=> 'Productos|productos_items_tipos|id,nombre|productos_items|where visibilidad=1'
				),
				'pvlista'		=>array(
						'campo'			=> 'pvlista',
						'label'			=> 'Precio',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'width'			=> '50px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '1',
						'size'			=> '8',
						'style'			=> 'width:100px;'
				),
				'pvpromocion'	=>array(
						'campo'			=> 'pvpromocion',
						'label'			=> 'Precio Final',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'width'			=> '50px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '2',
						'size'			=> '8',
						'style'			=> 'width:100px;'
				),
				'area_total'	=>array(
						'campo'			=> 'area_total',
						'label'			=> 'Área Ocupada',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'width'			=> '50px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '1',
						'size'			=> '8',
						'style'			=> 'width:100px;'
				),
				'area_construida'=>array(
						'campo'			=> 'area_construida',
						'label'			=> 'Área Techada',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'width'			=> '50px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '2',
						'size'			=> '8',
						'style'			=> 'width:100px;'
				),
				'descripcion'	=>array(
						'campo'			=> 'descripcion',
						'label'			=> 'Descripción breve',
						'tipo'			=> 'txt',
						'listable'		=> '0',
						'validacion'	=> '0',
						'style'			=> 'height:70px;width:605px;'
				),
				'descripcion2'	=>array(
						'campo'			=> 'descripcion2',
						'label'			=> 'Descripción',
						'tipo'			=> 'html',
						'validacion'	=> '1',
						'style'			=> 'width:605px;height:250px;',
						'width'			=> '360px',
						'derecha'		=> '1',
						'css'			=> 'table { width:100%; margin-bottom:10px; background:#F3F3F3; }',
						'default'		=> '',
						'listable'		=> '0',
						'listhtml'		=> '1',
						'tags'			=> '1'
				),
				'descripcion3'	=>array(
						'campo'			=> 'descripcion3',
						'label'			=> 'Acabados',
						'tipo'			=> 'html',
						'validacion'	=> '1',
						'style'			=> 'width:605px;height:150px;',
						'width'			=> '360px',
						'derecha'		=> '1',
						'css'			=> 'table { width:100%; margin-bottom:10px; background:#F3F3F3; }',
						'default'		=> '',
						'listable'		=> '0',
						'listhtml'		=> '1',
						'tags'			=> '1'
				),
				'descripcion4'	=>array(
						'campo'			=> 'descripcion4',
						'label'			=> 'Areas comunes',
						'tipo'			=> 'html',
						'validacion'	=> '1',
						'style'			=> 'width:605px;height:150px;',
						'width'			=> '360px',
						'derecha'		=> '1',
						'css'			=> 'table { width:100%; margin-bottom:10px; background:#F3F3F3; }',
						'default'		=> '',
						'listable'		=> '0',
						'listhtml'		=> '1',
						'tags'			=> '1'
				),
				'has_balcon'	=>array(
						'campo'			=> 'has_balcon',
						'label'			=> 'Balcón',
						'tipo'			=> 'com',
						'listable'		=> '1',
						'validacion'	=> '0',
						'default'		=> '0',
						'opciones'		=>array(
								'1'			=> 'Si',
								'0'			=> 'No'
						),
						'derecha'		=> '1',
						'style'			=> 'width:100px;',
						'width'			=> '50px'
				),
				'num_rooms'		=>array(
						'campo'			=> 'num_rooms',
						'label'			=> '# Dormitorios',
						'tipo'			=> 'com',
						'default'		=> '0',
						'opciones'		=>array(
								'0'			=> '0',
								'1'			=> '1',
								'2'			=> '2',
								'3'			=> '3',
								'4'			=> '4',
								'5'			=> '5',
								'6'			=> '6'
						),
						'listable'		=> '0',
						'width'			=> '50px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '2',
						'size'			=> '8',
						'queries'		=> '1'
				),
				'num_bathrooms'	=>array(
						'campo'			=> 'num_bathrooms',
						'label'			=> '# Baños',
						'tipo'			=> 'com',
						'default'		=> '0',
						'opciones'		=>array(
								'0'			=> '0',
								'0.5'			=> '1/2',
								'1'			=> '1',
								'1.5'			=> '1 1/2',
								'2'			=> '2',
								'2.5'			=> '2 1/2',
								'3'			=> '3',
								'3.5'			=> '3 1/2',
								'4'			=> '4',
								'5'			=> '5',
								'6'			=> '6'
						),
						'listable'		=> '0',
						'width'			=> '50px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '2',
						'size'			=> '8',
						'queries'		=> '1'
				)
		),
		'grupo'			=> 'productos',
		'edicion_completa'=> '1',
		'expandir_vertical'=> '0',
		'edicion_rapida'	=> '1',
		'calificacion'	=> '1',
		'set_fila_fijo'	=> '',
		'crear_quick'	=> '0',
		'order_by'		=> '',
		'seccion'		=> 'modelos'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PRODUCTOS_ESTACIONAMIENTOS_TIPOS']=array(
		'titulo'		=> 'Modelos de estacionamiento',
		'nombre_singular'=> 'modelo de estacionamiento',
		'nombre_plural'	=> 'modelo de estacionamientos',
		'tabla'			=> 'productos_estacionamientos_tipos',
		'archivo'		=> 'productos_estacionamientos_tipos',
		'prefijo'		=> 'proesttip',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Modelos de estacionamiento',
		'me'			=> 'PRODUCTOS_ESTACIONAMIENTOS_TIPOS',
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
				'id_item'		=>array(
						'campo'			=> 'id_item',
						'label'			=> 'Proyecto',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '1',
						'default'		=> '[id_item]',
						'style'			=> 'width:200px,',
						'opciones'		=> 'id,codigo;nombre|productos_items',
						'width'			=> '140px',
						'derecha'		=> '1',
						'tags'			=> '1',
						'queries'		=> '1',
						'tip_foreig'	=> '1'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'derecha'		=> '1'
				),
				'tipo'			=>array(
						'campo'			=> 'tipo',
						'label'			=> 'Tipo',
						'tipo'			=> 'com',
						'default'		=> '0',
						'opciones'		=>array(
								'1'			=> 'Sótano',
								'2'			=> 'Semisótano'
						),
						'listable'		=> '0',
						'width'			=> '50px',
						'validacion'	=> '0',
						'derecha'		=> '2',
						'size'			=> '8',
						'queries'		=> '1'
				),
				'area'			=>array(
						'campo'			=> 'area',
						'label'			=> 'Área',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'width'			=> '50px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '2',
						'size'			=> '8',
						'style'			=> 'width:100px;'
				),
				'descripcion'	=>array(
						'campo'			=> 'descripcion',
						'label'			=> 'Descripción',
						'tipo'			=> 'txt',
						'listable'		=> '0',
						'validacion'	=> '0',
						'style'			=> 'height:70px;width:605px;'
				),
				'precio'		=>array(
						'campo'			=> 'precio',
						'label'			=> 'Precio',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'width'			=> '50px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '1',
						'size'			=> '8',
						'style'			=> 'width:100px;'
				)
		),
		'grupo'			=> 'productos',
		'edicion_completa'=> '1',
		'expandir_vertical'=> '0',
		'edicion_rapida'	=> '1',
		'calificacion'	=> '1',
		'set_fila_fijo'	=> '',
		'crear_quick'	=> '0',
		'order_by'		=> ''
);
/******************************************************************************************************************************************************/

$objeto_tabla['PRODUCTOS_DEPOSITOS_TIPOS']=array(
		'titulo'		=> 'Modelos de depósito',
		'nombre_singular'=> 'modelo de depósito',
		'nombre_plural'	=> 'modelos de depósitos',
		'tabla'			=> 'productos_depositos_tipos',
		'archivo'		=> 'productos_depositos_tipos',
		'prefijo'		=> 'prodeptip',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Modelos de depósito',
		'me'			=> 'PRODUCTOS_DEPOSITOS_TIPOS',
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
				'id_item'		=>array(
						'campo'			=> 'id_item',
						'label'			=> 'Proyecto',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '1',
						'default'		=> '[id_item]',
						'style'			=> 'width:200px,',
						'opciones'		=> 'id,codigo;nombre|productos_items',
						'width'			=> '140px',
						'derecha'		=> '1',
						'tags'			=> '1',
						'queries'		=> '1',
						'tip_foreig'	=> '1'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'derecha'		=> '1'
				),
				'tipo'			=>array(
						'campo'			=> 'tipo',
						'label'			=> 'Tipo',
						'tipo'			=> 'com',
						'default'		=> '0',
						'opciones'		=>array(
								'1'			=> 'Sótano',
								'2'			=> 'Semisótano'
						),
						'listable'		=> '0',
						'width'			=> '50px',
						'validacion'	=> '0',
						'derecha'		=> '2',
						'size'			=> '8',
						'queries'		=> '1'
				),
				'area'			=>array(
						'campo'			=> 'area',
						'label'			=> 'Área',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'width'			=> '50px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '2',
						'size'			=> '8',
						'style'			=> 'width:100px;'
				),
				'descripcion'	=>array(
						'campo'			=> 'descripcion',
						'label'			=> 'Des