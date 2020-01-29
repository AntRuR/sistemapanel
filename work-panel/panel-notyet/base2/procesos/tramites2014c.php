<?php //á

if(!function_exists('str_getcsv2')) {
    function str_getcsv2($input, $delimiter = ',', $enclosure = '"') {

        if( ! preg_match("/[$enclosure]/", $input) ) {
          return (array)preg_replace(array("/^\\s*/", "/\\s*$/"), '', explode($delimiter, $input));
        }

        $token = "##"; $token2 = "::";
        //alternate tokens "\034\034", "\035\035", "%%";
        $t1 = preg_replace(array("/\\\[$enclosure]/", "/$enclosure{2}/",
             "/[$enclosure]\\s*[$delimiter]\\s*[$enclosure]\\s*/", "/\\s*[$enclosure]\\s*/"),
             array($token2, $token2, $token, $token), trim(trim(trim($input), $enclosure)));

        $a = explode($token, $t1);
        foreach($a as $k=>$v) {
            if ( preg_match("/^{$delimiter}/", $v) || preg_match("/{$delimiter}$/", $v) ) {
                $a[$k] = trim($v, $delimiter); $a[$k] = preg_replace("/$delimiter/", "$token", $a[$k]); }
        }
        $a = explode($token, implode($token, $a));
        return (array)preg_replace(array("/^\\s/", "/\\s$/", "/$token2/"), array('', '', $enclosure), $a);

    }
}

// $documentos=select("id,import","productos_documentos","where id>1620 and import is not null",0);

// foreach($documentos as $import){

//     $csv=str_getcsv2($import['import']);
//     update(array('ficha_sunarp'=>$csv['2']),"productos_documentos","where id=".$import['id'],1);

// }


$importaciones=select("id,import","productos_items_items","where import is not null",0);
// echo sizeof($importaciones);
// exit();
// prin($importaciones);

foreach($importaciones as $import){

    $csv=str_getcsv2($import['import']);
    // prin($csv);
    update(array('numpoliza'=>$csv['7']),"productos_items_items","where id=".$import['id'],1);

}


exit();