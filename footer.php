
    <div class="container container-xl">
      <div class="contact-footer" style="background-image: url('<?php echo get_field('contact-footer_img', 'options')['url']; ?>');">
          <img class="contact-footer__img" src="<?php echo get_field('contact-footer_img', 'options')['url']; ?>" alt="<?php echo get_field('contact-footer_img', 'options')['alt']; ?>">
          <div class="contact-footer__content">
            <div>
              <?php the_field('contact-footer_text', 'options'); ?>
            </div>
            <?php $contactLink = get_field('contact-footer_btn', 'options'); ?>
            <a href="<?php echo $contactLink['url']; ?>" target="<?php echo $contactLink['target']; ?>" class="btn btn--primary btn--transparent">
              <?php echo $contactLink['title']; ?>
            </a>
          </div>
      </div>
    </div>

    <div class="container">
      <div class="our-partners">
        <div class="label"><?php the_field('our-parnerts_label'); ?></div>
        <h2><?php the_field('our-parnerts_title'); ?></h2>
        <div class="our-partners__row">
          <img class="our-partners__img" src="<?php echo get_field('our-parnerts_img-1')['url']; ?>" alt="partner logo">
          <div class="line"></div>
          <img class="our-partners__img" src="<?php echo get_field('our-parnerts_img-2')['url']; ?>" alt="partner logo">
        </div>
      </div>
    </div>


    <footer class="footer">

    </footer>

    <?php wp_footer(); ?>

    <!-- ---=====  SCRIPTS =====------ -->

    <!-- // global -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/menu.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>\node_modules\tiny-slider\dist\min\tiny-slider.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>\node_modules\simplelightbox\dist\simple-lightbox.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/header-home-slider.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/news-slider.js"></script>


    <script>
        document.addEventListener('DOMContentLoaded', () => {
            new SimpleLightbox('.gallery-0 a', { });
            new SimpleLightbox('.gallery-1 a', { });
            new SimpleLightbox('.gallery-2 a', { });
            new SimpleLightbox('.gallery-3 a', { });
            new SimpleLightbox('.gallery-4 a', { });
            new SimpleLightbox('.gallery-5 a', { });
            new SimpleLightbox('.gallery-6 a', { });
            new SimpleLightbox('.gallery-7 a', { });
            new SimpleLightbox('.gallery-8 a', { });
        });
    </script>
</body>
</html>
