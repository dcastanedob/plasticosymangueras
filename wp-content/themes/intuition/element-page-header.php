<?php wp_reset_query(); ?>

<?php if(cpotheme_show_title()): ?>

<?php $image_url = cpotheme_header_image(); ?>
<?php if($image_url != false): ?>
<div id="banner" class="banner">
	<img class="banner-image" src="<?php echo $image_url; ?>">
</div>
<?php endif; ?>

<?php do_action('cpotheme_before_title'); ?>

<?php do_action('cpotheme_after_title'); ?>

<?php endif; ?>