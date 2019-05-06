<?php

/**
 * @link              http://ralphblackferguson.com
 * @since             0.0.1
 * @package           Wordpress-api-plugin
 *
 * @wordpress-plugin
 * Plugin Name:       Wordpress API Plugin
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

 define( 'WORDPRESS_API_PLUGIN__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
 define('WORDPRESS_API_PLUGIN_URI', plugins_url('/wordpress-api-plugin.php', __FILE__));

 function wordpress_api_plugin() {
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





   return $articles;
 }

 add_shortcode('articles-api', 'wordpress_api_plugin')
?>
