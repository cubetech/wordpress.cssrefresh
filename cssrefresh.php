<?php
/*
Plugin Name: CSSrefresh
Plugin URI: http://www.cubetech.ch/products/cssrefresh
Description: A plugin, which refreshes the css of your site just in time you saved it
Version: 1.0.3
Author: cubetech GmbH, info@cubetech.ch
Author URI: http://www.cubetech.ch
License: GPL2
*/

?><?php

	wp_enqueue_script(
		'cssreload-script',
		plugins_url('/cssrefresh.js', __FILE__),
		array(),
		false,
		true
	);

?>
