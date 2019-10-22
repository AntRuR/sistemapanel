<?php



foreach($tblistado as $tbli){

    if($tbli['tipo']=='html'){ $needs['html']=1; }
    if($tbli['cuantity']=='1'){ $hascuantity=1; $cuantities[]=$tbli['campo']; }

}

if($hascuantity==1 and $lineassize>1){

    echo "<table class='tblcalculo'>";
    echo "<tr><td></td><td class=nombre>m�nimo</td><td class=nombre>m�ximo</td><td class=nombre>media</td></tr>";
    foreach($cuantities as $cutt){

        echo "<tr><td class=nombre>$cutt</td>";
        echo "<td class=valor>";
        $valor = dato("min($cutt)",$tbl,"where 1 $EXTRA_FILTRO $busqueda_query ".$datos_tabla['where_id'],0);
        echo intval($valor*100)/100;
        echo "</td>";
        echo "<td class=valor>";
        $valor = dato("max($cutt)",$tbl,"where 1 $EXTRA_FILTRO $busqueda_query ".$datos_tabla['where_id'],0);
        echo intval($valor*100)/100;
        echo "</td>";
        echo "<td class=valor>";
        $valor = dato("avg($cutt)",$tbl,"where 1 $EXTRA_FILTRO $busqueda_query ".$datos_tabla['where_id'],0);
        echo intval($valor*100)/100;
        echo "</td>";
        echo "</tr>";
        //echo "<div>nunca jamas quiere decir tal vez</div>";
        
    }
    echo "</table>";

}


$datos_tabla['edicion_completa']=($datos_tabla['edicion_completa']!='')?$datos_tabla['edicion_completa']:( (($needs['html']) or($numero_de_campo_en_lista>$limite_campos_en_lista))?1:0 );

$edicion_rapida_on = $datos_tabla['edicion_rapida']=($datos_tabla['edicion_rapida']!='')?$datos_tabla['edicion_rapida']:( (($needs['html']) or($numero_de_campo_en_lista>$limite_campos_en_lista))?0:1 );




$urd=0;

$groupvalue='';

//PRE
if($datos_tabla['mass_actions']!='')
{
    $tblistado=array_merge(array(array('listable'=>'1','campo'=>'check','tipo'=>'check')), $tblistado);
}

foreach($tblistado as $tbli)
{
    $pdfrom[]="[".$tbli['campo']."]";
}


foreach($lineas as $tete=>$linea)
{

    /*prin($linea);	*/
    $ct=[];
    $ConF=[];
    

    $ct=procesproces($datos_tabla,$linea['conf']);


    $urd++;

    
    $datos_tabla['edicion_completa']=($_GET['block']=='form' and $_GET['tipo']=='listado')?0:$datos_tabla['edicion_completa'];




    echo '<li id="i_'.$linea[$datos_tabla['id']].'" ';
    /*
    if($datos_tabla['edicion_rapida']=='1'){
    echo ' ondblclick="if(!$(\'i_'.$linea[$datos_tabla['id']].'\').hasClass(\'editar_rapido\')){ax(\'e\',\''.$linea[$datos_tabla['id']].'\');}"';
    echo ' onkeypress="if( $(\'i_'.$linea[$datos_tabla['id']].'\').hasClass(\'editar_rapido\')){if(event.keyCode==27){ax(\'e_a\',\''.$linea[$datos_tabla['id']].'\');}}" ';
    }
    */
    echo ' alt="'.$linea[$datos_tabla['id']].'" class="bl ';

    echo $_COOKIE[$tb.'_colap'];

    echo '" >';



        include("vista_item_controles.php");


        /*
        ########  ######   #######  ##     ## #### ##    ##    ###
        ##       ##    ## ##     ## ##     ##  ##  ###   ##   ## ##
        ##       ##       ##     ## ##     ##  ##  ####  ##  ##   ##
        ######    ######  ##     ## ##     ##  ##  ## ## ## ##     ##
        ##             ## ##  ## ## ##     ##  ##  ##  #### #########
        ##       ##    ## ##    ##  ##     ##  ##  ##   ### ##     ##
        ########  ######   ##### ##  #######  #### ##    ## ##     ##
        */

        ?>
            <a id="exl_<?php echo $linea[$datos_tabla['id']]?>" 
            class="corner expanlink" 
            onclick="ax('set_fila_2','<?php echo $linea[$datos_tabla['id']]?>'); return false;" 
            title="expandir"></a>
            
            <a id="cll_<?php echo $linea[$datos_tabla['id']]?>" 
            class="corner colaplink" 
            onclick="ax('set_fila_4','<?php echo $linea[$datos_tabla['id']]?>'); return false;" 
            title="colapsar"></a>

        <?php 


        /*
        #### ######## ######## ##     ##  ######
        ##     ##    ##       ###   ### ##    ##
        ##     ##    ##       #### #### ##
        ##     ##    ######   ## ### ##  ######
        ##     ##    ##       ##     ##       ##
        ##     ##    ##       ##     ## ##    ##
        ####    ##    ######## ##     ##  ######
        */

        include("vista_item.php");



        /*
         ######  ##     ## ########     #### ######## ######## ##     ##  ######
        ##    ## ##     ## ##     ##     ##     ##    ##       ###   ### ##    ##
        ##       ##     ## ##     ##     ##     ##    ##       #### #### ##
         ######  ##     ## ########      ##     ##    ######   ## ### ##  ######
              ## ##     ## ##     ##     ##     ##    ##       ##     ##       ##
        ##    ## ##     ## ##     ##     ##     ##    ##       ##     ## ##    ##
         ######   #######  ########     ####    ##    ######## ##     ##  ######
        */
        
        if($urd==1){
            
            // prin($load_subs);
            $load_subs_render=(sizeof($load_subs)>0)?1:0;
        
            $load_file_render=(sizeof($load_file)>0)?1:0;
        
            $load_exists_render=(sizeof($load_exists)>0)?1:0;
            
        }

        if($load_exists_render){

            render_foreig_exists($load_exists,$linea,$urd);

        }	
        if($load_subs_render){

            render_foreig_subs($load_subs,$linea[$datos_tabla['id']],$linea,$urd,$datos_tabla['sub_procesos']);
            // render_foreig_subs($load_subs,$linea,$urd,$datos_tabla['sub_procesos']);
        }
        if($load_file_render){

            render_foreig_file($load_file,$linea,$urd);
            
        }
                

        if(isset($_GET['i'])!=''){

            echo '<div class="more_detail itms_cont">';

            include($datos_tabla['detail_include']);

            echo '</div>';

        }
     
    
    echo "</li>";

//////////////////////////////////////////////////////////////////////////////////////////////////////////
//		listado fin 	//////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////
}