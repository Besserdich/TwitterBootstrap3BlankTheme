<?php defined('ABSPATH') or die();
/*
 * The Search Form.
 */
?>




<form action="/" method="GET" id="s" role="search">
    <div class="input-group">
        <label class="sr-only" for="search"><?php echo __('Search', 'bicbswp') ?></label>
        <input type="text" class="form-control" id="search" name="s" placeholder="<?php echo __('Search', 'bicbswp') ?>" value="<?php the_search_query(); ?>">
        <div class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </div>
    </div>
</form>