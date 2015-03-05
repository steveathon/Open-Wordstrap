<?php 
	
	/** Open Wordstrap single.php
	 * 
	 * Provides content template for a single post within the theme.
	 * 
	 */
	get_header(); ?>
	
	<div class="row">
		<div class="col-sm-8 wsBlog-main">
			<div id="wsPost-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_post(); ?>
				<div>
					<h2 class="blog-post-title"><?php the_title(); ?></h2>
					<?php the_content(); ?>
					<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i>' ) ) ?>
					<p>Written by: <?php the_author_posts_link(); ?></p>
				</div>	                       
			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>
<?php 
	get_footer(); 
?>