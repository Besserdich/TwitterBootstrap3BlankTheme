<?php defined('ABSPATH') or die();
/**
 * The Sidebar for Posts.
 *
 * @author Nina Taberski-Besserdich (nina.taberski@besserdich.com)
 * @package WordPress
 * @subpackage BIC Bootstrap Wordpress Theme
 */
?>
<section class="sidebar-posts">

    <?php
    if (function_exists('dynamic_sidebar')) {

        dynamic_sidebar("sidebar-post");
        
    }?>

</section>
