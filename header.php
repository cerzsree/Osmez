<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if(is_singular() && pings_open(get_queried_object())): ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url') ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="container-fluid">
        <section class="row">
            <div class="col-12">
                <div class="header-container back-image text-center" style="background-image:url(<?php header_image(); ?>)">
                    <div class="header-content table">
                        <div class="table-cell">
                            <h1 class="site-title"><?php bloginfo('name') ?></h1>
                            <h2 class="site-description"><?php bloginfo( 'description' ) ?></h2>
                        </div>
                    </div>
                    <div class="nav-container"></div>
                </div><!--header-container-->
                <div class="nav-container">
                    <div class="navbar navbar-default navbar-osmez">
                        <?php wp_nav_menu( array(
                            'teme_location' => 'primary',
                            'container' => false,
                            'menu_class' => ''
                        ) ) ?>
                    </div>
                </div><!--Nav container-->
            </div><!-- col-xs-12-->
        </section>
    </header>