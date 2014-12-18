<?php defined('ABSPATH') or die();
/**
 * The template for displaying Archive pages.
 * 
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
    
    
    
    
    
    
    
    
    
    
     <div class="row main-content">
         
                <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                    
                    <div class="content">
                        
            
                        
                        
                        
                          <header class="page-title">
                <h1><?php
            if (is_day()) {
                printf(__('Daily Archives: %s', 'bicbswp'), '<span>' . get_the_date() . '</span>');
            } elseif (is_month()) {
                printf(
                        __('Monthly Archives: %s', 'bicbswp'), '<span>' . get_the_date(_x('F Y', 'monthly archives date format', 'bicbswp')) . '</span>'
                );
            } elseif (is_year()) {
                printf(
                        __('Yearly Archives: %s', 'bicbswp'), '<span>' . get_the_date(_x('Y', 'yearly archives date format', 'bicbswp')) . '</span>'
                );
            } elseif (is_tag()) {
                printf(__('Tag Archives: %s', 'bicbswp'), '<span>' . single_tag_title('', false) . '</span>');
                // Show an optional tag description
                $tag_description = tag_description();
                if ($tag_description) {
                    echo apply_filters(
                            'tag_archive_meta', '<div class="tag-archive-meta">' . $tag_description . '</div>'
                    );
                }
            } elseif (is_category()) {
                printf(
                        __('Category Archives: %s', 'bicbswp'), '<span>' . single_cat_title('', false) . '</span>'
                );

            } else {
                _e('Blog Archives', 'bicbswp');
            }
?></h1>
                              
                              <?php 
                                              // Show an optional category description
                $category_description = category_description();
                if ($category_description) {
                    echo apply_filters(
                            'category_archive_meta', '<div class="category-archive-meta">' . $category_description . '</div>'
                    );
                }?>
            </header>
            
            
          
                        
                        
                        
                        
                        
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

                        
                        
                        

                    </div> <!-- /.content -->
                    
                </div> <!-- /.col -->
           

           
        <div class="col-lg-3 col-md-3 col-sm-3 col-3 sidebar-wrapper"> 
            
            <?php get_sidebar('post'); ?>

        </div><!--/.col -->
    
     </div> <!--/.row -->
        
        
        
        
         
        
    </div><!-- container -->
    
    
    
    
<?php get_footer(); ?>

    
    
    
    