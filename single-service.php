<?php get_header(); ?>

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
    <div class="service__content">
      <?php the_content(); ?>
    </div>
  </div>

  <div class="service-for">
    <div class="container">
      <div class="left">
        <h2>
          <?php pll_e('Wskazania'); ?>
        </h2>
      </div>
      <div class="right">
        <?php
        if( have_rows('services-for') ):
          while ( have_rows('services-for') ) : the_row(); ?>
          <?php $item = get_sub_field('post'); ?>
            <div class="item">
              <?php the_sub_field('title'); ?>
            </div>
          <?php endwhile;
        else :
        endif;
        ?>
      </div>
    </div>
  </div>


<?php get_footer(); ?>
