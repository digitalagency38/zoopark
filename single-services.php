<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
<div class="detailed-animal-page">
    <div class="detailed-animal-page__leaves">
        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/laeves-fl.png" alt="leaves">
    </div>
    <div class="container">
        <div class="detailed-animal-page__in">
            <div class="detailed-animal-page__in-banner">
                <div class="detailed-animal-page__in-banner__item">
                    <img src="<?= get_field( "img" ); ?>" alt="banner">
                    <div class="banner-text">
                        <h2><?php echo get_the_title(); ?></h2>
                        <div class="banner-text-info">
                            <span><?= get_field( "poroda" ); ?></span>
                            <a href=""><?= get_field( "city" ); ?></a>
                        </div>
    
                    </div>
                </div>
            </div>
            <div class="detailed-animal-page__info">
                <div class="detailed-animal-page__info-text">
                    <h2 class="detailed-animal-page__title"><?= get_field( "poroda" ); ?></h2>
                    <?= get_field( "text" ); ?>
                </div>
            </div>
            <div class="detailed-animal-page__about glide">
                <div class="glide__track" data-glide-el="track">
                    <div class="glide__slides">
						<?php $gal = get_field( 'gal' );?>	
						<?php if (is_array($gal)) {
							foreach ($gal as $e) { ?>
								<div class="detailed-animal-page__about-item">
									<div class="detailed-animal-page__about-item-image">
										<img src="<?php echo $e['img']; ?>" alt="photo">
									</div>
								</div>
							<?php } ?>
						<?php } ?>
                    </div>
                </div>
            </div>
            <div class="services__pagination" v-if="animal.slider">
                <div class="global__dots">	
					<?php if (is_array($gal)) {
						foreach ($gal as $key => $e) { ?>
                        <div class="global__dot" :class="{'isActive': animal.slider.index == <?php echo $key; ?>}" @click="animal.slider.go('=<?php echo $key; ?>')"><?php echo $key; ?></div>
						<?php } ?>
					<?php } ?>
                </div>
                <div class="services__arrows global__arows">
                    <div class="global__arow global__arow--prev" @click="animal.slider.go('<')">
                        <div class="global__arow-in">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 40 16" fill="none"><path d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM39.7071 8.70711C40.0976 8.31658 40.0976 7.68342 39.7071 7.29289L33.3431 0.928932C32.9526 0.538408 32.3195 0.538408 31.9289 0.928932C31.5384 1.31946 31.5384 1.95262 31.9289 2.34315L37.5858 8L31.9289 13.6569C31.5384 14.0474 31.5384 14.6805 31.9289 15.0711C32.3195 15.4616 32.9526 15.4616 33.3431 15.0711L39.7071 8.70711ZM1 9H39V7H1V9Z" fill="#2B2A29"></path></svg>
                        </div>
                    </div>
                    <div class="global__arow global__arow--next" @click="animal.slider.go('>')">
                        <div class="global__arow-in">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 40 16" fill="none"><path d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM39.7071 8.70711C40.0976 8.31658 40.0976 7.68342 39.7071 7.29289L33.3431 0.928932C32.9526 0.538408 32.3195 0.538408 31.9289 0.928932C31.5384 1.31946 31.5384 1.95262 31.9289 2.34315L37.5858 8L31.9289 13.6569C31.5384 14.0474 31.5384 14.6805 31.9289 15.0711C32.3195 15.4616 32.9526 15.4616 33.3431 15.0711L39.7071 8.70711ZM1 9H39V7H1V9Z" fill="#2B2A29"></path></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<?php
get_footer();
?>