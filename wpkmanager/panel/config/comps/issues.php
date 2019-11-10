<?php

unset($objeto_tabla_comp);


$objeto_tabla_comp['EMPRESAS']=array_merge([
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

    'edicion_completa'=> '1',
    'calificacion'	=> '1',
    'importar_csv'	=> '0',
    // 'order_by'		=> 'orden desc, id_grupo desc',
    'width_listado'	=> '',
    'edicion_rapida'	=> '1',
    'crear_pruebas'	=> '0'
]);

$objeto_tabla_comp['PLANTAS']=array_merge([
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
    'edicion_completa'=> '1',
    'calificacion'	=> '1',
    'importar_csv'	=> '0',
    // 'order_by'		=> 'orden desc, id_grupo desc',
    'width_listado'	=> '',
    'edicion_rapida'	=> '1',
    'crear_pruebas'	=> '0'
]);

$objeto_tabla_comp['AREAS']=array_merge([
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
    'edicion_completa'=> '1',
    'calificacion'	=> '1',
    'importar_csv'	=> '0',
    // 'order_by'		=> 'orden desc, id_grupo desc',
    'width_listado'	=> '',
    'edicion_rapida'	=> '1',
    'crear_pruebas'	=> '0'
]);

$objeto_tabla_comp['SUBAREAS']=array_merge([
	'grupo'			=> 'configuracion',
	'titulo'		=> 'subareas',
	'nombre_singular'=> 'subarea',
	'nombre_plural'	=> 'subareas',
	'tabla'			=> 'subareas',
	'archivo'		=> 'subareas',
	// 'archivo_hijo'	=> 'productos_fotos',
	'prefijo'		=> 'emp',
	'eliminar'		=> '1',
	'editar'		=> '1',
	'crear'			=> '1',
	'duplicar'		=> '0',
	'altura_listado'	=> 'auto',
	'visibilidad'	=> '1',
	'buscar'		=> '1',
	'bloqueado'		=> '0',
	'menu'			=> '1',
	'menu_label'	=> 'subareas',
	'por_pagina'	=> '100',
	'me'			=> 'SUBAREAS',
	'orden'			=> '1',
	'crear_label'	=> '80px',
	'crear_txt'		=> '660px',
	'filtros_extra'	=> '',
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
	'edicion_completa'=> '1',
	'calificacion'	=> '1',
	'importar_csv'	=> '0',
	// 'order_by'		=> 'orden desc, id_grupo desc',
	'width_listado'	=> '',
	'edicion_rapida'	=> '1',
	'crear_pruebas'	=> '0'
]);

$objeto_tabla_comp['EQUIPOS_CATEGORIAS']=array_merge([
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
    'edicion_completa'=> '1',
    'calificacion'	=> '1',
    'importar_csv'	=> '0',
    // 'order_by'		=> 'orden desc, id_grupo desc',
    'width_listado'	=> '',
    'edicion_rapida'	=> '1',
    'crear_pruebas'	=> '0'
]);

$objeto_tabla_comp['EQUIPOS_SUBCATEGORIAS']=array_merge([
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
	'edicion_completa'=> '1',
	'calificacion'	=> '1',
	'importar_csv'	=> '0',
	// 'order_by'		=> 'orden desc, id_grupo desc',
	'width_listado'	=> '',
	'edicion_rapida'	=> '1',
	'crear_pruebas'	=> '0'
]);

$objeto_tabla_comp['EQUIPOS']=array_merge([
    'me'			=> 'EQUIPOS',
    'grupo'			=> 'configuracion',
    'titulo'		=> 'Equipos',
    'nombre_singular'=> 'equipo',
    'nombre_plural'	=> 'equipos',
    'tabla'			=> 'equipos',
    'archivo'		=> 'equipos',
    'prefijo'		=> 'emp',
    'menu_label'	=> 'Equipos',

    // 'archivo_hijo'	=> 'productos_fotos',
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
    'edicion_completa'=> '1',
    'calificacion'	=> '1',
    'importar_csv'	=> '0',
    // 'order_by'		=> 'orden desc, id_grupo desc',
    'width_listado'	=> '',
    'edicion_rapida'	=> '1',
    'crear_pruebas'	=> '0'
]);

$objeto_tabla_comp['ACTIVIDADES']=array_merge([
    'me'			=> 'ACTIVIDADES',
    'grupo'			=> 'configuracion',
    'titulo'		=> 'Actividades',
    'nombre_singular'=> 'actividad',
    'nombre_plural'	=> 'actividades',
    'tabla'			=> 'actividades',
    'archivo'		=> 'actividades',
    'prefijo'		=> 'emp',
    'menu_label'	=> 'Actividades',

    // 'archivo_hijo'	=> 'productos_fotos',
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
                'listable'		=> '0',
                'tipo'			=> 'hid',
                'opciones'		=> 'id,nombre|herramientas|order by nombre asc',
                'derecha'		=> '1',
                'tags'			=> '1',
                'queries'		=> '1',
                'validacion'	=> '0',
                // 'select_multiple'=> '1',
                'multi'			=> '1',
            ),
			'id_material'		=>array(
                'campo'			=> 'id_material',
                'label'			=> 'Materiales',
                'width'			=> '100px',
                'listable'		=> '0',
                'tipo'			=> 'hid',
                'opciones'		=> 'id,nombre|materiales|order by nombre asc',
                'derecha'		=> '1',
                'tags'			=> '1',
                'queries'		=> '1',
                'validacion'	=> '0',
                // 'select_multiple'=> '1',
                'multi'			=> '1',
            ),            	
        ]
    ),
    'edicion_completa'=> '1',
    'calificacion'	=> '1',
    'importar_csv'	=> '0',
    // 'order_by'		=> 'orden desc, id_grupo desc',
    'width_listado'	=> '',
    'edicion_rapida'	=> '1',
    'crear_pruebas'	=> '0'
]);





// prin($objeto_tabla_comp['PLANTAS']);exit();

/****************************************************** */
/****************************************************** */
/****************************************************** */
/****************************************************** */
/****************************************************** */
/****************************************************** */
/****************************************************** */
/****************************************************** */



$objeto_tabla_comp['MATERIALES']=array_merge([
    'grupo'			=> 'configuracion',
    'titulo'		=> 'Materiales',
    'nombre_singular'=> 'material',
    'nombre_plural'	=> 'materiales',
    'tabla'			=> 'materiales',
    'archivo'		=> 'materiales',
    // 'archivo_hijo'	=> 'productos_fotos',
    'prefijo'		=> 'emp',
    'eliminar'		=> '1',
    'editar'		=> '1',
    'crear'			=> '1',
    'duplicar'		=> '0',
    'altura_listado'	=> 'auto',
    'visibilidad'	=> '1',
    'buscar'		=> '1',
    'bloqueado'		=> '0',
    'menu'			=> '1',
    'menu_label'	=> 'Materiales',
    'por_pagina'	=> '100',
    'me'			=> 'MATERIALES',
    'orden'			=> '1',
    'crear_label'	=> '80px',
    'crear_txt'		=> '660px',
    'filtros_extra'	=> '',
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
    'edicion_completa'=> '1',
    'calificacion'	=> '1',
    'importar_csv'	=> '0',
    // 'order_by'		=> 'orden desc, id_grupo desc',
    'width_listado'	=> '',
    'edicion_rapida'	=> '1',
    'crear_pruebas'	=> '0'
]);

$objeto_tabla_comp['HERRAMIENTAS']=array_merge([
    'grupo'			=> 'configuracion',
    'titulo'		=> 'Herramientas',
    'nombre_singular'=> 'herramienta',
    'nombre_plural'	=> 'herramientas',
    'tabla'			=> 'herramientas',
    'archivo'		=> 'herramientas',
    // 'archivo_hijo'	=> 'productos_fotos',
    'prefijo'		=> 'emp',
    'eliminar'		=> '1',
    'editar'		=> '1',
    'crear'			=> '1',
    'duplicar'		=> '0',
    'altura_listado'	=> 'auto',
    'visibilidad'	=> '1',
    'buscar'		=> '1',
    'bloqueado'		=> '0',
    'menu'			=> '1',
    'menu_label'	=> 'Herramientas',
    'por_pagina'	=> '100',
    'me'			=> 'HERRAMIENTAS',
    'orden'			=> '1',
    'crear_label'	=> '80px',
    'crear_txt'		=> '660px',
    'filtros_extra'	=> '',
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
    'edicion_completa'=> '1',
    'calificacion'	=> '1',
    'importar_csv'	=> '0',
    // 'order_by'		=> 'orden desc, id_grupo desc',
    'width_listado'	=> '',
    'edicion_rapida'	=> '1',
    'crear_pruebas'	=> '0'
]);

$objeto_tabla_comp=tabla_chain($objeto_tabla_comp,
    
    array_merge(
        array_merge(
            $objeto_chain['issues']['filter'],
            $objeto_chain['issues']['activities']
        )
    )
    
);

$objeto_tabla_comp['TECNICOS_PERSONS']=array_merge([
    'grupo'			=> 'configuracion',
    'titulo'		=> 'Tecnicos',
    'nombre_singular'=> 'técnico',
    'nombre_plural'	=> 'técnicos',
    'tabla'			=> 'tecnicos_persons',
    'archivo'		=> 'tecnicos_persons',
    'archivo_hijo'	=> 'productos_fotos',
    'prefijo'		=> 'tec',
    'eliminar'		=> '1',
    'editar'		=> '1',
    'crear'			=> '1',
    'duplicar'		=> '0',
    'altura_listado'	=> 'auto',
    'visibilidad'	=> '1',
    'buscar'		=> '1',
    'bloqueado'		=> '0',
    'menu'			=> '1',
    'menu_label'	=> 'Tecnicos',
    'por_pagina'	=> '100',
    'me'			=> 'TECNICOS_PERSONS',
    'orden'			=> '1',
    'crear_label'	=> '80px',
    'crear_txt'		=> '660px',
    'filtros_extra'	=> '',
    'campos'		=>array_merge(
        $objeto_tabla_common['base'],
        $objeto_tabla_common['person'],[

        ]
    ),
    'edicion_completa'=> '1',
    'calificacion'	=> '1',
    'importar_csv'	=> '0',
    // 'order_by'		=> 'orden desc, id_grupo desc',
    'width_listado'	=> '',
    'edicion_rapida'	=> '1',
    'crear_pruebas'	=> '0'
]);

$objeto_tabla_comp['MAN_TIPOS']=array_merge([
    'grupo'			=> 'configuracion',
    'titulo'		=> 'Tipos de mantenimientos',
    'nombre_singular'=> 'tipo',
    'nombre_plural'	=> 'tipos',
    'tabla'			=> 'man_tipos',
    'archivo'		=> 'man_tipos',
    // 'archivo_hijo'	=> 'productos_fotos',
    'prefijo'		=> 'mantip',
    'eliminar'		=> '1',
    'editar'		=> '1',
    'crear'			=> '1',
    'duplicar'		=> '0',
    'altura_listado'	=> 'auto',
    'visibilidad'	=> '1',
    'buscar'		=> '1',
    'bloqueado'		=> '0',
    'menu'			=> '1',
    'menu_label'	=> 'Tipos de mantenimientos',
    'por_pagina'	=> '100',
    'me'			=> 'MAN_TIPOS',
    'orden'			=> '1',
    'crear_label'	=> '80px',
    'crear_txt'		=> '660px',
    'filtros_extra'	=> '',
    'campos'		=>array_merge(
        $objeto_tabla_common['base'],
        [
            'nombre'		=>array(
                    'campo'			=> 'nombre',
                    'label'			=> 'Modelo',
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
    'edicion_completa'=> '1',
    'calificacion'	=> '1',
    'importar_csv'	=> '0',
    // 'order_by'		=> 'orden desc, id_grupo desc',
    'width_listado'	=> '',
    'edicion_rapida'	=> '1',
    'crear_pruebas'	=> '0'
]);





return $objeto_tabla_comp;