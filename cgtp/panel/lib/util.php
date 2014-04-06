<?php


function procesar_objeto_tabla($array){

	//prin($array);
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

	/*yy
	if(is_array($array['campos']) and ($_GET['i']!='') and $LoAd==1){
		foreach($array['campos'] as $tt=>$camp){
			if($tt!='tags'){
			$array['campos'][$tt]['listable']='1';
			}
		}
	}
	*/

	if(is_array($array['campos']))
	foreach($array['campos'] as $camp){

		if($camp['disabled']=='1'){ continue; }

		if(in_array($camp['tipo'],array('id','fcr','fed','pos','vis','cal','web','page','user'))){
			$campos[$camp['tipo']]=$camp['campo'];
		}
		if(in_array($camp['tipo'],array('inp','txt','hid','img','sto','com','fch','pas','yot','html','bit'))){
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

			if($camp['sesion_permisos']=='1'){
				$campos['sesion_permisos']=$camp['campo'];
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
		if( in_array($camp['listable'],array('1'))
			or in_array($camp['tipo'],array('id','fcr','vis','pos','cal','web','page','user'))
			or in_array($camp['campo'],array('conf'))
			){
			if($camp['campo']==$array['group']){
			$firstCampo=$camp;
			} else {
			$campos['list'][]=$camp;
			$query[]=$camp['campo'];
			}
		}

	}

	if($firstCampo){
		$campos['list']=array_merge(array($firstCampo),$campos['list']);
		$query=array_merge(array($firstCampo['campo']),$query);
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

	$campos['por_pagina']	=	($array['por_pagina']=='')?'30':$array['por_pagina'];
	if($campos['foreig']!='' and (!in_array($campos['foreig'],$query))){
	$query[]	=	$campos['foreig'];
	}
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
	//prin($camp['where_id']);
	return $campos;

}

function verificar_tabla($tabla){

	global $tablas_creadas;
	if(is_array($tablas_creadas)){
		if(!in_array($tabla,$tablas_creadas)){
			echo "<div style='background-color:#37F73B; margin:-20px 0 0 8px;padding:2px 10px;float:left;'>No existe la tabla <b style='text-decoration:underline;'>".$tabla."</b> <a href='maquina.php' >ir a maquina</a></div>";
		}
	}

}

function procesar_dato($dato,$id=NULL){

	global $_GET;
	global $link;

	$dato=str_replace("class=\"linkstitu\"","",$dato);

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
	$dato=preg_replace("/>([a-z0-9\-\.\s]{2,20})<\/a>/i",' title="$1">$1</a>',$dato);
	$dato=preg_replace("/foto(s)?</i",'<img src="img/ico_pics.png" width=16 align=absmiddle><',$dato);
	$dato=preg_replace("/vista previa</i",'<img src="img/ico_preview.png" width=16 align=absmiddle><',$dato);
	$dato=preg_replace("/imprimir</i",'<img src="img/ico_print.png" width=16 align=absmiddle><',$dato);
	$dato=preg_replace("/mensaje(s)?</i",'<img src="img/ico_email.png" width=16 align=absmiddle><',$dato);
	$dato=preg_replace("/alerta(s)?</i",'<img src="img/ico_alert.png" width=16 align=absmiddle><',$dato);
	$dato=preg_replace("/consulta(s)?</i",'<img src="img/ico_email.png" width=16 align=absmiddle><',$dato);
	$dato=preg_replace("/comentario(s)?</i",'<img src="img/ico_email.png" width=16 align=absmiddle><',$dato);
	$dato=preg_replace("/>nuevo/i",'><img src="img/ico_plus.png" width=16 align=absmiddle>',$dato);

	return $dato;

}

function script_create_table($obta){

//$obta=$objeto_tabla[$_GET['me']];

$Acampos=array();

$Acampos2=array();

$AcamposUnique=array();

//echo "<pre>"; print_r($obta); echo "</pre>";

foreach($obta['campos'] as $camp){

	if($camp['multiopciones']!=''){
		list($name,$tablerel,$campos,$table,$where)=explode("|",$camp['multiopciones']);
		$multiopciones[]=array($tablerel,$obta['tabla'],$table);
	}
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
		$length=($camp['size']=='')?"":"(".$camp['size'].")";
		$variable=($camp['variable']=='')?(($camp['size']=='')?"longtext":"varchar"):$camp['variable'];
		$Acampos[]="`".$camp['campo']."` $variable".$length." default NULL";
	}
	if(in_array($camp['tipo'],array('inp','com','pas'))){
		$length=($camp['size']=='')?"80":$camp['size'];
		$variable=($camp['variable']=='')?"varchar":$camp['variable'];
		if($variable=='float'){
			$Acampos[]="`".$camp['campo']."` $variable default NULL";
		}else{
			$Acampos[]="`".$camp['campo']."` $variable($length) default NULL";
		}
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
	if(in_array($camp['tipo'],array('bit'))){
		$Acampos[]="`".$camp['campo']."` boolean default NULL";
	}
	if(in_array($camp['tipo'],array('vis'))){
		$Acampos[]="`".$camp['campo']."` boolean default 1 NOT NULL";
	}
	if(in_array($camp['tipo'],array('cal'))){
		$Acampos[]="`".$camp['campo']."` tinyint(2) default 0 NOT NULL";
	}
	if(in_array($camp['tipo'],array('web'))){
		$Acampos[]="`".$camp['campo']."` int(10) default 1 NOT NULL";
	}
	if(in_array($camp['tipo'],array('page'))){
		$Acampos[]="`".$camp['campo']."` int(10) default 1 NOT NULL";
	}
	if(in_array($camp['tipo'],array('user'))){
		$Acampos[]="`".$camp['campo']."` int(10) default 1 NOT NULL";
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
//	$Acampos2[]="FULLTEXT (". implode(",",$AcamposFull). ")";
}


$Acampos3=array_merge($Acampos,$AcamposUnique,$Acampos2);

$sql ="CREATE TABLE IF NOT EXISTS `".$obta['tabla']."` (\n";
$sql.= implode(",\n",$Acampos3);
$sql.="\n) ENGINE=MyISAM  DEFAULT CHARSET=utf8;\n";

foreach($multiopciones as $multiopcion){
$sql.="\nCREATE TABLE IF NOT EXISTS `".$multiopcion[0]."` (
`id_".$multiopcion[1]."` int(10) NOT NULL DEFAULT '0',
`id_".$multiopcion[2]."` int(10) NOT NULL DEFAULT '0',
`orden` int(10) NOT NULL DEFAULT '0',
PRIMARY KEY (`id_".$multiopcion[1]."`,`id_".$multiopcion[2]."`),
KEY `id_".$multiopcion[1]."` (`id_".$multiopcion[1]."`),
KEY `id_".$multiopcion[2]."` (`id_".$multiopcion[2]."`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8";
}

return $sql;

}


function ccl_img_uploadmini($file_temp,$ext,$carpeta_destino,$archivo_nombre,$ancho_ideal,$alto_ideal)
{
	global $DIRECTORIO_IMAGENES, $DIR_IMG_TEMP;
	$carpeta_temporal = "../".$DIRECTORIO_IMAGENES.$DIR_IMG_TEMP."/";
	// generar la miniatura temporalmente en el directorio images_temp
	$One = ccl_guarda_miniatura($file_temp,$ext,$carpeta_temporal.$archivo_nombre,$ancho_ideal,$alto_ideal);
	// subir la imagen de images_temp a su lugar en el ftp
	$url_mini = ccl_upload_ftp($carpeta_temporal.$archivo_nombre, $carpeta_destino, $archivo_nombre);
	// borrar la miniatura temporal

	unlink($carpeta_temporal.$archivo_nombre);

	$Two = ($One and $url_mini!='error')?1:0;

	return $Two;
}

// subir un fichero al directorio de ficheros
function ccl_upload_ftp($archivo_origen, $carpeta_destino, $archivo_nombre,$debug=NULL)
{
	global $httpfiles, $ftp_files_host, $ftp_files_user, $ftp_files_pass, $ftp_files_root, $DIRECTORIO_IMAGENES , $UPLOAD_FTP;
	$debug=0;
	$archivo_origen=str_replace("//","/",$archivo_origen);
	if($debug) echo "<!--params:|$archivo_origen, $carpeta_destino, $archivo_nombre|-->\n";
	if($debug){ echo "<!--getcwd:".getcwd().";-->\n"; }

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
	$login_result = ftp_login($conn_id, $ftp_files_user, $ftp_files_pass); ftp_pasv($conn_id, true);

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

		if($debug){ echo "<!--getcwd:".getcwd().";-->\n"; }

		//chdir($ftp_files_root);

		//if($debug){ echo "<!--chdir:".$ftp_files_root.";-->\n"; }

		if($debug){ echo "<!--getcwd:".getcwd().";-->\n"; }

		// crear los directorios de destino en caso que no existan

		// cambiar al directorio de destino
		@mkdir($folder);
		if($debug){ echo (file_exists($folder))?"<!--folder:".$folder.":existe-->\n":"<!--folder:".$folder.":noexiste-->\n"; }

		// crear directorio con ao, mes y da
		@mkdir($folder."/".$year);
		if($debug){ echo (file_exists($folder."/".$year))?"<!--folder:".$folder."/".$year.":existe-->\n":"<!--folder:".$folder."/".$year.":noexiste-->\n"; }

		//cambiar_permisos($folder."/".$year);
		@mkdir($folder."/".$year."/".$month);
		if($debug){ echo (file_exists($folder."/".$year."/".$month))?"<!--folder:".$folder."/".$year."/".$month.":existe-->\n":"<!--folder:".$folder."/".$year."/".$month.":noexiste-->\n"; }

		//cambiar_permisos($folder."/".$year."/".$month);
		@mkdir($folder."/".$year."/".$month."/".$day);
		if($debug){ echo (file_exists($folder."/".$year."/".$month."/".$day))?"<!--folder:".$folder."/".$year."/".$month."/".$day.":existe-->\n":"<!--folder:".$folder."/".$year."/".$month."/".$day.":noexiste-->\n"; }

		//cambiar_permisos($folder."/".$year."/".$month."/".$day);

		// copiar el archivo
		$destination_file = $folder."/".$year."/".$month."/".$day."/".$archivo_nombre;

		/*echo "<script>alert('$destination_file');</script>";*/
		if($debug){ echo "<!--destination_file:".$destination_file.";-->\n"; }

		chdir($dir_men);

		if($debug){ echo "<!--getcwd:".getcwd().";-->\n"; }

		if(copy($archivo_origen,$destination_file)){  return "error"; }
		else {	 return $httpfiles.$carpeta_destino."/".$year."/".$month."/".$day."/".$archivo_nombre;	}

	}
}

// ------------------------------------------------------------------------------------------------------------------------------------------------------

function ccl_guarda_miniatura($file_temp,$ext,$file_dest,$ancho_ideal,$alto_ideal)
{
	// Crer imagen dinamica dependiendo del tipo es la funcion q usaremos.
	$calidad=90;
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

	switch($ext)
	{
	    case "jpg":
			// crear papel de imágen, ImageCreateTrueColor para no perder colores
			$miniatura = ImageCreateTrueColor($escala_x, $escala_y);
			// imprimir la imagen redimensionada
			imagecopyresampled($miniatura,$img,0,0,0,0,$escala_x,$escala_y,$ancho_real,$alto_real);
			// guardar la imagen como $file_dest
	        $bool = imagejpeg($miniatura,$file_dest,$calidad);
	    break;
	    case "gif":
			// crear papel de imágen, ImageCreateTrueColor para no perder colores
			$miniatura = ImageCreateTrueColor($escala_x, $escala_y);
			// imprimir la imagen redimensionada
			imagecopyresampled($miniatura,$img,0,0,0,0,$escala_x,$escala_y,$ancho_real,$alto_real);
			// guardar la imagen como $file_dest
	        $bool = imagegif($miniatura,$file_dest,$calidad);
        break;
	    case "png":
			// crear papel de imágen, ImageCreateTrueColor para no perder colores
			$miniatura = ImageCreateTrueColor($escala_x, $escala_y);

			imagealphablending($miniatura, false);
			$colorTransparent = imagecolorallocatealpha($miniatura, 0, 0, 0, 127);
			imagefill($miniatura, 0, 0, $colorTransparent);
			imagesavealpha($miniatura, true);

			imagecopyresampled($miniatura,$img,0,0,0,0,$escala_x,$escala_y,$ancho_real,$alto_real);
			// guardar la imagen como $file_dest
	        $bool = imagepng($miniatura,$file_dest);
//	        imagepng($miniatura,$file_dest);
        break;
	}
	return $bool;
}

function setTransparency($new_image,$image_source)
     {

             $transparencyIndex = imagecolortransparent($image_source);
             $transparencyColor = array('red' => 255, 'green' => 255, 'blue' => 255);

             if ($transparencyIndex >= 0) {
                 $transparencyColor    = imagecolorsforindex($image_source, $transparencyIndex);
             }

             $transparencyIndex    = imagecolorallocate($new_image, $transparencyColor['red'], $transparencyColor['green'], $transparencyColor['blue']);
             imagefill($new_image, 0, 0, $transparencyIndex);
              imagecolortransparent($new_image, $transparencyIndex);

     }

function ccl_download($file_source,$nombre_temp,$dir_temp)
{
	   global $UPLOAD_FTP;
	   //echo getcwd()."\n";
	   $file_target = substr($dir_temp."/".$nombre_temp,1);

	   $file_target = str_replace("http://","[http]",$file_target);
	   $file_target = str_replace("//","/",$file_target);
	   $file_target = str_replace("[http]","http://",$file_target);

	   $file_source = str_replace("http://","[http]",$file_source);
	   $file_source = str_replace("//","/",$file_source);
	   $file_source = str_replace("[http]","http://",$file_source);

	   if(0){
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

	   } else {
	   //echo getcwd()."\n";
	   $i_d="imagenes_dir";
	   list($uno,$file_source)=explode($i_d,$file_source); $file_source="../".$i_d.$file_source;
	   copy($file_source,$file_target);
	   }
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
	$login_result = ftp_login($conn_id, $ftp_files_user, $ftp_files_pass); ftp_pasv($conn_id, true);
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
	global $UPLOAD_FTP;


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
	$file_name = str_replace(array('_1','_2','_3','_4'),"",substr($r_img,strrpos($r_img, "/")+1));
	$file_dir	= str_replace($httpfiles,"",$r_img);
	$file_dir 	= str_replace($file_name,"",$file_dir);

	$file_temp  = $images_temp.$file_name;
	// bajar la imagen a directorio local temporal images_temp/
//	echo "$r_img - $file_name - ";
	//echo "$r_img,$file_name,/$images_temp";
	//exit();
	ccl_download($r_img,$file_name,"/".$images_temp);

//	echo "|$r_img,$file_name,\"/\"$images_temp|";

//	exit();

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

	$Nnum=1;
	foreach($TamanosArray as $i=>$Tam){

		$xy=explode("x",$Tam);
		$i2=$i+1;

		$exito = (ccl_img_uploadmini($images_temp.$file_name,$ext,$folder_dest,str_replace(".","_".$i2.".",$file_dest),$xy[0],$xy[1],true))?1:0;
		$intentos=1;
		while ((!$exito) && ($intentos++ < 3))
		{   //sleep(1);
			$exito = (ccl_img_uploadmini($images_temp.$file_name,$ext,$folder_dest,str_replace(".","_".$i2.".",$file_dest),$xy[0],$xy[1],true))?1:0;
		}

		if(!$exito){ $Nnum=0; }

	}

	// mandar una copia del fichero original
//	$upnum = ccl_upload_ftp($images_temp.$file_name, $folder_dest, $file_dest);

		$exito = (ccl_upload_ftp($images_temp.$file_name, $folder_dest, $file_dest)=='error')?0:1;
		$intentos=1;
		while ((!$exito) && ($intentos++ < 3))
		{
			$exito = (ccl_upload_ftp($images_temp.$file_name, $folder_dest, $file_dest)=='error')?0:1;
		}

		if(!$exito){ $upnum=0; }

	$Nnum = ( $Nnum and ($upnum!='error') );
	/*
	@unlink($file_temp);

	ccl_delete_ftp($file_dir, $file_name);
	ccl_delete_ftp($file_dir, str_replace("_orig.","_preview.",$file_name));
	*/
	$imagen_save = $file_dest;
//	echo $imagen_save;
//	return $imagen_save;
	update(array(str_replace("upload_","",$campo)=>$imagen_save,"fecha_creacion"=>"now()"),$tabla,"where $Id='$id' ",0);

	return $Nnum;

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

function search_query($full,$likes,$id,$buscar){

	global $datos_tabla;

	$fftt1 = array();

	$fftt2 = array();

	$querys[]=" $id='$buscar' ";
	$querys[]=" $id='".substr($buscar,1)."' ";

	$buscar=($datos_tabla['busqueda_estricta'])?'"'.$buscar.'"':$buscar;

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
		$querys[]=" ( MATCH(".implode(",",$fftt2).") AGAINST ('$buscar' IN BOOLEAN MODE) ) ";
	}

	$query=(sizeof($querys)>0)?" and ( ".(implode(" or ",$querys))." ) ":1;

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

	global $SERVER;
	global $_GET;
	if($_GET['maquina']==1){

		@header("Location: ".$SERVER['BASE']."maquina.php");
		//die("<html><body onload=\"location.href='".$SERVER['BASE']."maquina.php?';\"></body></html>");
		echo "<script>window.addEvent('domready',function(){ location.href='".$SERVER['BASE']."maquina.php?'; });</script>";

	} else {
		if($_GET['me']==''){

			@header("Location: ".$SERVER['BASE']."maquina.php");
			//die("<html><body onload=\"location.href=".$SERVER['BASE']."maquina.php';\"></body></html>");
			echo "<script>window.addEvent('domready',function(){ location.href='".$SERVER['BASE']."maquina.php?'; });</script>";

		} else {

			@header("Location: ".$SERVER['BASE']."maquina.php??me".$_GET['me']);
			//die("<html><body onload=\"location.href='".$SERVER['BASE']."maquina.php?me=".$_GET['me']."';\"></body></html>");
			echo "<script>window.addEvent('domready',function(){ location.href='".$SERVER['BASE']."maquina.php?me=".$_GET['me']."'; });</script>";

		}
	}
}

function redireccionar_load(){
	global $_GET;
	global $SERVER;
	if($_GET['maquina']==1){
		//header("Location: ?");
		@header("Location: ".$SERVER['BASE']."maquina.php");
		die("<script>window.addEvent('domready',function(){ location.href='".$SERVER['BASE']."maquina.php?'; });</script>");
	} else {
		if($_GET['me']==''){
			@header("Location: ".$SERVER['BASE']."maquina.php");
			die("<script>window.addEvent('domready',function(){ location.href='".$SERVER['BASE']."maquina.php?'; });</script>");
		} else {
			@header("Location: ".$SERVER['BASE']."maquina.php??me".$_GET['me']);
			die("<script>window.addEvent('domready',function(){ location.href='".$SERVER['BASE']."maquina.php?me=".$_GET['me']."'; });</script>");
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
		if( $row[1]=='0' and $row[2]!='PRIMARY' and $row[2]!='FULLTEXT'){
			$uniques[]=$row[4];
		}
	}
	//prin($uniques);
	return $uniques;

	}

	function get_fulltext_from_tabla($tabla){

	global $link;
	$result = mysql_query("SHOW KEYS FROM ".$tabla);
	while ($row=mysql_fetch_row($result)){
		//prin($row);
		if( $row[10]=='FULLTEXT'){
			$fulltext[]=$row[2];
		}
	}
	//prin($fulltext);
	return $fulltext;

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

function get_tablas_from_bd(){
	global $link;
	$sql = "show tables";
	$result=mysql_query($sql,$link);
	$total=mysql_num_rows($result);
	if($total>0){
		while ($row = mysql_fetch_row($result)){
				$tablas_creadas[] = $row[0];
		}
	}
	return $tablas_creadas;
}

function get_columns_from_objeto($obta){

$nombre_tabla=$obta['tabla'];

$columnas_existentes=get_columns_from_tabla($obta['tabla']);

$fulltext_existentes=get_fulltext_from_tabla($obta['tabla']);

$indices_existentes=get_uniques_from_tabla($obta['tabla']);


$tablas_existentes=get_tablas_from_bd();



$Acampos=array();

$Acampos2=array();

//echo "<pre>"; print_r($obta); echo "</pre>";

foreach($obta['campos'] as $camp){

	if($camp['multiopciones']!=''){
		list($name,$tablerel,$campos,$table9,$where)=explode("|",$camp['multiopciones']);
		if(!in_array($tablerel,$tablas_existentes)){

$Acampos[]="CREATE TABLE IF NOT EXISTS `".$tablerel."` (`id_".$obta['tabla']."` int(10) NOT NULL DEFAULT '0',`id_".$table9."` int(10) NOT NULL DEFAULT '0',`orden` int(10) NOT NULL DEFAULT '0',PRIMARY KEY (`id_".$obta['tabla']."`,`id_".$table9."`),KEY `id_".$obta['tabla']."` (`id_".$obta['tabla']."`),KEY `id_".$table9."` (`id_".$table9."`) ) ENGINE=MyISAM DEFAULT CHARSET=utf8";

		}
	}

	$camposA[]=$camp['campo'];

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
			$Acampos[]="ALTER TABLE `$nombre_tabla` ADD `".$camp['campo']."`  longtext default NULL;";
		}
		if(in_array($camp['tipo'],array('inp','com','img','sto','pas','yot'))){
			$size=($camp['size'])?$camp['size']:80;
			$Acampos[]="ALTER TABLE `$nombre_tabla` ADD `".$camp['campo']."`  varchar($size) default NULL;";
		}
		if(in_array($camp['tipo'],array('hid'))){
			$Acampos[]="ALTER TABLE `$nombre_tabla` ADD `".$camp['campo']."`  int(10) default NULL;";
		}
		if(in_array($camp['tipo'],array('vis'))){
			$Acampos[]="ALTER TABLE `$nombre_tabla` ADD `".$camp['campo']."`  char(1) default 1 NOT NULL;";
		}
		if(in_array($camp['tipo'],array('cal'))){
			$Acampos[]="ALTER TABLE `$nombre_tabla` ADD `".$camp['campo']."`  int(2) default 0 NOT NULL;";
		}
		if(in_array($camp['tipo'],array('web'))){
			$Acampos[]="ALTER TABLE `$nombre_tabla` ADD `".$camp['campo']."`  int(10) default 1 NOT NULL;";
		}
		if(in_array($camp['tipo'],array('page'))){
			$Acampos[]="ALTER TABLE `$nombre_tabla` ADD `".$camp['campo']."`  int(10) default 1 NOT NULL;";
		}
		if(in_array($camp['tipo'],array('user'))){
			$Acampos[]="ALTER TABLE `$nombre_tabla` ADD `".$camp['campo']."`  int(10) default 1 NOT NULL;";
		}
		//prin($Acampos);

	} else {


		if($camp['size']=='' and $camp['variable']==''){

			if(in_array($camp['tipo'],array('inp')) and get_size_de_campo($camp['campo'],$obta['tabla'])!=80 ){
				$Acampos[]="ALTER TABLE `$nombre_tabla` MODIFY `".$camp['campo']."` VARCHAR(80); ";
			}
			if(in_array($camp['tipo'],array('txt')) and get_tipo_de_campo($camp['campo'],$obta['tabla'])!='longtext'){
				$Acampos[]="ALTER TABLE `$nombre_tabla` MODIFY `".$camp['campo']."` longtext; ";
			}

		} else {

			if(( $camp['size']!='' or $camp['variable']!='' ) and in_array($camp['tipo'],array('inp','txt'))){

				$variable	=($camp['variable']!='')?$camp['variable']	:"varchar";
				$size		=($camp['size']!='')	?$camp['size']		:(($camp['tipo']=='inp')?"80":"800");

				if(get_size_de_campo($camp['campo'],$obta['tabla'])!=$camp['size'] or  get_tipo_de_campo($camp['campo'],$obta['tabla'])!=$camp['variable']){

					if(in_array($variable,array('float','blob'))){
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

	if(!in_array($camp['campo'],$fulltext_existentes)){
		if($camp['fulltext']=='1'){
			$Acampos[]="ALTER TABLE `$nombre_tabla` ADD FULLTEXT (`".$camp['campo']."`);";
			//prin("ALTER TABLE `$nombre_tabla` ADD FULLTEXT (`".$camp['campo']."`);");
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


function necesita_libs($objeto){
	$necesita['html']=0;
	$necesita['img']=0;
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
			if($campo['tipo']=='html'){	$necesita['html']=1; }
			elseif($campo['tipo']=='img' or $campo['tipo']=='sto' or enhay($campo['controles'],'foto') or enhay($campo['controles'],'vista')){ $necesita['img']=1; }
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
	//global $Local;
	//$Local=0;
	global $SERVER;
	global $TIME_START;
    $HTTP_ACCEPT_ENCODING= $_SERVER["HTTP_ACCEPT_ENCODING"];
    if( headers_sent() ){
        $encoding = false;
    }elseif( $SERVER['browser']=='Opera' ){
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
		$bh="<input type='hidden' id='pagetime' value='".( number_format((microtime(true) - $TIME_START )/60,6) )."'><input type='hidden' id='pagesize' value='". number_format((strlen($contents)/9)/1024,3)."'></body>";
		$contents=str_replace("</body>",$bh,$contents);
        $size = strlen($contents);
        $contents = gzcompress($contents, 9);
        //$contents = substr($contents, 0, $size);
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
	$login_result = ftp_login($conn_id, $ftp_files_user, $ftp_files_pass); ftp_pasv($conn_id, true);

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
		//echo $ftp_files_root."\n";

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
		//echo $ftp_files_root."\n";

		///print_r($items);
		if(0){
		/*
		if(sizeof($items)>0){

			$conn_id = ftp_connect($ftp_files_host);
			$login_result = ftp_login($conn_id, $ftp_files_user, $ftp_files_pass); ftp_pasv($conn_id, true);

			foreach($items as $item){

				ftp_delete($conn_id,str_replace("_1.",".",$item['get_archivo']));

				foreach($item['num_tamanos'] as $tam){

					ftp_delete($conn_id,str_replace("_1.",$tam,$item['get_archivo']));

				}

			}

			ftp_close($conn_id);

		}
		*/
		} else {

		if(sizeof($items)>0){

			foreach($items as $item){

				$item['get_archivo']="../".str_replace($ftp_files_root,"",$item['get_archivo']);
				//echo getcwd()."\n";
				//echo $item['get_archivo']."\n";
				//echo (file_exists($item['get_archivo']))?1:0;
				//exit();
				unlink(str_replace("_1.",".",$item['get_archivo']));

				foreach($item['num_tamanos'] as $tam){

					unlink(str_replace("_1.",$tam,$item['get_archivo']));

				}

			}

		}

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
       sleep(1);
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

		clean_css_css();

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

	if(!$vars['GENERAL']['htaccess_restringido']){

		$f1=fopen($file,"w+");
		fwrite($f1,$txt);
		fclose($f1);

	}

	exit();

} else {

	if($GET['var']=='CLASSPARAMETERS'){

		$GET2=array();
		if($GET['file']=='css'){
			$GET2['file']=$GET['file'];
			$GET2['var']=$GET['var'];
			foreach($GET as $uno => $dos){
				if(!in_array($uno,array("var","file"))){
					$xinco=explode("%23%23%23%23",$dos);
					foreach($xinco as $xinc){
						$xxxin=explode("\n",$xinc);
						$TyPe=strtolower(trim($xxxin[0]));
						if($TyPe!=''){
						unset($xxxin[0]);
						$GET2[$uno."-".$TyPe]=implode("\n",$xxxin);
						}
					}
				}
			}
		$GET=$GET2;
		}

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

}

function clean_css_css(){

	$allcs=implode("",file("css.php"));

	$Default=array('footers'=>'form_05','bloques'=>'bloque_cuadro_18','listados'=>'listado_15','arboles'=>'arbol_01','menus'=>'menu_22');

	list($uno,$dos,$tres)=between($allcs,"/*WEBBLOQUES-START*/","/*WEBBLOQUES-END*/");
	eval($dos);

	list($uno0,$dos0,$tres0)=between($allcs,"/*CLASSSELECTED-START*/","/*CLASSSELECTED-END*/");
	eval($dos0);

	$CSS='';
	foreach($WEBBLOQUES as $uno=>$dos){
		$ddos=explode(",",$dos);
		foreach($ddos as $dddos){
		$CSS.="\$CLASSSELECTED['".$uno."-".$dddos."']='".(($CLASSSELECTED[$uno."-".$dddos])?$CLASSSELECTED[$uno."-".$dddos]:$Default[$dddos])."';\n";
		}
	}
	$allcs=$uno0."/*CLASSSELECTED-START*/\n".$CSS."/*CLASSSELECTED-END*/\n".$tres0;

	list($uno0,$dos0,$tres0)=between($allcs,"/*CLASSPARAMETERS-START*/","/*CLASSPARAMETERS-END*/");
	eval($dos0);

	$CPS='';
	foreach($WEBBLOQUES as $uno=>$dos){
		$ddos=explode(",",$dos);
		foreach($ddos as $dddos){
		$CPS.="\$CLASSPARAMETERS['".$uno."-".$dddos."']='".$CLASSPARAMETERS[$uno."-".$dddos]."';\n";
		}
	}
	$allcs=$uno0."/*CLASSPARAMETERS-START*/\n".$CPS."/*CLASSPARAMETERS-END*/\n".$tres0;

	$f1=fopen("css.php","w+");
	fwrite($f1,$allcs);
	fclose($f1);


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

			//if($dad=='campos' or $dad=='procesos'){
			//$coma = (sizeof($array)-1==$k)?"":",\n";
			/*} else {*/
			$coma = (sizeof($array)-1==$k)?"":",";
			//}
			if(is_array($value)){
				$tt=(strlen($key)>=15)?"":((strlen($key)>=10)?"\t":((strlen($key)>5)?"\t\t":"\t\t\t"));
				if($count==0){
				$buf .= "\$objeto_tabla['$key']=array(\n";
				$coma = ";\n/". $line ."/\n";
				} else {
					if($dad=='procesos'){
						//$key=$value['campo'];
						$tt=(strlen($key)>=15)?"":((strlen($key)>=10)?"\t":((strlen($key)>5)?"\t\t":"\t\t\t"));
						if($key==$k){
							$buf .=  $tab."array(\n";
						} else {
							$buf .=  $tab."'$key'$tt=>array(\n";
						}
					}elseif($dad=='campos'){
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

	$controles=str_replace(array("\n","\r","\s","\t","\0"),"",$controles);

	global $SERVER;

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
		if(!enhay($cont,'class=')){	$cont=str_replace("<a ","<a class=\"linkstitu\"",$cont); }
		//echo $aaaa."\n";
		list($uno,$dos)=explode("href=",$cont);
		$comilla=substr($dos,0,1);
		$comilla2=($comilla=="'")?"\"":"'";
		$pre=(substr($SERVER['browser'],0,2)=='IE')?"../":"";
		list($tres,$cuatro,$cinco)=explode($comilla,$dos);
		list($siete,$ocho)=explode($cuatro.$comilla,$dos);
		if( (!(strpos($cuatro,"base")===false)) or (!(strpos($cuatro,"base2")===false)) or (!(strpos($cuatro,"../index.php")===false)) or (!(strpos($cuatro,"pop.php")===false)) ){
		$aaaa=$uno."href=".$comilla.$pre.$cuatro.$comilla." rel=".$comilla.get_dims_crearforeig().$comilla." ".$ocho;
		$aaaa=str_replace("<a class=\"linkstitu\"","<a class=\"linkstitu mb\"",$aaaa);
//		$aaaa=$uno."onclick=".$comilla."javascript:procesar_recargar(".$comilla2.$pre.$cuatro.$comilla2.");return false;".$comilla." ".$ocho;
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
			elseif(is_numeric($cuatro) and $cuatro!='0'){ $vars2[$uno][$tres]=$cuatro."px";  }
			else { $vars2[$uno][$tres]=$cuatro; }
		}
	}

	//$vars2=str_replace(array_keys($COLORES),array_values($COLORES),$vars2);

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

	} else {
		echo "crear archivo nuevo";

		$uno="<?php \n"; $tres="\n ?>"; $dos="";

	}
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

	//echo "archivo creado";

}


function fileExists($path){
     return (@fopen($path,"r")==true);
 }

function str_control($dts){
$ratI=5.9; $ratM=21; $ratIM=16;
$rti=explode("<img",$dts);
$rti=(sizeof($rti)==0)?0:sizeof($rti)-1;
$ret = trim(strip_tags(str_replace(array("\n","\r","\s","\t","<img"),array("","","","","<img"),$dts)));
//prin(strlen(trim($ret)));
//echo "<textarea>".$ret."</textarea>";
$ret = $ratM + $ratI*strlen($ret) + $ratIM*$rti;
return intval($ret);
}


function insert_rapido($array,$tabla,$debug=0){
	$array['visibilidad']='1';
	$array['fecha_creacion']='now()';
	$ret=insert($array,$tabla,$debug);
	return $ret['id'];
}


function arbol($array){
global $num_rep;
global $num_items;
global $num_li;
global $num_rep2;
global $Items;
global $Items2;
$num_items=0;
$num_li=0;
$num_rep=0;
$num_rep2=0;
echo '<style>
.root {padding-left:0px;font-weight:bold;text-transform:uppercase;}
.root a { color:#333; }
.dad {padding-left:50px;font-weight:bold;text-transform:uppercase;border-left:1px solid #ccc;padding-bottom:3px;}
.son {padding-left:1px;}
.item {padding-left:1px;list-style:square inside none;font-weight:normal;text-transform:none;}
.son b { color:green; font-weight:normal; }
.item b { color:red; font-weight:normal; }
li.son a { color:#333; }
li.close a { color:blue; }
.close li { display:none; }
.controls a { color:blue;text-decoration:underline; }
</style>';
echo "<div class='controls'>
<a onclick='colapsar_todo();'>colapsar todo</a> -
<a onclick='expandir_todo();'>expandir todo</a> -

<a onclick='colapsar_items();'>colapsar items</a> -
<a onclick='expandir_items();'>expandir items</a>
</div>";
echo "<ul class='root'>";tree($array);echo "</ul>";
echo "número de items: ".$num_items."<br>";
echo "número de items repetidos: ".$num_rep."<br>";
echo "número de padres repetidos: ".$num_rep2."<br>";
?>
<script>
function colapsar_todo(){ $$('.son').each(function(ee){ ee.addClass('close');	});	}
function expandir_todo(){ $$('.son').each(function(ee){ ee.removeClass('close'); }); }
function colapsar_items(){ $$('.last').each(function(ee){ ee.addClass('close');	});	}
function expandir_items(){ $$('.last').each(function(ee){ ee.removeClass('close'); }); }
function togg(dis){
if($(dis).hasClass('close')){ $(dis).removeClass('close'); }
else { $(dis).addClass('close'); }
}
</script>
<?php
}
function tree($array){
	global $num_items;
	global $num_li;
	global $num_rep;
	global $num_rep2;
	global $Items;
	global $Items2;
	//prin($array);
	if($array['name']=='orf'){
		echo "<ul class='son last' >";
		foreach($array['children'] as $arra){
			echo "<li class='item'>";
			echo $arra;
			if(in_array($arra,$Items)){	$num_rep++; echo ' <b>repitem'.$num_rep.'</b>';  }
			$Items[]=$arra;
			echo "</li>";
			$num_items++;
		}
		echo "</ul>";
	} elseif($array['name']=='orf'){
		echo "<ul class='son last' >";
		foreach($array['children'] as $arra){
			echo "<li class='item'>";
			echo $arra;
			if(in_array($arra,$Items)){	$num_rep++; echo ' <b>repitem'.$num_rep.'</b>';  }
			$Items[]=$arra;
			echo "</li>";
			$num_items++;
		}
		echo "</ul>";
	} else {
		$num_li++;
		echo "<li class='son' id='li_".$num_li."'>";
		echo "<a onclick=\"togg('li_".$num_li."');return false;\">";
		echo $array['name'];
		if(in_array($array['name'],$Items2)){	$num_rep2++; echo ' <b>repdad'.$num_rep2.'</b>';  }
		$Items2[]=$array['name'];
		echo "</a>";
		foreach($array['children'] as $arra){
			echo "<ul class='dad'>";
			tree($arra);
			echo "</ul>";
		}
		echo "</li>";
	}
}


function between($txt,$desde,$hasta,$aminuscula=false){

	if($aminuscula==false){
		list($uno,$dos)=explode($desde,$txt);
		list($tres,$cuatro)=explode($hasta,$dos);
		return array($uno,$tres,$cuatro);
	} else {
		list($uno,$dos)=explode(strtolower($desde),strtolower($txt));
		list($tres,$cuatro)=explode(strtolower($hasta),$dos);
		return array($uno,$tres,$cuatro);
	}

}


function enhay($en,$hay,$aminuscula=false){

	if($aminuscula==false){
		return (strpos(" ".$en." ",$hay)===false)?0:1;
	} else {
		return (strpos(" ".strtolower($en)." ",strtolower($hay))==false)?0:1;
	}

}

function intervalo($start, $end="NOW")
{
        $sdate = strtotime($start);
        $edate = strtotime($end);

        $time = $edate - $sdate;
        if($time>=0 && $time<=59) {
                // Seconds
                $timeshift = $time.' seconds ';

        } elseif($time>=60 && $time<=3599) {
                // Minutes + Seconds
                $pmin = ($edate - $sdate) / 60;
                $premin = explode('.', $pmin);

                $presec = $pmin-$premin[0];
                $sec = $presec*60;

                $timeshift = $premin[0].' min '.round($sec,0).' sec ';

        } elseif($time>=3600 && $time<=86399) {
                // Hours + Minutes
                $phour = ($edate - $sdate) / 3600;
                $prehour = explode('.',$phour);

                $premin = $phour-$prehour[0];
                $min = explode('.',$premin*60);

                $presec = '0.'.$min[1];
                $sec = $presec*60;

                $timeshift = $prehour[0].' hrs '.$min[0].' min '.round($sec,0).' sec ';

        } elseif($time>=86400) {
                // Days + Hours + Minutes
                $pday = ($edate - $sdate) / 86400;
                $preday = explode('.',$pday);

                $phour = $pday-$preday[0];
                $prehour = explode('.',$phour*24);

                $premin = ($phour*24)-$prehour[0];
                $min = explode('.',$premin*60);

                $presec = '0.'.$min[1];
                $sec = $presec*60;

                //$timeshift = $preday[0].' días '.$prehour[0].' horas '.$min[0].' minútos y '.round($sec,0).' segundos ';
                $timeshift = $preday[0].' días '.$prehour[0].' horas y '.$min[0].' minútos';

        }
        return $timeshift;
}
function css_radius($radius){
if(trim($radius)=='') return '';
return "-moz-border-radius:$radius;
-webkit-border-radius:$radius;
-ms-border-radius:$radius;
-khtml-border-radius:$radius;
border-radius:$radius;";
}
function css_shadow($shadow){
if(trim($shadow)=='') return '';
return "-moz-box-shadow: $shadow;
-webkit-box-shadow: $shadow;
box-shadow: $shadow;";
}
function css_gradient_vertical($prop1,$bg1,$prop2,$bg2){
$css ="";
$css.="background:".$bg2.";"; /* Old browsers */
$css.="background:-moz-linear-gradient(top,".$bg1." ".$prop1.",".$bg2." ".$prop2.");"; /* FF3.6+ */
$css.="background:-webkit-gradient(linear,left top, left bottom,color-stop(".$prop1.",".$bg1."), color-stop(".$prop2.",".$bg2."));"; /* Chrome,Safari4+ */
$css.="background:-webkit-linear-gradient(top,".$bg1." ".$prop1.",".$bg2." ".$prop2.");"; /* Chrome10+,Safari5.1+ */
$css.="background:-o-linear-gradient(top,".$bg1." ".$prop1.",".$bg2." ".$prop2.");"; /* Opera11.10+ */
$css.="background:-ms-linear-gradient(top,".$bg1." ".$prop1.",".$bg2." ".$prop2.");"; /* IE10+ */
$css.="filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='".$bg1."',endColorstr='".$bg2."',GradientType=0 );"; /* IE6-9 */
$css.="background: linear-gradient(top,".$bg1." ".$prop1.",".$bg2." ".$prop2.");"; /* W3C */
return $css;
}

/*
if (!function_exists('str_getcsv')) {

	function str_getcsv($input, $delimiter=',', $enclosure='"', $escape=null, $eol=null){
		$parts=explode(",",$input);
		foreach($parts as $part){ if((substr($part[0],0,1)=='"') and (substr($part[0],-1,1)=='"')){eval("\$pp=$part;");}else{$pp=$part;} $ppp[]=$pp; }
		return $ppp;
	}

}
*/
if (!function_exists('str_getcsv')) {
    function str_getcsv($input, $delimiter = ',', $enclosure = '"', $escape = '\\', $eol = '\n') {
        if (is_string($input) && !empty($input)) {
            $output = array();
            $tmp    = preg_split("/".$eol."/",$input);
            if (is_array($tmp) && !empty($tmp)) {
                while (list($line_num, $line) = each($tmp)) {
                    if (preg_match("/".$escape.$enclosure."/",$line)) {
                        while ($strlen = strlen($line)) {
                            $pos_delimiter       = strpos($line,$delimiter);
                            $pos_enclosure_start = strpos($line,$enclosure);
                            if (
                                is_int($pos_delimiter) && is_int($pos_enclosure_start)
                                && ($pos_enclosure_start < $pos_delimiter)
                                ) {
                                $enclosed_str = substr($line,1);
                                $pos_enclosure_end = strpos($enclosed_str,$enclosure);
                                $enclosed_str = substr($enclosed_str,0,$pos_enclosure_end);
                                $output[$line_num][] = $enclosed_str;
                                $offset = $pos_enclosure_end+3;
                            } else {
                                if (empty($pos_delimiter) && empty($pos_enclosure_start)) {
                                    $output[$line_num][] = substr($line,0);
                                    $offset = strlen($line);
                                } else {
                                    $output[$line_num][] = substr($line,0,$pos_delimiter);
                                    $offset = (
                                                !empty($pos_enclosure_start)
                                                && ($pos_enclosure_start < $pos_delimiter)
                                                )
                                                ?$pos_enclosure_start
                                                :$pos_delimiter+1;
                                }
                            }
                            $line = substr($line,$offset);
                        }
                    } else {
                        $line = preg_split("/".$delimiter."/",$line);

                        /*
                         * Validating against pesky extra line breaks creating false rows.
                         */
                        if (is_array($line) && !empty($line[0])) {
                            $output[$line_num] = $line;
                        }
                    }
                }
                return $output;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}

function filtrarGET($str,$excepciones) {
    $op = array();
    $pairs = explode("&", $str);
    foreach ($pairs as $pair) {
        list($k, $v) = explode("=",$pair);
		if(!in_array($k,$excepciones)){
        	$op[$k] = $k."=".$v;
		}
    }
    $str = (sizeof($op)>0)?("&".implode("&",$op)):'';
	return $str;
}

function parseParams($str) {
    $op = array();
    $pairs = explode("&", $str);
    foreach ($pairs as $pair) {
        list($k, $v) = array_map("urldecode", explode("=", $pair));
        $op[$k] = $v;
    }
    return $op;
}

function getControles($controles,$objeto_tabla){

	$controles=str_replace("'","\"",$controles);
	//prin($aa);
	//prin($bb);
	$arr=array();
	$aaas=explode("/a>",$controles);
	foreach($aaas as $aaa){
		$rel='';$text='';$ltext='';$custom='';
		list($unoo,$ltext,$tres)=between($aaa,">","<");
		list($uno,$dos,$tres)=between($ltext,"{","}");
		$text=$uno.$tres;
		list($uno2,$href,$tres)=between($unoo,"href=\"","\"");
		list($uno,$rel,$tres)=between($unoo,"rel=\"","\"");
		list($uno,$file,$tres)=between($href,"custom/",".php");

		$crear=0;
		if(enhay($rel,'crear')){ $crear=1; $rel=trim(str_replace('crear','',$rel)); }

		if($text!=''){
			$aaaj['completo']=$unoo.">".$ltext."</a>";
			$aaaj['text']=trim($text);
			$aaaj['ltext']=trim($ltext);
			$aaaj['href']=$href;
			if($rel==''){ if(enhay($text,'foto')){ $rel='foto'; } }
			if($rel!=''){

				$rel=($rel=='mensajes')?'subs':$rel;
				$aaaj['rel']=trim($rel);
				if($file!=''){
					$aaaj['file']=$file;
					foreach($objeto_tabla as $objttoo=>$ttoo){
						if($ttoo['archivo']==$file){
							$aaaj['obj']=$objttoo;
							$aaaj['crear']=$crear;
							/*
							$foreis=array();
							foreach($ttoo['campos'] as $objttoocc=>$ttoocc){
								if($ttoocc['foreig']=='1'){
								list($art,$brt)=explode("|",$ttoocc['opciones']);
								$foreis[]=$ttoocc['campo'];
								}
							}
							$aaaj['foreis']=$foreis;
							*/
						}
					}
				}
				$arr[$rel][]=$aaaj;
			}
		}
		$arr3[]=$aaaj; unset($aaaj);
	}
	$arrrr='';
	foreach($arr3 as $arr2){
		if($arr2['rel']=='' or $arr2['rel']=='foto'){
			$arrrr.=$arr2['completo']." ";
		}
	}
	$ry[0]=$arrrr;
	$ry[1]=$arr;
	return 	$ry;
}

function render_foreig_foto($obj,$id){

	$datos_tabla=procesar_objeto_tabla($obj);
	$query_campos=$datos_tabla['id'].",".$datos_tabla['fcr'].",".$datos_tabla['fed'].",".$datos_tabla['imagenes'][0];
	$query_tabla=$datos_tabla['tabla'];
	$query_where="where ".$datos_tabla['foreig']."='".$id."' limit 0,1";
	//prin(array($query_campos,$query_tabla,$query_where));
	$linea=select_fila($query_campos,$query_tabla,$query_where,0);
//	prin($obj['me']);
	$tbli=$obj['campos'][$datos_tabla['imagenes'][0]];
	if(trim($linea[$tbli['campo']])!=''){
	?><a href="<?php echo get_imagen($datos_tabla[$tbli['campo']]['carpeta'], $linea[$datos_tabla['fcr']],$linea[$tbli['campo']]);?>" rel="[images],noDesc" class="mb"><img <?php echo dimensionar_imagen($datos_tabla[$tbli['campo']]['carpeta'], $linea[$datos_tabla['fcr']],$linea[$tbli['campo']],$tbli['tamano_listado']);?> class='f_e' /></a><?php
	return 1;
	} else {
	return 0;
	}
	//echo "|$obj|$id|";
}
function render_foreig_subs($obj0,$id,$urd){
	
	global $objeto_tabla;
	global $Array_Meses;
	global $Array_Horas;
	global $LOCAL;
	global $vars;
	global $PERMISOS_USUARIO;

	//var_dump($PERMISOS_USUARIO);

	$permisos=explode(",",$PERMISOS_USUARIO);
	foreach($permisos as $permiso){
	list($objeto,$params)=explode("?",trim($permiso));
	parse_str($params,$paras);
	$persos[$objeto]=$paras;
	}

	// var_dump($persos);

	// if($_SESSION['usuario_id']!='' or 1){
	// $ALL='';
	// foreach($objeto_tabla as $obj=>$ot){
	// $ALL.=$obj.",\n";
	// }

	// global $this_me;
	// $permisos=($PERMISOS_USUARIO?$PERMISOS_USUARIO:$ALL).",\n".((($_GET['conf']!='')?$this_me."?".$_GET['conf'].",\n":''));

	// var_dump($persos);

	foreach($obj0 as $obj2){
		foreach($obj2 as $obj){

			if(isset($persos[$obj['obj']])){
				// var_dump($persos[$obj['obj']]);
				foreach($persos[$obj['obj']] as $uno=>$dos){
					if(enhay($uno,"|")){
				 		list($tres,$cuatro)=explode("|",$uno);
						$objeto_tabla[$obj['obj']]['campos'][$tres][$cuatro]=$dos;
				 	} else {
				 		$objeto_tabla[$obj['obj']][$uno]=$dos;
				 	}
				}
			}

			$datos_tabla=procesar_objeto_tabla($objeto_tabla[$obj['obj']]);

			// var_dump($datos_tabla);

			//prin($datos_tabla);
			$parte=between($obj['ltext'],"where","}");
			list($forei,$forein)=explode("=",$parte['1']);
			$where="where ".str_replace("[id]",$id,$parte['1'])." ";
			$campS=array();
			foreach($datos_tabla['list'] as $lis){
				// var_dump($lis);
				if(
					(in_array($lis['tipo'],array('inp','txt','html','hid','fch','fcr','img','com')) and
					($lis['campo']!=trim($forei)) and
					($lis['listable']=='1') and
					( !($lis['indicador']=='1' and $lis['tipo']=='hid') ) and
					(!enhay($lis['label'],'descripci',1)) and
					(!enhay($lis['label'],'source',1)) and
					(!enhay($lis['label'],'url',1)) and
					//($lis['campo']!='id_grupo') and
					//($lis['campo']!='id_subgrupo') and
					1
					)
					){
					$campS[]=$lis['campo'];
					}
				}
			$classLineal=0;
			if(sizeof($campS)==1){
				if($objeto_tabla[$obj['obj']]['campos'][$campS[0]]['tipo']=='img'){ $classLineal=1; }
			}
			if(sizeof($campS)==2){
				if(
					$objeto_tabla[$obj['obj']]['campos'][$campS[0]]['tipo']=='img' and
					$objeto_tabla[$obj['obj']]['campos'][$campS[1]]['tipo']=='inp'
					){ $campTitu=$campS[1]; unset($campS[1]); $classLineal=1; }
				if(
					$objeto_tabla[$obj['obj']]['campos'][$campS[1]]['tipo']=='img' and
					$objeto_tabla[$obj['obj']]['campos'][$campS[0]]['tipo']=='inp'
					){ $campTitu=$campS[0]; unset($campS[0]); $classLineal=1; }
			}
			// var_dump($camps);
			$campS2=$campS;
			$campS2=array_merge(array($datos_tabla['id']),$campS2,array($campTitu));
			if(!in_array($datos_tabla['fcr'],$campS2)){ $campS2=array_merge(array($datos_tabla['fcr']),$campS2); }

			foreach($campS2 as $ccc=>$cccc){ if(trim($cccc)==''){ unset($campS2[$ccc]); } }

			//$where="where ".$datos_tabla['foreig']."='".$id."' ";//anterior where


			$query_where=$where
						 ."order by ". ( ($datos_tabla['order_by']=='')? (  $datos_tabla['id']." ". (($datos_tabla['orden']=='1')?"desc":"asc") ):$datos_tabla['order_by'] )." "
						 ."limit 0,500";
			$lineas=select($campS2,
							$datos_tabla['tabla'],
							$query_where,0);

			$wwwwt=0;
			$nosubwidth=0;
			foreach($campS as $cp=>$camP){
					switch($objeto_tabla[$obj['obj']]['campos'][$camP]['tipo']){
					case "img":
						$nosubwidth=1;
					break;
					}
				$wwww=str_replace("px","",$objeto_tabla[$obj['obj']]['campos'][$camP]['width']);
				$wwww=($wwww)?$wwww:100;
				$wwwwt=$wwwwt+$wwww+6;
			}
			$wwwwt=$wwwwt+2;

			echo '<div class="itms '. ( ($urd=='1')?"first_linea ":"" ).' '. ( ($classLineal=='1')?"lineal":"" ).'" '.( ($nosubwidth==0)?'style="width:'.$wwwwt.'px;"':'' ).'>';

			$pluralIma=$objeto_tabla[$obj['obj']]['nombre_plural'];
			//prin($plural);

			$pluralIma=preg_replace("/fotos/i",'<img src="img/ico_pics.png" width=16 align=absmiddle>',$pluralIma);
			$pluralIma=preg_replace("/vista previa/i",'<img src="img/ico_preview.png" width=16 align=absmiddle>',$pluralIma);
			$pluralIma=preg_replace("/mensajes/i",'<img src="img/ico_email.png" width=16 align=absmiddle>',$pluralIma);
			$pluralIma=preg_replace("/alertas/i",'<img src="img/ico_alert.png" width=16 align=absmiddle>',$pluralIma);
			$pluralIma=preg_replace("/imprimir/i",'<img src="img/ico_print.png" width=16 align=absmiddle>',$pluralIma);

			echo '<div class="tite '. (((sizeof($lineas)>0 or 1) and (sizeof($campS)>1) )?'hid1':'') .'" >';
			echo "<a title='".sizeof($lineas)." ".$objeto_tabla[$obj['obj']]['nombre_plural']."' href='".str_replace("[id]",$id,$obj['href'])."'>".sizeof($lineas)." ".$pluralIma."</a>";
			echo '</div>';
			//var_dump($campS);
			if(sizeof($lineas)>0 or 1){
			if(sizeof($campS)>1){
			echo '<div class="itm hitm hid2" >';
				foreach($campS as $cp=>$camP){
					echo '<div class="itd" '.(($objeto_tabla[$obj['obj']]['campos'][$camP]['width'])?'style="width:'.$objeto_tabla[$obj['obj']]['campos'][$camP]['width'].';"':'').' >';
					if($cp==0){
					echo "<a title='".sizeof($lineas)." ".$objeto_tabla[$obj['obj']]['nombre_plural']."' href='".str_replace("[id]",$id,$obj['href'])."'>".sizeof($lineas)." ".$pluralIma."</a>";
					} else {
					$label = ($objeto_tabla[$obj['obj']]['campos'][$camP]['label'])?strtoupper($objeto_tabla[$obj['obj']]['campos'][$camP]['label']):'&nbsp;';
					$label = str_replace(array('(',')'),array('<span style="display:none;">','</span>'),$label);
					echo $label;
					}
					echo '</div>';
				}
			echo '</div>';
			}

			echo '<ul class="hid2">';
			foreach($lineas as $linea){
				echo '<li class="itm">';
				foreach($campS as $camP){
					echo '<div class="itd" ';
					if($classLineal==0){ echo ($objeto_tabla[$obj['obj']]['campos'][$camP]['width'])?'style="width:'.$objeto_tabla[$obj['obj']]['campos'][$camP]['width'].';"':''; }
					echo ' >';
					switch($objeto_tabla[$obj['obj']]['campos'][$camP]['tipo']){
					case "img":
						$tbli=$objeto_tabla[$obj['obj']]['campos'][$camP];
						if($linea[$tbli['campo']]!=''){
						if(!($LOCAL and $vars['GENERAL']['mostrar_toolbars'])){
						echo '<a href="';
						get_imagen($datos_tabla[$tbli['campo']]['carpeta'], $linea[$datos_tabla['fcr']],$linea[$tbli['campo']]);
						echo '" ';
						echo 'rel="[images],noDesc" class="mb" >';
						}
						echo '<img ';
						echo dimensionar_imagen($datos_tabla[$tbli['campo']]['carpeta'], $linea[$datos_tabla['fcr']],$linea[$tbli['campo']],$tbli['tamano_listado']);
						echo ' />';
						if(!($LOCAL and $vars['GENERAL']['mostrar_toolbars'])){ echo '</a>'; }
						}
					break;
					case "com":
						$valoor=$objeto_tabla[$obj['obj']]['campos'][$camP]['opciones'][$linea[$camP]];
						list($valoor,$color)=explode("|",$valoor);
						$valoor=($valoor!='')?$valoor:"&nbsp;";
						switch($valoor){
							case "comentario":echo "&nbsp;<a title='comentario' class='ico_tack z ico_list'></a>"; break;
							case "soporte":echo "&nbsp;<a title='soporte' class='ico_clip z ico_list'></a>"; break;
							case "enviado":echo "&nbsp;<a title='enviado' class='ico_left z ico_list'></a>"; break;
							case "recibido":echo "&nbsp;<a title='recibido' class='ico_right z ico_list'></a>"; break;
							case "si":echo "&nbsp;<a title='si' class='ico_yes z ico_list'></a>"; break;
							case "no":echo "&nbsp;<a title='no' class='ico_no z ico_list'></a>"; break;
							default; echo "<span class='ico_opcion' ".(($color)?"style='color:white;background-color:".$color.";":"")."'>".$valoor."</span>"; break;
						}
					break;
					case "hid":
						list($primO,$tablaO,$whereO)=explode("|",$objeto_tabla[$obj['obj']]['campos'][$camP]['opciones']);
						list($idO,$camposO)=explode(",",$primO);
						$camposOA=array();
						$camposOA=explode(";",$camposO);
						$bufy='';
						foreach($camposOA as $COA){
						$bufy.= select_dato($COA,$tablaO,"where ".$idO."='".$linea[$camP]."'")." ";
						}
						if($objeto_tabla[$obj['obj']]['campos'][$camP]['tip_foreig']=='1'){
						$adiv0='<a class="tipper" href="custom/'.$tablaO.'.php?i='.$linea[$camP].'" rel="{ajax:\'ajax_sql.php?v_t='.$tablaO.'&v_d='.$idO.'%3D'.$linea[$camP].'&f=get_quick\'}">';
						$adiv1='</a>';
						} else { $adiv0=''; $adiv1=''; }

						echo (trim($bufy)!='')?$adiv0.$bufy.$adiv1:'&nbsp;';
					break;
					case "fcr":	case "fch":
					$fech=fecha_formato($linea[$camP],($objeto_tabla[$obj['obj']]['campos'][$camP]['formato'])?$objeto_tabla[$obj['obj']]['campos'][$camP]['formato']:'0b');
					echo '<span style="font-size:11px;">'.(($fech!='')?$fech:"&nbsp;")."</span>";
					break;
					case "html":
					echo ($linea[$camP]!='')?"<div class='htmlenlista'>".stripslashes($linea[$camP])."</div>":"&nbsp;";
					/*break;
					echo ($linea[$camP]!='')?$linea[$camP]:"&nbsp;";*/
					break;
					case "txt":
					echo ($linea[$camP]!='')?nl2br($linea[$camP]):"&nbsp;";
					break;
					default:
					echo ($linea[$camP]!='')?$linea[$camP]:"&nbsp;";
					break;
					}
					echo '</div>';
				}
				echo '</li>';
			}

			if($objeto_tabla[$obj['obj']]['subbottom']!=''){
			parse_str($objeto_tabla[$obj['obj']]['subbottom'],$bottoms);
			echo '<ul class="hid2">';
				echo '<li class="itm itmbottom">';
				foreach($campS as $camP){
					echo '<div class="itd" ';
					if($classLineal==0){ echo ($objeto_tabla[$obj['obj']]['campos'][$camP]['width'])?'style="'.
					(($bottoms[$camP]=='SUM')?'border-top:1px solid #000;':'').
					'width:'.$objeto_tabla[$obj['obj']]['campos'][$camP]['width'].';"':''; }
					echo ' >';
					if($bottoms[$camP]=='SUM'){
					$SUM=0;
					foreach($lineas as $linea){ $SUM+=$linea[$camP]; }
					echo $SUM;
					} else {
					echo ($bottoms[$camP])?$bottoms[$camP]:"&nbsp;";
					}
					echo '</div>';
				}
				echo '</li>';
			echo '</ul>';
			}
			//var_dump($obj);
			//$obj['crear']=1;
			if($obj['crear']=='1'){
	/*
alerta_fecha	2012-01-27 07:09:42
fecha_creacion	now()
id_grupo	674
id_speech
texto	<p>gfdgdfgdf</p> <p> </p>
tipo	1
v_o	VENTAS_MENSAJES
visibilidad	1
*/

			echo "<li class='itm itmedit' id='".$id."_ined'>";
				echo "<input type='hidden' class='".$datos_tabla['archivo']."-_".$id." formi' id='".$datos_tabla['archivo']."-_".$id."-_fecha_creacion' value='now()' />";
				echo "<input type='hidden' class='".$datos_tabla['archivo']."-_".$id." formi' id='".$datos_tabla['archivo']."-_".$id."-_".$forei."' 	value='".$id."' />";
				echo "<input type='hidden' class='".$datos_tabla['archivo']."-_".$id." formi' id='".$datos_tabla['archivo']."-_".$id."-_v_o' 			value='".$obj['obj']."' />";
				echo "<input type='hidden' class='".$datos_tabla['archivo']."-_".$id." formi' id='".$datos_tabla['archivo']."-_".$id."-_visibilidad' 	value='1' />";
				foreach($campS as $camP){
					echo '<div class="itd" ';
					if($classLineal==0){ echo ($objeto_tabla[$obj['obj']]['campos'][$camP]['width'])?'style="width:'.$objeto_tabla[$obj['obj']]['campos'][$camP]['width'].';"':''; }
					echo ' >';
					$tbcampA=$objeto_tabla[$obj['obj']]['campos'][$camP];
					switch($tbcampA['tipo']){
					case "img":
					echo "&nbsp;";
					/*
						$tbli=$objeto_tabla[$obj['obj']]['campos'][$camP];
						if($linea[$tbli['campo']]!=''){
						?><a <?php //echo "title=\"".$linea[$campTitu]."\"";?> href="<?php echo get_imagen($datos_tabla[$tbli['campo']]['carpeta'], $linea[$datos_tabla['fcr']],$linea[$tbli['campo']]);?>" rel="[images],noDesc" class="mb"><img <?php echo dimensionar_imagen($datos_tabla[$tbli['campo']]['carpeta'], $linea[$datos_tabla['fcr']],$linea[$tbli['campo']],$tbli['tamano_listado']);?> /></a><?php
						}
					*/
					break;
					case "com":
					echo "&nbsp;";
					/*
						$valoor=$objeto_tabla[$obj['obj']]['campos'][$camP]['opciones'][$linea[$camP]];
						list($valoor,$color)=explode("|",$valoor);
						$valoor=($valoor!='')?$valoor:"&nbsp;";
						switch($valoor){
							case "comentario":echo "&nbsp;<a title='comentario' class='ico_tack z ico_list'></a>"; break;
							case "soporte":echo "&nbsp;<a title='soporte' class='ico_clip z ico_list'></a>"; break;
							case "enviado":echo "&nbsp;<a title='enviado' class='ico_left z ico_list'></a>"; break;
							case "recibido":echo "&nbsp;<a title='recibido' class='ico_right z ico_list'></a>"; break;
							case "si":echo "&nbsp;<a title='si' class='ico_yes z ico_list'></a>"; break;
							case "no":echo "&nbsp;<a title='no' class='ico_no z ico_list'></a>"; break;
							default; echo "<span class='ico_opcion' style='color:white;background-color:".$color.";'>".$valoor."</span>"; break;
						}
					*/
					break;
					case "hid":

					if($datos_tabla['noedit']!='1')
					{
						list($primO,$tablaO,$whereO)=explode("|",$objeto_tabla[$obj['obj']]['campos'][$camP]['opciones']);
						list($idO,$camposO)=explode(",",$primO);
						$camposOA=array();

						$bufy='';
						$oopciones=select(array($idO,"CONCAT_WS(' ',". str_replace(";",",",$camposO) .") as value"),$tablaO,$whereO);
						$bufy.="<select class='".$datos_tabla['archivo']."-_".$id." formi' id='".$datos_tabla['archivo']."-_".$id."-_".$tbcampA['campo']."' >";
						$bufy.="<option value='' >&nbsp;</option>";
						foreach($oopciones as $pppooo){
						$bufy.="<option value=\"".$pppooo[$idO]."\">".$pppooo['value']."</option>";
						}
						$bufy.="</select>";
						echo $bufy;
					}
					break;
					case "fcr":
					echo "&nbsp;";
					/*
$fech=fecha_formato($linea[$camP],($objeto_tabla[$obj['obj']]['campos'][$camP]['formato'])?$objeto_tabla[$obj['obj']]['campos'][$camP]['formato']:'0b');
					echo ($fech!='')?$fech:"&nbsp;";
					*/
					break;
					case "fch":
					echo "&nbsp;";

					if($tbcampA['rango']){
					list($uuno,$ddos)=explode(",",$tbcampA['rango']);
					$fromYear = date("Y",strtotime($uuno));
					$toYear = date("Y",strtotime($ddos));
					} else {
					$fromYear = date("Y")-99;
					$toYear = date("Y")+1;
					}

					$html='';
					$html.= "<select id='".$datos_tabla['archivo']."-_".$id."-_".$tbcampA['campo']."_d' style='width:37px;font-size:10px;margin-right:-16px;' class='form_input form_input_fecha' onchange='fechaChange(\"".$datos_tabla['archivo']."-_".$id."-_".$tbcampA['campo']."\")'>";
					$html.= "<option></option>";
					for($i=1; $i<=31;$i++){
					if($tbcampA['default']=='now()'){ $selected=(sprintf("%02d",$i)==date("d"))?"selected":""; }
					$html.="<option value='". sprintf("%02d",$i) ."' $selected >".$i."</option>";
					}
					$html.= "</select>";
					$html.= "<select id='".$datos_tabla['archivo']."-_".$id."-_".$tbcampA['campo']."_m' style='width:45px;font-size:10px;margin-right:-16px;' class='form_input form_input_fecha' onchange='fechaChange(\"".$datos_tabla['archivo']."-_".$id."-_".$tbcampA['campo']."\")'>";
					$html.= "<option></option>";
					for($i=1; $i<=12;$i++){
					if($tbcampA['default']=='now()'){ $selected=(sprintf("%02d",$i)==date("m"))?"selected":""; }
					$html.="<option value='". sprintf("%02d",$i) ."' $selected >".substr($Array_Meses[$i],0,3)."</option>";
					}
					$html.= "</select>";
					$html.= "<select  id='".$datos_tabla['archivo']."-_".$id."-_".$tbcampA['campo']."_a' style='width:47px;font-size:10px;margin-right:-16px;' class='form_input form_input_fecha' onchange='fechaChange(\"".$datos_tabla['archivo']."-_".$id."-_".$tbcampA['campo']."\")'>";
					$html.= "<option></option>";
					for($i=$toYear; $i>=$fromYear;$i--){
					if($tbcampA['default']=='now()'){ $selected=($i==date("Y"))?"selected":""; }
					$html.="<option value='".$i."' $selected >".$i."</option>";
					}
					$html.= "</select>";


					if($tbcampA['time']){
					$html.= "<select  id='".$datos_tabla['archivo']."-_".$id."-_".$tbcampA['campo']."_t' style='width:53px;font-size:10px;margin-right:-16px;' class='form_input form_input_fecha' onchange='fechaChange(\"".$datos_tabla['archivo']."-_".$id."-_".$tbcampA['campo']."\")'>";
					$html.= "<option></option>";
					for($i=0; $i<=24;$i++){
					$html.="<option value='".sprintf("%02d",$i)."' >".$Array_Horas[$i]."</option>";
					}
					$html.= "</select>";
					} else {
					$html.= "<input type='hidden' id='".$datos_tabla['archivo']."-_".$id."-_".$tbcampA['campo']."_t' />";
					}

					$html.= "<input type='hidden' class='".$datos_tabla['archivo']."-_".$id." formi' id='".$datos_tabla['archivo']."-_".$id."-_".$tbcampA['campo']."' ".(($tbcampA['default']=='now()')?"value='".date("Y-m-d 00:00:00")."'":"")." />";
					echo $html;
					break;
					case "html":
					echo "<textarea  class='".$datos_tabla['archivo']."-_".$id." formi flext growme' id='".$datos_tabla['archivo']."-_".$id."-_".$tbcampA['campo']."' ></textarea>";
					/*
					echo ($linea[$camP]!='')?"<div class='htmlenlista'>".stripslashes($linea[$camP])."</div>":"&nbsp;";
					*/
					break;
					case "txt":
					echo "<textarea class='".$datos_tabla['archivo']."-_".$id." formi flext growme' id='".$datos_tabla['archivo']."-_".$id."-_".$tbcampA['campo']."' ></textarea>";
					/*
					echo ($linea[$camP]!='')?nl2br($linea[$camP]):"&nbsp;";
					*/
					break;
					default:
					echo "<input type='text'  class='".$datos_tabla['archivo']."-_".$id." formi' id='".$datos_tabla['archivo']."-_".$id."-_".$tbcampA['campo']."'  />";
					/*
					echo ($linea[$camP]!='')?$linea[$camP]:"&nbsp;";
					*/
					break;
					}
					echo '</div>';
				}
			global $linkPagina;
			global $vvvalos;
			echo "<div class='cr_pl'><a href='#' class='itr ico_plus' onclick='send_crear(\"".$id."\",\"".$datos_tabla['archivo']."\",\"".$linkPagina."\",\"".urlencode($vvvalos)."\");return false;'>crear</a></div>";
			echo "</li>";
			}

			echo '</ul>';
			echo "</div>";
			unset($campS);
			unset($campS2);
		}
		}
	}
}
function render_foreig_file($obj0,$linea,$urd){

	// prin($linea);

	foreach($linea as $ii=>$Line){
	$aa[]="[".$ii."]";
	$bb[]=$Line;
	if(enhay($obj0['tipo']['0']['href'],"[".$ii."]")){	$id=$Line;	}
	}
	//prin($linea);
	$obj0['tipo']['0']['href']=str_replace($aa,$bb,$obj0['tipo']['0']['href']);
	/*
	prin($obj0);
	prin($id);
	prin($urd);
	return '';
	*/

	global $objeto_tabla;
	foreach($obj0 as $obj2){
		foreach($obj2 as $obj){
			$datos_tabla=procesar_objeto_tabla($objeto_tabla[$obj['obj']]);

			$parte=between($obj['ltext'],"where","}");
			list($forei,$forein)=explode("=",$parte['1']);
			$where="where ".$datos_tabla['id']."='".$id."' ";
			$campS=array();
			foreach($datos_tabla['list'] as $lis){
				if(
					(in_array($lis['tipo'],array('inp','txt','html','hid','fch','fcr','img','com')) and
					($lis['campo']!=trim($forei)) and
					($lis['listable']=='1') and
					(!enhay($lis['label'],'descripci',1)) and
					(!enhay($lis['label'],'source',1)) and
					(!enhay($lis['label'],'url',1)) and
					//($lis['campo']!='id_grupo') and
					//($lis['campo']!='id_subgrupo') and
					1
					)
					){
					$campS[]=$lis['campo'];
					}
				}
			$classLineal=0;
			if(sizeof($campS)==1){
				if($objeto_tabla[$obj['obj']]['campos'][$campS[0]]['tipo']=='img'){ $classLineal=1; }
			}
			if(sizeof($campS)==2){
				if(
					$objeto_tabla[$obj['obj']]['campos'][$campS[0]]['tipo']=='img' and
					$objeto_tabla[$obj['obj']]['campos'][$campS[1]]['tipo']=='inp'
					){ $campTitu=$campS[1]; unset($campS[1]); $classLineal=1; }
				if(
					$objeto_tabla[$obj['obj']]['campos'][$campS[1]]['tipo']=='img' and
					$objeto_tabla[$obj['obj']]['campos'][$campS[0]]['tipo']=='inp'
					){ $campTitu=$campS[0]; unset($campS[0]); $classLineal=1; }
			}

			$campS2=$campS;
			$campS2=array_merge(array($datos_tabla['id']),$campS2,array($campTitu));
			if(!in_array($datos_tabla['fcr'],$campS2)){ $campS2=array_merge(array($datos_tabla['fcr']),$campS2); }

			foreach($campS2 as $ccc=>$cccc){ if(trim($cccc)==''){ unset($campS2[$ccc]); } }

			//$where="where ".$datos_tabla['foreig']."='".$id."' ";//anterior where


			$query_where=$where;
			$lineas=select($campS2,
							$datos_tabla['tabla'],
							$query_where,0);

			echo '<div class="itms '. ( ($urd=='1')?"first_linea ":"" ).' '. ( ($classLineal=='1')?"lineal":"" ).'" style="margin-right:-800px;">';


			$pluralIma=$objeto_tabla[$obj['obj']]['nombre_singular'];
			//prin($plural);
			/*
			$pluralIma=preg_replace("/fotos/i",'<img src="img/ico_pics.png" width=16 align=absmiddle>',$pluralIma);
			$pluralIma=preg_replace("/vista previa/i",'<img src="img/ico_preview.png" width=16 align=absmiddle>',$pluralIma);
			$pluralIma=preg_replace("/mensajes/i",'<img src="img/ico_email.png" width=16 align=absmiddle>',$pluralIma);
			$pluralIma=preg_replace("/alertas/i",'<img src="img/ico_alert.png" width=16 align=absmiddle>',$pluralIma);
			$pluralIma=preg_replace("/imprimir/i",'<img src="img/ico_print.png" width=16 align=absmiddle>',$pluralIma);
			*/
			/*
			echo '<div class="tite '. (((sizeof($lineas)>0) and (sizeof($campS)>1) )?'hid1':'') .'" >';
			echo "<a title='".sizeof($lineas)." ".$objeto_tabla[$obj['obj']]['nombre_plural']."' href='".str_replace("[id]",$id,$obj['href'])."'>".sizeof($lineas)." ".$pluralIma."</a>";
			echo '</div>';
			*/

			if(sizeof($lineas)>0 or 1){
			if(sizeof($campS)>1){
			echo '<div class="itm hitm hid2" >';
				foreach($campS as $cp=>$camP){

					echo '<div class="itd" '.(($objeto_tabla[$obj['obj']]['campos'][$camP]['width'])?'style="width:'.$objeto_tabla[$obj['obj']]['campos'][$camP]['width'].';"':'').' >';
					if($cp==0){
					echo "<a title='".sizeof($lineas)." ".$objeto_tabla[$obj['obj']]['nombre_plural']."' href='".str_replace("[id]",$id,$obj['href'])."'>ir a ".$pluralIma."</a>";
					} else {
					$label = ($objeto_tabla[$obj['obj']]['campos'][$camP]['label'])?strtoupper($objeto_tabla[$obj['obj']]['campos'][$camP]['label']):'&nbsp;';
					$label = str_replace(array('(',')'),array('<span style="display:none;">','</span>'),$label);
					echo $label;
					}
					echo '</div>';
				}
			echo '</div>';
			}

			echo '<ul class="hid2">';
			foreach($lineas as $linea){
				echo '<li class="itm">';
				foreach($campS as $camP){
					echo '<div class="itd" ';
					if($classLineal==0){ echo ($objeto_tabla[$obj['obj']]['campos'][$camP]['width'])?'style="width:'.$objeto_tabla[$obj['obj']]['campos'][$camP]['width'].';"':''; }
					echo ' >';
					switch($objeto_tabla[$obj['obj']]['campos'][$camP]['tipo']){
					case "img":
						$tbli=$objeto_tabla[$obj['obj']]['campos'][$camP];
						if($linea[$tbli['campo']]!=''){
						?><a <?php //echo "title=\"".$linea[$campTitu]."\"";?> href="<?php echo get_imagen($datos_tabla[$tbli['campo']]['carpeta'], $linea[$datos_tabla['fcr']],$linea[$tbli['campo']]);?>" rel="[images],noDesc" class="mb"><img <?php echo dimensionar_imagen($datos_tabla[$tbli['campo']]['carpeta'], $linea[$datos_tabla['fcr']],$linea[$tbli['campo']],$tbli['tamano_listado']);?> /></a><?php
						}
					break;
					case "com":
						$valoor=$objeto_tabla[$obj['obj']]['campos'][$camP]['opciones'][$linea[$camP]];
						list($valoor,$color)=explode("|",$valoor);
						$valoor=($valoor!='')?$valoor:"&nbsp;";
						switch($valoor){
							case "comentario":echo "&nbsp;<a title='comentario' class='ico_tack z ico_list'></a>"; break;
							case "soporte":echo "&nbsp;<a title='soporte' class='ico_clip z ico_list'></a>"; break;
							case "enviado":echo "&nbsp;<a title='enviado' class='ico_left z ico_list'></a>"; break;
							case "recibido":echo "&nbsp;<a title='recibido' class='ico_right z ico_list'></a>"; break;
							case "si":echo "&nbsp;<a title='si' class='ico_yes z ico_list'></a>"; break;
							case "no":echo "&nbsp;<a title='no' class='ico_no z ico_list'></a>"; break;
							default; echo "<span class='ico_opcion' style='color:white;background-color:".$color.";'>".$valoor."</span>"; break;
						}
					break;
					case "hid":
						list($primO,$tablaO)=explode("|",$objeto_tabla[$obj['obj']]['campos'][$camP]['opciones']);
						list($idO,$camposO)=explode(",",$primO);
						$camposOA=array();
						$camposOA=explode(";",$camposO);
						$bufy='';
						foreach($camposOA as $COA){
						$bufy.= select_dato($COA,$tablaO,"where ".$idO."='".$linea[$camP]."'")." ";
						}
						if($objeto_tabla[$obj['obj']]['campos'][$camP]['tip_foreig']=='1'){
						$adiv0='<a class="tipper" href="custom/'.$tablaO.'.php?i='.$linea[$camP].'" rel="{ajax:\'ajax_sql.php?v_t='.$tablaO.'&v_d='.$idO.'%3D'.$linea[$camP].'&f=get_quick\'}">';
						$adiv1='</a>';
						} else { $adiv0=''; $adiv1=''; }

						echo (trim($bufy)!='')?$adiv0.$bufy.$adiv1:'&nbsp;';
					break;
					case "fcr":	case "fch":
					$fech=fecha_formato($linea[$camP],($objeto_tabla[$obj['obj']]['campos'][$camP]['formato'])?$objeto_tabla[$obj['obj']]['campos'][$camP]['formato']:'0b');
					echo ($fech!='')?$fech:"&nbsp;";
					break;
					case "html":
					echo ($linea[$camP]!='')?"<div class='htmlenlista'>".stripslashes($linea[$camP])."</div>":"&nbsp;";
					/*break;
					echo ($linea[$camP]!='')?$linea[$camP]:"&nbsp;";*/
					break;
					case "txt":
					echo ($linea[$camP]!='')?nl2br($linea[$camP]):"&nbsp;";
					break;
					default:
					echo ($linea[$camP]!='')?$linea[$camP]:"&nbsp;";
					break;
					}
					echo '</div>';
				}
				echo '</li>';
			}
			echo '</ul>';
			echo "</div>";
			unset($campS);
			unset($campS2);
		}
		}
	}
}



function input_date_filtroST($id_input,$fromYear,$toYear,$filtro){

	//prin($filtro);
	global $FiL;

	$uno=explode("between",$filtro);
	$dos=explode("and",$uno[1]);
	$ff=explode("-",str_replace("'","",trim($dos['0'])));
	$tt=explode("-",str_replace("'","",trim($dos['1'])));
	//prin($ff);
	//prin($tt);
	$meses[1]="Ene";
	$meses[2]="Feb";
	$meses[3]="Mar";
	$meses[4]="Abr";
	$meses[5]="May";
	$meses[6]="Jun";
	$meses[7]="Jul";
	$meses[8]="Ago";
	$meses[9]="Set";
	$meses[10]="Oct";
	$meses[11]="Nov";
	$meses[12]="Dic";

	$html = "";
	$html .= "<span class='filfchspan'>Desde</span>";
	$html .= "<select id='from_".$id_input."_d' class=' ' onchange='fechaChangeFilterST(\"".$id_input."\")'>";
	$html .= "<option></option>";
	for($i=1; $i<=31;$i++){
	$html.="<option value='". ( ($i<10)?"0".$i:$i) ."' ".(($i==$ff['2']*1)?'selected':'').">".$i."</option>";
	}
	$html.= "</select>";
	$html.= "<select id='from_".$id_input."_m' class=' ' onchange='fechaChangeFilterST(\"".$id_input."\")'>";
	$html.= "<option></option>";
	for($i=1; $i<=12;$i++){
	$html.="<option value='". ( ($i<10)?"0".$i:$i) ."' ".(($i==$ff['1']*1)?'selected':'').">".$meses[$i]."</option>";
	}
	$html.= "</select>";
	$html.= "<select id='from_".$id_input."_a' class=' ' onchange='fechaChangeFilterST(\"".$id_input."\")'>";
	$html.= "<option></option>";
	for($i=$toYear; $i>=$fromYear;$i--){
	$html.="<option value='".$i."' ".(($i==$ff['0']*1)?'selected':'').">".$i."</option>";
	}
	$html.= "</select>";
	$html.= "<span class='filfchspan'>Hasta</span>";
	$html.= "<select id='to_".$id_input."_d' class=' ' onchange='fechaChangeFilterST(\"".$id_input."\")'>";
	$html.= "<option></option>";
	for($i=1; $i<=31;$i++){
	$html.="<option value='". ( ($i<10)?"0".$i:$i) ."' ".(($i==$tt['2']*1)?'selected':'').">".$i."</option>";
	}
	$html.= "</select>";
	$html.= "<select id='to_".$id_input."_m' class=' ' onchange='fechaChangeFilterST(\"".$id_input."\")'>";
	$html.= "<option></option>";
	for($i=1; $i<=12;$i++){
	$html.="<option value='". ( ($i<10)?"0".$i:$i) ."' ".(($i==$tt['1']*1)?'selected':'').">".$meses[$i]."</option>";
	}
	$html.= "</select>";
	$html.= "<select id='to_".$id_input."_a' class=' ' onchange='fechaChangeFilterST(\"".$id_input."\")'>";
	$html.= "<option></option>";
	for($i=$toYear; $i>=$fromYear;$i--){
	$html.="<option value='".$i."' ".(($i==$tt['0']*1)?'selected':'').">".$i."</option>";
	}
	$html.= "</select>";
	$html.= "<input id='filtr_".$id_input."' type='hidden' value='".(($FiL[$id_input])?urlencode($FiL[$id_input]):str_replace("fs_","",$id_input)."||")."'style='width:400px;' />";

	return $html;

}



function input_date_filtro($id_input,$fromYear,$toYear,$filtro){

	//prin($filtro);
	global $FiL;

	list($uno0,$ff,$tt)=explode("|",$filtro);
	/*
	$uno=explode("between",$filtro);
	$dos=explode("and",$uno[1]);
	*/
	$ff=explode("-",$ff);
	$tt=explode("-",$tt);
	/*
	prin($filtro);
	prin($ff);
	prin($tt);
	*/
	$meses[1]="Ene";
	$meses[2]="Feb";
	$meses[3]="Mar";
	$meses[4]="Abr";
	$meses[5]="May";
	$meses[6]="Jun";
	$meses[7]="Jul";
	$meses[8]="Ago";
	$meses[9]="Set";
	$meses[10]="Oct";
	$meses[11]="Nov";
	$meses[12]="Dic";

	$html = "";
	$html .= "<span class='filfchspan'>Desde</span>";
	$html .= "<select id='from_".$id_input."_d' class=' ' onchange='fechaChangeFilter(\"".$id_input."\")'>";
	$html .= "<option></option>";
	for($i=1; $i<=31;$i++){
	$html.="<option value='". ( ($i<10)?"0".$i:$i) ."' ".(($i==$ff['2']*1)?'selected':'').">".$i."</option>";
	}
	$html.= "</select>";
	$html.= "<select id='from_".$id_input."_m' class=' ' onchange='fechaChangeFilter(\"".$id_input."\")'>";
	$html.= "<option></option>";
	for($i=1; $i<=12;$i++){
	$html.="<option value='". ( ($i<10)?"0".$i:$i) ."' ".(($i==$ff['1']*1)?'selected':'').">".$meses[$i]."</option>";
	}
	$html.= "</select>";
	$html.= "<select id='from_".$id_input."_a' class=' ' onchange='fechaChangeFilter(\"".$id_input."\")'>";
	$html.= "<option></option>";
	for($i=$toYear; $i>=$fromYear;$i--){
	$html.="<option value='".$i."' ".(($i==$ff['0']*1)?'selected':'').">".$i."</option>";
	}
	$html.= "</select>";
	$html.= "<span class='filfchspan'>Hasta</span>";
	$html.= "<select id='to_".$id_input."_d' class=' ' onchange='fechaChangeFilter(\"".$id_input."\")'>";
	$html.= "<option></option>";
	for($i=1; $i<=31;$i++){
	$html.="<option value='". ( ($i<10)?"0".$i:$i) ."' ".(($i==$tt['2']*1)?'selected':'').">".$i."</option>";
	}
	$html.= "</select>";
	$html.= "<select id='to_".$id_input."_m' class=' ' onchange='fechaChangeFilter(\"".$id_input."\")'>";
	$html.= "<option></option>";
	for($i=1; $i<=12;$i++){
	$html.="<option value='". ( ($i<10)?"0".$i:$i) ."' ".(($i==$tt['1']*1)?'selected':'').">".$meses[$i]."</option>";
	}
	$html.= "</select>";
	$html.= "<select id='to_".$id_input."_a' class=' ' onchange='fechaChangeFilter(\"".$id_input."\")'>";
	$html.= "<option></option>";
	for($i=$toYear; $i>=$fromYear;$i--){
	$html.="<option value='".$i."' ".(($i==$tt['0']*1)?'selected':'').">".$i."</option>";
	}
	$html.= "</select>";
	$html.= "<input id='filtr_".$id_input."' type='hidden' style='width:500px;' value='".urlencode($FiL[$id_input])."' />";

	return $html;

}

function mooeditable_replace($html,$vars){
	if(is_array($vars)){
		foreach($vars as $VAR=>$VAL){
			$html=str_replace("[$VAR]",$VAL,$html);
		}
	}
	return $html;
}


class color {

    function hex2rgb($hexVal = "") {
        $hexVal = eregi_replace("[^a-fA-F0-9]", "", $hexVal);
        if (strlen($hexVal) != 6) { return "ERR: Incorrect colorcode, expecting 6 chars (a-f, 0-9)"; }
        $arrTmp = explode(" ", chunk_split($hexVal, 2, " "));
        $arrTmp = array_map("hexdec", $arrTmp);
        return array("red" => $arrTmp[0], "green" => $arrTmp[1], "blue" => $arrTmp[2]);
    }

    static function rgb2hex($arrColors = null) {
        if (!is_array($arrColors)) { return "ERR: Invalid input, expecting an array of colors"; }
        if (count($arrColors) < 3) { return "ERR: Invalid input, array too small (3)"; }

        array_splice($arrColors, 3);

        for ($x = 0; $x < count($arrColors); $x++) {
            if (strlen($arrColors[$x]) < 1) {
                return "ERR: One or more empty values found, expecting array with 3 values";
            }

            elseif (eregi("[^0-9]", $arrColors[$x])) {
                return "ERR: One or more non-numeric values found.";
            }

            else {
                if ((intval($arrColors[$x]) < 0) || (intval($arrColors[$x]) > 255)) {
                    return "ERR: Range mismatch in one or more values (0-255)";
                }

                else {
                    $arrColors[$x] = strtoupper(str_pad(dechex($arrColors[$x]), 2, 0, STR_PAD_LEFT));
                }
            }
        }

        return implode("", $arrColors);
    }

}

function fix_objeto($objeto_tabla){
	$objeto_tabla2=$objeto_tabla;
	foreach($objeto_tabla2 as $obj=>$props){
		if($props['calificacion'] and !isset($props['campos']['calificacion'])){
			$objeto_tabla2[$obj]['campos']['calificacion']=array('campo'=>'calificacion','tipo'=> 'cal');
		}
		if($props['web'] and !isset($props['campos']['web'])){
			$objeto_tabla2[$obj]['campos']['web']=array('campo'=>'web','tipo'=> 'web');
		}
		if($props['page'] and !isset($props['campos']['page'])){
			$objeto_tabla2[$obj]['campos']['page']=array('campo'=>'page','tipo'=> 'page');
		}
		if($props['user'] and !isset($props['campos']['user'])){
			$objeto_tabla2[$obj]['campos']['web']=array('campo'=>'user','tipo'=> 'user');
		}
		if($props['buscar'] and !isset($props['campos']['tags'])){
			$setTags=0;
			foreach($props['campos'] as $campus){ if($campus['tags']=='1'){ $setTags=1; continue; } }
			if($setTags){
				$objeto_tabla2[$obj]['campos']['tags']=array('campo'=>'tags','label'=> 'tags','tipo'=> 'txt','indicador'=>'1','fulltext'=>'1','autotags'=>'1');
			}
		}
	}
	return $objeto_tabla2;
}

function reorder_objeto($objeto_tabla ){

foreach($objeto_tabla as $to=>$ot){
	if($ot['grupo']!=''){
	$gOt[$ot['grupo']][]=array($to,$ot);
	} else {
	$gOt['general'][]=array($to,$ot);
	}
}

$FGR[0][]=$gOt['productos'];
$FGR[0][]=$gOt['ventas'];

$FGR[2][]=$gOt['marketing'];
$FGR[2][]=$gOt['contenidos'];
$FGR[2][]=$gOt['publicidad'];

$FGR[3][]=$gOt['formularios'];
$FGR[3][]=$gOt['boletin'];

$FGR[4][]=$gOt['sistema'];

//foreach($FGR as $GGR2){ foreach($GGR2 as $eac=>$GGR3){ $GgrupoS[]=$eac; } }
$GgrupoS=array('productos','ventas','marketing','contenidos','publicidad','formularios','boletin','sistema');
foreach($gOt as $gOtr1=>$gOtr2){
	if(!in_array($gOtr1,$GgrupoS)){
	$FGR[1][]=$gOtr2;
	}
}
unset($GgrupoS);

$FGR[11][]=$gOt['general'];



foreach($FGR as $GG){
foreach($GG as $GG2){
foreach($GG2 as $GG3){
	$GGRR2[$GG3[0]]=$GG3[1];
}
}
}
return $GGRR2;
}

function ArrayToList($Esquema){

	global $Vectores;

	function ArrayToListIter($arrar){
		global $Vectores;
		if(is_array($arrar)){
			foreach($arrar as $arra){
				if(is_array($arra)){
					ArrayToListIter($arra);
				} else {
					$Vectores[]=$arra;
				}
			}
		}
	}

	ArrayToListIter($Esquema);

	return $Vectores;

}
function getinfo($get,$file){
	global $objeto_tabla;
	global $_GET;
	list($fil,$les)=explode("?",$file);
	$oo=explode("/",$fil);
	list($name,$ext)=explode(".",end($oo));
	parse_url($get,$_GET);
	$PARAMS['this']=$PARAMS['conector']=$name;
	include($file);
	if(isset($OBJECT[$name])){ 	$ob="OBJECT";
	if($OBJECT[$name]['panel']){
	if(!is_array($OBJECT[$name]['panel'])){ $OBJECT[$name]['panel']=explode(",",$OBJECT[$name]['panel']);  }
	$pans=$OBJECT[$name]['panel'];
	}
	}
	if(isset($FORMULARIO[$name])){ $ob="FORMULARIO"; $OBJECT=$FORMULARIO;
	if($FORMULARIO[$name]['panel'] or $FORMULARIO[$name]['tabla']){
	$FORMULARIO[$name]['panel']=($FORMULARIO[$name]['panel'])?$FORMULARIO[$name]['panel']:$FORMULARIO[$name]['tabla'];
	if(!is_array($FORMULARIO[$name]['panel'])){ $FORMULARIO[$name]['panel']=explode(",",$FORMULARIO[$name]['panel']);  }
	$pans=$FORMULARIO[$name]['panel'];
	}
	}
	if(isset($LISTADO[$name])){ $ob="LISTADO"; $OBJECT=$LISTADO;
	if($LISTADO[$name]['panel']){
	if(!is_array($LISTADO[$name]['panel'])){ $LISTADO[$name]['panel']=explode(",",$LISTADO[$name]['panel']);  }
	$pans=$LISTADO[$name]['panel'];
	}
	}
	//prin($objeto_tabla);
	//prin($pans);
	foreach($pans as $r=>$pan){
		if(isset($objeto_tabla[$pan])){ $panss[]=$pan; }
		else {
		foreach($objeto_tabla as $rt=>$ttoo){ if($ttoo['tabla']==$pan){	$pans[$r]=$rt;
		$panss[]=$rt; //continue;
		} }
		}
	}

	foreach($pans as $r=>$pan){
		if(in_array($pan,$panss)){
		$objeto_panel=$objeto_tabla[$pan];
		//$objeto_panel_campos=array_keys($objeto_panel['campos']);
		foreach($objeto_panel['campos'] as $po=>$ppoo){
			if(!in_array($po,array('id','fecha_creacion','fecha_edicion','posicion','visibilidad','page','web','user','fecha','calificacion'))){
				$objeto_panel_campos[]=$po;
			}
		}

		if($OBJECT[$name]['campos']){
		$objeto_web=$OBJECT[$name];
		$objeto_web_campos=array_keys($objeto_web['campos']);
		$diff=array_diff($objeto_web_campos,$objeto_panel_campos);
		/*
		prin($objeto_web_campos);
		prin($objeto_panel_campos);
		prin($diff);
		*/
		/*
		if($_GET['id']!=''){
		prin($objeto_panel_campos);
		prin($objeto_web_campos);
		}*/
		/*
		$parafix=0;
		foreach($objeto_web_campos as $owc){
			if(!in_array($owc,$objeto_panel_campos)){ $parafix=1; continue;
			}
		}*/
		}
		if(sizeof($diff)>0){
		$pans[$r]='<span style="background-color:yellow;color:#000;">'.$pan.'</span><a href="maquina.php?accion=esquema&fix=1&var='.$ob.'&panel='.$pan.'&id='.urlencode($file).'">fix</a>';
		}else{
		$pans[$r]='<span style="background-color:green;color:#fff;">'.$pan.'</span>';
		}
		} else {
		$pans[$r]='<span style="background-color:red;color:#fff;">'.$pan.'</span><a href="maquina.php?accion=esquema&fix=1&var='.$ob.'&panel='.$pan.'&id='.urlencode($file).'">fix</a>';
		}
	}

	$pans=implode(", ",$pans);
	return array($ob,$pans);
}

function print_esquema($Esquema)
{
	//prin($Esquema);
    //echo '<div class="div_fila">';
    foreach($Esquema as $Linea){
        if(!is_array($Linea)){
        echo '<div class="div_fila">';
		echo "<b>".$Linea."</b>";
        echo '</div>';
        } else {
            $numCols=(100*(1/sizeof($Linea))) -2;
            echo '<div class="div_fila">';
            foreach($Linea as $ii=>$Line){
                echo '<div class="div_columna" style="width:'.$numCols.'%;">';
                    if(!is_array($Line)){
                    echo '<div class="div_fila">';
					echo "<b>".$Line."</b>";
                    echo '</div>';
                    } else {
                        foreach($Line as $Lin){
                            echo '<div class="div_fila">';
							//echo "<b>".$Lin."</b>";

							if(!is_array($Lin)){
							//echo '<div class="div_columna">';
							echo "<b>".$Lin."</b>";
							//echo '</div>';
							} else {
								$numColsx=(100*(1/sizeof($Lin))) -2;
								echo '<div class="div_fila">';
								foreach($Lin as $Lix){
									echo '<div class="div_columna" style="width:'.$numColsx.'%;">';

										if(!is_array($Lix)){
										echo '<div class="div_fila">';
										echo "<b>".$Lix."</b>";
										echo '</div>';
										} else {
											foreach($Lix as $Liy){
												echo '<div class="div_fila" >';
												echo "<b>".$Liy."</b>";
												echo '</div>';
											}
										}

									echo '</div>';
								}
					            echo '</div>';
							}

                            echo '</div>';
                        }
                    }
                echo '</div>';
            }
            echo '</div>';
            }
        }
    //echo '</div>';
    //echo '<div class="clean"></div>';

}

function PreProcessEstructura($Estructura){

	foreach($Estructura as $url=>$Estr){
		if(enhay($url,"{")){
			list($uno,$dos,$tres)=between($url,"{","}");
			$Dos=explode(",",$dos);
			foreach($Dos as $Do){
				$Estructura[trim($uno.$Do.$tres)]=$Estr;
			}
			unset($Estructura[$url]);
		}
	}

	foreach($Estructura as $url=>$Estr){
		parse_str($url,$u);
		if($u['modulo']=='items' and $u['acc']==''){
			$Estructura[$url."&acc=file"]=$Estr;
			$Estructura[$url."&acc=list"]=$Estr;
			unset($Estructura[$url]);
		}
	}

	function PPE($a,$b){
		if(enhay($b,"MAIN")){
		list($b,$b2)=explode("?",$b);
		$b3=($b2!='')?'?'.$b2:'';
		parse_str($a,$c);
		if($c['modulo']=='items'){ $file=$c['modulo']."/".$c['tab']."_".$c['acc'].".php"; }
		else { $file=$c['modulo']."/".$c['tab'].".php"; }
		} else { $file=$b; }
		return $file.$b3;
	}

	foreach($Estructura as $url=>$cero){
		foreach($cero as $kuno=>$uno){
			if(!is_array($uno)){ $EE[$url][$kuno]=PPE($url,$uno); } else {
			foreach($uno as $kdos=>$dos){
				if(!is_array($dos)){ $EE[$url][$kuno][$kdos]=PPE($url,$dos); } else {
				foreach($dos as $ktres=>$tres){
					if(!is_array($tres)){ $EE[$url][$kuno][$kdos][$ktres]=PPE($url,$tres); } else {
					foreach($tres as $kcuatro=>$cuatro){
						if(!is_array($cuatro)){ $EE[$url][$kuno][$kdos][$ktres][$kcuatro]=PPE($url,$cuatro); } else {
						foreach($cuatro as $kcinco=>$cinco){
							if(!is_array($cinco)){ $EE[$url][$kuno][$kdos][$ktres][$kcuatro][$kcinco]=PPE($url,$cinco); }
						}}
					}}
				}}
			}}
		}
	}

	return $EE;
}

function pre_procesar_objeto_tabla_0($me){

	global $_SESSION;
	global $tabla_sesion_datos;
	global $TIPO_USUARIO;
	global $_COOKIE;
	global $objeto_tabla;
	global $filtrar_web;
	global $filtrar_page;

	//prin($_COOKIE['admin'],$_SESSION['usuario_id'],$TIPO_USUARIO);
	$extra_filtro='';
	if($me['user']=='1'){
		if($_COOKIE['admin']!='1' and $_SESSION['usuario_id'] and $TIPO_USUARIO!='1'){
			if($tabla_sesion_datos){
				foreach($me['campos'] as $canps){
					if(enhay($canps['opciones'],$tabla_sesion_datos)){
						$id_campo_user_dato=$canps['campo'];
					}
				}
				if($id_campo_user_dato){
					$me['campos'][$id_campo_user_dato]['indicador']='1';
					$me['campos'][$id_campo_user_dato]['listable']='0';
					$me['campos'][$id_campo_user_dato]['tipo']='inp';
					$me['campos'][$id_campo_user_dato]['default']=$_SESSION['usuario_datos_id'];
					//$extra_filtro.=" and $id_campo_user_dato='".$_SESSION['usuario_datos_id']."' ";
				}
			}
			$me['campos']['user']['indicador']='1';
			$me['campos']['user']['listable']='0';
			$me['campos']['user']['tipo']='inp';
			$me['campos']['user']['default']=$_SESSION['usuario_id'];
			if($TIPO_USUARIO=='2'){
			$getchildren=getChildren($objeto_tabla,$tabla_sesion_datos,$_SESSION['usuario_datos_id']);
			$extra_filtro.=($getchildren)?" and user in (".$getchildren.") ":'';
			} else {
			$extra_filtro.=" and user='".$_SESSION['usuario_id']."' ";
			}
		}
	}
	if($me['page']=='1' and $_SESSION['page'] and $filtrar_page==1){
		$extra_filtro.=" and page='".$_SESSION['page']."' ";
		$me['campos']['page']['indicador']='1';
		$me['campos']['page']['listable']='0';
		$me['campos']['page']['tipo']='inp';
		$me['campos']['page']['default']=$_SESSION['page'];
	}
	if($me['web']=='1' and $_SESSION['web'] and $filtrar_web==1){
		$extra_filtro.=" and web='".$_SESSION['web']."' ";
		$me['campos']['web']['indicador']='1';
		$me['campos']['web']['listable']='0';
		$me['campos']['web']['tipo']='inp';
		$me['campos']['web']['default']=$_SESSION['web'];
	}
	return array($me,$extra_filtro);

}

function get_extra_filtro($item){
	$extra_filtro='';
	global $objeto_tabla;
	global $tabla_sesion_datos;
	global $_SESSION;
	global $TIPO_USUARIO;
	if($TIPO_USUARIO=='2'){
		$getchildren=getChildren($objeto_tabla,$tabla_sesion_datos,$_SESSION['usuario_datos_id']);
		list($uno,$tabli,$dos)=between($getchildren,'from','where');
		$tabli=trim($tabli);
		if($tabli==$item['tabla']){
			$extra_filtro.=($dos)?" and ".$dos:'';
			//$extra_filtro.=" and user in (".getChildren($objeto_tabla,$tabla_sesion_datos,$_SESSION['usuario_datos_id']).") ";
		}
	}
	if($extra_filtro=='' and $item['user']=='1' and $_COOKIE['admin']!='1' and $_SESSION['usuario_id'] and $TIPO_USUARIO!='1'){

		$extra_filtro.=" and user='".$_SESSION['usuario_id']."' ";
	}
	if($item['page']=='1' and $_SESSION['page']!=''){
		$extra_filtro.=" and page='".$_SESSION['page']."' ";
	}
	if($item['web']=='1' and $_SESSION['web']!=''){
		$extra_filtro.=" and web='".$_SESSION['web']."' ";
	}
	return $extra_filtro;

}

function get_extra_filtro_0($tabla){
	global $objeto_tabla;
	global $tabla_sesion_datos;
	global $_SESSION;
	global $TIPO_USUARIO;
	foreach($objeto_tabla as $ot){
		if($tabla==$ot['tabla']){
			$item=$ot;
		}
	}
	return get_extra_filtro($item);
}

function pre_procesar_tabla($objeto_tabla,$vars){

global $PERMISOS_USUARIO;

$objeto_tabla_original=$objeto_tabla;

global $_GET;
global $HAVE_MODULO_INDEPENDIENTE;
//prin($_COOKIE);
//prin($_SESSION);
//if(@$_COOKIE["admin"]=="1"){ return $objeto_tabla; }



global $filtrar_page;global $filtrar_page2;
//prin($_COOKIE);
//prin($_SESSION);
if($filtrar_page==1 or 1){

//prin($PERMISOS_USUARIO);


if($_SESSION['usuario_id']!='' or 1){
$ALL='';
foreach($objeto_tabla as $obj=>$ot){
$ALL.=$obj.",\n";
}


	global $this_me;
	$permisos=($PERMISOS_USUARIO?$PERMISOS_USUARIO:$ALL).",\n".((($_GET['conf']!='')?$this_me."?".$_GET['conf'].",\n":''));
	//echo "uno";
	//prin($_GET['conf']);
	//$fffilter="";
	//prin($_GET['filter']);
	//prin($permisos);
	//echo urlencode("alerta=".urlencode("alerta=1,2"));
	if(trim($permisos)=='' or trim($permisos)=='*'){
		return $objeto_tabla;
	} else {
	//prin($permisos);
	$permisos=str_replace("\n","",$permisos);
	$permisos=str_replace(",,",",",$permisos);
	$permisos=explode(",",$permisos);
	foreach($permisos as $permiso){
	list($objeto,$params)=explode("?",$permiso);
	$Permisos[]=$objeto;
	parse_str($params,$paras);
	//prin($paras);
	$paras2=array();
	foreach($paras as $prop=>$para){
		if(enhay($prop,"|")){
			list($campo,$campoprop)=explode("|",$prop);
			if(enhay($campo,".")){
				list($dad,$camp)=explode(".",$campo);
			} else {
				if(is_numeric($campo)){
					$dad='procesos'; $camp=$campo;
					//prin($campo);
				} else {
					$dad='campos';	$camp=$campo;
				}

			}
			$paras2[$dad][$camp][$campoprop]=$para;
		}
		else {	$paras2[$prop]=$para;	}
	}
	$Params[$objeto]=$paras2;
	}
	//prin($Permisos);
	//prin($Params);
	/*
	$otto=array();
	foreach($objeto_tabla as $obj=>$ot){
		if($ot['disabled']!='1'){ $otto[]=$obj;}
	}
	prin($otto);
	*/
	$ooii=array();
	$objeto_tabla2=$objeto_tabla_original;
	foreach($objeto_tabla_original as $obj=>$ot){
		if($ot['disabled']=='1'){ $objeto_tabla2[$obj]['disabled']=1; }
		else {
		if(in_array($obj,$Permisos)){
			$objeto_tabla2[$obj]['disabled']=0;
			if(!($objeto_tabla2[$obj]['page']=='1')){ $ooii[]=$obj; }
			if(sizeof($Params[$obj])>0){
				foreach($Params[$obj] as $var=>$val){
				if($var=='campos'){
				foreach($Params[$obj]['campos'] as $id_campo=>$campo){
					foreach($campo as $varc=>$valc){
					$objeto_tabla2[$obj]['campos'][$id_campo][$varc]=$valc;
					}
				}
				}elseif($var=='procesos'){
				foreach($Params[$obj]['procesos'] as $id_campo=>$campo){
					foreach($campo as $varc=>$valc){
					$objeto_tabla2[$obj]['procesos'][$id_campo][$varc]=$valc;
					}
				}
				} else {
					$objeto_tabla2[$obj][$var]=$val;
				}
				}
			}
		} else {
			$objeto_tabla2[$obj]['disabled']=1;
		}
		}
	}
	//prin($ooii);
	$HAVE_MODULO_INDEPENDIENTE=(sizeof($ooii)>0)?1:0;
	//return $objeto_tabla2;

	}

}

$objeto_tabla=$objeto_tabla2;
//prin($_SESSION);
foreach($objeto_tabla as $obj=>$ot){
	if($_SESSION['page']==''){
		if($objeto_tabla[$obj]['page']=='1'){	$objeto_tabla[$obj]['disabled']='1';	}
	}
	if($_SESSION['page']!=''){
		if($objeto_tabla[$obj]['page']!='1'){	$objeto_tabla[$obj]['disabled']='1';	}
	}
}
}

/*
foreach($objeto_tabla as $meit=>$item){
	if($item['disabled']!='1'){
		$otto[]=$meit;
	}
}
prin($otto);
*/

global $filtrar_web;global $filtrar_web2;
if($filtrar_web==1){
foreach($objeto_tabla as $obj=>$ot){
	if($_SESSION['web']==''){
		if($objeto_tabla[$obj]['web']=='1'){	$objeto_tabla[$obj]['disabled']='1';	}
	}
	if($_SESSION['web']!=''){
		if($objeto_tabla[$obj]['web']!='1'){	$objeto_tabla[$obj]['disabled']='1';	}
	}
}
}
/*
foreach($objeto_tabla as $oott){
if($oott['disabled']!=1){
prin($oott['me']);
}
}
*/
//prin($objeto_tabla['PRODUCTOS_GARANTIAS']['procesos']);

return $objeto_tabla;

}

function update_tags($objeto_tabla,$ID){
	//print_r($objeto_tabla);
	$datos_tabla = procesar_objeto_tabla($objeto_tabla);
	$tbl		=	$datos_tabla['tabla'];
	$tbcampos	=	$datos_tabla['form'];
	$id			=	$datos_tabla['id'];

	$ttbb=array();
	$ttbbauto='';
	foreach($objeto_tabla['campos'] as $tbcampA){
	if($tbcampA['tags']=='1'){
	$ttbb[]=$tbcampA['campo'];
	}
	if($tbcampA['autotags']=='1'){
	$ttbbauto=$tbcampA['campo'];
	}
	}
	//print_r($ttbb);
	if(sizeof($ttbb)==0 or $ttbbauto==''){ return; }
	//prin(3);
	$item= select_fila(
        $ttbb
        ,$tbl
        ,"where ".$id."='".$ID."' "
        ,0
        );
	$item2=array();
	foreach($item as $cam=>$ite){
			switch($objeto_tabla['campos'][$cam]['tipo']){
			case "hid":
				list($primO,$tablaO)=explode("|",$objeto_tabla['campos'][$cam]['opciones']);
				list($idO,$camposO)=explode(",",$primO);
				$camposOA=array();
				$camposOA=explode(";",$camposO);
				$bufy='';
				foreach($camposOA as $COA){
				$bufy.= select_dato($COA,$tablaO,"where ".$idO."='".$ite."'")." ";
				}
				$item2[$cam]=$bufy;
			break;
			default:
				$item2[$cam]=$ite;
			break;
			}

	}
	$item=$item2;
	update(array($ttbbauto=>strtolower(str_replace("  "," ",implode(" ",$item)))),$tbl,"where ".$id."='".$ID."' ",0);

}

function update_chains($objeto_tabla,$ID){
	//print_r($objeto_tabla);
	$datos_tabla = procesar_objeto_tabla($objeto_tabla);
	$tbl		=	$datos_tabla['tabla'];
	$tbcampos	=	$datos_tabla['form'];
	$id			=	$datos_tabla['id'];

	foreach($objeto_tabla['campos'] as $xamps){	$wamps[]=$xamps['campo'];	}
	$linea=fila($wamps,$tbl,"where ".$id."='".$ID."' ");
	$pdfrom=array();$pdto=array();
	foreach($linea as $var=>$val){
	$pdfrom[]="[$var]";
	$pdto[]=$val;
	}

	foreach($objeto_tabla['campos'] as $tbcampA){
	if($tbcampA['chain']!=''){
	list($campo,$tabla,$donde)=explode(",",$tbcampA['chain']);
	$updateArray[$tbcampA['campo']]=dato($campo,$tabla,str_replace($pdfrom,$pdto,$donde));
	}
	}
	update($updateArray,$tbl,"where ".$id."='".$ID."' ",0);

}

function update_syncs($objeto_tabla,$ID){
	//print_r($objeto_tabla);
	$datos_tabla = procesar_objeto_tabla($objeto_tabla);
	$tbl		=	$datos_tabla['tabla'];
	$tbcampos	=	$datos_tabla['form'];
	$id			=	$datos_tabla['id'];

	foreach($objeto_tabla['campos'] as $xamps){	$wamps[]=$xamps['campo'];	}
	$linea=fila($wamps,$tbl,"where ".$id."=".$ID." ",0);
	$pdfrom=array();$pdto=array();
	foreach($linea as $var=>$val){
	$pdfrom[]="[$var]";
	$pdto[]=$val;
	}
	//prin($pdfrom);
	//prin($pdto);
	foreach($objeto_tabla['campos'] as $tbcampA){
		if($tbcampA['sync']!=''){
			list($tabla,$variable,$valor,$match,$donde)=explode(",",$tbcampA['sync']);
				if($inser){	$yd=$in['id']; }
				else { $yd=str_replace($pdfrom,$pdto,$donde); }
				if(trim($yd)==''){
					$basecamps=array();
					$basecamps['visibilidad']='1';
					$basecamps[$variable]=str_replace($pdfrom,$pdto,$valor);
					$in=insert($basecamps,$tabla,0);
					update(array(str_replace(array("[","]"),'',$donde)=>$in['id']),$tbl,"where ".$id."='".$ID."' ",0);
					$inser=1;
				} else {
					update(array($variable=>str_replace($pdfrom,$pdto,$valor)),$tabla,"where ".$match."='".$yd."'",0);
				}
		}
	}

}


function query_filter($filter){
	parse_str($filter, $filterA);
	$AAFF=array();
	foreach($filterA as $FA=>$AF){

		if($AF!='' and trim($FA)!='orderby'){
			$aa=explode("|",$AF);
			if(sizeof($aa)==3){ $AAFF[]= " date(".$aa['0'].") between '".$aa['1']."' and '".$aa['2']."' "; }
			else {
			if(enhay($AF,"=")){
			list($aaa,$bbb)=explode("=",$AF);
			$bbbb=explode(",",$bbb);
			$bbbbb=array();
			foreach($bbbb as $b4){ $bbbbb[]="'$b4'"; }
			$AAFF[]=" $aaa in (". implode(",",$bbbbb) .") ";
			} else{
			$AAFF[]=" $AF ";
			}
			}
		}
	}
	//prin($AAFF);
	if(sizeof($AAFF)==0){
	$filter="1";
	}else{
	$filter=implode(" AND ",$AAFF);
	}
	return $filter;
}

function get_form($file,$var){
	global $_SESSION;
	global $SERVER;
	global $PARAMS;
	include(incluget($file));
	$vvar=$$var;
	$object=($vvar[$PARAMS['conector']]);
	return $object;
}


function web2panel($obj){
	$obj2=array();
	$obj2['label']=$obj['label'];
	$obj2['campo']=$obj['campo'][0];
	if(enhay($obj['validacion'],'required')){ $obj2['validacion']='1'; }
	if($obj['seccion'] or $obj['before']){ $obj2['legend']=($obj['seccion'])?$obj['seccion']:$obj['before']; }
	$obj2['derecha']='1';
	switch($obj['tipo']){
		case "input_multi_simple": case "multi_simple":
		case "textarea":case"input_textarea":
			$obj2['tipo']='txt';
		break;
		case "input_text":case"text":
		case "input_hidden":case"hidden":
			$obj2['tipo']='inp';
			$obj2['width']='100px';
			$obj2['style']='width:150px;';
		break;
		case"input_combo":case"combo":
			$obj2['tipo']='com';
			$obj2['opciones']=$obj['opciones'];
		break;
		case "input_radio":case"radio":
			$obj2['tipo']='com';
			$obj2['radio']='1';
			$obj2['opciones']=$obj['opciones'];
		break;
		case "input_check":case"check":
			$obj2['tipo']='com';
			$obj2['radio']='1';
			$obj2['opciones']=array('1'=>'si','0'=> 'no');
		break;
		case "input_fecha":case"fecha":
			$obj2['tipo']='fch';
			$obj2['formato']='7';
			$obj2['width']='300px';
			$obj2['style']='width:300px;';
		break;
		default:
			//$obj2=$obj; $nohay=1;
		break;
	}

	return $obj2;
}

if(!function_exists('json_encode')){

function json_encode($arr) {
    //if(function_exists('json_encode')) return json_encode($arr); //Lastest versions of PHP already has this functionality.
    $parts = array();
    $is_list = false;

    //Find out if the given array is a numerical array
    $keys = array_keys($arr);
    $max_length = count($arr)-1;
    if(($keys[0] == 0) and ($keys[$max_length] == $max_length)) {//See if the first key is 0 and last key is length - 1
        $is_list = true;
        for($i=0; $i<count($keys); $i++) { //See if each key correspondes to its position
            if($i != $keys[$i]) { //A key fails at position check.
                $is_list = false; //It is an associative array.
                break;
            }
        }
    }

    foreach($arr as $key=>$value) {
        if(is_array($value)) { //Custom handling for arrays
            if($is_list) $parts[] = json_encode($value); /* :RECURSION: */
            else $parts[] = '"' . $key . '":' . json_encode($value); /* :RECURSION: */
        } else {
            $str = '';
            if(!$is_list) $str = '"' . $key . '":';

            //Custom handling for multiple data types
            if(is_numeric($value)) $str .= $value; //Numbers
            elseif($value === false) $str .= 'false'; //The booleans
            elseif($value === true) $str .= 'true';
            else $str .= '"' . addslashes($value) . '"'; //All other things
            // :TODO: Is there any more datatype we should be in the lookout for? (Object?)

            $parts[] = $str;
        }
    }
    $json = implode(',',$parts);

    if($is_list) return '[' . $json . ']';//Return numerical JSON
    return '{' . $json . '}';//Return associative JSON
}

}

function getchildren($objeto_tabla,$tabla,$id){
foreach($objeto_tabla as $oott){
if($oott['archivo']==$tabla){
foreach($oott['campos'] as $camps){
if($camps['controles']!=''){
list($uno,$dos,$tres)=between($camps['controles'],"{","}");
$dos=str_replace("count(*)","id_sesion ",str_replace("[id]","'".$id."'",$dos));
return $dos;
}
}
}
}
}

function get_dims_crearforeig($aa=NULL){
	if($aa!=NULL){
	return "width:750,height:400";
	} else {
	return "width:900,height:530";
	}
}

function opciones_fechas($querie){

	global $FromYear,$ToYear,$Array_Meses,$FromMonth,$last,$first;
	//prin(array($FromYear,$ToYear));
	//$fechas=array();
	$fechas[]=array(
					'label'=>$querie['label'],
					'value'=>$first."|".$last
					);

	$fechas[]=array(
					'label'=>'Hoy',
					'value'=>date("Y-m-d")."|".date("Y-m-d")
					);

	$fechas[]=array(
					'label'=>'Ayer',
					'value'=>date("Y-m-d",strtotime("-1 days"))."|".date("Y-m-d",strtotime("-1 days"))
					);

	$fechas[]=array(
					'label'=>'Esta semana',
					'value'=>date("Y-m-d",strtotime("-".(date("N")-1)." days"))."|".date("Y-m-d",strtotime("+".( 7 - date("N"))." days"))
					);

//	prin($FromYear.$FromMonth);
	$yy=date("Y");$mm=date("m");
	for($i=0;$i<12+date("m");$i++){
	if($mm==0){ $yy=$yy-1; $mm=12; }
	if(1*($yy.sprintf("%02d",$mm))>=1*($FromYear.$FromMonth)){
	$ym[]="$yy-".sprintf("%02d",$mm);
	}
	$mm=$mm-1;
	}

	foreach($ym as $my=>$mmy){
	list($mmy1,$mmy2)=explode("-",$mmy);
	//$tt=date("t",date($mmy."-01"));

	$lm=array('1'=>'31','28','31','30','31','30','31','31','30','31','30','31');
	if($mmy1%4==0){ $lm['2']=29; }

	$quer2=date($mmy."-01")."|".date($mmy."-".$lm[$mmy2*1]);

	list($yeamy,$monmy)=explode("-",$mmy);
	$mos=$Array_Meses[$monmy*1]; $nmons=strlen($mos);
	$mmyy=ucfirst($mos).str_repeat("&nbsp;",9-$nmons);
	$mmyy.=" ".$yeamy;

	if($yeamy!=$lastyeamy){
		$LY[]=$yeamy;
		$lastyeamy=$yeamy;
		$fechas[]=array(
						'label'=>$yeamy.(($yeamy==date("Y"))?" Este Año":""),
						'value'=>date($yeamy."-01-01")."|".date($yeamy."-12-31"),
						'class'=>'navy bold'
						);

	}

	$fechas[]=array(
					'label'=>"&nbsp;&nbsp;".$mmyy.(($mmy==date("Y-m"))?" Este Mes":""),
					'value'=>$quer2,
					'class'=>'navy'
					);

	}

	for($ii=$ToYear;$ii>=$FromYear;$ii--){
	if(!in_array($ii,$LY)){

	$fechas[]=array(
					'label'=>$ii.(($ii==date("Y"))?" Este Año":""),
					'value'=>date($ii."-01-01")."|".date($ii."-12-31"),
					'class'=>'red'
					);

	}
	}
	//prin($fechas);
	return $fechas;

	}


	function crear_intervalos($tipo,$from,$to){

		$I = array();
		if($tipo=='D'){
			$from2=$from;
			$to2=$to;

			$start=$from2;
			$end=$start;
			$I[]="$start";
			while($to2!=$end){
			$start=nextDay($start);
			$end=$start;
			$I[]="$start";
			}
		}
		if($tipo=='M'){
			$from2=getPrimerDiaMes($from);
			$to2=getUltimoDiaMes($to);

			$start=$from2;
			$end=getUltimoDiaMes($start);
			$I[]="$start|$end";
			while($to2!=$end){
			$start=nextMonth($start);
			$end=getUltimoDiaMes($start);
			$I[]="$start|$end";
			}
			//prin($I); exit();
		}
		if($tipo=='A'){
			$from2=getPrimerDiaAnio($from);
			$to2=getUltimoDiaAnio($to);

			$start=$from2;
			$end=getUltimoDiaAnio($start);
			$I[]="$start|$end";
			while($to2!=$end){
			$start=nextYear($start);
			$end=getUltimoDiaAnio($start);
			$I[]="$start|$end";
			}
		}
		//prin($I);
		return $I;
	}
	function nextDay($date){
		$d = new DateTime($date);
		$d->modify( '+1 day' );
		return $d->format( 'Y-m-d' );
	}
	function nextMonth($date){
	$aa=strtotime($date);
	$aa=strtotime("+1 month",$aa);
	$aa=strtotime(date('Y-m-01',$aa));
	return date('Y-m-d',$aa);
	}
	function nextYear($date){
		$d = new DateTime($date);
		$d->modify( 'first day of next year' );
		return $d->format( 'Y-m-d' );
	}
	/*
	function Difer($from,$to){
	$datetime1 = strtotime($from);
	$datetime2 = strtotime($to);
	$intervalo = $datetime1->diff($datetime2);
	$rango = $intervalo->format('%R%a');
	$rango=$rango*1 + 1;
	return $rango;
	}
	*/
	function Difer2($dt1,$dt2){

		$y1 = substr($dt1,0,4);
		$m1 = substr($dt1,5,2);
		$d1 = substr($dt1,8,2);

		$y2 = substr($dt2,0,4);
		$m2 = substr($dt2,5,2);
		$d2 = substr($dt2,8,2);

		$r1=date('U',mktime(0,0,0,$m1,$d1,$y1));
		$r2=date('U',mktime(0,0,0,$m2,$d2,$y2));

		return (($r2-$r1)/(60*60*24))+1;

	}


	function getPrimerDiaMes($fecha){
	return substr($fecha,0,7)."-01";
	}

	function getUltimoDiaMes($fecha){
	$aa=strtotime($fecha);
	$aa=strtotime("+1 month",$aa);
	$aa=strtotime(date('Y-m-01',$aa));
	$aa=strtotime("-1 day",$aa);
	return date('Y-m-d',$aa);
	}

	function getPrimerDiaAnio($fecha){
	return substr($fecha,0,4)."-01-01";
	}

	function getUltimoDiaAnio($fecha){
	return substr($fecha,0,4)."-12-31";
	}
	function fixyfecha($fecha){
	$lm=array('1'=>'31','28','31','30','31','30','31','31','30','31','30','31');
	if($year%4==0){ $lm['2']=29; }

	$year=substr($fecha,0,4);
	$mes=substr($fecha,5,2);
	$dia=substr($fecha,8,2);
	if($dia>$lm[$mes*1]){ $dia=$lm[$mes*1]; }
	return $year."-".$mes."-".$dia;

	}

function procesar_lives($lives,$this){
$livesA=explode(";",$lives);
//prin($livesA);
foreach($livesA as $live){
list($input,$string)=explode("=",$live);

$eee=explode("[",$input);
foreach($eee as $ee){
if(enhay($ee,"]")){
list($var,$resto)=explode("]",$ee);
$vars[]=$var;
}
}
foreach($vars as $Var){
$input=str_replace("[$Var]","\$('in_".$Var."').value",$input);
}

$eee=explode("[",$string);
foreach($eee as $ee){
if(enhay($ee,"]")){
list($var,$resto)=explode("]",$ee);
$vars[]=$var;
}
}
foreach($vars as $Var){
$string=str_replace("[$Var]","\$v('in_".$Var."')",$string);
}

if(trim($input)=='' or trim($string)==''){ $Live[]=''; }
else { $Live[]=$input."=".$string.";"; }

}
return implode("",$Live);

}

function procesar_loads($string,$this){
if($string[strlen($string)-1]=='='){
$string=$string."'+\$v('in_".$this."')+'";
} else {
$eee=explode("[",$string);
foreach($eee as $ee){
if(enhay($ee,"]")){
list($var,$resto)=explode("]",$ee);
$vars[]=$var;
}
}
foreach($vars as $Var){
$string=str_replace("[$Var]","'+\$v('in_".$Var."')+'",$string);
}
}
return $string;
}
function procesar_loads2($string,$this){
//return $string;
if($string[strlen($string)-1]=='='){
$string=$string."'+json.".$this."+'";
} else {
$eee=explode("[",$string);
foreach($eee as $ee){
if(enhay($ee,"]")){
list($var,$resto)=explode("]",$ee);
$vars[]=$var;
}
}
foreach($vars as $Var){
$string=str_replace("[$Var]","'+json.".$Var."+'",$string);
}
}
return $string;
}
function procesproces($objj,$conf=NULL){
	//$conf='0|disabled=1&1|disabled=0';
	if($conf){
		parse_str($conf,$paras);
		//prin($paras);
		$paras2=array();
		foreach($paras as $prop=>$para){
			if(enhay($prop,"|")){
				list($campo,$campoprop)=explode("|",$prop);
				if(enhay($campo,".")){
					list($dad,$camp)=explode(".",$campo);
				} else {
					if(is_numeric($campo)){
						$dad='procesos'; $camp=$campo;
						//prin($campo);
					} else {
						$dad='campos';	$camp=$campo;
					}
				}
				$paras2[$dad][$camp][$campoprop]=$para;
			}
			else {	$paras2[$prop]=$para;	}
		}
		//$Params[$objeto]=$paras2;



		//if(!($objeto_tabla2[$obj]['page']=='1')){ $ooii[]=$obj; }
		//$objj;
		//if(sizeof($paras2)>0){
			foreach($paras2 as $var=>$val){
			if($var=='campos'){
			foreach($paras2['campos'] as $id_campo=>$campo){
				foreach($campo as $varc=>$valc){
				$objj['campos'][$id_campo][$varc]=$valc;
				}
			}
			}elseif($var=='procesos'){
			foreach($paras2['procesos'] as $id_campo=>$campo){
				foreach($campo as $varc=>$valc){
				$objj['procesos'][$id_campo][$varc]=$valc;
				}
			}
			} else {
				$objj[$var]=$val;
			}
			}
		//}


	}

	//prin($paras2);

return $objj;
}

function D3($number){

 return round($number,3);

}
?>