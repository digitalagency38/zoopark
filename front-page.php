<?php 
/**
*	Template name: Главная страница
*/
 ?>
<?php

get_header();
?>
<?php $banner = get_field( 'banner' );?>	
<div class="banner">
    <div class="leaves">
        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/leaves2.svg" alt="leaves">
    </div>
    <div class="grass">
        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/grass.svg" alt="raccoon">
    </div>
    <div class="container">
    <div class="banner__in">
        <div class="banner__left">
            <span><?php echo $banner['title']; ?></span>
            <div class="cities">
				<?php $list = ($banner['list']); ?>
				<?php if (is_array($list)) {
					foreach ($list as $e) { ?>
						<a href="<?php echo $e['link']; ?>" class="cities__item">
							<span><?php echo $e['title']; ?></span>
							<div class="icon"></div>
						</a>
					<?php } ?>
				<?php } ?>
            </div>
            <div class="raccoon">
                <div class="raccoon__item">
                    <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/needles.png" alt="needles">
                </div>
                <div class="raccoon__item">
                    <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/raccoon.png" alt="raccoon">
                </div>
                
            </div>

        </div>
        <div class="banner__right">
            <div class="about"><?php echo $banner['text']; ?></div>
            
            <div class="orange-blocks">
                <div class="orange-blocks__item">
                    <a href="<?php echo $banner['link']; ?>" class="pay">
                        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/buy_ticket.svg" width="100%" alt="arrow">
                    </a>
					<?php $block1 = ($banner['block1']); ?>
                    <div class="text">
                        <h2><?php echo $block1['title']; ?></h2>
                        <?php echo $block1['text']; ?>
                    </div>
                    <div class="list">
						<?php $list2 = ($block1['list2']); ?>
						<?php if (is_array($list2)) {
							foreach ($list2 as $s) { ?>
								<a href="<?php echo $s['link']; ?>" class="list__item">
									<span><?php echo $s['title']; ?></span>
									<div class="icon"></div>
								</a>
							<?php } ?>
						<?php } ?>
                    </div>
                </div>
				<?php $block2 = ($banner['block2']); ?>
                <div class="orange-blocks__item">
                    <div class="text">
                        <h2><?php echo $block2['title']; ?></h2>
                        <?php echo $block2['text']; ?>
                    </div>
                    <a href="<?php echo $block2['link']; ?>" class="button">
                        <span>Подробнее</span>
						<div class="icon"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
</div> 
<?php $tabs = get_field( 'tabs' );?>	
<div class="tabs">
    <div class="tabs__paws">
        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/paws-reviews.svg" alt="paws">
    </div>
    <div class="container">
        <div class="tabs__in">
			<?php if (is_array($tabs)) {
				foreach ($tabs as $key => $e) { ?>
					<div class="tabs__item wow animate__fadeInUp" data-wow-duration="<?php echo $key+1; ?>s" data-wow-delay="0s">
						<div class="icon">
							<img src="<?php echo $e['img']; ?>" alt="icon">
						</div>
						<span><?php echo $e['title']; ?></span>
					</div>
				<?php } ?>
			<?php } ?>
        </div>
    </div>
</div> 
<?php $animals = get_field( 'animals' );?>
<div class="all-animals wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
    <div class="all-animals__bg">
        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/leaves2.svg" alt="leaves">
    </div>
    <div class="container">
        <div class="all-animals__in">
            <div class="all-animals__left">
                <h2><?php echo $animals['title']; ?></h2>
                <span><?php echo $animals['subtitle']; ?></span>
                <a href="<?php echo $animals['link']; ?>" class="button">
                    <span>Все животные</span>
                    <div class="green-button"></div>
                </a>
                <div class="all-animals__arrows global__arows">
                    <div class="global__arow global__arow--prev" @click="allAnimals.slider.go('<')">
                        <div class="global__arow-in">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 40 16" fill="none">
                                <path d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM39.7071 8.70711C40.0976 8.31658 40.0976 7.68342 39.7071 7.29289L33.3431 0.928932C32.9526 0.538408 32.3195 0.538408 31.9289 0.928932C31.5384 1.31946 31.5384 1.95262 31.9289 2.34315L37.5858 8L31.9289 13.6569C31.5384 14.0474 31.5384 14.6805 31.9289 15.0711C32.3195 15.4616 32.9526 15.4616 33.3431 15.0711L39.7071 8.70711ZM1 9H39V7H1V9Z" fill="#2B2A29"/>
                            </svg>
                        </div>
                    </div>
                    <div class="global__arow global__arow--next" @click="allAnimals.slider.go('>')">
                        <div class="global__arow-in">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 40 16" fill="none">
                                <path d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM39.7071 8.70711C40.0976 8.31658 40.0976 7.68342 39.7071 7.29289L33.3431 0.928932C32.9526 0.538408 32.3195 0.538408 31.9289 0.928932C31.5384 1.31946 31.5384 1.95262 31.9289 2.34315L37.5858 8L31.9289 13.6569C31.5384 14.0474 31.5384 14.6805 31.9289 15.0711C32.3195 15.4616 32.9526 15.4616 33.3431 15.0711L39.7071 8.70711ZM1 9H39V7H1V9Z" fill="#2B2A29"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="all-animals__right glide">
                <div class="glide__track" data-glide-el="track">
                    <div class="glide__slides">
						<?php $list4 = ($animals['list4']); ?>
						<?php if (is_array($list4)) {
							foreach ($list4 as $s) { ?>
                            <div class="all-animals__item glide__slide">
                                <div class="animal">
                                    <img src="<?php echo $s['img']; ?>" alt="animal">
                                </div>
                                <span><?php echo $s['title']; ?></span>
                            </div>
							<?php } ?>
						<?php } ?>
                    </div>
                </div>
            </div>
            <div class="all-animals__bottom-mobile">
                <div class="all-animals__arrows global__arows">
                    <div class="global__arow global__arow--prev" @click="allAnimals.slider.go('<')">
                        <div class="global__arow-in">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 40 16" fill="none">
                                <path d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM39.7071 8.70711C40.0976 8.31658 40.0976 7.68342 39.7071 7.29289L33.3431 0.928932C32.9526 0.538408 32.3195 0.538408 31.9289 0.928932C31.5384 1.31946 31.5384 1.95262 31.9289 2.34315L37.5858 8L31.9289 13.6569C31.5384 14.0474 31.5384 14.6805 31.9289 15.0711C32.3195 15.4616 32.9526 15.4616 33.3431 15.0711L39.7071 8.70711ZM1 9H39V7H1V9Z" fill="#2B2A29"/>
                            </svg>
                        </div>
                    </div>
                    <div class="global__arow global__arow--next" @click="allAnimals.slider.go('>')">
                        <div class="global__arow-in">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 40 16" fill="none">
                                <path d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM39.7071 8.70711C40.0976 8.31658 40.0976 7.68342 39.7071 7.29289L33.3431 0.928932C32.9526 0.538408 32.3195 0.538408 31.9289 0.928932C31.5384 1.31946 31.5384 1.95262 31.9289 2.34315L37.5858 8L31.9289 13.6569C31.5384 14.0474 31.5384 14.6805 31.9289 15.0711C32.3195 15.4616 32.9526 15.4616 33.3431 15.0711L39.7071 8.70711ZM1 9H39V7H1V9Z" fill="#2B2A29"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <a href="<?php echo $animals['link']; ?>" class="button">
                    <span>Все животные</span>
                    <div class="green-button"></div>
                </a>
            </div>
        </div>
    </div>
</div> 
<?php $ticket = get_field( 'ticket' );?>
<div class="buy-ticket">
    <div class="buy-ticket__paws">
        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/paws-reviews.svg" alt="paws">
    </div>
    <div class="container">
        <div class="buy-ticket__in">
            <h2><?php echo $ticket['title']; ?></h2>
            <div class="buy-ticket__items">
				<?php $list5 = ($ticket['list5']); ?>
				<?php if (is_array($list5)) {
					foreach ($list5 as $key => $e) { ?>
						<div class="buy-ticket__item wow animate__fadeInUp" data-wow-duration="<?php echo $key+1; ?>s" data-wow-delay="0s">
							<h2><?php echo $e['title']; ?></h2>
							<div class="price">
								<span>Цена</span>
								<span class="bold-price"><?php echo $e['price']; ?></span>
								</div>
								<div class="line"></div>
								<a href="<?php echo $e['link']; ?>" class="button-ticket">
									<span>К покупке</span>
								<div class="green-button"></div>
								</a>
						</div>
					<?php } ?>
				<?php } ?>
            </div>
        </div>
    </div>
</div> 
<?php $services = get_field( 'services' );?>
<div class="services wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
    <div class="services__big-branch">
        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/big-branch.svg" alt="trees">
    </div>
    <div class="container">
        <svg xmlns="http://www.w3.org/2000/svg">
            <defs>
              <filter id="lines_goo">
                <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
              </filter>
            </defs>
        </svg>
        <div class="services__in">
            <div class="services__background">
                <div class="services__background--top">
                    <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/services_top.svg" width="100%" alt="image">
                </div>
                <div class="services__background--middle"></div>
                <div class="services__background--bottom">
                    <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/services_bottom.svg" width="100%" alt="image">
                </div>
            </div>
            <div class="services__body">
                <h2><?php echo $services['title']; ?></h2>
                <div class="services__slider glide">
                    <div class="glide__track" data-glide-el="track">
                        <div class="glide__slides">
							<?php $list6 = ($services['list6']); ?>
							<?php if (is_array($list6)) {
								foreach ($list6 as $e) { ?>
									<div class="services__item glide__slide">
										<div class="services__item-image">
											<div class="services__item-image-in">
												<img src="<?php echo $e['img']; ?>" alt="image">
											</div>
											<div class="services__price">
												<div class="services__circle">
													<div></div>
													<div></div>
													<div></div>
													<div></div>
													<div></div>
												</div>
												<div class="services__price_text">
													<span>от</span>
													<span class="bold-pice"><?php echo $e['price']; ?></span>
												</div>
											</div>
										</div>
										<div class="services__item-about">
											<h2><?php echo $e['title']; ?></h2>
											<span><?php echo $e['text']; ?></span>
											<a href="<?php echo $e['link']; ?>" class="button-services">
												<span>Подробнее</span>
												<div class="green-button"></div>
											</a>
										</div>
									</div>
								<?php } ?>
							<?php } ?>
                        </div>
                    </div>
                </div>
                <div class="services__pagination" v-if="services.slider">
                    <div class="global__dots">
						<?php if (is_array($list6)) {
							foreach ($list6 as $key => $e) { ?>
								<div class="global__dot" :class="{'isActive': services.slider.index == <?php echo $key; ?>}" @click="services.slider.go('=<?php echo $key; ?>')"><?php echo $key; ?></div>
							<?php } ?>
						<?php } ?>
                    </div>
                    <div class="services__arrows global__arows">
                        <div class="global__arow global__arow--prev" @click="services.slider.go('<')">
                            <div class="global__arow-in">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 40 16" fill="none"><path d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM39.7071 8.70711C40.0976 8.31658 40.0976 7.68342 39.7071 7.29289L33.3431 0.928932C32.9526 0.538408 32.3195 0.538408 31.9289 0.928932C31.5384 1.31946 31.5384 1.95262 31.9289 2.34315L37.5858 8L31.9289 13.6569C31.5384 14.0474 31.5384 14.6805 31.9289 15.0711C32.3195 15.4616 32.9526 15.4616 33.3431 15.0711L39.7071 8.70711ZM1 9H39V7H1V9Z" fill="#2B2A29"></path></svg>
                            </div>
                        </div>
                        <div class="global__arow global__arow--next" @click="services.slider.go('>')">
                            <div class="global__arow-in">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 40 16" fill="none"><path d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM39.7071 8.70711C40.0976 8.31658 40.0976 7.68342 39.7071 7.29289L33.3431 0.928932C32.9526 0.538408 32.3195 0.538408 31.9289 0.928932C31.5384 1.31946 31.5384 1.95262 31.9289 2.34315L37.5858 8L31.9289 13.6569C31.5384 14.0474 31.5384 14.6805 31.9289 15.0711C32.3195 15.4616 32.9526 15.4616 33.3431 15.0711L39.7071 8.70711ZM1 9H39V7H1V9Z" fill="#2B2A29"></path></svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<?php $poster = get_field( 'poster' );?>
<div class="poster">
    <div class="container">
        <div class="poster__in">
            <h2><?php echo $poster['title']; ?></h2>
            <div class="billboard-cards ">
				<?php $list66 = ($poster['list66']); ?>
				<?php if (is_array($list66)) {
					foreach ($list66 as $key => $e) { ?>
						<div class="billboard-cards__item wow animate__fadeInUp" data-wow-duration="<?php echo $key+1; ?>s" data-wow-delay="0s">
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
<?php $fluffy = get_field( 'fluffy' );?>
<div class="gallery gallery-fluffy wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
    <div class="gallery__big-branch">
        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/big-branch.svg" alt="trees">
    </div>
    <div class="gallery__paws">
        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/paws-reviews.svg" alt="paws">
    </div>
    <div class="container">
        <div class="gallery__in">
            <div class="gallery__background">
                <div class="gallery__background--top">
                    <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/gallery_top.svg" width="100%" alt="image">
                </div>
                <div class="gallery__background--middle"></div>
                <div class="gallery__background--bottom">
                    <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/gallery_bottom.svg" width="100%" alt="image">
                </div>
            </div>
            <div class="gallery__body">
                <div class="gallery__menu">
                    <h2><?php echo $fluffy['title']; ?></h2>
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
                    <a href="<?php echo $fluffy['link']; ?>" class="gallery__menu-button">
                        <span>Вся галерея</span>
                    	<div class="green-button"></div>
                    </a>
                </div>
                <div class="gallery__images glide">
                    <div class="glide__track" data-glide-el="track">
                        <div class="glide__slides">
							<?php $fcat = ($fluffy['catalog']); ?>
								<?php if (is_array($fcat)) {
									foreach ($fcat as $e) { ?>
									<div class="gallery__images-item glide__slide" v-if="gallery.activeSlidesType == 'image' || gallery.activeSlidesType == 'all'">
										<img src="<?php echo $e['img']; ?>" alt="image">
									</div>
								<?php } ?>
							<?php } ?>
							<?php $fcat2 = ($fluffy['catalog2']); ?>
								<?php if (is_array($fcat2)) {
									foreach ($fcat2 as $e) { ?>
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
						<?php if (is_array($fcat)) {
							foreach ($fcat as $key => $e) { ?>
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
                <a href="<?php echo $fluffy['link']; ?>" class="gallery__menu-button-mobile">
                    <span>Вся галерея</span>
                    <div class="green-button"></div>
                </a>
            </div>
        </div>
    </div>
</div> 
<?php $reviews = get_field( 'reviews' );?>
<div class="reviews wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
    <div class="reviews__paws">
        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/paws-reviews.svg" alt="paws">
    </div>
    <div class="reviews__leaves">
        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/leaves2.svg" alt="leaves">
    </div>
    <div class="reviews__leaves-second">
        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/leaves2.svg" alt="leaves">
    </div>
    <div class="container">
        <div class="reviews__in">
            <h2><?php echo $reviews['title']; ?></h2>
            <div class="reviews__items reviews__slider glide">
                <div class="glide__track" data-glide-el="track">
                    <div class="glide__slides">
						<?php $rev_list = ($reviews['rev_list']); ?>
						<?php if (is_array($rev_list)) {
							foreach ($rev_list as $e) { ?>
								<div class="reviews__item glide__slide">
									<div class="reviews__item-name">
										<div class="reviews__item-icon">
											<img src="<?php echo $e['img']; ?>" alt="">
										</div>
										<span><?php echo $e['name']; ?></span>
									</div>
									<?php echo $e['text']; ?>
									<div class="reviews__bottom">
										<div class="reviews__bottom-stars">
											<?php if($e['check'] == '1') { ?>
												<svg width="96" height="16" viewBox="0 0 96 16" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M7.15861 1.30996C7.55219 0.697195 8.44781 0.697195 8.84139 1.30996L10.5168 3.91833C10.6522 4.12917 10.8618 4.28148 11.1042 4.34512L14.1026 5.13245C14.807 5.31742 15.0838 6.1692 14.6226 6.73287L12.6596 9.13227C12.5009 9.32622 12.4209 9.57266 12.4352 9.82282L12.613 12.9178C12.6548 13.6449 11.9302 14.1713 11.2516 13.9069L8.36304 12.7815C8.12956 12.6905 7.87044 12.6905 7.63696 12.7815L4.74839 13.9069C4.06981 14.1713 3.34523 13.6449 3.38699 12.9178L3.56476 9.82282C3.57912 9.57266 3.49905 9.32622 3.34038 9.13227L1.37739 6.73287C0.916239 6.1692 1.193 5.31742 1.8974 5.13245L4.89582 4.34512C5.13819 4.28148 5.34782 4.12917 5.48324 3.91833L7.15861 1.30996Z" fill="#EC6708"/>
													<path d="M27.1586 1.30996C27.5522 0.697195 28.4478 0.697195 28.8414 1.30996L30.5168 3.91833C30.6522 4.12917 30.8618 4.28148 31.1042 4.34512L34.1026 5.13245C34.807 5.31742 35.0838 6.1692 34.6226 6.73287L32.6596 9.13227C32.5009 9.32622 32.4209 9.57266 32.4352 9.82282L32.613 12.9178C32.6548 13.6449 31.9302 14.1713 31.2516 13.9069L28.363 12.7815C28.1296 12.6905 27.8704 12.6905 27.637 12.7815L24.7484 13.9069C24.0698 14.1713 23.3452 13.6449 23.387 12.9178L23.5648 9.82282C23.5791 9.57266 23.4991 9.32622 23.3404 9.13227L21.3774 6.73287C20.9162 6.1692 21.193 5.31742 21.8974 5.13245L24.8958 4.34512C25.1382 4.28148 25.3478 4.12917 25.4832 3.91833L27.1586 1.30996Z" fill="#EBC387"/>
													<path d="M47.1586 1.30996C47.5522 0.697195 48.4478 0.697195 48.8414 1.30996L50.5168 3.91833C50.6522 4.12917 50.8618 4.28148 51.1042 4.34512L54.1026 5.13245C54.807 5.31742 55.0838 6.1692 54.6226 6.73287L52.6596 9.13227C52.5009 9.32622 52.4209 9.57266 52.4352 9.82282L52.613 12.9178C52.6548 13.6449 51.9302 14.1713 51.2516 13.9069L48.363 12.7815C48.1296 12.6905 47.8704 12.6905 47.637 12.7815L44.7484 13.9069C44.0698 14.1713 43.3452 13.6449 43.387 12.9178L43.5648 9.82282C43.5791 9.57266 43.4991 9.32622 43.3404 9.13227L41.3774 6.73287C40.9162 6.1692 41.193 5.31742 41.8974 5.13245L44.8958 4.34512C45.1382 4.28148 45.3478 4.12917 45.4832 3.91833L47.1586 1.30996Z" fill="#EBC387"/>
													<path d="M67.1586 1.30996C67.5522 0.697195 68.4478 0.697195 68.8414 1.30996L70.5168 3.91833C70.6522 4.12917 70.8618 4.28148 71.1042 4.34512L74.1026 5.13245C74.807 5.31742 75.0838 6.1692 74.6226 6.73287L72.6596 9.13227C72.5009 9.32622 72.4209 9.57266 72.4352 9.82282L72.613 12.9178C72.6548 13.6449 71.9302 14.1713 71.2516 13.9069L68.363 12.7815C68.1296 12.6905 67.8704 12.6905 67.637 12.7815L64.7484 13.9069C64.0698 14.1713 63.3452 13.6449 63.387 12.9178L63.5648 9.82282C63.5791 9.57266 63.4991 9.32622 63.3404 9.13227L61.3774 6.73287C60.9162 6.1692 61.193 5.31742 61.8974 5.13245L64.8958 4.34512C65.1382 4.28148 65.3478 4.12917 65.4832 3.91833L67.1586 1.30996Z" fill="#EBC387"/>
													<path d="M87.1586 1.30996C87.5522 0.697195 88.4478 0.697195 88.8414 1.30996L90.5168 3.91833C90.6522 4.12917 90.8618 4.28148 91.1042 4.34512L94.1026 5.13245C94.807 5.31742 95.0838 6.1692 94.6226 6.73287L92.6596 9.13227C92.5009 9.32622 92.4209 9.57266 92.4352 9.82282L92.613 12.9178C92.6548 13.6449 91.9302 14.1713 91.2516 13.9069L88.363 12.7815C88.1296 12.6905 87.8704 12.6905 87.637 12.7815L84.7484 13.9069C84.0698 14.1713 83.3452 13.6449 83.387 12.9178L83.5648 9.82282C83.5791 9.57266 83.4991 9.32622 83.3404 9.13227L81.3774 6.73287C80.9162 6.1692 81.193 5.31742 81.8974 5.13245L84.8958 4.34512C85.1382 4.28148 85.3478 4.12917 85.4832 3.91833L87.1586 1.30996Z" fill="#EBC387"/>
												</svg>
											<?php } elseif($e['check'] == '2') { ?>
												<svg width="96" height="16" viewBox="0 0 96 16" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M7.15861 1.30996C7.55219 0.697195 8.44781 0.697195 8.84139 1.30996L10.5168 3.91833C10.6522 4.12917 10.8618 4.28148 11.1042 4.34512L14.1026 5.13245C14.807 5.31742 15.0838 6.1692 14.6226 6.73287L12.6596 9.13227C12.5009 9.32622 12.4209 9.57266 12.4352 9.82282L12.613 12.9178C12.6548 13.6449 11.9302 14.1713 11.2516 13.9069L8.36304 12.7815C8.12956 12.6905 7.87044 12.6905 7.63696 12.7815L4.74839 13.9069C4.06981 14.1713 3.34523 13.6449 3.38699 12.9178L3.56476 9.82282C3.57912 9.57266 3.49905 9.32622 3.34038 9.13227L1.37739 6.73287C0.916239 6.1692 1.193 5.31742 1.8974 5.13245L4.89582 4.34512C5.13819 4.28148 5.34782 4.12917 5.48324 3.91833L7.15861 1.30996Z" fill="#EC6708"/>
													<path d="M27.1586 1.30996C27.5522 0.697195 28.4478 0.697195 28.8414 1.30996L30.5168 3.91833C30.6522 4.12917 30.8618 4.28148 31.1042 4.34512L34.1026 5.13245C34.807 5.31742 35.0838 6.1692 34.6226 6.73287L32.6596 9.13227C32.5009 9.32622 32.4209 9.57266 32.4352 9.82282L32.613 12.9178C32.6548 13.6449 31.9302 14.1713 31.2516 13.9069L28.363 12.7815C28.1296 12.6905 27.8704 12.6905 27.637 12.7815L24.7484 13.9069C24.0698 14.1713 23.3452 13.6449 23.387 12.9178L23.5648 9.82282C23.5791 9.57266 23.4991 9.32622 23.3404 9.13227L21.3774 6.73287C20.9162 6.1692 21.193 5.31742 21.8974 5.13245L24.8958 4.34512C25.1382 4.28148 25.3478 4.12917 25.4832 3.91833L27.1586 1.30996Z" fill="#EC6708"/>
													<path d="M47.1586 1.30996C47.5522 0.697195 48.4478 0.697195 48.8414 1.30996L50.5168 3.91833C50.6522 4.12917 50.8618 4.28148 51.1042 4.34512L54.1026 5.13245C54.807 5.31742 55.0838 6.1692 54.6226 6.73287L52.6596 9.13227C52.5009 9.32622 52.4209 9.57266 52.4352 9.82282L52.613 12.9178C52.6548 13.6449 51.9302 14.1713 51.2516 13.9069L48.363 12.7815C48.1296 12.6905 47.8704 12.6905 47.637 12.7815L44.7484 13.9069C44.0698 14.1713 43.3452 13.6449 43.387 12.9178L43.5648 9.82282C43.5791 9.57266 43.4991 9.32622 43.3404 9.13227L41.3774 6.73287C40.9162 6.1692 41.193 5.31742 41.8974 5.13245L44.8958 4.34512C45.1382 4.28148 45.3478 4.12917 45.4832 3.91833L47.1586 1.30996Z" fill="#EBC387"/>
													<path d="M67.1586 1.30996C67.5522 0.697195 68.4478 0.697195 68.8414 1.30996L70.5168 3.91833C70.6522 4.12917 70.8618 4.28148 71.1042 4.34512L74.1026 5.13245C74.807 5.31742 75.0838 6.1692 74.6226 6.73287L72.6596 9.13227C72.5009 9.32622 72.4209 9.57266 72.4352 9.82282L72.613 12.9178C72.6548 13.6449 71.9302 14.1713 71.2516 13.9069L68.363 12.7815C68.1296 12.6905 67.8704 12.6905 67.637 12.7815L64.7484 13.9069C64.0698 14.1713 63.3452 13.6449 63.387 12.9178L63.5648 9.82282C63.5791 9.57266 63.4991 9.32622 63.3404 9.13227L61.3774 6.73287C60.9162 6.1692 61.193 5.31742 61.8974 5.13245L64.8958 4.34512C65.1382 4.28148 65.3478 4.12917 65.4832 3.91833L67.1586 1.30996Z" fill="#EBC387"/>
													<path d="M87.1586 1.30996C87.5522 0.697195 88.4478 0.697195 88.8414 1.30996L90.5168 3.91833C90.6522 4.12917 90.8618 4.28148 91.1042 4.34512L94.1026 5.13245C94.807 5.31742 95.0838 6.1692 94.6226 6.73287L92.6596 9.13227C92.5009 9.32622 92.4209 9.57266 92.4352 9.82282L92.613 12.9178C92.6548 13.6449 91.9302 14.1713 91.2516 13.9069L88.363 12.7815C88.1296 12.6905 87.8704 12.6905 87.637 12.7815L84.7484 13.9069C84.0698 14.1713 83.3452 13.6449 83.387 12.9178L83.5648 9.82282C83.5791 9.57266 83.4991 9.32622 83.3404 9.13227L81.3774 6.73287C80.9162 6.1692 81.193 5.31742 81.8974 5.13245L84.8958 4.34512C85.1382 4.28148 85.3478 4.12917 85.4832 3.91833L87.1586 1.30996Z" fill="#EBC387"/>
												</svg>
											<?php } elseif($e['check'] == '3') { ?>
												<svg width="96" height="16" viewBox="0 0 96 16" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M7.15861 1.30996C7.55219 0.697195 8.44781 0.697195 8.84139 1.30996L10.5168 3.91833C10.6522 4.12917 10.8618 4.28148 11.1042 4.34512L14.1026 5.13245C14.807 5.31742 15.0838 6.1692 14.6226 6.73287L12.6596 9.13227C12.5009 9.32622 12.4209 9.57266 12.4352 9.82282L12.613 12.9178C12.6548 13.6449 11.9302 14.1713 11.2516 13.9069L8.36304 12.7815C8.12956 12.6905 7.87044 12.6905 7.63696 12.7815L4.74839 13.9069C4.06981 14.1713 3.34523 13.6449 3.38699 12.9178L3.56476 9.82282C3.57912 9.57266 3.49905 9.32622 3.34038 9.13227L1.37739 6.73287C0.916239 6.1692 1.193 5.31742 1.8974 5.13245L4.89582 4.34512C5.13819 4.28148 5.34782 4.12917 5.48324 3.91833L7.15861 1.30996Z" fill="#EC6708"/>
													<path d="M27.1586 1.30996C27.5522 0.697195 28.4478 0.697195 28.8414 1.30996L30.5168 3.91833C30.6522 4.12917 30.8618 4.28148 31.1042 4.34512L34.1026 5.13245C34.807 5.31742 35.0838 6.1692 34.6226 6.73287L32.6596 9.13227C32.5009 9.32622 32.4209 9.57266 32.4352 9.82282L32.613 12.9178C32.6548 13.6449 31.9302 14.1713 31.2516 13.9069L28.363 12.7815C28.1296 12.6905 27.8704 12.6905 27.637 12.7815L24.7484 13.9069C24.0698 14.1713 23.3452 13.6449 23.387 12.9178L23.5648 9.82282C23.5791 9.57266 23.4991 9.32622 23.3404 9.13227L21.3774 6.73287C20.9162 6.1692 21.193 5.31742 21.8974 5.13245L24.8958 4.34512C25.1382 4.28148 25.3478 4.12917 25.4832 3.91833L27.1586 1.30996Z" fill="#EC6708"/>
													<path d="M47.1586 1.30996C47.5522 0.697195 48.4478 0.697195 48.8414 1.30996L50.5168 3.91833C50.6522 4.12917 50.8618 4.28148 51.1042 4.34512L54.1026 5.13245C54.807 5.31742 55.0838 6.1692 54.6226 6.73287L52.6596 9.13227C52.5009 9.32622 52.4209 9.57266 52.4352 9.82282L52.613 12.9178C52.6548 13.6449 51.9302 14.1713 51.2516 13.9069L48.363 12.7815C48.1296 12.6905 47.8704 12.6905 47.637 12.7815L44.7484 13.9069C44.0698 14.1713 43.3452 13.6449 43.387 12.9178L43.5648 9.82282C43.5791 9.57266 43.4991 9.32622 43.3404 9.13227L41.3774 6.73287C40.9162 6.1692 41.193 5.31742 41.8974 5.13245L44.8958 4.34512C45.1382 4.28148 45.3478 4.12917 45.4832 3.91833L47.1586 1.30996Z" fill="#EC6708"/>
													<path d="M67.1586 1.30996C67.5522 0.697195 68.4478 0.697195 68.8414 1.30996L70.5168 3.91833C70.6522 4.12917 70.8618 4.28148 71.1042 4.34512L74.1026 5.13245C74.807 5.31742 75.0838 6.1692 74.6226 6.73287L72.6596 9.13227C72.5009 9.32622 72.4209 9.57266 72.4352 9.82282L72.613 12.9178C72.6548 13.6449 71.9302 14.1713 71.2516 13.9069L68.363 12.7815C68.1296 12.6905 67.8704 12.6905 67.637 12.7815L64.7484 13.9069C64.0698 14.1713 63.3452 13.6449 63.387 12.9178L63.5648 9.82282C63.5791 9.57266 63.4991 9.32622 63.3404 9.13227L61.3774 6.73287C60.9162 6.1692 61.193 5.31742 61.8974 5.13245L64.8958 4.34512C65.1382 4.28148 65.3478 4.12917 65.4832 3.91833L67.1586 1.30996Z" fill="#EBC387"/>
													<path d="M87.1586 1.30996C87.5522 0.697195 88.4478 0.697195 88.8414 1.30996L90.5168 3.91833C90.6522 4.12917 90.8618 4.28148 91.1042 4.34512L94.1026 5.13245C94.807 5.31742 95.0838 6.1692 94.6226 6.73287L92.6596 9.13227C92.5009 9.32622 92.4209 9.57266 92.4352 9.82282L92.613 12.9178C92.6548 13.6449 91.9302 14.1713 91.2516 13.9069L88.363 12.7815C88.1296 12.6905 87.8704 12.6905 87.637 12.7815L84.7484 13.9069C84.0698 14.1713 83.3452 13.6449 83.387 12.9178L83.5648 9.82282C83.5791 9.57266 83.4991 9.32622 83.3404 9.13227L81.3774 6.73287C80.9162 6.1692 81.193 5.31742 81.8974 5.13245L84.8958 4.34512C85.1382 4.28148 85.3478 4.12917 85.4832 3.91833L87.1586 1.30996Z" fill="#EBC387"/>
												</svg>
											<?php } elseif($e['check'] == '4') { ?>
												<svg width="96" height="16" viewBox="0 0 96 16" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M7.15861 1.30996C7.55219 0.697195 8.44781 0.697195 8.84139 1.30996L10.5168 3.91833C10.6522 4.12917 10.8618 4.28148 11.1042 4.34512L14.1026 5.13245C14.807 5.31742 15.0838 6.1692 14.6226 6.73287L12.6596 9.13227C12.5009 9.32622 12.4209 9.57266 12.4352 9.82282L12.613 12.9178C12.6548 13.6449 11.9302 14.1713 11.2516 13.9069L8.36304 12.7815C8.12956 12.6905 7.87044 12.6905 7.63696 12.7815L4.74839 13.9069C4.06981 14.1713 3.34523 13.6449 3.38699 12.9178L3.56476 9.82282C3.57912 9.57266 3.49905 9.32622 3.34038 9.13227L1.37739 6.73287C0.916239 6.1692 1.193 5.31742 1.8974 5.13245L4.89582 4.34512C5.13819 4.28148 5.34782 4.12917 5.48324 3.91833L7.15861 1.30996Z" fill="#EC6708"/>
													<path d="M27.1586 1.30996C27.5522 0.697195 28.4478 0.697195 28.8414 1.30996L30.5168 3.91833C30.6522 4.12917 30.8618 4.28148 31.1042 4.34512L34.1026 5.13245C34.807 5.31742 35.0838 6.1692 34.6226 6.73287L32.6596 9.13227C32.5009 9.32622 32.4209 9.57266 32.4352 9.82282L32.613 12.9178C32.6548 13.6449 31.9302 14.1713 31.2516 13.9069L28.363 12.7815C28.1296 12.6905 27.8704 12.6905 27.637 12.7815L24.7484 13.9069C24.0698 14.1713 23.3452 13.6449 23.387 12.9178L23.5648 9.82282C23.5791 9.57266 23.4991 9.32622 23.3404 9.13227L21.3774 6.73287C20.9162 6.1692 21.193 5.31742 21.8974 5.13245L24.8958 4.34512C25.1382 4.28148 25.3478 4.12917 25.4832 3.91833L27.1586 1.30996Z" fill="#EC6708"/>
													<path d="M47.1586 1.30996C47.5522 0.697195 48.4478 0.697195 48.8414 1.30996L50.5168 3.91833C50.6522 4.12917 50.8618 4.28148 51.1042 4.34512L54.1026 5.13245C54.807 5.31742 55.0838 6.1692 54.6226 6.73287L52.6596 9.13227C52.5009 9.32622 52.4209 9.57266 52.4352 9.82282L52.613 12.9178C52.6548 13.6449 51.9302 14.1713 51.2516 13.9069L48.363 12.7815C48.1296 12.6905 47.8704 12.6905 47.637 12.7815L44.7484 13.9069C44.0698 14.1713 43.3452 13.6449 43.387 12.9178L43.5648 9.82282C43.5791 9.57266 43.4991 9.32622 43.3404 9.13227L41.3774 6.73287C40.9162 6.1692 41.193 5.31742 41.8974 5.13245L44.8958 4.34512C45.1382 4.28148 45.3478 4.12917 45.4832 3.91833L47.1586 1.30996Z" fill="#EC6708"/>
													<path d="M67.1586 1.30996C67.5522 0.697195 68.4478 0.697195 68.8414 1.30996L70.5168 3.91833C70.6522 4.12917 70.8618 4.28148 71.1042 4.34512L74.1026 5.13245C74.807 5.31742 75.0838 6.1692 74.6226 6.73287L72.6596 9.13227C72.5009 9.32622 72.4209 9.57266 72.4352 9.82282L72.613 12.9178C72.6548 13.6449 71.9302 14.1713 71.2516 13.9069L68.363 12.7815C68.1296 12.6905 67.8704 12.6905 67.637 12.7815L64.7484 13.9069C64.0698 14.1713 63.3452 13.6449 63.387 12.9178L63.5648 9.82282C63.5791 9.57266 63.4991 9.32622 63.3404 9.13227L61.3774 6.73287C60.9162 6.1692 61.193 5.31742 61.8974 5.13245L64.8958 4.34512C65.1382 4.28148 65.3478 4.12917 65.4832 3.91833L67.1586 1.30996Z" fill="#EC6708"/>
													<path d="M87.1586 1.30996C87.5522 0.697195 88.4478 0.697195 88.8414 1.30996L90.5168 3.91833C90.6522 4.12917 90.8618 4.28148 91.1042 4.34512L94.1026 5.13245C94.807 5.31742 95.0838 6.1692 94.6226 6.73287L92.6596 9.13227C92.5009 9.32622 92.4209 9.57266 92.4352 9.82282L92.613 12.9178C92.6548 13.6449 91.9302 14.1713 91.2516 13.9069L88.363 12.7815C88.1296 12.6905 87.8704 12.6905 87.637 12.7815L84.7484 13.9069C84.0698 14.1713 83.3452 13.6449 83.387 12.9178L83.5648 9.82282C83.5791 9.57266 83.4991 9.32622 83.3404 9.13227L81.3774 6.73287C80.9162 6.1692 81.193 5.31742 81.8974 5.13245L84.8958 4.34512C85.1382 4.28148 85.3478 4.12917 85.4832 3.91833L87.1586 1.30996Z" fill="#EBC387"/>
												</svg>
											<?php } elseif($e['check'] == '5') { ?>
												<svg width="96" height="16" viewBox="0 0 96 16" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M7.15861 1.30996C7.55219 0.697195 8.44781 0.697195 8.84139 1.30996L10.5168 3.91833C10.6522 4.12917 10.8618 4.28148 11.1042 4.34512L14.1026 5.13245C14.807 5.31742 15.0838 6.1692 14.6226 6.73287L12.6596 9.13227C12.5009 9.32622 12.4209 9.57266 12.4352 9.82282L12.613 12.9178C12.6548 13.6449 11.9302 14.1713 11.2516 13.9069L8.36304 12.7815C8.12956 12.6905 7.87044 12.6905 7.63696 12.7815L4.74839 13.9069C4.06981 14.1713 3.34523 13.6449 3.38699 12.9178L3.56476 9.82282C3.57912 9.57266 3.49905 9.32622 3.34038 9.13227L1.37739 6.73287C0.916239 6.1692 1.193 5.31742 1.8974 5.13245L4.89582 4.34512C5.13819 4.28148 5.34782 4.12917 5.48324 3.91833L7.15861 1.30996Z" fill="#EC6708"/>
													<path d="M27.1586 1.30996C27.5522 0.697195 28.4478 0.697195 28.8414 1.30996L30.5168 3.91833C30.6522 4.12917 30.8618 4.28148 31.1042 4.34512L34.1026 5.13245C34.807 5.31742 35.0838 6.1692 34.6226 6.73287L32.6596 9.13227C32.5009 9.32622 32.4209 9.57266 32.4352 9.82282L32.613 12.9178C32.6548 13.6449 31.9302 14.1713 31.2516 13.9069L28.363 12.7815C28.1296 12.6905 27.8704 12.6905 27.637 12.7815L24.7484 13.9069C24.0698 14.1713 23.3452 13.6449 23.387 12.9178L23.5648 9.82282C23.5791 9.57266 23.4991 9.32622 23.3404 9.13227L21.3774 6.73287C20.9162 6.1692 21.193 5.31742 21.8974 5.13245L24.8958 4.34512C25.1382 4.28148 25.3478 4.12917 25.4832 3.91833L27.1586 1.30996Z" fill="#EC6708"/>
													<path d="M47.1586 1.30996C47.5522 0.697195 48.4478 0.697195 48.8414 1.30996L50.5168 3.91833C50.6522 4.12917 50.8618 4.28148 51.1042 4.34512L54.1026 5.13245C54.807 5.31742 55.0838 6.1692 54.6226 6.73287L52.6596 9.13227C52.5009 9.32622 52.4209 9.57266 52.4352 9.82282L52.613 12.9178C52.6548 13.6449 51.9302 14.1713 51.2516 13.9069L48.363 12.7815C48.1296 12.6905 47.8704 12.6905 47.637 12.7815L44.7484 13.9069C44.0698 14.1713 43.3452 13.6449 43.387 12.9178L43.5648 9.82282C43.5791 9.57266 43.4991 9.32622 43.3404 9.13227L41.3774 6.73287C40.9162 6.1692 41.193 5.31742 41.8974 5.13245L44.8958 4.34512C45.1382 4.28148 45.3478 4.12917 45.4832 3.91833L47.1586 1.30996Z" fill="#EC6708"/>
													<path d="M67.1586 1.30996C67.5522 0.697195 68.4478 0.697195 68.8414 1.30996L70.5168 3.91833C70.6522 4.12917 70.8618 4.28148 71.1042 4.34512L74.1026 5.13245C74.807 5.31742 75.0838 6.1692 74.6226 6.73287L72.6596 9.13227C72.5009 9.32622 72.4209 9.57266 72.4352 9.82282L72.613 12.9178C72.6548 13.6449 71.9302 14.1713 71.2516 13.9069L68.363 12.7815C68.1296 12.6905 67.8704 12.6905 67.637 12.7815L64.7484 13.9069C64.0698 14.1713 63.3452 13.6449 63.387 12.9178L63.5648 9.82282C63.5791 9.57266 63.4991 9.32622 63.3404 9.13227L61.3774 6.73287C60.9162 6.1692 61.193 5.31742 61.8974 5.13245L64.8958 4.34512C65.1382 4.28148 65.3478 4.12917 65.4832 3.91833L67.1586 1.30996Z" fill="#EC6708"/>
													<path d="M87.1586 1.30996C87.5522 0.697195 88.4478 0.697195 88.8414 1.30996L90.5168 3.91833C90.6522 4.12917 90.8618 4.28148 91.1042 4.34512L94.1026 5.13245C94.807 5.31742 95.0838 6.1692 94.6226 6.73287L92.6596 9.13227C92.5009 9.32622 92.4209 9.57266 92.4352 9.82282L92.613 12.9178C92.6548 13.6449 91.9302 14.1713 91.2516 13.9069L88.363 12.7815C88.1296 12.6905 87.8704 12.6905 87.637 12.7815L84.7484 13.9069C84.0698 14.1713 83.3452 13.6449 83.387 12.9178L83.5648 9.82282C83.5791 9.57266 83.4991 9.32622 83.3404 9.13227L81.3774 6.73287C80.9162 6.1692 81.193 5.31742 81.8974 5.13245L84.8958 4.34512C85.1382 4.28148 85.3478 4.12917 85.4832 3.91833L87.1586 1.30996Z" fill="#EC6708"/>
												</svg>
											<?php } ?>
										</div>
										<div class="reviews__bottom-date">
											<span><?php echo $e['date']; ?></span>
										</div>
									</div>
								</div>
							<?php } ?>
						<?php } ?>
                    </div>
                </div>
                <div class="services__pagination" v-if="reviews.slider">
                    <div class="global__dots">
						<?php if (is_array($rev_list)) {
							foreach ($rev_list as $key => $e) { ?>
                            	<div class="global__dot" :class="{'isActive': reviews.slider.index == <?php echo $key; ?>}" @click="reviews.slider.go('=<?php echo $key; ?>')"><?php echo $key; ?></div>
							<?php } ?>
						<?php } ?>
                    </div>
                    <div class="services__arrows global__arows">
                        <div class="global__arow global__arow--prev" @click="reviews.slider.go('<')">
                            <div class="global__arow-in">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 40 16" fill="none"><path d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM39.7071 8.70711C40.0976 8.31658 40.0976 7.68342 39.7071 7.29289L33.3431 0.928932C32.9526 0.538408 32.3195 0.538408 31.9289 0.928932C31.5384 1.31946 31.5384 1.95262 31.9289 2.34315L37.5858 8L31.9289 13.6569C31.5384 14.0474 31.5384 14.6805 31.9289 15.0711C32.3195 15.4616 32.9526 15.4616 33.3431 15.0711L39.7071 8.70711ZM1 9H39V7H1V9Z" fill="#2B2A29"></path></svg>
                            </div>
                        </div>
                        <div class="global__arow global__arow--next" @click="reviews.slider.go('>')">
                            <div class="global__arow-in">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 40 16" fill="none"><path d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM39.7071 8.70711C40.0976 8.31658 40.0976 7.68342 39.7071 7.29289L33.3431 0.928932C32.9526 0.538408 32.3195 0.538408 31.9289 0.928932C31.5384 1.31946 31.5384 1.95262 31.9289 2.34315L37.5858 8L31.9289 13.6569C31.5384 14.0474 31.5384 14.6805 31.9289 15.0711C32.3195 15.4616 32.9526 15.4616 33.3431 15.0711L39.7071 8.70711ZM1 9H39V7H1V9Z" fill="#2B2A29"></path></svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<div class="news wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
    <div class="news__bg">
        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/paws-reviews.svg" alt="paws">
    </div>
    <div class="container">
        <div class="news__in">
            <div class="news__left">
                <h2>Новости зоопарка</h2>
                <span>Рассказываем о важных событиях</span>
                <div class="news__buttons">
                    <a href="/novosti-zooparka" class="button">
                        <span>Все новости</span>
                        <div class="green-button"></div>
                    </a>
                    <div class="news__arrows global__arows">
                        <div class="global__arow global__arow--prev" @click="news.slider.go('<')">
                            <div class="global__arow-in">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 40 16" fill="none">
                                    <path d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM39.7071 8.70711C40.0976 8.31658 40.0976 7.68342 39.7071 7.29289L33.3431 0.928932C32.9526 0.538408 32.3195 0.538408 31.9289 0.928932C31.5384 1.31946 31.5384 1.95262 31.9289 2.34315L37.5858 8L31.9289 13.6569C31.5384 14.0474 31.5384 14.6805 31.9289 15.0711C32.3195 15.4616 32.9526 15.4616 33.3431 15.0711L39.7071 8.70711ZM1 9H39V7H1V9Z" fill="#2B2A29"/>
                                </svg>
                            </div>
                        </div>
                        <div class="global__arow global__arow--next" @click="news.slider.go('>')">
                            <div class="global__arow-in">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 40 16" fill="none">
                                    <path d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM39.7071 8.70711C40.0976 8.31658 40.0976 7.68342 39.7071 7.29289L33.3431 0.928932C32.9526 0.538408 32.3195 0.538408 31.9289 0.928932C31.5384 1.31946 31.5384 1.95262 31.9289 2.34315L37.5858 8L31.9289 13.6569C31.5384 14.0474 31.5384 14.6805 31.9289 15.0711C32.3195 15.4616 32.9526 15.4616 33.3431 15.0711L39.7071 8.70711ZM1 9H39V7H1V9Z" fill="#2B2A29"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="news__right glide">
                <div class="glide__track" data-glide-el="track">
                    <div class="glide__slides">
							<?php
								$post_type = 'post';
								$count = wp_count_posts('post')->publish;
								$post = get_posts([
									'post_type' => $post_type,
								]);
							?>
							<?php foreach ($post as $item): ?>
							<?php if (get_the_post_thumbnail_url($item)): ?>
								<div class="news__item glide__slide" itemid="<?php echo $item->ID?>">
									<a href="<?php echo $item->guid?>" class="news__item-image">
										<img src="<?php echo get_the_post_thumbnail_url($item)?>" alt="animal">
									</a>
									<div class="news__item-about">
										<span>
											<?php
											$date="$item->post_date";
											$y = date('Y-m-d',strtotime($date));
											echo $y;
											?>
										</span>
										<h2><a href="<?php echo $item->guid?>"><?php echo $item->post_title?></a></h2>
										 <?php echo $item->post_excerpt?>
									</div>
								</div>
							<?php endif ?>
							<?php endforeach;?>
			  			<?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
                    </div>
                </div>
                <div class="news__buttons">
                    <div class="news__arrows global__arows">
                        <div class="global__arow global__arow--prev" @click="news.slider.go('<')">
                            <div class="global__arow-in">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 40 16" fill="none">
                                    <path d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM39.7071 8.70711C40.0976 8.31658 40.0976 7.68342 39.7071 7.29289L33.3431 0.928932C32.9526 0.538408 32.3195 0.538408 31.9289 0.928932C31.5384 1.31946 31.5384 1.95262 31.9289 2.34315L37.5858 8L31.9289 13.6569C31.5384 14.0474 31.5384 14.6805 31.9289 15.0711C32.3195 15.4616 32.9526 15.4616 33.3431 15.0711L39.7071 8.70711ZM1 9H39V7H1V9Z" fill="#2B2A29"/>
                                </svg>
                            </div>
                        </div>
                        <div class="global__arow global__arow--next" @click="news.slider.go('>')">
                            <div class="global__arow-in">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 40 16" fill="none">
                                    <path d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM39.7071 8.70711C40.0976 8.31658 40.0976 7.68342 39.7071 7.29289L33.3431 0.928932C32.9526 0.538408 32.3195 0.538408 31.9289 0.928932C31.5384 1.31946 31.5384 1.95262 31.9289 2.34315L37.5858 8L31.9289 13.6569C31.5384 14.0474 31.5384 14.6805 31.9289 15.0711C32.3195 15.4616 32.9526 15.4616 33.3431 15.0711L39.7071 8.70711ZM1 9H39V7H1V9Z" fill="#2B2A29"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <a href="/novosti-zooparka" class="button">
                        <span>Все новости</span>
                        <div class="green-button"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div> 
<?php $contact_one = get_field( 'contact_one' );?>
<div class="contacts wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
    <div class="contacts__paws">
        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/paws-reviews.svg" alt="paws">
    </div>
    <div class="container">
        <div class="contacts__in">
            <h2><?php echo $contact_one['title']; ?></h2>
            <div class="contacts__adreses">
				<?php $company_details = ($contact_one['company_details']); ?>
				<?php if (is_array($company_details)) {
					foreach ($company_details as $e) { ?>
					<div class="contacts__adreses-item">
						<div class="contacts__adreses-item-map">
							<?php echo $e['map']; ?>
						</div>
						<div class="contacts__adreses-item-info">
							<div class="city">
								<h2><?php echo $e['city']; ?></h2>
								<span><?php echo $e['adr']; ?></span>
								<span><?php echo $e['tel']; ?></span>
							</div>
							<div class="operating-mode">
								<h2>Режим работы:</h2>
								<span><?php echo $e['work']; ?></span>
							</div>
						</div>                    
					</div>
					<?php } ?>
				<?php } ?>
            </div>
        </div>
    </div>
</div> 

<?php
get_footer();
?>