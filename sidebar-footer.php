<?php defined('ABSPATH') or die();
/**
 * The Sidebar for Footer.
 *
 * @author Nina Taberski-Besserdich (nina.taberski@besserdich.com)
 * @package WordPress
 * @subpackage BIC Bootstrap Wordpress Theme
 */
?>

 
     
        <div class="row footer">
            <div class="col-md-3">
                <?php
                if (function_exists('dynamic_sidebar')) {
                    dynamic_sidebar("footer-column-1");
                }
                ?>
            </div>
            <div class="col-md-3">
                <?php
                if (function_exists('dynamic_sidebar')) {
                    dynamic_sidebar("footer-column-2");
                }
                ?>
            </div>
            <div class="col-md-3">
                <?php
                if (function_exists('dynamic_sidebar')) {
                    dynamic_sidebar("footer-column-3");
                }
                ?>
            </div>
             <div class="col-md-3">
                <?php
                if (function_exists('dynamic_sidebar')) {
                    dynamic_sidebar("footer-column-4");
                }
                ?>
            </div>
            
        </div>   
    