<?php
/**
 * Template Name: Archive Venue
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
?>
<?php
get_header();
require_once('wp-content/themes/twentytwelvechild/markdown/Markdown.inc.php');
use \Michelf\Markdown;
?>
<div class="mobile-menu">
<div class="parents-mobile-menu">
<?php
dropdown_menu(array(
		    'dropdown_title' => '-- Main Menu --','menu' => 'Mobile Navigation', 'depth' => '1'));
?>
</div>
<div class="siblings-mobile-menu">
<?php
dropdown_menu(array(
		    'menu' => 'Archive Sidebar', 'depth' => '0'));
?>
</div>
</div>
	<div id="primary" class="site-content">
		<div id="content" role="main">
			
<div class="arch-header">
<div class="template-header">
<h1>Venue Details</h1>
</div>
</div>

<?php
 
  $venue_id = $_GET['venue_id'];
  $venue = json_decode(file_get_contents("http://bedlamtheatre.co.uk/venues/{$venue_id}.json"));
 
?>
<div class="entry-content">
<?php    if ($venue!=null) { ?>
<div class="row" style="position: relative;">
        <div class="active item">
          <img alt="<?php echo "$show->name" ?>_website_image" src="http://bedlamtheatre.co.uk/system/venues/images/000/000/<?php printf("%03d", $venue->id) ?>/slideshow/<?php echo $venue->image_file_name ?>">
          <div class="carousel-caption">
            <h1><?php echo "{$venue->name}" ?></h1>
            <p><em><?php echo "$venue->tagline" ?></em></p>
          </div>
        </div>
</div>
<div class="venue-description">
<?php echo Markdown::defaultTransform($venue->description)?>
</div>

<hr class="sec2">
<div class="maps">
      <h3>Map</h3>
 <img src="http://maps.googleapis.com/maps/api/staticmap?center=<?php echo "$venue->location" ?>&zoom=16&size=940x300&sensor=false&markers=color:red|<?php echo "$venue->location" ?>">
</div>
<?php    } else { ?>

<h3>
<?php   print "Sorry, no venue information was found, you will be redirected to the archive index page in a few moments."; ?>
</h3>

<?php echo "<meta http-equiv=\"refresh\" content=\"2;URL=http://friendsofbedlam.co.uk/archive\">";
} ?>
</div>
<hr class="sec2">
<?php echo do_shortcode('[ssba]'); ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>