<?php
defined('ABSPATH') or die();
/**
 * Default Page Header
 *
 * @author Nina Taberski-Besserdich (nina.taberski@besserdich.com)
 * @package WordPress
 * @subpackage BIC Bootstrap Wordpress Theme
 */
?>
<!DOCTYPE html>
<!-- HTML5 -->
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title><?php wp_title(); ?> </title>
        <?php
        // Favicon
        $options = get_option('bicbswp_theme_options');
        if ($options['favicon'] != '') {
            echo '<link type="image/x-icon" href="' . $options['favicon'] . '" rel="Shortcut Icon">';
        }
        ?>

        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <!--        
        <link rel="apple-touch-icon-precomposed" sizes="144x144"
              href="<?php echo get_template_directory_uri(); ?>/assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114"
              href="<?php echo get_template_directory_uri(); ?>/assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72"
              href="<?php echo get_template_directory_uri(); ?>/assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed"
              href="<?php echo get_template_directory_uri(); ?>/assets/ico/apple-touch-icon-57-precomposed.png">
        -->



        <?php
        $options = get_option('bicbswp_theme_options');

        if ($options['analytics'] != '') {

            echo ($options['analytics']);
        }
        ?>


<?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>


        <header>





            <!-- Top header for Adresse and Top Menu --> 

            <div id="top-header">
                <div class="container">



                    <!-- Top Callout from Theme Options -->

                    <?php
                    $options = get_option('bicbswp_theme_options');

                    if ($options['top-callout'] != '') {

                        echo ($options['top-callout']);
                    }
                    ?>





                    <div class="header-menu-wrapper">

                        <?php
                        if (has_nav_menu('header-menu')) {

                            wp_nav_menu(array(
                                'menu' => '',
                                'theme_location' => 'header-menu',
                                'depth' => 1,
                                'container' => false,
                                'menu_class' => 'header-menu',
                                'fallback_cb' => 'wp_page_menu',
                                'walker' => new wp_bootstrap_navwalker())
                            );
                        }
                        ?>

                    </div>

                </div>
            </div>


            <!-- Brand Logo -->
            <div class="top-main-menu">
                <div class="container">
                    <div class="row">



                        <!-- Logo -->
                        <div class="col-md-9 col-sm-12 brand">


                            <a href="<?php bloginfo('url'); ?>">


                            <?php
                            $options = get_option('bicbswp_theme_options');

                            if ($options['logo'] != '') {

                                echo '<img src="' . $options['logo'] . '" class="img-responsive" alt="' . get_bloginfo('name') . '">';
                            } else {
                                echo '<div id="site-title">' . get_bloginfo('name') . '</div>';
                            }
                            ?>



                            </a>
                        </div>


                        <div class="col-md-3 col-sm-12">


                            <div class="row">

                                
                                    
                                    
                                    
                                    <div class="header-widget">

                                    <?php
                                    if (function_exists('dynamic_sidebar')) {
                                        dynamic_sidebar("header-widget-area");
                                    }
                                    ?>



                            </div>
                         


                        </div>






                    </div>






                </div>
<?php if (has_nav_menu('main-menu')) { ?>
                    <!-- Menu -->
                    <div class="top-main-menu">
                       <!-- <div class="container">-->
                            <nav class="navbar navbar-default"  role="navigation">
                                <!-- Brand and toggle get grouped for better mobile display -->

                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>


                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse navbar-ex1-collapse">
    <?php
    wp_nav_menu(array(
        'menu' => '',
        'theme_location' => 'main-menu',
        'depth' => 2,
        'container' => false,
        'menu_class' => 'nav navbar-nav',
        'fallback_cb' => 'wp_page_menu',
        'walker' => new wp_bootstrap_navwalker())
    );
    ?>
                                </div><!-- /.navbar-collapse -->
                            </nav>
                        <!--</div>--><!-- /.container -->

                    </div>
                                <?php } ?>
            </div>
        </header>

        <!-- End Header. Begin Template Content -->