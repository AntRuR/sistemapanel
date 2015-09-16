<section class="clientes wide page block block-grey" >

    <div class="header">
        <h1>Clientes</h1>
    </div>
         
    <article class="inner">

        <div class="content">
      	  	<ul class="row">
				<?php 

					$photos=fila(
						"id,name,html",
						'galleries_photos',
						"where id=1",
						0,
						[
							'items'=>[
								'fotos'=>[
									'id,name,file,fecha_creacion|galleries_photos_photos|where id_grupo={id} order by weight desc',
									'galfot_imas',
									['img'=>'0']
								],

							],

						]

					);
					
					// prin($photos);

					foreach($photos['items'] as $photo){

						echo '<li class="col-md-3">
						<figure>
						<figcaption>'.$photo['name'].'</figcaption>
						<img src="'.$photo['img'].'" alt="'.$photo['name'].'" class="img-thumbnail">
						</figure>
						</li>';
					}

				?>
				</ul>                    
        </div>        

    </article>        

</section>

