<?php get_header(); // Template Name: Page Home ?>

  <?php the_content(); ?>

  <div class="container">
    <div style="background-color: red; height: 200px;">NORMAL</div>
  </div>
  <div class="container container-lg">
    <div style="background-color: blue; height: 200px;">SMALL</div>
  </div>
  <div class="container container-xl">
    <div style="background-color: green; height: 200px;">LARGE</div>
  </div>
<?php get_footer(); ?>