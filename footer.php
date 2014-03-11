
		<footer>
			<small><a href="#">Copyright</a></small>
			<small><a href="#">2014</a></small>
			<small><a href="#">emial@email.com</a></small>
		

			<?php if (is_active_sidebar('Widget2')) : ?>
		
					<?php dynamic_sidebar('Widget2'); ?>

			<?php else: ?>
					
					NO HAY WIDGETS DENTRO!
			
			<?php endif; ?>


		</footer>





		<!-- invlude la barra WP nel TOP della pagina  -->
		<?php wp_footer(); ?>
	</body>
</html>