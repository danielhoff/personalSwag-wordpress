<?php
/**
 * Header
 *
 * Setup the header for our theme
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 1.0
 */
?>

<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<link rel="shortcut icon" href="favicon.ico" />

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="width=device-width" />

<script type="text/javascript" src="//use.typekit.net/uth6irn.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<title><?php wp_title(); ?></title>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div id="container" class="row">
		<header>

		<hgroup class="site-title three columns">
			<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="subheader"><?php bloginfo('description'); ?></h2>
			<h4>Pages</h4>
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'nav-bar','fallback_cb' => 'foundation_page_menu', 'container' => 'nav', 'container_class' => 'five columns', 'walker' => new foundation_navigation() ) ); ?>
		</hgroup>

		

	</header>

<!-- Begin Page -->
