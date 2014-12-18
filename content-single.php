<?php defined('ABSPATH') or die();
/**
 * The template for displaying content in the single.php.
 * 
 * @author Nina Taberski-Besserdich (nina.taberski@besserdich.com)
 * @package WordPress
 * @subpackage BIC Bootstrap Wordpress Theme
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <header class="entry-header">
        <h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf(esc_attr__('Permalink to %s', 'bicbswp'), the_title_attribute('echo=0')); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
        <aside class="entry-details">

            <p class="meta"><?php echo bootstrapwp_posted_on(); ?> <?php edit_post_link(__('Edit', 'bicbswp')); ?>
                <br/>
                <?php bicbswp_cats_tags(); ?> 
            </p>
        </aside><!--end .entry-details -->
    </header><!--end .entry-header -->
    
    
    <section class="post-content">
       
            <div class="entry-content">
                 
                
                
                <?php 
                // only show if option set TODO
                
                $options = get_option('bicbswp_theme_options');
                
                    if($options['featured_single'] == true ){
                                    
             if ( has_post_thumbnail() ) { ?>
                        
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute('echo=0'); ?>">
                            
                              <?php $options = get_option('bicbswp_theme_options');
                            
                                switch ($options['featured_img_sing_size']) {
                                    
                                   case 1:
                                       $thumbnail_size="thumbnail";
                                       break; 
                                   case 2: 
                                       $thumbnail_size="medium";
                                       break;
                                   case 3:
                                       $thumbnail_size="large";
                                       break; 
                                   default: 
                                       $thumbnail_size="thumbnail";
                                }
                            ?>
                            <?php the_post_thumbnail($thumbnail_size); ?>
                            
                            
                        </a>
                            
                       <?php  }   
                                    
					
                    } ?>
                
                
               
                 
                   
                        <?php echo the_content();?>
                        
               
                </div>

      

    </section>
    
    
    
    
    
    <?php
    // AUTHOR INFO  
   
		if ( get_the_author_meta( 'description' ) ) :   ?>
    
    <hr/>
    
		<div class="author-info">
                    
		<?php echo get_avatar( get_the_author_meta( 'user_email' ), 100 ); ?>
				<div class="author-details">
                                    
					<h3><?php print( __( 'Posted by ', 'bicbswp' )); 
                                        the_author_link(); ?> 
					
				</div><!-- end .author-details -->
					<p class="author-description"><?php the_author_meta( 'description' ); ?></p>	
			</div><!-- end .author-info -->
			<?php endif; ?>

   

    <hr/>

<?php comments_template(); ?>

</article><!-- /.post-->
