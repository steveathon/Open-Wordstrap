<?php

	/**
	 * search.php
	 * 
	 * Open-Wordstrap
	 * 
	 * This is a terrible implementation of the search.php and can be improved greatly.
	 * 
	 * However, it works. So, you know, here it is.
	 * 
	 */

	get_header();
	
	
	?>
	
	  <div class="row">
        <div class="col-sm-8 blog-main">
                <div class="jumbotron"><div class="container">
					<h2>
					<?php get_search_form(); ?></h2>
				
				<?php $categorydesc = category_description(); if ( !empty($categorydesc) ) echo apply_filters( 'archive_meta', '<p>' . $categorydesc . '</p>' ); ?>
				
					</div>
				</div>
				<?php rewind_posts(); ?>

				<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
				                <div id="nav-above" class="navigation">
				                    <div class="nav-previous"><?php next_posts_link() ?></div>
				                    <div class="nav-next"><?php previous_posts_link() ?></div>
				                </div><!-- #nav-above -->
				<?php } ?>            
				
	<?php
	while ( have_posts() ) : the_post(); ?>
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
		<?php
	endwhile;         

	?>
	
	
	</div>
 
<?php get_sidebar(); ?>
 </div>
	
	
	<?php 
	
	get_footer();