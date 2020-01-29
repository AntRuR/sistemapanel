<?php //á
// chdir("../../");


require_once 'lib/PHPExcel.php';

require_once 'lib/PHPExcel/IOFactory.php';




$speeches=select("id as íd_speech,nombre","speeches_import","where 1",0);


$params=filtrarGET($SERVER['PARAMS'],array('me','paso','error'));


$foreig=array();
$obj=$objeto_tabla[$_GET['me']];
foreach($obj['campos'] as $campo){
	if(in_array($campo['tipo'],array('inp','txt'))){
		$autorizados[$campo['label']]=$campo['campo'];
	}
	if($campo['tipo']=='hid'){
		$foreig[$campo['campo']]=$_GET[$campo['campo']];
	}
}
$howto ='
		<p><br /><br />Archivo CSV debe tener la primera fila con los nombres de los encabezados</p>
		<p>los encabezados que se aceptan son:</p>
		<p>';
$howto.="<table class='tbl_import'>";
$howto.="<thead>";
$howto.="<tr>";
foreach($autorizados as $campo){
	$howto.="<th>".$campo."</th>";
}
$howto.="</tr>";
$howto.="</thead>";
$howto.="</tbody>";

for($e=0;$e<5;$e++){
	$howto.="<tr>";
	foreach($autorizados as $label=>$campo){
		$howto.="<td class='label'>".$label."</td>";
	}
	$howto.="</tr>";
}

$howto.="</tbody>";
$howto.="</table>";

$howto.="</p>";





if($_GET['paso']=='upload'){


	if(empty($_POST['id_speech']))
		redir('pop.php?app=importar_gmail&error=speech');

	// prin($_POST);
	$speech=select_dato("texto","speeches_import","where id=".$_POST['id_speech']);

	$file_size = $_FILES['csv']['size'];
	$file_type = $_FILES['csv']['type'];
	$file_temp = $_FILES['csv']['tmp_name'];

	if (is_uploaded_file($file_temp)){

		$objReader = PHPExcel_IOFactory::createReader('Excel5');

		$objReader->setReadDataOnly(true);

		$objPHPExcel = $objReader->load($file_temp);	



		$sheets=$objPHPExcel->getSheetNames();

$rowIterator = $objPHPExcel->getActiveSheet()->getRowIterator();

$array_data = array();
$array_data2 = array();
$array_heads = array();
$array_heads2 = array();
$rowIndexplus=0;
foreach($rowIterator as $row){
    $cellIterator = $row->getCellIterator();
    $cellIterator->setIterateOnlyExistingCells(false); // Loop all cells, even if it is not set
    if(1 == $row->getRowIndex ()) {



   	foreach ($cellIterator as $cell) {

      	$headd=$cell->getCalculatedValue();
         $array_heads[$cell->getColumn()] = $headd;
         $array_heads2[] = "<<".$headd.">>";

    	}
    	
    	// prin($array_heads);

    	continue;
    }//skip first row
    $rowIndex = $row->getRowIndex ();
    // $array_data[$rowIndex] = array('A'=>'', 'B'=>'','C'=>'','D'=>'');
    

   foreach ($cellIterator as $cell) {
   	$array_data[$rowIndexplus][$array_heads[$cell->getColumn()]] = $cell->getCalculatedValue();

   }

    $rowIndexplus++;

}


// prin($_POST);
// prin($array_data);



// exit();


foreach($array_data as $iii=>$data_line){

	foreach($data_line as $data){

		$datato[]=$data;

	}

	$textt="<div>".nl2br(str_replace($array_heads2,$datato,$speech))."</div>";

	// prin($array_heads2);
	// prin($datato);
	// prin($textt);
	$array_data2[$data_line['ATENCION']]=$textt;
	unset($datato);


}

foreach($array_data2 as $jjj=>$texxt){


	$filla=select_fila("id_usuario,user","ventas_items","where id=".$jjj);

	$insertado=insert(
		[
			'texto'          =>$texxt,
			'id_grupo'       =>$jjj,
			'tipo'           =>'1',
			'nombre'         =>"email enviado",
			// 'id_speech'   =>$ID_SPEECH,
			'fecha_creacion' =>"now()",
			'fecha_edicion'  =>"now()",
			'visibilidad'    =>'1',
			
			'user'           =>$filla['user'],
			'id_usuario'     =>$filla['id_usuario'],

		],
		"ventas_mensajes"
	);



}

$inser_alerta=0;

foreach($array_data as $aadd){

	$filla=select_fila("id_usuario,user","ventas_items","where id=".$aadd['ATENCION']);


	$alertas_incumplidas=select(
		'id,alerta,tipo,estado,cumplido,alerta_fecha',
		'ventas_mensajes',
		"where id_grupo=".$aadd['ATENCION']
		." and alerta in (1,2)"
 		." and alerta_fecha!='0000-00-00 00:00:00' and alerta_fecha is not null and alerta_fecha < NOW() AND (cumplido=0 or cumplido is null) "
		." ",
	 	0
	);

	foreach($alertas_incumplidas as $alerta){

		update([
			'cumplido' =>'1',
			'estado'   =>'4'
		],'ventas_mensajes','where id='.$alerta['id']);
		// if(0)

	}

	if( 
		(sizeof($alertas_incumplidas)>0) 
		and $_POST['tipo']!=''
		and $_POST['alerta']!=''
	){
		insert(
			[
			'fecha_creacion' =>'now()',
			'estado'         =>'1',
			'tipo'           =>$_POST['tipo'],
			'texto'          =>$_POST['texto'],
			'alerta'         =>$_POST['alerta'],
			'alerta_fecha'   =>$_POST['alerta_fecha_a'].'-'.$_POST['alerta_fecha_m'].'-'.$_POST['alerta_fecha_d'].' '.$_POST['alerta_fecha_t'],
			'id_grupo'       =>$aadd['ATENCION'],
			'user'           =>$filla['user'],
			'id_usuario'     =>$filla['id_usuario'],
			],
			'ventas_mensajes'
		);

		$inser_alerta++;

	}

}




if(sizeof($array_data2)<1){
	// $error=1;
	redir('pop.php?app=importar_gmail&error=incompatible'.$params);
}

// prin($speech);


		// prin($array_heads2);
		// prin($rowIterator);
		// prin($array_data2);

		// exit();


	} else {

		redir('pop.php?app=importar_gmail&error=file');

	}
}

?>
<style>
body {
	background: none;
}

#div_allcontent {
	min-width: 0;
}

.importar_csv {
	padding: 5px 10px;
	min-height: 410px;
	height: 410px;
	height: auto !important;
	width: 100%;
}
.importar_csv form label {
	font-weight:bold;
}

.importar_csv h1 {
	font-size: 24px;
	color: #333;
	margin: 10px 0;
}

.importar_csv h2 {
	font-size: 20px;
	color: #000;
	margin: 5px 0;
}

.importar_csv form {
	padding: 0px 10px;
	clear: left;
}

.importar_csv form input {
	clear: left;
	/*float: left;*/
	margin: 3px 0;
	/*float: left;*/
	width: auto;
	padding: 3px 10px;
	text-transform: uppercase;
}

.importar_csv .tbl_import_frame {
	overflow-x: auto;
	height: 200px;
	float: left;
	width: auto;
	padding: 0 20px 0 0;
	clear: left;
	margin-top: 10px;
}

.importar_csv .tbl_import {
	margin-left: 20px;
}

.importar_csv .tbl_import th,.importar_csv .tbl_import td {
	border: 1px solid #999;
	padding: 1px 10px 1px 2px;
}

.importar_csv .tbl_import th {
	font-weight: bold;
	font-size: 14px;
	color: #000;
}

.importar_csv .tbl_import td {
	font-weight: normal;
	font-size: 13px;
	color: #666;
}

.importar_csv .tbl_import td.label {
	font-weight: normal;
	font-size: 13px;
	color: #666;
	font-style: italic;
	text-transform: uppercase;
}

.importar_csv p {
	clear: left;
	padding: 2px 10px 0 20px;
	margin: 0;
}

.incompatible {
	color: #000;
	padding: 5px;
	background-color: #FEC0CA;
	float: left;
	clear: left;
	margin-left: 10px;
}
</style>
<body>
	<?php
	echo $HTML_ALL_INICIO;
	echo $HTML_MAIN_INICIO;
	//include("header.php");
	//echo $HTML_CONTENT_INICIO;
	//include("menu.php");
if($_GET['paso']=='fin'){ ?>
	<div class="importar_csv">
		<h1>
			Proceso de Registro masivo de
			<?php echo strtoupper($obj['nombre_plural']);?>
		</h1>
		<?php if($_GET['error']=='fin'){ ?>
		<h2>Error al insertar los registros. Vuelva a intentarlo</h2>
		<?php } else { ?>
		<h2>Fin de proceso : Registros insertados exitosamente</h2>
		<?php } ?>
	</div>
	<?php } elseif($_GET['paso']=='upload'){
		?>
	<div class="importar_csv">

		<h2>Se insertaron exitosamente <?php echo sizeof($array_data2); ?> actividades</h2>

		<h2>Se actualizaron a cumplidos exitosamente <?php echo sizeof($alertas_incumplidas); ?> alertas atrazadas</h2>

		<h2>Se insertaron exitosamente <?php echo $inser_alerta; ?> alertas</h2>

<!-- 		<p>
			<br /> <br /> <a
				href='importar_gmail.php?me=<?php echo $_GET['me'];?><?php echo $params;?>'>voler
				al paso 1</a>
		</p> -->
	</div>

	<?php

	} else {

?>

	<div class="importar_csv">
		<h1>
			Importar archivo de Gmail e insertar en actividades
		</h1>
<!-- 		<h2>PASO 1 : Subir archivo CSV</h2>
 -->
		<?php if($_GET['error']=='incompatible'){ ?>
		<div class="incompatible">
			<b>ERROR DE FORMATO</b> <br />nigun encabezados es compatible con
			esta tabla. <br />Por favor revisar
		</div>
		<?php } ?>

		<?php if($_GET['error']=='speech'){ ?>
		<div class="incompatible">
			<b>ERROR</b> <br />Debe seleccionar un speech. <br />Por favor revisar
		</div>
		<?php } ?>

		<?php if($_GET['error']=='file'){ ?>
		<div class="incompatible">
			<b>ERROR</b> <br />Debe seleccionar un archivo excel de gmail<br />Por favor revisar
		</div>
		<?php } ?>

<form enctype="multipart/form-data" method="post"
action="pop.php?app=importar_gmail&paso=upload<?php echo $params;?>">
<!-- <legend>Archivo CSV (delimitado por comas)</legend> -->


<div>
<br>
<label>Seleccion un Archivo para importar</label>
<input type='file' name="csv" />
</div>	


<div>
<br>	
<label>Seleccione un Speech</label>
<select style="width:200px;" name="id_speech">
<option></option>
<?php 

foreach($speeches as $spee){
	echo '<option value='.$spee['íd_speech'].'>'.$spee['nombre'].'</option>';
}
?></select>
</div>

<br>	
<br>	
<label>Para las atenciones que tengan una alerta atrazada, se marcará como cumplida, y se creará una nueva alerta.</label>
<?php

	$campos=[
		'tipo'			=>array(
				'campo'			=> 'tipo',
				'label'			=> 'Tipo',
				'width'			=> '80px',
				'listable'		=> '1',
				'tipo'			=> 'hid',
				'validacion'	=> '1',
				'opciones'		=> 'id,nombre|mensajes_status|order by nombre asc',
				// 'default'		=> '3',
				'queries'		=> '1',
				'controles'		=> '<a href="custom/ventas_items.php?i=[id_grupo]" rel="file">atención</a>'
		),
		'texto'			=>array(
				'campo'			=> 'texto',
				'label'			=> 'Mensaje',
				'tipo'			=> 'html',
				'listable'		=> '1',
				'validacion'	=> '1',
				'width'			=> '270px',
				'style'			=> 'height:120px;width:550px;',
				'listhtml'		=> '1'
		),
		'alerta'		=>array(
				'campo'			=> 'alerta',
				'label'			=> 'Alerta',
				'width'			=> '80px',
				'listable'		=> '1',
				'tipo'			=> 'hid',
				'derecha'		=> '1',
				'opciones'		=> 'id,nombre|mensajes_alertas',
				// 'default'		=> '3',
				'queries'		=> '1',
				'validacion'	=> '1',
		),
		'alerta_fecha'	=>array(
				'campo'			=> 'alerta_fecha',
				'label'			=> '',
				'tipo'			=> 'fch',
				'listable'		=> '1',
				'formato'		=> '7b',
				'time'			=> '1',
				'width'			=> '136px',
				'derecha'		=> '2',
				'default'		=> '',
				'rango'			=> 'now,+1 years',
				'queries'		=> '0',
				'validacion'	=> '1',
		),
	];



	echo '<div class="componente"><ul>';
	foreach($campos as $camP=>$tbcampA){
		echo '<li>';
	switch($tbcampA['tipo']){
		// case "com":
		// 	if(
		// 		$tbcampA['indicador']=='1'){
		// 	echo "&nbsp;";
		// 	} else {
		// 	echo "";
		// 	$bufy='';
		// 	$oopciones=$tbcampA['opciones'];
		// 	$bufy.="<select ".$valis." class='".$datos_tabla['archivo']."-_".$id." formi' id='".$datos_tabla['archivo']."-_".$id."-_".$tbcampA['campo']."' >";
		// 	$bufy.="<option value='' >".$tbcampA['label']."</option>";
		// 	foreach($oopciones as $iioo=>$pppooo){
		// 	$bufy.="<option value=\"".$iioo."\">".$pppooo."</option>";
		// 	}
		// 	$bufy.="</select>";
		// 	echo $bufy;
		// 	}
		// break;
		case "hid":
		
			if($tbcampA['noedit']=='1'){
			echo "&nbsp;";
			} else {
			list($primO,$tablaO,$whereO)=explode("|",$tbcampA['opciones']);
			list($idO,$camposO)=explode(",",$primO);
			$camposOA=array();

			$bufy='';
			$oopciones=select(array($idO,"CONCAT_WS(' ',". str_replace(";",",",$camposO) .") as value"),$tablaO,$whereO);
			$bufy.="<select ".$valis." class='".$datos_tabla['archivo']."-_".$id." formi' name='".$tbcampA['campo']."' >";
			$bufy.="<option value='' >".$tbcampA['label']."</option>";
			foreach($oopciones as $pppooo){
			$bufy.="<option value=\"".$pppooo[$idO]."\">".$pppooo['value']."</option>";
			}
			$bufy.="</select>";
			echo $bufy;

			}

		break;
		case "fch":
			// echo "&nbsp;";

			if($tbcampA['rango']){
			list($uuno,$ddos)=explode(",",$tbcampA['rango']);
			$fromYear = date("Y",strtotime($uuno));
			$toYear = date("Y",strtotime($ddos));
			} else {
			$fromYear = date("Y")-99;
			$toYear = date("Y")+1;
			}

			$html='';
			$html.= "<select name='".$tbcampA['campo']."_d' style='width:52px;font-size:12px;margin-right:-23px;' class='form_input form_input_fecha' 
			>";
			$html.= "<option></option>";
			for($i=1; $i<=31;$i++){
			if($tbcampA['default']=='now()'){ $selected=(sprintf("%02d",$i)==date("d"))?"selected":""; }
			$html.="<option value='". sprintf("%02d",$i) ."' $selected >".$i."</option>";
			}
			$html.= "</select>";


			$html.= "<select name='".$tbcampA['campo']."_m' style='width:53px;font-size:12px;margin-right:-23px;' class='form_input form_input_fecha' 
			>";
			$html.= "<option></option>";
			for($i=1; $i<=12;$i++){
			if($tbcampA['default']=='now()'){ $selected=(sprintf("%02d",$i)==date("m"))?"selected":""; }
			$html.="<option value='". sprintf("%02d",$i) ."' $selected >".substr($Array_Meses[$i],0,3)."</option>";
			}
			$html.= "</select>";


			$html.= "<select  name='".$tbcampA['campo']."_a' style='width:57px;font-size:12px;margin-right:-23px;' class='form_input form_input_fecha' 
			>";
			$html.= "<option></option>";
			for($i=$toYear; $i>=$fromYear;$i--){
			if($tbcampA['default']=='now()'){ $selected=($i==date("Y"))?"selected":""; }
			$html.="<option value='".$i."' $selected >".$i."</option>";
			}
			$html.= "</select>";


			if($tbcampA['time']){
			$html.= "<select  name='".$tbcampA['campo']."_t' style='width:70px;font-size:10px;margin-right:0px;' class='form_input form_input_fecha' 
			>";
			$html.= "<option></option>";
			if($tbcampA['time']=='1'){
				for($i=0; $i<24;$i++){
					$html.="<option value='".sprintf("%02d",$i).":00:00' >".$Array_Horas[$i]."</option>";
				}
			} elseif($tbcampA['time']=='2'){
				$yii=0;
				for($i=0; $i<24;$i++){
					for($jk=0; $jk<=3;$jk++){
						$html.="<option value='".sprintf("%02d",$i).":".sprintf("%02d",$jk*15).":00' >".$Array_Horas2[$yii++]."</option>";
					}
				}
			}
			$html.= "</select>";
			} else {
			$html.= "<input type='hidden' name='".$tbcampA['campo']."_t' />";
			}

			// $html.= "<input type='hidden'  ".$valis." class='".$datos_tabla['archivo']."-_".$id." formi' name='".$tbcampA['campo']."' ".(($tbcampA['default']=='now()')?"value='".date("Y-m-d 00:00:00")."'":"")." />";
			
			echo $html;
		break;
		case "html":
			echo "<textarea placeholder='".$tbcampA['label']."' ".$valis." class='".$datos_tabla['archivo']."-_".$id." formi flext growme' name='".$tbcampA['campo']."' ></textarea>";
		break;
		// default:
		// 	echo "<input type='text' ".$valis." class='".$datos_tabla['archivo']."-_".$id." formi' name='".$tbcampA['campo']."'  />";
		// break;
	}//switch
		echo '</li>';
	}
	echo '</ul></div>';


?>
<br>	
<br>	
<style>
.componente ul li {
	display:inline-block;
	vertical-align: top
}
</style>
<input type="submit" value="IMPORTAR" />

</form>

<?php //echo $howto; ?>
</div>
	<?php

}
//echo $HTML_CONTENT_FIN;
//include("foot.php"); 
echo $HTML_MAIN_FIN;	
echo $HTML_ALL_FIN;
?>
</body>
</html>
<?php
include("lib/compresionFinal.php");