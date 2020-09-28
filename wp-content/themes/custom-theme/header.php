<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Custom-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<div class="main-container"> 
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<script id="timelyScript" src="//book.gettimely.com/widget/book-button-v1.5.js"></script>
	<!-- <script> var bookingButton = new timelyButton('twelvethegreen', {"dontCreateButton":true});</script>  -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'custom-theme' ); ?></a>
	<div class="menu-wrapper">
			<header id="masthead" class="site-header one column">
				<div class="site-branding">
				<div class="custom-logo-link">
					<a href="<?php echo get_home_url(); ?>"><img src="<?php echo home_url(); ?>/wp-content/uploads/2020/07/line-logo.svg" alt=""></a>
				</div>
					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif;
						$custom_theme_description = get_bloginfo( 'description', 'display' );
						if ( $custom_theme_description || is_customize_preview() ) :
						?>
					<?php endif; ?>
				</div>
				
				<nav id="site-navigation" class="main-navigation">
					
			   <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
						<svg xmlns="http://www.w3.org/2000/svg" width="31.279" height="25" viewBox="0 0 31.279 25">
							<g id="Group_62" data-name="Group 62" transform="translate(-353.5 -44)">
							<line id="Line_1" data-name="Line 1" x2="31.279" transform="translate(353.5 45.5)" fill="none" stroke="#707070" stroke-width="3"/>
							<line id="Line_2" data-name="Line 2" x2="31.279" transform="translate(353.5 56.5)" fill="none" stroke="#707070" stroke-width="3"/>
							<line id="Line_3" data-name="Line 3" x2="31.279" transform="translate(353.5 67.5)" fill="none" stroke="#707070" stroke-width="3"/>
							</g>
						</svg>
				</button>
					
				
					<?php
					wp_nav_menu( array( 
							'theme_location' => 'menu-1',
							'menu_class'        => 'primary-menu',
						));
					?>
						
				</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->
