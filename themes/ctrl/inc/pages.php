<?php


// CUSTOM PAGES //////////////////////////////////////////////////////////////////////


	add_action('init', function(){

		// PLANTA 1
		if( ! get_page_by_path('planta-productiva-1') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Planta Productiva 1',
				'post_name'   => 'planta-productiva-1',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		// PLANTA 2
		if( ! get_page_by_path('planta-productiva-2') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Planta Productiva 2',
				'post_name'   => 'planta-productiva-2',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		// Contacto Recibido
		if( ! get_page_by_path('contacto-recibido') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Contacto Recibido',
				'post_name'   => 'contacto-recibido',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}


	});
