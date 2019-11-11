<?php
    if ( is_singular( 'plantas' ) ) {
        $vincular = get_field('vincular_planta_a_proyecto');
        ?>
        <script>
        dataLayer = [{
            'pageType': 'Planta',
            'plantaNombre': '<?php the_title();?>',
            'proyectoNombre': '<?php the_field( 'titulo_add', $vincular->ID );?>'
        }];
        </script>
    <?php } elseif ( is_singular( 'proyectos' ) ) { ?>
        <script>
        dataLayer = [{
            'pageType': 'Proyecto',
            'proyectoNombre': '<?php the_field( 'titulo_add' );?>'
        }];
        </script>
    <?php  } else { ?>
        <script>
        dataLayer = [{
            'pageType': 'Página',
            'paginaNombre': '<?php the_title();?>'
        }];
        </script>
    <?php
    }
?>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M6NL8RV');</script>
<!-- End Google Tag Manager -->