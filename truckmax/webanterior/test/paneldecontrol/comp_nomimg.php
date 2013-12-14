<?
class comp_nomimg {
	function creaNombre($nomQuery,$num_foto) {
	//$nombre_img7=1;
	//$num_foto=7;
	$k=0;
	$nombre_img="";
		for($k;$k<$num_foto;$k++){
		if($nombre_img==""){
		$nombre_img=$nomQuery;
		}else{	
		$nombre_img=$nombre_img."-".$nomQuery;
		}
			//echo "k:".$k." nombre:".$nombre_img."<br>";
		}
		return $nombre_img;
}

}
?>
