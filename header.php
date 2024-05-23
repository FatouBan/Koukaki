<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" type="text/css" href="http://koukaki.local/wp-content/themes/foce-child/assets/video/video.scss?ver=6.4.3">
    <link rel="stylesheet" type="text/css" href="http://koukaki.local/wp-content/themes/foce-child/css-plus/parallax.scss?ver=6.4.3">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation toggled">
            <ul class="navbar-menu">
                <li class="site-title">
                    <a href="#">Fleurs d'oranger & chats errants</a>
                </li>
            </ul>
            <div id="navbar" class="navbar" aria-controls="primary-menu" aria-expanded="false"> 
        <button class="navbar-burger navbar-open" aria-expanded="true"> 
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
        </button>
                
    <!-- Intégration du menu hamburger -->
    <div class="navbar-content">
    <img class="logo-burger" src="<?php echo get_stylesheet_directory_uri() . '/assets/Image-logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">

        <ul>
            <li class="navbar-content--story">
            <a href="#story fade-in-up">Histoire</a>
            </li>
            <li class="navbar-content--characters">
            <a href="#characters fade-in-up">Personnages</a>
            </li>
            <li class="navbar-content--place">
            <a href="#place fade-in-up">Lieu</a>
            </li>
            <li class="navbar-content--studio">
            <a href="#studio fade-in-up">Studio Koukaki</a>
            </li>
        </ul>
    <div class="navbar-content--footer">
        <a href="#">STUDIO KOUKAKI</a>
    </div>
    </div>
    </div>
    </nav><!-- #site-navigation -->
	</header><!-- #masthead -->