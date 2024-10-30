<?php

/**
 * Plugin Name: HSTS strict-preload
 * Plugin URI: https://webhotelsoversigt.dk/blog/hsts-wordpress-plugin/
 * Description: Adds HSTS preload and strict header
 * Version: 1.0.0
 * Author: Tim Petersson
 * Author URI: https://www.timpetersson.dk
 */

// Current site prefix
add_action( 'init', 'hsts_preload_strict', 1 );
function hsts_preload_strict(){
	if(isset($_SERVER['HTTPS'])) {
	    if ($_SERVER['HTTPS'] == "on") {
		    header("Strict-Transport-Security:max-age=63072000");
		    header( 'Strict-Transport-Security: max-age=63072000; includeSubDomains; preload' );
		}
	}
}
?>