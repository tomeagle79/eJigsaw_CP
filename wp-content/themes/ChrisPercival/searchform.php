<!--
<form role="search" method="get" id="searchform"
    class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div>
        <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
        <input type="submit" id="searchsubmit"
            value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
    </div>
</form>
-->

<form role="search" method="get" id="searchform"
    class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div>
        <label class="screen-reader-text hidden" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
        <label class="">Blog Search</label>
        
		<div class="search">
			
  			<span class="fa fa-search"></span>
  			<input placeholder="" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
		</div>
    </div>
</form>

