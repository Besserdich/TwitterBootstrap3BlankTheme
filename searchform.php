<?php defined('ABSPATH') or die();
/*
 * The Search Form.
 */
?>




<form action="/" method="get" class="form-inline" role="form">

    <div class="form-group">
        <label class="sr-only" for="search">Suche</label>
        <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="<?php echo __('Search', 'bicbswp') ?>" class="form-control input-sm"/>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-default"><?php echo __('Search', 'bicbswp') ?></button>
            </div>

</form>