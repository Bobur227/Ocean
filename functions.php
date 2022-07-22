<?php
	add_action( 'wp_enqueue_scripts', function() {
		
		wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
		wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css');
		wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css');

		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js' );

		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), 'null', true);
		wp_enqueue_script( 'mainv', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'null', true);

	});

	add_theme_support('post-thumbnails'); 
	add_theme_support('title-tag'); 
	add_theme_support('custom-logo');


	add_filter( 'upload_mimes', 'svg_upload_allow' );

	function svg_upload_allow( $mimes ) {
		$mimes['svg']  = 'image/svg+xml';
	
		return $mimes;
	}


	function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

		// WP 5.1 +
		if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) )
			$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
		else
			$dosvg = ( '.svg' === strtolower( substr($filename, -4) ) );

		// mime тип был обнулен, поправим его
		// а также проверим право пользователя
		if( $dosvg ){

			// разрешим
			if( current_user_can('manage_options') ){

				$data['ext']  = 'svg';
				$data['type'] = 'image/svg+xml';
			}
			// запретим
			else {
				$data['ext'] = $type_and_ext['type'] = false;
			}

		}

		return $data;
	}