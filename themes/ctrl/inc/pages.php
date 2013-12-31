<?php


// CUSTOM PAGES //////////////////////////////////////////////////////////////////////


	add_action('init', function(){

		// PLANTA
		if( ! get_page_by_path('planta-productiva') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Planta Productiva',
				'post_name'   => 'planta-productiva',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}


	});
