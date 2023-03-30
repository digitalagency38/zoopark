<?php 
/**
*	Template name: О нас
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
<?php $about_us = get_field( 'about_us' );?>	
<div class="detailed-about-us">
    <div class="leaves">
        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/leaves-about.png" alt="leaves">
    </div>
    <div class="leaves-bottom">
        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/leaves-about.png" alt="leaves">
    </div>
    <div class="container">
        <div class="detailed-about-us__in">
            <h2><?php echo get_the_title() ?></h2>
			<?php if ($about_us['img']): ?>
				<div class="detailed-about-us__in-banner wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
					<div class="detailed-about-us__in-banner__item">
						<img src="<?php echo $about_us['img']; ?>" alt="banner">
					</div>
				</div>
			<?php endif ?>
            <div class="detailed-about-us__info">
                <div class="detailed-about-us__info-text">
                    <h2 class="detailed-about-us__title"><?php echo $about_us['title']; ?></h2>
                    <?php echo $about_us['text']; ?>
                </div>
            </div>
			<?php $slider = ($about_us['slider']); ?>
            <div class="detailed-about-us__about glide wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                <div class="glide__track" data-glide-el="track">
                    <div class="glide__slides">
						<?php if (is_array($slider)) {
							foreach ($slider as $e) { ?>
								<div class="detailed-about-us__about-item">
									<div class="detailed-about-us__about-item-image">
										<img src="<?php echo $e['img']; ?>" alt="photo">
									</div>
								</div>
							<?php } ?>
						<?php } ?>
                    </div>
                </div>
            </div>
            <div class="services__pagination" v-if="detailedAboutUs.slider">
                <div class="global__dots">
					<?php if (is_array($slider)) {
						foreach ($slider as $key => $e) { ?>
                        	<div class="global__dot" :class="{'isActive': detailedAboutUs.slider.index == <?php echo $key; ?>}" @click="detailedAboutUs.slider.go('=<?php echo $key; ?>')"><?php echo $key; ?></div>
						<?php } ?>
					<?php } ?>
                </div>
                <div class="services__arrows global__arows">
                    <div class="global__arow global__arow--prev" @click="detailedAboutUs.slider.go('<')">
                        <div class="global__arow-in">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 40 16" fill="none"><path d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM39.7071 8.70711C40.0976 8.31658 40.0976 7.68342 39.7071 7.29289L33.3431 0.928932C32.9526 0.538408 32.3195 0.538408 31.9289 0.928932C31.5384 1.31946 31.5384 1.95262 31.9289 2.34315L37.5858 8L31.9289 13.6569C31.5384 14.0474 31.5384 14.6805 31.9289 15.0711C32.3195 15.4616 32.9526 15.4616 33.3431 15.0711L39.7071 8.70711ZM1 9H39V7H1V9Z" fill="#2B2A29"></path></svg>
                        </div>
                    </div>
                    <div class="global__arow global__arow--next" @click="detailedAboutUs.slider.go('>')">
                        <div class="global__arow-in">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 40 16" fill="none"><path d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM39.7071 8.70711C40.0976 8.31658 40.0976 7.68342 39.7071 7.29289L33.3431 0.928932C32.9526 0.538408 32.3195 0.538408 31.9289 0.928932C31.5384 1.31946 31.5384 1.95262 31.9289 2.34315L37.5858 8L31.9289 13.6569C31.5384 14.0474 31.5384 14.6805 31.9289 15.0711C32.3195 15.4616 32.9526 15.4616 33.3431 15.0711L39.7071 8.70711ZM1 9H39V7H1V9Z" fill="#2B2A29"></path></svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="detailed-about-us__info">
                <?php echo $about_us['txt']; ?>
            </div>
        </div>
    </div>
</div> 
<?php $about_us_slider = get_field( 'about_slider' );?>	
<div class="about-us-slider wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
    <div class="container">
        <div class="about-us-slider__in">
            <div class="about-us-slider__flex glide">
                <div class="glide__track" data-glide-el="track">
                    <div class="glide__slides">
						<?php if (is_array($about_us_slider)) {
							foreach ($about_us_slider as $e) { ?>
								<div class="about-us-slider__flex-item">
									<img src="<?php echo $e['img']; ?>" alt="image">
								</div>
							<?php } ?>
						<?php } ?>
                    </div>
                </div>
                <div class="services__pagination" v-if="aboutUs.slider">
                    <div class="global__dots">
						<?php if (is_array($about_us_slider)) {
							foreach ($about_us_slider as $key => $e) { ?>
                            	<div class="global__dot" :class="{'isActive': aboutUs.slider.index == <?php echo $key; ?>}" @click="aboutUs.slider.go('=<?php echo $key; ?>')"><?php echo $key; ?></div>
							<?php } ?>
						<?php } ?>
                    </div>
                    <div class="services__arrows global__arows">
                        <div class="global__arow global__arow--prev" @click="aboutUs.slider.go('<')">
                            <div class="global__arow-in">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 40 16" fill="none"><path d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM39.7071 8.70711C40.0976 8.31658 40.0976 7.68342 39.7071 7.29289L33.3431 0.928932C32.9526 0.538408 32.3195 0.538408 31.9289 0.928932C31.5384 1.31946 31.5384 1.95262 31.9289 2.34315L37.5858 8L31.9289 13.6569C31.5384 14.0474 31.5384 14.6805 31.9289 15.0711C32.3195 15.4616 32.9526 15.4616 33.3431 15.0711L39.7071 8.70711ZM1 9H39V7H1V9Z" fill="#2B2A29"></path></svg>
                            </div>
                        </div>
                        <div class="global__arow global__arow--next" @click="aboutUs.slider.go('>')">
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
<?php $team = get_field( 'team' );?>	
<div class="team">
    <div class="team__big-branch">
        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/big-branch.svg" alt="trees">
    </div>
    <div class="container">
        <div class="team__in">
            <h2><?php echo $team['title']; ?></h2>
            <div class="team__photos">
				<?php $lists = ($team['lists']); ?>
				<?php if (is_array($lists)) {
					foreach ($lists as $key => $e) { ?>
						<div class="team__item wow animate__fadeInUp" data-wow-duration="2s" data-wow-delay="0s">
							<div class="team__item-image">
								<img src="<?php echo $e['img']; ?>" alt="<?php echo $e['name']; ?>">
							</div>
							<span><?php echo $e['name']; ?></span>
						</div>
					<?php } ?>
				<?php } ?>
            </div>
        </div>
    </div>
</div>
<?php $work_license = get_field( 'work_license' );?>	
<div class="work-license">
    <div class="leaves">
        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/leaves-about.png" alt="leaves">
    </div>
    <div class="container">
        <div class="work-license__in">
            <h2><?php echo $work_license['title']; ?></h2>
            <div class="work-license__text"><?php echo $work_license['text']; ?></div>
        </div>
    </div>
</div> 
<?php $banner_holiday = get_field( 'banner_holiday' );?>
<div class="banner-holiday banner-holiday-team">
    <div class="container">
        <div class="banner-holiday__in">
            <span><?php echo $banner_holiday['title']; ?></span>
            <span><?php echo $banner_holiday['text']; ?></span> 
            <span> <a href="tel:<?php echo $banner_holiday['tel']; ?>"><?php echo $banner_holiday['tel']; ?></a></span>
        </div>
    </div>
</div> 
<?php
    get_footer();
?>