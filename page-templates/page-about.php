<?php get_header(); // Template Name: O nas ?>

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
    <div class="about__content">
      <?php the_content(); ?>
    </div>
  </div>

  <div class="container container-xl">
    <div class="about__middle">
      <img src="<?php echo get_field('about-middle-img')['url']; ?>" alt="about us">
      <div class="content">
        <div class="label">
          <?php the_field("about-label"); ?>
        </div>
        <h2>
          <?php the_field("about-title"); ?>
        </h2>
      </div>
    </div>
  </div>

  <div class="overflow">
    <div class="container">
      <div class="about-exp">
        <div class="left">
          <div class="label">
            <?php the_field('about-exp-label'); ?>
          </div>
          <h2><?php the_field('about-exp-title'); ?></h2>
        </div>

        <div class="right">
          <div class="content">
            <p>
              <?php the_field('about-exp-text'); ?>
            </p>
            <div class="icons">
             <?php
              if( have_rows('icons') ):
                while ( have_rows('icons') ) : the_row(); ?>
                  <div class="">
                    <?php the_sub_field('svg'); ?>
                    <p>
                      <?php the_sub_field('title'); ?>
                    </p>
                  </div>
                <?php endwhile;
              else :
              endif;
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">

    <div class="text-section">
      <div class="label"><?php the_field('text_label'); ?></div>
      <?php the_field('text-section'); ?>
      <a download href="<?php the_field('file'); ?>" class="btn btn--transparent btn--primary">
        <?php the_field('btn-text'); ?>
      </a>
    </div>

  </div>


<?php get_footer(); ?>
