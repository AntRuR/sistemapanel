<?php //á
?><div style="clear:left;">Procesos</div>
<?php


require_once('lib/webutil.php');


chdir("../web/modulos");

$allcs=implode("",file("css.php"));

$Default=array('footers'=>'05','bloques'=>'18','listados'=>'15','arboles'=>'01','menus'=>'22');

list($uno,$dos,$tres)=between($allcs,"/*WEBBLOQUES-START*/","/*WEBBLOQUES-END*/");
eval($dos);

list($uno0,$dos0,$tres0)=between($allcs,"/*CLASSSELECTED-START*/","/*CLASSSELECTED-END*/");
eval($dos0);

$CSS='';
foreach($WEBBLOQUES as $uno=>$dos){
	$ddos=explode(",",$dos);
	foreach($ddos as $dddos){
	$CSS.="\$CLASSSELECTED['".$uno."-".$dddos."']='".(($CLASSSELECTED[$uno."-".$dddos])?$CLASSSELECTED[$uno."-".$dddos]:$dddos."_".$Default[$dddos])."';\n";
	}
}
$allcs=$uno0."/*CLASSSELECTED-START*/\n".$CSS."/*CLASSSELECTED-END*/\n".$tres0;

list($uno0,$dos0,$tres0)=between($allcs,"/*CLASSPARAMETERS-START*/","/*CLASSPARAMETERS-END*/");
eval($dos0);

$CPS='';
foreach($WEBBLOQUES as $uno=>$dos){
	$ddos=explode(",",$dos);
	foreach($ddos as $dddos){	
	$CPS.="\$CLASSPARAMETERS['".$uno."-".$dddos."']='".$CLASSPARAMETERS[$uno."-".$dddos]."'\n";
	}
}
$allcs=$uno0."/*CLASSPARAMETERS-START*/\n".$CPS."/*CLASSPARAMETERS-END*/\n".$tres0;

$f1=fopen("css.php","w+");
fwrite($f1,$allcs);
fclose($f1); 


//prin($CLASSSELECTED);
//prin($CLASSPARAMETERS);

exit();

require_once('lib/simple_html_dom.php');
chdir("base2");
set_time_limit(0);

//$categorias=select("id_subcat,des_subcat_es,coment_sc",'subcategoria','where 1');

/*
$bloques=select("id,texto","productos_bloques","where 1");
foreach($bloques as $bloque){
	update(array('texto'=>str_replace('style="border:1px solid #ddd; width:50%;"','style="border:1px solid #ddd;"',$bloque['texto'])),'productos_bloques','where id="'.$bloque['id'].'"',2);
}
exit();
*/
//$marcas=select("id_mar,des_mar",'marca','where 1');
/*
mysql_query("TRUNCATE TABLE `productos_items`");
$items=select("id_pro,nom_pro_es,des_cor_es,id_mar,id_subcat,cod_comer,
img_pro1,
img_pro2,
img_pro3,
img_pro4,
img_pro5,
img_pro6,
img_pro7,
img_pro8,
img_pro9,
img_pro10
",'producto','where 1');

foreach($items as $categoria){
	$id=insert(array(
			'fecha_creacion'=>'now()',
			'fecha_edicion'=>'now()',
			'visibilidad'=>'1',
			'id'=>$categoria['id_pro'],
			'id_marca'=>$categoria['id_mar'],
			'id_grupo'=>$categoria['id_subcat'],
			'nombre'=>$categoria['nom_pro_es'],
			'descripcion'=>$categoria['des_cor_es'],
			'codigo'=>$categoria['cod_comer'],
			'source'=>	 $categoria['img_pro1'].","
						.$categoria['img_pro2'].","
						.$categoria['img_pro3'].","
						.$categoria['img_pro4'].","
						.$categoria['img_pro5'].","
						.$categoria['img_pro6'].","
						.$categoria['img_pro7'].","
						.$categoria['img_pro8'].","
						.$categoria['img_pro9'].","
						.$categoria['img_pro10']																							
			),'productos_items',1);
	$id=$id['id'];

}
*/
/*
mysql_query("TRUNCATE TABLE `productos_fotos`");
$items=select("source,id","productos_items","where 1");
foreach($items as $item){
	$sources=explode(",",$item['source']);
	foreach($sources as $sor){
		if(trim($sor)=='')continue;
		insert(array(
			'fecha_creacion'=>'now()',
			'fecha_edicion'=>'now()',
			'visibilidad'=>'1',
			'id_item'=>$item['id'],
			'source'=>"http://truckmax.com.pe/imagenes_producto_grande/".$sor
			),"productos_fotos",1);
	}
}

exit();
*/
//prin($categorias);

exit();
$time_start = microtime(true);

//include("base2/procesos_lbel.php");
//include("base2/procesos_cyzone.php");			
//include("base2/procesos_natura.php");			
include("base2/procesos_oriflame.php");


$time_end = microtime(true);
$time = $time_end - $time_start;		
echo "este proceso demoró ". number_format($time/60,2)." min";	


//prin($numero_productos);

/*
$producto=$listadosA['children']['0']['children']['0']['children']['0']['children']['1'];

//prin($producto);

$html = file_get_html($producto);
$img = $html->find("img[id=ProductDetailCtl_imgProduct]",0);
$span = $html->find("span[id=ProductDetailCtl_lblProductName] h1",0);
list($uno,$titulo,$subtitulo)=between($span->innertext,"<b>","</b>");
$prec=$html->find("span[id=ProductDetailCtl_AddToCartCtl_lblNormalPrice]",0);
$prec_oferta=$html->find("span[id=ProductDetailCtl_AddToCartCtl_lblPrice]",0);
$descripcion=$html->find("span[id=ProductDetailCtl_lblProductDescription]",0);

$p['source']="http://tiendavirtual.pe.lbel.com/".$img->src;
$p['subtitulo']=trim(strip_tags($subtitulo));
$p['titulo']=trim(strip_tags($titulo));
$p['prec']=trim(str_replace("S/.","",$prec->innertext));
$p['prec_oferta']=trim(str_replace("S/.","",$prec_oferta->innertext));
$p['descripcion']=$descripcion->innertext;

$html->clear();
unset($html);
*/

exit();

/*
$listados=array(
array('url'=>'http://tiendavirtual.pe.lbel.com/productlist.aspx?CName=Hombres_555&SCName=Cuidado_555000001&')
);

foreach($listados as $listado){
	
	$html = file_get_html($listado['url']);
	$as= $html->find("table[id=PL1_Prds] a img");
	foreach($as as $i=>$aa) {
		$href=$aa->src;
		if(enhay($aa,'M_')){
			$parts=between($href,"M_",".jpg");
			$links[]="http://tiendavirtual.pe.lbel.com/productdetails.aspx?IdProducto=".$parts[1];
			$prods++;
		}
	}	
	
}

*/





/*
$datos['date']=date ("Y-m-d H:i:s");

//echo $rserial;

store("../../web/modulos/store.php","INDICADORES",$datos);
*/

exit();





/*
$items = select('id,file,fecha_creacion,fecha_edicion','productos_fotos','',0,
				array('source'=>array('get_archivo'=>array(
										'carpeta'=>'profot_imas'
										,'fecha'=>'{fecha_creacion}'
										,'file'=>'{file}'
										,'tamano'=>'4'															
										)
					)					
				)
			);
foreach($items as $item){
$updates[]=update(array('source'=>$item['source']),'productos_fotos','where id="'.$item['id'].'"');
}

prin($updates);
*/
/*
$lista="
";

$emails=explode("\n",$lista);

$emails2 = array_unique($emails);

	foreach($emails2 as $t=>$Email){

		if(trim($Email)!=''){ $tem['email'] = trim($Email); 
		$ITEMS[]=$tem;
		}
	}

$ID_GRUPO=17;

foreach($ITEMS as $item){
	if(trim($item['email'])!=''){
		insert(
				array(	'visibilidad'=>'1',
						'fecha_creacion'=>'now()',
						'fecha_edicion'=>'now()',				
						'email'=>trim($item['email']),
						'nombre'=>trim($item['nombre']),
						'enabled'=>'1',
						'comprobado'=>'0',
						'id_grupo'=>$ID_GRUPO				
					  )
				  ,"emails_items"
				  ,0			  
				);		
	}		
}
exit();	
//prin($emails);
*/
/*
$lista='
jessi_333_15@hotmail.com  
';

$emails=explode("\n",$lista);

$emails2 = array_unique($emails);

	foreach($emails2 as $t=>$Email){

		if(trim($Email)!=''){ $tem['email'] = $Email; 
		$ITEMS[]=$tem;
		}
	}


//prin($ITEMS);


//exit();
$ID_GRUPO=15;

foreach($ITEMS as $item){
	if(trim($item['email'])!=''){
		insert(
				array(	'visibilidad'=>'1',
						'fecha_creacion'=>'now()',
						'fecha_edicion'=>'now()',				
						'email'=>trim($item['email']),
						'nombre'=>trim($item['nombre']),
						'enabled'=>'1',
						'comprobado'=>'0',
						'id_grupo'=>$ID_GRUPO				
					  )
				  ,"emails_items"
				  ,0			  
				);		
	}		
}

*/

/*

$lista="                                     
";    

//echo "<textarea>";

$emails=explode("\n",$lista);

	foreach($emails as $t=>$Email){
	//	if($t==1){
		$linea=trim($Email);
		$st=explode(" ",$linea);
		$email=$st[sizeof($st)-1];
		$nombre=trim(substr($linea,0,strlen($linea)-strlen($email)));
		if($email!=''){ $tem['email'] = $email; if($nombre!='' and $nombre!='None'){ $tem['nombre']= utf8_encode($nombre); }  } 
	//	}
	$ITEMS[]=$tem;
	}

$ID_GRUPO=14;

foreach($ITEMS as $item){
	if(trim($item['email'])!=''){
		insert(
				array(	'visibilidad'=>'1',
						'fecha_creacion'=>'now()',
						'fecha_edicion'=>'now()',				
						'email'=>trim($item['email']),
						'nombre'=>trim($item['nombre']),
						'enabled'=>'1',
						'comprobado'=>'0',
						'id_grupo'=>$ID_GRUPO				
					  )
				  ,"emails_items"
				  ,0			  
				);		
	}		
}

*/


//echo "</textarea>";

//prin($emails);

/*
$ID_GRUPO=3;
$baseA=file("base2/listas/alumnos catolica.txt");
exit();
prin($baseA);
//$baseA=explode("\n",$base);

foreach($baseA as $email){

	if(trim($email)!=''){
	
		insert(
				array(	'visibilidad'=>'1',
						'fecha_creacion'=>'now()',
						'fecha_edicion'=>'now()',				
						'email'=>trim($email),
						'enabled'=>'1',
						'comprobado'=>'0',
						'id_grupo'=>$ID_GRUPO				
					  )
				  ,"emails_items"
				  ,0			  
				);		
			
	}

}
*/

/*
for($i=1;$i<=100;$i++){

$cuenta="info".sprintf("%'03d",$i)."@travelofertas.info";

insert(
		array(	'visibilidad'=>'1',
				'fecha_creacion'=>'now()',
				'fecha_edicion'=>'now()',				
				'visibilidad'=>'1',
				'time_0'=>'now()',								
				'usuario'=>$cuenta,
				'clave'=>'elieli',
				'relays'=>'250',
				'enabled'=>'1',
				'proveedor'=>'6'
			  )
    	  ,"cuentas"
    	  ,1			  
		);
		
}
*/

//prin($cuentas);

/*
	$ITEMS=select(
		array("distinct id_email as id_email")
		,"lista_envio"
		,"where leido=1"
		,0
		,array(
			'email'=>array('sub_select_fila'=>array('campos'=>'nombre,email','tabla'=>'emails_items','donde'=>"where id={id_email} and enabled=1"))
		)
	);
	
	$ID_GRUPO=26;
	
	foreach($ITEMS as $item){
		if(trim($item['email'])!=''){		
			insert(
					array(	'visibilidad'=>'1',
							'fecha_creacion'=>'now()',
							'fecha_edicion'=>'now()',				
							'email'=>trim($item['email']['email']),
							'nombre'=>trim($item['nombre']['nombre']),
							'enabled'=>'1',
							'comprobado'=>'1',
							'id_grupo'=>$ID_GRUPO				
						  )
					  ,"emails_items"
					  ,0			  
					);		
		}
	}
	
prin($ITEMS);

*/

?>