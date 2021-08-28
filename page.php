<?php get_header(); //POJEDYCZNA PODSTRONA ZWYKŁA ?>

	<div class="page-content container">
		<div class="container">
			<div style="background-color: red; height: 200px;">NORMAL</div>
			<div style="background-color: red; height: 200px;">LARGE</div>
			<div style="background-color: red; height: 200px;">SMALL</div>
		</div>
		<?php the_content(); ?>
	</div>

<?php get_footer(); ?>