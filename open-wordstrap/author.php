<?php get_header(); 
?>

 <div class="row">
	<div class="col-sm-8 blog-main">

		<div class="jumbotron">
			<div class="container">
				<div class="media">
					<a class="media-left" href="#!"><img class="img-responsive img-circle" src='<?php 
						echo get_gravatar($authordata->user_email,200);
					?>' /></a>
						
						<div class="media-body">
					   		 <p>Latest posts from <?php echo $authordata->display_name; ?></p>
					    </div>
			 
				</div> <!-- /media -->	
			</div> <!-- /container -->
		</div> <!-- /jumotron -->
	
	<!-- End of Jumbotron -->
	
	<!-- Begin list of posts for user. -->
	
	<?php while ( have_posts() ) : the_post(); ?>
		<div id="WSPost-<?php the_ID(); ?>" <?php post_class('WSPost'); ?>>
			<h2 class="entry-title">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark">
			<?php the_title(); ?></a></h2>
		
			<div class="WSPostMeta">
				<ul>
					<li class='WSAuthorImage'>
						<a href="#!">
						<img class="img-responsive img-circle" src='<?php 
							echo get_gravatar($authordata->user_email,25); ?>' /></a>
					</li>
					<li class="WSAuthor">written by 
						<a class="WSAuthorName" href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>" title="<?php printf( 'View all posts by %s', $authordata->display_name ); ?>"><?php the_author(); ?></a>
					</li>                        
					<li class='WSPostPublishDate'>published on 
						<abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>">
						<?php the_time( get_option( 'date_format' ) ); ?></abbr>
					</li>
					<?php edit_post_link( __( 'Edit', 'open-wordstrap' ), "<li class=\"edit-link\">", "</li>" ) ?>
				                        </ul>
			</div>
			
			<div class='WSPostBody'>
				<?php the_excerpt(); ?>
			</div>                  
			
			<div class='WSPostSummary'>
				<ul>
					<li><?php echo get_the_category_list(', '); ?></li>
					<li><?php the_tags(); ?></li>
					<li><?php comments_popup_link();?></li>
					<li><?php edit_post_link(); ?></li>
				</ul>
			</div>
					
		</div>
	<?php endwhile; ?>            
	<!-- End -->
	
	</div>
	<?php get_sidebar(); ?>
	
</div>
	
<?php get_footer(); ?>
</body>
</html>