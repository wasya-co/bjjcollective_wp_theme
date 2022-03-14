<?php
/**
 * 20180923 _vp_
 * 20181014 
 *
 * /categories/technique/
 * category (not a post) render?
 *
 * The template for displaying categories, under Technique
 * Displays paginated list of videos on the left
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

get_header(); 

?>

<div class="wrap">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

    <?
      $category = get_category( get_query_var('cat') );
      $args = array( 'category' => $category->term_id,
        'tax_query' => array(
          array(
            'taxonomy' => 'category',
            'field' => 'term_id',
            'terms' => $category->term_id,
            'include_children' => false
          )
        ) );
      $posts_array = get_posts( $args );
      forEach($posts_array as $post) {
        $title = $post->post_title;
        $link = get_permalink( $post );
        $this_content = get_extended( $post->post_content )['main'];

        echo "<h2 ><a href=$link>$title</a></h2>";
        if (filter_var(trim($this_content), FILTER_VALIDATE_URL)) {
                  $this_content = trim($this_content);
          $youtube_id = explode( "v=", $this_content )[1];
          echo "<a href=$link><img src=https://img.youtube.com/vi/$youtube_id/0.jpg /></a>";
        } else {
          echo wpautop( $this_content, true );
        }  
        echo "<hr />";
      }           
    ?>
		</main><!-- #main -->
	</div><!-- #primary -->
  <?php /* get_sidebar(); */ ?>

  <aside id="secondary" class="widget-area" role="complementary" aria-label="Blog Sidebar">
    <section id="recent-posts-2" class="widget widget_recent_entries">		
      <? get_template_part('catlist'); ?>
    </section>
  </aside>


</div><!-- .wrap -->

<?php
get_footer();
