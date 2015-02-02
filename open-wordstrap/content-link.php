<?php 
	?>
	
  <div class="wsMiniLink">
			<div id="wsPost-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div>
					<h2 class="WSPosTitle"><?php the_title(); ?></h2>
					<?php the_content(); ?>
					<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i>' ) ) ?>
				</div>	                       
			</div>
	
	</div>