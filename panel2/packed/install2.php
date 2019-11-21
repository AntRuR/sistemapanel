<?php
chdir("../");
echo getcwd();
echo "<pre>";
echo shell_exec("tar -xvf packed.tar"); 
echo shell_exec("ls"); 
echo "</pre>";
chdir("www");
/*
chmodr("www/",755,644);

function chmodr($path, $dirmode, $filemode) { 
    if (!is_dir($path)) 
        return chmod($path, $filemode); 

	chmod($path, $dirmode);
    $dh = opendir($path); 
    while (($file = readdir($dh)) !== false) { 
        if($file != '.' && $file != '..') { 
            $fullpath = $path.'/'.$file; 
            if(is_link($fullpath)) 
                return FALSE; 
            elseif(!is_dir($fullpath) && !chmod($fullpath, $filemode)) 
                    return FALSE; 
            elseif(!chmodr($fullpath, $filemode)) 
                return FALSE; 
        } 
    } 

    closedir($dh); 

    if(chmod($path, $filemode)) 
        return TRUE; 
    else 
        return FALSE; 
}
*/
?>