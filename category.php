<!-- category.php è richiamata nel sidebar.php -->
		
		<p>Esta es la página category.php</p>

		Category: <?php the_category(); ?>
		
		<!-- loop base de WP -->
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<article style="border:1px solid #333; margin-bottom: 20px;">
				
				<!-- post -->
				<header><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></header>
				<?php // the_excerpt(); ?>	
				<?php the_content("...más" ); ?>
				<i><?php the_time(); ?></i><br />
				<i><?php the_date(); ?></i><br />
				<i><?php the_author(); ?></i><br /><br />

				<!-- 
					++++ NOTA BENE: ++++
					the_content -> mostra tutto il contenuto, a meno che no abbiamo inserito un "MORE" nel backend di WP 					
					the_excerpt -> mostra le prime XX parole e poi aggiunge questo simbolo "[...]" e stampa il texto nudo/crudo senza html.
				-->

			</article>

		<?php endwhile; ?>
				<!-- post navigation -->
		<?php else: ?>
				<!-- no posts found -->
				<p>no hay post</p>
		<?php endif; ?>