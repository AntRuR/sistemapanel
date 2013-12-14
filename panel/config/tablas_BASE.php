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
		'menu_label'=>    'usuarios',
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

$objeto_tabla['CONFIGURACIONES_ROOT'] =array(
		'titulo'  =>    'Configuración root',
		'nombre_singular'  =>  'variable',
		'nombre_plural'  =>  'variables',
		'tabla'    =>    'configuraciones_root',
		'archivo'  =>    'configuraciones_root',
		'prefijo'  =>    'conr',
		'eliminar'  =>    '0',
		'ocultar'  =>    '0',
		'crear' =>'1',
		'editar'  =>    '1',
		'buscar'  =>    '0',
		'bloqueado'  =>    '0',
		'crear_label'  =>  '100px',
		'crear_txt'    =>  '400px',
		'menu'    =>'0',
		'menu_label'=>    'Configuración root',
		'me'    =>    'CONFIGURACIONES_ROOT',
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
		'menu'    =>'0',
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
				array('campo'=>'nombre_amigo',
						'label'=>'Nombre',
						'tipo'=>'inp',
						'listable'=>'1',
						'validacion'=>'1',
						'width'=>'300px'
				),
				array('campo'=>'email_amigo',
						'label'=>'Email',
						'tipo'=>'inp',
						'listable'=>'1',
						'validacion'=>'1',
						'width'=>'300px'
				),
				array('campo'=>'nombre',
						'label'=>'Nombre',
						'tipo'=>'inp',
						'listable'=>'1',
						'validacion'=>'0',
						'width'=>'300px'
				),
				array('campo'=>'email',
						'label'=>'Email',
						'tipo'=>'inp',
						'listable'=>'1',
						'validacion'=>'0',
						'width'=>'300px'
				),
				array('campo'=>'titulo',
						'label'=>'Título',
						'tipo'=>'inp',
						'listable'=>'1',
						'validacion'=>'1',
						'width'=>'300px'
				),
				array('campo'=>'foto',
						'label'=>'archivo',
						'tipo'=>'inp',
						'listable'=>'1',
						'validacion'=>'1',
						'width'=>'300px'
				),
				array('campo'=>'url',
						'label'=>'página a compartir',
						'tipo'=>'inp',
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



?>