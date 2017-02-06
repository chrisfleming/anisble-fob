<?php
/**
 * Template Name: Archive Gallery
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			
<img class="aligncenter size-full wp-image-320" alt="News" src="http://www.friendsofbedlam.co.uk/wp-content/uploads/2013/09/archive-banner.jpg" width="780" height="150" style="border-radius:3px; margin-top:12px; margin-bottom:12px;" />

<?php
 
  $gallery = json_decode(file_get_contents("http://bedlamtheatre.co.uk/shows.json"));
 
?>
<div class="entry-content">

  <?php if (empty($gallery->pictures)) { 
print "No pictures found";
} else {?>
<div align="center">
<ul class="lightbox thumbnails">
<?php foreach ($gallery->pictures as $picture) {?>
    <li class="span2 gallery">
      <a href="http://bedlamtheatre.co.uk/<?php echo $picture->image_url ?>" rel="lightbox[<?php echo $picture->gallery_id ?>]" class="thumbnail2" title="<?php echo $picture->description ?>"> <img alt="<?php echo $picture->image_file_name?>" src="http://bedlamtheatre.co.uk/<?php echo $picture->thumb_url ?>"></a>
    </li>
      <?php } } ?>
</div>



</div>


		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>