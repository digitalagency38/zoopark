<?php 
/**
*	Template name: Контакты
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
<div class="contacts">
    <div class="contacts__leaves">
        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/laeves-fl.png" alt="leaves">
    </div>
    <div class="container">
        <div class="contacts__in page-contacts">
            <h2 class="title-contacts"><?php echo get_the_title() ?></h2>
			<?php $contacts__adreses = get_field( 'contacts_adreses' );?>	
            <div class="contacts__adreses">
			<?php if (is_array($contacts__adreses)) {
				foreach ($contacts__adreses as $key => $e) { ?>
					<div class="contacts__adreses-item wow animate__fadeInUp" data-wow-duration="<?php echo $key+1; ?>s" data-wow-delay="0s">
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
<?php $company_details = get_field( 'company_details' );?>	
<div class="company-details">
    <div class="container">
        <div class="company-details__in">
            <h2><?php echo $company_details['title']; ?></h2>
			<?php $list10 = ($company_details['list']); ?>
            <div class="company-details__tabs">
			<?php if (is_array($list10)) {
				foreach ($list10 as $key => $e) { ?>
                <div class="company-details__item wow animate__fadeInUp" data-wow-duration="<?php echo $key+1; ?>s" data-wow-delay="0s">
                    <h2><?php echo $e['name']; ?>:</h2>
                    <span><?php echo $e['text']; ?></span>
                </div>
				<?php } ?>
			<?php } ?>
            </div>
        </div>
    </div>
</div> 
<?php $application_form = get_field( 'application_form' );?>	
<div class="application-form wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
    <div class="application-form__leaves">
        <img src="<?php echo get_theme_file_uri(); ?>/src/dist/img/laeves-fl.png" alt="leaves">
    </div>
    <div class="container">
        <div class="application-form__in">
            <div class="application-form__flex">
                <div class="application-form__flex-text">
                    <h2><?php echo $application_form['title']; ?></h2>
                    <?php echo $application_form['text']; ?>
                </div>
                <div class="application-form__flex-form">
					<?php echo do_shortcode( '[contact-form-7 id="224" title="Контактная форма на странице контактов"]' ); ?>
                </div>
            </div>
            <div class="confirmation">
                <h2>Ваша заявка успешно отправлена</h2>
                <p>Вот вам яркий пример современных тенденций — укрепление 
                    и развитие внутренней структуры в значительной степени 
                    обусловливает важность форм</p>
            </div>
        </div>
    </div>
</div> 
<?php
    get_footer();
?>