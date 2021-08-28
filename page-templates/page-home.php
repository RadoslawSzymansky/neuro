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
  <div class="overflow">
    <div class="boxes">
      <div class="container container-xl">
        <div class="boxes__row">
          <div class="left">
            <div class="boxes__text text-content">
              <div class="label"><?php the_field('boxes_labekl'); ?></div>
              <?php the_field('boxes_text'); ?>
            </div>
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
          <div class="right">

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