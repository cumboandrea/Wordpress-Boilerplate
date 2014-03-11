<!-- codice html semplice -->
<!--
<nav>
	<ul class="sidebar">
		<li><a href="#">Elem 01</a></li>
		<li><a href="#">Elem 02</a></li>
		<li><a href="#">Elem 03</a></li>
		<li><a href="#">Elem 04</a></li>
		<li><a href="#">Elem 05</a></li>
	</ul>
</nav>
-->

<!-- -->
<aside>
	<?php if (is_active_sidebar('Widget1')) : ?>
		
			<?php dynamic_sidebar('Widget1'); ?>
		
	<?php endif; ?>
</aside>

<!-- include category.php -->
<?php get_template_part("category"); ?>