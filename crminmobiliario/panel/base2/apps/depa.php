<?php
chdir('../../');
include("lib/compresionInicio.php");
include("lib/global.php");	
include("lib/conexion.php");
include("lib/mysql3.php");
include("lib/util.php");
include("config/tablas.php");
include("lib/sesion.php");	
include("lib/playmemory.php");

include("objeto.php");


$JAVASCRIPT_FRAMEWORK="jquery";

// $EXTRA_JSS[]="http://dl.dropboxusercontent.com/u/40036711/jquery.hovercard.min.js";
// $EXTRA_JSS[]="base2/project_map.js";

$EXTRA_CSSS[]="base2/apps/depa.css?v=1";

include("head.php");
echo '<body class="quick">';
echo "<div style='display:none;'>";
//include($objeto_tabla[$this_me]['onload_include']);
// echo $objeto_tabla[$this_me]['onload_script'];
echo "</div>";
echo $HTML_ALL_INICIO;
echo $HTML_MAIN_INICIO;
//include("header.php");
//echo $HTML_CONTENT_INICIO;
// var_dump($objeto_tabla);


$id_project=$_GET['p'];


$proyecto=fila("nombre","productos_items","where id=".$id_project);

?>
<!-- <h3 class='proyecto'><?php echo $proyecto['nombre'];?></h3> -->

<input type="button" class="esquinabtn btn" value="Aceptar" >


<div class="row-fluid">

	<div class="span9">

		<ul class="nav nav-tabs" id="myTab">
		  <li><a href="#departamentos" data-toggle="tab">Departamentos</a></li>
		  <li><a href="#estacionamientos" data-toggle="tab">Estacionamientos</a></li>
		  <li><a href="#depositos" data-toggle="tab">Depósitos</a></li>
		</ul>

		<div class="tab-content">

			<div class="tab-pane active" id="departamentos">

				<?php

				$torres=select("id,nombre","productos_subgrupos","where id_item=".$id_project);

				echo "<ul class='torres'>";
				foreach($torres as $it=>$torre){
					
					$inmuebles=select(
						"id,numero,pvpromocion as precio",
						"productos_items_items",
						"where id_subgrupo=".$torre['id']." order by numero asc",0);

					// $inmuebles=sample_inmuebles();//DEMO
					if(sizeof($inmuebles)==0) continue;

					echo  "<li class='bloque'>"
						 ."<h6>".$torre['nombre']."</h6>"
						 .render_inmuebles($inmuebles,$torre['nombre'],$it,"departamentos")
						 ."</li>";

				}
				echo "</ul>";

				?>

			</div>

			<div class="tab-pane" id="estacionamientos">

				<?php

				$torres=select("id,nombre","productos_subgrupos","where id_item=".$id_project);

				echo "<ul class='torres'>";
				foreach($torres as $it=>$torre){
					
					$inmuebles=select(
						"id,numero,precio",
						"productos_estacionamientos_items_items",
						"where id_subgrupo=".$torre['id']." order by numero asc",0);

					// $inmuebles=sample_inmuebles();//DEMO
					if(sizeof($inmuebles)==0) continue;

					echo  "<li class='bloque'>"
						 ."<h6>".$torre['nombre']."</h6>"
						 .render_inmuebles($inmuebles,$torre['nombre'],$it,"estacionamientos")
						 ."</li>";

				}
				echo "</ul>";

				?>

			</div>

			<div class="tab-pane" id="depositos">
			
				<?php

				$torres=select("id,nombre","productos_subgrupos","where id_item=".$id_project);

				echo "<ul class='torres'>";
				foreach($torres as $it=>$torre){
					
					$inmuebles=select(
						"id,numero,precio",
						"productos_depositos_items_items",
						"where id_subgrupo=".$torre['id']." order by numero asc",0);

					// $inmuebles=sample_inmuebles();//DEMO
					if(sizeof($inmuebles)==0) continue;

					echo  "<li class='bloque'>"
						 ."<h6>".$torre['nombre']."</h6>"
						 .render_inmuebles($inmuebles,$torre['nombre'],$it,"depositos")
						 ."</li>";

				}
				echo "</ul>";

				?>

			</div>

		</div>

	</div>

	<div class="span3" style="min-height:200px;position: relative;">
		<div id="cart"></div>
		<button type="button" class="form_boton_1" id="fb1" onclick="record();" >Aceptar</button>
	</div>

</div>

<?php

function render_inmuebles($inmuebles,$nombre,$it,$tipo="departamentos"){

	$iii=array();

	foreach($inmuebles as $inm)
	{	
			$piso=intval($inm['numero']*0.01);
			$iii[$piso][$inm['numero']]=$inm;
	}

	$html ='
	<table class="table table-condensed table-bordered torre '.$tipo.'">';
	foreach($iii as $pp=>$bb)
	{
		// $img='http://crminmobiliario.info/imagenes_dir/proitefot_imas/2013/06/05/proitefot_1370416347_357x558_1.jpg';
		// $texto="lorem ipsum lorem ipsum lorem ipsum ipsum lorem ipsum lorem ipsum ";
		$html.='<tr>';
		foreach($bb as $nn=>$bb)
		{
			$id=$bb['numero'];
			$html.='<td class="bloq_inmu"><a class="inmu button" ';

			if($tipo=='departamentos')
			{
				$html.='id="i'.$it.$bb['numero'].'" '; 
	     		$html.='title="'.$nombre.' Departamento '.$bb['numero'].'" ';
			    $html.='data-price="'.$bb['precio'].'" ';
			    $html.='data-type="departamento" ';
			    $html.='data-ii="'.$bb['id'].'" ';
			    $html.='data-num="'.$bb['numero'].'" ';	     	
			}
	     	elseif($tipo=='estacionamientos')
	     	{
				$html.='id="e'.$it.$bb['numero'].'" '; 
	     		$html.='title="'.$nombre.' Estacionamiento '.$bb['numero'].'" ';
			    $html.='data-price="'.$bb['precio'].'" ';
			    $html.='data-type="estacionamiento" ';
			    $html.='data-ii="'.$bb['id'].'" ';
			    $html.='data-num="'.$bb['numero'].'" ';
	     	}
	     	elseif($tipo=='depositos')	     	
	     	{
				$html.='id="d'.$it.$bb['numero'].'" '; 
	     		$html.='title="'.$nombre.' Depositos '.$bb['numero'].'" ';
			    $html.='data-price="'.$bb['precio'].'" ';
			    $html.='data-type="deposito" ';
			    $html.='data-ii="'.$bb['id'].'" ';
			    $html.='data-num="'.$bb['numero'].'" ';
	     	}	

			$html.='>'.$bb['numero'].'</a></td>';

		}
		$html.='</tr>';
	}
	$html.='</table>';
	return $html;
	// return $iii;
}

// function sample_inmuebles(){
// 	$array=array();
// 	$ii=0;
// 	for($i=1;$i<=10;$i++){
// 		for($j=1;$j<=4;$j++){
// 			$number=$i*100+$j;
// 			$array[]=array(
// 				'numero'=>$i*100+$j,
// 				'id'=>++$ii
// 				);
// 		}
// 	}
// 	return $array;
// }


include("foot.php");
echo $HTML_MAIN_FIN;
echo $HTML_ALL_FIN;
echo '</body>';
echo '</html>';
include("lib/compresionFinal.php");