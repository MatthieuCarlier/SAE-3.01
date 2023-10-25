<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MMI_TD
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'mmi-td' ); ?></a>

	<header id="masthead" class="site-header flex flex-wrap items-center justify-center md:justify-between m-10 border-b-4 py-4 border-border-b">
		<img class="w-40 md:w-80 border-border-b border-2" src="<?php echo get_template_directory_uri(); ?>/assets/logo.jpeg" alt="logo">

		<section class="w-80">
		<p class="font-semibold my-1 md:my-2 text-xs md:text-lg">Rechercher 	un bijou</p>
		<div class="flex border-2 rounded-md px-1 md:p-2 border-placeholder 	items-center justify-between ">
			<input class="placeholder:capitalize placeholder:text-txt 	placeholder:text-xs placeholder:md:text-lg" type="text" 	name="searchbar" placeholder="Bague, collier,...">
			<img class="w-3 h-3 md:h-6 md:w-6" src="<?php echo get_template_directory_uri(); ?>/assets/search.png" 	alt="loupe">
		</div>
		</section>

		<ul class="list-none flex justify-between gap-4 mt-4 md:mt-0">
		<li class="flex">
			<img class="w-5 md:w-full" src="<?php echo get_template_directory_uri(); ?>/assets/location.png" alt="loc">
		</li>
		<li>
			<img class="w-6 md:w-9" src="<?php echo get_template_directory_uri(); ?>/assets/Icône User.png" alt="user">
		</li>
		<li>
			<img class="w-6 md:w-9" src="<?php echo get_template_directory_uri(); ?>/assets/coeur.png" alt="coeur">
		</li>
		<li>
			<img class="w-6 md:w-9" src="<?php echo get_template_directory_uri(); ?>/assets/panier.png" alt="panier">
		</li>
		</ul>

	</header><!-- #masthead -->

		
	<nav id="site-navigation" class="main-navigation m-10 border-b-4 border-bg-button">
		<ul class="list-none flex items-center justify-between ">
    		<li class="hover:text-nav-hover">
    		  <a class="text-xs md:text-4xl" href="">Bague</a>
    		</li>
    		<li class="hover:text-nav-hover">
    		  <a class="text-xs md:text-4xl" href="">Collier</a>
    		</li>
    		<li class="hover:text-nav-hover">
    		  <a class="text-xs md:text-4xl" href="">Bras</a>
    		</li class="hover:text-nav-hover">
    		<li>
    		  <a class="text-xs md:text-4xl" href="">Montre</a>
    		</li>
    		<li class="hover:text-nav-hover">
    		  <a class="text-xs md:text-4xl" href="">Évenements</a>
    		</li>
    		<li class="hover:text-nav-hover">
    		  <a class="text-xs md:text-4xl" href="">Tout</a>
    		</li>
    	</ul>
	</nav><!-- #site-navigation -->