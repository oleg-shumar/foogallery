<?php
/**
 * FooGallery masonry gallery template
 */
global $current_foogallery;
global $current_foogallery_arguments;
$size = foogallery_gallery_template_setting( 'thumbnail_size', 'thumbnail' );
$link = foogallery_gallery_template_setting( 'thumbnail_link', 'image' );
$lightbox = foogallery_gallery_template_setting( 'lightbox', 'unknown' );
$spacing = foogallery_gallery_template_setting( 'spacing', '' );
$hover_effect = foogallery_gallery_template_setting( 'hover-effect', 'hover-effect-zoom' );
$border_style = foogallery_gallery_template_setting( 'border-style', 'border-style-square-white' );
?>
<div class="foogallery-container foogallery-default foogallery-lightbox-<?php echo $lightbox; ?> <?php echo $spacing; ?> <?php echo $hover_effect; ?> <?php echo $border_style; ?>">
	<?php foreach ( $current_foogallery->attachments() as $attachment_id ) {
		echo foogallery_get_attachment_html( $attachment_id, $size, $link );
	} ?>
	<div style="clear:both"></div>
</div>