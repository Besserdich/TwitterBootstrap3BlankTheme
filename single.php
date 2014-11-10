<?php
/**
 * Default Post Template
 * Description: Post template with a content container and right sidebar.
 *
 * @author Nina Taberski-Besserdich (nina.taberski@besserdich.com)
 * @package WordPress
 * @subpackage BIC Bootstrap Wordpress Theme
 */
get_header();
?>
<div class="container">


    <div class="row">
        <div class="col-12">
            <?php
            if (function_exists('bootstrapwp_breadcrumbs')) {
                bootstrapwp_breadcrumbs();
            }
            ?>
        </div><!--/.span12 -->
    </div><!--/.row -->



    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-9 col-12">  
            <div class="content">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php get_template_part('content-single'); ?>
    <?php endwhile;
    endif; ?>





            </div> <!-- /.content -->
        </div> <!-- /.col-lg-9 /.col-md-9 /.col-sm-9 /.col-9 -->
        <div class="col-lg-3 col-md-3 col-sm-9 col-9 sidebar-wrapper">     
            <?php get_sidebar('post'); ?> 
        </div><!-- /.col-lg-3 /.col-md-3 /.col-sm-3 /.col-3  -->
    </div> <!-- /.row -->
</div> <!-- /.container -->
<?php get_footer(); ?>