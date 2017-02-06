<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<?php
get_header(); ?>
<div class="mobile-menu">
<div class="parents-mobile-menu">
<?php
dropdown_menu(array(
		    'dropdown_title' => '-- Main Menu --','menu' => 'Mobile Navigation', 'depth' => '1'));
?>
</div>
 <?php if ((get_the_title() != "Join Us") & (get_the_title() != "Activate your Account")) { ?>
<div class="siblings-mobile-menu">
<?php
dropdown_menu(array(
		    'menu' => 'Members Sidebar', 'depth' => '0'));
?>
</div>
 <?php } ?>
</div>
	<div id="primary" class="site-content">
		<div id="content" role="main">
   <?php if ((get_the_title() != "Join Us") & (get_the_title() != "Activate your Account") & (get_the_title() != "Account Activated") & (bp_is_user() == FALSE)) { ?> 
<div class="members-header">
<div class="template-header">
<?php  the_title( '<h1>', '</h1>' );?>
</div>
</div>
   <?php } else if (bp_is_user() == TRUE) { ?>
<div class="members-header">
<div class="template-header">
   <h1>Profile</h1>
</div>
</div>
   <?php } else if ((get_the_title() == "Join Us") | (get_the_title() == "Activate your Account")  | (get_the_title() == "Account Activated")) { ?>
<div class="signup-header">
<div class="template-header">
<?php  the_title( '<h1>', '</h1>' );?>
</div>
</div>
   <?php } ?>


			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
   <?php if (get_the_title() != "Activate your Account") { ?>
<?php get_sidebar(); ?>
 <?php } ?>
<?php get_footer(); ?>