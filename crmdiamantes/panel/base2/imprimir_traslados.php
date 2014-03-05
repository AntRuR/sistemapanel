<?php //á

/*

header("Content-type: plain/text");

header('Content-Disposition: attachment;filename="guia_traslados_'.date("Y-m-d_h_m_s").'_codigo_'.$II.'.pdf"');

header('Cache-Control: max-age=0');

header ("Pragma: no-cache");

*/

/*

echo "<pre>";

print_r(array($SS,$PP,$II,$TT,$II,$LL));

echo "</pre>";

*/

if($LL['numero_guia']!=''){

	$numguia=$LL['numero_guia'];

	$subir=0;

} else {

	$subir=1;

	switch($_SESSION['usuario_id']){

	case "126":

		$extrac=implode(file('base2/villa.txt'));

		$numguia="003 ".sprintf("%07d",$extrac);

	break;

	case "127":

		$extrac=implode(file('base2/surquillo.txt'));

		$numguia="002 ".sprintf("%07d",$extrac);

	break;

	default:

		$numguia='';

	break;

	}

}



function render_file($OO,$LL){



$LL=showRenderData($OO,$LL);

$max=0;

$ttt=0;

foreach($OO['campos'] as $cam=>$obj){

if(in_array($obj['tipo'],array('fcr','fed','pos','vis','cal','tags','conf')) or $obj['indicador']=='1'){ continue; }

if($obj['derecha']=='1' or $max>0){	$max++; $MAX=($max>$MAX)?$max:$MAX; $max=0; $ttt++;	}

elseif($obj['derecha']=='2') {	$max++;	}	

$OOOO[$ttt][]=$obj;

}

//prin($MAX);

$html='';

$html.= "<table cellpadding=0 cellspacing=5 border=0 width=700 style='border:1px solid #333;'>";

foreach($OOOO as $OOO){

$html.= "<tr>";

foreach($OOO as $yt=>$obj){

$html.= "<td border=0 ";

$html.= (sizeof($OOO)==$MAX)?"":"colspan='2'";

$html.= ">";

$html.= "<table cellpadding=5 cellspacing=0 border=0 width='100%'  >";

$html.= "<tr>";

$html.= "<td width='110px' style='border:1px solid #ddd;'>".$obj['label']."</td>";

$html.= "<td style='border:1px solid #333; '>".(($LL[$obj['campo']])?$LL[$obj['campo']]:"&nbsp;")."</td>";

$html.= "</tr>";

$html.= "</table>";

$html.= "</td>";

}

$html.= "</tr>";

}

$html.= "</table>";

return $html;



}



$content='';

/*

$content.="<style>td{font-family:arial;font-size:11px;}</style></head><body>";

$content.="<br><br><br>";

$content.=render_file($OO,$LL);

*/

//prin($OO);

//prin(showRenderData($OO,$LL));

$LL0=$LL;

// prin($LL0);

$LL=showRenderData($OO,$LL);

$TEMP=fila(array("CONCAT_WS(' ',nombre,apellidos) as v"),"usuarios","where id=".dato('venta_id_vendedor','productos_items_items',"where id=".$LL0['id_item_item']),0);

$LL['vendedor']=$TEMP['v'];

/*

$TEMP=fila(array("CONCAT_WS(' ',nombre,apellidos) as v","dni as d"),"clientes","where id=".dato('venta_id_cliente','productos_items_items',"where id=".$LL0['id_item_item']),0);

$LL['cliente']=$TEMP['v'];

$LL['ruc']=$TEMP['d'];

*/

$LL['cliente']=$LL['destinatario'];

$LL['ruc']=$LL['ruc'];



$TEMP=fila(array("direccion as v"),"productos_ubicaciones","where id=".$LL0['id_ubicacion_llegada'],0);
// prin($TEMP);

$LL['id_ubicacion_llegada']=$TEMP['v'];



$TEMP=fila(array("direccion as v"),"productos_ubicaciones","where id=".$LL0['id_ubicacion_salida'],0);

$LL['id_ubicacion_salida']=$TEMP['v'];



$TEMP=fila("nombre,licencia","choferes","where id=".$LL0['id_chofer']);

$LL['chofer_nombre']=$TEMP['nombre'];

$LL['chofer_licencia']=$TEMP['licencia'];



$MT=array(

'1'=> 'Venta',

'2'=> 'Entre Establecimiento de la misma empresa',

'3'=> 'Venta sujeta a confirmar',

'4'=> 'Importación',

'5'=> 'Exportación',

'6'=> 'Compra',

'7'=> 'Devolución',

'8'=> 'Consignación',

'9'=> 'Emisor Itinerante',	

);

$LL['motivo_traslado']=(trim($LL['motivo_traslado_otros'])!='')?$LL['motivo_traslado_otros']:$MT[$LL['motivo_traslado']];

//$LL['motivo_traslado']=8;

// prin($LL);





$content.='

<style type="text/Css">

<!--

.codigo {position:absolute;top:255px;left:450px;font-size: 13px;font-family:arial;}

td { font-family:arial; }

table.cuadro

{

    border: 0px;

    background: #FFFFFF;

    border-collapse: collapse;

	position:absolute;top:325px;left:10px;

}

table.subcuadro2

{

    border: 0px;

    background: #FFFFFF;

    border-collapse: collapse;

}

table.subcuadro2 td {

    border: solid 1px #333333;

}

table.subcuadro2 td.label { font-weight:bold; width:180px;font-size: 12px; border: solid 1px #000000; }

table.subcuadro2 td.value { font-weight:normal; width:180px;font-size: 12px; color:blue; border: solid 1px #000000; }

table.subcuadro2 td.titulo { font-weight:bold; font-size:14px; text-align:center;}

table.subcuadro2 td.linea { heigth:12px;font-size:5px;border-right:0px;border-left:0px; }



table.subcuadro

{

    border: 0px;

    background: #FFFFFF;

    border-collapse: collapse;

}

table.subcuadro td {

    border: 0px;

}

table.subcuadro td.sublabel { font-weight:normal; width:150px;font-size: 12px; border-right:solid 1px #000000; border:solid 1px #666666;  height:13px; }

table.subcuadro td.subvalue { font-weight:normal; width:20px;font-size: 15px; border:solid 1px #666666; color:blue; text-align:center;}



table.cuadro td.labelwhite { font-weight:bold; width:180px;font-size: 12px; border:1px solid #FFFFFF; }

table.cuadro td.valuewhite { font-weight:normal; width:580px;font-size: 12px; color:blue; border:1px solid #FFFFFF; }



-->

</style>

<page style="font-size: 10px">

<div class="codigo">copia: '.$numguia.'</div>



<table class="cuadro">

<tr><td class="labelwhite">



	<table class="subcuadro" >

	<tr><td class="labelwhite">DESTINATARIO :</td><td class="valuewhite" >'.$LL['cliente'].'</td></tr>

	<tr><td class="labelwhite">RUC/DNI :</td><td class="valuewhite" >'.$LL['ruc'].'</td></tr>

	<tr><td class="labelwhite">Dirección :</td><td class="valuewhite" >'.$LL['direccion'].'</td></tr>

	<tr><td class="labelwhite">Fecha de Inicio de Traslado :</td><td class="valuewhite" >'.$LL['fecha_salida'].'</td></tr>

	<tr><td class="labelwhite">Punto de Partida :</td><td class="valuewhite" >'.$LL['id_ubicacion_salida'].'</td></tr>

	<tr><td class="labelwhite">Punto de Llegada :</td><td class="valuewhite" >'.$LL['id_ubicacion_llegada'].'</td></tr>

	</table>



</td></tr>



<tr><td class="labelwhite" valign=top>



	<table class="subcuadro" >

	<tr><td class="labelwhite">MOTIVO DE TRASLADO:</td><td class="valuewhite">'.$LL['motivo_traslado'].'</td></tr>	

	<tr><td class="labelwhite">Documento de referencia</td><td class="valuewhite">'.$LL['documento'].'</td></tr>

	<!--<tr><td class="labelwhite">CONDICIONES DE PAGO:</td><td class="valuewhite">CONTADO</td></tr>-->

	<tr><td class="labelwhite">RECEP/VENDEDOR:</td><td class="valuewhite">'.$LL['vendedor'].'</td></tr>

	<tr><td colspan=2 class="labelwhite">&nbsp;</td></tr>

	<tr><td colspan=2 class="labelwhite"><b>UNIDAD DE TRASPORTE Y CONDUCTOR(ES)</b></td></tr>

	<tr><td class="labelwhite">Transportista:</td><td class="valuewhite">'.$LL['imp_chofer_nombre'].'</td></tr>

	<tr><td class="labelwhite">Marca y Número de Placa:</td><td class="valuewhite">'.$LL['imp_placa'].'</td></tr>

	<tr><td class="labelwhite">N(s) de Licencia(s) de conducir:</td><td class="valuewhite">'.$LL['imp_chofer_licencia'].'</td></tr>

	</table>



</td>

<!--

<td class="labelwhite" valign=top>

	

	<table class="subcuadro" >

	<tr><td colspan=4 class="titulo sublabel">MOTIVO DE TRASLADO</td></tr>

	<tr><td class="sublabel">Venta</td><td class="subvalue">'.(($LL['motivo_traslado']==1)?"X":"").'</td>

	<td class="sublabel">Entre establecimientos de la misma empresa</td><td class="subvalue">'.(($LL['motivo_traslado']==2)?"X":"").'</td></tr>

	<tr><td class="sublabel" rowspan=2>Venta sujeta a confirmar</td><td class="subvalue" rowspan=2>'.(($LL['motivo_traslado']==3)?"X":"").'</td>

	<td class="sublabel">Importación</td><td class="subvalue">'.(($LL['motivo_traslado']==4)?"X":"").'</td></tr>

	<tr><td class="sublabel">Exportación</td><td class="subvalue">'.(($LL['motivo_traslado']==5)?"X":"").'</td></tr>

	<tr><td class="sublabel">Compra</td><td class="subvalue">'.(($LL['motivo_traslado']==6)?"X":"").'</td>

	<td class="sublabel">Devolución</td><td class="subvalue">'.(($LL['motivo_traslado']==7)?"X":"").'</td></tr>

	<tr><td class="sublabel">Consignación</td><td class="subvalue">'.(($LL['motivo_traslado']==8)?"X":"").'</td>

	<td class="sublabel">Emisor Itinerante</td><td class="subvalue">'.(($LL['motivo_traslado']==9)?"X":"").'</td></tr>

	<tr><td class="sublabel" style="border-right:1px solid #666666;">Otros</td><td colspan=3 align=left class="subvalue" valign=top >'.$LL['motivo_traslado_otros'].'</td></tr>

	</table>

	

</td>

-->

</tr>

<tr><td class="labelwhite">



	<table class="subcuadro" >



<tr><td colspan=2 class="linea" style="height:20px;border:1px solid #FFFFFF;">&nbsp;</td></tr>

<tr><td colspan=2 class="titulo" style="height:20px;border:1px solid #FFFFFF;text-align:left;">DESCRIPCIÓN</td></tr>

<tr><td class="valuewhite" colspan=2 >TRASLADO DE UNIDAD</td></tr>

<tr><td class="labelwhite">Marca/Modelo :</td><td class="valuewhite" >'.$LL['id_item'].'</td></tr>

<tr><td class="labelwhite">Chasis :</td><td class="valuewhite" >'.$LL['id_item_item'].'</td></tr>

<tr><td class="labelwhite">Motor :</td><td class="valuewhite" >'.dato('nummotor','productos_items_items',"where id=".$LL0['id_item_item']).'</td></tr>

<tr><td class="labelwhite">Color :</td><td class="valuewhite" >'.$LL['id_color'].'</td></tr>

<tr><td class="labelwhite">Tipo de Combustible :</td><td class="valuewhite" >'.$LL['tipo_combustible'].'</td></tr>

<tr><td class="labelwhite">Cantidad de Combustible :</td><td class="valuewhite" >'.$LL['cant_combustible'].'</td></tr>

<tr><td class="labelwhite">Año de Fabricación :</td><td class="valuewhite" >'.dato('yearmod','productos_items_items',"where id=".$LL0['id_item_item']).'</td></tr>

<tr><td class="valuewhite" colspan=2 style="font-weight:bold;font-size:13px;">RECIBI EL VEHICULO A MI ENTERA SATISFACCION  Y EN PERFECTAS CONDICIONES</td></tr>



<!--<tr><td class="labelwhite">Fecha de Impresión :</td><td class="valuewhite" >'. fecha_formato(date("Y-m-d H:i:s"),8) .'</td></tr>-->



	</table>



</td></tr>



</table>

</page>';



	if($subir==1){

	switch($_SESSION['usuario_id']){

	case "126":

		update(array('numero_guia'=>$numguia),$TT,"where id=$II");

		//$extrac=implode(file('base2/villa.txt'));

		$f1=fopen('base2/villa.txt',"w+");

		fwrite($f1,++$extrac);

		fclose($f1);

	break;

	case "127":

		update(array('numero_guia'=>$numguia),$TT,"where id=$II");

		//$extrac=implode(file('base2/surquillo.txt'));

		$f1=fopen('base2/surquillo.txt',"w+");

		fwrite($f1,++$extrac);

		fclose($f1);		

	break;

	default:

		//$numguia='';

	break;

	}

	}



	if($_GET['html']==1){

	

	echo $content;

	

	} else {

	

    require_once('lib/pdf/html2pdf.class.php');



	$html2pdf = new HTML2PDF('P', 'A4', 'fr');

//      $html2pdf->setModeDebug();

	$html2pdf->setDefaultFont('Arial');

	//$html2pdf->pdf->IncludeJS("print(true);");		

	$html2pdf->writeHTML($content, isset($_GET['vuehtml']));

	$html2pdf->Output('guia_traslados_'.date("Y-m-d_h_m_s").'_codigo_'.$II.'.pdf');

	

	}

	



	

?>