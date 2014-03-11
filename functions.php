<?php  

// Aquí doy soporte a mi plantilla para las miniaturas de los posts.
// IMAGEN DESTACADA en el backend
add_theme_support('post-thumbnails');

/* Attivare i menu */
add_theme_support('menus');

/* Quanti menu e in quale zone ci sono nel mio tema  */
register_nav_menus(
	array(
		'header_menu' => 'Es el menu de la cabecera',
		'footer_menu' => 'Es el menu del pie (footer)',
	)
);


/* Funzione richiamata in nav.php */
function nuestra_funcion_wp() {
	echo "<h3>no hay menu</h3>";
};


/* Per attivare Widgets */ 
/* WIDGETS -> Spazio che si abilita per metterci cose, cioè metterci funzionalità che possono eseere create. */
function iniciar_widgets() {

	/* Primo Widget */
	register_sidebar( array(
		'id' => 'Widget1',
		'name' => 'Zona Widget 1',
		'description' => 'este es mi sidebar',
		'before_widget' => '<section>',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	));
	
	/* Secondo Widget */
	register_sidebar( array(
		'id' => 'Widget2',
		'name' => 'Zona Widget que va en el footer',
		'description' => 'este es mi widget para el footer',
	));

};
add_action('widgets_init', 'iniciar_widgets');