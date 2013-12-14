<?php
$concat=array();
function select($campos,$tabla,$donde,$debug=0,$opciones=NULL,&$concat=NULL){
	$Tabla=$tabla;
	global $link;
	if(is_string($campos)) {
		$camposA=explode(",",$campos);
		//$strcampos=$campos;
	}elseif(is_array($campos)){
		$camposA=$campos;
		$campos=implode(",",$campos);
	} 
	foreach($camposA as $ii=>$AA){
	@list($ca,$as)=explode(" as ",$AA);
		if($as){ $camposA[$ii]=$as; }
	}
	$filas = array();
	$consulta="select $campos from $tabla $donde";
	$result=mysql_query($consulta,$link);
	//$result=mysql_query($consulta,$link) or $error=mysql_error;
	$total=mysql_num_rows($result);
	if($total>0){
		while ($row = mysql_fetch_row($result)){
			foreach ($camposA as $ee=>$cc) { 
				$row2[trim($cc)]=$row[$ee];
			}
			$filas[]=$row2;
			unset($row2);		  					 	
		}   	
	} 
	if($debug){
		prin($camposA);
		prin($consulta);
		//prin($filas);
	}		
	if(sizeof($opciones)>0){
		$filas2=array();
		foreach($filas as $fila){
			$fila2=$fila;
			foreach ($opciones as $dd=>$ff) {
				if( is_array($ff) and sizeof($ff)>0 ){
					list($accion,$argumentos)=each($ff);
					switch($accion){
					case "sub_select":
					$fila2[$dd]=select(
										$argumentos['campos']
										,$argumentos['tabla']
										,procesar_llaves($fila2,$argumentos['donde'])
										,$argumentos['debug']
										,$argumentos['opciones']
									  );
					break;									  
					case "sub_foto":
					list($campus,$tabla,$donde)=explode("|",$argumentos[0]);
					$carpeta=$argumentos[1];
					$ouou=array();
					foreach($argumentos[2] as $ii=>$oo){
						$uuu=explode(",",$oo);
						if(sizeof($uuu)==1){
							$ouou[$ii]=array('get_archivo'  =>array('carpeta'=>$carpeta,'fecha'=>'{fecha_creacion}','file'=>'{file}','tamano'=>$uuu['0']));
						} else {
							$ouou[$ii]=array('get_atributos'=>array('carpeta'=>$carpeta,'fecha'=>'{fecha_creacion}','file'=>'{file}','tamano'=>$uuu['0'],'dimensionado'=>$uuu['1'],'centrado'=>$uuu['2']));
						}
					}
					$fila2[$dd]=select_fila(
										$campus
										,$tabla
										,procesar_llaves($fila2,$donde)
										,0
										,$ouou
									  );
					break;	
					case "sub_fotos":
					list($campus,$tabla,$donde)=explode("|",$argumentos[0]);
					$carpeta=$argumentos[1];
					$ouou=array();
					foreach($argumentos[2] as $ii=>$oo){
						$uuu=explode(",",$oo);
						if(sizeof($uuu)==1){
							$ouou[$ii]=array('get_archivo'  =>array('carpeta'=>$carpeta,'fecha'=>'{fecha_creacion}','file'=>'{file}','tamano'=>$uuu['0']));
						} else {
							$ouou[$ii]=array('get_atributos'=>array('carpeta'=>$carpeta,'fecha'=>'{fecha_creacion}','file'=>'{file}','tamano'=>$uuu['0'],'dimensionado'=>$uuu['1'],'centrado'=>$uuu['2']));
						}
					}
					$fila2[$dd]=select(
										$campus
										,$tabla
										,procesar_llaves($fila2,$donde)
										,0
										,$ouou
									  );
					break;	
					case "sub_select_fila":
					$fila2[$dd]=select_fila(
										$argumentos['campos']
										,$argumentos['tabla']
										,procesar_llaves($fila2,$argumentos['donde'])
										,$argumentos['debug']
										,$argumentos['opciones']
									  );
					break;				  
					case "sub_select_dato":
					$fila2[$dd]=select_dato(
										$argumentos['campo']
										,$argumentos['tabla']
										,procesar_llaves($fila2,$argumentos['donde'])
										,$argumentos['debug']
										,$argumentos['opciones']
									  );									  									  
					break;
					case "get_atributos":
					$fila2[$dd]=dimensionar_imagen(
										procesar_llaves($fila2,$argumentos['carpeta'])
										,procesar_llaves($fila2,$argumentos['fecha'])
										,procesar_llaves($fila2,$argumentos['file'])
										,procesar_llaves($fila2,$argumentos['tamano'])
										,procesar_llaves($fila2,$argumentos['dimensionado'])
										,procesar_llaves($fila2,$argumentos['centrado'])
									  );
					break;
					case "get_archivo":
					$fila2[$dd]=get_imagen(
										procesar_llaves($fila2,$argumentos['carpeta'])
										,procesar_llaves($fila2,$argumentos['fecha'])
										,procesar_llaves($fila2,$argumentos['file'])
										,procesar_llaves($fila2,$argumentos['tamano'])
									  );
					break;	
					case "limit_string":
					$fila2[$dd]=limit_string(
										procesar_llaves($fila2,$argumentos['string'])
										,procesar_llaves($fila2,$argumentos['limit'])
									  );
					break;				  
					case "procesar_url":					
					$fila2[$dd]=(function_exists('procesar_url'))?procesar_url(
										procesar_llaves($fila2,$argumentos['url'])
									  ):$fila2[$dd];									  
					break;
					case "fecha_formato":
					$fila2[$dd]=fecha_formato(
										procesar_llaves($fila2,$argumentos['fecha'])
										,procesar_llaves($fila2,$argumentos['formato'])
									  );
					break;
					case "opcion":
					$fila2[$dd]=get_opcion(
										$Tabla
										,procesar_llaves($fila2,$argumentos['campo'])
										,procesar_llaves($fila2,"{".$argumentos['campo']."}")
									  );	
										
					break;	
					case "ucfirst":
					$fila2[$dd]=ucfirst(
										procesar_llaves($fila2,$argumentos['string'])
									  );
					case "url_externa":
					$fila2[$dd]=url_externa(
										procesar_llaves($fila2,$argumentos['link'])
									  );									  
					break;	
					case "cleantext":
					$fila2[$dd]=cleantext(
										procesar_llaves($fila2,$argumentos['string'])
									  );
					break;	
					case "nl2br":
					$fila2[$dd]=nl2br(
										procesar_llaves($fila2,$argumentos['string'])
									  );
					break;							
					case "ucwords":
					$fila2[$dd]=ucwords(
										procesar_llaves($fila2,$argumentos['string'])
									  );
					break;	
					case "strtolower":
					$fila2[$dd]=strtolower(
										procesar_llaves($fila2,$argumentos['string'])
									  );
					break;
					case "strtoupper":
					$fila2[$dd]=strtoupper(
										procesar_llaves($fila2,$argumentos['string'])
									  );
					break;
					case "htmlspecialchars":
					$fila2[$dd]=htmlspecialchars(
										procesar_llaves($fila2,$argumentos['string'])
									  );
					break;
					case "strip_tags":
					$fila2[$dd]=strip_tags(
										procesar_llaves($fila2,$argumentos['string'])
									  );
					break;																					
					case "url_encode_seo":
					$fila2[$dd]=url_encode_seo(
										procesar_llaves($fila2,$argumentos['string'])
									  );
					break;	
					case "url_friendly":
					$fila2[$dd]=url_friendly(
										procesar_llaves($fila2,$argumentos['string'])
									  );
					break;						
					case "match":
					$fila2[$dd]=(trim(procesar_llaves($fila2,$argumentos['a']))==trim($argumentos['b']))?$argumentos['equal']:$argumentos['else'];
					break;
					case "null":
					unset($fila2[$dd]);
					break;										
					case "concat":
					$concat[$dd][]=procesar_llaves($fila2,$argumentos['values']);
					break;																																										
					}
				} else 
				{
					//if($ff=='null'){
						//$fila2[$dd]='null';
						//unset($fila2[$dd]);
					//} else {
						$fila2[$dd]=procesar_llaves($fila2,$ff);
					//}
				}
			}
			$filas2[]=$fila2;
		}
		$filas=$filas2;
	}
	return $filas;	
	
}


function select_fila($campos,$tabla,$donde,$debug=0,$opciones=NULL){
	$matriz=select($campos,$tabla,$donde,$debug,$opciones);
	if(sizeof($matriz)>0) { 
		$fila = $matriz[0];
		return $fila;
	} else { 
		return false; 
	}
}


function select_dato($campo,$tabla,$donde,$debug=0){
	$matriz=select($campo,$tabla,$donde,$debug);
	if(sizeof($matriz)>0){ 
		$fila=$matriz[0];
		$dato=$fila[$campo];
		return $dato; 
	} else { 
		return false; 
	}
}
function get_valores($key,$value,$tabla,$donde,$debug){
	$matriz=select("$key,$value",$tabla,$donde,$debug);
	$ret=array();
	foreach($matriz as $mat){
	$ret[$mat[$key]]=$mat[$value];
	}
	return $ret;
}

function insert($campos_array,$tabla,$debug=0){

	global $link;
	$ccc=array_keys($campos_array);
	foreach($campos_array as $ll){
		switch(trim($ll)){ 	
			case "NULL": $ppp[]="NULL"; break;
			case "now()": $ppp[]="'".date("Y-m-d H:i:s")."'"; break;
			default: $ppp[]="'".mysql_real_escape_string($ll)."'"; break;
		}
	} 
	$consulta="insert into $tabla (". implode(",",$ccc) .") values (" .implode(",",$ppp). ")";
	if($debug){
		prin($consulta);
	}	
	if(mysql_query($consulta,$link)){ $return =array('success'=>1,'id'=>mysql_insert_id()); }
	else { $return =array('success'=>0,'error'=>mysql_error()); }
	return $return;
	
}

function update($campos_array,$tabla,$where,$debug=0){

	global $link;
	foreach($campos_array as $tt=>$ll){
		switch(trim($ll)){
			case "NULL": $ppp[]="$tt=NULL"; break;		 	
			case "now()": $ppp[]="$tt='".date("Y-m-d H:i:s")."'"; break;
			case "++": $ppp[]="$tt=$tt+1"; break;
			case "--": $ppp[]="$tt=$tt-1"; break;
			default: $ppp[]="$tt='".mysql_real_escape_string($ll)."'"; break;
		}	
	} 
	$consulta="update $tabla set ". implode(",",$ppp) ." $where";
	if($debug){
		prin($consulta);
	}	
	if(mysql_query($consulta,$link)){ $return =array('success'=>1); }
	else { $return =array('success'=>0,'error'=>mysql_error()); }
	/*
	if($debug){
		prin($consulta);
	}
	*/	
	return $return;	
	
}	

function delete($tabla,$where,$debug=0){

	global $link;
	$consulta="delete from $tabla $where";
	if($debug){
		prin($consulta);
	}	
	if(mysql_query($consulta,$link)){ $return =array('success'=>1); }
	else { $return =array('success'=>0,'error'=>mysql_error()); }
	/*
	if($debug){
		prin($consulta);
	}
	*/	
	return $return;	
		
}

function contar($tabla,$donde,$debug=0){

	global $link;
	$ddd=explode("order",$donde); $donde=$ddd[0];
	$consulta="select count(*) from $tabla $donde ";	
	if($debug){
		prin($consulta);
	}		
	$result=mysql_query($consulta,$link); 
	$row = mysql_fetch_row($result);
	return $row[0];
	
}

function aumentar($campo,$tabla,$where){

	$valor=select_dato($campo,$tabla,$where);
	update(array($campo=>$valor+1),$tabla,$where);
	
}

function enlace($enlace,$onclick,$pag,$var_pag,$procesar_url){

	$html ='';
	$enlacepag=$enlace.$pag;
	$enlacepag=str_replace(array("&".$var_pag."=10","?".$var_pag."=10"),array("&".$var_pag."=diez","?".$var_pag."=diez"),$enlacepag);
	$enlacepag=str_replace(array("&".$var_pag."=1","?".$var_pag."=1"),array("",""),$enlacepag);
	$enlacepag=str_replace(array("&".$var_pag."=diez","?".$var_pag."=diez"),array("&".$var_pag."=10","?".$var_pag."=10"),$enlacepag);
	if($procesar_url){
	$html.=($enlace=='#')?" href='#'":" href='".procesar_url($enlacepag)."'";
	} else {
	$html.=($enlace=='#')?" href='#'":" href='".$enlacepag."'";	
	}
	$html.=($onclick=='')?"":" onclick='javascript:".str_replace("PAG",$pag,$onclick)."'";
	return $html;

}

function paginacionnumerada($parametros,$campos,$tabla,$donde,$debug=0,$opciones=NULL,&$concat=NULL){

if(is_array($parametros['item'])){

	$wer=each($parametros['item']);

}	
	
if($wer['value']!=''){
	
	$visi=select($campos,$tabla," where ".$wer['key']."='".$wer['value']."' ",$debug,$opciones); 
	
	$tot=1;
	
	$cm = array(
				'filas'=>$visi,
				'total'=>$tot,
				'anterior'=>"",
				'siguiente'=>"",
				'desde'=>1,
				'hasta'=>$tot,
				'tren'=>""
				);
	
	return $cm;

} else {

if($parametros['porpag']==0){

	$visi=select($campos,$tabla,$donde." limit 0,100",$debug,$opciones,$concat); 
	
	$tot=sizeof($visi);
	
	$cm = array(
				'filas'=>$visi,
				'total'=>$tot,
				'anterior'=>"",
				'siguiente'=>"",
				'desde'=>1,
				'hasta'=>$tot,
				'tren'=>""
				);
	
	return $cm;

} else {

	global $_GET;
	
	$pagin=$_GET['pag'];
	//pagin
	//porpag,anterior,siguiente,enlace
	$porpag=$parametros['porpag']; 
	$anterior=$parametros['anterior']; 
	$siguiente=$parametros['siguiente']; 
	$enlace=$parametros['enlace'];
	$separador=$parametros['separador'];
	$onclick=$parametros['onclick'];
	$tren_limite=($parametros['tren_limite'])?$parametros['tren_limite']:10;
	$procesar_url=($parametros['procesar_url'])?$parametros['procesar_url']:0;
	
	
	parse_str($enlace,$gets);
	$gets=array_keys($gets);
	$var_pag=$gets[sizeof($gets)-1];
	
	
	if($pagin==''){ $pagin=1; }
		
	$total=contar($tabla,$donde,0);

	//prin($tabla);
	//prin($donde);	
	//prin($total);
	
	$finpag=$total;
	$inicio=$porpag*($pagin-1);
	
	if($total>$porpag){
	
	$visi=select($campos,$tabla,$donde." limit $inicio,$porpag",$debug,$opciones,$concat); 
	
	$finpag=sizeof($visi);
	
	$prev_pag=$pagin-1;
	$next_pag=$pagin+1;
	
	
	if ($pagin==1) { $prev=$anterior; } else { $prev=($anterior=='')?"":"<a " . enlace($enlace,$onclick,$prev_pag,$var_pag,$procesar_url) . " class='linkpag'>$anterior</a>"; }
	
	if ($total==($finpag+$inicio)) { $next=$siguiente;} else { $next=($siguiente=='')?"":"<a " . enlace($enlace,$onclick,$next_pag,$var_pag,$procesar_url) . " class='linkpag' >$siguiente</a>"; }
	
	} else {
	
	$visi=select($campos,$tabla,$donde,$debug,$opciones,$concat);
	
	}
	$sun=(int)(($total-1)/$porpag)+1;
	for($i=1;$i<=$sun;$i++){
	if($i==$pagin){
	$raba[]="<span class='linkpagselec'>$i</span>";
	} else { 
	$raba[]="<a class='linkpag' " . enlace($enlace,$onclick,$i,$var_pag,$procesar_url) . " >$i</a>";
	}
	}
		$marder=3;
		$inicior=($pagin>$tren_limite-1-$marder)?($pagin-$tren_limite+$marder):0;
	//$inicior=$pagin;
	if(sizeof($raba)>$tren_limite){
		for( $r = $inicior ;  $r < $inicior + $tren_limite  ; $r++ ){
			
			if( $r==$inicior and $inicior>0 ){ 
				$raba2[]=$raba[0]; 
			} else {
				$raba2[]=$raba[$r];
			}
			
			if($raba[$r]!=''){
				$ultimoraba=$raba[$r];
			}
			
		}
		if($ultimoraba!=$raba[sizeof($raba)-1]){
		$raba2[]="&nbsp;...&nbsp;";
		//$raba2[]=$raba[sizeof($raba)-2];
		$raba2[]=$raba[sizeof($raba)-1];
		}
		$raba=$raba2;
	
	}
	
	
	$rabas=(sizeof($raba)>1)?implode($separador,$raba):"";
	
	$cm = array(
				'filas'=>$visi,
				'total'=>$total,
				'anterior'=>$prev,
				'siguiente'=>$next,
				'desde'=>$inicio+1,
				'hasta'=>$finpag+$inicio,
				'tren'=>$rabas
				);
	
	return $cm;

	}

}

}

function get_opcion($aa,$bb,$cc){

	global $OpcionesTabla;
	return $OpcionesTabla[$aa][$bb][$cc];
	
}

function fecha_formato($ff,$op=0){

	if(trim($ff)==''){ return ""; } 
	if(trim($ff)=='0000-00-00 00:00:00'){ return ""; } 
	if(trim($ff)=='now()'){ $ff=date("Y-m-d H:i:s"); } 
	
	$Array_Meses0=array(1=>"ene","feb","mar","abr","may","jun","jul","ago","set","oct","nov","dic");
	$Array_Meses1=array(1=>"enero","febrero","marzo","abril","mayo","junio","julio","agosto","setiembre","octubre","noviembre","diciembre");
	$Array_Semanas0=array('Mon'=>"lunes",'Tue'=>"martes",'Wed'=>"miércoles",'Thu'=>"jueves",'Fri'=>"viernes",'Sat'=>"sábado",'Sun'=>"domingo");

	$Array_Meses1_en=array(1=>"january","febrery","march","april","may","june","july","august","setember","october","november","december");
	$Array_Semanas0_en=array('Mon'=>"Monday",'Tue'=>"Tuesdat",'Wed'=>"Wednesday",'Thu'=>"Thursday",'Fri'=>"Friday",'Sat'=>"Saturday",'Sun'=>"Sunday");
	
	$unix=strtotime($ff);
	switch($op){
	case "0": //23-set-2009
	$fecha=date("d",$unix)."-".$Array_Meses0[date("n",$unix)]."-".date("Y",$unix); 
	break;
	case "1": //Miércoles, 23 de Setiembre
	$fecha=ucfirst($Array_Semanas0[date("D",$unix)]).", ".date("j",$unix)." de ".ucfirst($Array_Meses1[date("n",$unix)]);
	break;
	case "2": //Miércoles, 23 de Setiembre de 2009
	$fecha=ucfirst($Array_Semanas0[date("D",$unix)]).", ".date("j",$unix)." de ".ucfirst($Array_Meses1[date("n",$unix)])." de ".date("Y",$unix);
	break;	
	case "2_en": //Miércoles, 23 de Setiembre de 2009
	$fecha=ucfirst($Array_Semanas0_en[date("D",$unix)]).", ".ucfirst($Array_Meses1_en[date("n",$unix)])." ".date("jS",$unix)." ".date("Y",$unix);
	break;		
	case "3": //Miércoles, 23 de Set
	$fecha=ucfirst($Array_Semanas0[date("D",$unix)]).", ".date("j",$unix)." de ".ucfirst($Array_Meses0[date("n",$unix)]);
	break;
	case "4": //Setiembre 2009
	$fecha=ucfirst($Array_Meses1[date("n",$unix)])." ".date("Y",$unix);
	break;
	case "5": //23-09-2009
	$fecha=date("d-m-Y",$unix);
	break;		
	case "6": //23-09-09
	$fecha=date("d-m-y",$unix);
	break;	
	case "7": //hoy 12:53 pm
	$fecha=str_replace(array(date("d-m-y"),date("d-m-y",strtotime("yesterday"))),array("hoy","ayer"),date("d-m-y g:i a",$unix));
	break;
	case "7_en": //hoy 12:53 pm
	$fecha=str_replace(array(date("d-m-y"),date("d-m-y",strtotime("yesterday"))),array("today","yesterday"),date("d-m-y g:i a",$unix));
	break;	
	case "8": //23-09-09 12:53 pm
	$fecha=date("d-m-y g:i a",$unix);
	break;	
	case "9": //hace 10 seg
	$fecha=calcular_tiempo($unix);
	break;
	case "10": //23 de Setiembre de 2009
	$fecha=date("j",$unix)." de ".ucfirst($Array_Meses1[date("n",$unix)])." de ".date("Y",$unix);
	break;	
	case "11": //23/09/2009
	$fecha=date("d/m/Y",$unix);
	break;
	case "12": //23 de Setiembre
	$fecha=date("j",$unix)." de ".ucfirst($Array_Meses1[date("n",$unix)]);
	break;										
	}

	if(trim($ff)==''){ $fecha = ""; }

	return $fecha;
	
}


function calcular_tiempo($U){

	$intervalo=date("U")-$U;
	if($intervalo<60){
	$string="hace un instante";
	//$string="hace $intervalo seg";
	} elseif($intervalo<3600) {
	$num = intval($intervalo/60);
	$string="hace ". $num ." min";
	} elseif($intervalo<86400) {
	$num = intval($intervalo/3600);
	$string="hace ". $num ." hr". ( ($num==1)?"":"s" );
	} elseif($intervalo<604800) {
	$num = intval($intervalo/86400);
	$string="hace ". $num ." dia". ( ($num==1)?"":"s" );
	} elseif($intervalo<2592000) {
	$num = intval($intervalo/604800);
	$string="hace ". $num ." semana". ( ($num==1)?"":"s" );
	} elseif($intervalo<31536000) {
	$num = intval($intervalo/2592000);
	$string="hace ". $num ." mes". ( ($num==1)?"":"es" );
	} else {
	$string="hace mucho";
	}
	return $string;

}


function get_imagen( $carpeta, $fecha_bd, $file, $tamano=NULL){

	global $httpfiles, $DIRECTORIO_IMAGENES, $USU_IMG_DEFAULT;
	
	if(!(strpos($file,"x.")===FALSE)) { $img=$USU_IMG_DEFAULT; } else {
	if($tamano==NULL){
	$img = $httpfiles."/".$DIRECTORIO_IMAGENES."/".$carpeta."/".str_replace("-","/",substr($fecha_bd,0,10)."/".$file);	
	} else {
	$img = $httpfiles."/".$DIRECTORIO_IMAGENES."/".$carpeta."/".str_replace("-","/",substr($fecha_bd,0,10)."/".str_replace(".","_".$tamano.".",$file));	
	}
	}
		
	$img = str_replace("http://","[http]",$img);
	$img = str_replace("//","/",$img);
	$img = str_replace("[http]","http://",$img);
	
	return $img;	

}

function dimensionar_imagen( $carpeta, $fecha_bd, $file, $tamano=NULL, $dimensionado_ideal=NULL, $centrado=NULL){

	global $USU_IMG_DEFAULT;
	
//	$centrado=($centrado==NULL)?0:$centrado;
	
	if($file==''){

		list($ancho_ideal,$alto_ideal) = explode("x",$dimensionado_ideal);	
	
		$atributo=' src="'.$USU_IMG_DEFAULT.'" width="'.$ancho_ideal.'" height="'.$alto_ideal.'" ';
	
	} else {
		
		$tamano=($tamano==NULL)?1:$tamano;
		$img = get_imagen( $carpeta, $fecha_bd, $file, $tamano);
		$file2A=explode(".",$file);
		$file2B=explode("_",$file2A[sizeof($file2A)-2]);
		list($ancho_real,$alto_real) = explode("x",$file2B[sizeof($file2B)-1]);	
		list($ancho_ideal,$alto_ideal) = explode("x",$dimensionado_ideal);	
		
		if($USU_IMG_DEFAULT==$img){
	
			if($ancho_ideal=='' or $alto_ideal==''){
	
				$atributo = ' src="'.$img.'" ';
	
			} else {
	
				$atributo = ' src="'.$img.'"  width="'.$ancho_ideal.'" height="'.$alto_ideal.'"  ';
			
			}
	
		} else { 
			
			if($ancho_ideal=='' or $alto_ideal==''){
	
				$atributo = ' src="'.$img.'" ';
			
			} else {		
					
				if($ancho_real < $ancho_ideal && $alto_real < $alto_ideal){
				
					$atributo = ' src="'.$img.'"  width="'.$ancho_real.'" height="'.$alto_real.'" '. ( (!$centrado)?"":' style="margin-top:'. (intval(($alto_ideal-$alto_real)/2) ) .'px;" ' ) ;
					
				} elseif( $ancho_real >= $ancho_ideal || $alto_real >= $alto_ideal ){
			
					$escala_x = $ancho_real;
					$escala_y = $alto_real;

					if($centrado==2){
					
						if( $escala_x > $ancho_ideal){
							$left_style = "margin-left:".( intval(($ancho_ideal-$escala_x)/2) )."px;";							
						} 
						if( $escala_y > $alto_ideal){	
							$top_style  = "margin-top :".( intval(($alto_ideal -$escala_y)/2) )."px;";
						}	
						
						$centrado_style=' style="'.$left_style.$top_style.'" ';
						
					} elseif($centrado==3){
					
						if( $escala_x > $ancho_ideal){
						
							$escala_x = $ancho_ideal;
							$escala_y = ($ancho_real==0)?0:round($alto_real*($escala_x/$ancho_real));
							
						} 
						if( $escala_y > $alto_ideal){	
							$top_style  = "margin-top :".( intval(($alto_ideal -$escala_y)/2) )."px;";
						}	
						
						$centrado_style=' style="'.$left_style.$top_style.'" ';
						
					} elseif($centrado==4){
					
						if( $escala_y > $alto_ideal){
						
							$escala_y = $alto_ideal;
							$escala_x = ($alto_real==0)?0:round($ancho_real*($escala_y/$alto_real));
							
						} 
						
						if( $escala_x > $ancho_ideal){	
							$left_style  = "margin-left :".( intval(($ancho_ideal -$escala_x)/2) )."px;";
						}
						
						
						$centrado_style=' style="'.$left_style.'" ';
												
					} elseif($centrado==5){
					
						if( ($alto_ideal/$ancho_ideal)<($escala_y/$escala_x) ){
							if( $escala_x > $ancho_ideal){
							
								$escala_x = $ancho_ideal;
								$escala_y = ($ancho_real==0)?0:round($alto_real*($escala_x/$ancho_real));
								
							} 
							if( $escala_y > $alto_ideal){	
								$top_style  = "margin-top :".( intval(($alto_ideal -$escala_y)/2) )."px;";
							}	
							
							$centrado_style=' style="'.$left_style.$top_style.'" ';
							
						}else{
						
							if( $escala_y > $alto_ideal){
							
								$escala_y = $alto_ideal;
								$escala_x = ($alto_real==0)?0:round($ancho_real*($escala_y/$alto_real));
								
							} 
							
							if( $escala_x > $ancho_ideal){	
								$left_style  = "margin-left :".( intval(($ancho_ideal -$escala_x)/2) )."px;";
							}
							
							
							$centrado_style=' style="'.$left_style.'" ';
						
						}
																									
					} else {
					
						if( $escala_x > $ancho_ideal){
						
							$escala_x = $ancho_ideal;
							$escala_y = ($ancho_real==0)?0:round($alto_real*($escala_x/$ancho_real));
							
						} 
						if( $escala_y > $alto_ideal){	
						
							$escala_y = $alto_ideal;                          // si es muy alta, escalar de acuerdo al alto
							$escala_x = ($alto_real==0)?0:round($ancho_real*($escala_y/$alto_real));
				
						}
					
						$centrado_style=(!$centrado)?"":' style="margin-top:'. (intval(($alto_ideal-$escala_y)/2) ) .'px;" ';
						
					}
					
					$atributo = ' src="'.$img.'" width="'.$escala_x.'" height="'.$escala_y.'" '. $centrado_style;
			
				}
			
			} 
		
		}
	
	}
	
	$atributo = str_replace("http://","[http]",$atributo);
	$atributo = str_replace("//","/",$atributo);
	$atributo = str_replace("[http]","http://",$atributo);

		
	
	return $atributo;

}

function url_externa($link){

	if($link!=''){
	$link="http://".str_replace("http://","",$link);
	}
	return $link;
	
}

function limit_string($in,$limit){

	$in=strip_tags(str_replace("</"," </",$in));
	$num=strlen($in);
	if($num<=$limit){
	$out=$in;
	}else{
	$in2=substr($in,0,$limit-3);
	$in3=explode(" ",$in2);
	$in4=strlen($in3[sizeof($in3)-1]);
	$out=substr($in2,0,$limit-3-$in4-1)."...";
	}
	return $out;
	
}

function redir($url){

	if (!headers_sent()) {
		header("Location: ".$url); exit();
	} else {
		//die("<html><body onload=\"location.href='$url';\"></body></html>");	
		die("<html><META HTTP-EQUIV='Refresh' CONTENT='0; URL=$url'><body></body></html>");
	}
	
}


function prin($array,$bg="#000000"){

	 echo "<pre style='float:left; text-align:left; position:relative;background-color:".$bg." !important;color:#".oppColour($bg)." !important;font-size:9px;'>"; print_r($array); echo "</pre>";
	 
}

function paginacion_items($parametros,$items){

global $_GET;

$pagin=$_GET['pag'];
//pagin
//porpag,anterior,siguiente,enlace
$porpag=$parametros['porpag']; 
$anterior=$parametros['anterior']; 
$siguiente=$parametros['siguiente']; 
$enlace=$parametros['enlace'];
$separador=$parametros['separador'];
$onclick=$parametros['onclick'];
$procesar_url=($parametros['procesar_url'])?$parametros['procesar_url']:0;

parse_str($enlace,$gets);
$gets=array_keys($gets);
$var_pag=$gets[sizeof($gets)-1];

if($pagin==''){ $pagin=1; }
    
$total=sizeof($items);

$finpag=$total;
$inicio=$porpag*($pagin-1);
$fin = $inicio + $porpag;

//prin("$total , $pagin, $inicio, $fin");

if($total>$porpag){
$visi=array();
foreach($items as $iii=>$item){
	if( $inicio<=$iii and $iii<$fin ){
		$visi[]=$item;
	}
}

$finpag=sizeof($visi);

$prev_pag=$pagin-1;
$next_pag=$pagin+1;

if ($pagin==1) { $prev=$anterior; } else { $href_anterior=$enlace.$prev_pag; $prev=($anterior=='')?"":"<a " . enlace($enlace,$onclick,$prev_pag,$var_pag,$procesar_url) . " class='linkpag'>$anterior</a>"; }
if ($total==($finpag+$inicio)) { $next=$siguiente;} else { $href_siguiente=$enlace.$next_pag; $next=($siguiente=='')?"":"<a " . enlace($enlace,$onclick,$next_pag,$var_pag,$procesar_url) . " class='linkpag' >$siguiente</a>"; }

} else {

$visi=$items;

}
$sun=(int)(($total-1)/$porpag)+1;
for($i=1;$i<=$sun;$i++){
if($i==$pagin){
$raba[]="<span class='linkpagselec'>$i</span>";
} else { 
$raba[]="<a class='linkpag' " . enlace($enlace,$onclick,$i,$var_pag,$procesar_url) . " >$i</a>";
}
}
$rabas=(sizeof($raba)>1)?implode($separador,$raba):"";

$cm = array(
			'filas'=>$visi,
			'total'=>$total,
			'anterior'=>$prev,
			'siguiente'=>$next,
			'href_anterior'=>$href_anterior,
			'href_siguiente'=>$href_siguiente,			
			'desde'=>$inicio+1,
			'hasta'=>$finpag+$inicio,
			'tren'=>$rabas
			);

return $cm;

}


function enviar_email($parametros){

	global $PARAMETROS_EMAIL,$SERVER,$PARAMETROS_EMAIL_MASTER;
		
	$parametros['disabled']=($parametros['disabled']!='')?$parametros['disabled']:$PARAMETROS_EMAIL_MASTER['disabled'];
	$parametros['debug']=($parametros['debug']!='')?$parametros['debug']:$PARAMETROS_EMAIL_MASTER['debug'];
	$parametros['url_web']=($parametros['url_web']!='')?$parametros['url_web']:$PARAMETROS_EMAIL['url_web'];

	$subject=($parametros['Subject']!='')?$parametros['Subject']:$PARAMETROS_EMAIL['Subject'];
	$logo=($parametros['Logo']!='')?$parametros['Logo']:$PARAMETROS_EMAIL['Logo'];
	if($parametros['url_web']==''){
	$body0='';
	$body0.=($logo)?'<div><img src="'.$logo.'" border=0 /></div>':'';
	$body0.=$parametros['body'];
	} else {
	$body0='';
	$body0.=($logo)?'<div><a href="'.$parametros['url_web'].'"><img src="'.$logo.'" border=0 /></a></div>':'';
	$body0.=$parametros['body'];	
	}
	$body='<html><head><title>'.$subject.'</title></head><body style="font:13px Arial;">'.$body0.'</body></html>';
		
		
		$enviados=array();
		$mailenviado=array();

		$todosenviados=true;
		foreach($parametros['emails'] as $email){

			$mail= new PHPMailer(); // defaults to using php "mail()"
			
			if($SERVER['LOCAL']){		

			$mail->PluginDir = "../../panel/lib/";
			$mail->Mailer = "smtp";
			$mail->Host = "mail.crazyosito.com"; # Editar el Host smtp
			$mail->SMTPAuth = true;
			$mail->Username = "notificaciones@crazyosito.com"; # editar el usuario
			$mail->Password = "platano"; # Editar el password
			
			}
			
			$mail->From       = ($parametros['From']!='')?$parametros['From']:$PARAMETROS_EMAIL['From'];
			$mail->FromName   = ($parametros['FromName']!='')?$parametros['FromName']:$PARAMETROS_EMAIL['FromName'];
			$mail->Subject    = $subject;
			$mail->AltBody    = ($parametros['AltBody']!='')?$parametros['AltBody']:$PARAMETROS_EMAIL['AltBody'];
			$mail->MsgHTML($body);
			$mail->CharSet	  = "utf-8";
			$mail->AddAddress($email);
			if($parametros['debug']){
			
				$mailenviado['debug'][]=array(
								'From'=>$mail->From
								,'FromName'=>$mail->FromName
								,'to'=>$email
								,'Subject'=>$mail->Subject
								,'body'=>$body0
								);
								
			}
			
			if($parametros['disabled']==1){
				$enviado=true;
			} else {
				$enviado=$mail->Send();
			}
			
			if(!$enviado){	$todosenviados=false; }
			$mailenviado[$email]=($enviado)?true:$mail->ErrorInfo;
			
		}			
		$mailenviado['todos']=$todosenviados;	
	
	return $mailenviado;
	
}

function title_friendly($title){
	$title=mb_convert_case($title, MB_CASE_TITLE, "UTF-8");
	$uno=array('A ','Con ','En ','De ','Del ');
	$dos=array('a ','con ','en ','de ','del ');
	$title=str_replace($uno,$dos,$title);
	return $title;	
}

function init_byte_map(){
  global $byte_map;
  for($x=128;$x<256;++$x){
    $byte_map[chr($x)]=utf8_encode(chr($x));
  }
  $cp1252_map=array(
    "\x80"=>"\xE2\x82\xAC",    // EURO SIGN
    "\x82" => "\xE2\x80\x9A",  // SINGLE LOW-9 QUOTATION MARK
    "\x83" => "\xC6\x92",      // LATIN SMALL LETTER F WITH HOOK
    "\x84" => "\xE2\x80\x9E",  // DOUBLE LOW-9 QUOTATION MARK
    "\x85" => "\xE2\x80\xA6",  // HORIZONTAL ELLIPSIS
    "\x86" => "\xE2\x80\xA0",  // DAGGER
    "\x87" => "\xE2\x80\xA1",  // DOUBLE DAGGER
    "\x88" => "\xCB\x86",      // MODIFIER LETTER CIRCUMFLEX ACCENT
    "\x89" => "\xE2\x80\xB0",  // PER MILLE SIGN
    "\x8A" => "\xC5\xA0",      // LATIN CAPITAL LETTER S WITH CARON
    "\x8B" => "\xE2\x80\xB9",  // SINGLE LEFT-POINTING ANGLE QUOTATION MARK
    "\x8C" => "\xC5\x92",      // LATIN CAPITAL LIGATURE OE
    "\x8E" => "\xC5\xBD",      // LATIN CAPITAL LETTER Z WITH CARON
    "\x91" => "\xE2\x80\x98",  // LEFT SINGLE QUOTATION MARK
    "\x92" => "\xE2\x80\x99",  // RIGHT SINGLE QUOTATION MARK
    "\x93" => "\xE2\x80\x9C",  // LEFT DOUBLE QUOTATION MARK
    "\x94" => "\xE2\x80\x9D",  // RIGHT DOUBLE QUOTATION MARK
    "\x95" => "\xE2\x80\xA2",  // BULLET
    "\x96" => "\xE2\x80\x93",  // EN DASH
    "\x97" => "\xE2\x80\x94",  // EM DASH
    "\x98" => "\xCB\x9C",      // SMALL TILDE
    "\x99" => "\xE2\x84\xA2",  // TRADE MARK SIGN
    "\x9A" => "\xC5\xA1",      // LATIN SMALL LETTER S WITH CARON
    "\x9B" => "\xE2\x80\xBA",  // SINGLE RIGHT-POINTING ANGLE QUOTATION MARK
    "\x9C" => "\xC5\x93",      // LATIN SMALL LIGATURE OE
    "\x9E" => "\xC5\xBE",      // LATIN SMALL LETTER Z WITH CARON
    "\x9F" => "\xC5\xB8"       // LATIN CAPITAL LETTER Y WITH DIAERESIS
  );
  foreach($cp1252_map as $k=>$v){
    $byte_map[$k]=$v;
  }
}

$byte_map=array();
init_byte_map();
$ascii_char='[\x00-\x7F]';
$cont_byte='[\x80-\xBF]';
$utf8_2='[\xC0-\xDF]'.$cont_byte;
$utf8_3='[\xE0-\xEF]'.$cont_byte.'{2}';
$utf8_4='[\xF0-\xF7]'.$cont_byte.'{3}';
$utf8_5='[\xF8-\xFB]'.$cont_byte.'{4}';
$nibble_good_chars = "@^($ascii_char+|$utf8_2|$utf8_3|$utf8_4|$utf8_5)(.*)$@s";


function fix_latin($instr){
  if(mb_check_encoding($instr,'UTF-8'))return $instr; // no need for the rest if it's all valid UTF-8 already
  global $nibble_good_chars,$byte_map;
  $outstr='';
  $char='';
  $rest='';
  while((strlen($instr))>0){
    if(1==preg_match($nibble_good_chars,$input,$match)){
      $char=$match[1];
      $rest=$match[2];
      $outstr.=$char;
    }elseif(1==preg_match('@^(.)(.*)$@s',$input,$match)){
      $char=$match[1];
      $rest=$match[2];
      $outstr.=$byte_map[$char];
    }
    $instr=$rest;
  }
  return $outstr;
}


function url_friendly($url){

	$urlA=array();
	$urlC=array();

	//$url=str_replace("–","",$url);
	$url=str_replace("/","",$url);
	$url=str_replace(":","",$url);
	//$url=str_replace("-","",$url);
	$url=str_replace("\"","",$url);
	$url=str_replace("'","",$url);
	$url=str_replace("”","",$url);	
	$url=str_replace("“","",$url);
	
	$url=str_replace("–","-",$url);

	$url=str_replace(".","",$url);
	$url=str_replace(",","",$url);
	$url=str_replace(";","",$url);
	
	$url=str_replace("á","a",$url);
	$url=str_replace("é","e",$url);
	$url=str_replace("í","i",$url);
	$url=str_replace("ó","o",$url);
	$url=str_replace("ú","u",$url);
	$url=str_replace("ñ","n",$url);

	$url=str_replace("Á","A",$url);
	$url=str_replace("É","E",$url);
	$url=str_replace("Í","I",$url);
	$url=str_replace("Ó","O",$url);
	$url=str_replace("Ú","U",$url);
	$url=str_replace("Ñ","N",$url);
	
	$url=urlencode($url);
	
	$url=str_replace("+"," ",$url);
	$url=str_replace("~"," ",$url);
	$url=str_replace("-"," ",$url);
		
	$urlA=explode(" ",$url);
	foreach($urlA as $urlB){
	if(trim($urlB)!=''){ $urlC[]=$urlB; }
	}
	$url=implode(" ",$urlC);
			
	$url=strtolower($url);
	
	$url=str_replace(" ","-",$url);

	$url=(strlen($url)<4)?"index.html":substr($url,0,100);

	return $url;
}

function cleantext($txt){

//	$txt = strip_tags($txt,"<ul>,<li>,<p>,<br>,<blockquote>,<strong>,<i>,<b>");
//	$txt = strip_tags($txt,"<ul>,<li>,<p>,<br>,<strong>,<i>,<b>,<h2>,<h3>,<span>");
	$txt = strip_tags_attributes($txt,"<h2>,<h3>,<ul>,<li>,<ol>,<p>,<br>,<strong>,<i>,<b>","");
//	$txt = fix_latin($txt);
	$txt = str_replace(array("\n","\r","\s","\t","\0"),"",$txt);
	$txt = str_replace("<p>&nbsp;</p>","",$txt);
	$txt = str_replace("&nbsp;","",$txt);
	$txt = str_replace("<p> </p>","",$txt);
	$txt = str_replace("<p>\XC2\XA0</p>","",$txt);	
//	$txt = str_replace("\X3C\X70\X3E\X20\X3C\X2F\X70\X3E","",$txt);
//	$txt = strhex($txt);
//	$txt = "<textarea style='height:200px;width:100%;'>".$txt."</textarea>";
	return $txt;

}

function strhex($string) {
  $hexstr = unpack('H*', $string);
  return array_shift($hexstr);
}

function strip_tags_attributes($string,$allowtags=NULL,$allowattributes=NULL){ 
    $string = strip_tags($string,$allowtags); 
    if (!is_null($allowattributes)) { 
        if(!is_array($allowattributes)) 
            $allowattributes = explode(",",$allowattributes); 
        if(is_array($allowattributes)) 
            $allowattributes = implode(")(?<!",$allowattributes); 
        if (strlen($allowattributes) > 0) 
            $allowattributes = "(?<!".$allowattributes.")"; 
        $string = preg_replace_callback("/<[^>]*>/i",create_function( 
            '$matches', 
            'return preg_replace("/ [^ =]*'.$allowattributes.'=(\"[^\"]*\"|\'[^\']*\')/i", "", $matches[0]);'    
        ),$string); 
    } 
    return $string; 
}

function url_encode_seo($url){
	$url=urlencode($url);
	$url=str_replace(".","~",$url);
	$url=str_replace("-","_",$url);	
	$url=str_replace("+","-",$url);
	return $url;
}

function url_decode_seo($url){
	$url=str_replace("-","+",$url);
	$url=str_replace("_","-",$url);
	$url=str_replace("~",".",$url);	
	$url=urldecode($url);
	return $url;
}

function oppColour($c, $inverse=false)
{
    if(strlen($c)== 3)
    { // short-hand
        $c = $c{0}.$c{0}.$c{1}.$c{1}.$c{2}.$c{2};
    }
    if ($inverse)
    { // => Inverse Colour
        $r = (strlen($r=dechex(255-hexdec($c{0}.$c{1})))<2)?'0'.$r:$r;
        $g = (strlen($g=dechex(255-hexdec($c{2}.$c{3})))<2)?'0'.$g:$g;
        $b = (strlen($b=dechex(255-hexdec($c{4}.$c{5})))<2)?'0'.$b:$b;
        return $r.$g.$b;
    } else
    { // => Monotone based on darkness of original
        return array_sum(array_map('hexdec', str_split($c, 2))) > 255*1.5 ? '000000' : 'FFFFFF';
    }
} 

function crear_email_debug($notificaciones,$file){

	global $PARAMETROS_EMAIL;

	$html="";
	$num=0;
	if($PARAMETROS_EMAIL['debug']){
		if(sizeof($notificaciones)>0){
		foreach($notificaciones as $notificacion=>$emails){
		$html.="<div style='background-color:#ff0000;color:#fff;font-size:17px;font-weight:bold;'>".$notificacion."</div>";
		foreach($emails as $email){
		$num++;
		$html.="<div style='padding:10px 0;border-bottom:1px solid #CCCCCC;'>";
		$html.="<div style='background-color:#fff;color:#000;font-weight:bold;'>". $num ."</div>";
		$html.="<div style='background-color:#000;color:#fff;'><b>DE</b> : ".$email['FromName']."&lt;".$email['From']."&gt;</div>";
		$html.="<div style='background-color:#ccc;color:#000;'><b>PARA</b> : ".$email['to']."</div>";
		$html.="<div style='background-color:#999;color:#fff;'><b>ASUNTO</b> : ".$email['Subject']."</div>";
		$html.="<div>".$email['body']."</div>";
		$html.="</div>";
		}
		}
		}
		$html='<html><head><meta http-equiv="content-type" content="text/html; charset=UTF-8" /></head><body style="font:12px Arial;">'.$html.'</body></html>';
	
		$f1=fopen($file,"w+");
		fwrite($f1,$html);
		fclose($f1);
	}

}

function quitar_repetidos($includes){
	$Inc=array();
	foreach($includes as $i=>$include){
		if($i=='script' or $i=='style'){
			$Inc[$i]=$include;
		} else {
		$Inn=array();
		foreach($include as $e=>$inn){
			if(!in_array($inn,$Inn)){
				$Inn[$e]=$inn;
			}
		}
		$Inc[$i]=$Inn;
		unset($Inn);
		}
	}
	return $Inc;
}

function removeemptytags($html_replace) 
{ 
$pattern = "/<[^\/>]*>([\s]?)*<\/[^>]*>/"; 
return preg_replace($pattern, '', $html_replace); 
} 
		
?>