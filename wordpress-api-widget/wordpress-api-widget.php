<?php

/**
 * @link              http://ralphblackferguson.com
 * @since             0.0.1
 * @package           Wordpress_api_Widget
 *
 * @wordpress-plugin
 * Plugin Name:       Wordpress API Widget
 * Plugin URI:        http://ralphblackferguson.com
 * Description:       Fetches articles from the article API.
 * Version:           0.0.1
 * Author:            Ralph Ferguson
 * Author URI:        http://ralphblackferguson.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

 if ( ! defined( 'WPINC' ) ) {
 	die;
 }

 define( 'WORDPRESS_API_WIDGET__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
 define('WORDPRESS_API_WIDGET_URI', plugins_url('/Wordpress-api-Widget.php', __FILE__));


// The widget class
class Wordpress_api_Widget extends WP_Widget {

	// Main constructor
	public function __construct() {
	parent::__construct(
		'Wordpress_api_Widget',
		__( 'API Widget', 'text_domain' ),
		array(
			'customize_selective_refresh' => true,
		)
	);
}

	// The widget form (for the backend )
	public function form( $instance ) {
		/* ... */
	}

	// Update widget settings
	public function update( $new_instance, $old_instance ) {
		/* ... */
	}

	// Display the widget
	public function widget( $args, $instance ) {
		$articles = "";

    $url = "https://mysterious-meadow-98649.herokuapp.com/articles";
    $data = json_decode(file_get_contents($url), true);

        $json = json_encode($data);
        $queries = json_decode($json);

 foreach($queries as $query){
  $articles .= "<h2>";
  $articles .= $query->title;
  $articles .= "</h2> Article ID: ";
  $articles .= $query->id;
  $articles .= "<br />";
  $articles .= "";
  $articles .= $query->content;
  $articles .= "<br>";
 }





    echo $articles;
		}
}
// Register the widget
function my_register_custom_widget() {
	register_widget( 'Wordpress_api_Widget' );
}

add_action( 'widgets_init', 'my_register_custom_widget' );
