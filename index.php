<?php defined('ABSPATH') or die();
/**
 * Description: Default Index template to display loop of blog posts
 * @author Nina Taberski-Besserdich (nina.taberski@besserdich.com)
 * @package WordPress
 * @subpackage BIC Bootstrap Wordpress Theme
 */
?>

<?php get_header(); ?>




     <div class="container main">
         
         
         
         
     <div class="row">
         
        <div class="col-md-12">
            
            <?php
            if (function_exists('bootstrapwp_breadcrumbs')) {
                
                bootstrapwp_breadcrumbs();
                
            }
            ?>
            
        </div><!--/.col -->
         
    </div><!--/.row -->
    
    
    
    
    
    
    
    
    <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12 col-12">

            <?php
            if ((is_front_page()) && (is_paged() == false)) {

                $options = get_option('bicbswp_theme_options');

                if ($options['front_page'] != '') {

                    $page = get_post($options['front_page']);

                    echo apply_filters( 'the_content', get_post_field('post_content', $page) );
                    
                }
                ?>

                <div class="container marketing">

                    <?php get_sidebar('home'); ?>

                </div> 

               
            <?php } ?>

        </div><!--/.col -->

    </div><!--/.row -->

    
    
    
    
    
    
    
    
    
    
    
     <div class="row main-content">
         
                
         
        <div class="col-lg-9 col-md-9 col-sm-9 col-9">
            
                                <div class="content">


            <?php
            if (have_posts()) : while (have_posts()) : the_post();

                    get_template_part('content', get_post_format());

                endwhile;
            endif;

            if (function_exists('wp_pagenavi')) {

                wp_pagenavi();
            } else {

                bootstrapwp_content_nav('nav-below');
            }
            ?>
                                </div>
        </div><!--/.col -->

        <div class="col-lg-3 col-md-3 col-sm-3 col-3 sidebar-wrapper">

            <?php get_sidebar('post'); ?>

        </div><!--/.col -->
        
    
     </div> <!--/.row -->
        
        
        
        
         
        
    </div><!-- container -->
    
    
    
    
<?php get_footer(); ?>

