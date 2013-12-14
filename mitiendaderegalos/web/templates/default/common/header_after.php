<?php //á 
?>
<?php if($MASTERBLOCK['header_after']){ ?>

	<?php if(isset($COMMON['archivos']['banner_01'])){ ?>
        <div class="div_fila" id="div_header_after">
        
            <?php web_render_fichero($COMMON['archivos']['banner_01']); ?>
        
            <?php /*<a href="<?php echo $COMMON['url_boletin'];?>" class="div_absoluto header-boletin" ></a>*/ ?>
        
        </div>
    <?php } ?>

<?php } ?>