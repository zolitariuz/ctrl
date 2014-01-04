<?php


// CUSTOM POST TYPES /////////////////////////////////////////////////////////////////


	add_action('init', function(){


		// Clientes
		$labels = array(
			'name'          => 'Clientes',
			'singular_name' => 'Cliente',
			'add_new'       => 'Nueva Cliente',
			'add_new_item'  => 'Nueva Cliente',
			'edit_item'     => 'Editar Cliente',
			'new_item'      => 'Nueva Cliente',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver Cliente',
			'search_items'  => 'Buscar Cliente',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Clientes'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'clientes' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'cliente', $args );

		// Servicios
		$labels = array(
			'name'          => 'Servicios',
			'singular_name' => 'Servicio',
			'add_new'       => 'Nueva Servicio',
			'add_new_item'  => 'Nueva Servicio',
			'edit_item'     => 'Editar Servicio',
			'new_item'      => 'Nueva Servicio',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver Servicio',
			'search_items'  => 'Buscar Servicio',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Servicios'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'servicios' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'servicio', $args );

		// Nosotros
		$labels = array(
			'name'          => 'Nosotros',
			'singular_name' => 'Nosotros',
			'add_new'       => 'Nueva Nosotros',
			'add_new_item'  => 'Nueva Nosotros',
			'edit_item'     => 'Editar Nosotros',
			'new_item'      => 'Nueva Nosotros',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver Nosotros',
			'search_items'  => 'Buscar Nosotros',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Nosotros'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'nosotros' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'nosotros', $args );

		// Covers
		$labels = array(
			'name'          => 'Covers',
			'singular_name' => 'Cover',
			'add_new'       => 'Nueva Cover',
			'add_new_item'  => 'Nueva Cover',
			'edit_item'     => 'Editar Cover',
			'new_item'      => 'Nueva Cover',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver Cover',
			'search_items'  => 'Buscar Cover',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Covers'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'covers' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'cover', $args );

		// Portafolio
		$labels = array(
			'name'          => 'Portafolio',
			'singular_name' => 'Portafolio',
			'add_new'       => 'Nueva Portafolio',
			'add_new_item'  => 'Nueva Portafolio',
			'edit_item'     => 'Editar Portafolio',
			'new_item'      => 'Nueva Portafolio',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver Portafolio',
			'search_items'  => 'Buscar Portafolio',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Portafolio'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'portafolio' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'portafolio', $args );

	});