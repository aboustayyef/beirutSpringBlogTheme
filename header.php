<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Hellish Simplicity
 * @since Hellish Simplicity 1.1
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="http://beirutspring.com/favicon.ico?v=001" />

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<!-- START BEIRUT SPRING FESTIVAL BANNER -->

<style media="screen" type="text/css">
	.beirutspringfestival{
		background-color:#6CD7CF;
		padding:5px;
		color:white;
		text-align: center;
		border-bottom:5px solid #F7141C
	}
	.beirutspringfestival h4{
		margin: 15px 0;
		line-height: 1.3;
	}
	.beirutspringfestival h4 a{
		color:#F7141C;
	}
</style>

<div class="beirutspringfestival">
	<h4>Looking for the Beirut Spring Festival? <a href="https://www.facebook.com/BeirutSpringFestival">Click Here</a></h4>
</div>


<!-- END BEIRUT SPRING FESTIVAL BANNER -->

<header id="site-header" role="banner">
	<div class="hgroup">
		<h1>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<img src ="http://beirutspring.com/beirut_spring_square_logo_2x.png" width = "224" height = "128">
			</a>
		</h1>
		<h2><?php bloginfo( 'description' ); ?></h2>
	</div><!-- .hgroup -->
</header><!-- #masthead -->

<div id="main" class="site-main">
