<?php
	$back_portafolio_args = array(
		'post_type' => 'cover',
		'category_name'  => 'portafolio'
	);

	$back_portafolio_query = new WP_Query( $back_portafolio_args );

	if( $back_portafolio_query->have_posts() ) : while( $back_portafolio_query->have_posts() ) : $back_portafolio_query->the_post();

		$back_portafolio  = wp_get_attachment_image_src(  get_post_thumbnail_id( $post->ID ) , 'full' );

	endwhile; endif;
?>

<div id="portafolio" class="titulo portafolio seccion" style="background-image: url('<?php echo $back_portafolio[0]; ?>'); " >

	<h2>Portafolio</h2>

</div><!-- portafolio -->

<div class="seccion portafolio width clearfix">

	<div class="cycle-slideshow"
		data-cycle-fx="scrollHorz"
		data-cycle-swipe="true"
	>

		<?php
		$portafolio_args = array(
			'post_type' 	 => 'portafolio',
			'posts_per_page' => -1,
			'order' 		 => 'ASC'
		);
		$portafolio_query = new WP_Query($portafolio_args);

		if( $portafolio_query->have_posts() ) : while( $portafolio_query->have_posts() ) : $portafolio_query->the_post();

			the_post_thumbnail( 'portafolio' );

		endwhile; endif; ?>

		<div class="cycle-pager"></div>

	</div><!-- cycle-slideshow -->


</div><!-- portafolio -->
