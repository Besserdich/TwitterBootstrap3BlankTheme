<?php defined('ABSPATH') or die();
/**
 * BIC Bootstrap Wordpress Theme Functions
 * Original from BootstrapWP
 * @author original by Rachel Baker <rachel@rachelbaker.me>, modified by Nina Taberski-Besserdich (nina.taberski@besserdich.com)
 * @package WordPress
 * @subpackage BIC Bootstrap Wordpress Theme
 */


/**
 * Maximum allowed width of content within the theme.
 */
if (!isset($content_width)) {
    $content_width = 770;
}


/**
 * Load Theme Options 
 *
 */
require_once ( get_template_directory() . '/includes/theme-options.php' );



/**
 * Setup Theme Functions
 *
 */
if (!function_exists('bicbswp_theme_setup')):

    function bicbswp_theme_setup() {

        load_theme_textdomain('bicbswp', get_template_directory() . '/lang');

        add_theme_support('automatic-feed-links');
        add_theme_support('post-thumbnails');
        add_theme_support('post-formats', array('aside', 'image', 'gallery', 'link', 'quote', 'status', 'video', 'audio', 'chat'));

        register_nav_menus(
                array(
                    'main-menu' => __('Main Menu', 'bicbswp'),
        ));

        register_nav_menus(
                array(
                    'footer-menu' => __('Footer Menu', 'bicbswp'),
        ));
        
        
                register_nav_menus(
                array(
                    'header-menu' => __('Header Menu', 'bicbswp'),
        ));




        // Register Custom Navigation Walker
        require_once ( get_template_directory() .'/includes/menu-walker.php');
    }

endif;
add_action('after_setup_theme', 'bicbswp_theme_setup');

/**
 * Define post thumbnail size.
 * Add two additional image sizes.
 *
 */
function bootstrapwp_images() {

    set_post_thumbnail_size(260, 180); // 260px wide x 180px high
    add_image_size('bootstrap-small', 300, 200); // 300px wide x 200px high
    add_image_size('bootstrap-medium', 360, 270); // 360px wide by 270px high
}

/**
 * Load CSS styles for theme.
 *
 */
function bootstrapwp_styles_loader() {

      wp_enqueue_style('bicbswp-style', get_template_directory_uri() . '/style.css');
      wp_enqueue_style('bicbswp-default', get_stylesheet_uri());
 
}

add_action('wp_enqueue_scripts', 'bootstrapwp_styles_loader');

/**
 * Load JavaScript and jQuery files for theme.
 *
 */
function bootstrapwp_scripts_loader() {

    if (is_singular() && comments_open() && get_option('thread_comments')) {

        wp_enqueue_script('comment-reply');
    }

    
      wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array('jquery'), '1.0', true);
   
}

add_action('wp_enqueue_scripts', 'bootstrapwp_scripts_loader');



/**
 * Remove integrated gallery styles in the content area of standard gallery shortcode.  
 * style in css. 
 */
 
add_filter('gallery_style', create_function('$a', 'return "<div class=\'gallery\'>";'));




/**
 * Define theme's widget areas.
 *
 */
function bootstrapwp_widgets_init() {

    register_sidebar(
            array(
                'name' => __('Page Sidebar', 'bicbswp'),
                'id' => 'sidebar-page',
                'before_widget' => '<aside><div id="%1$s" class="widget %2$s">',
                'after_widget' => "</div></aside>",
                'before_title' => '<h4 class="widget-title">',
                'after_title' => '</h4>',
            )
    );

    register_sidebar(
            array(
                'name' => __('Post Sidebar', 'bicbswp'),
                'id' => 'sidebar-post',
                'before_widget' => '<aside><div id="%1$s" class="widget %2$s">',
                'after_widget' => "</div></aside>",
                'before_title' => '<h4 class="widget-title">',
                'after_title' => '</h4>',
            )
    );
    
    
     
    register_sidebar(
            array(
                'name' => __('Home Left', 'bicbswp'),
                'id' => 'home-left',
                'description' => __('Left textbox on homepage', 'bicbswp'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h2>',
                'after_title' => '</h2>'
            )
    );

    register_sidebar(
            array(
                'name' => __('Home Middle', 'bicbswp'),
                'id' => 'home-middle',
                'description' => __('Middle textbox on homepage', 'bicbswp'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h2>',
                'after_title' => '</h2>'
            )
    );

    register_sidebar(
            array(
                'name' => __('Home Right', 'bicbswp'),
                'id' => 'home-right',
                'description' => __('Right textbox on homepage', 'bicbswp'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h2>',
                'after_title' => '</h2>'
            )
    );

  


    register_sidebar(
            array(
                'name' => __('Footer Column 1', 'bicbswp'),
                'id' => 'footer-column-1',
                'description' => __('Footer Column 1', 'bicbswp'),
                'before_widget' => '<aside><div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div></aside>',
                'before_title' => '<h4>',
                'after_title' => '</h4>'
            )
    );


    register_sidebar(
            array(
                'name' => __('Footer Column 2', 'bicbswp'),
                'id' => 'footer-column-2',
                'description' => __('Footer Column 2', 'bicbswp'),
                'before_widget' => '<aside><div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div></aside>',
                'before_title' => '<h4>',
                'after_title' => '</h4>'
            )
    );


    register_sidebar(
            array(
                'name' => __('Footer Column 3', 'bicbswp'),
                'id' => 'footer-column-3',
                'description' => __('Footer Column 3', 'bicbswp'),
                'before_widget' => '<aside><div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div></aside>',
                'before_title' => '<h4>',
                'after_title' => '</h4>'
            )
    );
    
        register_sidebar(
            array(
                'name' => __('Footer Column 4', 'bicbswp'),
                'id' => 'footer-column-4',
                'description' => __('Footer Column 4', 'bicbswp'),
                'before_widget' => '<aside><div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div></aside>',
                'before_title' => '<h4>',
                'after_title' => '</h4>'
            )
    );
        
}

add_action('init', 'bootstrapwp_widgets_init');


/* Replaces the excerpt "more" text by a link */
function new_excerpt_more( $more ) {
    
	return ' ... <br/><a class="read-more" href="'. get_permalink( get_the_ID() ) . '">'.__('Read More', 'bicbswp').'</a>';
        
}
add_filter( 'excerpt_more', 'new_excerpt_more' );



/* prevent scrolling when using more-tag */
function remove_more_link_scroll( $link ) {        
    
    $link = preg_replace( '|#more-[0-9]+|', '', $link );        return $link;
    
} 
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );


/**
 * Display page next/previous navigation links.
 *
 */
if (!function_exists('bootstrapwp_content_nav')):
    function bootstrapwp_content_nav($nav_id) {

        global $wp_query, $post;

        if ($wp_query->max_num_pages > 1) : ?>

        <nav id="<?php echo $nav_id; ?>" class="navigation" role="navigation">
            <h3 class="assistive-text"><?php _e('Post navigation', 'bicbswp'); ?></h3>
            <div class="nav-previous alignleft"><?php next_posts_link(
                __('<span class="meta-nav">&larr;</span> Older posts', 'bicbswp')
            ); ?></div>
            <div class="nav-next alignright"><?php previous_posts_link(
                __('Newer posts <span class="meta-nav">&rarr;</span>', 'bicbswp')
            ); ?></div>
        </nav><!-- #<?php echo $nav_id; ?> .navigation -->

        <?php endif;
    }
endif;



/**
 * Display template for comments and pingbacks.
 *
 */
if (!function_exists('bootstrapwp_comment')) :

    function bootstrapwp_comment($comment, $args, $depth) {
        $GLOBALS['comment'] = $comment;
        switch ($comment->comment_type) :
            case 'pingback' :
            case 'trackback' :
                ?>

                <li class="comment media" id="comment-<?php comment_ID(); ?>">
                    <div class="media-body">
                        <p>
                <?php _e('Pingback:', 'bicbswp'); ?> <?php comment_author_link(); ?>
                        </p>
                    </div><!--/.media-body -->
                            <?php
                            break;
                        default :
                            // Proceed with normal comments.
                            global $post;
                            ?>

                <li class="comment media" id="li-comment-<?php comment_ID(); ?>">
                    <a href="<?php echo $comment->comment_author_url; ?>" class="pull-left">
                <?php echo get_avatar($comment, 64); ?>
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading comment-author vcard">
                <?php
                printf('<cite class="fn">%1$s %2$s</cite>', get_comment_author_link(),
                        // If current post author is also comment author, make it known visually.
                        ($comment->user_id === $post->post_author) ? '<span class="label"> ' . __(
                                        'Post author', 'bicbswp'
                                ) . '</span> ' : '');
                ?>
                        </h4>

                            <?php if ('0' == $comment->comment_approved) : ?>
                            <p class="comment-awaiting-moderation"><?php
                    _e(
                            'Your comment is awaiting moderation.', 'bicbswp'
                    );
                    ?></p>
                            <?php endif; ?>

                        <?php comment_text(); ?>
                        <p class="meta">
                        <?php
                        printf('<a href="%1$s"><time datetime="%2$s">%3$s</time></a>', esc_url(get_comment_link($comment->comment_ID)), get_comment_time('c'), sprintf(
                                        __('%1$s at %2$s', 'bicbswp'), get_comment_date(), get_comment_time()
                                )
                        );
                        ?>
                        </p>
                        <p class="reply">
                            <?php
                            comment_reply_link(array_merge($args, array(
                                'reply_text' => __('Reply <span>&darr;</span>', 'bicbswp'),
                                'depth' => $depth,
                                'max_depth' => $args['max_depth']
                                            )
                            ));
                            ?>
                        </p>
                    </div>
                    <!--/.media-body -->
                <?php
                break;
        endswitch;
    }

endif;


/**
 * Display template for post meta information.
 *
 */
if (!function_exists('bootstrapwp_posted_on')) :

    function bootstrapwp_posted_on() {
    
    
	$options = get_option('bicbswp_theme_options');
	
        if($options['meta_data'] == true ){
            
              printf(__('Posted on <a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a><span class="byline"> <span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>', 'bicbswp'), esc_url(get_permalink()), esc_attr(get_the_time()), esc_attr(get_the_date('c')), esc_html(get_the_date()), esc_url(get_author_posts_url(get_the_author_meta('ID'))), esc_attr(sprintf(__('View all posts by %s', 'bicbswp'), get_the_author())), esc_html(get_the_author())
        );
            
        }
    
    
                    
     
    }

endif;


/**
 * Display template for post cateories and tags
 *
 */
if (!function_exists('bicbswp_cats_tags')) :

    function bicbswp_cats_tags() {
       
            printf('<span class="cats_tags"><span class="glyphicon glyphicon-folder-open" title="My tip"></span><span class="cats">');
            printf(the_category(', '));
            printf('</span>'); 
        
        if(has_tag()==true){
            printf('<span class="glyphicon glyphicon-tags"></span><span class="tags">');
            printf(the_tags(' '));
            printf('</span>'); 
        }
        
        printf('</span>');
    }

endif;


/**
 * Adds custom classes to the array of body classes.
 *
 */
/* function bootstrapwp_body_classes($classes)
  {
  if (!is_multi_author()) {
  $classes[] = 'single-author';
  }
  return $classes;
  }
  add_filter('body_class', 'bootstrapwp_body_classes'); */

/**
 * Add post ID attribute to image attachment pages prev/next navigation.
 *
 */
function bootstrapwp_enhanced_image_navigation($url) {
    global $post;
    if (wp_attachment_is_image($post->ID)) {
        $url = $url . '#main';
    }
    return $url;
}

add_filter('attachment_link', 'bootstrapwp_enhanced_image_navigation');

/**
 * Checks if a post thumbnails is already defined.
 *
 */
function bootstrapwp_is_post_thumbnail_set() {
    global $post;
    if (get_the_post_thumbnail()) {
        return true;
    } else {
        return false;
    }
}

/**
 * Set post thumbnail as first image from post, if not already defined.
 * NT Bug fixed, wasnt set. 
 */
function bootstrapwp_autoset_featured_img() {
    global $post;

    $post_thumbnail = bootstrapwp_is_post_thumbnail_set();
    if ($post_thumbnail == true) {
        return get_the_post_thumbnail($post->ID, 'thumbnail', array('class' => 'img-responsive'));
    }
    $image_args = array(
        'post_type' => 'attachment',
        'numberposts' => 1,
        'post_mime_type' => 'image',
        'post_parent' => $post->ID,
        'order' => 'desc'
    );
    $attached_images = get_children($image_args, ARRAY_A);
    $first_image = reset($attached_images);
    if (!$first_image) {
        return false;
    }

    set_post_thumbnail($post->ID, $first_image['ID']);
    return get_the_post_thumbnail($post->ID, 'medium', array('class' => 'img-responsive'));
}

/**
 * Define default page titles.
 *
 */
function bootstrapwp_wp_title($title, $sep) {
    global $paged, $page;
    if (is_feed()) {
        return $title;
    }
    // Add the site name.
    $title .= get_bloginfo('name');
    // Add the site description for the home/front page.
    $site_description = get_bloginfo('description', 'display');
    if ($site_description && (is_home() || is_front_page())) {
        $title = "$title $sep $site_description";
    }
    // Add a page number if necessary.
    if ($paged >= 2 || $page >= 2) {
        $title = "$title $sep " . sprintf(__('Page %s', 'bicbswp'), max($paged, $page));
    }
    return $title;
}

add_filter('wp_title', 'bootstrapwp_wp_title', 10, 2);

/**
 * Display template for breadcrumbs.
 *
 */
function bootstrapwp_breadcrumbs() {
    $home = 'Home'; // text for the 'Home' link
    $before = '<li class="active">'; // tag before the current crumb
    $sep = '';
    $after = '</li>'; // tag after the current crumb

    if (!is_home() && !is_front_page() || is_paged()) {

        echo '<ul class="breadcrumb">';

        global $post;
        $homeLink = home_url();
        echo '<li><a href="' . $homeLink . '">' . $home . '</a> ' . $sep . '</li> ';
        if (is_category()) {
            global $wp_query;
            $cat_obj = $wp_query->get_queried_object();
            $thisCat = $cat_obj->term_id;
            $thisCat = get_category($thisCat);
            $parentCat = get_category($thisCat->parent);
            if ($thisCat->parent != 0) {
                echo get_category_parents($parentCat, true, $sep);
            }
             echo $before. __('Archive by category ', 'bicbswp'). '"'. single_cat_title('', false) . '"' . $after;
            
                    } elseif (is_day()) {
            echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time(
                    'Y'
            ) . '</a></li> ';
            echo '<li><a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time(
                    'F'
            ) . '</a></li> ';
            echo $before . get_the_time('d') . $after;
        } elseif (is_month()) {
            echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time(
                    'Y'
            ) . '</a></li> ';
            echo $before . get_the_time('F') . $after;
        } elseif (is_year()) {
            echo $before . get_the_time('Y') . $after;
        } elseif (is_single() && !is_attachment()) {
            if (get_post_type() != 'post') {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                echo '<li><a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a></li> ';
                echo $before . get_the_title() . $after;
            } else {
                $cat = get_the_category();
                $cat = $cat[0];
                echo '<li>' . get_category_parents($cat, true, $sep) . '</li>';
                echo $before . get_the_title() . $after;
            }
        } elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
            $post_type = get_post_type_object(get_post_type());
            echo $before . $post_type->labels->singular_name . $after;
        } elseif (is_attachment()) {
            $parent = get_post($post->post_parent);
            $cat = get_the_category($parent->ID);
            $cat = $cat[0];
            echo get_category_parents($cat, true, $sep);
            echo '<li><a href="' . get_permalink(
                    $parent
            ) . '">' . $parent->post_title . '</a></li> ';
            echo $before . get_the_title() . $after;
        } elseif (is_page() && !$post->post_parent) {
            echo $before . get_the_title() . $after;
        } elseif (is_page() && $post->post_parent) {
            $parent_id = $post->post_parent;
            $breadcrumbs = array();
            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = '<li><a href="' . get_permalink($page->ID) . '">' . get_the_title(
                                $page->ID
                        ) . '</a>' . $sep . '</li>';
                $parent_id = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            foreach ($breadcrumbs as $crumb) {
                echo $crumb;
            }
            echo $before . get_the_title() . $after;
        } elseif (is_search()) {
            echo $before . __('Search results for "', 'bicbswp') . get_search_query() . '"' . $after;
        } elseif (is_tag()) {
            echo $before . __('Posts tagged "', 'bicbswp') . single_tag_title('', false) . '"' . $after;
        } elseif (is_author()) {
            global $author;
            $userdata = get_userdata($author);
            echo $before . __('Articles posted by ', 'bicbswp') . $userdata->display_name . $after;
        } elseif (is_404()) {
            echo $before . __('Error 404', 'bicbswp') . $after;
        }


        echo '</ul>';
    }
}



/*-----------------------------------------------------------------------------------*/
/* Shortcodes
/*-----------------------------------------------------------------------------------*/


/*-----------------------------------------------------------------------------------*/
/* Helper for Shortcodes
/*-----------------------------------------------------------------------------------*/

// User shorcodes in sidebars
add_filter('widget_text', 'do_shortcode');

// Replace WP autop formatting
if (!function_exists( "bic_rm_wpautop")) {
     function bic_rm_wpautop($content) {
          $content = do_shortcode( shortcode_unautop( $content ) );
          $content = preg_replace( '#^<\/p>|^<br \/>|<p>$#', '', $content);
          //$content = str_replace("</p>", "<br />", $content);
          return $content;
     }
} 




//move wpautop filter to AFTER shortcode is processed
remove_filter( 'the_content', 'wpautop' );
add_filter( 'the_content', 'wpautop' , 99);
add_filter( 'the_content', 'shortcode_unautop',100 );

/*-----------------------------------------------------------------------------------*/
/* Shortcodes for Columns
/*-----------------------------------------------------------------------------------*/

// Two Columns
function bic_shortcode_two_columns_one($atts, $content = null ) {
   return '<div class="col-md-6">' . bic_rm_wpautop($content) . '</div>';
}
add_shortcode( 'two_columns_one', 'bic_shortcode_two_columns_one' );







// Three Columns
function bic_shortcode_three_columns_one($atts, $content = null) {
   return '<div class="col-md-4">' . bic_rm_wpautop($content) . '</div>';
}
add_shortcode( 'three_columns_one', 'bic_shortcode_three_columns_one' );



function bic_shortcode_three_columns_two($atts, $content = null) {
   return '<div class="col-md-8">' . bic_rm_wpautop($content) . '</div>';
}
add_shortcode( 'three_columns_two', 'bic_shortcode_three_columns_two' );








// Four Columns
function bic_shortcode_four_columns_one($atts, $content = null) {
   return '<div class="col-md-3">' . bic_rm_wpautop($content) . '</div>';
}
add_shortcode( 'four_columns_one', 'bic_shortcode_four_columns_one' );



function bic_shortcode_four_columns_two($atts, $content = null) {
   return '<div class="col-md-6">' . bic_rm_wpautop($content) . '</div>';
}
add_shortcode( 'four_columns_two', 'bic_shortcode_four_columns_two' );



function bic_shortcode_four_columns_three($atts, $content = null) {
   return '<div class="col-md-9">' . bic_rm_wpautop($content) . '</div>';
}
add_shortcode( 'four_columns_three', 'bic_shortcode_four_columns_three' );



/*-----------------------------------------------------------------------------------*/
/* Divide Text Shortcode 
/*-----------------------------------------------------------------------------------*/

function bic_shortcode_divider($atts, $content = null) {
   return '<div class="divider"></div>';
}
add_shortcode( 'divider', 'bic_shortcode_divider' );



/*-----------------------------------------------------------------------------------*/
/* Shortcodes for Buttons 
/*-----------------------------------------------------------------------------------*/

function bic_shortcode_button($atts, $content = null) {

    extract(shortcode_atts(array(
        'type' => 'standard',
        'link'	=> '#',
        'target' => '_self',
        'size'	=> '',
    ), $atts));

	$type = ($type) ? ' btn-'.$type  : '';
	$size = ($size) ? ' btn-'.$size  : '';
        $output = '<a class="btn ' .$type.$size. '" href="' .$link. '" target="'.$target.'"><span>' .do_shortcode($content). '</span></a>';
    return $output;

    
}
add_shortcode( 'button', 'bic_shortcode_button' );




