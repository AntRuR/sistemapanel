<?php //á

$object=[];
				
/**
 * visitas
 */
$visitor_file="../../visitor.txt";
$visitas=implode("",file($visitor_file));
if (!isset($_COOKIE['visiter'])){
setcookie('visiter','1',time()+60*60*24);
$f1=fopen($visitor_file,"w+");
fwrite($f1,++$visitas);
fclose($f1);	
}

$object=[
		'visitas'	=>$visitas,
		'by'		=>"by <a href='http://prodiserv.com' title='Diseño y Desarrollo'>Prodiserv</a>",
		'info'		=>[
					//'direccion'=>$COMMON['datos']['direccion_publica'],
					//'contacto'=>"Email <a href='mailto:".$COMMON['datos']['emails_publicos']."'>".$COMMON['datos']['emails_publicos']."</a>",
					//'telefonos'=>"Teléfonos ".$COMMON['datos']['telefonos_publicos'],
					'copy'=>strtoupper($COMMON['datos_root']['nombre_empresa'])." &reg; ".date("Y")." Copyright Todos los Derechos Reservados",
					],
		];
			
/*					

$object['menu']=array_merge($COMMON['menu'],array(
												array(
														'url'	=>'index.php?modulo=formularios&tab=compre_en_usa'
														,'label'=>'Compre en USA'	
													)
												,array(
														'url'	=>'index.php?modulo=formularios&tab=compre_en_lima'
														,'label'=>'Compre en Lima'	
													)
												,array(
														'url'	=>'index.php?modulo=formularios&tab=compramos_por_ti'
														,'label'=>'Compramos por Ti'
													)
												,array(
														'url'	=>'index.php?modulo=app&tab=pages&page=compre-en-nuestra-tienda'
														,'label'=>'Compre en Nuestra Tienda'
													)
											)
										);

*/			
			
$OBJECT[$PARAMS['this']]=$object;

