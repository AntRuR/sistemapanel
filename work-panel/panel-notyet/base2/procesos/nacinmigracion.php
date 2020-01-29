<style>
.line_content ul li {
	display :none;
}
.line_content ul li.nacinmigracion {
	display:block;
}
</style>
<?php

// echo getcwd().'<br>';

$compares=[
		// [
		// 'filter'	  =>'id_grupo',
		// 'vehiculos'=>'vehiculos_productos_grupos',
		// 'diamantes'=>'productos_grupos',
		// ],
		/*
		[
		'nombre'   =>'estados',
		'filter'	  =>'id_status',		
		'vehiculos'=>'vehiculos_ventas_status',
		'diamantes'=>'ventas_status',
		],

		[
		'nombre'   =>'canales',
		'filter'	  =>'id_canal',		
		'vehiculos'=>'vehiculos_contacto_canales',
		'diamantes'=>'contacto_canales',
		],
		*/
		[
		'nombre'   =>'modelos',
		'filter'	  =>'id_item',
		'vehiculos'=>'vehiculos_productos_items',
		'diamantes'=>'productos_items',
		],		


	];



	echo '<form method="post">';
	echo '<input type="submit" value="enviar">';
	foreach($compares as $compare){


		$ffiillee='equivalencia_'.$compare['nombre'].'.php';

		if(!file_exists($ffiillee)) 
			$f1=fopen($ffiillee,"w+");
			fwrite($f1,"<?php\n return [];");
			fclose($f1);


		if($_SERVER['REQUEST_METHOD']=='POST'){

			$array='';
			foreach($_POST[$compare['nombre']] as $var=>$val){

				if(trim($val)!='')
					$array.="\n'$var'=>'$val',";

			}

			$f1=fopen($ffiillee,"w+");
			fwrite($f1,"<?php\n return [".$array."];");
			fclose($f1);

		}


		$equivalencia=require $ffiillee;
	
		// prin($equivalencia);

		echo '<h3>'.$compare['nombre'].'</h3>';

		echo '<table><tr><td valign=top>';


			// echo '<h3>'.$compare['vehiculos'].'</h3>';
			$vehiculos_datos=get_valores('id','nombre',$compare['vehiculos'],'',0);



			echo '<table style="width:300px;margin-right:100px;">';
			foreach($vehiculos_datos as $id=>$name){
				echo '<tr>';
				echo '<td>';
				echo $id;
				echo '</td><td>';
				if($compare['diamantes']=='productos_items')
					echo ''.dato("nombre",'vehiculos_productos_grupos','where id='.dato('id_grupo','vehiculos_productos_items','where id='.$id))." : ";				
				echo $name;
				echo '</td><td>';
				echo '<input type="text" value="'.$equivalencia[$id].'" style="width:50px;" name="'.$compare['nombre'].'['.$id.']">';
				// echo contar("vehiculos_ventas_items","where ".$compare['filter']."=".$id);
				echo '</td>';
				echo '</tr>';
			}
			echo '</table>';


		echo '</td><td valign=top>';

			// echo '<h3>'.$compare['diamantes'].'</h3>';
			$diamantes_datos=get_valores('id','nombre',$compare['diamantes'],'',0);


			echo '<table style="width:300px;"><tr>';
			foreach($diamantes_datos as $id=>$name){
				echo '<tr>';
				echo '<td>';
				echo $id;
				echo '</td><td>';
				if($compare['diamantes']=='productos_items')
					echo ''.dato("nombre",'productos_grupos','where id='.dato('id_grupo','productos_items','where id='.$id,0)).' : ';
				echo $name;
				echo '</td><td>';
				// echo contar("ventas_items","where ".$compare['filter']."=".$id);
				echo '</td>';
				echo '</tr>';
			}
			echo '</tr></table>';



		echo '</td></tr></table>';

	}

	echo '</form>';

	if(0){

	$objeto_tabla_temp=$objeto_tabla;

	//
	// echo 'diamantes<br>';

	$ruta_diamantes='../../config/';

	include($ruta_diamantes.'tablas.php');

	$objeto_tabla_diamante=$objeto_tabla;


	unset($objeto_tabla);


	//
	// echo 'vechiculos<br>';

	$ruta_vehiculos='../../../../crmcallcenter/panel/config/';

	// echo (file_exists($ruta_vehiculos.'tablas.php'))?'existe':'no existe';
	// echo '<br>';

	include($ruta_vehiculos.'tablas.php');

	$objeto_tabla_vehiculos=$objeto_tabla;


	unset($objeto_tabla);

	$objetos=['VENTAS_ITEMS','CLIENTES','VENTAS_MENSAJES',];

	foreach ($objetos as $key => $value) {
		# code...

	$campos_diamante=get_campos($objeto_tabla_diamante[$value]['campos']);

	$campos_vehiculos=get_campos($objeto_tabla_vehiculos[$value]['campos']);

	echo '<h2>'.$value.'</h2>';
	?>
	<table>
	<tr>
	
	<td valign=top> vechiculos<br>
	<?=prin($campos_vehiculos);?> </td>

	<td valign=top> diamantes<br>
	<?=prin($campos_diamante);?> </td>

	</tr>
	</table>

	<?php 

	}


function get_campos($campos){

	$campos_array=[];
	foreach ($campos as $key => $value) {
		$campos_array[]=$value['campo'];
	}
	return $campos_array;

}

$objeto_tabla=$objeto_tabla_temp;

}