


<header>
	<?php  
			$default = array(
					'theme_location'     => 'header_menu',
					'container' 	       => 'div',
					'before'             => '+',
					'after'              => '',
					'link_before'        => '',
					'link_after'         => '',
					'container_class'    => 'clase-contenidor',
					'container_class'    => '',
					'menu_class'         => '',
					'menu_id'            => '',
					'echo'               => 'true',  /*false - nasconde il menu */
					'fallback_cb'        => 'nuestra_funcion_wp',  /* nombre de una nuestra function (in functions.php), che si esegue quando non ci sono menu in questa zona. */
					'items_wrap'         => '<ul id="%1$s" class="%2$s">%3$s</ul>',  /* elemento che raggruppa l'item. SOlitamente "li" */
					'depth'              => 0,  /* Profondità: 1=non mostra i sub-menu // 2=mostra il primo submenu // 3=mostra il secondo submenu // 0=default cioé mostra tutti. */ 
			);

			wp_nav_menu ($default);
	?>
</header><!-- /header -->

<!-- include sidebar.php -->
<?php get_sidebar(); ?>