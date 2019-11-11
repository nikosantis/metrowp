        <nav class="navbar navbar-expand-xl navbar-light bg-light top-sticky" id="navbarProyecto">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>">
                    <img src="<?php the_field('logo_principal', 'option'); ?>" alt="<?php bloginfo('name'); ?>">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarPro"
                    aria-controls="navbarPro" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarPro">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="#inicio">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#modelos">Modelos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#terminaciones">Terminaciones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#barrio">Barrio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#ubicacion">Ubicación</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#saladeventas">Sala de Ventas</a>
                        </li>
                    </ul>
                </div>
                <a href="<?php echo esc_url( home_url('/') ); ?>" class="btn btn-back d-none d-xl-inline-block mb-3 mb-md-0 ml-md-3"><i class="fas fa-chevron-left"></i> Volver</a>
            </div>
        </nav>