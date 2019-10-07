<?php
$ID_CC = 152;
$page_title_id = get_the_title( $ID_CC );
?>
        <section class="como-comprar">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-12 text-center" data-aos="fade-up">
                        <h2 class="titulo"><?php echo $page_title_id; ?></h2>
                        <h3 class="subtitulo"><?php the_field( 'sub_titulo_como_comprar', 152 ); ?></h3>
                        <p class="comocomprar-text"><?php the_field( 'texto_como_comprar', 152 ); ?></p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 text-center" data-aos="fade-up">
                        <img src="<?php the_field( 'imagen_como_comprar', 152 ); ?>" alt="<?php echo $page_title_id; ?>" class="img-fluid mb-5">
                        <a href="<?php the_field( 'boton_mas_informacion', 152 ); ?>" class="btn btn-mgi"><?php the_field( 'texto_del_boton_mas_informacion', 152 ); ?></a>
                    </div>
                </div>
            </div>
        </section>