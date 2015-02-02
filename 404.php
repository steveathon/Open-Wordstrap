<?php 
	
	/**
	 * single.php
	 */


	get_header(); ?>
	
	<div class="row">
		<div class="col-sm-8 wsBlog-main">
			<div class='jumbotron'>
			<h1>404 not found</h1>
			<p>Sorry we couldn't find that page, so here's a kitten to make you feel better.</p>
			<img src='//placekitten.com/g/<?php echo rand(200,500); ?>/<?php echo rand(200,500); ?>' />
			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>
<?php 

	get_footer(); 
	?>