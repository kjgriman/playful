<?php


// Exit if accessed directly
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

get_header();
$queryTestimonial= query_posts("category_name=testimonial"); ?>


<main class="main-content">

    <div class="jumbotron text-center banner-home" style="margin-bottom:0">
      <h1>Some sort of heading goes here</h1>
      <p>What! i have  no idea what to add here... just place some text... too lazy to lipsum it. Did you know frogs have 2 legs?</p> 
      <a href=""> click me to fin out more</a>
    </div>

    <div class="container px-2 pt-3 pb-5">    
        <h3>Testimonials</h3>                
        <div class="row">
        <?php if (have_posts($queryTestimonial)) : 
            while (have_posts()) : the_post();?>                    
                <div class="col-md-4">
                    <article id="post-<?php the_ID();?>" <?php post_class();?>>
                        <?php the_post_thumbnail(); ?>  
                        <div class="entry-content text-center">
                            <?php the_content();?>
                        </div><!-- entry-content -->
                    </article>
                </div>
            <?php endwhile;
            wp_reset_postdata();
             ?>
        </div><!-- row -->
    </div><!-- container -->
    <?php else :
        _e( "No se han encontrado resultados", "tu-textdomain" );
    endif; ?>

    <div class="container second-content">
        <h4>FEATURED</h4>
        <?php $queryFeatured= query_posts("category_name=featured");
            if (have_posts($queryFeatured)):
                while (have_posts()) :  the_post();?>
                    <h3><?php the_title(); ?> </h3>
                    <?php
                    the_excerpt();

                endwhile;    
                wp_reset_postdata();
            endif;
        $arg= array('category__not_in' => array('2','3'));

        $query= query_posts($arg); ?>
            <?php
            if (have_posts($query)):
                while (have_posts()) :  the_post();?>
                <div class="content-blog">            
                    <h4 class="pt-5 ">BLOG</h4>
                    <h3><?php the_title(); ?> </h3>
                    <?php the_excerpt(); ?>
                    <div class="content-author">
            
                        <div class="img-author" style="background-image: <?php echo get_avatar(get_the_author_meta('ID')); ?>"></div>
                        <?php the_author(); ?>
                    </div>
                    <a class="btn-see-more">See more</a>
                </div>
                <?php endwhile;    
                wp_reset_postdata();
            endif;  ?>
    </div>
</main>  

<?php get_footer();