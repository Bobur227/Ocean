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




add_action('fluentform_before_insert_submission', function ($insertData, $data, $form) {

    if($form->id != 3) { // 23 is your form id. Change the 23 with your own login for ID
        return;
    }

    $redirectUrl = home_url(); // You can change the redirect url after successful login

    // if you have a field as refer_url as hidden field and value is: {http_referer} then
    // We can use that as a redirect URL. We will redirect if it's the same domain
    // If you want to redirect to a fixed URL then remove the next 3 lines
    if(!empty($data['refer_url']) && strpos($data['refer_url'], site_url()) !== false) {
        $redirectUrl = $data['refer_url'];
    }

    if (get_current_user_id()) { // user already registered
        wp_send_json_success([
            'result' => [
                'redirectUrl' => $redirectUrl,
                'message' => 'Your are already logged in. Redirecting now...'
            ]
        ]);
    }

    $email = \FluentForm\Framework\Helpers\ArrayHelper::get($data, 'email'); // your form should have email field
    $password = \FluentForm\Framework\Helpers\ArrayHelper::get($data, 'password'); // your form should have password field

    if(!$email || !$password) {
        wp_send_json_error([
            'errors' => ['Please provide email and password']
        ], 423);
    }

    $user = get_user_by_email($email);
    if($user && wp_check_password($password, $user->user_pass, $user->ID)) {
        wp_clear_auth_cookie();
        wp_set_current_user($user->ID);
        wp_set_auth_cookie($user->ID);
        /* user is not logged in.
        * If you use wp_send_json_success the the submission will not be recorded
        * If you remove the wp_send_json_success then it will record the data in fluentform
        * in that case you should redirect the user on form submission settings
        */
        wp_send_json_success([
            'result' => [
                'redirectUrl' => $redirectUrl,
                'message' => 'Your are logged in, Please wait while you are redirecting'
            ]
        ]);
    } else {
        // password or user don't match
        wp_send_json_error([
            'errors' => ['Email / password is not correct']
        ], 423);
    }
}, 10, 3);
