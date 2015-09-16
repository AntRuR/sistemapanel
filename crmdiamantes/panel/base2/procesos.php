<?php //á
?><div style="clear:left;">Procesos</div><?php

include("lib/webutil.php");
require_once('lib/simple_html_dom.php');
chdir("base2/procesos");

set_time_limit(0);
//delete("productos_items_items","where id>");


$vins[]="LVBV6PEB3BN091801";
$vins[]="LCR6U311XCX615494";
$vins[]="LVAV2JBB5CN011207";
$vins[]="LVBV5PDC5CN019058";
$vins[]="LHBPFPUS5CN206564";
$vins[]="LHBP41TR4CN207481";
$vins[]="LHBPF1US2CN205627";
$vins[]="LHBPA1UR3CN207494";
$vins[]="LJ16AE4CXC2008717";
$vins[]="LHBPA1UR7CN207496";
$vins[]="LHBP41TR1CN207485";
$vins[]="LVAV2JBB9CN011582";
$vins[]="LVAV2JBB3CN011593";
$vins[]="LVAV2JBB0CN011597";
$vins[]="LCR6U3113CX616048";
$vins[]="LHBPD1US2CN205553";
$vins[]="LJ16AE4CXC2008720";
$vins[]="LHBP41TR8CN207483";
$vins[]="LPBMBDTE3CN507064";
$vins[]="LVAV2JBB9CN011596";
$vins[]="LPBMBDTE9CN507473";
$vins[]="LPBMBDTEXCN507479";
$vins[]="LHBPFPUS8BN214866";
$vins[]="LPBMBDTE8CN507500";
$vins[]="LHBPA1UR4CN205530";
$vins[]="LVBVCJEA6BN012313";
$vins[]="MHKG2CN20CK000714";
$vins[]="JDAJ210G0C3001221";
$vins[]="MHKG2CN20CK000734";
$vins[]="MHKG2CN20CK000751";
$vins[]="JDAJ200G0C3000186";
$vins[]="MHKG2CP40CK003913";
$vins[]="JDAJ210G0C3001340";
$vins[]="LPBMBDTE6CN507088";
$vins[]="LVAV2JBB7CN010432";
$vins[]="LPBMBDTE5CN507468";
$vins[]="LCR6U311XCX615494";
$vins[]="LCR6U311XCX615382";
$vins[]="LPBMBDTEXCN507143";
$vins[]="LCR6U3112CX615456";
$vins[]="LCR6U3116CX623916";
$vins[]="LCR6U311XCX623904";
$vins[]="LCR6U3115CX616066";
$vins[]="LCR6U3119CX616118";
$vins[]="LCR6U3115CX615371";
$vins[]="LCR6U3111CX623919";
$vins[]="LHBPFPUS2CN206568";
$vins[]="LVBV6PEB5CN019869";
$vins[]="LVAV2JBB4CN010260";
$vins[]="LHBP41TR5CN205609";
$vins[]="LCR6U3111CX616033";
$vins[]="LCR6U3117CX615405";
$vins[]="LHBP41TR3CN206497";
$vins[]="LCR6U3117CX615436";
$vins[]="LCR6U3119CX615468";
$vins[]="LCR6U3117CX615498";
$vins[]="LHBPA1UR2CN206529";
$vins[]="LVAV2JBBXCN010487";
$vins[]="LCR5U3111CX626122";
$vins[]="LVBV3PBB6CN011244";
$vins[]="LPBMBDTE5CN507115";
$vins[]="LPBMBDTE8CN507139";
$vins[]="LPBMBDTE3CN507078";
$vins[]="LCR6U3114CX615409";
$vins[]="LVAV2JBB6CN011300";
$vins[]="LCR6U3114CX615359";
$vins[]="LVAV2JBB2CN011309";
$vins[]="LVAV2JBB2CN010273";
$vins[]="LVAV2JBB1CN011303";
$vins[]="JDAJ210G0C1126942";
$vins[]="LHBPD1US9CN206540";
$vins[]="LHBPA1UR0CN207520";
$vins[]="LHBP41TR6CN207482";
$vins[]="LHBPFPUS1CN206559";
$vins[]="LCR6U3114CX615460";
$vins[]="LVAV2JBB9CN010495";
$vins[]="LPBMBDTE5CN507471";
$vins[]="LVAV2JBB5CN010493";
$vins[]="LCR6U3113CX615367";
$vins[]="LVAV2JBB8CN010259";
$vins[]="LCR6U3110CX615505";
$vins[]="LCR6U3110CX623913";

echo 'hey<table>';
foreach($vins as $vin){
	$itit=fila("id,id_status,vin","productos_items_items","where vin='".$vin."'",1);
	prin($itit);
	echo '<tr><td>'.$itit['vin'].'</td><td>'.$itit['id_status'].'</td></tr>';

}
echo '</table>';

// $users = select("id","usuarios","where status='1'");

// prin($users);



//include("updates.php");
/*

require_once 'lib/PHPExcel.php';
require_once 'lib/PHPExcel/IOFactory.php';

$file='base2/prueba.xls';

$objReader = PHPExcel_IOFactory::createReader('Excel5');

$objReader->setReadDataOnly(true);

$objPHPExcel = $objReader->load($file);

$sheets=$objPHPExcel->getSheetNames();

foreach($sheets as $sheet){

	if($sheet){

		$objWorksheet = $objPHPExcel->getSheetByName($sheet);
		$highestRow = $objWorksheet->getHighestRow();
		$highestColumn = $objWorksheet->getHighestColumn();
		$state = $objWorksheet->getSheetState();
		if($state=='visible' and $highestRow>1){
			$Sheets[]=array(
				 'name'=>$Marcas[trim($sheet)]
				,'rows'=>$highestRow
				,'colums'=>$highestColumn
				,'sheet'=>$objWorksheet
			);
		}
	}

}

prin($Sheets);
*/

?>