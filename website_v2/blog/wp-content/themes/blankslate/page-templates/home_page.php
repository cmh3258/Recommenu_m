<?php
/*
Template Name: Home Page
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width" />
        <title>
            <?php wp_title( ' | ', true, 'right' ); ?>
        </title>
        
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap/css/bootstrap.css" />
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
                            <!--<li><a href="#" class=""><img src="<?php bloginfo('stylesheet_directory'); ?>/images/apple-badge.png" alt="logo" id="app-store-icon"/></a></li>
                            -->
                            <!--
                            <li class="active li-pad"><a class="a-pad" href="#">About the App</a></li>
                            <li class="li-pad"><a href="#">Learn More</a></li>
                            <li class="li-pad"><a href="#">Meet the Team</a></li>
                            <li class="li-pad"><a href="#">Contact Us</a></li>
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
        
        <div id="header" class="full-large">
                <!--<img src="images/img_cover_new.jpg" class="img-responsive" alt="Responsive image">-->
                <div class="container">
                    <div class="text-center">
                        <div class="helper">
                        <div id="web">
                        <!--<h3><a href="http://www.recommenuapp.com/">Visit the Product Site</a></h3>-->
                        <ul class="text-center">
                            <?php
                            $args=1;
                            $recent_posts = wp_get_recent_posts(1);
                            foreach( $recent_posts as $recent ){
                                echo '<h2>'.$recent["post_title"].'</h2>';
                                echo '<li class="header-title"><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .'Read the Story'.'</a> </li> ';
                                }
                                ?>
                        </ul>
                        
                        </div>
                    </div>
                    <!--<h3>Recommendations from the people that you trust</h3>-->
                    </div>
                </div>
            </div>
        
            
    <div id="container" class="container">

        <div id="blog-post" class="col-md-9">
            <section id="content" role="main">
                <?php
                $args = array('posts_per_page' => 8, 'cat' => 1);
                $the_query = new WP_Query( 'posts_per_page=1','cat=1' );
                $the_query = new WP_Query( $args );
                //// The Loop
                while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
                			
                    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                         <h3>
                             <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                         </h3>
                        <h4><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></h4>
                        <div class="entry">
                            <?php	the_content('Read the rest of this entry »'); ?>
                        </div>
                        <!--
                            <p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?></p>
                        -->
                        </div>
					
		<?php endwhile; ?>


		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('« Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries »') ?></div>
		</div>

<?php wp_reset_postdata(); ?>

	</div>

<?php get_sidebar(); ?>

<?php/* get_footer(); */?>