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
		<div class="">
			<div class="menu-fixed__wrapper">
				<div class="menu-fixed__top">
					<a href="<?php echo get_home_url(); ?>" class="menu-fixed__logo">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/logo.svg" alt="greenbear logo">
					</a>
					<?php
						if (get_field('menu-top_btn', 'options')) { 
							$howLink = get_field('menu-top_btn', 'options');
							?>
							<a href="<?php echo $howLink['url']; ?>" target="<?php echo $howLink['target']; ?>" class="btn btn--small">
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
					<div class="menu-fixed__langs">
						<?php wp_nav_menu(['menu' => 'Menu języki', 'container' => false]); ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/arrow-down.svg" alt="greenbear logo">
					</div>
				</div>
			</div>
		</div>
	</nav>