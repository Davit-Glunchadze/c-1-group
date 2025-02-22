<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package C-1-group
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'c-1-group' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="site-branding">
				<?php
				the_custom_logo();
				?>
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
			<div class="humburger-menu">
				<input type="checkbox" id="menu-checkbox">
				<label for="menu-checkbox">
					<span class="menu-icon">&#9778;</span>
				</label>
				<div class="sidebar">
					<div class="sidebar-logo">
						<?php
							the_custom_logo();
						?>
					</div>
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu-mobile',
							)
						);
					?>
				</div>				
			</div>
			<div class="favorite-user">
				<a href="#">
					<img class="favorite" src="<?php echo get_template_directory_uri() . '/assets/images/favorite.png'?>" alt=""> 
				</a>
				<a href="#">
					<img class="user" src="<?php echo get_template_directory_uri() . '/assets/images/user.png'?>" alt=""> 
				</a>
			</div>
		</div>
		
	</header><!-- #masthead -->
