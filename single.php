<?php get_header(); ?>

  <div class="header-simple" style="background-image: url('<?php echo get_field('header_img')['url']; ?>')">
    <div class="container">
      <h1><?php the_field('title'); ?></h1>
    </div>
  </div>

  <div class="container">
    <?php $blog_id = pll_get_post( 10, pll_default_language() ); ?>
    <div class="breadcrump">
		  <a href="<?php echo get_home_url(); ?>" rel="nofollow"><?php pll_e('home-page'); ?></a>
	    <span>></span>
		  <a href="<?php echo get_permalink( $blog_id ); ?>">Blog</a>
	    <span>></span>
		  <a href="<?php get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>
	  </div>
  </div>

  <div class="container blog-single">
    <?php the_content(); ?>
  </div>
  

<?php get_footer(); ?>