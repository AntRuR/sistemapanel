<?php //á

require_once('class.phpmailer.php');

chdir("../");
//include("lib/includes.php");
	include("lib/global.php");	
	include("lib/conexion.php");
	include("lib/mysql3.php");
	include("lib/util.php");	
	include("config/tablas.php");
//	include("lib/sesion.php");	
	include("lib/playmemory.php");
	include("lib/webutil.php");
	
	require_once( "lib/ini_manager.php" );
	
chdir("base2");

$ID_PRODUCTO=select_dato("id_item","productos_comentarios","where id='".$_GET['id']."'",0);

if($ID_PRODUCTO!=''){

$item = select_fila(
        "id_grupo,id_subgrupo,id_filtro,nombre,marca,codigo,descripcion,extra_texto,precio,precio_oferta,moneda,fecha_creacion,politica_legal,nombre_fichero,fichero,oferta"
        ,"productos_items"
        ,"where id='".$ID_PRODUCTO."' and  visibilidad='1' "
        ,0
		,array(
			'grupo'=>array('sub_select_dato'=>array(
											'campo'=>"nombre"
											,'tabla'=>"productos_grupos"
											,'donde'=>"where id='{id_grupo}'"
											,'debug'=>0
										)
									)
			,'subgrupo'=>array('sub_select_dato'=>array(
											'campo'=>"nombre"
											,'tabla'=>"productos_subgrupos"
											,'donde'=>"where id='{id_subgrupo}'"
											,'debug'=>0
										)
									)
			,'filtro'=>array('sub_select_dato'=>array(
											'campo'=>"nombre"
											,'tabla'=>"productos_filtros"
											,'donde'=>"where id='{id_filtro}'"
											,'debug'=>0
										)
									)																		
		)
        );

}

?>
<html>
<style>
.var { width:140px; color:#666; text-transform:uppercase; font-family:Verdana, Geneva, sans-serif; font-size:10px;}
.valor { width:500px; font-family:Verdana, Geneva, sans-serif; font-size:11px; }
</style>
<?php
web_render_data($item,"nombre,grupo|Rubro,subgrupo|categoría,filtro|sub categoría,codigo",2);
?>
</html>