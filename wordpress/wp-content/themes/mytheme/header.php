<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Oriental font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=East+Sea+Dokdo&display=swap" rel="stylesheet">

    

    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="my-3">

        <nav class="navbar navbar-expand-lg bg-light" id="navbar-custom">
            <div class="container-fluid">
               
            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/LogoKitsune.png'); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
        </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary-menu',
                        'container' => false,
                        'container_class' => 'main-menu',
                        'menu_class' => '',
                        'fallback_cb' => '__return_false',
                        'depth' => 2,
                        'walker' => new bootstrap_5_wp_nav_menu_walker()
                    ))
                    ?>
                </div>
            </div>
        </nav>
    </header>