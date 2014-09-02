<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
        <title>Template-Hotel</title>
	       <link rel="stylesheet" href="css/estructura.css" />
           <script src="js/modernizr.js" type="application/javascript"></script>
           <link rel="stylesheet" href="css/normalize.css" />
           <link rel="stylesheet" href="css/imagenes-ejemplos.css" />


    </head>

<body>
	

    <?php include 'modulos/menu-principal.html'; ?>
        
	<section class="sobre-hotel">
   		<h2>CONTACTO</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus feugiat congue quis ut nunc.</p>   
    </section>
    
    <section class="area-hotel">
    	<h1>Envianos tus comentarios y sugerencias</h1>

        <div class="mapa-formulario">
            <div class="mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31206.91428460351!2d-77.02857929999999!3d-12.12143695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8137c30393f%3A0x5268cb2b1c4b162b!2sMiraflores!5e0!3m2!1ses!2s!4v1398806202203" width="100%" height="350" frameborder="0" style="border:0"></iframe>
            </div>
            <div class="formulario">
                <form>
                    <h3>Escríbenos</h3>
                    <div>Nombre</div>
                    <input />
                    <div>Email</div>
                    <input />
                    <div>Comentarios</div>
                    <input />
                    <p>
                    <button>Enviar</button>
                </form>
            </div>
        </div>
        <div class="como-llegar">
            <h3>Como llegar</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus feugiat congue quis ut nunc.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus feugiat congue quis ut nunc.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus feugiat congue quis ut nunc.</p>   
        </div>

        <div class="clear"></div>
    </section>
    
    
    <?php include 'modulos/footer.html'; ?>

</body>
</html>
