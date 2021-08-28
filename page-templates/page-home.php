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