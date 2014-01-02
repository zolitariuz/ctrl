<!doctype html>
	<head>
		<meta charset="utf-8">
		<title><?php print_title(); ?></title>
		<link rel="shortcut icon" href="<?php echo THEMEPATH; ?>images/favicon.ico">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="cleartype" content="on">
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<?php wp_head(); ?>
	</head>

	<body>
		<!--[if lt IE 9]>
			<p class="chromeframe">Estás usando una versión <strong>vieja</strong> de tu explorador. Por favor <a href="http://browsehappy.com/" target="_blank"> actualiza tu explorador</a> para tener una experiencia completa.</p>
		<![endif]-->
		<div class="container">

			<div class="seccion header">

				<div class="centrar">
					<h1>
						<a href="<?php echo home_url(); ?>">
							<img src="<?php echo THEMEPATH; ?>images/ctrl-logo.png" alt="Creative Ctrl" />
						</a>
					</h1>
				</div><!-- centrar -->

				<?php if ( ! is_page('contacto-recibido') ){ ?>

					<nav id="nav" class="menu width">
						<ul class="clearfix" >
							<li><a href="#servicios">Servicios</a></li>
							<li><a href="#clientes">Clientes</a></li>
							<li><a href="#planta">Planta</a></li>
							<li><a href="#nosotros">Nosotros</a></li>
							<li><a class="last" href="#contacto">Contacto</a></li>
						</ul>
					</nav>

				<?php }

				if ( is_page('contacto-recibido') ){ ?>

					<nav id="nav" class="menu width">
						<ul class="clearfix" >
							<li><a href="<?php echo home_url(); ?>#servicios">Servicios</a></li>
							<li><a href="<?php echo home_url(); ?>#clientes">Clientes</a></li>
							<li><a href="<?php echo home_url(); ?>#planta">Planta</a></li>
							<li><a href="<?php echo home_url(); ?>#nosotros">Nosotros</a></li>
							<li><a class="last" href="<?php echo home_url(); ?>#contacto">Contacto</a></li>
						</ul>
					</nav>

					<p class="contacto-recibido" ><em>Gracias por tu comentario, nos pondrémos en contacto contigo lo antes posible.</em></p>
				<?php } ?>

			</div><!-- header -->






