<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package synergis_new
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!--Header-->
	<header class="site-header">
		<div class="top-bar">
			<div class="uk-container uk-container-center">
				<nav class="uk-navbar">
                    <a class="uk-navbar-brand" href="#">Brand</a>
                    <div class="uk-navbar-content uk-navbar-flip  uk-hidden-small">
						<ul class="uk-navbar-nav">
						   <li><a href="">Menu</a></li>
						</ul>
                    </div>
                </nav>
			</div>
		</div>
		<div class="utility-bar">
			<div class="uk-container uk-container-center">
				<nav class="uk-navbar">
					<ul class="uk-navbar-nav">
						<li><a href="">support</a></li>
						<li><a href="">training</a></li>
						<li><a href="">events</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!--End-->
