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
<div class="text-news">
    <div class="text-news__leaves">
        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/laeves-fl.png" alt="leaves">
    </div>
    <div class="text-news__leaves-second">
        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/laeves-fl.png" alt="leaves">
    </div>
    <div class="text-news__leaves-last">
        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/laeves-fl.png" alt="leaves">
    </div>

    <div class="container">
        <div class="text-news__in">
            <h2><?php echo get_the_title(); ?></h2>
            <div class="text-news__banner">
                <div class="text-news__banner-image">
					<?php soluzioni_di_casa_post_thumbnail(); ?>
                </div>
            </div>
            <div class="text-news__about">
				<?php the_content(); ?>
            </div>
        </div>
    </div>
</div>
<?php $holiday = get_field( 'holiday' );?>	
<?php if ($holiday['title']): ?>
	<div class="banner-holiday">
		<div class="container">
			<div class="banner-holiday__in">
				<span><?php echo $holiday['title']; ?></span>
				<span><?php echo $holiday['text']; ?></span> 
				<span> <a href="tel:<?php echo $holiday['tel']; ?>"><?php echo $holiday['tel']; ?></a></span>
			</div>
		</div>
	</div> 
<?php endif ?>
<?php $ticket = get_field( 'ticket' );?>	
<?php if ($ticket['title']): ?>
	<div class="buy-a-ticket">
		<div class="buy-a-ticket__in">
			<h2><?php echo $ticket['title']; ?></h2>
			<div class="buy-a-ticket__item">
				<?php echo $ticket['text']; ?>
				<a href="<?php echo $ticket['link']; ?>" class="button">
					<span>Все новости</span>
					<div class="green-button"></div>
				</a>
			</div>
		</div>
	</div>
<?php endif ?>
 
<div class="news">
    <div class="news__leaves">
        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/laeves-fl.png" alt="leaves">
    </div>
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
                        <span>Все животные</span>
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
			<?php
				$post_type = 'post';
				$count = wp_count_posts('post')->publish;
				$post = get_posts([
					'post_type' => $post_type,
				]);
			?>
            <div class="news__right glide">
                <div class="glide__track" data-glide-el="track">
                    <div class="glide__slides">
						<?php foreach ($post as $item): ?>
                            <div class="news__item glide__slide" itemid="<?php echo $item->ID?>">
								<?php if (get_the_post_thumbnail_url($item)): ?>
									<a href="<?php echo $item->guid?>" class="news__item-image">
										<img src="<?php echo get_the_post_thumbnail_url($item)?>" alt="animal">
									</a>
								<?php endif ?>
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
						<?php endforeach;?>
                    </div>
                </div>
                <div class="news__buttons">
                    <div class="news__arrows global__arows">
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
                    <a href="/novosti-zooparka" class="button">
                        <span>Все животные</span>
                        <div class="green-button"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div> 
<?php
get_footer();
?>