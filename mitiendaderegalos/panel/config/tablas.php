<?php //á

$objeto_tabla['PRODUCTOS_GRUPOS']=array(
		'titulo'		=> 'Rubros',
		'nombre_singular'=> 'rubro',
		'nombre_plural'	=> 'rubros',
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
		'menu_label'	=> 'Rubros',
		'crear_label'	=> '80px',
		'crear_txt'		=> '400px',
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
						'prefijo'		=> 'progru',
						'carpeta'		=> 'progru_imas',
						'tamanos'		=> '70x70,400x300',
						'tamano_listado'	=> '1'
				)
		),
		'grupo'			=> 'productos',
		'edicion_rapida'	=> '0'
);

/******************************************************************************************************************************************************/


$objeto_tabla['PRODUCTOS_SUBGRUPOS']=array(
		'titulo'		=> '<a href="custom/productos_grupos.php">Rubros</a>  -
                      Categorías de {select nombre from productos_grupos where id=[id]}',
		'nombre_singular'=> 'categoría',
		'nombre_plural'	=> 'categorías',
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
		'menu_label'	=> 'Categorías',
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
						'label'			=> 'Rubro',
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
						'default'		=> '1'
				),

				'ver_rubro'		=>array(
						'campo'			=> 'ver_rubro',
						'label'			=> 'Ver en Rubro',
						'width'			=> '40px',
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

				'relevancia'	=>array(
						'campo'			=> 'relevancia',
						'label'			=> 'Relevancia',
						'width'			=> '40px',
						'tipo'			=> 'inp',
						'variable'		=> 'float',
						'listable'		=> '1',
						'validacion'	=> '0',
						'default'		=> '0',
						'style'			=> 'width:40px;'
				)
		),
		'grupo'			=> 'productos',
		'group'			=> 'id_grupo'
);

/******************************************************************************************************************************************************/


$objeto_tabla['PRODUCTOS_FILTROS']=array(
		'titulo'		=> '<a href="custom/productos_grupos.php">Categorías</a>
                          - <a href="custom/productos_subgrupos.php?id={select id_grupo from productos_subgrupos where id=[id]}">SubCategorías de {select productos_grupos.nombre from productos_grupos,productos_subgrupos where productos_grupos.id=productos_subgrupos.id_grupo and productos_subgrupos.id=[id]}</a>
                          - Productos de {select nombre from productos_subgrupos where id=[id]}',
		'nombre_singular'=> 'subcategoría',
		'nombre_plural'	=> 'subcategorías',
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
		'menu'			=> '0',
		'menu_label'	=> 'Subcategorías',
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
						'label'			=> 'Categoría',
						'opciones'		=> 'id,nombre|productos_subgrupos',
						'campo'			=> 'id_subgrupo',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '0',
						'default'		=> '[id_subgrupo]',
						'foreig'		=> '1',
						'foreigkey'		=> 'PRODUCTOS_SUBGRUPOS'
				)
		),
		'grupo'			=> 'productos'
);

/******************************************************************************************************************************************************/


$objeto_tabla['PRODUCTOS_ITEMS']=array(
		'titulo'		=> '<a href="custom/productos_grupos.php">Categorías</a>
                          - <a href="custom/productos_subgrupos.php?">SubCategorías</a>
                          - Productos',
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
		'por_pagina'	=> '30',
		'me'			=> 'PRODUCTOS_ITEMS',
		'orden'			=> '1',
		'oncreate'		=> 'base2/after_productos_items.php',
		'onedit'		=> 'base2/after_productos_items.php',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),

				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),

				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
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
						'controles'		=> '<a href="custom/productos_fotos.php?id=[id]">{select count(*) from productos_fotos where id_item=[id]} fotos</a>'
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
						'derecha'		=> '2'
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

				'id_grupo'		=>array(
						'label'			=> 'Rubro',
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
						'width'			=> '90px'
				),

				'id_subgrupo'	=>array(
						'label'			=> 'Cat',
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
						'width'			=> '90px'
				),

				'id_filtro'		=>array(
						'campo'			=> 'id_filtro',
						'label'			=> 'Sub-Cat',
						'tipo'			=> 'hid',
						'combo'			=> '1',
						'default'		=> '[id_filtro]',
						'foreig'		=> '1',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=> 'id,nombre|productos_filtros|where id_subgrupo=[id_subgrupo]',
						'width'			=> '90px',
						'derecha'		=> '2',
						'style'			=> 'width:100px;'
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
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'Si',
								'0'			=> 'No'
						),
						'derecha'		=> '2',
						'width'			=> '30px'
				),

				'precio_oferta'	=>array(
						'campo'			=> 'precio_oferta',
						'label'			=> 'Precio Ofertas',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '29px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '2',
						'size'			=> '8'
				),

				'extra_texto'	=>array(
						'campo'			=> 'extra_texto',
						'label'			=> 'Texto Personaliza tu Regalo',
						'tipo'			=> 'html',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '150px',
						'style'			=> 'height:150px;'
				),

				'politica_legal'	=>array(
						'campo'			=> 'politica_legal',
						'label'			=> 'Política Legal',
						'tipo'			=> 'html',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '150px',
						'style'			=> 'height:150px;'
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

				'nombre_fichero'	=>array(
						'campo'			=> 'nombre_fichero',
						'label'			=> 'nombre',
						'tipo'			=> 'inp',
						'unique'		=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '390px',
						'style'			=> 'width:400px;'
				),

				'fichero'		=>array(
						'campo'			=> 'fichero',
						'label'			=> 'Archivo',
						'tipo'			=> 'sto',
						'width'			=> '150px',
						'style'			=> 'width:200px;',
						'name'			=> 'nombre_fichero',
						'listable'		=> '0',
						'validacion'	=> '0',
						'prefijo'		=> 'doc',
						'carpeta'		=> 'doc_imas',
						'enlace'		=> 'down'
				),

				'consulta'		=>array(
						'campo'			=> 'consulta',
						'label'			=> 'Consulta',
						'tipo'			=> 'html',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '250px',
						'style'			=> 'width:400px;',
						'controles'		=> '<a href="custom/productos_comentarios.php?id=[id]">{select count(*) from productos_comentarios where id_item=[id]} consultas</a>'
				),

				'departamento'	=>array(
						'campo'			=> 'departamento',
						'legend'		=> 'Datos para inmueble',
						'label'			=> 'Departamento',
						'tipo'			=> 'hid',
						'combo'			=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=> 'id,nombre|geo_departamentos',
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
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=> 'id,nombre|geo_distritos',
						'style'			=> 'width:150px;',
						'derecha'		=> '2'
				),

				'operacion'		=>array(
						'campo'			=> 'operacion',
						'label'			=> 'Operación',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'Compra',
								'2'			=> 'Venta',
								'3'			=> 'Alquiler'
						),
						'style'			=> 'width:150px;'
				),

				'abr'			=>array(
						'campo'			=> 'abr',
						'label'			=> 'Abr',
						'tipo'			=> 'com',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'Av',
								'2'			=> 'Calle',
								'3'			=> 'Jr'
						),
						'style'			=> 'width:50px;',
						'derecha'		=> '1'
				),

				'urbanizacion'	=>array(
						'campo'			=> 'urbanizacion',
						'label'			=> 'Urbanización',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '150px',
						'style'			=> 'width:150px;',
						'derecha'		=> '2'
				),

				'amoblamiento'	=>array(
						'campo'			=> 'amoblamiento',
						'label'			=> 'Amoblamiento',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'Si',
								'0'			=> 'No'
						),
						'style'			=> 'width:150px;',
						'derecha'		=> '1'
				),

				'n_dormitorios'	=>array(
						'campo'			=> 'n_dormitorios',
						'label'			=> 'Nro Dormitorios',
						'tipo'			=> 'inp',
						'variable'		=> 'float',
						'size'			=> '10',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '150px',
						'derecha'		=> '1'
				),

				'n_ambientes'	=>array(
						'campo'			=> 'n_ambientes',
						'label'			=> 'Nro Ambientes',
						'tipo'			=> 'inp',
						'variable'		=> 'float',
						'size'			=> '10',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '150px',
						'derecha'		=> '2'
				),

				'n_banos'		=>array(
						'campo'			=> 'n_banos',
						'label'			=> 'Nro Baños',
						'tipo'			=> 'inp',
						'variable'		=> 'float',
						'size'			=> '10',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '150px',
						'derecha'		=> '2'
				),

				'n_banos_inc'	=>array(
						'campo'			=> 'n_banos_inc',
						'label'			=> 'Nro Baños Incorporados',
						'tipo'			=> 'inp',
						'variable'		=> 'float',
						'size'			=> '10',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '150px',
						'derecha'		=> '2'
				),

				'n_cocheras'	=>array(
						'campo'			=> 'n_cocheras',
						'label'			=> 'Nro Cocheras',
						'tipo'			=> 'inp',
						'variable'		=> 'float',
						'size'			=> '10',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '150px',
						'derecha'		=> '1'
				),

				'area_terrenos'	=>array(
						'campo'			=> 'area_terrenos',
						'label'			=> 'Área Terreno',
						'tipo'			=> 'inp',
						'variable'		=> 'float',
						'size'			=> '10',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '150px',
						'derecha'		=> '2'
				),

				'area_construida'=>array(
						'campo'			=> 'area_construida',
						'label'			=> 'Área Construída',
						'tipo'			=> 'inp',
						'variable'		=> 'float',
						'size'			=> '10',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '150px',
						'derecha'		=> '2'
				),

				'area_ocupada'	=>array(
						'campo'			=> 'area_ocupada',
						'label'			=> 'Área Ocupada',
						'tipo'			=> 'inp',
						'variable'		=> 'float',
						'size'			=> '10',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '150px',
						'derecha'		=> '2'
				),

				'pisos_privados'	=>array(
						'campo'			=> 'pisos_privados',
						'label'			=> 'Pisos privados',
						'tipo'			=> 'inp',
						'variable'		=> 'float',
						'size'			=> '10',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '150px',
						'derecha'		=> '2'
				),

				'pisos_publicos'	=>array(
						'campo'			=> 'pisos_publicos',
						'label'			=> 'Pisos públicos',
						'tipo'			=> 'inp',
						'variable'		=> 'float',
						'size'			=> '10',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '150px',
						'derecha'		=> '2'
				),

				'zonificacion'	=>array(
						'campo'			=> 'zonificacion',
						'label'			=> 'Zonificación',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'Residencial',
								'2'			=> 'Comercial'
						),
						'derecha'		=> '2'
				),

				'piscina'		=>array(
						'campo'			=> 'piscina',
						'label'			=> 'Piscina',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'Si',
								'0'			=> 'No'
						),
						'derecha'		=> '2'
				),

				'terraza'		=>array(
						'campo'			=> 'terraza',
						'label'			=> 'Terraza',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'Si',
								'0'			=> 'No'
						),
						'derecha'		=> '2'
				),

				'jardin'		=>array(
						'campo'			=> 'jardin',
						'label'			=> 'Jardín',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'Si',
								'0'			=> 'No'
						),
						'derecha'		=> '2'
				),

				'ascensores'	=>array(
						'campo'			=> 'ascensores',
						'label'			=> 'Ascensores',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'Si',
								'0'			=> 'No'
						),
						'derecha'		=> '2'
				)
		),
		'grupo'			=> 'productos',
		'edicion_rapida'	=> '0',
		'calificacion'	=> '0',
		'edicion_completa'=> '1',
		'duplicar'		=> '0'
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
						'controles'		=> '<a class="linkstitu" href="base2/ficha_producto.php?id=[id]">producto</a>',
						'constante'		=> '1'
				),

				'id_usuario'	=>array(
						'campo'			=> 'id_usuario',
						'label'			=> 'usuario',
						'tipo'			=> 'hid',
						'combo'			=> '1',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=> 'id,nombre;email|usuarios',
						'width'			=> '110px',
						'style'			=> 'width:150px;',
						'controles'		=> '<a class="linkstitu" href="base2/ficha_usuario.php?id=[id]">usuario</a>',
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


$objeto_tabla['PRODUCTOS_PRECIOS']=array(
		'grupo'			=> 'productos',
		'titulo'		=> '<a href="custom/productos_items.php">Productos</a>  -  
                      Precios de {select nombre from productos_items where id=[id]}',
		'nombre_singular'=> 'precio',
		'nombre_plural'	=> 'precios',
		'tabla'			=> 'productos_precios',
		'archivo'		=> 'productos_precios',
		'prefijo'		=> 'propre',
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
		'me'			=> 'PRODUCTOS_PRECIOS',
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

				'cantidad'		=>array(
						'campo'			=> 'cantidad',
						'label'			=> 'x Cantidad',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '29px',
						'validacion'	=> '0',
						'derecha'		=> '2',
						'size'			=> '8',
						'default'		=> '1'
				),

				'precio'		=>array(
						'campo'			=> 'precio',
						'label'			=> 'Precio',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '29px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '2',
						'size'			=> '8'
				)
		),
		'edicion_rapida'	=> '1'
);

/******************************************************************************************************************************************************/


$objeto_tabla['PRODUCTOS_FOTOS']=array(
		'titulo'		=> '<a href="custom/productos_grupos.php">Categorías</a>  -
                          <a href="custom/productos_items.php?id={select id_grupo from productos_items where id=[id]}">SubCategorías</a> -
                          Fotos de {select nombre from productos_items where id=[id]}',
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

/******************************************************************************************************************************************************/


$objeto_tabla['TARJETAS_FOTOS']=array(
		'titulo'		=> 'Tarjetas',
		'nombre_singular'=> 'tarjeta',
		'nombre_plural'	=> 'tarjetas',
		'tabla'			=> 'tarjetas_fotos',
		'archivo'		=> 'tarjetas_fotos',
		'prefijo'		=> 'tarfot',
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
		'menu_label'	=> 'Tarjetas',
		'me'			=> 'TARJETAS_FOTOS',
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
						'prefijo'		=> 'tarfot',
						'carpeta'		=> 'tarfot_imas',
						'tamanos'		=> '100x200,160x120,400x300',
						'tamano_listado'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px,height:auto,'
				),

				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
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


$objeto_tabla['PUBLICIDAD']=array(
		'titulo'		=> 'Publicidad',
		'nombre_singular'=> 'foto',
		'nombre_plural'	=> 'fotos',
		'tabla'			=> 'publicidad',
		'archivo'		=> 'publicidad',
		'prefijo'		=> 'pub',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'crear_label'	=> '100px',
		'crear_txt'		=> '400px',
		'menu'			=> '1',
		'menu_label'	=> 'Publicidad',
		'me'			=> 'PUBLICIDAD',
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
						'prefijo'		=> 'log',
						'carpeta'		=> 'pub_imas',
						'tamanos'		=> '70x70,564x277',
						'tamano_listado'	=> '1'
				),

				'foto_descripcion'=>array(
						'campo'			=> 'foto_descripcion',
						'label'			=> 'Título',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '207px'
				),

				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Texto',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '207px'
				)
		),
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
						'constante'		=> '1',
						'width'			=> '100px'
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
						'width'			=> '300px',
						'style'			=> 'height:300px'
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
		'edicion_rapida'	=> '1'
);

/******************************************************************************************************************************************************/


$objeto_tabla['FAQS']=array(
		'titulo'		=> 'Preguntas Frecuentes',
		'nombre_singular'=> 'pregunta',
		'nombre_plural'	=> 'preguntas',
		'tabla'			=> 'faqs',
		'archivo'		=> 'faqs',
		'prefijo'		=> 'faq',
		'eliminar'		=> '0',
		'crear'			=> '1',
		'editar'		=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'crear_label'	=> '100px',
		'crear_txt'		=> '550px',
		'menu_label'	=> 'Preguntas Frecuentes',
		'me'			=> 'FAQS',
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

				'pregunta'		=>array(
						'campo'			=> 'pregunta',
						'label'			=> 'Pregunta',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				),

				'respuesta'		=>array(
						'campo'			=> 'respuesta',
						'label'			=> 'Respuesta',
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
				)
		),
		'grupo'			=> 'contenidos',
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


$objeto_tabla['PEDIDOS']=array(
		'titulo'		=> 'Ordenes de Pedido',
		'nombre_singular'=> 'pedido',
		'nombre_plural'	=> 'pedidos',
		'tabla'			=> 'pedidos',
		'archivo'		=> 'pedidos',
		'prefijo'		=> 'ped',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'crear'			=> '0',
		'crear_label'	=> '160px',
		'crear_txt'		=> '400px',
		'menu'			=> '1',
		'menu_label'	=> 'Ordenes de Pedido',
		'me'			=> 'PEDIDOS',
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

				'id_usuario'	=>array(
						'label'			=> 'Usuario',
						'campo'			=> 'id_usuario',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '1',
						'default'		=> '[id_usuario]',
						'opciones'		=> 'id,nombre|usuarios',
						'foreig'		=> '1',
						'foreigkey'		=> 'USUARIOS',
						'style'			=> 'width:150px;',
						'derecha'		=> '1',
						'width'			=> '100px'
				),

				'envgen_nombre'	=>array(
						'campo'			=> 'envgen_nombre',
						'legend'		=> 'Datos del lugar de envio y persona que recibirá los productos',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'derecha'		=> '1',
						'style'			=> 'width:150px;',
						'width'			=> '150px'
				),

				'envgen_apellido_paterno'=>array(
						'campo'			=> 'envgen_apellido_paterno',
						'label'			=> 'Apellido Paterno',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'derecha'		=> '2',
						'style'			=> 'width:100px;',
						'width'			=> '150px'
				),

				'envgen_apellido_materno'=>array(
						'campo'			=> 'envgen_apellido_materno',
						'label'			=> 'Apellido Paterno',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'derecha'		=> '2',
						'style'			=> 'width:100px;',
						'width'			=> '150px'
				),

				'envgen_direccion'=>array(
						'campo'			=> 'envgen_direccion',
						'label'			=> 'Dirección Exacta',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '300px'
				),

				'envgen_departamento'=>array(
						'campo'			=> 'envgen_departamento',
						'label'			=> 'Departamento',
						'tipo'			=> 'hid',
						'combo'			=> '1',
						'derecha'		=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'style'			=> 'width:100px;',
						'opciones'		=> 'id,nombre|geo_departamentos',
						'load'			=> 'envgen_provincia||id,nombre|geo_provincias|where id_departamento='
				),

				'envgen_provincia'=>array(
						'campo'			=> 'envgen_provincia',
						'label'			=> 'Provincia',
						'tipo'			=> 'hid',
						'combo'			=> '1',
						'derecha'		=> '2',
						'listable'		=> '0',
						'validacion'	=> '0',
						'style'			=> 'width:100px;',
						'opciones'		=> 'id,nombre|geo_provincias',
						'load'			=> 'envgen_distrito||id,nombre|geo_distritos|where id_provincia='
				),

				'envgen_distrito'=>array(
						'campo'			=> 'envgen_distrito',
						'label'			=> 'Distrito',
						'tipo'			=> 'hid',
						'combo'			=> '1',
						'derecha'		=> '2',
						'style'			=> 'width:100px;',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=> 'id,nombre|geo_distritos'
				),

				'envgen_telefono_fijo'=>array(
						'campo'			=> 'envgen_telefono_fijo',
						'label'			=> 'Teléfono',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'derecha'		=> '1',
						'validacion'	=> '0',
						'style'			=> 'width:100px;',
						'width'			=> '100px'
				),

				'envgen_telefono_celular'=>array(
						'campo'			=> 'envgen_telefono_celular',
						'label'			=> 'Celular',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'derecha'		=> '2',
						'style'			=> 'width:100px;',
						'width'			=> '100px'
				),

				'envgen_ref_lugar'=>array(
						'campo'			=> 'envgen_ref_lugar',
						'label'			=> 'Referente al Lugar',
						'tipo'			=> 'txt',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '300px'
				),

				'envgen_fecha_entrega'=>array(
						'campo'			=> 'envgen_fecha_entrega',
						'legend'		=> 'Otras consideraciones para el envio',
						'label'			=> 'Fecha de entrega',
						'tipo'			=> 'fch',
						'width'			=> '200px',
						'listable'		=> '0',
						'validacion'	=> '0',
						'rango'			=> 'now,+1 year'
				),

				'envgen_intervalo_entrega'=>array(
						'campo'			=> 'envgen_intervalo_entrega',
						'label'			=> 'Intervalo de entrega',
						'tipo'			=> 'com',
						'listable'		=> '0',
						'validacion'	=> '0',
						'style'			=> 'width:150px;',
						'opciones'		=>array(
								'1'			=> 'Entre 7am y 10:30am',
								'2'			=> 'Entre 9am y 11:30am',
								'3'			=> 'Entre 8am y 12:30am',
								'4'			=> 'Entre 2pm y 5:30pm',
								'5'			=> 'Entre 6:00pm y 8pm',
								'6'			=> 'Entre 6:00am y 8am (Horario Especial)'
						),
						'default'		=> '1'
				),

				'envgen_si_empresa'=>array(
						'campo'			=> 'envgen_si_empresa',
						'label'			=> 'Indicar el área y anexo',
						'tipo'			=> 'txt',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '300px'
				),

				'envgen_comentario'=>array(
						'campo'			=> 'envgen_comentario',
						'label'			=> 'Comentario',
						'tipo'			=> 'txt',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '300px'
				),

				'env_nombre'	=>array(
						'campo'			=> 'env_nombre',
						'legend'		=> 'Datos del lugar de envio y persona que recibirá los productos REGALOS DELIVERY',
						'label'			=> 'Nombre del agasajado(a)',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'derecha'		=> '1',
						'style'			=> 'width:150px;',
						'width'			=> '150px'
				),

				'env_apellidos'	=>array(
						'campo'			=> 'env_apellidos',
						'label'			=> 'Apellido del agasajado(a)',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'derecha'		=> '2',
						'style'			=> 'width:100px;',
						'width'			=> '150px'
				),

				'env_direccion'	=>array(
						'campo'			=> 'env_direccion',
						'label'			=> 'Dirección Exacta',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '300px'
				),

				'env_departamento'=>array(
						'campo'			=> 'env_departamento',
						'label'			=> 'Departamento',
						'tipo'			=> 'hid',
						'combo'			=> '1',
						'derecha'		=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'style'			=> 'width:100px;',
						'opciones'		=> 'id,nombre|geo_departamentos',
						'load'			=> 'env_provincia||id,nombre|geo_provincias|where id_departamento='
				),

				'env_provincia'	=>array(
						'campo'			=> 'env_provincia',
						'label'			=> 'Provincia',
						'tipo'			=> 'hid',
						'combo'			=> '1',
						'derecha'		=> '2',
						'listable'		=> '0',
						'validacion'	=> '0',
						'style'			=> 'width:100px;',
						'opciones'		=> 'id,nombre|geo_provincias',
						'load'			=> 'env_distrito||id,nombre|geo_distritos|where id_provincia='
				),

				'env_distrito'	=>array(
						'campo'			=> 'env_distrito',
						'label'			=> 'Distrito',
						'tipo'			=> 'hid',
						'combo'			=> '1',
						'derecha'		=> '2',
						'style'			=> 'width:100px;',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=> 'id,nombre|geo_distritos'
				),

				'env_telefono_fijo'=>array(
						'campo'			=> 'env_telefono_fijo',
						'label'			=> 'Teléfono',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'derecha'		=> '1',
						'validacion'	=> '0',
						'style'			=> 'width:100px;',
						'width'			=> '100px'
				),

				'env_telefono_celular'=>array(
						'campo'			=> 'env_telefono_celular',
						'label'			=> 'Celular',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'derecha'		=> '2',
						'style'			=> 'width:100px;',
						'width'			=> '100px'
				),

				'env_ref_lugar'	=>array(
						'campo'			=> 'env_ref_lugar',
						'label'			=> 'Referente al Lugar',
						'tipo'			=> 'txt',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '300px'
				),

				'env_fecha_entrega'=>array(
						'campo'			=> 'env_fecha_entrega',
						'legend'		=> 'Otras consideraciones para el envio REGALOS DELIVERY',
						'label'			=> 'Fecha de entrega',
						'tipo'			=> 'fch',
						'width'			=> '200px',
						'listable'		=> '0',
						'validacion'	=> '0',
						'rango'			=> 'now,+1 year'
				),

				'env_intervalo_entrega'=>array(
						'campo'			=> 'env_intervalo_entrega',
						'label'			=> 'Intervalo de entrega',
						'tipo'			=> 'com',
						'listable'		=> '0',
						'validacion'	=> '0',
						'style'			=> 'width:150px;',
						'opciones'		=>array(
								'1'			=> 'Entre 7am y 10:30am',
								'2'			=> 'Entre 9am y 11:30am',
								'3'			=> 'Entre 8am y 12:30am',
								'4'			=> 'Entre 2pm y 5:30pm',
								'5'			=> 'Entre 6:00pm y 8pm',
								'6'			=> 'Entre 6:00am y 8am (Horario Especial)'
						),
						'default'		=> '1'
				),

				'env_si_empresa'	=>array(
						'campo'			=> 'env_si_empresa',
						'label'			=> 'Indicar el área y anexo',
						'tipo'			=> 'txt',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '300px'
				),

				'env_tarjeta_regalo'=>array(
						'campo'			=> 'env_tarjeta_regalo',
						'label'			=> 'Tarjeta de Regalo',
						'tipo'			=> 'hid',
						'combo'			=> '1',
						'derecha'		=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'style'			=> 'width:100px;',
						'opciones'		=> 'id,nombre|tarjetas_fotos'
				),

				'env_dedicatoria'=>array(
						'campo'			=> 'env_dedicatoria',
						'label'			=> 'Dedicatoria',
						'tipo'			=> 'txt',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '300px'
				),

				'env_comentario'	=>array(
						'campo'			=> 'env_comentario',
						'label'			=> 'Comentario',
						'tipo'			=> 'txt',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '300px'
				),

				'env_regalo_sorpresa'=>array(
						'campo'			=> 'env_regalo_sorpresa',
						'label'			=> 'Enviar Regalo Sorpresa',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'Si',
								'0'			=> 'No'
						),
						'default'		=> '0'
				),

				'pag_tipo_documento'=>array(
						'campo'			=> 'pag_tipo_documento',
						'label'			=> '¿Qué solicita?',
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

				'pag_direccion'	=>array(
						'campo'			=> 'pag_direccion',
						'label'			=> 'Dirección de la facturación',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '300px'
				),

				'pag_direccion_ref'=>array(
						'campo'			=> 'pag_direccion_ref',
						'label'			=> 'Referente al Lugar',
						'tipo'			=> 'txt',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '300px'
				),

				'pag_factura_ruc'=>array(
						'campo'			=> 'pag_factura_ruc',
						'label'			=> 'Factura RUC',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'style'			=> 'width:100px;',
						'width'			=> '100px'
				),

				'pag_factura_razonsocial'=>array(
						'campo'			=> 'pag_factura_razonsocial',
						'label'			=> 'Factura Razón Social',
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
						'validacion'	=> '1',
						'style'			=> 'width:200px;',
						'width'			=> '200px'
				),

				'pag_factura_departamento'=>array(
						'campo'			=> 'pag_factura_departamento',
						'label'			=> 'Departamento',
						'tipo'			=> 'hid',
						'derecha'		=> '1',
						'combo'			=> '1',
						'listable'		=> '0',
						'style'			=> 'width:100px;',
						'validacion'	=> '0',
						'opciones'		=> 'id,nombre|geo_departamentos',
						'load'			=> 'pag_factura_provincia||id,nombre|geo_provincias|where id_departamento='
				),

				'pag_factura_provincia'=>array(
						'campo'			=> 'pag_factura_provincia',
						'label'			=> 'Provincia',
						'tipo'			=> 'hid',
						'derecha'		=> '2',
						'combo'			=> '1',
						'listable'		=> '0',
						'style'			=> 'width:100px;',
						'validacion'	=> '0',
						'opciones'		=> 'id,nombre|geo_provincias',
						'load'			=> 'pag_factura_distrito||id,nombre|geo_distritos|where id_provincia='
				),

				'pag_factura_distrito'=>array(
						'campo'			=> 'pag_factura_distrito',
						'label'			=> 'Distrito',
						'tipo'			=> 'hid',
						'derecha'		=> '2',
						'combo'			=> '1',
						'listable'		=> '0',
						'style'			=> 'width:100px;',
						'validacion'	=> '0',
						'opciones'		=> 'id,nombre|geo_distritos'
				),

				'pag_factura_contacto'=>array(
						'campo'			=> 'pag_factura_contacto',
						'label'			=> 'Contacto',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'style'			=> 'width:150px;',
						'width'			=> '150px'
				),

				'pag_factura_telefono'=>array(
						'campo'			=> 'pag_factura_telefono',
						'label'			=> 'Teléfono',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'style'			=> 'width:150px;',
						'width'			=> '150px'
				),

				'pedido'		=>array(
						'campo'			=> 'pedido',
						'label'			=> 'Pedido',
						'tipo'			=> 'html',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '300px'
				)
		),
		'grupo'			=> 'formularios'
);

/******************************************************************************************************************************************************/


$objeto_tabla['MARCAS']=array(
		'titulo'		=> 'Marcas',
		'nombre_singular'=> 'marca',
		'nombre_plural'	=> 'marcas',
		'tabla'			=> 'marcas',
		'archivo'		=> 'marcas',
		'prefijo'		=> 'mar',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Marcas',
		'me'			=> 'MARCAS',
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
						'fulltext'		=> '0'
				),

				'file'			=>array(
						'campo'			=> 'file',
						'label'			=> 'logo',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '1',
						'prefijo'		=> 'mar',
						'carpeta'		=> 'mar_imas',
						'tamanos'		=> '150x120,178x132',
						'tamano_listado'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px,height:auto,'
				)
		),
		'disabled'		=> '1'
);

/******************************************************************************************************************************************************/


$objeto_tabla['MARCAS2']=array(
		'titulo'		=> 'Marcas 2',
		'nombre_singular'=> 'marca',
		'nombre_plural'	=> 'marcas',
		'tabla'			=> 'marcas2',
		'archivo'		=> 'marcas2',
		'prefijo'		=> 'mar',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Marcas 2',
		'me'			=> 'MARCAS2',
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
						'fulltext'		=> '0'
				),

				'file'			=>array(
						'campo'			=> 'file',
						'label'			=> 'logo',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '1',
						'prefijo'		=> 'mar',
						'carpeta'		=> 'mar2_imas',
						'tamanos'		=> '150x120,178x132',
						'tamano_listado'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px,height:auto,'
				)
		),
		'disabled'		=> '1'
);

/******************************************************************************************************************************************************/


$objeto_tabla['VIDEOS']=array(
		'titulo'		=> 'Galería de Videos',
		'nombre_singular'=> 'video',
		'nombre_plural'	=> 'videos',
		'tabla'			=> 'videos',
		'archivo'		=> 'videos',
		'prefijo'		=> 'vid',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Galería de Video',
		'me'			=> 'VIDEOS',
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
						'campo'			=> 'codigo',
						'label'			=> 'Código Youtube',
						'tipo'			=> 'yot',
						'listable'		=> '1',
						'validacion'	=> '1'
				),

				'titulo'		=>array(
						'campo'			=> 'titulo',
						'label'			=> 'Título',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				),

				'fecha'			=>array(
						'campo'			=> 'fecha',
						'label'			=> 'Fecha',
						'tipo'			=> 'fch',
						'listable'		=> '1',
						'validacion'	=> '1'
				)
		),
		'disabled'		=> '1'
);

/******************************************************************************************************************************************************/


$objeto_tabla['PAYPAL_GRUPOS']=array(
		'titulo'		=> 'Pedidos paypal',
		'nombre_singular'=> 'pedido',
		'nombre_plural'	=> 'pedidos',
		'tabla'			=> 'paypal_payment_info',
		'archivo'		=> 'paypal_payment_info',
		'archivo_hijo'	=> 'paypal_cart_info',
		'prefijo'		=> 'paygru',
		'eliminar'		=> '0',
		'editar'		=> '0',
		'crear'			=> '0',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Pedidos Paypal',
		'me'			=> 'PAYPAL_GRUPOS',
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

				'firstname'		=>array(
						'campo'			=> 'firstname',
						'label'			=> 'Nombre',
						'width'			=> '300px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				),

				'lastname'		=>array(
						'campo'			=> 'lastname',
						'label'			=> 'Apellidos',
						'width'			=> '300px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				),

				'buyer_email'	=>array(
						'campo'			=> 'buyer_email',
						'label'			=> 'Email',
						'width'			=> '300px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				),

				'street'		=>array(
						'campo'			=> 'street',
						'label'			=> 'Direccion',
						'width'			=> '300px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				),

				'city'			=>array(
						'campo'			=> 'city',
						'label'			=> 'Ciudad',
						'width'			=> '300px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				),

				'state'			=>array(
						'campo'			=> 'state',
						'label'			=> 'Estado',
						'width'			=> '300px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				),

				'zipcode'		=>array(
						'campo'			=> 'zipcode',
						'label'			=> 'CP',
						'width'			=> '300px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				),

				'memo'			=>array(
						'campo'			=> 'memo',
						'label'			=> 'Memo',
						'width'			=> '300px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				),

				'itemname'		=>array(
						'campo'			=> 'itemname',
						'label'			=> 'Nombre Items',
						'width'			=> '300px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				),

				'itemnumber'	=>array(
						'campo'			=> 'itemnumber',
						'label'			=> 'Cantidad Items',
						'width'			=> '300px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				),

				'os0'			=>array(
						'campo'			=> 'os0',
						'label'			=> 'os0',
						'width'			=> '300px',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '1'
				),

				'on0'			=>array(
						'campo'			=> 'on0',
						'label'			=> 'on0',
						'width'			=> '300px',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '1'
				),

				'os1'			=>array(
						'campo'			=> 'os1',
						'label'			=> 'os1',
						'width'			=> '300px',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '1'
				),

				'on1'			=>array(
						'campo'			=> 'on1',
						'label'			=> 'on1',
						'width'			=> '300px',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '1'
				),

				'quantity'		=>array(
						'campo'			=> 'quantity',
						'label'			=> 'cantidad',
						'width'			=> '300px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				),

				'paymentdate'	=>array(
						'campo'			=> 'paymentdate',
						'label'			=> 'fecha-pago',
						'width'			=> '300px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				),

				'paymenttype'	=>array(
						'campo'			=> 'paymenttype',
						'label'			=> 'tipo-pago',
						'width'			=> '300px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				),

				'txnid'			=>array(
						'campo'			=> 'txnid',
						'label'			=> 'ID',
						'width'			=> '300px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'enlace'		=> 'custom/paypal_cart_info.php?id=[enlace]'
				),

				'mc_gross'		=>array(
						'campo'			=> 'mc_gross',
						'label'			=> 'mc_gross',
						'width'			=> '300px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				),

				'mc_fee'		=>array(
						'campo'			=> 'mc_fee',
						'label'			=> 'mc_fee',
						'width'			=> '300px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				),

				'paymentstatus'	=>array(
						'campo'			=> 'paymentstatus',
						'label'			=> 'paymentstatus',
						'width'			=> '300px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				),

				'pendingreason'	=>array(
						'campo'			=> 'pendingreason',
						'label'			=> 'pendingreason',
						'width'			=> '300px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				),

				'txntype'		=>array(
						'campo'			=> 'txntype',
						'label'			=> 'txntype',
						'width'			=> '300px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				),

				'tax'			=>array(
						'campo'			=> 'tax',
						'label'			=> 'tax',
						'width'			=> '300px',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '1'
				),

				'mc_currency'	=>array(
						'campo'			=> 'mc_currency',
						'label'			=> 'mc_currency',
						'width'			=> '300px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				),

				'reaseoncode'	=>array(
						'campo'			=> 'reaseoncode',
						'label'			=> 'reaseoncode',
						'width'			=> '300px',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '1'
				),

				'custom'		=>array(
						'campo'			=> 'custom',
						'label'			=> 'custom',
						'width'			=> '300px',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '1'
				),

				'country'		=>array(
						'campo'			=> 'country',
						'label'			=> 'country',
						'width'			=> '300px',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '1'
				),

				'datecreation'	=>array(
						'campo'			=> 'datecreation',
						'label'			=> 'datecreation',
						'width'			=> '300px',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '1'
				)
		),
		'disabled'		=> '1'
);

/******************************************************************************************************************************************************/


$objeto_tabla['PAYPAL_ITEMS']=array(
		'titulo'		=> '<a href="custom/paypal_payment_info.php">Pedidos paypal</a>  -  
                          Pedido código {select txnid from paypal_payment_info where txnid="[id]"}',
		'nombre_singular'=> 'item',
		'nombre_plural'	=> 'items',
		'tabla'			=> 'paypal_cart_info',
		'archivo'		=> 'paypal_cart_info',
		'prefijo'		=> 'prodite',
		'eliminar'		=> '0',
		'editar'		=> '0',
		'crear'			=> '0',
		'crear_label'	=> '200px',
		'crear_txt'		=> '400px',
		'altura_listado'	=> '60px',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '0',
		'menu_label'	=> '',
		'me'			=> 'PAYPAL_ITEMS',
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

				'txnid'			=>array(
						'campo'			=> 'txnid',
						'label'			=> 'ID',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '219px',
						'default'		=> '[id]',
						'foreig'		=> '1',
						'foreigkey'		=> 'PAYPAL_GRUPOS'
				),

				'itemnumber'	=>array(
						'campo'			=> 'itemnumber',
						'label'			=> 'codigo',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '39px'
				),

				'itemname'		=>array(
						'campo'			=> 'itemname',
						'label'			=> 'nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '319px'
				),

				'os0'			=>array(
						'campo'			=> 'os0',
						'label'			=> 'os0',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '1',
						'width'			=> '219px'
				),

				'on0'			=>array(
						'campo'			=> 'on0',
						'label'			=> 'on0',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '1',
						'width'			=> '219px'
				),

				'os1'			=>array(
						'campo'			=> 'os1',
						'label'			=> 'os1',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '1',
						'width'			=> '219px'
				),

				'on1'			=>array(
						'campo'			=> 'on1',
						'label'			=> 'on1',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '1',
						'width'			=> '219px'
				),

				'quantity'		=>array(
						'campo'			=> 'quantity',
						'label'			=> 'cantidad',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '30px'
				),

				'invoice'		=>array(
						'campo'			=> 'invoice',
						'label'			=> 'factura',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '150px'
				),

				'custom'		=>array(
						'campo'			=> 'custom',
						'label'			=> 'custom',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '150px'
				)
		),
		'disabled'		=> '1'
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
				)
		),
		'grupo'			=> 'contenidos',
		'edicion_completa'=> '0'
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
				)
		),
		'grupo'			=> 'contenidos'
);

/******************************************************************************************************************************************************/


$objeto_tabla['PUBLICIDAD_VIDEOS']=array(
		'titulo'		=> 'Videos',
		'nombre_singular'=> 'bloque de videos',
		'nombre_plural'	=> 'bloques de videos',
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
		'menu_label'	=> 'Videos',
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
		'grupo'			=> 'publicidad'
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
		'grupo'			=> 'publicidad',
		'crear_label'	=> '110px',
		'crear_txt'		=> '600px',
		'por_linea'		=> '5'
);

/******************************************************************************************************************************************************/


$objeto_tabla['PUBLICIDAD_FOTOS']=array(
		'titulo'		=> 'Fotos',
		'nombre_singular'=> 'bloques de fotos',
		'nombre_plural'	=> 'bloque de fotos',
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
		'menu_label'	=> 'Fotos',
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
						'controles'		=> '<a  rel="subs"  href="custom/publicidad_fotos_fotos.php?id=[id]">{select count(*) from publicidad_fotos_fotos where id_grupo=[id]}  fotos</a>
							'
				)
		),
		'grupo'			=> 'publicidad',
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
		'grupo'			=> 'publicidad',
		'por_linea'		=> '5'
);

/******************************************************************************************************************************************************/


$objeto_tabla['BOLETINES_FILTROS']=array(
		'titulo'		=> 'Grupo de Boletines',
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
		'menu_label'	=> 'Grupos de Boletines',
		'por_pagina'	=> '56',
		'me'			=> 'BOLETINES_FILTROS',
		'controles'		=> '
							<a class="linkstitu" href="base2/envio_rapido.php">ENVIAR A TODOS</a> 
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
						'controles'		=> '<a class="linkstitu" href="base2/hilo_boletin.php?enviarprueba=1&id_filtro=[id]">enviar boletín</a>
						<a class="linkstitu" href="custom/boletines.php?id_filtro=[id]">{select count(*) from boletines where id_filtro=[id]} suscritos</a>
						'
				)
		),
		'grupo'			=> 'boletin'
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
		'crear'			=> '1',
		'crear_label'	=> '100px',
		'crear_txt'		=> '400px',
		'menu'			=> '1',
		'menu_label'	=> 'Suscritos a Boletín',
		'me'			=> 'BOLETINES',
		'grupo'			=> 'boletin',
		'orden'			=> '1',
		'controles'		=> '
							<a class="linkstitu" href="base2/envio_rapido.php">ENVIAR A TODOS</a> 
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

				'empresa'		=>array(
						'campo'			=> 'empresa',
						'label'			=> 'Empresa',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '100px'
				),

				'titulo'		=>array(
						'campo'			=> 'titulo',
						'label'			=> 'Título',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '200px'
				),

				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '130px',
						'controles'		=> '<a href="base2/hilo_boletin.php?enviarprueba=1&id=[id]">enviar boletín</a>
						<a href="base2/hilo_boletin.php?verprueba=1&id=[id]">ver boletín personalizado</a>'
				),

				'id_filtro'		=>array(
						'campo'			=> 'id_filtro',
						'label'			=> 'Grupo',
						'tipo'			=> 'hid',
						'combo'			=> '1',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=> 'id,nombre|boletines_filtros',
						'width'			=> '150px',
						'style'			=> 'width:150px;'
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

				'email'			=>array(
						'campo'			=> 'email',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '100px'
				),

				'telefono'		=>array(
						'campo'			=> 'telefono',
						'label'			=> 'Teléf/Celular',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '60px'
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
						'default'		=> '1',
						'width'			=> '100px'
				),

				'Baja'			=>array(
						'campo'			=> 'Baja',
						'label'			=> 'De Baja',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'0'			=> 'activo',
								'1'			=> 'baja por el administrador del sistema',
								'2'			=> 'el usuario removio su email desde el boletin'
						),
						'default'		=> '1',
						'width'			=> '100px'
				)
		),
		'edicion_rapida'	=> '1',
		'exportar_excel'	=> '1'
);

/******************************************************************************************************************************************************/


$objeto_tabla['INSCRIPCIONES']=array(
		'titulo'		=> 'Inscritos',
		'nombre_singular'=> 'inscrito',
		'nombre_plural'	=> 'inscritos',
		'tabla'			=> 'inscripciones',
		'archivo'		=> 'inscripciones',
		'prefijo'		=> 'ins',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'crear'			=> '1',
		'crear_label'	=> '100px',
		'crear_txt'		=> '400px',
		'menu'			=> '1',
		'menu_label'	=> 'Inscripciones',
		'me'			=> 'INSCRIPCIONES',
		'grupo'			=> 'formularios',
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
						'width'			=> '150px'
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

				'email'			=>array(
						'campo'			=> 'email',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '100px'
				),

				'empresa'		=>array(
						'campo'			=> 'empresa',
						'label'			=> 'Empresa',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '100px'
				),

				'telefono'		=>array(
						'campo'			=> 'telefono',
						'label'			=> 'Teléfono',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '60px'
				),

				'celular'		=>array(
						'campo'			=> 'celular',
						'label'			=> 'Celular',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '60px'
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
		'edicion_rapida'	=> '1'
);

/******************************************************************************************************************************************************/


$objeto_tabla['BANNERS_BOLETIN']=array(
		'me'			=> 'BANNERS_BOLETIN',
		'titulo'		=> 'Banners',
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
		'menu_label'	=> 'Banners de Boletín',
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
						'width'			=> '200px',
						'style'			=> 'width:200px;'
				),

				'fichero'		=>array(
						'campo'			=> 'fichero',
						'label'			=> 'Archivo',
						'tipo'			=> 'sto',
						'width'			=> '150px',
						'style'			=> 'width:200px;',
						'listable'		=> '1',
						'validacion'	=> '0',
						'prefijo'		=> 'banbol',
						'carpeta'		=> 'banbol_imas'
				),

				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Texto',
						'tipo'			=> 'inp',
						'width'			=> '100px',
						'style'			=> 'width:100px;',
						'listable'		=> '1'
				),

				'url'			=>array(
						'campo'			=> 'url',
						'label'			=> 'Url',
						'tipo'			=> 'inp',
						'width'			=> '200px',
						'style'			=> 'width:200px;',
						'listable'		=> '1'
				),

				'dimensiones'	=>array(
						'campo'			=> 'dimensiones',
						'label'			=> 'Dimensiones',
						'tipo'			=> 'inp',
						'width'			=> '30px',
						'style'			=> 'width:30px;',
						'listable'		=> '1'
				)
		),
		'grupo'			=> 'boletin',
		'edicion_completa'=> '0'
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
		'menu'			=> '',
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
								'4'			=> 'gmail dominio'
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
		)
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
		'menu'			=> '0',
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
		)
);

/******************************************************************************************************************************************************/


$objeto_tabla['GEO_DEPARTAMENTOS']=array(
		'titulo'		=> 'Departamentos',
		'nombre_singular'=> 'departamento',
		'nombre_plural'	=> 'departamentos',
		'tabla'			=> 'geo_departamentos',
		'archivo'		=> 'geo_departamentos',
		'archivo_hijo'	=> 'geo_provincias',
		'prefijo'		=> 'geodep',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '0',
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
				)
		),
		'grupo'			=> 'geoposicion'
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
				)
		),
		'grupo'			=> 'geoposicion'
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

				'shipping'		=>array(
						'campo'			=> 'shipping',
						'label'			=> 'Costo de Envio',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '29px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '1',
						'size'			=> '8'
				)
		),
		'grupo'			=> 'geoposicion'
);

/******************************************************************************************************************************************************/


$objeto_tabla['USUARIOS']=array(
		'titulo'		=> 'Registro de Usuarios',
		'nombre_singular'=> 'usuario',
		'nombre_plural'	=> 'usuarios',
		'tabla'			=> 'usuarios',
		'archivo'		=> 'usuarios',
		'prefijo'		=> 'usua',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '0',
		'menu'			=> '1',
		'crear_label'	=> '160px',
		'crear_txt'		=> '400px',
		'menu_label'	=> 'Registro de Usuarios',
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

				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'derecha'		=> '1',
						'validacion'	=> '1',
						'width'			=> '100px',
						'style'			=> 'width:100px;'
				),

				'apellidos_paterno'=>array(
						'campo'			=> 'apellidos_paterno',
						'label'			=> 'Apellidos Paterno',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'derecha'		=> '2',
						'width'			=> '100px',
						'style'			=> 'width:100px;'
				),

				'apellidos_materno'=>array(
						'campo'			=> 'apellidos_materno',
						'label'			=> 'Apellidos Materno',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'derecha'		=> '2',
						'width'			=> '100px',
						'style'			=> 'width:100px;'
				),

				'genero'		=>array(
						'campo'			=> 'genero',
						'label'			=> 'Género',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'Hombre',
								'2'			=> 'Mujer'
						),
						'default'		=> '0'
				),

				'dni'			=>array(
						'campo'			=> 'dni',
						'label'			=> 'Documento de Identidad DNI',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '300px',
						'style'			=> 'width:100px;'
				),

				'fecha_nacimiento'=>array(
						'campo'			=> 'fecha_nacimiento',
						'label'			=> 'Fecha de nacimiento',
						'tipo'			=> 'fch',
						'width'			=> '200px',
						'listable'		=> '1',
						'validacion'	=> '1'
				),

				'direccion'		=>array(
						'campo'			=> 'direccion',
						'label'			=> 'Dirección',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '300px'
				),

				'departamento'	=>array(
						'campo'			=> 'departamento',
						'label'			=> 'Departamento',
						'tipo'			=> 'hid',
						'combo'			=> '1',
						'derecha'		=> '1',
						'listable'		=> '1',
						'style'			=> 'width:100px;',
						'validacion'	=> '0',
						'opciones'		=> 'id,nombre|geo_departamentos',
						'load'			=> 'provincia||id,nombre|geo_provincias|where id_departamento='
				),

				'provincia'		=>array(
						'campo'			=> 'provincia',
						'label'			=> 'Provincia',
						'tipo'			=> 'hid',
						'combo'			=> '1',
						'derecha'		=> '2',
						'style'			=> 'width:100px;',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=> 'id,nombre|geo_provincias',
						'load'			=> 'distrito||id,nombre|geo_distritos|where id_provincia='
				),

				'distrito'		=>array(
						'campo'			=> 'distrito',
						'label'			=> 'Distrito',
						'tipo'			=> 'hid',
						'combo'			=> '1',
						'listable'		=> '1',
						'derecha'		=> '2',
						'style'			=> 'width:100px;',
						'validacion'	=> '0',
						'opciones'		=> 'id,nombre|geo_distritos'
				),

				'forma_contacto'	=>array(
						'campo'			=> 'forma_contacto',
						'label'			=> '¿Cómo nos has conocido?',
						'tipo'			=> 'com',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'periódico',
								'2'			=> 'revista',
								'3'			=> 'guía telefónica',
								'4'			=> 'radio',
								'5'			=> 'poster',
								'6'			=> 'web',
								'7'			=> 'eventos/promociones',
								'8'			=> 'recomendaciones',
								'9'			=> 'precio cliente',
								'10'			=> 'no sabe / otros'
						),
						'default'		=> '10'
				),

				'telefono_casa'	=>array(
						'campo'			=> 'telefono_casa',
						'label'			=> 'Teléfono Casa',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'derecha'		=> '1',
						'style'			=> 'width:100px;',
						'width'			=> '100px'
				),

				'telefono_oficina'=>array(
						'campo'			=> 'telefono_oficina',
						'label'			=> 'Teléfono Oficina',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'derecha'		=> '2',
						'style'			=> 'width:100px;',
						'width'			=> '100px'
				),

				'telefono_celular'=>array(
						'campo'			=> 'telefono_celular',
						'label'			=> 'Celular',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'derecha'		=> '2',
						'validacion'	=> '0',
						'style'			=> 'width:100px;',
						'width'			=> '100px'
				),

				'promociones'	=>array(
						'campo'			=> 'promociones',
						'label'			=> '¿Recibir Promociones?',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'Si',
								'0'			=> 'No'
						),
						'default'		=> '0'
				),

				'email'			=>array(
						'campo'			=> 'email',
						'label'			=> 'E-mail del Cliente',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'style'			=> 'width:150px;',
						'width'			=> '150px'
				),

				'password'		=>array(
						'campo'			=> 'password',
						'label'			=> 'Password',
						'tipo'			=> 'pas',
						'listable'		=> '1',
						'validacion'	=> '1',
						'style'			=> 'width:150px;',
						'width'			=> '150px',
						'unique'		=> '1'
				)
		),
		'grupo'			=> 'formularios'
);

/******************************************************************************************************************************************************/




?>