<!-- category.php è richiamata nel sidebar.php -->

<?php get_header(); ?>
		
		<p>Esta es la página category.php!</p>

		Category: <?php the_category(); ?>
		
		
		<!-- Quando tengo 2 LOOP, con questo prima del 2º loop, evito che vadano in conflitto i due filtri. -->
		<?php // rewind_posts(); ?>

		<!-- Filtra la query del LOOP con i parametri che gli passo. -->
		<?php //query_posts("cat=1" ); ?>
		
		<!-- Posso anche passare più di 1 filtro -->
		<?php //query_posts("category_name=&posts_per_page=1" ); ?>

		<!-- Mostrami tutto meno che la cat 1 -->
		<?php // query_posts("cat=-1" ); ?>

		
		<!-- loop base de WP -->
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<article style="border:1px solid #333; margin-bottom: 20px;">
				
				<!-- post -->
				<header><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></header>
				<?php // the_excerpt(); ?>	
				<?php the_content("...más" ); ?>
				<i><?php the_time(); ?></i><br />
				<i><?php the_date(); ?></i><br />
				<i><?php the_author(); ?></i><br />

				<!-- Tamaño: 1.thumbnail - 2. medium - 3.large - 4.full (modificabili in Adjustes  -> Medios -->
				<p><?php the_post_thumbnail('thumbnail'); ?></p><br />

				<!-- 
					++++ NOTA BENE: ++++
					the_content -> mostra tutto il contenuto, a meno che no abbiamo inserito un "MORE" nel backend di WP 					
					the_excerpt -> mostra le prime XX parole e poi aggiunge questo simbolo "[...]" e stampa il texto nudo/crudo senza html.
				-->

			</article>


			<div id="elem" data-efecto="3d">Primo Elemento della lsista</div>

			<div id="elem" data-efecto="liner">Secondo Elemento</div>


		<?php endwhile; ?>
				<!-- post navigation -->
		<?php else: ?>
				<!-- no posts found -->
				<p>no hay post</p>
		<?php endif; ?>


		<?php get_footer(); ?>