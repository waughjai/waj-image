<?php

	function get_stylesheet_directory_uri()
	{
		return 'https://www.example.com/wp-content/themes/example';
	}

	function get_stylesheet_directory()
	{
		return getcwd();
	}

	function wp_upload_dir()
	{
		return
		[
			'path' => getcwd(),
			'url' => 'https://www.example.com/wp-content/uploads'
		];
	}