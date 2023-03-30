<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Soluzioni_di_casa
 */

get_header();
?>
         <div class="error">
    <div class="error__big-branch">
        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/big-branch.svg" alt="trees">
    </div>
    <div class="container">
        <div class="error__in">
            <div class="error__block">
                <div class="error__block-title">
                    <h2>Извините... но такой страницы не <br>существует</h2>
                </div>
                <div class="error__block-menu">
                    <div class="error__block-menu-item">
                        <p>Страница, которую вы запрашиваете, не существует. Возможно она была удалена, или вы набрали неверный адрес. 
                        </p>
                        <p> Вернитесь на главную страницу и попробуйте найти необходимую вам информацию там.</p>
                    
                        <a href="" class="button">
                            <span>Отправить заявку</span>
                            <div class="green-button">
                                <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/green-button.svg" alt="button">
                            </div>
                        </a>
                    </div>
                    <div class="error__block-menu-item">
						<h2>Попробуйте поискать тут:</h2>
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
                </div>
            </div>
        </div>
    </div>
</div> 
<?php
get_footer();
