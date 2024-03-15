<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package No_Cred_Podcast
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<div class="dark-bg"></div>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<div class="site-header__container">
	<header id="masthead" class="site-header">
		<div class="site-branding">
		<a href="<?php echo site_url(); ?>">
			<img class="site-header__logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="No Credientials Logo">
		</a>


		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->

		<div class="site-header__meta-info">
			<img title="Search Icon" class="site-header__search" src="<?php echo get_template_directory_uri(); ?>/img/search.svg"" alt="Search Icon"/>
			<button class="site-header__login">Sign In</button>
		</div>


	</header><!-- #masthead -->
	</div>
