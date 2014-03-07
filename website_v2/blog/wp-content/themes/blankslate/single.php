
<div class="header_style">
    <?php get_header(); ?>
</div>    
<div class="col-md-9">
<div id="content_side_wrap">
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    
    <div id="content_section">
        <!--
    <header class="header">
            <h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
    </header>
       -->
    <?/*php get_template_part( 'entry' ); */?>
    <?/*php if ( ! post_password_required() ) comments_template( '', true ); */?>
    
       
    <div id="content_section">
        <div id="blog-post">
        <h1><?php the_title(); ?></h1>
        <h4>Posted on <?php the_time('F jS, Y') ?></h4>
        <p><?php the_content(__('(more...)')); ?></p>
    </div>
           </div>
    
    </div>
<?php endwhile; endif; ?>
    <!--
<footer class="footer">
<?php get_template_part( 'nav', 'below-single' ); ?>
</footer>
    -->
</section></div></div>
<?php get_sidebar(); ?>
<?php/* get_footer();*/ ?>

    


    