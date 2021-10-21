<?php get_header(); // Template Name: Zasady ?>

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
  <div class="text-section">
    <?php the_content(); ?>
  </div>
</div>

<div class="container">
  <div class="files">
  <?php
    if( have_rows('pliki') ):
      while ( have_rows('pliki') ) : the_row(); ?>
      <!-- single slide -->
      <div>
        <div class="name">
          <?php the_sub_field('name'); ?>
        </div>
        <a download class="btn btn--transparent btn--primary" href="<?php the_sub_field('plik') ?>"><?php pll_e('Pobierz plik'); ?></a>
      </div>
      <?php endwhile;
    else :
    endif;
    ?>
  </div>
</div>

<?php get_footer(); ?>
