<?php defined('ABSPATH') or die();
/**
 * The Sidebar for Home. SIdebar can be filled in the widget area. 
 *
 * @author Nina Taberski-Besserdich
 * @package WordPress
 * @subpackage BIC Bootstrap Wordpress Theme
 */
?>
<div class="row">
    <div class="col-lg-4">
        
        <?php
        if (function_exists('dynamic_sidebar')) {
            dynamic_sidebar("home-left");
        }
        ?>
    </div>
    <div class="col-lg-4">
        <?php
        if (function_exists('dynamic_sidebar')) {
            dynamic_sidebar("home-middle");
        }
        ?>
    </div>
    <div class="col-lg-4">
        <?php
        if (function_exists('dynamic_sidebar')) {
            dynamic_sidebar("home-right");
        }
        ?>
    </div>
</div>