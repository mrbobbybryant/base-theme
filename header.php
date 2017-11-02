<?php
use DevelopWP\Theme\Helpers;
use DevelopWP\Theme\View;

$logged_in = is_user_logged_in(); ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

