<?php

// include $file_include.".php";

// if(0){

    $dir_cache='cache';

    if(!file_exists($dir_cache)) 
        mkdir($dir_cache, 0700);

    $file_cache=$dir_cache."/".$file_include.".php";

    if(!file_exists($file_cache)){
        
        ob_start();

        include $file_include.".php";

        $fp = fopen($file_cache, 'w');
        fwrite($fp, ob_get_contents());
        fclose($fp);
        ob_end_flush();

    }

    include $file_cache;

    unset($file_cache);
    unset($dir_cache);
    unset($fp);

// }



