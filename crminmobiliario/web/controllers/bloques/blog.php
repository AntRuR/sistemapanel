<?php //á


	$object=[];

	$object['menu']=[
						['label'=>"Noticias", 		'more'=>'data-tab="notas"',			'class'=>'active'],
						['label'=>"Comunicados", 	'more'=>'data-tab="actividades"'],
						['label'=>"Fotos", 			'more'=>'data-tab="fotos"'],
						['label'=>"Videos", 		'more'=>'data-tab="videos"'],
					];
					 
	
	

	$object['notas']['items']=select("id,nombre,texto,fecha,foto as file,fecha_creacion",'blog_noticias','where 1 order by fecha desc limit 0,100',0,
		array(
			'nombre'=>array('limit'=>array('{nombre}','70')),
			'texto'=>array('limit'=>array('{texto}','135')),
			'fecha'=>array('fecha'=>array('{fecha}','5')),			
			'url'=>array('url'=>array("index.php?".$filtro_param."modulo=items&tab=blog_noticias&acc=file&id={id}&friendly={nombre}")),
			'foto:atributos'=>array('atributos'=>'blonot_imas,{fecha_creacion},{file},2,220x90,1'),			
			'esquema'=>'nombre:h2,fecha,foto,texto',			
			
		)		
	);
	
	$object['notas']['footer']=array(
											'nombre'=>'Todas las noticias',
											'url'=>procesar_url("index.php?modulo=items&tab=blog_noticias")
											);



	$object['actividades']['items']=select("id,nombre,texto,fecha,foto as file,fecha_creacion",'blog_actividades','where 1 order by fecha desc limit 0,100',0,
		array(
			'nombre'=>array('limit'=>array('{nombre}','70')),		
			'texto'=>array('limit'=>array('{texto}','135')),		
			'fecha'=>array('fecha'=>array('{fecha}','5')),			
			'url'=>array('url'=>array("index.php?".$filtro_param."modulo=items&tab=blog_actividades&acc=file&id={id}&friendly={nombre}")),
			'foto:atributos'=>array('atributos'=>'bloact_imas,{fecha_creacion},{file},2,220x90,1'),			
			'esquema'=>'nombre:h2,fecha,foto,texto',				
		)		
	);
	$object['actividades']['footer']=array(
											'nombre'=>'Todas los Comunicados',
											'url'=>procesar_url("index.php?".$filtro_param."modulo=items&tab=blog_actividades")
											);
											
												
	$object['fotos']['items']=select("id,nombre,fecha",'blog_fotos','where 1 order by id desc limit 0,100',0,
		array(
			'nombre'=>array('limit'=>array('{nombre}','70')),	
			'fecha'=>array('fecha'=>array('{fecha}','5')),				
			'url'=>array('url'=>array("index.php?".$filtro_param."modulo=items&tab=blog_fotos&acc=file&id={id}&friendly={nombre}")),
			'foto'=>array('foto'=>array("id,file,foto_descripcion,fecha_creacion|blog_fotos_fotos|where id_grupo='{id}' and visibilidad='1' order by id asc limit 0,1",
						"blofot_imas",
						array('atributos'=>'2,250x140,1')
						)),
			'esquema'=>'nombre:h2,fecha,foto',				
		)		
	);
	
	$object['fotos']['footer']=array(
											'nombre'=>'Todos los Albumes',
											'url'=>procesar_url("index.php?".$filtro_param."modulo=items&tab=blog_fotos")
											);
											
												
	
	$object['videos']['items']=select("id,nombre,fecha",'blog_videos','where 1 order by id desc limit 0,100',0,
		array(
			'nombre'=>array('limit'=>array('{nombre}','70')),	
			'fecha'=>array('fecha'=>array('{fecha}','5')),							
			'url'=>array('url'=>array("index.php?".$filtro_param."modulo=items&tab=blog_videos&acc=file&id={id}&friendly={nombre}")),
			'foto'=>array('fila'=>array("id,codigo","blog_videos_videos","where id_grupo='{id}' and visibilidad='1' order by id asc limit 0,1",0,
				array('atributos'=>'src="http://i4.ytimg.com/vi/{codigo}/default.jpg" width="50" height="50" ')
						)),
			'esquema'=>'foto,fecha,nombre',						
		)		
	);
	
	$object['videos']['footer']=array(
											'nombre'=>'Todos los Albumes',
											'url'=>procesar_url("index.php?".$filtro_param."modulo=items&tab=blog_videos")
											);	

	

$OBJECT[$PARAMS['this']]=$object;	


