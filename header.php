<?php
/**
 * The header template part.
 *
 * @copyright  Copyright (c) 2020, Danny Cooper
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@700&display=swap" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<?php wp_head(); ?>
	</head>
  <header class="site-header">
	<div class="nav-head flex">
		<div class="flex">
			<p>The Catholic Connection</p>
			<p>Safe Environment</p>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/search.png" />
	</div>
	<div class="nav-body">
		<div class="nav-body-container">
			<?php
				wp_nav_menu( array(
					'theme_location'  => 'primary-menu',       // Menu location registered in functions.php
					'container'       => 'nav',                 // HTML container element (e.g., <nav>)
					'container_class' => 'primary-nav',          // CSS class for the container element
					'menu_class'      => 'nav-menu',             // CSS class for the <ul> element
					'menu_id'         => 'primary-menu',         // CSS ID for the <ul> element
					'depth'           => 2,                     // Depth of menu items to show
					'fallback_cb'     => false,                 // No fallback if no menu is assigned
					'walker'          => new Custom_Walker_Nav_Menu() // Use a custom walker class for advanced customization
				) );
			?>
			<div class="nav-nav"><button>Find a Parish</button></div>
		</div>
	</div>
	<div class="wrapper center">
		<div>
			<p class="site-title">
				40,000 Catholics
			</p>
			<p class="header-subtitle">
				One Mission
			</p>
			<div class="search-box">
			<?php get_search_form(); ?>
			</div>
		</div>
		<div class="align-right">
			<img class="header-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/header_logo.png" />
		</div>
	</div>
  </header><!-- .site-header -->
