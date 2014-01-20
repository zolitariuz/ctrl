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

	<a href="<?php echo site_url('portafolio/?seccion=imprenta'); ?>" class="cuarto left">
		Imprenta
	</a><!-- cuarto -->

	<a href="<?php echo site_url('portafolio/?seccion=diseno'); ?>" class="cuarto left">
		Diseño
	</a><!-- cuarto -->

	<a href="<?php echo site_url('portafolio/?seccion=web'); ?>" class="cuarto left">
		Web
	</a><!-- cuarto -->

	<a href="<?php echo site_url('portafolio/?seccion=mas'); ?>" class="cuarto left">
		Más
	</a><!-- cuarto -->


</div><!-- portafolio -->
