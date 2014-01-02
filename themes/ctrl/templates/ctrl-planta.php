<div id="planta" class="titulo planta seccion">

	<h2>Planta productiva</h2>

</div><!-- planta -->

<div class="seccion planta width clearfix">

	<div class="mitad left uno">

		<?php
			$planta_1_args = array(
				'post_type' => 'page',
				'pagename' => 'planta-productiva-1'
			);
			$planta_1_query = new WP_QUery($planta_1_args);
			if( $planta_1_query->have_posts() ) : while( $planta_1_query->have_posts() ) : $planta_1_query->the_post();

				the_content();

			endwhile; endif;
		?>

	</div><!-- uno -->

	<div class="mitad left dos">

		<?php
			$planta_1_args = array(
				'post_type' => 'page',
				'pagename' => 'planta-productiva-2'
			);
			$planta_1_query = new WP_QUery($planta_1_args);
			if( $planta_1_query->have_posts() ) : while( $planta_1_query->have_posts() ) : $planta_1_query->the_post();

				the_content();

			endwhile; endif;
		?>

	</div><!-- dos -->

</div><!-- planta -->