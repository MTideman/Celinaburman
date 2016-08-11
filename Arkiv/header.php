<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon-16x16.png">
        <title>
        <?php 
            wp_title('|', 'true', 'right');
            bloginfo('name');
        ?>
        </title>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/animate.css">
        
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,500,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"> </script>
        <?php wp_head(); ?>
    </head>
    <body>
        <header class="center">
            <div class="logo">
                <a href="<?php echo get_option ('home'); ?>"><img src="<?php bloginfo('template_url');?>/img/logo.png" title="bloginfo('title')"></a>
            </div>
            <div id="nav-toggle">
                <span></span>
            </div>
            <div class="topnav">
                <ul>
                    <a href="http://www.celinaburman.se/">
                        <li>
                            <p class="topnav-center">Hem</p>
                        </li>
                    </a>
                    <a href="http://www.celinaburman.se/burman">
                        <li>
                            <p class="topnav-center">Om mig</p>
                        </li>
                    </a>
                    <a href="http://www.celinaburman.se/pt">
                        <li>
                            <p class="topnav-center">PT</p>
                        </li>
                    </a>
                    <a href="http://www.celinaburman.se/kontakt">
                        <li class="topnav-no-right">
                            <p class="topnav-center">Kontakt</p>
                        </li>
                    </a>
                </ul>
            </div>
        </header>
        
