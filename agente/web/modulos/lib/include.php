<?php //á

#HOME
$URLS['index.php?modulo=home']="home";
$URLS['index.php']="home";
#PAGINAS
$URLS['index.php?modulo=pagina&tab=empresa']='empresa';
$URLS['index.php?modulo=pagina&tab=servicios']='servicios';
#FORMULARIOS
$URLS['index.php?modulo=pagina-formulario&tab=contacto']='contactenos';
$URLS['index.php?modulo=pagina-formulario&tab=boletin']='inscribir-en-boletin';
#ITEM e ITEMS
$URLS['index.php?modulo=items&tab=usuarios']='asociados';
$URLS['index.php?modulo=items&tab=productos&en_cartera=si']='inmuebles-en-cartera';


function procesar_url($url,$debug=0){
	
	global $URLS;
	
	//return $url;
	
	
	if($URLS[$url]){
		$url=$URLS[$url];
	} else {
	
		$file="index.php?";
		$url2=str_replace($file,"",$url);
		
		parse_str($url2,$gets);

		if( $gets['modulo']=='items' ){
			if( $gets['tab']=='productos' ){		
				if( $gets['en_cartera']=='si' ){
					$url='inmuebles-en-cartera';						
				} else {	
					$url='buscar-';
					$url.=( ($gets['tipo'])?$gets['tipo']:"inmuebles" );			
					$url.=( ($gets['aviso'])?"/".$gets['aviso']:"/alquiler-y-venta" );			
					$url.=( ($gets['departamento'])?"/en-".$gets['departamento']:"" );			
					$url.=( ($gets['provincia'])?",".$gets['provincia']:"" );			
					$url.=( ($gets['distrito'])?",".$gets['distrito']:"" );			
				}	
				$url.=( ($gets['pag'])?"/".$gets['pag']:"" );	
			} elseif($gets['tab']=='usuarios'){
				$url='asociados';			
				$url.=( ($gets['pag'])?"/".$gets['pag']:"" );				
			}			
			
		} elseif($gets['modulo']=='item'){
			if( $gets['tab']=='productos' ){				
				$url="inmueble/".url_encode_seo($gets['id']);		
			}
		}		
		
		if($debug==1){ prin($gets); }		
		
	}
	
	
	
	return $url;
	
}

function procesar_titulo($string){

	$title=ucfirst($string)." | Agencia Inmobiliaria";
	return $title;
	
}

$TAGS=array();
$TAGS[]="agente inmobilario";

function procesar_keywords($string){

	global $STOPWORDS;
	global $TAGS;
	$keyword = new autokeyword(array('content'=>$string,'stopwords'=>$STOPWORDS), "utf-8");
	$keys = $keyword->get_keywords();	
	$keys=array_merge($TAGS,$keys);
	$keys2=array_chunk($keys,10);
	$keys=$keys2[0];	
	$keywords=implode(",",$keys);
	//prin($keywords,"#0000FF");
	return $keywords;
	
}

function procesar_description($string){

	$string=str_replace("...","",limit_string($string,150));
	//prin($string,"#FFFF00");
	return $string;

}


?>