<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta <?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="format-detection" content="telephone=no"/>
    <meta name="theme-color" content="#417BC7">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
            <nav>
                <div class="container-fluid menu">
                    <!-- Navbar -->
                    <div class="row justify-content-between align-items-center navbar">

                        <!-- nav link -->
                        <div class="col-4 col-lg-4">
                            <div id="menu" class="link">
                                <?php wp_nav_menu(array(
                                    'theme_location'    =>  'header',
                                    'container'         =>  false
                                )); ?>
                            </div>

                            <div id="ham" class="menu__hamburger">

                                <button class="hamburger  hamburger--collapse" type="button">

                                    <span class="hamburger-box">

                                    <span class="hamburger-inner"></span>

                                    </span>
                                    
                                </button>

                            </div>
                        </div>

                        <!-- logo -->
                        <div class="col-3 logo">
                            <a href="<?php echo esc_url_raw(home_url()); ?>">

                                <img src="https://wildtrackvalsugana.it/wp-content/uploads/2022/06/logo.png" alt="Logo Wildtrack">

                            </a>
                        </div>
                    </div>
                    <!-- Pannel mobile -->
                    <div id="menu-mobile" class="pannel">
                        <div class="row">

                            <div class="col-12 link__mobile">
                                <?php wp_nav_menu(array(
                                    'theme_location'    =>  'header',
                                    'container'         =>  false
                                )); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
    </header>

        <div class="side">
            <h5>Levico terme Trentino Italia </h5>
        </div>

<main class="container-fluid">




