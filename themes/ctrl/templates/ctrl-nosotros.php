<div id="nosotros" class="titulo nosotros seccion">

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
