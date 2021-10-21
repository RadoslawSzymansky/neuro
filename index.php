<?php get_header(); // Template Name: Blog ?>




<header class="header mb">
    <img src="<?php echo get_field('header_img')['url']; ?>" alt="<?php echo get_field('header_img')['alt']; ?>" class="header__img">
    <div class="content">
      <div class="container">
        <div class="label"><?php the_field('header_label'); ?></div>
        <h1 class="title"><?php the_field('header_title'); ?></h1>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="blog">

    <?php
/**
 * Create post loop query
 */
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
		'post_type'              => 'post',
		'orderby'                => 'menu_order',
		'order'                  => 'ASC',
		'showposts'              => 300,
		'no_rows_found'          => true,
		'update_post_meta_cache' => false,
		'update_post_term_cache' => false,
		'paged' => $paged
	);
$custom_loop = new WP_Query($args);
?>

<?php while ( $custom_loop->have_posts() ) : $custom_loop->the_post(); ?>
<?php $item = the_post(); ?>
<?php print_r($item) ?>
          <!-- single slide -->
          <a href="<?php  the_permalink(); ?>">
            <div class="news__item">
              <div  class="title-wrapper">
                <h3><?php  the_title(); ?></h3>
                <p class="short-desc"><?php the_field('short_desc', $item->ID); ?></p>
              </div>
              <div  class="get-more">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/arrow-small.svg">
                <?php pll_e('Dowiedz się więcej'); ?>
              </div>
            </div>
          </a>
<?php endwhile; // End of the loop. ?>

<?php wp_reset_postdata(); ?>
    </div>
  </div>


<?php get_footer(); ?>
