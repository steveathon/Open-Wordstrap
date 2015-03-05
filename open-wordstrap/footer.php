<?php 
	
	/** Open Wordstrap
	 * Footer.php
	 * 
	 * This is the basic footer for the theme.
	 */

?>	
    <div class="wsContentFooter">
	
	<?php if ( is_active_sidebar( 'wsfootermenu' ) ) : ?>
		<div class="wsFooterMenu">
			<?php dynamic_sidebar( 'wsfootermenu' ); ?>
		</div>
		<?php endif; ?>
	          <p><a href='https://github.com/steveathon/Open-Wordstrap' target='_blank'>Fork this Wordpress theme.</a><br /></p>
	    <small>Based on theme by <a href='https://twitter.com/mdo' target='_blank'>@mdo</a></small>
    </div>
          
</div>
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<?php wp_footer(); ?>
		
</body>
</html>