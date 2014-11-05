<?php //á

$object=[];

if($_GET['tab']=='empresa_items')
	$pagi=2;
elseif($_GET['tab']=='servicios_items')
	$pagi=3;
elseif($_GET['page']=='responsabilidad-social')
	$pagi=5;
elseif($_GET['page']=='servicio-post-venta')
	$pagi=4;
else
	$pagi=1;

// prin($_GET['page']);

$object['filas']=select(
			"id,file,foto_descripcion as texto,fecha_creacion,url"
			,"banners_fotos_fotos"
			,"where 1 and id_grupo='".$pagi."' and  visibilidad='1' order by id desc limit 0,100"
			,0
			,array(
				// 'foto:url'		=> '{url}',
				'foto:atributos'=> array('atributos'=>'banfot_imas,{fecha_creacion},{file},2,980x383,1'),
				'foto:descripcion'=> '{texto}',
				// 'esquema'		=> 'foto,texto'
				'esquema'		=> 'foto,texto'
			)
);

// prin($object['filas']);exit();

$object['total']=sizeof($object['filas']);

$object['vacio']='aún no hay fotos en el banner';






$OBJECT[$PARAMS['this']]=$object;
