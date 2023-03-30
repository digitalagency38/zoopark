<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Soluzioni_di_casa
 */

get_header();
?>
<div class="bread-crumbs">
    <div class="container">
        <div class="bread-crumbs__in our-pets">
            <ul>
				<?php if(function_exists('bcn_display'))
				{
					bcn_display();
				}?>
            </ul>
        </div>
    </div>
</div>
<div class="zoo-news">
    <div class="zoo-news__leaves">
        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/laeves-fl.png" alt="leaves">
    </div>
    <div class="zoo-news__paws">
        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/paws-reviews.svg" alt="paws">
    </div>
    <div class="container">
        <div class="zoo-news__in">
            <h2><?php single_post_title(); ?></h2>
            <div class="zoo-news__animals">
				<?php
				if ( have_posts() ) :
				?>
				<?php

				/* Start the Loop */
				while ( have_posts() ) :
				the_post();

				/*
							 * Include the Post-Type-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
							 */
				get_template_part( 'template-parts/content', get_post_type() );

				endwhile;

				//the_posts_navigation();

				else :

				//get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
            </div>
            <div class="zoo-news__navigation">
				<?php wp_pagenavi(); ?>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>