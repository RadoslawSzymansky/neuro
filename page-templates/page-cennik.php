<?php get_header(); // Template Name: Cennik ?>

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
  <div class="tarrif">
    <?php
    if( have_rows('cennik') ):
      while ( have_rows('cennik') ) : the_row(); ?>
      <?php $item = get_sub_field('post'); ?>
        <div class="tarrif__item">
          <div><?php the_sub_field('name'); ?></div>
          <div><?php the_sub_field('column_2'); ?></div>
          <div><?php the_sub_field('column_3'); ?></div>
        </div>
      <?php endwhile;
    else :
    endif;
    ?>
  </div>
</div>

<div class="container">

  <div class="text-section">
    <div class="label"><?php the_field('text_label-1'); ?></div>
    <?php the_field('text-section-1'); ?>
  </div>

</div>

<div class="container">
  <div class="tarrif2">
    <?php
    if( have_rows('cennik_2') ):
      while ( have_rows('cennik_2') ) : the_row(); ?>
      <?php $item = get_sub_field('post'); ?>
        <div class="tarrif2__item head">
          <div><?php the_sub_field('usluga'); ?></div>
        </div>
        <?php
        if( have_rows('ceny') ):
          while ( have_rows('ceny') ) : the_row(); ?>
          <?php $item = get_sub_field('post'); ?>
            <div class="tarrif2__item">
              <div><?php the_sub_field('name'); ?></div>
              <div><?php the_sub_field('cena'); ?></div>
            </div>
          <?php endwhile;
        else :
        endif;
        ?>
      <?php endwhile;
    else :
    endif;
    ?>
  </div>
</div>

<div class="container">

  <div class="text-section">
    <div class="label"><?php the_field('text_label-1'); ?></div>
    <?php the_field('text-section-1'); ?>
  </div>

</div>


<?php get_footer(); ?>
