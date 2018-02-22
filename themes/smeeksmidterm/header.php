<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta name="viewport" content="width=device-width">
	<!--
	<link rel="stylesheet" href="<?php //bloginfo('stylesheet_url'); ?>">
	-->
	 <?php wp_head(); ?>
</head>

<body>
<header>


 <?php
 wp_nav_menu(
  array(
    'theme_location' => 'header-menu',
    'container_class' => 'my_header_menu_class',
	'container'	=> 'nav',
  )
);
 ?>
</header>