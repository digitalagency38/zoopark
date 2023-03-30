<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Soluzioni_di_casa
 */

$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
$inst = get_option('inst');
$vk = get_option('vk');
$tg = get_option('tg');
$wa = get_option('wa');
$rat_yan = get_option('rat_yan');
$rat_gis = get_option('rat_gis');
$copy = get_option('copy');
$politic = get_option('politic');
?>
<div class="footer">
        <div class="footer__in">
            <div class="footer__background">
                <div class="footer__background--top">
                    <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/footer_top.svg" width="100%" alt="">
                </div>
                <div class="footer__background--middle"></div>
                <div class="footer__background--bottom">
                    <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/footer_bottom.svg" width="100%" alt="">
                </div>
            </div>
            <div class="footer__top">
                <div class="footer__top-item">
                    <div class="footer__top-item-logo">
					  <?php
						if ( has_custom_logo() ) {
						  echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
						}
					  ?>
                    </div>
                    <div class="footer__top-item-rating">
                        <div class="rating">
                            <span class="raiting-green"><?= $rat_yan; ?></span>
                            <span>Яндекс </span>
                        </div>
                        <div class="rating">
                            <span class="raiting-green"><?= $rat_gis; ?></span>
                            <span>2GIS</span>
                        </div>
                    </div>
                </div>
                <div class="footer__top-menu">
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
                <div class="footer__top-menu">
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
                <div class="footer__top-social-network">
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
        <div class="footer__bottom">
            <ul class="footer__bottom-menu">
                <li><?= $copy; ?></li>
                <li>Все права защищены</li>
                <li><a href="<?= $politic; ?>">Политика конфидициальности</a></li>
            </ul>
            <div class="footer__bottom-pay">
                <div class="pay-icon">
                    <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/mir.svg" alt="icon">
                </div>
                <div class="pay-icon">
                    <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/visa.svg" alt="icon">
                </div>
                <div class="pay-icon">
                    <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/mastercard.svg" alt="icon">
                </div>
            </div>
            <a href="//kraftnet.tech/" target="_blank" class="footer__bottom-coopy">
                <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/coopy.svg" alt="coopy">
            </a>
        </div>
</div> 
    </div>
<?php wp_footer();?>
    <script src="<?php echo get_theme_file_uri(); ?>/js/jquery.min.js"></script>
    <script src="<?php echo get_theme_file_uri(); ?>/js/wow.js"></script>
    <script src="<?php echo get_theme_file_uri(); ?>/js/main_dop.js"></script>
</body>
</html>