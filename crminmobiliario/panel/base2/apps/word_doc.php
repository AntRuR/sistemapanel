<?php //á


function convert_number($number){
	$from=[
	'uno cientos','dos cientos','tres cientos','cuatro cientos','cinco cientos','seis cientos','siete cientos','ocho cientos','nueve cientos',
	'uno mil',
	];
	$to=[
	'ciento','doscientos','trecientos','cuatrocientos','quinientos','seiscientos','setecientos','ochocientos','novecientos',
	'mil',
	];
	return str_replace($from,$to,preconver($number));
}

function preconver($number) 
{ 
    if (($number < 0) || ($number > 999999999)) 
    { 
    throw new Exception("Number is out of range");
    } 

    $Gn = floor($number / 1000000);  /* Millions (giga) */ 
    $number -= $Gn * 1000000; 
    $kn = floor($number / 1000);     /* Thousands (kilo) */ 
    $number -= $kn * 1000; 
    $Hn = floor($number / 100);      /* Hundreds (hecto) */ 
    $number -= $Hn * 100; 
    $Dn = floor($number / 10);       /* Tens (deca) */ 
    $n = $number % 10;               /* Ones */ 

    $res = ""; 

    if ($Gn) 
    { 
        $res .= preconver($Gn) . " millón"; 
    } 

    if ($kn) 
    { 
        $res .= (empty($res) ? "" : " ") . 
            preconver($kn) . " mil"; 
    } 

    if ($Hn) 
    { 
        $res .= (empty($res) ? "" : " ") . 
            preconver($Hn) . " cientos"; 
    } 

    $ones = array("", "uno", "dos", "tres", "cuatro", "cinco", "seis", 
        "siete", "ocho", "nueve", "diez", "once", "doce", "trece", 
        "catorce", "quince", "dieciseis", "diecisiete", "dieciocho", 
        "diecinueve");

    $tens = array("", "", "veinte", "treinta", "cuarenta", "cincuenta", "sesenta", 
        "setenta", "ochenta", "noventa"); 

    if ($Dn || $n) 
    { 
        if (!empty($res)) 
        { 
            $res .= " "; 
        } 

        if ($Dn < 2) 
        { 
            $res .= $ones[$Dn * 10 + $n]; 
        } 
        else 
        { 
            $res .= $tens[$Dn]; 

            if ($n) 
            { 
                $res .= " y " . $ones[$n]; 
            } 
        } 
    } 

    if (empty($res)) 
    { 
        $res = "cero"; 
    } 

    return $res; 
} 

function curr($num){

	return number_format($num, 2, '.', ',');

}



$venta_fila=select_fila(
					'id_ventas_item,pvpromocion',
					'productos_ventas',
					'where id="'.$_GET['L'].'" ',
					0,
					array(
						'operaciones'=>array('fila'=>array('fecha_abono,monto,opeban','productos_ventas_documentos','where operacion=1 and id_grupo="'.$_GET['L'].'"')),
					)
				);

echo '</div></div>';

// prin($venta_fila['operaciones']);
// prin($filas);
// exit();
// prin($_GET);


$linea=select_fila(
					array(
						'id','id_cliente','pedido','id_item','id_usuario','id_status','pedido','cuota_inicial','saldo_financiar','separacion','pvpromocion',
						'sectorista_nombre','sectorista_email','sectorista_telefono','id_banco','id_sectorista','id_promocion'
						),
					'ventas_items',
					'where id='.$venta_fila['id_ventas_item'],
					0,
					array(
						'cliente'	=>array('fila'=>array(
							'nombre,apellidos,genero,email,dni,departamento,provincia,distrito,direccion,
							nombre_conyuge,apellidos_conyuge,genero_conyuge,dni_conyuge,departamento_conyuge,provincia_conyuge,distrito_conyuge,direccion_conyuge',
							'clientes',
							'where id="{id_cliente}"')),
						'usuario'	=>array('fila'=>array('nombre,apellidos,genero,email,firma','usuarios','where id="{id_usuario}"')),
						'item'		=>array('fila'=>array('nombre,descripcion5,direccion','productos_items','where id="{id_item}"')),							
""					)							
				);
// prin($linea);
// Departamento N° 201  de 81.89  m2 de área ocupada aproximadamente, al precio de  S/. 370,470.00 (TRESCIENTOS SETENTA MIL CUATROCIENTOS SETENTA Y 00/100  NUEVOS SOLES),  
// y Estacionamiento Nro. A16  S/ 31,000.00 (TREINTA Y UN MIL Y 00/100)

$lin=[];

$pedido=json_decode($linea['pedido']);

$num_pedidos=sizeof($pedido);

foreach($pedido as $iii=>$item){

	if( ($item->type=='departamento') and 0 ){
		$linn=ucfirst($item->type)." N ".$item->num." de 81.89  m2 de área ocupada aproximadamente, al precio de S/.".curr($item->price). " (".strtoupper(convert_number($item->price))." Y 00/100)";
	} else {
		$presio=($num_pedidos==1)?$venta_fila['pvpromocion']:$item->price ;
		$linn=ucfirst($item->type)." N ".$item->num.", al precio de S/.".curr($presio). " (".strtoupper(convert_number($presio))." Y 00/100)";
	}

	if($iii<sizeof($pedido)-2)
		$linn.=", ";
	elseif( ($iii==sizeof($pedido)-2) and (sizeof($pedido)>1) )
		$linn.=" y ";

	$lin[]=$linn;

}
$linea['pedido']=implode('',$lin);

function cargar($var){
	$var = precargar($var);	
	return str_replace(array('á','é','í','ó','ú'), array('a','e','i','o','u'), $var);
}

function precargar($var){

	global $linea;
	global $venta_fila;

	switch ($var) {
		// case 'PROYECTO': 
		// 	return $linea['item']['nombre'];
		// break;
		// case 'PROYECTO_DIRECCION':
		// 	return $linea['item']['direccion'];
		// break;		
		// case 'CLIENTE_NOMBRE':
		// 	return $linea['cliente']['nombre']." ".$linea['cliente']['apellidos'];
		// break;
		// case 'CLIENTE_DNI':
		// 	return $linea['cliente']['dni'];
		// break;		
		// case 'LUGAR_FECHA':
		// 	return 'Lima, '.fecha_formato('now()',10);
		// break;	
		case 'CLIENTES':
			
			$html = '';
			
			$html.=$linea['cliente']['nombre']." ".$linea['cliente']['apellidos']." ";
			if($linea['cliente']['dni']!=''){
			$html.="con D.N.I. Nro. ".$linea['cliente']['dni']." ";
			}
			if($linea['cliente']['direccion']!=''){

			$html.="domiciliado en ".$linea['cliente']['direccion']." "
			."distrito de ".dato("nombre","geo_distritos","where id=".$linea['cliente']['distrito'])." "
			."provincia de ".dato("nombre","geo_provincias","where id=".$linea['cliente']['provincia'])." "
			."departamento de ".dato("nombre","geo_departamentos","where id=".$linea['cliente']['departamento'])." ";

			}

			if($linea['cliente']['nombre_conyuge']!=''){

			$html.="y ".$linea['cliente']['nombre_conyuge']." ".$linea['cliente']['apellidos_conyuge']." ";
			if($linea['cliente']['dni_conyuge']!=''){
			$html.="con D.N.I. Nro. ".$linea['cliente']['dni_conyuge']." ";
			}
			if($linea['cliente']['direccion_conyuge']!=''){

			$html.="domiciliado en ".$linea['cliente']['direccion_conyuge']." "
			."distrito de ".dato("nombre","geo_distritos","where id=".$linea['cliente']['distrito_conyuge'])." "
			."provincia de ".dato("nombre","geo_provincias","where id=".$linea['cliente']['provincia_conyuge'])." "
			."departamento de ".dato("nombre","geo_departamentos","where id=".$linea['cliente']['departamento_conyuge'])." ";

			}

			}

			return $html;

		break;
		case 'FIRMA':
			
			$html = '';
			
			$html.=$linea['cliente']['nombre']." ".$linea['cliente']['apellidos']."
";

			if($linea['cliente']['dni']!=''){
			$html.="D.N.I. Nro. ".$linea['cliente']['dni']."
";

			}

			if($linea['cliente']['nombre_conyuge']!=''){

			$html.="


".$linea['cliente']['nombre_conyuge']." ".$linea['cliente']['apellidos_conyuge']."
";
			if($linea['cliente']['dni_conyuge']!=''){
			$html.="con D.N.I. Nro. ".$linea['cliente']['dni_conyuge']."
";
			}

			}

			return $html;

		break;		
		case 'PEDIDO':
			return $linea['pedido'];
		break;
		case 'FECHA':
			return fecha_formato('now()',10);
		break;
		case 'VENCIMIENTO_FECHA':
			return fecha_formato(date("Y-m-d H:i:s",strtotime("+15 days")),10);
		break;
		case 'ABONO_FECHA':
			return fecha_formato($venta_fila['operaciones']['fecha_abono'],10);
		break;
		case 'ABONO_OPERACION':
			return $venta_fila['operaciones']['opeban'];
		break;
		case 'ABONO_MONTO':
			return $venta_fila['operaciones']['monto'];
		break;
																		
		default:
			return "";
		break;
	}

}

$rr=fila(
	"id,
	file,
	nombre,
	fecha_creacion",
	"contratos",
	"where nombre='".$_GET['doc']."' and id_item=".$linea['id_item'],
	0,
	[
		'doc'=>['archivo'=>['ctr_doc','{fecha_creacion}','{file}']]
	]	
	);


list($uno,$dos) = explode("imagenes_dir",$rr['doc']);

$rr['doc']="../imagenes_dir".$dos;


list($uno,$dos) = explode("imagenes_dir",$rr['doc']);
$rr['doc']="../imagenes_dir".$dos;


require_once 'lib/PHPWord.php';

require_once 'lib/MyPHPWord.php';



$PHPWord = new MyPHPWord();

$document = $PHPWord->MyloadTemplate($rr['doc']);

$variables=[];

if(
	preg_match_all('/{+(.*?)}/', $document->dok, $matches)
	) {
    foreach($matches[1] as $match){

    	// $arrr[$match] = "\$document->setValue('$match'	, '');";
    	if(!in_array($match,$variables))
    		$variables[]=$match;

    }
}

// truncate('variables_documentos');

foreach($variables as $vari){

	if(!hay('variables_documentos','where var="'.$vari.'" and id_grupo="'.$_GET['L'].'" and doc="'.$_GET['doc'].'"')){

	insert([
		'var'      =>$vari,
		'id_grupo' =>$_GET['L'],
		'doc'      =>$_GET['doc'],
		'valor'	  =>cargar($vari),
		],'variables_documentos');
	}
}

// prin($variables);

$filas=select('id,var','variables_documentos','where id_grupo="'.$_GET['L'].'" and doc="'.$_GET['doc'].'"');

foreach($filas as $fila){

 	if(!in_array($fila['var'],$variables)){

 		delete('variables_documentos','where id='.$fila['id'],1);

 	}

}

// exit();
