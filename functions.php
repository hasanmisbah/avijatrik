<?php
	/*
	# avijatrik magazine Theme
	# author @hasanmisbah
	# Domain avijatrik.com
	*/
	
	require('framework/core/theme-options.php'); // load theme options


	//Initialize the update checker.
	require('framework/updates/theme-update-checker.php'); // load theme update
	$example_update_checker = new ThemeUpdateChecker(
	'avijatrik',                                            //Theme folder name, AKA "slug". 
	'https://cdn.rawgit.com/hasanmisbah/avijatrik/master/framework/updates/info.json' //URL of the metadata file.
);

?>