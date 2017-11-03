<?php 
/**
Template Page for the gallery overview

Follow variables are useable :

	$gallery     : Contain all about the gallery
	$images      : Contain all images, path, title
	$pagination  : Contain the pagination content

 You can check the content when you insert the tag <?php var_dump($variable) ?>
 If you would like to show the timestamp of the image ,you can use <?php echo $exif['created_timestamp'] ?>
**/
?>
<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?><?php if (!empty ($gallery)) : ?>


	<!-- Thumbnails -->
    <?php $i = 0; ?>
    	
	<?php foreach ( $images as $image ) : ?>
	<div class="col-md-4 col-sm-6 col-xs-12">
		<div class="work-item">
			<a href="<?php echo nextgen_esc_url($image->imageURL) ?>"
	            rel="group" title="<?php echo esc_attr($image->description) ?>"
	           <?php echo $image->thumbcode ?> >
			    
			    <?php if ( !$image->hidden ) { ?>

				<img title="<?php echo esc_attr($image->alttext) ?>" alt="<?php echo esc_attr($image->alttext) ?>" src="<?php echo nextgen_esc_url($image->imageURL) ?>" />
				<?php } ?>
			</a>
		</div>
	</div>
 	<?php endforeach; ?>
 	


<?php endif; ?>
