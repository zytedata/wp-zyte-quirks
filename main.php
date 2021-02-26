<?php
/*
Plugin Name: Zyte Quirks
Plugin URI: https://github.com/zytedata/wordpress-zyte-quirks
Description: Plugin to extend wordpress to Zyte needs
*/

add_action(
	'after_setup_theme',
	function() {
		remove_all_actions("template_redirect", 1);
	}
);
