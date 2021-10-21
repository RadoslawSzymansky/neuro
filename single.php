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
    <div class="single-blog">
      <div class="left">
        <div class="text-section">
          <a class="back" href="<?php echo get_permalink(get_option( 'page_for_posts')); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="6.615" height="14.901" viewBox="0 0 6.615 14.901">
  <path id="Path_216_-_Outline" data-name="Path 216 - Outline" d="M7.451,6.615a.931.931,0,0,1-.553-.18L.387,1.7A.94.94,0,0,1,.18.387.94.94,0,0,1,1.493.18L7.451,4.513,13.408.18a.94.94,0,1,1,1.1,1.521L8,6.435A.935.935,0,0,1,7.451,6.615Z" transform="translate(6.615) rotate(90)" fill="#00b9f2"/>
</svg>
<?php pll_e('Powrót do aktualności'); ?></a>
          <h2><?php the_title(); ?></h2>
        </div>
      </div>
      <div class="right">
        <?php the_content(); ?>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
