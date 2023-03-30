<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Soluzioni_di_casa
 */

?>

<div class="zoo-news__animals-item wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0s" id="post-<?php the_ID(); ?>">
	<div class="zoo-news__animals-image">
		<?php soluzioni_di_casa_post_thumbnail(); ?>
	</div>
	<div class="zoo-news__animals-info">
		<span>
			<?php
				$date="$post->post_date";
				$y = date('Y.m.d',strtotime($date));
				echo $y;
			?>
		</span>
		<h2><?php the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?></h2>
		
		<?php echo $post->post_excerpt?>
	</div>
</div><!-- #post-<?php the_ID(); ?> -->
