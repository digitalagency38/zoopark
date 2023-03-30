<?php 
/**
*	Template name: Наши питомцы
*/
 ?>
<?php
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
<div class="furry-actors">
    <div class="furry-actors__paws">
        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/paws-reviews.svg" alt="paws">
    </div>
    <div class="container">
        <div class="furry-actors__in our-pets">
            <h2><?php echo get_the_title(); ?></h2>
            <div class="furry-actors__animals">
				<?php $services = get_field('pitomec'); ?>
				<?php foreach( $services as $key => $post) { // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
          		<?php setup_postdata($post); ?>
					<a href="<?php echo get_permalink(); ?>" class="furry-actors__animals-item wow animate__fadeInUp" data-wow-duration="<?php echo $key+1; ?>s" data-wow-delay="0s">
						<div class="furry-actors__animals-image">
							<img src="<?= get_field( "img" ); ?>" alt="animals">
						</div>
						<div class="furry-actors__animals-info">
							<h2><?php the_title(); ?></h2>
							<div class="furry-actors__animals-about">
								<span><?php echo $post->poroda?></span>
								<span class="animals-about-geo"><?php echo $post->city?></span>
							</div>
						</div>
					</a>
					<?php } ?>
			  <?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
            </div>
        </div>
    </div>
</div>
<?php $banner = get_field( 'banner' );?>	
<div class="mini-banner wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
    <div class="mini-banner__leaves">
        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/laeves-fl.png" alt="leaves">
    </div>
    <div class="container">
        <div class="mini-banner__in">
            <div class="mini-banner__card">
                <div class="mini-banner__card-image">
                    <img src="<?php echo $banner['img']; ?>" alt="image">
                </div>
                <div class="mini-banner__card-text">
                    <h2><?php echo $banner['title']; ?></h2>
                    <?php echo $banner['text']; ?>
                </div>
            </div>
        </div>
    </div>
</div>  
<?php
    get_footer();
?>