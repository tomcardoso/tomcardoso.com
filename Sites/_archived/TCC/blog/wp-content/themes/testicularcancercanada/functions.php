<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
    
    
    // Customize the "Read more" that appears after the excerpt on non-index pages
    function new_excerpt_more( $more ) {
	return '<br /><a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read more</a>';
	}
	add_filter('excerpt_more', 'new_excerpt_more');
    
    
	// Customize and style the comments
    function format_comment($comment, $args, $depth) {
    
       $GLOBALS['comment'] = $comment; ?>
       
        <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
                
            <div class="comment-intro">
                <span class="comment-author"><?php printf(__('%s'), get_comment_author_link()) ?></span>
                <span class="dot">&middot;</span>
                <a class="comment-permalink" href="<?php echo htmlspecialchars ( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s'), get_comment_date(), get_comment_time()) ?></a>
                <span class="dot">&middot;</span>
	            <?php if ($comment->comment_approved == '0') : ?>
	                <span class="moderation"><?php echo ('Your comment is awaiting moderation.') ?></span>
	            <?php endif; ?>

            </div>
            
            
            <?php comment_text(); ?>
                            
			<?php }