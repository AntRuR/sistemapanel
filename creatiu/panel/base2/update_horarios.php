<!--
<?php

$horarios=select("id,capacidad,cupos","horarios","where 1",0);
foreach($horarios as $hor){
	$num_matriculados=contar("matriculas","where id_horario=".$hor['id'],0);
	update(["cupos"=> $hor['capacidad'] - $num_matriculados ],"horarios","where id=".$hor['id'],0);
}

?>-->