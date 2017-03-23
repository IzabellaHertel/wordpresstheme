<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta charset="utf-8" />
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="header">
	<div class="container hidden-md hidden-lg">
		<div class="row">
			<div class="col-xs-4">
				<div class="icon">
					<i class="fa fa-search"></i>
				</div>
			</div>
			<div class="col-xs-4">
				<?php my_logo(); ?>
			</div>
			<div class="col-xs-4">
				<div class="icons">
					<i class="fa fa-bars"></i>
					<i class="fa fa-times"></i>
				</div>
			</div>
		</div>
	</div>
	<div class="container hidden-xs hidden-sm text-center">
		<div class="row">
			<div class="col-xs-12">
				<?php my_logo(); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1 main-menu">
				<?php wp_nav_menu(); ?>
			</div>
			<div class="col-md-1">
				<div class="icon-search">
					<i class="fa fa-search"></i>
				</div>
			</div>
		</div>
	</div>
</header>

<section class="searchform">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<?php get_search_form(); ?>
			</div>
		</div>
	</div>
</section>

<section class="main-menu hidden-md hidden-lg">
	<div class="container">
		<div class="row">	
			<div class="col-xs-12 text-center">
				<?php wp_nav_menu(); ?>
			</div>
		</div>
	</div>
</section>

<main>

