<?php
/**
 * The Template for displaying all single posts
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
if (in_category( 'Stories' )) {
dropdown_menu(array(
		    'menu' => 'Stories Sidebar', 'depth' => '0'));
} elseif (in_category( 'News' )) {
dropdown_menu(array(
		    'menu' => 'News Sidebar', 'depth' => '0'));
}
?>
</div>
</div>
	<div id="primary" class="site-content">
		<div id="content" role="main">
   <?php if (in_category( 'Stories' )) { ?>
<div class="stories-header">
   <?php } else { ?>
<div class="news-header">
   <?php } ?>
<div class="template-header">
<?php  the_title( '<h1>', '</h1>' );?>
</div>
</div>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

				<nav class="nav-single">
					<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentytwelve' ); ?></h3>
					<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?></span>
					<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></span>
				</nav><!-- .nav-single -->

				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>