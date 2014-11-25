<?php 

	get_header(); ?>

      <div class="row">
        <div class="col-sm-8 blog-main">
        	
		<?php if ( have_posts() ) { ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php 
			/* Do pagination */
			?>

		<?php } ?>
		
        </div>
        
		<?php if ( is_active_sidebar( 'wsmenuright' ) ) : ?>
		
    <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          
        <div class="sidebar-module">
        
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'wsmenuright' ); ?>
	</div><!-- #primary-sidebar -->
	
		</div>
	</div>
	<?php endif; ?>
        
 
	</div>
 
<?php 

get_footer(); ?>