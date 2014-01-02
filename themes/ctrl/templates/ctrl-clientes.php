<div id="clientes" class="titulo clientes seccion">

	<h2>Clientes</h2>

</div><!-- servicios -->

<div class="seccion clientes width clearfix">

	<?php
		$count = 1;
		$clientes_args = array(
			'post_type' 	 => 'cliente',
			'posts_per_page' => -1,
			'order' 		 => 'ASC'
		);
		$clientes_query = new WP_Query($clientes_args);

		if( $clientes_query->have_posts() ) : while( $clientes_query->have_posts() ) : $clientes_query->the_post();

		if ( $count%4 == 1 ){ ?>
			<div class="clearfix">
		<?php } ?>

			<div class="cuarto left ancho-img">
				<?php the_post_thumbnail('full'); ?>

				<p><?php the_title(); ?></p>
			</div>
	<?php

		if ( $count%4 == 0 ){ echo '</div>'; }
		$count++;
		endwhile; endif;
		if ( $count%4 != 1 ){ echo '</div>'; }
	?>

</div><!-- clientes -->