<?php

/*

$objecto_tabla_common['products']['config']=[

    'eliminar'		=> '1',
    'editar'		=> '1',
    'crear'			=> '1',
    'duplicar'		=> '0',
    'altura_listado'	=> 'auto',
    'visibilidad'	=> '1',
    'buscar'		=> '1',
    'bloqueado'		=> '0',
    'menu'			=> '1',
    'por_pagina'	=> '100',
    'orden'			=> '1',
    'crear_label'	=> '80px',
    'crear_txt'		=> '660px',
    'filtros_extra'	=> '',

    'edicion_completa'=> '1',
    'edicion_rapida'=> '0',
    'calificacion'	=> '1',
    'importar_csv'	=> '0',
    // 'order_by'		=> 'orden desc, id_grupo desc',
    'width_listado'	=> '',
    'crear_pruebas'	=> '0'

];

*/

unset($objeto_tabla_comp_comp);

$objeto_tabla_comp['PRODUCTOS_GRUPOS']=array_merge(
    [
        'me'			=> 'PRODUCTOS_GRUPOS',
        'titulo'		=> 'Grupos',
        'nombre_singular'=> 'grupo',
        'nombre_plural'	=> 'grupos',
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
        'menu_label'	=> 'Grupos',
        'crear_label'	=> '80px',
        'crear_txt'		=> '400px',
        'edicion_completa'=> '1',
        'orden'			=> '1',],
    [
        'campos'		=>array(
            'id'			=>array(
                    'campo'			=> 'id',
                    'tipo'			=> 'id'
            ),

            'fecha_creacion'	=>array(
                    'campo'			=> 'fecha_creacion',
                    'tipo'			=> 'fcr'
            ),

            'fecha_edicion'	=>array(
                    'campo'			=> 'fecha_edicion',
                    'tipo'			=> 'fed'
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
        ),],
    [
        'grupo'			=> 'productos',
        'edicion_rapida'	=> '0',
    ]
);


$objeto_tabla_comp['PRODUCTOS_SUBGRUPOS']=array_merge(
    [
        'titulo'		=> 'Categorías',
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
        'edicion_completa'=> '1',
        'por_pagina'	=> '100',
        'edicion_rapida'=> '0',
        'orden'			=> '0',
    ],
    [
        'campos'		=>array(
            'id'			=>array(
                    'campo'			=> 'id',
                    'tipo'			=> 'id'
            ),

            'fecha_creacion'	=>array(
                    'campo'			=> 'fecha_creacion',
                    'tipo'			=> 'fcr'
            ),

            'fecha_edicion'	=>array(
                    'campo'			=> 'fecha_edicion',
                    'tipo'			=> 'fed'
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
            ),
            'url'		=>array(
                    'campo'			=> 'url',
                    'label'			=> 'Url',
                    'tipo'			=> 'inp',
                    'width'			=> '300px',
                    // 'unique'		=> '1',
                    'listable'		=> '1',
                    'validacion'	=> '1',
                    // 'constante'		=> '1',
            ),	
            /*
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
            */
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
    ],
    [
        'grupo'			=> 'productos',
        // 'group'			=> 'id_grupo',
        'order_by'		=> 'nombre asc',
    ]
);


$objeto_tabla_comp['PRODUCTOS_GROUPS']=array_merge(
    [
        'titulo'		=> 'Sub Categorías',
        'nombre_singular'=> 'subcategoria',
        'nombre_plural'	=> 'subcategorias',
        'tabla'			=> 'productos_groups',
        'archivo'		=> 'productos_groups',
        'archivo_hijo'	=> 'PRODUCTOS_GROUPS',
        'prefijo'		=> 'proogru',
        'eliminar'		=> '1',
        'editar'		=> '1',
        'crear'			=> '1',
        'visibilidad'	=> '1',
        'buscar'		=> '0',
        'bloqueado'		=> '0',
        'menu'			=> '1',
        'por_pagina'	=> '100',
        'menu_label'	=> 'Sub Categorías',
        'me'			=> 'PRODUCTOS_GROUPS',
        'orden'			=> '0',
        'order_by'		=> 'name asc',
    ],
    [
        'campos'		=>array(
            'id'			=>array(
                    'campo'			=> 'id',
                    'tipo'			=> 'id'
            ),
            'fecha_creacion'	=>array(
                    'campo'			=> 'fecha_creacion',
                    'tipo'			=> 'fcr'
            ),
            'fecha_edicion'	=>array(
                    'campo'			=> 'fecha_edicion',
                    'tipo'			=> 'fed'
            ),
            'posicion'		=>array(
                    'campo'			=> 'posicion',
                    'tipo'			=> 'pos'
            ),
            'visibilidad'	=>array(
                    'campo'			=> 'visibilidad',
                    'tipo'			=> 'vis'
            ),
            /*
            'id_grupo'		=>array(
                    'campo'			=> 'id_grupo',
                    'tipo'			=> 'hid',
                    'listable'		=> '0',
                    'validacion'	=> '0',
                    'default'		=> '[id]',
                    'foreig'		=> '1',
                    'foreigkey'		=> 'PRODUCTOS_GROUPS',
                    'opciones'		=> 'id,name|productos_subgrupos|where id_grupo=0'
            ),
            */					
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
                    <a  rel="subs" href="custom/producto_groups.php?id=[id]">{select count(*) from producto_groups where id_grupo=[id]}  grupos</a>
                    <a  rel="subs" href="custom/productos_items.php?id=[id]">{select count(*) from productos_items where id_grupo=[id]}  páginas</a>
                    ',
                    'style'			=> 'width:70%;',
                    // 'constante'		=> '1',
            ),
            'page'			=>array(
                    'campo'			=> 'page',
                    'tipo'			=> 'page'
            )
        ),
    ],
    [
        'edicion_completa'=> '1',
        'edicion_rapida'=> '0',            
        'grupo'			=> 'productos',
        'por_linea'		=> '1',
        'disabled'		=> '0',
        'page'			=> '0',
    ]
);


$objeto_tabla_comp['PRODUCTOS_ITEMS']=array_merge(
    [
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
        'por_pagina'	=> '200',
        'orden'			=> '1',
        // 'oncreate'		=> 'base2/after_productos_items.php',
        // 'onedit'		=> 'base2/after_productos_items.php',
    ],
    [
        'campos'		=>array(
            'id'			=>array(
                    'campo'			=> 'id',
                    'tipo'			=> 'id'
            ),

            'fecha_creacion'	=>array(
                    'campo'			=> 'fecha_creacion',
                    'tipo'			=> 'fcr'
            ),

            'fecha_edicion'	=>array(
                    'campo'			=> 'fecha_edicion',
                    'tipo'			=> 'fed'
            ),

            'posicion'		=>array(
                    'campo'			=> 'posicion',
                    'tipo'			=> 'pos'
            ),

            'visibilidad'	=>array(
                    'campo'			=> 'visibilidad',
                    'tipo'			=> 'vis'
            ),

            /*
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
                    'width'			=> '130px',
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
                    'width'			=> '130px',
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
                    'queries'		=> '1',				
                    'disabled'		=> '1'						
            ),
            */

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
                    'controles'		=> '<a rel="subs" href="custom/productos_fotos.php?id=[id]">{select count(*) from productos_fotos where id_item=[id]} fotos</a>'
            ),

            'url'		=>array(
                    'campo'			=> 'url',
                    'label'			=> 'Url',
                    'tipo'			=> 'inp',
                    'width'			=> '200px',
                    'style'			=> 'width:200px;',
                    'listable'		=> '1',
                    'size'			=> '160',
                    'disabled'		=> '0'
            ),

            'marca'			=>array(
                    'campo'			=> 'marca',
                    'label'			=> 'Marca',
                    'tipo'			=> 'inp',
                    'listable'		=> '1',
                    'validacion'	=> '0',
                    'width'			=> '90px',
                    'like'			=> '1',
                    'style'			=> 'width:150px;',
                    'derecha'		=> '2'
            ),
            'ver_home'		=>array(
                    'campo'			=> 'ver_home',
                    'label'			=> 'Ver en HOME',
                    'width'			=> '70px',
                    'tipo'			=> 'com',
                    'radio'			=> '1',
                    'listable'		=> '1',
                    'validacion'	=> '0',
                    'opciones'		=>array(
                            '1'			=> 'si',
                            '0'			=> 'no'
                    ),
                    'default'		=> '1',
            ),					
            'codigo'		=>array(
                    'campo'			=> 'codigo',
                    'label'			=> 'cod.',
                    'tipo'			=> 'inp',
                    'listable'		=> '0',
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

            'ficha'	=>array(
                    'campo'			=> 'ficha',
                    'label'			=> 'Ficha',
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
                    'default'		=> '2',
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
                    'listable'		=> '1',
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
    ],
    [
        'grupo'			=> 'productos',
        'edicion_rapida'	=> '0',
        'calificacion'	=> '0',
        'edicion_completa'=> '1',
        'duplicar'		=> '0',
        'order_by'		=> 'nombre asc',
    ]
);


$objeto_tabla_comp['PRODUCTOS_FOTOS']=array(
    'titulo'		=> 'Fotos de {select nombre from productos_items where id=[id]}',
    'nombre_singular'=> 'photo',
    'nombre_plural'	=> 'photos',
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
                'disabled'		=> 0
            ),	            
    ),
    'grupo'			=> 'productos',
    'por_linea'		=> '5'
);




$objeto_tabla_comp['PRODUCTOS_ITEMS_IMPOR']=array(
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
    'por_pagina'	=> '100',
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
    'duplicar'		=> '0',
    'disabled'	=> '1'
);


$objeto_tabla_comp['PRODUCTOS_FOTOS_IMPOR']=array(
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
                'disabled'		=> 0
            ),	            
    ),
    'grupo'			=> 'productos',
    'por_linea'		=> '5'
);




$objeto_tabla_comp['PRODUCTOS_ITEMS_DESCU']=array(
    'titulo'		=> 'Ofertas',
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
    'menu_label'	=> 'Ofertas',
    'por_pagina'	=> '100',
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
                    'width'			=> '300px',
                    'like'			=> '1',
                    'style'			=> 'width:250px;',
                    'derecha'		=> '1',
                    'controles'		=> '<a href="custom/productos_fotos_descu.php?id=[id]">{select count(*) from productos_fotos_descu where id_item=[id]} fotos</a>'
            ),
            'url'		=>array(
                'campo'			=> 'url',
                'label'			=> 'Url',
                'tipo'			=> 'inp',
                'width'			=> '200px',
                'style'			=> 'width:200px;',
                'listable'		=> '1',
                'size'			=> '160',
                'disabled'		=> '0'
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
            'precio_oferta'		=>array(
                    'campo'			=> 'precio_oferta',
                    'label'			=> 'Precio Oferta',
                    'tipo'			=> 'inp',
                    'listable'		=> '1',
                    'width'			=> '50px',
                    'validacion'	=> '0',
                    'variable'		=> 'float',
                    'derecha'		=> '2',
                    'size'			=> '8',
                    'onchange'		=> '$("in_oferta").value=( $("in_precio").value - $("in_precio_oferta").value )/$("in_precio").value  * 100'	,
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
                    'size'			=> '8',
                    'frozen'			=> '1',
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


$objeto_tabla_comp['PRODUCTOS_FOTOS_DESCU']=array(
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
                'disabled'		=> 0
            ),            
    ),
    'grupo'			=> 'productos',
    'por_linea'		=> '5'
);



$objeto_tabla_comp=tabla_chain($objeto_tabla_comp,
	
	array_merge(
		$objeto_chain['products']
	)
	
);

return $objeto_tabla_comp;