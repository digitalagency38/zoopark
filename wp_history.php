<?php 
/**
*	Template name: Страница истории
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

<div class="history-zoo">
    <div class="history-zoo__paws">
        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/paws-reviews.svg" alt="paws">
    </div>
    <div class="container">
        <div class="history-zoo__in">
            <h2 class="history-zoo__title"><?php echo get_the_title() ?></h2>
            <div class="history-zoo__text">
				<?php echo get_the_content() ?>
            </div>
        </div>
    </div>
</div> 
<?php $history = get_field( 'history' );?>	
<div class="history-by-year">
    <div class="container">
        <div class="history-by-year__in">
			<?php if (is_array($history)) {
				foreach ($history as $e) { ?>
					<div class="history-by-year__in-item">
						<span class="wow animate__fadeInLeft" data-wow-duration="1s" data-wow-delay="0s"><?php echo $e['year']; ?></span>
						<div class="year-line">
							<div class="circle">
								<div class="circle-monile"></div>
							</div>
							<div class="year-mobile"><?php echo $e['year']; ?></div>
						</div>
						<div class="about-year wow animate__fadeInRight" data-wow-duration="1s" data-wow-delay="0s">
							<div class="about-year-image">
								<img src="<?php echo $e['img']; ?>" alt="image">
							</div>
							<?php echo $e['text']; ?>
						</div>
					</div>
				<?php } ?>
			<?php } ?>
        </div>
    </div>
</div> 
<?php $gallery = get_field( 'gallery' );?>	
<div class="gallery gallery-history wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
    <div class="gallery__paws">
        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/paws-reviews.svg" alt="paws">
    </div>
    <div class="container">
        <div class="gallery__in gallery__in-history">
            <div class="gallery__menu">
                <h2><?php echo $gallery['title']; ?></h2>
                <ul>
                    <li><a href="#">Все</a></li>
                    <li><a href="#">Фотографии</a></li>
                    <li><a href="#">Видео файлы</a></li>
                </ul>
                <a href="<?php echo $gallery['link']; ?>" class="gallery__menu-button">
                    <span>Вся галерея</span>
                <div class="green-button"></div>
                </a>
            </div>
            <div class="gallery__images glide">
                <div class="glide__track" data-glide-el="track">
                    <div class="glide__slides">
							<?php $list111 = ($gallery['list']); ?>
							<?php if (is_array($list111)) {
								foreach ($list111 as $e) { ?>
									<div class="gallery__images-item glide__slide">
										<img src="<?php echo $e['img']; ?>" alt="image">
									</div>
							<?php } ?>
						<?php } ?>
                    </div>
                </div>
            </div>

            <div class="services__pagination gallery__pagination" v-if="gallery.slider">
                <div class="global__dots">
					<?php if (is_array($list111)) {
						foreach ($list111 as $key => $e) { ?>
                        	<div class="global__dot" :class="{'isActive': gallery.slider.index == <?php echo $key; ?>}" @click="gallery.slider.go('=<?php echo $key; ?>')"><?php echo $key; ?></div>
						<?php } ?>
					<?php } ?>
                </div>
                <div class="services__arrows global__arows">
                    <div class="global__arow global__arow--prev" @click="gallery.slider.go('<')">
                        <div class="global__arow-in">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 40 16" fill="none"><path d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM39.7071 8.70711C40.0976 8.31658 40.0976 7.68342 39.7071 7.29289L33.3431 0.928932C32.9526 0.538408 32.3195 0.538408 31.9289 0.928932C31.5384 1.31946 31.5384 1.95262 31.9289 2.34315L37.5858 8L31.9289 13.6569C31.5384 14.0474 31.5384 14.6805 31.9289 15.0711C32.3195 15.4616 32.9526 15.4616 33.3431 15.0711L39.7071 8.70711ZM1 9H39V7H1V9Z" fill="#2B2A29"></path></svg>
                        </div>
                    </div>
                    <div class="global__arow global__arow--next" @click="gallery.slider.go('>')">
                        <div class="global__arow-in">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 40 16" fill="none"><path d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM39.7071 8.70711C40.0976 8.31658 40.0976 7.68342 39.7071 7.29289L33.3431 0.928932C32.9526 0.538408 32.3195 0.538408 31.9289 0.928932C31.5384 1.31946 31.5384 1.95262 31.9289 2.34315L37.5858 8L31.9289 13.6569C31.5384 14.0474 31.5384 14.6805 31.9289 15.0711C32.3195 15.4616 32.9526 15.4616 33.3431 15.0711L39.7071 8.70711ZM1 9H39V7H1V9Z" fill="#2B2A29"></path></svg>
                        </div>
                    </div>
                </div>
            </div>
            <a href="<?php echo $gallery['link']; ?>" class="gallery__menu-button-mobile">
                <span>Вся галерея</span>
				<div class="green-button"></div>
            </a>
        </div>
    </div>
</div> 
<?php
    get_footer();
?>