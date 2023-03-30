<?php 
/**
*	Template name: Страница театра
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
<?php $detailed = get_field( 'detailed' );?>	
<div class="detailed">
    <div class="container">
        <div class="detailed__in">
            <div class="detailed__in-banner glide wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                <div class="glide__track" data-glide-el="track">
                    <div class="glide__slides">
						<?php if (is_array($detailed)) {
							foreach ($detailed as $e) { ?>
								<div class="detailed__in-banner__item">
									<img src="<?php echo $e['img']; ?>" alt="banner">
								</div>
							<?php } ?>
						<?php } ?>
                    </div>
                </div>
                <div class="detailed__arrows global__arows">
                    <div class="global__arow global__arow--prev" @click="fluffy.slider.go('<')">
                        <div class="global__arow-in">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 40 16" fill="none"><path d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM39.7071 8.70711C40.0976 8.31658 40.0976 7.68342 39.7071 7.29289L33.3431 0.928932C32.9526 0.538408 32.3195 0.538408 31.9289 0.928932C31.5384 1.31946 31.5384 1.95262 31.9289 2.34315L37.5858 8L31.9289 13.6569C31.5384 14.0474 31.5384 14.6805 31.9289 15.0711C32.3195 15.4616 32.9526 15.4616 33.3431 15.0711L39.7071 8.70711ZM1 9H39V7H1V9Z" fill="#EC6708"></path></svg>
                        </div>
                    </div>
                    <div class="global__arow global__arow--next" @click="fluffy.slider.go('>')">
                        <div class="global__arow-in">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 40 16" fill="none"><path d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM39.7071 8.70711C40.0976 8.31658 40.0976 7.68342 39.7071 7.29289L33.3431 0.928932C32.9526 0.538408 32.3195 0.538408 31.9289 0.928932C31.5384 1.31946 31.5384 1.95262 31.9289 2.34315L37.5858 8L31.9289 13.6569C31.5384 14.0474 31.5384 14.6805 31.9289 15.0711C32.3195 15.4616 32.9526 15.4616 33.3431 15.0711L39.7071 8.70711ZM1 9H39V7H1V9Z" fill="#EC6708"></path></svg>
                        </div>
                    </div>
                </div>
                <div class="glide__bullets global__dots" data-glide-el="controls[nav]">
					<?php if (is_array($detailed)) {
						foreach ($detailed as $key => $e) { ?>
                        	<button class="glide__bullet global__dot" data-glide-dir="=<?php echo $key; ?>"></button>
						<?php } ?>
					<?php } ?>
                </div>
            </div>
            <div class="detailed__info">
                <div class="detailed__info-leaves">
                    <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/laeves-fl.png" alt="leaves">
                </div>
<?php $detailed_info = get_field( 'detailed_info' );?>	
                <div class="detailed__info-text wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                    <h2><?php echo $detailed_info['title']; ?></h2>
                    <?php echo $detailed_info['text']; ?>
                </div>
            </div>
            <div class="detailed__about">
				<?php $c_d_f = ($detailed_info['catalog']); ?>
				<?php if (is_array($c_d_f)) {
					foreach ($c_d_f as $key => $e) { ?>
						<div class="detailed__about-item wow animate__fadeInUp" data-wow-duration="<?php echo $key+1; ?>s" data-wow-delay="0s">
							<div class="detailed__about-item-image">
								<img src="<?php echo $e['img']; ?>" alt="photo">
							</div>
							<div class="detailed__about-item-text">
								<h2><?php echo $e['title']; ?></h2>
								<?php echo $e['text']; ?>
							</div>
						</div>
					<?php } ?>
				<?php } ?>
            </div>
        </div>
    </div>
</div> 
<?php $fairy = get_field( 'fairy' );?>	
<div class="fairy-tales wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
    <div class="services__big-branch">
        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/big-branch.svg" alt="trees">
    </div>
    <div class="container">
        <div class="fairy-tales__in">
            <div class="fairy-tales__bg_top">
                <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/tales_top.svg" width="100%" alt="">
            </div>
            <h2><?php echo $fairy['title']; ?></h2>
            <div class="fairy-tales__slider glide">
                <div class="glide__track" data-glide-el="track">
                    <div class="glide__slides">
						<?php $list33 = ($fairy['list33']); ?>
						<?php if (is_array($list33)) {
							foreach ($list33 as $e) { ?>
								<div class="fairy-tales__item">
									<div class="fairy-tales__item-image">
										<img src="<?php echo $e['img']; ?>" alt="image">
									</div>
									<div class="fairy-tales__item-text">
										<h2><?php echo $e['title']; ?></h2>
										<?php echo $e['text']; ?>
									</div>
								</div>
							<?php } ?>
						<?php } ?>
                    </div>
                </div>
                <div class="fairy-tales__slider-row">
                    <div class="glide__bullets global__dots" data-glide-el="controls[nav]">
						<?php if (is_array($list33)) {
							foreach ($list33 as $key => $e) { ?>
                            	<div class="glide__bullet global__dot" data-glide-dir="=<?php echo $key; ?>"></div>
							<?php } ?>
						<?php } ?>
                    </div>
                    <div class="fairy-tale__arrows global__arows">
                        <div class="global__arow global__arow--prev" @click="tales.slider.go('<')">
                            <div class="global__arow-in">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 40 16" fill="none"><path d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM39.7071 8.70711C40.0976 8.31658 40.0976 7.68342 39.7071 7.29289L33.3431 0.928932C32.9526 0.538408 32.3195 0.538408 31.9289 0.928932C31.5384 1.31946 31.5384 1.95262 31.9289 2.34315L37.5858 8L31.9289 13.6569C31.5384 14.0474 31.5384 14.6805 31.9289 15.0711C32.3195 15.4616 32.9526 15.4616 33.3431 15.0711L39.7071 8.70711ZM1 9H39V7H1V9Z" fill="#2B2A29"></path></svg>
                            </div>
                        </div>
                        <div class="global__arow global__arow--next" @click="tales.slider.go('>')">
                            <div class="global__arow-in">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 40 16" fill="none"><path d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM39.7071 8.70711C40.0976 8.31658 40.0976 7.68342 39.7071 7.29289L33.3431 0.928932C32.9526 0.538408 32.3195 0.538408 31.9289 0.928932C31.5384 1.31946 31.5384 1.95262 31.9289 2.34315L37.5858 8L31.9289 13.6569C31.5384 14.0474 31.5384 14.6805 31.9289 15.0711C32.3195 15.4616 32.9526 15.4616 33.3431 15.0711L39.7071 8.70711ZM1 9H39V7H1V9Z" fill="#2B2A29"></path></svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fairy-tales__bg_bottom">
                <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/tales_bottom.svg" width="100%" alt="">
            </div>
        </div>
    </div>
</div> 
<?php $poster = get_field( 'poster' );?>	
<div class="poster">
    <div class="container">
        <div class="poster__in fluffy-theater-poster">
            <h2><?php echo $poster['title']; ?></h2>
            <div class="billboard-cards ">
				<?php $list44 = ($poster['list44']); ?>
				<?php if (is_array($list44)) {
					foreach ($list44 as $e) { ?>
						<div class="billboard-cards__item wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
							<div class="billboard-cards-image">
								<img src="<?php echo $e['img']; ?>" alt="image">
							</div>
							<div class="billboard-cards-about">
								<div class="billboard-cards-about-title">
									<h2><?php echo $e['title']; ?></h2>
									<div class="billboard-cards-date__mobile">
										<span><?php echo $e['number']; ?></span>
										<span><?php echo $e['mounth']; ?></span>
									</div>
								</div>
								<?php echo $e['text']; ?>
								<div class="billboard-cards-price">
									<span>Билеты: <?php echo $e['price']; ?></span>
									<a href="<?php echo $e['link']; ?>" class="billboard-cards-button">
										<span>К покупке</span>
									<div class="green-button"></div>
									</a>
								</div>
							</div>
							<div class="billboard-cards-date">
								<span><?php echo $e['number']; ?></span>
								<span><?php echo $e['mounth']; ?></span>
							</div>
						</div>
					<?php } ?>
				<?php } ?> 
            </div>
        </div>
    </div>
</div> 
<?php $actors = get_field( 'actors' );?>
<div class="furry-actors furry-actors-fluffy">
    <div class="container">
        <div class="furry-actors__in our-pets">
            <h2><?php echo $actors['title']; ?></h2>
            <div class="furry-actors__animals">
				<?php $list55 = ($actors['list55']); ?>
					<?php foreach( $list55 as $key => $post) { // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
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
<?php $atmosphere = get_field( 'atmosphere' );?>
<div class="atmosphere">
    <div class="atmosphere__paws">
        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/paws-reviews.svg" alt="paws">
    </div>
    <div class="container">
        <div class="atmosphere__in">
            <h2><?php echo $atmosphere['title']; ?></h2>
            <div class="atmosphere__gallery">
				<?php $list66 = ($atmosphere['list66']); ?>
				<?php if (is_array($list66)) {
					foreach ($list66 as $key => $e) { ?>
						<div class="atmosphere__gallery-item wow animate__fadeInUp" data-wow-duration="<?php echo $key+1; ?>s" data-wow-delay="0s">
							<img src="<?php echo $e['img']; ?>" alt="gallery">
						</div>
					<?php } ?>
				<?php } ?> 
            </div>
        </div>
    </div>
</div> 
<?php $gallery = get_field( 'gallery' );?>
<div class="gallery wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
    <div class="gallery__big-branch">
        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/big-branch.svg" alt="trees">
    </div>
    <div class="gallery__paws">
        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/paws-reviews.svg" alt="paws">
    </div>
    <div class="container">
        <div class="gallery__in">
            <div class="gallery__menu">
                <h2><?php echo $gallery['title']; ?></h2>
                <ul>
					<li :class="{'isActive': gallery.activeSlidesType == 'all' }">
						<a href="#" @click.prevent="gallery.changeSlidesType('all')">Все</a>
					</li>
					<li :class="{'isActive': gallery.activeSlidesType == 'image' }">
						<a href="#" @click.prevent="gallery.changeSlidesType('image')">Фотографии</a>
					</li>
					<li :class="{'isActive': gallery.activeSlidesType == 'video' }">
						<a href="#" @click.prevent="gallery.changeSlidesType('video')">Видео файлы</a>
					</li>
                </ul>
                <a href="<?php echo $gallery['link']; ?>" class="gallery__menu-button">
                    <span>Вся галерея</span>
                <div class="green-button"></div>
                </a>
            </div>
            <div class="gallery__images glide">
                <div class="glide__track" data-glide-el="track">
                    <div class="glide__slides">
						<?php $list77 = ($gallery['list77']); ?>
						<?php if (is_array($list77)) {
							foreach ($list77 as $e) { ?>
								<div class="gallery__images-item glide__slide" v-if="gallery.activeSlidesType == 'image' || gallery.activeSlidesType == 'all'">
									<img src="<?php echo $e['img']; ?>" alt="image">
								</div>
							<?php } ?>
						<?php } ?> 
						<?php $list111 = ($gallery['list111']); ?>
						<?php if (is_array($list111)) {
							foreach ($list111 as $e) { ?>
								<div class="gallery__images-item glide__slide" v-if="gallery.activeSlidesType == 'video' || gallery.activeSlidesType == 'all'">
									<iframe width="100%" height="100%" src="<?php echo $e['img']; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>
							<?php } ?>
						<?php } ?> 
                    </div>
                </div>
            </div>
            <div class="services__pagination gallery__pagination" v-if="gallery.slider">
                <div class="global__dots">
					<?php if (is_array($list77)) {
						foreach ($list77 as $key => $e) { ?>
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
<?php $mini_banner = get_field( 'mini_banner' );?>
<div class="mini-banner wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
    <div class="mini-banner__leaves">
        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/laeves-fl.png" alt="leaves">
    </div>
    <div class="container">
        <div class="mini-banner__in">
            <div class="mini-banner__card">
                <div class="mini-banner__card-image">
                    <img src="<?php echo $mini_banner['link']; ?>" alt="image">
                </div>
                <div class="mini-banner__card-text">
                    <h2><?php echo $mini_banner['title']; ?></h2>
                    <?php echo $mini_banner['text']; ?>
                </div>
            </div>
        </div>
    </div>
</div> 
<?php
    get_footer();
?>