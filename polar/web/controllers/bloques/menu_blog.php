<?php //á
//prin ($PARAMS);

$ID_ITEM=$_GET['id'];


$object=[];

$object['menu']=[
					[
							'label'=>"Noticias",
							'url'=>'index.php?modulo=items&tab=blog_noticias',
					],
					[
							'label'=>"Comunicados",
							'url'=>'index.php?modulo=items&tab=blog_actividades',
					],
					[
							'label'=>"Fotos",
							'url'=>'index.php?modulo=items&tab=blog_fotos'
					],
					[
							'label'=>"Videos",
							'url'=>'index.php?modulo=items&tab=blog_videos',
					],
				 ];
								 
$object['menu']=web_procesar_menu($object['menu']);

switch($_GET['tab']){
case "blog_noticias":	

	$object['header']=array(
						'nombre'=>'Últimas Noticias',
						'url'=>procesar_url('index.php?modulo=items&tab=blog_noticias'),
					  );

	$object['items']= select(
		array(
			'id',
			'nombre',
			'texto',
			'fecha',
		),	
		"blog_noticias",
		"where 1 $filtro_where and  visibilidad='1' order by fecha desc limit 0,15",
		0,
		array(
			'fecha'=>array('fecha'=>array('{fecha}','5')),
			//'nombre'=>array('limit'=>array('{nombre}','40')),												
			'texto'=>array('limit'=>array('{texto}','85')),			
			'nivel'=>'menu_nivel_2',
			'url'=>array('url'=>array('index.php?modulo=items&tab=blog_noticias&acc=file&id={id}&friendly={nombre}')),
			'class'=>array('match'=>array($ID_ITEM,'{id}','selected','')),
			'esquema'=>'nombre:h2,texto',			
			)
		);
	$object['footer']=array(
						'nombre'=>'Ver Todas las Noticias',
						'url'=>procesar_url('index.php?modulo=items&tab=blog_noticias'),
					  );							

break;
case "blog_actividades":	

	$object['header']=array(
						'nombre'=>'Últimos Comunicados',
						'url'=>procesar_url('index.php?modulo=items&tab=blog_actividades'),
					  );
	
	$object['items']= select(
		array(
			'id',
			'nombre',
			'texto',
			'fecha',
		),	
		"blog_actividades",
		"where 1 $filtro_where and  visibilidad='1' order by fecha desc limit 0,15",
		0,
		array(
			'fecha'=>array('fecha'=>array('{fecha}','5')),	
			//'nombre'=>array('limit'=>array('{nombre}','40')),									
			'texto'=>array('limit'=>array('{texto}','85')),
			'nivel'=>'menu_nivel_2',
			'url'=>array('url'=>array('index.php?modulo=items&tab=blog_actividades&acc=file&id={id}&friendly={nombre}')),
			'selected'=>array('match'=>array($ID_ITEM,'{id}','selected','')),			
			'esquema'=>'nombre:h2,texto',			
			)
		);
		
	$object['footer']=array(
						'nombre'=>'Ver Todos los Comunicados',
						'url'=>procesar_url('index.php?modulo=items&tab=blog_actividades'),
					  );					  		

break;
case "blog_fotos":	

	$object['header']=array(
						'nombre'=>'Últimas Fotos',
						'url'=>procesar_url('index.php?modulo=items&tab=blog_fotos'),
					  );

	$object['items']= select(
		array(
			'id',
			'nombre',
			'fecha',
		),
		"blog_fotos",
		"where 1 $filtro_where and  visibilidad='1' order by id desc limit 0,15",
		0,
		array(
			'fecha'=>array('fecha'=>array('{fecha}','5')),	
			'nivel'=>'menu_nivel_2',
			'selected'=>array('match'=>array($ID_ITEM,'{id}','selected','')),	
			'url'=>array('url'=>array("index.php?modulo=items&tab=blog_fotos&acc=file&id={id}&friendly={nombre}")),
			'foto'=>array('foto'=>array("id,file,foto_descripcion,fecha_creacion|blog_fotos_fotos|where id_grupo='{id}' and visibilidad='1' order by id asc limit 0,1",
						"blofot_imas",
						array('atributos'=>'2,50x50,0')
						)),
						
			'esquema'=>'foto,fecha,nombre:h2',
			)
		);
	// prin($object['items']);	
	$object['footer']=array(
						'nombre'=>'Ver Todos los Albumes',
						'url'=>procesar_url('index.php?modulo=items&tab=blog_fotos'),
						);			

break;
case "blog_videos":	

	$object['header']=array(
						'nombre'=>'Últimos Videos',
						'url'=>procesar_url('index.php?modulo=items&tab=blog_videos'),
					  );

	$object['items']= select(
		array(
			'id',
			'nombre',
			'fecha',
		),
		"blog_videos",
		"where 1 $filtro_where and  visibilidad='1' order by id desc limit 0,15",
		0,
		array(
			'fecha'=>array('fecha'=>array('{fecha}','5')),		
			'nivel'=>'menu_nivel_2',
			'selected'=>array('match'=>array($ID_ITEM,'{id}','selected','')),	
			'url'=>array('url'=>array("index.php?modulo=items&tab=blog_videos&acc=file&id={id}&friendly={nombre}")),
			'foto'=>array('fila'=>array("id,codigo","blog_videos_videos","where id_grupo='{id}' and visibilidad='1' order by id asc limit 0,1",0,
				array('atributos'=>'src="http://i4.ytimg.com/vi/{codigo}/default.jpg" width="50" height="50" ')
						)),
						
			'esquema'=>'foto,fecha,nombre:h2',
			)
		);

	$object['footer'][]=array(
						'nombre'=>'Ver Todos los Albumes',
						'url'=>procesar_url('index.php?modulo=items&tab=blog_videos'),
						);

break;
}

//prin($object);

$OBJECT[$PARAMS['this']]=$object;
	
