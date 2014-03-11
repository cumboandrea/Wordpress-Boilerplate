<!-- invlude header-sinle.php -->
<?php get_header("single"); ?>

SINGLE PAGE

	<!-- invlude the_loop_single.php -->
	<?php get_template_part("the_loop_single"); ?>

	<main>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- post -->
			<h1></h1>
			<header>
				
			</header><!-- /header -->

			
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>
	</main>
	

<!-- invlude footer.php -->
<?php get_footer(); ?>