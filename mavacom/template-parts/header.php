<?php
/**
 * The template for displaying header.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$site_name = get_bloginfo( 'name' );
$tagline   = get_bloginfo( 'description', 'display' );
?>

<!-- Start main Header -->
<header class="header_area full-width" role="banner">
    <!--Header-Upper-->

    <div class="site-header">
        <div class="site-branding d-flex">

            <div class="navbar-brandlogo_area no_mobile">
                <?php the_custom_logo();?>
            </div>

            <!-- Main Menu -->
            <nav class="site-navigation">
                <div class="no_mobile" role="navigation">
                    <?php wp_nav_menu( array( 'theme_location' => 'menu-1' ) ); ?>
                </div>
            </nav>
            <!-- Main Menu End-->

            <!-- Mobile Menu -->
            <div class="navbar bg-dark <?php print $navbar_style;?> is_onmobile">
                <span class="navbar-brandlogo_area">
                    <span class="header-logo-darkmode">
                        <?php the_custom_logo();?>
                    </span>
                </span>

                <button class="navbar-toggler is_onmobile" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <!-- Mobole Menu End-->

            <div class="serice_menu">
                <?php dynamic_sidebar( 'header_top' ); ?>
            </div>
        </div>
    </div>

    <div class="collapse mob_menu" id="navbarToggleExternalContent">
        <div role="navigation">
            <?php wp_nav_menu( array( 'theme_location' => 'menu-1' ) ); ?>
        </div>
    </div>
    <!--End Header Upper-->
</header>
<div class="main_area">