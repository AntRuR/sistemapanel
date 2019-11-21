<?php

unset($objeto_tabla_comp);

$objecto_tabla_common['issues']['config']=[

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

$objeto_tabla_comp['EMPRESAS']=array_merge(
    [
        'me'			=> 'EMPRESAS',
        'grupo'			=> 'configuracion',
        'seccion'		=> 'elementos',
        'titulo'		=> 'Empresas',
        'nombre_singular'=> 'empresa',
        'nombre_plural'	=> 'empresas',
        'tabla'			=> 'empresas',
        'archivo'		=> 'empresas',
        // 'archivo_hijo'	=> 'productos_fotos',
        'prefijo'		=> 'emp',
        'menu_label'	=> 'Empresas',
        'campos'		=>array_merge(
            $objeto_tabla_common['base'],
            [
                'nombre'		=>array(
                        'campo'			=> 'nombre',
                        'label'			=> 'Nombre',
                        'unique'		=> '0',
                        'width'			=> '130px',
                        'tipo'			=> 'inp',
                        'listable'		=> '1',
                        'validacion'	=> '1',
                        'like'			=> '0',
                        'size'			=> '140',
                        'style'			=> 'width:450px;',
                        'tags'			=> '1',
                        'derecha'		=> '1'
                ),
            ]
        ),
    ],
    $objecto_tabla_common['issues']['config']
);

$objeto_tabla_comp['PLANTAS']=array_merge(
    [
        'me'			=> 'PLANTAS',
        'grupo'			=> 'configuracion',
        'titulo'		=> 'Plantas',
        'nombre_singular'=> 'planta',
        'nombre_plural'	=> 'plantas',
        'tabla'			=> 'plantas',
        'archivo'		=> 'plantas',
        // 'archivo_hijo'	=> 'productos_fotos',
        'prefijo'		=> 'emp',
        'menu_label'	=> 'Plantas',
        'campos'		=>array_merge(
            $objeto_tabla_common['base'],
            [
                'nombre'		=>array(
                        'campo'			=> 'nombre',
                        'label'			=> 'Nombre',
                        'unique'		=> '0',
                        'width'			=> '130px',
                        'tipo'			=> 'inp',
                        'listable'		=> '1',
                        'validacion'	=> '1',
                        'like'			=> '0',
                        'size'			=> '140',
                        'style'			=> 'width:450px;',
                        'tags'			=> '1',
                        'derecha'		=> '1'
                ),		
            ]
        ),
    ],
    $objecto_tabla_common['issues']['config']
);

$objeto_tabla_comp['AREAS']=array_merge(
    [
        'me'			=> 'AREAS',
        'grupo'			=> 'configuracion',
        'titulo'		=> 'Areas',
        'nombre_singular'=> 'area',
        'nombre_plural'	=> 'areas',
        'tabla'			=> 'areas',
        'archivo'		=> 'areas',
        // 'archivo_hijo'	=> 'productos_fotos',
        'prefijo'		=> 'emp',
        'menu_label'	=> 'Areas',
        'campos'		=>array_merge(
            $objeto_tabla_common['base'],
            [
                'nombre'		=>array(
                        'campo'			=> 'nombre',
                        'label'			=> 'Nombre',
                        'unique'		=> '0',
                        'width'			=> '130px',
                        'tipo'			=> 'inp',
                        'listable'		=> '1',
                        'validacion'	=> '1',
                        'like'			=> '0',
                        'size'			=> '140',
                        'style'			=> 'width:450px;',
                        'tags'			=> '1',
                        'derecha'		=> '1'
                ),		
            ]
        ),
    ],
    [    
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
        'calificacion'	=> '1',
        'importar_csv'	=> '0',
        // 'order_by'		=> 'orden desc, id_grupo desc',
        'width_listado'	=> '',
        'edicion_rapida'	=> '1',
        'crear_pruebas'	=> '0'
    ]
);

$objeto_tabla_comp['SUBAREAS']=array_merge(
    [
        'me'			=> 'SUBAREAS',
        'grupo'			=> 'configuracion',
        'titulo'		=> 'subareas',
        'nombre_singular'=> 'subarea',
        'nombre_plural'	=> 'subareas',
        'tabla'			=> 'subareas',
        'archivo'		=> 'subareas',
        // 'archivo_hijo'	=> 'productos_fotos',
        'prefijo'		=> 'emp',
        'menu_label'	=> 'subareas',

        'campos'		=>array_merge(
            $objeto_tabla_common['base'],
            [
                'nombre'		=>array(
                        'campo'			=> 'nombre',
                        'label'			=> 'Nombre',
                        'unique'		=> '0',
                        'width'			=> '130px',
                        'tipo'			=> 'inp',
                        'listable'		=> '1',
                        'validacion'	=> '1',
                        'like'			=> '0',
                        'size'			=> '140',
                        'style'			=> 'width:450px;',
                        'tags'			=> '1',
                        'derecha'		=> '1'
                ),		
            ]
        ),    
    ],
    $objecto_tabla_common['issues']['config']
);

$objeto_tabla_comp['EQUIPOS_CATEGORIAS']=array_merge(
    [
        'me'			=> 'EQUIPOS_CATEGORIAS',
        'grupo'			=> 'configuracion',
        'titulo'		=> 'Categorías',
        'nombre_singular'=> 'categoria',
        'nombre_plural'	=> 'categoria',
        'tabla'			=> 'equipos_categorias',
        'archivo'		=> 'equipos_categorias',
        // 'archivo_hijo'	=> 'productos_fotos',
        'prefijo'		=> 'emp',
        'menu_label'	=> 'Categorías',
        'campos'		=>array_merge(
            $objeto_tabla_common['base'],
            [
                'nombre'		=>array(
                        'campo'			=> 'nombre',
                        'label'			=> 'Nombre',
                        'unique'		=> '0',
                        'width'			=> '130px',
                        'tipo'			=> 'inp',
                        'listable'		=> '1',
                        'validacion'	=> '1',
                        'like'			=> '0',
                        'size'			=> '140',
                        'style'			=> 'width:450px;',
                        'tags'			=> '1',
                        'derecha'		=> '1'
                ),		
            ]
        ),
    ],
    $objecto_tabla_common['issues']['config']
);

$objeto_tabla_comp['EQUIPOS_SUBCATEGORIAS']=array_merge(
    [
        'me'			=> 'EQUIPOS_SUBCATEGORIAS',
        'grupo'			=> 'configuracion',
        'titulo'		=> 'Sub Categorías',
        'nombre_singular'=> 'subcategoria',
        'nombre_plural'	=> 'subcategoria',
        'tabla'			=> 'equipos_subcategorias',
        'archivo'		=> 'equipos_subcategorias',
        // 'archivo_hijo'	=> 'productos_fotos',
        'prefijo'		=> 'emp',
        'menu_label'	=> 'Sub Categorías',
        'campos'		=>array_merge(
            $objeto_tabla_common['base'],
            [
                'nombre'		=>array(
                        'campo'			=> 'nombre',
                        'label'			=> 'Nombre',
                        'unique'		=> '0',
                        'width'			=> '130px',
                        'tipo'			=> 'inp',
                        'listable'		=> '1',
                        'validacion'	=> '1',
                        'like'			=> '0',
                        'size'			=> '140',
                        'style'			=> 'width:450px;',
                        'tags'			=> '1',
                        'derecha'		=> '1'
                ),		
            ]
        ),
    ],
    $objecto_tabla_common['issues']['config']
);

$objeto_tabla_comp['EQUIPOS']=array_merge(
    [
        'me'			=> 'EQUIPOS',
        'grupo'			=> 'configuracion',
        'titulo'		=> 'Equipos',
        'nombre_singular'=> 'equipo',
        'nombre_plural'	=> 'equipos',
        'tabla'			=> 'equipos',
        'archivo'		=> 'equipos',
        'prefijo'		=> 'emp',
        'menu_label'	=> 'Equipos',
        'campos'		=>array_merge(
            $objeto_tabla_common['base'],
            [
                'nombre'		=>array(
                        'campo'			=> 'nombre',
                        'label'			=> 'Nombre',
                        'unique'		=> '0',
                        'width'			=> '130px',
                        'tipo'			=> 'inp',
                        'listable'		=> '1',
                        'validacion'	=> '1',
                        'like'			=> '0',
                        'size'			=> '140',
                        'style'			=> 'width:450px;',
                        'tags'			=> '1',
                        'derecha'		=> '1'
                ),			
            ]
        ),
    ],
    $objecto_tabla_common['issues']['config']
);

$objeto_tabla_comp['ACTIVIDADES']=array_merge(
    [
        'me'			=> 'ACTIVIDADES',
        'grupo'			=> 'configuracion',
        'titulo'		=> 'Actividades',
        'nombre_singular'=> 'actividad',
        'nombre_plural'	=> 'actividades',
        'tabla'			=> 'actividades',
        'archivo'		=> 'actividades',
        'prefijo'		=> 'emp',
        'menu_label'	=> 'Actividades',
        'campos'		=>array_merge(
            $objeto_tabla_common['base'],
            [
                'nombre'		=>array(
                        'campo'			=> 'nombre',
                        'label'			=> 'Nombre',
                        'unique'		=> '0',
                        'width'			=> '130px',
                        'tipo'			=> 'inp',
                        'listable'		=> '1',
                        'validacion'	=> '1',
                        'like'			=> '0',
                        'size'			=> '140',
                        'style'			=> 'width:450px;',
                        'tags'			=> '1',
                        'derecha'		=> '1',
                        // 'connect'       => [
                        //     ['obj'=>'HERRAMIENTAS'],
                        //     ['obj'=>'MATERIALES']
                        // ],
                ),
                'id_herramienta'		=>array(
                    'campo'			=> 'id_herramienta',
                    'label'			=> 'Herramientas',
                    'width'			=> '100px',
                    'listable'		=> '1',
                    'tipo'			=> 'hid',
                    'opciones'		=> 'id,nombre|herramientas|order by nombre asc',
                    'derecha'		=> '1',
                    'tags'			=> '1',
                    // 'queries'		=> '1',
                    'validacion'	=> '0',
                    // 'select_multiple'=> '1',
                    'multi'			=> '1',
                ),
                'id_material'		=>array(
                    'campo'			=> 'id_material',
                    'label'			=> 'Materiales',
                    'width'			=> '100px',
                    'listable'		=> '1',
                    'tipo'			=> 'hid',
                    'opciones'		=> 'id,nombre|materiales|order by nombre asc',
                    'derecha'		=> '1',
                    'tags'			=> '1',
                    // 'queries'		=> '1',
                    'validacion'	=> '0',
                    // 'select_multiple'=> '1',
                    'multi'			=> '1',
                ),            	             
            ]
        ),
    ],
    $objecto_tabla_common['issues']['config']
);





// prin($objeto_tabla_comp['PLANTAS']);exit();

/****************************************************** */
/****************************************************** */
/****************************************************** */
/****************************************************** */
/****************************************************** */
/****************************************************** */
/****************************************************** */
/****************************************************** */



$objeto_tabla_comp['MATERIALES']=array_merge(
    [
        'me'			=> 'MATERIALES',
        'grupo'			=> 'configuracion',
        'titulo'		=> 'Materiales',
        'nombre_singular'=> 'material',
        'nombre_plural'	=> 'materiales',
        'tabla'			=> 'materiales',
        'archivo'		=> 'materiales',
        // 'archivo_hijo'	=> 'productos_fotos',
        'prefijo'		=> 'emp',
        'menu_label'	=> 'Materiales',
        'campos'		=>array_merge(
            $objeto_tabla_common['base'],
            [
                'nombre'		=>array(
                        'campo'			=> 'nombre',
                        'label'			=> 'Nombre',
                        'unique'		=> '0',
                        'width'			=> '130px',
                        'tipo'			=> 'inp',
                        'listable'		=> '1',
                        'validacion'	=> '1',
                        'like'			=> '0',
                        'size'			=> '140',
                        'style'			=> 'width:450px;',
                        'tags'			=> '1',
                        'derecha'		=> '1'
                ),

				'costo_unitario'		=>array(
                    'campo'			=> 'costo_unitario',
                    'label'			=> 'Costo Unitario',
                    'tipo'			=> 'inp',
                    'listable'		=> '0',
                    'width'			=> '100px',
                    'validacion'	=> '0',
                    'variable'		=> 'float',
                    'derecha'		=> '1',
                    'size'			=> '8',
                    'style'			=> 'width:100px;',
                    'format'		=> 'currency'
                ),   
                
				'tipo_unidad'	=>array(
                    'campo'			=> 'tipo_unidad',
                    'label'			=> 'Tipo de Unidad',
                    'tipo'			=> 'com',
                    'default'		=> '0',
                    'opciones'		=>array(
                            'litros'		=> 'litros',
                            'galones'		=> 'galones',
                            'unidades'		=> 'unidades',
                    ),
                    'listable'		=> '0',
                    'width'			=> '50px',
                    'validacion'	=> '0',
                    'variable'		=> 'float',
                    'derecha'		=> '2',
                    'size'			=> '8',
                    'queries'		=> '0'
                ),                
            ]
        ),
    ],
    $objecto_tabla_common['issues']['config']
);

$objeto_tabla_comp['HERRAMIENTAS']=array_merge(
    [
        'me'			=> 'HERRAMIENTAS',
        'grupo'			=> 'configuracion',
        'titulo'		=> 'Herramientas',
        'nombre_singular'=> 'herramienta',
        'nombre_plural'	=> 'herramientas',
        'tabla'			=> 'herramientas',
        'archivo'		=> 'herramientas',
        // 'archivo_hijo'	=> 'productos_fotos',
        'prefijo'		=> 'emp',
        'menu_label'	=> 'Herramientas',
        'campos'		=>array_merge(
            $objeto_tabla_common['base'],
            [
                'nombre'		=>array(
                        'campo'			=> 'nombre',
                        'label'			=> 'Nombre',
                        'unique'		=> '0',
                        'width'			=> '130px',
                        'tipo'			=> 'inp',
                        'listable'		=> '1',
                        'validacion'	=> '1',
                        'like'			=> '0',
                        'size'			=> '140',
                        'style'			=> 'width:450px;',
                        'tags'			=> '1',
                        'derecha'		=> '2'
                ),
            ]
        ),
    ],
    $objecto_tabla_common['issues']['config']
);

$objeto_tabla_comp=tabla_chain($objeto_tabla_comp,
    
    array_merge(
        array_merge(
            $objeto_chain['issues']['filter'],
            $objeto_chain['issues']['activities']
        )
    )

);


// prin($objeto_tabla_comp['ACTIVIDADES']);




return $objeto_tabla_comp;