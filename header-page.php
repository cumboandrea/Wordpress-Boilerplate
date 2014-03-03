<!doctype html>
<!-- Aggiunto  class="page" -->
<html lang="en" class="page">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo("title"); ?></title>
	<link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
	<!-- invlude tutto i META e CSS/JS che utilizzano i plugins -->
	<?php wp_head(); ?>
</head>
<body>

<!-- invlude slider.php -->
<?php get_template_part("slider"); ?>