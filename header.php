<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xtra Blog</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link href="<?php echo get_template_directory_uri() ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/css/templatemo-xtra-blog.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <!--

TemplateMo 553 Xtra Blog

https://templatemo.com/tm-553-xtra-blog

-->
    <!-- <?php echo get_template_directory_uri(); ?> -->
    <?php wp_head(); ?>
</head>

<body>
    <header class="tm-header" id="tm-header">
        <div class="tm-header-wrapper">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="tm-site-header sideheader">

                <?php
                $header_logo = get_field('header_logo_icon', 'option');

                if ($header_logo == '') : ?>
                    <img src="<?php the_field('header_logo_image', 'option'); ?>" alt="">

                <?php else : ?>

                    <div class="mb-3 mx-auto tm-site-logo"><i class="<?php the_field('header_logo_icon', 'option'); ?> fa-2x"></i></div>

                <?php endif; ?>

                <h1 class="text-center"><?php the_field('header_text', 'option'); ?></h1>
            </div>
            <nav class="tm-nav" id="tm-nav">

                <?php wp_nav_menu(array(
                    'menu-location' => 'main-menu',
                    'walker' => new Xtra_Nav_Menu(),
                )); ?>

            </nav>
            <div class="tm-mb-65">
                <?php if (have_rows('social', 'option')) :  ?>
                    <?php while (have_rows('social', 'option')) : the_row()  ?>
                        <a rel="nofollow" href="<?php the_sub_field('social_link', 'option'); ?>" class="tm-social-link">
                            <i class="<?php the_sub_field('social_icons', 'option'); ?>  tm-social-icon"></i>
                        </a>
                <?php endwhile;
                endif; ?>
            </div>
            <p class="tm-mb-80 pr-5 text-white">
                <?php the_field('header_description', 'option'); ?>
            </p>
        </div>
    </header>
    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
            <div class="row tm-row">
                <div class="col-12">
                    <form method="GET" class="form-inline tm-mb-80 tm-search-form" action="<?php echo esc_url(home_url('/')); ?>">
                        <input class="form-control tm-search-input" name="s" type="text" placeholder="Search..." aria-label="Search" value="<?php echo esc_attr( get_search_query() ); ?>">
                        <button class="tm-search-button" type="submit">
                            <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
            </div>