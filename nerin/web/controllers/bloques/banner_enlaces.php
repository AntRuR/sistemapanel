<?php //á


$object=[];

// prin($PARAMS);

if($PARAMS['this']=='banner_enlaces'){

	
	$grupo=fila('nombre,id','banners_fotos',"where name='banner_enlaces2' ",0);
	$object['header']=$grupo['nombre'];

	$object['filas']=select(
				"id,file,foto_descripcion as texto,fecha_creacion,url"
				,"banners_fotos_fotos"
				,"where 1 and id_grupo='".$grupo['id']."' and  visibilidad='1' order by id desc limit 0,100"
				,0
				,array(
					'foto:url'		=> '{url}',
					'foto:atributos'=> array('atributos'=>'banfot_imas,{fecha_creacion},{file},6,204x110,1'),
					'esquema'		=> 'foto'
				)
	);


} elseif($PARAMS['this']=='banner_enlaces2'){


	$grupo=fila('nombre,id','banners_fotos',"where name='banner_enlaces' ",0);
	$object['header']=$grupo['nombre'];

	$object['filas']=select(
				"id,file,foto_descripcion as texto,fecha_creacion,url"
				,"banners_fotos_fotos"
				,"where 1 and id_grupo='".$grupo['id']."' and  visibilidad='1' order by id desc limit 0,100"
				,0
				,array(
					'foto:url'		=> '{url}',
					'foto:atributos'=> array('atributos'=>'banfot_imas,{fecha_creacion},{file},6,245x120,1'),
					'esquema'		=> 'foto'
				)
	);
		

} elseif($PARAMS['this']=='banner_enlaces3'){


	$grupo=fila('nombre,id','banners_fotos',"where name='pie' ",0);
	$object['header']=$grupo['nombre'];

	$object['filas']=select(
				"id,file,foto_descripcion as texto,fecha_creacion,url"
				,"banners_fotos_fotos"
				,"where 1 and id_grupo='".$grupo['id']."' and  visibilidad='1' order by id desc limit 0,100"
				,0
				,array(
					'foto:url'		=> '{url}',
					'foto:atributos'=> array('atributos'=>'banfot_imas,{fecha_creacion},{file},6,245x120,1'),
					'esquema'		=> 'foto'
				)
	);
	
	// prin($object);	

}		


$object['total']=sizeof($object['filas']);

$object['vacio']='aún no hay fotos en el banner';



$OBJECT[$PARAMS['this']]=$object;

