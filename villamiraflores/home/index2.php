<?php
session_start();
include("book/includes/db.conn.php");
include("book/includes/conf.class.php");

$bsiCore->exchange_rate_update();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
        <title>Village Miraflores</title>
	       
           <script src="js/modernizr.js" type="application/javascript"></script>
           <link rel="stylesheet" href="css/normalize.css" />
           <link rel="stylesheet" href="css/imagenes-ejemplos.css" />
           <link rel="stylesheet" href="css/estructura.css" />
    </head>

<body>

    <!-- comienzo de header map poner antes de el wrapper o header general -->
        <div id="header-gmap">
            
            <div id="map-canvas"></div>
            
        <!-- END #header-gmap -->
        </div>
        
        <div><!-- en e l contender de todo el menu o header  -->

	<!-- it works the same with all jquery version from 1.3.1 to 2.0.3 -->
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <!-- use jssor.slider.mini.js (39KB) or jssor.sliderc.mini.js (31KB, with caption, no slideshow) or jssor.sliders.mini.js (26KB, no caption, no slideshow) instead for release -->
    <!-- jssor.slider.mini.js = jssor.sliderc.mini.js = jssor.sliders.mini.js = (jssor.core.js + jssor.utils.js + jssor.slider.js) -->
    <script type="text/javascript" src="js/jssor.core.js"></script>
    <script type="text/javascript" src="js/jssor.utils.js"></script>
    <script type="text/javascript" src="js/jssor.slider.js"></script>
    <script>
        jQuery(document).ready(function ($) {

            var _CaptionTransitions = [];
            _CaptionTransitions["L"] = { $Duration: 900, $FlyDirection: 1, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $ScaleHorizontal: 0.6, $Opacity: 2 };
            _CaptionTransitions["R"] = { $Duration: 900, $FlyDirection: 2, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $ScaleHorizontal: 0.6, $Opacity: 2 };
            _CaptionTransitions["T"] = { $Duration: 900, $FlyDirection: 4, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $ScaleVertical: 0.6, $Opacity: 2 };
            _CaptionTransitions["B"] = { $Duration: 900, $FlyDirection: 8, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $ScaleVertical: 0.6, $Opacity: 2 };
            _CaptionTransitions["ZMF|10"] = { $Duration: 900, $Zoom: 11, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _CaptionTransitions["RTT|10"] = { $Duration: 900, $Zoom: 11, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} };
            _CaptionTransitions["RTT|2"] = { $Duration: 900, $Zoom: 3, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 0.5} };
            _CaptionTransitions["RTTL|BR"] = { $Duration: 900, $Zoom: 11, $Rotate: 1, $FlyDirection: 10, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInCubic }, $ScaleHorizontal: 0.6, $ScaleVertical: 0.6, $Opacity: 2, $Round: { $Rotate: 0.8} };
            _CaptionTransitions["CLIP|LR"] = { $Duration: 900, $Clip: 15, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 };
            _CaptionTransitions["MCLIP|L"] = { $Duration: 900, $Clip: 1, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };
            _CaptionTransitions["MCLIP|R"] = { $Duration: 900, $Clip: 2, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };

            var options = {
                $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actuall size, default value is 0
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 3,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, default value is 3

                $ArrowKeyNavigation: true,                          //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseOutQuart,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 1200,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0,                                   //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
                    $Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption
                    $CaptionTransitions: _CaptionTransitions,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
                    $PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
                    $PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
                },

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },

                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$SetScaleWidth(Math.min(bodyWidth, 1920));
                else
                    window.setTimeout(ScaleSlider, 30);
            }

            ScaleSlider();

            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                $(window).bind('resize', ScaleSlider);
            }
            //responsive code end
        });
    </script>
    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles (except 'top', 'left', 'width' and 'height') to css file or css block. -->


    <?php include 'modulos/menu-principal.html'; ?>
	<?php include 'modulos/slider.html'; ?>
    
    <section class="area-reserva">
<?php include 'book/index.php'?>    </section>
    
    <section class="sobre-hotel">
   		<h2>Sobre el Hotel</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus feugiat congue quis ut nunc.</p>   
    </section>
    
    <section class="area-hotel">
    	<article class="columna-1000x4">
        
        	<div class="contenedorgaleria1000x4">
            	<div class="galeriahotel imagenejemplo1"></div>
                <h3>Titulo 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <div class="link-galeria1000x4">Ver más</div>
            </div>
            
            <div class="contenedorgaleria1000x4">
            	<div class="galeriahotel imagenejemplo2"></div>
                <h3>Titulo 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <div class="link-galeria1000x4">Ver más</div>
            </div>
            
            <div class="contenedorgaleria1000x4">
            	<div class="galeriahotel imagenejemplo3"></div>
                <h3>Titulo 3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <div class="link-galeria1000x4">Ver más</div>
            </div>
            
            <div class="contenedorgaleria1001x4">
            	<div class="galeriahotel imagenejemplo1"></div>
                <h3>Titulo 4</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <div class="link-galeria1000x4">Ver más</div>
            </div>
			<div class="clear"></div>
        </article>
        <div class="clear"></div>
    </section>
    
    
    <section class="area-galeria">
    
    
    
    </section>
    
    <section class="area-hotel">
    	<article class="columna-1000">
        
        	<div class="contenedorgaleria1000">
            	<div class="galeriahotel imagenejemplo1"></div>
                <h3>Titulo 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <div class="link-galeria1000">Ver más</div>
            </div>
            
            <div class="contenedorgaleria1001">
            	<div class="galeriahotel imagenejemplo2"></div>
                <h3>Titulo 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <div class="link-galeria1000">Ver más</div>
            </div>
            
            <div class="contenedorgaleria1000">
            	<div class="galeriahotel imagenejemplo3"></div>
                <h3>Titulo 3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <div class="link-galeria1000">Ver más</div>
            </div>
			<div class="clear"></div>
        </article>
        <div class="clear"></div>
    </section>
    
    <section class="comentarios-hotel">
   		<h2>Testimonios</h2>
        <div class="comentario-modulo">
        	<div class="area-photo-comentario">
            	<div class="photo-comentario"></div>
            </div>
            
            <div class="texto-comentario">
            	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Adipiscing elit.</p>
            </div>
            <div class="clear"></div>   
        </div>

        <div class="comentario-modulo">
        	<div class="area-photo-comentario">
            	<div class="photo-comentario"></div>
            </div>
            
            <div class="texto-comentario">
            	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Adipiscing elit.</p>
            </div>
            <div class="clear"></div>    
        </div>
        <div class="clear"></div>
        
    </section>
    
    <?php include 'modulos/footer.html'; ?>
</body>
</html>
