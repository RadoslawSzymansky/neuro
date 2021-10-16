<?php get_header(); // Template Name: Oferta ?>

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
  <div class="page-offer">
    <div class="left">
      <div class="label"><?php the_field('offer-label'); ?></div>
      <h2 class="title"><?php the_field('offer-title'); ?></h2>
    </div>
    <div class="right">
      <?php
        if( have_rows('articles') ):
          while ( have_rows('articles') ) : the_row(); ?>
          <?php $item = get_sub_field('post'); ?>
            <div class="articles__item">
              <a href="<?php  echo $item->guid; ?>">
                <img src="<?php echo get_field('miniaturka', $item->ID)['url']; ?>">
              </a>
              <a href="<?php  echo $item->guid; ?>">
                <h3><?php  echo $item->post_title; ?></h3>
              </a>
            </div>
          <?php endwhile;
        else :
        endif;
        ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
