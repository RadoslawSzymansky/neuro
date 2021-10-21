Podtstawowy template Intermedia

dodać skrypt do jsona:

"lessw": "less-watch-compiler less ./ style.less"

  <h1>aaaa</h1>
<?php get_header();  ?>


<header class="header mb">
    <img src="<?php echo get_field('header_img')['url']; ?>" alt="<?php echo get_field('header_img')['alt']; ?>" class="header__img">
    <div class="content">
      <div class="container">
        <div class="label"><?php the_field('header_label'); ?></div>
        <h1 class="title"><?php the_field('header_title'); ?></h1>
      </div>
    </div>
  </header>

  <?php
/**
 * Create post loop query
 */
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
		'post_type'              => 'post',
		'orderby'                => 'menu_order',
		'order'                  => 'ASC',
		'showposts'              => 6,
		'no_rows_found'          => true,
		'update_post_meta_cache' => false,
		'update_post_term_cache' => false,
		'paged' => $paged
	);
$custom_loop = new WP_Query($args);
?>

<?php while ( $custom_loop->have_posts() ) : $custom_loop->the_post(); ?>

<?php endwhile; // End of the loop. ?>
<?php if ($custom_loop->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
	<nav class="prev-next-posts">
		<div class="prev-posts-link">
			<?php echo get_next_posts_link( 'Older Articles', $custom_loop->max_num_pages ); // display older posts link ?>
		</div>
		<div class="next-posts-link">
			<?php echo get_previous_posts_link( 'Newer Articles' ); // display newer posts link ?>
		</div>
	</nav>
<?php } ?>
<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>
