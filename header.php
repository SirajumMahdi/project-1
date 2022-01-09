<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TukiOne
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
    <div id="load">
        <div class="load__content">
            <div class="load__icon">
                <img src="http://localhost/project-1/wp-content/uploads/2022/01/load.gif" alt="Loading icon" />
            </div>
        </div>
    </div>
    <header class="theme-default">
        <div id="search-box">
            <div class="container">
                <form>
                    <input type="text" placeholder="Searching for news" aria-label="Search" name="s" />
                    <button type="submit"><i class="fas fa-arrow-right"></i></button>
                </form>
            </div>
        </div>
        <div class="container">
            <div class="header-wrapper">
                <a class="header__logo" href="<?php echo site_url() ?>">
                    <?php
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        if ( has_custom_logo() ) {
                            echo '<img src="' . esc_url( $logo[0]) . '" alt="' . get_bloginfo( 'name' ) . '">';   
                        } else {
                            echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
                        }
                    ?>
                </a>
                <nav>
                    <?php
			            wp_nav_menu(
				            array(
					            'theme_location' => 'menu-1',
					            'menu_id'        => 'primary-menu',
                                'container' => false,
				            )
			            );
			        ?>
                </nav>
                <div class="header__icon-group"><a href="#" id="search"><i class="fas fa-search"></i></a>
                    <div class="social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-dribbble"></i></a>
                        <a id="mobile-menu-controller" href="#"><i class="fas fa-bars"></i></a>
                    </div>
                </div>
            </div>
    </header>