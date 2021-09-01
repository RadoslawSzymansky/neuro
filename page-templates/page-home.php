<?php get_header(); // Template Name: Page Home ?>

  <?php the_content(); ?>

  <!-- -----======== SLIDER HOME =======----- -->
	<div class="header-home">
		<!-- slider -->
		<div class="header-home__slider">
		<?php
		if( have_rows('slides') ):
			while ( have_rows('slides') ) : the_row(); ?>
			<!-- single slide -->
				<div>
					<div class="header-home__slide">
						<!-- content -->
						<div class="header-home__content">
              <div class="container">
                <div class="header-home__content-wrapper">
                  <div class="header-home__text">
                    <?php the_sub_field('text'); ?>
                  </div>
                  <?php 
                    if (get_sub_field('przycisk')) { 
                      $subLink = get_sub_field('przycisk');
                      ?>
                      <a href="<?php echo $subLink['url']; ?>" target="<?php echo $subLink['target']; ?>" class="btn btn--primary">
                        <?php echo $subLink['title']; ?>
                      </a>
                    <?php };
                  ?>
                </div>
              </div>
            </div>
            <!-- img -->
            <?php $subImg = get_sub_field('img'); ?>
            <img class="header-home__img" src="<?php echo $subImg['url']; ?>" alt="<?php echo $subImg['alt']; ?>">
					</div>
				</div>
			<?php endwhile;
		else :
		endif;
		?>
    </div>
	</div>

  <?php $boxes = get_field('boxes'); ?>
  <div class="boxes">
    <div class="container container-xl">
      <div class="boxes__row">
        <div class="left">
          <div class="boxes__text text-content">
            <div class="label"><?php the_field('boxes_labekl'); ?></div>
            <?php the_field('boxes_text'); ?>
          </div>
          <div class="item-wrapper">
            <div class="boxes-item">
              <img src="<?php echo $boxes[0]['img']['url']; ?>" alt="<?php echo $boxes[0]['img']['url']; ?>">
              <div class="boxes-item__content">
                <!-- title -->
                <h2 class="title"><?php echo $boxes[0]['title']; ?></h2>
                <!-- link - button -->
                <a href="<?php echo $boxes[0]['link']['url']; ?>" target="<?php echo $boxes[0]['link']['target']; ?>" class="btn btn--primary">
                  <?php echo $boxes[0]['link']['title']; ?>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="right">

          <a href="tel:<?php the_field('phone', 'options'); ?>" class="call-us">
            <svg xmlns="http://www.w3.org/2000/svg" width="52.218" height="51.218" viewBox="0 0 52.218 51.218">
              <path id="phone" d="M16.7,45.134,6.2,34.841a20.464,20.464,0,0,1,0-29.353,1.393,1.393,0,0,1,1.943,0L18.64,15.781a1.33,1.33,0,0,1,0,1.906l-3.5,3.431a3.454,3.454,0,0,0,0,4.956L25.635,36.366a3.618,3.618,0,0,0,5.052,0l3.5-3.431a1.393,1.393,0,0,1,1.943,0L46.622,43.228a1.33,1.33,0,0,1,0,1.906,21.443,21.443,0,0,1-29.926,0ZM2.748,20.165a17.772,17.772,0,0,0,5.4,12.771L18.64,43.228a18.666,18.666,0,0,0,25.032.918l-8.515-8.352-2.526,2.478a6.405,6.405,0,0,1-8.939,0L13.2,27.979a6.113,6.113,0,0,1,0-8.768l2.526-2.478L7.21,8.382A17.723,17.723,0,0,0,2.748,20.165ZM30.086,21.71a1.335,1.335,0,0,1-.4-.953V6.2a1.374,1.374,0,0,1,2.748,0V19.409H45.9a1.348,1.348,0,1,1,0,2.7H31.057A1.387,1.387,0,0,1,30.086,21.71Zm9.779-9.851a1.33,1.33,0,0,1,.023-1.906l10-9.57a1.393,1.393,0,0,1,1.943.023A1.33,1.33,0,0,1,51.8,2.312l-10,9.57a1.393,1.393,0,0,1-1.943-.023Z" fill="#00b9f2"/>
            </svg>
            <div class="call-us__right">
              <p><?php the_field('visit'); ?></p>
              <span><?php the_field('phone', 'options'); ?></span>
            </div>
          </a>
          <div class="sticky">
            <div class="boxes-item">
              <img src="<?php echo $boxes[1]['img']['url']; ?>" alt="<?php echo $boxes[1]['img']['url']; ?>">
              <div class="boxes-item__content">
                <!-- title -->
                <h2 class="title"><?php echo $boxes[1]['title']; ?></h2>
                <!-- link - button -->
                <a href="<?php echo $boxes[1]['link']['url']; ?>" target="<?php echo $boxes[1]['link']['target']; ?>" class="btn btn--primary">
                      <?php echo $boxes[1]['link']['title']; ?>
                </a>
              </div>
            </div>
            
            <div class="boxes-item">
              <img src="<?php echo $boxes[2]['img']['url']; ?>" alt="<?php echo $boxes[2]['img']['url']; ?>">
              <div class="boxes-item__content">
                <!-- title -->
                <h2 class="title"><?php echo $boxes[2]['title']; ?></h2>
                <!-- link - button -->
                <a href="<?php echo $boxes[2]['link']['url']; ?>" target="<?php echo $boxes[2]['link']['target']; ?>" class="btn btn--primary">
                      <?php echo $boxes[2]['link']['title']; ?>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  <div class="news">
    <div class="news__wrapper">
      <div class="news__intro">
        <div class="label"><?php the_field('news_label'); ?></div>
        <h2><?php the_field('news_title'); ?></h2>
        <div class="news-nav">
          <button><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/arrow.svg" /></button>
          <button><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/arrow.svg" /></button>
        </div>
      </div>
      <!--  -->
      <div class="slider-wrapper">
        <div class="news-slider">
        <?php
        if( have_rows('news') ):
          while ( have_rows('news') ) : the_row(); ?>
          <?php $item = get_sub_field('post'); ?>
          <!-- single slide -->
          <div>
            <div class="news__item">
              <a href="<?php  echo $item->guid; ?>" class="title-wrapper">
                <h3><?php  echo $item->post_title; ?></h3>
              </a>
              <a href="<?php  echo $item->guid; ?>" class="get-more">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/arrow-small.svg">
                <?php pll_e('Dowiedz się więcej'); ?>
              </a>
            </div>
          </div>
          <?php endwhile;
        else :
        endif;
        ?>
          <?php
        if( have_rows('news') ):
          while ( have_rows('news') ) : the_row(); ?>
          <?php $item = get_sub_field('post'); ?>
          <!-- single slide -->
          <div>
            <div class="news__item">
              <a href="<?php  echo $item->guid; ?>" class="title-wrapper">
                <h3><?php  echo $item->post_title; ?></h3>
              </a>
              <a href="<?php  echo $item->guid; ?>" class="get-more">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/arrow-small.svg">
                <?php pll_e('Dowiedz się więcej'); ?>
              </a>
            </div>
          </div>
          <?php endwhile;
        else :
        endif;
        ?>
         <?php
        if( have_rows('news') ):
          while ( have_rows('news') ) : the_row(); ?>
          <?php $item = get_sub_field('post'); ?>
          <!-- single slide -->
          <div>
            <div class="news__item">
              <a href="<?php  echo $item->guid; ?>" class="title-wrapper">
                <h3><?php  echo $item->post_title; ?></h3>
              </a>
              <a href="<?php  echo $item->guid; ?>" class="get-more">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/arrow-small.svg">
                <?php pll_e('Dowiedz się więcej'); ?>
              </a>
            </div>
          </div>
          <?php endwhile;
        else :
        endif;
        ?>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-home-container">
    <div class="contact-home" style="background-image: url('<?php echo get_field('contact-home_img')['url']; ?>');">
        <div class="contact-home__content">
          <div>
            <?php the_field('contact-home_text'); ?>
          </div>
          <?php $contactLink = get_field('contact-home_btn'); ?>
          <a href="<?php echo $contactLink['url']; ?>" target="<?php echo $contactLink['target']; ?>" class="btn btn--primary">
            <?php echo $contactLink['title']; ?>
          </a>
        </div>
    </div>
  </div>


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