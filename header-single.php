<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo("description"); ?></title>
	<link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
	<!-- invlude tutto i META e CSS/JS che utilizzano i plugins -->
	<?php wp_head(); ?>
</head>

<!-- class="single" -->
<body class="single">

	<!-- invlude slider.php -->
	<?php get_template_part("nav"); ?>