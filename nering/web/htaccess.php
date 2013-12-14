<?php //á

$panel_path="../panel";

include("ajax_includes.php");

$dir=$vars['INTERNO']['CARPETA_PROYECTO'];

$domain=str_replace('http://','',$vars['REMOTE']['url_publica']);

echo "<pre>";
echo $HTACESS_INI;

?>


############################
#                          #
#          URLS            #
#                          #
############################

<IfModule mod_rewrite.c>

##
#Acticar el REWRITE
##
RewriteEngine On
Options +FollowSymlinks


##
#Especificar el root base para el rewrite y error 404
##
RewriteBase /sistemapanel/<?php echo $dir;?>/
ErrorDocument 404 /sistemapanel/<?php echo $dir;?>/index.php?modulo=error&tab=404


##
# no procesar las reglas para imágenes y otros ficheros
##
RewriteRule ^(.*)\.(js|css|ico|gif|jpe?g|png|xml)$ - [L]




#########    CANOCALIZACIÓN    ########

##
# quitar www del inicio de la url
##


RewriteCond %{HTTP_HOST} ^www.<?php echo $domain;?>$ [NC]
RewriteRule ^(.*)$ http://<?php echo $domain;?>/$1 [R=301,L]

## quitar el / final ( canonicalizacion )
RewriteRule ^(.*)/$ $1 [L,R=301]


############   HOME    ###########

#HOME-START
RewriteRule ^$ index.php?modulo=app&tab=home [L]
#HOME-END
RewriteRule ^$ index.php?modulo=error&tab=404 [L]


############   TABS DE UNA PALABRA   ###########

#url_formularios-START
RewriteRule ^(informenos|login|registro|recordar_clave|calcula-tu-envio|pedido|compre_en_usa|compre_en_lima|compramos_por_ti|calculadora|editar_usuario|editar_clave|boletin)$ index.php?modulo=formularios&tab=$1&ht=1 [L]
#url_formularios-END

#url_items-START
RewriteRule ^(productos|blog_fotos|blog_videos|blog_noticias|blog_actividades|textos_items|enlaces_items)$  index.php?modulo=items&tab=$1&acc=list&ht=2 [L]
#url_items-END

#url_pages-START
RewriteRule ^(empresa|como-funciona|compre-en-nuestra-tienda|compre|servicios|donde-nos-encontramos|quienes-somos)$ index.php?modulo=app&tab=pages&page=$1&ht=3 [L]
#url_pages-END

#url_app-START
RewriteRule ^(carrito|sigue-tus-compras|sigue_tus_compras|home)$ index.php?modulo=app&tab=$1&ht=4 [L]
#url_app-END

#varurl-START
RewriteRule ^contactenos$ index.php?modulo=formularios&tab=contacto [L]
RewriteRule ^empresa$ index.php?modulo=app&tab=pages&page=quienes-somos [L]
#varurl-END


############   ITEMS  ##########

#ITEMS/pag-PAG 												ej: productos/pag-2
RewriteRule ^([a-z0-9_]{4,20})/pag-([0-9]{1,4})$ 			index.php?modulo=items&tab=$1&acc=list&pag=$2&ht=5 [L]

#ITEMS/ID/friendly/pag-PAG  										ej: productos/2/url-amigable/pag-2
RewriteRule ^([a-z0-9_]{4,20})/([0-9]{1,7})/([a-z0-9\-]{2,100})/pag-([0-9]{1,4})$ 	index.php?modulo=items&tab=$1&acc=file&id=$2&friendly=$3&pag=$4&ht=6p [L]

#ITEMS/ID/friendly 													ej: productos/2/url-amigable
RewriteRule ^([a-z0-9_]{4,20})/([0-9]{1,7})/([a-z0-9\-.]{3,100})$ 	index.php?modulo=items&tab=$1&acc=file&id=$2&friendly=$3&ht=66 [L]

#ITEMS-GRUPO/pag-PAG																		ej: productos-2/categoria/pag-2
RewriteRule ^([a-z0-9_]{4,20})-([0-9]{1,2})/([a-z0-9\-.]{4,100})/pag-([0-9]{1,4})$ 		index.php?modulo=items&tab=$1&acc=list&gru=$2&friendly=$3&pag=$4&ht=7 [L]

#ITEMS-GRUPO 															ej: productos-2/categoria
RewriteRule ^([a-z0-9_]{4,20})-([0-9]{1,2})/([a-z0-9\-.]{4,100})$ 		index.php?modulo=items&tab=$1&acc=list&gru=$2&friendly=$3&ht=8 [L]

#ITEMS/FILTRO												ej: productos/promociones
RewriteRule ^([a-z0-9_]{4,20})/([a-z0-9\-]{4,100})$ 			index.php?modulo=items&tab=$1&acc=list&fil=$2&ht=9 [L]

#ITEMS/FILTRO/pag-PAG															ej: productos/promociones/pag-2
RewriteRule ^([a-z0-9_]{4,20})/([a-z0-9\-]{4,100})/pag-([0-9]{1,4})$ 			index.php?modulo=items&tab=$1&acc=list&fil=$2&pag=$3&ht=10 [L]

#ITEMS/FILTRO/VALOR/friendly																	ej: productos/destinos/2/index.html
RewriteRule ^([a-z0-9_]{4,20})/([a-z0-9\-]{4,100})/([a-z0-9\-]{1,100})/([a-z0-9\-.]{4,100})$ 			index.php?modulo=items&tab=$1&acc=list&fil=$2&val=$3&friendly=$4&ht=11 [L]

#ITEMS/FILTRO/VALOR/friendly/pag-PAG																	ej: productos/destinos/2/index.html/pag-2
RewriteRule ^([a-z0-9_]{4,20})/([a-z0-9\-]{4,100})/([a-z0-9\-]{1,100})/([a-z0-9\-.]{4,100})/pag-([0-9]{1,4})$	index.php?modulo=items&tab=$1&acc=list&fil=$2&val=$3&friendly=$4&pag=$5&ht=12 [L]

#ITEMS/buscar=PALABRA/pag-PAG												ej: productos/buscar=palabra
RewriteRule ^([a-z0-9_]{4,20})/buscar=([a-z0-9\-]{1,100})$	index.php?modulo=items&tab=$1&acc=list&buscar=$2&ht=12 [L]

#ITEMS/buscar=PALABRA/pag-PAG												ej: productos/buscar=palabra/pag-2
RewriteRule ^([a-z0-9_]{4,20})/buscar=([a-z0-9\-]{1,100})/pag-([0-9]{1,4})$	index.php?modulo=items&tab=$1&acc=list&buscar=$2&pag=$3&ht=12 [L]

<?php
echo $HTACESS_END;
echo "</pre>";
?>