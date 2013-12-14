<?php

echo "Reporte de Jefe de Ventas<br>";

$ordby='id_usuario';




if($date!=''){
	$where="where visibilidad!=0 and date($date) between '$from' and '$to'";
} else {
	$where="where visibilidad!=0 ";
}

//prin("$from,$to");
//exit();
$bisi = (substr($to,0,4)%4==0)?1:0;
//echo "1";
$rango=Difer2($from,$to);

$fromY=substr($from,0,4);
$toY=substr($to,0,4);

$fromM=substr($from,5,2);
$toM=substr($to,5,2);

if($rango<=30){
	$op=array('D'); //1o2
} elseif($rango>30 and $rango<=90){
	$op=array('D','M'); //2,3,4
} elseif($rango>90 and ( ($rango<=366 and $bisi=1) or ($rango<=365 and $bisi=0) ) ){
	$op=array('M','D'); //2,3,4
} elseif($rango>365){
	$op=array('A','M'); //2,3,4
}

//var_dump($op);

$tipo=$op['0'];
//prin($tipo);
$intervalos=crear_intervalos($tipo,$from,$to);

$VV=array();
$data = array();

//var_dump($intervalos); exit();

$usuarios2=select("id,nombre,apellidos","usuarios2","where 1");
foreach($usuarios2 as $usu){
	$USU2[$usu['id']]=$usu['nombre']." ".$usu['apellidos'];
}
//var_dump($USU2);

$usuarios=select("id,nombre,apellidos,id_jefe","usuarios","where 1 order by id_jefe");
foreach($usuarios as $usu){
	$USU[$usu['id']]=$usu['nombre']." ".$usu['apellidos'];
	$ID_USU2[$usu['id']]=$usu['id_jefe'];
}
//var_dump($usuarios); exit();


foreach($intervalos as $vv){


	/*
	if($tipo=='D'){
		$data[]=$VVV['v']=contar($datos_tabla['tabla'],"where visibilidad!=0 and date($date)='$vv'",0)*1;
	} else {
		$data[]=$VVV['v']=contar($datos_tabla['tabla'],"where visibilidad!=0 and date($date) between '".str_replace("|","' and '",$vv)."'")*1;
	}
	*/
	//$label

	if($tipo=='D')
	{

		$llll=select(
					"$ordby as nombre, count(*) as total,id_jefe",
					$datos_tabla['tabla'],
					"where visibilidad!=0 and date($date)='$vv'
					group by ".$ordby." order by ".$ordby." desc
					",
					0);

		//foreach($usuarios as $u) $line[$u['id']][$vv]='';

		foreach($llll as $lll)
		{
			$line[$lll['id_jefe']][$lll['nombre']][$vv]=$lll['total'];
		}

		//$data[]=$VVV['v']=$linea;

	} else {

		$llll=select(
					"$ordby as nombre, count(*) as total,id_jefe",
					$datos_tabla['tabla'],
					"where visibilidad!=0 and date($date) between '".str_replace("|","' and '",$vv)."'
					group by ".$ordby." order by ".$ordby." desc
					",
					0);

		//foreach($usuarios as $u)	$line[$u['id']][$vv]=0;

		foreach($llll as $lll)
		{
			$line[$lll['id_jefe']][$lll['nombre']][$vv]=$lll['total'];
		}

		//$data[]=$VVV['v']=$linea;

	}



	if($tipo=='D'){
		if($fromM==$toM){
			$LLL[]=substr($vv,8,2);
		} else {
			$LLL[]=substr($vv,8,2)." ".substr($Array_Meses[substr($vv,5,2)*1],0,3);
		}
	}elseif($tipo=='M'){
		if($fromY==$toY){
			$LLL[]=substr($Array_Meses[substr($vv,5,2)*1],0,3);
		} else {
			$LLL[]=substr($Array_Meses[substr($vv,5,2)*1],0,3)." ".substr($vv,0,4);
		}
	}elseif($tipo=='A'){
		$LLL[]=substr($vv,0,4);
	}
	//$VV[]=$VVV; unset($VVV);


}

//var_dump($line);

//exit();

$HEIGHT = (1.1)*max($data);
$HEIGHT = ($HEIGHT==0)?10:$HEIGHT;
$STEP = ceil($HEIGHT/10);

//prin($VV);





$ht='<table class=reporte>';

	$ht.='<tr>';
	$ht.='<th class=nombre>';
	$ht.='Jefe';
	$ht.='</th>';
	$ht.='<th class=nombre>';
	$ht.='Vendedor';
	$ht.='</th>';
	foreach($intervalos as $ii=>$la){
		$ht.='<th class=valor>';
		$ht.=$LLL[$ii];
		$ht.='</th>';
	}
	$ht.='<th class=valor>';
	$ht.='N';
	$ht.='</th>';
	$ht.='<th class=valor>';
	$ht.='Total';
	$ht.='</th>';
	$ht.='<th class=valor>';
	$ht.='Prom Día/Vend';
	$ht.='</th>';
	$ht.='</tr>';
//var_dump($line);
$ry=0;
foreach($line as $iusu2=>$lin2){
	foreach($lin2 as $iusu=>$lin){
	if(trim($USU[$iusu])=='') continue;
	$ht.='<tr>';
	$ht.='<td class=nombre>';
	$ht.=$USU2[$iusu2];
	$ht.='</td>';
	$ht.='<td class=nombre>';
	$ht.=$USU[$iusu];
	$ht.='</td>';
	foreach($intervalos as $ii=>$la){
	//foreach($lin as $li){
	$ht.='<td class=valor>';
	$ht.=$line[$iusu2][$iusu][$la];
	//$ht.=$ii;
	$ht.='</td>';
	$ff=$ff+$line[$iusu2][$iusu][$la];
	}
	$ht.='<td class=valor>';
	$ht.=$rango;
	$ht.='</td>';
	$ht.='<td class=valor>';
	$ht.=$ff;
	$ht.='</td>';
	$ht.='<td class=valor>';
	$ht.=round($ff/$rango,2);

	$ht.='</td>';

	$ht.='</tr>';
	}
}
$ht.='</table>';
echo $ht;

