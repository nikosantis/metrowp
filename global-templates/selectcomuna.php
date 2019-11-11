<div class="selectcomuna">
    <div class="dropdown">
        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Seleccionar Comuna
        </button>
        <?php if( have_rows('comunas_disponibles', 71) ): ?>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <?php while( have_rows('comunas_disponibles', 71) ): the_row();
        $comuna = get_sub_field('comuna');
        $link = get_sub_field('link_de_comuna');
        ?>
            <a class="dropdown-item" href="<?php echo $link; ?>" title="<?php echo $comuna; ?>"><?php echo $comuna; ?></a>
        <?php endwhile; ?>
        </div>
        <?php endif; ?>
        <div class="selectcomuna-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
</div>