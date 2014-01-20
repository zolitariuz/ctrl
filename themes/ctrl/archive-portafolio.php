<?php
	get_header();

	$seccion = $_GET["seccion"];
	if ( $seccion == 'diseno' ){
		$seccion = 'Diseño';
	}
?>

	<div id="portafolio" class="titulo portafolio seccion" style="background-image: url('<?php echo $back_portafolio[0]; ?>'); " >

		<h2>Portafolio <?php echo $seccion; ?></h2>

	</div><!-- portafolio -->

	<div class="seccion width portafolio-in clearfix">

		<?php
			if ( $seccion == 'Diseño' ){
				$seccion = 'diseno';
			}
			$portafolio_args = array(
				'post_type' => 'portafolio',
				'category_name'  => $seccion
			);

			$portafolio_query = new WP_Query( $portafolio_args );

			if( $portafolio_query->have_posts() ) : while( $portafolio_query->have_posts() ) : $portafolio_query->the_post(); ?>

				<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
				<a rel="<?php echo $seccion.'-'.$post->post_name; ?>" href="<?php echo $url; ?>" class="cuarto left fancybox">
					<?php the_post_thumbnail(); ?>
				</a><!-- cuarto -->

				<div style="display: none;" >

					<?php
						$thumb_ID = get_post_thumbnail_id( $post->ID );

						$args = array(
							'post_type' => 'attachment',
							'posts_per_page' => -1,
							'post_status' => null,
							'post_parent' => $post->ID,
							'exclude' => $thumb_ID
						);
						$attachments = get_posts($args);
						if ($attachments) {
							foreach ($attachments as $attachment) {

								$imagen = wp_get_attachment_image_src($attachment->ID, 'full');

								?>

								<a rel="<?php echo $seccion.'-'.$post->post_name; ?>" href="<?php echo $imagen[0]; ?>" class="cuarto left fancybox">
									<img src="<?php echo $imagen[0]; ?>" alt="">
								</a><!-- cuarto -->
							<?php }
						}

					?>


				</div>

		<?php endwhile; endif; wp_reset_postdata(); ?>

	</div><!-- portafolio -->

<?php get_footer(); ?>