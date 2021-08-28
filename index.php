<?php get_header(); // Template Name: Blog ?>

  <div class="header-simple" style="background-image: url('<?php echo get_field('header_img')['url']; ?>')">
    <div class="container">
      <h1><?php the_field('title'); ?></h1>
    </div>
  </div>

  <div class="container">
    <?php get_breadcrumb(); ?>
  </div>
  

  <div class="container">
      <div class="blog">
        <?php
            if( have_rows('posts') ):
            while ( have_rows('posts') ) : the_row(); 
            $single = get_sub_field("post");
            $id = $single->ID;
            ?>
                <div class="single-post">
                    <div class="top">
                        <a href="<?php echo $single->guid; ?>">
                            <img src="<?php echo get_field('zdjecie_na_stronie_blog', $id)['url']; ?>" alt="blog">                        
                        </a>
                    </div>
                    
                    <div class="single-post__content">
                        <a href="<?php echo $single->guid; ?>">
                            <h5><?php echo $single->post_title; ?></h5>
                        </a>
                        <p><?php echo get_field('krotki_opis', $id); ?></p>
                        <a href="<?php echo $single->guid; ?>" class="circle">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/right.svg" alt="icon">
                        </a>
                    </div>
                </div>
            <?php endwhile;
            else :
            endif;
        ?>
      </div>
  </div>

<?php get_footer(); ?>