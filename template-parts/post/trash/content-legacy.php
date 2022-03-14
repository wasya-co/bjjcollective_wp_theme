<?php
/**
 * 20180923 _vp_
 * Template part for displaying posts
 *
 */

?>

<?
$category = get_category( get_query_var('cat') );
$category = get_the_category()[0];
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

  echo "<h2><a href=$link>$title</a></h2>";
  echo $post->post_content;
  echo "<hr />";
}
?>

<!-- <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a> -->


<div >
  <div >
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    if ( is_sticky() && is_home() ) :
      echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
    endif;
    ?>
      <header class="entry-header">
    <?php
    if ( 'post' === get_post_type() ) {
      echo '<div class="entry-meta">';
      if ( is_single() ) {
        twentyseventeen_posted_on();
      } else {
        echo twentyseventeen_time_link();
        twentyseventeen_edit_link();
      };
      echo '</div><!-- .entry-meta -->';
    };

    if ( is_single() ) {
      the_title( '<h1 class="entry-title">', '</h1>' );
    } elseif ( is_front_page() && is_home() ) {
      the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
    } else {
      the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
    }
    ?>
      <a href="javascript:void(0);" onClick="closeArticle()">X</a>
      </header><!-- .entry-header -->

      <?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
        <div class="post-thumbnail">
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
          </a>
        </div><!-- .post-thumbnail -->
      <?php endif; ?>

      <div class="entry-content">

        <?= the_subtitle(); ?>
        <hr />

        <?php
        /* translators: %s: Name of current post */
        the_content(
          sprintf(
            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
            get_the_title()
          )
        );

        wp_link_pages(
          array(
            'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
            'after'       => '</div>',
            'link_before' => '<span class="page-number">',
            'link_after'  => '</span>',
          )
        );
        ?>
      </div><!-- .entry-content -->

      <?php
      if ( is_single() ) {
        twentyseventeen_entry_footer();
      }
      ?>

    </article><!-- #post-## -->
  </div>
</div>

