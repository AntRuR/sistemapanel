<?php

unset($objeto_tabla_comp);

/******************************************************************************************************************************************************/
$objeto_tabla_comp['PAGINAS_GROUPS']=array(
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
                    'setup'			=> 'quienes-somos,servicios',
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

$objeto_tabla_comp['PAGINAS']=array(
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


    <a href="custom/paginas.php?id=9">Quienes Somos</a>
    <a href="custom/paginas.php?id=3">Servicios</a>
    



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
            'name'		=>array(
                    'campo'			=> 'name',
                    'label'			=> 'Título',
                    'tipo'			=> 'inp',
                    'unique'		=> '1',
                    'listable'		=> '1',
                    'validacion'	=> '1',
                    'width'			=> '150px',
                    'style'			=> 'width:70%;'	,
                    'controles'		=> '<a  href="custom/paginas_photos.php?id=[id]">{select count(*) from paginas_photos where id_grupo=[id]} fotos</a>'					
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

$objeto_tabla_comp['PAGINAS_PHOTOS']=array(
        'me'			=> 'PAGINAS_PHOTOS',
        'titulo'		=> 'Fotos de {select nombre from productos_items where id=[id]}',
        'nombre_singular'=> 'photo',
        'nombre_plural'	=> 'photos',
        'tabla'			=> 'paginas_photos',
        'archivo'		=> 'paginas_photos',
        'prefijo'		=> 'pafot',
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
                        'carpeta'		=> 'pagfot_imas',
                        'tamanos'		=> '100x200,190x190,400x300,800x800',
                        'tamano_listado'	=> '1',
                        'width'			=> '150px',
                        'style'			=> 'width:150px,height:auto,'
                ),
    
                'name'=>array(
                        'campo'			=> 'name',
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




$objeto_tabla_comp['BANNERS_FOTOS']=array(
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
                    'controles'		=> '<a rel="subs"  href="custom/banners_fotos_fotos.php?id=[id]">{select count(*) from banners_fotos_fotos where id_grupo=[id]}  fotos</a>'
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

$objeto_tabla_comp['BANNERS_FOTOS_FOTOS']=array(
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
            'adjunto'			=>array(
                    'campo'			=> 'adjunto',
                    'label'			=> 'Adjunto',
                    'tipo'			=> 'sto',
                    'width'			=> '300px',
                    'style'			=> 'width:200px;',
                    'listable'		=> '1',
                    'validacion'	=> '0',
                    'prefijo'		=> 'doc',
                    'carpeta'		=> 'doc_fil',
                    'name'			=> 'nombre',
                    'enlace'		=> 'down',
                    'disabled'		=> '1'
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



$objeto_tabla_comp['GALLERIES_PHOTOS']=array(
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

$objeto_tabla_comp['GALLERIES_PHOTOS_PHOTOS']=array(
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



$objeto_tabla_comp['GALLERIES_VIDEOS']=array(
    'titulo'		=> 'Galerías de video',
    'nombre_singular'=> 'galería',
    'nombre_plural'	=> 'galerias',
    'tabla'			=> 'galleries_videos',
    'archivo'		=> 'galleries_videos',
    'archivo_hijo'	=> 'galleries_videos_videos',
    'prefijo'		=> 'gal',
    'eliminar'		=> '1',
    'editar'		=> '1',
    'edicion_completa'=> '1',
    'edicion_rapida'	=> '0',
    'crear'			=> '1',
    'visibilidad'	=> '1',
    'buscar'		=> '0',
    'bloqueado'		=> '0',
    'menu'			=> '1',
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
                    // 'constante'		=> '1',
                    'validacion'	=> '1',
                    'controles'		=> '<a  href="custom/galleries_videos_videos.php?id=[id]">{select count(*) from galleries_videos_videos where id_grupo=[id]}  fotos</a>

                        '
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

$objeto_tabla_comp['GALLERIES_VIDEOS_VIDEOS']=array(
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



$objeto_tabla_comp['PAGES_PHOTOS']=array(
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
    'menu'			=> '0',
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

$objeto_tabla_comp['PAGES_PHOTOS_PHOTOS']=array(
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


$objeto_tabla_comp['NEWS']=array(
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


$objeto_tabla_comp['LINKS']=array(
    'titulo'		=> 'Marcas',
    'nombre_singular'=> 'marca',
    'nombre_plural'	=> 'marcas',
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
    'menu_label'	=> 'Marcas',
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
                    'validacion'	=> '0',
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
//     'disabled'		=> '1',
);

/******************************************************************************************************************************************************/

return $objeto_tabla_comp;
