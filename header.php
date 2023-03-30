<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Soluzioni_di_casa
 */

$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
$adr1 = get_option('adr1');
$adr2 = get_option('adr2');
$work = get_option('work');
$tel = get_option('tel');
$inst = get_option('inst');
$vk = get_option('vk');
$tg = get_option('tg');
$wa = get_option('wa');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/css/dop_styles.css">
</head>
<body>
    <div class="wrapper" id="app">
		<div class="header">
    <div class="container">
    <div class="header__in">
        <div class="header__top">
            <div class="header__top-item">
                <div class="adress">
                    <div class="adress__geolocation">
                        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/geo.svg" alt="icon">
                    </div>
                    <div class="adress__info">1. <?= $adr1; ?></div>
                </div>
                <div class="adress">
                    <div class="adress__geolocation">
                        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/geo.svg" alt="icon">
                    </div>
                    <div class="adress__info">2. <?= $adr2; ?></div>
                </div>
            </div>
            <div class="header__top-item">
                <div class="operating-mode">
                    <div class="operating-mode__icon">
                        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/time.svg" alt="time">
                    </div>
                        <span>Режим работы:</span>
                        <span class="chart"><?= $work; ?></span>
                    
                </div>
            </div>

        </div>
        <div class="header__bottom">
            <div class="header__bottom-item">
                <div class="menu">
                    <div class="line">
                        <div></div>
                        <div></div>
                    </div>
                    <span>Меню</span>
                </div>
                <div class="menu-close">
                    <div class="line">
                        <div></div>
                        <div></div>
                    </div>
                    <span>Закрыть</span>
                </div>
                <a href="/" class="logo">
				  <?php
					if ( has_custom_logo() ) {
					  echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
					}
				  ?>
                </a>
                <div class="phone">
                    <a href="tel:<?= $tel; ?>"><?= $tel; ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div> 
<div class="burger">
    <div class="leaves">
        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/leaves.png" alt="leaves">
    </div>
    <div class="big-branch">
        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/big-branch.svg" alt="trees">
    </div>
    <div class="container">
        <div class="burger__in">
            <div class="paws">
                <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/paws-reviews.svg" alt="paws">
            </div>
            <div class="star">
                <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/star-burger.svg" alt="star">
            </div>
            <div class="star-second">
                <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/star-burger.svg" alt="star">
            </div>
            <div class="raccoon">
                <div class="raccoon__item">
                    <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/needles.png" alt="needles">
                </div>
                <div class="raccoon__item">
                    <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/raccoon.png" alt="raccoon">
                </div>
                
            </div>
            <div class="burger__top">
                <div class="burger__top-menu">
                    <h2>Направления</h2>
					<?php
						wp_nav_menu(
							array(
								'menu'            => 'Меню - Направления',
								'theme_location'  => '',
								'container'       => 'ul'
							)
						);
					?>
                </div>
                <div class="burger__top-menu">
                    <h2>Компания</h2>
					<?php
						wp_nav_menu(
							array(
								'menu'            => 'Меню - Компания',
								'theme_location'  => '',
								'container'       => 'ul'
							)
						);
					?>
                </div>
                <div class="burger__top-social-network">
                    <h2>Социальные сети:</h2>
                    <div class="social-network-icons">
                        <a href="<?= $inst; ?>" class="social-network-icons__item">
                            <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/inst.svg" alt="icon">
                        </a>
                        <a href="<?= $vk; ?>" class="social-network-icons__item">
                            <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/vk.svg" alt="icon">
                        </a>
                        <a href="<?= $tg; ?>" class="social-network-icons__item">
                            <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/tg.svg" alt="icon">
                        </a>
                        <a href="<?= $wa; ?>" class="social-network-icons__item">
                            <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/wa.svg" alt="icon">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 