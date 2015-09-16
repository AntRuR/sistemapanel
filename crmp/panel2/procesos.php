<?php //á
?><div style="clear:left;">Procesos</div><?php

include("lib/webutil.php");
require_once('lib/simple_html_dom.php');
chdir("base2/procesos");

$urlpartes=explode("/",getcwd());

if(end($urlpartes)!='procesos'){

echo '<div class="alert alert-warning" style="clear:left;">falta crear la carpeta "procesos"</div>';

} else {

	set_time_limit(0);


	//leer directorio de procesos
	//leer formato de titulo y decripción
	// echo "no hay procesos";
	// echo getcwd();
	
	$dirs=array();
	$dires = dir(".");
	while($fichero=$dires->read()) {

		if(
			!in_array($fichero,['.','..']) and
			!is_dir($fichero) and
			substr($fichero, -4,4)=='.php'
			)
		{
			$des=between(implode(file($fichero)),"/**\n *","* \n */");
			$dirs[]=array('name'=>$fichero,'desc'=>$des[1]);
		}

	}
	echo '<h3><a href="maquina.php?tab=procesos">Procesos</a></h3>';
	echo '<ul>';
	foreach($dirs as $arcv){

		$success=($_GET['proceso']==$arcv['name'])?'success':'info';

		echo "<li>
		<a class='btn btn-".$success."' style='text-transform:uppercase;' href='maquina.php?tab=procesos&proceso=".$arcv['name']."'>".$arcv['name']."</a>
		<div class='alert alert-".$success."'>".$arcv['desc']."</div>
		</li>";
	}
	echo '</ul>';

	// prin($dirs);


	if($_GET['proceso']!=''){


		echo '<div style="clear:left;">';
		prin('inicio');
		echo '</div>';

		include($_GET['proceso']);

		echo '<div style="clear:left;">';
		prin('fin');
		echo '</div>';


		echo "<br><br><br>";

	} 

}



