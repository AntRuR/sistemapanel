<?php //á

$object=[];

$object['filas']=select(
			"id,file,foto_descripcion as texto,fecha_creacion,url"
			,"banners_fotos_fotos"
			,"where 1 and id_grupo='1' and  visibilidad='1' order by id desc limit 0,100"
			,0
			,array(
				// 'foto:url'		=> '{url}',
				'foto:atributos'=> array('atributos'=>'banfot_imas,{fecha_creacion},{file},2,983x347,1'),
				'foto:descripcion'=> '{texto}',
				// 'esquema'		=> 'foto,texto'
				'esquema'		=> 'foto'
			)
);

$object['total']=sizeof($object['filas']);

$object['vacio']='aún no hay fotos en el banner';




$HEAD['LOAD']['flux']=true;

$HEAD['INCLUDES']['script'][]="
$( document ).ready(function() {

	var tarray = new Array();
	tarray.push('blinds');
	// tarray.push('slide');

	window.f = new flux.slider('.banner_main', {
					    // autoplay: false,
					    pagination: true,
					    captions: true,
					    // transitions: tarray,
					    delay: 7000,					
					});	

});
";
   


$OBJECT[$PARAMS['this']]=$object;
