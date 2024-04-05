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

<body <?php body_class(strtolower(get_the_title())); ?>>
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
			<?php 
				$loginURL = get_field('login_url', 'option');
				$signupCTA = get_field('signup_cta', 'option');
				$current_user = wp_get_current_user();
			?>
			<img title="Search Icon" class="site-header__search" src="<?php echo get_template_directory_uri(); ?>/img/search.svg"" alt="Search Icon"/>
			<?php if (!is_user_logged_in()) { ?>
			<a href="<?php echo $loginURL['url']; ?>" class="site-header__login">Sign In</a>
			<a href="#" class="site-header__signup">Sign Up</a>
			<?php } else { ?>
				<a href="<?php echo site_url() . '/membership-account' ?>" class="site-header__account-name"><?php echo $current_user->user_login; ?></a>
			<?php } ?>
		</div>

		<!-- MOBILE MENU -->
	<div id="nav-icon3" class="site-header__menu-icon">
      <span></span>
      <span></span>
      <span></span>
    </div>
		<!-- MOBILE MENU -->

		<!-- MOBILE OVERLAY -->

		<div class="mobile-menu-overlay">
	<div class="mobile-menu-overlay__container">
	<div class="mobile-menu-overlay__header">
	
	<a href="<?php echo site_url(); ?>">
    <img title="No Cred Logo" class="mobile-menu-overlay__logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="No Cred Logo"/>
    </a>

	<img class="mobile-menu-overlay__close-icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/close-icon.svg" alt="Close Icon"/>

	</div>
  <nav class="mobile-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
			
		
		</nav><!-- #site-navigation -->
		
		<div class="mobile-menu-overlay__signup-btns">
			<?php if (!is_user_logged_in()) { ?>
				<a href="<?php echo $loginURL['url']; ?>" class="site-header__login">Sign In</a>
			<?php } ?>
			<button class="site-header__signup">Sign Up</button>
		</div>
		

		</div>
  </div>

		<!-- MOBILE OVERLAY -->

	</header><!-- #masthead -->
	</div>

	<div class="overlay-menu">
<img class="close-icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/close-icon-blue.svg" alt="Close Icon"/>
  <div class="overlay-menu__container-margins">
<div class="header-search-form">
    <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <label>
      <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'What are you looking for?', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
  </label>
  <button type="submit" name="submit" value="submit"></button>
</form>
    </div> <!-- header search form -->
    </div> <!-- container margins -->
</div> <!-- overlay menu -->
