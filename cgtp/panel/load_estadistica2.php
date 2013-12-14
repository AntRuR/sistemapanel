<?php
@session_start(); // Iniciar variables de sesión
include("lib/compresionInicio.php");
include("lib/global.php");	
include("lib/conexion.php");
include("lib/mysql3.php");
include("lib/util.php");
//	include("lib/stripattributes.php");
include("config/tablas.php");	

if(0){

srand((double)microtime()*1000000);
$data = array();
// add random height bars:
for( $i=0; $i<10; $i++ ){
  $data[] = rand(2,9);
}

 
require_once('OFC/OFC_Chart.php');

$title = new OFC_Elements_Title( date("D M d Y") );

$bar = new OFC_Charts_Bar_3d();
$bar->set_values( $data );
$bar->colour = '#0645AD';

$x_axis = new OFC_Elements_Axis_X();
$x_axis->set_3d( 5 );
$x_axis->colour = '#909090';
$x_axis->set_labels( array(1,2,3,4,5,6,7,8,9,10) );

$chart = new OFC_Chart();
$chart->set_title( $title );
$chart->add_element( $bar );
$chart->set_x_axis( $x_axis );

echo $chart->toPrettyString();

}

//prin($_GET);

			$OBJ=$datos_tabla=procesar_objeto_tabla($objeto_tabla[$_GET['ob']]);

			parse_str($_GET['filtro'], $get);
			$ordby=trim(str_replace("order by","",$get['orderby']));

			if($_GET['filtro']!=''){
			$where="where 1 and ( ".query_filter($_GET['filtro'])." ) ";	
			} else {
			$where="where 1 ";
			}
			
			$query_where=$where
						 . ( ($get['orderby']!='')? str_replace("order by","group by",$get['orderby']): '' )." ";
						 
			$items=select("$ordby as nombre, count(*) as total",
							$datos_tabla['tabla'],
							$query_where,0);
						
			foreach($items as $lll=>$linea){
			
					switch($objeto_tabla[$_GET['ob']]['campos'][$ordby]['tipo']){
					case "com":
						$valoor=$objeto_tabla[$_GET['ob']]['campos'][$ordby]['opciones'][$linea['nombre']];
						//$valoor=($valoor!='')?$valoor:"&nbsp;";

						$items[$lll]['nombre']=$valorr;						
					break;
					case "hid":
						list($primO,$tablaO)=explode("|",$objeto_tabla[$_GET['ob']]['campos'][$ordby]['opciones']);
						list($idO,$camposO)=explode(",",$primO);
						$camposOA=array();
						$camposOA=explode(";",$camposO);
						$bufy='';
						foreach($camposOA as $COA){
						$bufy.= select_dato($COA,$tablaO,"where ".$idO."='".$linea['nombre']."'")." ";
						}
						$items[$lll]['nombre']=$bufy;
					break;
					
					}
			
			}	
			

include 'php-ofc-library/open-flash-chart.php';


$title = new title( '' );
$title->set_style('color: #f0f0f0; font-size: 20px');
foreach($items as $item){
$d[]=new pie_value($item['total'],  $item['nombre']);
}

$pie = new pie();
$pie->alpha(0.5)
    ->add_animation( new pie_fade() )
    ->add_animation( new pie_bounce(5) )
    //->start_angle( 270 )
    ->start_angle( 0 )
    ->tooltip( '#val# de #total#<br>#percent#%' )
    ->colours(array("#d01f3c","#356aa0","#C79810"));

$pie->set_values( $d );

$chart = new open_flash_chart();
$chart->set_title( $title );
$chart->add_element( $pie );
//$chart->set_bg_colour('#202020');

echo $chart->toPrettyString();

if(0){
$title = new title( 'titulo' );

$d = array();
$d[] = 2;        // <-- blue
$d[] = 3;        // <-- grey
$d[] = 4;        // <-- green
$tmp = new pie_value(6.5, "");
//
// this slice would normally be light green
// but we are overriding the colour here:
//
$tmp->set_colour( '#FF33C9' );
$tmp->set_label('BIG', '#FF653F', 24 );
$d[] = $tmp;
//
// here the colour cycle wraps and this gets the
// first colour:
//
$d[] = new pie_value(6.5, "6.5");    // <-- blue
$d[] = 3;        // <-- grey
$d[] = 4;        // <-- green
$d[] = 2;        // <-- light green



$pie = new pie();
$pie->start_angle(35)
    ->add_animation( new pie_fade() )
    ->add_animation( new pie_bounce(4) )
    // ->label_colour('#432BAF') // <-- uncomment to see all labels set to blue
    ->gradient_fill()
    ->tooltip( '#val# de #total#<br>#percent# of 100%' )
    ->colours(
        array(
            '#1F8FA1',    // <-- blue
            '#848484',    // <-- grey
            '#CACFBE',    // <-- green
            '#DEF799'    // <-- light green
        ) );

$pie->set_values( $d );

$chart = new open_flash_chart();
$chart->set_title( $title );
$chart->add_element( $pie );

echo $chart->toPrettyString();
}


include("lib/compresionFinal.php");	/*para Content-Encoding*/ 
