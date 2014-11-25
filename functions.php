<?php
	
	/* Add support to the system for the things we need in the theme. */
	add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array(
			'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'
	) );
	
	/* 
	 * Locale information.
	 */
	
	$wsCurLocale = get_locale();
	
	$wsCurTemplatePath = TEMPLATEPATH . "/languages/$wsCurLocale.php";
	
	if ( is_readable($wsCurTemplatePath) ) {
	    require_once($wsCurTemplatePath);
	}
	
	function wsGetPageNumber() {
	    if ( get_query_var('paged') ) {
	        print ' | ' . __( 'Page ') . get_query_var('paged');
	    }
	}
	
	/** 
	 * wsWidgetInit() 
	 * 
	 * This will register the menu items that you need for the 
	 * theme, including Footer, Header and Right Menu Blocks.
	 */
	
	function wsWidgetInit() {
		
	    register_sidebar( array (
			    'name' => 'Primary Menu Block',
			    'id' => 'wsprimarymenublock',
			    'before_widget' => '<li id="%1$s" class="list-unstyled %2$s">',
			    'after_widget' => "</li>",
			    'before_title' => '<h4>',
			    'after_title' => '</h4>',
	  ) );
	    
	    register_sidebar( array (
		    'name' => 'Secondary Menu Block',
		    'id' => 'wssecondaryblock',
		    'before_widget' => '<li id="%1$s" class="list-unstyled %2$s">',
		    'after_widget' => "</li>",
		    'before_title' => '<h4>',
		    'after_title' => '</h4>',
	  ) );
	    
		register_sidebar( array(
    			'name' => 'Homepage Right Menu',
    			'id' => 'wsmenuright',
			    'before_widget' => '<li id="%1$s" class="list-unstyled %2$s">',
			    'after_widget' => "</li>",
				'before_title' => '<h4>',
				'after_title' => '</h4>',
    	) );
		
		register_sidebar( array(
				'name' => 'Main Footer Menu',
				'id' => 'wsfootermenu',
				'before_widget' => '<div class="wsFooterMenu">',
				'after_widget' => '</div>',
				'before_title' => '<h4>',
				'after_title' => '</h4>',
		) );
		
	} 
	
	/* 
	 * Menu menu menu everywhere!
	 */
	
	function wsMenuInit() {
		register_nav_menu('header-menu',__( 'Header Menu' ));
		register_nav_menu('footer-menu',__( 'Footer Menu' ));
		wsWidgetInit();
	}
	
	/*
	 * Add the above action functions into the init. 
	 */
	
	add_action( 'init', 'wsMenuInit' );
	
	/**
	 * Get either a Gravatar URL or complete image tag for a specified email address.
	 *
	 * @param string $email The email address
	 * @param string $s Size in pixels, defaults to 80px [ 1 - 2048 ]
	 * @param string $d Default imageset to use [ 404 | mm | identicon | monsterid | wavatar ]
	 * @param string $r Maximum rating (inclusive) [ g | pg | r | x ]
	 * @param boole $img True to return a complete IMG tag False for just the URL
	 * @param array $atts Optional, additional key/value attributes to include in the IMG tag
	 * @return String containing either just a URL or a complete image tag
	 * @source http://gravatar.com/site/implement/images/php/
	 * 
	 * This code is added from the source above.
	 */
	
	function get_gravatar( $email, $s = 80, $d = 'mm', $r = 'g', $img = false, $atts = array() ) {
		$url = 'http://www.gravatar.com/avatar/';
		$url .= md5( strtolower( trim( $email ) ) );
		$url .= "?s=$s&d=$d&r=$r";
		if ( $img ) {
			$url = '<img src="' . $url . '"';
			foreach ( $atts as $key => $val )
				$url .= ' ' . $key . '="' . $val . '"';
			$url .= ' />';
		}
		return $url;
	}
	
	
	
	$presetWidgets = array (
	    'wsprimarymenublock'  => array( 'search', 'pages', 'categories', 'archives' ),
	    'wssecondaryblock'  => array( 'links', 'meta' )
	);
	
	
	if ( isset( $_GET['activated'] ) ) {
	    update_option( 'sidebars_widgets', $presetWidgets );
	}
	
	function wsSidebarActive( $index ){
	  global $wp_registered_sidebars;
	  $widgetcolums = wp_get_sidebars_widgets();
	  if ($widgetcolums[$index]) return true;
	    return false;
	}
	
?>