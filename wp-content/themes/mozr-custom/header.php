<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/b4adeac616.css">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    
	<?php endif; ?>
    <?php wp_head(); ?>
    <script>
        base_url = "<?php echo get_site_url() ?>"
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-88916044-2"></script> 
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
 
    gtag('config', 'UA-88916044-2');
    </script>
    <script src="//www.socialintents.com/api/socialintents.1.3.js#2c9fa56360eaab070160eb9da5af00d0" async="async"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site page-<?php echo get_the_ID() ?>">
    


    <div class="header-container">
        <div class="container ">
            <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>
            <header id="masthead" class="site-header " role="banner">
                <div class="site-header-main">
                    <div class="site-branding">
                        <?php twentysixteen_the_custom_logo(); ?>
    
                    </div><!-- .site-branding -->
    
                    <?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
                        <button id="menu-toggle" class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></button>
    
                        <div id="site-header-menu" class="site-header-menu">
                            <?php if ( has_nav_menu( 'primary' ) ) : ?>
                                <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
                                    <?php
                                        wp_nav_menu( array(
                                            'theme_location' => 'primary',
                                            'menu_class'     => 'primary-menu',
                                         ) );
                                    ?>
                                </nav><!-- .main-navigation -->
                            <?php endif; ?>
    
                            <?php if ( has_nav_menu( 'social' ) ) : ?>
                                <nav id="social-navigation" class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentysixteen' ); ?>">
                                    <?php
                                        wp_nav_menu( array(
                                            'theme_location' => 'social',
                                            'menu_class'     => 'social-links-menu',
                                            'depth'          => 1,
                                            'link_before'    => '<span class="screen-reader-text">',
                                            'link_after'     => '</span>',
                                        ) );
                                    ?>
                                </nav><!-- .social-navigation -->
                            <?php endif; ?>
                        </div><!-- .site-header-menu -->
                    <?php endif; ?>
                </div><!-- .site-header-main -->
    
                <?php if ( get_header_image() ) : ?>
                    <?php
                        /**
                         * Filter the default twentysixteen custom header sizes attribute.
                         *
                         * @since Twenty Sixteen 1.0
                         *
                         * @param string $custom_header_sizes sizes attribute
                         * for Custom Header. Default '(max-width: 709px) 85vw,
                         * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
                         */
                        $custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
                    ?>
                    <div class="header-image">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                            <img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                        </a>
                    </div><!-- .header-image -->
                <?php endif; // End header image check. ?>
            </header><!-- .site-header -->
        </div>
    </div>
<?php 
    if ( is_page_template( 'mozr_home.php' ) ) {
        ?>
        <div class="row jumbotron"> <!-- row -->
        <?php
    } else {
        ?>
        <div class="row"> <!-- row -->
        <?php
    }
?>
        <div id="content" class="container"> <!-- container -->
        
