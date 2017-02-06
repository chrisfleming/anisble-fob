<?php
/**
 * Template Name: Archive Show
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
<h1> Show Details </h1>
</div>
</div>
			
<?php
 
  $slug = $_GET['slug'];
  $show = json_decode(file_get_contents("http://bedlamtheatre.co.uk/shows/{$slug}.json"));
 
?>
<div class="entry-content">
<?php    if ($show!=null) { ?>
<div class="row" style="position: relative;">
  <div class="span9">
    <div class="carousel">
      <!-- Carousel items -->
      <div class="carousel-inner">
        <div class="active item">
          <img alt="<?php echo "$show->name" ?>_website_image" src="http://bedlamtheatre.co.uk/<?php echo $show->slideshow_image ?>">
          <div class="carousel-caption">
            <h1><?php echo "{$show->name}" ?></h1>
            <p><em><?php echo "$show->tagline" ?></em></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="span3 show-info-box">
    <div class="well">
      <h4>Dates</h4>
      <p>
    <b><?php echo date('d M Y', strtotime($show->start_date)); ?> - <?php echo date('d M Y', strtotime($show->end_date)); ?></b>
      </p>

        <h4>Price</h4>
        <p>
  <?php if (empty($show->price)) {
    print "Unknown";
} else {
    echo "$show->price";
  } ?>
        </p>

        <h4>Author</h4>
        <p>
  <?php if (empty($show->author)) {
    print "Unknown";
} else {
    echo "$show->author";
  }?>
        </p>
   
        <h4>Venue</h4>

    <p>
  <?php 
 $venue = $show->venue;
if (empty($venue->name)) {
    print "Unknown";
} else {
    echo "<a href='/archive/venue?venue_id={$venue->id}'>$venue->name</a>";
} ?> </p>
    </div>
  </div>
</div>

<div class="show-description">
<p>
<?php
echo Markdown::defaultTransform($show->description);
?>
</p>
</div>

<hr class="sec2">

<div class="row vertical-rule">
    <div class="span4">
      <h3>Cast and Crew</h3>
      <dl class="cast-crew-list">
<?php foreach ($show->team_members as $team) { ?>
          <dt><?php    echo "$team->position" ?></dt>
          <dd>
              <?php    echo "<a href='/archive/?q%5Bname_cont%5D=&q%5Busers_full_name_cont%5D={$team->user_name}&q%5Bstart_date_gt%281i%29%5D=&q%5Bstart_date_gt%282i%29%5D=&q%5Bstart_date_gt%283i%29%5D=&q%5Bend_date_lt%281i%29%5D=&q%5Bend_date_lt%282i%29%5D=&q%5Bend_date_lt%283i%29%5D=&commit=Search'>$team->user_name</a>" ?>
          </dd>
	     <?php } ?>
      </dl>
    </div>
  </div>

<hr class="sec2">

<h3> Reviews </h3>
  <?php if (empty($show->reviews)) { 
print "No reviews found";
      } else {?>

<?php foreach ($show->reviews as $reviews) { ?>
<article>
      <header>
<span class="author"><?php echo "$reviews->reviewer" ?></span> on <?php echo date('l dS F Y', strtotime("$reviews->review_date")); ?>
        <br>
<?php	for ($rating=0; $rating<$reviews->rating; $rating++) { ?>
        &#9733;
<?php	   } ?>
      </header>
	  <?php   echo Markdown::defaultTransform($reviews->body) ?>
    </article>
 <?php }
	  } ?>
<hr class="sec2">
<h3> Gallery </h3>
  <?php if (empty($show->pictures)) { 
print "No pictures found";
} else {?>
<div align="center">
<ul class="lightbox thumbnails">
<?php foreach ($show->pictures as $picture) {?>
    <li class="span2 gallery">
      <a href="http://bedlamtheatre.co.uk/<?php echo $picture->image_url ?>" rel="shadowbox[<?php echo $picture->gallery_id ?>]" class="thumbnail2" title="<?php echo $picture->description ?>"> <img alt="<?php echo $picture->image_file_name?>" src="http://bedlamtheatre.co.uk/<?php echo $picture->thumb_url ?>"></a>
    </li>
<?php } ?>
</div>
</ul>
<?php      }?>

<hr class="sec2">
<?php echo do_shortcode('[ssba]'); ?>
<br>
<div align="center">
<p><b>Spotted an error? Email us at <a href="mailto:archive@friendsofbedlam.co.uk?Subject=Archive Information&Body=Show Name: <?php echo $show->name ?>%0DShow ID: <?php echo $show->id ?>%0DShow URL: <?php print "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>%0D%0DERROR DETAILS%0D">archive@friendsofbedlam.co.uk</a> and let us know.</b></p>
</div>
<?php    } else { ?>

<h3>
<?php   print "Sorry, no show information was found, you will be redirected to the archive index page in a few moments."; ?>
</h3>

<?php echo "<meta http-equiv=\"refresh\" content=\"2;URL=http://friendsofbedlam.co.uk/archive\">";
} ?>

</div>


		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>