<?php
/*
$matriculas=select(
	"fecha_creacion,id,id_project,id_horario,status",
	"matriculas",
	"where id_alumno=".$_GET['i']." order by fecha_creacion asc",
	0,
	[
		'fecha'=>["fecha_formato"=>["{fecha_creacion}","10"]],
		'curso'=>["dato"=>["name","projects","where id={id_project}",0]],
		'horario'=>["dato"=>["info","horarios","where id={id_horario}",1]]


	]
	);

echo '<div class="itms_cont">';
foreach($matriculas as $mat){

}
echo '</div>';
prin($matriculas);

*/