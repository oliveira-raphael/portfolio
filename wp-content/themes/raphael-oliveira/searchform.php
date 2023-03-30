<form action="<?php echo get_site_url() ?>" method="get" accept-charset="utf-8" id="searchform" role="search">
    <div class="searchform">
        <input type="text" name="s" id="s" value="<?php the_search_query(); ?>" />
        <button type="submit"><i class="fa fa-search"></i></button>
    </div>
</form>