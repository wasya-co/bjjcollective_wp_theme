<?php
/**
 * 20181014 _vp_ 
 * Use this template. 
 * This doesn't actually render, but this file is used.
 * template-parts/post/content.php renders
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			/* Start the Loop */
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/post/content', get_post_format() );
			} ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php
get_footer();
