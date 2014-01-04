<?php
	$back_servicios_args = array(
		'post_type' => 'cover',
		'category_name'  => 'servicios'
	);

	$back_servicios_query = new WP_Query( $back_servicios_args );

	if( $back_servicios_query->have_posts() ) : while( $back_servicios_query->have_posts() ) : $back_servicios_query->the_post();

		$back_servicios  = wp_get_attachment_image_src(  get_post_thumbnail_id( $post->ID ) , 'full' );

	endwhile; endif;
?>

<div id="servicios" class="titulo servicios seccion" style="background-image: url('<?php echo $back_servicios[0]; ?>'); " >

	<h2>Nuestros servicios</h2>

</div><!-- servicios -->

<div class="seccion servicios width clearfix">

	<?php
		$servicios_args = array(
			'post_type' 	 => 'servicio',
			'posts_per_page' => -1,
			'order' 		 => 'ASC'
		);
		$servicios_query = new WP_Query($servicios_args);

		if( $servicios_query->have_posts() ) : while( $servicios_query->have_posts() ) : $servicios_query->the_post();
	?>

		<div class="cuarto bullet left">

			<?php the_post_thumbnail('full'); ?>

			<h3><?php the_title(); ?></h3>

			<?php the_content(); ?>

		</div><!-- cuarto -->

	<?php endwhile; endif; ?>


</div><!-- servicios -->