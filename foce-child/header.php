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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
    <nav id="site-navigation" class="main-navigation">
        <ul>
            <li class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
            </li>
        </ul>
        <div id="burger" class="burger" aria-controls="primary-menu" aria-expanded="false">
            <button class="burger-close-modal burger-open">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>
            <div class="burger-menu">
            <img class="burger-menu-logo" src="<?php echo get_template_directory_uri() . '-child/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
            <ul>
                <li class="burger-menu-story flower cat"><a href="#story">Histoire</a></li>
                        <li class="burger-menu-character flower cat"><a href="#characters">Personnages</a></li>
                        <li class="burger-menu-place flower cat"><a href="#place">Lieu</a></li>
                        <li class="burger-menu-studio flower cat"><a href="#studio">Studio Koukaki</a>
                        </li>
                </ul>
                <div class="burger-menu-footer burger-open-click flower cat">
                <a href="#">STUDIO KOUKAKI</a></li>                
            </div>
        </div>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
