<?php

	$nombre = $mail = $asunto = $mensaje = '';

	$nombre = ( isset($_POST['nombre']) ) ? $_POST['nombre'] : '' ;
	$email = ( isset($_POST['email']) ) ? $_POST['email'] : '' ;
	$asunto = ( isset($_POST['asunto']) ) ? $_POST['asunto'] : '' ;
	$mensaje = ( isset($_POST['mensaje']) ) ? $_POST['mensaje'] : '' ;


	$mail_to = 'raul@zamacona.me';
	$subject = 'Contacto web '.$nombre;

	$body_message = 'Nombre: '.$nombre."\n";
	$body_message .= 'Email: '.$email."\n";
	$body_message .= 'Asunto: '.$asunto."\n";
	$body_message .= 'Mensaje: '.$mensaje;

	$headers = 'From: '.$email."\r\n";
	$headers .= 'Reply-To: '.$email."\r\n";

	$mail_status = mail($mail_to, $subject, $body_message, $headers);

	get_header();