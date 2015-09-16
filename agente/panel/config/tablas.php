<?php 

/******************************************************************************************************************************************************/


 

//usuarios
$objeto_tabla['USUARIOS_ACCESO'] =array(
            'titulo'  =>    'Administración de Acceso de Usuarios',
            'nombre_singular'  =>  'usuario',
            'nombre_plural'  =>  'usuarios',
            'tabla'    =>    'usuarios_acceso',
            'archivo'  =>    'usuarios_acceso',
            'prefijo'  =>    'usu',
            'eliminar'  =>    '1',
            'editar'  =>    '1',
            'buscar'  =>    '0',
            'menu'    =>    '0',
            'menu_label'=>    'Usuarios',
            'me'    =>    'USUARIOS_ACCESO',
            'orden'    =>    '1',  //0 ascendente 1 descendente
            'campos'  =>    array(
                        // campos internos  id,fcr,fed
                        array('campo'=>'id',        'tipo'=>'id'),
                        array('campo'=>'fecha_creacion',  'tipo'=>'fcr'),
                        array('campo'=>'fecha_edicion',    'tipo'=>'fed'),
                        // campos de orden  pos,vis
                        array('campo'=>'posicion',    'tipo'=>'pos'),
                        array('campo'=>'visibilidad',  'tipo'=>'vis'),
                        // campos particulares
                        array('campo'=>'nombre',
                            'label'=>'Nombre',
                            'tipo'=>'inp',
                            'listable'=>'1',
                            'validacion'=>'0',
                            'sesion_login'=>'1'
                            ),
                        array('campo'=>'password',
                            'label'=>'Password',
                            'tipo'=>'pas',
                            'listable'=>'1',
                            'validacion'=>'1',
                            'sesion_password'=>'1'
                            ),
                        /*
                        array('campo'=>'fecha',
                            'label'=>'Fecha',
                            'tipo'=>'fch',
                            'listable'=>'1',
                            'validacion'=>'1'
                            ),
                        */
                        array('campo'=>'tipo',
                            'label'=>'Tipo',
                            'tipo'=>'com',
                            'listable'=>'1',
                            'validacion'=>'1',
                            'opciones'=>'administrador,usuario'
                            )
                        // campo para fotos
                        /*
                        array('campo'=>'file',
                            'label'=>'Foto',
                            'tipo'=>'img',
                            'listable'=>'1',
                            'validacion'=>'1',
                            'prefijo'=>'usuario',
                            'carpeta'=>'usuario_imas',
                            'tamanos'=>'70x70,128x135,328x235',
                            'tamano_listado'=>'1'
                            )
                         */
                      )
              );


/******************************************************************************************************************************************************/




//usuarios
$objeto_tabla['USUARIOS_WEB'] =array(
            'titulo'  =>    'Usuarios',
            'nombre_singular'  =>  'usuario',
            'nombre_plural'  =>  'usuarios',
            'tabla'    =>    'usuarios_web',
            'archivo'  =>    'usuarios_web',
            'prefijo'  =>    'usuw',
      'eliminar'  =>    '1',
      'editar'  =>    '1',
      'buscar'  =>    '0',
      'bloqueado'  =>    '0',
      'menu'    =>    '1',
            'menu_label'=>    'Usuarios',
            'me'    =>    'USUARIOS_WEB',
            'orden'    =>    '1',  //0 ascendente 1 descendente
            'campos'  =>    array(
                        // campos internos  id,fcr,fed
                        array('campo'=>'id',        'tipo'=>'id'),
                        array('campo'=>'fecha_creacion',  'tipo'=>'fcr'),
                        array('campo'=>'fecha_edicion',    'tipo'=>'fed'),
                        // campos de orden  pos,vis
                        array('campo'=>'posicion',    'tipo'=>'pos'),
                        array('campo'=>'visibilidad',  'tipo'=>'vis'),
                        // campos particulares
                        array('campo'=>'nombre',
                            'label'=>'Nombre',
                            'tipo'=>'inp',
                            'listable'=>'1',
                            'validacion'=>'0'
                            ),
                        array('campo'=>'password',
                            'label'=>'Password',
                            'tipo'=>'pas',
                            'listable'=>'1',
                            'validacion'=>'1'
                            )
                        /*
                        array('campo'=>'fecha',
                            'label'=>'Fecha',
                            'tipo'=>'fch',
                            'listable'=>'1',
                            'validacion'=>'1'
                            ),
                        */
                        /*
                        array('campo'=>'tipo',
                            'label'=>'Tipo',
                            'tipo'=>'com',
                            'listable'=>'1',
                            'validacion'=>'1',
                            'opciones'=>'administrador,usuario'
                            ),
                        */
                        // campo para fotos
                        /*
                        array('campo'=>'file',
                            'label'=>'Foto',
                            'tipo'=>'img',
                            'listable'=>'1',
                            'validacion'=>'1',
                            'prefijo'=>'usuario',
                            'carpeta'=>'usuario_imas',
                            'tamanos'=>'70x70,128x135,328x235',
                            'tamano_listado'=>'1'
                            )
                         */
                      )
              );


/******************************************************************************************************************************************************/




//PRODUCTOS
//grupos
$objeto_tabla['PRODUCTOS_GRUPOS'] =array(
            'titulo'  =>'Directorio de inmuebles',
            'nombre_singular'  =>  'grupo',
            'nombre_plural'  =>  'grupos',
            'tabla'    =>    'productos_grupos',
            'archivo'  =>    'productos_grupos',
            'archivo_hijo'  =>    'productos_items',
            'prefijo'  =>    'progru',
			'eliminar'  =>'1',
            'editar'  =>    '1',
            'crear'    =>    '1',
            'altura_listado'=>  'auto',
			'visibilidad'  =>'1',
            'buscar'  =>    '0',
            'bloqueado'  =>    '0',
            'menu'    =>    '1',
			'menu_label'=>'Directorio de Inmuebles',
            'me'    =>    'PRODUCTOS_GRUPOS',
            'orden'    =>    '0',  //0 ascendente 1 descendente
            'campos'  =>    array(
                        // campos internos  id,fcr,fed
                        array('campo'=>'id',        'tipo'=>'id'),
                        array('campo'=>'fecha_creacion',  'tipo'=>'fcr'),
                        array('campo'=>'fecha_edicion',    'tipo'=>'fed'),
                        // campos de orden  pos,vis
                        array('campo'=>'posicion',    'tipo'=>'pos'),
						array('campo'=>'visibilidad',  'tipo'=>'vis'),
                        // campos particulares
            /*
                        array('campo'=>'tipo',
                            'label'=>'Categoría',
                            'width'=>'200px',
                            'tipo'=>'com',
                            'listable'=>'1',
                            'validacion'=>'1',
                            'opciones'=>'categoria 1,categoria 2,categoria 3'
                            ),
            */
                        array('campo'=>'nombre',
                            'label'=>'Grupo',
							'unique'=>'1',
                            'width'=>'200px',
                            'tipo'=>'inp',
                            'listable'=>'1',
                            'validacion'=>'1',
                            'enlace'=>$DIR_CUSTOM.'productos_items.php?id=[id]',
                            'extra'=>' ({select count(*) from productos_items where id_grupo=[id]})'
                            )
                        //
                      )
              );


/******************************************************************************************************************************************************/




//productos
$objeto_tabla['PRODUCTOS_ITEMS'] =array(
            'titulo'  =>    '<a href="'.$DIR_CUSTOM.'productos_grupos.php">Directorio de Inmuebles </a>  -
                      {select nombre from productos_grupos where id=[id]}',
            'nombre_singular'  =>  'inmueble',
            'nombre_plural'  =>  'inmuebles',
            'tabla'    =>    'productos_items',
            'archivo'  =>    'productos_items',
            'archivo_hijo'  =>    'subproductos_items',
            'prefijo'  =>    'prodite',
            'eliminar'  =>    '1',
            'editar'  =>    '1',
            'crear'    =>    '1',
            'crear_label'  =>  '200px',
            'crear_txt'    =>  '400px',
            'altura_listado'=>  '60px',
            'visibilidad'  =>  '1',
            'buscar'  =>    '0',
'bloqueado'  =>'0',
            'menu'    =>    '0',
            'menu_label'=>    '',
      'por_pagina'=>    '5',
            'me'    =>    'PRODUCTOS_ITEMS',
            'orden'    =>    '1',  //0 ascendente 1 descendente
            'campos'  =>    array(
                        // campos internos  id,fcr,fed
                        array('campo'=>'id',        'tipo'=>'id'),
                        array('campo'=>'fecha_creacion',  'tipo'=>'fcr'),
                        array('campo'=>'fecha_edicion',    'tipo'=>'fed'),
                        // campos internos de orden  pos,vis
                        array('campo'=>'posicion',    'tipo'=>'pos'),
                        array('campo'=>'visibilidad',  'tipo'=>'vis'),
                        // campos particulares
                        array('campo'=>'nombre',
                            'label'=>'Nombre',
							'unique'=>'1',
                            'tipo'=>'inp',
                            'listable'=>'1',
                            'validacion'=>'1',
                            'width'=>'219px',
                            'enlace'=>$DIR_CUSTOM.'subproductos_items.php?id=[id]',
                            'extra'=>' ({select count(*) from subproductos_items where id_item=[id]})'
                            ),
							
                        array('campo'=>'codigo',
                            'label'=>'Código',
							'unique'=>'1',
                            'tipo'=>'inp',
                            'listable'=>'1',
                            'validacion'=>'1',
                            'width'=>'100px',
                            ),
														
                        array('campo'=>'tipo',
                            'label'=>'Alquiler/Venta',
                            'tipo'=>'com',
                            'listable'=>'1',
                            'validacion'=>'1',
                            'opciones'=>'alquiler,venta'
                            ),

                        array('campo'=>'estado',
                            'label'=>'Estado',
                            'tipo'=>'com',
							'radio'=>'1',
                            'listable'=>'1',
                            'validacion'=>'1',
                            'opciones'=>array('0'=>'en venta','1'=>'vendido')
                            ),
														
                        array('campo'=>'en_cartera',
                            'label'=>'En cartera',
                            'tipo'=>'com',
                            'listable'=>'1',
                            'validacion'=>'1',
                            'opciones'=>'si,no'
                            ),
														
                        array('campo'=>'direccion',
                            'label'=>'Direccion',
                            'tipo'=>'inp',
                            'listable'=>'1',
                            'validacion'=>'1',
                            'width'=>'219px',
                            'fulltext'=>'1'
                            ),
							
                        array('campo'=>'descripcion',
                            'label'=>'Descripción',
                            'tipo'=>'html',
                            'listable'=>'1',
                            'validacion'=>'0',
                            'width'=>'150px',
                            'fulltext'=>'1'
                            ),
						/*	
                        array('campo'=>'area',
                            'label'=>'Area',
                            'tipo'=>'inp',
							'variable'=>'float',
							'size'=>'10',
                            'listable'=>'1',
                            'validacion'=>'0',
                            'width'=>'150px'
                            ),
						*/	
                        array('campo'=>'area',
                            'label'=>'Areas',    
                            'tipo'=>'inp',  
                            'listable'=>'1',  
                            'validacion'=>'1',
                            'width'=>'300px'
                            ),	

                        array('campo'=>'contacto',
                            'label'=>'Contacto',
                            'tipo'=>'hid',
							'combo'=>'1',
                            'listable'=>'1',
                            'validacion'=>'1',
                            'opciones'=>'id,nombre|clientes'
                            ),
//
            // relacion con la tabla grupos
                        array('campo'=>'id_grupo',
                            'tipo'=>'hid',
                            'listable'=>'0',
                            'validacion'=>'0',
                            'valor'=>'[id]',
                            'foreig'=>'1'
                            ),
							
                        array('campo'=>'departamento',
                            'label'=>'Departamento',
                            'tipo'=>'hid',
							'combo'=>'1',
                            'listable'=>'1',
                            'validacion'=>'1',
                            'opciones'=>'id,nombre|geo_departamentos',
                            'load'=>'provincia||id,nombre|geo_provincias|where id_departamento='							
                            ),
							
                        array('campo'=>'provincia',
                            'label'=>'Provincia',
                            'tipo'=>'hid',
							'combo'=>'1',
                            'listable'=>'1',
                            'validacion'=>'1',
                            'opciones'=>'id,nombre|geo_provincias',
                            'load'=>'distrito||id,nombre|geo_distritos|where id_provincia='							
                            ),
                        array('campo'=>'distrito',
                            'label'=>'Distrito',
                            'tipo'=>'hid',
							'combo'=>'1',
                            'listable'=>'1',
                            'validacion'=>'1',
                            'opciones'=>'id,nombre|geo_distritos'
                            ),
							
																					
                        // campo para fotos
                        array('campo'=>'file',
                            'label'=>'Foto',
                            'tipo'=>'img',
                            'listable'=>'1',
                            'validacion'=>'0',
                            'prefijo'=>'prodite',
                            'carpeta'=>'prodite_imas',
                            'tamanos'=>'150x120,155x120,346x270,1000x2000,96x76',
                            'tamano_listado'=>'1',
						    'width'=>'150px',
						    'style'=>'width:150px,height:auto,'
                            ),
                        array('campo'=>'precio',
                            'label'=>'Precio',
							'unique'=>'0',
                            'tipo'=>'inp',
                            'listable'=>'1',
                            'validacion'=>'1',
                            'width'=>'100px',
                            ),							
                        array('campo'=>'foto_descripcion',
                            'label'=>'Descripción de foto',
                            'tipo'=>'inp',
                            'listable'=>'1',
                            'validacion'=>'0',
                            'width'=>'207px'
                            )							
                      )
              );


/******************************************************************************************************************************************************/




//vistas              
$objeto_tabla['PRODUCTOS_SUB_ITEMS'] =array(
            'titulo'  => '<a href="'.$DIR_CUSTOM.'productos_grupos.php">Directorio de inmuebles</a>  -  
                          <a href="'.$DIR_CUSTOM.'productos_items.php?id={select id_grupo from productos_items where id=[id]}">{select productos_grupos.nombre from productos_grupos,productos_items where productos_grupos.id=productos_items.id_grupo and productos_items.id=[id]}</a> -  
                          Fotos de {select nombre from productos_items where id=[id]}',
            'nombre_singular'  =>  'vista',
            'nombre_plural'  =>  'vistas',            
            'tabla'    =>    'subproductos_items',
            'archivo'  =>    'subproductos_items',
            'prefijo'  =>    'subprodite',
            'eliminar'  =>    '1',
            'editar'  =>    '1',
            'crear'    =>    '1',
            'crear_label'  =>  '200px',
            'crear_txt'    =>  '400px',
            'altura_listado'=>  '60px',
            'visibilidad'  =>  '1',
            'buscar'  =>    '0',
            'bloqueado'  =>    '0',            
            'menu'    =>    '0',
            'menu_label'=>    '',
            'me'    =>    'PRODUCTOS_SUB_ITEMS',
            'orden'    =>    '1',  //0 ascendente 1 descendente            
            'campos'  =>    array(
                        // campos internos  id,fcr,fed
                        array('campo'=>'id',        'tipo'=>'id'),    
                        array('campo'=>'fecha_creacion',  'tipo'=>'fcr'),
                        array('campo'=>'fecha_edicion',    'tipo'=>'fed'),
                        // campos internos de orden  pos,vis
                        array('campo'=>'posicion',    'tipo'=>'pos'),
                        array('campo'=>'visibilidad',  'tipo'=>'vis'),        
                        // campos particulares
                        // relacion con la tabla grupos
                        array('campo'=>'id_item',
                            'tipo'=>'hid',  
                            'listable'=>'0',   
                            'validacion'=>'0',
                            'valor'=>'[id]',
                            'foreig'=>'1'
                            ),     
                        // campo para fotos    
                        array('campo'=>'file',
                            'label'=>'Foto',
                            'tipo'=>'img',  
                            'listable'=>'1',  
                            'validacion'=>'1',
                            'prefijo'=>'prodsubite',
                            'carpeta'=>'prodsubite_imas',
                            'tamanos'=>'150x120,154x119,800x600',
                            'tamano_listado'=>'1',                            
              				'width'=>'150px',
              				'style'=>'width:150px,height:auto,'
                            ), 
							
                        array('campo'=>'foto_descripcion',
                            'label'=>'Descripción de foto',
                            'tipo'=>'inp',
                            'listable'=>'1',
                            'validacion'=>'0',
                            'width'=>'207px'
                            )							                                                                                                                                 
                      )
              );


/******************************************************************************************************************************************************/




//GEO_POSICION
//grupos
$objeto_tabla['GEO_DEPARTAMENTOS'] =array(
            'titulo'  =>    'Departamentos',
            'nombre_singular'  =>  'departamento',
            'nombre_plural'  =>  'departamentos',
            'tabla'    =>    'geo_departamentos',
            'archivo'  =>    'geo_departamentos',
            'archivo_hijo'  =>    'geo_provincias',
            'prefijo'  =>    'geodep',
            'eliminar'  =>    '1',
            'editar'  =>    '1',
            'crear'    =>    '1',
            'visibilidad'  =>  '0',
            'altura_listado'=>  'auto',						
            'buscar'  =>    '0',
            'bloqueado'  =>    '0',
            'menu'    =>    '1',
            'menu_label'=>    'Geoposición',
            'por_pagina'=>    '10',
            'me'    =>    'GEO_DEPARTAMENTOS',
            'orden'    =>    '0',  //0 ascendente 1 descendente
            'campos'  =>    array(
                        // campos internos  id,fcr,fed
                        array('campo'=>'id',        'tipo'=>'id'),
                        array('campo'=>'fecha_creacion',  'tipo'=>'fcr'),
                        array('campo'=>'fecha_edicion',    'tipo'=>'fed'),
                        // campos de orden  pos,vis
                        array('campo'=>'posicion',    'tipo'=>'pos'),
                        array('campo'=>'visibilidad',  'tipo'=>'vis'),
                        // campos particulares
                        array('campo'=>'nombre',
                            'label'=>'Departamento',
                            'width'=>'300px',
							'unique'=>'1',
                            'tipo'=>'inp',
                            'listable'=>'1',
                            'validacion'=>'1',
                            'enlace'=>$DIR_CUSTOM.'geo_provincias.php?id=[id]',
                            'extra'=>' ({select count(*) from geo_provincias where id_departamento=[id]})'
                            )
                        //
                      )
              );


/******************************************************************************************************************************************************/




//productos
$objeto_tabla['GEO_PROVINCIA'] =array(
            'titulo'  =>    '<a href="'.$DIR_CUSTOM.'geo_departamentos.php">Departamentos del Perú</a>  -
                      Provincias de {select nombre from geo_departamentos where id=[id]}',
            'nombre_singular'  =>  'provincia',
            'nombre_plural'  =>  'provincias',
            'tabla'    =>    'geo_provincias',
            'archivo'  =>    'geo_provincias',
            'archivo_hijo'  =>    'geo_distritos',
            'prefijo'  =>    'geodis',
            'eliminar'  =>    '1',
            'editar'  =>    '1',
            'crear'    =>    '1',
            'crear_label'  =>  '200px',
            'crear_txt'    =>  '400px',
            'altura_listado'=>  'auto',
            'visibilidad'  =>  '1',
            'buscar'  =>    '0',
            'bloqueado'  =>    '0',
            'menu'    =>    '0',
            'menu_label'=>    '',
            'por_pagina'=>    '10',
            'me'    =>    'GEO_PROVINCIA',
            'orden'    =>    '1',  //0 ascendente 1 descendente
            'campos'  =>    array(
                        // campos internos  id,fcr,fed
                        array('campo'=>'id',        'tipo'=>'id'),
                        array('campo'=>'fecha_creacion',  'tipo'=>'fcr'),
                        array('campo'=>'fecha_edicion',    'tipo'=>'fed'),
                        // campos internos de orden  pos,vis
                        array('campo'=>'posicion',    'tipo'=>'pos'),
                        array('campo'=>'visibilidad',  'tipo'=>'vis'),
                        // campos particulares
                        array('campo'=>'nombre',
                            'label'=>'Nombre',
                            'tipo'=>'inp',
							'unique'=>'1',
                            'listable'=>'1',
                            'validacion'=>'1',
                            'width'=>'219px',
                            'enlace'=>$DIR_CUSTOM.'geo_distritos.php?id=[id]',
                            'extra'=>' ({select count(*) from geo_distritos where id_provincia=[id]})'
                            ),
                  // relacion con la tabla grupos
                        array('campo'=>'id_departamento',
                            'tipo'=>'hid',
                            'listable'=>'0',
                            'validacion'=>'0',
                            'valor'=>'[id]',
                            'foreig'=>'1'
                            )
                      )
              );


/******************************************************************************************************************************************************/




//productos              
$objeto_tabla['GEO_DISTRITOS'] =array(
            'titulo'  => '<a href="'.$DIR_CUSTOM.'geo_departamentos.php">Departamentos del Perú</a>  
                          - <a href="'.$DIR_CUSTOM.'geo_provincias.php?id={select id_departamento from geo_provincias where id=[id]}">Provincias de {select geo_departamentos.nombre from geo_departamentos,geo_provincias where geo_departamentos.id=geo_provincias.id_departamento and geo_provincias.id=[id]}</a>  
                          - Distritos de {select nombre from geo_provincias where id=[id]}',
            'nombre_singular'  =>  'distrito',
            'nombre_plural'  =>  'distritos',            
            'tabla'    =>    'geo_distritos',
            'archivo'  =>    'geo_distritos',
            'prefijo'  =>    'geodis',
            'eliminar'  =>    '1',
            'editar'  =>    '1',
            'crear'    =>    '1',
            'crear_label'  =>  '200px',
            'crear_txt'    =>  '400px',
            'altura_listado'=>  'auto',
            'visibilidad'  =>  '1',
            'buscar'  =>    '0',
            'bloqueado'  =>    '0',            
            'menu'    =>    '0',
            'menu_label'=>    '',
            'me'    =>    'GEO_DISTRITOS',
            'orden'    =>    '1',  //0 ascendente 1 descendente            
            'campos'  =>    array(
                        // campos internos  id,fcr,fed
                        array('campo'=>'id',        'tipo'=>'id'),    
                        array('campo'=>'fecha_creacion',  'tipo'=>'fcr'),
                        array('campo'=>'fecha_edicion',    'tipo'=>'fed'),
                        // campos internos de orden  pos,vis
                        array('campo'=>'posicion',    'tipo'=>'pos'),
                        array('campo'=>'visibilidad',  'tipo'=>'vis'),        
                        // campos particulares
                        // relacion con la tabla grupos
                        array('campo'=>'id_provincia',
                            'tipo'=>'hid',  
                            'listable'=>'0',   
                            'validacion'=>'0',
                            'valor'=>'[id]',
                            'foreig'=>'1'
                            ),    
                        array('campo'=>'nombre',
                            'label'=>'Nombre',
							'unique'=>'1',
                            'tipo'=>'inp',
                            'listable'=>'1',
                            'validacion'=>'1',
                            'width'=>'219px'
                            )                                                                                                             
                      )
              );

/******************************************************************************************************************************************************/


$objeto_tabla['BANNER'] =array(
            'titulo'  =>    'Banner',
            'nombre_singular'  =>  'foto',
            'nombre_plural'  =>  'fotos',            
            'tabla'    =>    'banner',
            'archivo'  =>    'banner',
            'prefijo'  =>    'ban',
            'eliminar'  =>    '1',
            'editar'  =>    '1',
            'buscar'  =>    '0',
            'bloqueado'  =>    '0',
            'crear_label'  =>  '100px',
            'crear_txt'    =>  '400px',                        
            'menu'    =>    '1',
            'menu_label'=>    'Banner',
            'me'    =>    'BANNER',
            'orden'    =>    '1',  //0 ascendente 1 descendente            
            'campos'  =>    array(
                        // campos internos  id,fcr,fed
                        array('campo'=>'id',        'tipo'=>'id'),    
                        array('campo'=>'fecha_creacion',  'tipo'=>'fcr'),
                        array('campo'=>'fecha_edicion',    'tipo'=>'fed'),
                        // campos de orden  pos,vis
                        array('campo'=>'posicion',    'tipo'=>'pos'),
                        array('campo'=>'visibilidad',  'tipo'=>'vis'),        
                        // campos particulares
                        array('campo'=>'file',
                            'label'=>'Foto',
                            'tipo'=>'img',  
                            'listable'=>'1',  
                            'validacion'=>'1',
                            'prefijo'=>'log',
                            'carpeta'=>'log_imas',
                            'tamanos'=>'70x70,311x368',
                            'tamano_listado'=>'1'                            
                            ),
							
                        array('campo'=>'foto_descripcion',
                            'label'=>'Descripción de foto',
                            'tipo'=>'inp',
                            'listable'=>'1',
                            'validacion'=>'0',
                            'width'=>'207px'
                            )
														                                    
                      )
              );
			  
			  
/******************************************************************************************************************************************************/




$objeto_tabla['CONFIGURACIONES'] =array(
            'titulo'  =>    'Configuración',
            'nombre_singular'  =>  'variable',
            'nombre_plural'  =>  'variables',            
            'tabla'    =>    'configuraciones',
            'archivo'  =>    'configuraciones',
            'prefijo'  =>    'con',
            'eliminar'  =>    '0',
            'ocultar'  =>    '0',
'crear' =>'0',
            'editar'  =>    '1',
            'buscar'  =>    '0',
            'bloqueado'  =>    '0',
            'crear_label'  =>  '100px',
            'crear_txt'    =>  '400px',
'menu'    =>'1',
            'menu_label'=>    'Configuración',
            'me'    =>    'CONFIGURACIONES',
            'orden'    =>    '1',  //0 ascendente 1 descendente            
            'campos'  =>    array(
                        // campos internos  id,fcr,fed
                        array('campo'=>'id',        'tipo'=>'id'),    
                        array('campo'=>'fecha_creacion',  'tipo'=>'fcr'),
                        array('campo'=>'fecha_edicion',    'tipo'=>'fed'),
                        // campos de orden  pos,vis
                        array('campo'=>'posicion',    'tipo'=>'pos'),
                        array('campo'=>'visibilidad',  'tipo'=>'vis'),        
                        // campos particulares
                        array('campo'=>'variable',
                            'label'=>'Variable',    
                            'tipo'=>'inp',  
                            'listable'=>'1',  
                            'validacion'=>'1',
              'constante'=>'1',
                            'width'=>'300px'
                            ), 
                        array('campo'=>'valor',
                            'label'=>'Valor',    
                            'tipo'=>'inp',  
                            'listable'=>'1',  
                            'validacion'=>'1',
                            'width'=>'300px'
                            )                                               
                      )
              );


/******************************************************************************************************************************************************/




//paginas              
$objeto_tabla['PAGINAS'] =array(
            'titulo'  =>    'Páginas',
            'nombre_singular'  =>  'página',
            'nombre_plural'  =>  'páginas',            
            'tabla'    =>    'paginas',
            'archivo'  =>    'paginas',
            'prefijo'  =>    'pag',
            'eliminar'  =>    '0',
      'crear'  =>    '0',
            'editar'  =>    '1',
            'buscar'  =>    '0',
            'bloqueado'  =>    '0',            
            'menu'    =>    '1',
            'crear_label'  =>  '60px',
            'crear_txt'    =>  '550px',      
      'menu_label'=>'Páginas',
            'me'    =>    'PAGINAS',
            'orden'    =>    '1',  //0 ascendente 1 descendente            
            'campos'  =>    array(
                        // campos internos  id,fcr,fed
                        array('campo'=>'id',        'tipo'=>'id'),    
                        array('campo'=>'fecha_creacion',  'tipo'=>'fcr'),
                        array('campo'=>'fecha_edicion',    'tipo'=>'fed'),
                        // campos de orden  pos,vis
                        array('campo'=>'posicion',    'tipo'=>'pos'),
                        array('campo'=>'visibilidad',  'tipo'=>'vis'),        
                        // campos particulares
                        array('campo'=>'pagina',
                            'label'=>'Página',    
                            'tipo'=>'inp',  
							'unique'=>'1',
                            'listable'=>'1',  
                            'validacion'=>'1',
              'constante'=>'1'
                            ), 
                        array('campo'=>'titulo',
                            'label'=>'Título',    
                            'tipo'=>'inp', 
							'unique'=>'1',  
                            'listable'=>'1',  
                            'validacion'=>'1'
                            ),          
                        array('campo'=>'texto',
                            'label'=>'Texto',    
                            'tipo'=>'html',  
                            'listable'=>'1',  
                            'validacion'=>'0',
                            'width'=>'300px'
                            ),
                        array('campo'=>'foto',
                            'label'=>'Foto',
                            'tipo'=>'img',  
                            'listable'=>'1',  
                            'validacion'=>'0',
                            'prefijo'=>'pag',
                            'carpeta'=>'pag_imas',
                            'tamanos'=>'70x70,400x300',
                            'tamano_listado'=>'1'                            
                            ),
                        array('campo'=>'foto_descripcion',
                            'label'=>'Descripción de foto',
                            'tipo'=>'inp',
                            'listable'=>'1',
                            'validacion'=>'0',
                            'width'=>'207px'
                            )							
    
                      )
              );


/******************************************************************************************************************************************************/




$objeto_tabla['CONTACTO'] =array(
            'titulo'  =>    'Mensajes de Contacto',
            'nombre_singular'  =>  'mensaje',
            'nombre_plural'  =>  'mensajes',            
            'tabla'    =>    'contacto',
            'archivo'  =>    'contacto',
            'prefijo'  =>    'con',
            'eliminar'  =>    '1',
            'editar'  =>    '1',
            'buscar'  =>    '0',
            'bloqueado'  =>    '0',
'crear'    =>'0',      
            'crear_label'  =>  '100px',
            'crear_txt'    =>  '400px',                        
            'menu'    =>    '1',
            'menu_label'=>    'Mensajes de Contacto',
            'me'    =>    'CONTACTO',
            'orden'    =>    '1',  //0 ascendente 1 descendente            
            'campos'  =>    array(
                        // campos internos  id,fcr,fed
                        array('campo'=>'id',        'tipo'=>'id'),    
                        array('campo'=>'fecha_creacion',  'tipo'=>'fcr'),
                        array('campo'=>'fecha_edicion',    'tipo'=>'fed'),
                        // campos de orden  pos,vis
                        array('campo'=>'posicion',    'tipo'=>'pos'),
                        array('campo'=>'visibilidad',  'tipo'=>'vis'),        
                        // campos particulares
                        array('campo'=>'fecha',
                            'label'=>'Fecha',    
                            'tipo'=>'fch',
              'width'=>'300px',  
                            'listable'=>'1',  
                            'validacion'=>'1',
              'constante'=>'1',
              'formato'=>'7'
                            ),
                        array('campo'=>'nombre',
                            'label'=>'Nombre',    
                            'tipo'=>'inp',  
                            'listable'=>'1',  
                            'validacion'=>'1',
                            'width'=>'300px'
                            ),   
                        array('campo'=>'empresa',
                            'label'=>'Empresa',    
                            'tipo'=>'inp',  
                            'listable'=>'1',  
                            'validacion'=>'0',
                            'width'=>'300px'
                            ),   
                        array('campo'=>'telefono',
                            'label'=>'Teléfono',    
                            'tipo'=>'inp',  
                            'listable'=>'1',  
                            'validacion'=>'0',
                            'width'=>'300px'
                            ),   
                        array('campo'=>'email',
                            'label'=>'Email',    
                            'tipo'=>'inp',  
                            'listable'=>'1',  
                            'validacion'=>'1',
                            'width'=>'300px'
                            ),
                        array('campo'=>'comentario',
                            'label'=>'Comentario',    
                            'tipo'=>'txt',  
                            'listable'=>'1',  
                            'validacion'=>'1',
                            'width'=>'300px'
                            )
                      )
              );

/******************************************************************************************************************************************************/




$objeto_tabla['BOLETINES'] =array(
            'titulo'  =>    'Suscritos a Boletín',
            'nombre_singular'  =>  'suscrito',
            'nombre_plural'  =>  'suscritos',            
            'tabla'    =>    'boletines',
            'archivo'  =>    'boletines',
            'prefijo'  =>    'bol',
            'eliminar'  =>    '1',
            'editar'  =>    '1',
            'buscar'  =>    '0',
            'bloqueado'  =>    '0',
'crear'    =>'0',      
            'crear_label'  =>  '100px',
            'crear_txt'    =>  '400px',                        
            'menu'    =>    '1',
            'menu_label'=>    'Suscritos a Boletín',
            'me'    =>    'BOLETINES',
            'orden'    =>    '1',  //0 ascendente 1 descendente            
            'campos'  =>    array(
                        // campos internos  id,fcr,fed
                        array('campo'=>'id',        'tipo'=>'id'),    
                        array('campo'=>'fecha_creacion',  'tipo'=>'fcr'),
                        array('campo'=>'fecha_edicion',    'tipo'=>'fed'),
                        // campos de orden  pos,vis
                        array('campo'=>'posicion',    'tipo'=>'pos'),
                        array('campo'=>'visibilidad',  'tipo'=>'vis'),        
                        // campos particulares
                        array('campo'=>'fecha',
                            'label'=>'Fecha',    
                            'tipo'=>'fch',
							  'width'=>'300px',  
                            'listable'=>'1',  
                            'validacion'=>'1',
						  'constante'=>'1',
						  'formato'=>'7'
                            ),
                        array('campo'=>'nombre',
                            'label'=>'Nombre',    
                            'tipo'=>'inp',  
                            'listable'=>'1',  
                            'validacion'=>'1',
                            'width'=>'300px'
                            ),     
                        array('campo'=>'email',
                            'label'=>'Email',    
                            'tipo'=>'inp',  
                            'listable'=>'1',  
                            'validacion'=>'1',
                            'width'=>'300px'
                            )
                      )
              );
			  
/******************************************************************************************************************************************************/




$objeto_tabla['RECOMENDAR'] =array(
            'titulo'  =>    'Recomendaciones',
            'nombre_singular'  =>  'recomendación',
            'nombre_plural'  =>  'recomendaciones',            
            'tabla'    =>    'recomendar',
            'archivo'  =>    'recomendar',
            'prefijo'  =>    'rec',
            'eliminar'  =>    '1',
            'editar'  =>    '1',
            'buscar'  =>    '0',
            'bloqueado'  =>    '0',
'crear'    =>'0',      
            'crear_label'  =>  '100px',
            'crear_txt'    =>  '400px',                        
            'menu'    =>    '1',
            'menu_label'=>    'Recomendaciones',
            'me'    =>    'RECOMENDAR',
            'orden'    =>    '1',  //0 ascendente 1 descendente            
            'campos'  =>    array(
                        // campos internos  id,fcr,fed
                        array('campo'=>'id',        'tipo'=>'id'),    
                        array('campo'=>'fecha_creacion',  'tipo'=>'fcr'),
                        array('campo'=>'fecha_edicion',    'tipo'=>'fed'),
                        // campos de orden  pos,vis
                        array('campo'=>'posicion',    'tipo'=>'pos'),
                        array('campo'=>'visibilidad',  'tipo'=>'vis'),        
                        // campos particulares
                        array('campo'=>'fecha',
                            'label'=>'Fecha',    
                            'tipo'=>'fch',
              'width'=>'300px',  
                            'listable'=>'1',  
                            'validacion'=>'1',
              'constante'=>'1',
              'formato'=>'7'
                            ),
                        array('campo'=>'nombre',
                            'label'=>'Nombre',    
                            'tipo'=>'inp',  
                            'listable'=>'1',  
                            'validacion'=>'1',
                            'width'=>'300px'
                            ),   
                        array('campo'=>'email',
                            'label'=>'Email',    
                            'tipo'=>'inp',  
                            'listable'=>'1',  
                            'validacion'=>'1',
                            'width'=>'300px'
                            )

                      )
              );

/******************************************************************************************************************************************************/




$objeto_tabla['CONSULTAS'] =array(
            'titulo'  =>    'Consultas',
            'nombre_singular'  =>  'consulta',
            'nombre_plural'  =>  'consultas',            
            'tabla'    =>    'consultas',
            'archivo'  =>    'consultas',
            'prefijo'  =>    'cons',
            'eliminar'  =>    '1',
            'editar'  =>    '1',
            'buscar'  =>    '0',
            'bloqueado'  =>    '0',
			'crear'    =>'0',      
            'crear_label'  =>  '100px',
            'crear_txt'    =>  '400px',                        
            'menu'    =>    '1',
            'menu_label'=>    'Consultas',
            'me'    =>    'CONSULTAS',
            'orden'    =>    '1',  //0 ascendente 1 descendente            
            'campos'  =>    array(
                        // campos internos  id,fcr,fed
                        array('campo'=>'id',        'tipo'=>'id'),    
                        array('campo'=>'fecha_creacion',  'tipo'=>'fcr'),
                        array('campo'=>'fecha_edicion',    'tipo'=>'fed'),
                        // campos de orden  pos,vis
                        array('campo'=>'posicion',    'tipo'=>'pos'),
                        array('campo'=>'visibilidad',  'tipo'=>'vis'),        
                        // campos particulares
                        array('campo'=>'fecha',
                            'label'=>'Fecha',    
                            'tipo'=>'fch',
              'width'=>'300px',  
                            'listable'=>'1',  
                            'validacion'=>'1',
              'constante'=>'1',
              'formato'=>'7'
                            ),
                        array('campo'=>'nombre',
                            'label'=>'Nombre',    
                            'tipo'=>'inp',  
                            'listable'=>'1',  
                            'validacion'=>'1',
                            'width'=>'300px'
                            ),    
                        array('campo'=>'telefono',
                            'label'=>'Teléfono',    
                            'tipo'=>'inp',  
                            'listable'=>'1',  
                            'validacion'=>'0',
                            'width'=>'300px'
                            ),   
                        array('campo'=>'email',
                            'label'=>'Email',    
                            'tipo'=>'inp',  
                            'listable'=>'1',  
                            'validacion'=>'1',
                            'width'=>'300px'
                            ),             
                        array('campo'=>'consulta',
                            'label'=>'consulta',    
                            'tipo'=>'txt',  
                            'listable'=>'1',  
                            'validacion'=>'1',
                            'width'=>'300px'
                            ),
                        array('campo'=>'id_contacto',
                            'label'=>'Contacto',
                            'tipo'=>'hid',
							'combo'=>'1',
                            'listable'=>'1',
                            'validacion'=>'1',
                            'opciones'=>'id,nombre|clientes'
                            ),
                        array('campo'=>'id_item',
                            'label'=>'Inmueble',
                            'tipo'=>'hid',
							'combo'=>'1',
                            'listable'=>'1',
                            'validacion'=>'1',
                            'opciones'=>'id,nombre|productos_items'
                            ),													
                      )
              );



/******************************************************************************************************************************************************/


$objeto_tabla['CLIENTES'] =array(
            'titulo'  =>    'Asociados Clientes',
            'nombre_singular'  =>  'asociado',
            'nombre_plural'  =>  'asociados',            
            'tabla'    =>    'clientes',
            'archivo'  =>    'clientes',
            'prefijo'  =>    'cli',
            'eliminar'  =>    '1',
            'editar'  =>    '1',
            'buscar'  =>    '0',
            'bloqueado'  =>    '0',
			'crear'    =>'1',      
            'crear_label'  =>  '100px',
            'crear_txt'    =>  '400px',                        
			'archivo_pruebas'=> 'personas_negocio.txt',
            'menu'    =>    '1',
            'menu_label'=>    'Asociados Clientes',
            'me'    =>    'CLIENTES',
            'orden'    =>    '1',  //0 ascendente 1 descendente            
            'campos'  =>    array(
                        // campos internos  id,fcr,fed
                        array('campo'=>'id',        'tipo'=>'id'),    
                        array('campo'=>'fecha_creacion',  'tipo'=>'fcr'),
                        array('campo'=>'fecha_edicion',    'tipo'=>'fed'),
                        // campos de orden  pos,vis
                        array('campo'=>'posicion',    'tipo'=>'pos'),
                        array('campo'=>'visibilidad',  'tipo'=>'vis'),        
                        // campos particulares
                        array('campo'=>'nombre',
                            'label'=>'Nombre',    
                            'tipo'=>'inp',  
                            'listable'=>'1',  
                            'validacion'=>'1',
                            'width'=>'300px'
                            ),   
                        array('campo'=>'registro',
                            'label'=>'Registro de agente inmobiliario',    
                            'tipo'=>'inp',  
                            'listable'=>'1',  
                            'validacion'=>'1',
                            'width'=>'300px'
                            ),							
                        array('campo'=>'empresa',
                            'label'=>'Empresa',    
                            'tipo'=>'inp',  
                            'listable'=>'1',  
                            'validacion'=>'0',
                            'width'=>'300px'
                            ),   
                        array('campo'=>'telefono',
                            'label'=>'Teléfono',    
                            'tipo'=>'inp',							  
                            'listable'=>'1',  
                            'validacion'=>'1',
                            'width'=>'300px'
                            ),   
                        array('campo'=>'email',
                            'label'=>'Email',    
                            'tipo'=>'inp',  
                            'listable'=>'1',  
                            'validacion'=>'1',
                            'width'=>'300px'
                            ),             
                        array('campo'=>'direccion',
                            'label'=>'Dirección',    
                            'tipo'=>'inp',  
                            'listable'=>'1',  
                            'validacion'=>'0',
                            'width'=>'300px'
                            ), 
                        array('campo'=>'descripcion',
                            'label'=>'Descripcion',    
                            'tipo'=>'txt',  
                            'listable'=>'1',  
                            'validacion'=>'0',
                            'width'=>'300px',
							'size'=>'200'
                            ),
                        array('campo'=>'foto',
                            'label'=>'Foto',
                            'tipo'=>'img',  
                            'listable'=>'1',  
                            'validacion'=>'0',
                            'prefijo'=>'cli',
                            'carpeta'=>'cli_imas',
                            'tamanos'=>'70x70,100x100',
                            'tamano_listado'=>'1'                            
                            ),							
                      )
              );


/******************************************************************************************************************************************************/


$objeto_tabla['SOCIOS'] =array(
            'titulo'  =>    'Asociados Empresa',
            'nombre_singular'  =>  'socio',
            'nombre_plural'  =>  'socios',            
            'tabla'    =>    'socios',
            'archivo'  =>    'socios',
            'prefijo'  =>    'soc',
            'eliminar'  =>    '1',
            'editar'  =>    '1',
            'buscar'  =>    '0',
            'bloqueado'  =>    '0',
			'crear'    =>'1',      
            'crear_label'  =>  '100px',
            'crear_txt'    =>  '400px',                        
			'archivo_pruebas'=> 'personas_negocio.txt',
            'menu'    =>    '1',
            'menu_label'=>    'Asociados Empresa',
            'me'    =>    'SOCIOS',
            'orden'    =>    '1',  //0 ascendente 1 descendente            
            'campos'  =>    array(
                        // campos internos  id,fcr,fed
                        array('campo'=>'id',        'tipo'=>'id'),    
                        array('campo'=>'fecha_creacion',  'tipo'=>'fcr'),
                        array('campo'=>'fecha_edicion',    'tipo'=>'fed'),
                        // campos de orden  pos,vis
                        array('campo'=>'posicion',    'tipo'=>'pos'),
                        array('campo'=>'visibilidad',  'tipo'=>'vis'),        
                        // campos particulares
                        array('campo'=>'nombre',
                            'label'=>'Nombre',    
                            'tipo'=>'inp',  
                            'listable'=>'1',  
                            'validacion'=>'1',
                            'width'=>'300px'
                            ),   						
                        array('campo'=>'empresa',
                            'label'=>'Empresa',    
                            'tipo'=>'inp',  
                            'listable'=>'1',  
                            'validacion'=>'0',
                            'width'=>'300px'
                            ),   
                        array('campo'=>'telefono',
                            'label'=>'Teléfono',    
                            'tipo'=>'inp',							  
                            'listable'=>'1',  
                            'validacion'=>'1',
                            'width'=>'300px'
                            ),   
                        array('campo'=>'email',
                            'label'=>'Email',    
                            'tipo'=>'inp',  
                            'listable'=>'1',  
                            'validacion'=>'1',
                            'width'=>'300px'
                            ),             
                        array('campo'=>'direccion',
                            'label'=>'Dirección',    
                            'tipo'=>'inp',  
                            'listable'=>'1',  
                            'validacion'=>'0',
                            'width'=>'300px'
                            ), 
                        array('campo'=>'descripcion',
                            'label'=>'Descripción',    
                            'tipo'=>'txt',  
                            'listable'=>'1',  
                            'validacion'=>'0',
                            'width'=>'300px',
							'size'=>'200'
                            ),
                        array('campo'=>'foto',
                            'label'=>'Foto',
                            'tipo'=>'img',  
                            'listable'=>'1',  
                            'validacion'=>'0',
                            'prefijo'=>'soc',
                            'carpeta'=>'soc_imas',
                            'tamanos'=>'70x70,100x100,300x300',
                            'tamano_listado'=>'1'                            
                            ),							
                      )
              );



/******************************************************************************************************************************************************/

 


?>