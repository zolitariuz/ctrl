<?php
	$back_nosotros_args = array(
		'post_type' => 'cover',
		'category_name'  => 'nosotros'
	);

	$back_nosotros_query = new WP_Query( $back_nosotros_args );

	if( $back_nosotros_query->have_posts() ) : while( $back_nosotros_query->have_posts() ) : $back_nosotros_query->the_post();

		$back_nosotros  = wp_get_attachment_image_src(  get_post_thumbnail_id( $post->ID ) , 'full' );

	endwhile; endif;
?>

<div id="nosotros" class="titulo nosotros seccion" style="background-image: url('<?php echo $back_nosotros[0]; ?>'); " >

	<h2>Nosotros</h2>

</div><!-- nosotros -->

<div class="seccion nosotros width clearfix">

	<?php
		$nosotros_args = array(
			'post_type' 	 => 'nosotros',
			'posts_per_page' => -1,
			'order' 		 => 'ASC'
		);
		$nosotros_query = new WP_Query($nosotros_args);

		if( $nosotros_query->have_posts() ) : while( $nosotros_query->have_posts() ) : $nosotros_query->the_post();
	?>

		<div class="tercio bullet left">

			<h3><?php the_title(); ?></h3>

			<p><?php the_content(); ?></p>

		</div><!-- tercio -->

	<?php endwhile; endif; ?>


</div><!-- nosotros -->
