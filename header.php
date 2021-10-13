<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>\fonts\stylesheet.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>\node_modules\tiny-slider\dist\tiny-slider.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>\node_modules\simplelightbox\dist\simple-lightbox.min.css">

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<nav class="menu-fixed">
			<div class="menu-fixed__wrapper">
				<div class="menu-fixed__top">
					<a href="<?php echo get_home_url(); ?>" class="menu-fixed__logo">
						<img class="logo logo-white" src="<?php echo get_template_directory_uri(); ?>/assets/icons/logo.svg" alt="greenbear logo">
						<img class="logo logo-blue" src="<?php echo get_template_directory_uri(); ?>/assets/icons/logo-filled.svg" alt="greenbear logo">
					</a>
          <a href="tel:<?php the_field('phone', 'options'); ?>" class="call-us call-us--white">
            <svg xmlns="http://www.w3.org/2000/svg" width="52.218" height="51.218" viewBox="0 0 52.218 51.218">
              <path id="phone" d="M16.7,45.134,6.2,34.841a20.464,20.464,0,0,1,0-29.353,1.393,1.393,0,0,1,1.943,0L18.64,15.781a1.33,1.33,0,0,1,0,1.906l-3.5,3.431a3.454,3.454,0,0,0,0,4.956L25.635,36.366a3.618,3.618,0,0,0,5.052,0l3.5-3.431a1.393,1.393,0,0,1,1.943,0L46.622,43.228a1.33,1.33,0,0,1,0,1.906,21.443,21.443,0,0,1-29.926,0ZM2.748,20.165a17.772,17.772,0,0,0,5.4,12.771L18.64,43.228a18.666,18.666,0,0,0,25.032.918l-8.515-8.352-2.526,2.478a6.405,6.405,0,0,1-8.939,0L13.2,27.979a6.113,6.113,0,0,1,0-8.768l2.526-2.478L7.21,8.382A17.723,17.723,0,0,0,2.748,20.165ZM30.086,21.71a1.335,1.335,0,0,1-.4-.953V6.2a1.374,1.374,0,0,1,2.748,0V19.409H45.9a1.348,1.348,0,1,1,0,2.7H31.057A1.387,1.387,0,0,1,30.086,21.71Zm9.779-9.851a1.33,1.33,0,0,1,.023-1.906l10-9.57a1.393,1.393,0,0,1,1.943.023A1.33,1.33,0,0,1,51.8,2.312l-10,9.57a1.393,1.393,0,0,1-1.943-.023Z" fill="#00b9f2"/>
            </svg>
            <div class="call-us__right">
              <p><?php the_field('visit', 'options'); ?></p>
              <span><?php the_field('phone', 'options'); ?></span>
            </div>
          </a>
					<?php
						if (get_field('menu-top_btn', 'options')) {
							$howLink = get_field('menu-top_btn', 'options');
							?>
							<a href="<?php echo $howLink['url']; ?>" target="<?php echo $howLink['target']; ?>" class="btn btn-top btn--small">
								<?php echo $howLink['title']; ?>
							</a>
					<?php }; ?>
					<div class="burger">
						<div></div>
						<div></div>
						<div></div>
					</div>
				</div>
				<div class="menu-fixed__bottom">
				<?php
						$menu_name = 'Menu strony ' . pll_current_language();
						wp_nav_menu( array(
								'menu'              => $menu_name ,
								'container'         => false,
						) );
					?>
					<?php
						if (get_field('menu-top_btn', 'options')) {
							$howLink = get_field('menu-top_btn', 'options');
							?>
							<a href="<?php echo $howLink['url']; ?>" target="<?php echo $howLink['target']; ?>" class="btn btn--small">
								<?php echo $howLink['title']; ?>
							</a>
					<?php };?>
          <a href="tel:<?php the_field('phone', 'options'); ?>" class="call-us">
            <svg xmlns="http://www.w3.org/2000/svg" width="52.218" height="51.218" viewBox="0 0 52.218 51.218">
              <path id="phone" d="M16.7,45.134,6.2,34.841a20.464,20.464,0,0,1,0-29.353,1.393,1.393,0,0,1,1.943,0L18.64,15.781a1.33,1.33,0,0,1,0,1.906l-3.5,3.431a3.454,3.454,0,0,0,0,4.956L25.635,36.366a3.618,3.618,0,0,0,5.052,0l3.5-3.431a1.393,1.393,0,0,1,1.943,0L46.622,43.228a1.33,1.33,0,0,1,0,1.906,21.443,21.443,0,0,1-29.926,0ZM2.748,20.165a17.772,17.772,0,0,0,5.4,12.771L18.64,43.228a18.666,18.666,0,0,0,25.032.918l-8.515-8.352-2.526,2.478a6.405,6.405,0,0,1-8.939,0L13.2,27.979a6.113,6.113,0,0,1,0-8.768l2.526-2.478L7.21,8.382A17.723,17.723,0,0,0,2.748,20.165ZM30.086,21.71a1.335,1.335,0,0,1-.4-.953V6.2a1.374,1.374,0,0,1,2.748,0V19.409H45.9a1.348,1.348,0,1,1,0,2.7H31.057A1.387,1.387,0,0,1,30.086,21.71Zm9.779-9.851a1.33,1.33,0,0,1,.023-1.906l10-9.57a1.393,1.393,0,0,1,1.943.023A1.33,1.33,0,0,1,51.8,2.312l-10,9.57a1.393,1.393,0,0,1-1.943-.023Z" fill="#00b9f2"/>
            </svg>
            <div class="call-us__right">
              <p><?php the_field('visit', 'options'); ?></p>
              <span><?php the_field('phone', 'options'); ?></span>
            </div>
          </a>
					<div class="menu-fixed__langs">
						<?php wp_nav_menu(['menu' => 'Menu języki', 'container' => false]); ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/arrow-down.svg" alt="greenbear logo">
					</div>
				</div>
			</div>
	</nav>


  <div class="btn-fixed">
    <?php
      if (get_field('menu-top_btn', 'options')) {
        $howLink = get_field('menu-top_btn', 'options');
        ?>
        <a href="<?php echo $howLink['url']; ?>" target="<?php echo $howLink['target']; ?>" class="btn btn--small">
          <?php echo $howLink['title']; ?>
        </a>
    <?php };?>
  </div>
