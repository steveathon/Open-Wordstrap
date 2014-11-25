<?php 

	/**
	 * sidebar.php
	 */

?><div class="col-sm-3 col-sm-offset-1 wsSidebar">
<?php if ( wsSidebarActive('wsprimarymenublock') ) : ?>        
        <div class="wsSidebar">
            <ol class="list-unstyled">
                <?php dynamic_sidebar('wsprimarymenublock'); ?>
            </ol>
        </div>
<?php endif; ?>       
 
<?php if ( wsSidebarActive('wssecondarymenublock') ) : ?>
        <div class="wsSidebar">
           <ol class="list-unstyled">
                <?php dynamic_sidebar('wssecondarymenublock'); ?>
            </ol>
        </div>
        
<?php
	endif;
?>
</div>