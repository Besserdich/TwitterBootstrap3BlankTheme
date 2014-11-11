<?php defined('ABSPATH') or die();
/**
 * Template Name: Full Width Page
 * Description: Page template with a full width content container.
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
    
    
    
    
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    
    
    
    <div class="row main-top">
        
        <div class="col-lg-9 col-md-9 col-sm-9 col-9">

            <header>
                       
                <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
            
            </header>

        </div><!--/.col -->
  
    </div><!--/.row -->
    
    
    
     <div class="row main-content">
         
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    
                    <div class="content main">

                        <article class="post" id="post-<?php the_ID(); ?>">

                            <?php echo the_content(); ?>

                        </article>

                    </div> <!-- /.content -->
                    
                </div> <!-- /.col -->
           

            <?php endwhile;

                  endif; ?>
           
       
    
     </div> <!--/.row -->
        
        
    </div><!-- container -->
    
    
    
    
<?php get_footer(); ?>
