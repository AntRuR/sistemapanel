<?php 

$marcas=select("id,nombre,visibilidad","productos_grupos","where visibilidad=1");

echo '<textarea>';
$html='<option name=\'\'>Marca</option>';
foreach($marcas as $marca){

	$modelos=select("id","productos_items","where id_grupo=".$marca['id']." and visibilidad=1",0);
	if(sizeof($modelos)==0) continue;

	$nombre=trim($marca['nombre']);
	$html.="<option name='".$nombre."'>".$nombre."</option>";
}
echo 'var marcas="'.$html.'";

var modelos = [];
';

foreach($marcas as $marca){

	$modelos=select("id,nombre,visibilidad","productos_items","where id_grupo=".$marca['id']." and visibilidad=1",0);
	if(sizeof($modelos)==0) continue;
	// prin($modelo);
	$html='<option name=\'\'>Modelo</option>';
	foreach($modelos as $modelo){
		$nombre=trim($modelo['nombre']);
		$html.="<option name='".$nombre."'>".$nombre."</option>";
	}

	echo 'modelos["'.$marca['nombre'].'"]="'.$html.'";
';

}

echo '</textarea>';
