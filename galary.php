<?php 
/**
*	Template name: Текстовая страница
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
<div class="personal-data">
    <div class="container">
        <div class="personal-data__in">
            <h2 class="personal-data__title"><?php echo get_the_title() ?></h2>
            <div class="personal-data__text"><?php echo get_the_content() ?></div>
        </div>
    </div>
</div>
<?php
    get_footer();
?>