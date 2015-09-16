<?php //á
	if(TT=="productos_ventas"){
		if(SS=="insert"){
			//
		}
		if(SS=="update"){
			//
		}
		if(SS=="delete"){
			//
		}
	}
	if(TT=="productos_ventas_documentos"){
		if(SS=="insert"){
			$saldo=dato("pvfinal","productos_ventas","where id=".LL["id_grupo"],0);
			//$saldo=0;
			$docs=select("recibido,id",TT,"where id=".LL["id_grupo"],0);
			foreach($docs as $doc){
				$saldo=$saldo-$doc['recibido'];
				update(array("saldo"=>$saldo),TT,"where id=".LL["id"],0);	
			}
			//update(array("id_status"=>"2"),"productos_items_items","where id=".LL["id_item_item"],0);	
		}
		if(SS=="update"){
			//include("base2/update_ventas.php");
		}
		if(SS=="delete"){
			//update(array("id_status"=>"1"),"productos_items_items","where id=".LL["id_item_item"],0);	
		}
	}	
?>