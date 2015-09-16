<?php
chdir('../../');
include("lib/compresionInicio.php");
include("lib/global.php");	
include("lib/conexion.php");
include("lib/mysql3.php");
include("lib/util2.php");
include("config/tablas.php");
include("lib/sesion.php");	
include("lib/playmemory.php");

include("objeto.php");

// prin($_GET);

$JAVASCRIPT_FRAMEWORK="jquery";

// $EXTRA_JSS[]="http://dl.dropboxusercontent.com/u/40036711/jquery.hovercard.min.js";
// $EXTRA_JSS[]="base2/project_map.js";

$EXTRA_CSSS[]="base2/apps/depa.css?v=71";

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

if($_GET['p']==''){

	// prin($SERVER);

	$projects=select("id,nombre","productos_items","where visibilidad=1");

	echo "<div style='margin-top:30px;' class='alert alert-error'>Primero debe de seleccionar un proyecto</div>";

	echo '<select id="in_id_item" onchange="location.href=\''.$SERVER['BASE'].$SERVER['ARCHIVO_REAL'].'?p=\'+this.value;">';
		echo '<option value="">Seleccione un proyecto</option>';
		foreach($projects as $lin2){
			echo '<option value="'.$lin2['id'].'">'.strtoupper($lin2['nombre']).'</option>';
		}
	echo '</select>';

} else {

$id_project=$_GET['p'];

$proyecto=fila("nombre","productos_items","where id=".$id_project);

?>
<!-- <h3 class='proyecto'><?php echo $proyecto['nombre'];?></h3> -->
<!-- <input type="button" class="esquinabtn btn" value="Aceptar" >-->
<input type="hidden" id="in_id_item" value="<?php echo $_GET['p']; ?>" >
<div class="row-fluid">

	<div class="span9">

		<h3><?php echo $proyecto['nombre'];?></h3>
		<ul class="nav nav-tabs" id="myTab">
		  <li><a href="#departamentos" data-toggle="tab">Departamentos</a></li>
		  <li><a href="#estacionamientos" data-toggle="tab">Estacionamientos</a></li>
		  <li><a href="#depositos" data-toggle="tab">Depósitos</a></li>
		</ul>

		<div class="tab-content">

			<div class="tab-pane active" id="departamentos">

				<?php

				$avista=array('1'=>'Int','2'=>'Ext');

				$torres=select("id,nombre","productos_subgrupos","where id_item=".$id_project);

				echo "<ul class='torres'>";
				foreach($torres as $it=>$torre){
					
					$inmuebles=select(
						"id,numero,pvpromocion as precio,id_status,vista,area_construida,area_total",
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

		<?php 

		$tipos=array('1'=>'Piso 1','2'=>'Sótano 1','3'=>'Sótano 2','4'=>'Sótano 3','5'=>'Sótano 4');

		?>

			<div class="tab-pane" id="estacionamientos">

				<?php

				$torres=select("id,nombre","productos_subgrupos","where id_item=".$id_project,0);

				foreach($torres as $it=>$torre){

					echo "<ul class='torres'>";

					foreach($tipos as $idtipo=>$tipo){ 

							$inmuebles=select(
								"id,numero,precio,id_status,tipo",
								"productos_estacionamientos_items_items",
								"where id_subgrupo=".$torre['id']." and tipo=".$idtipo." order by numero asc",0);

							// $inmuebles=sample_inmuebles();//DEMO
							if(sizeof($inmuebles)==0) continue;

							// echo "|".sizeof($inmuebles)."|";

							echo  "<li class='bloque'>"
								 ."<h6>".$torre['nombre']." - ".$tipo."</h6>"
								 .render_inmuebles($inmuebles,$torre['nombre'],$it,"estacionamientos")
								 ."</li>";

					}

					echo "</ul>";

				}

				?>

			</div>

			<div class="tab-pane" id="depositos">
			
				<?php

				$torres=select("id,nombre","productos_subgrupos","where id_item=".$id_project);

				foreach($torres as $it=>$torre){
					
					echo "<ul class='torres'>";

					foreach($tipos as $idtipo=>$tipo){ 

						$inmuebles=select(
							"id,numero,precio,id_status,tipo",
							"productos_depositos_items_items",
							"where id_subgrupo=".$torre['id']." and tipo=".$idtipo." order by numero asc",0);

						// $inmuebles=sample_inmuebles();//DEMO
						if(sizeof($inmuebles)==0) continue;

						echo  "<li class='bloque'>"
							 ."<h6>".$torre['nombre']."</h6>"
							 .render_inmuebles($inmuebles,$torre['nombre'],$it,"depositos")
							 ."</li>";

					}

					echo "</ul>";

				}

				?>

			</div>

		</div>

	</div>

	<div class="span3" style="min-height:200px;position: relative; padding-bottom:20px;">
		<div id="cart"></div>
		<button type="button" class="btn btn-small btn-primary" id="fb1" onclick="record();" >Aceptar</button>
	</div>

</div>

<?php

}

function render_inmuebles($inmuebles,$nombre,$it,$tipo="departamentos"){

	global $avista;

	$status=[
	'1'=>'disponible',
	'2'=>'separado',
	'3'=>'vendido',
	'4'=>'vendido',
	];

	$iii=array();

	foreach($inmuebles as $inm)
	{	
		if($tipo=="departamentos"){

			$piso=intval($inm['numero']*0.01);
			$iii[$piso][$inm['numero']]=$inm;

		} else {

			if(is_numeric(substr($inm['numero'],0,1)))
				$iii[0][$inm['numero']]=$inm;
			else {
				$letra=substr($inm['numero'],0,1);
				$numer=substr($inm['numero'],1);
				$numer=str_pad($numer, 3, "0", STR_PAD_LEFT);
				$iii[0][$letra.$numer]=$inm;				
			}
		}
	}

	if($iii[0])
		ksort($iii[0]);
		
	// if($tipo=="estacionamientos")
	// prin($iii);

	foreach($iii as $pp=>$bbb){
		$rrrr[]=sizeof($bbb);
	}

	$maxpiso=max($rrrr);

	$html ='
	<table class="table table-condensed table-bordered torre '.$tipo.'">';

	foreach($iii as $pp=>$bbb)
	{
		// $img='http://crminmobiliario.info/imagenes_dir/proitefot_imas/2013/06/05/proitefot_1370416347_357x558_1.jpg';
		// $texto="lorem ipsum lorem ipsum lorem ipsum ipsum lorem ipsum lorem ipsum ";
		$html.='<tr>';
		foreach($bbb as $nn=>$bb)
		{
			$id=$bb['numero'];
			$html.='<td class="bloq_inmu" '. ( ( sizeof($bbb)==1 )?'colspan="'.$maxpiso.'"':'' ) .' ><a  ';

			if($tipo=='departamentos')
			{
				$html.='id="departamento'.$bb['id'].'" '; 
	     		$html.='title="'.$nombre.' Departamento '.$bb['numero'].'" ';
			    $html.='data-type="departamento" ';    	
			}
	     	elseif($tipo=='estacionamientos')
	     	{
				$html.='id="estacionamiento'.$bb['id'].'" '; 
	     		$html.='title="'.$nombre.' Estacionamiento '.$bb['numero'].'" ';
			    $html.='data-type="estacionamiento" ';
	     	}
	     	elseif($tipo=='depositos')	     	
	     	{
				$html.='id="deposito'.$bb['id'].'" '; 
	     		$html.='title="'.$nombre.' Depositos '.$bb['numero'].'" ';
			    $html.='data-type="deposito" ';
	     	}	

			$html.='class="inmu button '.$status[$bb['id_status']].'" '; 
		    $html.='data-torre="'.$nombre.'" ';
		    $html.='data-price="'.$bb['precio'].'" ';
		    $html.='data-ii="'.$bb['id'].'" ';
		    $html.='data-num="'.$bb['numero'].'" ';

			$html.='>'.$bb['numero'].' <span class="pares">(';
			$html.=$avista[$bb['vista']].' ';
			$html.=$bb['area_total'].'m2)</span>';
			// $html.=' '.$bb['id_status'];
			$html.='</a></td>';

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
?>
<div class="leyenda">
	<div>Leyenda</div>
	<table class="table table-condensed table-bordered torre departamentos">
	<tr>
		<td class="bloq_inmu">
			disponible
			<a class="inmu button disponible"></a>			
		</td>
		<td class="bloq_inmu">
			separado
			<a class="inmu button separado"></a>						
		</td>
		<td class="bloq_inmu">
			vendido
			<a class="inmu button vendido"></a>						
		</td>		
	</tr>
	</table>

</div>	
<?php
echo '</body>';
echo '</html>';
include("lib/compresionFinal.php");