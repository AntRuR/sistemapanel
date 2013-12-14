<?php


function procesar_objeto_tabla($array){

	//echo "<pre>"; print_r($array); echo "</pre>";
	global $_GET;
	
	$campos = array();
	$query = array();
	$imagenes = array();
	$ficheros = array();
	$foreigs = array();
	$campos['form'] = array();
	$campos['list'] = array();

	$campos['get_id']    	=	'';
	$campos['where_id']    	=	'';	
						
	if(is_array($array['campos']))
	foreach($array['campos'] as $camp){
	
		if(in_array($camp['tipo'],array('id','fcr','fed','pos','vis'))){
			$campos[$camp['tipo']]=$camp['campo'];
		}
		if(in_array($camp['tipo'],array('inp','txt','hid','img','sto','com','fch','pas','yot','html'))){
			$campos['form'][]=$camp;
			//if($array['buscar']=='1'){
			if($array['buscar']=='1' or $array['buscar']=='2'){
				if($camp['fulltext']=='1'){
					$campos['fulltext'][]=$camp['campo'];	
				}
				if($camp['like']=='1'){
					$campos['like'][]=$camp['campo'];	
				}				
			}
			
			if($camp['sesion_login']=='1'){ 
				$campos['sesion_login']=$camp['campo']; 
			}
			
			if($camp['sesion_password']=='1'){ 
				$campos['sesion_password']=$camp['campo']; 
			}
			
			if($camp['foreig']=='1'){
				$campos['foreig']=$camp['campo'];
				$canpo=str_replace(array('[',']'),'',$camp['default']);
				$foreigs[]=$camp['campo'];
				if(trim($_GET[$canpo])!=''){
					$campos['get_id']    	.=	'&'.$canpo.'='.$_GET[$canpo];
					$campos['where_id']    	.=	"and ".$camp['campo']."=\"".$_GET[$canpo]."\"";	
				}
			}	
			if($camp['tipo']=='img'){
				$imagenes[]=$camp['campo'];
				$campos[$camp['campo']]['carpeta']=$camp['carpeta'];	
				$campos[$camp['campo']]['prefijo']=$camp['prefijo'];
				$campos[$camp['campo']]['tamanos']=$camp['tamanos'];
			}	
			if($camp['tipo']=='sto'){
				$ficheros[]=$camp['campo'];
				$campos[$camp['campo']]['carpeta']=$camp['carpeta'];	
				$campos[$camp['campo']]['prefijo']=$camp['prefijo'];

			}				
		}
		if( in_array($camp['listable'],array('1')) or in_array($camp['tipo'],array('id','fcr','vis','pos'))){
			$campos['list'][]=$camp;
			$query[]=$camp['campo'];
		}
		
	}
	if(sizeof($imagenes>0)){
		$campos['imagenes']	=	$imagenes;
	}
	if(sizeof($ficheros>0)){
		$campos['ficheros']	=	$ficheros;
	}	

	foreach($array as $iii=>$ddd){
		if(!in_array($iii,array('campos'))){
			$campos[$iii]	=	$array[$iii];
		}
	}
	
	$campos['por_pagina']	=	($array['por_pagina']=='')?'20':$array['por_pagina'];
	$campos['query']	=	implode(",",$query);


	/*
	if(trim($_GET['id'])!=''){
		$campos['get_id']    	=	'&id='.$_GET['id'];
		$campos['where_id']    	=	"and ".$campos['foreig']."=\"".$_GET['id']."\"";	
	} else {
		$campos['get_id']    	=	'';
		$campos['where_id']    	=	'';
	}
	*/
//	prin($camp['where_id']);
	return $campos;
	
}

function verificar_tabla($tabla){

	global $tablas_creadas;	
	if(is_array($tablas_creadas)){
		if(!in_array($tabla,$tablas_creadas)){
			echo "<div style='background-color:#37F73B; margin:0 0 0 8px;padding:2px 10px;float:left;'>No existe la tabla <b style='text-decoration:underline;'>".$tabla."</b> <a href='maquina.php' >ir a maquina</a></div>";
		}
	}
	
}	

function procesar_dato($dato,$id=NULL){

	global $_GET;
	global $link;
	
	if(!$id){ $id=$_GET['id']; }

	//$dato = ($id)?str_replace('[id]',$id,$dato):"registros";

	$dato = str_replace('[id]',$id,$dato);
	
	$dato2= $dato;
	if( !(strpos($dato,"{")==false) and !(strpos($dato,"}")==false) ){
	
		$uno=array();
		$uno = explode("{",$dato);
		foreach($uno as $ii=>$un){
		if( !(strpos($un,"}")==false) ){
		$dos = explode("}",$un);
		$consulta = $dos[0];
		/*echo $consulta."<br>";*/
		$result=mysql_query($consulta,$link);
		$row = mysql_fetch_row($result);
		$dato3 = $row[0];		
		$llaves="{".$dos[0]."}";
		$dato2 = str_replace($llaves,$dato3,$dato2);
		}
		}
		if($id!=''){
		
			$dato = $dato2 ;
			
		} else {
			
			list($aa,$bb)=explode("{",$dato);
			list($cc,$dd)=explode("}",$bb);
			$dato=$aa.$dd;

		}
		
	} 
	return $dato;
}

function script_create_table($obta){

//$obta=$objeto_tabla[$_GET['me']];

$Acampos=array();

$Acampos2=array();

$AcamposUnique=array();

//echo "<pre>"; print_r($obta); echo "</pre>";

foreach($obta['campos'] as $camp){
		
	if(in_array($camp['tipo'],array('id'))){
		$Acampos[]="`".$camp['campo']."` int(10) NOT NULL auto_increment";			
		$Acampos2[]="PRIMARY KEY  (`".$camp['campo']."`)";			
	}
	if(in_array($camp['tipo'],array('fcr','fed','fch'))){
		$Acampos[]="`".$camp['campo']."` datetime default '0000-00-00 00:00:00'";
	}
	if(in_array($camp['tipo'],array('pos'))){
		$Acampos[]="`".$camp['campo']."` int(10) default NULL";
	}
	
	if(in_array($camp['tipo'],array('txt'))){
		$length=($camp['size']=='')?"800":$camp['size'];
		$variable=($camp['variable']=='')?"varchar":$camp['variable'];
		$Acampos[]="`".$camp['campo']."` $variable($length) default NULL";
	}
	if(in_array($camp['tipo'],array('inp','com','pas'))){
		$length=($camp['size']=='')?"80":$camp['size'];
		$variable=($camp['variable']=='')?"varchar":$camp['variable'];	
		$Acampos[]="`".$camp['campo']."` $variable($length) default NULL";
	}	
	
	if(in_array($camp['tipo'],array('html'))){
		$Acampos[]="`".$camp['campo']."` longtext default NULL";
	}	
	if(in_array($camp['tipo'],array('sto','img','yot'))){
		$Acampos[]="`".$camp['campo']."` varchar(150) default NULL";
	}	
	if(in_array($camp['tipo'],array('hid'))){
		$Acampos[]="`".$camp['campo']."` int(10) default NULL";
	}
	if(in_array($camp['tipo'],array('vis'))){
		$Acampos[]="`".$camp['campo']."` char(1) default NULL";
	}	

	if($camp['fulltext']=='1'){
		$AcamposFull[]="`".$camp['campo']."`";
	}

	if($camp['unique']=='1'){
		$AcamposUnique[]="UNIQUE KEY `".$camp['campo']."` (`".$camp['campo']."`)";
	}		
}

if(sizeof($AcamposFull)>0){
	$Acampos2[]="FULLTEXT KEY ".$AcamposFull[0]." (". implode(",",$AcamposFull). ")";
}


$Acampos3=array_merge($Acampos,$AcamposUnique,$Acampos2);

$sql ="CREATE TABLE IF NOT EXISTS `".$obta['tabla']."` (\n";
$sql.= implode(",\n",$Acampos3);
$sql.="\n) ENGINE=MyISAM  DEFAULT CHARSET=utf8;\n";

return $sql;

}


function ccl_img_uploadmini($file_temp,$ext,$carpeta_destino,$archivo_nombre,$ancho_ideal,$alto_ideal)
{
	global $DIRECTORIO_IMAGENES, $DIR_IMG_TEMP;
	$carpeta_temporal = "../".$DIRECTORIO_IMAGENES.$DIR_IMG_TEMP."/";
	// generar la miniatura temporalmente en el directorio images_temp
	ccl_guarda_miniatura($file_temp,$ext,$carpeta_temporal.$archivo_nombre,$ancho_ideal,$alto_ideal);
	// subir la imagen de images_temp a su lugar en el ftp
	$url_mini = ccl_upload_ftp($carpeta_temporal.$archivo_nombre, $carpeta_destino, $archivo_nombre);
	// borrar la miniatura temporal
	unlink($carpeta_temporal.$archivo_nombre);
	return true;
}

// subir un fichero al directorio de ficheros
function ccl_upload_ftp($archivo_origen, $carpeta_destino, $archivo_nombre)
{
	global $httpfiles, $ftp_files_host, $ftp_files_user, $ftp_files_pass, $ftp_files_root, $DIRECTORIO_IMAGENES , $UPLOAD_FTP;
	
//	echo "|$archivo_origen, $carpeta_destino, $archivo_nombre|";
	
    // fecha actual
    $datetime = date("Ymd");
    $year  = substr($datetime,0,4);
    $month = substr($datetime,4,2);
    $day   = substr($datetime,6,2);
		
	if($UPLOAD_FTP){	
		
	// definir directorio de destino
	$folder = $ftp_files_root.$carpeta_destino;

	// abrir conexin ftp y loguearse
	$conn_id = ftp_connect($ftp_files_host);
	$login_result = ftp_login($conn_id, $ftp_files_user, $ftp_files_pass);

	// verificar conexin
	if ((!$conn_id) || (!$login_result))
		return "error";
		
    // crear los directorios de destino en caso que no existan
    // cambiar al directorio de destino
	$folder=str_replace("//","/",$folder);	
	
	@ftp_mkdir($conn_id, $folder);
	cambiar_permisos($folder);
	
    if(ftp_chdir($conn_id, $folder))
    {
		ftp_chdir($conn_id, "/"); // volver a la raz
		// crear directorio con ao, mes y da
		@ftp_mkdir($conn_id, $folder."/".$year);
		cambiar_permisos($folder."/".$year);
        @ftp_mkdir($conn_id, $folder."/".$year."/".$month);
		cambiar_permisos($folder."/".$year."/".$month);
        @ftp_mkdir($conn_id, $folder."/".$year."/".$month."/".$day);
		cambiar_permisos($folder."/".$year."/".$month."/".$day);
		// copiar el archivo
	    $destination_file = $folder."/".$year."/".$month."/".$day."/".$archivo_nombre;
	    if(!ftp_put($conn_id, $destination_file, $archivo_origen, FTP_BINARY)) { ftp_close($conn_id); return "error"; }
		else {	 /* @ftp_chmod($conn_id, 0644, $destination_file ); */	}
        ftp_close($conn_id);
	    return $httpfiles.$carpeta_destino."/".$year."/".$month."/".$day."/".$archivo_nombre;
    }
    else
    {
    	ftp_close($conn_id);
    	return "error";
    }
	
	} else {	
		
		// definir directorio de destino
		$folder = "../".$carpeta_destino;
		$folder = str_replace("//","/",$folder);

		$folder =(substr($folder,0,1)=="/")?substr($folder,1):$folder;
		
		$dir_men = getcwd();			

		chdir($ftp_files_root);

		// crear los directorios de destino en caso que no existan
		
		// cambiar al directorio de destino				
		@mkdir($folder);
/*		echo mkdir($folder)?"<script>alert('|$folder| creado');</script>":"<script>alert('|$folder| no creado');</script>";		*/
		
		// crear directorio con ao, mes y da
		@mkdir($folder."/".$year);
/*		echo mkdir($folder."/".$year)?"<script>alert('|$folder/$year| creado');</script>":"<script>alert('|$folder/$year| no creado');</script>";		*/
		
		//cambiar_permisos($folder."/".$year);
		@mkdir($folder."/".$year."/".$month);
/*		echo mkdir($folder."/".$year."/".$month)?"<script>alert('|$folder/$year/$month| creado');</script>":"<script>alert('|$folder/$year/$month| no creado');</script>";*/
		
		//cambiar_permisos($folder."/".$year."/".$month);
		@mkdir($folder."/".$year."/".$month."/".$day);
/*		echo mkdir($folder."/".$year."/".$month."/".$day)?"<script>alert('|$folder/$year/$month/$day| creado');</script>":"<script>alert('|$folder/$month/$day| no creado');</script>";*/
		
		//cambiar_permisos($folder."/".$year."/".$month."/".$day);
				
		// copiar el archivo
		$destination_file = $folder."/".$year."/".$month."/".$day."/".$archivo_nombre;
		
		/*echo "<script>alert('$destination_file');</script>";*/
		
		chdir($dir_men);  
		/*
		echo "<script>alert('".getcwd()."');</script>";
		echo "<script>alert('".$destination_file."');</script>";
		*/
		if(copy($archivo_origen,$destination_file)){  return "error"; }
		else {	 return $httpfiles.$carpeta_destino."/".$year."/".$month."/".$day."/".$archivo_nombre;	}

	}		
}

// ------------------------------------------------------------------------------------------------------------------------------------------------------

function ccl_guarda_miniatura($file_temp,$ext,$file_dest,$ancho_ideal,$alto_ideal)
{
	// Crer imagen dinamica dependiendo del tipo es la funcion q usaremos.
	switch($ext)
	{   case "jpg":
	        $img = imagecreatefromjpeg($file_temp);
	    break;
	    case "gif":
	        $img = imagecreatefromgif($file_temp);
	    break;
	    case "png":
	        $img = imagecreatefrompng($file_temp);
	    break;
	}
	// dimensiones reales
    $ancho_real = imagesx($img);
    $alto_real  = imagesy($img);
	// hacer una escala
    if($ancho_real < $ancho_ideal && $alto_real < $alto_ideal) // imagen pequeña, no pasa nada
    {	
		$escala_x = $ancho_real;
    	$escala_y = $alto_real;
    }
    elseif( $ancho_real >= $ancho_ideal || $alto_real >= $alto_ideal )
    {
		$escala_x = $ancho_real;
    	$escala_y = $alto_real;
        if( $escala_x > $ancho_ideal)                          // si es muy ancha, escalar de acuerdo al ancho
        {   
			$escala_x = $ancho_ideal;
			$escala_y = $alto_real*($escala_x/$ancho_real);
        }
        if( $escala_y > $alto_ideal)
        {	
			$escala_y = $alto_ideal;                          // si es muy alta, escalar de acuerdo al alto
	    	$escala_x = $ancho_real*($escala_y/$alto_real);
        }
    }
	// crear papel de imágen, ImageCreateTrueColor para no perder colores
	$miniatura = ImageCreateTrueColor($escala_x, $escala_y);
	// imprimir la imagen redimensionada
    imagecopyresampled($miniatura,$img,0,0,0,0,$escala_x,$escala_y,$ancho_real,$alto_real);
    // guardar la imagen como $file_dest
	switch($ext)
	{
	    case "jpg":
	        imagejpeg($miniatura,$file_dest,100);
	    break;
	    case "gif":
	        imagegif($miniatura,$file_dest,100);
        break;
	    case "png":
	        imagejpeg($miniatura,$file_dest,100);
//	        imagepng($miniatura,$file_dest);
        break;			
	}
}

function ccl_download($file_source,$nombre_temp,$dir_temp)
{
	   $file_target = substr($dir_temp."/".$nombre_temp,1);
	   $file_target = str_replace("//","/",$file_target);

	   $file_source = str_replace("http:/","http://",$file_source);

	   $file_source = str_replace("http:///","http://",$file_source);

	   $file_source = str_replace("localhost","127.0.0.1",$file_source);
		
       $rh = fopen($file_source, 'rb');
       $wh = fopen($file_target, 'wb');
       if ($rh===false || $wh===false) {
		   echo "error abriendo fuente: $file_source , nuevo:$file_target\n";
           return false;
       }
       while (!feof($rh)) {
           if (fwrite($wh, fread($rh, 1024)) === FALSE) {
		   		   echo "error escribiendo\n";
                   return false;
               }
       }
       fclose($rh);
       fclose($wh);
       // No error
       return true;
	   
}


// borrar un fichero de directorio de ficheros

function ccl_delete_ftp($carpeta_destino, $archivo_nombre)
{
	global $httpfiles, $ftp_files_host, $ftp_files_user, $ftp_files_pass, $ftp_files_root;
	// definir directorio de destino
	$folder = $ftp_files_root.$carpeta_destino;
	// abrir conexin ftp y loguearse
	$conn_id = ftp_connect($ftp_files_host);
	$login_result = ftp_login($conn_id, $ftp_files_user, $ftp_files_pass);
	// verificar conexin
	if ((!$conn_id) || (!$login_result))
		return "error";
	// borrar archivo
	if(!ftp_delete($conn_id, $folder."/".$archivo_nombre))
	{
    	ftp_close($conn_id);
    	return "error";
    }
    ftp_close($conn_id);

}

function grabar_fichero($campo,$r_img,$tabla,$objeto, $id){
	
	global $httpfiles, $s_usuCod, $DIR_IMG_UPLOAD, $objeto_tabla, $DIRECTORIO_IMAGENES;	
	
	$images_temp="../".$DIRECTORIO_IMAGENES.$DIR_IMG_UPLOAD."/";
	
	$images_temp=str_replace("//","/",$images_temp);
	
	$datos_tabla = $objeto_tabla[$objeto];
	
	$s_usuCod	=$datos_tabla['campos'][str_replace("stoupload_","",$campo)]['prefijo'];
	$Carpeta	=$DIRECTORIO_IMAGENES."/".$datos_tabla['campos'][str_replace("stoupload_","",$campo)]['carpeta'];
	
//	$Tamanos	=$datos_tabla[str_replace("stoupload_","",$campo)]['tamanos'];
	$DT=procesar_objeto_tabla($objeto_tabla[$objeto]);
	$Id=$DT['id'];		
	//echo "|$campo|$s_usuCod|$Carpeta|$Tamanos|";
	
//	$r_img	=	str_replace("_preview.","_orig.",$r_img);

	$img_ext = substr($r_img,strpos($r_img,".")+1);

	// obtener el nombre del archivo antiguo
	$file_name 	= substr($r_img,strrpos($r_img, "/")+1);
	$file_dir	= str_replace($httpfiles,"",$r_img);
	$file_dir 	= "../".str_replace($file_name,"",$file_dir);
	$file_temp  = $file_dir.$file_name;

	$folder_dest = $Carpeta; // no agregar / al final  //CARGAR
	
	ccl_upload_ftp($file_temp, $folder_dest, $file_name);

	ccl_delete_ftp($file_dir, $file_name);

	update(array(str_replace("stoupload_","",$campo)=>$file_name,"fecha_creacion"=>"now()"),$tabla,"where $Id='$id' ",0);
	
}


function grabar_imagen($campo,$r_img,$tabla,$objeto, $id){
//

	//echo "$c \n| $r_img \n| $tabla \n| $objeto \n| $id";
	// obtener la extensin del nombre de archivo enviado
	
	global $httpfiles, $s_usuCod, $DIR_IMG_TEMP, $objeto_tabla, $DIRECTORIO_IMAGENES;
	
	
	$images_temp="../".$DIRECTORIO_IMAGENES.$DIR_IMG_TEMP."/";
	
	$images_temp=str_replace("//","/",$images_temp);
	
	$datos_tabla = procesar_objeto_tabla($objeto_tabla[$objeto]);
//	echo "<pre>"; print_r($datos_tabla); echo "</pre>";
	
	$s_usuCod	=$datos_tabla[str_replace("upload_","",$campo)]['prefijo'];
	$Carpeta	=$DIRECTORIO_IMAGENES."/".$datos_tabla[str_replace("upload_","",$campo)]['carpeta'];
	$Tamanos	=$datos_tabla[str_replace("upload_","",$campo)]['tamanos'];
	$Id=$datos_tabla['id'];		
	//echo "|$campo|$s_usuCod|$Carpeta|$Tamanos|";
	
	$r_img	=	str_replace("_preview.","_orig.",$r_img);

	$img_ext = substr($r_img,strpos($r_img,".")+1);

	// obtener el nombre del archivo antiguo
	$file_name 	= substr($r_img,strrpos($r_img, "/")+1);
	$file_dir	= str_replace($httpfiles,"",$r_img);
	$file_dir 	= str_replace($file_name,"",$file_dir);
	$file_temp = $images_temp.$file_name;
	// bajar la imagen a directorio local temporal images_temp/
//	echo "$r_img - $file_name - ";
	//echo "$r_img,$file_name,/$images_temp";
	//exit();
	ccl_download($r_img,$file_name,"/".$images_temp);
	//exit();
	
//	ccl_download($r_img, $file_temp);

	// sacar extension
	if(@imagecreatefromjpeg($file_temp))    $ext = "jpg";
	elseif(@imagecreatefromgif($file_temp)) $ext = "gif";
	elseif(@imagecreatefrompng($file_temp)) $ext = "png";

	list($img_w, $img_h, $tipo, $atr) = getimagesize($file_temp);

	// subir por ftp a nuevo sitio
	$folder_dest = $Carpeta; // no agregar / al final  //CARGAR
	$timestamp=time();

	$file_dest = $s_usuCod."_".$timestamp."_".$img_w."x".$img_h.".".$ext; // tambie para _600x380					
	
	$TamanosArray=array();
	$TamanosArray=explode(",",$Tamanos);
	foreach($TamanosArray as $i=>$Tam){
	$xy=explode("x",$Tam);
	$i2=$i+1;
	ccl_img_uploadmini($images_temp.$file_name,$ext,$folder_dest,str_replace(".","_".$i2.".",$file_dest),$xy[0],$xy[1],true);
	}

	// mandar una copia del fichero original
	$r_img_confirm4 = ccl_upload_ftp($images_temp.$file_name, $folder_dest, $file_dest);
	@unlink($file_temp);

	ccl_delete_ftp($file_dir, $file_name);
	ccl_delete_ftp($file_dir, str_replace("_orig.","_preview.",$file_name));
	$imagen_save = $file_dest;
//	echo $imagen_save;
//	return $imagen_save;
	update(array(str_replace("upload_","",$campo)=>$imagen_save,"fecha_creacion"=>"now()"),$tabla,"where $Id='$id' ",0);
	
}



function dimensiona_img( $carpeta, $fecha_bd, $file, $ancho_ideal=NULL,$alto_ideal=NULL,$centrato_vertical=false)

{

	global $httpfiles, $USU_IMG_DEFAULT, $DIRECTORIO_IMAGENES;



	if($fecha_bd != "0000-00-00 00:00:00"){

		$img = $httpfiles.str_replace("//","/","/".$DIRECTORIO_IMAGENES."/".$carpeta."/".str_replace("-","/",substr($fecha_bd,0,10))."/".$file);

	} elseif($carpeta=='usr'){

		$img = $USU_IMG_DEFAULT;
	
	}

		//echo $img;
//	echo $img."<br>";



	if($ancho_ideal==NULL && $alto_ideal==NULL){	// no es necesario proporcionar



		$dimensiones=$file2A[($carpeta=='usr')?2:3];

		list($ancho_real,$alto_real) = explode("x",$dimensiones);

		

		$atributo = ' src="'.$img.'" width="'.$ancho_real.'" height="'.$alto_real.'" ';



	} else {



		$file2A = explode("_",$img);



		$dimensiones=$file2A[($carpeta=='usr')?2:3];



		// obtener las dimensiones

		list($ancho_real,$alto_real) = explode("x",$dimensiones);

		//$ancho_real	=	$ancho_proporcional;

		//$alto_real	=   $alto_proporcional;

		if($ancho_real < $ancho_ideal && $alto_real < $alto_ideal) // imagen pequeÃ±a, no pasa nada

		{

			$margintop= round(( $alto_ideal - $alto_real )/2) ;

			$atributo = ' src="'.$img.'"  width="'.$ancho_real.'px" height="'.$alto_real.'px"  ';

			if($centrato_vertical==true)

				$atributo.= ' style="margin-top: '.$margintop.'px !important;" ';

		}

		elseif( $ancho_real >= $ancho_ideal || $alto_real >= $alto_ideal )

		{

			$escala_x = $ancho_real;

			$escala_y = $alto_real;



			if( $escala_x > $ancho_ideal)                          // si es muy ancha, escalar de acuerdo al ancho

			{   $escala_x = $ancho_ideal;

				$escala_y = ($ancho_real==0)?0:$alto_real*($escala_x/$ancho_real);

			}



			if( $escala_y > $alto_ideal)

			{	$escala_y = $alto_ideal;                          // si es muy alta, escalar de acuerdo al alto

				$escala_x = ($alto_real==0)?0:$ancho_real*($escala_y/$alto_real);

			}

			$margintop= round(( $alto_ideal - $escala_y )/2) ;

			$atributo = 'src="'.$img.'" width="'.$escala_x.'px" height="'.$escala_y.'px" ';

			if($centrato_vertical==true)

				$atributo.= 'style="margin-top: '.$margintop.'px !important;" ';

		}



	}



	return $atributo;

}

function search_query($full,$likes,$buscar){
	
	$fftt1 = array();
	
	$fftt2 = array();
		
	if(sizeof($likes)>0){
		foreach($likes as $ft){
			$fftt1[]=" $ft like '%$buscar%' ";
		}
		$querys[]=" ( " . implode("or",$fftt1) . ") ";
	} 
	
	if(sizeof($full)>0){
		foreach($full as $ft){
			$fftt2[]=$ft;
		}
		$querys[]=" ( MATCH(".implode(",",$fftt2).") AGAINST ('$buscar') ) ";
	} 	
			
	$query=(sizeof($querys)>0)?" and ".(implode(" or ",$querys)):1;
	
	return $query;	

}

function match_against($fulltext,$buscar){
	
	if(sizeof($fulltext)>0){
		foreach($fulltext as $ft){
			$fftt[]=" $ft like '%$buscar%' ";
		}
		$query=" ( " . implode("or",$fftt) . ") ";
	} else {
		$query="1";	
	}
	return $query;

}

function get_youtube_code($v){

//http://www.xvideos.com/video656197/outdoor_fuck_interrupted

	if( !(strpos($v,"xvideos.com")==false)  ){
				
			$uno=explode("/video",$v);
			if(sizeof($uno)>1){
				$dos=explode("/",$uno[1]);
				return $dos[0];
			}		
		
	} elseif( !(strpos($v,"youtube")==false)  ){

	if(  !(strpos($v,"</embed></object>")==false)  ){

		$uno=explode("http://www.youtube.com/v/",$v);
		$dos=explode("&hl",$uno[1]);
		return $dos[0];
	
	} else {

		if(  !(strpos($v,"youtube.com")==false)  ){
		
			$uno=explode("v/",$v);
			if(sizeof($uno)>1){
				if(  !(strpos($uno[1],"&")==false)  ){
				$dos=explode("&",$uno[1]);
				return $dos[0];		
				} else {
				return $uno[1];
				}
			}
			$uno2=explode("v=",$v);
			if(sizeof($uno2)>1){

				if(  !(strpos($uno2[1],"&")==false)  ){
				$dos=explode("&",$uno2[1]);
				return $dos[0];		
				} else {
					return $uno2[1];
				}
			}			
	
		} else {
		
			return $v;
		
		}	
	
	}
	
	
	}

}




function redireccionar_a($url){

	die("<html><body onload=\"location.href='$url';\"></body></html>");	

}

function redireccionar(){

	global $_GET;
	if($_GET['maquina']==1)
	//header("Location: ?");
	die("<html><body onload=\"location.href='?';\"></body></html>");
	else {
	if($_GET['me']==''){
		//header("Location: ?");
		die("<html><body onload=\"location.href='?';\"></body></html>");	
	} else {
		//header("Location: ?me".$_GET['me']);
		die("<html><body onload=\"location.href='?me=".$_GET['me']."';\"></body></html>");	
	}	
	}
	
}
function redireccionar_load(){

	global $_GET;
	if($_GET['maquina']==1)
	//header("Location: ?");
	die("<script>window.addEvent('domready',function(){ location.href='?'; });</script>");
	else {
	if($_GET['me']==''){
		//header("Location: ?");
		die("<script>window.addEvent('domready',function(){ location.href='?'; });</script>");	
	} else {
		//header("Location: ?me".$_GET['me']);
		die("<script>window.addEvent('domready',function(){ location.href='?me=".$_GET['me']."'; });</script>");	
	}	
	}
	
}

function redireccionar_load_referer(){

	die("<script>window.addEvent('domready',function(){ location.href='". $_SERVER['HTTP_REFERER'] ."'; });</script>");	
	
}


function fixEncoding($in_str) 
{ 
	/*
  $cur_encoding = mb_detect_encoding($in_str) ; 
  if($cur_encoding == "UTF-8" && mb_check_encoding($in_str,"UTF-8")) 
    return $in_str; 
  else 
    return utf8_encode($in_str); 
	*/
	return $in_str;
} // fixEncoding


	function get_uniques_from_tabla($tabla){

	global $link;
	$result = mysql_query("SHOW KEYS FROM ".$tabla);
	while ($row=mysql_fetch_row($result)){
		if( $row[1]=='0' and $row[2]!='PRIMARY'){
			$uniques[]=$row[4];
		}
	}
	//prin($uniques);
	return $uniques;
	
	}

	function get_tipo_de_campo($campo,$tabla){

	global $link;
	$result = mysql_query("SHOW COLUMNS FROM ".$tabla);
	while ($row=mysql_fetch_row($result)){
		if($row['0']==$campo){
			$t0=explode("(",$row['1']);
			//$t1=explode(")",$t0['1']);
			$size=$t0['0'];
		}
	}
	return $size;
	}

	function get_size_de_campo($campo,$tabla){

	global $link;
	$result = mysql_query("SHOW COLUMNS FROM ".$tabla);
	while ($row=mysql_fetch_row($result)){
		if($row['0']==$campo){
			$t0=explode("(",$row['1']);
			$t1=explode(")",$t0['1']);
			$size=$t1['0'];
		}
	}
	return $size;
	}
		
	function get_columns_from_tabla($tabla){

	global $link;
	$result = mysql_query("SHOW COLUMNS FROM ".$tabla);
	$count = 0;
	while ($row=mysql_fetch_row($result)){
		$cnt = 0;
		foreach ($row as $item){
			if ($cnt == 0){
				$cnames[$count] = $item;
				$cnt++;
				$count++;
			}
		}
	}
	return $cnames;
	
	}

function get_columns_from_objeto($obta){

$nombre_tabla=$obta['tabla'];

$columnas_existentes=get_columns_from_tabla($obta['tabla']);

$indices_existentes=get_uniques_from_tabla($obta['tabla']);

$Acampos=array();

$Acampos2=array();

//echo "<pre>"; print_r($obta); echo "</pre>";

foreach($obta['campos'] as $camp){

	$camposA[]=$camp['campo'];
	
	if(!in_array($camp['campo'],$indices_existentes)){
		if($camp['unique']=='1'){
			if(in_array($camp['tipo'],array('inp'))){
				if(get_size_de_campo($camp['campo'],$obta['tabla'])>80){
				$Acampos[]="ALTER TABLE `$nombre_tabla` MODIFY `".$camp['campo']."` VARCHAR(80);";				
				}
				$Acampos[]="ALTER TABLE `$nombre_tabla` ADD UNIQUE(`".$camp['campo']."`);";
			}
		}	
	}
			
	if(!in_array($camp['campo'],$columnas_existentes)){
		
		if(in_array($camp['tipo'],array('id'))){
			$Acampos[]="ALTER TABLE `$nombre_tabla` ADD `".$camp['campo']."`  int(10) NOT NULL;";			
			//$Acampos2[]="PRIMARY KEY  (`".$camp['campo']."`)";			
		}
		if(in_array($camp['tipo'],array('fcr','fed','fch'))){
			$Acampos[]="ALTER TABLE `$nombre_tabla` ADD `".$camp['campo']."`  datetime default '0000-00-00 00:00:00';";
		}
		if(in_array($camp['tipo'],array('pos'))){
			$Acampos[]="ALTER TABLE `$nombre_tabla` ADD `".$camp['campo']."`  int(10) default NULL;";
		}
		if(in_array($camp['tipo'],array('txt','html'))){
			$Acampos[]="ALTER TABLE `$nombre_tabla` ADD `".$camp['campo']."`  varchar(800) default NULL;";
		}
		if(in_array($camp['tipo'],array('inp','com','img','pas','yot'))){
			$Acampos[]="ALTER TABLE `$nombre_tabla` ADD `".$camp['campo']."`  varchar(80) default NULL;";
		}
		if(in_array($camp['tipo'],array('hid'))){
			$Acampos[]="ALTER TABLE `$nombre_tabla` ADD `".$camp['campo']."`  int(10) default NULL;";
		}
		if(in_array($camp['tipo'],array('vis'))){
			$Acampos[]="ALTER TABLE `$nombre_tabla` ADD `".$camp['campo']."`  char(1) default NULL;";
		}	
	
		if($camp['fulltext']=='1'){
			$AcamposFull[]="`".$camp['campo']."`";
		}
		
		//prin($Acampos);
	
	} else {
	
	
		if($camp['size']=='' and $camp['variable']==''){
		
		
		
			if(in_array($camp['tipo'],array('inp')) and get_size_de_campo($camp['campo'],$obta['tabla'])!=80 ){
				$Acampos[]="ALTER TABLE `$nombre_tabla` MODIFY `".$camp['campo']."` VARCHAR(80); "; 
			}	
			if(in_array($camp['tipo'],array('txt')) and get_size_de_campo($camp['campo'],$obta['tabla'])!=800 ){
				$Acampos[]="ALTER TABLE `$nombre_tabla` MODIFY `".$camp['campo']."` VARCHAR(800); "; 
			}				
		
		} else {
		
		if(( $camp['size']!='' or $camp['variable']!='' ) and in_array($camp['tipo'],array('inp','txt'))){
				
			$variable	=($camp['variable']!='')?$camp['variable']	:"varchar";
			$size		=($camp['size']!='')	?$camp['size']		:(($camp['tipo']=='inp')?"80":"800");			
			
			if(get_size_de_campo($camp['campo'],$obta['tabla'])!=$camp['size'] or  get_tipo_de_campo($camp['campo'],$obta['tabla'])!=$camp['variable']){
				if($variable=='float'){
					if(get_tipo_de_campo($camp['campo'],$obta['tabla'])!=$camp['variable']){
						$Acampos[]="ALTER TABLE `$nombre_tabla` MODIFY `".$camp['campo']."` ".$variable."; ";
					}
				} else {
				if(get_size_de_campo($camp['campo'],$obta['tabla'])!=$camp['size'] and get_tipo_de_campo($camp['campo'],$obta['tabla'])!=$camp['variable']){
				$Acampos[]="ALTER TABLE `$nombre_tabla` MODIFY `".$camp['campo']."` ". ( ($camp['variable'])?$camp['variable']:$variable )."(".$camp['size']."); ";				
				} elseif(get_size_de_campo($camp['campo'],$obta['tabla'])!=$camp['size']){
				$Acampos[]="ALTER TABLE `$nombre_tabla` MODIFY `".$camp['campo']."` ". ( ($camp['variable'])?$camp['variable']:$variable ) ."(".$camp['size']."); ";				
				} elseif(get_tipo_de_campo($camp['campo'],$obta['tabla'])!=$camp['variable'] and $camp['variable']!=''){
				$Acampos[]="ALTER TABLE `$nombre_tabla` MODIFY `".$camp['campo']."` ". ( ($camp['variable'])?$camp['variable']:$variable ) ."(".$size."); ";				
				}								
				
				}
			}
			
		}
				
					
		}
			
	}
	
	
		
}

//echo "<pre>"; print_r($columnas_existentes); echo "</pre>";

//echo "<pre>"; print_r($camposA); echo "</pre>";

foreach($columnas_existentes as $columna){

	if(!in_array($columna,$camposA)){		
		$Acampos[]="ALTER TABLE `$nombre_tabla` DROP `$columna`;";	
	}
}	
	

/*
if(sizeof($AcamposFull)>0){
	$Acampos2[]="FULLTEXT KEY ".$AcamposFull[0]." (". implode(",",$AcamposFull). ")";
}
*/

$Acampos3=array_merge($Acampos,$Acampos2);

return $Acampos3;

}

function cambiar_permisos($carpeta){

	global $conn_id;
	global $vars;
	if($vars['GENERAL']['PERMISO_ESPECIALES']=='1'){
	@ftp_chmod($conn_id,0757,str_replace("//","/",$carpeta));
	}
	
}








function paginacion2($pagin,$parametros,$campos,$tabla,$donde){
	//pagin
	// porpag,anterior,siguiente,enlace
	$porpag=$parametros[porpag]; $anterior=$parametros[anterior]; $siguiente=$parametros[siguiente]; $enlace=$parametros[enlace];
	$ssse=$parametros[classe]; 
	if(!isset($pagin)){ $pagin=1; }
	$visi=consulta_basica($campos,$tabla,$donde); 
	if($visi!=0){$total=sizeof($visi);}else{$total="0";}
	$finpag=$total;
	$inicio=$porpag*($pagin-1);
	if($total>$porpag ){
	$visi=consulta_basica($campos,$tabla,$donde." limit $inicio,$porpag "); 
	$finpag=sizeof($visi);
	$prev_pag=$pagin-1;
	$next_pag=$pagin+1;
	if ($pagin==1) { $prev=$anterior; } else { $prev="<a href='".$enlace."pagin=$prev_pag' $ssse>$anterior</a>"; }
	if ($total==($finpag+$inicio)) { $next=$siguiente;} else { $next="<a href='".$enlace."pagin=$next_pag'  $ssse >$siguiente</a>"; }
	
	}
	//list($items,$total,$prev,$next,from,$to)=$cm
	$cm[0]=$visi; $cm[1]=$total; $cm[2]=$prev; $cm[3]=$next; $cm[4]=$inicio+1; $cm[5]=$finpag+$inicio;
	return $cm;
}

function sintilde($dis){
	$bu=$dis;
	$bu=str_replace("á","a",$bu);
	$bu=str_replace("é","e",$bu);
	$bu=str_replace("í","i",$bu);
	$bu=str_replace("ó","o",$bu);
	$bu=str_replace("ú","u",$bu);
	return $bu;
}



/*
function paginacion($pagin,$parametros,$campos,$tabla,$donde,$tipo){
//pagin
// porpag,anterior,siguiente,enlace
$porpag=$parametros[porpag]; $anterior=$parametros[anterior]; $siguiente=$parametros[siguiente]; $enlace=$parametros[enlace];
if(!isset($pagin)){ $pagin=1; }
$visi=consulta_basica($campos,$tabla,$donde); 
if($visi!=0){$total=sizeof($visi);}else{$total="0";}
$finpag=$total;
$inicio=$porpag*($pagin-1);
if($total>$porpag ){
$visi=consulta_basica($campos,$tabla,$donde." limit $inicio,$porpag"); 
$finpag=sizeof($visi);
$prev_pag=$pagin-1;
$next_pag=$pagin+1;
if ($pagin==1) { $prev=$anterior; } else { $prev="<a href='".$enlace."pagin=$prev_pag&tipo=$tipo'>$anterior</a>"; }
if ($total==($finpag+$inicio)) { $next=$siguiente;} else { $next="<a href='".$enlace."pagin=$next_pag&tipo=$tipo'>$siguiente</a>"; }
}

//list($items,$total,$prev,$next,from,$to)=$cm
$cm[0]=$visi; $cm[1]=$total; $cm[2]=$prev; $cm[3]=$next; $cm[4]=$inicio+1; $cm[5]=$finpag+$inicio;
return $cm;
}

function extraer($aa,$bb){
$wer=substr_count($aa,"<".$bb);
for($i=0;$i<$wer;$i++){
$a1=explode("<".$bb,$aa);
$a2=explode("</".$bb.">",$aa);
$aa=$a1[0].$a2[1];
}
$wer=substr_count($aa,"<".strtoupper($bb));
for($i=0;$i<$wer;$i++){
$a1=explode("<".strtoupper($bb),$aa);
$a2=explode("</".strtoupper($bb).">",$aa);
$aa=$a1[0].$a2[1];
}
return $aa;
}

function paginacionnumerada($pagin,$parametros,$campos,$tabla,$donde){
//pagin
// porpag,anterior,siguiente,enlace
$porpag=$parametros[porpag]; $anterior=$parametros[anterior]; $siguiente=$parametros[siguiente]; $enlace=$parametros[enlace];
if(!isset($pagin)){ $pagin=1; }
$visi=consulta_basica($campos,$tabla,$donde); 
if($visi!=0){$total=sizeof($visi);}else{$total="0";}
$finpag=$total;
$inicio=$porpag*($pagin-1);
if($total>$porpag ){
$visi=consulta_basica($campos,$tabla,$donde." limit $inicio,$porpag"); 
$finpag=sizeof($visi);

$prev_pag=$pagin-1;
$next_pag=$pagin+1;




if ($pagin==1) { $prev=$anterior; } else { $prev="<a href='".$enlace."pagin=$prev_pag' style='color:black'>$anterior</a>"; }
if ($total==($finpag+$inicio)) { $next=$siguiente;} else { $next="<a style='color:black' href='".$enlace."pagin=$next_pag' >$siguiente</a>"; }

}
$sun=(int)(($total-1)/$porpag)+1;
for($i=1;$i<=$sun;$i++){
if($i==$pagin){
$raba[]="<span class='textos' style='font-size:10px'>$i</span>";
} else { 
$raba[]="<a  style=' font-size:10px;color:black' href='".$enlace."pagin=$i'>$i</a>";
}
}
$rabas=implode("-",$raba);
//list($items,$total,$prev,$next,from,$to,$numeros)=$cm
$cm[0]=$visi; $cm[1]=$total; $cm[2]=$prev; $cm[3]=$next; $cm[4]=$inicio+1; $cm[5]=$finpag+$inicio;  $cm[6]=$rabas;
return $cm;
}
function tratamiento($aa){
$coco=$aa;
$coco=str_replace("\n","\\n",$coco);
$coco=str_replace("\r","\\r",$coco);
$coco=str_replace("\t","\\t",$coco);
$coco=str_replace("\v","\\v",$coco);
$coco=str_replace("\0","\\0",$coco); 
$coco=str_replace("\"","\\\"",$coco); 

$coco=extraer($coco,"script");
return $coco;
}
function fech4b($yy){
$mes=array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Setiembre","Octubre","Noviembre","Diciembre");
$ff=date("j",$yy)." ".$mes[date("n",$yy)-1]." ".date("Y",$yy);
return $ff;
}
function reducir_imagen($desde,$hasta,$limitew,$limiteh){
//echo "<b>REDIMENSIONAR : </b>".$desde." - ".$hasta." - ".$limitew." - ".$limiteh."<br>";
$fo=explode("/",$desde);
if(is_array($fo)){ $fi=$fo[sizeof($fo)-1]; } 
else { $fi=$desde; }
$fu=explode("__",$fi);
$festin=explode("x",$fu[1]);
$wxw5=$festin[0];
$hxh5=$festin[1];
$tum_alto5=$limiteh;
$tum_ancho5=$limitew;

if($hxh5>$tum_alto5){ $wxw5=$tum_alto5*($wxw5/$hxh5); $hxh5=$tum_alto5; }
if($wxw5>$tum_ancho5){ $hxh5=$tum_ancho5*($hxh5/$wxw5); $wxw5=$tum_ancho5; }
$width_dum=round(1.25*$wxw5);
$height_dum=round($hxh5);
$objResize = ImageResizeFactory::getInstanceOf($desde, $hasta, $width_dum, $height_dum);
$objResize->getResizedImage();
unset($objResize);
}
function redimensionar_imagen($archivo,$limitew,$limiteh){
$fu=explode("__",$archivo);
$festin=explode("x",$fu[1]);
$wxw5=$festin[0];
$hxh5=$festin[1];
$tum_alto5=$limiteh;
$tum_ancho5=$limitew;
if($hxh5>$tum_alto5){ $wxw5=$tum_alto5*($wxw5/$hxh5); $hxh5=$tum_alto5; }
if($wxw5>$tum_ancho5){ $hxh5=$tum_ancho5*($hxh5/$wxw5); $wxw5=$tum_ancho5; }
$at[w]=round($wxw5);
$at[h]=round($hxh5);
$at[a]=$fu[0]."__".$at[w]."x".$at[h]."__".$fu[2];
return $at;
}

function leer_directorio_tipo($aa,$bb){
	$cor = dir($aa);
	$cor->read(); $cor->read();
    while($fic=$cor->read()) { 
	$fic0=explode(".",$fic);
	if(is_array($fic0)){  $fic2=$fic0[sizeof($fic0)-1];  $pal=1; } else { $pal=0; }
`	if((($fic2==$bb)or($fic2==strtoupper($bb)))and($pal==1)){  $pp[]=$fic; }
    } 
	return $pp;
}		
		

function RedimensionarImagen($archivo,$archivo_final,$ancho,$alto,$calidad){
$m1=explode(".",$archivo);
$m2=$m1[sizeof($m1)-1];
switch(strtolower($m2)){
case "jpg": case "jpeg" : $img_fuente = @imagecreatefromjpeg($archivo); break; 
case "gif" : $img_fuente = @imagecreatefromgif($archivo); break;
case "png": $img_fuente = @imagecreatefrompng($archivo); break;
}
$img_ancho= imagesx($img_fuente);
$img_alto =imagesy($img_fuente);
$wxw5=$img_ancho;
$hxh5=$img_alto;
if($hxh5>$alto){ $wxw5=$alto*($wxw5/$hxh5); $hxh5=$alto; }
if($wxw5>$ancho){ $hxh5=$ancho*($hxh5/$wxw5); $wxw5=$ancho; }
$imagen = imagecreatetruecolor(round($wxw5), round($hxh5));
imagecopyresampled($imagen, $img_fuente, 0, 0, 0, 0, round($wxw5)."px", round($hxh5)."px", $img_ancho."px", $img_alto."px");
switch(strtolower($m2)){
case "jpg": case "jpeg" :
imagejpeg($imagen,$archivo_final, $calidad);
break;
case "gif":
imagegif($imagen,$archivo_final);
break;
case "png":
imagepng($imagen,$archivo_final);
break;
}
}

function mail_html($destino,$subject,$message,$remitente,$remite,$responder,$logo,$botom,$bgcolor){
global $SERVER_NAME;
if($SERVER_NAME!='localhost'){

$mensaje="<html><head></head><style>

</style><body bgcolor='$bgcolor'  >";
$mensaje .="<table cellspacing=0 cellpadding=15 border=0 width=100% align=left bgcolor='$bgcolor'  >";
if(trim($logo)!=''){ $mensaje.="<tr><td><img src='".$logo."' border=0></td></tr>"; }
$mensaje.="<tr><td>";
$mensaje.=$message;
$mensaje.="</td></tr>";
if(trim($botom)!=''){ $mensaje.="<tr><td><img src='".$botom."' border=0></td></tr>"; }
$mensaje.="</table></body></html>";

$cabecera ="Date: ".date("l j F Y, G:i")."\n"; 
$cabecera .="MIME-Version: 1.0\n"; 
$cabecera .="From: ".$remitente."<".$remite.">\n";
$cabecera .="Return-path: ". $remite."\n";
$cabecera .="Reply-To: ".$responder."\n";
$cabecera .="X-Mailer: PHP/". phpversion()."\n";
$cabecera .="Content-Type: text/html; charset=\"ISO-8859-1\"\n";
if(is_array($destino)){ foreach($destino as $desto){
 mail($desto,$subject,$mensaje,$cabecera);
 } } else { 
 mail($destino,$subject,$mensaje,$cabecera);
 } 
}
}

function mail_simple($destino,$subject,$message,$cabecera){
global $SERVER_NAME;
if($SERVER_NAME!='localhost'){
if(is_array($destino)){ foreach($destino as $desto){
 mail($desto,$subject,$message,$cabecera);
 } } else { 
 mail($destino,$subject,$message,$cabecera);
 }
  
 }
}

*/

function procesar_llaves($fila,$string){
	$string2=" $string ";
	if( !(strpos($string2,"{")==false) and !(strpos($string2,"}")==false) ){
		$uno=array();
		$uno = explode("{",$string);
		foreach($uno as $ii=>$un){
			if( !(strpos($un,"}")==false) ){
				$dos = explode("}",$un);
				$interior = $dos[0];
				$string = str_replace("{".$interior."}",$fila[$interior],$string);
			}
		}
	} 	
	return $string;
}


function necesita_mooeditable($objeto){

	$necesita=0;
	global $_SERVER;
	$scriptA=explode("/",$_SERVER['SCRIPT_NAME']);
	$script=$scriptA[sizeof($scriptA)-1];
	foreach($objeto as $obj){
		if($obj['archivo'].".php"==$script){
			$me=$obj['me'];
		}
	}
	if(is_array($objeto[$me]['campos'])){
		foreach($objeto[$me]['campos'] as $campo){
			if($campo['tipo']=='html'){
				$necesita=1;
			}
		}
	}
	return $necesita;
	
}

$directoriS=array();

function get_dirs_recursivo($directorio){

	global $directoriS;
	
	$Directorios=array();
	$Directorios['nombre']=$directorio."/";
	$directoriS[]=$directorio."/";
	$directorio_s = dir($directorio."/");
	while($fichero=$directorio_s->read()) {
		if($fichero!='.' and $fichero!='..'  and is_dir("$directorio/".$fichero) ){
			$Directorios['items'][]=get_dirs_recursivo("$directorio/".$fichero);
		}
		
	}	
	$directorio_s->close();	
	return $Directorios;

}

function get_dirs_tree($directorio){

	global $directoriS;

	get_dirs_recursivo($directorio);
	
	$dd=$directoriS;
	
	$directoriS=array();
	
	return $dd;

}

function print_gzipped_page() {

    global $HTTP_ACCEPT_ENCODING;
    if( headers_sent() ){
        $encoding = false;
    }elseif( strpos($HTTP_ACCEPT_ENCODING, 'x-gzip') !== false ){
        $encoding = 'x-gzip';
    }elseif( strpos($HTTP_ACCEPT_ENCODING,'gzip') !== false ){
        $encoding = 'gzip';
    }else{
        $encoding = false;
    }

    if( $encoding ){
        $contents = ob_get_contents();
        ob_end_clean();
        header('Content-Encoding: '.$encoding);
        print("\x1f\x8b\x08\x00\x00\x00\x00\x00");
        $size = strlen($contents);
        $contents = gzcompress($contents, 9);
        $contents = substr($contents, 0, $size);
        print($contents);
        exit();
    }else{
        ob_end_flush();
        exit();
    }
}


function eliminar_imagenes_from_array($items){
		
	global $httpfiles, $DIRECTORIO_IMAGENES;

	global $ftp_files_host, $ftp_files_user, $ftp_files_pass, $ftp_files_root;

	$conn_id = ftp_connect($ftp_files_host);
	$login_result = ftp_login($conn_id, $ftp_files_user, $ftp_files_pass);
	
	foreach($items as $items2){
	
		foreach($items2 as $item){
		
			@ftp_delete($conn_id,$item);
		
		}
	
	}
	
	ftp_close($conn_id);
			
}


function eliminar_imagenes($datos_tabla,$v_d){
		
		global $httpfiles, $DIRECTORIO_IMAGENES;
	
		global $ftp_files_host, $ftp_files_user, $ftp_files_pass, $ftp_files_root;
	
		$tbl		=	$datos_tabla['tabla'];
		$fcr		=	$datos_tabla['fcr'];

		foreach($datos_tabla['imagenes'] as $foto){
		
			$carpeta=$datos_tabla[$foto]['carpeta'];
			$prefijo=$datos_tabla[$foto]['prefijo'];
			$tamanos=$datos_tabla[$foto]['tamanos'];
						
			$items[$foto]= select_fila(
			"$foto,$fcr"
			,$tbl
			,$v_d
			,0
			,array(
					'get_archivo'=>array('get_archivo'=>array(
												'carpeta'=>$carpeta
												,'fecha'=>'{'.$fcr.'}'
												,'file'=>'{'.$foto.'}'
												,'tamano'=>'1'
												)
											)
				  )
			);			
			
			$items[$foto]['get_archivo']=str_replace("//","/",$ftp_files_root.str_replace("$httpfiles","",$items[$foto]['get_archivo']));
			
			$num_tams=sizeof(explode(",",$tamanos));
			
			for($i=1;$i<=$num_tams;$i++){
				$items[$foto]['num_tamanos'][]="_".$i.".";
			}
			$items[$foto]['num_tamanos'][]=".";
					
		}
		///print_r($items);
		
		if(sizeof($items)>0){

			$conn_id = ftp_connect($ftp_files_host);
			$login_result = ftp_login($conn_id, $ftp_files_user, $ftp_files_pass);
			
			foreach($items as $item){

				ftp_delete($conn_id,str_replace("_1.",".",$item['get_archivo']));
			
				foreach($item['num_tamanos'] as $tam){
				
					ftp_delete($conn_id,str_replace("_1.",$tam,$item['get_archivo']));
				
				}
			
			}
			
			ftp_close($conn_id);
			
		}
				
		
	



}

function SendMAIL($para,$subject,$body,$altbody,$mailFROM,$Name){
require_once "lib/class.phpmailer.php";
$mail = new phpmailer();
$mail->PluginDir = "lib/";
$mail->Mailer = "smtp";
$mail->Host = "mail.crazyosito.com"; # Editar el Host smtp
$mail->SMTPAuth = true;
$mail->Username = "notificaciones@crazyosito.com"; # editar el usuario
$mail->Password = "platano"; # Editar el password
$mail->From = $mailFROM;
$mail->FromName = $Name;
$mail->Subject = $subject;
$email = $para;
$body = $body;
 
$mail->Body = $body;
$mail->AltBody = $altbody;
$mail->Timeout=60;
$mail->AddAddress($email);
$exito = $mail->Send();
     $intentos=1; 
       while((!$exito)&&($intentos<5)&&($mail->ErrorInfo!="SMTP Error: Data not accepted")){
       sleep(5);
            $exito = $mail->Send();
            $intentos=$intentos+1;                
       }
 
    if ($mail->ErrorInfo=="SMTP Error: Data not accepted") {
       $exito=true;
        }
return $exito;
}  

function write_php_ini($array, $file)
{
    $res = array();
    foreach($array as $key => $val)
    {
        if(is_array($val))
        {
            $res[] = "\r\n\r\n[$key]";
            foreach($val as $skey => $sval) $res[] = "$skey = \"".$sval."\"";
        }
        else $res[] = "$key = ".(is_numeric($val) ? $val : '"'.$val.'"');
    }

	$f1=fopen($file,"w+");
	fwrite($f1,implode("\r\n", $res));
	fclose($f1); 	
}

function curl_get_file_contents($URL)
    {
        $c = curl_init();
        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($c, CURLOPT_URL, $URL);
        $contents = curl_exec($c);
        curl_close($c);

        if ($contents) return $contents;
            else return FALSE;
    }

function web_guardar_datos($GET,$debug=0){

	if($GET['borrar']=='WEBBLOQUES'){

		$GET['file']='css';
		$css=implode("",file($GET['file'].".php"));

		$GET['var']='WEBBLOQUES';		
		list($one,$two)=explode("/*".$GET['var']."-START*/",$css);
		list($three,$four)=explode("/*".$GET['var']."-END*/",$two);

		eval($three);
		$VAR0=$GET['var'];
		$VAR=$$VAR0;

		unset($VAR[$GET['key']]);

		$ttt='';		
		foreach($VAR as $uno=>$dos){
			$ttt.= "\$".$GET['var']."['$uno']='$dos';\n";
		}
		/*$keys=array_keys($_GET['var']);*/

		$css2=$one."/*".$GET['var']."-START*/\n$ttt/*".$GET['var']."-END*/".$four;


		$GET['var']='CLASSSELECTED';		
		list($one,$two)=explode("/*".$GET['var']."-START*/",$css2);
		list($three,$four)=explode("/*".$GET['var']."-END*/",$two);

		eval($three);
		$VAR0=$GET['var'];
		$VAR=$$VAR0;
		foreach($VAR as $aaa=>$bbb){
		if($GET['key']."-"==substr($aaa,0,strlen($GET['key'])+1)){
		unset($VAR[$aaa]);
		}
		}

		$ttt='';		
		foreach($VAR as $uno=>$dos){
			$ttt.= "\$".$GET['var']."['$uno']='$dos';\n";
		}
		/*$keys=array_keys($_GET['var']);*/

		$css3=$one."/*".$GET['var']."-START*/\n$ttt/*".$GET['var']."-END*/".$four;

		
		$f1=fopen($GET['file'].".php","w+");
		fwrite($f1,$css3);
		fclose($f1); 	
		
		exit();

	}

	if($GET['reset']=='htaccess'){

	$file="../../.htaccess";	

	$txt=implode("",file($file));
	
	list($uno,$dos,$tres)=between($txt,"#url_formularios-START","#url_formularios-END");
	list($cuatro,$cinco,$seis)=between($dos,"(",")");
	$txt=$uno."#url_formularios-START".$cuatro."(vacio)".$seis."#url_formularios-END".$tres;
	
	list($uno,$dos,$tres)=between($txt,"#url_items-START","#url_items-END");
	list($cuatro,$cinco,$seis)=between($dos,"(",")");
	$txt=$uno."#url_items-START".$cuatro."(vacio)".$seis."#url_items-END".$tres;
	
	list($uno,$dos,$tres)=between($txt,"#url_pages-START","#url_pages-END");
	list($cuatro,$cinco,$seis)=between($dos,"(",")");
	$txt=$uno."#url_pages-START".$cuatro."(vacio)".$seis."#url_pages-END".$tres;
	
	list($uno,$dos,$tres)=between($txt,"#url_app-START","#url_app-END");
	list($cuatro,$cinco,$seis)=between($dos,"(",")");
	$txt=$uno."#url_app-START".$cuatro."(vacio)".$seis."#url_app-END".$tres;

	list($uno,$dos,$tres)=between($txt,"#varurl-START","#varurl-END");
	$txt=$uno."#varurl-START\n#varurl-END".$tres;

	list($uno,$dos,$tres)=between($txt,"#HOME-START","#HOME-END");
	$txt=$uno."#HOME-START\n#HOME-END".$tres;
						
	$f1=fopen($file,"w+");
	fwrite($f1,$txt);
	fclose($f1); 	

	exit();
	
}
	
	//GENERAL 

	if(sizeof($GET)>0){

		$css=implode("",file($GET['file'].".php"));

		list($one,$two)=explode("/*".$GET['var']."-START*/",$css);
		list($three,$four)=explode("/*".$GET['var']."-END*/",$two);

		eval($three);
		$VAR0=$GET['var'];
		$VAR=$$VAR0;

		foreach($GET as $uno => $dos){
			if(!in_array($uno,array("var","file"))){
				$VAR[$uno]=$dos;
			}
		}

		$ttt='';	

		foreach($VAR as $uno=>$dos){
			if($GET['var']=='CLASSPARAMETERS'){
				list($aaa,$bbb)=explode("-",$uno);
				$ttt.= "\$".$GET['var']."['$uno']='".parametros_encode($dos,$bbb)."';\n";
			} else {
				$ttt.= "\$".$GET['var']."['$uno']='$dos';\n";			
			}
		}
		/*$keys=array_keys($_GET['var']);*/

		$css2=$one."/*".$GET['var']."-START*/\n$ttt/*".$GET['var']."-END*/".$four;

		$f1=fopen($GET['file'].".php","w+");
		fwrite($f1,$css2);
		fclose($f1); 			

	}
	
}


 function parametros_preprocess($string,$base=false){
 
	$lines=explode("\n",$string);
	$PAR=array();
	foreach($lines as $line){	
		if(trim($line)!=''){
			list($uno,$dos,$tres)=between($line,"{","}");
			$uno=trim(str_replace(array("="),array(""),strtolower($uno)));
			if(trim($dos)!=''){
			$cuatro=explode(",",$dos);
			foreach($cuatro as $cinco){
				list($seis,$siete)=explode("=",$cinco);
				$seis=trim($seis);
				$siete=trim($siete);
				if($base){	$PAR[$uno.'_'.$seis]=$siete;	}
				elseif($siete!=''){ $PAR[$uno.'_'.$seis]=$siete; }
			}
			}
		}
	}
	return $PAR;
}

function parametros_encode($string,$bbb){
	global $LIBRARIES;
	$LIB=parametros_preprocess($LIBRARIES[$bbb]['value'],true);
	$PAR=parametros_preprocess($string);
	foreach($LIB as $LI => $Val){
		if($PAR[$LI]!='' or $LIB[$LI]!=''){
		$PARAS[]=$LI."=". ( ($PAR[$LI]!='')?$PAR[$LI]:$LIB[$LI] );
		}
	}	
	return implode("&",$PARAS);
}

function parametros_decode($string,$bbb){
	global $LIBRARIES;
	$LIB=parametros_preprocess($LIBRARIES[$bbb]['value'],true);
	parse_str($string, $SAL);

	foreach($LIB as $LI=>$CC){ list($AA,$BB)=explode("_",$LI); $INC1[$AA][$BB]=$CC; }
	foreach($SAL as $LI=>$CC){ list($AA,$BB)=explode("_",$LI); $INC2[$AA][$BB]=$CC; }
/* 	echo "<pre style='position:absolute;top:-400px; background:white;color:black;'>";
	print_r($SAL);
	echo "</pre>"; */
	foreach($INC1 as $aa=>$bb){
		foreach($bb as $dd=>$ee){
			if($INC2[$aa][$dd]==''){$DET[]=$dd;}else{$DET[]=$dd."=".$INC2[$aa][$dd];}
		}
		$LIN[]=strtoupper($aa)." { ". ( implode(", ",$DET) ) ." }";
		unset($DET);
	}
	$string=implode("\n",$LIN);
	return $string;
}

function web_guardar_datos_htaccess($GET,$ALIAS){

	global $URLS;
	$file="../../.htaccess";	

	$css=implode("",file($file));	

	$tabs2=array();

	if($GET['modulo']=='formularios'){
		$VAR="url_".$GET['modulo'];
		$TAB=$GET['tab'];		
	}elseif($GET['modulo']=='items'){
		$VAR="url_".$GET['modulo'];
		$TAB=$GET['tab'];		
	}elseif($GET['modulo']=='app' and $GET['tab']=='pages'){
		$VAR="url_".$GET['tab'];
		$TAB=$GET['page'];		
	}elseif($GET['modulo']=='app'){
		$VAR="url_".$GET['modulo'];
		$TAB=$GET['tab'];		
	}
		
	if(isset($ALIAS[$TAB])){


		list($one,$two)=explode("#".$VAR."-START",$css);
		list($three,$four)=explode("#".$VAR."-END",$two);
		$three=trim($three);	
	
		if($three!=''){		
			
			list($oneA,$twoA)=explode("(",$three);
			list($threeA,$fourA)=explode(")",$twoA);
			$tabs=array();
			$tabs=explode("|",$threeA);
			foreach($tabs as $tab){
				if(!isset($ALIAS[$tab])){	
					if($tab!='vacio'){
						$tabs2[]=$tab;
					}
				}
			}
			if(!in_array($TAB,$tabs2)){
				if(!isset($ALIAS[$TAB])){	
					$tabs2[]=$TAB;
				}
			}
			$xxx=(sizeof($tabs2)==0)?'vacio':implode("|",$tabs2);
			$ttt=$oneA."(".$xxx.")".$fourA;
			$css2=$one."#".$VAR."-START\n".$ttt."\n#".$VAR."-END".$four;		
			
			$f1=fopen($file,"w+");
			fwrite($f1,$css2);
			fclose($f1);
			
		}
		
		$css=implode("",file($file));	
			
		$getsss=array();
		foreach($GET as $ggg=>$ett){
		$getsss[]=$ggg."=".$ett;
		}
		$getss=implode("&",$getsss);

		$VAR='varurl';
		list($one,$two)=explode("#".$VAR."-START",$css);
		list($three,$four)=explode("#".$VAR."-END",$two);
		
		$threeA=explode("\n",$three);
		$BBB=array();
		foreach($threeA as $AAA){
			list($oneB,$twoB)=explode(" ^",$AAA);
			list($threeB,$fourB)=explode("\$ ",$twoB);
			list($fiveB,$sixB)=explode(" [L]",$fourB);
			if(trim($AAA)!=''){
				if(in_array($threeB,$ALIAS)){			
					$BBB[$threeB]=$AAA;
					$CCC[$threeB]="\$URLS['".trim($fiveB)."']='".$threeB."';";
				}
			}
		}
		
		$BBB[$ALIAS[$TAB]]="RewriteRule ^".$ALIAS[$TAB]."\$ index.php?".$getss." [L]";
		$CCC[$ALIAS[$TAB]]="\$URLS['index.php?".$getss."']='".$ALIAS[$TAB]."';";

		$ttt=implode("\n",$BBB);
		$tttt=implode("\n",$CCC);
		
		$css2=$one."#".$VAR."-START\n".$ttt."\n#".$VAR."-END".$four;
		$f1=fopen($file,"w+");
		fwrite($f1,$css2);
		fclose($f1); 	

		$VAR='URLS';
		$FILE='../../web/modulos/urls.php';
		
		$css=implode("",file($FILE));
			
		list($one,$two)=explode("/*".$VAR."-START*/",$css);
		list($three,$four)=explode("/*".$VAR."-END*/",$two);
		$css2=$one."/*".$VAR."-START*/\n$tttt\n/*".$VAR."-END*/".$four;
		
		$f1=fopen($FILE,"w+");
		fwrite($f1,$css2);
		fclose($f1); 		
		
					
	} else {
	
		list($one,$two)=explode("#".$VAR."-START",$css);
		list($three,$four)=explode("#".$VAR."-END",$two);
		$three=trim($three);	
	
		if($three!=''){		
			
			list($oneA,$twoA)=explode("(",$three);
			list($threeA,$fourA)=explode(")",$twoA);		
			$tabs=array();		
			$tabs=explode("|",$threeA);
			foreach($tabs as $tab){
				if($tab!='vacio'){
					$tabs2[]=$tab;
				}
			}
			if(!in_array($TAB,$tabs2)){
				$tabs2[]=$TAB;
			}
			$ttt=$oneA."(".implode("|",$tabs2).")".$fourA;
			
			$css2=$one."#".$VAR."-START\n".$ttt."\n#".$VAR."-END".$four;
			
			$f1=fopen($file,"w+");
			fwrite($f1,$css2);
			fclose($f1); 	
			
		}
	
	}
	foreach($URLS as $LU=>$UR){
		if(trim($UR)==''){
			$HOMEURL=$LU;
		}
	}
	
	if(isset($HOMEURL)){
		
		$VAR='HOME';
		$FILE='../../.htaccess';
		$tttt="RewriteRule ^$ ".$HOMEURL." [L]";
		
		$css=implode("",file($FILE));
			
		list($one,$two)=explode("#".$VAR."-START",$css);
		list($three,$four)=explode("#".$VAR."-END",$two);
		$css2=$one."#".$VAR."-START\n$tttt\n#".$VAR."-END".$four;
		
		$f1=fopen($FILE,"w+");
		fwrite($f1,$css2);
		fclose($f1); 
			
	}
	
}

	function between($txt,$desde,$hasta){
		list($uno,$dos)=explode($desde,$txt);
		list($tres,$cuatro)=explode($hasta,$dos);	
		return array($uno,$tres,$cuatro);
	}


	$directoriS=array();
	function get_dirs_recur2($directorio){
	
	
	global $directoriS;
	
	$Directorios=array();
	$Directorios['nombre']=$directorio."/";
	$directoriS[]=$directorio."/";
	$directorio_s = dir($directorio."/");
	while($fichero=$directorio_s->read()) {
		
		if($fichero!='.' and $fichero!='..'  and is_dir("$directorio/".$fichero) ){
			$Directorios['items'][]=get_dirs_recur2("$directorio/".$fichero);
		}
	}	
	
	return $Directorios;
	
	}
	function get_all_directorios($directorio){
	global $directoriS;
	$directoriS=array();
	get_dirs_recur2($directorio);
	$directori0=$directoriS;
	unset($directoriS);
	return $directori0;
	}
	
	
	
	function render_array($array, $count=0, $dad='') {
		
		$line=str_repeat("*",150);
		$i=0;
		$tab ='';
		while($i != $count) {
			$i++;
			$tab .= "\t\t";
		}
		$k=0;
		foreach($array as $key=>$value){
	
			if($dad=='campos'){
			$coma = (sizeof($array)-1==$k)?"":",\n";
			} else {
			$coma = (sizeof($array)-1==$k)?"":",";
			}
			if(is_array($value)){
				$tt=(strlen($key)>=15)?"":((strlen($key)>=10)?"\t":((strlen($key)>5)?"\t\t":"\t\t\t"));		
				if($count==0){
				$buf .=  "\$objeto_tabla['$key']=array(\n";
				$coma = ";\n\n/". $line ."/\n\n";
				} else {
					if($dad=='campos'){
						$key=$value['campo'];
				$tt=(strlen($key)>=15)?"":((strlen($key)>=10)?"\t":((strlen($key)>5)?"\t\t":"\t\t\t"));		
						$buf .= $tab."'".$key."'$tt=>array(\n";
					} else {
						if($key==$k){
							$buf .=  $tab."array(\n";
						} else {
							$buf .=  $tab."'$key'$tt=>array(\n";
						}
					}
				}
				$count++;
				$buf .= render_array($value, $count, $key);
				$count--;
				$buf .=  $tab.")$coma\n";
			}
			else{
				$tt=(strlen($key)>=15)?"":((strlen($key)>=10)?"\t":((strlen($key)>5)?"\t\t":"\t\t\t"));		
				$buf .=  $tab."'$key'$tt=> '$value'$coma\n";
			}
			$k++;
		}
		$count--;
		
		return $buf;
		
	}	
	
	

function print_r_tree($data)
{
	$data2=array();

	foreach($data as $name_proy=>$proy){
		
		foreach($proy as $var=>$value){
		
			if($var!='campos'){
			
				$data2[$name_proy][$var]=$value;
				
			} else {
			
				foreach($value as $campos){
				
					$data2[$name_proy][$var][$campos['campo']]=$campos;	
				
				}
			
			}
			
		}
		
	}
	
	echo "<pre style='text-align:left;background-color:white;padding:10px 0px;'>";
    // capture the output of print_r
    $out = print_r($data2, true);


    // replace something like '[element] => <newline> (' with <a href="javascript:toggleDisplay('...');">...</a><div id="..." style="display: none;">
    $out = preg_replace('/([ \t]*)(\[[^\]]+\][ \t]*\=\>[ \t]*[a-z0-9 \t_]+)\n[ \t]*\(/iUe',"'\\1<a style=\"color:blue;text-decoration:none;\" href=\"javascript:toggleDisplay(\''.(\$id = substr(md5(rand().'\\0'), 0, 7)).'\');\">\\2</a><div id=\"'.\$id.'\" style=\"display: none;\">'", $out);

    // replace ')' on its own on a new line (surrounded by whitespace is ok) with '</div>
    $out = preg_replace('/^\s*\)\s*$/m', '</div>', $out);

	$out = str_replace("Array","",$out);

    // print the javascript function toggleDisplay() and then the transformed output
    echo '<script language="Javascript">function toggleDisplay(id) { document.getElementById(id).style.display = (document.getElementById(id).style.display == "block") ? "none" : "block"; }</script>'."\n$out";

	echo "</pre>";
	
}

function web_render_flotantes($bf){
	$aaa=explode(",",$bf);
	if((is_numeric($aaa[0])or($aaa[0]=='auto'))and(is_numeric($aaa[1]))or($aaa[0]=='auto')){ 
	$ret='width:'.( ($aaa[0]=='auto')?'auto':$aaa[0].'px').'; height:'.( ($aaa[1]=='auto')?'auto':$aaa[1].'px').';'; 
	}
	elseif((is_numeric($aaa[1])or($aaa[0]=='auto'))and(is_numeric($aaa[2]))or($aaa[0]=='auto')){ $ret='background-image:url("../img/'.$aaa[0].'"); width:'.$aaa[1].'px; height:'.$aaa[2].'px;'; }
	else{ 
	list($HLwidth, $HLheight) = getimagesize("../templates/".THEME_PATH."/img/".$aaa[0]);
	$ret='background-image:url("../img/'.$aaa[0].'"); width:'.$HLwidth.'px; height:'.$HLheight.'px;'; 
	}
	return $ret;
}

function procesar_controles_html($controles){

	//echo "<textarea style='width:50%;height:700px;'>";
	$cons=explode("</a>",$controles);
	$contras=array();
	$aaa=array();
	foreach($cons as $tt=>$con){
		if(trim($con)!=''){
			$contras[]=$con."</a>";
		}
	}
	foreach($contras as $cont){
		//echo $aaaa."\n";
		list($uno,$dos)=explode("href=",$cont);
		$comilla=substr($dos,0,1);
		$comilla2=($comilla=="'")?"\"":"'";
		list($tres,$cuatro,$cinco)=explode($comilla,$dos);
		list($siete,$ocho)=explode($cuatro.$comilla,$dos);
		if( (!(strpos($cuatro,"base")===false)) or (!(strpos($cuatro,"base2")===false)) ){
		$aaaa=$uno."href=".$comilla."#".$comilla." onclick=".$comilla."javascript:procesar_recargar(".$comilla2.$cuatro.$comilla2.");return false;".$comilla." ".$ocho;
		} else {
		$aaaa=$cont;
		}
		$aaa[]=$aaaa;
	}
	//echo "</textarea>";
	return implode(" ",$aaa);
	
}

function preprocessvarscss($vars){

	global $_GET;
	$GET=$_GET;
	foreach($GET as $AA=>$BB){
	if(!in_array($AA,array('name','v'))){
	list($CC,$DD)=explode("_",$AA);
	$vars[$CC][$DD]=$BB;
	}
	}
	return $vars;
	
}
function processvarscss($vars){
	
	$vars2=array();
	foreach($vars as $uno=>$dos){
		foreach($dos as $tres=>$cuatro){
			//if($tres=='s'){ $vars2[$uno]['s']=str_replace('>',':',$cuatro); }
			if($tres=='dis'){	$vars2[$uno]['dis']=($cuatro=='0')?'display:none;':'';	}
			elseif(in_array($tres,array('ena','sangria'))){	$vars2[$uno][$tres]=($cuatro=='0')?'0':'1';	}
			elseif(in_array($tres,array('color','bg','color-sel','bg-sel','borde','borde-sel','bg-out'))){	
				$vars2[$uno][$tres]=(trim($cuatro)=='transparent' or trim($cuatro)=='t')?'transparent':$cuatro;	}
			elseif(is_numeric($cuatro)){ $vars2[$uno][$tres]=$cuatro."px";  }
			else { $vars2[$uno][$tres]=$cuatro; }
		}
	}
	return $vars2;
	
}

function processvarscss_2D($vars){
	$vars2=array();
	foreach($vars as $cinco=>$cuatro){
		list($uno,$tres)=explode("_",$cinco);
			//if($tres=='s'){ $vars2[$uno]['s']=str_replace('>',':',$cuatro); }
			if($tres=='dis'){	$vars2[$uno."_".'dis']=($cuatro=='0')?'display:none;':'';	}
			elseif(in_array($tres,array('ena','sangria'))){	$vars2[$uno."_".$tres]=($cuatro=='0')?'0':'1';	}
			elseif(in_array($tres,array('color','bg','color-sel','bg-sel','borde','borde-sel','bg-out'))){	
				$vars2[$uno."_".$tres]=(trim($cuatro)=='transparent' or trim($cuatro)=='t')?'transparent':$cuatro;	}
			elseif(is_numeric($cuatro)){ $vars2[$uno."_".$tres]=$cuatro."px";  }
			else { $vars2[$uno."_".$tres]=$cuatro; }
	}
	return $vars2;
	
}
	
function set_params_ini( $section, $entry, $entry_val, $ini_path )
{
    $iniMANAGER = new ini_manager();
    
    $entry_val = special_chars_in( $entry_val );
    
	$entry_val = (is_integer($entry_val))?"\"$entry_val\"":$entry_val;	
		
    $iniMANAGER->add_entry( $ini_path, $section, $entry, $entry_val ) ;
//	echo "$section :: $entry => $entry_val<br>";
}

function special_chars_in( $str )
{
    $str = str_replace( "'", "\'", $str );
    
    return $str ;
}

function store($archivo,$grupo,$datos){

	if(file_exists($archivo)){
	echo "archivo existe";		
	$buffer=implode("",file($archivo));
	list($uno,$dos,$tres)=between($buffer,"/*".$grupo."-START*/","/*".$grupo."-END*/");
	eval($dos);
	eval("\$VAR=$".$grupo.";");
	//prin($VAR);
	foreach($datos as $variable=>$valor){
	$VAR[$variable]=$valor;
	}
	$ttt='';
	foreach($VAR as $one=>$two){
		$ttt.= "\$".$grupo."['$one']='$two';\n";
	}

	$buffer=$uno."/*".$grupo."-START*/\n$ttt/*".$grupo."-END*/".$tres;

	$f1=fopen($archivo,"w+");
	fwrite($f1,$buffer);
	fclose($f1);
	
	} else {
	echo "archivo no existe";	
	}
	
}
	
?>