<?php 
/**
*	Template name: Галерея
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
<?php $photos = get_field( 'photos' );?>	
<div class="photos">
    <div class="container">
        <div class="photos__in ">
            <h2 class="gallery-title"><?php echo get_the_title() ?></h2>
            <h2 class="photo-title"><?php echo $photos['title']; ?></h2>
            <div class="photo-gallery">
			<?php $plist = ($photos['list']); ?>
			<?php if (is_array($plist)) {
				foreach ($plist as $e) { ?>
					<div class="photo-gallery__item wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
						<img src="<?php echo $e['img']; ?>" alt="gallery">
					</div>
				<?php } ?>
			<?php } ?>
            </div>
        </div>
    </div>
</div> 
<?php $video = get_field( 'video' );?>
<div class="video">
    <div class="container">
        <div class="video__in ">
            <h2><?php echo $video['title']; ?></h2>
            <div class="video-gallery">
				<?php $plist2 = ($video['list']); ?>
				<?php if (is_array($plist2)) {
					foreach ($plist2 as $e) { ?>
						<div class="video-gallery__item wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
							<iframe width="100%" height="100%" src="<?php echo $e['title']; ?>" title="МЫШИ - ИНТЕРЕСНЫЕ ФАКТЫ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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