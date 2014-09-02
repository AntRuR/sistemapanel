<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
        <title>Village Miraflores</title>
	       
       <script src="js/modernizr.js" type="application/javascript"></script>
       <link rel="stylesheet" href="css/normalize.css" />
       <link rel="stylesheet" href="css/imagenes-ejemplos0.css" />
       <link rel="stylesheet" href="css/estructura.css" />
       <link rel="stylesheet" href="css/animaciones.css" />
   
        <!-- it works the same with all jquery version from 1.3.1 to 2.0.3 -->
        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <!-- use jssor.slider.mini.js (39KB) or jssor.sliderc.mini.js (31KB, with caption, no slideshow) or jssor.sliders.mini.js (26KB, no caption, no slideshow) instead for release -->
        <!-- jssor.slider.mini.js = jssor.sliderc.mini.js = jssor.sliders.mini.js = (jssor.core.js + jssor.utils.js + jssor.slider.js) -->
        <script type="text/javascript" src="js/jssor.core.js"></script>
        <script type="text/javascript" src="js/jssor.utils.js"></script>
        <script type="text/javascript" src="js/jssor.slider.js"></script>
        <script type="text/javascript" src="js/slider-.js"></script>

    </head>

<body>
    <!-- comienzo de header map poner antes de el wrapper o header general -->
        <div id="header-gmap">
            <div id="map-canvas"></div>
        <!-- END #header-gmap -->
        </div>
        
        <?php include 'modulos/menu-principal.html'; ?>
    	<?php include 'modulos/slider.html'; ?>
    
        <section class="area-reserva">
    	   Aqui va el formulario!!!!!!!!!!!!
        </section>
    
    <section class="sobre-hotel">
   		<h2>Sobre el Hotel</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus feugiat congue quis ut nunc.</p>   
    </section>
    
    <section class="area-hotel">
    	<article class="columna-1000x4">
        
        	<div class="contenedorgaleria1000x4">
            	<div class="galeriahotel imagenejemplo1" style="overflow:hidden;">
                    <img class="advert" src="image/img_03.jpg" /></div>
                <h3>Titulo 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#">
                    <div class="link-galeria1000x4 botones-links">Ver más</div>
                </a>
            </div>
            
            <div class="contenedorgaleria1000x4">
            	<div class="galeriahotel imagenejemplo2" style="overflow:hidden;">
                    <img class="advert"src="image/img_05.jpg" /></div>
                <h3>Titulo 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#">
                    <div class="link-galeria1000x4 botones-links">Ver más</div>
                </a>
            </div>
            
            <div class="contenedorgaleria1000x4">
            	<div class="galeriahotel imagenejemplo3" style="overflow:hidden;">
                    <img class="advert" src="image/img_07.jpg" /></div>
                <h3>Titulo 3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#">
                    <div class="link-galeria1000x4 botones-links">Ver más</div>
                </a>
            </div>
            
            <div class="contenedorgaleria1001x4">
            	<div class="galeriahotel imagenejemplo1" style="overflow:hidden;">
                    <img class="advert" src="image/img_09.jpg" /></div>
                <h3>Titulo 4</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#">
                    <div class="link-galeria1000x4 botones-links">Ver más</div>
                </a>
            </div>
			<div class="clear"></div>
        </article>
        <div class="clear"></div>
    </section>
    
    
   
    
    <section class="area-hotel">
    	<article class="columna-1000">      
        	<div class="contenedorgaleria1000">
            	<div class="galeriahotel imagenejemplo1" style="overflow:hidden;">
                    <img class="advert" src="image/img_15.jpg" /></div>
                <h3>Titulo 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#">
                    <div class="link-galeria1000 botones-links">Ver más</div>
                </a>
            </div>
            
            <div class="contenedorgaleria1001">
            	<div class="galeriahotel imagenejemplo2"  style="overflow:hidden;">
                    <img class="advert" src="image/img_17.jpg" /></div>
                <h3>Titulo 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#">
                    <div class="link-galeria1000 botones-links">Ver más</div>
                </a>
            </div>
            
            <div class="contenedorgaleria1000">
            	<div class="galeriahotel imagenejemplo3" style="overflow:hidden;">
                    <img class="advert" src="image/img_19.jpg" /></div>
                <h3>Titulo 3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#">
                    <div class="link-galeria1000 botones-links">Ver más</div>
                </a>
            </div>
			<div class="clear"></div>
        </article>
        <div class="clear"></div>
    </section>

    <?php include 'modulos/comentarios-hotel.html'; ?>
    <?php include 'modulos/footer.html'; ?>

</body>
</html>
