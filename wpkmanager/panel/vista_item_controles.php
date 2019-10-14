<?php


/*
######## ########  ######  ##     ##    ###       #### ########
##       ##       ##    ## ##     ##   ## ##       ##  ##     ##
##       ##       ##       ##     ##  ##   ##      ##  ##     ##
######   ######   ##       ######### ##     ##     ##  ##     ##
##       ##       ##       ##     ## #########     ##  ##     ##
##       ##       ##    ## ##     ## ##     ##     ##  ##     ##
##       ########  ######  ##     ## ##     ##    #### ########
*/
?>
<a class="ie" 
    href="custom/<?=$datos_tabla['archivo']?>.php?i=<?=$linea[$datos_tabla['id']]?>">
        <?=fecha_formato($linea['fecha_creacion'],"7b")?>
        <?=$linea[$datos_tabla['id']]?>
</a>

<div id="lc_<?=$linea[$datos_tabla['id']]?>" 
class="lc <?= ( ($urd=='1')?"lc1 ":" " ) .
    ( ($datos_tabla['vis']!='')?(($linea[$datos_tabla['vis']]=='0')?"oc":""):'' )?>" >
<?php


    /*
    ##     ## #### ######## ##      ##
    ##     ##  ##  ##       ##  ##  ##
    ##     ##  ##  ##       ##  ##  ##
    ##     ##  ##  ######   ##  ##  ##
    ##   ##   ##  ##       ##  ##  ##
    ## ##    ##  ##       ##  ##  ##
    ###    #### ########  ###  ###
    */
    if( (!isset($_GET['i'])) and ($_GET['justlist']!='1') ){ 
        ?>
            <a id="av_<?php echo $linea[$datos_tabla['id']]?>" 
            href="custom/<?php echo $datos_tabla['archivo'].".php?i=".$linea[$datos_tabla['id']]; ?>" 
            class="bl1 itr i_ev z" title="ver <?php echo $datos_tabla['nombre_singular'];?>" ></a>
        <?php 
    }


    /*
    ######## ##       #### ##     ## #### ##    ##    ###    ########
    ##       ##        ##  ###   ###  ##  ###   ##   ## ##   ##     ##
    ##       ##        ##  #### ####  ##  ####  ##  ##   ##  ##     ##
    ######   ##        ##  ## ### ##  ##  ## ## ## ##     ## ########
    ##       ##        ##  ##     ##  ##  ##  #### ######### ##   ##
    ##       ##        ##  ##     ##  ##  ##   ### ##     ## ##    ##
    ######## ######## #### ##     ## #### ##    ## ##     ## ##     ##
    */
    if($ct['eliminar']=='1'){
        ?>
        <a id="ad_<?=$linea[$datos_tabla['id']]?>" 
            onclick="ax('x','<?=$linea[$datos_tabla['id']]?>');return false;" 
            class="bl1 itr i_x z" 
            title="Eliminar <?=$datos_tabla['nombre_singular']?>" ></a>';
        <?php
    }

    /*
    ##     ## ####  ######  #### ########  #### ##       #### ########     ###    ########
    ##     ##  ##  ##    ##  ##  ##     ##  ##  ##        ##  ##     ##   ## ##   ##     ##
    ##     ##  ##  ##        ##  ##     ##  ##  ##        ##  ##     ##  ##   ##  ##     ##
    ##     ##  ##   ######   ##  ########   ##  ##        ##  ##     ## ##     ## ##     ##
    ##   ##   ##        ##  ##  ##     ##  ##  ##        ##  ##     ## ######### ##     ##
    ## ##    ##  ##    ##  ##  ##     ##  ##  ##        ##  ##     ## ##     ## ##     ##
    ###    ####  ######  #### ########  #### ######## #### ########  ##     ## ########
    */
    if($datos_tabla['vis']!='' and $datos_tabla['visibilidad']!='0' ){

        ?>
            <a id="av_<?php echo $linea[$datos_tabla['id']]?>" 
                onclick="ax('v','<?php echo $linea[$datos_tabla['id']]?>'); return false;" 
                class="bl1 itr i_m z" 
                title="habilitar <?php echo $datos_tabla['nombre_singular'];?>" ></a>

            <a id="ah_<?php echo $linea[$datos_tabla['id']]?>" 
                onclick="ax('o','<?php echo $linea[$datos_tabla['id']]?>'); return false;" 
                class="bl1 itr i_o z" 
                title="deshabilitar <?php echo $datos_tabla['nombre_singular'];?>" ></a>
        
        <?php

    }

    /*
    ########  ######  ######## ########  ######## ##       ##          ###     ######
    ##       ##    ##    ##    ##     ## ##       ##       ##         ## ##   ##    ##
    ##       ##          ##    ##     ## ##       ##       ##        ##   ##  ##
    ######    ######     ##    ########  ######   ##       ##       ##     ##  ######
    ##             ##    ##    ##   ##   ##       ##       ##       #########       ##
    ##       ##    ##    ##    ##    ##  ##       ##       ##       ##     ## ##    ##
    ########  ######     ##    ##     ## ######## ######## ######## ##     ##  ######
    */
    if($datos_tabla['cal']!='' and $datos_tabla['calificacion']!='0' ){

        ?><a id="as_<?php echo $linea[$datos_tabla['id']]?>" 
            onclick="ax('star','<?php echo $linea[$datos_tabla['id']]?>'); return false;" 
            class="bl1 itr ico_star_<?php echo ($linea[$datos_tabla['cal']])?$linea[$datos_tabla['cal']]:'0';?> z" <?php  echo 'rel="'. ( ($linea[$datos_tabla['cal']]==5)?'0':($linea[$datos_tabla['cal']]+1) ).'"'; ?> 
            title="calificar <?php echo $datos_tabla['nombre_singular'];?>" ></a>
        <?php

    }

    /*
    ######## ########  #### ########    ###    ########
    ##       ##     ##  ##     ##      ## ##   ##     ##
    ##       ##     ##  ##     ##     ##   ##  ##     ##
    ######   ##     ##  ##     ##    ##     ## ########
    ##       ##     ##  ##     ##    ######### ##   ##
    ##       ##     ##  ##     ##    ##     ## ##    ##
    ######## ########  ####    ##    ##     ## ##     ##
    */
    if($datos_tabla['editar']=='1'){

        if($datos_tabla['edicion_completa']=='1'){

            ?>
            <a id="ae_<?php echo $linea[$datos_tabla['id']]?>" 
            onclick="ax('ec','<?php echo $linea[$datos_tabla['id']]?>'); return false;" 
            class="bl1 itr i_ec z" 
            title="editar <?php echo $datos_tabla['nombre_singular'];?>" ></a>
            <?php

        }

        if($datos_tabla['edicion_rapida']=='1'){

            ?>
            <a id="ae_<?php echo $linea[$datos_tabla['id']]?>" 
            onclick="ax('e','<?php echo $linea[$datos_tabla['id']]?>'); return false;" 
            class="bl1 itr i_e z" 
            title="editar <?php echo $datos_tabla['nombre_singular'];?>" ></a>
            <?php 
            
        }

    }


    /*
    ##     ## ######## ##    ## ##     ##
    ###   ### ##       ###   ## ##     ##
    #### #### ##       ####  ## ##     ##
    ## ### ## ######   ## ## ## ##     ##
    ##     ## ##       ##  #### ##     ##
    ##     ## ##       ##   ### ##     ##
    ##     ## ######## ##    ##  #######
    */

    foreach($ct['procesos'] as $iproceso=>$proceso){

        if($ct['procesos'][$iproceso]['disabled']=='1'){ unset($ct['procesos'][$iproceso]); }

    }


    if(sizeof($ct['procesos'])>0 and $ct['procesos']!=0){

        echo "<div class='menudown'>";

            echo '<a id="ab_'.$linea[$datos_tabla['id']].'" 
            onclick="ax(\'b\',\''.$linea[$datos_tabla['id']].'\');return false;" 
            class=" bl1 itr i_b z" ></a>';

            foreach($ct['procesos'] as $iproceso=>$proceso){

                $href= ( ($proceso['file']!='')?$proceso['file']:'formulario_quick.php' ) 
                .'?proceso='.$iproceso
                .'&L='.$linea[$datos_tabla['id']]
                .'&OT='
                .( ($proceso['ot'])?$proceso['ot']."&parent=".$objeto_tabla[$this_me]['archivo']:$objeto_tabla[$this_me]['archivo']."&parent=")
                .( ($proceso['ran']=='null')?"":"&ran=1" )
                .( ($proceso['accion'])?"&accion=".$proceso['accion']:'')
                .( (sizeof($proceso['cargar'])>0)?'&load='.urlencode(json_encode($proceso['cargar'])):'')

                .( ($proceso['extra'])?"&".str_replace(
                    ["[id]","[id_grupo]"],
                    [$linea[$datos_tabla['id']],$linea['id_grupo']],
                    $proceso['extra']):'');

                
                $linkk = '<a rel="';
                $linkk.= ($proceso['rel'])?$proceso['rel']:'width:1250,height:900';
                $linkk.= '" href="';
                
                $linkk.= $href;

                $linkk.= '"'
                .' class="'. ( (isset($proceso['class']))?$proceso['class']:'mb' )
                .'"'
                .' >';
                
                $linkk.= $proceso['label'];
                $linkk.= '</a>';

                $linkks[]=$linkk;
                
                unset($linkk);

            }

            render_view(['items'=>$linkks],'menu_float.php'); unset($linkks);

        echo  "</div>";

    }


    ?>
</div>

<?php



        
/*
######   #######  ##    ## ######## ########   #######  ##       ########  ######
##    ## ##     ## ###   ##    ##    ##     ## ##     ## ##       ##       ##    ##
##       ##     ## ####  ##    ##    ##     ## ##     ## ##       ##       ##
##       ##     ## ## ## ##    ##    ########  ##     ## ##       ######    ######
##       ##     ## ##  ####    ##    ##   ##   ##     ## ##       ##             ##
##    ## ##     ## ##   ###    ##    ##    ##  ##     ## ##       ##       ##    ##
######   #######  ##    ##    ##    ##     ##  #######  ######## ########  ######
*/
if($datos_tabla['editar']=='1'){
    ?>
    <div id="lec_<?php echo $linea[$datos_tabla['id']]?>" 
        class="lec <?php echo ($urd=='1')?"first_linea_exl ":" ";?>" 
        style="display:none;">
        <a id="aec_<?php echo $linea[$datos_tabla['id']]?>" 
            onclick="ax('e_a','<?php echo $linea[$datos_tabla['id']]?>'); return false;" 
            class="bl1 itr ico_Cancelar z" title="cancelar edición" >cancel</a>
        <a id="aeg_<?php echo $linea[$datos_tabla['id']]?>" 
            onclick="ax('e_g','<?php echo $linea[$datos_tabla['id']]?>'); return false;" 
            class="bl1 itr ico_Guardar z" title="guardar cambios" >guardar</a>
    </div>
    <?php

}



