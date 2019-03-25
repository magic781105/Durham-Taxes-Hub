<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Durham Tax Hub
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content">
            <?php esc_html_e( 'Skip to content', 'durhamtaxhub' ); ?></a>


	<header id="masthead" class="site-header">
		<div class="site-branding">

			<?php
			// add custom logo
			//if custom logo is show or else display no logo
			if(has_custom_logo() ) {
				the_custom_logo();
			}
			/* $custom_logo = get_custom_logo();
			if( custom_logo() ) {
				echo custom_logo;
			}*/
			else {
				echo 'No Logo';
			}


			if ( is_front_page() && is_home() ) :
				?>
                <!-- <h1 class="site-title"><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a></h1> -->
                <?php
			else :
				?>
                <!-- <p class="site-title"><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a></p> -->
                <?php
			endif;
			$durhamtaxhub_description = get_bloginfo( 'description', 'display' );
			if ( $durhamtaxhub_description || is_customize_preview() ) :
				?>
                <!-- <p class="site-description"><?php //echo $durhamtaxhub_description; /* WPCS: xss ok. */ ?></p> -->
                <?php endif; ?>
            </div><!-- .site-branding -->
            <!--        nav container-->
            <div id="menu-bar">

                <!--                navigation bar wrap-->
                <nav id="site-navigation" class="main-navigation">

                    <!--                    navigation click to slide nav bar in and out-->
                    <div id="navigation" data-click-state="0"></div>


                    <div class="nav-menu">
                        <div class="nav-border">
                            <?php
                            
                            //wp nav function to get navigation items
								wp_nav_menu( array(
								'theme_location' => 'primary-menu',
								'menu_id'        => 'primary-menu',
								) );
							?>
                        </div>
                    </div>
                </nav>
            </div><!-- #site-navigation -->
        </header><!-- #masthead -->

        <div id="content" class="site-content">
