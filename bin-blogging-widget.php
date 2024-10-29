<?php
/*
Plugin Name: Before It's News&reg;: Blogging/Citizen Journalism Widget
Plugin URI: http://www.beforeitsnews.com/widgets
Description: Your widget will update every time our site does. A new story is added virtually every minute! Stay up to date and keep your viewers up to date. The widget loads fast and won't bog down your page-load time.
Version: 0.2
Author: Justin Dawson
Author URI: http://justindawson.com
*/

/* Add the widget using widgets_init */
add_action( 'widgets_init', 'bin_load_blogging_widgets' );

/* Register the widget */
function bin_load_blogging_widgets() {
	register_widget( 'Blogging_Widget' );
} /* End registration of the widget */

/* Blogging_Widget class */
class Blogging_Widget extends WP_Widget {

	/* Widget setup */
	function Blogging_Widget() {
	
		/* Widget settings */
		$widget_ops = array( 'classname' => 'blogging', 'description' => __( 'Your widget will update every time our site does. A new story is added virtually every minute! Stay up to date and keep your viewers up to date. The widget loads fast and won\'t bog down your page-load time.', 'blogging' ) );
		
		/* Create the widget */
		$this->WP_Widget( 'blogging-widget', __( 'Before It\'s News&reg;: Blogging/Citizen Journalism', 'blogging' ), $widget_ops );

	} /* End Widget Setup */
	
	/* Display the widget once activated */
	function widget( $args ) {
		extract( $args );
		
		/* Before widget */
		echo $before_widget;
		
		/* During widget */
		echo '<a class="b4in-widget" href="http://beforeitsnews.com/widget/0000000000000172">Before It\'s News | People Powered News</a><script type="text/javascript" src="http://beforeitsnews.com/widgets/js/widget.js"></script>';
		
		/* After widget */
		echo $after_widget;
		
	}/* Stop Displaying the Widget */

} /* End Blogging_Widget Class */

?>