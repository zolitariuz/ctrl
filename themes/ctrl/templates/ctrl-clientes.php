<div id="clientes" class="titulo clientes seccion">

	<h2>Clientes</h2>

</div><!-- servicios -->

<div class="clientes seccion width clearfix">

	<?php
		$count = 1;
		$clientes_args = array(
			'post_type' 	 => 'cliente',
			'posts_per_page' => -1,
			'order' 		 => 'ASC'
		);
		$clientes_query = new WP_Query($clientes_args);

		if( $clientes_query->have_posts() ) : while( $clientes_query->have_posts() ) : $clientes_query->the_post();
	?>

		<div class="quinto left ancho-img">
			<?php the_post_thumbnail('full'); ?>

			<p><?php the_title(); ?></p>
		</div>

	<?php

		$count++; endwhile; endif;
	?>

</div><!-- clientes -->