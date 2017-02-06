<?php
/**
 * Template Name: Archive Pages
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
<?php  the_title( '<h1>', '</h1>' );?>
</div>
</div>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>