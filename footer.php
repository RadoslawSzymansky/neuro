
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

    <?php
      if (is_front_page()) {
        ?>
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
        <?php
      }
    ?>

    <footer class="footer" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/stopka.jpeg');">

      <div class="container">
        <div class="footer__top">
          <!--  col 1 -->
          <div class="footer__col">
            <a href="<?php echo get_home_url(); ?>" class="logo">
              <img class="logo-white" src="<?php echo get_template_directory_uri(); ?>/assets/icons/logo.svg" alt="greenbear logo">
            </a>
            <div class="label">
              <?php the_field('logo-text', 'options'); ?>
            </div>
            <div class="socials">
              <a target="-_blank" href="<?php the_field('facebook', 'options'); ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="22.644" height="22.644" viewBox="0 0 22.644 22.644">
                  <path id="_001-facebook" data-name="001-facebook" d="M19.595,0H3.053A3.051,3.051,0,0,0,0,3.051V19.593a3.051,3.051,0,0,0,3.051,3.051h8.158l.014-8.092h-2.1a.5.5,0,0,1-.5-.494l-.01-2.608a.5.5,0,0,1,.5-.5h2.1V8.432c0-2.925,1.786-4.517,4.4-4.517h2.141a.5.5,0,0,1,.5.5v2.2a.5.5,0,0,1-.5.5H16.434c-1.419,0-1.694.674-1.694,1.664v2.182h3.118a.5.5,0,0,1,.493.554l-.309,2.608a.5.5,0,0,1-.493.438H14.754l-.014,8.092h4.854a3.051,3.051,0,0,0,3.051-3.051V3.051A3.051,3.051,0,0,0,19.595,0Z" transform="translate(-0.002)" fill="#fff"/>
                </svg>
              </a>
              <a target="-_blank" href="<?php the_field('instagram', 'options'); ?>">
                <svg id="_002-instagram" data-name="002-instagram" xmlns="http://www.w3.org/2000/svg" width="22.64" height="22.644" viewBox="0 0 22.64 22.644">
                  <path id="Path_54089" data-name="Path 54089" d="M23.031,6.657A8.274,8.274,0,0,0,22.5,3.91,5.8,5.8,0,0,0,19.191.6,8.3,8.3,0,0,0,16.444.071C15.232.013,14.847,0,11.773,0S8.314.013,7.106.066A8.277,8.277,0,0,0,4.359.593,5.525,5.525,0,0,0,2.351,1.9a5.575,5.575,0,0,0-1.3,2A8.3,8.3,0,0,0,.519,6.653C.462,7.865.449,8.25.449,11.324s.013,3.459.066,4.667a8.274,8.274,0,0,0,.527,2.747,5.8,5.8,0,0,0,3.313,3.313,8.3,8.3,0,0,0,2.747.526c1.207.053,1.592.066,4.667.066s3.459-.013,4.667-.066a8.272,8.272,0,0,0,2.747-.526A5.792,5.792,0,0,0,22.5,18.738a8.3,8.3,0,0,0,.526-2.747c.053-1.208.066-1.592.066-4.667s0-3.459-.058-4.667ZM20.992,15.9A6.207,6.207,0,0,1,20.6,18a3.756,3.756,0,0,1-2.15,2.15,6.229,6.229,0,0,1-2.1.389c-1.194.053-1.553.066-4.574.066S8.393,20.6,7.2,20.543a6.2,6.2,0,0,1-2.1-.389,3.484,3.484,0,0,1-1.3-.845,3.521,3.521,0,0,1-.845-1.3,6.23,6.23,0,0,1-.389-2.1c-.053-1.194-.066-1.553-.066-4.574s.013-3.384.066-4.574a6.2,6.2,0,0,1,.389-2.1,3.442,3.442,0,0,1,.849-1.3,3.515,3.515,0,0,1,1.3-.845,6.233,6.233,0,0,1,2.1-.389c1.194-.053,1.553-.066,4.574-.066s3.384.013,4.574.066a6.207,6.207,0,0,1,2.1.389,3.482,3.482,0,0,1,1.3.845,3.52,3.52,0,0,1,.845,1.3,6.232,6.232,0,0,1,.389,2.1c.053,1.194.066,1.553.066,4.574s-.013,3.375-.066,4.57Zm0,0" transform="translate(-0.449 0)" fill="#fff"/>
                  <path id="Path_54090" data-name="Path 54090" d="M130.766,124.5a5.817,5.817,0,1,0,5.817,5.817A5.818,5.818,0,0,0,130.766,124.5Zm0,9.59a3.773,3.773,0,1,1,3.773-3.773A3.774,3.774,0,0,1,130.766,134.09Zm0,0" transform="translate(-119.442 -118.993)" fill="#fff"/>
                  <path id="Path_54091" data-name="Path 54091" d="M365.166,89.96a1.358,1.358,0,1,1-1.358-1.358A1.358,1.358,0,0,1,365.166,89.96Zm0,0" transform="translate(-346.436 -84.682)" fill="#fff"/>
                </svg>
              </a>
              <a target="-_blank" href="<?php the_field('linkedin', 'options'); ?>">
                <svg id="_001-linkedin-logo" data-name="001-linkedin-logo" xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23">
                  <g id="post-linkedin">
                    <path id="Path_54084" data-name="Path 54084" d="M20.7,0H2.3A2.307,2.307,0,0,0,0,2.3V20.7A2.307,2.307,0,0,0,2.3,23H20.7A2.307,2.307,0,0,0,23,20.7V2.3A2.307,2.307,0,0,0,20.7,0ZM6.9,19.55H3.45V9.2H6.9ZM5.175,7.245a2.07,2.07,0,1,1,2.07-2.07A2.061,2.061,0,0,1,5.175,7.245ZM19.55,19.55H16.1v-6.1a1.725,1.725,0,0,0-3.45,0v6.1H9.2V9.2h3.45v1.38a3.715,3.715,0,0,1,2.875-1.61A4.075,4.075,0,0,1,19.55,13Z" fill="#fff"/>
                  </g>
                </svg>
              </a>
            </div>
          </div>

          <!--  col 2 -->
          <div class="footer__col">
            <div class="footer__item">
              <div class="icon">
                 <svg xmlns="http://www.w3.org/2000/svg" width="27.983" height="33.846" viewBox="0 0 27.983 33.846">
                  <path id="Union_3" data-name="Union 3" d="M1125.444,798.629c-.859-.807-1.771-1.625-2.652-2.417a52.791,52.791,0,0,1-7.322-7.488,16,16,0,0,1-3.469-9.733,13.991,13.991,0,0,1,27.983,0,16,16,0,0,1-3.47,9.733,52.83,52.83,0,0,1-7.321,7.488c-.882.791-1.794,1.609-2.652,2.417a.8.8,0,0,1-1.1,0ZM1113.6,778.991c0,6.826,5.215,11.5,10.26,16.03.7.632,1.427,1.281,2.132,1.931.7-.651,1.427-1.3,2.131-1.931,5.044-4.525,10.26-9.2,10.26-16.03a12.392,12.392,0,0,0-24.783,0Zm5.729,0a6.663,6.663,0,1,1,6.664,6.664A6.671,6.671,0,0,1,1119.328,778.991Zm1.6,0a5.063,5.063,0,1,0,5.063-5.062A5.069,5.069,0,0,0,1120.928,778.991Z" transform="translate(-1112 -765)" fill="#fff"/>
                </svg>
              </div>
              <div>
                <?php the_field('adress', 'options'); ?>
              </div>
            </div>
            <div class="footer__item">
              <div class="icon">
                <svg id="Group_8" data-name="Group 8" xmlns="http://www.w3.org/2000/svg" width="34.174" height="34.174" viewBox="0 0 34.174 34.174">
                  <path id="Ellipse_25" data-name="Ellipse 25" d="M12.087-5A17.087,17.087,0,1,1-5,12.087,17.106,17.106,0,0,1,12.087-5Zm0,32.531A15.444,15.444,0,1,0-3.357,12.087,15.461,15.461,0,0,0,12.087,27.531Z" transform="translate(5 5)" fill="#fff"/>
                  <path id="Path_45" data-name="Path 45" d="M3151.776,581.544h-5.915a.821.821,0,0,1-.821-.822V571.85a.821.821,0,1,1,1.643,0V579.9h5.093a.822.822,0,1,1,0,1.643Z" transform="translate(-3128.775 -563.636)" fill="#fff"/>
                </svg>
              </div>
              <div>
                <?php the_field('godziny_otwarcia', 'options'); ?>
              </div>
            </div>
          </div>

          <!--  col 3 -->
          <div class="footer__col">
            <div class="footer__item">
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="33.218" height="33.218" viewBox="0 0 33.218 33.218">
                  <path id="Union_1" data-name="Union 1" d="M10.621,29.272,3.946,22.6a13.454,13.454,0,0,1,0-19.037.874.874,0,0,1,1.236,0l6.676,6.675a.874.874,0,0,1,0,1.236L9.632,13.7a2.271,2.271,0,0,0,0,3.214l6.675,6.675a2.27,2.27,0,0,0,3.214,0l2.225-2.225a.874.874,0,0,1,1.236,0l6.675,6.675a.874.874,0,0,1,0,1.236,13.454,13.454,0,0,1-19.037,0ZM1.748,13.078A11.638,11.638,0,0,0,5.182,21.36l6.676,6.675a11.707,11.707,0,0,0,15.924.6l-5.417-5.417-1.607,1.607a4.019,4.019,0,0,1-5.686,0L8.4,18.146a4.019,4.019,0,0,1,0-5.686L10,10.853,4.586,5.436A11.625,11.625,0,0,0,1.748,13.078Zm17.39,1a.874.874,0,0,1-.256-.618V4.022a.874.874,0,0,1,1.748,0v8.566H29.2a.874.874,0,1,1,0,1.748h-9.44A.874.874,0,0,1,19.139,14.08Zm6.221-6.389a.874.874,0,0,1,.015-1.236L31.733.249A.874.874,0,0,1,32.954,1.5L26.6,7.707a.874.874,0,0,1-1.236-.015Z" fill="#fff"/>
                </svg>
              </div>
              <div>
                <?php the_field('contact', 'options'); ?>
                <br>
                <a href="tel:<?php the_field('phone', 'options'); ?>">
                  <?php the_field('phone', 'options'); ?>
                </a>
              </div>
            </div>
            <div class="footer__item">
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="34.174" height="28.259" viewBox="0 0 34.174 28.259">
                  <path id="Union_2" data-name="Union 2" d="M3.779,28.259A3.783,3.783,0,0,1,0,24.48V3.779A3.783,3.783,0,0,1,3.779,0H30.4a3.783,3.783,0,0,1,3.779,3.779v20.7A3.783,3.783,0,0,1,30.4,28.259ZM1.643,3.779v20.7a2.138,2.138,0,0,0,2.136,2.136H30.4a2.138,2.138,0,0,0,2.136-2.136V3.779A2.138,2.138,0,0,0,30.4,1.643H3.779A2.138,2.138,0,0,0,1.643,3.779ZM16.6,17.617,4.774,9.014a.821.821,0,0,1,.966-1.329l11.346,8.252L28.433,7.685A.821.821,0,1,1,29.4,9.014l-11.829,8.6a.822.822,0,0,1-.966,0Z" fill="#fff"/>
                </svg>
              </div>
              <div>
                <?php the_field('mail_tekst', 'options'); ?>
                <br>
                <a href="mailto:<?php the_field('mail', 'options'); ?>">
                  <?php the_field('mail', 'options'); ?>
                </a>
              </div>
            </div>
          </div>

          <div class="footer__col">

            <div class="go-up">
              <div class="circle">
                <svg xmlns="http://www.w3.org/2000/svg" width="6.615" height="14.901" viewBox="0 0 6.615 14.901">
                  <path id="Path_216_-_Outline" data-name="Path 216 - Outline" d="M7.451,0A.931.931,0,0,0,6.9.18L.387,4.914A.94.94,0,0,0,.18,6.228a.941.941,0,0,0,1.313.207L7.451,2.1l5.957,4.332a.94.94,0,1,0,1.1-1.521L8,.18A.935.935,0,0,0,7.451,0Z" transform="translate(6.615) rotate(90)" fill="#00b9f2"/>
                </svg>
              </div>
              <p><?php pll_e('Wróć do góry'); ?></p>
            </div>

          </div>
        </div>

        <div class="footer__bottom">
          <div class="links">
            <?php
              $link1 = get_field("link1", 'options');
              $link2 = get_field("link2", 'options');
            ?>
            <a href="<?php echo $link1['url'] ?>"><?php echo $link1['title']; ?></a>
            <a href="<?php echo $link2['url'] ?>"><?php echo $link2['title']; ?></a>
          </div>
          <div>
            <?php the_field('footer-text', 'options'); ?>
          </div>
      </div>

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
