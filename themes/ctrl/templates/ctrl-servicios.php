<div id="servicios" class="titulo servicios seccion">

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