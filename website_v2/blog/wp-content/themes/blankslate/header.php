<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width" />
        <title>
            <?php wp_title( ' | ', true, 'right' ); ?>
        </title>
        
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap/css/mystyle.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
        <!--
        <?php
            if ( is_page_template('cover_page.php')) { ?>
            <link rel="stylesheet" type="text/css" href="<?php bloginfo('page-templates'); ?>/home_style.css" />
            <?php } 
        ?>
        
        
        <?php if ( is_page(6) ) { ?>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap/css/bootstrap.css" />

        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bootstrap/css/mystyle.css" type="text/css" media="screen" />
            <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/home_style.css" type="text/css" media="screen" />
            <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bootstrap/css/bootstrap.css" type="text/css" media="screen" />
            <?php } else { ?>
            <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
            <?php } ?>
        
        
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
        <?php if(is_page_template('cover_page.php')) :?>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/home_style.css" media="screen" />
        <?php endif;?>
        -->
        
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        
        <div class="navbar" role="navigation">
              <div class="na navbar-fixed-top">
                <div class="container">
                    <button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
                                        <span class = "icon-bar"></span>
                                        <span class = "icon-bar"></span>
                                        <span class = "icon-bar"></span>
                    </button>
        
                    <a href="http://localhost/GitHub/Recommenu_m/website_v2/example.html" class="brand"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/wordmark_blue.png" alt="logho" id="nav-logo"/> </a>
                    <div class="collapse navbar-collapse navHeaderCollapse">
                        <ul class="nav navbar-nav navbar-right">
                           <!-- <li><a href="#" class=""><img src="<?php bloginfo('stylesheet_directory'); ?>/images/apple-badge.png" alt="logo" id="app-store-icon"/></a></li>
                            <!--
                            <li class="active li-pad"><a class="a-pad" href="#">About the App</a></li>
                            <li class="li-pad"><a href="#">Learn More</a></li>
                            <li class="li-pad"><a href="#">Meet the Team</a></li>                           <li class="li-pad"><a href="#">Contact Us</a></li>
                            <li class="li-pad"><a href="#">Blog</a></li>
                            -->
                            <div id="pass">
                            <li class="p-pad"><?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?></li>
                            </div>
                        </ul>
                    </div>
                </div>
              </div>
        </div>
        <!--
        <nav id="menu" role="">
         
            <!--
            <div id="search">
                <?/*php get_search_form(); */?>
            </div>
            -->
            <!--
            <p id="test"><?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?></p>
            
        </nav>
        -->
        
        <div id="wrapper" class="hfeed">
            <header id="header-main" role="banner">                
                <section id="branding" class="text-center">
                    <div id="web">
                        <!--<h3><a href="http://www.recommenuapp.com/">Visit the Product Site</a></h3>-->
                        <!--
                        <ul>
                            <?php
                            $args=1;
                            $recent_posts = wp_get_recent_posts(1);
                            foreach( $recent_posts as $recent ){
                                echo '<li class="header-title"><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
                                }
                                ?>
                        </ul>
                        -->
                    </div>
                </section>
            </header>
            
    <div id="container">