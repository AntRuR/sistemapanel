<?php //á 
$THIS=$PARAMS['this'];
$object=$OBJECT[$THIS];
?>
<div class="div_fila div_menu <?php echo 'id_'.$THIS; ?>"><?php
web_render_menu($object['menu'],array(
                                            'id'=>'menu_main'
                                            ,'rel'=>'son_menu_main'
                                            //,'ul'=>'div'													
                                            ),'h2');
?></div>
