<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php
        if ( is_single() ) { single_post_title(); }
        elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); wsGetPageNumber(); }
        elseif ( is_page() ) { single_post_title(''); }
        elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); wsGetPageNumber(); }
        elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
        else { bloginfo('name'); wp_title('|'); wsGetPageNumber(); }
    ?></title>
    
 	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
	<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300' rel='stylesheet' type='text/css' />
	
</head>
	<body>
	<?php 
	if ( is_admin_bar_showing() ) {
		echo '<div class="WSBlogTitleHead">
			<div class="container">Admin Bar Placeholder</div>
			</div>'; 
	}?>
		<div class="WSBlogTitleHead">
			<div class="container">
				<?php 
				    wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'WSBlogNav',
				    					'items_wrap' => '<ul>%3$s</ul>') );
				?>
			</div>
		</div>
		<div class="container">
			<div class="WSMainHeader">
				<h1 class="WSBlockMainTitle"><?php  bloginfo('name'); ?></h1>
				<p class="lead WSMainDescription"><?php bloginfo('description'); ?></p>
			</div>