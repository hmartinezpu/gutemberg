<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body>

<header class="site-header ">
    <div class="contenedor">
        <div class="logo">
        <a href="<?php echo esc_url( home_url('/') ); ?>">
                <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg">
            </a>
        </div>

        <div class="informacion-header">
            <div class="redes-sociales">
              
            </div> <!--.redes-sociales-->

            <div class="direccion">
                <p>8179 Bay Avenue Mountain View, CA 94043</p>
                <p>Teléfono: 91839813981</p>
            </div>
        </div><!--.informacion-header-->
    </div>
</header>