<?php //á 

$THIS=$PARAMS['this'];

$object=array();

/*
$object['menu']=select("nombre,url",'menus_items','where id_grupo='.dato('id','menus',"where nombre='main'").' and visibilidad=1 limit 0,100',0,
array(
    'url'=>"index.php?{url}",
)
);
*/

$object['menu']=array(
					array(
						'label'=>'INICIO',
						'url'=>'index.php?modulo=app&tab=home',
					),
					// array(
					// 	'url'=>'index.php?modulo=app&tab=transparencia',
					// 	'label'=>'TRANSPARENCIA',
					// ),
					array(
						'url'=>'index.php?modulo=items&tab=servicios_items&acc=file',
						'label'=>'SERVICIOS',
					),
					// array(
					// 	'url'=>'index.php?modulo=app&tab=enlinea',
					// 	'label'=>'EN LINEA',
					// ),
					// array(
					// 	'url'=>'index.php?modulo=items&tab=tramites_items&acc=file',
					// 	'label'=>'TRAMITES',
					// ),
					array(
						'url'=>'index.php?modulo=items&tab=obras_fotos&acc=list',
						'label'=>'OBRAS',
					),
					array(
						'url'=>'index.php?modulo=items&tab=turismo_fotos&acc=file',
						'label'=>'TURISMO',
					),
					array(
					 	'url'=>'index.php?modulo=formularios&tab=contactenos',
						'label'=>'CONTACTENOS',
					)
					/*
					array(
						'nombre'=>'Nuestra Historia',
						'url'=>'index.php?modulo=app&tab=pages&page=nuestra-historia',
					),
					array(
						'nombre'=>'Estatuto',
						'url'=>'index.php?modulo=app&tab=pages&page=estatuto',
					),					
					array(
						'nombre'=>'Concejo Nacional',
						'url'=>'index.php?modulo=app&tab=pages&page=concejo-nacional',
					),
					array(
						'nombre'=>'Secretariado Ejecutivo',
						'url'=>'index.php?modulo=app&tab=pages&page=secretariado-ejecutivo',
					),
					*/
					
					// array(
					// 	'nombre'=>'Departamentos',
					// 	//'url'=>'index.php?modulo=items&tab=secciones&acc=list',//falta
					// 	//'url'=>'index.php?modulo=app&tab=home',						
					// 	'id'=>'6',		
					// 	//'class'=>'noselected'
					// ),										
					// array(
					// 	'nombre'=>'Contáctenos',
					// 	'url'=>'index.php?modulo=formularios&tab=contactenos',
					// ),	
					// array(
					// 	'nombre'=>'Consultas',
					// 	'url'=>'index.php?modulo=formularios&tab=consultas',
					// ),						
																								
				);							

	
	// $object['menu']['5']['menu']=select(
	// array(
	// 	"id",
	// 	"nombre",
	// 	"seccion"
	// ),
	// 'secciones',
	// 'where 1 and visibilidad=1 and tipo=1
	// order by id asc 	
	// limit 0,100',
	// 0,
	// array(
	// 	'nombre'=>'Departamento de {nombre}',
	//     'url'=>array('url'=>array('url'=>"index.php?sec={seccion}&modulo=app&tab=home")),							
	// )
	// );		
				

$object['menu'] = web_procesar_menu($object['menu'],"izquierda");

$object['menu'] = web_re_procesar_menu($object['menu'],$SERVER['URL']);

$OBJECT[$THIS]=$object;

