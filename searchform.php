<form role="search" method="get" id="searchform" class="form-inline" action="<?php echo home_url( '/' ); ?>">
  <div>
    <label for="s" class="screen-reader-text"><?php _e('Search for:','bonestheme'); ?></label>
    <div class="form-inline__container">
      <input class="form-inline__input" type="search" id="s" name="s" value="" placeholder="Enter your search..."/>
      <button type="submit" id="searchsubmit" class="btn btn-primary form-inline__btn"><?php _e('Search','bonestheme'); ?></button>
    </div>
  </div>
</form>
