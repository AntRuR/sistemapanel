<?php  

// if($_GET['a']=='1'){
// echo '</div><div>';

$usuarios=select("id,id_sesion,status,usuarios_acceso_nombre","usuarios","where 1",0);

foreach($usuarios as $usu){
	if($usu['status']=='1'){ $stado='1'; }
	elseif($usu['status']=='2'){ $stado='0'; }
	update(['visibilidad'=>$stado],"usuarios_acceso","where id=".$usu['id_sesion'],0);
}

// }
// 