<?php get_header(); // Template Name: Praca ?>

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
    <div class="work">
      <div class="left">
        <div class="text-section">
          <div class="label"><?php the_field('text_label'); ?></div>
          <?php the_field('text-section'); ?>
        </div>
      </div>
      <div class="right">
        <a target="_blank" href="<?php echo get_field('btn')['url']; ?>" class="btn btn--primary btn--transparent"><?php echo get_field('btn')['title']; ?></a>
      </div>

    </div>

  </div>


<?php get_footer(); ?>
